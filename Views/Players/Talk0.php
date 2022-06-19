<?php
require_once(ROOT_PATH .'Controllers/PlayerController.php');
$talk = new PlayerController();
$talk->talkMess();
// var_dump($talk->talkMess());
// var_dump($_POST['message']);

// Origin null is not allowed by Access-Control-Allow-Origin.とかのエラー回避の為、ヘッダー付与
// header("Content-Type: application/json; charset=utf-8");
// foreach($talk_params['talkDis'] as $key => $talk):
//   fwrite($talk_params['talkDis'][$key]['message']);
// endforeach;
// echo json_encode($talk_params_json);

// var_dump
// var_dump($_POST['message']);
  header('Location:./talk.php');
?>
