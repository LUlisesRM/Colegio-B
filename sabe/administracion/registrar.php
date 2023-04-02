<?php
include("index.php");

echo "<h2>REGISTRAR ALUMNO</h2>
            <form action ='insertar.php' method='post'>
                <lable>GRADO:</lable>
                <input name='grado' type='text'>
                <lable>MATRICULA:</lable>
                <input name='matricula' type='int'>
                <lable>APELLIDO PATERNO:</lable>
                <input name='apellido_paterno' type='text'>
                <lable>APELLIDO MATERNO:</lable>
                <input name='apellido_materno' type='text'>
                <lable>NOMBRE:</lable>
                <input name='nombre' type='text'>
                <lable>CURP:</lable>
                <input name='CURP' type='text'>
                <lable>CORREO INSTITUCIONAL:</lable>
                <input name='correo_institucional' type='text'>
                <lable>CONTRASEÑA:</lable>
                <input name='pass' type='text'>
                <input type='submit' value ='Registrar'>
                 
            </form> 
            <button><a href='index.php'>Cancelar</a></button>";


?>