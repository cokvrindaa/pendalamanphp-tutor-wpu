<?php 
require_once '../koneksi.php';

// Pengambilan nilai
$nama_produk = $_POST['nama_produk'];
$warna = $_POST['warna'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$rilis = $_POST['rilis'];
$id = $_POST["id"];

$sqlGambarLama = mysqli_query($koneksi, "SELECT gambar FROM stok WHERE id = '$id'");
$dataLama = mysqli_fetch_assoc($sqlGambarLama);
$gambarLama = $dataLama['gambar']; 

$error = $_FILES['gambar']['error'];
if($error === 4){
    $namaFile = $gambarLama;

} else {
    $namaGambar = $_FILES['gambar']['name'];
    $tmpGambar = $_FILES['gambar']['tmp_name'];
    $size = $_FILES['gambar']['size'];

    $ekstensiDibolehkan = ["png", "jpg", "jpeg"];
    $ekstensiGambar = explode(".", $namaGambar);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiDibolehkan)){
        echo "
        <script>
            alert('eror ekstensi gambar, note : ini bukan gambar!');
            window.location.href = '../frontend/index.php';
        </script>
        ";
        return false;
    }

    // Bikin nama unik biar tidak nabrak
    $namaGambarBaru = uniqid() . "." . $ekstensiGambar;

    // Upload gambar baru
    move_uploaded_file($tmpGambar, "../img/" . $namaGambarBaru);

    // Hapus gambar lama kalau ada
    if ($gambarLama && file_exists("../img/" . $gambarLama)) {
        unlink("../img/" . $gambarLama);
    }
}


// Perintah ke SQL
$sintakssql = "UPDATE stok SET nama_produk = '$nama_produk', warna = '$warna', kategori = '$kategori', harga = '$harga', rilis = '$rilis', gambar = '$namaGambarBaru' WHERE id = '$id'";
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