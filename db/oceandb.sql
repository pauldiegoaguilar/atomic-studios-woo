-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2023 a las 16:12:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(34, 'roroacostacant@gmail.com', '389532', '2023-07-02 21:37:56', '2023-07-02 22:09:29'),
(35, 'roroacostacant@gmail.com', '145134', '2023-07-03 07:08:11', '2023-07-03 07:12:53'),
(36, 'roroacostacant@gmail.com', '390678', '2023-07-05 05:50:00', '2023-07-05 05:55:34'),
(37, 'roroacostacant@gmail.com', '927898', '2023-07-05 05:55:34', '2023-07-05 05:57:00'),
(38, 'roroacostacant@gmail.com', '565167', '2023-07-05 05:57:00', '2023-07-05 05:59:17'),
(39, 'roroacostacant@gmail.com', '718357', '2023-07-05 05:59:17', '2023-07-05 06:08:20'),
(40, 'roroacostacant@gmail.com', '442050', '2023-07-05 06:08:20', '2023-07-05 06:09:34'),
(41, 'roroacostacant@gmail.com', '705628', '2023-07-07 21:49:53', '2023-07-07 21:50:56'),
(42, 'roroacostacant@gmail.com', '342057', '2023-07-07 21:50:56', '2023-07-07 21:53:53'),
(43, 'roroacostacant@gmail.com', '292083', '2023-07-07 21:53:53', '2023-07-07 22:01:03'),
(44, 'roroacostacant@gmail.com', '896907', '2023-07-07 22:48:12', '2023-07-07 22:53:38'),
(45, 'roroacostacant@gmail.com', '207344', '2023-07-07 22:53:38', '2023-07-07 22:54:32'),
(46, 'roroacostacant@gmail.com', '935473', '2023-07-07 22:54:32', '2023-07-07 22:54:58'),
(47, 'roroacostacant@gmail.com', '997566', '2023-07-07 22:54:58', '2023-07-07 22:56:47'),
(48, 'roroacostacant@gmail.com', '476751', '2023-07-07 22:56:47', '2023-07-07 22:58:35'),
(49, 'roroacostacant@gmail.com', '410911', '2023-07-07 23:36:09', '2023-07-08 07:07:15'),
(50, 'roroacostacant@gmail.com', '531306', '2023-07-08 07:07:17', '2023-07-08 16:30:17'),
(51, 'roroacostacant@gmail.com', '464416', '2023-07-08 16:30:17', '2023-07-08 16:33:18'),
(52, 'roroacostacant@gmail.com', '285818', '2023-07-12 22:02:10', '2023-07-12 22:03:47'),
(53, 'roroacostacant@gmail.com', '228286', '2023-07-13 07:13:38', '2023-07-13 07:18:01'),
(54, 'roroacostacant@gmail.com', '816579', '2023-07-13 07:21:08', '2023-07-13 07:22:10'),
(55, 'roroacostacant@gmail.com', '866459', '2023-07-13 07:31:48', '2023-07-13 07:32:39'),
(56, 'roroacostacant@gmail.com', '684364', '2023-07-13 07:33:33', '2023-07-13 07:37:57'),
(57, 'roroacostacant@gmail.com', '838696', '2023-07-13 07:42:02', '2023-07-13 07:42:29'),
(58, 'roroacostacant@gmail.com', '863091', '2023-07-15 00:33:05', '2023-07-15 00:42:30'),
(59, 'roroacostacant@gmail.com', '993376', '2023-07-15 01:08:30', '2023-07-15 01:14:44'),
(60, 'roroacostacant@gmail.com', '572174', '2023-07-15 01:14:44', '2023-07-15 01:16:17'),
(61, 'roroacostacant@gmail.com', '832255', '2023-07-15 22:27:13', '2023-07-15 22:27:29'),
(62, 'roroacostacant@gmail.com', '334943', '2023-07-15 22:27:29', '2023-07-15 22:40:32'),
(63, 'roroacostacant@gmail.com', '928068', '2023-07-15 22:40:32', '2023-07-15 22:41:37'),
(64, 'roroacostacant@gmail.com', '871611', '2023-07-16 11:15:30', '2023-07-17 14:14:33'),
(65, 'roroacostacant@gmail.com', '148461', '2023-07-17 14:14:34', '2023-07-17 14:20:41'),
(66, 'roroacostacant@gmail.com', '367286', '2023-07-17 14:26:29', '2023-07-17 14:27:39'),
(67, 'roroacostacant@gmail.com', '267134', '2023-07-17 14:27:39', '2023-07-17 14:27:51'),
(68, 'roroacostacant@gmail.com', '945714', '2023-07-17 14:27:51', '2023-07-17 14:28:41'),
(69, 'a@gmail.com', '994199', '2023-07-17 20:39:20', '2023-07-17 20:41:08'),
(70, 'roroacostacant@gmail.com', '747180', '2023-07-17 20:40:09', '2023-07-17 21:10:36'),
(71, 'a@gmail.com', '775885', '2023-07-17 20:41:08', '2023-07-17 20:41:47'),
(72, 'a@gmail.com', '732402', '2023-07-17 20:41:47', '2023-07-17 21:09:46'),
(73, 'a@gmail.com', '314715', '2023-07-17 21:09:47', '2023-07-18 02:45:01'),
(74, 'roroacostacant@gmail.com', '805939', '2023-07-17 21:10:36', '2023-07-17 21:11:59'),
(75, 'roroacostacant@gmail.com', '780534', '2023-07-17 21:40:44', '2023-07-17 21:41:00'),
(76, 'roroacostacant@gmail.com', '612171', '2023-07-17 21:41:00', '2023-07-20 08:30:51'),
(77, 'a@gmail.com', '351608', '2023-07-18 02:45:01', '2023-07-18 02:45:04'),
(78, 'a@gmail.com', '460478', '2023-07-18 02:45:04', '2023-07-18 02:45:04'),
(79, 'a@gmail.com', '846329', '2023-07-18 02:45:05', '2023-07-18 02:45:05'),
(80, 'a@gmail.com', '994924', '2023-07-18 02:45:05', '2023-07-18 02:45:05'),
(81, 'a@gmail.com', '751896', '2023-07-18 02:45:05', '2023-07-18 02:45:05'),
(82, 'a@gmail.com', '280740', '2023-07-18 02:45:05', '2023-07-18 02:45:10'),
(83, 'a@gmail.com', '587724', '2023-07-18 02:45:10', '2023-07-18 02:53:42'),
(84, 'a@gmail.com', '487400', '2023-07-18 02:45:10', '2023-07-18 02:53:42'),
(85, 'a@gmail.com', '438850', '2023-07-18 02:53:42', '2023-07-18 02:53:42'),
(86, 'a@gmail.com', '434889', '2023-07-18 02:53:42', NULL),
(87, 'roroacostacant@gmail.com', '727765', '2023-07-20 08:30:51', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `usuario_id` int(11) NOT NULL,
  `codigoProducto` varchar(250) NOT NULL,
  `estatus` varchar(50) NOT NULL,
  `fechaCompra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_trans`, `usuario_id`, `codigoProducto`, `estatus`, `fechaCompra`) VALUES
