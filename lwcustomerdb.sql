-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 08:16:38
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lwcustomerdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cb_currency`
--

CREATE TABLE `cb_currency` (
  `idcurrency` int(10) UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isocode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cursymbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precisioncost` decimal(10,2) NOT NULL,
  `precisionstd` decimal(10,2) NOT NULL,
  `precisionprize` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cb_currency`
--

INSERT INTO `cb_currency` (`idcurrency`, `currency`, `description`, `isactive`, `isocode`, `cursymbol`, `precisioncost`, `precisionstd`, `precisionprize`, `created_at`, `updated_at`) VALUES
(121, 'Pesos Colombianos', 'Divisa en Colombia', 'Si', 'COP', 'COP $', '2.00', '4.00', '4.00', NULL, NULL),
(122, 'Dólar Estadounidense', 'Divisa en Estados Unidos', 'Si', 'USD', 'USD $', '3.70', '2.00', '4.00', NULL, NULL),
(123, 'Euro', 'Divisa en la Unión Europea', 'Si', 'EUR', 'EUR € ', '3.00', '4.00', '4.00', NULL, NULL),
(124, 'Yen Japonés', 'Divisa en Japón', 'Si', 'JPY', 'JPY ¥', '3.00', '5.00', '5.00', NULL, NULL),
(125, 'Pesos Argentinos', 'Divisa en Argentina', 'Si', 'ARS', 'ARS $', '0.00', '0.00', '0.00', NULL, NULL),
(126, 'Peso Mexicano', 'Divisa en México', 'Si', 'MXN', 'MXN $', '2.00', '5.00', '5.00', NULL, NULL),
(127, 'Real Brasileño', 'Divisa en Brasil', 'Si', 'BRL', 'R$', '3.00', '5.00', '5.00', NULL, NULL);

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
(3, '2021_06_02_232546_create_table_cb_currency_migration', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cb_currency`
--
ALTER TABLE `cb_currency`
  ADD PRIMARY KEY (`idcurrency`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cb_currency`
--
ALTER TABLE `cb_currency`
  MODIFY `idcurrency` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
