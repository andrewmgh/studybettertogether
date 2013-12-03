<?php 
if ($_SERVER['REQUEST_METHOD']== "POST") //only runs the below php code if the login form was submitted. 
{
	if (isset ($_POST ['search'])) {
	 	//Declare and initialise variables to solve any posible undefined variable errors
		$fileName = $fileOwner =  $fileType = $description = $subject = "";
		
		//Take inputs from search form, clean with sanatiseInput function if necessary and  and store in variables
		$fileName = sanatiseInput($db_con, $_POST ['fileName']);
		$fileOwner = sanatiseInput($db_con, $_POST ['fileOwner']);
		if(isset($_POST ['fileType'])){$fileType = sanatiseInput($db_con, $_POST ['fileType']);} //This isset if function was required to avoide a "Notice: Undefined Index" warning that was occuring
		$description = sanatiseInput($db_con, $_POST ['description']);
		$subject = sanatiseInput($db_con, $_POST ['subject']);
		
		if($fileName || $fileOwner || $fileType || $description || $subject){
		
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

function publicSearch($db_con, $fileName, $fileOwner, $fileType, $description, $subject) {
	
$query = <<<_QUERY
	SELECT file_name, username, file_short_name, description, subject, file_path FROM files 
	INNER JOIN users ON files.owner_id = users.user_id 
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
			$searchResults .= "<tr><td>" . htmlentities ( $row ["username"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_name"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_short_name"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["description"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["subject"] ) . "</td>";
			$searchResults .= "<td>" . ProtectURL(( $row ["file_path"] )) ."</td></tr>\n";
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