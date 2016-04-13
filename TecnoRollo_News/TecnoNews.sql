-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-10-2014 a las 10:18:42
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `curso2014`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `z_datos`
--

CREATE TABLE IF NOT EXISTS `z_datos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `admin` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `z_datos`
--

INSERT INTO `z_datos` (`id`, `url`, `titulo`, `admin`) VALUES
(1, 'http://localhost/TecnoRollo_News/', 'Noticias TecnoRollo', 'soporte@tecnorrollo.com');

/* habilitar para host remoto*/
/*(1, 'http://wwww.tecnorrollo.com/TecnoRollo_News/', 'Noticias TecnoRollo', 'soporte@tecnorrollo.com');*/

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `z_posts`
--

CREATE TABLE IF NOT EXISTS `z_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `mensaje` text COLLATE latin1_spanish_ci NOT NULL,
  `autor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `z_posts`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `z_users`
--

CREATE TABLE IF NOT EXISTS `z_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `z_users`
--

INSERT INTO `z_users` (`id`, `user`, `password`) VALUES
(1, 'Miguel Angel Ramirez Lopez', 'b4892a5fb5016bdd4ff9ea1d860f2818');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


create table gcmusers(
id int not null auto_increment primary key,
emailid varchar(255),
gcmregid varchar(255));


INSERT INTO `z_posts` VALUES (1,'Eventos Luz y Sonido en Chichen Itza','4_rec_chi.jpg','Ayer se presentó el nuevo espectáculo de luz y sonido de Chichén Itzá, \"Noches de Kukulcán\". Después de casi dos décadas, las autoridades locales decidieron que era tiempo de renovar esta atracción nocturna.\r \r La nueva presentación tiene como objetivo mostrar un espectáculo con tecnología de última generación que realce el esplendor de la cultura maya. El performance tiene una duración estimada de 30 minutos.\r \r \"Noches de Kukulcán\" incluye un recorrido nocturno guiado, previo  a la función, por algunos de los edificios más representativos de la zona arqueológica. \r \r La aventura comienza en la Gran Plaza con una pequeña introducción. Luego los participantes se dirigen a El Templo del trono del jaguar, el juego de pelota, la plataforma de Venus y El Castillo de Kukulcán, entre otras estructuras. ',1),(2,'Descubren cenote debajo de la Pirámide de Kukulcán, la más emblemática de Chichen Itzá','Investigacion_Chichen_Itza_UNAM-2-e1439508170977.jpg','Debajo de la Pirámide de Kukulcán, la más emblemática de las ruinas mayas de Chichen Itza, en Yucatán, hay un cenote, reveló este jueves 13 de agosto un grupo de científicos de la Universidad Nacional Autónoma de México (UNAM) y del Instituto Nacional de Antropología e Historia (INAH).\r\n\r\nEl grupo de investigadores explicó que el descubrimiento se logró gracias a la información del subsuelo que ofreció una nueva tecnología desarrollada por los universitarios que utilizó 96 electrodos colocados en el perímetro de la pirámide para escanear la zona.\r\n\r\nAsí, los científicos se dieron cuenta que la existencia de un cuerpo de agua de unos 25 metros por 30 y a una profundidad de 20 metros debajo de la pirámide. “Todo un “impacto”, dijo René Chávez, investigador del Instituto de Geofísica de la UNAM.\r\n\r\nExplicó que una parte de piedra caliza rodea la masa de agua en una cavidad que pudo haber sido más pequeña en la antigüedad y haber crecido por la erosión; sin embargo, el grupo de científicos descartó que haya riesgo de que la Pirámide de Kukulcán se colapse.',1),(3,'Conoce a ‘Greca’, la app que complementa tu lectura','261115113927c08med.jpg','A principios del próximo año el Grupo Editorial del Caribe (Greca) estrenará una nueva aplicación para continuar con su labor de lectura en realidad aumentada, con la que se pretende incentivar la labor educativa  en Playa del Carmen.\r\n\r\nLa plataforma móvil fue desarrollada en el seno del equipo editorial dedicado, principalmente, a la difusión de textos literarios, informó Leticia Santiago Lira, directora de Greca.\r\n\r\nLa aplicación ya está disponible para el sistema operativo Android, pero estará en plenas funciones a partir del 2016, aclaró.\r\n\r\nEl proyecto, uno de los pocos en el país, busca estimular la lectura a todos los habitantes de la región, agregó Santiago Lira.',1),(4,'TecnoRollo te da la Bienvenida','TECNOROLLO2.jpg','Bienvenido. Esto es una prueba',1),(5,'Realidad Aumentada','ra momentos de historia.png','Realidad aumentada en chichen itza',1);
