<?php
include 'header.php';
?>
<main>
    <h2 class="titulo-principal" id="titulo-principal">Administrador de Usuario</h2>
    <div id="contenedor-productos" class="contenedor-productos">
        <!-- Esto se va a rellenar con JS -->
        <div class="recent--patients">
            <div class="title">
                <h2 class="section--title">CAMBIAR ACCESO DE USAURIO | INFORMACION DEL USAURIO</h2>
                <br>
            </div>
            <br>
            <div class="table">

                <form method="POST" action="acciones/codEditarusuario.php" enctype="multipart/form-data" style="text-align: center;">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Usuario</label>
                        <br>
                        <input type="text" class="form-control" name="nombre_usuario" value="<?php echo $_GET['nombre_usuario']; ?>" style="cursor: no-drop;" readonly>
                    </div>

                    <div class="form-group">
                        <br>
                        <label for="exampleInputEmail1">apellido del Usuario</label>
                        <br>
                        <input type="number" class="form-control" name="apellido_usuario" value="<?php echo $_GET['apellido_usuario'] ?>" style="cursor: no-drop;" readonly>

                        <input type="hidden" value="<?php echo $_GET['id_usuario'] ?>" name="id_usuario" />
                    </div>


                    <div class="form-group">
                        <br>
                        <label for="exampleInputEmail1">Telefono del Usuario</label>
                        <br>
                        <input type="text" class="form-control" name="telefono_usuario" value="<?php echo $_GET['telefono_usuario'] ?>"  style="cursor: no-drop;" readonly>
                    </div>

                    <div>
                        <br>
                        <label for="exampleInputEmail">Pais del Usuario</label><br>
                        <input type="text" class="form-control" name="pais_usuario" value="<?php echo $_GET['pais_usuario']; ?>"  style="cursor: no-drop;" readonly>
                    </div>

                    <div>
                        <br>
                        <label for="exampleInputEmail">Tipo Usuario</label>
                        <h3>DATO:</h3>
                        <p>1 = Usuario Administrador</p>
                        <p>2 = Usuario Cliente</p>
                        <input type="number" class="form-control" name="tipo_usuario" value="<?php echo $_GET['tipo_usuario']; ?>">
                    </div>

                    <div>
                        <br>
                        <label for="exampleInputEmail">Email Usuario</label><br>
                        <input type="text" class="form-control" name="email_usuario" value="<?php echo $_GET['email_usuario']; ?>"  style="cursor: no-drop;" readonly>
                    </div>

                    <br>
                    <div class="form-button">
                        <button type="submit" class="btn-verde" style="float:right">Editar</button>
                        <a name="" id="" class="btn-rojo" href="usuarios.php" role="button" style="float:left">Volver</a>
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