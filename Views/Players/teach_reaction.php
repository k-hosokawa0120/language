<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  $teach = new PlayerController();
  // $talk = new PlayerController();
  // $talk->talkD();
  // var_dump($_POST['id']);
  //   var_dump($_SESSION['id']);
  // $student_id = $_SESSION['id'];
  // $teacher_id = $_POST['id'];
  $teach->teachReaction();
  // //$users->signin();
  // var_dump($teach);
    header('Location:./index.php');
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>リアクション一覧ページ</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

  <header>
    <div class="header_parent">
      <?php include(__DIR__.'/header2.php');?>
    </div>
  </header>


</body>
</html>
