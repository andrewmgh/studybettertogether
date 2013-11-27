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


//MySQLi function to create a new query and return result. Performs error checking if query does not work
function newQuery($db_con, $query){
	$result = mysqli_query($db_con, $query);
	if (!$result) {
		global $db_errorMsg;
		die ("<h3>The following error occurred in this query: </h3>" . "<h2>" . $db_errorMsg ."</h2>");
	}
	return $result;	
}


//MySQLi function to create a new query and return result. Takes in two additional reference paramaters to store the number of rows and the query array
/* function newQueryArray ($db_con,$query, &$numrows, &$queryArray)
{
	$result = mysqli_query($db_con, $query);
	if (!$result) {
		global $db_errorMsg;
		die ("<h3>The following error occurred in this query: </h3>" . "<h2>" . $db_errorMsg ."</h2>");
	}
	$numrows = mysqli_num_rows ($result);
	$queryArray = mysqli_fetch_array($result);
	return $result;
}
 */

//MySQLi function to close free sql results and close db connection
function closeMySql($db_con, $result){
	mysqli_free_result($result);
	mysqli_close($db_con);
}


//seperate functions to sanatise HTML input and then SQL input
function cleanHTMLinput($input)
{
	$input = stripslashes($input);
	$input = htmlentities($input);
	$input = strip_tags($input);
	return $input;
}

function cleanSQLinput($db_con,$input)
{
	$input = mysqli_real_escape_string($db_con, $input);
	$input = cleanHTMLinput($input);
	return $input;
}

//Declare and Initilise Salt Variables
$Salt1 = 'Rt2,m!';
$Salt2 = '@g{0x';


//Embedded Javascript function to hide URL from downloads. This is to stop users navigating directly to the files directory and also to aid usability a download button is displayed
function ProtectURL ($file_path){
	$file_path = htmlentities($file_path);
	$downloadlink = "<a style =\"cursor: pointer\" onclick =\"javascript: window.location = "."'". $file_path . "';\"". "><button class=\"filesBtn\">Download</button></a>";
	return $downloadlink;
}

?>