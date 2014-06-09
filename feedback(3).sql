-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2014 a las 21:27:41
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `feedback`
--
CREATE DATABASE IF NOT EXISTS `feedback` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `feedback`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofrece`
--

DROP TABLE IF EXISTS `ofrece`;
CREATE TABLE IF NOT EXISTS `ofrece` (
  `id_usuario` int(20) NOT NULL,
  `descripcionCorta` varchar(250) NOT NULL,
  `descripcionLarga` mediumtext NOT NULL,
  `id_servicio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ofrece`
--

INSERT INTO `ofrece` (`id_usuario`, `descripcionCorta`, `descripcionLarga`, `id_servicio`) VALUES
(1, 'ksdfkk', 'kdjfkjelejrklewjrljelk', 1),
(7, 'doy clases', 'doy muchas muchas clases', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

DROP TABLE IF EXISTS `sector`;
CREATE TABLE IF NOT EXISTS `sector` (
  `id_sector` int(11) NOT NULL AUTO_INCREMENT,
  `nomsector` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_sector`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id_sector`, `nomsector`) VALUES
(1, 'educación'),
(2, 'sanidad'),
(3, 'limpieza'),
(4, 'tecnologia'),
(5, 'hogar'),
(6, 'moda y belleza'),
(7, 'animales'),
(8, 'vehículos'),
(9, 'inmobiliaria'),
(10, 'deportes'),
(11, 'ocio'),
(12, 'niños y bebés'),
(13, 'gestiones'),
(14, 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `id_sector` int(11) NOT NULL,
  `sector` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nomservicio` varchar(60) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `id_sector`, `sector`, `nomservicio`, `foto`) VALUES
(1, 1, 'educación', 'clases particulares', 'clasesparticulares.jpeg'),
(2, 1, 'educación', 'apoyo asignaturas', 'apoyoasignaturas.jpg'),
(3, 1, 'educación', 'idiomas', 'idiomas.jpg'),
(4, 2, 'sanidad', 'cuidados a domicilio', 'cuidadoadomicilio.gif'),
(5, 2, 'sanidad', 'atención médica', 'atencionmedica.jpg'),
(6, 2, 'sanidad', 'tratamientos', 'tratamientos.jpg'),
(7, 3, 'limpieza', 'limpieza de empresas', 'limpiezadeempresas.jpg'),
(8, 3, 'limpieza', 'limpieza de hogar', 'limpiezadehogar.png'),
(9, 4, 'tecnología', 'electrónica', 'electronica.jpg'),
(10, 4, 'tecnología', 'informática', 'informatica.jpg'),
(11, 4, 'tecnología', 'teléfonos', 'telefonos.jpg'),
(13, 5, 'hogar', 'muebles', 'muebles.jpg'),
(14, 5, 'hogar', 'bricolaje', 'bricolaje.jpg'),
(15, 5, 'hogar', 'decoración', 'decoracion.jpg'),
(16, 6, 'moda y belleza', 'estética', 'estetica.jpg'),
(17, 6, 'moda y belleza', 'peluquería', 'peluqueria.jpg'),
(18, 6, 'moda y belleza', 'asesoramiento', 'asesoramiento.jpg'),
(19, 7, 'animales', 'paseo de perros', 'paseadorperros.jpg'),
(20, 7, 'animales', 'cuidado', 'cuidadoanimales.jpg'),
(21, 7, 'animales', 'tratamientos', 'tratamientoanimales.jpg'),
(22, 8, 'vehículos', 'reparación', 'reparacionvehiculo.jpg'),
(23, 8, 'vehículos', 'revisión', 'revisionvehiculo.jpg'),
(24, 9, 'inmobiliaria', 'intercambio', 'inmobiliaria.jpg'),
(25, 10, 'deportes', 'clases', 'deportes.jpg'),
(26, 10, 'deportes', 'personal trainner', 'personaltrainer.jpg'),
(27, 11, 'ocio', 'entradas', 'entradas.jpg'),
(28, 11, 'ocio', 'guía turístico', 'guiaturistico.jpg'),
(29, 12, 'niños y bebés', 'cuidado', 'cuidadoninos.jpg'),
(30, 12, 'niños y bebés', 'asesoramiento', 'asesoramientoninos.jpg'),
(31, 13, 'gestiones', 'declaraciones', 'gestiones.jpg'),
(32, 13, 'gestiones', 'bolsa', ''),
(33, 13, 'gestiones', 'representación legal', ''),
(34, 13, 'gestiones', 'consultas legales', ''),
(35, 14, 'otros', 'otros', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `alias` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `provincia` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fecha_nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `profesion` varchar(250) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `alias`, `nombre`, `apellidos`, `provincia`, `email`, `sexo`, `pass`, `fecha_nacimiento`, `profesion`, `foto`) VALUES
(1, 'maria', 'MariaSu', 'Alvarez', 'Álava', 'maria.sitelicon@gmail.com', 'mujer', 'e10adc3949ba59abbe56e057f20f883e', '2014-06-08 16:07:37', 'MariaSu', 'maria.jpg'),
(5, '', '', '', '', 'YO@TU.ES', '', '', '0000-00-00 00:00:00', '', ''),
(6, 'olaa', 'rethae', 'efv', 'null', 'ju@js.es', 'mujer', 'a686ea7cb4b5081eaed555ff2c496d0e', '0000-00-00 00:00:00', 'aetrhverf', ''),
(7, 'esther', 'Esther', 'Sanchez', 'Álava', 'je@hg.es', 'mujer', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', 'Enfermera', ''),
(8, 'hege', 'sdvw', 'wdvw', 'null', 'ho@ja.es', 'hombre', '7c1684f4af1ee7a74b667f372f2435f3', '2014-04-14 22:00:00', 'sdvwedrv', ''),
(9, 'Mar', 'Maria', 'Alvarez', 'Cuenca', 'maria.sitelicon@gmail.com', 'mujer', 'e10adc3949ba59abbe56e057f20f883e', '2014-05-13 22:00:00', 'Enfermeria', ''),
(10, 'MaAl', 'maria', 'alvarez', 'Ciudad Real', 'maria.sitelicon@gmail.com', 'mujer', 'e10adc3949ba59abbe56e057f20f883e', '2014-05-08 22:00:00', 'Desarrollo', ''),
(11, 'casa', 'Maria', 'Alvarez', 'Ciudad Real', 'maria.sitelicon@gmail.com', 'mujer', 'e10adc3949ba59abbe56e057f20f883e', '2014-05-04 22:00:00', 'Desarrollo', ''),
(12, 'lasd', 'asljhd', 'dsg', 'Álava', 'maria.sitelicon@gmail.com', 'mujer', '202cb962ac59075b964b07152d234b70', '2014-06-04 11:14:19', 'afha', ''),
(13, 'dha', 'dsg', 'sdgs', 'Ceuta', 'maria.sitelicon@gmail.com', 'mujer', '7815696ecbf1c96e6894b779456d330e', '2014-05-13 22:00:00', 'ssdg', ''),
(14, 'srg', 'sdghe', 'trhH', 'Castellón', 'maria.sitelicon@gmail.com', 'mujer', '7815696ecbf1c96e6894b779456d330e', '2014-05-13 22:00:00', 'reh', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
