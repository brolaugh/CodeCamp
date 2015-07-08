<?php

	require_once('../classes/register.class.php');
	require_once('../config/config.php');
	$reg = new Register($mysqli);
	if (!$reg->errors) {
		$reg->proceed($mysqli);
		header('Location:../login');
	}
	else{
		var_dump($reg->errors);
	}
