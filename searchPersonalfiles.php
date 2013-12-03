<?php 
require_once 'includes/html_template/header.php';
require_once 'includes/functionality/personalSearch.php';
?>


<h2 class = "mainPageHeading">Search My Files</h2>

<div class ="searchForm">
			<div class="main_form">
			<h2>Search My Files</h2>
		
				<?php print isset($uploadMsg) ? '<div class = "hiddenField">' . $uploadMsg . '</div>': ""; ?>

				<form name="upload" action="searchPersonalfiles.php" method="POST" >
					<fieldset>
						<p>
						<label for="fileOwner">File Owner</label> 
						<input type="text" id="fileOwner" name = "fileOwner"  placeholder="Owner's First Name"/>
						</p>
						
						<p>
						<label for="fileName">File Name</label> 
						<input type="text" id="fileName" name="fileName" placeholder="File Name" />
						</p>
							
						<p>
						<label for="fileType">File Type: </label> 
						<select name ="fileType">
								<option value="" disabled selected style='display:none;'>Select a File Type:</option>
								<?php 
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
						<input type="text" id="description" name="description" placeholder="File Description" />
						</p>
						<p>
						<label for="subject">Subject </label> 
						<input type="text" id="subject" name="subject" placeholder="File Subject" />
						</p>
					</fieldset>
						
					
					
					<div class = "submit">
					<input type="submit" name ="search" value="Search" />
					</div>
				</form>
				</div>		
	</div>


	<?php print isset($searchResults) ? '<div class = "searchResults">' . $searchResults . '</div>': ""; ?>
	
	

	



<?php require_once 'includes/html_template/footer.php';?>