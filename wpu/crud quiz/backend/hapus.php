<?php  
require_once '../koneksi.php';
$id = $_GET['id'];

// Ambil nama file gambar dulu
$queryGambar = mysqli_query($koneksi, "SELECT gambar FROM stok WHERE id = '$id'");
$dataGambar = mysqli_fetch_assoc($queryGambar);

// Hapus data dari database
$sqlsintaks = "DELETE FROM stok WHERE id = '$id'";
$eksekusi = mysqli_query($koneksi, $sqlsintaks);

// Kalau data berhasil dihapus, hapus juga file gambar
if (mysqli_affected_rows($koneksi) > 0) {
    if ($dataGambar && file_exists("../img/" . $dataGambar['gambar'])) {
        unlink("../img/" . $dataGambar['gambar']);
    }

    echo "
    <script>
        alert('Data Berhasil dihapus');
        window.location.href = '../frontend/index.php';
    </script>
    ";
} else {
    echo "Data gagal dihapus. Error: " . mysqli_error($koneksi);
}
?>