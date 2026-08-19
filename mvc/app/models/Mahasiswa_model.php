<?php
class Mahasiswa_model {
  private $databaseHandler, $statement;

  public function __construct()
  {
    $dataSourceName = 'mysql:host=localhost;dbname=sekolah_wpu';
    
    // cek eror
    try {
      $this->databaseHandler = new PDO($dataSourceName, 'root' , '');
    } catch (PDOException $e){
      die($e->getMessage());
    }
  }

  // mengambill data mahasiswa
  public function getAllMahasiswa() {
    $this->statement = $this->databaseHandler->prepare('SELECT * FROM MAHASISWA');
    $this->statement->execute();
    return $this->statement->fetchAll(PDO::FETCH_ASSOC);
  }
}  
?>