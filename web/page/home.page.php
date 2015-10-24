<?php
	require 'module/daerah.php';
	require 'module/k_miskin.php';
	require 'module/db.php';

	use app\module\DB;
	use app\module\Daerah;
	use app\module\Kms;
	use app\module\Fungsi as Fung;

	$conn = DB::connect();
	$k_miskin = Kms::tampil(3,$conn);

	require 'view/halaman-utama.view.php';
?>