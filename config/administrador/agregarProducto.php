<?php
    include 'header.php';

?>
        <main>
            <h2 class="titulo-principal" id="titulo-principal">Administrador de Productos</h2>
            <div id="contenedor-productos" class="contenedor-productos">
                <!-- Esto se va a rellenar con JS -->
                <div class="recent--patients">
                    <div class="title">
                        <h2 class="section--title">Agregar nuevo modelo de Zapatillas</h2>
                        <br><br>
                    </div>
                    <br>
                    <div class="table">

                        <form method="POST" action="acciones/codAgregarProducto.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen de Plantilla</label>
                                <br>
                                <input type="text" class="form-control" name="imagen_producto" required>
                                <!-- <input type="file" class="form-control" name="img-plantilla" required> -->
                            </div>  

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre de Plantilla</label>
                                <br>
                                <input type="text" class="form-control" name="nombre_producto" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio</label>
                                <br>
                                <input type="number" class="form-control" name="precio_producto" required> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Modelo</label>
                                <br>
                                <input type="text" class="form-control" name="modelo_producto" required> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen 1 de Plantilla</label>
                                <br>
                                <input type="text" class="form-control" name="imagen1_producto" required>
                                <!-- <input type="file" class="form-control" name="img-plantilla" required> -->
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen 2 de Plantilla</label>
                                <br>
                                <input type="text" class="form-control" name="imagen2_producto" required>
                                <!-- <input type="file" class="form-control" name="img-plantilla" required> -->
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen 3 de Plantilla</label>
                                <br>
                                <input type="text" class="form-control" name="imagen3_producto" required>
                                <!-- <input type="file" class="form-control" name="img-plantilla" required> -->
                            </div>    

                            <br>
                            <div class="form-button">
                                <button type="submit" class="btn-verde" style="float:right">Agregar Producto</button>
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