-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2025 a las 15:56:46
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
-- Base de datos: `computers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computers`
--

CREATE TABLE `computers` (
  `computer_id` int(11) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `cpu` varchar(16) NOT NULL,
  `proccessor_amount` int(11) NOT NULL,
  `ram_gb` int(11) NOT NULL,
  `storage_amount` int(11) NOT NULL,
  `manufacturing_date` date NOT NULL,
  `dedicated_gpu` tinyint(1) NOT NULL,
  `state` varchar(16) NOT NULL,
  `price` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `computers`
--

INSERT INTO `computers` (`computer_id`, `brand`, `cpu`, `proccessor_amount`, `ram_gb`, `storage_amount`, `manufacturing_date`, `dedicated_gpu`, `state`, `price`) VALUES
(14, 'lenovo', 'Intel core i711t', 64, 8, 512, '2025-04-30', 1, 'used', 1200.99),
(15, 'lenovo', 'Intel core i711t', 64, 8, 512, '2025-04-30', 1, 'used', 1200.99);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`computer_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computers`
--
ALTER TABLE `computers`
  MODIFY `computer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
