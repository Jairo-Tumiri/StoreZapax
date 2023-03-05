-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 19:49:28
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `idusuario_pago` int(100) NOT NULL,
  `idpedido_pago` int(100) NOT NULL,
  `precio_pago` float(20,2) NOT NULL,
  `pedidos_pago` varchar(123) NOT NULL,
  `estadopedido_pago` int(50) NOT NULL,
  `fecha_pago` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `idusuario_pago`, `idpedido_pago`, `precio_pago`, `pedidos_pago`, `estadopedido_pago`, `fecha_pago`) VALUES
(22, 8, 0, 33000.00, '1', 0, '2022-11-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `idusuario_pedido` int(11) NOT NULL,
  `idproducto_pedido` int(11) NOT NULL,
  `imagenproducto_pedido` varchar(200) NOT NULL,
  `nombreproducto_pedido` varchar(100) NOT NULL,
  `precioproducto_pedido` float NOT NULL,
  `modeloproducto_pedido` varchar(100) NOT NULL,
  `fecha_pedido` datetime NOT NULL,
  `estado_pedido` int(11) NOT NULL,
  `estadoseguimiento_pedido` int(11) NOT NULL,
  `cantidad_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `idusuario_pedido`, `idproducto_pedido`, `imagenproducto_pedido`, `nombreproducto_pedido`, `precioproducto_pedido`, `modeloproducto_pedido`, `fecha_pedido`, `estado_pedido`, `estadoseguimiento_pedido`, `cantidad_pedido`) VALUES
(172, 8, 17, 'https://m.media-amazon.com/images/I/615+qtuiBcS._AC_UL1500_.jpg', 'Zapatilla Seeley Blanca', 33000, 'Adidas', '2022-11-28 15:14:38', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `imagen_producto` varchar(200) NOT NULL,
  `nombre_producto` varchar(150) NOT NULL,
  `precio_producto` float NOT NULL,
  `modelo_producto` varchar(200) NOT NULL,
  `imagen1_producto` varchar(200) NOT NULL,
  `imagen2_producto` varchar(200) NOT NULL,
  `imagen3_producto` varchar(200) NOT NULL,
  `stock_producto` int(2) NOT NULL,
  `cantidadstock_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `imagen_producto`, `nombre_producto`, `precio_producto`, `modelo_producto`, `imagen1_producto`, `imagen2_producto`, `imagen3_producto`, `stock_producto`, `cantidadstock_producto`) VALUES
