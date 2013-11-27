<?php 

if ($_SERVER['REQUEST_METHOD']== "POST") //only runs the below php code if the login form was submitted. 
{
	if (isset ($_POST ['search'])) {
	 
		//if(isset ($_POST ['fileName']) ||  isset ($_POST ['fileOwner'])  ||  isset ($_POST ['fileType'])   ||  isset ($_POST ['description'])   ||  isset ($_POST ['subject'])) {
		//Declare and initialise variables to solve any posible undefined variable errors
		$fileName = $fileOwner =  $fileType = $description = $subject = "";
		
		//Take inputs from search form, clean with sanatiseInput function if necessary and  and store in variables
		$fileName = sanatiseInput($db_con, $_POST ['fileName']);
		$fileOwner = sanatiseInput($db_con, $_POST ['fileOwner']);
		if(isset($_POST ['fileType'])){$fileType = sanatiseInput($db_con, $_POST ['fileType']);} //This isset if function was required to avoide a "Notice: Undefined Index" warning that was occuring
		$description = sanatiseInput($db_con, $_POST ['description']);
		$subject = sanatiseInput($db_con, $_POST ['subject']);
		
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