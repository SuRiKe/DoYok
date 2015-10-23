<?php 
	require 'module/daerah.php';
	require 'module/db.php';
	require 'module/fungsi.php';
	require 'module/user.php';
	
	use app\module\DB;
	use app\module\Daerah;
	use app\module\User;
	use app\module\Fungsi as Fung;
	
	$con = DB::connect();
	
	echo Fung::passGen("keramas")."\n";
	
	// $id = User::autoId($con);
	$kolom = array('id_user','nama','username','password','no_hp','email','foto','id_daerah');
	$id = User::tambahUser(array( 'id_user'=>'U0001','nama'=>'Keramas','username'=>'Keramas','password'=>'$2y$10$YLbWpg1kXYNlZBVT5xtxUeK/zzLuumjAmPthwxOY46UcruK4wF2Ae','no_hp'=>'123456789012','email'=>'keramaswiguna@gmail.com','foto'=>'Screenshot_1503.png','id_daerah'=>'D0001'),$con);
	echo $id;
?>