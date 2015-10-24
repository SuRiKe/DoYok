<?php 
	require 'module/k_miskin.php';
	require 'module/db.php';

	use app\module\Kms;
	use app\module\DB;
	use app\module\Fungsi as Fung;


	$id = $_GET['rumah'];
	$conn = DB::connect();
	$kmiskin = Kms::tampilKms($id,$conn);
	$persentase = Kms::persentase($id,$conn);

	require 'view/detail.view.php';
 ?>