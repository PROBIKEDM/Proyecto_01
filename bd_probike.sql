-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2016 a las 19:45:02
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_probike`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunci`
--

CREATE TABLE `anunci` (
  `anu_id` int(4) NOT NULL,
  `anu_estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `anu_titol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `anu_data_anunci` datetime NOT NULL,
  `anu_data_robatori` date NOT NULL,
  `anu_ubicacio_robatori` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `anu_provincia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `anu_descripcio_robatori` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `anu_marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `anu_model` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_color` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_antiguitat` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_descripcio` text COLLATE utf8_spanish_ci NOT NULL,
  `anu_numero_serie` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_foto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_compensacio` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_estado`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_provincia`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`) VALUES
(2, 'Robada', 'Bicicleta BTT Trek Superfly', '2016-10-17 00:00:00', '2016-10-16', 'Bellvitge', 'Barcelona', 'Me robadon la bici mientras estaba en clase de DAW2. Sobre las 18h', 'Trek', 'Superfly', 'Amarilla', '2015', 'Bicicleta BTT Trek Superfly de color narnaja, muy chula', 'FFR0808', 'IMG2', '99.99'),
(3, 'Robada', 'X-Caliber robada', '2016-10-17 00:00:00', '2016-08-16', 'Cornella', 'Barcelona', 'Me robadon la bici. Sobre las 17h', 'Trek', 'X-Caliber', 'Negra', '2016', 'Bicicleta BTT Trek X-Caliber de mi abuela', '665R0808', 'IMG3', '70.00'),
(4, 'Robada', 'Emonda muy chula', '2016-10-17 00:00:00', '2016-09-11', 'El Prat', 'Barcelona', 'Necesito mi bici urgente', 'Trek', 'Emonda', 'roja', '2014', 'Bicicleta Carretera Trek Emonda ALR de mi hermano', '335R0808', 'IMG4', '99.99'),
(5, 'Robada', 'Bicicleta Carretera Trek Lexa 3', '2016-10-17 00:00:00', '2016-09-02', 'Barcelona', 'Barcelona', 'Me han robado la bici', 'Trek', 'Lexa', 'Negra', '2016', 'Bicicleta Carretera Trek Lexa 3 Mujer 2017,', '12512808', 'IMG5', '90.00'),
(6, 'Robada', 'Ciclocross Trek Crossrip', '2016-10-17 00:00:00', '2016-06-02', 'Barcelona', 'Barcelona', 'Necesito recuperar mi bici', 'Trek', 'Crossrip', 'blanca', '2016', 'Bicicleta Ciclocross Trek Crossrip muy nueva', '975432ww', 'IMG6', '99.99'),
(7, 'Robada', 'Bicicleta MTB Eléctrica Trek E-Powerfly', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Robada en el trabajo', 'Trek', 'E-Powerfly', 'azul', NULL, 'Bicicleta MTB Eléctrica Trek E-Powerfly comprada en mayo', NULL, 'IMG7', NULL),
(8, 'Robada', 'Bicicleta MTB Trek Fuel EX', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Robada en el gym', 'Trek', 'Fuel EX', 'negra', NULL, 'Bicicleta MTB Trek Fuel EX arañada', NULL, 'IMG8', NULL),
(10, 'Robada', 'bicicleta btt orbea', '2016-10-19 00:00:00', '2016-10-19', 'Bellvitge', 'Barcelona', 'robada en el gym', 'Orbea', 'BTT', 'negra', NULL, 'bicicleta btt orbea impecable', NULL, 'IMG10', NULL),
(11, 'Robada', 'bicicleta btt scott genius', '2016-10-19 00:00:00', '2016-10-19', 'Bellvitge', 'Barcelona', 'me la robaron en el super', 'Scott', 'Genius', '', NULL, 'bicicleta-btt-scott-genius robada urgente', NULL, 'IMG11', NULL),
(12, 'Robada', 'bicicleta btt scott spark', '2016-10-18 00:00:00', '2016-10-18', 'Barcelona', 'Barcelona', 'Me la robaron en el centro', 'Scott', 'Spark', 'blanca', NULL, 'bicicleta-btt-scott-spark', NULL, 'IMG12', NULL),
(13, 'Robada', 'bicicleta btt trek skye', '2016-10-17 00:00:00', '2016-10-17', 'Barcelona', 'Barcelona', 'La robaron a la fuerza', 'Trek', 'Skye', 'azul', NULL, 'me la robaron es azul cielo', NULL, 'IMG13', NULL),
(14, 'Encontrada', 'bicicleta carretera orbea orca m20', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Robada', 'Orbea', 'Orca m20', 'negra', NULL, 'robada, color negra', NULL, 'IMG14', NULL),
(15, 'Encontrada', 'bicicleta-carretera-scott-speedster', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Robo con fuerza', 'Scott', 'speedster', 'negra', NULL, 'bicicleta-carretera-scott-speedster', NULL, 'IMG15', NULL),
(16, 'Encontrada', 'bicicleta conor meteor', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Me robaron la bici de mi hijo', 'Conor', 'meteor', 'negra', NULL, 'bicicleta-conor-meteor', NULL, 'IMG16', NULL),
(17, 'Encontrada', 'bicicleta-dahon-mariner-d7', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Me robaron la bici de mi novio', 'Dahon', 'mariner', 'negra', NULL, 'bicicleta-Dahon-mariner', NULL, 'IMG17', NULL),
(18, 'Encontrada', 'bicicleta-dahon-vitesse-d8', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Me robaron la bici de mi novio', 'Dahon', 'vitesse', 'negra', NULL, 'bicicleta-Dahon-vitesse', NULL, 'IMG18', NULL),
(19, 'Encontrada', 'bicicleta-de-carretera-scott-foil', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Me robaron la bici de mi primo', 'scott', 'foil', 'negra', NULL, 'scott-foil', NULL, 'IMG19', NULL),
(20, 'Encontrada', 'bicicleta-infantil-conor-rocket', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Me robaron la bici de mi novia', 'conor', 'rocket', 'negra', NULL, 'bicicleta-infantil-conor-rocket', NULL, 'IMG20', NULL),
(21, 'Encontrada', 'bicicleta-mtb-electrica-haibike-hardnine', '2016-10-19 00:00:00', '2016-10-20', 'Barcelona', 'Barcelona', 'me han robado la bici', 'haibike', 'hardnine', 'azul', NULL, 'bicicleta-mtb-electrica-haibike-hardnine', NULL, 'IMG21', NULL),
(22, 'Encontrada', 'bicicleta-mtb-electrica-haibike-hardnine_negra', '2016-10-19 00:00:00', '2016-10-20', 'Barcelona', 'Barcelona', 'me han robado la bici', 'haibike', 'hardnine', 'negra', NULL, 'bicicleta-mtb-electrica-haibike-hardnine_negra', NULL, 'IMG22', NULL),
(23, 'Encontrada', 'bicicleta-mtb-electrica-haibike-hardseven', '2016-10-19 00:00:00', '2016-10-20', 'Barcelona', 'Barcelona', 'me han robado la bici', 'haibike', 'hardseven', 'negra', NULL, 'bicicleta-mtb-electrica-haibike-hardseven', NULL, 'IMG23', NULL),
(24, 'Encontrada', 'bicicleta-mtb-electrica-haibike-sduro-all-mountain', '2016-10-19 00:00:00', '2016-10-20', 'Barcelona', 'Barcelona', 'me han robado la bici la quiero', 'haibike', 'all-mountain', 'negra', NULL, 'bicicleta-mtb-electrica-haibike-sduro-all-mountain', NULL, 'IMG24', NULL),
(25, 'Encontrada', 'bicicleta-mtb-scott-contessa-scale-730-mujer', '2016-10-19 00:00:00', '2016-10-20', 'Barcelona', 'Barcelona', 'me han robado la bici', 'Scott', 'contessa', 'Blanca', NULL, 'bicicleta-mtb-scott-contessa-scale-730-mujer', NULL, 'IMG25', NULL),
(26, 'Robada', 'bicicleta-mtb-trek-marlin', '2016-10-19 00:00:00', '2016-10-20', 'Barcelona', 'Barcelona', 'me han robado la bici la quiero', 'Trek', 'Marlin', 'Naranja', NULL, 'bicicleta-mtb-trek-marlin', NULL, 'IMG26', NULL),
(27, 'Robada', 'bicicleta-ni-o-orbea-24-mx', '2016-10-19 00:00:00', '2016-10-20', 'Madrid', 'Madrid', 'me han robado la bici', 'Orbea', '24MX', 'negra', NULL, 'bicicleta-ni-o-orbea-24-mx', NULL, 'IMG27', NULL),
(28, '', 'bicicleta-plegable-dahon-suv', '2016-10-17 00:00:00', '2016-10-17', 'Barcelona', 'Barcelona', 'Me robaron la bici en la porteria de casa', 'Dahon', 'Suv', 'negra', NULL, 'bicicleta-plegable-dahon-suv como nueva', NULL, 'IMG28', NULL),
(29, '', 'bicicleta-urbana-orbea-katu', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'Robaron bici en mi porteria', 'Orbea', 'Katu', 'negra', NULL, 'bicicleta-urbana-orbea-katu', NULL, 'IMG29', NULL),
(30, '', 'bicicleta-urbana-trek-7-2', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'robada en el parking', 'Trek', 'urbana7', 'negra', NULL, 'bicicleta-urbana-trek-7-2', NULL, 'IMG30', NULL),
(31, '', 'bicicleta-urbana-trek-ds-3', '2016-10-19 00:00:00', '2016-10-19', 'Barcelona', 'Barcelona', 'me la robaron', 'Trek', 'Ds3', '', NULL, 'bicicleta-urbana-trek-ds-3', NULL, 'IMG31', NULL),
(32, '', 'brompton-h3l-blanca', '2016-10-19 00:00:00', '2016-10-19', 'barcelona', 'Barcelona', 'me la robaron ', 'brompton', 'h3l', 'blanca', NULL, 'brompton-h3l-blanca', NULL, 'IMG32', NULL),
(33, '', 'brompton-m3l', '2016-10-19 00:00:00', '2016-10-19', 'barcelona', 'Barcelona', 'me la robaron a escondidas', 'brompton', 'm3l', '', NULL, 'brompton-m3l', NULL, 'IMG33', NULL),
(34, 'Robada', 'Bici robada prueba', '2016-10-21 00:00:00', '2016-10-21', 'Madrid', 'Madrid', 'Me han robado la bici de prueba', 'Trek', '', 'Roja', '2015', 'Me han robado la bici de prueba', NULL, '', '99.99'),
(42, 'buff', 'pene', '0000-00-00 00:00:00', '2016-10-21', '', 'Burgos', 'ñpenepene', 'buff', 'nolose', 'otro', '1999', '', 'anu_numero_seri', 'anu_foto', '0.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anunci`
--
ALTER TABLE `anunci`
  ADD PRIMARY KEY (`anu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anunci`
--
ALTER TABLE `anunci`
  MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
