-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2023 a las 09:06:46
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(9) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `tema` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `apellido`, `tema`) VALUES
(1, 'nombre', 'apellido', 'tema'),
(2, '', 'Barrera', 'ghfhsfa'),
(3, 'Virginia ', 'Barrera', 'ghfhsfa'),
(4, 'Virginia ', 'Barrera', 'kkk'),
(5, 'Virginia ', 'Barrera', 'kkk'),
(6, 'Virginia ', 'Barrera', 'kkk'),
(7, 'Virginia ', 'Barrera', 'kkk'),
(8, 'Virginia ', 'Barrera', 'kkk'),
(9, 'Virginia ', 'Barrera', 'kkk'),
(10, 'Virginia ', 'Barrera', 'kkk'),
(11, 'Virginia ', 'Barrera', 'kkk'),
(12, 'Virginia ', 'Barrera', 'kkk'),
(13, 'alicia', 'REY', 'fabulas'),
(14, 'alicia', 'REY', 'fabulas'),
(15, 'alicia', 'REY', 'fabulas'),
(16, 'vir', 'REY', 'orugas'),
(17, 'vir', 'REY', 'orugas'),
(18, 'vir', 'REY', 'orugas'),
(19, 'alicia', 'Barrera', 'humedad'),
(20, 'alicia', 'Barrera', 'humedad'),
(21, 'alicia', 'Barrera', 'humedad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
