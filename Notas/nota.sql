-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2021 a las 23:56:07
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `nota`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
`id_alumno` int(11) NOT NULL,
  `ap_paterno` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ap_materno` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(100) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `ex_parcial` int(11) NOT NULL,
  `ex_final` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `ap_paterno`, `ap_materno`, `nombre`, `edad`, `sexo`, `ex_parcial`, `ex_final`) VALUES
(1, 'Delgado', 'Alfaro', 'Cesar Ivan', 22, 'masculino', 10, 7),
(2, 'Garcia', 'Maldonado', 'Perla Jacqueline', 21, 'femenino', 10, 10),
(3, 'Delgado', 'Ponce', 'Antonio', 53, 'masculino', 8, 9),
(4, 'Maldonado', 'Sierra', 'Ana Karina', 21, 'femenino', 10, 10),
(5, 'Gutierrez', 'Sanchez', 'Miguel', 22, 'masculino', 10, 10),
(6, 'Martinez', 'Nuñez', 'Ana', 21, 'femenino', 7, 8),
(7, 'Perez', 'Rosales', 'Maria', 22, 'femenino', 9, 8),
(8, 'Martinez', 'Perez', 'Mariana', 24, 'femenino', 7, 9),
(9, 'Rojas', 'Rosales', 'Rosa', 23, 'femenino', 9, 7),
(10, 'Juarez', 'Nuñez', 'Alan', 24, 'masculino', 8, 8),
(11, 'Santarosa', 'Rangel', 'Atziri', 24, 'femenino', 8, 6),
(12, 'Sandoval', 'Juarez', 'Fernando', 23, 'masculino', 9, 7),
(13, 'Gonzalez', 'Guzman', 'Karla', 22, 'femenino', 7, 7),
(14, 'Sanchez', 'Bonilla', 'Eduardo', 24, 'masculino', 8, 8),
(15, 'Garcia', 'Rincon', 'Layna', 24, 'femenino', 9, 6),
(16, 'Flores', 'Tavera', 'Leonid', 22, 'masculino', 8, 10),
(17, 'Zavala', 'Andrade', 'Michelle', 22, 'femenino', 9, 9),
(18, 'Gonzalez', 'Rojas', 'Christian', 23, 'masculino', 8, 9),
(19, 'Cuevas', 'Garcia', 'Cinthya', 23, 'femenino', 8, 6),
(20, 'Amezquita', 'Butanda', 'Juan', 24, 'masculino', 8, 10),
(21, 'Guapo', 'Mendieta', 'Paulina', 23, 'femenino', 10, 10),
(22, 'Palafox', 'Madrigal', 'Mauricio', 24, 'masculino', 9, 9),
(23, 'Roaro', 'Rico', 'Alejandra', 22, 'femenino', 10, 7),
(24, 'Ortega', 'Sanchez', 'Miguel', 21, 'masculino', 6, 6),
(25, 'Acosta', 'Dominguez', 'Estefania', 21, 'femenino', 6, 9),
(26, 'Yepez', 'Moreno', 'Mauricio', 22, 'masculino', 9, 5),
(27, 'Zarate', 'Vazquez', 'Juana', 24, 'femenino', 7, 10),
(28, 'Vargas', 'Aguayo', 'Carlos', 23, 'masculino', 9, 9),
(29, 'Calderon', 'Iñiguez', 'Melisa', 22, 'femenino', 6, 7),
(30, 'Rodruiguez', 'Hernandez', 'Marco', 23, 'masculino', 8, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE IF NOT EXISTS `t_usuario` (
`id_usuario` int(11) NOT NULL,
  `nombre_usu` varchar(50) NOT NULL,
  `password_usu` varchar(50) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`id_usuario`, `nombre_usu`, `password_usu`, `estado`) VALUES
(1, 'admin', '123', b'0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
