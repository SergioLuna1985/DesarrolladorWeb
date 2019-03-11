-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2019 a las 00:59:19
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cerveceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProductos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `idUsuario`, `idProductos`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estilo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `presentacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `carrito` int(1) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `estilo`, `cantidad`, `tipo`, `presentacion`, `precio`, `imagen`, `carrito`, `stock`) VALUES
(1, 'Heineken', 'Rubia', '1Lt', 'Botella', 'Unidad', 104, 'imagenes/heineken1lt.jpg', 0, 2),
(2, 'Andes', 'Rubia', '1Lt', 'Botella', 'Unidad', 85, 'imagenes/andes1lt.jpg', 0, 2),
(3, 'Amstel', 'Rubia', '1Lt', 'Botella', 'Unidad', 95.5, 'imagenes/amstel1lt.jpg', 0, 2),
(4, 'Miller', 'Rubia', '1Lt', 'Botella', 'Unidad', 135.5, 'imagenes/miller1lt.jpg', 0, 1),
(5, 'Iguana', 'Rubia', '1Lt', 'Botella', 'Unidad', 58, 'imagenes/iguana1lt.jpg', 0, 1),
(6, 'Schneider', 'Rubia', '1Lt', 'Botella', 'Unidad', 68, 'imagenes/schneider1lt.jpg', 0, 1),
(7, 'Warsteiner', 'Rubia', '1Lt', 'Botella', 'Unidad', 107, 'imagenes/warsteiner1lt.jpg', 0, 1),
(8, 'Quilmes', 'Rubia', '1Lt', 'Botella', 'Unidad', 60, 'imagenes/quilmes1lt.jpg', 0, 1),
(9, 'Imperial', 'Rubia', '1Lt', 'Botella', 'Unidad', 82, 'imagenes/imperial1lt.jpg', 0, 1),
(10, 'Budweiser', 'Rubia', '1Lt', 'Botella', 'Unidad', 104, 'imagenes/budweiser1lt.jpg', 0, 1),
(11, 'Schneider', 'Rubia', '355cc', 'Lata', 'Pack x 6 unidades', 158.75, 'imagenes/schneiderLata.jpg', 0, 1),
(12, 'Stela Artois', 'Rubia', '473cc', 'Lata', 'Pack x 6 unidades', 337, 'imagenes/estelaArtoisLata.jpg', 0, 3),
(13, 'Andes', 'Negra', '473cc', 'Lata', 'Pack x 6 unidades', 278.76, 'imagenes/andesNegraLata.jpg', 0, 1),
(14, 'Andes', 'Rubia', '473cc', 'Lata', 'Pack x 6 unidades', 279, 'imagenes/andesRubiaLata.jpg', 0, 1),
(15, 'Budweiser', 'Rubia', '355cc', 'Lata', 'Pack x 6 unidades', 132.6, 'imagenes/budweiserLata.jpg', 0, 1),
(16, 'Imperial', 'Rubia', '473cc', 'Lata', 'Pack x 6 unidades', 247.5, 'imagenes/imperialLata.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cp` varchar(6) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `email`, `telefono`, `direccion`, `ciudad`, `cp`) VALUES
(1, 'sergio', 'ser', 'hola', 'luna.sergio.omar@gmail.com', '1154504308', 'arregui 2540', 'villa del parque', '1417');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idProductos` (`idProductos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_productos` FOREIGN KEY (`idProductos`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `fk_compra_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
