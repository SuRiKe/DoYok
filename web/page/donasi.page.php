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
		$id_keperluan = $_POST['keperluan'];
		$id_donasi = Donasi::autoId($conn);
		$id_rumah = $_GET['rumah'];
		$jumlah = $_POST['jumlah'];
		$id_user = $_SESSION['id_user'];
		$tgl_donasi = date('Y'."-".'m'."-".'d');

		if($id_keperluan == ""){
			if(empty($jumlah)){  
				$error['jumlah'] = 'jumlah tidak boleh kosong';  
			}
		}

		if(empty($error)){
			if (!empty($id_keperluan)) {
				$qty = $_POST['jumlah-qty'];
				$jumlah = $_POST['totals'];
				$detail = Donasi::tambahDetail(
					array(
						'id_donasi' => $id_donasi,
						'id_keperluan' => $id_keperluan,
						'jumlah' => $qty,
						'total' =>$jumlah),$conn);
			}
			$insert = Donasi::tambah(
				array(
				'id_user' => $id_user,
				'jumlah_donasi' => $jumlah,
				'id_donasi' => $id_donasi,
				'id_rumah' => $id_rumah),$conn);
			if($insert){
				$insertDonasi = Donasi::donasi($id_rumah,$jumlah,$conn);
				$msg['donasi'] = '
					<div class="alert alert-success" role="alert">
						<strong>Terima Kasih</strong> Donasi anda sudah kami terima
					</div>
				';
				header('location:?hal=detail&rumah=%27'.$id_rumah.'%27');
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