<?php
//only runs the below php code if requested by a POST method. This is a security measure to stop people navigating directly to this URL
if ($_SERVER['REQUEST_METHOD']== "POST") 
{
		require_once '../db/sql_functions.php';
		require_once 'common_functions.php';

		validateRegistrationForm ($db_con, $_POST ['firstname'], $_POST ['lastname'], $_POST ['email'], $_POST ['username'], $_POST ['password'], $_POST ['password_confirm'], $_POST ['classname'], $_POST ['register_code']);
	
}
else {
	require_once 'protectfiles.php';
}		


		//Overall Registration Function
		function validateRegistrationForm ($db_con, $firstName, $lastName, $email, $userName, $password, $password_confirm, $classname, $register_code){
			
			//Take inputs from registration form, clean with sanitiseInput function and store in variables
			$firstName = sanitiseInput($db_con, $firstName);
			$lastName = sanitiseInput($db_con, $lastName);
			$email = sanitiseInput($db_con, $email);
			$userName = sanitiseInput($db_con, $userName);
			$password = sanitiseInput($db_con, $password);
			$password_confirm = sanitiseInput($db_con, $password_confirm);
			$classname = sanitiseInput($db_con, $classname);
			$register_code = sanitiseInput($db_con, $register_code);
			$userName = strtolower($userName);
			
			//Validate the registration based on the validation functions below. Either append the error message or a blank string "" to the variable $regError
			$regError = validateFirstName($firstName);
			$regError .= validateLastName($lastName);
			$regError .= validateEmail($email);
			$regError .= validateUsername($db_con,$userName);
			$regError .= validatePassword($password, $password_confirm);
			$regError .= validateRegCode($db_con,$classname,$register_code);
				
			//if all input is validated, encrypt the password, insert input into database, start session and redirect the user to the profile.php page.
			//If input is not validated, redirect the user back to the registration page along with the appropriate error messages
			if ($regError=="")
			{
				//retrieve classID based on classname
				$result_classID = newQuery($db_con, "SELECT class_id FROM classes WHERE class_name ='".$classname."'");
					if ($row = mysqli_fetch_array($result_classID)) {
						$class_id = $row['class_id'];
					}
					mysqli_free_result($result_classID);
						
				$Newpassword = encryptPwd($password);
				
				//start db transaction to enter a new user
				mysqli_autocommit($db_con, false);
				$success = true;
				
				$NewUserQuery1 = newQuery($db_con, "INSERT INTO users (`class_assigned_to`,`first_name`, `last_name`, `username`, `email`, `password`) VALUES ('" . $class_id . "','" . $firstName . "','" . $lastName . "','" . $userName . "','" . $email . "','" . $Newpassword . "')");
				$user_id = mysqli_insert_id($db_con);
				$regDate = date("Y-m-d H:i:s");
				
				if (!$NewUserQuery1) {$success = false; }
				
				$NewUserQuery2 = newQuery($db_con, "INSERT INTO `forum_userdata`(`user_id`, `user_name`, `user_real_name`, `user_pw`, `user_email`, `registered`) VALUES ('" . $user_id . "','" . $userName . "','" . $firstName . "','" . $Newpassword . "','" . $email . "','" . $regDate . "')");
				if (!$NewUserQuery2) {$success = false; }
				
				//if db transaction worked, complete transaction, close db connection, start session and redirect user into the application
				if ($success) {
					mysqli_commit($db_con);
					mysqli_close ($db_con);
				
					session_start ();
					$_SESSION ['username'] = $userName;
					header('Location:../../home.php');
					exit();
				}
				else {
					mysqli_close ($db_con);
					$DataError = "Unfortunately there was an unforseen error with your registration. Please try again.";
					header("Location:../../register.php?Error=$DataError");
					exit();
				}
			}
			else {
				header("Location:../../register.php?Error=$regError&Fname=$firstName&Lname=$lastName&email=$email&Uname=$userName&pwd=$password&Cname=$classname&reg=$register_code");
				exit();
			}	
			
		}


		//Individual Registration Form Validation Functions
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
			else{
				$username_taken = false;
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
		
		function validateRegCode($db_con,$classname,$register_code){
					//Retrieves Registration Code from DB and stores in variable '$regcode_from_db'
					$result_regCode = newQuery($db_con, "SELECT register_code FROM classes WHERE class_name ='".$classname."'");
					if ($row = mysqli_fetch_array($result_regCode)) {
						$regcode_from_db = $row['register_code'];
					}
					mysqli_free_result($result_regCode);
		
			$regCode = encryptPwd($register_code);
			if( ! ($regCode == $regcode_from_db)){
				return "You have not entered a valid registration code for this class<br />";
			}
			else {
				return "";
			}
		}
?> 



