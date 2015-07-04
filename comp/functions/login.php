<?php
	ini_set('display_errors', 1); 
error_reporting(E_ALL);
	require_once('../config/config.php');
	require_once('../classes/login.class.php');
	$login = new Login();
	if ($login->login($mysqli)) {
		header('Location:../home');
	}
	else{
		var_dump($login->errors);
	}