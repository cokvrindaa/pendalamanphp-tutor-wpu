<?php
require_once 'koneksi.php';

    if (isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        // mengambil data username bedasrkan yang di ketik pengguna.
        $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE nama = '$username'");
        // Cek nama
        if(mysqli_num_rows($hasil)=== 1){
            // cek pw
            $row = mysqli_fetch_assoc($hasil);
            if(password_verify($password, $row["password"])){
                header("Location: index.php");
                exit;
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>