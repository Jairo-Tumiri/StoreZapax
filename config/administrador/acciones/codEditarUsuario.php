<?php
    session_start();
    require_once "../../database/database.php";
    
    if($_POST['tipo_usuario'] == 1 || $_POST['tipo_usuario'] == 2 ){
            $sql = "UPDATE usuarios SET tipo_usuario = '" . trim($_POST['tipo_usuario']) . "' WHERE id_usuario = '" . $_POST['id_usuario'] . "'";

        if($conexion->query($sql)){
            echo "<script>alert('Proceso completado exitósamente')</script>";
            header("Refresh:0 , url =../usuarios.php");
            exit();

        }
        else{
            echo "<script>alert('Inconvenientes para realizar el proceso')</script>";
            header("Refresh:0 , url =../usuarios.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor llenar todos los campos')</script>";
        header("Refresh:0 , url = ../usuarios.php");
        exit();

    }
    mysqli_close($conexion);
?>
