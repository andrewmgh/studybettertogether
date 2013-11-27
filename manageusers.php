<?php require_once 'includes/header.php';

if ($account_type != 'Admin') {
	header ( "location: profile.php" );
}



//Delete user and remove user file directory

?>

<h2 class = "mainPageHeading">Details of Registered Users</h2>
<div id = "userdetails">
				
				<table>
					<tr>
						<th>User ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Registration Date</th>
						<th>Delete</th>
					</tr>
					<?php				
					$userdetails =newQuery($db_con, "SELECT user_id, first_name, last_name, username, email, register_date FROM users WHERE account_type = 'Student'");
					while ( $row = mysqli_fetch_array ( $userdetails ) ) {
						echo "<tr><td>" . htmlentities ( $row ["user_id"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["first_name"] ) . "</td>";						
						echo "<td>" . htmlentities ( $row ["last_name"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["username"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["email"] ) . "</td>";
						echo "<td>" . htmlentities ( $row ["register_date"] ) . "</td>";
						echo "<td><form><input type = 'submit' name ='deleteUser'  value = 'Delete User' onClick=\"return confirm('Are you sure you want to Delete this user? This cannot be undone!');\"/></form></td></tr>\n";
					}
					closeMySql($db_con, $userdetails);
					?>
				</table>
				</div>	
			
<?php require_once 'includes/footer.php';?>


