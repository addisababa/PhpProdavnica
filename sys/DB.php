<?php
require_once "Configuration.php";
class DB{
	public static $instance = null;
	//public $conn;
	private function __construct(){
		// $this->conn = new PDO("mysql:host=".Configuration::DB_HOST.";dbname=".Configuration::DB_BASE."","".Configuration::DB_USER."","".Configuration::DB_PASS."");
	}
	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new PDO("mysql:host=".Configuration::DB_HOST.";dbname=".Configuration::DB_BASE."","".Configuration::DB_USER."","".Configuration::DB_PASS."");		
		}
		return self::$instance;
	}
}