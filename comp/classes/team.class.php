<?php

class team{
	private $user
	private $mysqli;
	function __construct(){
		if (isset($_SESSION['SessionSetID'])) {
			$this->user = $_SESSION['SessionSetID'];
			require_once('db.php');
		}
		else{
			session_unset();
			session_destroy();
			session_write_close();
			setcookie(session_name(),'',0,'/');
			session_regenerate_id(true);
			unset($_SESSION);
			header('Location:login.php');
			exit();
		}
		

	}

	
}