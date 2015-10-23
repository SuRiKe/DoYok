<?php
	require 'module/daerah.php';
	require 'module/k_miskin.php';
	require 'module/pekerjaan.php';
	require 'module/kebutuhan.php';
	require 'module/donasi.php';
	require 'module/user.php';
	require 'module/db.php';

	use app\module\DB;
	use app\module\Daerah;
	use app\module\Pekerjaan;
	use app\module\Kebutuhan;
	use app\module\Donasi;
	use app\module\Kms;
	use app\module\Fungsi as Fung;
	
	$conn = DB::connect();
	$daerah = Daerah::ambilSemua($conn);
	$pekerjaan = Pekerjaan::ambilSemua($conn);
	$kebutuhan = Kebutuhan::ambilSemua($conn);
	
	if(isset($_POST['tambah_kms'])){
		$d_field = array('kepala_keluarga','jumlah_anggota_keluarga','no_kk','id_daerah','id_pekerjaan','alamat','id_kebutuhan','diskripsi');
		$id_user = $_SESSION['id_user'];
		$id_kms = Kms::autoId($conn);
		$foto = $_FILES['foto']['name'];
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
			move_uploaded_file($_FILES['foto']['tmp_name'], "img/profil/".$foto);
			$insert = Kms::tambah(
				array(
					'id_kms'=>$id_kms,
					'kepala_keluarga'=>$kepala_keluarga,
					'jumlah_anggota_keluarga'=>$jumlah_anggota_keluarga,
					'foto'=>$foto,
					'no_kk'=>$no_kk,
					'id_daerah'=>$id_daerah,
					'id_pekerjaan'=>$id_pekerjaan,
					'alamat'=>$alamat,
					'id_user'=>$id_user,
					'id_kebutuhan'=>$id_kebutuhan,
					'diskripsi'=>$diskripsi),$conn);
			$insertDonasi = Donasi::tambah(
				array(
					'id_donasi'=>$id_kms,
					'keperluan'=>'50000000',
					'terkumpul'=>'0',
					'status'=>'0',
					'valid'=>'1'),$conn);
			if($insert && $insertDonasi){
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

	require 'view/tambah-kms.view.php';
?>