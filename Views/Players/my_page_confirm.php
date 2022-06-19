<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  $_SESSION['nickname'] = $_POST['nickname'];
  $_SESSION['sex'] = $_POST['sex'];
  $_SESSION['age'] = $_POST['age'];
  $_SESSION['residence'] = $_POST['residence'];
  $_SESSION['country'] = $_POST['country'];
  $_SESSION['teach_language'] = $_POST['teach_language'];
  $_SESSION['study_language'] = $_POST['study_language'];
  $_SESSION['status_1'] = $_POST['status_1'];
  $_SESSION['status_2'] = $_POST['status_2'];

  // //$users->signin();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>マイページ編集内容確認</title>
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

<div class="border col-7">
    <br>
    <h2>マイページ編集内容確認</h2>
    <br>

    <!-- <div class="myPhoto">
      <img src=”” alt="NO IMAGE" width="200" height="130">
    </div> -->

    <div class="row">
        <div class="col-md">
            <form action="my_page_com.php" method="post">
                <div class="form-group">
                    <label>表示する名前：</label>
                    <p class="form-control"><?php echo $_SESSION['nickname']; ?></p>
                </div>
                <div class="form-group">
                    <label>性別：</label>
                    <p class="form-control"><?php echo $_SESSION['sex']; ?></p>
                </div>
                <div class="form-group">
                    <label>年齢：</label>
                    <p class="form-control"><?php echo $_SESSION['age']; ?></p>
                </div>

                <div class="form-group">
                    <label>居住地：</label>
                    <p class="form-control"><?php echo $_SESSION['residence']; ?></p>
                </div>
                <div class="form-group" name="country" required>
                    <label>出身国：</label>
                    <p class="form-control"><?php echo $_SESSION['country']; ?></p>
                </div>
                <div class="form-group" name="teach_language" required>
                    <label>教えられる言語：</label>
                    <p class="form-control"><?php echo $_SESSION['teach_language']; ?></p>
                </div>
                <div class="form-group" name="study_language" required>
                    <label>教わりたい言語：</label>
                    <p class="form-control"><?php echo $_SESSION['study_language']; ?></p>
                </div>
                <div class="form-group" name="status_1" required>
                    <label>シチュエーション１：</label>
                    <p class="form-control"><?php echo $_SESSION['status_1']; ?></p>
                </div>
                <div class="form-group" name="status_2" required>
                    <label>シチュエーション２：</label>
                    <p class="form-control"><?php echo $_SESSION['status_2']; ?></p>
                </div>

                <div class="row center-block text-center">
                  <div class="col-5">
                      <input type="submit" class="btn btn-outline-primary btn-block" value="変更を確定する">
                  </div>
                </div>
            </form>
        </div>
    </div>

  <form action="/PlayerController.php" method="post">
    <br>
      <p><a href="my_page.php">マイページに戻る</a></p>
    <br>
  </form>

</body>
</html>
