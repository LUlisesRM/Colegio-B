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

                <h1>ALUMNOS</h1>

                <table border="2px">
                    <tr>
                        <th>MATRICULA</th>
                        <th>NOMBRE</th>
                    </tr>

                    <?php
                    include("../../../conexion.php");

                    //consulta
                    $sql = "SELECT * FROM alumnos";

                    $consulta = $conexion->query($sql);

                    $count = mysqli_num_rows($consulta);

                    if ($count > 0) {

                        while ($row = mysqli_fetch_assoc($consulta)) {

                            echo "<tr>";
                            echo "<td><a href= mostrar.php?id=" . $row['id_alumnos'] . ">" . $row['matricula'] . "</a></td>";
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
        <div class="contenido_modal" align=center>

            <?php
            include("../../../conexion.php");

            $id = $_GET["id"];
            $sql = "SELECT * FROM alumnos WHERE id_alumno = '$id'";
            $consulta = mysqli_query($conexion, $sql);
            $count = mysqli_num_rows($consulta);

            if ($count > 0) {


                while ($row = mysqli_fetch_assoc($consulta)) {

                    echo "<h2>DATOS DEL ALUMNO </h2>";
                    echo "<form action='update.php' method = 'POST' enctype='multipart/form-data' >";
                    echo "<table class='tabla_modal'>";
                    echo "<tr>";
                    ?>


                    <td><input required type='file' name='imagen' style="width: 265px;"></td>

                    <?php
                    echo "<td> ";
                    echo "<input type='hidden' name = 'id' value=" . $row['id_alumno'] . ">";
                    echo "NOMBRE: <input type='text' name = 'nombre' value=" . $row['nombre'] . "><input type='text' name = 'apellido_paterno' value=" . $row['apellido_paterno'] . "><input type='text' name = 'apellido_materno' value=" . $row['apellido_materno'] . "><br>";
                    echo "MATRICULA: <input type='text' name = 'matricula' value=" . $row['matricula'] . "><br>";
                    echo "ESTATUS: <input type='text' name = 'estatus' value=" . $row['estatus'] . "><br>";

                    echo "FECHA DE INGRESO: <input type='text' name = 'fecha_alta' value=" . $row['fecha_alta'] . "><br>";
                    
                    echo "CURP: <input type='text' name = 'curp' style='width:168px;' value=" . $row['curp'] . "><br>";
                    echo "NUMERO DE SEGURO SOCIAL: <input type='text' name = 'nss' value=" . $row['nss'] . "><br>";

                    echo "</td></tr>";
                    echo "</table> <br><br>";
                    echo "<input type='submit' value = 'ACEPTAR' style='width:89px;'> <button><a href= mostrar.php?id=" . $row['id_alumno'] . ">CANCELAR</a></button>";
                    echo "</form>";



                }
            } else {
                echo "<h1>Sin registro</h1>";
            }

            ?>

        </div>
    </div>

</body>

</html>