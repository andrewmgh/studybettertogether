<?php
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
		 
	
}
else {
	include 'logout.php';
}
?>