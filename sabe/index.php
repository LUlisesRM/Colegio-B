<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
    initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo_login.css">
    <title>Login</title>
</head>

<body class=fondo>
<div>
    <header>
    </header>
</div>

<div>
    <a href="../inicio/index.php">
        <img src="../inicio/media/escudo.jpg" alt="ESCUDO" width = 100px padding = 30px>
    </a>
</div>
    
<div>
    <form method="POST" action="login.php" class="login">
        <div class="form-group">
            <label>Correo Institucional</label><br>
            <input type="text" name="correo" placeholder="Escriba su correo" required size=35>
        </div>
        <div class="form-group">
            <label>Contraseña</label><br>
            <input type="password" name="pass" placeholder="Escriba su contraseña" required size=35>
        </div><br>
        <div align="center">
        <button type="submit">Inicar Sesion</button>
        </div>
        
    </form>
</div>

</body>

</html>