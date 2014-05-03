<?php 
require_once 'includes/db/sql_functions.php';
require_once 'includes/functionality/common_functions.php';
require_once 'includes/functionality/sessionManagement.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Study Better Together</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php 
	//detects the URL and inserts link to JavaScript file if necessary
	echo ($_SERVER['PHP_SELF'] == "/studybettertogether/upload.php") ? "<link rel='stylesheet' type='text/css' href='css/ui.dropdownchecklist.standalone.css' />"  : ""; 	
	echo ($_SERVER['PHP_SELF'] == "/studybettertogether/chatroom.php") ? "<link rel='stylesheet' type='text/css' href='css/chatroom.css' />"  : ""; 	
	if ($_SERVER['PHP_SELF'] == "/studybettertogether/changepassword.php" 
		|| $_SERVER['PHP_SELF'] == "/studybettertogether/editusers.php" 
		|| $_SERVER['PHP_SELF'] == "/studybettertogether/editclasses.php" 
		|| $_SERVER['PHP_SELF'] == "/studybettertogether/manageclasses.php") {
			echo "<script src='js/form_validation.js'></script>" ;} 	
	?>
	
	<link rel="shortcut icon" href="img/sbt_favicon.ico">
</head>

<body>
<div id="outer_header_wrapper">
	<header>
		<div id="main_header">
			<a href="home.php"><img src="img/SBT_logo.png" alt="SBT_logo" title="SBT_logo"></a>

			<span id="logout" onClick="return confirm('Are you sure you want to logout?');">
			<?php echo "<p>You are logged in as: <strong> $username </strong></p> <a href='includes/functionality/logout.php'><button>Logout</button></a>" ?>
			</span>

						<nav>
					<ul>
					<li><a href="home.php">Home</a>
						<ul>
						<li><a href="survey.php">Feedback Survey</a></li>
						</ul>
					</li>
					
						<?php echo ($account_type == 'Admin') ? "<li><a href='manageusers.php'>Manage Users</a>\n<ul><li><a href='manageclasses.php'>Manage Classes</a>\n</li>\n</ul></li>\n" : ""; ?>		
						<li><a href="upload.php">Upload Files</a>
								<ul>
									<li><a href="acceptablefiles.php">Acceptable Files</a></li>
								</ul>
						</li>								
						<li><a href="search_publicfiles.php">Public Files</a></li>
						<li><a href="search_personalfiles.php"><?php echo "$firstname's Files"?></a></li>	
						<li><a href="studyforum.php">Study Forum</a>
									<ul>
									<li><a href="chatroom.php">Chat Room</a></li>
								<?php echo ($account_type == 'Admin') ? "<li><a href='studyforum_admin.php'>Forum Admin</a></li></ul>" : "</ul>"; ?>
						</li>	
						<li><a href="study.php">Study Advice</a>
							<ul>
							<li><a href="studylinks.php">Useful Resources</a></li>
							</ul>
						</li>						
						<li id="rightMenu"><a href="help.php">Help</a>
								<ul>
									<li><a href="siteusers.php">List of Users</a></li>
									<li><a href="changepassword.php">Change Password</a></li>
								</ul>
						
						</li>
					</ul>
				</nav>		
			</div>
			<div class="clearfloats"></div>
</header>
</div>
<div id="outer_content_wrapper">
<div id="inner_content_wrapper">
<div id="main_content">
