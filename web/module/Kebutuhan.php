<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Kebutuhan{
	
	public static function ambilSemua($_conn){
		$query = "SELECT * FROM tbl_kebutuhan";
		$res = Fung::query($query,$_conn);
		
		return $res;
	}
	
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_kebutuhan","id_kebutuhan",5,"B",$_conn);
		
		return $res;
	}
}
?>