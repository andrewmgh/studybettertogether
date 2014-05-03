<?php 
require_once 'includes/html_template/header.php';
if ($account_type != 'Admin') {
	header ( "location: profile.php" );
}
?>

<h2 class = "mainPageHeading">Manage Classes</h2>

<h4>Add a New Class</h4>

	<div class ="inline_form">
	<div class="main_form">
				<?php print isset($_GET['Msg']) ? '<div class = "hiddenField">' . ($_GET['Msg']) . '</div>': ""; ?>
				<form onsubmit="return validatePassword()" name="add_new_class" id="add_new_class" action="includes/functionality/addNewClass.php" method="POST">
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
					<input type="password" id="password" name="password" required/>
					</p>	
					<p>
					<label for="regCode">Confirm Reg Code: </label> 
					<input type="password" id="password_confirm" name="password_confirm" required/>
					</p>	
					
					<input type="submit" name ="submitNewClass" value="Confirm" />
					
				</form>
	</div>
	</div>					


<br />
<h4>Class Details</h4>				

<div class = "classdetails">
				<?php print isset($_GET['UpdateClass']) ? '<div class = "hiddenField"><p>' . ($_GET['UpdateClass']) . '</p></div>': ""; ?>
				<div class = "tabledefault">
				<table id = "center">
					<tr>
						<td>Class Name</td>
						<td>Class Code</td>
						<td>Class Created</td>
						<td>No. of Students</td>
						<td>Edit</td>
						<td>Delete</td>
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
						
						echo "<td style = \"text-align: center;\"><a href=\"editclasses.php?editClass=". $classID . "\"><button class='centerBtn'>Edit</button></a></td>\n";
						echo "<td style = \"text-align: center;\"><span onClick=\"return confirm('Are you sure you want to Delete this class? This cannot be undone! Also - you can only delete classes that have no students');\"><a href=\"includes/functionality/deleteclass.php?deleteClass=". $classID . "\"><button class='centerBtn'>Delete</button></a></span></td>\n";
						echo "</td></tr>\n\n";
					}
					closeMySql($db_con, $classdetails);
					?>
				</table>
				</div>
</div>		
						
<?php require_once 'includes/html_template/footer.php';?>