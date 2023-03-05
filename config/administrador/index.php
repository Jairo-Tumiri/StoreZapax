<?php

    include 'header.php';

?>
        <main>
            <h2 class="titulo-principal" id="titulo-principal">Mi Perfil</h2>
            <div id="contenedor-productos" class="contenedor-productos">
                <!-- Esto se va a rellenar con JS -->
                <form id="perfil" action="editarPerfil.php" method="post">
                    <div class="datos-perfil">
                        <div class="perfil-1">
                            <div class="perfil-imagen">
                                <img class="imagen-predeterminado-perfil" src="<?php echo $imagenUsuario?>" alt="">
                            </div>
                        </div>
                        <div class="perfil-2">
                            <div class="perfil-text">
                                <label class="label-predeterminado" for="exampleUsuario">Nombre</label><br>
                                <input class="input-predeterminado" type="text" name="nombre_usuario" id="" value="<?php echo $nombreUsuario?>" readonly>
                                <br>
                                <br>
                                <label class="label-predeterminado" for="exampleUsuario">Apellido</label><br>
                                <input class="input-predeterminado" type="text" name="apellido_usuario" id="" value="<?php echo $apellidoUsuario?>" readonly>
                            </div><br>
                            <div class="perfil-contacto">
                                <label class="label-predeterminado" for="exampleUsuario">Telefono</label><br>
                                <input class="input-predeterminado" type="text" name="telefono_usuario" value="<?php echo $telefonoUsuario?>" readonly>
                                <br>
                                <br>
                                <label class="label-predeterminado" for="exampleUsuario">Pais</label><br>
                                <input class="input-predeterminado" type="text" name="pais_usuario" value="<?php echo $paisUsuario?>" readonly>
                            </div>
                            <br>
                            <div class="perfil-correo">
                                <label class="label-predeterminado" for="exampleUsuario">Correo Electronico</label><br>
                                <input class="input-predeterminado" type="text" name="email_usuario" value="<?php echo $emailUsuario?>" readonly>
                                <br><br>
                                <!-- <label class="label-predeterminado" type="hidden" for="exampleUsuario">contraseña</label><br> -->
                                <input class="input-predeterminado" type="hidden" name="contraseña_usuario" value="<?php echo $contraseñaUsuario?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="opciones">
                        <div>
                            <h3>¿Deseas cambiar su contraseña?</h3>
                            <br>
                            <a class="btn-rojo" href="editarPerfil.php?id_usuario=<?php echo $idUsuario?>&imagen_usuario=<?php echo $imagenUsuario ?>&nombre_usuario=<?php echo $nombreUsuario ?>&apellido_usuario=<?php echo $apellidoUsuario?>&telefono_usuario=<?php echo $telefonoUsuario ?>&pais_usuario=<?php echo $paisUsuario?>&email_usuario=<?php echo $emailUsuario ?>&contraseña_usuario=<?php echo $contraseñaUsuario?>" role="button">SI, SI DESEO CAMBIAR MI CONTRASEÑA</a>
                            <!-- <input class="boton" type="submit" value="SI, SI DESEO CAMBIAR MI CONTRASEÑA"> -->
                        </div>
                        <br><br>
                        <div>
                            <h3>¿Deseas cambiar tu informacion?</h3>
                            <br>
                            <a class="btn-rojo" href="editarPerfil.php?id_usuario=<?php echo $idUsuario?>&imagen_usuario=<?php echo $imagenUsuario ?>&nombre_usuario=<?php echo $nombreUsuario ?>&apellido_usuario=<?php echo $apellidoUsuario?>&telefono_usuario=<?php echo $telefonoUsuario ?>&pais_usuario=<?php echo $paisUsuario?>&email_usuario=<?php echo $emailUsuario ?>&contraseña_usuario=<?php echo $contraseñaUsuario?>" role="button">SI, SI DESEO CAMBIAR MI INFORMACION</a>
                        </div>
                    </div>
                </form>


            </div>
        </main>
    </div>
    


    <script src="./app.js"></script>
</body>
</html>