<?php
session_start();
//Sign user out of chatroom
if (isset ( $_SESSION ['username'] )) {
	$username = $_SESSION ['username'];
	$history_filename ="../../chatroom_files/" .date( "Y-m-d" ) . "_log.html";
	$fp = fopen($history_filename, 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>$username</b>: has left the chat session.</i><br></div>");
	fclose($fp);

	//Destroy session and redirect user to index page
	session_unset();
	session_destroy();
	$loginError = "You have sucessfully logged out";
	header("location:http://localhost/studybettertogether/index.php?Message=$loginError");
}

else {
	require_once 'protectfiles.php';
}

	
	
	//header("location:http://studybettertogether.com/");
	//$_SESSION = array();
	//setcookie(session_name(), '', time() - 2592000, '/');
	//session_destroy();
exit();
?>