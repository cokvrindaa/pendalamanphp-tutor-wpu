<?php 
$siswa = [
    ["Orang aja" , "01010101", "Teknik Abal Abalan", "Semester2"],
    ["Manusia" , "0132101", "Teknik Abal Abalan", "Semester1"]

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar SIswa</h1>
    <?php foreach ($siswa as $siswatampil){?>
    <ul>
        <li>
            <?php echo $siswatampil[0]; ?>
        </li>
        <li>
            <?php echo $siswatampil[1]; ?>
        </li>
        <li>
            <?php echo $siswatampil[2]; ?>
        </li>
        <li>
            <?php echo $siswatampil[3]; ?>
        </li>
    </ul>
    <?php }?>

</body>

</html>