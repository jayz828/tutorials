<?php 

	try {
	require_once 'includes/mysqli_connect.php';

	$sql = 'DELETE FROM names where name = "William"';

	$db->query($sql);

	echo 'Rows affected: ' . $db->affected_rows . '<br>';

	

	} catch (Exception $e) {
		$error = $e->getMessage();
	}


	if (isset($error)) {
		echo $error;
	}


	$db->close();
 ?>