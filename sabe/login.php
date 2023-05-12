<?php
require 'conexion.php';
session_start();

$correo_ins = $_POST['institucional'];
$pass = $_POST['pass'];


$sql = "SELECT COUNT(*) AS id_padmon FROM padmon where correo_institucional = '$correo_ins' and contraseña = '$pass'";

$consulta = mysqli_query($conexion, $sql);

$array = mysqli_fetch_array($consulta);

if ($array['id_padmon'] > 0) {

    
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['institucional'] = $correo_ins;

    header("location: plataforma/index.php ");

} else {

    header("location: indexError.php");
}
?>