<?php
	require 'module/daerah.php';
	require 'module/rumah.php';
	require 'module/db.php';

	use app\module\DB;
	use app\module\Daerah;
	use app\module\Rumah;
	use app\module\Fungsi as Fung;

	$_SESSION['login_client'] = false;

	$conn = DB::connect();
	$rumah = Rumah::tampil(3,$conn);

	require 'view/halaman-utama.view.php';
?>