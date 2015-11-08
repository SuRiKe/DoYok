<?php
	require 'module/User.php';
	require 'module/db.php';
	
	use app\module\DB;
	use app\module\User;
	use app\module\Fungsi as Fung;
	
	$conn = DB::connect();
	
	if(isset($_POST['daftar-login'])){
		$id_user = User::autoId($conn);
		$email = $_POST['email'];
		$password = Fung::passGen($_POST['password']);
		$aktivasi = md5($email.time());
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
		if(empty($email)){  
			$error['email'] = 'password tidak boleh kosong';  
		}
		if(empty($password)){  
			$error['password'] = 'password tidak boleh kosong';  
		}

		if (!preg_match($regex, $email)) {
			$error['email'] = 'E-mail yang anda masukkan tidak valid';	
		}

		$emailUser = User::userEmail($email,$conn);
		if (count($emailUser['email'])>0) {
			$error['emailada'] = '
					<div class="alert alert-danger" role="alert">
						<strong>Maaf</strong> Alamat E-Mail yang anda berikan sudah terdaftar, coba periksa alamat email anda terlebih dahulu
					</div>
			';
		}

		if(empty($error)){
			$insert = User::daftarUser(
				array(
					'id_user'=>$id_user,
					'email'=>$email,
					'password'=>$password,
					'aktivasi'=>$aktivasi),$conn);
			if($insert){
				$msg['daftar-login'] = '
					<div class="alert alert-success" role="alert">
						<strong>Hore!</strong> Anda sudah terdaftar sebagai bagian dari DoYoK, silahkan Konfirmasi email anda terlebih dahulu (<strong>Buka Email anda!</strong>)
					</div>
				';
			}else{
				$msg['daftar-login'] = '
					<div class="alert alert-danger" role="alert">
						<strong>Gagal!</strong> Anda tidak berhasil registrasi, coba ulangi lagi!
					</div>
				';
			}
		}
	}

	require 'view/daftar.view.php'
?>