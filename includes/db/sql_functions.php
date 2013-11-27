<?php
require_once 'db_connect.php';

//MySQLi function to create a new query and return result. Performs error checking if query does not work
function newQuery($db_con, $query){
	$result = mysqli_query($db_con, $query);
	if (!$result) {
		global $db_errorMsg;
		die ("<h3>The following error occurred in this query: </h3>" . "<h2>" . $db_errorMsg ."</h2>");
	}
	return $result;
}



//MySQLi function to free sql results and close db connection
function closeMySql($db_con, $result){
	mysqli_free_result($result);
	mysqli_close($db_con);
}








/* //Change User password -changepassword.php
function changePassword_Query ($db_con, $newPassword, $username) {
	$query = "UPDATE `users` SET `password` = '".$newPassword."' WHERE  `username` = '$username'";
	return newQuery($db_con, $query);
	mysqli_close($db_con);
}

// select the account type from the database based on username - header.php
function selectAccountType_Query ($db_con, $username) {
	$query = "SELECT account_type FROM users WHERE username = '".$username."'";
	return newQuery($db_con, $query);
	mysqli_close($db_con);
}

// select username and pwd from table - validate_login.php
function selectLoginDetails_Query ($db_con, $username, $password) {
	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	return newQuery($db_con, $query);
	mysqli_close($db_con);
}

//select user_id from db based on username - validate_registration.php
function selectUserId_query($db_con, $username){
	$query = "SELECT user_id FROM users WHERE username = '".$username."'";
	return newQuery($db_con, $query);
	mysqli_close($db_con);
}

//select regcode from db - validate_registration.php
function selectregCode_query($db_con){
	$query = "SELECT register_code FROM users WHERE user_id ='1'";
	return newQuery($db_con, $query);
	mysqli_close($db_con);
}

//inserts new user into db - validate_registration.php
function insertNewUser_query($db_con, $firstname, $lastname, $username, $email, $password ){
	$query = "INSERT INTO users (`first_name`, `last_name`, `username`, `email`, `password`) VALUES ('" . $firstname . "','" . $lastname . "','" . $username . "','" . $email . "','" . $password . "')";
	return newQuery($db_con, $query);
	mysqli_close($db_con);
}
 */
	