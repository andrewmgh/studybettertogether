<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Study Better Together</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="img/sbt_favicon.ico">
</head>

<body>

	<div id="outer_header_wrapper">
		<header>
			<div id="main_header">
				<a href="index.php"><img src="img/SBT_logo.png" alt="SBT_logo" title="SBT_logo"></a>
				<span id="returnHome">
					<a href="index.php"><button>Back to Home Page</button></a>
				</span>
				<nav><p>.... collaborative learning through sharing resources, asking questions and discussing issues ....</p></nav>	
			</div>
			<div class="clearfloats"></div>
		</header>
	</div>
	<div id="outer_content_wrapper">
		<div id="inner_content_wrapperNoBorder">
		<div id="main_content">
		<div id ="registerForm">
		
			<div class="main_form">
					<h3>Registration Form</h3>
					<?php print isset($_GET['Error']) ? '<div class = "hiddenField">' . ($_GET['Error']) . '</div>': ""; ?>
					<form name="registerForm" action="includes/functionality/registerNewUser.php" method="POST" onsubmit="return validateRegForm()">
						<fieldset>
						<p>
						<label for="firstname">First Name: </label> 
						<input type="text" id="firstname" name="firstname" value ="<?php print isset($_GET['Fname']) ? ($_GET['Fname']) : "";?>" autofocus required/>
						</p>			
						<p>
						<label for="lastname">Last Name: </label> 
						<input type="text" id="lastname" name="lastname" value ="<?php print isset($_GET['Lname']) ? ($_GET['Lname']) : "";?>" required/>
						</p>
						<p>
						<label for="email">Email: </label> 
						<input type="email" id="email" name="email" value ="<?php print isset($_GET['email']) ? ($_GET['email']) : "";?>" required/>
						</p>	
						<p>
						<label for="username">Username: </label> 
						<input type="text" id="username" name="username" value ="<?php print isset($_GET['Uname']) ? ($_GET['Uname']) : "";?>" required/>
						</p>
						<p>
						<label for="password">Password: </label>  
						<input type="password" id="password" name="password" value ="<?php print isset($_GET['pwd']) ? ($_GET['pwd']) : "";?>" required/>
						</p>
						<p>
						<label for="password_confirm">Confirm Password: </label> 
						<input type="password" id="password_confirm" name="password_confirm" required/>
						</p>
						<p>
						<label for="classname">Select Your Class: </label> 
						<select name ="classname" required>
								<?php print isset($_GET['Cname']) ? "<option value=\"$_GET[Cname]\">$_GET[Cname]</option>" : "<option value=\"\" disabled selected style='display:none;'>Choose from one of the following: </option>";?>
								<?php
								require_once 'includes/functionality/common_functions.php';
								require_once 'includes/db/sql_functions.php';
								isset($_GET['Cname']) ? $list_of_classes =newQuery($db_con, "SELECT * FROM classes WHERE class_name != '" . $_GET['Cname'] ."'") : $list_of_classes =newQuery($db_con, "SELECT * FROM classes");
 								while ( $row = mysqli_fetch_array ( $list_of_classes ) ) {
									echo '<option values=' . $row["class_name"] . '>' . $row["class_name"] . '</option>';
								}
								closeMySql($db_con, $list_of_classes);
								?>
						</select>
						</p>					
						<p>
						<label for="register_code">Registration Code: </label> 
						<input type="password" id="register_code" name="register_code" value ="<?php print isset($_GET['reg']) ? ($_GET['reg']) : "";?>" required/>
						</p>
						</fieldset>
						<p class = "submit">
						<input type="submit" name ="register" value="Register" />
						</p>
					</form>
			
				</div>	
		
			</div>
		<div id="regText">
		<h3>How to register?</h3>
		<p>To register a new account you will first  need a registration code from your lecturer. 
		Once you have this code, fill in the above registration form and click Register. <strong>Happy Studying!</strong></p>
		</div>		
			
		</div>
	</div>
	</div>
	<div class="clearfloats"></div>
	<div id="outer_footer_wrapper">
	<footer id="main_footer">
				<p><b>Note:</b> This website is a fourth year college project and not for commercial use. I do not own or claim to own any of the images used on this site.</p>
				<p>If you are the owner of an image I am using and you wish for me to take it down, please contact me <a href ="mailto:admin@studybettertogether.com">here</a> with the name of the image and I will take it down immediately.</p>
	</footer>

	</div>
<script src="js/form_validation.js"></script>
	
</body>
</html>


