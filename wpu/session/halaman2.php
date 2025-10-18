<?php 
session_start();
echo $_SESSION["nama"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Anda mau menghanucurkan sesi?</h4>
    <a href="halamandestroy.php">Ya</a>
</body>

</html>