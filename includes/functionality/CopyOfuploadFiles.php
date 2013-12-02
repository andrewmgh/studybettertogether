<?php
if ($_SERVER ['REQUEST_METHOD'] == "POST") // only runs the below php code if the login form was submitted. This avoids the $uploadMsg box from setting itself upon page load
{
	// The following variables need to be initialsed before the upload button has been clicked
	$maxfileSize = "2097152"; // max size 2mb
	$php_ini_maxfileSize = "8388608"; // post-max-size as set by php ini - 8mb
	$uploadMsg = "<p>Error...</p>";
	
	// Makes sure that the upload button has been clicked and the form size is less than the $php_ini_maxfileSize.
	// This was the best way I could show the php error msg of posts over 8mb as this error stops any of the below code from occuring
	if ((isset ( $_POST ['upload'] )) && ($_SERVER ['CONTENT_LENGTH'] < $php_ini_maxfileSize)) {
		
		// Declare and initialise variables to solve any posible undefined variable errors
		$description = $subject = $fileError = $fileName = $fileNameClean = $fileSize = $fileTempName = $terms = $sharingStatus = $filePath = "";
		$filesizeOK = $filetypeValid = $fileExists = $termsAccepted = $sharingStatusChosen = false;
		
		// Take inputs from uploads form, clean with sanatiseInput function if necessary and and store in variables
		$fileError = sanatiseInput ( $db_con, $_FILES ['uploadfile'] ['error'] );
		$fileName = sanatiseInput ( $db_con, $_FILES ['uploadfile'] ['name'] );
		$fileSize = sanatiseInput ( $db_con, $_FILES ['uploadfile'] ['size'] );
		$fileTempName = $_FILES ['uploadfile'] ['tmp_name'];
		$description = sanatiseInput ( $db_con, $_POST ['description'] );
		$subject = sanatiseInput ( $db_con, $_POST ['subject'] );
				// This isset if function was required to avoide a "Notice: Undefined Index" warning that was occuring
		if (isset ( $_POST ['sharingStatus'] )) { $sharingStatus = sanatiseInput ( $db_con, $_POST ['sharingStatus'] );	} 
		$terms = sanatiseInput ( $db_con, $_POST ['terms'] );
		
		if ($fileName != "") { // Only run below code if a file has been submitted.
		                     
			// make a new directory for the user if one doesn't already exist
			if (! is_dir ( "..//studybettertogether/files/" . $username )) {
				mkdir ( "..//studybettertogether/files/" . $username );
			}
			
			// define constants for public and private folders
			define ( 'PUBLIC_FOLDER', '..//studybettertogether/files/public/' );
			define ( 'PRIVATE_FOLDER', '..//studybettertogether/files/' . $username . '/' );
			
			// search the file name for spaces and replace them with underscores. This is to avoid errors with spaces in file names on Linux systems
			$fileNameClean = str_replace ( ' ', '_', $fileName );
			
			// retreive the file extension using the pathinfo function
			$fileExtension = pathinfo ( $fileName, PATHINFO_EXTENSION );
			
			// Remove file extension from end of file name - Source: http://stackoverflow.com/questions/5573334/remove-a-part-of-a-string-but-only-when-it-is-at-the-end-of-the-string
			$fileExtension_withDot = "." . "$fileExtension";
			if (substr ( $fileName, - strlen ( $fileExtension_withDot ) ) === $fileExtension_withDot) {
				$fileName = substr ( $fileName, 0, - strlen ( $fileExtension_withDot ) );
			}
			
			// convert file size into more readable format
			$Size_in_KB = number_format ( $fileSize / 1024 ) . ' kb';
			
			// Retrieves userID from DB based on session username. Stores in variable '$userID'
			$Result_userID = newQuery ( $db_con, "SELECT user_id FROM users WHERE username ='$username'" );
			if ($row = mysqli_fetch_array ( $Result_userID )) {
				$userID = $row ['user_id'];
			}
			mysqli_free_result ( $Result_userID );
			
			// Multiple IF statements to validate input. 
					// Checks if sharingSatus has been selected
					if ($sharingStatus == "public") {
						$filePath = PUBLIC_FOLDER . $fileNameClean;
						$sharingStatusChosen = true;
					} elseif ($sharingStatus == "private") {
						$filePath = PRIVATE_FOLDER . $fileNameClean;
						$sharingStatusChosen = true;
					} else {
						$uploadMsg .= "Please choose a sharing status  <br />";
					}
					
					// If the file doesn't exist that set $filenotExists to true, otherwise display an error msg
					if (file_exists ( $filePath )) {
						$fileExists = true;
						$uploadMsg .= "Sorry a file with this name already exists, please rename file and try again <br />";
					} else {
						$fileExists = false;
					}
					
					// Check if file size is too big and also catch POST Content-Length errors for files that exceed the php.ini restriction of 8mb
					if ($fileSize > 0 && $fileSize <= $maxfileSize) {
						$filesizeOK = true;
					} else {
						$uploadMsg .= "The file must be between 1byte and 2 mb<br />";
					}
					
					// Checks if file type is valid by comparing file extension to DB. If valid, retrieves file_id from DB and stores in variabe $file_type_ID
					$Result_fileID = newQuery ( $db_con, "SELECT file_type_id, file_description from allowed_file_types WHERE file_ext ='$fileExtension'" );
					if ($row = mysqli_fetch_array ( $Result_fileID )) {
						$filetypeValid = true;
						$file_type_ID = $row ['file_type_id'];
						$file_description = $row ['file_description'];
					} 
		
					else {
						$uploadMsg .= "The file type is not valid. Click <a href=\"acceptablefiles.php\">Here</a> to view the list of allowed files types you can upload  <br />";
					}
					mysqli_free_result ( $Result_fileID );
					
					// Check if terms and conditions have been accepted
					if ($terms == "yes") {
						$termsAccepted = true;
					} else {
						$uploadMsg .= "You need to accept the terms and conditions  <br />";
					}
			
			// if all input is valiated, insert input into database using the newQuery function. Then start session and output login success message.
			if ($filesizeOK && ! $fileExists && $filetypeValid && $termsAccepted && $sharingStatusChosen) {
				// move files from temp folder to public folder and rename
				move_uploaded_file ( $fileTempName, $filePath );
				
				// insert relevant data into db
				$NewFile = newQuery ( $db_con, "INSERT INTO files (`user_id`, `sharing_status`, `file_name`, `file_type_id`, `file_path`, `file_size`, `description`, `subject`) VALUES ('" . $userID . "', '" . $sharingStatus . "', '" . $fileName . "', '" . $file_type_ID . "', '" . $filePath . "', '" . $Size_in_KB . "', '" . $description . "', '" . $subject . "')" );
				mysqli_close ( $db_con );
				
				// return information on file uploaded
				$uploadMsg = "<p> The following file was successfully uploaded: </p>
				<div class=\"uploadSuccess\">
				<ul>
				<li><strong>Name:</strong> $fileName </li>
				<li><strong>Size:</strong> $Size_in_KB</li>
				<li><strong>Type:</strong> $file_description</li>
				<li><strong>Sharing Status:</strong> $sharingStatus</li>
				<li><strong>Owner:</strong> $username</li>
				</ul>
				</div>	";
			}
		} 

		else {
			$uploadMsg .= "You have not entered a file";
		}
	} else {
		$uploadMsg .= "This file is above the maximum size of 2mb";
	}
}

/*
 * //append the username to the start of each file name to avoid files being overwritten $fileLocation = PUBLIC_FOLDER.$username.'/'.$username.'-';
 */
?>