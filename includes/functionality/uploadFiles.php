<?php
if ($_SERVER ['REQUEST_METHOD'] == "POST") 
{
	if ( ($_FILES ['uploadfile'] ['name']) != "") {
		require_once '../db/sql_functions.php';
		require_once 'common_functions.php';
		
		session_start ();
		$username = $_SESSION ['username'];
		$userID = $_SESSION ['userID'];
		
		validateFileUpload($db_con, $_FILES ['uploadfile'] ['name'], $_FILES ['uploadfile'] ['size'], $_FILES ['uploadfile'] ['tmp_name'], $_FILES ['uploadfile'] ['error'], $_POST ['description'], $_POST ['subject'], $_POST ['sharingStatus'], $_POST ['terms'], $username, $userID);
	}
	
	else {
		$uploadMsg = "You have not entered a file";
		header("Location:../../upload.php?Error=$uploadMsg");
		exit();	
	}
}

else {
	header('Location:http://localhost/studybettertogether/');
	exit();
}


//Overall function to validate upload form
function validateFileUpload($db_con, $fileName, $fileSize, $fileTempName, $fileError, $description, $subject, $sharingStatus, $terms, $username, $userID ){
	
	//Retrieve, sanitize and store in variables all information needed for file upload
	$fileName = sanatiseInput ( $db_con, $fileName );
	$fileSize = sanatiseInput ( $db_con, $fileSize );
	$fileError = sanatiseInput ( $db_con, $fileError );
	$description = sanatiseInput ( $db_con, $description );
	$subject = sanatiseInput ( $db_con, $subject );
	$sharingStatus = sanatiseInput ( $db_con, $sharingStatus);
	$terms = sanatiseInput ( $db_con, $terms );
	
	$fileExtension = pathinfo ( $fileName, PATHINFO_EXTENSION );
	$filePath = setFilePath($fileName, $sharingStatus, $username);
	$uploadMsg = "";
	
 	//Validate upload form against custom validation functions
	$uploadMsg.= validateSharingStatus($sharingStatus);
	$uploadMsg.= validateFileSize($fileSize);
	$uploadMsg.= validateTerms($terms);
	$uploadMsg.= validateFileType($db_con, $fileExtension);
	$uploadMsg.= checkIfFileExists ($filePath);
	
	
	if ($uploadMsg=="")	{
		$fileName = stripFileExtension($fileName, $fileExtension);
		$Size_in_KB = number_format ( $fileSize / 1024 ) . ' kb';
		
		$Result_fileID = newQuery ( $db_con, "SELECT file_type_id, file_description from allowed_file_types WHERE file_ext ='$fileExtension'" );
		if ($row = mysqli_fetch_array ( $Result_fileID )) {
			$file_type_ID = $row ['file_type_id'];
			$file_description = $row ['file_description'];
		} 
		
 	move_uploaded_file ( $fileTempName, $filePath );
 		
		//$NewFile = newQuery ( $db_con, "INSERT INTO files (`user_id`, `sharing_status`, `file_name`, `file_type_id`, `file_path`, `file_size`, `description`, `subject`) VALUES ('" . $userID . "', '" . $sharingStatus . "', '" . $fileName . "', '" . $file_type_ID . "', '" . $filePath . "', '" . $Size_in_KB . "', '" . $description . "', '" . $subject . "')" );
		//mysqli_close ( $db_con );
		
		// return information on file uploaded
		$uploadMsg = "$filePath". "$fileTempName";
/* 		
		"<p> The following file was successfully uploaded: </p>
		<div class=\"uploadSuccess\">
		<ul>
		<li><strong>Name:</strong> $fileName </li>
		<li><strong>Size:</strong> $Size_in_KB</li>
		<li><strong>Type:</strong> $file_description</li>
		<li><strong>Sharing Status:</strong> $sharingStatus</li>
		<li><strong>Owner:</strong> $username</li>
		</ul>
		</div>	" */
				
		
		header("Location:../../upload.php?Error=$uploadMsg");
		exit();
	}
	else {
		header("Location:../../upload.php?Error=$uploadMsg");
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
	else {
		return "Please choose a sharing status  <br />";
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
	$publicFolder = "http://localhost/studybettertogether/files/public/";
	$privateFolder = "http://localhost/studybettertogether/files/$username/";
	
	if ($sharingStatus == "public") {
		$filePath = $publicFolder . $fileName;
		return $filePath;
		} 
		
	elseif ($sharingStatus == "private") {
		$filePath = $privateFolder . $fileName;
	//	if (! is_dir ($privateFolder)) {mkdir ( $privateFolder);}
		return $filePath;
	}
}

function checkIfFileExists ($filePath){
	if (file_exists ( $filePath )) {
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



























?>