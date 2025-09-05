<?php 
$user = [
    [
        "nama" => "admin",
        "password"=>"123"
    ],
    [
        "nama" => "ujang",
        "password"=> "321"
    ]
];

// Mengecek apakah tombol submit sudah ditekan?
if(isset($_POST["submit"])){
    // Mengecek apakah username = admin dan password = 123 ?
    foreach ($user as $akun){
        if($_POST["username"] == $akun["nama"]  && $_POST["password"] == $akun["password"]){
            // jika benar ke admin.php
            header("Location: admin.php");
            exit;
        }
        else{
            // jika salah tampilkan eror
            $error = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <?php 
    if(isset($error)){  ?>
    <p>SALAH OI PASSWORDNYA</p>

    <?php    } ?>
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