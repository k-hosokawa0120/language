<?php
require_once(ROOT_PATH .'/Models/Db.php');

class study extends Db {
    private $table = 'studyReaction';
    public function __construct($dbh = null) {
        parent::__construct($dbh);
    }

    //教わりたいアクション//
    public function study(){
      // $teacher_id = $_POST['id'];
      $query = $this->dbh->prepare('SELECT student_id, teacher_id FROM studyReaction WHERE student_id = :student_id AND teacher_id = :teacher_id limit 1');
      $query->execute(array(':student_id' => $_SESSION['id'] ,':teacher_id' => $_POST['id']));
      $result = $query->fetch();

      if($result > 0){
        echo '既にアクションを送っています。';
        echo "<br />";
        echo '<a href="search.php">戻る</a>';
        exit();
      }else{
      $sql = "INSERT INTO studyReaction(student_id, teacher_id) VALUES (:student_id, :teacher_id)";
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(':student_id', $_SESSION['id'], PDO::PARAM_INT);
      $sth->bindParam(':teacher_id',$_POST['id'], PDO::PARAM_INT);
      $sth->execute();
    }
  }

}
?>
