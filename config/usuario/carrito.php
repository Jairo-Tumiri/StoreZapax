<?php
include 'header.php';
$sql_fetch_todos = "SELECT * FROM pedido WHERE idusuario_pedido = " . $idUsuario . " AND estado_pedido = '0'";
$query = mysqli_query($conexion, $sql_fetch_todos);
$suma_precio = "SELECT SUM(precioproducto_pedido)AS 'total' FROM pedido WHERE idusuario_pedido = '" . $idUsuario . "' AND estado_pedido = '0'";
$total_precio = mysqli_query($conexion, $suma_precio);
?>
<main class="contenedor-carrito">
    <form class="table">
    <h2>CARRITO DE COMPRAS DE <?php echo strtoupper($nombreUsuario); ?></h2>
        <table>
            <thead>
                <tr>
                    <th>Id:Producto</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Fecha</th>
                    <th>accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $numero = 0;
                while ($datos = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td>
                            <p><?php echo $datos['idproducto_pedido']; ?></p>
                        </td>
                        <td>
                            <img class="col2" src="<?php echo $datos['imagenproducto_pedido']; ?>">
                        </td>
                        <td>
                            <p><?php echo $datos['nombreproducto_pedido']; ?></p>
                        </td>
                        <td>
                            <p><?php echo "$" . number_format($datos['precioproducto_pedido']); ?></p>
                        </td>
                        <td>
                            <p><?php echo $datos['modeloproducto_pedido']; ?></p>
                        </td>
                        <td>
                            <p><?php echo $datos['fecha_pedido'] ?></p>
                        </td>
                        <input name="precio<?php echo $numero ?>" type="hidden" value="<?php echo $datos['precioproducto_pedido'] ?>">

                        <td>
                            <a name="id_pedido" href="acciones/codBorrarCarrito.php?id_pedido=<?php echo $datos['id_pedido'] ?>" role="button"><i class="ri-delete-bin-line delete"></i></a>
                        </td>
                    </tr>
                <?php $numero++;
                } ?>
            </tbody>
        </table>
    </form>
    <div class="total" style="width: 30%; padding: 25px">
        <h2>TOTAL: <?php $t = mysqli_fetch_array($total_precio);$total = $t['total'];echo " $ ".number_format($total) ?></h2>
        <br>
        <br>
        <br>
        <a class="btn-rojo" href="acciones/codBorrarCarrito.php?borrar_carrito=todo" style="padding: 5px 10px;">BORRAR CARRITO</a>
        <br>
        <br>
        <a class="btn-verde" href="realizarPago/comprar.php?precio_pedido=<?php echo $total?>&cantidad_pedido=<?php echo $numero?>" style="padding: 5px 10px;" >COMPRAR</a>
        <br><br>
        <h3>¿Qué métodos de pago se aceptan?</h3>
        <br>
        <p>Podrás pagar con tu tarjeta bancaria Visa, MasterCard y Mercaod PAgo. <br>
        Si pagas directamente con Visa, MasterCard o Mercado Pago podrás pagar hasta 3 cuotas sin asumir el interés bancario.
        </p>
        <br><br>
        <div style="display: flex; width: 100%;">
            <img src="https://www.mastercard.es/content/dam/public/mastercardcom/eu/es/images/Consumidores/escoge-tu-tarjeta/mc_card_credit_v2.png" alt="" style="width: 200px">
            <img src="https://d31dn7nfpuwjnm.cloudfront.net/images/valoraciones/0035/0133/Tarjeta_Prepaga_MercadoPago_solicitar__requisitos_y_beneficios.png?1567716920" alt="" style="width: 200px">
        </div>
        <img src="https://d31dn7nfpuwjnm.cloudfront.net/images/valoraciones/0039/3330/Tarjeta_Visa_Internacional_BBVA_requisitos__beneficios_y_comisiones.jpg?1596766346" alt="" style="width: 200px">
    </div>
</main>

