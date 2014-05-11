<?php 
	require_once '../db/sql_functions.php';
	require_once 'common_functions.php';
	require_once 'sessionManagement.php';
		

//Only run the following code if the deleteClass paramater is set and the current user is the administrator
if ((isset($_GET['deleteClass'])) && ($account_type == 'Admin')) {
	deleteClass($db_con, $_GET ['deleteClass']);
}

//If deleteClass is not set or current user is not administrator then log the user out
else {
	require_once 'protectfiles.php';
}




//Funtion to delete a class and report a success or failure message back to the user
function deleteClass($db_con, $delete_id)
{
	$delete_id = sanitiseInput($db_con, $delete_id);
	
	//Check to see if the class has students and store the number of students in a variable
	$countQuery = "SELECT COUNT(class_assigned_to) AS NoPerClass FROM classes INNER JOIN users ON classes.class_id = users.class_assigned_to WHERE users.class_assigned_to = \"$delete_id\" AND account_type = 'Student'";
	$countQueryResult =newQuery($db_con,$countQuery);
	$row = mysqli_fetch_array ( $countQueryResult );
	$classSize =  $row ["NoPerClass"];

	//Retrieve the name of the class
	$classResult = newQuery($db_con, "SELECT * FROM classes WHERE class_id='$delete_id'");
	$row2 = mysqli_fetch_array ( $classResult );
	$className =  $row2 ["class_name"];
	mysqli_free_result($classResult);

	//If the class has no students it can be deleted. Also deletes class from the forum_category table
	if ($classSize <=0){
		$delete1 = newQuery($db_con, "DELETE FROM classes WHERE class_id ='$delete_id'");
		$delete2 = newQuery($db_con, "DELETE FROM forum_categories WHERE class_id ='$delete_id'");
		header("Location:../../manageclasses.php?&UpdateClass=The class \"$className\" has been sucessfully deleted");
		exit();
		closeMySql($db_con, $countQueryResult);
	}

	//If the class has students it cannot be deleted
	else {
		header("Location:../../manageclasses.php?&UpdateClass=The class \"$className\" cannot be deleted as it has students assigned to it");
		exit();
		closeMySql($db_con, $countQueryResult);
	}
}
