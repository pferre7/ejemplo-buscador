-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-04-2022 a las 13:41:31
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospedajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamentos`
--

DROP TABLE IF EXISTS `apartamentos`;
CREATE TABLE IF NOT EXISTS `apartamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `disponible` int(2) NOT NULL,
  `n_adultos` int(2) NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `apartamentos`
--

INSERT INTO `apartamentos` (`id`, `nombre`, `disponible`, `n_adultos`, `ciudad`, `provincia`) VALUES
(1, 'Bas Apartments', 1, 4, 'Eixample', 'Barcelona'),
(2, 'Apartamentos Benivistas', 1, 2, 'Gemelos 28', 'Benidorm'),
(3, 'Sud Ibiza Suites', 1, 6, 'Centro de Ibiza', 'Ibiza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

DROP TABLE IF EXISTS `hoteles`;
CREATE TABLE IF NOT EXISTS `hoteles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estrellas` int(2) NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`id`, `nombre`, `estrellas`, `ciudad`, `provincia`, `tipo`) VALUES
(3, 'Woohoo Suites', 5, 'Madrid', 'Madrid', 'Simple'),
(4, 'Ciudad del Fraile', 3, 'Cuenca', 'Cuenca', 'Doble'),
(5, 'Xauen', 3, 'Montanejos', 'Castellón de la Plana', 'Doble con vistas'),
(6, 'Al-Andalus Palace', 4, 'Sevilla', 'Sevilla', 'Simple con vistas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
