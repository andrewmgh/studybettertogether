<?php
ini_set('session.gc-maxlifetime', 1800);
session_start ();

if (isset ( $_SESSION ['username'] )) {
	
		$username = $_SESSION ['username'];
		
	//update last_activity field in DB
		mysqli_query($db_con,"UPDATE users SET last_activity = NOW() where username = '$username'");
		
	// select the data from DB and store in session
		$sessionSearch = newQuery($db_con, "SELECT first_name, user_id, account_type FROM users WHERE username = '".$username."'");
				if (mysqli_num_rows ( $sessionSearch ) == 1) {
					$row = mysqli_fetch_array ( $sessionSearch );
					$_SESSION ['accountType'] = $row ['account_type'];
					$_SESSION ['firstname'] = $row ['first_name'];
					$_SESSION ['userID'] = $row ['user_id'];
					mysqli_free_result($sessionSearch);
				}
		$firstname = $_SESSION ['firstname'];
		$userID = $_SESSION ['userID'];
		$account_type = $_SESSION['accountType'];
		
	// Ternary If statement to set session variables for auto logging in user to the study forum	
		$account_type == 'Admin' ? $forumType = "2" : $forumType = "0";
		
		$_SESSION['forum_user_id'] = $userID;
	    $_SESSION['forum_user_name'] = $username;
	    $_SESSION['forum_user_type'] = $forumType;

	    
	//Log users out after 30 minutes of inactivity
	//Based on a script found at: http://www.dynamicdrive.com/forums/showthread.php?25939-Automatic-Logout-after-15-minutes-of-inactive	
		
		$timeLimit = 30; // Set timeout minutes
		$timeLimit = $timeLimit * 60; // Converts minutes to seconds
		
		if (isset($_SESSION['start_time'])) {
		    $elapsed_time = time() - $_SESSION['start_time'];
		    if ($elapsed_time >= $timeLimit) {
			
			//Sign user out of Chatroom
			$_SESSION['ajaxChatLoggedIn'] = 0;
			$delResult = newQuery($db_con, "DELETE FROM ajax_chat_online WHERE userID ='$userID'");
					
			//Destroy session and redirect user to index page
			session_unset();
			session_destroy();
	    	
	    	$loginError = "Your session has expired - please login again";
			header("location:http://localhost/studybettertogether/index.php?Message=$loginError");   

	    	closeMySql($db_con, $delResult);
			exit();   	    
		    }
		}
		$_SESSION['start_time'] = time();
	
}
else {
		require_once 'protectfiles.php';
}
?>