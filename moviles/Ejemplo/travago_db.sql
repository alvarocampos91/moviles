-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-04-2018 a las 09:14:52
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `travago_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `id_Candidato` int(9) NOT NULL AUTO_INCREMENT,
  `nombre_Candidato` varchar(40) NOT NULL,
  `direccion_Candidato` varchar(30) NOT NULL,
  `tel_Candidato` varchar(20) NOT NULL,
  `loggin_Candidato` varchar(15) NOT NULL,
  `password_Candidato` varchar(15) NOT NULL,
  PRIMARY KEY (`id_Candidato`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id_Candidato`, `nombre_Candidato`, `direccion_Candidato`, `tel_Candidato`, `loggin_Candidato`, `password_Candidato`) VALUES
(6, 'Gerardo San Martin Suarez', 'stevengerard211293@gmail.com', '2461061762', 'gerardosms', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `id_Cv` int(9) NOT NULL AUTO_INCREMENT,
  `nombreCV` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `edad` varchar(4) NOT NULL,
  `sexo` text NOT NULL,
  `civil` varchar(20) NOT NULL,
  `dircv` varchar(100) NOT NULL,
  `retribucion_Minima` varchar(10) NOT NULL,
  `tipo_Jornada` varchar(30) NOT NULL,
  `grado_Estudios` varchar(30) NOT NULL,
  `habilidades` varchar(90) NOT NULL,
  `fotografia` varchar(50) NOT NULL,
  `id_Candidato` int(9) NOT NULL,
  PRIMARY KEY (`id_Cv`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cv`
--

INSERT INTO `cv` (`id_Cv`, `nombreCV`, `correo`, `telefono`, `fecha`, `edad`, `sexo`, `civil`, `dircv`, `retribucion_Minima`, `tipo_Jornada`, `grado_Estudios`, `habilidades`, `fotografia`, `id_Candidato`) VALUES
(4, 'Gerardo San Martin Suarez', 'stevengerard211293@gmail.com', '2461061762', '2018-04-09', '765', 'Hombre', 'Soltero/a', 'Priva. Doroteo Sanchez 14', '12000', 'Matutino', 'Universidad', 'Desarrollador y Programador', '../fotos/1.png', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_Empresa` int(9) NOT NULL AUTO_INCREMENT,
  `nombre_Empresa` varchar(40) NOT NULL,
  `Nombre_J` varchar(80) NOT NULL,
  `direccion_Empresa` varchar(30) NOT NULL,
  `tel_Empresa` varchar(10) NOT NULL,
  `correo_Empresa` varchar(30) NOT NULL,
  `loggin_Empresa` varchar(15) NOT NULL,
  `password_Empresa` varchar(15) NOT NULL,
  PRIMARY KEY (`id_Empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_Empresa`, `nombre_Empresa`, `Nombre_J`, `direccion_Empresa`, `tel_Empresa`, `correo_Empresa`, `loggin_Empresa`, `password_Empresa`) VALUES
(4, 'Intel', 'Pablo', 'av insurgentes,cdmx', '01809999', 'intel@hotmail.com', 'intel', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluador`
--

DROP TABLE IF EXISTS `evaluador`;
CREATE TABLE IF NOT EXISTS `evaluador` (
  `id_Usuario` int(9) NOT NULL AUTO_INCREMENT,
  `tipo_Usuario` int(1) NOT NULL,
  `nombre_Usuario` varchar(40) NOT NULL,
  `direccion_Usuario` varchar(30) NOT NULL,
  `tel_Usuario` int(10) NOT NULL,
  `loggin_Usuario` varchar(15) NOT NULL,
  `password_Usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluador`
--

INSERT INTO `evaluador` (`id_Usuario`, `tipo_Usuario`, `nombre_Usuario`, `direccion_Usuario`, `tel_Usuario`, `loggin_Usuario`, `password_Usuario`) VALUES
(1, 0, 'evaluador', 'edf@gfd.com', 1800123456, 'evaluador', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_vacantes`
--

DROP TABLE IF EXISTS `solicitud_vacantes`;
CREATE TABLE IF NOT EXISTS `solicitud_vacantes` (
  `id_Solicitud` int(9) NOT NULL AUTO_INCREMENT,
  `id_Vacante` varchar(9) NOT NULL,
  `id_Candidato` varchar(9) NOT NULL,
  `id_Empresa` varchar(9) NOT NULL,
  PRIMARY KEY (`id_Solicitud`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud_vacantes`
--

INSERT INTO `solicitud_vacantes` (`id_Solicitud`, `id_Vacante`, `id_Candidato`, `id_Empresa`) VALUES
(2, '1', '6', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

DROP TABLE IF EXISTS `vacante`;
CREATE TABLE IF NOT EXISTS `vacante` (
  `id_Vacante` int(9) NOT NULL AUTO_INCREMENT,
  `vigente` int(1) NOT NULL DEFAULT '1',
  `nombre_Vacante` varchar(40) NOT NULL,
  `descripcion_Vacante` varchar(100) NOT NULL,
  `rango_Salarial` varchar(30) NOT NULL,
  `jornada` varchar(10) NOT NULL,
  `requisitos_Vacante` varchar(100) NOT NULL,
  `id_Empresa` int(9) NOT NULL,
  PRIMARY KEY (`id_Vacante`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`id_Vacante`, `vigente`, `nombre_Vacante`, `descripcion_Vacante`, `rango_Salarial`, `jornada`, `requisitos_Vacante`, `id_Empresa`) VALUES
(1, 1, 'Programador', 'Desarrollador y programador en Java', '$15000-$20000', '8 hra', 'lic. en sistemas o similares', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
