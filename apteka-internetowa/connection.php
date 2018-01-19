<?php 
Class Db {
	private static $instance = NULL;
	
	private function _construct() {}
	private function _clone() {}

	public static function getInstance(){
		if(!isset(self::$instance)){
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=pharmacy', 'root', '', $pdo_options);
      }
      return self::$instance;
	}
}
?>