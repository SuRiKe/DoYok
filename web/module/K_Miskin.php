<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Kms{
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_kms","id_kms",5,"K",$_conn);
		
		return $res;
	}
	
	public static function tambahKms($data,$_conn){
		$kolom = array('id_kms','kepala_keluarga','jumlah_anggota_keluarga','foto','no_kk','id_daerah','id_pekerjaan','alamat','id_user','id_kebutuhan');
		$res = Fung::insert('tbl_kms',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function hapusKms($id_kms,$_conn){
		$query = "delete from tbl_kms where id_kms = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_kms),$_conn);;
		
		return true;
	}
	
	public static function editKms($id_kms,$data,$_conn){
		$query = "update tbl_kms set ".$data." where id_kms = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_kms),$_conn);
		
		return true;
	}
	
}
?>