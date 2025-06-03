-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-06-2025 a las 22:05:03
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa_x`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cellphones`
--

CREATE TABLE `cellphones` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cellphones`
--

INSERT INTO `cellphones` (`id`, `brand`, `model`, `price`, `stock`, `year`) VALUES
(1, 'Samsung', 'Galaxy S23', '799.99', 25, 2023),
(2, 'Apple', 'iPhone 14', '999.99', 15, 2022),
(3, 'Xiaomi', 'Redmi Note 12', '249.99', 50, 2023),
(4, 'Motorola', 'Moto G100', '399.99', 20, 2021),
(5, 'OnePlus', 'OnePlus 11', '699.99', 30, 2023);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cellphones`
--
ALTER TABLE `cellphones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cellphones`
--
ALTER TABLE `cellphones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
