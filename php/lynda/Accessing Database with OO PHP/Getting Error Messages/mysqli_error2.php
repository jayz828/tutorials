<?php
try {
    require_once 'includes/mysqli_connect.php';
    $sql = 'SELECT name, meaning, gender FROM nams';
    $result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MySQLi: Error Messages</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>MySQLi: Getting Error Messages</h1>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
?>

</table>
<?php $db->close(); ?>
</body>
</html>