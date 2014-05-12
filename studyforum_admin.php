<?php 
require_once 'includes/html_template/header.php';?>



<?php 
//embeds admin section of forum into an iFrame. Session variables ensure that only the administrator can access this section
echo <<<_Form
<iframe 
width="1000px" height="900px" id="iframe_id" name="iframe_name" 
src="http://localhost/studybettertogether/forum/index.php?mode=admin" scrolling="yes" frameborder="0" 
ALLOWTRANSPARENCY="true"
 onload=resize_iframe();>
 </iframe>
_Form;
?>

 
<?php  require_once 'includes/html_template/footer.php'; ?>