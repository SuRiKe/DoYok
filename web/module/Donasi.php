<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Donasi{
	
	public static function tambah($data,$_conn){
		$kolom = array('id_donasi','jumlah','id_user','id_kms');
		$res = Fung::insert('tbl_donasi',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function donasi($id_kms,$donasi,$_conn){
		$query = "SELECT terkumpul from tbl_kms where id_kms = :id";
		$beff = Fung::eksekusi($query,array('id'=>$id_kms),$_conn)[0];
		$terkumpul = $beff['terkumpul'] + $donasi;
		$after = Fung::query("Insert into tbl_kms (terkumpul) value($terkumpul) where id_kms = $id_kms");
		
		return true ? true : false;
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