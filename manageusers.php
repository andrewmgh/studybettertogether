<?php 
require_once 'includes/html_template/header.php';
if ($account_type != 'Admin') {
	header ( "location: index.php" );
}
?>
	
<h2 class = "mainPageHeading">Details of Registered Users</h2>
<div class = "userdetails">
				<?php print isset($_GET['UpdateUser']) ? '<div class = "hiddenField"><p>' . ($_GET['UpdateUser']) . '</p></div>': ""; ?>
				<table>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Class Name</th>
						<th>Registration Date</th>
						<th>Edit</th>
						<th>Delete</th>
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
						echo "<td><a href=\"editusers.php?editUser=". $userID . "\"><button>Edit</button></a></td>\n";
						echo "<td><span onClick=\"return confirm('Are you sure you want to Delete this user? This cannot be undone! and WILL DELETE ALL THE USER\'S FILES!');\"><a href=\"includes/functionality/deleteuser.php?deleteUser=". $userID . "\"><button>Delete</button></a></span></td>\n</tr>\n";
					}
					closeMySql($db_con, $userdetails);
					?>
				</table>
				</div>		
		
<?php require_once 'includes/html_template/footer.php';?>