<?php
include("../../../conexion.php");

//consulta
$sql = "SELECT * FROM alumnos";

$consulta = $conexion->query($sql);

$count = mysqli_num_rows($consulta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../estilo_saco.css">
  <title>SABE</title>

</head>

<body>
  <div>

    <header>
      <div class="encabezado">
        <div class="img-left-enc">
          <img src="../../../media/escudo_colegio.png" alt="LOGO BENAVENTE" width="80px">
        </div>

        <div class="text-enc">
          COLEGIO FRAY TORIBIO DE BENAVENTE
          <br>
          SISTEMA DE ADMINISTRACION ESCOLAR DEL COLEGIO BENAVENTE
        </div>

        <div class="img-right-enc">
          <img src="../../../media/50_aniversario.jpg" alt="LOGO ANIVERSARIO" width="110px">
        </div>
      </div>
    </header>

    <section>

      <nav>
        <div class=sidebar>
          <h2>Menú</h2>
          <ul>
            <li class=menu__item><a href='../../index.php'>INICIO</a></li>
            <li><a href='../index.php'>ADMINISTRACION</a></li>
            <li><a href='../../maestros/index.php'>MAESTROS</a></li>
            <li><a href='../../../salir.php'>SALIR</a></li>
          </ul>
        </div>
      </nav>

      <article>

        <h1>BASE DE DATOS ALUMNOS</h1>

        <table border="2px">
          <tr>
            <th>MATRICULA</th>
            <th>NOMBRE</th>
          </tr>

          <?php

          if ($count > 0) {

            while ($row = mysqli_fetch_assoc($consulta)) {

              echo "<tr>";
              echo "<td>" . $row['matricula'] . "</td>";
              echo "<td>" . $row['apellido_paterno'] . ' ' . $row['apellido_materno'] . ' ' . $row['nombre'] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<h1>Sin registro</h1>";
          }

          ?>
        </table>
  </div>
  </article>
  </section>

  <div class="modal">
    <div class="contenido_modal">
      <div align=center>
        <h2>REGISTRO</h2> <br>
      </div>
      <form action='insertar.php' method='POST' enctype='multipart/form-data'>

        <lable>NOMBRE:</lable>
        <input name='nombre' required type='text'>
        <lable>APELLIDO PATERNO:</lable>
        <input name='apellido_paterno' required type='text'>
        <lable>APELLIDO MATERNO:</lable>
        <input name='apellido_materno' required type='text'>
        <lable>MATRICULA:</lable>
        <input name='matricula' required type='text'>


        <lable>ESTATUS:</lable>
        <input name='estatus' required type='text'>
        <lable>FECHA DE INGRESO:</lable>
        <input name='fecha_alta' required type='date'>
        <lable>CORREO INSTITUCIONAL:</lable>
        <input name='correo_institucional' required type='text'>
        <lable>CONTRASEÑA:</lable>
        <input name='contraseña' required type='text'>

        <lable>CURP:</lable>
        <input name='curp' required type='text'>
        <lable>NUMERO DE SEGURO SOCIAL:</lable>
        <input name='nss' required type='text'>
        <br><br>
        <div align=center>
          <label>FOTOGRAFÍA:</label>
          <input required type='file' name='imagen' style="width:300px;"><br>
        </div>
        <br><br><br>
        <div align=center>
          <input type='submit' value='ACEPTAR'> <button><a href='index.php'>CANCELAR</a></button>
        </div>


      </form>

    </div>
  </div>

</body>

</html>