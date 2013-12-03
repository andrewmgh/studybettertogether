<?php require_once 'includes/html_template/header.php';?>

<?php
echo "<h2 class = \"mainPageHeading\"> $firstname's files </h2>";

$personalFiles = newQuery ( $db_con, "SELECT username, file_name, file_short_name, file_size, DATE_FORMAT(DATE(upload_date),'%D %b %Y') AS new_date, file_path FROM files INNER JOIN users ON files.owner_id = users.user_id INNER JOIN allowed_file_types ON files.file_type_id = allowed_file_types.file_type_id WHERE sharing_status = 'private' AND username ='$username'" );

if (mysqli_num_rows ( $personalFiles ) >= 1) {
	
	echo <<<_Table
	<h5>This page displays the full list of my files available to download</h5> <br />
	<table>
	<tr>
	<th>File Owner</th> 
	<th>File Name</th> 
	<th>File Type</th> 
	<th>File Size</th> 
	<th>Upload Date</th> 
	<th>Download</th> 
	</tr> 
_Table;
	while ( $row = mysqli_fetch_array ( $personalFiles ) ) {
		echo "<tr><td>" . htmlentities ( $row ["username"] ) . "</td>";
		echo "<td>" . htmlentities ( $row ["file_name"] ) . "</td>";
		echo "<td>" . htmlentities ( $row ["file_short_name"] ) . "</td>";
		echo "<td>" . htmlentities ( $row ["file_size"] ) . "</td>";
		echo "<td>" . htmlentities ( $row ["new_date"] ) . "</td>";
		echo "<td>" . ProtectURL(( $row ["file_path"] )) ."</td></tr>\n";	
	}
	closeMySql ( $db_con, $personalFiles );
	echo "</table>";	
} 

else {
	echo "<h4> Sorry $firstname. You don't have any personal files uploaded. Click <a href ='upload.php'>Here</a> to upload a file</h4>";
}

?>
				
			
<?php require_once 'includes/html_template/footer.php';?>