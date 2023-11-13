-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 22:42:42
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

CREATE TABLE `tm_producto` (
  `prodid` int(11) NOT NULL,
  `prodnom` varchar(150) NOT NULL,
  `proddesc` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL,
  `fechamod` datetime DEFAULT NULL,
  `fechaelim` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_producto`
--

INSERT INTO `tm_producto` (`prodid`, `prodnom`, `proddesc`, `fecha`, `fechamod`, `fechaelim`, `estado`) VALUES
(1, 'Auricular', 'Ninguna', '2023-11-12 02:02:58', NULL, NULL, 1),
(2, 'Mouse', 'Ninguna', '2023-11-12 09:03:40', NULL, NULL, 1),
(3, 'Teclado', 'Ninguna', '2023-11-12 09:04:00', NULL, '2023-11-13 01:42:15', 0),
(4, 'Monitor', 'Ninguna', '2023-11-12 10:06:03', NULL, NULL, 1),
(5, 'test', 'Ninguna', '2023-11-13 02:09:54', NULL, '2023-11-13 02:10:14', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD PRIMARY KEY (`prodid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  MODIFY `prodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
