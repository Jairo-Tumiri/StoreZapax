<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "zapax";

    $conexion = new mysqli($hostname , $username, $password, $database);

    // mysqli_query($conexion , "SET character_set_result=utf8");

    if($conexion->connect_error){
        die("Database Error : " . $conexion->connect_error);
    }


?>
