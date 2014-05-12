<?php
if(($_SERVER['PHP_SELF']) != "/studybettertogether/includes/db/sql_functions.php"){

	require_once 'db_connect.php';
	
	//MySQLi function to create a new query and return result. Performs error checking if query does not work
	function newQuery($db_con, $query){
		$result = mysqli_query($db_con, $query);
		if (!$result) {
			global $db_errorMsg;
			die ("<h3>The following error occurred in this query: </h3>" . "<h2>" . $db_errorMsg ."</h2>");
		}
		return $result;
	}
		
	//MySQLi function to free sql results and close db connection
	function closeMySql($db_con, $result){
		mysqli_free_result($result);
		mysqli_close($db_con);
	}

}
else {
	require_once '../functionality/protectfiles.php';
}

