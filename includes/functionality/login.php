<?php
//only runs the below php code requested by a POST method. This is a security measure to stop people navigating directly to this URL
if ($_SERVER['REQUEST_METHOD']== "POST") {
	
		require_once '../db/sql_functions.php';
		require_once 'common_functions.php';

		//Take inputs from login form, clean with sanatiseInput function and store in variables
		$username = sanatiseInput($db_con, $_POST ['username']);
		$password = sanatiseInput($db_con, $_POST ['password']);
			
		//Validate login based on validateLogin function below
		$loginError = validateLogin($db_con, $username, $password);

		//If login is correct, start session and redirect the user to the profile.php page. Else redirect user back to index.php page and display error message
		if ($loginError =="")
		{
			session_start();
			$_SESSION ['username'] = $username;	
			header('Location:../../profile.php');
			exit();
			}
				
		else {
			header("Location:../../index.php?Error=$loginError");
			exit();
		}
				
}

function validateLogin($db_con, $username, $password){
	$password = encryptPwd($password);
	$result = newQuery($db_con, "SELECT * FROM users WHERE username='$username' and password='$password'");
	$row = mysqli_fetch_array($result);
		if (!(mysqli_num_rows ($result) == 1)) {
			return "Your login details are incorrect";
			closeMySql($db_con, $result);
		}
		else {
			return "";
			closeMySql($db_con, $result);
		}
	}

?>