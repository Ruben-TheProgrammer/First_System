-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2018 a las 17:28:02
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_combo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `name`, `pais_id`) VALUES
(1, 'Buenos Aires', 1),
(2, 'Cordova', 1),
(3, 'Santiago', 2),
(4, 'Puerto Moon', 2),
(5, 'Iquique', 2),
(6, 'Valparaiso', 2),
(7, 'Quito', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combo`
--

CREATE TABLE IF NOT EXISTS `combo` (
`id` int(11) NOT NULL,
  `continente_id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `ciudad_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `combo`
--

INSERT INTO `combo` (`id`, `continente_id`, `pais_id`, `ciudad_id`) VALUES
(1, 1, 2, 5),
(2, 1, 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `continente`
--

CREATE TABLE IF NOT EXISTS `continente` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `continente`
--

INSERT INTO `continente` (`id`, `name`) VALUES
(1, 'America'),
(2, 'Europa'),
(3, 'Africa'),
(4, 'Oceania'),
(5, 'Asia'),
(6, 'Antartida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `continente_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `name`, `continente_id`) VALUES
(1, 'Argentina', 1),
(2, 'Chile', 1),
(3, 'Ecuador', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
 ADD PRIMARY KEY (`id`), ADD KEY `pais_id` (`pais_id`);

--
-- Indices de la tabla `combo`
--
ALTER TABLE `combo`
 ADD PRIMARY KEY (`id`), ADD KEY `continente_id` (`continente_id`), ADD KEY `pais_id` (`pais_id`), ADD KEY `ciudad_id` (`ciudad_id`);

--
-- Indices de la tabla `continente`
--
ALTER TABLE `continente`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
 ADD PRIMARY KEY (`id`), ADD KEY `continente_id` (`continente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `combo`
--
ALTER TABLE `combo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `continente`
--
ALTER TABLE `continente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `combo`
--
ALTER TABLE `combo`
ADD CONSTRAINT `combo_ibfk_1` FOREIGN KEY (`continente_id`) REFERENCES `continente` (`id`),
ADD CONSTRAINT `combo_ibfk_2` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`),
ADD CONSTRAINT `combo_ibfk_3` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudad` (`id`);

--
-- Filtros para la tabla `pais`
--
ALTER TABLE `pais`
ADD CONSTRAINT `pais_ibfk_1` FOREIGN KEY (`continente_id`) REFERENCES `continente` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