(1, 1, '1236571417;8b93d2ed;c408;481e;b053;a83e6eb6b339', 'pendiente', '2023-09-24 09:54:24'),
(2, 1, '1236571417;c4d29c4e;6dbb;4939;8385;868e5164ff23', 'pendiente', '2023-09-24 09:55:30'),
(3, 1, '1236571417;8b93d2ed;c408;481e;b053;a83e6eb6b339', 'pendiente', '2023-09-24 09:56:12'),
(4, 1, '1236571417;c4d29c4e;6dbb;4939;8385;868e5164ff23', 'pendiente', '2023-09-24 09:58:57'),
(5, 1, '1236571417-8b93d2ed-c408-481e-b053-a83e6eb6b339', 'pendiente', '2023-09-24 10:00:00'),
(6, 1, '1236571417-a1934d85-d6a4-4312-8f28-d81a4e3e9685', 'pendiente', '2023-09-24 10:00:58'),
(7, 1, '1236571417-a1934d85-d6a4-4312-8f28-d81a4e3e9685', 'pendiente', '2023-09-24 10:01:41'),
(8, 28, '1236571417-8b93d2ed-c408-481e-b053-a83e6eb6b339', 'pendiente', '2023-09-24 10:04:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flotas`
--

CREATE TABLE `flotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `valor` mediumint(8) UNSIGNED DEFAULT NULL,
  `imagen` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `droprate` varchar(50) DEFAULT NULL,
  `cofre_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flotas`
--

INSERT INTO `flotas` (`id`, `nombre`, `descripcion`, `valor`, `imagen`, `modelo`, `droprate`, `cofre_id`) VALUES
(1, 'default', 'Esta es la flota por defecto', NULL, 'img/flotas/default.png', 'modelos/default.blend', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `flota_id` int(10) UNSIGNED NOT NULL,
  `lastOwner` int(10) UNSIGNED DEFAULT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `usuario_id`, `flota_id`, `lastOwner`, `fecha_alta`, `fecha_baja`) VALUES
(1, 28, 1, NULL, '2023-09-28', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `cuerpo` varchar(2000) NOT NULL,
  `lista` varchar(4000) NOT NULL,
  `idioma` enum('esp','eng') NOT NULL,
  `fecha_alta` date NOT NULL,
  `rutas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `cuerpo`, `lista`, `idioma`, `fecha_alta`, `rutas`) VALUES
