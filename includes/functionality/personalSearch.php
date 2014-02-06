<?php 
//Use Full Index searches on fields using Match / against SQL queries
//Only show main headings in table and have an info button make a jquery pop up appear with more details on each file - http://buckwilson.me/lightboxme/


if (($_SERVER['REQUEST_METHOD']== "GET") && isset($_GET['search']))//only runs the below php code if the personal search form was submitted. 
{
	 	//Declare and initialise variables to solve any posible undefined variable errors
		$fileName = $fileOwner =  $fileType = $description = $subject = "";
		$sharingStatus = sanatiseInput($db_con, $_GET ['sharingStatus']);
		
		//if the user chose a sharing status...
		if($sharingStatus != ""){
				//Take remaining inputs from search form, clean with sanatiseInput function and store in variables
				$fileName = sanatiseInput($db_con, $_GET ['fileName']);
				$fileOwner = sanatiseInput($db_con, $_GET ['sharedBy']);
				$fileType = sanatiseInput($db_con, $_GET ['fileType']);
				$description = sanatiseInput($db_con, $_GET ['description']);
				$subject = sanatiseInput($db_con, $_GET ['subject']);		
		
				//run the search results function
				$searchResults = personalSearch($db_con, $username, $userID, $sharingStatus, $fileName, $fileOwner, $fileType, $description, $subject);

				//if no results are found, output an error, else output a success msg
				if ($searchResults == ""){
					$uploadMsg = "<p> Sorry $firstname. No files match your search criteria</p>"; 
					}
				else {
					$uploadMsg = "<p> The results of your search are below</p>";
					} 
		}
		else {
			$uploadMsg = "<p>You first need to select a sharing status</p>";
		}
	
}


function personalSearch($db_con, $username, $userID, $sharingStatus, $fileName, $fileOwner, $fileType, $description, $subject) {
	
	//Change the value of sharingStatus to match what is in the DB.
	if ($sharingStatus == "My_Public_Files"){$sharingStatus = "public";}
	if ($sharingStatus == "My_Private_Files"){$sharingStatus = "private";}
	if ($sharingStatus == "My_Specifically_Shared_Files"){$sharingStatus = "specific";}
	

	//if statements to specify what query to use
	if($sharingStatus == "Files_Shared_With_Me"){
		$amendedUserID = "-".$userID."-";
		$query = <<<_QUERY
		SELECT file_id, file_name, username, sharing_status, shared_with, owner_id, file_short_name, description, subject, file_path FROM files
		INNER JOIN users ON files.owner_id = users.user_id
		INNER JOIN file_sharing ON files.file_id = file_sharing.sharing_id
		INNER JOIN allowed_file_types ON files.file_type_id = allowed_file_types.file_type_id
		WHERE
		shared_with LIKE '%$amendedUserID%'
		AND file_name LIKE '%$fileName%'
		AND username LIKE '%$fileOwner%'
		AND file_short_name LIKE '%$fileType%'
		AND description LIKE '%$description%'
		AND subject LIKE '%$subject%'
_QUERY;
		}
	else{
		$query = <<<_QUERY
		SELECT file_id, file_name, username, sharing_status, shared_with, owner_id, file_short_name, description, subject, file_path FROM files 
		INNER JOIN users ON files.owner_id = users.user_id 
		INNER JOIN file_sharing ON files.file_id = file_sharing.sharing_id
		INNER JOIN allowed_file_types ON files.file_type_id = allowed_file_types.file_type_id 
		WHERE 
		owner_id = '$userID'
		AND file_name LIKE '%$fileName%' 
		AND username LIKE '%$fileOwner%'
		AND sharing_status LIKE '%$sharingStatus%' 
		AND file_short_name LIKE '%$fileType%' 
		AND description LIKE '%$description%' 
		AND subject LIKE '%$subject%'
_QUERY;
		}

$searchQuery= newQuery($db_con, $query);
		
	//If there is at least one result from the query - output the results, if not then output an error msg.
	if (mysqli_num_rows ( $searchQuery ) >= 1) {
$searchResults = <<<_Search
	<h4>Search Results</h4>
	<table>
	<tr>
	<th>File Owner</th>
	<th>Sharing Status</th>
	<th>Shared With</th>	
	<th>File Name</th>
	<th>File Type</th>
	<th>Description</th>
	<th>Subject</th>
	<th>Download</th>
	<th>Del</th>
	</tr>
_Search;
		while ( $row = mysqli_fetch_array ( $searchQuery ) ) {
			// convert string of user_id's into array of usernames for display
			$sharedWith = "";
			$array = explode('-', $row ["shared_with"]);
			foreach($array as $key => $value){
				if($value != ""){
					$username_result =newQuery($db_con, "SELECT username FROM users WHERE user_id = '$value'");
					$row2 = mysqli_fetch_array ( $username_result );
					$sharedWith_username =  $row2["username"];
					mysqli_free_result($username_result);
					$sharedWith.= "$sharedWith_username<br /> ";
				}
			}	

			//output search results
			$file_ID = htmlentities ( $row ["file_id"] );
			
			$searchResults .= "<tr><td>" . htmlentities ( $row ["username"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["sharing_status"] ) . "</td>";
			$searchResults .= "<td>" . $sharedWith . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_name"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_short_name"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["description"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["subject"] ) . "</td>";
			$searchResults .= "<td>" . ProtectURL(htmlentities ( $row ["file_path"] )) ."</td>";
			
			//Only show delete button if the current user is the file owner
			if ($row ["username"] == $username){
			$searchResults .= "<td><span onClick=\"return confirm('Are you sure you want to permanently Delete this file? NOTE: This cannot be undone!');\"><a href=\"includes/functionality/deletefile.php?deletefile=". $file_ID . "\"><button>Delete</button></a></span></td>\n</tr>\n";
			} 
			else{
			$searchResults .= "<td></td></tr>\n";	
			}
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

