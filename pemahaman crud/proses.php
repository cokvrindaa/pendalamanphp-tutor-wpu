<?php 
include 'koneksi.php';

if (isset($_POST['aksi'])){
    // Ketika data ditambahkan (INSERT)
    if ($_POST["aksi"] == "tambah"){
        // Mengambil data dengan metod post (BUKAN MELALUI LINK SEPERTI GET)
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $foto = '1.png';
        
        // Logic untuk menambahkan data ke database
        $sqlQuery = "INSERT INTO siswa VALUES(null, '$nis', '$nama', '$jenis_kelamin', '$foto', '$alamat')";
        $sqlSintaks = mysqli_query($koneksi, $sqlQuery);

        // Jika berhasil
        if($sqlSintaks){
            header("location: index.php");
        } else {
            echo "eror!" . mysqli_error();
        }
        
    } else if ($_POST["aksi"] == "edit"){
        echo "edit";
    } 
}
// Delete
if (isset($_GET['hapus'])){
    // MENGAMBIL DATA id_siswa dari LINK....
    $id_siswa = $_GET['hapus'];
    $sqlQuery = "DELETE FROM siswa WHERE id_siswa = '$id_siswa'";
    $sqlSintaks = mysqli_query($koneksi, $sqlQuery);
    // Jika berhasil
    if($sqlSintaks){
        header("location: index.php");
    } else {
        echo "eror!" . mysqli_error();
    }
}
?>