<?php
require_once(ROOT_PATH .'/Models/Player.php');
require_once(ROOT_PATH .'/Models/Study.php');
require_once(ROOT_PATH .'/Models/Teach.php');
require_once(ROOT_PATH .'/Models/Users.php');
require_once(ROOT_PATH .'/Models/Talk.php');


class PlayerController {
  private $request; //リクエストパラメータ（GET,POST）
  private $Player; //playerモデル
  private $Study; //Studyモデル
  private $Teach; //Teachモデル
  private $Users; //Usersモデル
  private $Talk; //Talkモデル

  public function __construct() {
    //リクエストパラメータの取得
    $this->request['get'] = $_GET;
    $this->request['post'] = $_POST;
    //モデルオブジェクトの生産
    $this->Player = new Player();
    //別モデルと連携
    $dbh = $this->Player->get_db_handler();
    $this->Study = new Study($dbh);
    $this->Teach = new Teach($dbh);
    $this->Users = new Users($dbh);
    $this->Talk = new Talk($dbh);
  }

    public function index() {
      $page = 0;
      if(isset($this->request['get']['page'])) {
        $page = $this->request['get']['page'];
      }

      $players = $this->Player->findAll($page);
      $players_count = $this->Player->countAll();
      $params = [
        'players' => $players,
        'pages' => $players_count / 20
      ];
      return $params;
    }

    public function view() {
      $player = $this->Player->findById($_SESSION['id']);
      $params = [
        'player' => $player
      ];
      // var_dump($player);
      return $params;
    }

    public function yourview() {
      $player = $this->Player->yourfindById($_POST['id']);
      $params = [
        'player' => $player
      ];
      // var_dump($player);
      return $params;
    }

  public function delete() {
    if(empty($_SESSION['id'])){
        echo '指定のパラメータが不正です。このページを削除できません。';
        exit;
    }
     $this->Player->del($_SESSION['id']);
  }

  public function editUpdate() {
     $this->Player->update($_SESSION['id']);
  }

 public function playerTmp(){
   $this->Player->playersTmpDel();
   // $this->Player->playersTmpInsert();
 }

 public function passReset(){
   $this->Player->passwordReset();
 }


 public function signin1(){
   $this->Users->reg();
 }

 public function signin2(){
   $this->Users->log();
 }

 public function userRec(){
   $user = $this->Users->userRecord();
   $user_params = [
     'user' => $user
   ];
   return $user_params;
 }

 public function studyReaction(){
   $this->Study->study();
   // $this->Talk->talk();
 }

 public function teachReaction(){
   $this->Teach->teach();
   // $this->Talk->talk();
 }

 public function studyDis(){
   $study = $this->Users->studyDisplay();
   $study_params = [
     'study' => $study
   ];
   return $study_params;
 }

 public function teachDis(){
   $teach = $this->Users->teachDisplay();
   $teach_params = [
     'teach' => $teach
   ];
   return $teach_params;
 }

 public function talkD(){
   $this->Talk->talkRoomName();
 }

//トークメッセージを表示
  public function talkDis(){
    $talkDis = $this->Talk->talkDisplay();
    $talk_params = [
      'talkDis' => $talkDis
    ];
    return $talk_params;
  }

 // //自分のトークメッセージを表示//
 // public function talkDis(){
 //   $talkDis = $this->Talk->talkDisplay();
 //   $talk_params = [
 //     'talkDis' => $talkDis
 //   ];
 //   return $talk_params;
 // }
 //
 // //相手のトークメッセージを表示
 // public function talkPartDis(){
 //   $talkPartDis = $this->Talk->talkPartnerDisplay();
 //   $talk_par_params = [
 //     'talkPartDis' => $talkPartDis
 //   ];
 //   return $talk_par_params;
 // }

 public function talkRoomDis(){
   $talkRoom = $this->Talk->talkRoom();
   $talkRoom_params = [
     'talkRoom' => $talkRoom
   ];
   return $talkRoom_params;
 }

 public function talkMess(){
   $this->Talk->talkMessage();
 }

}
