<?php 
session_start();
$history_filename ="chatroom_files/" .date( "Y-m-d" ) . "_log.html";
echo $history_filename;
if(isset($_GET['logout'])){
	 
	//Simple exit message
	$fp = fopen($history_filename, 'a');
	fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
	fclose($fp);
	 
	session_destroy();
	header("Location: chatroom.php"); //Redirect the user
}

function loginForm(){
    echo'
    <div id="loginform">
    <form action="chatroom.php" method="post">
        <p>Please enter your name to continue:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Chat - Customer Module</title>
<link type="text/css" rel="stylesheet" href="css/chatroom.css" />
</head>
 <body>
 


<?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>

<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox">
    <?php
	if(file_exists($history_filename) && filesize($history_filename) > 0){
	    $handle = fopen($history_filename, "r");
	    $contents = fread($handle, filesize($history_filename));
	    fclose($handle);
	     
	    echo $contents;
	}
	?>
    </div>
     
    <form name="message" method="post">
        <input type="text"  name="usermsg" id="usermsg" size="63" autofocus required />
        <input type="submit" name="submitmsg" id="submitmsg" value="Send" />
        <input type="submit" name="clearit" id="clearit" value="Clear" />
    </form>
</div>

<script src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
		//If user submits the form
	 		$("#submitmsg").click(function(){	
			var clientmsg = $("#usermsg").val();
			$.post("includes/functionality/chat_post.php", {text: clientmsg});				
			$("#usermsg").prop("value", "");
			return false;
		});

	 	$("#clearit").click(function(){
	 			$.post("includes/functionality/chat_clear.php",{clear: "clear"});
	 			return false;
	 	});
	 		
	 
	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").prop("scrollHeight") - 20;
		$.ajax({
			url: "<?php echo $history_filename ?>",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
				var newscrollHeight = $("#chatbox").prop("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}			
		  	},
		});
		
	}
	setInterval (loadLog, 2500);	//Reload file every 2.5 seconds
	
	$("#chatbox").animate({ scrollTop: $("#chatbox").prop("scrollHeight") }, 'normal');
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'chatroom.php?logout=true';}		
	});



	
});
</script>
<?php
}
?>
</body>
</html>