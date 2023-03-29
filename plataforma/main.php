<?php
include("../login/log/cn.php");
$consulta = "SELECT * FROM alumnos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, 
    maximun-scale=1.0, minimum-scale=1.0">
    <link rel= stylesheet href= css/estilo_plataforma.css>
    <title>Document</title>
</head>
<body>
      
    <header text-align= center>COLEGIO BENAVENTE</header>
    <aside id=left> 
    <ul> Base de datos
        <ul><a href='bd/index.php'>Alumnos</a></ul>
        <ul>Docentes</ul>
        <ul>Administrativo</ul>
    </ul>
    <ul>
     <a href='../login/log/salir.php'> 
    cerrar sesion </a>
    </ul> 

</aside>

<main style=background-color: #082AB5>
    <h1> bienvenido a la plataforma Benavente</h1>

    <table border="2px" margin="100px"> 
    <tr>
        <th>MATRICULA</th>
        <th>NOMBRE DEL ALUMNO</th>
        <th>CORREO INSTITUCIONAL</th>
    </tr>
    
    <?php
    $consulta_sql="SELECT * FROM alumnos";

    $resultado=$conexion->query($consulta_sql);
    
    $count=mysqli_num_rows($resultado);

    if ($count>0){

     while($row=mysqli_fetch_assoc($resultado) ){

        echo "<tr>";
        echo "<td>".$row['grado']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['correo_institucional']."</td>";
        echo "</tr>";
    } 
    


    }else{

        echo "<h1>Sin registro</h1>";
    }

?>

<a href="eliminar.html"><h2 >Eliminar Usuario</h2></a>    

</table>


</main>;
<footer></footer>;
</body>
</html>