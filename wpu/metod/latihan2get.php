<?php 
if (!isset($_GET["nama"]) || !isset($_GET["nis"]) || !isset($_GET["jurusan"]) || !isset($_GET["semester"]) || !isset($_GET["gambar"])  ){
    header("Location: latihan1get.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <img style="width: 80px;" src="<?php echo $_GET["gambar"]; ?>">
        </img>
        <li>
            <?php echo $_GET["nama"]; ?>
        </li>

        <li>
            <?php echo $_GET["nis"]; ?>
        </li>
        <li>
            <?php echo $_GET["jurusan"]; ?>
        </li>

        <li>
            <?php echo $_GET["semester"]; ?>
        </li>
        <li>
            <?php echo $_GET["nilai"]; ?>
        </li>
    </ul>
    <a href="latihan1get.php">Balik</a>
</body>

</html>