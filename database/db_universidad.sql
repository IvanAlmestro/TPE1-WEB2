-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2022 a las 02:05:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras_grado`
--

CREATE TABLE `carreras_grado` (
  `id` int(11) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `duracion` varchar(100) NOT NULL,
  `sede` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras_grado`
--

INSERT INTO `carreras_grado` (`id`, `carrera`, `duracion`, `sede`) VALUES
(1, 'Ingeniería En Sistemas', '5 años', 'Tandil'),
(2, 'TUDAI', '5 cuatrimestres', 'Tandil'),
(3, 'TUARI', '5 cuatrimestres', 'Tandil'),
(4, 'Prof. de Informática', '5 años', 'Tandil'),
(5, 'Prof. de Física', '5 años', 'Lamadrid'),
(6, 'Abogacía', '5 años', 'Azul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `edad`, `dni`, `carrera_id`) VALUES
(1, 'Iván Almestro', 19, 44535277, 2),
(2, 'Jazmín Reynoso', 19, 45303093, 6),
(3, 'Lucas Gómez', 23, 42034055, 3),
(4, 'Tomas Echavarria', 23, 43434354, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras_grado`
--
ALTER TABLE `carreras_grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrera_id` (`carrera_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras_grado`
--
ALTER TABLE `carreras_grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`carrera_id`) REFERENCES `carreras_grado` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
