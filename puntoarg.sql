-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 17:51:06
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `puntoarg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attractions`
--

CREATE TABLE `attractions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `featured_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `description`, `rating`, `featured_img`, `category_id`, `location_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Avistaje De Ballenas-Puerto Madryn', 'La ballena Franca Austral nos visita cada año y vos podes ser parte de esta historia mágica.', NULL, 'TZsNAoeKs2HoY4ZJ4DkMUO7nMYAlEHYuIEDGx3PV.jpeg', NULL, NULL, '2019-07-04 00:51:55', '2019-07-04 00:51:55', NULL),
(2, 'Cataratas del Iguazú', 'Las majestuosas Cataratas del Iguazú se encuentran en el interior del Parque Nacional Iguazú, un área de preservación de la naturaleza que abarca 67.720 ...', NULL, '6CGNyXf9iIMEbm2wOzFacvmubuXR7pQwsqiVsVHU.jpeg', NULL, NULL, '2019-07-04 02:27:12', '2019-07-04 02:27:12', NULL),
(3, 'Faro del Fin del Mundo', 'Visita al Faro del fin del mundo...', NULL, 'qn2gzfDEXnwFBV7GebBAoVq6JjJStQqzFYMwdYol.jpeg', NULL, NULL, '2019-07-04 03:15:11', '2019-07-04 03:15:11', NULL),
(4, 'Ruta del vivo - Mendoza', 'Visita a las bodegas más reconocidas de Mendoza.\r\nIncluye degustación.', NULL, 'EB3j0xCVbiIntEFyyAE7bFTqdfNM9PqYvnoLEN4c.jpeg', NULL, NULL, '2019-07-04 15:27:37', '2019-07-04 15:27:37', NULL),
(5, 'BiciTour por La Boca- CABA', 'Paseo de 4 horas en bici.\r\nIncluye merienda.', NULL, '84c9AT2EoTXCOINCV5LveGMAYg3pcuXlf3azQbJw.jpeg', NULL, NULL, '2019-07-04 15:29:46', '2019-07-04 15:29:46', NULL),
(7, 'Ski Cerro Catedral', 'ndfbvjfjhñfgkj{ñluhk{jkl}ygjhgklfkmjkhdkfgjfdjhglfds\r\nkjklkhfdbsjklhgcjfdsklb', NULL, '4Q8Kx3U0H9Xlj7qOrHonZynhpJF1OsEcW5is5t1i.jpeg', 5, NULL, '2019-07-04 16:19:21', '2019-07-04 16:19:21', NULL),
(8, 'Cerro Siete colores', 'fvjhfbkchggjhñjhñj{lkgñlkjgnhkjgdfhkjflkbfdshjfgjdsahjkfjgkhdgsajkfgjkhds\r\nbvdhjfdsbjkldjhfshalfgfjkdxcsjikbñgfcsjidkabfgmknvcldsjkbgvflds,mjkbfdlvfdjbh', NULL, '89euzarOCD8zCf22aTlhjqUKpfWLIS8NSd9Usr8A.jpeg', 3, NULL, '2019-07-04 18:18:28', '2019-07-04 18:18:28', NULL),
(9, 'Trekking Talampaya', 'ddddddddddddddddddddddddddddddddddddddddddd\r\nddddddddddddffffffffffffffffffffffffffffffffffffffhhh', NULL, '24vrjMGsP1XzItfoJLXi9qI9hZXaWH91pQXb6e62.jpeg', 3, NULL, '2019-07-04 18:27:00', '2019-07-04 18:27:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `cant` int(11) DEFAULT NULL,
  `voucher_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `cart_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cultura y espectaculos', NULL, NULL, NULL),
(2, 'Extremo', NULL, NULL, NULL),
(3, 'Ecoturismo', NULL, NULL, NULL),
(4, 'Familias', NULL, NULL, NULL),
(5, 'Nieve', NULL, NULL, NULL),
(6, 'Tours', NULL, NULL, NULL),
(7, 'Urbano', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_25_185118_create_vouchers_table', 1),
(4, '2019_06_25_185213_create_locations_table', 1),
(5, '2019_06_25_190621_create_categories_table', 1),
(6, '2019_06_25_190623_create_attractions_table', 1),
(7, '2019_06_25_190627_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `featured_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vouchers`
--

INSERT INTO `vouchers` (`id`, `name`, `description`, `price`, `featured_img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '.ARG PASS 3 dias', 'ffffffffffffffffffffffff', '2000.00', '7hrie1RxcjQd9XmPkSHn9U80XoPHXQJtiyXW7u41.jpeg', '2019-07-04 18:48:21', '2019-07-04 18:48:21', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attractions_category_id_foreign` (`category_id`),
  ADD KEY `attractions_location_id_foreign` (`location_id`);

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_voucher_id_foreign` (`voucher_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `attractions`
--
ALTER TABLE `attractions`
  ADD CONSTRAINT `attractions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `attractions_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`);

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_voucher_id_foreign` FOREIGN KEY (`voucher_id`) REFERENCES `vouchers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
