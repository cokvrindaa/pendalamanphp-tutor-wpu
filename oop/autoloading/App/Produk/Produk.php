<?php 
abstract class Produk {
  // Property  
  protected $diskon = 0 , $judul , $penulis , $penerbit , $harga;

  
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

  abstract public function getInfo();

  
}

?>