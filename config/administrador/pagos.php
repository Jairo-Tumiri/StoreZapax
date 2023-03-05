<?php
    include 'header.php';
    include 'acciones/codFiltrarPagos.php';
    // $sql_fetch_todos = $sql_fetch_todos = "SELECT * FROM pagos ORDER BY fecha_pago ASC";
    // $tablaPagos = mysqli_query($conexion, $sql_fetch_todos);
?>
<main>
    <h1 class="titulo-principal" id="titulo-principal" style="text-align: center;">Administrador PAgos</h1>
    <div id="contenedor-productos" class="contenedor-productos">
        <!-- Esto se va a rellenar con JS -->
        <div class="recent--patients">
            <div class="title">
                <h2 class="section--title">PAGOS REALIZADOS</h2>
        <div class="filter">
			<form method="POST">
			<h3 class="">Filtrador de búsqueda</h4>  
            <br>
				<div class="filter-option">

					<div class="filter-option_buscador">
							<label  class="">Buscador</label>
							<input type="text" class="filter-option_buscador_buscador" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >
					</div>

					<div class="filter-option_container_table">
						<h4 class="card-title">Ordenar por</h4>  

						<table class="filter-options_container_table_table">
							<thead>
								<tr class="filters">
									<th>
										Precio desde:
										<input type="number" id="buscapreciodesde" name="buscapreciodesde" class="form-control mt-2" value="<?php echo $_POST["buscapreciodesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
									</th>
									<th>
										Precio hasta:
										<input type="number" id="buscapreciohasta" name="buscapreciohasta" class="form-control mt-2" value="<?php echo $_POST["buscapreciohasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
									</th>
									<th>
										Estado de Seguimiento
										<select id="assigned-tutor-filter" id="buscadepartamento" name="buscamodelo" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
												<?php if ($_POST["buscamodelo"] != ''){ ?>
												<option value="<?php echo $_POST["buscamodelo"]; ?>"><?php switch ($_POST["buscamodelo"]) {
                                                    case '0':
                                                        $t = 'En preparacion';
                                                        break;
                                                    case '1';
                                                        $t = 'En Camino';
                                                        break;
                                                    case '2':
                                                        $t = 'Llego al correo';
                                                        break;
                                                    case '3';
                                                        $t = 'Tu paquete esta en viaje';
                                                        break;
                                                    default:
                                                        $t = 'Entregado';
                                                        break;
                                                } echo $t; ?></option>
												<?php } ?>
												<option value="">Todos</option>
												<option value="0">En preparacion</option>
												<option value="1">En Camino</option>
												<option value="2">Tu paquete esta en viaje</option>
												<option value="3">Llego al correo</option>
												<option value="4">Entregado</option>
										</select>
									</th>
									<th>
										Selecciona el orden
										<select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
												<?php if ($_POST["orden"] != ''){ ?>
												<option value="<?php echo $_POST["orden"]; ?>">
												<?php 
												if ($_POST["orden"] == '1'){echo 'Ordenar por estado seguimiento';} 
												if ($_POST["orden"] == '2'){echo 'Ordenar por precio de menor a mayor';} 
												if ($_POST["orden"] == '3'){echo 'Ordenar por precio de mayor a menor';} 
												if ($_POST["orden"] == '4'){echo 'Ordenar por fecha de reciente';} 
												if ($_POST["orden"] == '5'){echo 'Ordenar por fecha de antigua';} 
												?>
												</option>
												<?php } ?>
												<option value=""></option>
												<option value="1">Ordenar por estado seguimiento</option>
												<option value="2">Ordenar por precio de menor a mayor</option>
												<option value="3">Ordenar por precio de mayor a menor</option>
												<option value="4">Ordenar por fecha de reciente</option>
												<option value="5">Ordenar por fecha de antigua</option>
										</select>
									</th>
								</tr>
							</thead>
						</table>
					</div>


					<div class="col-1">
							<input type="submit" class="btn " value="Ver" style="margin-top: 10px; background-color: purple; color: white; padding: 5px 10px; border-radius:25px; cursor:pointer;" />
							<p style="margin-top: 10px;font-weight: bold; color:purple; float:right;"><i class="mdi mdi-file-document"></i> <?php echo $producto; ?> Resultados encontrados</p>
					</div>
				</div>
			</form>

		</div>
                <!-- <button class="add"><i class="ri-add-line"></i>Add Doctor</button> -->
            </div>
            <br><br>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Id:Pago</th>
                            <th>id:usuario</th>
                            <th>Precio Final</th>
                            <th>Cantidad de Pedidos</th>
                            <th>Estado de Seguimiento</th>
                            <th>Fecha de Pago</th>
                            <th>Ver Pedido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $numero = 1;
                            while ($datos = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td><?php echo $numero ?></td>
                                <td><?php echo $datos['id_pago']?></td>
                                <td><?php echo $datos['idusuario_pago'] ?></td>
                                <td><?php echo "$" . number_format($datos['precio_pago']) ?></td>
                                <td> <?php echo $datos['pedidos_pago']." productos" ?></td>
                                <td><?php echo $datos['estadopedido_pago'] ?></td>
                                <td><?php echo $datos['fecha_pago'] ?></td>
                                <td>
                                    <a name="edit" href="detallePago.php?id_pago=<?php echo $datos['id_pago'];?>&idusuario_pago=<?php echo $datos['idusuario_pago']; ?>&precio_pago=<?php echo $datos['precio_pago']; ?>&pedidos_pago=<?php echo $datos['pedidos_pago']; ?>&estadopedido_pago=<?php echo $datos['estadopedido_pago']; ?>&fecha_pago=<?php echo $datos['fecha_pago']; ?>" role="button"><i class="ri-edit-line edit">VER PEDIDO</i>
                                    </a>

                                    <a name="id_usuario" href="acciones/codEliminarPago.php?id_pago=<?php echo $datos['id_pago'] ?>" role="button"><i class="ri-delete-bin-line delete"></i></a>
                                </td>
                            </tr>
                        <?php $numero++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</main>
</div>



<script src="app.js"></script>
</body>

</html>