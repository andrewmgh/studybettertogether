<?php
require_once 'includes/html_template/header.php';
require_once 'includes/functionality/changeUserPassword.php';
?>

<h2 class = "mainPageHeading">Change my Password</h2>
<div class ="inline_form">
	<div class="main_form">
				<?php print isset($PwdMsg) ? '<div class = "hiddenField">' . $PwdMsg . '</div>': ""; ?>
				<form onsubmit="return validatePassword()" name="updateuserpassword" action="changepassword.php" method="POST" >
				
						<p>
						<label for="newPassword">New Password: </label> 
						<input type="password" id="password" name="password" autofocus required/>
						</p>				
						<p>
						<label for="confirmPassword">Confirm Password: </label> 
						<input type="password" id="password_confirm" name="password_confirm" required/>
						</p>	
						<p>
						<input type="submit" name ="changePassword" value="Confirm" />
						</p>
					</form>
	</div>				
</div>	
<?php

 require_once 'includes/html_template/footer.php';?>


