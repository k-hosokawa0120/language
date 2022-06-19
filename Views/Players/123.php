<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');

  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['password'];
  $users = new PlayerController();
  $users->signin2();
  // $_SESSION['role'] = $member['role'];
  header('Location:./index.php');
?>
