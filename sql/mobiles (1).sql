-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2019 a las 17:08:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mobiles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_id` bigint(20) UNSIGNED NOT NULL,
  `n_opinion` int(11) NOT NULL,
  `opinion_web` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opinion_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `links`
--

INSERT INTO `links` (`id`, `mobile_id`, `n_opinion`, `opinion_web`, `opinion_url`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Phonehouse', 'https://www.phonehouse.es/movil/samsung/galaxy-s9/opiniones.html', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(2, 2, 48, 'Phonehouse', 'https://www.phonehouse.es/movil/sony/xperia-z3/opiniones.html', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(3, 2, 35, 'Amazon', 'https://www.amazon.es/Sony-Xperia-Smartphone-Snapdragon-importado/product-reviews/B00N9O8C2M/ref=dpx_acr_txt?showViewpoints=1', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(4, 3, 94, 'Amazon', 'https://www.amazon.es/Xiaomi-Pro-Smartphone-Snapdragon-Transparente/product-reviews/B07KMFZCQT/ref=dpx_acr_txt?showViewpoints=1', '2019-04-09 13:28:31', '2019-04-09 13:28:31');

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
(39, '2014_10_12_000000_create_users_table', 1),
(40, '2014_10_12_100000_create_password_resets_table', 1),
(41, '2019_04_01_092933_create_ranges_table', 1),
(42, '2019_04_02_201732_create_mobiles_table', 1),
(43, '2019_04_02_201755_create_links_table', 1),
(44, '2019_04_09_093854_create_roles_table', 1),
(45, '2019_04_09_094156_create_role_user_table', 1),
(46, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(47, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(48, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(49, '2016_06_01_000004_create_oauth_clients_table', 2),
(50, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mobiles`
--

CREATE TABLE `mobiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valuation` int(11) NOT NULL,
  `range_id` bigint(20) UNSIGNED NOT NULL,
  `url_photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mobiles`
--

INSERT INTO `mobiles` (`id`, `name`, `valuation`, `range_id`, `url_photo`, `created_at`, `updated_at`) VALUES
(1, 'Samsung S9', 8, 1, 'https://image.samsung.com/latin/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9_lilacpurple_01.png', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(2, 'Sony Xperia Z23', 7, 2, 'https://www.androidcentral.com/sites/androidcentral.com/files/styles/xlarge/public/article_images/2018/08/sony-xperia-xz3-render-3.png?itok=uv1pUZ7c', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(3, 'Xiaomi Mi Pro 8', 9, 3, 'https://i.ebayimg.com/images/g/u8MAAOSw2jNbquwo/s-l300.png', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(4, 'Huawei Mate 20', 9, 3, 'https://www.androidforyou.es/pub/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/t/h/thumb_163010_default_big_1.png', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(5, 'LeEco Le Pro 3 X722', 8, 3, 'https://lifesconfession.com/phonitek/wp-content/uploads/leeco-le-max-2-dorado-1.png', '2019-04-09 13:28:31', '2019-04-09 13:28:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'AEWkXkq3RietOAyrp3TWqphnPPL0iDwvtwi4pqXM', 'http://localhost', 1, 0, 0, '2019-04-10 12:47:09', '2019-04-10 12:47:09'),
(2, NULL, 'Laravel Password Grant Client', 'kU6VfjNitOMevGLm7EOsq3YjL4wZJxbqLKN0Ahmv', 'http://localhost', 0, 1, 0, '2019-04-10 12:47:09', '2019-04-10 12:47:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-04-10 12:47:09', '2019-04-10 12:47:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `ranges`
--

CREATE TABLE `ranges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ranges`
--

INSERT INTO `ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '0-10', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(2, '10-50', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(3, '50-100', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(4, '100-1000', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(5, '>1000', '2019-04-09 13:28:31', '2019-04-09 13:28:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(2, 'user', 'User', '2019-04-09 13:28:31', '2019-04-09 13:28:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(2, 2, 1, '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(3, 2, 2, '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(4, 2, 3, '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(5, 2, 4, '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(6, 2, 5, '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(7, 2, 6, '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(8, 2, 7, '2019-04-09 13:28:31', '2019-04-09 13:28:31');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dextroyer', 'realdextroyer@gmail.com', '2019-04-09 13:28:31', '$2y$10$3Nyi1TU4tOxFWwjgvm2dQ.Z0XPwfcdeVyJRoyyh9B6Fj23k5UbWGm', '58nZEx5N7EU23hfxItSNpeG4s1O8XJJGVSMc79NX7I0eUgp6C8ieNvc4mKn0', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(2, 'asier', 'asiervallejo@gmail.com', '2019-04-09 13:28:31', '$2y$10$lTdRKZf1TQtdEV8xp6QObeFRAFqQS067WEnaxyXK5A/EIxEM048sS', 'NViumFkoSndIPwSAX3hFmn40kvDPV3pvtDqXjvirHGTvUF6hxJrw0sp2VQRh', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(3, 'Corbin Stracke', 'dooley.hermina@example.com', '2019-04-09 13:28:31', '$2y$10$dQn17UO1xJxCvm.mGqbN8u97e1BVR/7RBe/Xfiq9RYotnvl3lJKXy', 'mtRRYCphcI', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(4, 'Dr. Jabari Hansen', 'bert.grady@example.net', '2019-04-09 13:28:31', '$2y$10$Lb9OpZA4mSr8XFGkK9D8nePmw6.idVP.3em2uyLdX.ehk8o0RRuu6', 'l3rkTLtqFR', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(5, 'Bettye Kshlerin', 'kip63@example.com', '2019-04-09 13:28:31', '$2y$10$apHtoVEijN0d75TU.S9pleqIMs51zYQK1nDQorlN7DN6IGfszm/c2', 'tfr7KTHh0p', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(6, 'Hallie Daugherty I', 'okuneva.lura@example.com', '2019-04-09 13:28:31', '$2y$10$l55tmyrWMkXj34cLj6uCC.xFQ.bb0C.AwZODZa8ZrJ7fqt9ELEADq', 'ovXFXagkWO', '2019-04-09 13:28:31', '2019-04-09 13:28:31'),
(7, 'Tyson Johns', 'leuschke.gilbert@example.org', '2019-04-09 13:28:31', '$2y$10$YsixfhplrtI8F3rMYwguG.64Edn26PedpIxMWS1UI9DohftlrwDqi', '5lUnWifZyr', '2019-04-09 13:28:31', '2019-04-09 13:28:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `links_mobile_id_foreign` (`mobile_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobiles_range_id_foreign` (`range_id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `ranges`
--
ALTER TABLE `ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ranges`
--
ALTER TABLE `ranges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_mobile_id_foreign` FOREIGN KEY (`mobile_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `mobiles`
--
ALTER TABLE `mobiles`
  ADD CONSTRAINT `mobiles_range_id_foreign` FOREIGN KEY (`range_id`) REFERENCES `ranges` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
