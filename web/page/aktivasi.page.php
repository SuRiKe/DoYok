<?php 
	require 'module/User.php';
	require 'module/db.php';
	
	use app\module\DB;
	use app\module\User;
	use app\module\Fungsi as Fung;

	$conn = DB::connect();

	if(!empty($_GET['kode']) && isset($_GET['kode'])){
		$user = User::aktivasiUser($_GET['kode'],$conn);
		if (count($user['id_user']) > 0) {
			$user = User::aktivasiUser1($_GET['kode'],$conn);
			if (count($user['id_user'] > 0)) {
				$aktiv = User::editUser($user['id_user'],"aktiv = '1'",$conn);
				if ($aktiv) {
					echo "Berhasil!";
				}else{
					echo "Gagal";
				}
			}
		}
	}
?>