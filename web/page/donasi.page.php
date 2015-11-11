<?php 
	require 'module/rumah.php';
	require 'module/donasi.php';
	require 'module/db.php';

	use app\module\Donasi;
	use app\module\Rumah;
	use app\module\DB;
	use app\module\Fungsi as Fung;

	$id = $_GET['rumah'];
	$conn = DB::connect();
	$keperluan = Rumah::keperluan($id,$conn);

	if(isset($_POST['donasi'])){
		$id_donasi = Donasi::autoId($conn);
		$id_kms = $_GET['rumah'];
		$jumlah = $_POST['jumlah'];
		$id_user = $_SESSION['id_user'];

		if(empty($jumlah)){  
			$error['jumlah'] = 'jumlah tidak boleh kosong';  
		}

		if(empty($error)){
			$insert = Donasi::tambah(
				array(
				'id_user' => $id_user,
				'jumlah' => $jumlah,
				'id_donasi' => $id_donasi,
				'id_kms' => $id_kms),$conn);
			header('location:?hal=detail&rumah=%27'.$id_kms.'%27');
			if($insert){
				$insertDonasi = Donasi::donasi($id_kms,$jumlah,$conn);
				$msg['donasi'] = '
					<div class="alert alert-success" role="alert">
						<strong>Terima Kasih</strong> Donasi anda sudah kami terima
					</div>
				';
			}else{
				$msg['donasi'] = '
					<div class="alert alert-danger" role="alert">
						<strong>Gagal</strong> Donasi Anda Tidak Kami Terima
					</div>
				';
			}
		}
	}

	require 'view/donasi.view.php';
 ?>