<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Aps{
	
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_aps","id_aps",5,"A",$_conn);
		
		return $res;
	}
	
	public static function tambahAps($data,$_conn){
		$kolom = array('id_aps','nama','nisn','nama_ortu_wali','alamat','id_daerah','id_kebutuhan','id_user','foto');
		$res = Fung::insert('tbl_aps',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function hapusAps($id_ap,$_conn){
		$query = "delete from tbl_Aps where id_aps = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_aps),$_conn);;
		
		return true;
	}
	
	public static function editAps($id_aps,$data,$_conn){
		$query = "update tbl_aps set ".$data." where id_aps = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_aps),$_conn);
		
		return true;
	}
	
}
?>