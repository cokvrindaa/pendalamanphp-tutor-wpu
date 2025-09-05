<?php 
$siswa = [
    [
    "nama" => "Manusia ujang",
    "nis" => "01012134",
    "jurusan" => "jurusan abal abal",
    "semester" => "semester 21",
    "nilai" => [80, 90 , 87],
    "gambar" => "/belajarphp/wpu/array/gambar/gambar1.png"
    ],
    [
    "nama" => "Orang",
    "nis" => "01016572134",
    "jurusan" => "jurusan abal abal",
    "semester" => "semester 10",
    "nilai" => [88, 92 , 94],
    "gambar" => "/belajarphp/wpu/array/gambar/gambar2.png"

    ]
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
    <h1>Daftar Siswa</h1>

    <ul>
        <?php foreach ($siswa as $siswatampil){?>
        <li>
            <a
                href="latihan2get.php?nama=<?php echo $siswatampil["nama"]?>&nis=<?php echo $siswatampil["nis"]?>&jurusan=<?php echo $siswatampil["jurusan"]?>&semester=<?php echo $siswatampil["semester"]?>&gambar=<?php echo $siswatampil["gambar"]?>&nilai=<?php foreach ($siswatampil["nilai"] as $siswatampilnilai) {echo $siswatampilnilai . " ";} ?>">
                <?php echo $siswatampil["nama"]  ?>
            </a>
        </li>
        <?php }?>
    </ul>
</body>

</html>