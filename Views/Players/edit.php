<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  $player = new PlayerController();
  $params = $player->view();
  $country_params = $player->countries();

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>オブジェクト指向 - 選手一覧</title>
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/base.css">
</head>
<body>
    <div class="wrapper">
        <h2>選手データ変更</h2>
        <form action="update.php" method="post">
        <table>

            <?php $player = ($params['player']); ?>
            No
            <input type="hidden" name="id" value="<?=$player['id'] ?>">
            <br>
            背番号
            <input type="text" name="uniform_num" value="<?=$player['uniform_num'] ?>">
            <br>
            ポジション
            <select name="position" value="">
              <option value="<?=$params['player']['position']?>" selected hidden><?=$params['player']['position']?></option>
              <option value="GK">GK</option>
              <option value="DF">DF</option>
              <option value="MF">MF</option>
              <option value="FW">FW</option>
            </select>
            <br>
            名前
            <input type="text" name="name" value="<?=$player['name'] ?>">

            <br>
            国名
            <select name="country_id" value="">
              <option value="<?=$params['player']['country_id']?>" selected hidden><?=$params['player']['country']?></option>
              <?php
               foreach ($country_params['countries'] as $countries) {
                 echo '<option value="', $countries['id'], '">', $countries['name'], '</option>';
               }
              ?>
            </select>

            <br>
            所属
            <input type="text" name="club" value="<?=$player['club'] ?>">
            <br>
            誕生日
            <input type="text" name="birth" value="<?=$player['birth'] ?>">
            <br>
            身長
            <input type="text" name="height" value="<?=$player['height'] ?>">
            <br>
            体重
            <input type="text" name="weight" value="<?=$player['weight'] ?>">

            <button type="submit" onclick="return confirm('更新しますか？')">更新</button>

            </table>
            <a type="button" href="index.php" class="back">トップに戻る</a>            
        </form>
    </div>
    <script src="/js/deleteConfirm.js" type="text/javascript"></script>
</body>
</html>
