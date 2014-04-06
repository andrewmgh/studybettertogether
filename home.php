<?php require_once 'includes/html_template/header.php';?>

<h2 class = "mainPageHeading">Hi <?php echo "$firstname"; ?></h2> 

<h4>Welcome to StudyBetterTogether. What would you like to do?</h4>


<div id="siteContent">
<table >
	<tr>
		<th class ="column1"><p>Upload Files</p></th>
		<th class ="column2"><p>Search Public Files</p></th>
		<th class ="column3"><p>Search <?php echo $firstname; ?>'s Files</p></th>
	</tr>
	<tr>
		<td class ="column1"><a href ="upload.php"><img alt="Upload Files" title="Upload Files" src="img/upload.jpg" height="125" width="125" /></a></td>
		<td class ="column2"><a href ="search_publicfiles.php"><img alt="Search Public Files" title="Search Public Files" src="img/searchPublic.jpg" height="125" width="125" /></a></td>
		<td class ="column3"><a href ="search_personalfiles.php"><img alt="Search Personal Files" title="Search Personal Files" src="img/searchPrivate.jpg" height="125" width="125" /></a></td>
	</tr>
	<tr>
		<td class ="description">Upload and share notes, essays, projects or any other type of study resource. Choose from three different types of sharing status- Personal, Public or Specific-User sharing.</td>
		<td class ="description">In this section you can search for and download all Public files. These are files that have been shared with all users.</td>
		<td class ="description">Here you can search for and download all your own files. These are files that either you have uploaded yourself or else files that have been shared with you by another student.</td>
	</tr>
	<tr class="addSpace">
	<td></td>
	<td></td>
	<td></td>
	</tr>
	<tr>
		<th class ="column1"><p>Chat on the Study Forum </p></th>
		<th class ="column2"><p>Log into the Chatroom</p></th>
		<th class ="column3"><p>Find Help</p></th>
	</tr>
	<tr>
		<td class ="column1"><a href ="studyforum.php"><img alt="Study Forum" title="Study Forum" src="img/chat.jpg" height="125" width="125" /></a></td>
		<td class ="column2"><a href ="chatroom.php"><img alt="Chat Room" title="Chat Room" src="img/chatroom.jpg" height="125" width="205" /></a></td>
		<td class ="column3"><a href ="help.php"><img alt="Help Page" title="Help Page" src="img/support.jpg" height="125" width="125" /></a></td>
	</tr>
	<tr>
		<td class ="description">Stuck on a project and don't know who to ask? Use the study forum to ask questions, discusss college projects and talk about any study related topics.</td>
		<td class ="description">Want to chat with other students right now? Log into the chatroom and see who else is online.</td>
		<td class ="description">Unsure how to use this site? Here you will find a detailed user-manual that shows step by step how to use all the features on this website..</td>
	</tr>
</table>
</div>	

<?php require_once 'includes/html_template/footer.php';?>
