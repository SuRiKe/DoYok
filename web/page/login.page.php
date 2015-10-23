<?php
	require 'module/user.php';
	require 'module/db.php';

	use app\module\DB;
	use app\module\User;
	use app\module\Fungsi as Fung;
	
	$conn = DB::connect();
	
	if(isset($_POST['login'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if(empty($user)){  
			$error['username'] = 'username tidak boleh kosong';  
		}
		
		if(empty($error)){
			$data = User::verivikasiUser($user,$conn);
			$valid = Fung::passVer($pass,$data['password']);
			
			if($valid){
				foreach($data as $user_data){
					$_SESSION[$user_data] = $user_data;
				}
				
				$_SESSION['login_client'] = true;
				header('location:?hal=home');
			}else{
				$msg['login'] = '
					<div class="alert alert-danger" role="alert">
						<strong>Login Gagal!</strong> Mungkin Username atau Password anda salah, coba ulangi lagi!
					</div>
				';
			}
		}
	}
	

	require 'view/login.view.php';
?>