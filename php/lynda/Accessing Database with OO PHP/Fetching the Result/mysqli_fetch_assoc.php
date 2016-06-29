<?php 

	try{ 

		require_once 'includes/mysqli_connect.php';
		$sql = 'SELECT name, meaning, gender FROM names ORDER BY name';

		// $sql = 'SELECT name, meaning, gender FROM names WHERE name = "David" ORDER BY name';

		$result = $db->query($sql);
	

	} catch (Exception $e) {
		$error = $e->getMessage();
	}



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQLi Connection</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<h1>Connecting with MySQLi</h1>

	<?php

		if (isset($error)) {
			echo "<p>$error</p>";
		} else {
			echo "<p>Connection successful.</p>";
		}

		$numrows = $result->num_rows;

		if (!$numrows) {
			echo "<p>No results found.</p>";
		} else {
			echo "<p>Total results found: $numrows .</p>";
		

	  ?>

	 <table>
	 	<tr>
	 		<th>Name</th>
	 		<th>Meaning</th>
	 		<th>Gender</th>
	 	</tr>


	 	<?php while ($row = $result->fetch_assoc()) {?>
	 	<tr>
	 		<td><?php echo $row['name']; ?></td>
	 		<td><?php echo $row['meaning']; ?></td>
	 		<td><?php echo $row['gender']; ?></td>

	 	</tr>

	 	<?php } ?>
	 </table>
		


	 <?php } 		$db->close();  ?>
	
</body>
</html>