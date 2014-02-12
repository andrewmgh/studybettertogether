<?php
session_start();
$history_filename ="../../chatroom_files/" .date( "Y-m-d" ) . "_log.html";

if(isset($_SESSION['name'])){
	$text = $_POST['text'];
	 
	$fp = fopen($history_filename, 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($fp);
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