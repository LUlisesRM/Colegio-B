<?php
include("cn.php");
$id = $_GET["id"];
$PERSONAL = "SELECT * FROM PERSONAL WHERE ID_NOMINA = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Actualizar</title>
        <meta name="viewport" 
        content="width=device-width,
        user-scalable=no, initial-scale=1.0, maximun-
        scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>

        <form class="container-table container-table--edit" action="procesar-actualizar.php" method= "POST">
        
            <!--Columnas-->
            <div class="table__title table__title--edit">DATOS DEL PERSONAL <a href="edicion.php" class="title_edit">Regresar</a></div>
            <div class="table__header">ID NOMINA</div>
            <div class="table__header">APELLIDO PATERNO</div>
            <div class="table__header">APELLIDO MATERNO</div>
            <div class="table__header">NOMBRE(S)</div>
            <div class="table__header">ID LICENCIA</div>
            <div class="table__header">VENCIMIENTO LICENCIA</div>
            <div class="table__header">Operacion</div>

            
            
            <!--Datos-->
            <?php $resultado = mysqli_query($conexion,$PERSONAL);
            while($row=mysqli_fetch_assoc($resultado)){?>
                
            <!--Operador1-->
            
            <input type="text" class="table__item" value="<?php echo $row["ID_NOMINA"];?>" name:"ID_NOMINA">
            <input type="text" class="table__item" value="<?php echo $row["APELLIDO_PATERNO"];?>" name:"APELLIDO_PATERNO">
            <input type="text" class="table__item" value="<?php echo $row["APELLIDO_MATERNO"];?>" name:"APELLIDO_MATERNO">
            <input type="text" class="table__item" value="<?php echo $row["NOMBRE"];?>" name:"NOMBRE">
            <input type="text" class="table__item" value="<?php echo $row["ID_LICENCIA"];?>" name:"ID_LICENCIA">
            <input type="text" class="table__item" value="<?php echo $row["VENCIMIENTO_LICENCIA"];?>" name:"VENCIMIENTO_LICENCIA">
              
            <?php } mysqli_free_result($resultado); ?>
            <input class="container__submit--actualizar" type="submit" value ="actualizar">
            </form>
        </div>
    </body>





</html>