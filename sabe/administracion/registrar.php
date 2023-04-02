<?php
include("index.php");

echo "<h2>REGISTRAR ALUMNO</h2>
            <form action ='insertar.php' method='post'>
                <lable>ID NOMINA:</lable>
                <input name='id_nomina' type='text'>
                <lable>APELLIDO PATERNO:</lable>
                <input name='apellido_paterno' type='text'>
                <lable>APELLIDO MATERNO:</lable>
                <input name='apellido_materno' type='text'>
                <lable>NOMBRE(S):</lable>
                <input name='nombre' type='text'>
                <lable>ID LICENCIA:</lable>
                <input name='id_licencia' type='text'>
                <lable>VENCIMIENTO LICENCIA:</lable>
                <input name='vencimiento' type='date'>
                <input type='submit' value ='Registrar'>
            </form> ";


?>