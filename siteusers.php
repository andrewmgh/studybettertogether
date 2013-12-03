<?php 
require_once 'includes/html_template/header.php';
?>

<h2 class = "mainPageHeading">List of all Registered Users</h2>

<p>Use this table to identify the username of other students </p>

<div class = "userdetails">
				
				<table id ="help_userdetails">
					<tr>
						<th>Username</th>
						<th>First Name</th>
						<th>Last Name</th>
						

					</tr>
					<?php				
					$userdetails =newQuery($db_con, "SELECT first_name, last_name, username FROM users ORDER BY account_type ASC ");
					while ( $row = mysqli_fetch_array ( $userdetails ) ) {
						echo "<td>" . htmlentities ( $row ["username"] ) . "</td>";						
						echo "<td>" . htmlentities ( $row ["first_name"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["last_name"] ) . "</td></tr>\n";
						}
					closeMySql($db_con, $userdetails);
					?>
				</table>
				</div>	
			
<?php require_once 'includes/html_template/footer.php';?>


