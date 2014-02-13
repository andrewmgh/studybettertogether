<?php require_once 'includes/html_template/header.php';3
//This chatroom is modified from a tutorial found at: http://code.tutsplus.com/tutorials/how-to-create-a-simple-web-based-chat-application--net-5931
?>

<h2 class = "mainPageHeading">Chat Room</h2>
	



<?php //Display chatroom form ?>
<div id="chat_wrapper">
    <div id="menu">
        <p class="welcome">Welcome to the study chat room, <b><?php echo $username; ?></b></p>
         <div style="clear:both"></div>
    </div>
     
    <div id="chatbox">
    <?php
    $history_filename ="chatroom_files/" .date( "Y-m-d" ) . "_log.html";
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






<?php //Jquery to manage chatroom posts?>
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
});
</script>

<?php require_once 'includes/html_template/footer.php';?>
