<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  $player = new PlayerController();
  $player->passReset();

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>パスワード再設定完了ページ</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <h1>パスワードを変更いたしました。</h1>
  <p><a href="login_form.php">ログインする</a></p>
</body>
</html>
