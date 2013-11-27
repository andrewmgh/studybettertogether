<?php
//if the page is not register.php than redirect users to register.php. This stops people navigating directly to this page by typing in the URL - ie "/studybettertogether1/includes/validate_login.php".
if(($_SERVER['PHP_SELF']) == "/studybettertogether/register.php"){
	

if ($_SERVER['REQUEST_METHOD']== "POST") //only runs the below php code if the login form was submitted
{
	if (isset ($_POST ['register'])){ //if the login has been submitted do this....
	
		//Declare and initialise variables to solve any posible undefined variable errors
		$firstname = $lastname = $email = $username = $password = $password_confirm = $register_code = $username_taken = "";
		$firstnameValid = $lastnameValid = $emailValid = $usernameValid = $passwordValid = $RegCodeValid = false;
		$loginMsg = "<p>The following errors have been found in your registration</p>";
		
		
		//Take inputs from registration form, clean with cleanSQLinput function and store in variables
		$firstname = cleanSQLinput($db_con, $_POST ['firstname']);
		$lastname = cleanSQLinput($db_con, $_POST ['lastname']);
		$email = cleanSQLinput($db_con, $_POST ['email']);
		$username = cleanSQLinput($db_con, $_POST ['username']);
		$password = cleanSQLinput($db_con, $_POST ['password']);
		$password_confirm = cleanSQLinput($db_con, $_POST ['password_confirm']);
		$register_code = cleanSQLinput($db_con, $_POST ['register_code']);
	
			
		//checks whether username is unique and stores boolean true value in a variable if so
		$result_username = newQuery($db_con, "SELECT user_id FROM users WHERE username = '".$username."'");
		if (mysqli_num_rows ( $result_username ) >= 1) {
			$username_taken = true;
		}
		mysqli_free_result($result_username);
		
		
		//Retrieves Registration Code from DB and stores in variable '$regcode_from_db'
		$result_regCode = newQuery($db_con, "SELECT register_code FROM users WHERE user_id ='1'");
		if ($row = mysqli_fetch_array($result_regCode)) {
			$regcode_from_db = $row['register_code'];
		}
		mysqli_free_result($result_regCode);
				
		//If statements to validate input
		
				// Validate first name
				if($firstname == ""){
					$loginMsg .= "You have not entered a first name <br />";
				}
				else {
					$firstnameValid = true;
				}
				
				// Validate last name
				if($lastname == ""){
					$loginMsg .= "You have not entered a last name <br />";
				}
				else {
					$lastnameValid = true;
				}		
				
				// Validate email using the string position function to identify if a . or @ is present in the email
				if (!((strpos($email, ".") > 0) && (strpos($email, "@") >0))){
					$loginMsg .= "You have not entered a suitable email address <br />";
				}
				else {
					$emailValid = true;
				}		
				
				// Validate username
				if($username == ""){
					$loginMsg .= "You have not entered a suitable username <br />";
				}	
				elseif ($username_taken) {
					$loginMsg .= "That username is already taken, please choose another username. <br />";
				}		
				else {
					$usernameValid = true;
				}	
				
				// Validate password
				if($password == "" || $password_confirm == ""){
					$loginMsg .= "You have not entered a suitable password <br />";
				}
				elseif ($password != $password_confirm){
					$loginMsg .= "The passwords do not match <br />";
				}		
				else {
					$passwordValid = true;
				}	
				
				// Validate register code
				$encrypted_register_code = sha1("$Salt1$register_code$Salt2");
				if( ! ($encrypted_register_code == $regcode_from_db)){
					$loginMsg .= "You have not entered a valid registration code <br />";
				}
				else {
					$RegCodeValid = true;
				}	
		
				//if all input is valiated, insert input into database using the newQuery function. Then start session and output login success message.
		if ($firstnameValid && $lastnameValid && $emailValid && $usernameValid && $passwordValid && $RegCodeValid)
		{	
			$encrypted_password = sha1("$Salt1$password$Salt2");
		
			$NewUser = newQuery($db_con, "INSERT INTO users (`first_name`, `last_name`, `username`, `email`, `password`) VALUES ('" . $firstname . "','" . $lastname . "','" . $username . "','" . $email . "','" . $encrypted_password . "')");	
			session_start ();
			$_SESSION ['username'] = $username;	
			$_SESSION ['firstname'] = $firstname;
			$loginMsg = '<p>Hi ' .$firstname. '. Your login was successful. Please click <a href = "profile.php">Here</a> to Login</p>';
			
			mysqli_close($db_con);
		}	

			
	}
}
}

else {
	header ( "location:/studybettertogether/register.php" );
	exit ();
}

?> 



