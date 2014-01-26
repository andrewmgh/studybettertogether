<?php 
require_once 'includes/html_template/header.php';


if ($account_type != 'Admin') {
	header ( "location: profile.php" );
}
?>



<h2 class = "mainPageHeading">Change the Acceptable File Types </h2>
<p> Coming Soon....
</p>	



<?php require_once 'includes/html_template/footer.php';?>
