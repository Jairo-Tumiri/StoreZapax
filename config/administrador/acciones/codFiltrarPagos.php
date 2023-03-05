<?php

	if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
	if (!isset($_POST['buscamodelo'])){$_POST['buscamodelo'] = '';}
	if (!isset($_POST['buscapreciodesde'])){$_POST['buscapreciodesde'] = '';}
	if (!isset($_POST['buscapreciohasta'])){$_POST['buscapreciohasta'] = '';}
	if (!isset($_POST["orden"])){$_POST["orden"] = '';}


        if ($_POST['buscar'] == ''){ $_POST['buscar'] = ' ';}
        $aKeyword = explode(" ", $_POST['buscar']);


        if ($_POST["buscar"] == '' AND $_POST['buscamodelo'] == '' AND $_POST['buscapreciodesde'] == '' AND $_POST['buscapreciohasta'] == ''){ 
                $query ="SELECT * FROM pagos ";
        }else{


                $query ="SELECT * FROM pagos ";

                if ($_POST["buscar"] != '' ){ 
                        $query .= "WHERE (id_pago LIKE LOWER('".$aKeyword[0]."%')  OR idusuario_pago LIKE LOWER('".$aKeyword[0]."%') OR estadopedido_pago LIKE LOWER('%".$aKeyword[0]."%')) ";

                        for($i = 1; $i < count($aKeyword); $i++) {
                                if(!empty($aKeyword[$i])) {
                                        $query .= " OR id_pago LIKE '" . $aKeyword[$i] . "%' OR idusuario_pago LIKE '" . $aKeyword[$i] . "%' OR estadopedido_pago LIKE '%" . $aKeyword[$i] . "%'";
                                }
                        }

                }

                if ($_POST["buscamodelo"] != '' ){
                $query .= " AND estadopedido_pago = '".$_POST['buscamodelo']."' ";
                }

                if ( $_POST['buscapreciodesde'] != '' ){
                $query .= " AND precio_pago >= '".$_POST['buscapreciodesde']."'  ";
                }

                if ( $_POST['buscapreciohasta'] != '' ){
                $query .= " AND precio_pago <= '".$_POST['buscapreciohasta']."'  ";
                }

                if ($_POST["orden"] == '1' ){
                        $query .= " ORDER BY id_pago ASC ";
                }
                if ($_POST["orden"] == '2' ){
                        $query .= " ORDER BY precio_pago ASC ";
                }

                if ($_POST["orden"] == '3' ){
                        $query .= " ORDER BY precio_pago DESC ";
                }

                if ($_POST["orden"] == '4' ){
                        $query .= " ORDER BY id_pago ASC ";
                }

                if ($_POST["orden"] == '5' ){
                        $query .= " ORDER BY id_pago DESC ";
                }


        }


        $sql = $conexion->query($query);

        $producto = mysqli_num_rows($sql);

        
?>