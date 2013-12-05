<?php
require_once 'includes/html_template/header.php';



if ($_SERVER['REQUEST_METHOD']== "POST") //only runs the below php code if the login form was submitted.
{
	
	$specificData = $_POST['specificSharing'];
	if(isset($specificData)){
	
		$serializedoptions = implode(',',$specificData);
		
		$query = "INSERT INTO specific_sharing (`shared_with`) VALUES ('$serializedoptions')";
		
	//	echo $query;
		$result = newQuery($db_con, $query);
		
	echo "	<br /><br />";
echo "$serializedoptions <br />";
echo 'The following options were saved to database:<br /><br />';


$temp = explode(',', $serializedoptions);
	foreach($temp as $key => $value){
	echo $value . "<br />";
}


exit();
} 

	

}


?>

<h1>Upload test</h1>

<form name="upload" action="uploadTest.php" method="POST" enctype="multipart/form-data">
		<p>
		<label for="sharingStatus">Sharing Status: </label>
		<select name ="sharingStatus" id = "sharingStatus">
		<option value="none" selected style='display:none;'>Select a Sharing Status:</option>
		<option value="public">Public</option>
		<option value="private">Private</option>
		<option value="specific">Specific User(s)</option>
		</select>
		</p>
		
		 <br /><br />
		 
		<p id="specificSharingBox">
		<label  for="SpecificSharing">Share with Specific Users: </label>
		<select id="s1" name="specificSharing[]" multiple="multiple" > <!--size="3" tabindex="1" style="height:150px; width:150px"--> 
		 						 <?php 
								$users =newQuery($db_con, "SELECT username FROM users");
								while ( $row = mysqli_fetch_array ( $users ) ) {
									echo '<option values=' . $row["username"] . '>' . $row["username"] . '</option>';
								}
								mysqli_free_result($users);
								?>
		   </select>
 		</p>	 
		
		
		<p class = "submit">
			<input type="submit" name ="upload" value="Upload" />
		</p>
</form>


 


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/ui.dropdownchecklist-1.4-min.js"></script>
<script type="text/javascript">
	//Function for Drop Down Check List - https://code.google.com/p/dropdown-check-list/
		$(document).ready(function() {
		    $("#s1").dropdownchecklist( { emptyText: "Click here to share with specific users...", width: 350, maxDropHeight: 150 } );
		});
		
	//Functions to show / hide Specific Sharing box - amended from http://stackoverflow.com/questions/7019096/jquery-dropdown-hide-show-div-based-on-value
		toggle_SpecificSharingBox = function () {
		    $("#specificSharingBox").hide();
		    
		    if ($(this).val() == 'specific' ){
		    $("#specificSharingBox").show();
		    }
		};
	
		$(document).ready(function() {
		    $("#sharingStatus").change(toggle_SpecificSharingBox);
		    toggle_SpecificSharingBox.apply($("#sharingStatus"));
		});
</script>	


<?php require_once 'includes/html_template/footer.php';?>

