<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class User{
	
	public static function verivikasiUser($username,$_conn){
		$query = "SELECT tbl_user.* ,tbl_daerah.daerah FROM tbl_user natural join tbl_daerah where username = :user";
		$res = Fung::eksekusi($query,array('user'=> $username),$_conn);
		
		return $res ? $res[0] : false;
	}
	
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_user","id_user",5,"U",$_conn);
		
		return $res;
	}
	
	public static function ambilSemuaUser($_conn){
		$query = "SELECT * FROM view_user";
		$res = Fung::query($query,$_conn);
		
		return $res;
	}
	
	public static function tambahUser($data,$_conn){
		$kolom = array('id_user','nama','username','password','no_hp','email','foto','id_daerah');
		$res = Fung::insert('tbl_user',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function hapusUser($id_user,$_conn){
		$query = "delete from tbl_user where kd_user = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_user),$_conn);
		
		return true;
	}
	
	public static function editUser($kd_user,$data,$_conn){
		$query = "update tbl_user set ".$data." where id_user = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_user),$_conn);
		
		return true;
	}
	
}
?>