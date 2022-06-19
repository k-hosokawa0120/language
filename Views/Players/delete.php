<!-- <?php
  // require_once(ROOT_PATH .'Controllers/PlayerController.php');
  // //$users->signin();

  // require_once(ROOT_PATH .'Controllers/PlayerController.php');
  // $player = new PlayerController();
  //
  // $params = $player->delete();
  //
  // header('Location:./index.php');
  //
?> -->

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>退会確認ページ</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

  <header>
    <div class="header_parent">
      <?php include(__DIR__.'/header.php');?>
    </div>
  </header>

<div class="border col-7">
    <div class="row">
        <div class="col-md">
          <form action="/PlayerController.php" method="post">
            <br>
              <p><a href="my_page.php">マイページに戻る</a></p>
          </form>
          <form action="/PlayerController.php" method="post">
            <br>
              <p><a href="delete_com.php">退会する</a></p>
          </form>
        </div>
    </div>

</body>
</html>
