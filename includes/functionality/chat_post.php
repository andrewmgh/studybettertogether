<?php
session_start ();
if (isset ( $_SESSION ['username'] )) {
	
	if(isset($_POST['text'])){
	$username = $_SESSION ['username'];
	$history_filename ="../../chatroom_files/" .date( "Y-m-d" ) . "_log.html";
	
			$text = $_POST['text'];
		 
		$fp = fopen($history_filename, 'a');
		fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>$username</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
		fclose($fp);
	}
} 
else {
	require_once 'protectfiles.php';
}

?>


<?php

/* session_start();
if(isset($_SESSION['name'])){
	$text = $_POST['text'];
	 
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'>
			
			(".date("g:i A").") ".$_SESSION['name'].": ".stripslashes(htmlspecialchars($text))."
<hr>");
fclose($fp);
/* when user types deletefile log.html will be erased */
/*
if(preg_match("/^deletefile/",$text))
{
$myFile = "./log.html";
unlink($myFile);
}} */

//$log = date('y-m-d'); (with php)
?>