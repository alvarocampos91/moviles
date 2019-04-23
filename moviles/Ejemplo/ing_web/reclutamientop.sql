-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 02:32:19
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reclutamientop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `id_Candidato` int(9) NOT NULL,
  `nombre_Candidato` varchar(40) NOT NULL,
  `direccion_Candidato` varchar(30) NOT NULL,
  `tel_Candidato` varchar(10) NOT NULL,
  `loggin_Candidato` varchar(15) NOT NULL,
  `password_Candidato` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id_Candidato`, `nombre_Candidato`, `direccion_Candidato`, `tel_Candidato`, `loggin_Candidato`, `password_Candidato`) VALUES
(2, 'Aldair', 'aldoramm@gmail.com', '5519635617', 'Aldit95', '12345'),
(3, 'Abiam Rai Tapia', 'raitapia1502@gmail.com', '7351353275', 'rai15', '23456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv`
--

CREATE TABLE `cv` (
  `id_Cv` int(9) NOT NULL,
  `nombreCV` varchar(40) NOT NULL,
  `edad` varchar(4) NOT NULL,
  `sexo` text NOT NULL,
  `dircv` varchar(100) NOT NULL,
  `retribucion_Minima` varchar(10) NOT NULL,
  `tipo_Jornada` varchar(30) NOT NULL,
  `grado_Estudios` varchar(30) NOT NULL,
  `habilidades` varchar(90) NOT NULL,
  `fotografia` varchar(50) NOT NULL,
  `id_Candidato` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cv`
--

INSERT INTO `cv` (`id_Cv`, `nombreCV`, `edad`, `sexo`, `dircv`, `retribucion_Minima`, `tipo_Jornada`, `grado_Estudios`, `habilidades`, `fotografia`, `id_Candidato`) VALUES
(3, 'Abiam Rai Tapia Romero', '22', 'Hombre', 'Emiliano Zapata #9', '$10,000', 'Matutino', 'universidad', 'Hola', '../fotos/goku.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_Empresa` int(9) NOT NULL,
  `nombre_Empresa` varchar(40) NOT NULL,
  `Nombre_J` varchar(80) NOT NULL,
  `direccion_Empresa` varchar(30) NOT NULL,
  `tel_Empresa` varchar(10) NOT NULL,
  `correo_Empresa` varchar(30) NOT NULL,
  `loggin_Empresa` varchar(15) NOT NULL,
  `password_Empresa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_Empresa`, `nombre_Empresa`, `Nombre_J`, `direccion_Empresa`, `tel_Empresa`, `correo_Empresa`, `loggin_Empresa`, `password_Empresa`) VALUES
(4, 'Intel', 'Pablo', 'av insurgentes,cdmx', '0180999', 'intel@hotmail.com', 'intelsystem', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_vacantes`
--

CREATE TABLE `solicitud_vacantes` (
  `id_Solicitud` int(9) NOT NULL,
  `fecha_Solicitud` date NOT NULL,
  `id_Vacante` int(9) NOT NULL,
  `id_Candidato` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_er`
--

CREATE TABLE `usuario_er` (
  `id_Usuario` int(9) NOT NULL,
  `tipo_Usuario` int(1) NOT NULL,
  `nombre_Usuario` varchar(40) NOT NULL,
  `direccion_Usuario` varchar(30) NOT NULL,
  `tel_Usuario` int(10) NOT NULL,
  `loggin_Usuario` varchar(15) NOT NULL,
  `password_Usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `id_Vacante` int(9) NOT NULL,
  `vigente` int(1) NOT NULL DEFAULT '1',
  `nombre_Vacante` varchar(40) NOT NULL,
  `descripcion_Vacante` varchar(100) NOT NULL,
  `rango_Salarial` varchar(10) NOT NULL,
  `jornada` varchar(10) NOT NULL,
  `requisitos_Vacante` varchar(100) NOT NULL,
  `id_Empresa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`id_Vacante`, `vigente`, `nombre_Vacante`, `descripcion_Vacante`, `rango_Salarial`, `jornada`, `requisitos_Vacante`, `id_Empresa`) VALUES
(4, 1, 'Programador', 'Programar Tarjetas Intel Galileo', '$15,000', '8 hrs', 'Lic. en computacion o Afines', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id_Candidato`);

--
-- Indices de la tabla `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id_Cv`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_Empresa`);

--
-- Indices de la tabla `solicitud_vacantes`
--
ALTER TABLE `solicitud_vacantes`
  ADD PRIMARY KEY (`id_Solicitud`);

--
-- Indices de la tabla `usuario_er`
--
ALTER TABLE `usuario_er`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`id_Vacante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id_Candidato` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cv`
--
ALTER TABLE `cv`
  MODIFY `id_Cv` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_Empresa` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `solicitud_vacantes`
--
ALTER TABLE `solicitud_vacantes`
  MODIFY `id_Solicitud` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario_er`
--
ALTER TABLE `usuario_er`
  MODIFY `id_Usuario` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vacante`
--
ALTER TABLE `vacante`
  MODIFY `id_Vacante` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
