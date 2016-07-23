<?php  


	/**
	*  Specify the methods a stregy must emply for dispaying an address
	*/

interface AddressDisplay {

	/**
	* 	AddressDisplay an Address
	*	@return string
	*/
	public static function display($address);


	/**
	*  Is this method of display available?
	*  @return boolean
	*/
	public static function isAvailable($address);
}