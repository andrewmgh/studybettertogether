<?php 
require_once 'includes/html_template/header.php';?>


<?php 
//Embeds study forum into an iFrame

echo <<<_Form
<iframe src="forum/index.php" scrolling="yes" frameborder="0" width="1000px" height="900px" ALLOWTRANSPARENCY="true" </iframe>
_Form;
?>

 
<?php 
 require_once 'includes/html_template/footer.php';
?>
