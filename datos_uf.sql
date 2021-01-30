-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2021 a las 11:28:41
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tarea_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_uf`
--

CREATE TABLE `datos_uf` (
  `id` int(250) NOT NULL,
  `fecha` int(100) NOT NULL,
  `valor` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_uf`
--

INSERT INTO `datos_uf` (`id`, `fecha`, `valor`) VALUES
(8, 2020, 29070.33),
(9, 2019, 28309.94),
(10, 2018, 27565.79),
(11, 2017, 26798.14),
(19, 2016, 26347.98),
(20, 2015, 25629.09),
(21, 2014, 24627.10),
(22, 2013, 23309.56),
(23, 2012, 22840.75),
(24, 2011, 22294.03),
(25, 2010, 21455.55),
(26, 2009, 20942.88),
(27, 2008, 21452.57),
(28, 2007, 19622.66),
(29, 2006, 18336.38),
(30, 2005, 17974.81),
(31, 2004, 17317.05),
(32, 2003, 16920.00),
(33, 2002, 16744.12),
(34, 2001, 16262.66),
(35, 2000, 15769.92),
(36, 1999, 15066.96),
(37, 1998, 14685.39),
(38, 1997, 14096.39),
(39, 1996, 13280.48),
(41, 1995, 12482.81),
(42, 1994, 11533.17),
(43, 1993, 10623.13),
(44, 1992, 9423.56),
(45, 1991, 8286.27),
(46, 1990, 7043.39),
(47, 1989, 5432.32),
(48, 1988, 4484.39),
(49, 1987, 4044.03),
(50, 1986, 3298.77),
(51, 1985, 2818.39),
(52, 1984, 2230.05),
(53, 1983, 1824.03),
(54, 1982, 1464.67),
(55, 1981, 1232.25),
(56, 1980, 1103.61),
(57, 1979, 842.14),
(58, 1978, 613.37),
(59, 1977, 462.58),
(60, 1976, 275.78),
(61, 1975, 94.70),
(62, 1975, 15887.00),
(63, 1974, 2155.11),
(64, 1972, 533.98),
(65, 1971, 301.24),
(66, 1970, 256.67),
(67, 1969, 194.40),
(68, 1968, 148.17),
(69, 1967, 115.38);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_uf`
--
ALTER TABLE `datos_uf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_uf`
--
ALTER TABLE `datos_uf`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
