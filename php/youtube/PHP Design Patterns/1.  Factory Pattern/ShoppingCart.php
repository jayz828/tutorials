<?php 

class ShoppingCart {
	private $productsInTheCart = array();
	private $productFactory;

	public function __construct() {
		$this->productFactory = new ProductFactory();
	}

	function add($productId) {

		$this->productsInTheCart[] = $this->proudctFactory->make($productId);

	}

	// private function isKeyboard($productId) {
	// 	return substr($productId, 0,1)  == 'k';
	// }

	// function makeProductFromId($productId) {
	// 	if ($this->isKeyboard($productId)) {
	// 		return new Keyboard();
	// 	}

	// 	return new Mouse();
	// }
}

 ?>