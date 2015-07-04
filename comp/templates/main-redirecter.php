<?php


require_once('classes/login.class.php');
$login = new Login();
if (!$login->isLoggedIn()) {
	header('Location:index.php');
	exit();
}