<?php
    session_start();

    require_once "database/database.php";
    $nombreUsuario = mysqli_real_escape_string($conexion, $_POST['nombre_usuario']);
    $emailUsuario = mysqli_real_escape_string($conexion, $_POST['email_usuario']);
    $tipoUsuario = mysqli_real_escape_string($conexion, $_POST['tipo_usuario']);
    $contraseñaUsuario = mysqli_real_escape_string($conexion, md5($_POST['contraseña_usuario']));

    $sql = "SELECT nombre_usuario,email_usuario FROM usuarios WHERE nombre_usuario ='" . $nombreUsuario . "' and email_usuario = '".$emailUsuario."'" ;

    $query = mysqli_query($conexion, $sql);
    $verificacion = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if ($verificacion) {
        echo "<script>alert('Usuario actualmente está en uso')</script>";
        header("Refresh:0 , url = registrarse.php");
        exit();
    }else{
    if ($_POST['nombre_usuario'] != null && $_POST['email_usuario'] != null && $_POST['contraseña_usuario'] == $_POST['contraseña-usuario']) {

        $sql = "INSERT INTO usuarios (nombre_usuario,email_usuario,contraseña_usuario,tipo_usuario) VALUES ('" . trim($_POST['nombre_usuario']) . "','" . trim($_POST['email_usuario']) . "','" . trim(md5($_POST['contraseña_usuario'])) . "','" . trim($_POST['tipo_usuario']) . "')";
        
        if ($conexion->query($sql)) {
            echo "<script>alert('Registro completado exitósamente')</script>";
            header("Refresh:0 , url = iniciarSesion.php");
            exit();
        } else {
            echo "<script>alert('Registro incompleto')</script>";
            header("Refresh:0 , url = iniciarSesion.php");
            exit();
        }
    } else {
        echo "<script>alert('Los campos de contraseña no coinciden')</script>";
        header("Refresh:0 , url = registrarse.php");
        exit();
    }
        mysqli_close($conexion);
    }
?>