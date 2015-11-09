<?php
	unset($_SESSION['login_client']);
	$_SESSION['login_client'] == false;
	header('location:?hal=home');
?>