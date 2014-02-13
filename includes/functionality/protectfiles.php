<?php

//if the session has started - ie by a page including sessionmanagement.php - then destroy the session before redirecting the unidentified user
if (session_status() == PHP_SESSION_ACTIVE){
	session_unset();
	session_destroy();
}
$loginError = "You need to be logged in to view this page";
header("location:http://localhost/studybettertogether/index.php?Message=$loginError");
//header("location:http://studybettertogether.com/index.php?Message=$loginError");
exit();
?>