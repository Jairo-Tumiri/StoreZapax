<?php
    session_start();
    require_once "../../database/database.php";
    
    if($_POST['imagen_producto'] != null && $_POST['nombre_producto'] != null  && $_POST['precio_producto'] != null && $_POST['modelo_producto'] != null ){
            $sql = "UPDATE productos SET imagen_producto = '" . trim($_POST['imagen_producto']) . "' ,nombre_producto = '" . trim($_POST['nombre_producto']) . "' ,precio_producto = '" . trim($_POST['precio_producto']) . "',modelo_producto = '" . trim($_POST['modelo_producto']) . "',imagen1_producto = '" . trim($_POST['imagen1_producto']) . "',imagen2_producto = '" . trim($_POST['imagen2_producto']) . "',imagen3_producto = '" . trim($_POST['imagen3_producto']) . "' WHERE id_producto = '" . $_POST['id_producto'] . "'";

        if($conexion->query($sql)){
            echo "<script>alert('Proceso completado exitósamente')</script>";
            header("Refresh:0 , url =../productos.php");
            exit();

        }
        else{
            echo "<script>alert('Inconvenientes para realizar el proceso')</script>";
            header("Refresh:0 , url =../productos.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor diligencia todos los campos')</script>";
        header("Refresh:0 , url = ../productos.php");
        exit();

    }
    mysqli_close($conexion);
?>
