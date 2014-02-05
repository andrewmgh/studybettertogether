<?php 
	require_once '../db/sql_functions.php';
	require_once 'common_functions.php';
	require_once 'sessionManagement.php';
	
		
//Only run the following code if the deleteUser paramater is set and the current user is the administrator
if ((isset($_GET['deleteUser'])) && ($account_type == 'Admin')) {
	
	//Security procedure to prevent a XSS attack from deleting the administrator
	if(($_GET['deleteUser']) == "1"){
		header("Location:../../manageusers.php?&UpdateUser=You cannot delete this user");
		exit();
	}
	
	deleteUserDirectory($db_con, $_GET ['deleteUser']);
	deleteUserFromDB($db_con, $_GET ['deleteUser']); 
}

//If deleteUser is not set or current user is not administrator then log the user out
else {
	include 'logout.php';
}


//Recursive funtion to delete the user directory and all their files contained in this directory - Edited from a function found at - http://ie2.php.net/rmdir
function deleteUserDirectory($db_con, $user_id)
{
	$user_id = sanatiseInput($db_con, $user_id);
	$userDirectory = "../../../studybettertogether/files/$user_id";
	
	if (is_dir ($userDirectory)) {
			foreach(glob($userDirectory . '/*') as $file) {
		        if(is_dir($file)) { 
		            deleteUserDirectory($file);
		        } else {
		            unlink($file);
		        }
		    }
		    rmdir($userDirectory);
	}
}


//Funtion to delete a user from the database and redirect the administrator back to the manage users page with a success message. 
//As database contstraints are in place - deleting from the SBT.users table will have a ripple effect on all related tables
function deleteUserFromDB($db_con, $user_id)
{
	$user_id = sanatiseInput($db_con, $user_id);
	
	//Retrieve username from DB
	$userResult = newQuery($db_con, "SELECT username FROM users WHERE user_id ='$user_id'");
	$row = mysqli_fetch_array ( $userResult );
	$deletedUser =  $row ["username"];
		
	$delete = newQuery($db_con, "DELETE FROM users WHERE user_id ='$user_id'");
	header("Location:../../manageusers.php?&UpdateUser=The user \"$deletedUser\" has been sucessfully deleted");
	closeMySql($db_con, $userResult);
	exit();
	
	
	//If user is not the file owner, still need to remove them from file_sharing db
	
	
}
