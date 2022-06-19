<!-- <?php
  // require_once(ROOT_PATH .'Controllers/PlayerController.php');
  //$users->signin();
?> -->

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>パスワード再設定ページ</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<div class="border col-7">
    <br>
    <h2>パスワード再設定</h2>
    <br>
    <div class="row">
        <div class="col-md">
            <form action="reset_pass_com.php" method="post">

                <div class="form-group">
                    <label>登録しているメールアドレス：</label>
                    <input type="text" class="form-control" placeholder="xxx@xxx.xx" name="email" required>
                </div>
                <div class="form-group" name="tell" required>
                    <label>登録している電話番号：</label>
                    <input type="text" class="form-control" placeholder="XXX-XXXX-XXXX" name="tell" required>
                </div>
                <div class="form-group">
                    <label>変更後のログインパスワード：</label>
                    <input type="text" class="form-control" placeholder="" name="password" required>
                </div>

                <div class="row center-block text-center">
                  <div class="col-5">
                      <input type="submit" class="btn btn-outline-primary btn-block" value="パスワードを変更する">
                  </div>
                </div>

            </form>
        </div>
    </div>


  <form action="/PlayerController.php" method="post">
    <br>
      <p><a href="login_form.php">ログインページに戻る</a></p>
  </form>

</body>
</html>
