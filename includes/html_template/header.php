<?php 
require_once 'includes/db/sql_functions.php';
require_once 'includes/functionality/common_functions.php';

// start session and store username in a variable. If the session variable username is not set redirect users to the index page to log in.
session_start ();
if (isset ( $_SESSION ['username'] )) {
	$username = $_SESSION ['username'];
	

// select the account type from the database based on the above username and store in the variable $account_type
	$account_search = newQuery($db_con, "SELECT first_name, account_type FROM users WHERE username = '".$username."'");
	
	if (mysqli_num_rows ( $account_search ) == 1) {
		$row = mysqli_fetch_array ( $account_search );
		$account_type = $row ['account_type'];
		$firstname_fromDB = $row ['first_name'];
		mysqli_free_result($account_search);
	}
	
//store firstname in a variable	
	$_SESSION ['firstname'] = $firstname_fromDB;
	$firstname = $_SESSION ['firstname'];
	
}
else {
	closeMySql($db_con, $account_search);
	header ( "location: index.php" );
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Study Better Together</title>
		<link rel="stylesheet" href="css\reset.css" />
		<link rel="stylesheet" href="css\style.css" />
		<link rel="shortcut icon" href="img/sbt_favicon.ico" />
</head>

<body>
<div id="outer_header_wrapper">
	<header>
		<div id="main_header">
			<img src="img/sbt2.PNG" alt="logo">

			<span id="logout" onClick="return confirm('Are you sure you want to logout?');">
			<?php echo "<p>You are logged in as: <strong> $username </strong></p> <a href='includes/functionality/logout.php'><button>Logout</button></a>" ?>
			</span>

						<nav>
					<ul>
						<?php echo ($account_type == 'Admin') ? "<li><a href='admin.php'>Admin</a>\n<ul><li><a href='manageusers.php'>Manage Users</a>\n<li><a href='changeFileTypes.php'>Change File Types</a></li></li>\n</ul></li>\n" : ""; ?>
						<li><a href="profile.php"><?php echo "$firstname" ?></a>
								<ul>
									<li><a href="changepassword.php">Change Password</a></li>
								</ul>
						</li>		
						<li><a href="study.php">Study Advice</a>
								<ul>
									<li><a href="#">Academic Writing</a></li>
									<li><a href="#">Presentation Skils</a></li>
									<li><a href="#">Exam Stress</a></li>
									<li><a href="#">Useful Links</a></li>
								</ul>
						</li>		
						<li><a href="upload.php">Upload Files</a>
								<ul>
									<li><a href="acceptablefiles.php">Acceptable Files</a></li>
								</ul>
						</li>								
						<li><a href="publicfiles.php">Public Files</a>
								<ul>
									<li><a href="searchPublicfiles.php">Search Files</a></li>
								</ul>
						</li>
						<li><a href="personalfiles.php"><?php echo "$firstname's Files"?></a>
								<ul>
									<li><a href="searchPersonalfiles.php">Search My Files</a></li>
								</ul>
						</li>	
						<li><a href="studyforum.php">Study Forum</a></li>
						<li id="rightMenu"><a href="help.php">Help</a></li>
					</ul>
				</nav>		
			</div>
			<div class="clearfloats"></div>
</header>
</div>
<div id="outer_content_wrapper">
<div id="inner_content_wrapper">
<div id="main_content">