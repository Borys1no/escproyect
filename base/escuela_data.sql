-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2021 a las 17:06:56
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela_data`
CREATE DATABASE escuela_data;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `alumno` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curso` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materia` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tareas` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL,
  `trab_individual` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL,
  `trab_grupal` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL,
  `lecciones` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL,
  `prueba_parcial` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL,
  `suma` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `promedio` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `alumno`, `curso`, `materia`, `tareas`, `trab_individual`, `trab_grupal`, `lecciones`, `prueba_parcial`, `suma`, `promedio`) VALUES
(1, 'Jose Fernando Perez Lopes', 'primero A', 'Ingles ', '9.40', '9.60', '9.25', '9.52', '8.25', '46.01', '9.20'),
(4, 'Luis Juan Ponce Guaman ', 'Tercero C', 'Matematicas', '5.00', '7.00', '9.25', '8.50', '7.45', '37.2', '7.44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombres` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curso_cargo` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `correo`, `password`, `curso_cargo`) VALUES
(1, 'Jose Fernando', 'Perez Chavez', 'jse@hotmail.com', '2bb1d745f0f007f9724a69851eae48b4417c094e', 'Tercero B'),
(7, 'Luisa Maria ', 'Aviles Martines', 'luisa@hotmail.com', '2bb1d745f0f007f9724a69851eae48b4417c094e', 'Cuarto A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
