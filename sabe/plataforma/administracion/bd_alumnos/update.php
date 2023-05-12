<?php
include ("../../../conexion.php");

$id = $_POST["id"];
$matricula = $_POST['matricula'];
$paterno = $_POST['apellido_paterno'];
$materno = $_POST['apellido_materno'];
$nombre = $_POST['nombre'];
$status = $_POST['estatus'];
$alta = $_POST['fecha_alta'];
$curp = $_POST['curp'];
$seguro = $_POST['nss'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


//actualizar datos
$sql = "UPDATE alumnos SET matricula = '$matricula', apellido_paterno ='$paterno', 
apellido_materno = '$materno', nombre = '$nombre', estatus = '$status',
fecha_alta = '$alta', curp = '$curp', nss = '$seguro', imagen = '$imagen' WHERE id_alumno = '$id' ";

$consulta = mysqli_query($conexion, $sql);


if($consulta){
    echo"<script>alert('Se han guardado los cambios correctamente, actualice la pagina para continuar'); 
    window.location='index.php';</script>";
}else{
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
}

?>