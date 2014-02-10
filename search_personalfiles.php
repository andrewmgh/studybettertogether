<?php 
require_once 'includes/html_template/header.php';
require_once 'includes/functionality/personalSearch.php';
?>

<h2 class = "mainPageHeading">Search My Files</h2>

<div class ="searchForm">
			<div class="main_form">
			<h2>Search My Files</h2>
		
				<?php isset($_GET['del']) ? $uploadMsg="<p>The requested file \"".($_GET['del'])."\" has sucessfully been deleted</p>": ""; ?>
				<?php print isset($uploadMsg) ? '<div class = "hiddenField">' . $uploadMsg . '</div>': ""; ?>

				<form name="upload" action="search_personalfiles.php" method="GET" >
					<fieldset>
						<p>
						<label for="sharingStatus">*Sharing Status:</label> 
						<select name ="sharingStatus" required>
						<?php print isset($_GET['sharingStatus']) ? '<option value="'.$_GET['sharingStatus'].'">'.$_GET['sharingStatus'].'</option>' : '<option value="" selected style="display:none;">Select a Sharing Status:</option>'; ?>						
							  <option value="My_Public_Files">My Public Files</option>
							  <option value="My_Private_Files">My Private Files</option>
							  <option value="My_Specifically_Shared_Files">My Specifically Shared Files</option>
							  <option value="Files_Shared_With_Me">Files Shared With Me</option>
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
				<a href ="search_personalfiles.php"><button class=\"filesBtn\">Clear Search Results</button></a>
				</div>		
				
	</div>


<?php print isset($searchResults) ? '<h4>Search Results</h4><div class = "tabledefault">' . $searchResults . '</div>': ""; ?>
<?php require_once 'includes/html_template/footer.php';?>