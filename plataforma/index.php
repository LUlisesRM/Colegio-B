<?php

session_start();
$correo= $_SESSION['correo'];

if(!isset($correo)){

        header("location: index.php");
}else{

    
    echo "<html>";
        echo "<head>";
            echo "<meta charset=UTF-8>";
            echo "<title></title>";
            echo "<meta name= viewport content= width=device-width,user-scalable=no, 
                initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0>";
            echo "<link rel= stylesheet href= css/estilo_plataforma.css>";
        echo"</head>";

        echo "<body>";
            
    
    
            echo "<header text align= center>COLEGIO BENAVENTE</header>";
            echo "  <aside id=left> 
                        <ul> Base de datos
                            <ul><a href='bd/index.php'>Alumnos</a></ul>
                            <ul>Docentes</ul>
                            <ul>Administrativo</ul>
                        </ul>
                        <ul>
                         <a href='../login/log/salir.php'> 
                        cerrar sesion </a>
                        </ul> 

                    </aside>";
            echo "<main style=background-color: #082AB5>";
            echo "<h1> bienvenido a la plataforma Benavente</h1> ";
            echo "</main>";
            echo "<footer></footer>";
        echo "</body>";

    echo "</html>";
}

?>
 
 