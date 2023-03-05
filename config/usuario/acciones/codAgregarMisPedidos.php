<?php
    session_start();
    require_once "../../database/database.php";

    if(isset($_GET['idusuario_pedido']) || isset($_GET['nombreusuario_pedido']) || isset($_GET['contraseña_usuario'])){
        $sql = "UPDATE pedido SET estado_pedido='1' WHERE idusuario_pedido = '".trim($_GET['idusuario_pedido'])."'";
        
        $sql2= "INSERT INTO pagos (idusuario_pago, precio_pago, pedidos_pago,fecha_pago)  VALUES ('". trim($_GET['idusuario_pedido'])."','". trim($_GET['precio_pago']). "','". trim($_GET['pedido_pago']). "','". trim(date("Y-m-d H:i:s")). "')";

        $sql3= "UPDATE pedido SET cantidad_pedido = '".trim($_GET['pedido_pago'])."' WHERE idusuario_pedido = '".trim($_GET['idusuario_pedido'])."' AND cantidad_pedido = '0'";

        if($conexion->query($sql) && $conexion->query($sql2) && $conexion->query($sql3)){
            echo "<script>alert('Compra Exitosa:)')</script>";
            header("Refresh:0 , url = ../index.php");
            exit();

        }
        else{
            echo "<script>alert('No se pudo realizar la Compra')</script>";
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