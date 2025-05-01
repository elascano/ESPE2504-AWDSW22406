-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-03-2025 a las 13:33:08
-- Versión del servidor: 8.0.40
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
-- Base de datos: `multicine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cine`
--

CREATE TABLE `cine` (
  `nombre_cine` varchar(45) NOT NULL,
  `ubicacion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `id_sala` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int NOT NULL,
  `hora_pelicula` time DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `id_sala` int NOT NULL,
  `nombre_sala` varchar(45) DEFAULT NULL,
  `capacidad` int DEFAULT NULL,
  `disponibilidad` int DEFAULT NULL,
  `precio_sala` decimal(10,0) DEFAULT NULL,
  `id_pelicula` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voleto`
--

CREATE TABLE `voleto` (
  `nombre_pelicula` varchar(50) NOT NULL,
  `hora_pelicula` time NOT NULL,
  `precio_total` decimal(10,0) NOT NULL,
  `correo_usuario` varchar(60) NOT NULL,
  `dia_entrada` date NOT NULL,
  `asiento` varchar(50) NOT NULL,
  `nombre_cine` varchar(100) NOT NULL,
  `id_usuario` int NOT NULL,
  `id_pelicula` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cine`
--
ALTER TABLE `cine`
  ADD PRIMARY KEY (`nombre_cine`),
  ADD KEY `fk_cine_sala` (`id_sala`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id_sala`),
  ADD KEY `fk_sala_pelicula` (`id_pelicula`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `voleto`
--
ALTER TABLE `voleto`
  ADD PRIMARY KEY (`asiento`),
  ADD KEY `fk_voleto_usuario` (`id_usuario`),
  ADD KEY `fk_voleto_cine` (`nombre_cine`),
  ADD KEY `fk_voleto_pelicula` (`id_pelicula`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cine`
--
ALTER TABLE `cine`
  ADD CONSTRAINT `fk_cine_sala` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`);

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `fk_sala_pelicula` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`);

--
-- Filtros para la tabla `voleto`
--
ALTER TABLE `voleto`
  ADD CONSTRAINT `fk_voleto_cine` FOREIGN KEY (`nombre_cine`) REFERENCES `cine` (`nombre_cine`),
  ADD CONSTRAINT `fk_voleto_pelicula` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`),
  ADD CONSTRAINT `fk_voleto_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
