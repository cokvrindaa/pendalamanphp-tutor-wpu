<?php 
require_once '../koneksi.php';
// Mengambil nilai form dari forntend
$nama_produk = $_POST['nama_produk'];
$warna = $_POST['warna'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$rilis = $_POST['rilis'];

// Menjalankan sql
$sqlquery = "INSERT INTO stok VALUES(NULL, '$nama_produk', '$warna', '$kategori', '$harga', '$rilis')";
$eksekusi = mysqli_query($koneksi, $sqlquery);

// Pengecekan 
if (mysqli_affected_rows($koneksi) > 0) {
    echo "
    <script>
        alert('Data Berhasil Ditambahkan');
        window.location.href = '../frontend/index.php';
    </script>
    ";
} else {
    echo "Data gagal ditambahkan";
}
?>