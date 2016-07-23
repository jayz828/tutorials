<?php

	/**
	*  Physical Address
	*/
	
	class Address {

		// public $streetName;
		// public $subdivision_Name = 'California';
		// public $_city;  // Valid property, does not follow best practices  by implying it has a different variable scope.
		// public $time_updated = time(); // Valid property name, illegal initiazaation.

		// public $-addressId; // invalid name
		// public $city_copy = $_city; // invalid initialation because it depends on a runtime evaluation, will trigger parse error.

		// Street address
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




	}

?>
	