<?php
        session_start();
    if (!isset($_SESSION['email_usuario']) && !isset($_SESSION['contraseña_usuario'])) {
        echo "<script>alert('Por favor registrarse o iniciar sesion.');</script>";
        header("Refresh:0 , url= ../iniciarSesion.php");
        exit();
    }
    require_once "database/database.php";
    $sql_fetch_todos = "SELECT * FROM usuarios WHERE email_usuario ='".$_SESSION['email_usuario']."'";
    $datosUsuario = mysqli_query($conexion, $sql_fetch_todos);
        if($usuario =  mysqli_fetch_array($datosUsuario)){
        $idUsuario = $usuario['id_usuario'];
        $imagenUsuario = $usuario['imagen_usuario'];
        $nombreUsuario = $usuario['nombre_usuario'];
        $apellidoUsuario = $usuario['apellido_usuario'];
        $telefonoUsuario = $usuario['telefono_usuario'];
        $paisUsuario = $usuario['pais_usuario'];
        $emailUsuario = $usuario['email_usuario'];
        $contraseñaUsuario = $usuario['contraseña_usuario'];
        }

?>