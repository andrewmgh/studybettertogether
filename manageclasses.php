<?php 
require_once 'includes/html_template/header.php';
if ($account_type != 'Admin') {
	header ( "location: profile.php" );
}
?>

<h2 class = "mainPageHeading">Manage Classes</h2>

<h4>Add a New Class</h4>
	<div id ="newClass">
	<div class ="inline_form">
	<div class="main_form">
				<?php print isset($_GET['Msg']) ? '<div class = "hiddenField">' . ($_GET['Msg']) . '</div>': ""; ?>
				<form name="add_new_class" id="add_new_class" action="includes/functionality/addNewClass.php" method="POST">
					<p>
					<label for="className">Class Name: </label> 
					<input type="text" id="className" name="className" value ="<?php print isset($_GET['className']) ? ($_GET['className']) : "";?>" required />
					</p>						
					<p>
					<label for="classCode">Class Code: </label> 
					<input type="text" id="classCode" name="classCode" value ="<?php print isset($_GET['classCode']) ? ($_GET['classCode']) : "";?>" required/>
					</p>				
					<p>
					<label for="regCode">Registration Code: </label> 
					<input type="password" id="regCode" name="regCode" required/>
					</p>	
					<p>
					<input type="submit" name ="submitNewClass" value="Confirm" />
					</p>
				</form>
	</div>
	</div>					
	</div>



<div class = "classdetails">
<h4>Class Details</h4>				
				<table>
					<tr>
						<th>Class Name</th>
						<th>Class Code</th>
						<th>Class Created</th>
						<th>No. of Students</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					
					<?php		
					$classdetails = newQuery($db_con, "SELECT class_id, class_name, class_code, DATE_FORMAT(DATE(class_register_date),'%D %b %Y') AS new_date FROM classes");
					while ( $row = mysqli_fetch_array ( $classdetails ) ) {
						$classID =  htmlentities ( $row ["class_id"] );
						echo "<tr><td>" . htmlentities ( $row ["class_name"] ) . "</td>\n";						
						echo "<td>" . htmlentities ( $row ["class_code"] ) . "</td>\n";
						echo "<td>" . htmlentities ( $row ["new_date"] ) . "</td>\n";

							$countQuery = " SELECT COUNT(class_assigned_to) AS NoPerClass FROM classes INNER JOIN users ON classes.class_id = users.class_assigned_to WHERE users.class_assigned_to = \"$classID\" AND account_type = 'Student'";
							$classdetails2 =newQuery($db_con, $countQuery);
							while ( $row2 = mysqli_fetch_array ( $classdetails2 ) ) {
								echo "<td>" . htmlentities ( $row2 ["NoPerClass"] ) . "</td>\n";
							}  
						
						echo "<td><a href=\"editclasses.php?edit=". $classID . "\"><button>Edit</button></a></td>\n";
						echo "<td><span onClick=\"return confirm('Are you sure you want to Delete this user? This cannot be undone!');\"><a href=\"editclasses.php?del=". $classID . "\"><button>Delete</button></a></span></td>\n";
						echo "</form></td></tr>\n\n";
					}
					closeMySql($db_con, $classdetails);
					?>
				</table>
</div>		
						
<?php require_once 'includes/html_template/footer.php';?>