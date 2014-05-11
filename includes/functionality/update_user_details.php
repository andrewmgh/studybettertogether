<?php

//If the update form has been posted then update the user details
if (isset($_POST ['updateUserDetails'])){
	require_once '../db/sql_functions.php';
	require_once 'common_functions.php';
	require_once 'sessionManagement.php';
	updateUserDetails($db_con, $_POST ['user_id'], $_POST ['fname'], $_POST ['lname'], $_POST ['username'], $_POST ['email'], $_POST ['password'], $_POST ['class']);
}

else {
	require_once 'protectfiles.php';
}


//Function to update user details
function updateUserDetails($db_con, $user_id, $fname, $lname, $username, $email, $password, $className)
{
	//Take inputs from form, clean with sanitiseInput function and store in variables
	$user_id = sanitiseInput($db_con, $user_id);
	$fname = sanitiseInput($db_con, $fname);
	$lname = sanitiseInput($db_con, $lname);
	$username = sanitiseInput($db_con, $username);
	$email = sanitiseInput($db_con, $email);
	$password = sanitiseInput($db_con, $password);
	$className = sanitiseInput($db_con, $className);

	//Select class id based on class name
	$result_classID = newQuery($db_con, "SELECT class_id FROM classes WHERE class_name =\"$className\"");
	if ($row = mysqli_fetch_array($result_classID)) {
		$classID = $row['class_id'];
	}
	mysqli_free_result($result_classID);


	//If any of the variables (apart from password) have not been entered then send an error message back to the user
	if(!($fname && $lname && $username && $email && $className)){
		header("Location:../../editusers.php?editUser=$user_id&Msg=Please ensure you have filled in the required fields");
		exit();
	}
	//If the required variables have been entered and depending on whether the password was filled in or not- update the user details and report a success message back to the user
	else {
		if($password){
			$newPwd = encryptPwd($password);
			$updateUser = newQuery($db_con, "UPDATE `users` SET `class_assigned_to` = \"$classID\", `first_name` = \"$fname\", `last_name` = \"$lname\", `username` = \"$username\", `email` = \"$email\", `password` = \"$newPwd\" WHERE `user_id` = \"$user_id\"");
			$updateUser2 = newQuery($db_con, "UPDATE `forum_userdata` SET `user_name` = \"$username\", `user_real_name` = \"$fname\", `user_pw` = \"$newPwd\" WHERE `user_id` = \"$user_id\"");
		}
		else{
			$updateUser = newQuery($db_con, "UPDATE `users` SET `class_assigned_to` = \"$classID\", `first_name` = \"$fname\", `last_name` = \"$lname\", `username` = \"$username\", `email` = \"$email\" WHERE `user_id` = \"$user_id\"");
			$updateUser2 = newQuery($db_con, "UPDATE `forum_userdata` SET `user_name` = \"$username\", `user_real_name` = \"$fname\" WHERE `user_id` = \"$user_id\"");
		}

		header("Location:../../manageusers.php?UpdateUser=The user \"$username\" has been successfully updated");
		exit();
	}
}
?>