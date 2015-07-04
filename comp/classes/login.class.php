<?php

class Login
{
	private $login_email_username;
	private $password;
	public $errors = array();
	
	function __construct()
	{
		session_start();
		
		

	}
	private function usernameLogin($mysqli){
		$stmt = $mysqli->prepare("SELECT password, id, username FROM user where username = ?");
		$stmt->bind_param('s', $this->login_email_username);
		$stmt->execute();
		$stmt->bind_result($db_pw, $user_id, $username);
		$stmt->fetch();
		if (password_verify($password, $db_pw)) {
			$_SESSION['SessionSetID'] = $user_id;
			$_SESSION['SessionSetUsername'] = $username;
			
		}
		else{
			array_push($this->errros, "Sorry, we don't recognize that account.");
		}
		$stmt->close();
	}
	private function emailLogin($mysqli){
		$stmt = $mysqli->prepare("SELECT password, id, username FROM user where email = ?");
		$stmt->bind_param('s', $this->login_email_username);
		$stmt->execute();
		$stmt->bind_result($db_pw, $user_id, $username);
		$stmt->fetch();
		if (password_verify($password, $db_pw)) {
			$_SESSION['SessionSetID'] = $user_id;
			$_SESSION['SessionSetUsername'] = $username;
			
		}
		else{
			array_push($this->errros, "Sorry, we don't recognize that account.");
		}
		$stmt->close();
	}
	public function login($mysqli){
		if (isset($_GET['login-email-username'])) {
			$this->login_email_username = $_POST['login-email-username'];
		}
		else{array_push($this->errors, "Sorry, we don't recognize that account.");}



		if (isset($_GET['login-password'])) {
			$this->password = $_GET['login-password'];
		}
		else{array_push($this->errors, "Sorry, we don't recognize that account.");}


			
		if (filter_var($this->login_email_username, FILTER_VALIDATE_REGEXP)) {
			$this->usernameLogin();
		}
		elseif(filter_var($this->login_email_username, FILTER_VALIDATE_EMAIL)){
			$this->emailLogin();
		}
		else{
			array_push($this->errors, "Sorry, we don't recognize that account.");
		}
	}


	public function isLoggedIn(){
		if (isset($_SESSION['SessionSetID'])) {return true;}
		else{
			session_unset();
			session_destroy();
			session_write_close();
			setcookie(session_name(),'',0,'/');
			session_regenerate_id(true);
			unset($_SESSION);
			return false;
		}
	}

}