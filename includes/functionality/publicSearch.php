<?php 
if(($_SERVER['PHP_SELF']) != "/studybettertogether/includes/functionality/publicSearch.php"){
	if (($_SERVER['REQUEST_METHOD']== "GET") && isset($_GET['publicsearch'])) //only runs the below php code if the public search form was submitted. 
	{
		 	//Declare and initialise variables to solve any posible undefined variable errors
			$fileName = $fileOwner =  $fileType = $description = $subject = "";
			
			//Take inputs from search form, clean with sanitiseInput function if necessary and  and store in variables
			$fileName = sanitiseInput($db_con, $_GET ['fileName']);
			$fileOwner = sanitiseInput($db_con, $_GET ['fileOwner']);
			$fileType = sanitiseInput($db_con, $_GET ['fileType']);
			$description = sanitiseInput($db_con, $_GET ['description']);
			$subject = sanitiseInput($db_con, $_GET ['subject']);
			
			if($fileName || $fileOwner || $fileType || $fileType=="" || $description || $subject){
			
					$searchResults = publicSearch($db_con, $fileName, $fileOwner, $fileType, $description, $subject);
	
					if ($searchResults == ""){
						$uploadMsg = "<p> Sorry $firstname. No files match your search criteria</p>"; 
						}
					else {
						$uploadMsg = "<p> The results of your search are below</p>";
						} 
			}
			else {
				$uploadMsg = "<p>Error...You have not selected any search criteria</p>";
			}
	}

}
else {
	require_once 'protectfiles.php';
}

function publicSearch($db_con, $fileName, $fileOwner, $fileType, $description, $subject) {
	
$query = <<<_QUERY
	SELECT file_name, sharing_status, username, file_short_name, description, subject, DATE_FORMAT(DATE(upload_date),'%D %b %Y') AS new_date, file_size, file_path FROM files 
	INNER JOIN users ON files.owner_id = users.user_id
	INNER JOIN file_sharing ON files.file_id = file_sharing.sharing_id
	INNER JOIN allowed_file_types ON files.file_type_id = allowed_file_types.file_type_id 
	WHERE sharing_status = 'public' 
	AND file_name LIKE '%$fileName%' 
	AND username LIKE '%$fileOwner%' 
	AND file_short_name LIKE '%$fileType%' 
	AND description LIKE '%$description%' 
	AND subject LIKE '%$subject%';
_QUERY;

$searchQuery= newQuery($db_con, $query);
		
	//If there is at least one result from the query do the following, if not then output an error msg.
	if (mysqli_num_rows ( $searchQuery ) >= 1) {
	
$searchResults = <<<_Search
		<table>
		<tr>
		<td>File Owner</td>
		<td>File Name</td>
		<td>File Type</td>
		<td>Description</td>
		<td>Subject</td>
		<td>Upload Date</td>
		<td>Size</td>				
		<td></td>
		</tr>
_Search;
		while ( $row = mysqli_fetch_array ( $searchQuery ) ) {
			$searchResults .= "<tr><td>" . htmlentities ( $row ["username"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_name"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_short_name"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["description"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["subject"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["new_date"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_size"] ) . "</td>";			
			$searchResults .= "<td style = \"text-align: center;\">" . ProtectURL(( $row ["file_path"] )) ."</td></tr>\n";
		}
		mysqli_free_result($searchQuery);
		$searchResults .= "</table>";
		return $searchResults;
	}
	
	else {
			return "";
	} 
}
?>