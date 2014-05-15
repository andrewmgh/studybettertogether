<?php
// Do not allow a user navigate directly to this page.
if(($_SERVER['PHP_SELF']) != "/studybettertogether/includes/functionality/common_functions.php"){
	
	//function to sanitise all input 
	function sanitiseInput($db_con,$userInput)
	{
		$userInput = stripslashes($userInput);
		$userInput = htmlentities($userInput);
		$userInput = strip_tags($userInput);
		$userInput = mysqli_real_escape_string($db_con, $userInput);
		return $userInput;
	}
	
	// function to encrypt and salt passwords
	function encryptPwd($password)
	{
		$Salt1 = 'Rt2,m!';
		$Salt2 = '@g{0x';
		$password = sha1("$Salt1$password$Salt2");
		return $password;
	}
	
	
	// function that uses javaScript to hide download URL from files. The purpose for this is to stop users from navigating directly to the files directory. Also to aid usability a download button is displayed.
	function ProtectURL ($file_path){
		$file_path = htmlentities($file_path);
		$downloadlink = "<a style =\"cursor: pointer\" onclick =\"javascript: window.location = "."'". $file_path . "';\"". "><img alt=\"Download\" title=\"Download\" src=\"img/download.png\"/></a>";
		return $downloadlink;
	}

}
else {
	require_once 'protectfiles.php';
}

?>