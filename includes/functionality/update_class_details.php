<?php

//only runs the below php code if requested by a POST method. This is a security measure to stop people navigating directly to this URL
if (isset($_POST ['updateClassDetails'])){
	require_once '../db/sql_functions.php';
	require_once 'common_functions.php';
	require_once 'sessionManagement.php';
	updateClassDetails($db_con, $_POST ['edit_id'], $_POST ['className'], $_POST ['classCode'], $_POST ['password']);
}

else {
	require_once 'protectfiles.php';
}


//Function to update class details
function updateClassDetails($db_con, $edit_id, $className, $classCode, $regCode)
{
	//Take inputs from form, clean with sanitiseInput function and store in variables
	$edit_id = sanitiseInput($db_con, $edit_id);
	$className = sanitiseInput($db_con, $className);
	$classCode = sanitiseInput($db_con, $classCode);
	$regCode = sanitiseInput($db_con, $regCode);

	//If any of the variables (apart from reg code) have not been entered then send an error message back to the user
	if(!($className && $classCode)){
		header("Location:../../editclasses.php?editClass=$edit_id&Msg=Please ensure you have filled in the required fields");
		exit();
	}
	//If the required variables have been entered and depending on whether the regCode was filled in or not - update the class and report a success message back to the user
	else {
		if($regCode){
			$newRegCode = encryptPwd($regCode);
			$updateClass1 = newQuery($db_con, "UPDATE `classes` SET `class_name` = '".$className."', `class_code` = '".$classCode."', `register_code` = '".$newRegCode."' WHERE  `class_id` = '$edit_id'");
			$updateClass2 = newQuery($db_con, "UPDATE `forum_categories` SET `category` = '".$className."' WHERE  `class_id` = '$edit_id'");
		}
		else{
			$updateClass1 = newQuery($db_con, "UPDATE `classes` SET `class_name` = '".$className."', `class_code` = '".$classCode."' WHERE  `class_id` = '$edit_id'");
			$updateClass2 = newQuery($db_con, "UPDATE `forum_categories` SET `category` = '".$className."' WHERE  `class_id` = '$edit_id'");
		}

		header("Location:../../manageclasses.php?UpdateClass=The class \"$className\" has been successfully updated");
		exit();
	}
}