<?php
if ($_SERVER ['REQUEST_METHOD'] == "POST") 
{
	if ( ($_FILES ['uploadfile'] ['name']) != "") {
		require_once '../db/sql_functions.php';
		require_once 'common_functions.php';
		require_once 'sessionManagement.php';
		validateFileUpload($db_con, $_FILES ['uploadfile'] ['name'], $_FILES ['uploadfile'] ['size'], $_FILES ['uploadfile'] ['tmp_name'], $_FILES ['uploadfile'] ['error'], $_POST ['description'], $_POST ['subject'], $_POST ['sharingStatus'], $_POST['specificSharing'], $_POST ['terms'], $username, $userID);
	}
	
	else {
		$uploadMsg = "Please choose a file to upload that is under 2mb";
		header("Location:../../upload.php?Upload=$uploadMsg");
		exit();	
	}
}

else {
	header('Location:http://localhost/studybettertogether/');
	exit();
}


//Overall function to validate upload form
function validateFileUpload($db_con, $fileName, $fileSize, $fileTempName, $fileError, $description, $subject, $sharingStatus, $specificUsers, $terms, $username, $userID ){
	
	//Retrieve, sanitize and store in variables all information needed for file upload
	$fileName = sanatiseInput ( $db_con, $fileName );
	$fileSize = sanatiseInput ( $db_con, $fileSize );
	$fileError = sanatiseInput ( $db_con, $fileError );
	$description = sanatiseInput ( $db_con, $description );
	$subject = sanatiseInput ( $db_con, $subject );
	$sharingStatus = sanatiseInput ( $db_con, $sharingStatus);
	$terms = sanatiseInput ( $db_con, $terms );
	
	//Retrieve file extension - set file path - convert specific users array to string
	$fileExtension = pathinfo ( $fileName, PATHINFO_EXTENSION );
	$filePath = setFilePath($fileName, $sharingStatus, $username);
	$specificUsers = arrayToString($db_con, $specificUsers);
		
 	//Validate upload form against custom validation functions
	$uploadMsg.= validateSharingStatus($sharingStatus);
	$uploadMsg.= validateSpecificSharing($sharingStatus, $specificUsers);
	$uploadMsg.= validateFileSize($fileSize);
	$uploadMsg.= validateTerms($terms);
	$uploadMsg.= validateFileType($db_con, $fileExtension);
	$uploadMsg.= checkIfFileExists ($filePath);
	 
	if ($uploadMsg == "")	{
	 		//retreive additional info on file type to display to user
			$fileName = stripFileExtension($fileName, $fileExtension);
			$Size_in_KB = number_format ( $fileSize / 1024 ) . ' kb';
			$Result_fileID = newQuery ( $db_con, "SELECT file_type_id, file_description from allowed_file_types WHERE file_ext ='$fileExtension'" );
			if ($row = mysqli_fetch_array ( $Result_fileID )) {
				$file_type_ID = $row ['file_type_id'];
				$file_description = $row ['file_description'];
			} 
			mysqli_free_result($Result_fileID);
			
	 		//start db transaction to commit file info
	 		mysqli_autocommit($db_con, false);
	 		$success = true;
	 		
	 		$Uploadquery1 = newQuery ( $db_con, "INSERT INTO files (`owner_id`, `file_type_id`, `file_name`, `file_path`, `file_size`, `description`, `subject`) VALUES('$userID', '$file_type_ID', '$fileName', '$filePath', '$Size_in_KB', '$description', '$subject')");
	 		$sharing_id = mysqli_insert_id($db_con);
	 		if (!$Uploadquery1) {$success = false; }
	 		
	 		$Uploadquery2 = newQuery ( $db_con, "INSERT INTO file_sharing (`sharing_id`, `sharing_status`, `shared_with` ) VALUES ('$sharing_id', '$sharingStatus', '$specificUsers')");
	 		if (!$Uploadquery2) {$success = false; }
	 		
 		
	 		//if db transaction worked.
	 	 	if ($success) {	
	 	 		//complete transaction and close db connection
	 	 		mysqli_commit($db_con); 
	 	 		mysqli_close ($db_con);
	 	 		
	 	 		//upload file
				move_uploaded_file($fileTempName, $filePath); 
	 	 			 		 		
				//return success msg with file details and redirect user to uploads page
				$output = outputSpecificUsers($specificUsers); 
				$uploadMsg = "<p> The following file was successfully uploaded: </p>
				<div class=\"uploadSuccess\">
				<ul>
				<li><strong>Name:</strong> $fileName </li>
				<li><strong>Size:</strong> $Size_in_KB</li>
				<li><strong>Type:</strong> $file_description</li>
				<li><strong>Owner:</strong> $username</li>
				<li><strong>Sharing Status:</strong> $sharingStatus</li>
				$output
				</ul>
				</div>";		 
				header("Location:../../upload.php?Upload=$uploadMsg");
				exit(); 			
	 	 	} 
	 	 		//if transaction failed, close the db connection and redirect user to uplaods page with error msg
	 		else { 
	 			mysqli_close ($db_con);
	 			$uploadMsg = "Unfortunately there was an unforseen error with your upload. Please try again.";
	 			header("Location:../../upload.php?Upload=$uploadMsg");
	 			exit();
	 		} 
 	}
 	//if upload validation failed, redirect user to uploads page with error messages
	else {
		header("Location:../../upload.php?Upload=$uploadMsg");
		exit();	
	} 
}



