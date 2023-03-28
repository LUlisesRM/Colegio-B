<?php
include ("cn.php");

$id_nomina = $_POST["id_nomina"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$nombre = $_POST["nombre"];
$id_licencia = $_POST["id_licencia"];
$vencimiento = $_POST["vencimiento"];
$id = $_POST["id"];

//actualizar datos
$actualizar = 
"UPDATE PERSONAL 
 SET ID_NOMINA='$id_nomina', APELLIDO_PATERNO='$apellido_paterno', APELLIDO_MATERNO='$apellido_materno', NOMBRE='$nombre', ID_LICENCIA='$id_licencia', VENCIMIENTO_LICENCIA='$vencimiento'
 WHERE ID_NOMINA = '$id' ";

$resultado = mysqli_query($conexion, $actualizar);

/*
if($resultado){
    
    echo"<script>alert('Se han actualizado los cambios correctamente, actualice la pagina para continuar'); window.location='127.0.0.1/dashboard/METROBUS/CITEMSA/BASE_DE_DATOS_RH';</script>";
} else{
    echo"<script>alert('No se pudo actualizar los datos'); window.history.go(-1);</script>";
} 
*/

?>