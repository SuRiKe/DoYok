<?php
	require 'module/Daerah.php';
	require 'module/User.php';
	require 'module/db.php';
	
	use app\module\DB;
	use app\module\Daerah;
	use app\module\User;
	use app\module\Fungsi as Fung;
	
	$conn = DB::connect();
	$daerah = Daerah::ambilSemua($conn);
	
	if(isset($_POST['register'])){
		$d_field = array('nama','username','no_hp','email','tingkat','no_ktp','jenis_kelamin');
		$id_user = User::autoId($conn);
		$foto = $_FILES['foto']['name'];
		$password = Fung::passGen($_POST['password']);
		if(empty($foto)){  
			$error['foto'] = 'foto tidak boleh kosong';  
		}
		if(empty($password)){  
			$error['password'] = 'password tidak boleh kosong';  
		}
		foreach($d_field as $field){
			$$field = $_POST[$field];
			if(empty($$field)){  
				$error[$field] = $field.' tidak boleh kosong';  
			}
		}
		if(empty($error)){
			move_uploaded_file($_FILES['foto']['tmp_name'], "img/profil/".$foto);
			$insert = User::tambahUser(
				array(
					'id_user'=>$id_user,
					'nama'=>$nama,
					'username'=>$username,
					'password'=>$password,
					'no_hp'=>$no_hp,
					'email'=>$email,
					'foto'=>$foto,
					'id_daerah'=>$id_daerah,
					'tingkat'=>$tingkat,
					'no_ktp'=>$no_ktp,
					'jenis_kelamin'),$conn);
			if($insert){
				$msg['register'] = '
					<div class="alert alert-success" role="alert">
						<strong>Sukses!</strong> Anda sudah teregistrasi silahkan <a href="?hal=login" class="btn btn-primary">Login!</a>
					</div>
				';
			}else{
				$msg['register'] = '
					<div class="alert alert-danger" role="alert">
						<strong>Gagal!</strong> Anda tidak berhasil registrasi, coba ulangi lagi!
					</div>
				';
			}
		}
	}

	require 'view/halaman-register.view.php'
?>