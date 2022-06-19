<?php
require_once(ROOT_PATH .'Controllers/PlayerController.php');
$player = new PlayerController();
$params = $player->index();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>オブジェクト指向 - 選手一覧</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
</html>
