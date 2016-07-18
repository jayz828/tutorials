<?php

	/**
	*  Physical Address
	*/
	
	class Address {


		public $street_address_1;
		public $street_address_2;


		// Name of the city
		public $city_name;

		// Name of subdivision

		public $subdivision_name;

		// Postal Code
		public $postal_code;

		// Name of the Country
		public $country_name;


		// Primary key of an address.
		protected $_address_id;

		// When the record was created and last updated

		protected $_time_created;
		protected $time_last_updated;


		/**
		*   Display an address in HTML
		*   @return string
		*/

		function display() {
			$output = '';

			// Street address
			$output .= $this->street_address_1;
			if ($this->street_address_2) {
				$output .= '<br> . $this->street_address_2';
			}

			// City, Subdivision, Postal.
			$output .= '<br>';
			$output .= $this->city_name . ', ' . $this->subdivision_name;
			$output .= ' ' . $this->postal_code;

			// Country;

			$output .= '<br>';
			$output .= $this->country_name;
			return $output;
		}






	}

?>
	