//Individual Upload Form Validation Functions
function validateSharingStatus($sharingStatus){
	if($sharingStatus == "public"){
		return "";
	}
	else if ($sharingStatus == "private"){
		return "";
	}
	else if ($sharingStatus == "specific"){
		return "";
	}
	else {
		return "Please choose a sharing status  <br />";
	}
}

function validateSpecificSharing ($sharingStatus, $specificUsers){
	if(($sharingStatus == "specific") && ($specificUsers == "") ){
			return "You have chosen Specific User Sharing but have not specified any users  <br />";
		}
	else{
			return "";
		}
}

function validateFileSize($fileSize){
	$maxfileSize ="2097152";
		
	if ($fileSize > 0 && $fileSize <= $maxfileSize) {
		return "";
	} else {
		return "The file must be between 1byte and 2 mb<br />";
	}
}

function validateTerms($terms){
	if ($terms == "yes") {
		return "";
	} else {
		return "You need to accept the terms and conditions  <br />";
	}
}

function validateFileType($db_con, $fileExtension){
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

function setFilePath ($fileName, $sharingStatus, $username){
	$fileName = str_replace ( ' ', '_', $fileName );
	$publicFolder = "../../../studybettertogether/files/public/";
	$privateFolder = "../../../studybettertogether/files/$username/";
	
	if ($sharingStatus == "public") {
		$filePath = $publicFolder . $fileName;
		return $filePath;
		} 
		
	elseif (($sharingStatus == "private") || ($sharingStatus == "specific")) {
		$filePath = $privateFolder . $fileName;
		makeNewUserDirectory($privateFolder);
		return $filePath;
	}
}

function checkIfFileExists ($filePath){
	if (file_exists($filePath)) {
		return "Sorry a file with this name already exists, please rename file and try again <br />";
	} else {
		return "";
	}
}

function stripFileExtension ($fileName,$fileExtension){
	//Source: http://stackoverflow.com/questions/5573334/remove-a-part-of-a-string-but-only-when-it-is-at-the-end-of-the-string
	$fileExtension_withDot = "." . "$fileExtension";
	if (substr ( $fileName, - strlen ( $fileExtension_withDot ) ) === $fileExtension_withDot) {
		$fileName = substr ( $fileName, 0, - strlen ( $fileExtension_withDot ) );
	}
	return $fileName;
}

function makeNewUserDirectory ($dirPath){
			//Create a new directory for the user
		if (!is_dir ($dirPath)) {
			mkdir ($dirPath);
			
			//Add a blank index file in directory to stop other users viewing directory contents
			$indexFile = "$dirPath"."index.html";
			$fh = fopen("$indexFile", 'w');
			fclose($fh);
		}  
}

function arrayToString ($db_con, $array){
	$string = implode(',',$array);
	$string = sanatiseInput ( $db_con, $string );
	return $string;
}

function outputSpecificUsers ($specificUsers){
	if($specificUsers){
			$array = explode(',', $specificUsers);
			foreach($array as $key => $value){			
				$sharedWith.= "<li class='specificuser'>$value</li>";
			}
			return "<li><strong>Shared With:</strong> $sharedWith";
	}
}



















?>