<?php
	require 'module/fungsi.php';
	//menggunakkan namespace
	use app\module\Fungsi as Fung;
	
	//memulai session
	session_start();
	
	//fungsi page pada module/fungsi.php
	$halaman = Fung::page('hal');
	require('view/main.view.php');
?>
