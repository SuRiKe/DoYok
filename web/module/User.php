<?php namespace app\module; 
//requiring
require 'fungsi.php';
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class User{
	
	public static function verivikasiUser($username,$password,$_conn){
		$query = "SELECT * FROM view_user where username = :user and password = :pass";
		$res = Fung::eksekusi($query,array('user'=> $username,'pass' => $password),$_conn);
		
		return $res ? $res[0] : false;
	}
	
	public static function ambilSemuaUser($_conn){
		$query = "SELECT tbl_users.*,tbl_ekstra.ekstra
				from tbl_users natural join tbl_ekstra";
		$res = Fung::query($query,$_conn);
		
		return $res;
	}
	
	public static function tambahUser($data,$_conn){
		$kolom = array('kd_user','nama','username','password','kd_ekstra','telp');
		$res = Fung::insert('tbl_users',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function hapusUser($kd_user,$_conn){
		$query = "delete from tbl_users where kd_user = :kd";
		$res = Fung::eksekusi($query,array('kd'=>$kd_user),$_conn);;
		
		return true;
	}
	
	public static function editUser($kd_user,$data,$_conn){
		$query = "update tbl_users set ".$data." where kd_user = :kd";
		$res = Fung::eksekusi($query,array('kd'=>$kd_user),$_conn);
		
		return true;
	}
	
}
?>