<?php
// Child Komik dari Produk
class Komik extends Produk implements InfoProduk {
  public $jumlahHalaman;
  public function getInfo(){
    // Komik : Champion Of Ujangs, Dujang , PT Sejahtera Dujang, Rp. 2000 - 100 Halaman
    $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
  
  // Mengambil construct dari parrent, kecuali jumlah halaman nya
  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jumlahHalaman){

    parent::__construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman);
    $this->jumlahHalaman = $jumlahHalaman;
    
  }

  public function getInfoProduk(){
    $str = " Komik : ". $this->getInfo() . " - {$this->jumlahHalaman} halaman";
    return $str;
  }

}