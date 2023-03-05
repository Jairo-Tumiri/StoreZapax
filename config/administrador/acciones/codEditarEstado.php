<?php
    session_start();
    require_once "../../database/database.php";
    
    if($_GET['id_pago'] != null && $_GET['id_usuario'] != null  && $_GET['estado_seguimiento'] != null){
            $sql = "UPDATE pagos SET estadopedido_pago = '" . trim($_GET['estado_seguimiento']) . "' WHERE idusuario_pago = '" . trim($_GET['id_usuario']) . "' AND  id_pago = '" . trim($_GET['id_pago']) . "'";

        if($conexion->query($sql)){
            echo "<script>alert('Proceso completado exitósamente')</script>";
            header("Refresh:0 , url =../pagos.php");
            exit();

        }
        else{
            echo "<script>alert('Inconvenientes para realizar el proceso')</script>";
            header("Refresh:0 , url =../pagos.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Por favor diligencia todos los campos')</script>";
        header("Refresh:0 , url = ../pagos.php");
        exit();

    }
    mysqli_close($conexion);
?>
