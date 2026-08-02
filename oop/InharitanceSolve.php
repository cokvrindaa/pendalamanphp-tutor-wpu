<?php 
// Class
// Menjual komik dan game

class Produk {
  // Property
  public $judul , $penulis , $penerbit , $harga, $jumlahHalaman, $waktuMain ;
  
  // Construct
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jumlahHalaman, $waktuMain) {
    // This judul didapatkan dari properti sebelumnya sesuai hukum function
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jumlahHalaman = $jumlahHalaman;
    $this->waktuMain = $waktuMain;
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
  public function getInfoProduk(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jumlahHalaman} halaman";
    return $str;
  }
}

// Child Game dari Produk
class Game extends Produk {
  public function getInfoProduk(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) -  {$this->waktuMain} Jam.";
    return $str;
  }
}


// object type, membuat object bisa jadi parameter dari metod membatasi agar parameter yang diterima harus berupa object dari class tertentu.
class CetakInfo {
  // lihat Produk $produk
  public function cetak( Produk $produk2) {
    $string = $produk2->getLabel();
    return $string;
  }
}

// // object adalah instance/implementasi dari class
$produk2 = new Komik("Ujang the game", "Dujang", "PT. Dujang Nusantara", 1000, 100 , 0 );
$produk3 = new Game( "Champion Of Ujangs", "Dujang", "PT. Sejahtera Dujang", 2000, 0, 50, );

// Komik : Champion Of Ujangs, Dujang , PT Sejahtera Dujang, Rp. 2000 - 100 Halaman
// Game : Ujang The Game, Dujang , PT. Dujang Nusantra, Rp.1000 - 20 Jam
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoLengkap();


?>