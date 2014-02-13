<?php
ini_set('session.gc-maxlifetime', 1800);
session_start ();

if (isset ( $_SESSION ['username'] )) {
	
		$username = $_SESSION ['username'];
		
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

	    
	    //Source: http://stackoverflow.com/questions/520237/how-do-i-expire-a-php-session-after-30-minutes
	    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {	// last request was more than 30 minutes ago 1800 seconds
	    	
	    	$history_filename ="chatroom_files/" .date( "Y-m-d" ) . "_log.html";
	    	$fp = fopen($history_filename, 'a');
	    	fwrite($fp, "<div class='msgln'><i><b>$username</b> has left the chat session.</i><br></div>");
	    	fclose($fp);
	    	 
	    	session_unset();     // unset $_SESSION variable for the run-time
	    	session_destroy();   // destroy session data in storage
	    	
	    	$loginError = "Your session has expired - please login again";
			header("location:http://localhost/studybettertogether/index.php?Message=$loginError");   

	    	//header("location:http://studybettertogether.com/index.php?Error=$loginError");   	
	     }
	    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	
}
else {
		require_once 'protectfiles.php';
}
?>