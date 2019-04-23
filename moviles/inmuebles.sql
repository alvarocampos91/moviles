-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2018 a las 05:44:38
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmuebles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `id_casa` int(100) NOT NULL,
  `direccion_c` varchar(50) NOT NULL,
  `no_cuartos_c` int(50) NOT NULL,
  `no_pisos_c` int(50) NOT NULL,
  `precio_c` double NOT NULL,
  `telefono_c` varchar(20) NOT NULL,
  `correo_c` varchar(20) NOT NULL,
  `latitud_c` double NOT NULL,
  `longitud_c` double NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id_casa`, `direccion_c`, `no_cuartos_c`, `no_pisos_c`, `precio_c`, `telefono_c`, `correo_c`, `latitud_c`, `longitud_c`, `tipo`) VALUES
(1, 'avenida 9b norte no 1089', 3, 1, 1127527, '2887556', 'godofmau@gmail.com', 19.084233, -98.184158, 'departamento'),
(2, '1era central edif. b dep D', 4, 1, 999999999, '6398402', 'rankuth@gmail.com', 19.046468, -98.189973, 'departamento'),
(3, '20 poniente 308 dep 2', 5, 1, 1000000000, '2324696', 'godofmau@gmail.com', 19.053296, -98.196427, 'casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `curp` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `name`, `email`, `curp`, `calle`, `colonia`, `estado`, `pais`, `telefono`, `login`, `password`) VALUES
(1, 'Esc.deJurisprudenciayHumanidad', 'dethmau.ws@gmail.com', '201214125ABMU', 'Avenida 18 Poniente No.1921, Maestro Federal', 'centro', 'Puebla*', 'MÃ©xico', '0442226268', 'dethmau', '123456'),
(2, 'Mauricio Uriel Aldana', 'dethmau@gmail.com', '201410125ABMU', '20 Poniente No.1921, Maestro Federal', 'centro', 'Puebla*', 'MÃ©xico', '0442226268', 'darkmau', '020296'),
(3, 'Luis Hernandez Ramirez', 'rankuth@gmail.com', '201218946LAHR', 'Avenida 18 Poniente No.1921, Maestro Federal', 'centro', 'Puebla*', 'MÃ©xico', '2222324696', 'rankuth', '2887556');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`id_casa`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casas`
--
ALTER TABLE `casas`
  MODIFY `id_casa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
