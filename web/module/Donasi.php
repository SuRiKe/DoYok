<?php namespace app\module; 
//menggunakkan beberapa namespace
use app\module\Fungsi as Fung;

class Donasi{
	
	public static function autoId($_conn){
		$res = Fung::autoId("tbl_donasi","id_donasi",5,"D",$_conn);
		
		return $res;
	}

	public static function tambah($data,$_conn){
		$kolom = array('id_donasi','jumlah_donasi','id_user','id_rumah','tgl_donasi');
		$res = Fung::insert('tbl_donasi',$data,$kolom,$_conn);
		
		return $res;
	}
	
	public static function donasi($id_rumah,$donasi,$_conn){
		$query = "SELECT dana_diperlukkan,dana_terkumpul from tbl_rumah where id_rumah = :id";
		$beff = Fung::eksekusi($query,array('id'=>$id_rumah),$_conn)[0];
		$terkumpul = $beff['dana_terkumpul'] + $donasi;
		if ($dana_diperlukkan <= $terkumpul) {
			$after = Fung::eksekusi("UPDATE tbl_rumah set dana_terkumpul = $terkumpul, status=1 where id_rumah = :id",array('id'=>$id_rumah),$_conn)[0];
		}else{
			$after = Fung::eksekusi("UPDATE tbl_rumah set dana_terkumpul = $terkumpul where id_rumah = :id",array('id'=>$id_rumah),$_conn)[0];
		}
		
		
		return $after;
	}

	public static function tambahDetail($data,$_conn){
		$kolom = array('id_donasi','id_keperluan','jumlah','total');
		$res = Fung::insert('tbl_donasi_detail',$data,$kolom,$_conn);

		return $res;
	}

	public static function jumlahDonatur($id_rumah,$_conn){
		$query = "SELECT count(id_user) as jumlah, id_user from tbl_donasi where id_rumah = '$id_rumah' group by id_user";
		$res = Fung::query($query,$_conn);

		foreach ($res as $data) {
			$jumlah = $data['jumlah'];
		}

		return $jumlah;
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