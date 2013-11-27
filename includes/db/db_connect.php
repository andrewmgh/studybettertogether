<?php 

//connection to database
$db_host = "localhost";
$db_user = "sbtadmin";
$db_pass =	"welearn";
$db_name = "sbt";

$db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$db_errorMsg = "Error Number " . mysqli_connect_errno() . " : " . mysqli_connect_error();

// if the database connection fails, the error number and error message is displayed on the screen along with a promt to email the site administrator for help.
if (!$db_con) {
	die ("<h2>The following error occurred in connecting to MySQL: </h2>" . "<h2>" . $db_errorMsg ."</h2>" . "<h3>Please contact <a href=\"mailto:admin@studybettertogether.com?Subject=". $db_errorMsg ." \">admin@studybettertogether.com</a></h3>") ;
}

mysqli_set_charset($db_con, 'utf-8');

?>