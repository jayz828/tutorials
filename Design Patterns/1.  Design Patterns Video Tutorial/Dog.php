<?php 

class Dog extends Animal {


	function digHole() {
		echo "Dug a hole";
	}

	function __construct() {
		$this->setSound("Bark");

	}
}

 ?>