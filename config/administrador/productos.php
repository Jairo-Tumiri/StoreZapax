<?php
    include 'header.php';
	include 'acciones/codFiltrar.php';
?>
        <main>
            <h1 class="titulo-principal" id="titulo-principal" style="text-align: center;">Administrador de Productos</h1>
            <div id="contenedor-productos" class="contenedor-productos">
                <!-- Esto se va a rellenar con JS -->
                <div class="recent--patients">
                    <div class="title">
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
										Marca <br>
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
                        <br><br>
                        <a class="btn-verde"  href="agregarProducto.php" role="button"><i class="ri-add-line"></i>Agregar Marca</a>
                    </div>
                    <br>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <!-- <th>Id</th> -->
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Marca</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $modelo = 1;
                            while ($datos = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td scope="datos"><?php echo $modelo; ?></td>
                                    <!-- <td><p class="col1"><?php //echo $datos['id_producto']; ?></p></td> -->
                                    <td><img class="col2" src="<?php echo $datos['imagen_producto']; ?>"></td>
                                    <td><p class="col3"><?php echo $datos['nombre_producto']; ?></p></td>
                                    <td><p class="col4"><?php echo "$" . number_format($datos['precio_producto']); ?></p></td>
                                    <td><p class="col4"><?php echo $datos['modelo_producto']; ?></p></td>
                                    <td>
                                        <a name="edit" href="editarProducto.php?id_producto=<?php echo $datos['id_producto'];?>&imagen_producto=<?php echo $datos['imagen_producto']; ?>&nombre_producto=<?php echo $datos['nombre_producto']; ?>&precio_producto=<?php echo $datos['precio_producto']; ?>&modelo_producto=<?php echo $datos['modelo_producto']; ?>&imagen1_producto=<?php echo $datos['imagen1_producto']; ?>&imagen2_producto=<?php echo $datos['imagen2_producto']; ?>&imagen3_producto=<?php echo $datos['imagen3_producto']; ?>" role="button">
                                            <i class="ri-edit-line edit"></i>
                                        </a>
                                        
                                        <a  name="id_producto" href="acciones/codEliminarProducto.php?id_producto=<?php echo $datos['id_producto'] ?>" role="button"><i class="ri-delete-bin-line delete"></i></a>
                                    </td>
                                </tr>
                            <?php $modelo++;} ?>
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




















<!-- <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date in</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Status</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>61kg</td>
                                    <td class="pending">pending</td>
                                    <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>George Washington</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>54kg</td>
                                    <td class="confirmed">Confirmed</td>
                                    <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>John Adams</td>
                                    <td>29/07/2022</td>
                                    <td>Male</td>
                                    <td>56kg</td>
                                    <td class="confirmed">Confirmed</td>
                                    <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>Thomas Jefferson</td>
                                    <td>29/07/2022</td>
                                    <td>Male</td>
                                    <td>11kg</td>
                                    <td class="rejected">Rejected</td>
                                    <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>James Madison</td>
                                    <td>29/07/2022</td>
                                    <td>Male</td>
                                    <td>69kg</td>
                                    <td class="confirmed">Confirmed</td>
                                    <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>Andrew Jackson</td>
                                    <td>28/07/2022</td>
                                    <td>Male</td>
                                    <td>88kg</td>
                                    <td class="confirmed">Confirmed</td>
                                    <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->