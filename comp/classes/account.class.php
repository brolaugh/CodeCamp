<?php
class Account{
  //This file contains the functions for the personal account
  function __construct(){
    session_start();

  }
  private function isCorrectUser(){

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
}
?>
