<?php

	/*  MySQLI Database; only one connection is allowed
	*
	*/

class Database {

	private $_connection;
	// store the single instance
	private static $_instance;

	/*
	*   Get an instance of the Datbase.
	*  @return Database
	*/

	public static function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/*
	*  Constructor
	*/

	public function __construct() {
		$this->_connection = new mysqli('localhost','operationsadmin','jenelyn123','sandbox');
		// Error handling
		if (mysqli_connect_error()) {
			trigger_error('Failed to connect to MySqli: ' . mysqli_connect_error(), E_USER_ERROR);
		}
	}

	/*
	*  Emply clone magic method to prevent duplication
	*
	*/

	private function _clone() {

	}


	/*
	*	Get the mysqli connection
	*/

	public function getConnection() {
		return $this->_connection;
	}



}