<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  $player = new PlayerController();
  $params = $player->yourview();
  // //$users->signin();
  // var_dump($_POST['id']);
  // var_dump($params['player']['id']);
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>相手の詳細プロフィール</title>
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
  <div class="detail_seach">
    <br>
    <h2></h2>
    <br>

      <?php $player = ($params['player']); ?>
    <!-- <div class="myPhoto">
      <img src=”” alt="NO IMAGE" width="200" height="130">
    </div> -->

    <div class="row">
        <div class="col-md">
            <form action="my_page_confirm.php" method="post">
                <div class="form-group">
                    <label>名前：</label>
                    <p class="form-control"><?php echo $params['player']['nickname']; ?></p>
                </div>
                <div class="form-group">
                    <label>性別：</label>
                    <p class="form-control"><?php echo $params['player']['sex']; ?></p>
                </div>
                <div class="form-group">
                    <label>年齢：</label>
                    <p class="form-control"><?php echo $params['player']['age']; ?></p>
                </div>
                <div class="form-group">
                    <label>居住地：</label>
                    <p class="form-control"><?php echo $params['player']['residence']; ?></p>
                </div>
                <div class="form-group" name="country" required>
                    <label>出身国：</label>
                    <p class="form-control"><?php echo $params['player']['country']; ?></p>
                </div>
                <div class="form-group" name="teach_language" required>
                    <label>教えられる言語：</label>
                    <p class="form-control"><?php echo $params['player']['teach_language']; ?></p>
                </div>
                <div class="form-group" name="study_language" required>
                    <label>教わりたい言語：</label>
                    <p class="form-control"><?php echo $params['player']['study_language']; ?></p>
                </div>
                <div class="form-group" name="status_1" required>
                    <label>シチュエーション１：</label>
                    <p class="form-control"><?php echo $params['player']['status_1']; ?></p>
                </div>
                <div class="form-group" name="status_2" required>
                    <label>シチュエーション２：</label>
                    <p class="form-control"><?php echo $params['player']['status_2']; ?></p>
                </div>
            </form>
        </div>
    </div>


    <div class="col-3">
      <form action="/PlayerController.php" method="post">
        <br>
        <input type="hidden" name="id" value="<?=$params['player']['id'];?>">
        <input type="submit" class="btn btn-outline-primary btn-block" formaction="study_reaction.php" value="教えたい">
        <input type="submit" class="btn btn-outline-primary btn-block" formaction="teach_reaction.php" value="教わりたい">
      </form>
    </div>
    <!-- <div class="row center-block text-center">

      <div class="col-3">
          <a type="button" class="btn btn-outline-primary btn-block">教えたい</a>
      </div>
      <div class="col-3">
          <a type="button" class="btn btn-outline-primary btn-block">教わりたい</a>
      </div>
    </div> -->

  <form action="/PlayerController.php" method="post">
    <br>
      <p><a href="search.php">一覧画面に戻る</a></p>
    <br>
  </form>

</div>


</body>
</html>
