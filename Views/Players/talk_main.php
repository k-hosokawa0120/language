<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  // $talk = new PlayerController();
  // $talk->talkDis();
  // //$users->signin();
  $talk = new PlayerController();
  $talkRoom_params = $talk->talkRoomDis();
  // $talk->talkD();
  // var_dump($talk->talkD());
  // exit;
  // $study->talkDi();
  // var_dump($talkRoom_params);
 //var_dump($_SESSION['id']);
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>トーク一覧ページ</title>
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
    <h2>トーク</h2>
    <br>

<?php foreach ($talkRoom_params['talkRoom'] as $key => $talkRoom): ?>
      <p>お相手：
        <?php
          if($talkRoom_params['talkRoom'][$key]['teacher_id'] === $_SESSION['id']){
            echo $talkRoom_params['talkRoom'][$key]['student_id'];
          }elseif($talkRoom_params['talkRoom'][$key]['student_id'] === $_SESSION['id']){
            echo $talkRoom_params['talkRoom'][$key]['teacher_id'];
          }else{
            return;
          }
         ?>
      </p>
    <div class="col-3">
     <form action="/PlayerController.php" method="post">
       <br>
       <!-- トークルームIDをpostする -->
       <input type="hidden" name="talk_room_id" value="<?=$talkRoom_params['talkRoom'][$key]['id']; ?>">
       <input type="submit" class="btn btn-outline-primary btn-block" formaction="talk_main_m.php" value="トークする">
     </form>
   </div>
 <?php endforeach; ?>


    <!-- <div class="row">
        <div class="col-md">
            <form action="main.php" method="post">

                <div class="form-group">
                    <label>メールアドレス：</label>
                    <input type="text" class="form-control" placeholder="xxx@xxx.xx" name="mail" required>
                </div>
                <div class="form-group">
                    <label>ログインパスワード：</label>
                    <input type="text" class="form-control" placeholder="" name="password" required>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
          <form action="/PlayerController.php" method="post">
            <br>
              <p><a href="talk.php">トークする</a></p>
          </form>
        </div>
    </div> -->

</body>
</html>
