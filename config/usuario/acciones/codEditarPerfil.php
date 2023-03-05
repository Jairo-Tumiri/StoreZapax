<?php
    require_once "../../database/database.php";

    if($_POST['nombre_usuario'] != null && $_POST['apellido_usuario'] != null && $_POST['telefono_usuario'] != null && $_POST['pais_usuario'] != null && $_POST['email_usuario'] != null || md5($_POST['contraseña_usuario']) == md5($_POST['confirmarcontraseña_usuario'])){
        if($_POST['nuevacontraseña_usuario'] == null ){
            $sql = "UPDATE usuarios SET nombre_usuario = '" . trim($_POST['nombre_usuario']) . "' ,apellido_usuario = '" . trim($_POST['apellido_usuario']) . "' ,email_usuario = '" . trim($_POST['email_usuario']) . "',pais_usuario = '" . trim($_POST['pais_usuario']) . "',telefono_usuario = '" . trim($_POST['telefono_usuario']) . "'  WHERE id_usuario = '" . $_POST['id_usuario'] . "'";
        }else{
            $sql = "UPDATE usuarios SET nombre_usuario = '" . trim($_POST['nombre_usuario']) . "' ,apellido_usuario = '" . trim($_POST['apellido_usuario']) . "'   ,email_usuario = '" . trim($_POST['email_usuario']) . "'  ,contraseña_usuario = '" . md5(trim($_POST['nuevacontraseña_usuario'])) . "',pais_usuario = '" . trim($_POST['pais_usuario']) . "' ,telefono_usuario = '" . trim($_POST['telefono_usuario']) . "' WHERE id_usuario = '" . $_POST['id_usuario'] . "'";
        }
            
        if($_POST['imagen_usuario'] == null ){
            $sql = "UPDATE usuarios SET nombre_usuario = '" . trim($_POST['nombre_usuario']) . "' ,apellido_usuario = '" . trim($_POST['apellido_usuario']) . "' ,pais_usuario = '" . trim($_POST['pais_usuario']) . "'  ,email_usuario = '" . trim($_POST['email_usuario']) . "',telefono_usuario = '" . trim($_POST['telefono_usuario']) . "'  WHERE id_usuario = '" . $_POST['id_usuario'] . "'";
        }else{
            $sql = "UPDATE usuarios SET imagen_usuario = '" . trim($_POST['imagen_usuario']) . "' ,nombre_usuario = '" . trim($_POST['nombre_usuario']) . "' ,apellido_usuario = '" . trim($_POST['apellido_usuario']) . "' ,telefono_usuario= '" . trim($_POST['telefono_usuario']) . "' ,pais_usuario = '" . trim($_POST['pais_usuario']) . "'  ,email_usuario = '" . trim($_POST['email_usuario']) . "' WHERE id_usuario = '" . $_POST['id_usuario'] . "'";
        }

        if($conexion->query($sql)){
            echo "<script>alert('Proceso completado exitósamente')</script>";
            header("Refresh:0 , url =../perfil.php");
            exit();

        }
        else{
            echo "<script>alert('Inconvenientes para realizar el proceso')</script>";
            header("Refresh:0 , url =../perfil.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor llenar todos los campos')</script>";
        header("Refresh:0 , url = ../perfil.php");
        exit();

    }
    mysqli_close($conexion);

?>