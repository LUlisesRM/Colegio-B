<?php

session_start();
$correo= $_SESSION['correo'];

if(!isset($correo)){

        header("location: index.php");
}else{

    include("main.php");
    
}

?>
 
 