<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Daerah{
	
	public static function ambilSemuaDaerah($_conn){
		$query = "SELECT * FROM tbl_daerah";
		$res = Fung::query($query,$_conn);
		
		return $res;
	}
	
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_daerah","id_daerah",5,"D",$_conn);
		
		return $res;
	}
}
?>