<?php 
require_once 'includes/html_template/header.php';
if ($account_type != 'Admin') {
	header ( "location: index.php" );
}

echo "<h2 class = \"mainPageHeading\">Edit Classes </h2>";

if (isset($_GET['edit'])){
	
	
	
	
}

elseif (isset($_GET['del'])){
	

	
	
}

elseif (isset($_POST ['updateClassDetails'])){

	
	

}

else {
	header ( "location: index.php" );
}


echo "<p><a href = \"manageclasses.php\">Return to Manage Classes</a></p>";


function displayEditClassesTable($db_con, $edit_id)
{
	$edit_id = sanatiseInput($db_con, $edit_id);
		
	
	$classResult = newQuery($db_con, "SELECT * FROM classes WHERE class_id='$edit_id'");
	$row = mysqli_fetch_array ( $classResult );
	
	
	
	closeMySql($db_con, $classResult);
}


function updateClassDetails()
{

	
}



function deleteClass()
{
	
	
}


require_once 'includes/html_template/footer.php';?>
