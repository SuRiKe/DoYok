<?php
	require 'module/fungsi.php';
	//menggunakkan namespace
	use app\module\Fungsi as Fung;
	
	//memulai session
	session_start();
	error_reporting(0);
	
	$menu = Fung::menuClient($_SESSION['login_client']);

	require('view/header.view.php'); 
	$halaman = Fung::page('hal');
	require('view/main.view.php'); 
	require('view/footer.view.php'); 
?>