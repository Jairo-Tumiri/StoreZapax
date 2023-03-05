<?php
    session_start();
    require_once "../../database/database.php";

    if($_POST['imagen_producto'] != null && $_POST['nombre_producto'] != null && $_POST['precio_producto'] != null && $_POST['modelo_producto'] != null){
        $sql = "INSERT INTO productos (imagen_producto,nombre_producto,precio_producto,modelo_producto,imagen1_producto,imagen2_producto,imagen3_producto) VALUES ('". trim($_POST['imagen_producto'])."','". trim($_POST['nombre_producto']). "','". trim($_POST['precio_producto']). "','". trim($_POST['modelo_producto']). "','". trim($_POST['imagen1_producto']). "','". trim($_POST['imagen2_producto']). "','". trim($_POST['imagen3_producto']). "')";
        if($conexion->query($sql)){
            echo "<script>alert('se agregó correctamente')</script>";
            header("Refresh:0 , url = ../productos.php");
            exit();

        }
        else{
            echo "<script>alert('No se pudo agregar')</script>";
            header("Refresh:0 , url = ../productos.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor complete la información.')</script>";
        header("Refresh:0 , url = ../productos.php");
        exit();

    }
    mysqli_close($conexion);
?>