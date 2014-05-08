<?php
if(($_SERVER['PHP_SELF']) != "/studybettertogether/includes/functionality/common_functions.php"){
	
	//functions to sanatise all input 
	function sanatiseInput($db_con,$userInput)
	{
		$userInput = stripslashes($userInput);
		$userInput = htmlentities($userInput);
		$userInput = strip_tags($userInput);
		$userInput = mysqli_real_escape_string($db_con, $userInput);
		return $userInput;
	}
	
	// Encrypt and salt passwords
	function encryptPwd($password)
	{
		$Salt1 = 'Rt2,m!';
		$Salt2 = '@g{0x';
		$password = sha1("$Salt1$password$Salt2");
		return $password;
	}
	
	
	//Embedded Javascript function to hide URL from downloads. This is to stop users navigating directly to the files directory and also to aid usability a download button is displayed
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