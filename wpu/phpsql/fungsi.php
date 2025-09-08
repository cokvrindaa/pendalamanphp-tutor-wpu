<?php
require_once 'koneksi.php';
function query($query){
    global $koneksi;
    $hasil = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $semester = htmlspecialchars($data["semester"]);
    // Upload gambar
    $gambar = upload();
    if (!$gambar){
        return false;
    }
    $query = "INSERT INTO siswa VALUES (NULL, '$nama', '$nis', '$jurusan', '$semester', '$gambar') ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $eror = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    
    // cek apakah ada gambar di upload menggunakan 4
    if($eror === 4){
        echo "
        <script>
        alert('pilih gambar dulu');
        </script>
        ";
        return false;
    }
    // cek apakah file di upload itu adalah gambar.
    $ekstensiGambardibolehkan = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambardibolehkan)){
        echo "
        <script>
        alert('ini bukan gambar coy!!!!');
        </script>
        ";
        return false;
    }
    // membatasi ukuran file
    if($ukuranfile > 4194304){
        echo "
        <script>
        alert('gambar terlalu besar');
        </script>
        ";
        return false;
    }
    // mencegah duplikasi
    $namafileBaru = uniqid();
    $namafileBaru .= '.';
    $namafileBaru .= $ekstensiGambar;
    // gambar siap di up
    move_uploaded_file($tmpName, 'img/'. $namafileBaru);
    return $namafileBaru;
}

function hapus($id){
    global $koneksi;
    $query = "DELETE FROM siswa WHERE id = '$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function ubah($data){
    global $koneksi;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $semester = htmlspecialchars($data["semester"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user upload gambar baru
    if ($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else {

        $gambar = upload();
    }

    $query = "UPDATE siswa SET
        nama = '$nama',
        nis = '$nis',
        jurusan = '$jurusan',
        semester = '$semester',
        gambar = '$gambar'
        WHERE id = $id
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
    $query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR nis LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
    return query($query);
}
?>