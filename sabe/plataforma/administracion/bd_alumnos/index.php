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
  <title>SACO</title>

</head>

<body>

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
        <img src="../../../media/50_aniversario.jpg" alt="LOGO CITEMSA" width="110px">
      </div>
    </div>
  </header>


  <section>
    <nav>
      <div class=sidebar>
        <h2>Menú</h2>
        <ul>
          <li class=menu__item><a href='../../../index.php'>INICIO</a></li>
          <li><a href='../index.php'>ADMINISTRACION</a>
            <ul class=submenu>
              <li class=menu__item><a href="index.php" class=menu__link>ALUMNOS</a></li>
            </ul>
          </li>
          <li><a href='../../maestros/index.php'>MAESTROS</a></li>
          <li><a href='../../../salir.php'>SALIR</a></li>

        </ul>
      </div>
    </nav>

    <article>
      <div>
        <h1>BASE DE DATOS</h1>
      </div>


      <div>
        <table class="centered">
          <tr>
            <th>MATRICULA</th>
            <th>NOMBRE</th>
          </tr>
          <?php
          if ($count > 0) {

            while ($row = mysqli_fetch_assoc($consulta)) {

              echo "<tr>";
              echo "<td><a href= mostrar.php?id=" . $row['id_alumno'] . ">" . $row['matricula'] . "</a></td>";
              echo "<td>" . $row['apellido_paterno'] . ' ' . $row['apellido_materno'] . ' ' . $row['nombre'] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<h1>Sin registro</h1>";
          }

          ?>
        </table>
        <br><br>

        <div align=center>
          <a href="registrar.php">Registrar</a>
        </div>


        <br>

      </div>

    </article>

  </section>



</body>

</html>