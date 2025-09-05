<?php 
require_once '../koneksi.php';

// Pengambilan nilai
$nama_produk = $_POST['nama_produk'];
$warna = $_POST['warna'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$rilis = $_POST['rilis'];
$id = $_POST["id"];

// Perintah ke SQL
$sintakssql = "UPDATE stok SET nama_produk = '$nama_produk', warna = '$warna', kategori = '$kategori', harga = '$harga', rilis = '$rilis' WHERE id = '$id'";
$eksekusi = mysqli_query($koneksi, $sintakssql);

// Pengecekan ERORR
if (mysqli_affected_rows($koneksi) > 0) {
    echo "
    <script>
        alert('Data Berhasil diedit');
        window.location.href = '../frontend/index.php';
    </script>
    ";
} else {
    echo "Data gagal diedit". mysqli_errno($koneksi);
}
?>