(15, 'https://m.media-amazon.com/images/I/71HoKHWZhmS._AC_UL1500_.jpg', 'Zapatilla Seeley Negro', 33000, 'Adidas', 'https://m.media-amazon.com/images/I/71xw04n+10S._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71qsd98ZfAS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71Ht5ytbJZS._AC_UL1500_.jpg', 1, 10),
(16, 'https://m.media-amazon.com/images/I/71T-m2J8BjS._AC_UL1500_.jpg', 'Zapatilla Seeley Gris', 33000, 'Adidas', 'https://m.media-amazon.com/images/I/81lFKPAs9bS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81rZ5xRdexS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71d+4F4AZwS._AC_UL1500_.jpg', 1, 10),
(17, 'https://m.media-amazon.com/images/I/615+qtuiBcS._AC_UL1500_.jpg', 'Zapatilla Seeley Blanca', 33000, 'Adidas', 'https://m.media-amazon.com/images/I/61xapAsCemS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61OqJaqOh1S._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71Gb7FiF3JS._AC_UL1500_.jpg', 1, 10),
(18, 'https://m.media-amazon.com/images/I/71BADZMogkL._AC_UL1500_.jpg', 'Zapatilla Seeley Red', 33000, 'Adidas', 'https://m.media-amazon.com/images/I/71-OkescpYL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81czlgp47KL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71dwaSvywYL._AC_UL1500_.jpg', 1, 10),
(19, 'https://m.media-amazon.com/images/I/81OYXoyaE+L._AC_UL1500_.jpg', 'Zapatilla Seeley Azul', 33000, 'Adidas', 'https://m.media-amazon.com/images/I/81bBSVk3GPL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81C0ihK4fgL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71OUmi7pWjL._AC_UL1500_.jpg', 1, 10),
(20, 'https://m.media-amazon.com/images/I/71vzfajmIpS._AC_UL1500_.jpg', 'Zapatilla Running EQ21 Blanca', 37000, 'Adidas', 'https://m.media-amazon.com/images/I/71D4UVunOMS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71L4nk2qJ6S._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71A6s1vh5eS._AC_UL1500_.jpg', 1, 10),
(21, 'https://m.media-amazon.com/images/I/71yy8xidFMS._AC_UL1500_.jpg', 'Zapatilla Running EQ21 Negra', 37000, 'Adidas', 'https://m.media-amazon.com/images/I/71Z9nFyUniS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71Pl0JUj2bS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61vw6-BiQHS._AC_UL1500_.jpg', 1, 10),
(22, 'https://m.media-amazon.com/images/I/81kkbvqv2lL._AC_UL1500_.jpg', 'Zapatilla Running EQ21 Naranja', 37000, 'Adidas', 'https://m.media-amazon.com/images/I/71CVdRTdQCL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/819CfDrtReL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71ybs1kL+YL._AC_UL1500_.jpg', 1, 10),
(23, 'https://m.media-amazon.com/images/I/81iNmrY0wrS._AC_UL1500_.jpg', 'Zapatilla Running EQ21 Gris', 37000, 'Adidas', 'https://m.media-amazon.com/images/I/71I50XBcoQS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81wQX5ti0vS._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71gCALjkuyS._AC_UL1500_.jpg', 1, 10),
(24, 'https://m.media-amazon.com/images/I/71f3Oawy8fL._AC_UL1500_.jpg', 'Zapatilla High Top', 41000, 'Adidas', 'https://m.media-amazon.com/images/I/71b9ScPCb+L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71nJiqdWO8L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71beq9CnXRL._AC_UL1500_.jpg', 1, 10),
(25, 'https://m.media-amazon.com/images/I/71TX42gbNzL._AC_UL1500_.jpg', 'Zapatilla Smash v2 NBK Azul', 37000, 'Puma', 'https://m.media-amazon.com/images/I/81+VjY0TjiL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81uFy5UvWKL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81xNYCFEdmL._AC_UL1500_.jpg', 1, 10),
(26, 'https://m.media-amazon.com/images/I/61Bf81zbQ2L._AC_UL1500_.jpg', 'Zapatilla Smash v2 NBK Blanca', 37000, 'Puma', 'https://m.media-amazon.com/images/I/61+xClEPeQL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/713sx2MEtZL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71l8v2bhgNL._AC_UL1500_.jpg', 1, 10),
(27, 'https://m.media-amazon.com/images/I/71w9th-HHmL._AC_UL1500_.jpg', 'Zapatilla Smash v2 NBK Negra', 37000, 'Puma', 'https://m.media-amazon.com/images/I/71TYf0fka8L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71XFBcxZvJL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71L46YQtbhL._AC_UL1500_.jpg', 1, 10),
(28, 'https://m.media-amazon.com/images/I/71C8dVn7nrL._AC_UL1500_.jpg', 'Zapatilla California Blanca', 26000, 'Puma', 'https://m.media-amazon.com/images/I/61eKKfbf2gL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/716ZKDxa2rL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71BLbCIbIDL._AC_UL1500_.jpg', 1, 10),
(29, 'https://m.media-amazon.com/images/I/61Sb2TjEEaL._AC_UL1500_.jpg', 'Zapatilla California Negra', 26000, 'Puma', 'https://m.media-amazon.com/images/I/71jkcmN84NL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/712hBIfR78L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61LeiAtKPYS._AC_UL1500_.jpg', 1, 10),
(30, 'https://m.media-amazon.com/images/I/71PGuJhQ+6L._AC_UL1500_.jpg', 'Zapatilla Super Liga OG Blanca', 34000, 'Puma', 'https://m.media-amazon.com/images/I/71UOnyCPjfL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/712MQqZ9RSL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71UzT+em-zL._AC_UL1500_.jpg', 1, 10),
(31, 'https://m.media-amazon.com/images/I/61Q-rHpXV5L._AC_UL1500_.jpg', 'Zapatilla Super Liga OG Negra', 34000, 'Puma', 'https://m.media-amazon.com/images/I/61GoWQugboL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/619lQ5fYJTL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/613zA8e9KaL._AC_UL1500_.jpg', 1, 10),
(32, 'https://m.media-amazon.com/images/I/81qP3DrUhcL._AC_UL1500_.jpg', 'Zapatilla All Star High Top Negra', 40000, 'Converse', 'https://m.media-amazon.com/images/I/81JchG0L7KL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/916KfbhmeHL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/910cYEy68ZL._AC_UL1500_.jpg', 1, 10),
(33, 'https://m.media-amazon.com/images/I/81Y-4w4R87L._AC_UL1500_.jpg', 'Zapatilla All Star High Top Blanca', 40000, 'Converse', 'https://m.media-amazon.com/images/I/81TTozTvNWL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/91iz5KsWd+L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81VYJ70wh9L._AC_UL1500_.jpg', 1, 10),
(34, 'https://m.media-amazon.com/images/I/717HcVqU1AL._AC_UL1500_.jpg', 'Zapatilla All Star Low Negra', 36000, 'Converse', 'https://m.media-amazon.com/images/I/7193Q+yFR1L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/7105601h9QL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/713ApssVsjL._AC_UL1500_.jpg', 1, 10),
(35, 'https://m.media-amazon.com/images/I/71bsjxWjrxL._AC_UL1500_.jpg', 'Zapatilla Old School', 35000, 'Vans', 'https://m.media-amazon.com/images/I/71VCuvYhYLL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81H3Z8jeeiL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71B+Gli6GnL._AC_UL1500_.jpg', 1, 10),
(36, 'https://m.media-amazon.com/images/I/71Rd9tYjnxL._AC_UL1500_.jpg', 'Zapatilla Old School High Top', 42000, 'Vans', 'https://m.media-amazon.com/images/I/71gLI4oXl6L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81L8u+80GuL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71R4dbnKuAL._AC_UL1500_.jpg', 1, 10),
(37, 'https://m.media-amazon.com/images/I/71pf7VFs9CL._AC_UL1500_.jpg', 'Zapatilla Old School Azul', 35000, 'Vans', 'https://m.media-amazon.com/images/I/713PuqQI8BL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/81r5CWM6AaL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71O0Lsm2-SL._AC_UL1500_.jpg', 1, 10),
(38, 'https://m.media-amazon.com/images/I/61T+WN9+BOL._AC_UL1500_.jpg', 'Zapatilla Jordan Violeta', 45000, 'Nike', 'https://m.media-amazon.com/images/I/61sLkGe0UvL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71HAMnhOrSL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61fefzFvqcL._AC_UL1500_.jpg', 1, 10),
(39, 'https://m.media-amazon.com/images/I/81v8Gn79fmL._AC_UL1500_.jpg', 'Zapatilla Air Force', 36000, 'Nike', 'https://m.media-amazon.com/images/I/71cciD-gRiL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/817iqoa13AL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61AjCiPM6TL._AC_UL1500_.jpg', 1, 10),
(40, 'https://m.media-amazon.com/images/I/613HmnmaO6L._AC_UL1500_.jpg', 'Zapatilla Sneaker', 38000, 'Nike', 'https://m.media-amazon.com/images/I/71uXGc5jQCL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/710sEhNuwXL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71ugRLEnzFL._AC_UL1500_.jpg', 1, 10),
(41, 'https://m.media-amazon.com/images/I/71aw2Z+2WML._AC_UL1500_.jpg', 'Zapatilla Blazer', 45000, 'Nike', 'https://m.media-amazon.com/images/I/71h5bWbBaSL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61wla26S4lL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71yB-K2GNoL._AC_UL1500_.jpg', 1, 10),
(42, 'https://m.media-amazon.com/images/I/61h0BdE2QPL._AC_UL1500_.jpg', 'Zapatilla Jordan Gris', 45000, 'Nike', 'https://m.media-amazon.com/images/I/61V85FpB2EL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61yxgygkIyL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61oKxpWTFoL._AC_UL1500_.jpg', 1, 10),
(43, 'https://m.media-amazon.com/images/I/71EHvI1wGrL._AC_UL1500_.jpg', 'Zapatilla Jordan Roja', 45000, 'Nike', 'https://m.media-amazon.com/images/I/71j+1TJhudL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71JV952UciL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71t65HcoaGL._AC_UL1500_.jpg', 1, 10),
(44, 'https://m.media-amazon.com/images/I/61FHRQ3aYeL._AC_UL1500_.jpg', 'Zapatilla Jordan Celeste', 45000, 'Nike', 'https://m.media-amazon.com/images/I/71Sl-SYktRL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71NOXAuXDkL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71jBnAXe4YL._AC_UL1500_.jpg', 1, 10),
(45, 'https://m.media-amazon.com/images/I/61hFdNw0qsL._AC_UL1500_.jpg', 'Zapatilla Jordan Negra', 45000, 'Nike', 'https://m.media-amazon.com/images/I/71CCjVEhkTL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/713bg5QtukL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61vgw+RXcgL._AC_UL1500_.jpg', 1, 10),
(46, 'https://m.media-amazon.com/images/I/61WCiDo7wAL._AC_UL1500_.jpg', 'Zapatilla High Top Negra ', 32000, 'Nike', 'https://m.media-amazon.com/images/I/71iUE5TJ98L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71vLh4+K0gL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71t48mYQbML._AC_UL1500_.jpg', 1, 10),
(47, 'https://m.media-amazon.com/images/I/614idea+pcL._AC_UL1500_.jpg', 'Zapatilla High Top Blanca', 32000, 'Nike', 'https://m.media-amazon.com/images/I/71cdZRNxGDL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/711-tlnNQ5L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71Uuy61SsYL._AC_UL1500_.jpg', 1, 10),
(48, 'https://m.media-amazon.com/images/I/711O1sVuZfL._AC_UL1500_.jpg', 'Zapatilla High Top Roja', 32000, 'Nike', 'https://m.media-amazon.com/images/I/71c3O+g80-L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71DTdTDkRSL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71x0794lYEL._AC_UL1500_.jpg', 1, 10),
(49, 'https://m.media-amazon.com/images/I/51hLHxf0yBL._AC_UL1336_.jpg', 'Zapatilla Low Blanca', 28000, 'Nike', 'https://m.media-amazon.com/images/I/61Fe1ZLIZjL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61rSbN4TXTL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/51JeQKWA6NL._AC_UL1500_.jpg', 1, 10),
(50, 'https://m.media-amazon.com/images/I/614iWTP4YZL._AC_UL1500_.jpg', 'Zapatilla Low Negra', 28000, 'Nike', 'https://m.media-amazon.com/images/I/6108RIhzHeL._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/71O+hRvEM1L._AC_UL1500_.jpg', 'https://m.media-amazon.com/images/I/61EoL0utefL._AC_UL1500_.jpg', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` smallint(6) NOT NULL,
  `imagen_usuario` varchar(200) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `apellido_usuario` varchar(20) NOT NULL,
  `tarjeta_usuario` varchar(16) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `contraseña_usuario` varchar(100) NOT NULL,
  `pais_usuario` varchar(50) NOT NULL,
  `telefono_usuario` int(50) NOT NULL,
  `tipo_usuario` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `imagen_usuario`, `nombre_usuario`, `apellido_usuario`, `tarjeta_usuario`, `email_usuario`, `contraseña_usuario`, `pais_usuario`, `telefono_usuario`, `tipo_usuario`) VALUES
(3, 'https://cdn-icons-png.flaticon.com/512/147/147144.png', 'admin', 'zapax', '', 'admin@zapax.com', '21232f297a57a5a743894a0e4a801fc3', 'Argentina', 1141430021, 1),
(7, 'https://cdn-icons-png.flaticon.com/512/147/147144.png', 'cliente', 'cliente', '', 'cliente@zapax.com', '4983a0ab83ed86e0e7213c8783940193', 'Peru', 1141430021, 2),
(8, 'https://i.pinimg.com/236x/cf/c1/af/cfc1af3b5ab61b8da0065d0dace258cf.jpg', 'shoni', 'cori', '', 'shoni@zapax.com', 'ca9bba0fbf3444f8115cfacad8d166e6', 'Alemania', 1128628282, 2),
(9, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDtd0soCSRdpo8Y5klekJdABh4emG2P29jwg&usqp=CAU', 'cliente1', 'dada', '', 'cliente1@zapax.com', 'd5a8d8c7ab0514e2b8a2f98769281585', 'Germania', 1244424212, 2),
(10, 'https://img2.freepng.es/20180619/aqe/kisspng-computer-icons-avatar-user-profile-5b29a301bb4939.4658258415294553617671.jpg', 'cliente2', 'Brasil', '', 'cliente2@zapax.com', '6dcd0e14f89d67e397b9f52bb63f5570', 'Brasil', 234235632, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
