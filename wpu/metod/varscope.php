<?php 
// Variabel local dan global
$x = 10;
echo $x;

function tampilx(){
    global $x;
    echo $x;
}
tampilx();
echo "<br>";
// Super globals 
var_dump($_POST);
?>