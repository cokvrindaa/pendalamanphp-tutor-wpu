<?php 
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// Cara baru
$bulan = [
    "Januari",
    "Febuari",
    "Maret"
];
// menambahkan array
$hari[] = "Kamis";

// Menampilkan array
// var dump, printf()
var_dump($hari);
echo "<br>";
print_r($bulan);

// Menampilkan 1 elemn pada array
echo $hari[0];
echo "<br>";

for ($i = 0 ; $i < count($hari); $i++){
    echo $hari[$i]. "<br>";
}
// Pengulangan For Each
foreach ($hari as $harinew){
    echo " ".  $harinew;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak {
        background-color: red;
        color: white;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <div style="display: flex; gap:10px; margin-bottom: 5px;">
        <?php for($i = 0 ; $i < count($hari) ; $i++) {?>
        <div class="kotak">
            <?php echo $hari[$i] ?></div>
        <?php }?>
    </div>
    <div style="display: flex; gap:10px;">
        <?php foreach($hari as $harinew) {?>
        <div class="kotak">
            <?php echo $harinew ?></div>
        <?php }?>
    </div>
</body>

</html>