-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2021 a las 14:29:37
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `topciment`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternate`
--

CREATE TABLE `alternate` (
  `es-ES` varchar(255) NOT NULL,
  `en-GB` varchar(255) NOT NULL,
  `fr-FR` varchar(255) NOT NULL,
  `pl-PL` varchar(255) NOT NULL,
  `de-DE` varchar(255) NOT NULL,
  `zh-CN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alternate`
--

INSERT INTO `alternate` (`es-ES`, `en-GB`, `fr-FR`, `pl-PL`, `de-DE`, `zh-CN`) VALUES
('https://www.topciment.com/es/noticia/6-razones-banos-microcemento-seran-tendencia', 'https://www.topciment.com/en/new/6-reasons-why-microcement-bathrooms-will-be-a-trend-in-2021', 'https://www.topciment.com/fr/nouvelle/6-raisons-pour-lesquelles-les-salles-de-bains-en-beton-cire-seront-tendance', 'https://www.topciment.com/pl/aktualnosci/6-powodow-dlaczego-mikrocement-jest-modny', 'https://www.topciment.com/de/neuigkeit/6-grunde-badezimmer-mikrobeschichtung-wird-trendig-sein', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alternate`
--
ALTER TABLE `alternate`
  ADD PRIMARY KEY (`es-ES`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
