<?php

/* require_once 'db_connect.php';

$password1 = 'password1';
$token1 = sha1("$Salt1$password1$Salt2");
$query1 = "UPDATE `users` SET  `password` =  '".$token1."' WHERE  `users`.`username` = 'MimiSBT'";
$result1 = mysqli_query($db_con, $query1);


$password2 = 'password2';
$token2 = sha1("$Salt1$password2$Salt2");
$query2 = "UPDATE `users` SET  `password` =  '".$token2."' WHERE  `users`.`username` = 'amonaghan'";
$result2 = mysqli_query($db_con, $query2);


$password3 = 'password3';
$token3 = sha1("$Salt1$password3$Salt2");
$query3 = "UPDATE `users` SET  `password` =  '".$token3."' WHERE  `users`.`username` = 'Ssmith'";
$result3 = mysqli_query($db_con, $query3);


$password4 = 'password';
$token4 = sha1("$Salt1$password4$Salt2");
$query4 = "UPDATE `users` SET  `password` =  '".$token4."' WHERE  `users`.`username` = 'Brian2013'";
$result4 = mysqli_query($db_con, $query4);


$regcode = 'reg12345';
$token5 = sha1("$Salt1$regcode$Salt2");
$query5 = "UPDATE `users` SET  `register_code` =  '".$token5."' WHERE  `users`.`username` = 'Mimi2013'";
$result5 = mysqli_query($db_con, $query5);


echo "done"; 

*/

/*  USERNAMES 	/  PASSWORDS
 Mimi2013 	=  password1
amonaghan	=  password2
Ssmith 		=  password3
Brian2013	=  password4
RegCode		=  reg12345



SELECT file_name, file_type, first_name, last_name, email, account_type FROM files INNER JOIN users ON files.user_id = users.user_id
SELECT `user_id` FROM `users` WHERE `username` = 'amonaghan'
INSERT INTO 'files` (`file_id`, `user_id`, `file_name`, `file_type`, `file_path`, `file_size`, `description`, `subject`, `upload_date`) VALUES ('1', '1', 'file_name', 'ext', 'file_path', '2097152', 'description', 'subject', CURRENT_TIMESTAMP);
*/

/* <button class ="hide">Hide</button>
<button class ="show">Show</button>
<script>
$(document).ready(function(){
	$(".hide").click(function(){
		$(".banner").hide();
	});
	$(".show").click(function(){
		$(".banner").show();
	});
});
</script>
 */

/* switch ($fileError)
{
	case 0:
		$PHPErrorsPassed = true;
		break;
	case 1:
		$uploadMsg .= "error ini size <br />";
		break;
	case 2:
		$uploadMsg .= "error form size  <br />";
		break;
	case 3:
		$uploadMsg .= "The uploaded file was only partially uploaded  <br />";
		break;
	case 4:
		$uploadMsg .= "No file was uploaded  <br />";
		break;
	case 5:
		$uploadMsg .= "Missing a temporary folder  <br />";
		break;
	case 6:
		$uploadMsg .= "Failed to write file to disk  <br />";
		break;
	case 7:
		$uploadMsg .= "A PHP extension stopped the file upload  <br />";
		break;
}
$PHPErrorsPassed = false */
?>