<?php 

class Database {
  // Property
  private $koneksi;
  protected $hostname = 'localhost',
            $username = 'root',
            $password = '',
            $db = 'myschool';
  
  // Method
  // Method Construct digunakan untuk menjalankan otomatis ketika objek menginstans class di buat
  public function __construct()
  {
    $this->koneksi = new mysqli($this->hostname, $this->username , $this->password, $this->db);
  }
  
  // Getter untuk mengambil fungsi koneksi
  // Mengecek eror atau tidak
  public function getKoneksi() {
    if (!$this->koneksi){
      return $this->koneksi->error;
    }
    return $this->koneksi;
  }

}

// // Contoh ketika kita mendeklarasikan objek dan menginstan getKoneksi
// $database = new Database;
// $database->getKoneksi();

?>