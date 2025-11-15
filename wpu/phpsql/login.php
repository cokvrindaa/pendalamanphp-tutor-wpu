<?php
session_start();
require_once 'koneksi.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];
    // mengambil username bedasarkan id
    $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'");
    $row = mysqli_fetch_assoc($hasil);
    
    // Cek cookie dan username
    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}
// cek session
if( isset($_SESSION["login"])){
    header("Location: index2.php");
    exit;
}

    if (isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        // mengambil data username bedasrkan yang di ketik pengguna.
        $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE nama = '$username'");
        // Cek nama
        if(mysqli_num_rows($hasil)=== 1){
            // cek pw
            $row = mysqli_fetch_assoc($hasil);
            // Jika berhasil..
            if(password_verify($password, $row["password"])){
                // set sesion
                $_SESSION["login"] = true;
                // cek remember me
                if(isset($_POST['remember'])){
                    setcookie('id', $row['id'], time()+60);
                    setcookie('key', hash('sha256', $row['username']), time()+60);
                }
                
                header("Location: index2.php");
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
        <label for="remember">remember: </label>
        <input type="checkbox" name="remember" id="remember">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>