(21, 'nueva pagina disponible!!!!!!', 'Esta es un pagina que llega a cambiarlo todo, tiene una interfaz bien chevere ', '', 'esp', '2023-09-28', 'img/1.png,img/2.png,img/3.png,img/4.png,img/5.png'),
(22, 'nueva pagina disponible!!!', '¡Únete a la batalla naval más emocionante jamás vista en \"War Over Ocean\"! Enfréntate a un mundo lleno de acción y estrategia en alta mar. Conviértete en el comandante supremo de una flota poderosa y lucha contra jugadores de todo el mundo en tiempo real. <br />\r\n<br />\r\nDomina los mares, personaliza tus barcos, y despliega tus habilidades estratégicas en escenarios impresionantes. ¡Defiende tus rutas comerciales, forma alianzas estratégicas y sumérgete en un mundo de batallas navales épicas!<br />\r\n<br />\r\nExperimenta la emoción de la guerra en el océano, donde cada decisión cuenta. ¿Tienes lo que se necesita para gobernar los mares y ser el capitán legendario que todos temen? ¡Descarga \"War Over Ocean\" y demuestra tu dominio en la batalla naval definitiva! ¡Únete hoy mismo y comienza tu épica aventura marítima!', 'Nuevo Soporte: Centro de Ayuda Mejorado: Un recurso integral con preguntas frecuentes, tutoriales y guías para ayudar a los jugadores a resolver problemas y mejorar su experiencia.|Nueva Tienda: Permite a los jugadores personalizar y mejorar sus barcos con una amplia selección de armamento, equipos y pinturas únicas.', 'esp', '2023-09-28', 'img/1.png,img/2.png,img/3.png,img/4.png,img/5.png'),
(23, 'new page available!!!', 'Join the most exciting naval battle ever seen in \"War Over Ocean\"! Face a world full of action and strategy on the high seas. Become the supreme commander of a powerful fleet and fight against players from all over the world in real time.<br />\r\nDominate the seas, customize your ships, and deploy your strategic skills in impressive settings. Defend your trade routes, form strategic alliances and immerse yourself in a world of epic naval battles!<br />\r\nExperience the thrill of war on the ocean, where every decision counts. Do you have what it takes to rule the seas and be the legendary captain everyone fears? Download \"War Over Ocean\" and show your dominance in the ultimate naval battle! Join today and begin your epic maritime adventure!', 'New Support: Improved Help Center: A comprehensive resource with FAQs, tutorials and guides to help players resolve issues and improve their experience.|Nueva Tienda: Permite a los jugadores personalizar y mejorar sus barcos con una amplia selección de armamento, equipos y pinturas únicas.', 'eng', '2023-09-28', 'img/1.png,img/2.png,img/3.png,img/4.png,img/5.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` float UNSIGNED NOT NULL,
  `cantidad` mediumint(8) UNSIGNED NOT NULL,
  `productos_id` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `codigoProducto` varchar(250) NOT NULL,
  `inicio_oferta` datetime DEFAULT NULL,
  `fin_oferta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `productos_id`, `img`, `codigoProducto`, `inicio_oferta`, `fin_oferta`) VALUES
(1, '1000 Monedas', 'Añade a tu cuenta 1000 monedas', 0.99, 1000, '', 'img/1000Monedas.png', '1236571417-8b93d2ed-c408-481e-b053-a83e6eb6b339', NULL, NULL),
(2, '10000 Monedas', 'Añade a tu cuenta 10000 monedas', 3.99, 10000, '', 'img/10000Monedas.png', '1236571417-c4d29c4e-6dbb-4939-8385-868e5164ff23', NULL, NULL),
(3, '100000 Monedas', 'Añade a tu cuenta 100000 monedas', 7.99, 100000, '', 'img/100000Monedas.png', '1236571417-a1934d85-d6a4-4312-8f28-d81a4e3e9685', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos`
--

CREATE TABLE `torneos` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(350) NOT NULL,
  `monedas` int(10) UNSIGNED NOT NULL,
  `cofre_id` mediumint(8) UNSIGNED NOT NULL,
  `cantidadCofres` mediumint(8) UNSIGNED NOT NULL,
  `campeon_id` mediumint(8) UNSIGNED DEFAULT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `rutas` varchar(100) NOT NULL,
  `idioma` enum('esp','eng') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `torneos`
--

INSERT INTO `torneos` (`id`, `titulo`, `descripcion`, `monedas`, `cofre_id`, `cantidadCofres`, `campeon_id`, `fecha_alta`, `fecha_baja`, `rutas`, `idioma`) VALUES
(37, 'the motherfucking title  ', 'the motherfucking descirption of this card is awful, i want to sue my mom because she told me i was not her son. but that is not actually the real thing, rather i hate her because she is a mutant fish with an alien helmet who does not hesitate with killing me', 5000, 1, 1, NULL, '2023-07-28', NULL, 'img/cartel.png', 'esp'),
(38, 'the motherfucking title  ', 'the motherfucking descirption of this card is horrible, quiero demandar a mi mamá porque me dijo que no era su hijo. pero eso no es en realidad lo real, más bien la odio porque es un pez mutante con un casco alienígena que no duda en matarme', 5000, 1, 1, NULL, '2023-07-28', NULL, 'img/cartel.png', 'eng'),
(39, 'the most epic title', 'the most epic description ever omg it is so fucking epic, give them an emi please they deserve it.\r\ni fucking love this motherfucking piece of shit i dont want to do this kind of stuff, but it is \'right\'.', 5000, 1, 1, NULL, '2023-07-28', NULL, 'img/over_ocean.jpg', 'eng'),
(40, 'el título más épico ', 'la descripción más épica de la historia es tan jodidamente épica, dales un emi, por favor, se lo merecen.\r\nme encanta este maldito pedazo de mierda, no quiero hacer este tipo de cosas, pero es &quot;correcto&quot;.', 5000, 1, 1, NULL, '2023-07-28', NULL, 'img/over_ocean.jpg', 'esp'),
(47, 'title title title title', 'this is a paragraph, so do not cut it pleas or i will fucking explode.\r\n\r\nOMG THIS IS INSANE.\r\nTHIS IS A PARAGRAPH, SO DO NOT CUT IT PLEAS OR I WILL FUCKING EXPLODE.\r\n\r\nOMG THIS IS INSANE', 5000, 2, 1, NULL, '2023-07-28', NULL, 'img/icon.png', 'eng'),
(48, 'title title title title', 'este es un p&aacute;rrafo, as&iacute; que no lo cortes s&uacute;plicas o explotar&eacute;.\n\nOMG ESTO ES UNA LOCURA.\nESTE ES UN P&Aacute;RRAFO, AS&Iacute; QUE NO LO CORTES S&Uacute;PLICAS O EXPLOTAR&Eacute;.\n\nOMG ESTO ES UNA LOCURA', 5000, 2, 1, NULL, '2023-07-28', NULL, 'img/icon.png', 'esp');

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
  `victorias` mediumint(8) UNSIGNED NOT NULL,
  `partidas` mediumint(8) UNSIGNED NOT NULL,
  `esMod` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`, `genero`, `fotoPerfil`, `monedas`, `descripcion`, `flota_id`, `fecha_alta`, `fecha_baja`, `victorias`, `partidas`, `esMod`) VALUES
(1, 'lol', 'roroacostacant@gmail.com', '@@@123abc', 'masculino', 'img/perfil-def.png', 1000, '\"...\"', 1, '2023-06-24', '2023-09-28', 0, 0, 1),
(25, 'elpepe', 'pepaso@yahoo.net.com', 'abc123@@@', 'indefinido', NULL, 0, '...', 1, '2023-07-21', NULL, 0, 0, 0),
(27, 'rata12', 'rata12@gmail.com', '@@@abc123', 'indefinido', 'img/user.png', 0, '...', 1, '2023-09-07', NULL, 0, 0, 0),
(28, 'augustoTorres', 'zicario@gmail.com', '123abc@@@', 'indefinido', 'img/user.png', 0, '...', 1, '2023-09-28', NULL, 0, 0, 0),
(29, 'zikarioReal', 'elverdadero@gmail.com', '123abc@@@', 'indefinido', 'img/user.png', 0, '...', 1, '2023-09-28', NULL, 0, 0, 0),
(30, 'cuentaaaa', 'cuentaaaa@gmail.com', '123abc@@@', 'indefinido', 'img/user.png', 0, '...', 1, '2023-09-28', NULL, 0, 0, 0);

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
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `cofres`
--
ALTER TABLE `cofres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_trans` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `flotas`
--
ALTER TABLE `flotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `torneos`
--
ALTER TABLE `torneos`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
