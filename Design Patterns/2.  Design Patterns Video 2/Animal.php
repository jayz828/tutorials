<?php 

class Animal {
	private $name;
	protected $height;
	protected $weight;
	protected $sound;


	function setName($newName) {
		$this->name = $newName;
	}

	function getName() {
		// echo $this->name;
		return $this->name;
	}

	function setWeight($newWeight) {
		if ($newWeight > 0) {
			$weight = $newWeight;
			
		} else {
			echo("Weight must be bigger than 0. ");
		}
		
	}

	function getWeight() {
		return $this->weight;
	}

	function setSound($newSound) {
		$this->sound = $newSound;
	}

	function getSound() {
		return $this->sound;
	}

	function __set($name, $value) {
		switch ($name) {
			case "name": 
				$this->name=$value;
				break;
			case "height": 
				$this->height=$value;
				 break;
			case "weight": 
				$this->weight=$value;
				 break;
			case "sound": 
				$this->height=$value;
				 break;
			default: 
			echo $name . "Not found";

		}

		echo "Set " . $name . " to " . $value . "<br>";
	}


}

 ?>