<?php namespace app\module;

class DB{
	
	public static function connect(){
		$user = 'root';
		$pass = 'root';
		$dbname = 'db_doyok';
		$host = 'localhost';
		
		try {
			$conn = new \PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
			return $conn;
		} catch (Exception $e) {
			return false;
		}
	}
	
}
?>