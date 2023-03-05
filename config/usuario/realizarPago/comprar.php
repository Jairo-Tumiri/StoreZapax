<?php
include '../../verificarIdentidad.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../img/logo.png">
    <title>Zapax</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>



    <main class="main-container">
        <section class="main-container__background-section">

            <div class="container-logo">
                <a href="" style="color: #fff; text-decoration: none; font-size:2.5rem;"><img src="../../../img/logo.png" style="width: 50px;">Zapax</a>
            </div>


            <div class="card">
                <img class="card__logo" src="images/card-logo.svg" alt="logo">
                <p class="card__number">0000 0000 0000 0000</p>
                <div class="card__details">
                    <p class="card__details-name">Ejemplo Ejemplo</p>
                    <p><span class="card__month">00</span>/<span class="card__year">00</span></p>
                </div>
            </div>

            <div class="card-back">
                <p class="card-back__cvc">000</p>
            </div>
        </section>

        <section class="main-container__form-section">
            <form class="form" method="POST" action="codAgregarMisPedidos.php">
                <label class="form__label" for="cardholder">Nombre</label>
                <input class="form__input" type="text" name="nombreusuario_pedido" placeholder="Nombre" value="<?php echo $nombreUsuario ?>">
                <div class="form__cardholder--error error"></div>

                <label class="form__label" for="cardholder">Contraseña de Zapax</label>
                <input class="form__input" type="password" name="contraseñausuario_pedido" placeholder="Contraseña">
                <input type="hidden" name="contraseña_usuario" type="password" value="<?php echo $contraseñaUsuario ?>">
                <div class="form__cardholder--error error"></div>

                <label class="form__label" for="cardholder">Nombre de la Tarjeta</label>
                <input class="form__input" type="text"  id="cardholder" placeholder="e.g. Jane Appleseed">

                <div class="form__cardholder--error error"></div>

                <label class="form__label" for="cardNumber">Numero de la Tarjeta</label>
                <input class="form__input" type="text" id="cardNumber" maxlength="19" placeholder="e.g. 1234 5678 9123 0000">
                <div class="form__inputnumber--error error"></div>


                <div class="form__date-cvc">
                    <!-- grid -->
                    <!-- 1 -->
                    <label class="form__label" for="cardMonth">Fecha de expiracion(MM/YY)</label>
                    <!-- 2 -->
                    <label class="form__label" for="cardCvc">Codigo</label>
                    <!-- 3 -->
                    <div class="form__date">
                        <input class="form__input" type="text" maxlength="2"  id="cardMonth" placeholder="MM">
                        <input class="form__input" type="text" maxlength="2"  id="cardYear" placeholder="YY">
                    </div>
                    <!-- 4 -->
                    <input class="form__input" type="text" maxlength="3"  id="cardCvc" placeholder="e.g. 123">
                    <!-- 5 -->
                    <div class="form__errors-container">
                        <div class="form__input-mm--error error"></div>
                        <div class="form__input-yy--error error"></div>
                    </div>
                    <!-- 6 -->
                    <div class="form__input-cvc--error error"></div>
                </div>
                <input type="hidden" name="idusuario_pedido" value="<?php echo $idUsuario ?>">
                <button type="submit" class="form__submit">Continuar</button>
                <br><br>
                <a href="../carrito.php" class="form__submita" style="text-decoration: none;">Volver</a>

            </form>

            <!-- Completed state start -->

            <section class="thanks-section">
                <img class="thanks-section__img" src="./images/icon-complete.svg" alt="complete icon">
                <h1 class="thanks-section__title">Muchas GRacias por confiar en nosotros <?php echo $nombreUsuario?>!</h1>
                <p class="thanks-section__text">Su compra sera observada desde la pestaña "mis pedidos"<br>Si necesita algo mas por favor llamenos o mandenos un correo de la pagina oficial</p>
                <br><br>
                <a style="display: block;text-align: center;color: #fff;padding-top: 13px;text-decoration: none;" class="thanks-section__button" href="../acciones/codAgregarMisPedidos.php?idusuario_pedido=<?php echo $idUsuario?>&nombreusuario_pedido=<?php echo $nombreUsuario?>&contraseña_usuario=<?php echo $contraseñaUsuario?>&precio_pago=<?php echo $_GET['precio_pedido']?>&pedido_pago=<?php echo $_GET['cantidad_pedido']?>" role="button">Confirmar</a>
            </section>

        </section>
    </main>

    <script src="./main.js"></script>
</body>

</html>