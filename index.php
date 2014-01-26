
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Study Better Together</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="img/sbt_favicon.ico">

<!-- I had to move the unslider JavaScript and CSS to this head section in order to minimise the style errors caused on page refresh -->

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

<!-- UNSLIDER CSS - Source: http://unslider.com/style.css  -->
<style type="text/css">
.banner *  {
	-webkit-font-smoothing: antialiased;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.banner {
	position: relative;
	overflow: automatic;
	font-size: 18px;
	line-height: 24px;
	text-align: center;
	color: rgba(255,255,255,.6);
	text-shadow: 0 0 1px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.3);
	margin: 0 0 20px 5px;
	padding: 0;
	
}
	.banner ul {
		list-style: none;
		margin: 0;
		padding: 0;
	}
	.banner ul li {
		display: block;
		float: left;
		overflow: hidden;
		height: 300px;
		-webkit-background-size: 100% 100%;
		-moz-background-size: 100% 100%;
		-o-background-size: 100% 100%;
		-ms-background-size: 100% 100%;
		background-size: 100% 100%;	
		-moz-border-radius: 50px;
		-webkit-border-radius: 50px;
		-o-border-radius: 50px;         
		border-radius: 50px;
	}
	
	.banner h1, .banner h2 {
		font-size: 30px;
		line-height: 20px;
		font-weight: 350;
		font-family: bree-web, Bree, sans-serif;
		color: #fff;
		margin-top: 160px;
		padding: 0;
		bottom: 0;
	}
		
	.banner .btn, .banner .dot {
		-webkit-filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
		-moz-filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
		-ms-filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
		-o-filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
		filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
	}
	
	.banner .dots {
		position: absolute;
		left: 0;
		right: 0;
		bottom: 10px;
	}
	
	.banner .dots li {
			display: inline-block;
			width: 10px;
			height: 10px;
			margin: 0 4px;
			text-indent: -999em;
			border: 1px solid #000000;
			border-radius: 6px;
			cursor: pointer;
			opacity: .4;
			-webkit-transition: background .5s, opacity .5s;
			-moz-transition: background .5s, opacity .5s;
			transition: background .5s, opacity .5s;
		}
	
	.banner .dots li.active {
				background: #fff;
				opacity: 1;
			}
</style>
</head>

<body>

	<div id="outer_header_wrapper">
		<header>
			<div id="main_header">
				<img src="img/SBT_logo.png" alt="logo">

				<span id="login">
					<form name="login" action="includes/functionality/login.php" method="POST">
						<label for = "username">Username: <input type="text" id="username" name="username" autofocus required></label> 
						<label for = "password">Password: <input type="password" id="password" name="password" required></label> 
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
						<li style="background-image: url(img/slider/teamwork.png);"></li>					
						<li style="background-image: url(img/slider/Student-alone-in-library-008.jpg);">
							<h1>Tired of studying alone??</h1>
							<p>Time to start studying together.</p>
							<!-- 	<a class="btn" href="#">Button</a> -->
						</li>
												
						<li style="background-image: url(img/slider/subway.jpg);">
							<h1>Share Study Resources Online.</h1>
							<p>Share files either publicly or with specific users</p>
							<!-- 	<a class="btn" href="#">Button</a> -->
						</li>
						<li style="background-image: url(img/slider/shop.jpg);">
							<h1>Discuss college related topics</h1>
							<p>Chat with your friends on our study forum</p>
		
						</li>

						<li style="background-image: url(img/slider/subway.jpg);">
							<h1>Upload personal files</h1>
							<p>Not ready to shared files just yet?? Upload them so only you have access</p>
		
						</li>
						<li style="background-image: url(img/slider/subway.jpg);">
							<h1>Share files with specific users</h1>
							<p>Choose the users that you want to share files with</p>
		
						</li>	
									
						<li style="background-image: url(img/slider/subway.jpg);">
							<h1>Study Tips &amp; Advice</h1>
							<p>Detailed advice on study tips, exam pressure</p>
		
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
			<p><b>Note:</b> This website is a fourth year college project and not for commercial use. I do not own or claim to own any of the images used on this site.</p>
			<p>If you are the owner of an image I am using and you wish for me to take it down, please contact me <a href ="mailto:admin@studybettertogether.com">here</a> with the name of the image and I will take it down immediately.</p>
</footer>


	</div>

</body>
</html>


