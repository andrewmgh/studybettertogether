<?php
if(($_SERVER['PHP_SELF']) != "/studybettertogether/includes/functionality/changeUserPassword.php"){
	
	if ($_SERVER['REQUEST_METHOD']== "POST") //only runs the below php code if the login form was submitted.
	{
		//Create new user password
		if (isset ($_POST ['changePassword'])){  //only runs the below php code if the login form was submitted
	
			//Declare and initialise variables to solve any posible undefined variable errors
			$newPassword = $confirmPassword = $PwdMsg ="";
			$PasswordValid = false;
	
			//Take inputs from new password form, clean with sanitiseInput function and store in variables
			$newPassword = sanitiseInput($db_con, $_POST['password']);
			$confirmPassword = sanitiseInput($db_con, $_POST['password_confirm']);
	
			// Validate Password
			if($newPassword == "" || $confirmPassword == ""){
				$PwdMsg .= "<p>Please enter a new password.</p>";
			}
			elseif ($newPassword != $confirmPassword){
				$PwdMsg .= "<p>The passwords do not match.</p>";
			}
			else {
				$PasswordValid = true;
			}
	
			//if the password and the user ID are valid insert the new password into the database using the newQuery function.
			if($PasswordValid)
			{
				//encrypt password using encryptPwd function
				$newPassword = encryptPwd($newPassword);
				$InsertNewPwd = newQuery($db_con, "UPDATE `users` SET `password` = '".$newPassword."' WHERE  `username` = '$username'");
				$PwdMsg = '<p>You have successfully changed your password.</p>';
					
			}
		}
	}
}
else {
	require_once 'protectfiles.php';
}

?>