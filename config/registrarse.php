<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Zapax</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body id="register">
    
    <?php include'logo.php'; ?>

    <div>
        <form method="POST" action="codregistrarse.php">
            <label for="">Usuario</label>
            <input type="text" placeholder="nombre de usuario" name="nombre_usuario" required>
            <label for="">Email</label>
            <input type="email" placeholder="correo electrónico" name="email_usuario" required>
            <label for="">Contraseña</label>
            <input type="password" placeholder="********" name="contraseña_usuario" required>
            <label for="">Confirmar Contraseña</label>
            <input type="password" placeholder="********" name="contraseña-usuario" required>
            <input type="hidden" name="tipo_usuario" value="2">

            
            <button class="btn-acceso" type="submit">REGISTRARME</button>
        </form>
    </div>
       
</body>
</html>