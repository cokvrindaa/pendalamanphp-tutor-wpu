<?php 
$umur = 14;
if($umur <= 10){
    echo "anak anak";
    
}
else if ($umur <= 20){
    echo "remaja";
} 


else{
    echo "Dewasa";
}

switch ($umur){
    case $umur <= 10:
        echo "anak anak";
        break;
    case $umur <= 20:
        echo "remaja";
        break;
    default:
    echo "Dewasa";
}
?>