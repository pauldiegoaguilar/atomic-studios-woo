-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2023 a las 03:27:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oceandb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chestroom`
--

CREATE TABLE `chestroom` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `cofre_id` int(10) UNSIGNED NOT NULL,
  `lastOwner_id` int(10) UNSIGNED NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos`
--

CREATE TABLE `codigos` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codigos`
--

INSERT INTO `codigos` (`id`, `mail`, `codigo`, `fecha_alta`, `fecha_baja`) VALUES
(1, 'roroacostacant@gmail.com', '508826', '2023-06-29 04:15:40', '2023-06-29 04:25:49'),
(2, 'roroacostacant@gmail.com', '804720', '2023-06-29 04:20:17', '2023-06-29 04:25:49'),
(3, 'roroacostacant@gmail.com', '126918', '2023-06-29 04:20:40', '2023-06-29 04:25:49'),
(4, 'roroacostacant@gmail.com', '178004', '2023-06-29 04:25:49', '2023-06-29 04:32:37'),
(5, 'roroacostacant@gmail.com', '547118', '2023-06-29 04:32:40', '2023-06-29 04:36:48'),
(6, 'roroacostacant@gmail.com', '194259', '2023-06-29 04:36:50', '2023-06-29 04:48:35'),
(7, 'roroacostacant@gmail.com', '928886', '2023-06-29 04:48:37', '2023-06-29 04:55:24'),
(8, 'roroacostacant@gmail.com', '898304', '2023-06-29 04:48:38', '2023-06-29 04:55:24'),
(9, 'roroacostacant@gmail.com', '694759', '2023-06-29 04:55:27', '2023-06-29 04:59:34'),
(10, 'roroacostacant@gmail.com', '191339', '2023-06-29 04:59:55', '2023-06-29 05:02:36'),
(11, 'roroacostacant@gmail.com', '574447', '2023-06-29 04:59:59', '2023-06-29 05:02:36'),
(12, 'roroacostacant@gmail.com', '134203', '2023-06-29 05:02:38', '2023-06-29 05:05:05'),
(13, 'roroacostacant@gmail.com', '204000', '2023-06-29 05:05:08', '2023-06-29 05:06:03'),
(14, 'roroacostacant@gmail.com', '760040', '2023-06-29 05:06:04', '2023-06-29 05:09:01'),
(15, 'roroacostacant@gmail.com', '712017', '2023-06-29 05:09:02', '2023-06-29 05:09:30'),
(16, 'roroacostacant@gmail.com', '218583', '2023-06-29 05:09:31', '2023-07-01 20:05:49'),
(17, 'roroacostacant@gmail.com', '989994', '2023-07-01 20:05:49', '2023-07-02 00:21:26'),
(18, 'roroacostacant@gmail.com', '615336', '2023-07-02 00:21:26', '2023-07-02 00:23:49'),
(19, 'roroacostacant@gmail.com', '665870', '2023-07-02 00:23:49', '2023-07-02 00:35:38'),
(20, 'roroacostacant@gmail.com', '959915', '2023-07-02 00:35:39', '2023-07-02 01:17:34'),
(21, 'roroacostacant@gmail.com', '474235', '2023-07-02 01:17:34', '2023-07-02 01:20:29'),
(22, 'roroacostacant@gmail.com', '431277', '2023-07-02 01:20:30', '2023-07-02 01:23:18'),
(23, 'roroacostacant@gmail.com', '997966', '2023-07-02 01:23:18', '2023-07-02 01:25:24'),
(24, 'roroacostacant@gmail.com', '713381', '2023-07-02 01:25:24', '2023-07-02 01:27:50'),
(25, 'roroacostacant@gmail.com', '602688', '2023-07-02 01:27:50', '2023-07-02 01:31:35'),
(26, 'roroacostacant@gmail.com', '316871', '2023-07-02 01:31:35', '2023-07-02 01:34:16'),
(27, 'roroacostacant@gmail.com', '242959', '2023-07-02 01:34:16', '2023-07-02 01:35:19'),
(28, 'roroacostacant@gmail.com', '710298', '2023-07-02 01:35:19', '2023-07-02 01:36:09'),
(29, 'roroacostacant@gmail.com', '631624', '2023-07-02 01:36:09', '2023-07-02 01:38:00'),
(30, 'roroacostacant@gmail.com', '783430', '2023-07-02 01:38:00', '2023-07-02 01:38:25'),
(31, 'roroacostacant@gmail.com', '246222', '2023-07-02 01:38:25', '2023-07-02 01:47:27'),
(32, 'roroacostacant@gmail.com', '126648', '2023-07-02 01:47:27', '2023-07-02 01:51:47'),
(33, 'roroacostacant@gmail.com', '145738', '2023-07-02 01:51:47', '2023-07-02 03:35:15'),
(34, 'roroacostacant@gmail.com', '389532', '2023-07-02 21:37:56', '2023-07-02 22:09:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cofres`
--

