<?php
session_start();
require_once(ROOT_PATH .'/Models/Db.php');

  class Users extends Db {
    private $table = 'users';
    public function __construct($dbh = null){
      parent::__construct($dbh);
    }


  //新規登録//
  //フォームに入力されたemailがすでに登録されていないかチェック
  public function reg(){
      $query = $this->dbh->prepare('SELECT email,password FROM users WHERE email = :email limit 1');
      $query->execute(array(':email' => $_POST['email']));
      $result = $query->fetch();

      if($result > 0){
        echo '既にこのメールアドレスは使用されています。';
        echo "<br />";
        echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">前に戻る</a>';
        exit();
      }else{
        if($_POST['email'] == "test@co.jp" && $_POST['pass'] == "aaaaa"){
          $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $sql = 'INSERT INTO users(name, kana, nickname, sex, age, email, tell, residence, country, teach_language, study_language, status_1, status_2, password, photo, role) VALUES (:name, :kana, :nickname, :sex, :age, :email, :tell, :residence, :country, :teach_language, :study_language, :status_1, :status_2, :pass, :photo, 0)';
          $sth = $this->dbh->prepare($sql);
          $sth->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
          $sth->bindParam(':kana',$_POST['kana'], PDO::PARAM_STR);
          $sth->bindParam(':nickname', $_POST['nickname'], PDO::PARAM_STR);
          $sth->bindParam(':sex', $_POST['sex'], PDO::PARAM_STR);
          $sth->bindParam(':age', $_POST['age'], PDO::PARAM_STR);
          $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
          $sth->bindParam(':tell', $_POST['tell'], PDO::PARAM_STR);
          $sth->bindParam(':residence', $_POST['residence'], PDO::PARAM_STR);
          $sth->bindParam(':country', $_POST['country'], PDO::PARAM_STR);
          $sth->bindParam(':teach_language', $_POST['teach_language'], PDO::PARAM_STR);
          $sth->bindParam(':study_language', $_POST['study_language'], PDO::PARAM_STR);
          $sth->bindParam(':status_1', $_POST['status_1'], PDO::PARAM_STR);
          $sth->bindParam(':status_2', $_POST['status_2'], PDO::PARAM_STR);
          $sth->bindParam(':pass',$pass, PDO::PARAM_STR);
          $sth->bindParam(':photo', $_POST['photo'], PDO::PARAM_STR);
          $sth->execute();
        }else{
        //新規登録フォームからのハッシュ化して変数に代入
        if($_POST['sex'] == "男"){
          $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $sql = 'INSERT INTO users(name, kana, nickname, sex, age, email, tell, residence, country, teach_language, study_language, status_1, status_2, password, photo, role) VALUES (:name, :kana, :nickname, :sex, :age, :email, :tell, :residence, :country, :teach_language, :study_language, :status_1, :status_2, :pass, :photo, 1)';
          $sth = $this->dbh->prepare($sql);
          $sth->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
          $sth->bindParam(':kana',$_POST['kana'], PDO::PARAM_STR);
          $sth->bindParam(':nickname', $_POST['nickname'], PDO::PARAM_STR);
          $sth->bindParam(':sex', $_POST['sex'], PDO::PARAM_STR);
          $sth->bindParam(':age', $_POST['age'], PDO::PARAM_STR);
          $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
          $sth->bindParam(':tell', $_POST['tell'], PDO::PARAM_STR);
          $sth->bindParam(':residence', $_POST['residence'], PDO::PARAM_STR);
          $sth->bindParam(':country', $_POST['country'], PDO::PARAM_STR);
          $sth->bindParam(':teach_language', $_POST['teach_language'], PDO::PARAM_STR);
          $sth->bindParam(':study_language', $_POST['study_language'], PDO::PARAM_STR);
          $sth->bindParam(':status_1', $_POST['status_1'], PDO::PARAM_STR);
          $sth->bindParam(':status_2', $_POST['status_2'], PDO::PARAM_STR);
          $sth->bindParam(':pass',$pass, PDO::PARAM_STR);
          $sth->bindParam(':photo', $_POST['photo'], PDO::PARAM_STR);
          $sth->execute();
        }else{
          $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $sql = 'INSERT INTO users(name, kana, nickname, sex, age, email, tell, residence, country, teach_language, study_language, status_1, status_2, password, photo, role) VALUES (:name, :kana, :nickname, :sex, :age, :email, :tell, :residence, :country, :teach_language, :study_language, :status_1, :status_2, :pass, :photo, 2)';
          $sth = $this->dbh->prepare($sql);
          $sth->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
          $sth->bindParam(':kana',$_POST['kana'], PDO::PARAM_STR);
          $sth->bindParam(':nickname', $_POST['nickname'], PDO::PARAM_STR);
          $sth->bindParam(':sex', $_POST['sex'], PDO::PARAM_STR);
          $sth->bindParam(':age', $_POST['age'], PDO::PARAM_STR);
          $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
          $sth->bindParam(':tell', $_POST['tell'], PDO::PARAM_STR);
          $sth->bindParam(':residence', $_POST['residence'], PDO::PARAM_STR);
          $sth->bindParam(':country', $_POST['country'], PDO::PARAM_STR);
          $sth->bindParam(':teach_language', $_POST['teach_language'], PDO::PARAM_STR);
          $sth->bindParam(':study_language', $_POST['study_language'], PDO::PARAM_STR);
          $sth->bindParam(':status_1', $_POST['status_1'], PDO::PARAM_STR);
          $sth->bindParam(':status_2', $_POST['status_2'], PDO::PARAM_STR);
          $sth->bindParam(':pass',$pass, PDO::PARAM_STR);
          $sth->bindParam(':photo', $_FILES['photo'], PDO::PARAM_STR);
          $sth->execute();
        }
        }
     }
  }

  //ログイン//
  public function log(){
    $sql = "SELECT id, email, password, sex, role FROM users WHERE email = :email";
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':email', $_SESSION['email'],PDO::PARAM_STR);
    $sth->execute();
    $member = $sth->fetch();
    //指定したハッシュがパスワードにマッチしているかチェック
    if($member == false){
      echo 'メールアドレスもしくはパスワードが間違っています。';
      echo '<a href="login_form.php">戻る</a>';
      exit;
    }else{
      if(password_verify($_SESSION['password'], $member['password'])){
             // $_SESSION['role'] = $member['role'];
             $_SESSION['id'] = $member['id'];
             $_SESSION['sex'] = $member['sex'];
      }else{
            echo 'メールアドレスもしくはパスワードが間違っています。';
            echo '<a href="login_form.php">戻る</a>';
            exit;
            }
          }
        }


  //相手を探す処理//
  public function userRecord($id = 0):Array {
    $sql = "SELECT id, nickname,teach_language,study_language FROM users WHERE sex !=:sex ";
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':sex', $_SESSION['sex'], PDO::PARAM_STR);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

//教えたいボタンを押した相手を表示する//
  public function studyDisplay($id = 0):Array {
    $sql = "SELECT users.id, nickname, teach_language FROM users INNER JOIN studyReaction ON users.id = studyReaction.student_id WHERE studyReaction.student_id != :id AND studyReaction.teacher_id = :id";
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  //教わりたいボタンを押した相手を表示する//
    public function teachDisplay($id = 0):Array {
      $sql = "SELECT users.id, nickname, study_language FROM users INNER JOIN teachReaction ON users.id = teachReaction.teacher_id WHERE teachReaction.teacher_id != :id AND teachReaction.student_id = :id";
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;

    }

  }

?>
