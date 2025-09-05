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
    <?php foreach ($siswa as $siswatampil){?>
    <ul>
        <li>
            <img style="height: 90px;" src="<?php echo $siswatampil["gambar"];  ?>" alt="">
        </li>
        <li>
            <?php echo $siswatampil["nama"]; ?>
        </li>
        <li>
            <?php echo $siswatampil["nis"]; ?>
        </li>
        <li>
            <?php echo $siswatampil["jurusan"]; ?>
        </li>
        <li>
            <?php echo $siswatampil["semester"]; ?>
        </li>
        <li>
            <?php 
                // for ($i = 0 ; $i < count($siswatampil["nilai"] ) ; $i++ ){
                //     echo $siswatampil["nilai"][$i] ." ";
                // };
                foreach ($siswatampil["nilai"] as $siswatampilnilai){
                    echo $siswatampilnilai. " ";
                }


            ?>
        </li>
    </ul>
    <?php }?>

</body>

</html>