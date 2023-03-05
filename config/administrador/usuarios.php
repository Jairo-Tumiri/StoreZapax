<?php
include 'header.php';
include 'acciones/codFiltrarUsuario.php';

$sql_fetch_todos = "SELECT * FROM usuarios ORDER BY id_usuario ASC";
$tablaUsuarios = mysqli_query($conexion, $sql_fetch_todos);
?>
<main>
    <h1 class="titulo-principal" id="titulo-principal" style="text-align: center;">Administrador Usuarios</h1>
    <div id="contenedor-productos" class="contenedor-productos">
        <div class="filter">
            <form method="POST">
                <h3 class="">Filtrador de búsqueda</h4>
                    <br>
                    <div class="filter-option">

                        <div class="filter-option_buscador">
                            <label class="">Buscador</label>
                            <input type="text" class="filter-option_buscador_buscador" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>">
                        </div>
                        <br>
                        <div class="filter-option_container_table">
                            <h4 class="card-title">Ordenar por</h4>

                            <table class="filter-options_container_table_table">
                                <thead>
                                    <tr class="filters">
                                        <!-- <th>
                                            Precio desde:
                                            <input type="number" id="buscapreciodesde" name="buscapreciodesde" class="form-control mt-2" value="<?php //echo $_POST["buscapreciodesde"]; ?>" style="border: #bababa 1px solid; color:#000000;">
                                        </th>
                                        <th>
                                            Precio hasta:
                                            <input type="number" id="buscapreciohasta" name="buscapreciohasta" class="form-control mt-2" value="<?php //echo $_POST["buscapreciohasta"]; ?>" style="border: #bababa 1px solid; color:#000000;">
                                        </th> -->
                                        <th>
                                            Tipo Usuario: 
                                            <select id="assigned-tutor-filter" id="buscadepartamento" name="buscamodelo" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                                <?php if ($_POST["buscamodelo"] != '') { ?>
                                                    <option value="<?php echo $_POST["buscamodelo"]; ?>"><?php if ($_POST['buscamodelo']=='1') { $t='administrador';} else { $t='Cliente';} echo $t; ?></option>
                                                <?php } ?>
                                                <option value="">Todos</option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Cliente</option>
                                            </select>
                                        </th>
                                        <th>
                                            Selecciona el orden
                                            <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                                <?php if ($_POST["orden"] != '') { ?>
                                                    <option value="<?php echo $_POST["orden"]; ?>">
                                                        <?php
                                                        if ($_POST["orden"] == '1') {
                                                            echo 'Ordenar por nombre';
                                                        }
                                                        if ($_POST["orden"] == '2') {
                                                            echo 'Ordenar por nombre Pais';
                                                        }
                                                        if ($_POST["orden"] == '3') {
                                                            echo 'Ordenar por numero de telefono';
                                                        }
                                                        if ($_POST["orden"] == '4') {
                                                            echo 'Ordenar por fecha de reciente';
                                                        }
                                                        if ($_POST["orden"] == '5') {
                                                            echo 'Ordenar por fecha de antigua';
                                                        }
                                                        if ($_POST["orden"] == '6') {
                                                            echo 'Ordenar por Email';
                                                        }
                                                        ?>
                                                    </option>
                                                <?php } ?>
                                                <option value=""></option>
                                                <option value="1">Ordenar por nombre</option>
                                                <option value="2">Ordenar por nombre Pais</option>
                                                <option value="3">Ordenar por numero de telefono</option>
                                                <option value="4">Ordenar por fecha de reciente</option>
                                                <option value="5">Ordenar por fecha de antigua</option>
                                                <option value="6">Ordenar por Email</option>
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
        <!-- Esto se va a rellenar con JS -->
        <div class="recent--patients">
            <div class="title">
                <h2 class="section--title">USUARIOS</h2>
                <!-- <button class="add"><i class="ri-add-line"></i>Add Doctor</button> -->
            </div>
            <br><br>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Pais</th>
                            <th>Tipo:Usuario</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $idusuario = 1;
                        while ($datos = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td><?php echo $idusuario ?></td>
                                <td><?php echo $datos['id_usuario'] ?></td>
                                <td><?php echo $datos['nombre_usuario'] ?></td>
                                <td><?php echo $datos['apellido_usuario'] ?></td>
                                <td><?php echo $datos['telefono_usuario'] ?></td>
                                <td><?php echo $datos['pais_usuario'] ?></td>
                                <td class="<?php if ($datos['tipo_usuario'] == "1") {
                                                $t = 'Administrador';
                                                echo "rejected";
                                            } else {
                                                $t = 'Cliente';
                                                echo "confirmed";
                                            } ?>">
                                    <?php echo $t ?>
                                </td>
                                <td><?php echo $datos['email_usuario'] ?></td>
                                <td>

                                    <a name="id_usuario" href="acciones/codEliminarUsuario.php?id_usuario=<?php echo $datos['id_usuario'] ?>" role="button"><i class="ri-delete-bin-line delete"></i></a>

                                    <a name="edit" href="editarUsuario.php?id_usuario=<?php echo $datos['id_usuario']; ?>&nombre_usuario=<?php echo $datos['nombre_usuario']; ?>&apellido_usuario=<?php echo $datos['apellido_usuario']; ?>&telefono_usuario=<?php echo $datos['telefono_usuario']; ?>&pais_usuario=<?php echo $datos['pais_usuario']; ?>&tipo_usuario=<?php echo $datos['tipo_usuario']; ?>&email_usuario=<?php echo $datos['email_usuario']; ?>" role="button"><i class="ri-edit-line edit"></i>
                                    </a>

                                </td>
                            </tr>
                        <?php $idusuario++;
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