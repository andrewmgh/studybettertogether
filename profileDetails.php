<?php require_once 'includes/header.php';
if ($_SERVER['REQUEST_METHOD']== "POST") //only runs the below php code if the login form was submitted.
{
	//Create new user password
	if (isset ($_POST ['changePassword'])){  //only runs the below php code if the login form was submitted
	
		//Declare and initialise variables to solve any posible undefined variable errors
		$newPassword = $confirmPassword = $PwdMsg ="";
		$PasswordValid = false;
		
		//Take inputs from new password form, clean with cleanSQLinput function and store in variables
		$newPassword = cleanSQLinput($db_con, $_POST['newPassword']);
		$confirmPassword = cleanSQLinput($db_con, $_POST['confirmPassword']);
	
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
			$encryptedNewPwd = sha1("$Salt1$newPassword$Salt2");
			$InsertNewPwd = newQuery($db_con, "UPDATE `users` SET `password` = '".$encryptedNewPwd."' WHERE  `username` = '$username'");
			$PwdMsg = '<p>You have successfully changed your password.</p>';
			//mysqli_free_result($InsertNewPwd);
		}
	}
}
?>

<h2 class = "mainPageHeading">Change my Password</h2>
<div class ="inline_form">
	<div class="main_form">
				<?php print isset($PwdMsg) ? '<div class = "hiddenField">' . $PwdMsg . '</div>': ""; ?>
				<form name="updateuserpassword" action="profileDetails.php" method="POST">
						<p>
						<label for="newPassword">New Password: </label> 
						<input type="password" id="newPassword" name="newPassword" autofocus/>
						</p>				
						<p>
						<label for="confirmPassword">Confirm Password: </label> 
						<input type="password" id="confirmPassword" name="confirmPassword" />
						</p>	
						<div class = "submit">
						<input type="submit" name ="changePassword" value="Confirm" />
						</div>
					</form>
	</div>				
</div>	
			
<?php require_once 'includes/footer.php';?>


