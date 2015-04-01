-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2014 a las 21:10:04
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `reserva_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `autor` varchar(55) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` varchar(55) NOT NULL,
  `category` varchar(44) NOT NULL,
  `state` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`id`, `title`, `autor`, `description`, `img`, `category`, `state`) VALUES
(12, '100 años de soledad ', 'abriel García Márquez', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', '1.jpg', 'nobele', ''),
(13, 'La odisea', 'Homero', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'technology', ''),
(14, 'A sangre fría', 'Truman Capote', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', '2.jpg', 'nobele', ''),
(15, 'harry potter', 'J.k. rowling', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'nobele', ''),
(16, 'El retrato de Dorian Gray', 'Oscar Wilde', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'science', ''),
(17, 'Don Quijote de la Mancha', ' Miguel de Cervantes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'technology', ''),
(18, 'Historia de dos ciudades', 'Charles Dickens', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'history', ''),
(19, 'Rojo y negro', 'Stendhal', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'history', ''),
(20, 'a divina comedia', 'Dante Alighieri', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'history', ''),
(21, 'Orgullo y prejuicio', 'Jane Auste', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'nobele', ''),
(22, 'fausto', 'johann', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'nobele', ''),
(23, 'Catch-22', 'Joseph Heller', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', '4.jpg', 'science', ''),
(24, 'El Conde de Montecristo', 'Alejandro Dumas', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 'n.jpg', 'science', ''),
(25, 'Alejandro Dumas', 'Milan Kundera', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', '3.jpg', 'science', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(44) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(44) NOT NULL,
  `city` varchar(44) NOT NULL,
  `adress` varchar(44) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img` varchar(44) NOT NULL,
  `state` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`id`, `nombre`, `city`, `adress`, `description`, `img`, `state`) VALUES
(1, 'hotel punta cana', 'armenia', 'k45 3272', 'Lorem ipsum dolor sit amet, in admodum voluptatum vim, ius ex option deserunt instructior, ne tibique invenire dignissim pro. At omnis persius equidem sed, eum natum nobis consectetuer an. ', '1.jpg', ''),
(2, 'hotel maya', 'cartagena', 'k3524', 'Lorem ipsum dolor sit amet, in admodum voluptatum vim, ius ex option deserunt instructior, ne tibique invenire dignissim pro. At omnis persius equidem sed, eum natum nobis consectetuer an. ', '2.jpg', ''),
(6, 'hotel estelar', 'armenia', 'calle 456', 'lorem', '3.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `id` int(44) NOT NULL AUTO_INCREMENT,
  `autor` varchar(44) NOT NULL,
  `title` varchar(44) NOT NULL,
  `description` varchar(44) NOT NULL,
  `img` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `library`
--

INSERT INTO `library` (`id`, `autor`, `title`, `description`, `img`) VALUES
(1, 'frank kafka', 'la metamorf', '', '1.jpg'),
(2, 'julio verne', 'la isla per', '', '2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `id` int(44) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) NOT NULL,
  `features` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `age` int(44) NOT NULL,
  `mail` varchar(44) NOT NULL,
  `phone` int(44) NOT NULL,
  `img` varchar(44) NOT NULL,
  `state` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `meeting`
--

INSERT INTO `meeting` (`id`, `name`, `features`, `interest`, `age`, `mail`, `phone`, `img`, `state`) VALUES
(1, 'tifany ', 'buen cuerpo, sensual, tengo ojos verdes, cabello liso, 1.75 de estatura', 'estoy soltera busco hombre soltero para aventura quisiera compartir buenos momentos y mucha diversio', 30, 'tifanma@gmail.com', 2147483647, '5.jpg', 'on'),
(2, 'Marcos valenzuela', 'soy alto, grueso, ojos marrones, 1.77 de estatura ', 'estoy soltero, me gusta el baile practico gimnasio, busco mujer tierna para relacion bonita y adoro la musica romantica\n', 36, 'yei_osorio@hotmail.com', 2147483647, '1.jpg', 'on'),
(3, 'carmen', 'soy alta, delgada, ojos claros, piel rubia, ', 'me interesan hombres serios y tiernos para relacion seria amo los animales pasear por el bosque', 47, 'carsteve@gmail.com', 3456075, '2.jpg', 'on'),
(4, 'Jose', 'atletico , apuesto mis facciones son definidas 1.78 de estatura', 'me considero caballero leo hago deportequiero una relacion pasajera', 35, 'hufa@hotmail.com', 98656789, '4.jpg', 'on'),
(5, 'Esperanza', 'hablo inles soy buena enseñando ojos cafes cabello largo una sonrisa encantadora', 'me fascinan los niños, las artes, la cultura y me gustaria conocer a alguien especial ', 26, 'esoapfa@hotmail.com', 98765123, '3.jpg', 'on');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(44) NOT NULL AUTO_INCREMENT,
  `id_user` int(44) NOT NULL,
  `hotel` int(44) NOT NULL,
  `tuorism` int(44) NOT NULL,
  `book` int(44) NOT NULL,
  `days` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`),
  KEY `id_turis` (`tuorism`,`book`),
  KEY `id_hotel` (`hotel`,`book`),
  KEY `id_meet` (`book`),
  KEY `id_book` (`book`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_user`, `hotel`, `tuorism`, `book`, `days`) VALUES
(2, 5, 0, 1, 0, '2014-03-10'),
(6, 5, 1, 0, 0, '2014-03-12'),
(7, 5, 0, 0, 13, '2014-03-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tuorism`
--

CREATE TABLE IF NOT EXISTS `tuorism` (
  `id` int(44) NOT NULL AUTO_INCREMENT,
  `finca` varchar(44) NOT NULL,
  `ubicacion` varchar(44) NOT NULL,
  `precio` double NOT NULL,
  `description` varchar(250) NOT NULL,
  `img` varchar(44) NOT NULL,
  `state` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tuorism`
--

INSERT INTO `tuorism` (`id`, `finca`, `ubicacion`, `precio`, `description`, `img`, `state`) VALUES
(1, 'casa campestre', 'vereda valdivia', 500, 'Lorem ipsum dolor sit amet, in admodum voluptatum vim, ius ex option deserunt instructior, ne tibique invenire dignissim pro. At omnis persius equidem sed, eum natum nobis consectetuer an. ', '1.jpg', ''),
(2, 'finca burila', 'armenia', 340, 'Lorem ipsum dolor sit amet, in admodum voluptatum vim, ius ex option deserunt instructior, ne tibique invenire dignissim pro. At omnis persius equidem sed, eum natum nobis consectetuer an. ', '2.jpg', ''),
(3, 'finca valencia', 'via montenegro', 1000, 'Lorem ipsum dolor sit amet, in admodum voluptatum vim, ius ex option deserunt instructior, ne tibique invenire dignissim pro. At omnis persius equidem sed, eum natum nobis consectetuer an. ', '3.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(44) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `pass` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`) VALUES
(5, 'yeison', 'yei_osorio@hotmail.com', 'qwer'),
(7, 'dani', 'danielita@hotmail.com', '65432'),
(8, 'fabian_acosta', 'jormangi@gmail.com', '12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
