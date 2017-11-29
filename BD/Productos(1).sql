-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2017 a las 08:37:39
-- Versión del servidor: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iluminacion`
--

CREATE TABLE `iluminacion` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `iluminacion`
--

INSERT INTO `iluminacion` (`Id`, `Descripcion`, `tipo`) VALUES
(0, '', ''),
(1, 'Twist 575 16ch', 'Robotica'),
(2, 'clypacky1000', 'Robotica'),
(3, 'mac300', 'Robotica'),
(4, 'mac quantum wash', 'Robotica'),
(5, 'IMG 200 scanner', 'Robotica'),
(6, 'rush mh5 75w', 'Robotica'),
(7, 'PAR65', 'FOCO'),
(8, 'PAR64', 'FOCO'),
(9, 'PURELITE RGBW PAR64', 'FOCO'),
(10, 'EUROLITE FOG 3000', 'MaqHumo'),
(11, 'IMG cambiaCOlor', 'Foco'),
(12, 'IMG', 'Robotica'),
(13, 'ClyPacky2000', 'Robotica'),
(55, 'sdfasdf', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sonido`
--

CREATE TABLE `sonido` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sonido`
--

INSERT INTO `sonido` (`Id`, `Descripcion`, `tipo`) VALUES
(1, 'asd1000W', 'AutoAmplif'),
(2, 'JBL Serie 500', 'AutoAmplif'),
(3, 'AVL250', 'AutoAmplif'),
(4, 'Allen & Heat', 'MesaSonido'),
(5, 'Yamaha 560', 'ConEtapa'),
(6, 'bombox100', 'MesaSonido'),
(7, 'Beringher', 'Autoamplif'),
(20, 'Beringher', 'Autoamplif'),
(22, 'fffff', 'fffff');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iluminacion`
--
ALTER TABLE `iluminacion`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `sonido`
--
ALTER TABLE `sonido`
  ADD PRIMARY KEY (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
