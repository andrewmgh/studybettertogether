<?php require_once 'includes/header.php';?>

<h2 class = "mainPageHeading">Acceptable File Types</h2>

<h5>The following file types are allowed to be uploaded.</h5> <br />
				<table>
					<tr>
						<th>File Name</th>
						<th>File Description</th>
						<th>File Extension</th>
					</tr>
					<?php				
					$allowedFiles =newQuery($db_con, "SELECT * FROM allowed_file_types");
					while ( $row = mysqli_fetch_array ( $allowedFiles ) ) {
						echo "<tr><td>" . htmlentities ( $row ["file_short_name"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["file_description"] ) . "</td>\n";						
						echo "<td>" . htmlentities ( $row ["file_ext"] ) . "</td></tr>\n";				
					}
					closeMySql($db_con, $allowedFiles);
					?>
				</table>


<?php require_once 'includes/footer.php';?>