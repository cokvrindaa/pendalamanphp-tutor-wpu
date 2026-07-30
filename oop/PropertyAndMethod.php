<?php 
// Class
// Menjual komik dan game

class Produk {
  // Property
  public $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0;
  
  // Method
  public function getLabel() {
    // Agar bisa menggambil properti gunakan this
    return "Judul : $this->judul , Penulis : $this->penulis, Penerbit : $this->penerbit, ";
  }
    
}

// // object adalah instance/implementasi dari class
$produk2 = new Produk();
// // Menimpa isinya bedasarkan objek yang di instance dari class
$produk2->judul = "Ujang the game";
$produk2->penulis = "Dujang";
$produk2->penerbit = "PT. Dujang Nusantara";
$produk2->harga = 1000;

$produk3 = new Produk();
$produk3->judul = "Champion Of Ujangs";
$produk3->penulis = "Dujang";
$produk3->penerbit = "PT. Sejahtera Dujang";
$produk3->harga = 2000;

echo $produk2->getLabel();
echo "<br>";
echo "Komik : $produk2->penulis, $produk2->penerbit";
echo "<br>";
echo $produk3->getLabel();

?>