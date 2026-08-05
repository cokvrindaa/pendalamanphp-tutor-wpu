<?php
require_once 'App/init.php';
// $produk2 = new Komik("Ujang the game", "Dujang", "PT. Dujang Nusantara", 1000, 100 );
// $produk3 = new Game( "Champion Of Ujangs", "Dujang", "PT. Sejahtera Dujang", 2000, 50 );

// $cetakProduk = new CetakInfo();
// $cetakProduk->tambahProduk($produk2);
// $cetakProduk->tambahProduk($produk3);
// echo $cetakProduk->cetak();

new App\Service\User();
echo "<br>";
new App\Service\User();