CREATE TABLE `cofres` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rareza` varchar(50) NOT NULL,
  `oro` mediumint(8) UNSIGNED NOT NULL,
  `tiempo` time NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `droprate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cofres`
--

INSERT INTO `cofres` (`id`, `nombre`, `rareza`, `oro`, `tiempo`, `modelo`, `droprate`) VALUES
(1, 'cofre fantasma', 'unico', 10000, '62:00:00', 'modelos/ghostchest.blend', '0.1'),
(2, 'cofre pirata', 'legendario', 5000, '22:00:00', 'modelos/piratechest.blend', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_trans` int(10) UNSIGNED NOT NULL,
  `datosComprador` varchar(100) NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) NOT NULL,
  `fechaCompra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flotas`
--

CREATE TABLE `flotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `valor` mediumint(8) UNSIGNED NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `droprate` varchar(50) NOT NULL,
  `cofre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `flota_id` int(10) UNSIGNED NOT NULL,
  `lastOwner` int(10) UNSIGNED NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos`
--

CREATE TABLE `torneos` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `monedas` int(10) UNSIGNED NOT NULL,
  `cofre_id` mediumint(8) UNSIGNED NOT NULL,
  `campeon_id` mediumint(8) UNSIGNED DEFAULT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `torneos`
--

INSERT INTO `torneos` (`id`, `nombre`, `descripcion`, `monedas`, `cofre_id`, `campeon_id`, `fecha_alta`, `fecha_baja`, `ruta`) VALUES
(1, 'torneopasado', 'este es el torneo pasado', 2000, 1, 1, '2023-06-18', '2023-06-18', 'img/radar.png'),
(2, 'torneoactual', 'este es el torneo actual', 3000, 2, 1, '2023-06-18', '2023-06-19', 'img/radar.png'),
(3, 'elgulaj', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae voluptatum ad nobis iste alias soluta quod dolorem dolore pariatur, cumque quia aspernatur eos veritatis. Molestias tenetur deleniti ducimus consequuntur!', 4000, 1, NULL, '2023-06-19', NULL, 'img/radar.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `fotoPerfil` varchar(200) DEFAULT NULL,
  `monedas` mediumint(8) UNSIGNED NOT NULL,
  `descripcion` varchar(200) NOT NULL DEFAULT '"..."',
  `flota_id` tinyint(3) UNSIGNED NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `victorias` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`, `genero`, `fotoPerfil`, `monedas`, `descripcion`, `flota_id`, `fecha_alta`, `fecha_baja`, `victorias`) VALUES
(1, 'rodrigo', 'roroacostacant@gmail.com', '', 'masculino', 'img/perfil-def.png', 0, '\"...\"', 1, '2023-06-24', NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chestroom`
--
ALTER TABLE `chestroom`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codigos`
--
ALTER TABLE `codigos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cofres`
--
ALTER TABLE `cofres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indices de la tabla `flotas`
--
ALTER TABLE `flotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chestroom`
--
ALTER TABLE `chestroom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `codigos`
--
ALTER TABLE `codigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `cofres`
--
ALTER TABLE `cofres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_trans` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `flotas`
--
ALTER TABLE `flotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `torneos`
--
ALTER TABLE `torneos`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
