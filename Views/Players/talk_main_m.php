<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  $_SESSION['talk_room_id'] = $_POST['talk_room_id'];
  header('Location:./talk.php');


?>
