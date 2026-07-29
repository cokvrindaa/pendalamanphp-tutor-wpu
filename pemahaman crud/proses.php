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
        // mengambil foto bedasarkan nama foto yg di up
        $foto = $_FILES['foto']['name'];
        
        $dirFoto = "img/";
        $tmpFile = $_FILES['foto']['tmp_name'];

        // memindahkan dari tmp dipindahkan ke img
        move_uploaded_file($tmpFile, $dirFoto.$foto);


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
        $id_siswa = $_POST['id_siswa'];
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        
        // Update gambar
        $queryShow = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
        $sqlShow = mysqli_query($koneksi, $queryShow);
        $hasil = mysqli_fetch_assoc($sqlShow);
        
        // Kalau kosong tetap tampilkan gambar sebelumnya
        if ($_FILES['foto']['name'] == ""){
            $foto = $hasil['gambar'];
        } 
        // jika gambar baru maka hapus gambar sebelumnya serta tampilkan gambar yang baru
        else {
            $foto = $_FILES['foto']['name'] ;
            
            unlink("img/". $hasil['gambar']);
            move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'. $_FILES['foto']['name']);
        } 
        // Sintaks untuk mengupdate data
        $query = "UPDATE siswa SET nis='$nis', nama_siswa='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', gambar='$foto' WHERE id_siswa='$id_siswa'";
        $sql = mysqli_query($koneksi, $query);
    } 
}
// Delete
if (isset($_GET['hapus'])){
    // MENGAMBIL DATA id_siswa dari LINK....
    $id_siswa = $_GET['hapus'];
    $queryShow = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $hasil = mysqli_fetch_assoc($sqlShow);
    
    var_dump($hasil);
    unlink("img/". $hasil['gambar']);
    

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