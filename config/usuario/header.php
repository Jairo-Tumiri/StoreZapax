<?php
    include '../verificarIdentidad.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zapax</title>

	<link rel="icon" type="image/png" sizes="32x32" href="../../img/logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>

	<!----header start--->
	<header>
		<a href="#" class="logo">ZAPAX</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="./index.php">Tienda</a></li>
			<li><a href="./perfil.php">Perfil</a></li>
			<li><a href="./misPedidos.php">Mis Pedidos</a></li>
			<li><a href="../cerrarSesion.php">Cerrar Sesion</a></li>
		</ul>

		<div class="icons">
			<!-- <a href="#"><i class='bx bx-search'></i></a> -->
            <perfil><img style="border-radius: 50%;" src="<?php echo $imagenUsuario?>" /><p><?php echo $nombreUsuario?></p></perfil>
			<!-- <a href="#"><i class='bx bxs-user-circle'><p><?php echo $nombreUsuario?></p></i></a> -->
			<a href="carrito.php"><i class='bx bxs-shopping-bag' ><p><?php ?></p></i></a>
		</div>
	</header>
