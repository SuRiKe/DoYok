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
	
	public static function tampil($limit,$_conn){
		$res = Fung::query("SELECT * FROM tbl_kms where status = 1 limit $limit",$_conn);

		return $res;
	}

	public static function tampilKms($id_kms,$_conn){
		$res = Fung::query("SELECT * FROM tbl_kms where id_kms = $id_kms",$_conn);

		return $res;
	}

	public static function persentase($id_kms,$_conn){
		$query = "SELECT id_kms,dana,terkumpul FROM tbl_kms where id_kms = $id_kms";
		$res = Fung::query($query,$_conn);
		foreach ($res as $data) {
			$terkumpul = $data['terkumpul'];
			$dana = $data['dana'];
		}

		$persentase = $terkumpul/$dana*100;
		if ($persentase >= 100) {
			$hasil = 100;
		}else{
			$hasil = round($persentase,2);
		}
		return $hasil;
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