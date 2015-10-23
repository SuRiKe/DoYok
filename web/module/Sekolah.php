<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Sekolah{
	
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_sekolah","id_sekolah",5,"S",$_conn);
		
		return $res;
	}
	
	public static function tambahSekolah($data,$_conn){
		$kolom = array('id_sekolah','nama_sekolah','NPSN','id_kebutuhan','id_daerah','alamat','id_user','foto');
		$res = Fung::insert('tbl_sekolah',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function hapusSekolah($id_sekolah,$_conn){
		$query = "delete from tbl_sekolah where id_sekolah = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_sekolah),$_conn);;
		
		return true;
	}
	
	public static function editSekolah($id_sekolah,$data,$_conn){
		$query = "update tbl_sekolah set ".$data." where id_sekolah = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_sekolah),$_conn);
		
		return true;
	}
	
}
?>