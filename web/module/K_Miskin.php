<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Kms{
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_kms","id_kms",5,"K",$_conn);
		
		return $res;
	}
	
	public static function tambah($data,$_conn){
		$kolom = array('id_kms','nama','jumlah_anggota_keluarga','foto','no_kk','id_daerah','alamat','id_user','diskripsi','luas_tanah','status','dana','terkumpul');
		$res = Fung::insert('tbl_kms',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function tampil($limit=10,$_conn){
		$res = Fung::query("SELECT * FROM tbl_kms where status = 1 limit $limit");
	}
	
	public static function hapus($id_kms,$_conn){
		$query = "delete from tbl_kms where id_kms = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_kms),$_conn);;
		
		return true;
	}
	
	public static function edit($id_kms,$data,$_conn){
		$query = "update tbl_kms set ".$data." where id_kms = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_kms),$_conn);
		
		return true;
	}
	
}
?>