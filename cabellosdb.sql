-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2014 a las 09:59:54
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cabellosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `IdComentario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Comentario` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` date NOT NULL,
  `IdPost` int(11) NOT NULL,
  PRIMARY KEY (`IdComentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='tabla para los comentarios' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`IdComentario`, `Nombre`, `Email`, `Comentario`, `Fecha`, `IdPost`) VALUES
(1, 'Geovanny Rocha', 'georocha24@gmail.com', 'asdfasdfasdf', '2014-08-07', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `IdPost` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cuerpo` text COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`IdPost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`IdPost`, `Titulo`, `imagen`, `Cuerpo`, `Fecha`) VALUES
(3, 'PromociÃ³n de Verano II', '0.jpg', 'esta promocion consiste solo en ventas al por mayor. esto era el problema', '2014-08-07'),
(4, 'Aniversario', '10.jpg', 'estamos de aniversario', '2014-08-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla usuarios',
  `Usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Campo donde va el nombre del usuario ',
  `Contrasena` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'contraseña de la tabla usuarios',
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Usuario`, `Contrasena`) VALUES
(3, 'georocha', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'pochydi', '7cac11e2f46ed46c339ec3d569853759');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
