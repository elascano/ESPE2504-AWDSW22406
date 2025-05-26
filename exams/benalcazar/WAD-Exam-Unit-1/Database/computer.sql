-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql205.byetcluster.com
-- Tiempo de generación: 26-05-2025 a las 09:31:09
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_39084092_computers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computer`
--

CREATE TABLE `computer` (
  `id` int(11) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `cpu_name` varchar(45) NOT NULL,
  `cpu_cores` varchar(45) NOT NULL,
  `cpu_frecuency` varchar(45) NOT NULL,
  `mainboard_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `computer`
--

INSERT INTO `computer` (`id`, `brand`, `cpu_name`, `cpu_cores`, `cpu_frecuency`, `mainboard_name`) VALUES
(1, 'Azus', 'AMD 4000', '7', '5', 'Mainboard Azus'),
(2, 'Azus', 'AMD 4000', '7', '5', 'Mainboard Azus'),
(3, 'HP mini', 'Intel corie i5', '5', '3.5', 'Mainboard HP mini'),
(4, 'HP mini', 'Intel corie i5', '5', '3.5', 'Mainboard HP mini');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
