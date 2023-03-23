-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-03-2023 a las 21:28:39
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `heladitos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paletas`
--

CREATE TABLE `paletas` (
  `ID_Paleta` int NOT NULL,
  `sabor` varchar(50) NOT NULL,
  `Costo` int NOT NULL,
  `Precio` int NOT NULL,
  `Precio_m` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `paletas`
--

INSERT INTO `paletas` (`ID_Paleta`, `sabor`, `Costo`, `Precio`, `Precio_m`) VALUES
(1, 'Chocolate prieto', 14, 20, 18),
(2, 'limon', 14, 15, 14),
(10, 'limonada', 12, 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Apellido` varchar(70) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Fec_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Fec_nacimiento`) VALUES
(1, 'OlmecaGOD', '777', 'olmecaguapoxd@gmail.com', 'juan', '2003-03-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_venta` int NOT NULL,
  `sabor` varchar(50) NOT NULL,
  `Cantidad` int NOT NULL,
  `Fec_mov` date NOT NULL,
  `Tipo_mov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_venta`, `sabor`, `Cantidad`, `Fec_mov`, `Tipo_mov`) VALUES
(1, 'Chocolate', 12, '2023-03-17', 'venta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paletas`
--
ALTER TABLE `paletas`
  ADD PRIMARY KEY (`ID_Paleta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paletas`
--
ALTER TABLE `paletas`
  MODIFY `ID_Paleta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_venta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
