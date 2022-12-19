-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2022 a las 22:11:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `novaagro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_compra` int(100) NOT NULL,
  `nombre_cliente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_cliente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_cliente` int(30) NOT NULL,
  `cedula_cliente` int(30) NOT NULL,
  `metodo_pago` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_llegada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_compra`, `nombre_cliente`, `direccion_cliente`, `telefono_cliente`, `cedula_cliente`, `metodo_pago`, `fecha_llegada`) VALUES
(1, 'Carlos Steven Lopez Montaño', 'kr 32 #10a 77', 2147483647, 1007320099, 'Efectivo', '2022-10-28 17:00:00'),
(2, 'borar', '2o1o1', 4412412, 1924912, '124124', '2022-10-28 01:49:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(100) NOT NULL,
  `id_compra` int(100) NOT NULL,
  `nombre_producto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_producto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `cedula_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_compra`, `nombre_producto`, `cantidad_producto`, `precio_producto`, `cedula_cliente`) VALUES
(1, 10, 'Papa sabanera', '12kg', 50000, 1007320022),
(2, 11, 'Arroz', '2 paquetes', 50000, 1007320022);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `cedula_cliente` (`cedula_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `cedula_cliente` (`cedula_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_compra` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_compra` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
