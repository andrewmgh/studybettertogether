<?php require_once 'includes/html_template/header.php';?>

<h2 class = "mainPageHeading">Public Files</h2>
<h5>This page displays the full list of public files available to download</h5> <br />
				<table>
					<tr>
						<th>File Owner</th>
						<th>File Name</th>
						<th>File Type</th>
						<th>File Size</th>
						<th>Upload Date</th>
						<th>Download</th>
					</tr>
					<?php				
					$publicFiles =newQuery($db_con, "SELECT username, file_name, file_short_name, file_size, DATE_FORMAT(DATE(upload_date),'%D %b %Y') AS new_date, file_path FROM files INNER JOIN users ON files.user_id = users.user_id INNER JOIN allowed_file_types ON files.file_type_id = allowed_file_types.file_type_id WHERE sharing_status = 'public'");
					while ( $row = mysqli_fetch_array ( $publicFiles ) ) {
						echo "<tr><td>" . htmlentities ( $row ["username"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["file_name"] ) . "</td>\n";						
						echo "<td>" . htmlentities ( $row ["file_short_name"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["file_size"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["new_date"] ) . "</td>\n";
						echo "<td>" . ProtectURL(( $row ["file_path"] )) ."</td></tr>\n";						
					}
					closeMySql($db_con, $publicFiles);
					?>
				</table>

		
<?php require_once 'includes/html_template/footer.php';?>
