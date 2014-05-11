<?php
	require_once '../db/sql_functions.php';
	require_once 'sessionManagement.php';
	
	
	//Sign user out of chatroom
	$_SESSION['ajaxChatLoggedIn'] = 0;
	$delResult = newQuery($db_con, "DELETE FROM ajax_chat_online WHERE userID ='$userID'");
	
	//Destroy session and redirect user to index page
	session_unset();
	session_destroy();
	$loginError = "You have successfully logged out";
	header("location:http://localhost/studybettertogether/index.php?Message=$loginError");
	
	closeMySql($db_con, $delResult);
	exit();

?>