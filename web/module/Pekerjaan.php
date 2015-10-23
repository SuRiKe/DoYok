<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Pekerjaan{
	
	public static function ambilSemua($_conn){
		$query = "SELECT * FROM tbl_pekerjaan";
		$res = Fung::query($query,$_conn);
		
		return $res;
	}
	
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_pekerjaan","id_pekerjaan",5,"P",$_conn);
		
		return $res;
	}
}
?>