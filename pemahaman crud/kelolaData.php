<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data </title>
</head>

<body>
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                CRUD - LATIHAN
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="../pemahaman crud/proses.php">
            <div class=" mb-3 row">
                <label for="nis" class="col-sm-2 col-form-label">NIS </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nis" placeholder="contoh: 1111" name="nis">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" laceholder="Contoh: Ujang Dujang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin </label>
                <div class="col-sm-10">
                    <select class="form-select " id="jenisKelamin">
                        <option value="Laki-Laki" name="laki-laki">Laki-Laki</option>
                        <option value=" Perempuan" name="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <div class="input-group ">
                        <input type="file" class="form-control" id="foto" name="foto">
                        <label class="input-group-text" for="upFoto">Upload</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat"
                        placeholder="Contoh: Jl. Raya Jalan Jalan">
                </div>
            </div>
            <div class="col">
                <?php 
            if(isset($_GET["ubah"])){
            ?>
                <button type="submit" name="edit" class="btn btn-outline-primary btn-sm">Simpan Perubahan!</button>
                <?php } else { ?>
                <button type="submit" name="tambah" class="btn btn-outline-primary btn-sm">Tambahkan!</button>
                <?php }?>
                <a href="index.php">
                    <button type="button" class="btn btn-outline-danger btn-sm">Kembali</button>
                </a>
            </div>
        </form>
    </div>
</body>

</html>