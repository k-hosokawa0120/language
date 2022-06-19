<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  // $player = new PlayerController();
  $users = new PlayerController();
  $study_params = $users->studyDis();
  $teach_params = $users->teachDis();
  // var_dump($_POST['id']);
  // var_dump($_SESSION['id']);
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

<div class="border col-7">
  <div class="row">
      <div class="col-md">
        <form action="/PlayerController.php" method="post">
          <br>
            <p><a href="index.php">メインページに戻る</a></p>
        </form>
      </div>
  </div>
    <br>
    <h2>教えて欲しい人</h2>
    <br>
    <?php foreach($teach_params['teach'] as $key => $teach): ?>
      <p>名前：<?php echo $teach_params['teach'][$key]['nickname']; ?></p>
      <p>言語：<?php echo $teach_params['teach'][$key]['study_language']; ?></p>
     <div class="col-3">
      <form action="/PlayerController.php" method="post">
        <br>
        <input type="hidden" name="id" value="<?=$teach_params['teach'][$key]['id']?>">
        <input type="submit" class="btn btn-outline-primary btn-block" formaction="detail_seach.php" value="詳細を見る">
      </form>
      <form action="/PlayerController.php" method="post">
        <input type="hidden" name="id" value="<?=$study_params['teach'][$key]['id']?>">
        <input type="submit" class="btn btn-outline-primary btn-block" formaction="teach_reaction.php" value="教えたい">
      </form>
    </div>
    <?php endforeach ;?>

    <!-- <?php //foreach($teach_params['teach'] as $key => $teach): ?>
      <table>
        <tr><td>名前</td><td class="td2"><?php //echo $teach_params['teach'][$key]['nickname']; ?></td></tr>
        <tr><td>言語</td><td class="td2"><?php //echo $teach_params['teach'][$key]['study_language']; ?></td></tr>
      </table>
    <?php //endforeach ;?> -->

    <br>
    <h2>教えてあげたい人</h2>
    <br>

    <?php foreach($study_params['study'] as $key => $study ): ?>
      <p>名前：<?php echo $study_params['study'][$key]['nickname']; ?></p>
      <p>言語：<?php echo $study_params['study'][$key]['teach_language']; ?></p>
     <div class="col-3">
      <form action="/PlayerController.php" method="post">
        <br>
        <input type="hidden" name="id" value="<?=$study_params['study'][$key]['id']?>">
        <input type="submit" class="btn btn-outline-primary btn-block" formaction="detail_seach.php" value="詳細を見る">
      </form>
      <form action="/PlayerController.php" method="post">
        <input type="hidden" name="id" value="<?=$study_params['study'][$key]['id']?>">
        <input type="submit" class="btn btn-outline-primary btn-block" formaction="teach_reaction.php" value="教わりたい">
      </form>
    </div>

    <?php endforeach ;?>

    <!-- <?php //foreach($study_params['study'] as $key => $study ): ?>
    <?php //var_dump($study_params['study'][2]['nickname']); ?>
      <table>
        <tr><td>名前</td><td class="td2"><?php //echo $study_params['study'][$key]['nickname']; ?></td></tr>
        <tr><td>言語</td><td class="td2"><?php //echo $study_params['study'][$key]['teach_language']; ?></td></tr>
      </table>
    <?php //endforeach ;?> -->

</div>
</body>
</html>
