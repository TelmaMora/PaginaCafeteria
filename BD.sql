-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 04-12-2019 a las 13:41:03
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `cafeteria`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `comentarios`
-- 

CREATE TABLE `comentarios` (
  `idComentario` int(3) NOT NULL auto_increment,
  `nombre` varchar(60) collate latin1_bin NOT NULL,
  `email` varchar(60) collate latin1_bin NOT NULL,
  `asunto` varchar(60) collate latin1_bin NOT NULL,
  `comentario` varchar(120) collate latin1_bin default NULL,
  PRIMARY KEY  (`idComentario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `comentarios`
-- 

INSERT INTO `comentarios` VALUES (1, 0x74656c6d61, 0x79617279747a7937363540676d61696c2e636f6d, 0x6a676775696f, 0x67686a6b6b6b6b6b);
INSERT INTO `comentarios` VALUES (2, 0x74656c6d61, 0x79617279747a7937363540676d61696c2e636f6d, 0x52545955494a4b4cc383e28098, 0x67686a6b6cc383c2b16f69757974676667);
INSERT INTO `comentarios` VALUES (3, 0x74656c6d61, 0x79617279747a7937363540676d61696c2e636f6d, 0x52545955494a4b4cc383e28098, 0x67686a6b6cc383c2b16f69757974676667);
INSERT INTO `comentarios` VALUES (4, 0x47484a4b494c, 0x67686a6b40676d61696c2e636f6d, 0x52545955494a4b4cc383e28098, 0x6b6a6867686a6b6c6b6a);
INSERT INTO `comentarios` VALUES (5, 0x47484a4b494c, 0x67686a6b40676d61696c2e636f6d, 0x52545955494a4b4cc383e28098, 0x6b6a6867686a6b6c6b6a);
INSERT INTO `comentarios` VALUES (6, 0xc383c2b1706c6f6b6a6766646c736c6b, 0x69747a792d303740686f746d61696c2e636f6d, 0x69757967686a6b6c706f69757974, 0x6f697579746667686a6b6f706f69756867);
INSERT INTO `comentarios` VALUES (7, 0xc383c2b1706c6f6b6a6766646c736c6b, 0x69747a792d303740686f746d61696c2e636f6d, 0x69757967686a6b6c706f69757974, 0x6f697579746667686a6b6f706f69756867);
INSERT INTO `comentarios` VALUES (8, 0x6c6b696a6868676a6b6cc383c2b1, 0x67686a6b6c6f6b6a6240686a6473616b6a2e636f6d, 0x706f697579666767686a6b6b697579, 0x677968756a696f706975676663);
INSERT INTO `comentarios` VALUES (9, 0x6c6b696a6868676a6b6cc383c2b1, 0x67686a6b6c6f6b6a6240686a6473616b6a2e636f6d, 0x706f697579666767686a6b6b697579, 0x677968756a696f706975676663);
INSERT INTO `comentarios` VALUES (10, 0x7361, 0x736140736173612e636f6d, 0x7361, 0x73617361);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `reservas`
-- 

CREATE TABLE `reservas` (
  `idreserva` int(11) NOT NULL auto_increment,
  `nombrecliente` varchar(150) NOT NULL,
  `cantidadpersonas` varchar(150) NOT NULL,
  `telefono` varchar(150) NOT NULL,
  `diallegada` date NOT NULL,
  `horallegada` text NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY  (`idreserva`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- 
-- Volcar la base de datos para la tabla `reservas`
-- 

INSERT INTO `reservas` VALUES (3, 'CARLOS ALVARES', '12', '12345678', '2017-01-24', '21:00', 'LIBRE MESA');
INSERT INTO `reservas` VALUES (22, 'telma', '1', '7654321', '2019-11-30', '20:00', 'Sin Restricciones');
INSERT INTO `reservas` VALUES (23, 'fghjkl', '2', '34567890', '2019-12-01', '20:00', 'Sin Restricciones');
INSERT INTO `reservas` VALUES (24, 'fghjkl', '2', '34567890', '2019-12-01', '20:00', 'Sin Restricciones');
INSERT INTO `reservas` VALUES (25, 'hghbjndks', '5', '3456789', '2019-12-12', '19:00', 'Sin Restricciones');
INSERT INTO `reservas` VALUES (26, 'hghbjndks', '5', '3456789', '2019-12-12', '19:00', 'Sin Restricciones');
INSERT INTO `reservas` VALUES (27, 'hghbjndks', '5', '3456789', '2019-12-12', '19:00', 'Sin Restricciones');
INSERT INTO `reservas` VALUES (28, 'telma', '2', '1234567890', '2019-12-05', '13:00', 'Mesa junto a la ventana');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL auto_increment,
  `nombreusuario` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fechacreado` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'administrador', '1234', '2016-12-21 21:59:29');
INSERT INTO `usuarios` VALUES (2, 'TOMAS12', '1234', '2017-01-23 22:47:34');
INSERT INTO `usuarios` VALUES (3, 'BIANCA', '1234BIANCA', '2017-01-23 22:53:00');

-- 
-- Estructura de tabla para la tabla `banner`
-- 

CREATE TABLE `banner` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `orden` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `banner`
-- 

INSERT INTO `banner` VALUES (1, 'efghj', 'fghjk', 'CHOCOLATE.png', 1, 1);
INSERT INTO `banner` VALUES (2, 'ICE CAPUCCINO', '234rthj,mn', 'CAFE_IRLANDES.png', 1, 2);
INSERT INTO `banner` VALUES (3, 'MOKA', 'cfvgbhnjm,', 'CAFE_SHAKE.png', 1, 3);

