<?php 
require_once 'includes/html_template/header.php';
?>

<h2 class = "mainPageHeading">List of all Registered Users</h2>

<p>Use this table to identify the username of other students </p>

<div class = "userdetails">
				
				<div class = "tabledefault">
				<table>
					<tr>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Username</td>
						<td>Email</td>
						<td>Class Name</td>
						<td>Registration Date</td>
					</tr>
					<?php				
					$userdetails =newQuery($db_con, "SELECT user_id, class_name, first_name, last_name, username, email, DATE_FORMAT(DATE(register_date),'%D %b %Y') AS new_date FROM users INNER JOIN classes ON classes.class_id = users.class_assigned_to WHERE account_type = 'Student'");
					while ( $row = mysqli_fetch_array ( $userdetails ) ) {
						$userID =  htmlentities ( $row ["user_id"] );
						echo "<tr><td>" . htmlentities ( $row ["first_name"] ) . "</td>\n";						
						echo "<td>" . htmlentities ( $row ["last_name"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["username"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["email"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["class_name"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["new_date"] ) . "</td>\n";
						}
					closeMySql($db_con, $userdetails);
					?>
				</table>
				</div>	
</div>					
<?php require_once 'includes/html_template/footer.php';?>


