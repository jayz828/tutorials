<?php 
	

	if (isset($_GET[]'search')) {

	try {
		require_once 'include/mysqli_connect.php';

		$sql 'SELECT make, yearmade,mileage,price,description 
		FROM cars 
		LEFT JOIN makes USING (make_id) 
		WHERE make LIKE ? AND yearmade >= ? AND price  <= ?
		ORDER BY price';

		$result = $db->query($sql);

		if ($db->error) {
			$error = $db->error;
		}

	} catch (Exception $e) {
		$error = $e->getMessage();
	}

}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQLi: Prepared Statements and Transactions</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	

</body>
</html>