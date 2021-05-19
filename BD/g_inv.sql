-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2021 a las 07:49:24
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `g_inv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gruposinv`
--

CREATE TABLE `gruposinv` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `unidad_acad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_grupo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `acronimo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` year(4) NOT NULL,
  `obj_grupo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gruposinv`
--

INSERT INTO `gruposinv` (`id`, `id_usuario`, `unidad_acad`, `nombre_grupo`, `acronimo`, `fecha_creacion`, `obj_grupo`) VALUES
(1, 11, 'Facultad de Informatica', 'Los Sabiondos', 'LS', 2021, 'NADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gruposinvg`
--

CREATE TABLE `gruposinvg` (
  `id` int(11) NOT NULL,
  `unidad_acad` text NOT NULL,
  `nombre_grupo` text NOT NULL,
  `nombre_coor` text NOT NULL,
  `acronimo` text NOT NULL,
  `fecha_creacion` year(4) NOT NULL,
  `obj_grupo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gruposinvg`
--

INSERT INTO `gruposinvg` (`id`, `unidad_acad`, `nombre_grupo`, `nombre_coor`, `acronimo`, `fecha_creacion`, `obj_grupo`) VALUES
(6, 'sdfsf', 'sdfsd', 'sdfs', 'sdfsdf', 2021, 'sdfsdfsdfs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembroginv`
--

CREATE TABLE `miembroginv` (
  `id_miembro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cedula_int` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_int` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_int` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `estatus_int` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `grado_int` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `inst_int` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `area_int` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `tel_int` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `mail_int` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `miembroginv`
--

INSERT INTO `miembroginv` (`id_miembro`, `id_usuario`, `cedula_int`, `nombre_int`, `apellido_int`, `estatus_int`, `grado_int`, `inst_int`, `area_int`, `tel_int`, `mail_int`) VALUES
(2, 13, '8-825-724', 'Oralia', 'Suarez', 'Estudiante', 'Licenciatura', 'Universidad de Panamá', 'farmacia', '5235322', 'jorgeluissanchezrodriguez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `password`, `privilegio`, `fecha_registro`) VALUES
(11, 'Jorge Sánchez', 'jota', 'sanchez.jorge.luisr@gmail.com', 'abc', 1, '2020-07-01 19:38:19'),
(12, 'Maximo', 'Admin', 'jorgeluissanchezrodriguez@gmail.com', 'admin', 2, '2020-07-01 22:05:29'),
(13, 'Andres', 'andi', 'Andresmail@mail.com', '456', 1, '2020-08-06 19:37:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gruposinv`
--
ALTER TABLE `gruposinv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_id` (`id_usuario`);

--
-- Indices de la tabla `gruposinvg`
--
ALTER TABLE `gruposinvg`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miembroginv`
--
ALTER TABLE `miembroginv`
  ADD PRIMARY KEY (`id_miembro`),
  ADD KEY `fk_id_grupo` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gruposinv`
--
ALTER TABLE `gruposinv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `gruposinvg`
--
ALTER TABLE `gruposinvg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `miembroginv`
--
ALTER TABLE `miembroginv`
  MODIFY `id_miembro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gruposinv`
--
ALTER TABLE `gruposinv`
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `miembroginv`
--
ALTER TABLE `miembroginv`
  ADD CONSTRAINT `fk_id_grupo` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
