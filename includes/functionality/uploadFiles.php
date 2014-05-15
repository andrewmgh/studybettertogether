<?php
//only runs the below php code if requested by a POST method. This is a security measure to stop people navigating directly to this URL
if ($_SERVER ['REQUEST_METHOD'] == "POST") 
{
	if ( ($_FILES ['uploadfile'] ['name']) != "") {
		require_once '../db/sql_functions.php';
		require_once 'common_functions.php';
		require_once 'sessionManagement.php';
		uploadFile($db_con, $_FILES ['uploadfile'] ['name'], $_FILES ['uploadfile'] ['size'], $_FILES ['uploadfile'] ['tmp_name'], $_FILES ['uploadfile'] ['error'], $_POST ['description'], $_POST ['subject'], $_POST ['sharingStatus'], $_POST['specificSharing'], $_POST ['terms'], $username, $userID);
	}
	
	else {
		$uploadMsg = "Please choose a file to upload that is under 5mb";
		header("Location:../../upload.php?Upload=$uploadMsg");
		exit();	
	}
}

else {
	require_once 'protectfiles.php';
}

//Overall function to validate upload form, upload the file to server and commit file details to database.
function uploadFile($db_con, $fileName, $fileSize, $fileTempName, $fileError, $description, $subject, $sharingStatus, $specificUsers, $terms, $username, $userID ){
	
	//Retrieve, sanitise and store in variables all information needed for file upload
	$fileName = sanitiseInput ( $db_con, $fileName );
	$fileSize = sanitiseInput ( $db_con, $fileSize );
	$fileError = sanitiseInput ( $db_con, $fileError );
	$description = sanitiseInput ( $db_con, $description );
	$subject = sanitiseInput ( $db_con, $subject );
	$sharingStatus = sanitiseInput ( $db_con, $sharingStatus);
	$terms = sanitiseInput ( $db_con, $terms );
	
	//Retrieve file extension 
	$fileExtension = pathinfo ( $fileName, PATHINFO_EXTENSION );
	
	//set file path
	$filePath = setFilePath($fileName, $userID);
	
	//if needed, convert specific users array to a string
	if(!($specificUsers=="")){
	$specificUsersID = arrayToString($db_con, $specificUsers);
	}
		
 	//Validate upload form against individual validation functions
	$uploadMsg.= validateSharingStatus($sharingStatus);
	$uploadMsg.= validateSpecificSharing($sharingStatus, $specificUsers);
	$uploadMsg.= validateFileSize($fileSize);
	$uploadMsg.= validateTerms($terms);
	$uploadMsg.= validateFileType($db_con, $fileExtension);
	$uploadMsg.= checkIfFileExists ($filePath);

	//if there were no upload validation errors....
	if ($uploadMsg == "")	{
		 //retrieve additional info on file type to display to user
				
				//retrieve file name less the file extension
				$fileName = stripFileExtension($fileName, $fileExtension);
				
				//convert file size to a more readable format
				$Size_in_KB = number_format ( $fileSize / 1024 ) . ' kb';
				
				//select the file type ID and the file description from the db
				$Result_fileID = newQuery ( $db_con, "SELECT file_type_id, file_description from allowed_file_types WHERE file_ext ='$fileExtension'" );
				if ($row = mysqli_fetch_array ( $Result_fileID )) {
					$file_type_ID = $row ['file_type_id'];
					$file_description = $row ['file_description'];
				} 
				mysqli_free_result($Result_fileID);
				
				//if needed, convert specific users to a bulleted list
				$output = outputSpecificUsers($db_con, $specificUsers);
			
		//start database transaction to commit file info
		 		mysqli_autocommit($db_con, false);
		 		$success = true;
		 		
		 		$Uploadquery1 = newQuery ( $db_con, "INSERT INTO files (`owner_id`, `file_type_id`, `file_name`, `file_path`, `file_size`, `description`, `subject`) VALUES('$userID', '$file_type_ID', '$fileName', '$filePath', '$Size_in_KB', '$description', '$subject')");
		 		$sharing_id = mysqli_insert_id($db_con);
		 		if (!$Uploadquery1) {$success = false; }
		 		
		 		$Uploadquery2 = newQuery ( $db_con, "INSERT INTO file_sharing (`sharing_id`, `sharing_status`, `shared_with` ) VALUES ('$sharing_id', '$sharingStatus', '$specificUsersID')");
		 		if (!$Uploadquery2) {$success = false; }
		 		
	 		
		//if database transaction worked.
		 	 	if ($success) {	
		 	 		//complete transaction and close database connection
		 	 		mysqli_commit($db_con); 
		 	 		mysqli_close ($db_con);
		 	 		
		 	 		//upload file to server
		 	 		move_uploaded_file($fileTempName, $filePath); 
		 	 		chmod($filePath, 0755);
		 	 			 		 		
					//return details of uploaded file and redirect user to uploads page
					header("Location:../../upload.php?Success=$uploadMsg&Name=$fileName&Size=$Size_in_KB&Type=$file_description&Owner=$username&Sharing=$sharingStatus&Specific=$output");
					exit(); 			
		 	 	} 
				
		 	 //if transaction failed, close the database connection and redirect user to uploads page with error msg
		 		else { 
		 			mysqli_close ($db_con);
		 			$uploadMsg = "Unfortunately there was an unforeseen error with your upload. Please try again.";
		 			header("Location:../../upload.php?Upload=$uploadMsg&Desc=$description&Sub=$subject&SharingS=$sharingStatus");
		 			exit();
		 		} 
 	}
 	//if upload validation failed, redirect user to uploads page with error messages
	else {
		header("Location:../../upload.php?Upload=$uploadMsg&Desc=$description&Sub=$subject&SharingS=$sharingStatus");
		
		exit();	
	} 
}



