<?php 
      include "../verificarIdentidad.php";
      include "../database/database.php";
      include '../tablas.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapax</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    <div class="wrapper">
        <aside>
            <header>
                <h1 class="logo">Zapax</h1>
            </header>
            <nav>
                <ul class="menu">

                    <li>
                    <a href="./index.php"><button id="pefil" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>Perfil</button></a>
                    </li>

                    <li>
                    <a href="./usuarios.php"><button id="usuarios" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>Usuarios</button>
                    </a></li>

                    <li>
                    <a href="./productos.php"><button id="productos" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>Productos</button>
                    </a></li>

                    <li>
                    <a href="./pagos.php"><button id="mPago" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>Pago</button>
                    </a></li>

                    <li>
                        <a class="boton-menu boton-carrito" href="../cerrarSesion.php">
                            Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© 2022 Zapax</p>
            </footer>
        </aside>

