-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-03-2016 a las 10:33:26
-- Versión del servidor: 5.5.48-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cafeagui_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `ID_CATEGORIA` bigint(20) NOT NULL AUTO_INCREMENT,
  `NOMBRE_CATEGORIA` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_CATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaxentrada`
--

CREATE TABLE IF NOT EXISTS `categoriaxentrada` (
  `ID_CATEGORIAXENTRADA` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_CATEGORIA` bigint(20) DEFAULT NULL,
  `ID_ENTRADA` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ID_CATEGORIAXENTRADA`),
  KEY `FK_REFERENCE_7` (`ID_CATEGORIA`),
  KEY `FK_REFERENCE_8` (`ID_ENTRADA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `ID_COMENTARIO` bigint(20) NOT NULL AUTO_INCREMENT,
  `ENTRADA_ID` bigint(20) DEFAULT NULL,
  `ID_USUARIO` bigint(20) DEFAULT NULL,
  `autor` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `TEXTO_COMENTARIO` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_COMENTARIO`),
  KEY `FK_REFERENCE_3` (`ENTRADA_ID`),
  KEY `FK_REFERENCE_4` (`ID_USUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4610 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ID_COMENTARIO`, `ENTRADA_ID`, `ID_USUARIO`, `autor`, `email`, `TEXTO_COMENTARIO`, `fecha`, `ip`) VALUES
(1, 3, 1, 'Jacquelin', 'jmarty_2010@hotmail.com', 'Buenasssoo...!\r\n', '2015-08-03 15:36:11', '181.64.208.6'),
(4606, 4, 1, 'Luis Mario Gutierrez Marmolejo', 'lguti13@hotmail.com', 'Hace anos consumo el cafe aguila roja,ahora mi preferido es el cafe instantaneo granulado el de la etiqueta roja,ojala fuera mas fuertecito\r\n\r\nSaludos.\r\n\r\nLuis Mario', '2015-10-04 00:51:17', '181.52.208.226'),
(4607, 16, 1, 'nadigme', 'nadigme@yahoo.es', 'me en canta todo lo relacionado sobre las \r\nbebidas de nuestro café colombiano', '2015-10-20 19:03:07', '190.9.193.178'),
(4608, 9, 1, '3NUPVHM7IOxX', '9s7b0bm393@mail.com', 'Wonderful story, reckoned we could conbime a number of unrelated data, nonetheless seriously worth taking a look, whoa did 1 find out about Mid East has got extra problerms too', '2016-02-27 17:26:18', '128.204.195.10'),
(4609, 7, 1, 'rMxaAEjh', '6ltltvup@hotmail.com', 'The Ships''s Voyages I believe tgionolheces just can make it even worse. Now there''s a channel to in no way treatment, now there would not be considered a possibility for them to find .', '2016-02-27 17:50:54', '193.201.170.10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE IF NOT EXISTS `entradas` (
  `ID_ENTRADA` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` bigint(20) DEFAULT NULL,
  `FECHA_ENTRADA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FECHACREACION_ENTRADA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `NOMBRE_ENTRADA` varchar(500) NOT NULL,
  `DESCRIPCIONCORTA_ENTRADA` varchar(1000) NOT NULL,
  `DESCRIPCIONLARGA_ENTRADA` text NOT NULL,
  `FOTO1_ENTRADA` varchar(500) NOT NULL,
  `FOTO2_ENTRADA` varchar(500) NOT NULL,
  `FOTO_FULL` varchar(500) NOT NULL,
  `CANTIDADPERSONAS_ENTRADA` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_ENTRADA`),
  KEY `FK_REFERENCE_2` (`ID_USUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`ID_ENTRADA`, `ID_USUARIO`, `FECHA_ENTRADA`, `FECHACREACION_ENTRADA`, `NOMBRE_ENTRADA`, `DESCRIPCIONCORTA_ENTRADA`, `DESCRIPCIONLARGA_ENTRADA`, `FOTO1_ENTRADA`, `FOTO2_ENTRADA`, `FOTO_FULL`, `CANTIDADPERSONAS_ENTRADA`, `slug`) VALUES
(3, 1, '2015-10-04 19:12:34', '0000-00-00 00:00:00', 'CAFÉ CAPPUCCINO', 'Verter en la licuadora el café y la leche en polvo, batir por 30 segundos saborizar al gusto con una pizca de cocoa, vainilla o licor (opcional)', '<p>2 tazas de Caf&eacute; &Aacute;guila Roja medianamente fuerte (1&frac12; cucharadas razas de caf&eacute; por cada taza de agua).</p>\n<p>&nbsp;2 cucharadas de leche en polvo.</p>\n<p>&nbsp;Az&uacute;car al gusto.</p>\n<p>&nbsp;Cocoa, vainilla o licor (opcional).</p>\n<p>Verter en la licuadora el caf&eacute; y la leche en polvo, batir por 30 segundos saborizar al gusto con una pizca de cocoa, vainilla o licor (opcional).</p>\n<p>S&iacute;rvalo y disfr&uacute;telo inmediatamente.</p>', 'capuccino-1128x240.jpg', 'capuccino-743x260.jpg', 'capuccino-full.jpg', 2, 'CAFÉ-CAPUCCINO'),
(4, 1, '2015-05-28 15:36:39', '0000-00-00 00:00:00', 'CAFÉ MOKA', 'Colocar el café recién preparado en cada taza. Licuar aparte la leche caliente (sin hervir) con el chocolate y la leche en polvo. Adicionar la mezcla sobre el café.', '<p>1 taza de Caf&eacute; &Aacute;guila Roja fuerte (3 cucharadas razas de caf&eacute; por cada taza de agua).</p>\r\n<p>&nbsp;1 cucharadita de chocolate instant&aacute;neo o cocoa en polvo.</p>\r\n<p>&nbsp;2 tazas de leche.</p>\r\n<p>&nbsp;1cdta de leche en polvo.</p>\r\n<p>&nbsp;&frac12; taza de crema de leche batida.</p>\r\n<p>&nbsp;gotas de chocolate derretido.</p>\r\n<p>&nbsp;Az&uacute;car al gusto.</p>\r\n<p>Colocar el caf&eacute; reci&eacute;n preparado en cada taza. Licuar aparte la leche caliente (sin hervir) con el chocolate y la leche en polvo. Adicionar la mezcla sobre el caf&eacute;.</p>\r\n<p>S&iacute;rvalo decorado con las gotas de chocolate y disfr&uacute;telo inmediatamente.</p>', 'mocca-1128x240.jpg', 'mocca-743x260.jpg', 'mocca-full.jpg', 2, 'CAFÉ-MOKA'),
(5, 1, '2015-05-28 15:37:31', '0000-00-00 00:00:00', 'CAFÉ MIX', 'Mezcle el ron, el jugo y el Café Águila Roja y vierta en una coctelera con cubos de hielo. Aparte, vierta la leche de coco y la crema en un recipiente y bata hasta que se torne espumoso', '<p>1 taza de ron.</p>\r\n<p>&nbsp;3 tazas de jugo de pi&ntilde;a sin az&uacute;car.</p>\r\n<p>&nbsp;4 cucharadas de caf&eacute; &Aacute;guila Roja instant&aacute;neo.</p>\r\n<p>&nbsp;12 cucharadas de leche de coco.</p>\r\n<p>&nbsp;1 cucharada de cocoa en polvo.</p>\r\n<p>Mezcle el ron, el jugo y el Caf&eacute; &Aacute;guila Roja y vierta en una coctelera con cubos de hielo. Aparte, vierta la leche de coco y la crema en un recipiente y bata hasta que se torne espumoso.</p>\r\n<p>Sirva la primera mezcla en copas individuales y luego a&ntilde;ada la espuma. Roc&iacute;e con la cocoa en polvo y disfr&uacute;telo inmediatamente.</p>', 'cafe-mix-1128x240.jpg', 'cafe-mix-743x260.jpg', 'cafe-mix-full.jpg', 4, 'CAFÉ-MIX'),
(6, 1, '2015-05-28 15:37:24', '0000-00-00 00:00:00', 'CAFÉ REFRESCANTE', 'Mezcle el café con la crema de leche y sírvalo en 4 vasos altos, llenándolos hasta la mitad. Agregue a cada vaso 1 bola de helado y termine de llenar con la gaseosa', '<p>125 gramos de crema de leche.</p>\r\n<p>&nbsp;2 tazas de Caf&eacute; &Aacute;guila Roja FRIO Y FUERTE (3 cucharadas razas de caf&eacute; por cada taza de agua).</p>\r\n<p>&nbsp;4 bolsas de helado de vainilla.</p>\r\n<p>&nbsp;&frac12; litro de gaseosa negra.</p>\r\n<p>Mezcle el caf&eacute; con la crema de leche y s&iacute;rvalo en 4 vasos altos, llen&aacute;ndolos hasta la mitad. Agregue a cada vaso 1 bola de helado y termine de llenar con la gaseosa.</p>\r\n<p>Ponga un pitillo en cada vaso y disfr&uacute;telo.</p>', 'cafe-refrescante-1128x240.jpg', 'cafe-refrescante-743x260.jpg', 'cafe-refrescante-full.jpg', 4, 'CAFÉ-REFRESCANTE'),
(7, 1, '2015-05-28 15:36:26', '0000-00-00 00:00:00', 'MOUSE DE CAFÉ', 'Bata las yemas con el azúcar hasta que esponjen, una vez logrado esto, añada el café y termine de batir. Coloque el recipiente al baño maría hasta que la mezcla espese y déjelo enfriar.\r\nAparte, en otro recipiente, bata la crema y añádala a la mezcla anterior.\r\nViértalo en copas individuales y refrigérelas por 3 horas aproximadamente.', '<p>4 yemas de huevo.</p>\r\n<p>&nbsp;5 cucharadas razas de az&uacute;car.</p>\r\n<p>&nbsp;3 cucharaditas de Caf&eacute; &Aacute;guila Roja Instant&aacute;neo Granulado, disuelto en 1 cucharada de agua.</p>\r\n<p>&nbsp;100 ramos de crema de leche.</p>\r\n<p>Bata las yemas con el az&uacute;car hasta que esponjen, una vez logrado esto, a&ntilde;ada el caf&eacute; y termine de batir. Coloque el recipiente al ba&ntilde;o mar&iacute;a hasta que la mezcla espese y d&eacute;jelo enfriar.</p>\r\n<p>Aparte, en otro recipiente, bata la crema y a&ntilde;&aacute;dala a la mezcla anterior.</p>\r\n<p>Vi&eacute;rtalo en copas individuales y refrig&eacute;relas por 3 horas aproximadamente.</p>\r\n<p>Para servir, decore las copas con nueces picadas o crema batida.</p>', 'mouse-de-cafe-1128x240.jpg', 'mouse-de-cafe-743x260.jpg', 'mouse-de-cafe-full.jpg', 5, 'MOUSE-DE-CAFÉ'),
(9, 1, '2015-05-28 15:37:50', '0000-00-00 00:00:00', 'CAFÉ DANÉS', 'Batir la crema de leche con la yema y el kumel,  repartir la mezcla en 4 tazas, verter el café muy caliente y endulzar a voluntad.', '<p class="MsoNormal">Ingredientes :</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 4 cucharadas de Caf&eacute; &Aacute;guila Roja Instant&aacute;neo</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 4 cucharadas de Kumel</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 8 cucharadas de crema de leche</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 1 yema de huevo</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Preparaci&oacute;n :</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Batir la crema de leche con la yema y el kumel.</p>\r\n<p class="MsoNormal">Repartir la mezcla en 4 tazas.</p>\r\n<p class="MsoNormal">Verter el caf&eacute; muy caliente.</p>\r\n<p>&nbsp;</p>\r\n<p class="MsoNormal">Endulzar a voluntad.</p>', 'cafe-danes-1128x240.jpg', 'cafe-danes-743x260.jpg', 'cafe-danes-full.jpg', 4, 'CAFÉ-DANÉS'),
(10, 1, '2015-05-28 15:37:09', '0000-00-00 00:00:00', 'CAFÉ "DU MATIN"', 'Preparar un café largo, repartir en 4 tazas grandes, hervir la leche hasta que saque espuma.\r\nVerter la leche por encima del café, procurando que caiga espuma en cada taza o bol y endulzar a voluntad.', '<p class="MsoNormal">Ingredientes :</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 4 cucharadas de Caf&eacute; &Aacute;guila Roja Instant&aacute;neo</p>\r\n<p class="MsoNormal">&nbsp;&nbsp; . 3/4 de litro de leche completa</p>\r\n<p class="MsoNormal">&nbsp;&nbsp; . az&uacute;car</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Preparaci&oacute;n :</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Preparar un caf&eacute; largo.</p>\r\n<p class="MsoNormal">Repartir en 4 tazas grandes.</p>\r\n<p class="MsoNormal">Hervir la leche hasta que saque espuma.</p>\r\n<p class="MsoNormal">Verter la leche por encima del caf&eacute;, procurando que caiga espuma en cada taza o bol.</p>\r\n<p class="MsoNormal">Endulzar a voluntad.</p>\r\n<p class="MsoNormal">&nbsp;</p>', 'du-matin-1128x240.jpg', 'du-matin-743x260.jpg', 'du-matin-full.jpg', 4, 'CAFÉ-DU-MATIN'),
(11, 1, '2015-05-28 15:37:43', '0000-00-00 00:00:00', 'CAFÉ ESCOCÉS', 'Preparar un café exprés largo, en 4 vasos previamente calentados, poner dos cucharadas de azúcar y el whisky ( 1 copita por vaso ).\nVerter el café muy caliente y remover, colocar encima la crema de leche, procurando que este muy fría.', '<p class="MsoNormal">Ingredientes :</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 4 cucharadas soperas de Caf&eacute; &Aacute;guila Roja Instant&aacute;neo</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 8 cucharaditas de az&uacute;car</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 3/4 de litro de agua</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 200 g de crema de leche</p>\r\n<p class="MsoNormal">&nbsp;&nbsp;&nbsp; . 4 copitas de whisky</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Preparaci&oacute;n :</p>\r\n<p class="MsoNormal">Preparar un caf&eacute; expr&eacute;s largo.</p>\r\n<p class="MsoNormal">En 4 vasos previamente calentados, poner dos cucharadas de az&uacute;car y el whisky ( 1 copita por vaso ).</p>\r\n<p class="MsoNormal">Verter el caf&eacute; muy caliente y remover.</p>\r\n<p>&nbsp;</p>\r\n<p class="MsoNormal">Colocar encima la crema de leche, procurando que este muy fr&iacute;a.</p>', 'cafe-escoces-1128x240.jpg', 'cafe-escoces-743x260.jpg', 'cafe-escoces-full.jpg', 4, 'CAFÉ-ESCOCÉS'),
(14, 1, '2015-05-28 17:10:00', '0000-00-00 00:00:00', 'CAFÉ FRAPPUCCINO', 'Vierta una taza de café en el vaso de la licuadora, agregue\r\nla taza de leche, el azúcar al gusto y el hielo, licue hasta que el hielo se desintegre. Sírvalo y adicione la leche condensada para decorar.', '<p>&nbsp; 1 taza de Caf&eacute; Aguila Roja fuerte (1 &frac12; cucharadas razas de caf&eacute; por cada taza de &nbsp; &nbsp; agua)</p>\n<p>&nbsp; 1 taza de leche</p>\n<p>&nbsp; Az&uacute;car al gusto</p>\n<p>&nbsp; Hielo</p>\n<p>&nbsp; Leche Condensada</p>\n<p>&nbsp; Chocolate rallado</p>\n<p>Preparaci&oacute;n: Vierta una taza de caf&eacute; en el vaso de la licuadora, agregue la taza de leche, el az&uacute;car al gusto y el hielo, licue hasta que el hielo se desintegre. S&iacute;rvalo y adicione la leche condensada para decorar.</p>', 'frapuccino-1128x240.jpg', 'frapuccino-743x260.jpg', 'frapuccino-full.jpg', 2, 'CAFÉ-FRAPPUCCINO'),
(15, 1, '2015-05-28 15:36:51', '0000-00-00 00:00:00', 'MALTEADA DE CAFÉ', 'En una licuadora añada todos los ingredientes y si gusta un poco de hielo para que tenga una textura más espesa. Bátalo hasta que todos los ingredientes se incorporen.\r\nSírvalo en una copa grande, decórelo con salsa de chocolate y disfrútelo.', '<p>&nbsp; 2 bolas de helado de vainilla</p>\r\n<p>&nbsp; &frac12; taza de leche</p>\r\n<p>&nbsp; &frac14; de cucharada de escencia de vainilla</p>\r\n<p>&nbsp; 1 cucharada de Caf&eacute; Aguila Roja instant&aacute;neo</p>\r\n<p>&nbsp; Salsa de chocolate para decorar (opcional)</p>\r\n<p>Preparaci&oacute;n: En una licuadora a&ntilde;ada todos los ingredientes y si gusta un poco de hielo para que tenga una textura m&aacute;s espesa. B&aacute;talo hasta que todos los Ingredientes se incorporen.</p>\r\n<p>S&iacute;rvalo en una copa grande, dec&oacute;relo con salsa de chocolate y disfr&uacute;telo.</p>', 'malteada-de-cafe-1128x240.jpg', 'malteada-de-cafe-743x260.jpg', 'malteada-de-cafe-full.jpg', 1, 'MALTEADA-DE-CAFÉ'),
(16, 1, '2015-05-28 17:08:01', '0000-00-00 00:00:00', 'COPA 4 ESTACIONES', 'Vierta el café recién preparado en una copa como base, encima coloque la bola de helado del sabor que prefiera, saborice con 1 cucharada de amaretto. Sírvalo y decórelo con salsa de caramelo.', '<p>&nbsp; 1 taza de Caf&eacute; Aguila Roja medianamente fuerte&nbsp; (1 1/2 cucharadas razas de caf&eacute;).</p>\n<p>&nbsp; 1 Bola de Helado del sabor que prefiera.</p>\n<p>&nbsp; 1 Cucharada de amaretto.</p>\n<p>&nbsp; Salsa de caramelo.</p>\n<p>&nbsp;</p>\n<p>Preparaci&oacute;n: Vierta el caf&eacute; reci&eacute;n preparado en una copa como base, encima coloque la bola de helado del sabor que prefiera, saborice con 1 cucharada de amaretto. S&iacute;rvalo y dec&oacute;relo con salsa de caramelo.</p>', '4-estaciones-1128x240.jpg', '4-estaciones-743x260.jpg', '4-estaciones-full.jpg', 1, 'COPA-4-ESTACIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `megusta`
--

CREATE TABLE IF NOT EXISTS `megusta` (
  `ID_MEGUSTA` bigint(20) NOT NULL AUTO_INCREMENT,
  `ENTRADA_ID` bigint(20) DEFAULT NULL,
  `ID_USUARIO` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ID_MEGUSTA`),
  KEY `FK_REFERENCE_5` (`ENTRADA_ID`),
  KEY `FK_REFERENCE_6` (`ID_USUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Volcado de datos para la tabla `megusta`
--

INSERT INTO `megusta` (`ID_MEGUSTA`, `ENTRADA_ID`, `ID_USUARIO`) VALUES
(67, 10, 1),
(68, 6, 1),
(69, 16, 1),
(70, 5, 1),
(71, 4, 1),
(72, 3, 1),
(73, 16, 1),
(74, 15, 1),
(75, 14, 1),
(76, 10, 1),
(77, 11, 1),
(78, 6, 1),
(79, 7, 1),
(80, 9, 1),
(81, 16, 1),
(82, 3, 1),
(83, 3, 1),
(84, 6, 1),
(85, 3, 1),
(86, 14, 1),
(87, 3, 1),
(88, 3, 1),
(89, 16, 1),
(90, 5, 1),
(91, 3, 1),
(92, 5, 1),
(93, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` bigint(20) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ROL` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_ROL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_ROL`, `NOMBRE_ROL`) VALUES
(1, 'invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_ROL` bigint(20) DEFAULT NULL,
  `NOMBRE_USUARIO` varchar(500) NOT NULL,
  `password` varchar(255) NOT NULL,
  `_EMAIL_USUARIO` varchar(500) NOT NULL,
  `remember_token` varchar(150) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `FK_REFERENCE_1` (`ID_ROL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `ID_ROL`, `NOMBRE_USUARIO`, `password`, `_EMAIL_USUARIO`, `remember_token`) VALUES
(1, 1, 'invitado', '', 'invitado@invitado.com', ''),
(2, 1, 'admin', '$2y$10$8yz5R3pAx8Hg2oHgJTHfFutgc8x5r/C.Jq566JxibgVYhp8gYs6ou', 'kscorrales@gmail.com', 'yq0R6YD3tTQT7pGKJcL9WaEBQK2oQ0rYi2TBPpxzO2ScnBTLycAHyQ9FtozL');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoriaxentrada`
--
ALTER TABLE `categoriaxentrada`
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categorias` (`ID_CATEGORIA`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`ID_ENTRADA`) REFERENCES `entradas` (`ID_ENTRADA`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`ENTRADA_ID`) REFERENCES `entradas` (`ID_ENTRADA`),
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `megusta`
--
ALTER TABLE `megusta`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`ENTRADA_ID`) REFERENCES `entradas` (`ID_ENTRADA`),
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
