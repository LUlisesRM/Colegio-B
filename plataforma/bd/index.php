<?php
include("cn.php");
$PERSONAL = "SELECT * FROM PERSONAL";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" 
        content="width=device-width,
        user-scalable=no, initial-scale=1.0, maximun-
        scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>

        <div class="container-add">
            <h2 class="container__title">REGISTRAR OPERADOR</h2>
            <form action ="insertar.php" method="post" class="container__form">
                <lable class="container__label">ID NOMINA:</lable>
                <input name="id_nomina" type="text" class="container__input">
                <lable class="container__label">APELLIDO PATERNO:</lable>
                <input name="apellido_paterno" type="text" class="container__input">
                <lable class="container__label">APELLIDO MATERNO:</lable>
                <input name="apellido_materno" type="text" class="container__input">
                <lable class="container__label">NOMBRE(S):</lable>
                <input name="nombre" type="text" class="container__input">
                <lable class="container__label">ID LICENCIA:</lable>
                <input name="id_licencia" type="text" class="container__input">
                <lable class="container__label">VENCIMIENTO LICENCIA:</lable>
                <input name="vencimiento" type="date" class="container__input">
                <input class="container__submit" type="submit" value ="Registrar">
            </form>
        </div>


        <div class="container-table"> 
            <!--Columnas-->
            <div class="table__title">DATOS DEL PERSONAL<a href="edicion.php" class="title_edit">Edición</a></div>
            <div class="table__header">ID NOMINA</div>
            <div class="table__header">APELLIDO PATERNO</div>
            <div class="table__header">APELLIDO MATERNO</div>
            <div class="table__header">NOMBRE(S)</div>
            <div class="table__header">ID LICENCIA</div>
            <div class="table__header">VENCIMIENTO LICENCIA</div>
            
            <!--Datos-->
            <?php $resultado = mysqli_query($conexion,$PERSONAL);
            while($row=mysqli_fetch_assoc($resultado)){?>
            <!--Operador1-->
            <div class="table__item"><?php echo $row["ID_NOMINA"];?></div> 
            <div class="table__item"><?php echo $row["APELLIDO_PATERNO"];?></div>
            <div class="table__item"><?php echo $row["APELLIDO_MATERNO"];?></div>
            <div class="table__item"><?php echo $row["NOMBRE"];?></div>
            <div class="table__item"><?php echo $row["ID_LICENCIA"];?></div>
            <div class="table__item"><?php echo $row["VENCIMIENTO_LICENCIA"];?></div>
            <?php } ?>
        </div>
    </body>





</html>