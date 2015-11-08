<?php
	require 'module/user.php';
	require 'module/db.php';

	use app\module\DB;
	use app\module\User;
	use app\module\Fungsi as Fung;
	
	$conn = DB::connect();
	
	if(isset($_POST['masuk'])){
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
		if (preg_match($regex, $_POST['emus'])) {
			$email = $_POST['emus'];
			if(empty($email)){  
				$error['emus'] = 'email tidak boleh kosong';  
			}
		}else{
			$user = $_POST['emus'];
			if(empty($user)){  
				$error['emus'] = 'username tidak boleh kosong';  
			}
		}
		$pass = $_POST['password'];
		
		if(empty($error)){
			if (preg_match($regex, $_POST['emus'])) {
				$data = User::userEmail($email,$conn);
			}else{
				$data = User::verivikasiUser($user,$conn);
			}
			
			$valid = Fung::passVer($pass,$data['password']);
			
			if($valid){
				$_SESSION['id_user'] = $data['id_user'];
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['username'] = $data['username'];
				
				$_SESSION['login_client'] = true;
				header('location:?hal=beranda');
			}else{
				$msg['login'] = '
					<div class="alert alert-danger" role="alert">
						<strong>Login Gagal!</strong> Mungkin Username atau Password anda salah, coba ulangi lagi!
					</div>
				';
			}
		}
	}
	

	require 'view/masuk.view.php';
?>