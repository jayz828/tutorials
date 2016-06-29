<?php 

	try{ 

		require_once 'includes/mysqli_connect.php';
		$sql = 'SELECT name, meaning, gender FROM names ORDER BY name';

		// $sql = 'SELECT name, meaning, gender FROM names WHERE name = "David" ORDER BY name';

		$result = $db->query($sql);
	

	} catch (Exception $e) {
		$error = $e->getMessage();
	}


if (isset($error)) {
	echo "<p>Error</p>"; 
}


echo '<pre>';


	$row = $result->fetch_array();
	print_r($row);

	$row = $result->fetch_array(MYSQLI_ASSOC);
	print_r($row);

	$row = $result->fetch_array(MYSQLI_NUM);
	print_r($row);

	// $all = $result->fetch_all(MYSQLI_BOTH);
	 // $all = $result->fetch_all();
	 $all = $result->fetch_all(MYSQLI_ASSOC);
	print_r($all);

	$db->close();



echo '</pre>';