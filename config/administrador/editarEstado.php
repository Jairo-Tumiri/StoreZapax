<?php
    include 'header.php';

    // $PEDIDO = "SELECT * FROM pedido WHERE idusuario_pedido='".$_GET['idusuario_pago']."' && cantidad_pedido='".$_GET['pedidos_pago']."'";
    // $datosPEDIDO = mysqli_query($conexion, $PEDIDO);
    // $USUARIO = "SELECT * FROM usuarios WHERE id_usuario='".$_GET['idusuario_pago']."' ";
    // $datosUSUARIO = mysqli_query($conexion, $USUARIO);
    // while($usuario = mysqli_fetch_array($datosUSUARIO)){
    //     $nombre = $usuario['nombre_usuario'];
    //     $apellido = $usuario['apellido_usuario'];
    //     $email = $usuario['email_usuario'];
    //     $pais = $usuario['pais_usuario'];
    //     $telefono = $usuario['telefono_usuario'];
    // }
?>
        <main>
            <h1 class="titulo-principal" id="titulo-principal">CAMBIO DE SEGUIMIENTO DE: <br>id:pago;<?php echo $_GET['id_pago']?> <br> id:usuario; <?php echo $_GET['id_usuario']?></h1>
                <div class="recent--patients" style="display: flex; justify-content: center; align-items: center; gap: 50px;">
                    <h3>Actual Seguimiento:</h3>
                    <br>
                    <p style="font-size: 2rem;">
                    <?php switch ($_GET["estado_seguimiento"]) {
                        case '0':
                            $t = 'En preparacion';
                            $echo = '<img style="width: 200px;" src="data:image/png;base64,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" alt="">';
                            break;
                        case '1';
                            $t = 'En Camino';
                            $echo = '<img style="width: 200px;" src="https://png.pngtree.com/png-vector/20190501/ourlarge/pngtree-package-icon-design-png-image_1012435.jpg" alt="">';
                            break;
                        case '2';
                            $t = 'Llego al correo';
                            $echo = '<img style="width: 200px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsJ6jadaRe4FmY416Q_4PtjI9Bv4voFsev3A&usqp=CAU" alt="">';
                        break;
                        case '3':
                            $t = 'Tu paquete esta en viaje';
                            $echo = '<img style="width: 200px;" src="https://elinsignia.com/wp-content/uploads/2019/06/viajes-jairan-1.png" alt="">';
                            break;
                        default:
                            $t = 'Entregado';
                            $echo = '<img style="width: 200px;" src="data:image/png;base64,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" alt="">';
                            break;
                    } echo $t;
                    echo "<br>".$echo;
                    ?>
                        </p>
                </div>
            <div id="contenedor-productos" class="contenedor-productos">
                <!-- Esto se va a rellenar con JS -->

                <div id="estado_seguimiento">
                    <a  class="" href="acciones/codEditarEstado.php?id_pago=<?php echo $_GET['id_pago']?>&id_usuario=<?php echo $_GET['id_usuario']?>&estado_seguimiento=0?>">
                        <h2>En Preparacion</h2>
                        <img src="" alt="">
                    </a>
                    <a  class="" href="acciones/codEditarEstado.php?id_pago=<?php echo $_GET['id_pago']?>&id_usuario=<?php echo $_GET['id_usuario']?>&estado_seguimiento=1">
                        <h2>En Camino</h2>
                        <img src="" alt="">
                    </a>
                    <a  class="" href="acciones/codEditarEstado.php?id_pago=<?php echo $_GET['id_pago']?>&id_usuario=<?php echo $_GET['id_usuario']?>&estado_seguimiento=2">
                        <h2>Llego al Correo</h2>
                        <img src="" alt="">
                    </a>
                    <a  class="" href="acciones/codEditarEstado.php?id_pago=<?php echo $_GET['id_pago']?>&id_usuario=<?php echo $_GET['id_usuario']?>&estado_seguimiento=3">
                        <h2>Tu paquete esta en viaje</h2>
                        <img src="" alt="">
                    </a>
                    <a  class="" href="acciones/codEditarEstado.php?id_pago=<?php echo $_GET['id_pago']?>&id_usuario=<?php echo $_GET['id_usuario']?>&estado_seguimiento=4">
                        <h2>Entregado</h2>
                        <img src="" alt="">
                    </a>
                </div>

            </div>
        </main>
    </div>
    


    <script src="app.js"></script>
</body>
</html>