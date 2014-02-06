<?php 
require_once 'includes/html_template/header.php';
if ($account_type != 'Admin') {
	header ( "location: index.php" );
}

echo "<h2 class = \"mainPageHeading\">Edit Student Details </h2>";

//If either the editUser parameter or the Msg parameter are set then show the edit users form
if ((isset($_GET['editUser'])) || ((isset($_GET['Msg'])))){
	displayEditUsers($db_con, $_GET ['editUser'], isset($_GET['Msg']));	
}

//If the update form has been posted then update the user details
elseif (isset($_POST ['updateUserDetails'])){
	updateUserDetails($db_con, $_POST ['user_id'], $_POST ['fname'], $_POST ['lname'], $_POST ['username'], $_POST ['email'], $_POST ['password'], $_POST ['class']);
}

//If none of the above are set then send the user back to the home page
else {
	header ( "location: index.php" );
}




//Function to display a form for editing users
function displayEditUsers($db_con, $user_id, $msg = NULL)
{
	//Select user details from the database based on the user id
	$user_id = sanatiseInput($db_con, $user_id);
	$userResult = newQuery($db_con, "SELECT * FROM users WHERE user_id='$user_id'");
	$row = mysqli_fetch_array ( $userResult );
	
	//Select class name based on class_id
	$result_className = newQuery($db_con, "SELECT class_name FROM classes WHERE class_id ='". $row ["class_assigned_to"]. "'");
	if ($row2 = mysqli_fetch_array($result_className)) {
		$className = $row2['class_name'];
	}
	mysqli_free_result($result_className);
	
	//Display the form with the values set as the user details
	echo "<div id ='editDetailsForm'> \n <div class='main_form'>";
	print $msg ? '<div class = "hiddenField">' . ($_GET['Msg']) . '</div>': ""; 
					
	echo "<form name='editUserDetails' action='editusers.php' method='POST'>";
	echo "<fieldset>\n";
	echo "<input type ='hidden' name='user_id' value=\"$user_id\"\n";
	echo "<p><label for='fname'>First Name:</label>\n"; 
	echo "<input type='text' id='fname' name='fname' value = \"". htmlentities ( $row ["first_name"] ) ."\" required /></p>\n";
	echo "<p><label for='lname'>Last Name:</label>\n";
	echo "<input type='text' id='lname' name='lname' value = \"". htmlentities ( $row ["last_name"] ) ."\" required /></p>\n";
	echo "<p><label for='username'>Username:</label>\n";
	echo "<input type='text' id='username' name='username' value = \"". htmlentities ( $row ["username"] ) ."\" required /></p>\n";
	echo "<p><label for='email'>Email:</label>\n";
	echo "<input type='email' id='email' name='email' value = \"". htmlentities ( $row ["email"] ) ."\" required /></p>\n";	
	echo "<p><label for='password'>User Password:</label>\n";
	echo "<input type='password' id='password' name='password' placeholder = \"Leave blank if not changing\"  /></p>\n";
	echo "<p><label for='class'>Class Assigned To:</label>\n";
	echo "<select name='class'>";
	echo "<option value=\"$className\">$className</option>";
			$list_of_classes =newQuery($db_con, "SELECT * FROM classes WHERE class_name != '$className'");  
			while ( $row3 = mysqli_fetch_array ( $list_of_classes ) ) {
					echo '<option values=' . $row3["class_name"] . '>' . $row3["class_name"] . '</option>';
				}
			mysqli_free_result($list_of_classes);
	echo "</select></p>";
	echo "</fieldset>\n";
	echo "<p class = 'submit'><input type='submit' name ='updateUserDetails' value='Confirm' /></p>";
	echo "</form>\n</div>\n</div>";
	
	closeMySql($db_con, $userResult);
	echo "<h5><a href = \"manageusers.php\">Return to Manage Users</a></h5>";
	exit();
}


//Function to update class details
function updateUserDetails($db_con, $user_id, $fname, $lname, $username, $email, $password, $className)
{
	//Take inputs from form, clean with sanatiseInput function and store in variables
	$user_id = sanatiseInput($db_con, $user_id);
	$fname = sanatiseInput($db_con, $fname);
	$lname = sanatiseInput($db_con, $lname);
	$username = sanatiseInput($db_con, $username);
	$email = sanatiseInput($db_con, $email);
	$password = sanatiseInput($db_con, $password);
	$className = sanatiseInput($db_con, $className);

	//Select class id based on class name
	$result_classID = newQuery($db_con, "SELECT class_id FROM classes WHERE class_name =\"$className\"");
	if ($row = mysqli_fetch_array($result_classID)) {
		$classID = $row['class_id'];
	}
	mysqli_free_result($result_classID);
	
	
	//If any of the variables (apart from password) have not been entered then send an error message back to the user
	if(!($fname && $lname && $username && $email && $className)){
		header("Location:editusers.php?editUser=$user_id&Msg=Please ensure you have filled in the required fields");
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
		
		header("Location:manageusers.php?UpdateUser=The user \"$username\" has been sucessfully updated");
		mysqli_free_result($updateUser2);
		closeMySql($db_con, $updateUser);
		exit(); 
	}	
}

require_once 'includes/html_template/footer.php';?>
