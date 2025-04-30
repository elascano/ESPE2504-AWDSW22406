-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2025 a las 15:49:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computer_register`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `storage` varchar(100) DEFAULT NULL,
  `cpu` varchar(100) DEFAULT NULL,
  `gpu` varchar(100) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `peripherals` text DEFAULT 'No',
  `os` varchar(50) DEFAULT NULL,
  `peripherals_description` varchar(255) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `computers`
--

INSERT INTO `computers` (`id`, `storage`, `cpu`, `gpu`, `ram`, `price`, `amount`, `category`, `peripherals`, `os`, `peripherals_description`) VALUES
(1, '125', 'Intel i5-12400k', 'integrated ', '8GB', 355.80, 12, 'Desk', 'No', 'Windows11', 'No'),
(2, '500GB', 'Intel i5-12400k', 'Gtx 1650', '12GB', 450.00, 6, 'Desk', 'Yes', 'Windows10', 'Mouse and Keyboard');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
