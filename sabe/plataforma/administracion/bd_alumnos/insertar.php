<?php
include ("../../../conexion.php");

$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$matri = $_POST['matricula'];
$paterno = $_POST['apellido_paterno'];
$materno = $_POST['apellido_materno'];
$nombre = $_POST['nombre'];
$status = $_POST['estatus'];
$alta = $_POST['fecha_alta'];
$correo_ins = $_POST['correo_institucional'];
$pass = $_POST["contraseña"];
$curp = $_POST['curp'];
$seguro = $_POST['nss'];


$sql = "INSERT INTO alumnos (imagen,matricula,apellido_paterno,apellido_materno,nombre,estatus,
        fecha_alta,correo_institucional,contraseña,curp,nss)
        VALUES ('$imagen','$matri','$paterno','$materno','$nombre', '$status','$alta','$correo_ins','$pass','$curp','$seguro')";


$consulta = mysqli_query($conexion, $sql);


if($consulta){
    echo"<script>alert('Se han guardado los cambios correctamente, actualice la pagina para continuar'); 
    window.location='index.php';</script>";
}else{
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
}

?>