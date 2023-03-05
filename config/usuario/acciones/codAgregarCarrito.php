<?php
    session_start();
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    require_once "../../database/database.php";

    if($_POST['id_usuario'] != null && $_POST['id_producto'] != null && $_POST['imagen_producto'] != null && $_POST['nombre_producto'] != null && $_POST['precio_producto'] != null && $_POST['modelo_producto'] != null && $_POST['cantidad_producto'] != null){
        $sql = "INSERT INTO pedido (idusuario_pedido, idproducto_pedido, imagenproducto_pedido, nombreproducto_pedido,precioproducto_pedido, modeloproducto_pedido, fecha_pedido) VALUES ('". trim($_POST['id_usuario'])."','". trim($_POST['id_producto']). "','". trim($_POST['imagen_producto']). "','". trim($_POST['nombre_producto']). "','". trim($_POST['precio_producto']). "','". trim($_POST['modelo_producto']). "','". trim(date("Y-m-d H:i:s")). "')";

        if($conexion->query($sql)){
            echo "<script>alert('se agregó correctamente al carrito :)')</script>";
            header("Refresh:0 , url = ../index.php");
            exit();

        }
        else{
            echo "<script>alert('No se pudo agregar')</script>";
            header("Refresh:0 , url = ../index.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor complete la información.')</script>";
        header("Refresh:0 , url = ../index.php");
        exit();

    }
    mysqli_close($conexion);
?>