<?php 
require_once 'includes/html_template/header.php';
if ($account_type != 'Admin') {
	header ( "location: index.php" );
}

echo "<h2 class = \"mainPageHeading\">Edit Classes </h2>";

//If either the editClass parameter or the Msg parameter are set then show the edit classes form
if ((isset($_GET['editClass'])) || ((isset($_GET['Msg'])))){
	displayEditClasses($db_con, $_GET ['editClass'], isset($_GET['Msg']));	
}

//If none of the above are set then send the user back to the home page
else {
	header ( "location: index.php" );
}




//Function to display a form for editing classes
function displayEditClasses($db_con, $edit_id, $msg = NULL)
{
	//Select class details from the database based on the class id
	$edit_id = sanatiseInput($db_con, $edit_id);
	$classResult = newQuery($db_con, "SELECT * FROM classes WHERE class_id='$edit_id'");
	$row = mysqli_fetch_array ( $classResult );
	
	//Display the form with the values set as the class details
	//echo"<h3>Use the below form to edit the class details</h3>";
	echo "<div id ='editDetailsForm'> \n <div class='main_form'>";
	print $msg ? '<div class = "hiddenField">' . ($_GET['Msg']) . '</div>': ""; 
					
	echo "<form name='editClassDetails' action='includes/functionality/update_class_details.php' method='POST'>";
	echo "<fieldset>\n";
	echo "<input type ='hidden' name='edit_id' value=\"$edit_id\"\n";
	echo "<p><label for='className'>Class Name:</label>\n";
	echo "<input type='text' id='className' name='className' value = \"". htmlentities ( $row ["class_name"] ) ."\" required /></p>\n";			
	echo "<p><label for='classCode'>Class Code:</label>\n"; 
	echo "<input type='text' id='classCode' name='classCode' value = \"". htmlentities ( $row ["class_code"] ) ."\" required /></p>\n";
	echo "<p><label for='regCode'>Registration Code:</label>\n";
	echo "<input type='password' id='regCode' name='regCode' placeholder = \"Leave blank if not changing\" /></p>\n";
	echo "</fieldset>\n";
	echo "<p class = 'submit'><input type='submit' name ='updateClassDetails' value='Confirm' /></p>";
	echo "</form>\n</div>\n</div>";
		
	closeMySql($db_con, $classResult);
	echo "<h5><a href = \"manageclasses.php\">Return to Manage Classes</a></h5>";
	exit();
}


require_once 'includes/html_template/footer.php';
?>
