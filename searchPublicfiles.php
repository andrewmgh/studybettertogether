<?php require_once 'includes/header.php';?>
<?php 

if ($_SERVER['REQUEST_METHOD']== "POST") //only runs the below php code if the login form was submitted. 
{
	if (isset ($_POST ['search'])) {
	 
		//if(isset ($_POST ['fileName']) ||  isset ($_POST ['fileOwner'])  ||  isset ($_POST ['fileType'])   ||  isset ($_POST ['description'])   ||  isset ($_POST ['subject'])) {
		//Declare and initialise variables to solve any posible undefined variable errors
		$fileName = $fileOwner =  $fileType = $description = $subject = "";
		
		//Take inputs from search form, clean with cleanSQLinput function if necessary and  and store in variables
		$fileName = cleanSQLinput($db_con, $_POST ['fileName']);
		$fileOwner = cleanSQLinput($db_con, $_POST ['fileOwner']);
		if(isset($_POST ['fileType'])){$fileType = cleanSQLinput($db_con, $_POST ['fileType']);} //This isset if function was required to avoide a "Notice: Undefined Index" warning that was occuring
		$description = cleanSQLinput($db_con, $_POST ['description']);
		$subject = cleanSQLinput($db_con, $_POST ['subject']);
		
		if($fileName || $fileOwner || $fileType || $description || $subject){
		
			//This 'scramble' code was needed to stop blank fields from being included in the %% wildcard searches when doing OR searches
		/* 	$scramble ="dfhdhfhsd///dkfjdk(*&734xx";
			if(!($fileName)) {$fileName = $scramble;}
			if(!($fileOwner)) {$fileOwner = $scramble;}
			if(!($fileType)) {$fileType = $scramble;}
			if(!($description)) {$description = $scramble;}
			if(!($subject)) {$subject = $scramble;} */
					
			//Query the db.
			 $q = "SELECT file_name, first_name, file_short_name, description, subject, file_path FROM files INNER JOIN users ON files.user_id = users.user_id INNER JOIN allowed_file_types ON files.file_type_id = allowed_file_types.file_type_id WHERE sharing_status = 'public' AND file_name LIKE '%" . $fileName . "%' AND  first_name LIKE '%" . $fileOwner . "%' AND file_short_name LIKE '%" . $fileType . "%' AND description LIKE '%" . $description . "%' AND subject LIKE '%" . $subject . "%'";
			
			$searchQuery= newQuery($db_con, $q);
			
			//If there is at least one result from the query do the following, if not then output an error msg.
			if (mysqli_num_rows ( $searchQuery ) >= 1) {
				
$searchResults = <<<_Search
	<h4>Search Results</h4>
	<table>
	<tr>
	<th>File Owner</th>
	<th>File Name</th>
	<th>File Type</th>
	<th>Description</th>
	<th>Subject</th>
	<th>Download</th>
	</tr>
_Search;
				while ( $row = mysqli_fetch_array ( $searchQuery ) ) {
					$searchResults .= "<tr><td>" . htmlentities ( $row ["first_name"] ) . "</td>";
					$searchResults .= "<td>" . htmlentities ( $row ["file_name"] ) . "</td>";
					$searchResults .= "<td>" . htmlentities ( $row ["file_short_name"] ) . "</td>";
					$searchResults .= "<td>" . htmlentities ( $row ["description"] ) . "</td>";
					$searchResults .= "<td>" . htmlentities ( $row ["subject"] ) . "</td>";
					$searchResults .= "<td>" . ProtectURL(( $row ["file_path"] )) ."</td></tr>\n";
				}
				mysqli_free_result($searchQuery);
				$searchResults .= "</table>";
				$uploadMsg = "<p> The results of your search are below</p>";
					}
			
			else {
			$uploadMsg = "<p> Sorry $firstname. No files match your search criteria</p>";
			} 
			
		}
		else {
			$uploadMsg = "<p>Error...You have not selected any search criteria</p>";
		}
	}
}




?>


<h2 class = "mainPageHeading">Search Public Files</h2>

<div class ="searchForm">
			<div class="main_form">
			<h2>Search Public Files</h2>
		
				<?php print isset($uploadMsg) ? '<div class = "hiddenField">' . $uploadMsg . '</div>': ""; ?>

				<form name="upload" action="searchPublicfiles.php" method="POST" >
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
	
	

	



<?php require_once 'includes/footer.php';?>