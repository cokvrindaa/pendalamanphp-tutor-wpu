<?php 
// Child Game dari Produk
class Game extends Produk implements InfoProduk {
  public $waktuMain;
  public function getInfo(){
    // Komik : Champion Of Ujangs, Dujang , PT Sejahtera Dujang, Rp. 2000 - 100 Halaman
    $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  // Mengambil construct dari parrent, kecuali waktumain nya
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0,  $waktuMain){
    parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
    $this->waktuMain = $waktuMain;
  }


  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }

  public function getInfoProduk(){
    $str = " Game : ". $this->getInfo() ."  {$this->waktuMain} Jam.";
    return $str;
  }


}