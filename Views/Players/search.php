 <?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  // $player = new PlayerController();
  $users = new PlayerController();
  $user_params = $users->userRec();
  // //$users->signin();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>相手を探すページ</title>
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
  <div class ="seach">
  <div class="row">
      <div class="col-md">
        <form action="/PlayerController.php" method="post">
          <br>
            <p><a href="index.php">メインページに戻る</a></p>
        </form>
      </div>
  </div>
    <br>
    <h2>相手を探す</h2>
    <br>

    <?php foreach($user_params['user'] as $key => $user): ?>
          <p>名前:<?php echo $user_params['user'][$key]['nickname']; ?></p>
          <p>教えたい言語:<?php echo $user_params['user'][$key]['teach_language']; ?></p>
          <p>教わりたい言語:<?php echo $user_params['user'][$key]['study_language']; ?></p>
        <div class="col-3">
            <form action="detail_seach.php" method="post">
              <input type="hidden" name="id" value="<?=$user['id']?>">
              <input type="submit" class="btn btn-outline-primary btn-block"  formaction="detail_seach.php" value="詳細を見る">
            </form>
        </div>
        <br>
  <?php endforeach ;?>
</div>
<!--
    <?php //foreach($user_params['user'] as $user): ?>
      <table>
        <tr><td>名前</td><td class="td2"><?php //echo $user['nickname']; ?></td></tr>
        <tr><td>教えたい言語</td><td class="td2"><?php //echo $user['teach_language']; ?></td></tr>
        <tr><td>教わりたい言語</td><td class="td2"><?php //echo $user['study_language']; ?></td></tr>
      </table>
       <?php //var_dump($user['id']);?>
      <form action="detail_seach.php" method="post">
        <br>
        <input type="hidden" name="id" value="<?  //$user['id']?>">
        <button type="submit">詳細を見る</button>
      </form>
      <!-- <form action="/PlayerController.php" method="post">
          <p><a href="detail_seach.php">教えたい</a></p>
      </form>
      <form action="/PlayerController.php" method="post">
          <p><a href="detail_seach.php">教わりたい</a></p>
      </form> -->
  <?php //endforeach ;?>

</body>
</html>
