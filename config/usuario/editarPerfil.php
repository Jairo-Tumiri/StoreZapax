<?php
    include 'header.php';

?>
        <main>
            <h2 class="titulo-principal" id="titulo-principal">Editar Perfil</h2>
            <div id="contenedor-productos" class="contenedor-productos">
                <!-- Esto se va a rellenar con JS -->
                <form id="perfil" method="POST" action="acciones/codEditarPerfil.php" enctype="multipart/form-data">
                    <div class="datos-perfil" style="padding-top: 12vh; display:flex;justify-content:center">
                        <div class="perfil-1">
                            <label class="label-predeterminado" for="exampleInputEmail1">Imagen de Perfil</label>
                            <br>
                            <img class="imagen-predeterminado-perfil" style="width: 400px;border-radius: 50%;height: 400px;" src="<?php echo $_GET['imagen_usuario']; ?>" alt="" >
                            <br>
                            <label class="label_predeterminado" for="exampleInputEmail">Inserte nueva foto</label>
                            <br>
                            <input type="text" class="input-predeterminado" name="imagen_usuario" value="<?php echo $_GET['imagen_usuario']; ?>" >
                        </div>
                        <div class="perfil-2" style="text-align: center;">
                            <div class="form-group">
                                <label class="label-predeterminado" for="exampleInputEmail1">Nombre usuario</label>
                                <br>
                                <input type="text" class="input-predeterminado" name="nombre_usuario" value="<?php echo $_GET['nombre_usuario']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="label-predeterminado" for="exampleInputEmail1">Apellido usuario </label>
                                <br>
                                <input type="text" class="input-predeterminado" name="apellido_usuario" value="<?php echo $_GET['apellido_usuario']?>" required>
                            </div>

                            <div class="form-group">
                                <label class="label-predeterminado" for="exampleInputEmail1">Telefono Usuario</label>
                                <br>
                                <input type="text" class="input-predeterminado" name="telefono_usuario" value="<?php echo $_GET['telefono_usuario']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="label-predeterminado" for="exampleInputEmail1">Pais</label>
                                <br>
                                <input type="text" class="input-predeterminado" name="pais_usuario" value="<?php echo $_GET['pais_usuario']?>" required>
                            </div>

                            <div class="form-group">
                                <label class="label-predeterminado" for="exampleInputEmail1">Email usuario</label>
                                <br>
                                <input type="text" class="input-predeterminado" name="email_usuario" value="<?php echo $_GET['email_usuario']?>" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" value="<?php echo $_GET['id_usuario'] ?>" name="id_usuario" />
                            </div>

                            <div class="form-group" style="text-align: center;">
                            <br><br>
                                <h2>¿Deseas cambiar tu contraseña?</h2>
                                <br>
                                <label class="label-predeterminado" for="exampleInputPassword1">Ingrese Contraseña Anterior</label>
                                <br>
                                <input type="hidden" value="<?php echo $_GET['contraseña_usuario'] ?>" class="input-predeterminado" name="contraseña_usuario">

                                <input type="password" name="nuevacontraseña_usuario" class="input-predeterminado" name="confirmarcontraseña_usuario" >
                                <br>
                                <label class="label_predeterminado" for="exampleInputPassword1">Nueva Contraseña</label>
                                <br>
                                <input type="password" value="" class="input-predeterminado" name="nuevacontraseña_usuario" >
                                <br>
                                <label class="label-predeterminado" for="exampleInputPassword1">Ingrese nuvamente nueva Contraseña</label>
                                <br>
                                <input type="password" value="" class="input-predeterminado" name="confirmarnuevacontraseña_usuario">
                            </div>

                        </div>
                    </div>


                    <br>
                    <div class="opciones">
                        <button type="submit" class="btn-verde" style="float:right; padding:8px 16px; font-size:1.5rem">Editar</button>
                        <a name="" id="" class="btn-rojo" href="index.php" role="button" style="border:3px solid #000;float:left; padding:8px 16px; font-size:1.5rem">Volver</a>
                    </div>
                </form>


            </div>
        </main>
    </div>
    


    <script src="./app.js"></script>
</body>
</html>