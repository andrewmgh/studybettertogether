
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

				<span id="login">
					<form name="login" action="includes/functionality/login.php" method="POST">
						<label for = "username">Username: <input type="text" id="username" name="username" autofocus></label> 
						<label for = "password">Password: <input type="password" id="password" name="password" ></label> 
						<input type="submit" name="login" value="Log In">
					</form>
					<?php print isset($_GET['Error']) ? '<span id = "login_error">' . ($_GET['Error']) . '</span>': ""; ?>
				</span>
				<nav><p>.... collaborative learning through sharing resources, asking questions and discussing issues ....</p></nav>		
		</div>
				
			<div class="clearfloats"></div>
			
				<script>
				$(function() {
				    $('.banner').unslider();
				});
				</script>
				
		</header>
	</div>
	<div id="outer_content_wrapper">
		<div id="inner_content_wrapperNoBorder">
		<div id="main_content">
				<div id="promotion_wraper">
						<div class="banner">
					<ul>
						<li style="background-image: url(img/slider/Collaborative_Learning.jpg);">
							
						</li>	
											
						<li style="background-image: url(img/slider/Student-alone-in-library-008.jpg);">
							<h1>Tired of studying alone??</h1>
							<p>Time to start studying together.</p>
							<!-- 	<a class="btn" href="#">Button</a> -->
						</li>
												
						<li style="background-image: url(img/slider/subway.jpg);">
							<h1>Share Study Resources Online.</h1>
							<p>Share files either publicly or with specific users.</p>
							<!-- 	<a class="btn" href="#">Button</a> -->
						</li>
						<li style="background-image: url(img/slider/shop.jpg);">
							<h1>Discuss college related topics</h1>
							<p>Chat with your friends on our study forum.</p>
		
						</li>
						
						<li style="background-image: url(img/slider/teamwork.png);">
						</li>
						<li style="background-image: url(img/slider/subway.jpg);">
							<h1>Upload personal files</h1>
							<p>Not ready to shared files just yet?? Upload them so only you have access.</p>
		
						</li>
						<li style="background-image: url(img/slider/subway.jpg);">
							<h1>Share files with specific users</h1>
							<p>Choose the users that you want to share files with</p>
		
						</li>	
									
						<li style="background-image: url(img/slider/subway.jpg);">
							<h1>Study Tips &amp; Advice</h1>
							<p>Detailed advice on study tips, exam pressure.</p>
		
						</li>
						
						
					</ul>		
					</div>	
			</div>	
				<div id="regImg">		
				<p><a href= "register.php"><img src="img/registerbtn.png" alt = "register"></a></p><!-- Register Button - http://www.ibeaonline.org/assets/button.jpg -->
				</div>
				<div id="regText">
				<h3>How to register?</h3>
				<p>To register a new account you will first  need a registration code from your lecturer. 
				Once you have this code, click the registration button opposite to create a new account. <strong>Happy Studying!</strong></p>
				</div>	
				

			</div>
			</div>
		</div>
	<div class="clearfloats"></div>
	<div id="outer_footer_wrapper">
		<footer id="main_footer">
			<p>StudyBetterTogether &copy; 2013  -  <a href ="mailto:admin@studybettertogether.com">Contact Us</a></p>
		</footer>


	</div>
<!-- Source: http://unslider.com/ -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/unslider.js"></script>
	
	
	<script>
$(function() {	
$('.banner').unslider({
	speed: 1500,               //  The speed to animate each slide (in milliseconds)
	delay: 4000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: false,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: true              //  Support responsive design. May break non-responsive designs
});
});
</script>
</body>
</html>


