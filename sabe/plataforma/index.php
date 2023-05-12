<!DOCTYPE html>
<html lang="en">
<?php
  require("../conexion.php");
  session_start();
  $correo_ins = $_SESSION['institucional'];
  $sql = "SELECT * FROM padmon WHERE correo_institucional = '$correo_ins'";
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo_saco.css">
  <title>SABE</title>
</head>

<body>

  <header>
  <div class="encabezado">
    <div class="img-left-enc">
      <img src="../media/escudo_colegio.png" alt="LOGO BENAVENTE" width="80px">
    </div>

    <div class="text-enc">
      COLEGIO FRAY TORIBIO DE BENAVENTE
      <br>
      SISTEMA DE ADMINISTRACION ESCOLAR DEL COLEGIO BENAVENTE
    </div>

    <div class="img-right-enc">
      <img src="../media/50_aniversario.jpg" alt="LOGO ANIVERSARIO" width="110px">
    </div>
  </div>
  </header>

  <section>
    <nav>
      <div class=sidebar>
        <h2>Menú</h2>
        <ul class=menu id=menu>
          <li class=menu__item><a href='index.php'>INICIO</a></li>
          <li><a href='administracion/index.php'>ADMINISTRACION</a></li>
          <li><a href='maestros/index.php'>MAESTROS</a></li>
          <li><a href='../salir.php'>SALIR</a></li>
        </ul>
      </div>
    </nav>

    <article>
      <h1>
        BIENVENIDO

        <?php
        
          $consulta = mysqli_query($conexion, $sql);
          $count = mysqli_num_rows($consulta);

          if ($count > 0) {
            while ($row = mysqli_fetch_assoc($consulta)) {
              echo $row['nombre'] . ' ' . $row['apellido_paterno'] . ' ' . $row['apellido_materno'];
            }
          } else {
            echo "<h1>Sin registro</h1>";
          }
        ?>
      </h1>
    </article>
  </section>


</body>

</html>