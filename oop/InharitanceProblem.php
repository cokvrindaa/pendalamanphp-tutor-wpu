<?php 
// Class
// Menjual komik dan game

class Produk {
  // Property
  public $judul , $penulis , $penerbit , $harga, $jumlahHalaman, $waktuMain, $tipe ;
  
  // Construct
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jumlahHalaman, $waktuMain, $tipe) {
    // This judul didapatkan dari properti sebelumnya sesuai hukum function
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jumlahHalaman = $jumlahHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  // Method
  public function getLabel() {
    // Agar bisa menggambil properti gunakan this
    return "Judul : $this->judul , Penulis : $this->penulis, Penerbit : $this->penerbit ";
  }

  public function getInfoLengkap(){
    // Komik : Champion Of Ujangs, Dujang , PT Sejahtera Dujang, Rp. 2000 - 100 Halaman
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    // Mengecek apakah tipenya dan juga mengabungkan dta besarkan tipe
    if($this->tipe == "Komik") {
      $str .= " - {$this->jumlahHalaman} halaman.";
    } else if ($this->tipe == "Game"){
      $str .= " - {$this->waktuMain} Jam.";
    }
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
$produk2 = new Produk("Ujang the game", "Dujang", "PT. Dujang Nusantara", 1000, 100 , 0, "Komik");
$produk3 = new Produk( "Champion Of Ujangs", "Dujang", "PT. Sejahtera Dujang", 2000, 0, 50, "Game");

// Komik : Champion Of Ujangs, Dujang , PT Sejahtera Dujang, Rp. 2000 - 100 Halaman
// Game : Ujang The Game, Dujang , PT. Dujang Nusantra, Rp.1000 - 20 Jam
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();


?>