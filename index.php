
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Study Better Together</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/unoSlider.min.css" type="text/css" />
<link rel="shortcut icon" href="img/sbt_favicon.ico">

<!-- 
source: http://unoslider.decodigothemes.com/ 
Add javascript in head instead of boddy to stop errors in slider on page refresh
-->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/unoSlider.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		// My Uno Slider
		window.unoSlider = $('#sliderId').unoSlider({speed:5,animSpeed:2000,width:900});

	});
</script>


</head>

<body>

	<div id="outer_header_wrapper">
		<header>
			<div id="main_header">
				<a href="index.php"><img src="img/SBT_logo.png" alt="SBT_logo" title="SBT_logo"></a>

				<span id="login">
					<form name="login" action="includes/functionality/login.php" method="POST">
						<label for = "username">Username: <input type="text" id="username" name="username" autofocus required></label> 
						<label for = "password">Password: <input type="password" id="password" name="password" required></label> 
						<input type="submit" name="login" value="Log In">
					</form>
					<?php print isset($_GET['Message']) ? '<span id = "login_error">' . ($_GET['Message']) . '</span>': ""; ?>
					<h6>Forgotten your password? - Please contact <a href="mailto:admin@studybettertogether.com?Subject=Password Reset">Here</a></h6>
					
				</span>
				<nav><p>.... collaborative learning through sharing resources, asking questions and discussing issues ....</p></nav>		
		</div>
				
			<div class="clearfloats"></div>
		</header>
	</div>
	<div id="outer_content_wrapper">
		<div id="inner_content_wrapperNoBorder">
		<div id="main_content">
				<div id="promotion_wraper">
				
					<div id="sliderId">
					  <ul>
					    <li class="current"><img src="img/slider/Collaborative_Learning.jpg" alt="collaborative learning"></li>
					    <li><img src="img/slider/teamwork.png" alt="teamwork" ></li>
					    <li><img src="img/slider/sharefiles.jpg" alt="sharing files"></li>
					    <li><img src="img/slider/forum2.png" alt="study forum" ></li>	
					    <li><img src="img/slider/studytips.jpg" alt="study tips" ></li>
					 						
					  </ul>
					  
					</div>
											
			</div>	
			
			<div id ="welcomeText">		
				<div id="regImg"><a href= "register.php"><img src="img/registerbtn.jpg" alt="register"></a></div><!-- Register Button - http://www.ibeaonline.org/assets/button.jpg -->
		
				<div id ="siteDescription">	
					<p><strong>StudyBetterTogether</strong> is a web application designed to promote collaborative learning among college students by providing a facility to share study resources, ask questions and discuss college related topics online.</p>
					<p>The idea for this project originated from my strong interest in e-learning along with my own experience as a class representative in which I recognised a strong need for the collaborative learning features that my web application aims to provide.
					</p>					
		</div>
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
</body>
</html>


