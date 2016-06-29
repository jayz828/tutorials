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

	<h1>MYSQLi: Reusing  Result Set</h1>

	<?php

		if (isset($error)) {
			echo "<p>$error</p>";
		} else {
			 ?>

			<ol>
					<?php while ($row = $result->fetch_assoc()) {
						echo '<li><a href="#' . $row['name'] . '">' . $row['name'] . '</a></li>';
			} ?>
			</ol>	

			<p>Lots more content here.</p>

			<dl>
				<?php 
					$result->data_seek(4);  // This line is key.  It starts the result at this point 

					while ($row=$result->fetch_assoc()) {
					echo '<dt id="' . $row['name'] .'">' . $row['name'] . '</dt>';
					echo '<dd>' . $row['meaning'] . '</dd>';

				} ?>
			</dl>	
			<?php } 	// End else
				$db->close();  ?>
		



	  


		


	 
	
</body>
</html>