-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-10-2017 a las 15:16:00
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distro`
--

CREATE TABLE `distro` (
  `id` int(11) NOT NULL,
  `image` tinytext,
  `name` tinytext NOT NULL,
  `ostype` tinytext NOT NULL,
  `based` tinytext NOT NULL,
  `origin` tinytext NOT NULL,
  `arch` tinytext NOT NULL,
  `desktop` tinytext NOT NULL,
  `category` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `version` tinytext,
  `main_page` tinytext NOT NULL,
  `doc` tinytext,
  `forums` tinytext,
  `error_tracker` tinytext,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `distro`
--

INSERT INTO `distro` (`id`, `image`, `name`, `ostype`, `based`, `origin`, `arch`, `desktop`, `category`, `status`, `version`, `main_page`, `doc`, `forums`, `error_tracker`, `description`) VALUES
(9, '', 'Kali linux', 'Linux', 'Ubuntu', 'Spain', 'arm64', 'GNOME', 'Firewall', 'Active', '10', 'kali.org', 'kali.org', 'kali.org', 'kali.org', 'great distro!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distro`
--
ALTER TABLE `distro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distro`
--
ALTER TABLE `distro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
