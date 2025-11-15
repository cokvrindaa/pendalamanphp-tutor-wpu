<?php 
session_start();
session_destroy();
header("Location: login.php");
setcookie('id','', time()-60);
setcookie('key','', time()-60);
exit;
?>