<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  // $users = new PlayerController();
  // $users->signin1();
  // //$users->signin2();

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>ログイン</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <div class="our-story-card-background">
    <div class="concord-img-wrapper">
      <!-- <img class="concord-img vlv-creative" src="/img/world.jpeg" srcset="" alt=""> -->
        <div class="concord-img-gradient">
          <div class ="model">
            <div class ="model_top">
              <h1>ログイン</h1>
            </div>
              <form action="123.php" method="post"><!-- 処理を行う宛先を指定 -->
                <div class ="model_form">
                    <div class="modelStyle">
                        <label>メールアドレス：<label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="modelStyle">
                        <label>パスワード：<label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="modelStyle">
                        <input type="submit" value="ログイン">
                    </div>
                </div>
              </form>

              <p><a href="signup.php">新規登録画面</a></p>
              <p><a href="reset_pass.php">パスワードを忘れた方はこちら</a></p>
              <p><a href="index.php">ホーム画面に戻る</a></p>              
           </div>
       </div>
    </div>
  </div>

   <script src="/js/js.js"></script>
</body>
</html>
