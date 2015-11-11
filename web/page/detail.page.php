<?php 
	require 'module/rumah.php';
	require 'module/db.php';

	use app\module\Rumah;
	use app\module\DB;
	use app\module\Fungsi as Fung;


	$id = $_GET['rumah'];
	$conn = DB::connect();
	$rumah = Rumah::tampilRumah($id,$conn);

	require 'view/detail.view.php';
 ?>