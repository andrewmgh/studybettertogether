<?php 
require_once 'includes/html_template/header.php';
?>

<h2 class = "mainPageHeading">Upload Files</h2>
<p>By selecting an option from the "Sharing Status" drop down menu, you can choose to either share files with everyone (Public), share files with specific users (Specific-Sharing) or else upload your own private files (Private).
<strong>The maximum allowed file size is 5mb.</strong> </p>


		<div id ="uploadForm">
		
			
		<?php 
	
		//Once a file has been successfully uploaded, this code will retrieve the uploaded file details from the URL and display them to the user.
				print isset($_GET['Upload']) ? '<div class = "hiddenField">' . ($_GET['Upload']) . '</div>': ""; 
				if (isset($_GET['Success'])) {
					print" <div class=\"uploadSuccess\">
							<h4> Success! - the following file has been uploaded: </h4>
							<table class=\"fileDetails\">
							<tr>
							<td><strong>Name:</strong></td>
							<td>". $_GET['Name'] ."</td>
							</tr>
							<tr>
							<td><strong>Size:</strong></td>
							<td>". $_GET['Size'] ."</td>
							</tr>
							<tr>
							<td><strong>Type:</strong></td>
							<td>".$_GET['Type'] ."</td>
							</tr>
							<tr>
							<td><strong>Owner:</strong></td>
							<td>". $_GET['Owner'] ."</td>
							</tr>
							<tr>
							<td><strong>Sharing Status:</strong></td>
							<td>". $_GET['Sharing'] ."</td>
							</tr>"; 
		//Only display the specific section details if the user chose specific sharing								
					if (!($_GET['Specific'])=="") {
					print"	<tr>
							<td><strong>Shared With:</strong></td>
							<td><ul>".$_GET['Specific']."</ul></td>
							</tr>
							</table></div>";
						}
					else{
						print"</table></div>";
					}
				}
		?>
		<div class="main_form">
				<form onsubmit="return validateTC()" name="upload" action="includes/functionality/uploadFiles.php" method="POST" enctype="multipart/form-data">
					<fieldset>

					<p>
					<label for="uploadfile">Select File:</label> 
					<input type="file" id="uploadfile" name="uploadfile" required/>
					</p>			
					<p>
					<label for="description">Description:</label> 
					<textarea placeholder="Optional" name = "description"><?php print isset($_GET['Desc']) ? ($_GET['Desc']) : "";?></textarea>
					</p>
					<p>
					<label for="subject">Subject: </label> 
					<input type="text" id="subject" name="subject" placeholder="Optional" value ="<?php print isset($_GET['Sub']) ? ($_GET['Sub']) : "";?>"/>
					</p>
					<p>
					<label for="sharingStatus">Sharing Status: </label> 
					<select name ="sharingStatus" id = "sharingStatus" required>	
						<?php 
						//If the sharing status is returned as a URL parameter than show it as a value - thus keeping the form "sticky"
						print isset($_GET['SharingS']) ? "<option value=\"$_GET[SharingS]\">$_GET[SharingS]</option>" : "<option value=\"\" selected style='display:none;'>Select a Sharing Status: </option>";
						?> 
						  <option value="Public">Public</option>
						  <option value="Private">Private</option>
						  <option value="Specific">Specific User(s)</option>
					</select>
					</p>
					<p>
					<label class = "outside_label" for="terms" >Agree to upload terms and conditions: </label> 
					<span> 
					Yes <input type="radio" name="terms" value="yes" id = "yes" required />
					No <input type="radio" name="terms" value="no"  />
					</span>
					</p>
					<p id="specificSharingBox">
					<label  for="SpecificSharing">Share with <br />Specific Users: </label>
					<select id="s1" name="specificSharing[]" multiple="multiple" > <!--size="3" tabindex="1" style="height:150px; width:150px"--> 
		 				<?php  
		 				//The administrator can specifically share files with anyone, 
		 					 if($userID == "1"){
										$users =newQuery($db_con, "SELECT user_id, username FROM users WHERE user_id != '$userID'");
										while ( $row = mysqli_fetch_array ( $users ) ) {
											echo '<option values=' . $row["username"] . '>' . $row["username"] . '</option>';
										}
										mysqli_free_result($users);
								}		 					
		 						 
						//Other users (students) can only specifically share files with students registered to their same class		
							else {
									 //Retrieve username of the Administrator and then provide the Administrator as the first specific-sharing option
			 						 $result_admin = newQuery($db_con, "SELECT username FROM users WHERE user_id ='1'");
			 						 if ($row = mysqli_fetch_array($result_admin)) {
			 						 	$admin = $row['username'];
			 						 }
			 						 mysqli_free_result($result_admin);
			 						 echo '<option values=' . $admin . '>' . $admin . '</option>';
									
									//Retrieve the user's Class ID
									$result_classID = newQuery($db_con, "SELECT class_assigned_to FROM users WHERE user_id ='$userID'");
			 						 if ($row = mysqli_fetch_array($result_classID)) {
			 						 	$class_id = $row['class_assigned_to'];
			 						 }
			 						 mysqli_free_result($result_classID);		 		
		 						 
			 						 //Only display the option to share files with other users belonging to same Class
									$users =newQuery($db_con, "SELECT user_id, username FROM users WHERE user_id != '$userID' AND class_assigned_to = '$class_id'");
									while ( $row = mysqli_fetch_array ( $users ) ) {
										echo '<option values=' . $row["username"] . '>' . $row["username"] . '</option>';
									}
									mysqli_free_result($users);
							}
		 			?>
		  			</select>
 					</p> 					
					</fieldset>	
					<p class = "submit">
					<input type="submit" name ="upload" value="Upload" />
					</p>
				</form>
				</div>		
	</div>

	
<h4>Upload Terms and Conditions</h4>
	<ul class ="TaC_bullets">
	<li><p>Any unlawful, unethical or inappropriate  content is strictly banned from this site.</li>
	<li><p>This includes, but is not limited to any malicious content (computer viruses, worms, malware etc), drug related content, pornographic content or any content that is designed to harass another user.</p></li>
	<li><p>Please use your own judgement when deciding what to upload</p></li>
	<li><p>If you have to ask yourself "Should I upload this?" - than the answer is probably no!</p></li>
	</ul>
<p><strong>Any users found to be in breach of these terms will be banned and removed from this site </strong></p>


<!-- Javascript for Specific User Sharing Menu -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/ui.dropdownchecklist-1.4-min.js"></script>
<script type="text/javascript">
	//Function for Drop Down Check List - https://code.google.com/p/dropdown-check-list/
		$(document).ready(function() {
		    $("#s1").dropdownchecklist( { emptyText: "Click here to share with specific users...", width: 400, maxDropHeight: 175 } );
		});
		
	//Functions to show / hide Specific Sharing box - amended from http://stackoverflow.com/questions/7019096/jquery-dropdown-hide-show-div-based-on-value
		toggle_SpecificSharingBox = function () {
		    $("#specificSharingBox").hide();
		    
		    if ($(this).val() == 'Specific' ){
		    $("#specificSharingBox").fadeIn(500);
		    }
		    
		};
	
		$(document).ready(function() {
		    $("#sharingStatus").change(toggle_SpecificSharingBox);
		    toggle_SpecificSharingBox.apply($("#sharingStatus"));
		});

	//Validation Function for Terms & Conditions Radio Box
		function validateTC()
		{
			var yes = document.getElementById('yes').checked;	
			if (!yes){
					  alert("You need to accept the Terms and Conditions before you can upload a file. Please try again");
					  return false;
		}}	
</script>	
<?php require_once 'includes/html_template/footer.php';?>