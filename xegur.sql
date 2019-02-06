-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-01-2019 a las 15:14:21
-- Versión del servidor: 5.7.24-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xegur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(133) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `usuario`, `clave`, `cargo`) VALUES
(1, 'pablo', '2020', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id_observaciones` int(133) NOT NULL,
  `detalles` longtext NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id_observaciones`, `detalles`, `fecha`) VALUES
(641, 'dfgdfg\r\ndfgdfgfffffff', '2019-01-13'),
(642, 'fhfghgfhfdgh\r\n6666m trhrtyrtyrtyrty\r\nghhjghjgj\r\naaaaaaaaa\r\ncccccccccc', '2019-01-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(133) NOT NULL,
  `oficina` varchar(255) NOT NULL,
  `legislador` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `manana` varchar(255) NOT NULL,
  `intermedio` varchar(255) NOT NULL,
  `tarde` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `oficina`, `legislador`, `estado`, `manana`, `intermedio`, `tarde`, `fecha`) VALUES
(260, 'SI', 'CANTEROS', 'AUSENTE', ' E S E S E S E S E S E S E S E S', '', '', '2019-01-13'),
(261, 'SI', 'CASSANI', 'PRESENTE', ' E S E S E S E S E S E S E S E', '', '', '2019-01-13'),
(262, 'SI', 'BAEZ', 'AUSENTE', ' E S E S', '', '', '2019-01-13'),
(263, 'SI', 'ROTELA', 'AUSENTE', ' E S E S E S E S E S E S', '', '', '2019-01-13'),
(264, 'SI', 'CANTEROS', 'AUSENTE', '', '', ' E S E S E S E S E S E S E S E S', '2019-01-30'),
(265, 'SI', 'CASSANI', 'PRESENTE', '', '', ' E S E S E S E S E S E', '2019-01-30'),
(266, 'NO', 'BAEZ', 'AUSENTE', '', '', '', '2019-01-30'),
(267, 'SI', 'ROTELA', 'AUSENTE', '', '', ' E S E S E S E S', '2019-01-30'),
(268, 'SI', 'POZO', 'PRESENTE', '', '', ' E S E S E S E S E S E', '2019-01-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id_observaciones`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_observaciones` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=643;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
