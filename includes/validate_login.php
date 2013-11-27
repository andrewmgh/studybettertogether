<?php
//if the page is not index.php than redirect users to index.php. This stops people navigating directly to this page by typing in the URL - ie "/studybettertogether/includes/validate_login.php".
if(($_SERVER['PHP_SELF']) == "/studybettertogether/index.php"){

if ($_SERVER['REQUEST_METHOD']== "POST") //only runs the below php code if the login form was submitted
{
	//Initialse login variables and error variables
	$myusername = $mypassword = "";
	$details_entered = false;

	if (isset ($_POST ['login'])){ //if the login has been submitted do this....

		//Take username and password from login form and clean with cleanSQLinput function
		$myusername = cleanSQLinput($db_con, $_POST ['myusername']);
		$mypassword = cleanSQLinput($db_con, $_POST ['mypassword']);
			

		//Test if the username and password have been entered
		if($myusername == "" || $mypassword == "")
		{
			$details_entered = false;
			$login_error_msg = "Please enter a Username and Password";
		}

		else {
			$details_entered = true;
		}

		if ($details_entered)
		{
			//decrypt password with sha1 algorithm and two different salt's
			$encrypted_password = sha1("$Salt1$mypassword$Salt2");
				
			// select username and pwd from table
			$result = newQuery($db_con, "SELECT * FROM users WHERE username='$myusername' and password='$encrypted_password'");
			$row = mysqli_fetch_array($result);
				
			// If username and pwd are in table and the user name is admin than take the user to the admin page
			if (mysqli_num_rows ($result) == 1) {
				session_start();
				$_SESSION ['username'] = $myusername;
				$_SESSION ['firstname'] =  $row[1];
				closeMySql($db_con, $result);
				header ( "location:profile.php" );
				exit ();
			}
				
			// If username and pwd are in table and the user name is not admin than take the user to the study page
			/* 			else if ($numrows == 1 && $row[5] == 'Student') {
				session_start ();
			$_SESSION ['username'] = $username;
			$_SESSION ['firstname'] =  $row[1];
			header ( "location:profile.php" );
			exit ();
			} */

			else  {
				// The login failed
				$login_error_msg = "Your Login Details are Incorrect";
				closeMySql($db_con, $result);
			}
				
		}
	}
}
 }

else {
	header ( "location:/studybettertogether/index.php" );
	exit ();
} 
?>