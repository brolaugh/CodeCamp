<?php
class Project{
	private $user_id;
	private $sub_url
	private $name;
	private $id;
	private $languageId;
	private $languageName
	public $errors;


	function __construct($sub_url){

		if (isset($_SESSION['SessionSetID'])) {
			$this->user_id = $_SESSION['SessionSetID'];
			require_once('../config/config.php');
			setAllValuesFromSubUrl();
		}
		
	}
	
	public function create($name){
		$stmt = $mysqli->prepare("INSERT INTO comp_project(name, leader) values(?,?);");
		$stmt->bind_param('si', $name, $this->user_id);
		if ($stmt->execute()) {
			$stmt->close();
			$stmt = $db->prepare("INSERT INTO project_membership(project_id, user_id) VALUES(?,?)");
			$stmt->bind_param('ii', $this->id, $this->user_id);
			$stmt->execute();
			printf($stmt->error);
		}
		$stmt->close();
		
	}
	public function delete(){
		$stmt = $mysqli->prepare("UPDATE comp_project SET deleted=true WHERE id = ?");
		$stmt->bind_param('i'. $this->id);
		$stmt->execute();
		$stmt->close();
	}
	public function kickUser($user_id){
		if (is_int($user_id) && is_int($user_id) && $this->user == $this->getAdmin($project_id)) {
			$stmt = $mysqli->prepare("UPDATE project_membership SET leave_date=now() WHERE user_id = ? AND project_id = ?");
			$stmt->bind_param('ii',$user_id, $project_id);
			$stmt->execute();
			$stmt->close();
		}
		else{
			array_push($this->errors, "Could not kick for unknown reason.")
		}
		
	}
	public function inviteUser($invitedUser, $project_id){

		if ($this->isInvitedToProject($invitedUser, $project_id)) {
			//Send message that the user is already invited
		}
		else{
			$stmt = $mysqli->prepare("INSERT INTO project_invite(user_id, project_id) values(?,?);");
			$stmt->bind_param('ii', $invitedUser, $project_id);
			$stmt->close();
		}

		
	}
	
	public function changeLeader($newAdmin){
		if ($this->user == $this->getAdmin($this->id)) {
			$stmt = $mysli->prepare("UPDATE comp_project SET leader = ?");
			$stmt->bind_param('i', $project_id);
			$stmt->execute();
			
		}
		else{
			//Send message that you need to be admin to...
		}
		$stmt->close();
	}
	private function isInvitedToProject($user_id){
		$stmt = $mysqli->prepare("SELECT count(id) as NrOfInv WHERE user_id = ? AND project_id = ? and status = 0 ");
		$stmt->bind_param('ii', $user_id, $this->id);
		$stmt->execute();
		$stmt->bind_result($nrOfInv);
		$stmt->fetch();
		if ($nrOfInv < 0) {
			$stmt->close();
			return true;
		}
		else{
			$stmt->close();
			return false;
		}
	}
	public function getMembers(){
		$stmt = $mysqli->prepare("SELECT user.username FROM user LEFT JOIN project_membership ON user.id=project_membership.user_id WHERE project_membership.project_id = ? AND project_membership.leave_date=NULL");
		$stmt->bind_param('i', $this->id);
		$stmt->execute();
		$stmt->bind_result($member);
		$membersArray;
		while ($stmt->fetch()) {
			array_push($membersArray, $member);
		}
		$stmt->close();
		return $membersArray;

	}
	private function getLeader(){
		$stmt = $mysli->prepare("SELECT leader FROM comp_project WHERE project = ?");
		$stmt->bind_param('i', $this->id);
		$stmt->execute();
		$stmt->bind_result($leader);
		$stmt->fetch();
		$stmt->close();
		return $leader;
	}
	private function getIdFromName(){
		$stmt = $mysli->prepare("SELECT id FROM comp_project WHERE name = ?");
		$stmt->bind_param('i', $this->name);
		$stmt->execute();
		$stmt->bind_result($id);
		$stmt->fetch();
		$stmt->close();
		return $id;
	}
	private function getNameFromId(){
		$stmt = $mysli->prepare("SELECT name FROM comp_project WHERE id = ?");
		$stmt->bind_param('i', $this->id);
		$stmt->execute();
		$stmt->bind_result($name);
		$stmt->fetch();
		$stmt->close();
		return $name;
	}
	private function setAllValuesFromSubUrl(){
		$stmt = $mysli->prepare("SELECT comp_project.id AS id, comp_project.name AS name, comp_project.date_created AS datecreated, comp_project.description AS description , languages.name AS language_name FROM comp_project LEFT JOIN languages ON languages.id = comp_project.language WHERE comp_project.sub_url = ?");
		$stmt->bind_param('s', $this->sub_url);
		$stmt->execute();
		$stmt->bind_result($id $date_created, $description, $language_name);
		$stmt->fetch();
		$this->id = $id;
		$this->date_created = $date_created;
		$this->description = $description;
		$this->language_name = $language_name;
		$stmt->close();
		
	}
	
}
/**
* 
*/
class ProjectUpdate extends Project
{
	private $file;
	private $time;
	private $sum_desc;
	private $desc;

	
	function __construct()
	{
		ini_set(file_uploads, On);
		ini_set(upload_tmp_dir, "public_html/projects/codecamp/comp/project_updates");
		getLastUpdate();
	}
	private function getLastUpdate(){
		$stmt = $mysqli->prepare("SELECT file, time, sum_desc, description FROM project_updates WHERE team = ? ORDER BY time LIMIT 1");
		$stmt->bind_param('i', $this->id);
		$stmt->execute()
		$stmt->bind_result($file, $time, $sum_desc, $desc);
		if ($stmt->fetch()) {
			$this->file = $file;
			$this->time = $time;
			$this->sum_desc = $sum_desc;
			$this->desc = $desc;
		}
	}
	private function updateDb(){
		$stmt = $mysqli->prepare("INSERT INTO project_updates(team, file, sum_desc, description) values(?,?,?,?)");
		$stmt->bind_param('i', $this->id, );
		$stmt->execute()
		$stmt->bind_result($file, $time, $sum_desc, $desc);
		if ($stmt->fetch()) {
			$this->file = $file;
			$this->time = $time;
			$this->sum_desc = $sum_desc;
			$this->desc = $desc;
		}
	}
	private function updateFile(){
		$target_dir = "project_updates/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if ($imageFileType == "rar" || $imageFileType == "zip") {
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
		}

	}
	public function update(){
		if ($this->updateFile()) {
		}
		

	}
}