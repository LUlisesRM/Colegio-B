<?php
require 'conexion.php';
session_start();

$correo = $_POST['correo'];
$pass = $_POST['pass'];


$sql = "SELECT COUNT(*) AS id_padmon FROM padmon where correo_institucional = '$correo' and pass = '$pass'";

$consulta = mysqli_query($conexion, $sql);

$array = mysqli_fetch_array($consulta);

if ($array['id_padmon'] > 0) {

    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['correo'] = $correo;

    header("location: administracion/index.php ");

} else {

    header("location: indexError.php");
}
?>