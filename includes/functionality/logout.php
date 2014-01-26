<?php
session_start();
$_SESSION = array();
setcookie(session_name(), '', time() - 2592000, '/');
session_destroy();
header("location:http://localhost/studybettertogether/index.php");
?>