<?php
if ($_SERVER['REQUEST_METHOD']== "POST")
{
	require_once '../db/sql_functions.php';
	require_once 'common_functions.php';

	addnewClass($db_con, $_POST ['className'], $_POST ['classCode'], $_POST ['regCode']);

}
else {
	require_once 'protectfiles.php';
}

//Overall Function to add a new class
function addnewClass ($db_con, $className, $classCode, $registratonCode){
		
	//Take inputs from form, clean with sanatiseInput function and store in variables
	$className = sanatiseInput($db_con, $className);
	$classCode = sanatiseInput($db_con, $classCode);
	$registratonCode = sanatiseInput($db_con, $registratonCode);

		
	//Validate the inputs based on the validation functions below. Either append the error message or a blank string "" to the variable $Error
	$Error = validateClassname($db_con,$className);
	$Error .= validateClassCode($classCode);
	$Error .= validateregistratonCode($registratonCode);


	//if all input is validated, add a new class. If not then output an error message
	if ($Error=="")
	{
		//encrypt registration code and add a new class to the DB
		$newRegCode = encryptPwd($registratonCode);
		$newClass = newQuery($db_con, "INSERT INTO `classes`(`class_name`, `class_code`, `register_code`) VALUES ('".$className."','".$classCode."','".$newRegCode."')");

		//add the new class as a category on the study forum
		$newCategory = newQuery($db_con, "INSERT INTO `forum_categories`(`category`) VALUES ('".$className."')");
		
		$successMsg = '<p>A new class has been successfully created.</p>';
		
		mysqli_close($db_con);
		header("Location:../../manageclasses.php?Msg=$successMsg");
		exit();
	}
	else {
		header("Location:../../manageclasses.php?Msg=$Error&className=$className&classCode=$classCode");
		exit();
	}
}


//Individual Validation Functions
function validateClassname($db_con,$className){
	//checks whether class name is unique and stores boolean true value in a variable 'classname_taken' if so
		$classname_taken = false;
	$result_className = newQuery($db_con, "SELECT class_id FROM classes WHERE class_name = '".$className."'");
	if (mysqli_num_rows ( $result_className ) >= 1) {
		$classname_taken = true;
	}
	mysqli_free_result($result_className);

	if($className == ""){
		return "You have not entered a suitable username <br />";
	}
	elseif ($classname_taken) {
		return "That class name is already in use, please enter another class name. <br />";
	}
	else {
		return "";
	}
}

function validateClassCode($classCode){
	if($classCode == ""){
		return "You have not entered a Class Code <br />";
	}
	else {
		return "";
	}
}

function validateregistratonCode($registratonCode){
	if($registratonCode == ""){
		return "You have not entered a Registration Code <br />";
	}
	else {
		return "";
	}
}

?>

