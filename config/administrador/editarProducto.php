<?php
    include 'header.php';

    $sql_fetch_todos = $sql_fetch_todos = "SELECT * FROM productos ORDER BY id_producto ASC";
    $query = mysqli_query($conexion, $sql_fetch_todos);
?>
        <main>
            <h2 class="titulo-principal" id="titulo-principal">Administrador de Productos</h2>
            <div id="contenedor-productos" class="contenedor-productos">
                <!-- Esto se va a rellenar con JS -->
                <div class="recent--patients">
                    <div class="title">
                        <h2 class="section--title">Editar Modelo</h2>
                        <br><br>
                    </div>
                    <br>
                    <div class="table">

                        <form method="POST" action="acciones/codEditarProducto.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen del Producto</label>
                                <br>
                                <img class="imagen_demostracion" src="<?php echo $_GET['imagen_producto']; ?>" alt="" style="width: 100px;" >
                                <br>
                                <label for="exampleInputEmail">Inserte nueva foto</label>
                                <br>
                                <input type="text" class="form-control" name="imagen_producto" value="<?php echo $_GET['imagen_producto']; ?>" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre del Producto</label>
                                <br>
                                <input type="text" class="form-control" name="nombre_producto" value="<?php echo $_GET['nombre_producto']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Precio</label>
                                <br>
                                <input type="number" class="form-control" name="precio_producto" value="<?php echo $_GET['precio_producto']?>" required>

                                <input type="hidden" value="<?php echo $_GET['id_producto'] ?>" name="id_producto" />
                            </div>

                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Modelo</label>
                                <br>
                                <input type="text" class="form-control" name="modelo_producto" value="<?php echo $_GET['modelo_producto']?>" required>
                            </div>

                            <div>
                                <label for="exampleInputEmail">imagen 1</label>
                                <img class="imagen_demostracion" src="<?php echo $_GET['imagen1_producto']; ?>" alt="" style="width: 100px;" >
                                <br>
                                <input type="text" class="form-control" name="imagen1_producto" value="<?php echo $_GET['imagen1_producto']; ?>" required>
                            </div>

                            <div>
                                <label for="exampleInputEmail">imagen 2</label>
                                <img class="imagen_demostracion" src="<?php echo $_GET['imagen2_producto']; ?>" alt="" style="width: 100px;" >
                                <br>
                                <input type="text" class="form-control" name="imagen2_producto" value="<?php echo $_GET['imagen2_producto']; ?>" required>
                            </div>

                            <div>
                                <label for="exampleInputEmail">imagen 3</label>
                                <img class="imagen_demostracion" src="<?php echo $_GET['imagen3_producto']; ?>" alt="" style="width: 100px;" >
                                <br>
                                <input type="text" class="form-control" name="imagen3_producto" value="<?php echo $_GET['imagen3_producto']; ?>" required>
                            </div>

                            <br>
                            <div class="form-button">
                                <button type="submit" class="btn-verde" style="float:right">Editar</button>
                                <a name="" id="" class="btn-rojo" href="productos.php" role="button" style="float:left">Volver</a>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </main>
    </div>
    


    <script src="app.js"></script>
</body>
</html>
