<?php
session_start();
$history_filename ="../../chatroom_files/" .date( "Y-m-d" ) . "_log.html";
if(isset($_SESSION['name'])){
	/* $text = $_POST['clear'];
	 
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($fp); */
	
	
	unlink($history_filename);
	
	$fp = fopen($history_filename, 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']. " has cleared the chat history</b> <br></div>");
	fclose($fp); 
} 

?>
