<?php 
require_once 'includes/html_template/header.php';
require_once 'includes/functionality/admin_changeRegCode.php';
require_once 'includes/functionality/admin_changeUserPassword.php';

if ($account_type != 'Admin') {
	header ( "location: profile.php" );
}
?>
	
	<h2 class = "mainPageHeading">Admin Section</h2>

	<h4>Change Registration Code</h4>

	<div class ="inline_form">
	<div class="main_form">
				<?php print isset($regMsg) ? '<div class = "hiddenField">' . $regMsg . '</div>': ""; ?>
				<form name="changeRegCode" action="admin.php" method="POST">
					<p>
					<label for="NewRegCode">New Registration Code: </label> 
					<input type="password" id="NewRegCode" name="NewRegCode" />
					</p>				
					<p>
					<label for="ConfirmRegCode">Confirm Registration Code: </label> 
					<input type="password" id="ConfirmRegCode" name="ConfirmRegCode" />
					</p>	
						<div class = "submit">
						<input type="submit" name ="changeRegCode" value="Confirm" />
						</div>
					</form>
	</div>				
</div>
	
<h2>&nbsp;</h2>

<h4>Change Student Password</h4>
<div class ="inline_form">
	<div class="main_form">
				<?php print isset($PwdMsg) ? '<div class = "hiddenField">' . $PwdMsg . '</div>': ""; ?>
				<form name="changeStudentPassword" id="changeStudentPassword" action="admin.php" method="POST">
					<p>
					<label for="userID">User Id: </label> 
					<input type="text" id="userID" name="userID" value ="<?php print isset($userID) ? $userID : ""; ?>" />
					</p>						<p>
					<label for="newPassword">New Password: </label> 
					<input type="password" id="newPassword" name="newPassword" />
					</p>				
					<p>
					<label for="confirmPassword">Confirm Password: </label> 
					<input type="password" id="confirmPassword" name="confirmPassword" />
					</p>	
					
					<div class = "submit">
						<input type="submit" name ="changeStudentPassword" value="Confirm" />
					</div>
					</form>
	</div>				
</div>	
			
<?php require_once 'includes/html_template/footer.php';?>


