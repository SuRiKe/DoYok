<?php
	require 'module/donasi.php';
	require 'module/rumah.php';
	require 'module/db.php';

	use app\module\DB;
	use app\module\Rumah;
	use app\module\Fungsi as Fung;

	$conn = DB::connect();
	$rumah = Rumah::tampil(3,$conn);

	require 'view/halaman-utama.view.php';
?>