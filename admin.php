<?php require_once 'includes/header.php';

if ($account_type != 'Admin') {
	header ( "location: profile.php" );
}

//Create new registration code
if (isset ($_POST ['changeRegCode'])){  //only runs the below php code if the login form was submitted

	//Declare and initialise variables to solve any posible undefined variable errors
		$newRegCode = $ConfirmRegCode = "";
		$RegCodeValid = false;
		
	//Take inputs from changeRegCode form, clean with cleanSQLinput function and store in variables
		$newRegCode = cleanSQLinput($db_con, $_POST['NewRegCode']);
		$ConfirmRegCode = cleanSQLinput($db_con, $_POST['ConfirmRegCode']);
	
	// Validate Registration Code
		if($newRegCode == "" || $ConfirmRegCode == ""){
			$regMsg = "<p>Please enter a new registration code.</p>";
		}
		elseif ($newRegCode != $ConfirmRegCode){
			$regMsg = "<p>The registration codes do not match.</p>";
		}
		else {
			$RegCodeValid = true;
		}	
	//if the registration code is valid insert it into the database using the newQuery function.
	if($RegCodeValid)
		{	
			$encryptedRegCode = sha1("$Salt1$newRegCode$Salt2");
			$InsertRegCode = newQuery($db_con, "UPDATE `users` SET `register_code` = '".$encryptedRegCode."' WHERE  `account_type` = 'Admin'");
			$regMsg = '<p>The registration code has been successfully changed.</p>';
		}

}

//Create new user password
if (isset ($_POST ['changeStudentPassword'])){  //only runs the below php code if the login form was submitted

	//Declare and initialise variables to solve any posible undefined variable errors
	$userID = $newPassword = $confirmPassword = "";
	$PasswordValid = false;
	$userIDValid = false;
	$PwdMsg = "";

	//Take inputs from new password form, clean with cleanSQLinput function and store in variables
	$userID = cleanSQLinput($db_con, $_POST['userID']);
	$newPassword = cleanSQLinput($db_con, $_POST['newPassword']);
	$confirmPassword = cleanSQLinput($db_con, $_POST['confirmPassword']);


	//Ensure that user ID entered is a valid user ID
	if(mysqli_num_rows($result = newQuery($db_con, "Select * from users where user_id = '".$userID."'")) != 1){
		$PwdMsg = "<p>Please enter a valid User ID</p> <br />";
		mysqli_free_result($result);
	}
	elseif($userID ==1){
		$PwdMsg = "<p>You cannot change the admin password here</p> <br />";
	}
	else {
		$userIDValid = true;
	}

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
	if($PasswordValid && $userIDValid)
	{
		$encryptedNewPwd = sha1("$Salt1$newPassword$Salt2");
		$InsertNewPwd = newQuery($db_con, "UPDATE `users` SET `password` = '".$encryptedNewPwd."' WHERE  `user_id` = '$userID'");
		$PwdMsg = '<p>This Users password has been successfully changed.</p>';
		//mysqli_free_result($InsertNewPwd);
	}
}

?>
	<h2 class = "mainPageHeading">Admin Section</h2>
	

	<h4>Change Registration Code</h4>

	<div class ="inline_form">
	<div class="main_form">
				<?php print isset($regMsg) ? '<div class = "hiddenField">' . $regMsg . '</div>': ""; ?>
				<form name="changeRegCode" action="admin.php" method="POST">
					<p>
					<label for="NewRegCode">New Registration Code: </label> 
					<input type="password" id="NewRegCode" name="NewRegCode" />
					</p>				
					<p>
					<label for="ConfirmRegCode">Confirm Registration Code: </label> 
					<input type="password" id="ConfirmRegCode" name="ConfirmRegCode" />
					</p>	
						<div class = "submit">
						<input type="submit" name ="changeRegCode" value="Confirm" />
						</div>
					</form>
	</div>				
</div>
	
<h2>&nbsp;</h2>

<h4>Change Student Password</h4>
<div class ="inline_form">
	<div class="main_form">
				<?php print isset($PwdMsg) ? '<div class = "hiddenField">' . $PwdMsg . '</div>': ""; ?>
				<form name="changeStudentPassword" id="changeStudentPassword" action="admin.php" method="POST">
					<p>
					<label for="userID">User Id: </label> 
					<input type="text" id="userID" name="userID" value ="<?php print isset($userID) ? $userID : ""; ?>" />
					</p>						<p>
					<label for="newPassword">New Password: </label> 
					<input type="password" id="newPassword" name="newPassword" />
					</p>				
					<p>
					<label for="confirmPassword">Confirm Password: </label> 
					<input type="password" id="confirmPassword" name="confirmPassword" />
					</p>	
					
					<div class = "submit">
						<input type="submit" name ="changeStudentPassword" value="Confirm" />
					</div>
					</form>
	</div>				
</div>	
			
<?php require_once 'includes/footer.php';?>


