<?php //
	require 'module/daerah.php';
	require 'module/rumah.php';
	require 'module/db.php';

	use app\module\DB;
	use app\module\Daerah;
	use app\module\Rumah;
	use app\module\Fungsi as Fung;
	
	$conn = DB::connect();
	
	if(isset($_POST['tambah_rumah'])){
		$d_field = array('nama','jumlah_anggota_keluarga','no_kk','id_provinsi','id_kota','alamat','diskripsi','luas_tanah','nama_rt','nama_kades','no_hp_rt','no_hp_kades');
		$id_user = $_SESSION['id_user'];
		$id_rumah = Rumah::autoId($conn);
		$foto = $_FILES['foto']['name'];
		$tgl_lapor = date('Y'."-".'m'."-".'d');

		if(empty($foto)){  
			$error['foto'] = 'foto tidak boleh kosong';  
		}
		foreach($d_field as $field){
			$$field = $_POST[$field];
			if(empty($$field)){  
				$error[$field] = $field.' tidak boleh kosong';  
			}
		}
		if(empty($error)){
			move_uploaded_file($_FILES['foto']['tmp_name'], "img/rumah_kmiskin/".$foto);
			$insert = Rumah::tambah(
				array(
					'id_rumah'=>$id_rumah,
					'nama'=>$nama,
					'jumlah_anggota_keluarga'=>$jumlah_anggota_keluarga,
					'foto'=>$foto,
					'no_kk'=>$no_kk,
					'id_provinsi'=>$id_provinsi,
					'alamat'=>$alamat,
					'diskripsi'=>$diskripsi,
					'luas_tanah'=>$luas_tanah,
					'id_kota'=>$id_kota,
					'nama_rt'=>$nama_rt,
					'nama_kades'=>$nama_kades,
					'no_hp_rt'=>$no_hp_rt,
					'no_hp_kades'=>$no_hp_kades,
					'id_user'=>$id_user,
					'tgl_lapor'=>$tgl_lapor),$conn);
			if($insert){
				$msg['tambah_kms'] = '
					<div class="alert alert-success" role="alert">
						<strong>Sukses!</strong> Data sudah dimasukkan ke Database
					</div>
				';
			}else{
				$msg['tambah_kms'] = '
					<div class="alert alert-danger" role="alert">
						<strong>Gagal!</strong> Data belum berhasil dimasukkan ke Database, coba ulangi lagi!
					</div>
				';
			}
		}
	}

	require 'view/lapor.view.php';
?>