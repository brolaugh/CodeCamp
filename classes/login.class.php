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
		if (password_verify($this->password, $db_pw)) {
			$_SESSION['SessionSetID'] = $user_id;
			$_SESSION['SessionSetUsername'] = $username;

		}
		else{
			array_push($this->errors, "UsernameFail");
		}
		$stmt->close();
	}
	private function emailLogin($mysqli){
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
			array_push($this->errros, "EmailFail");
		}
		$stmt->close();
	}
	public function login($mysqli){
		if (isset($_POST['login-email-username'])) {
			$this->login_email_username = trim($_POST['login-email-username']);
		}
		else{array_push($this->errors, "login not set");}



		if (isset($_POST['login-password'])) {
			$this->password = $_POST['login-password'];
		}
		else{array_push($this->errors, "password not set");}



		if(filter_var($this->login_email_username, FILTER_VALIDATE_EMAIL)){
			$this->emailLogin($mysqli);
		}
		else{
			$this->usernameLogin($mysqli);
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
