<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Rumah{
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_rumah","id_rumah",5,"R",$_conn);
		
		return $res;
	}
	
	public static function tambah($data,$_conn){
		$kolom = array('id_rumah','nama','jumlah_anggota_keluarga','foto',
			'no_kk','id_provinsi','alamat','diskripsi','luas_tanah','status',
			'valid','nama_rt','nama_kades','no_hp_rt','no_hp_kades','id_kota');
		$res = Fung::insert('tbl_rumah',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function tampil($limit,$_conn){
		$query = "SELECT tbl_rumah.*, tbl_lapor.tgl_lapor, tbl_user.nama as pelapor, tbl_dana.dana_terkumpul as terkumpul, tbl_dana.dana_diperlukan as dana from 
		tbl_rumah inner join tbl_lapor on tbl_rumah.id_rumah = tbl_lapor.id_rumah
		inner join tbl_user on tbl_lapor.id_user = tbl_user.id_user
		inner join tbl_dana on tbl_dana.id_rumah = tbl_rumah.id_rumah
		where valid = 1 order by tbl_lapor.tgl_lapor desc limit $limit";
		$res = Fung::query($query,$_conn);

		return $res;
	}

	public static function tampilRumah($id_rumah,$_conn){
		$query = "SELECT tbl_rumah.*, tbl_lapor.tgl_lapor, tbl_user.nama as pelapor, tbl_dana.dana_terkumpul as terkumpul, tbl_dana.dana_diperlukan as dana from 
		tbl_rumah inner join tbl_lapor on tbl_rumah.id_rumah = tbl_lapor.id_rumah
		inner join tbl_user on tbl_lapor.id_user = tbl_user.id_user 
		inner join tbl_dana on tbl_dana.id_rumah = tbl_rumah.id_rumah
		where valid = 1 and tbl_rumah.id_rumah = $id_rumah";
		$res = Fung::query($query,$_conn);

		return $res;
	}

	public static function persentase($id_rumah,$_conn){
		$query = "SELECT dana_diperlukan as dana ,dana_terkumpul as terkumpul FROM tbl_dana where id_rumah = $id_rumah";
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

	public static function hapus($id_rumah,$_conn){
		$query = "delete from tbl_rumah where id_rumah = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_rumah),$_conn);;
		
		return true;
	}
	
	public static function edit($id_rumah,$data,$_conn){
		$query = "update tbl_rumah set ".$data." where id_rumah = :id";
		$res = Fung::eksekusi($query,array('id'=>$id_rumah),$_conn);
		
		return true;
	}
	
}
?>