<?php

	/**
	*
	*/
	class Register
	{
		private $username;
		private $password;
		private $email;
		private $fname;
		private $sname;
		private $phone_number;
		public $errors;
		//Make salt and hash for password
		//Make sure non of the POST variables are toxic
		function __construct($mysqli)
		{
			if(preg_match("(a-zA-Z0-9_-)", $_POST['register-username'])){
				$this->username = $_POST['register-username'];
			}
			else{
				array_push($this->errors, "Username invalid");
			}
			$this->password = password_hash($_POST['register-password'], PASSWORD_BCRYPT);

			if(filter_var($_POST['register-email'], FILTER_VALIDATE_EMAIL)){
				$this->email = $_POST['register-email'];
			}
			else{
				array_push($errors, "Your email was not valid.");
			}

			if (isset($_POST['register-fname']) && !empty($_POST['register-fname'])) {
				$this->fname = $_POST['register-fname'];
			}
			else{
				$this->fname = NULL;
			}


			if (isset($_POST['register-sname']) && !empty($_POST['register-sname'])) {
				$this->sname = $_POST['register-sname'];
			}
			else{
				$this->sname = NULL;
			}


			if (isset($_POST['register-phone_number']) && !empty($_POST['register-phone_number'])) {
				$this->phone_number = $_POST['register-phone_number'];
			}
			else{
				$this->phone_number = NULL;
			}

			if ($this->isUserNamePresent($mysqli)) {
				array_push($this->errors, "The username is already in use");
			}
			if ($this->isEmailPresent($mysqli)) {
				array_push($this->errors, "The email is already in use");
			}
			require_once('../config/config.php');

		}
		private function isUserNamePresent($mysqli){
			$stmt = $mysqli->prepare("SELECT id FROM user WHERE username = ?");
			$stmt->bind_param('s', $this->username);
			$stmt->execute();
			$stmt->bind_result($id);
			if ($stmt->fetch()) {
				$stmt->close();
				return true;
			}
			else{
				$stmt->close();
				return false;
			}
		}
		private function isEmailPresent($mysqli){
			$stmt = $mysqli->prepare("SELECT id FROM user WHERE email = ?");
			$stmt->bind_param('s', $this->email);
			$stmt->execute();
			$stmt->bind_result($id);
			if ($stmt->fetch()) {
				$stmt->close();
				return true;
			}
			else{
				$stmt->close();
				return false;
			}
		}
		public function proceed($mysqli){
			$this->register($mysqli);
		}
		private function register($mysqli){
			$stmt = $mysqli->prepare("INSERT INTO user(email, username, password, fname, sname, phone_number) VALUES(?,?,?,?,?,?);");
				$stmt->bind_param('ssssss',$this->email, $this->username, $this->password, $this->fname, $this->sname, $this->phone_number);
				if($stmt->execute()){

					$stmt->close();
					return true;
				}
				else {
					$stmt->close();
					return false;
				}
			}
		}
