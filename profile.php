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
		<td class ="column1"><a href ="upload.php"><img alt="Upload Files" src="img/upload.png" height="125" width="125" /></a></td>
		<td class ="column2"><a href ="publicfiles.php"><img alt="Search Public Files" src="img/searchPublic2.png" height="125" width="125" /></a></td>
		<td class ="column3"><a href ="personalfiles.php"><img alt="Search Personal Files" src="img/searchPrivate2.png" height="125" width="125" /></a></td>
	</tr>
	<tr>
		<td class ="description">Upload and share notes, essays, projects or any other type of study resources. Choose to share files with all users, with specific users or even choose not to share your files at all.</td>
		<td class ="description">In this section you can search for and download all Public files. These are files that have been shared with all users.</td>
		<td class ="description">Here you can search for and download all your own files. These are either files that you have chosen not to share or else files that have been specifically shared with you by another user.</td>
	</tr>
	<tr class="addSpace">
	<td></td>
	<td></td>
	<td></td>
	</tr>
	<tr>
		<th class ="column1"><p>Chat on the Study Forum </p></th>
		<th class ="column2"><p>View Study Advice</p></th>
		<th class ="column3"><p>Find Help</p></th>
	</tr>
	<tr>
		<td class ="column1"><a href ="studyforum.php"><img alt="Study Forum" src="img/chat.png" height="125" width="125" /></a></td>
		<td class ="column2"><a href ="study.php"><img alt="Study Advice" src="img/study.jpg" height="125" width="125" /></a></td>
		<td class ="column3"><a href ="help.php"><img alt="Help Page" src="img/support.jpg" height="125" width="125" /></a></td>
	</tr>
	<tr>
		<td class ="description">Stuck on a project and don't know who to ask? Use the study forum to ask questions, discusss college projects and talk about any study related topics.</td>
		<td class ="description">Looking for study tips and advice. This section will help you find what you are looking for.</td>
		<td class ="description">Unsure how to use this site? This is the page for you.</td>
	</tr>
</table>
</div>	

<?php require_once 'includes/html_template/footer.php';?>
