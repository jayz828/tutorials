<?php 

include ('Animal.php');
include ('Dog.php');


echo "<br>";
$fido = new Dog();
echo "<br>";
$fido->setName("Fido");
echo "<br>";
echo $fido->getName();
echo "<br>";
$fido->digHole();
echo "<br>";
$fido->setWeight(-1);


 ?>