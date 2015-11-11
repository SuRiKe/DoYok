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
			'no_kk','id_provinsi','id_kota','alamat','diskripsi','luas_tanah',
			'nama_rt','nama_kades','no_hp_rt','no_hp_kades','id_user','tgl_lapor');
		$res = Fung::insert('tbl_rumah',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function tampil($limit,$_conn){
		$query = "SELECT tbl_rumah.*, tbl_provinsi.provinsi, tbl_kabkota.kabkota from 
		tbl_rumah inner join tbl_provinsi on tbl_rumah.id_provinsi = tbl_provinsi.id_provinsi
		inner join tbl_kabkota on tbl_kabkota.id_kota = tbl_kabkota.id_kota
		where valid = 1 order by tgl_lapor desc limit $limit";

		$res = Fung::query($query,$_conn);

		return $res;
	}

	public static function tampilRumah($id_rumah,$_conn){
		$query = "SELECT tbl_rumah.*, tbl_provinsi.provinsi, tbl_kabkota.kabkota from 
		tbl_rumah inner join tbl_provinsi on tbl_rumah.id_provinsi = tbl_provinsi	.id_provinsi
		inner join tbl_kabkota on tbl_kabkota.id_kota = tbl_kabkota.id_kota
		where valid = 1 and tbl_rumah.id_rumah = $id_rumah";
		$res = Fung::query($query,$_conn);

		return $res;
	}

	public static function persentase($id_rumah,$_conn){
		$query = "SELECT dana_diperlukkan as dana ,dana_terkumpul as terkumpul FROM tbl_rumah where id_rumah = '$id_rumah'";
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
		$result = array(
			'hasil'=>$hasil,
			'dana'=>$dana,
			'terkumpul'=>$terkumpul);
		return $result;
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