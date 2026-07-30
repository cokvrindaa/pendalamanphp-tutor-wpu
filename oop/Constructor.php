<?php 
// Class
// Menjual komik dan game

class Produk {
  // Property
  public $judul , $penulis , $penerbit , $harga ;
  
  // Construct
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0) {
    // This judul didapatkan dari properti sebelumnya sesuai hukum function
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // Method
  public function getLabel() {
    // Agar bisa menggambil properti gunakan this
    return "Judul : $this->judul , Penulis : $this->penulis, Penerbit : $this->penerbit ";
  }
}

// // object adalah instance/implementasi dari class
$produk2 = new Produk("Ujang the game", "Dujang", "PT. Dujang Nusantara", 1000);
$produk3 = new Produk( "Champion Of Ujangs", "Dujang", "PT. Sejahtera Dujang", 2000);

echo $produk2->getLabel();
echo "<br>";
echo "<br>";
echo $produk3->getLabel();


?>