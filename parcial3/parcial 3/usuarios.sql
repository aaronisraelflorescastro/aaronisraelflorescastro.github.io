-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-04-2024 a las 21:09:09
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `email`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Eduardo Ismael sena garza', 'nanaydo123@gmail.com', 'admin', '2024-03-06 20:20:39', '2024-03-20 18:14:47'),
(2, 'Roberto Ismael Sena Garza', 'vazquezzvictoria@gmail.com', 'usuario', '2024-03-06 20:33:16', '2024-03-06 20:33:16'),
(3, 'Gerardo Cortez', 'Gerardo_gc@gmail.com', 'usuario', '2024-03-07 02:16:33', '2024-03-07 02:16:33'),
(4, 'Gerardo Antonio Monsivais Cortez', 'gera_mg@hotmail.com', 'usuario', '2024-03-07 02:37:52', '2024-03-07 02:37:52'),
(5, 'Jireh Nohemi', 'jireh@gmail.com', 'usuario', '2024-03-22 06:57:17', '2024-03-22 06:57:17'),
(6, 'Erik Marcelo', 'vazquezzvictoriaa@gmail.com', 'usuario', '2024-03-23 01:55:34', '2024-03-23 01:55:34'),
(7, 'gera', 'grs.300k@gmail.com', 'usuario', '2024-03-23 03:16:36', '2024-03-23 03:16:36'),
(8, 'midori', 'mdori@gmail.com', 'usuario', '2024-04-09 02:52:48', '2024-04-09 02:52:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `roles_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contraseña`, `created_at`, `updated_at`, `roles_id`) VALUES
(1, 'Eduardo Ismael sena garza', 'nanaydo123@gmail.com', '64789978e3a82d9a830604d2b5960664dca8ab169ac2caba89a79f010963d9ef', '2024-03-06 20:20:39', '2024-04-09 03:21:50', NULL),
(2, 'Roberto Ismael Sena Garza', 'vazquezzvictoria@gmail.com', '64789978e3a82d9a830604d2b5960664dca8ab169ac2caba89a79f010963d9ef', '2024-03-06 20:33:16', '2024-03-06 20:33:16', NULL),
(3, 'Gerardo Cortez', 'Gerardo_gc@gmail.com', 'ac5488c4d35a6dd6822fb420d2d845662c2cd8dabb073436a169eff691aa6502', '2024-03-07 02:16:33', '2024-03-07 02:16:33', NULL),
(4, 'Gerardo Antonio Monsivais Cortez', 'gera_mg@hotmail.com', '2520a1f37751cae6d1de542f0e14dacb219aa7f1fdb149d852dbe9bb08ebb334', '2024-03-07 02:37:52', '2024-03-07 02:37:52', NULL),
(5, 'Jireh Nohemi', 'jireh@gmail.com', '64789978e3a82d9a830604d2b5960664dca8ab169ac2caba89a79f010963d9ef', '2024-03-22 06:57:17', '2024-04-09 02:49:13', NULL),
(6, 'Erik Marcelo', 'vazquezzvictoriaa@gmail.com', '64789978e3a82d9a830604d2b5960664dca8ab169ac2caba89a79f010963d9ef', '2024-03-23 01:55:34', '2024-03-23 01:55:34', NULL),
(7, 'gera', 'grs.300k@gmail.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', '2024-03-23 03:16:36', '2024-03-23 03:16:36', NULL),
(8, 'midori', 'mdori@gmail.com', 'c78045f4d7730efc5da2d4e27fa1c29f97c5e74c971aef46264e2e8cedc58242', '2024-04-09 02:52:48', '2024-04-09 03:24:36', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_id` (`roles_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
