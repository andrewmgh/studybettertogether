<?php 
require_once 'includes/html_template/header.php';
require_once 'includes/functionality/publicSearch.php';
?>

<h2 class = "mainPageHeading">Search Public Files</h2>

<div class ="searchForm">
			<div class="main_form">
			<h3>Search Public Files</h3>
		
				<?php print isset($uploadMsg) ? '<div class = "hiddenField">' . $uploadMsg . '</div>': ""; ?>

				<form name="upload" action="search_publicfiles.php" method="GET" >
					<fieldset>
						<p>
						<label for="fileOwner">File Owner</label> 
						<input type="text" id="fileOwner" name = "fileOwner"  placeholder="Owner's username" <?php print isset($_GET['fileOwner']) ? 'value="'.$_GET['fileOwner'].'"' : ""; ?> />
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
					</fieldset>
						
					
					
					<div class = "submit">
					<input type="submit" name ="publicsearch" value="Search" />
					</div>
				</form>
				<a href ="search_publicfiles.php"><button>Clear Search Results</button></a>
				</div>		
	</div>

<?php print isset($searchResults) ? '<h4>Search Results</h4><div class = "tabledefault">' . $searchResults . '</div>': ""; ?>
	
<?php require_once 'includes/html_template/footer.php';?>