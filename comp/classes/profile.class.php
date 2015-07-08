<?php


	class user{
		private $user_id;
		private $visited_user_id; //IMPORTANT!!!
		private $project_urls;
		private $project_url_index;
		private $project_names;
		private $project_name_index;

		function __construct(){
			session_start();
			if (filter_var($_SESSION['SessionSetID'], FILTER_VALIDATE_INT) ) {
				$this->user_id = $_SESSION['SessionSetID'];
			}
			else{
				//send to some place and report error
			}
			$this->visited_user_id = $_GET['u'];
			$this->project_url_index = 0;
			$this->project_name_index = 0;
			require_once('../config/config.php');
		}

		public function changePassword($newPassword, $oldPassword){
			$stmt = $mysqli->prepare("SELECT password FROM user WHERE id = ?");
			$stmt->bind_param('i', $this->user_id);
			$stmt->execute();
			$stmt->bind_result($db_password);
			$stmt->fetch();
			if ($db_password === $oldPassword) {
				$stmt->close();
				$stmt = $mysqli->prepare("UPDATE user SET password = ? WHERE id = ?");
				$stmt->bind_param('si', $newPassword, $user_id);
				if ($stmt->execute()) {
					$stmt->close();
				}
				else{
					//Send error report
					$stmt->close();
				}
				
			}
		}
		public function changeEmail($email, $password){
			$stmt = $mysqli->prepare("SELECT password FROM user WHERE id = ?");
			$stmt->bind_param('i', $this->user_id);
			$stmt->execute();
			$stmt->bind_result();
			if ($db_password === $password) {
				$stmt->close();
				$stmt = $mysqli->prepare("UPDATE user SET email = ? WHERE id = ?");
				$stmt->bind_param('si', $email, $user_id);
				if ($stmt->execute()) {
					$stmt->close();
				}
				else{
					array_push($this->errors, "Could not change email because of unknown reason.");
					$stmt->close();
				}
				
			}
		}
		public function deleteAccount(){
			$stmt = $mysqli->prepare("UPDATE user SET inactivated = ? WHERE id = ?");
			$stmt->bind_param('bi', true, $user_id);
		}
		public function getAllProjects(){
			$stmt = $mysqli->prepare("SELECT project.sub_url, project.name,  FROM project LEFT JOIN project_membership ON project.id=project_membership.project_id WHERE project_membership.leave_date='0000-00-00 00:00:00' AND project.id= ?");
			$stmt->bind_param('i', $this->visited_user_id);
			$stmt->execute();
			$stmt->bind_result($project_url, $project_name);
			while ($stmt->fetch()) {
				array_push($project_urls, $project_url);
				array_push($project_names, $project_name);
			}
			public function printProjectURL(){
				echo $this->project_urls[$this->project_url_index];
				$this->project_url_index++;
			}
			public function printProjectName(){
				echo $this->project_names[$this->project_name_index];
				$this->project_name_index++;
			}
		}

	}