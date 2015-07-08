<?php

/**
* This class is for getting user info from the profile
* A class for changing your passwords etc is done in another class
*/
class user{
	private $;
	private $id; //IMPORTANT!!!
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
		$this->id = $_GET['u'];
		$this->project_url_index = 0;
		$this->project_name_index = 0;
		require_once('../config/config.php');
	}


	public function getAllProjects(){
		$stmt = $mysqli->prepare("SELECT project.sub_url, project.name,  FROM project LEFT JOIN project_membership ON project.id=project_membership.project_id WHERE project_membership.leave_date='0000-00-00 00:00:00' AND project.id= ? ORDER BY project.name;");
		$stmt->bind_param('i', $this->id);
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
