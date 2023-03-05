<?php
    session_start();
    require_once "../../database/database.php";

    $delete_num = $_GET['id_pago'];
    $sql_delete =  "DELETE FROM pagos WHERE id_pago = '$delete_num'";
    $query_delete = mysqli_query($conexion,$sql_delete);
    $datos = $sql_delete-->(PDO::FETCH_LAZY);
    if(!$datos){
        echo "<script>alert('No se pudo eliminar producto')</script>";        
        header("Refresh: 0 , url = ../pagos.php");
        exit();

    }
    else{
        echo "<script>alert('Eliminación de Producto Exitosa')</script>";  
        header("Refresh: 0 , url = ../pagos.php");
        exit();

    }
    mysqli_close($conexion);
?>