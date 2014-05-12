<?php require_once 'includes/html_template/header.php';?>

<h2 class = "mainPageHeading">Acceptable File Types</h2>
<div class = "acceptableFiles">
<h5>The following file types are allowed to be uploaded. 
If you want to request a new file type be added then simply contact <a href="mailto:admin@studybettertogether.com?Subject=Request New File Type">Here</a></h5> <br />
			<div class = "tabledefault">
				<table>
					<tr>
						<td>File Name</td>
						<td>File Description</td>
						<td>File Extension</td>
					</tr>
					<?php
					//select accepted files from database and show in HTML table				
					$allowedFiles =newQuery($db_con, "SELECT * FROM allowed_file_types");
					while ( $row = mysqli_fetch_array ( $allowedFiles ) ) {
						echo "<tr><td>" . htmlentities ( $row ["file_short_name"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["file_description"] ) . "</td>\n";						
						echo "<td>" . htmlentities ( $row ["file_ext"] ) . "</td></tr>\n";				
					}
					closeMySql($db_con, $allowedFiles);
					?>
				</table>
			</div>
</div>
<?php require_once 'includes/html_template/footer.php';?>