<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Player extends Db {
  private $table = 'players';
  public function __construct($dbh = null) {
    parent::__construct($dbh);
  }


public function findById($id = 0):Array {
    $sql = 'SELECT id, name, kana, nickname, sex, age, email, tell, residence, country, teach_language, study_language, status_1, status_2,photo FROM users';
    $sql .= ' WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//相手のプロフィール表示//
public function yourfindById($id = 0):Array {
    $sql = 'SELECT id, name, kana, nickname, sex, age, email, tell, residence, country, teach_language, study_language, status_1, status_2,photo FROM users';
    $sql .= ' WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    return $result;
}


public function del($id = 0) {
  $sql = 'UPDATE users SET del_flg = 1';
  $sql .= ' WHERE id = :id';
  $sth = $this->dbh->prepare($sql);
  $sth->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
  $sth->execute();

}

//プロフィール変更処理//
public function update() {
  $sql = 'UPDATE users SET nickname = :nickname, sex = :sex, age = :age, residence = :residence, country = :country, teach_language = :teach_language, study_language = :study_language, status_1 = :status_1, status_2 = :status_2';
  $sql .= ' WHERE id = :id';
  $sth = $this->dbh->prepare($sql);

  $sth->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
  $sth->bindParam(':nickname', $_SESSION['nickname'], PDO::PARAM_STR);
  $sth->bindParam(':sex', $_SESSION['sex'], PDO::PARAM_STR);
  $sth->bindParam(':age', $_SESSION['age'], PDO::PARAM_STR);
  $sth->bindParam(':residence', $_SESSION['residence'], PDO::PARAM_STR);
  $sth->bindParam(':country', $_SESSION['country'], PDO::PARAM_STR);
  $sth->bindParam(':teach_language', $_SESSION['teach_language'], PDO::PARAM_STR);
  $sth->bindParam(':study_language', $_SESSION['study_language'], PDO::PARAM_STR);
  $sth->bindParam(':status_1', $_SESSION['status_1'], PDO::PARAM_STR);
  $sth->bindParam(':status_2', $_SESSION['status_2'], PDO::PARAM_STR);
  $sth->execute();
}

  // 退会処理 //
public function playersTmpDel(){
  $sql = 'DELETE FROM users WHERE id = :id';
  $sth = $this->dbh->prepare($sql);

  $sth->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
  $sth->execute();
}

// パスワード再設定 //
public function passwordReset(){
  $sql = 'SELECT id, email, tell FROM users WHERE email = :email AND tell = :tell';
  $sth = $this->dbh->prepare($sql);

  $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
  $sth->bindParam(':tell', $_POST['tell'], PDO::PARAM_STR);
  $sth->execute();
  $member = $sth->fetch();
  //入力したメールアドレス、電話番号が登録されているものかチェック//
  if($member == false){
    echo 'メールアドレスもしくはパスワードが間違っています。';
    echo '<a href="reset_pass.php">戻る</a>';
    exit();
  }else{
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = 'UPDATE users SET password = :password WHERE id = :id';
    $sth = $this->dbh->prepare($sql);

    $sth->bindParam(':id', $member['id'], PDO::PARAM_INT);
    $sth->bindParam(':password', $pass, PDO::PARAM_STR);
    $sth->execute();
  }
}

}
?>