//multiple functions used in validating the upload form and converting the data to a readable format
function validateSharingStatus($sharingStatus){
//ensures that the sharing status is correct
	if($sharingStatus == "Public"){
		return "";
	}
	else if ($sharingStatus == "Private"){
		return "";
	}
	else if ($sharingStatus == "Specific"){
		return "";
	}
	else {
		return "Please choose a sharing status  <br />";
	}
}

function validateSpecificSharing ($sharingStatus, $specificUsers){
//if the specific sharing status is selected, then at least one specific user to share the file with must also be selected
	if(($sharingStatus == "Specific") && ($specificUsers == "") ){
			return "You have chosen Specific User Sharing but have not specified any users  <br />";
		}
	else{
			return "";
		}
}

function validateFileSize($fileSize){
//ensures that the file size is under the set limit - 5mb
	$maxfileSize ="5242880"; 
	if ($fileSize > 0 && $fileSize <= $maxfileSize) {
		return "";
	} else {
		return "The file must be between 1byte and 5 mb<br />";
	}
}

function validateTerms($terms){
//ensures that the upload terms and conditions were accepted
	if ($terms == "yes") {
		return "";
	} else {
		return "You need to accept the terms and conditions  <br />";
	}
}

function validateFileType($db_con, $fileExtension){
//ensures that the uploaded file was one of the allowed file types as specified by the allowed_file_types table in the database
	$result = newQuery($db_con, "SELECT * from allowed_file_types WHERE file_ext ='$fileExtension'" );
	$row = mysqli_fetch_array($result);
	if (mysqli_num_rows ($result) == 1) {
		return "";
	}
	else {
		return "The file type is not valid. Click <a href=\"acceptablefiles.php\">Here</a> to view the list of allowed files types you can upload  <br />";
	}
	mysqli_free_result ( $result );		
}

function setFilePath ($fileName, $user_id){
//sets the file path for the uploaded file and creates a new user directory if needed
	
	$fileName = str_replace ( ' ', '_', $fileName );//replace any spaces in the file name with underscores to avoid possible naming issues
	$userDirectory = "../../../studybettertogether/files/$user_id/";//set the user directory path
	$filePath = $userDirectory . $fileName; //the file path is the directory path plus the file name
	makeNewUserDirectory($userDirectory); //run this function to create a new user directory if needed
	return $filePath;
}

function checkIfFileExists ($filePath){
//ensures that the uploaded file does not overwrite a previously uploaded file of the same name
	if (file_exists($filePath)) {
		return "Sorry a file with this name already exists, please rename file and try again <br />";
	} else {
		return "";
	}
}

function stripFileExtension ($fileName,$fileExtension){
//removes the file extension from the full file name for the purpose of separating the file name and file extension when displaying the uploaded file details to the user
//based on this source: http://stackoverflow.com/questions/5573334/remove-a-part-of-a-string-but-only-when-it-is-at-the-end-of-the-string
	$fileExtension_withDot = "." . "$fileExtension";
	if (substr ( $fileName, - strlen ( $fileExtension_withDot ) ) === $fileExtension_withDot) {
		$fileName = substr ( $fileName, 0, - strlen ( $fileExtension_withDot ) );
	}
	return $fileName;
}

function makeNewUserDirectory ($dirPath){
//Create a new directory for the user if not already created
	if (!is_dir ($dirPath)) {
		mkdir ($dirPath, 0755);
	
		//Add a blank index file in this new directory to stop people from viewing directory contents
		$indexFile = "$dirPath"."index.html";
		$fh = fopen("$indexFile", 'w+');
		fclose($fh);
	}  
}

function arrayToString ($db_con, $array){
//takes in the array of user ID's from specific sharing and converts these into a string seperated by a dash
	$string = "-";
	foreach($array as $key => $value){
		$value = sanitiseInput ( $db_con, $value ); //sanitise each value in the array
		$string .= "$value"."-"; //append the user ID to a string seperated by a dash
	}
	return $string;
}

function outputSpecificUsers ($db_con, $array){
//takes in the array of user ID's from specific sharing (if set), retrieves the relevant usernames and then converts these into a bulleted list to display to the user
	if (isset($array)) {
		foreach($array as $key => $value){
			$userResult =newQuery($db_con, "SELECT username FROM users WHERE user_id = '$value'"); //select the username based on the user ID
			$row = mysqli_fetch_array ( $userResult );
			$username =  $row["username"];
			mysqli_free_result($userResult);
			$sharedWith.= "<li>".htmlentities($username)."</li>"; //append the username to a bulleted list
		}
		return $sharedWith;
	}
	
	else{
	return "";
	}
}
?>