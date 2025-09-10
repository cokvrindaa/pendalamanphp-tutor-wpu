<?php 
require_once '../koneksi.php';
// Mengambil nilai form dari forntend
$nama_produk = $_POST['nama_produk'];
$warna = $_POST['warna'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$rilis = $_POST['rilis'];
var_dump($_FILES);

// File Uploading sistem
$namaGambar = $_FILES['gambar']['name'];
$tmpGambar = $_FILES['gambar']['tmp_name'];
$error = $_FILES['gambar']['error'];

// Pengecekan files jika tidak ada file
if($error === 4){
    echo "
    <script>
        alert('Upload dulu gambarnya');
        window.location.href = '../frontend/tambahPage.php';
    </script>
    ";
    return false;
}

// Pengecekan ekstensi gambar
$ekstensiDibolehkan = ["png", "jpg", "jpeg"];
$ekstensiGambar = explode(".", $namaGambar);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if (!in_array($ekstensiGambar, $ekstensiDibolehkan)){
    echo "
    <script>
        alert('eror ekstensi gambar, note : ini bukan gambar!');
        window.location.href = '../frontend/tambahPage.php';
    </script>
    ";
    return false;
}

move_uploaded_file($tmpGambar, "../img/" . $namaGambar);

// Menjalankan sql
$sqlquery = "INSERT INTO stok VALUES(NULL, '$nama_produk', '$warna', '$kategori', '$harga', '$rilis', '$namaGambar')";
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