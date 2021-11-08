-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-11-2021 a las 05:42:15
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

DROP TABLE IF EXISTS `afiliados`;
CREATE TABLE IF NOT EXISTS `afiliados` (
  `Id_afiliados` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Empresa` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Contacto` varchar(15) NOT NULL,
  PRIMARY KEY (`Id_afiliados`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `afiliados`
--

INSERT INTO `afiliados` (`Id_afiliados`, `Nombre_Empresa`, `Usuario`, `Password`, `Direccion`, `Contacto`) VALUES
(1, 'Pollo Campero', 'pollo.campero', 'campero', 'PQ3M+RXC, San Salvador', '22736000'),
(2, 'Wendys', 'wendys.sv ', '123', 'Centro Comercial Metrocentro, Food Court, 8a Etapa, 3er Nivel, San Salvador', '2121 2222'),
(3, 'Pizza Hut', 'pizza.hut', '1234', 'Alameda Roosevelt, Centro Comercial Granada S.S RBD SALVADOR MUNDO', '2257 7777');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `Id_pedidos` int(11) NOT NULL AUTO_INCREMENT,
  `Id_producto` int(5) NOT NULL,
  `Id_usuario` int(5) NOT NULL,
  `Numero_de_trarjeta` int(50) NOT NULL,
  `Fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Codigo_de_seguridad` varchar(3) NOT NULL,
  PRIMARY KEY (`Id_pedidos`),
  KEY `Id_producto` (`Id_producto`),
  KEY `Id_usuario` (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `Id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `Id_afiliado` int(11) NOT NULL,
  `Img` varchar(500) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Precio` decimal(11,2) NOT NULL,
  PRIMARY KEY (`Id_producto`),
  KEY `Id_afiliado` (`Id_afiliado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_producto`, `Id_afiliado`, `Img`, `Nombre`, `Precio`) VALUES
(1, 1, 'Banquete_de_20_Camperitos_o_Alitas.png', 'Banquete de 20 Camperitos o Alitas', '14.95'),
(2, 2, 'Coca_Cola.jpg', 'Coca Cola', '0.65'),
(3, 1, 'pepsi.jpeg', 'Pepsi', '0.55'),
(4, 3, 'Pizza_hut.jfif', 'Pizza hut', '14.99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudempleo`
--

DROP TABLE IF EXISTS `solicitudempleo`;
CREATE TABLE IF NOT EXISTS `solicitudempleo` (
  `Id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Contacto` varchar(40) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `FechaNac` date NOT NULL,
  PRIMARY KEY (`Id_solicitud`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombre`, `Password`, `Correo`) VALUES
(1, 'SuperUsuario', 'admin', 'admin');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuarios` (`Id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_afiliado`) REFERENCES `afiliados` (`Id_afiliados`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
