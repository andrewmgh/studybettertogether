<?php
//only runs the below php code requested by a POST method. This is a security measure to stop people navigating directly to this URL
if ($_SERVER['REQUEST_METHOD']== "POST") 
{
		require_once '../db/sql_functions.php';
		require_once 'common_functions.php';

		//Take inputs from registration form, clean with sanatiseInput function and store in variables
		$firstName = sanatiseInput($db_con, $_POST ['firstname']);
		$lastName = sanatiseInput($db_con, $_POST ['lastname']);
		$email = sanatiseInput($db_con, $_POST ['email']);
		$userName = sanatiseInput($db_con, $_POST ['username']);
		$password = sanatiseInput($db_con, $_POST ['password']);
		$password_confirm = sanatiseInput($db_con, $_POST ['password_confirm']);
		$register_code = sanatiseInput($db_con, $_POST ['register_code']);
				
		//Validate the registration based on the validation functions below. Either append the error message or a blank string "" to the variable $regError
		$regError = validateFirstName($firstName);
		$regError .= validateLastName($lastName);
		$regError .= validateEmail($email);
		$regError .= validateUsername($db_con,$userName);
		$regError .= validatePassword($password, $password_confirm);
		$regError .= validateRegCode($db_con,$register_code);
			
		//if all input is validated, encrypt the password, insert input into database, start session and redirect the user to the profile.php page.
		//If input is not validated, redirect the user back to the registration page along with the appropriate error messages
		if ($regError=="")
		{	
			$password = encryptPwd($password);

			$NewUser = newQuery($db_con, "INSERT INTO users (`first_name`, `last_name`, `username`, `email`, `password`) VALUES ('" . $firstName . "','" . $lastName . "','" . $userName . "','" . $email . "','" . $password . "')");	
			
			session_start ();
			$_SESSION ['username'] = $userName;	
						
			mysqli_close($db_con);
			header('Location:../../profile.php');
			exit();
		}
		else {
			header("Location:../../register.php?Error=$regError");
			exit();
		}
}
else {
	header('Location:http://localhost/studybettertogether/');
	exit();
}		


		//Registration Form Validation Functions
		function validateFirstName($firstName){
			if($firstName == ""){
				return "You have not entered a first name <br />";
			}
			else {
				return "";
			}
		}
		
		function validateLastName($lastName){
			if($lastName == ""){
				return "You have not entered a last name <br />";
			}
			else {
				return "";
			}
		}
		
		function validateEmail($email){
			if (!((strpos($email, ".") > 0) && (strpos($email, "@") >0))){
				return "You have not entered a suitable email address <br />";
			}
			else {
				return "";
			}
		}
		
		function validateUsername($db_con,$userName){
					//checks whether username is unique and stores boolean true value in a variable '$username_taken' if so
					$result_username = newQuery($db_con, "SELECT user_id FROM users WHERE username = '".$userName."'");
					if (mysqli_num_rows ( $result_username ) >= 1) {
						$username_taken = true;
					}
					mysqli_free_result($result_username);
		
			if($userName == ""){
				return "You have not entered a suitable username <br />";
			}
			elseif ($username_taken) {
				return "That username is already taken, please choose another username. <br />";
			}
			else {
				return "";
			}
		}
		
		function validatePassword($password,$password_confirm){
			if($password == "" || $password_confirm == ""){
				return "You have not entered a suitable password <br />";
			}
			elseif ($password != $password_confirm){
				return "The passwords do not match <br />";
			}
			else {
				return "";
			}
		}
		
		function validateRegCode($db_con,$regCode){
					//Retrieves Registration Code from DB and stores in variable '$regcode_from_db'
					$result_regCode = newQuery($db_con, "SELECT register_code FROM users WHERE user_id ='1'");
					if ($row = mysqli_fetch_array($result_regCode)) {
						$regcode_from_db = $row['register_code'];
					}
					mysqli_free_result($result_regCode);
		
			$regCode = encryptPwd($regCode);
			if( ! ($regCode == $regcode_from_db)){
				return "You have not entered a valid registration code <br />";
			}
			else {
				return "";
			}
		}
?> 



