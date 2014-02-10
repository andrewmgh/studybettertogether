<?php require_once 'includes/html_template/header.php'; 

$search = <<<_SEARCH
SELECT 
username, sharing_status, file_name, file_short_name, file_size, DATE_FORMAT(DATE(upload_date),'%D %b %Y') AS new_date, file_path 
FROM 
files 
INNER JOIN users ON files.owner_id = users.user_id 
INNER JOIN file_sharing ON files.file_id = file_sharing.sharing_id
INNER JOIN allowed_file_types ON files.file_type_id = allowed_file_types.file_type_id 
WHERE sharing_status = 'public'
_SEARCH;
?>


<h2 class = "mainPageHeading">Public Files</h2>
<h5>This page displays the full list of public files available to download</h5> <br />
				<div class = "tabledefault">
				<table>
					<tr>
						<td>File Owner</td>
						<td>File Name</td>
						<td>File Type</td>
						<td>File Size</td>
						<td>Upload Date</td>
						<td>Download</td>
					</tr>
						<?php				
					$publicFiles =newQuery($db_con, $search);
					while ( $row = mysqli_fetch_array ( $publicFiles ) ) {
						echo "<tr><td>" . htmlentities ( $row ["username"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["file_name"] ) . "</td>\n";						
						echo "<td>" . htmlentities ( $row ["file_short_name"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["file_size"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["new_date"] ) . "</td>\n";
						echo "<td style = \"text-align: center;\">" . ProtectURL(( $row ["file_path"] )) ."</td></tr>\n";						
					}
					closeMySql($db_con, $publicFiles);
					?>
				</table>
				</div>
		
<?php require_once 'includes/html_template/footer.php';?>
