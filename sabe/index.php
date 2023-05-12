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
        <form method="POST" action="login.php" class="login">
            <div>
                <a href="../inicio/index.php">
                <img src="media/escudo_colegio.png" alt="LOGO COLEGIO" width="60px" align="left">
                <img src="media/50_aniversario.jpg" alt="LOGO ANIVERSARIO" width="85px" align="right"></a> <br><br>
            </div><br>
            <div>
                <label>Correo Institucional</label><br>
                <input name="institucional" placeholder="Escriba su correo institucional" required> <br>
                <label>Contraseña</label><br>
                <input type="password" name="pass" placeholder="Escriba su contraseña" required>
            </div><br>
            <div align="center">
                <button type="submit">Inicar Sesion</button>
            </div>
    </div>

    </form>
    </div>

</body>

</html>