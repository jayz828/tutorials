<?php 

// var_dump($_POST);

$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];


echo "<pre>";
$email_body = "";
$email_body .= "Name " . $name . "\n";
$email_body .= "Email " . $email . "\n";
$email_body .= "Details ". $details . "\n" ;

echo $email_body;
echo "</pre>";

// To Do: Send E-mail

$pageTitle = "Thank you";
$section = null;


header("location:thanks.php");
?>


