<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  $talk = new PlayerController();
  //var_dump($_SESSION['talk_room_id']); //←トークルームID
  $talk_params = $talk->talkDis();
  // $talk_par_params = $talk->talkPartDis();

  // $talk = new PlayerController();
  // $talk_params = $talk->talkDis();
  // foreach($talk_params['talkDis'] as $key => $talkDis){


//var_dump($talk_params);

//var_dump($_SESSION['id']);
//$talk_room_id = $_POST['talk_room_id'];

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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

  <header>
    <div class="header_parent">
      <?php include(__DIR__.'/header2.php');?>
    </div>
  </header>
<!-- トーク欄を実測 -->
<main>
   <div class="message_box">
     <p>メッセージ</p>
  　  <!-- <div class="message_title">
        メッセージ
      </div> -->
    　<div class ="message_inner">
      　<?php foreach ($talk_params['talkDis'] as $key => $talkDis): ?>
      		<div>ユーザー名：<?php echo $talk_params['talkDis'][$key]['nickname'] ?></div>
      		<div><?php echo $talk_params['talkDis'][$key]['message']; ?></div>
          <br>
        <?php endforeach; ?>
      </div>
      <form action="talk0.php" method="post">
        <br>
          <div class="input">
            <input type="hidden" name="id" class="id">
            <input type="hidden" name="talk_room_id" class="talk_room_id" value="<?=$_SESSION['talk_room_id'];?>">
            <input type="text" name="message" class="message">
            <input type="submit" name="1" class="talk_btn" value="送信">
          </div>
      </form>
    </div>

</main>
	<script src="./js/jquery-3.5.1.min.js"></script>
  <script src="/js/js.js"></script>
</body>
</html>
