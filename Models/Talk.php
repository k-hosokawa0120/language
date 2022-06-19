<?php
require_once(ROOT_PATH .'/Models/Db.php');

class talk extends Db {
    // private $table = 'talkRoom';
    private $table = 'talkMessage';
    public function __construct($dbh = null) {
        parent::__construct($dbh);
    }

//talk_room_idを取得してid順にメッセージを表示する
    public function talkDisplay($id = 0):Array {
      //talk_room_id（talkMessageテーブル)とid（　talkRoomテーブル）をJOINしてuser_idとmessageをセレクトする
      $sql = "SELECT talkMessage.message, users.nickname FROM talkMessage INNER JOIN talkRoom ON talkMessage.talk_room_id = talkRoom.id RIGHT JOIN users ON talkMessage.user_id = users.id WHERE talkMessage.talk_room_id = :talk_room_id";
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(':talk_room_id', $_SESSION['talk_room_id'], PDO::PARAM_INT);
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }

  //トークメッセージを保存する
   public function talkMessage() {
     $sql = "INSERT INTO talkMessage(user_id, talk_room_id, message) VALUES (:user_id, :talk_room_id, :messages)";
     $sth = $this->dbh->prepare($sql);
     $sth->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_INT);
     $sth->bindParam(':talk_room_id', $_SESSION['talk_room_id'], PDO::PARAM_INT);
     $sth->bindParam(':messages', $_POST['message'], PDO::PARAM_STR);
     $sth->execute();
   }

    //トーク一覧画面にトークルームに入るための一覧を表示する
    public function talkRoom($id = 0):Array{
      //talkRoomのstudent_idとteacher_idのいずれかが自分のIDだったら表示
      $sql = "SELECT * FROM talkRoom WHERE student_id = :student_id OR teacher_id = :teacher_id";
      $sth = $this->dbh->prepare($sql);
      $sth->execute(array(':student_id' => $_SESSION['id'], ':teacher_id' => $_SESSION['id']));
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;

    }
    // SELECT talkRoom.student_id, talkRoom.teacher_id, users.nickname FROM talkMessage JOIN users ON talkRoom.teacher_id = users.id
}
?>
