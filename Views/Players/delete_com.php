<?php
require_once(ROOT_PATH .'Controllers/PlayerController.php');
$player = new PlayerController();

$player->playerTmp();

header('Location:./index.php');

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>退会完了ページ</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<div class="border col-7">
    <br>
    <h3>退会が完了致しました。</h3>
    <br>
    <div class="row">
        <div class="col-md">
          <form action="/PlayerController.php" method="post">
            <br>
              <p><a href="register.php">新規アカウント作成はこちら</a></p>
          </form>
        </div>
    </div>

</body>
</html>
