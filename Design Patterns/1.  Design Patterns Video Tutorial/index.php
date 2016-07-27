<?php 

include ('Animal.php');
include ('Dog.php');

$fido = new Dog();
$fido->setName("Fido");
echo $fido->getName();
$fido->digHole();
$fido->setWeight(-1);


 ?>