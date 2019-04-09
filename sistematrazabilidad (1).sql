-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2019 a las 07:04:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistematrazabilidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finca`
--

CREATE TABLE `finca` (
  `numFinca` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ubicacion` varchar(20) NOT NULL,
  `area` float NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `finca`
--

INSERT INTO `finca` (`numFinca`, `nombre`, `ubicacion`, `area`, `created_at`, `updated_at`) VALUES
(3, 'Filadelfia', 'Filadelfia', 3389490, '2019-02-28', '2019-02-28'),
(4, 'La Cueva', 'Liberia(Guanacaste)', 458636, '2019-03-19', '2019-03-19'),
(29, 'Maruca', 'Esparza (Puntarenas)', 151, '2019-03-19', '2019-03-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruta`
--

CREATE TABLE `fruta` (
  `codigo` int(10) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fruta`
--

INSERT INTO `fruta` (`codigo`, `producto`, `presentacion`, `created_at`, `updated_at`) VALUES
(1, 'Melon44', 'GOLD', '2019-02-28', '2019-02-28'),
(5662, 'Melon', 'hola', '2019-03-19', '2019-03-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `numSeccion` int(4) NOT NULL,
  `numFinca` int(3) NOT NULL,
  `area` float NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`numSeccion`, `numFinca`, `area`, `created_at`, `updated_at`) VALUES
(1, 3, 5603030, '2019-02-28', '2019-02-28'),
(2, 3, 5866220, '2019-03-19', '2019-03-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `ROLES` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `remember_token` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `ROLES`, `created_at`, `updated_at`, `remember_token`) VALUES
(123456789, 'Mariel', 'Chaves', 'mariel@gmail.com', '$2y$10$QzzychroafiiyTXDwAKKkOOVYaE6gcjUF5TpfnD5XfhEpqfH9G85G', 'ADMINISTRADOR', '2019-02-27', '2019-02-27', 'ZzI0sXlB6490HvIpzL8wD0copyy5bvgmXk0Hihv6qBSqHwFF0v8FCZYL119A'),
(504210382, 'Fabian', 'Fernandez', 'fabfernandez.14@gmail.com', '$2y$10$zSneMy1I.LFwOZtoajsPEutA1PwADFl7eL4ybEYng2O9Maqtg9LW2', 'ADMINISTRADOR', '2019-03-19', '2019-03-19', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `finca`
--
ALTER TABLE `finca`
  ADD PRIMARY KEY (`numFinca`);

--
-- Indices de la tabla `fruta`
--
ALTER TABLE `fruta`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`numSeccion`,`numFinca`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
