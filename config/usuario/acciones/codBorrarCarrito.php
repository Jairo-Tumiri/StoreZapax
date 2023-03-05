<?php
    include '../../verificarIdentidad.php';
    require_once "../../database/database.php";

    if(isset($_GET['borrar_pedido'])){
        $borrarTodoCarrito =  "DELETE FROM pedido WHERE idusuario_pedido = '$idUsuario' AND estado_pedido = '1'";
        $limpiarCarrito = mysqli_query($conexion,$borrarTodoCarrito);
        $carrito = $borrarTodoCarrito-->(PDO::FETCH_LAZY);
        if(!$carrito){
            echo "<script>alert('No se pudo eliminar el Pedido')</script>";        
            header("Refresh: 0 , url = ../index.php");
            exit();

        }
        else{
            echo "<script>alert('Eliminación del Pedido correcta')</script>";  
            header("Refresh: 0 , url = ../index.php");
            exit();

        }
    }
    
    if(isset($_GET['borrar_carrito'])){
        $borrarTodoCarrito =  "DELETE FROM pedido WHERE idusuario_pedido = '$idUsuario' AND estado_pedido = '0'";
        $limpiarCarrito = mysqli_query($conexion,$borrarTodoCarrito);
        $carrito = $borrarTodoCarrito-->(PDO::FETCH_LAZY);
        if(!$carrito){
            echo "<script>alert('No se pudo eliminar carrito')</script>";        
            header("Refresh: 0 , url = ../carrito.php");
            exit();

        }
        else{
            echo "<script>alert('Eliminación del carrito correcta')</script>";  
            header("Refresh: 0 , url = ../carrito.php");
            exit();

        }
    }

    if(isset($_GET['id_pedido'])){
        $delete_num = $_GET['id_pedido'];
        $sql_delete =  "DELETE FROM pedido WHERE id_pedido = '$delete_num'";
        $query_delete = mysqli_query($conexion,$sql_delete);
        $datos = $sql_delete-->(PDO::FETCH_LAZY);
        if(!$datos){
            echo "<script>alert('No se pudo eliminar producto')</script>";        
            header("Refresh: 0 , url = ../carrito.php");
            exit();

        }
        else{
            echo "<script>alert('Eliminación de Producto Exitosa')</script>";  
            header("Refresh: 0 , url = ../carrito.php");
            exit();

        }
        mysqli_close($conexion);
    }
?>