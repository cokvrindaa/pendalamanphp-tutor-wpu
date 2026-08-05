<?php 
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