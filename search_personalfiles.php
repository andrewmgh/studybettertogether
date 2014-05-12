<?php 
require_once 'includes/html_template/header.php';
require_once 'includes/functionality/personalSearch.php';
?>

<h2 class = "mainPageHeading">Search My Files</h2>

<div class ="searchForm">
			<div class="main_form">
			<h3>Search My Files</h3>
		
				<?php 
				//Only display the following variables if they are supplied via a URL parameter
				isset($_GET['del']) ? $uploadMsg="<p>The requested file \"".($_GET['del'])."\" has successfully been deleted</p>": ""; 
				isset($_GET['error']) ? $uploadMsg= "<p>You cannot delete a file that you do not own!</p>": "";
				print isset($uploadMsg) ? '<div class = "hiddenField">' . $uploadMsg . '</div>': ""; 
				?>

				<form name="upload" action="search_personalfiles.php" method="GET" >
					<fieldset>
						<p>
						<label for="sharingStatus">Sharing Status:</label> 
						<select name ="sharingStatus" required>
					
						<?php 
						//Ensuring that the sharing status dropdown will retain the value when the form is submitted - ie making the form sticky and that the dropdown menu won't contain two of the same value.
						print isset($_GET['sharingStatus']) ? '<option value="'.$_GET['sharingStatus'].'">'. str_replace("_", " ", $_GET['sharingStatus']).'</option>' : ""; 					
						print ($_GET['sharingStatus']=="All_My_Files") ? "" : '<option value="All_My_Files">All My Files</option>'; 	  
						print ($_GET['sharingStatus']=="My_Public_Files") ? "" : '<option value="My_Public_Files">My Public Files</option>'; 
						print ($_GET['sharingStatus']=="My_Private_Files") ? "" : '<option value="My_Private_Files">My Private Files</option>'; 	
						print ($_GET['sharingStatus']=="My_Specifically_Shared_Files") ? "" : '<option value="My_Specifically_Shared_Files">My Specifically Shared Files</option>'; 
						print ($_GET['sharingStatus']=="Files_Shared_With_Me") ? "" : '<option value="Files_Shared_With_Me">Files Shared With Me</option>'; 
						?>	
						</select>
						</p>
						
						<p>
						<label for="fileName">File Name</label> 
						<input type="text" id="fileName" name="fileName" placeholder="File Name" <?php print isset($_GET['fileName']) ? 'value="'.$_GET['fileName'].'"' : ""; ?> />
						</p>

						<p>
						<label for="fileType">File Type: </label> 
						<select name ="fileType">
								<?php 
								//Selects file types from db and displays them to user via a dropdown list. Also ensures dropdown list is sticky by retrieving the search value from the URL parameter
								print isset($_GET['fileType'])&&($_GET['fileType'])!="" ? '<option value="'.$_GET['fileType'].'">'.$_GET['fileType'].'</option>' : ''; 
								print '<option value="">Any File Type:</option>';
								$list_of_file_types =newQuery($db_con, "SELECT * FROM allowed_file_types");
								while ( $row = mysqli_fetch_array ( $list_of_file_types ) ) {
									echo '<option values=' . $row["file_short_name"] . '>' . $row["file_short_name"] . '</option>';
								}
								mysqli_free_result($list_of_file_types);
								?>
						</select>
						</p>	
					</fieldset>
						
					<fieldset class ="bottom">
						<p>
						<label for="description">Description </label> 
						<input type="text" id="description" name="description" placeholder="File Description" <?php print isset($_GET['description']) ? 'value="'.$_GET['description'].'"' : ""; ?> />
						</p>

						<p>
						<label for="subject">Subject </label> 
						<input type="text" id="subject" name="subject" placeholder="File Subject" <?php print isset($_GET['subject']) ? 'value="'.$_GET['subject'].'"' : ""; ?> />
						</p>
						
						<p>
						<label for="sharedBy">Shared By:</label> 
						<input type="text" id="sharedBy" name = "sharedBy"  placeholder="Username of File Owner" <?php print isset($_GET['sharedBy']) ? 'value="'.$_GET['sharedBy'].'"' : ""; ?> />
						</p>
					</fieldset>
						
					<div class = "submit">
						<input type="submit" name ="search" value="Search" /> 
					</div>
					
				</form>
				<a href ="search_personalfiles.php"><button>Clear Search Results</button></a>
				</div>		
				
	</div>


<?php print isset($searchResults) ? '<h4>Search Results</h4><div class = "tabledefault">' . $searchResults . '</div>': ""; ?>
<?php require_once 'includes/html_template/footer.php';?>