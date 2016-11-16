<?php 

include ('Animal.php');
include ('Dog.php');
include ('Cat.php');


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

echo "<br>";


// Start second tutorial here

$doggy  = new Dog();
$kitty  = new Cat();

echo "Doggy says: " . $doggy->getSound();
echo "<br>";

echo "Kitty says: " . $kitty->getSound();
echo "<br>";


// $animals[4] = new Animal();
$animals[] = $doggy;
$animals[]= $kitty;
var_dump($animals);
echo "<br>";


echo $animals[0]->getSound();

 ?>