<?php
	
//Create new registration code
if (isset ($_POST ['changeRegCode'])){  //only runs the below php code if the login form was submitted

	//Declare and initialise variables to solve any posible undefined variable errors
	$newRegCode = $ConfirmRegCode = "";
	$RegCodeValid = false;

	//Take inputs from changeRegCode form, clean with sanatiseInput function and store in variables
	$newRegCode = sanatiseInput($db_con, $_POST['NewRegCode']);
	$ConfirmRegCode = sanatiseInput($db_con, $_POST['ConfirmRegCode']);

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
		//encrypt password using encryptPwd function
		$newRegCode = encryptPwd($newRegCode);
		$newRegCode = newQuery($db_con, "UPDATE `users` SET `register_code` = '".$newRegCode."' WHERE  `account_type` = 'Admin'");
		$regMsg = '<p>The registration code has been successfully changed.</p>';
	}

}

?>