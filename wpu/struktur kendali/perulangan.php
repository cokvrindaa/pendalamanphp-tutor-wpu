<?php 
// for
for ($i = 0 ; $i < 5; $i++){
    echo $i;
}
// while
$i = 0;
while ( $i < 5){
    echo "<br>" . $i;
    $i++;
}
// do while
$do = 0;
do {
   echo "<br>". $do;
   $do++; 
}
while ($do < 5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpading="10" cellspacing="0">
        <?php 
        for($baris = 1; $baris <= 5 ; $baris++){    


        ?>
        <?php 
            if($baris % 2 == 1){
            ?>

        <tr>
            <?php for($col =1 ; $col <=5; $col++ ){?>
            <td style="background-color: white;"> <?php echo $baris. "," . $col; ?> </td>
            <?php }?>
        </tr>
        <?php } else{?>
        <?php for($col =1 ; $col <=5; $col++ ){?>
        <td style="background-color: gray;"> <?php echo $baris. "," . $col; ?> </td>
        <?php }?>
        <?php }?>
        <?php }?>
    </table>
</body>

</html>