<?php
//only runs the below php code requested by a POST method. This is a security measure to stop people navigating directly to this URL
if ($_SERVER['REQUEST_METHOD']== "POST") {
	
		require_once '../db/sql_functions.php';
		require_once 'common_functions.php';
		
		loginUser($db_con, $_POST['username'], $_POST ['password']);
		
}


function loginUser($db_con, $username, $password) {
	//Take inputs from login form, clean with sanatiseInput function and store in variables
	$username = sanatiseInput($db_con, $username);
	$password = sanatiseInput($db_con, $password);
	
	//Validate username and password against DB
	$password = encryptPwd($password);
	$result = newQuery($db_con, "SELECT * FROM users WHERE username='$username' and password='$password'");
	$row = mysqli_fetch_array($result);
	
	//Login Failed
		if (!(mysqli_num_rows ($result) == 1)) {
			$loginError= "Your login details are incorrect";
			header("Location:../../index.php?Error=$loginError");
			closeMySql($db_con, $result);
			exit();	
			
		}
	//Login Success	
		else {
			session_start();
			$_SESSION ['username'] = $username;
			header('Location:../../profile.php');
			closeMySql($db_con, $result);
			exit();		
		}	
}
?>