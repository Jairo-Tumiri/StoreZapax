<?php

	if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
	if (!isset($_POST['buscamodelo'])){$_POST['buscamodelo'] = '';}
	if (!isset($_POST['buscapreciodesde'])){$_POST['buscapreciodesde'] = '';}
	if (!isset($_POST['buscapreciohasta'])){$_POST['buscapreciohasta'] = '';}
	if (!isset($_POST["orden"])){$_POST["orden"] = '';}


        if ($_POST['buscar'] == ''){ $_POST['buscar'] = ' ';}
        $aKeyword = explode(" ", $_POST['buscar']);


        if ($_POST["buscar"] == '' AND $_POST['buscamodelo'] == '' AND $_POST['buscapreciodesde'] == '' AND $_POST['buscapreciohasta'] == ''){ 
                $query ="SELECT * FROM productos ";
        }else{


                $query ="SELECT * FROM productos ";

                if ($_POST["buscar"] != '' ){ 
                        $query .= "WHERE (nombre_producto LIKE LOWER('%".$aKeyword[0]."%')  OR modelo_producto LIKE LOWER('%".$aKeyword[0]."%')) ";

                        for($i = 1; $i < count($aKeyword); $i++) {
                                if(!empty($aKeyword[$i])) {
                                        $query .= " OR nombre_producto LIKE '%" . $aKeyword[$i] . "%' OR modelo_producto LIKE '%" . $aKeyword[$i] . "%'";
                                }
                        }

                }

                if ($_POST["buscamodelo"] != '' ){
                $query .= " AND modelo_producto = '".$_POST['buscamodelo']."' ";
                }

                if ( $_POST['buscapreciodesde'] != '' ){
                $query .= " AND precio_producto >= '".$_POST['buscapreciodesde']."'  ";
                }

                if ( $_POST['buscapreciohasta'] != '' ){
                $query .= " AND precio_producto <= '".$_POST['buscapreciohasta']."'  ";
                }

                if ($_POST["orden"] == '1' ){
                        $query .= " ORDER BY nombre_producto ASC ";
                }
                if ($_POST["orden"] == '2' ){
                        $query .= " ORDER BY precio_producto ASC ";
                }

                if ($_POST["orden"] == '3' ){
                        $query .= " ORDER BY precio_producto DESC ";
                }

                if ($_POST["orden"] == '4' ){
                        $query .= " ORDER BY id_producto ASC ";
                }

                if ($_POST["orden"] == '5' ){
                        $query .= " ORDER BY id_producto DESC ";
                }


        }


        $sql = $conexion->query($query);

        $producto = mysqli_num_rows($sql);

        
?>