<?php 
require_once 'includes/html_template/header.php';?>


<!-- <h2 class = "mainPageHeading">Study Forum </h2> -->

<?php 
echo <<<_Form
<iframe 
width="1000px" height="900px" id="iframe_id" name="iframe_name" 
src="http://localhost/studybettertogether/forum/index.php" scrolling="yes" frameborder="0" 
ALLOWTRANSPARENCY="true"
 onload=resize_iframe();>
 </iframe>
_Form;
?>

<!-- 
http://localhost/studybettertogether/forum/index.php?mode=login 
http://localhost/studybettertogether/forum/index.php?mode=admin
-->
 
<?php 
 require_once 'includes/html_template/footer.php';


/*  <script type="text/javascript">
 <!--
 
 moz=document.getElementById&&!document.all
 mozHeightOffset=20
 
 function resize_iframe(){
 	document.getElementById("sizeframe").height=100 // required for Moz bug, value can be "", null, or integer
 	document.getElementById('iframe_id').height=window.frames["iframe_name"].document.body.scrollHeight+(moz?mozHeightOffset:0)
 }
 // -->
 </script>
 
 <iframe width=300 id="sizeframe" name="sizeframe" src="" scrolling="no" frameborder="yes" onload=resize_iframe()></iframe>
  */
?>
