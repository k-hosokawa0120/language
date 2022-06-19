<?php
require_once(ROOT_PATH .'/Models/Db.php');

class study extends Db {
    private $table = 'studyReaction';
    public function __construct($dbh = null) {
        parent::__construct($dbh);
    }

    //教わりたいアクションを押した時の処理//
    public function study(){
      $query = $this->dbh->prepare('SELECT student_id, teacher_id FROM studyReaction WHERE student_id = :student_id AND teacher_id = :teacher_id limit 1');
      $query->execute(array(':student_id' => $_SESSION['id'] ,':teacher_id' => $_POST['id']));
      $result = $query->fetch();

      if($result > 0){
        echo '既にアクションを送っています。';
        echo "<br />";
        echo '<a href="search.php">戻る</a>';
        return;
      }elseif($result <= 0){
      $sql_s = "INSERT INTO studyReaction(student_id, teacher_id) VALUES (:student_id, :teacher_id)";
      $sth_s = $this->dbh->prepare($sql_s);
      $sth_s->bindParam(':student_id', $_SESSION['id'], PDO::PARAM_INT);
      $sth_s->bindParam(':teacher_id',$_POST['id'], PDO::PARAM_INT);
      $sth_s->execute();
      //teachReactionのteacher_idとstudent_idがstudyReactionのstudent_idとteacher_idと一致するかどうかのチェック
      $sql_t = "SELECT student_id, teacher_id FROM teachReaction WHERE student_id = :student_id AND teacher_id = :teacher_id";
      $sth_t = $this->dbh->prepare($sql_t);
      $sth_t->execute(array(':teacher_id' => $_POST['id'], ':student_id' => $_SESSION['id']));
      $result_t = $sth_t->fetch();
      //もし一致するものが合った場合はトークルームを作成する
          if($result_t > 0){
            // "SELECT talkRoom.id, talkRoom.student_id, talkRoom.teacher_id, talkRoom.student_nickname, talkRoom.teacher_nickname FROM talkRoom INNER JOIN users ON"
              $sql_room = "INSERT INTO talkRoom(id, student_id, teacher_id) VALUES(0, :student_id, :teacher_id)";
              $sth_room = $this->dbh->prepare($sql_room);
              $sth_room->bindParam(':student_id',$_SESSION['id'], PDO::PARAM_INT);
              $sth_room->bindParam(':teacher_id', $_POST['id'], PDO::PARAM_INT);
              $sth_room->execute();

          }else{
            return;
          }
        }
      }
}

?>
