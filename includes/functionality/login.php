<?php
//only runs the below php code requested by a POST method. This is a security measure to stop people navigating directly to this URL
if ($_SERVER['REQUEST_METHOD']== "POST") {
	
		require_once '../db/sql_functions.php';
		require_once 'common_functions.php';
		
		loginUser($db_con, $_POST['username'], $_POST ['password']);
		
}
else {
	require_once 'protectfiles.php';
}


function loginUser($db_con, $username, $password) {
	//Take inputs from login form, clean with sanatiseInput function and store in variables
	$username = sanatiseInput($db_con, $username);
	$password = sanatiseInput($db_con, $password);
	
	//Validate username and password against DB
	$username = strtolower($username);
	$password = encryptPwd($password);
	$result = newQuery($db_con, "SELECT * FROM users WHERE username='$username' and password='$password'");
	$row = mysqli_fetch_array($result);
	
	//Login Failed
		if (!(mysqli_num_rows ($result) == 1)) {
			$loginError= "Your login details are incorrect";
			header("Location:../../index.php?Message=$loginError");
			closeMySql($db_con, $result);
			exit();	
			
		}
	//Login Success	
		else {
			//Start Session
			session_start();
			$_SESSION ['username'] = $username;
			
			
			//Register User as logged-in in DB
			$loggedIn= newQuery($db_con,"UPDATE users SET last_login = now() where username = '$username'");
			closeMySql($db_con, $result);
			
			//Redirect user to home page
			header('Location:../../home.php');
			exit();		
		}	
}
?>