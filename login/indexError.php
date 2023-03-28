<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login con session</title>
</head>

<body>
    <h1>LOGIN ERROR</h1>
<div  >
        <form method="POST" action="log/loguear.php" class="login">
            <div class="form-group">
                <label>Correo Institucional</label>
                <input type="text" name="correo" placeholder="Escriba su correo" required>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="text" name="pass" placeholder="Escriba su contraseña" required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Inicar Sesion</button>
        </form>
</div>

</body>

</html>