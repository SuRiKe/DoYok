<?php
	require 'module/fungsi.php';
	//menggunakkan namespace
	use app\module\Fungsi as Fung;
	
	//memulai session
	session_start();
	
	$menu = Fung::menuClient($_SESSION['login_client']);
	$halaman = Fung::page('hal');
	require('view/main.view.php');
?>
