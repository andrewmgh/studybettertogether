<?php

session_start ();
if (isset ( $_SESSION ['username'] )) {

		if(isset($_POST['clear'])){
		$username = $_SESSION ['username'];
		$history_filename ="../../chatroom_files/" .date( "Y-m-d" ) . "_log.html";
		
			/* $text = $_POST['clear'];
			 
			$fp = fopen("log.html", 'a');
			fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
			fclose($fp); */
			
			
			unlink($history_filename);
			
			$fp = fopen($history_filename, 'a');
			fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>$username</b> has cleared the chat history <br></div>");
			fclose($fp); 
		
		}
}
else {
	require_once 'protectfiles.php';
}
?>
