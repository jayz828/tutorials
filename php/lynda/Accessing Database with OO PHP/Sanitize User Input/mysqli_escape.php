<?php 


if (isset($_GET['search'])) {
	try {
		require_once 'includes/mysqli_connect.php';

		// $sql ='SELECT name, meaning FROM names WHERE name LIKE "%' . 

		// $db->real_escape_string($_GET['searchterm']) . '%"';


		$searchterm = $db->real_escape_string($_GET['searchterm']);

		$sql ="SELECT name, meaning FROM names WHERE name LIKE '%$searchterm%'";

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
 	<title>MySQLi: Escaping Input</title>

 </head>
 <body>

 	<h1>MySQLi: Escaping Input</h1>


 	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

		<p><label for="searchterm">Enter a name or part of one</label>

		<input type="search" name="searchterm" id="searchterm">
		<input type="submit" name="search" value="Go">

		</p>
	</form>

	<?php 

		if (isset($error)) {
			echo "<p>$error</p>";
		} elseif (isset($result) && $result->num_rows) {

			// If the result exists and contains some rows
			while ($row = $result->fetch_assoc()) { ?>
			<p>The name <?php echo $row['name'];?> means <?php echo $row['meaning']; ?>.</p>
			<?php }
		} elseif (isset($result)) { //Other white, report nothing found ?>
			<p>No Results found</p>

		<?php }
		if (isset($db)) {
			$db->close();
		}


	 ?>
 	
 </body>
 </html>