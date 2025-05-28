-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2025 a las 15:34:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `singer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `singer`
--

CREATE TABLE `singer` (
  `SINGER_ID` int(11) NOT NULL,
  `SINGER_NAME` char(128) NOT NULL,
  `SINGER_NATIONALITY` char(128) NOT NULL,
  `SINGER_BORN_DATE` date NOT NULL,
  `SINGER_NUMBER_DISK` int(11) NOT NULL,
  `SINGER_DISK_PRICE` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `singer`
--

INSERT INTO `singer` (`SINGER_ID`, `SINGER_NAME`, `SINGER_NATIONALITY`, `SINGER_BORN_DATE`, `SINGER_NUMBER_DISK`, `SINGER_DISK_PRICE`) VALUES
(1, 'Mateo Medranda', 'Ecuador', '2004-04-11', 5, 11.24),
(2, 'Martina Lopez', 'United States', '0000-00-00', 7, 15.25),
(3, 'Martina Lopez', 'United States', '0000-00-00', 7, 15.25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
