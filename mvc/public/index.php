<?php

if (!session_start() ) {
  session_start();
  
}

require_once '../app/init.php';

$tes = new App;

?>