-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2021 a las 21:43:01
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistenciabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `id_detalle` int(10) UNSIGNED NOT NULL,
  `trabajador_id` int(10) UNSIGNED NOT NULL,
  `remuneracion` int(11) NOT NULL,
  `finicio` date NOT NULL,
  `ffin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id_detalle`, `trabajador_id`, `remuneracion`, `finicio`, `ffin`, `created_at`, `updated_at`) VALUES
(4, 38, 1200, '2020-06-20', '2020-12-20', '2020-08-21 02:45:47', '2020-08-21 02:45:47'),
(5, 39, 2000, '2020-02-20', '2020-12-22', '2020-08-21 02:51:33', '2020-08-21 02:51:33'),
(6, 40, 4000, '2020-03-20', '2020-11-26', '2020-08-21 02:55:50', '2020-08-21 02:55:50'),
(7, 41, 1301, '2020-05-20', '2020-12-20', '2020-08-21 03:00:10', '2020-08-21 03:00:10'),
(8, 42, 1200, '2020-08-18', '2020-12-18', '2020-08-18 22:37:20', '2020-08-18 22:37:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(10) UNSIGNED NOT NULL,
  `trabajador_id` int(10) UNSIGNED NOT NULL,
  `dia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinicio` time NOT NULL,
  `hfin` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `trabajador_id`, `dia`, `hinicio`, `hfin`, `created_at`, `updated_at`) VALUES
