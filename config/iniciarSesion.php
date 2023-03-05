<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Zapax</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body id="iniSesion">

    <?php include'logo.php'; ?>

    <div class="formulario">
        <form method="POST" action="codIniciarSesion.php">
            <label for="">Email</label>
            <input class="form" type="email" placeholder="correo electrónico" name="email_usuario" required>
            <label for="">Contraseña</label>
            <input class="form" type="password" placeholder="********" name="contraseña_usuario">
            <br>

            <button class="btn-acceso" type="submit"> INGRESAR</button>
        </form>

        <div><span class="separador">¿No tenés una cuenta?</span></div>
        <a class="btn-acceso" href="./registrarse.php">REGISTRATE YA!</a>

    </div>

</body>
</html>