<?php
    include 'header.php';
	include 'acciones/codFiltrar.php';
?>
	<!----shop start--->
	<section class="shop" id="shop">
		<div class="filter">
			<form method="POST">
			<h3 class="">Filtrador de búsqueda</h4>  
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
										Modelo
										<select id="assigned-tutor-filter" id="buscadepartamento" name="buscamodelo" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
												<?php if ($_POST["buscamodelo"] != ''){ ?>
												<option value="<?php echo $_POST["buscamodelo"]; ?>"><?php echo $_POST["buscamodelo"]; ?></option>
												<?php } ?>
												<option value="">Todos</option>
												<option value="Nike">Nike</option>
												<option value="Adidas">Adidas</option>
												<option value="Puma">Puma</option>
												<option value="Converse">Converse</option>
												<option value="Vans">Vans</option>
										</select>
									</th>
									<th>
										Selecciona el orden
										<select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
												<?php if ($_POST["orden"] != ''){ ?>
												<option value="<?php echo $_POST["orden"]; ?>">
												<?php 
												if ($_POST["orden"] == '1'){echo 'Ordenar por nombre';} 
												if ($_POST["orden"] == '2'){echo 'Ordenar por precio de menor a mayor';} 
												if ($_POST["orden"] == '3'){echo 'Ordenar por precio de mayor a menor';} 
												if ($_POST["orden"] == '4'){echo 'Ordenar por fecha de reciente';} 
												if ($_POST["orden"] == '5'){echo 'Ordenar por fecha de antigua';} 
												?>
												</option>
												<?php } ?>
												<option value=""></option>
												<option value="1">Ordenar por nombre</option>
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

		<div class="container">
		<?php
		while ($datos = mysqli_fetch_array($sql)) { 
		?> 
			<form class="box" id="formulario" name="formulario" method="POST" action="acciones/codAgregarCarrito.php">
				<div class="box img">
					<img src="<?php echo $datos['imagen_producto']?>" />
				</div>
				<br>
				<h4><?php echo $datos['nombre_producto']?></h4>
				<h5><?php echo "$" . number_format($datos['precio_producto'])?></h5>

				<div class="cart">
					<button type="submit" style="cursor:pointer;"><i class='carrito bx bx-cart' aria-hidden="true" ></i></button>

					<a href="detalle.php?id_producto=<?php echo $datos['id_producto'] ?>&imagen_producto=<?php echo $datos['imagen_producto'] ?>&nombre_producto=<?php echo $datos['nombre_producto'] ?>&precio_producto=<?php echo $datos['precio_producto']; ?>&modelo_producto=<?php echo $datos['modelo_producto']?>&imagen1_producto=<?php echo $datos['imagen1_producto']?>&imagen2_producto=<?php echo $datos['imagen2_producto']?>&imagen3_producto=<?php echo $datos['imagen3_producto']?>" role="button" ><i class='detalle bx bx-bullseye' ></i></a>
				</div>
				<div>
					<input name="id_usuario" type="hidden" value="<?php echo $idUsuario?>">
					<input name="id_producto" type="hidden" value="<?php echo $datos['id_producto'] ?>">
					<input name="imagen_producto" type="hidden" value="<?php echo $datos['imagen_producto'] ?>">
					<input name="nombre_producto" type="hidden" value="<?php echo $datos['nombre_producto'] ?>">
					<input name="precio_producto" type="hidden" value="<?php echo $datos['precio_producto'] ?>">
					<input name="modelo_producto" type="hidden" value="<?php echo $datos['modelo_producto'] ?>">
					<input name="cantidad_producto" type="hidden" value="1">
				</div>
			</form>
		<?php } ?>
		</div>
	</section>

	<!----about start--->
	<section class="about" id="about">
		<!-- <div class="about-content">
			<h2>ZAPAX</h2>
			<p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
		</div> -->
	</section>


<?php
    include 'footer.php';

?>