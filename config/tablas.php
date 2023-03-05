<?php
    require_once 'database/database.php';

        function consulta($tabla, $id){
            $consulta = "SELECT * FROM ".$tabla." ORDER BY ".$id." ASC ";
            return $consulta;   
        }  
?>