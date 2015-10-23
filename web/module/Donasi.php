<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Donasi{
	
	public static function tambah($data,$_conn){
		$kolom = array('id_donasi','keperluan','terkumpul','status','valid');
		$res = Fung::insert('tbl_donasi',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function hapus($id_donasi,$_conn){
		$query = "delete from tbl_donasi where id_donasi = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_donasi),$_conn);;
		
		return true;
	}
	
	public static function edit($id_donasi,$data,$_conn){
		$query = "update tbl_donasi set ".$data." where id_donasi = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_donasi),$_conn);
		
		return true;
	}
	
}
?>