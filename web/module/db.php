<?php namespace app\module;

class DB{
	
	public static function connect(){
		$user = 'ngodecom';
		$pass = 'asdjkl123';
		$dbname = 'ngodecom_db_doyok';
		$host = '192.185.79.227';
		MySQL Connection Port = 3306
		
		try {
			$conn = new \PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
			return $conn;
		} catch (Exception $e) {
			return false;
		}
	}
	
}
?>