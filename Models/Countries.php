<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Countries extends Db {
  private $table = 'countries';
  public function __construct($dbh = null){
    parent::__construct($dbh);
  }

  public function selectCountry($id = 0):Array {
    $sql = 'SELECT id, name FROM countries';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
?>
