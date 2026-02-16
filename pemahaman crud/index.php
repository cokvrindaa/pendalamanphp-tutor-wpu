<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                CRUD - LATIHAN
            </a>
        </div>
    </nav>

    <div class="container">
        <!-- Judul -->
        <h3 class="mt-4">Halaman 1 - Data siswa</h3>
        <figure>
            <blockquote class="blockquote">
                <p>Manajemen data siswa</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <a href="./tambahData.php">
            <button type="button" class="btn btn-outline-primary">Tambah Data</button>

        </a>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto Siswa</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <!-- Data -->
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1012</td>
                        <td>Ujang Dimari</td>
                        <td>Laki - Laki</td>
                        <td><img src="./img/1.png" alt="" style="height: 100px;"></td>
                        <td>Jl. Jalan Aja</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger btn-sm">Hapus</button>
                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>