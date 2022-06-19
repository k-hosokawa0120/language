<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  $users = new PlayerController();

// echo $_FILES['uploadfile']['name']."<br/>\n";
// echo $_FILES['uploadfile']['type']."<br/>\n";
// echo $_FILES['uploadfile']['tmp_name']."<br/>\n";
// echo $_FILES['uploadfile']['error']."<br/>\n";
// echo $_FILES['uploadfile']['size']."<br/>\n";

  // var_dump($_FILES['photo']['error']);
  $users->signin1();
  //$users->signin2();

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>登録完了</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <h1>登録が完了しました。</h1>
  <p><a href="login_form.php">ログインする</a></p>
</body>
</html>
