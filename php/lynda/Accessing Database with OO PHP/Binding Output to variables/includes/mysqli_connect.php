<?php 

$db = new mysqli('localhost','oophp','lynda','oophp');


// $db = new mysqli('localhost','oophp','lynda','oophp' 8889); If port is required


if ($db->connect_error) {
	$error = $db->connect_error;
}

