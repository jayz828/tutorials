<?php 

class ProductFactory {

		private function isKeyboard($productId) {
		return substr($productId, 0,1)  == 'k';
	}

	function make($productId) {
		if ($this->isKeyboard($productId)) {
			return new Keyboard();
		}

		return new Mouse();
	}
}

 ?>