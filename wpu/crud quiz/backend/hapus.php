<?php  
require_once '../koneksi.php';
$id = $_GET['id'];
$sqlsintaks = "DELETE FROM stok WHERE id = '$id'";
$eksekusi = mysqli_query($koneksi, $sqlsintaks);

// Pengecekan eror
if (mysqli_affected_rows($koneksi) > 0) {
    echo "
    <script>
        alert('Data Berhasil dihapus');
        window.location.href = '../frontend/index.php';
    </script>
    ";
} else {
    echo "Data gagal dihapus". mysqli_errno($koneksi);
}
?>