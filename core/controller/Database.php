<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b7da8cbe3ba44c";$this->pass="92ba4f62";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_753e5c1cd88e86e";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