(121, 38, 'Lunes', '08:00:00', '13:00:00', NULL, NULL),
(122, 38, 'Martes', '08:00:00', '13:00:00', NULL, NULL),
(123, 38, 'Miercoles', '08:00:00', '13:00:00', NULL, NULL),
(124, 38, 'Jueves', '08:00:00', '13:00:00', NULL, NULL),
(125, 38, 'Viernes', '08:00:00', '13:00:00', NULL, NULL),
(126, 39, 'Lunes', '08:00:00', '13:00:00', NULL, NULL),
(127, 39, 'Martes', '08:00:00', '13:00:00', NULL, NULL),
(128, 39, 'Miercoles', '08:00:00', '13:00:00', NULL, NULL),
(129, 39, 'Jueves', '08:00:00', '13:00:00', NULL, NULL),
(130, 39, 'Viernes', '08:00:00', '13:00:00', NULL, NULL),
(131, 40, 'Lunes', '08:30:00', '13:00:00', NULL, NULL),
(132, 40, 'Martes', '08:30:00', '13:00:00', NULL, NULL),
(133, 40, 'Miercoles', '08:30:00', '13:00:00', NULL, NULL),
(134, 40, 'Jueves', '08:30:00', '13:00:00', NULL, NULL),
(135, 40, 'Viernes', '08:30:00', '13:00:00', NULL, NULL),
(136, 41, 'Lunes', '08:00:00', '13:00:00', NULL, NULL),
(137, 41, 'Martes', '08:00:00', '13:00:00', NULL, NULL),
(138, 41, 'Miercoles', '08:00:00', '13:00:00', NULL, NULL),
(139, 41, 'Jueves', '08:00:00', '13:00:00', NULL, NULL),
(140, 41, 'Viernes', '08:00:00', '13:00:00', NULL, NULL),
(141, 42, 'Lunes', '08:00:00', '13:00:00', NULL, NULL),
(142, 42, 'Martes', '08:00:00', '13:00:00', NULL, NULL),
(143, 42, 'Miercoles', '08:00:00', '13:00:00', NULL, NULL),
(144, 42, 'Jueves', '08:00:00', '13:00:00', NULL, NULL),
(145, 42, 'Viernes', '08:00:00', '13:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcados`
--

CREATE TABLE `marcados` (
  `id` int(10) UNSIGNED NOT NULL,
  `trabajador_id` int(10) UNSIGNED NOT NULL,
  `horaentrada` time NOT NULL,
  `horasalida` time NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcados`
--

INSERT INTO `marcados` (`id`, `trabajador_id`, `horaentrada`, `horasalida`, `fecha`, `created_at`, `updated_at`) VALUES
(111, 42, '07:41:04', '00:00:00', '2020-08-17', '2020-08-17 12:41:12', '2020-08-17 12:41:12'),
(112, 42, '00:00:00', '13:02:58', '2020-08-17', '2020-08-17 18:03:09', '2020-08-17 18:03:09'),
(113, 42, '07:51:30', '00:00:00', '2020-08-18', '2020-08-18 12:52:24', '2020-08-18 12:52:24'),
(114, 42, '00:00:00', '13:03:21', '2020-08-18', '2020-08-18 18:03:27', '2020-08-18 18:03:27'),
(115, 42, '07:40:42', '00:00:00', '2020-08-19', '2020-08-19 12:40:48', '2020-08-19 12:40:48'),
(116, 42, '00:00:00', '13:41:43', '2020-08-19', '2020-08-19 18:41:52', '2020-08-19 18:41:52'),
(117, 42, '07:43:00', '00:00:00', '2020-08-20', '2020-08-20 12:43:08', '2020-08-20 12:43:08'),
(118, 42, '00:00:00', '13:11:15', '2020-08-20', '2020-08-20 18:11:35', '2020-08-20 18:11:35'),
(119, 42, '07:51:25', '00:00:00', '2020-08-21', '2020-08-21 12:51:34', '2020-08-21 12:51:34'),
(120, 42, '00:00:00', '13:11:20', '2020-08-21', '2020-08-21 18:12:05', '2020-08-21 18:12:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_07_05_233246_create_trabajadores_table', 2),
(9, '2020_07_07_011801_create_horarios_table', 3),
(10, '2020_07_07_080837_create_marcados_table', 4),
(11, '2020_08_14_174820_create_detalles', 5),
(12, '2020_08_20_075829_create_vacaciones_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('danielsaba666@gmail.com', '$2y$10$tbIbVt6eiUUt.MlC6F4F0eGlbIL5E1G5oV.hP8CneIoX8tKGjD/Lq', '2020-07-10 05:44:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `fnacimiento` date NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ninguna',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `user_id`, `nombres`, `apellidos`, `direccion`, `dni`, `telefono`, `fnacimiento`, `area`, `cargo`, `image`, `created_at`, `updated_at`) VALUES
(38, 1, 'Daniel Jose', 'Perez Perez', 'Jr Galvel 1210', 32456789, 994399078, '1990-07-12', 'Administracion', 'Abogado', '1597977898varon4.png', '2020-08-21 02:44:59', '2020-08-21 02:44:59'),
(39, 1, 'Cesar Antonio', 'Salcedo Gomez', 'Jr. Los girazoles 1234', 56789632, 973456784, '1988-01-13', 'Estadistica e Informatica', 'Esp. Estadistica e informatica', '1597978266varon5.jpg', '2020-08-21 02:51:06', '2020-08-21 02:53:23'),
(40, 1, 'Jesus Andre', 'Rodriguez Perez', 'Jr. Arequipa N° 1245', 78671345, 978234567, '1985-12-01', 'Competitividad Agraria', 'Ing. Ciencias Agrarias', '1597978526varon3.jpg', '2020-08-21 02:55:26', '2020-08-21 02:55:26'),
(41, 1, 'Rosmery', 'Crispin Rosas', 'Av. Mariscal Castillas 1245', 56782345, 997456789, '1991-04-15', 'Competitividad Agraria', 'Esp. Administrativo', '1597978789mujer2.jpg', '2020-08-21 02:59:49', '2020-08-21 02:59:49'),
(42, 1, 'Jorge H', 'Perez P', 'Jr. Arequipa', 56789034, 996789034, '1990-06-14', 'Planeamiento y Presupuesto', 'Director', '1597790207varon2.jpg', '2020-08-18 22:36:47', '2020-08-18 22:36:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dasaba', 'dasaba666@gmail.com', NULL, '$2y$10$NuplO84Xu1RWyLZSd7kuquKeBUN.Nn7Hizo1dY7ziXmjc7t.6FyhW', NULL, '2020-07-06 05:15:44', '2020-07-06 05:15:44'),
(7, 'Jorge', 'jorge01@gmail.com', NULL, '$2y$10$mbjTZZhFntzqLj7MRRDosu0oi4TPMRvxJMv/o48ITtNNp0A1w/sRq', NULL, '2020-08-21 18:59:31', '2020-08-21 18:59:31'),
(8, 'Antonio', 'antonio@gmail.com', NULL, '$2y$10$ZQhKysPmqYjJIfOiIPGN6OUSFSB5qf50ayG4L9m0eetWBFu6FFgwO', NULL, '2021-09-01 05:09:54', '2021-09-01 05:09:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones`
--

CREATE TABLE `vacaciones` (
  `id_vacaciones` int(10) UNSIGNED NOT NULL,
  `trabajador_id` int(10) UNSIGNED NOT NULL,
  `finicio` date NOT NULL,
  `ffin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vacaciones`
--

INSERT INTO `vacaciones` (`id_vacaciones`, `trabajador_id`, `finicio`, `ffin`, `created_at`, `updated_at`) VALUES
(4, 38, '2020-08-17', '2020-08-31', '2020-08-21 03:02:12', '2020-08-21 03:02:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `detalles_trabajador_id_foreign` (`trabajador_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `horarios_trabajador_id_foreign` (`trabajador_id`);

--
-- Indices de la tabla `marcados`
--
ALTER TABLE `marcados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marcados_trabajador_id_foreign` (`trabajador_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trabajadores_user_id_index` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  ADD PRIMARY KEY (`id_vacaciones`),
  ADD KEY `vacaciones_trabajador_id_foreign` (`trabajador_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id_detalle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de la tabla `marcados`
--
ALTER TABLE `marcados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  MODIFY `id_vacaciones` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_trabajador_id_foreign` FOREIGN KEY (`trabajador_id`) REFERENCES `trabajadores` (`id`);

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_trabajador_id_foreign` FOREIGN KEY (`trabajador_id`) REFERENCES `trabajadores` (`id`);

--
-- Filtros para la tabla `marcados`
--
ALTER TABLE `marcados`
  ADD CONSTRAINT `marcados_trabajador_id_foreign` FOREIGN KEY (`trabajador_id`) REFERENCES `trabajadores` (`id`);

--
-- Filtros para la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  ADD CONSTRAINT `vacaciones_trabajador_id_foreign` FOREIGN KEY (`trabajador_id`) REFERENCES `trabajadores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
