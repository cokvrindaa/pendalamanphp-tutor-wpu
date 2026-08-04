<?php 
// Class
// Menjual komik dan game

abstract class Produk {
  // Property
  private $judul , $penulis , $penerbit;
  protected $diskon = 0 ;
  private $harga ;
  
  // Construct
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, ) {
    // This judul didapatkan dari properti sebelumnya sesuai hukum function
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;

  } 
  // Setter
  public function setJudul($judul) {
    $this->judul = $judul;
  }

  public function setPenulis($penulis) {
    $this->penulis = $penulis;
  }

  public function setPenerbit($penerbit) {
    $this->penerbit = $penerbit;
  }

  public function setHarga($harga) {
    $this->harga = $harga;
  }

  // Getter
  public function getJudul() {
    return $this->judul;
  }

  public function getPenulis() {
    return $this->penulis;
  }

  public function getPenerbit() {
    return $this->penerbit;
  }

  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
  
  // Method
  public function getLabel() {
    // Agar bisa menggambil properti gunakan this
    return "Judul : $this->judul , Penulis : $this->penulis, Penerbit : $this->penerbit ";
  }

  public function getInfoProduk(){
    // Komik : Champion Of Ujangs, Dujang , PT Sejahtera Dujang, Rp. 2000 - 100 Halaman
    $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
  
}

// Child Komik dari Produk
class Komik extends Produk {
  public $jumlahHalaman;
  
  // Mengambil construct dari parrent, kecuali jumlah halaman nya
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jumlahHalaman){

    parent::__construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman);
    $this->jumlahHalaman = $jumlahHalaman;
    
  }

  public function getInfoProduk(){
    $str = " Komik : ". parent::getInfoProduk() . " - {$this->jumlahHalaman} halaman";
    return $str;
  }
}

// Child Game dari Produk
class Game extends Produk {
  public $waktuMain;

  // Mengambil construct dari parrent, kecuali waktumain nya
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0,  $waktuMain){
    parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
    $this->waktuMain = $waktuMain;
  }


  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }

  public function getInfoProduk(){
    $str = " Game : ". parent::getInfoProduk() ."  {$this->waktuMain} Jam.";
    return $str;
  }


}


// object type, membuat object bisa jadi parameter dari metod membatasi agar parameter yang diterima harus berupa object dari class tertentu.
class CetakInfo {

  public $daftarProduk = array();
  
  public function tambahProduk(Produk $produk){
    $this->daftarProduk[] = $produk;
  }


  // lihat Produk $produk
  public function cetak() {
    $string = "Daftar produk : <br>";

    foreach($this->daftarProduk as $p){
      $string .= "- {$p->getInfoProduk()} <br>";
    }
    
    return $string;
  }
}

// // object adalah instance/implementasi dari class
// $produk2 = new Komik("Ujang the game", "Dujang", "PT. Dujang Nusantara", 1000, 100 );
// $produk3 = new Game( "Champion Of Ujangs", "Dujang", "PT. Sejahtera Dujang", 2000, 50 );


// $cetakProduk = new CetakInfo();
// $cetakProduk->tambahProduk($produk2);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();
$produk = new Produk();

?>