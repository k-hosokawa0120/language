<?php
require_once(ROOT_PATH .'/Models/Db.php');

class teach extends Db {
    private $table = 'teachReaction';
    public function __construct($dbh = null) {
        parent::__construct($dbh);
    }

    //教えたいアクションを押した時の処理//
    public function teach(){
      $query = $this->dbh->prepare('SELECT student_id, teacher_id FROM teachReaction WHERE student_id = :student_id AND teacher_id = :teacher_id limit 1');
      $query->execute(array(':teacher_id' => $_SESSION['id'] ,':student_id' => $_POST['id']));
      $result = $query->fetch();
    //  var_dump($result);
      if($result > 0){
        echo '既にアクションを送っています。';
        echo "<br />";
        echo '<a href="search.php">戻る</a>';
        return;
      }elseif($result <= 0){
        $sql_t = "INSERT INTO teachReaction(student_id, teacher_id) VALUES (:student_id, :teacher_id)";
        $sth_t = $this->dbh->prepare($sql_t);
        $sth_t->bindParam(':student_id',$_POST['id'], PDO::PARAM_INT);
        $sth_t->bindParam(':teacher_id', $_SESSION['id'], PDO::PARAM_INT);
        $sth_t->execute();
        //studyReactionのteacher_idとstudent_idがteachReactionのstudent_idとteacher_idと一致するかどうかのチェック
        $sql_s = "SELECT student_id, teacher_id FROM studyReaction WHERE student_id = :student_id AND teacher_id = :teacher_id";
        $sth_s = $this->dbh->prepare($sql_s);
        $sth_s->execute(array(':teacher_id' => $_SESSION['id'], ':student_id' => $_POST['id']));
        $result_s = $sth_s->fetch();
        //もし一致するものが合った場合はトークルームを作成する
        if($result_s > 0){
            $sql_room = "INSERT INTO talkRoom(id, student_id, teacher_id) VALUES(0, :student_id, :teacher_id)";
            $sth_room = $this->dbh->prepare($sql_room);
            $sth_room->bindParam(':student_id',$_POST['id'], PDO::PARAM_INT);
            $sth_room->bindParam(':teacher_id', $_SESSION['id'], PDO::PARAM_INT);
            $sth_room->execute();
        }else{
          return;
        }
      }
    }


    //教えたいボタンを押した相手をリアクション一覧に表示する
    // public function teachDisplay($id = 0):Array {
    //   $sql_reac = "SELECT users.id, users.nickname, users.study_language FROM users INNER JOIN teachReaction ON users.id = teachReaction.teacher_id WHERE teachReaction.teacher_id != :id";
    //   $sth_reac = $this->dbh->prepare($sql_reac);
    //   $sth_reac->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
    //   $sth_reac->execute();
    //   $result_reac = $sth_reac->fetchAll(PDO::FETCH_ASSOC);
    //   return $result_reac;
    // //トークルームが作成された場合、リアクション一覧から相その相手を除外する
    // }


}

?>
