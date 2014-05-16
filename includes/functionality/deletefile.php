<?php 
//Only run the following code if the deletefile parameter is set
if ((isset($_GET['deletefile']))) {
	require_once '../db/sql_functions.php';
	require_once 'common_functions.php';
	require_once 'sessionManagement.php';
	$url = htmlentities($_SERVER['HTTP_REFERER']); 
	deleteuserFile($db_con, $_GET ['deletefile'], $userID, $url);
} 

//If deletefile is not set - log the user out
else {
	require_once 'protectfiles.php';
}


function deleteuserFile($db_con, $file_id, $user_id, $url)
{
	
	$file_id = sanitiseInput($db_con, $file_id);
	
	//If function to only delete the file if the user currently logged in is the file owner
	$ownerQuery = newQuery($db_con, "SELECT owner_id, file_name, file_path FROM files WHERE file_id ='$file_id' AND owner_id ='$user_id'");
	
	if (mysqli_num_rows ( $ownerQuery ) == 1) {
		//Delete file on server
		$row = mysqli_fetch_array ( $ownerQuery );
		$fileName = $row ["file_name"];
		$filePath = $row ["file_path"];
		unlink($filePath);
		
		//Delete file in DB
		$delete = newQuery($db_con, "DELETE FROM files WHERE file_id ='$file_id'");
		
		//Redirect user with success message
		header("Location:".$url."&del=$fileName");
		closeMySql($db_con, $ownerQuery);
		exit();

	}
	else{
		header("Location:../../search_personalfiles.php?error=true");
		closeMySql($db_con, $ownerQuery);
		exit();
	}

}

?>	

