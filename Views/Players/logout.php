<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');

  session_destroy();

  header('Location:./logout1.php');
?>
