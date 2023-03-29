<?php
require 'cn.php';
session_start();

$correo = $_POST['correo'];
$pass = $_POST['pass'];


$q = "SELECT COUNT(*) AS id_alumno FROM alumnos where correo_institucional = '$correo' and pass = '$pass'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['id_alumno'] > 0) {

    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['correo'] = $correo;

    header("location: ../../plataforma/index.php");
} else {

    header("location: ../indexError.php");
}
?>