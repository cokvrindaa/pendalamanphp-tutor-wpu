<?php 

class Mobil {
  public $nama, $merk, $warna, $kecepatanMaksimal, $jumlahPenumpang;

  public function tambahKecepatan() {
    return "Kecepatan mobil bertambah";
  }
}

class MobilSport extends Mobil {
  public $turbo = false;
  public function jalankanTurbo() {
    $this->turbo = true;
    return "Turbo dijalankan";
  }
}

// Lihat disini, kita bisa mengambil method dari class paremt Mobil, walau kita memangill dari child class MobilSport
$mobil1 = new MobilSport();
echo $mobil1->tambahKecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();


?>