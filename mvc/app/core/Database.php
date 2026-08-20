<?php
class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $db_name = DB_NAME;
  
  private $databaseHandler, $statement;  
  
  public function __construct()
  {
    $dataSourceName = 'mysql:host='. $this->host .';dbname=' .$this->db_name;
    
    // untuk menjaga database / keamanan
    $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    
    // cek eror
    try {
      $this->databaseHandler = new PDO($dataSourceName, $this->user , $this->pass);
    } catch (PDOException $e){
      die($e->getMessage());
    }
  }
  
  // method untuk query yg bisa di pakai scara flexible
  public function query($query) {
    $this->statement = $this->databaseHandler->prepare($query);
  }

  // binding data / membersihkan data
  public function bind($param, $value, $type = null){
    // jika tipe nya null
    if (is_null($type)){
      switch(true) {  
        // mengubah tipenya bedasarkan tipe data
        case is_int($value) :
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value) :
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value) :
          $type = PDO::PARAM_NULL;
          break;
        default :
          $type = PDO::PARAM_STR;
      }
    }
    $this->statement->bindValue($param, $value, $type);
  }
  
  // eksekusi
  public function execute() {
    $this->statement->execute();
  }

  // untuk data banyak, contoh select * mahasiswa
  public function resultSet() {
    $this->execute();
    return $this->statement->fetchAll(PDO::FETCH_ASSOC);
  }
  // untuk satu data
  public function single() {
    $this->execute();
    return $this->statement->fetch(PDO::FETCH_ASSOC);
  }
  
}