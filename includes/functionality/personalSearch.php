<?php 
// Do not allow a user navigate directly to this page.
if(($_SERVER['PHP_SELF']) != "/studybettertogether/includes/functionality/personalSearch.php"){

	if (($_SERVER['REQUEST_METHOD']== "GET") && isset($_GET['search']))//only runs the below php code if the personal search form was submitted. 
	{
		 	//Declare and initialise variables to solve any possible undefined variable errors
			$fileName = $fileOwner =  $fileType = $description = $subject = "";
			$sharingStatus = sanitiseInput($db_con, $_GET ['sharingStatus']);
			
			//if the user chose a sharing status...
			if($sharingStatus != ""){
					//Take remaining inputs from search form, clean with sanitiseInput function and store in variables
					$fileName = sanitiseInput($db_con, $_GET ['fileName']);
					$fileOwner = sanitiseInput($db_con, $_GET ['sharedBy']);
					$fileType = sanitiseInput($db_con, $_GET ['fileType']);
					$description = sanitiseInput($db_con, $_GET ['description']);
					$subject = sanitiseInput($db_con, $_GET ['subject']);		
			
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
}
else {
	require_once 'protectfiles.php';
}


function personalSearch($db_con, $username, $userID, $sharingStatus, $fileName, $fileOwner, $fileType, $description, $subject) {
	
	//Change the value of sharingStatus to match what is in the DB.
	if ($sharingStatus == "All_My_Files"){$sharingStatus = "";}
	if ($sharingStatus == "My_Public_Files"){$sharingStatus = "public";}
	if ($sharingStatus == "My_Private_Files"){$sharingStatus = "private";}
	if ($sharingStatus == "My_Specifically_Shared_Files"){$sharingStatus = "specific";}
	

	//if statements to specify what query to use
	if($sharingStatus == "Files_Shared_With_Me"){
		$amendedUserID = "-".$userID."-";
		$query = <<<_QUERY
		SELECT 
		file_id, file_name, username, sharing_status, DATE_FORMAT(DATE(upload_date),'%D %b %Y') AS new_date,
		file_size, shared_with, owner_id, file_short_name, description, subject, file_path FROM files
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
		ORDER BY  `sharing_status` ASC 
_QUERY;
		
		//Start creating the results table
		$searchResults = <<<_Search
		<table>
		<tr>
		<td>Owner</td>
		<td>Sharing Status</td>
		<td>Shared With</td>
		<td>File Name</td>
		<td>File Type</td>
		<td>Description</td>
		<td>Subject</td>
		<td>Upload Date</td>
		<td>Size</td>				
		<td></td>
		</tr>
_Search;
	
	}
	else{
		$query = <<<_QUERY
		SELECT 
		file_id, file_name, username, sharing_status,DATE_FORMAT(DATE(upload_date),'%D %b %Y') AS new_date,
		file_size, shared_with, owner_id, file_short_name, description, subject, file_path FROM files 
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
		ORDER BY  `sharing_status` ASC 				
_QUERY;
		//Start creating the results table
		$searchResults = <<<_Search
		<table>
		<tr>
		<td>Sharing Status</td>
		<td>Shared With</td>
		<td>File Name</td>
		<td>File Type</td>
		<td>Description</td>
		<td>Subject</td>
		<td>Upload Date</td>
		<td>Size</td>				
		<td></td>
		<td></td>		
		</tr>
_Search;
			}

$searchQuery= newQuery($db_con, $query);
		
	//If there is at least one result from the query - output the results, if not then output an error msg.
	if (mysqli_num_rows ( $searchQuery ) >= 1) {

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
					$sharedWith.= "&#8226;$sharedWith_username<br /> ";
				}
			}	

			//output search results	
			$file_ID = htmlentities ( $row ["file_id"] );
			
			//Only display file owner if the sharing status "Files_Shared_With_Me" was chosen
			if($sharingStatus == "Files_Shared_With_Me"){
				$searchResults .= "<tr><td>" . htmlentities ( $row ["username"] ) . "</td>";
			}
			else{
				$searchResults .= "</tr>\n";
			}
			
			//Append search results common to all queries
			$searchResults .= "<td>" . htmlentities ( $row ["sharing_status"] ) . "</td>";
			$searchResults .= "<td>" . $sharedWith . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_name"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_short_name"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["description"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["subject"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["new_date"] ) . "</td>";
			$searchResults .= "<td>" . htmlentities ( $row ["file_size"] ) . "</td>";						
			$searchResults .= "<td style = \"text-align: center;\">" . ProtectURL(htmlentities ( $row ["file_path"] )) ."</td>";
			
			//Only provide delete option if the current user is the file owner
			if ($row ["owner_id"] == $userID){
			$searchResults .= "<td style = \"text-align: center;\"><span onClick=\"return confirm('Are you sure you want to permanently Delete this file? NOTE: This cannot be undone!');\"><a href=\"includes/functionality/deletefile.php?deletefile=". $file_ID . "\"><img alt=\"Delete\" title=\"Delete\" src=\"img/delete.png\"/></a></span></td>\n</tr>\n";
			} 
			else{
			$searchResults .= "</tr>\n";	
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

