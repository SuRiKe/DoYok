<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class User{
	
	public static function verivikasiUser($username,$_conn){
		$query = "SELECT * FROM tbl_user where username = :user";
		$res = Fung::eksekusi($query,array('user'=> $username),$_conn);
		
		return $res ? $res[0] : false;
	}

	public static function userEmail($email,$_conn){
		$query = "SELECT * FROM tbl_user where email = :email";
		$res = Fung::eksekusi($query,array('email'=>$email),$_conn);

		return $res ? $res[0] : false;
	}

	public static function aktivasiUser($aktivasi,$_conn){
		$query = "SELECT id_user FROM tbl_user where aktivasi = :aktivasi";
		$res = Fung::eksekusi($query,array('aktivasi'=>$aktivasi),$_conn);

		return $res ? $res[0] : false;
	}

	public static function aktivasiUser1($aktivasi,$_conn){
		$query = "SELECT id_user FROM tbl_user where aktivasi = :aktivasi and aktiv = '0'";
		$res = Fung::eksekusi($query,array('aktivasi'=>$aktivasi),$_conn);

		return $res ? $res[0] : false;
	}
	
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_user","id_user",5,"U",$_conn);
		
		return $res;
	}
	
	public static function ambilSemuaUser($_conn){
		$query = "SELECT * FROM tbl_user natural join tbl_daerah";
		$res = Fung::query($query,$_conn);
		
		return $res;
	}
	
	public static function tambahUser($data,$_conn){
		$kolom = array('id_user','nama','username','password','no_hp','email','foto','tingkat','no_ktp','jenis_kelamin');
		$res = Fung::insert('tbl_user',$data,$kolom,$_conn);
		
		return $res;
	}

	public static function daftarUser($data, $_conn){
		$kolom = array('id_user','email','password','aktivasi');
		$res = Fung::insert('tbl_user',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function hapusUser($id_user,$_conn){
		$query = "delete from tbl_user where kd_user = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_user),$_conn);
		
		return true;
	}
	
	public static function editUser($id_user,$data,$_conn){
		$query = "update tbl_user set ".$data." where id_user = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_user),$_conn);
		
		return true;
	}
	
}
?>