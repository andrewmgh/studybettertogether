<?php 
require_once 'includes/html_template/header.php';
if ($account_type != 'Admin') {
	header ( "location: index.php" );
}
?>
	
<h2 class = "mainPageHeading">Details of Registered Users</h2>
<div class = "userdetails">
				
				<table>
					<tr>
						<th>User ID</th>
						<th>Class Name</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Registration Date</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php				
					$userdetails =newQuery($db_con, "SELECT user_id, class_name, first_name, last_name, username, email, DATE_FORMAT(DATE(register_date),'%D %b %Y') AS new_date FROM users INNER JOIN classes ON classes.class_id = users.class_assigned_to WHERE account_type = 'Student'");
					while ( $row = mysqli_fetch_array ( $userdetails ) ) {
						echo "<tr><td>" . htmlentities ( $row ["user_id"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["class_name"] ) . "</td>";	
						echo "<td>" . htmlentities ( $row ["first_name"] ) . "</td>";						
						echo "<td>" . htmlentities ( $row ["last_name"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["username"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["email"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["new_date"] ) . "</td>";
						echo "<td><form><input type = 'submit' name ='editUser'  value = 'Edit'/></form></td>";
						echo "<td><form><input type = 'submit' name ='deleteUser'  value = 'Delete' onClick=\"return confirm('Are you sure you want to Delete this user? This cannot be undone!');\"/></form></td></tr>\n";
					}
					closeMySql($db_con, $userdetails);
					?>
				</table>
				</div>	
				
				

	
		
<?php require_once 'includes/html_template/footer.php';?>


