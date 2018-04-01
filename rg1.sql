-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2018 г., 18:12
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rg1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Вакансия', 'vakansiya', '2018-04-01 06:09:16', '2018-04-01 06:09:16'),
(2, 'Резюме', 'rezyume', '2018-04-01 06:09:16', '2018-04-01 06:09:16');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_11_110354_create_posts_table', 1),
(4, '2018_02_11_142948_create_categories_table', 1),
(5, '2018_02_11_145857_create_tags_table', 1),
(6, '2018_02_11_150422_create_post_tag_table', 1),
(7, '2018_03_11_100700_create_photos_table', 1),
(8, '2018_03_19_071734_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'View posts', 'Просмотр публикаций', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(2, 'Create posts', 'Создание публикаций', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(3, 'Update posts', 'Обновление публикаций', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(4, 'Delete posts', 'Удаление публикаций', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(5, 'View users', 'Просмотр пользователей', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(6, 'Create users', 'Создание пользователей', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(7, 'Update users', 'Обновление пользователей', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(8, 'Delete users', 'Удаление пользователей', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(9, 'View roles', 'Просмотр ролей', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(10, 'Create roles', 'Создание ролей', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(11, 'Update roles', 'Обновление ролей', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(12, 'Delete roles', 'Удаление ролей', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(13, 'View permissions', 'Просмотр разрешений', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(14, 'Update permissions', 'Обновление разрешений', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `iframe` mediumtext COLLATE utf8mb4_unicode_ci,
  `body` mediumtext COLLATE utf8mb4_unicode_ci,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `days` int(10) UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `hide_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `url`, `salary`, `address`, `photo`, `phone`, `email`, `excerpt`, `iframe`, `body`, `category_id`, `user_id`, `days`, `published_at`, `hide_at`, `created_at`, `updated_at`) VALUES
(1, 'Публикация №1', 'publikatsiya-1', 'salary №1', 'address №1', 'photo №1', 'phone №1', 'email №1', 'Краткое содержание публикации №1', NULL, '<p>Полное содержание публикации №1</p>', 1, 1, 7, '2018-03-26 21:00:00', '2018-04-02 21:00:00', '2018-04-01 06:09:16', '2018-04-01 06:36:03'),
(2, 'Публикация №2', 'publikatsiya-2', 'salary №2', 'address №2', 'photo №2', 'phone №2', 'email №2', 'Краткое содержание публикации №2', NULL, '<p>Полное содержание публикации №2</p>', 2, 1, 10, '2018-03-27 21:00:00', '2018-04-06 21:00:00', '2018-04-01 06:09:16', '2018-04-01 06:39:12'),
(3, 'Публикация №3', 'publikatsiya-3', 'salary №3', 'address №3', 'photo №3', 'phone №3', 'email №3', 'Краткое содержание публикации №3', NULL, '<p>Полное содержание публикации №3</p>', 1, 1, 7, '2018-03-28 21:00:00', '2018-04-04 21:00:00', '2018-04-01 06:09:16', '2018-04-01 06:39:55'),
(4, 'Публикация №4', 'publikatsiya-4', 'salary №4', 'address №4', 'photo №4', 'phone №4', 'email №4', 'Краткое содержание публикации №4', NULL, '<p>Полное содержание публикации №4</p>', 2, 2, 5, '2018-03-29 21:00:00', '2018-04-03 21:00:00', '2018-04-01 06:09:16', '2018-04-01 06:40:15'),
(5, 'Публикация №5', 'publikatsiya-5', 'salary №5', 'address №5', 'photo №5', 'phone №5', 'email №5', 'Краткое содержание публикации №5', NULL, '<p>Полное содержание публикации №5</p>', 1, 2, 5, '2018-03-30 21:00:00', '2018-04-04 21:00:00', '2018-04-01 06:09:16', '2018-04-01 07:47:53');

-- --------------------------------------------------------

--
-- Структура таблицы `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 2, 2),
(4, 2, 4),
(5, 3, 3),
(6, 4, 1),
(7, 4, 3),
(8, 5, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Администратор', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(2, 'Writer', 'Писатель', 'web', '2018-04-01 06:09:15', '2018-04-01 06:09:15');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'IT, интернет, телеком', 'it-internet-telekom', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(2, 'Автомобильный бизнес', 'avtomobilnyy-biznes', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(3, 'Административная работа', 'administrativnaya-rabota', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(4, 'Без опыта, студенты', 'bez-opyta-studenty', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(5, 'Бухгалтерия, финансы', 'bukhgalteriya-finansy', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(6, 'Высший менеджмент', 'vysshiy-menedzhment', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(7, 'Госслужба, НКО', 'gossluzhba-nko', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(8, 'Домашний персонал', 'domashniy-personal', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(9, 'ЖКХ, эксплуатация', 'zhkkh-ekspluatatsiya', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(10, 'Искусство, развлечения', 'iskusstvo-razvlecheniya', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(11, 'Консультирование', 'konsultirovanie', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(12, 'Маркетинг, реклама, PR', 'marketing-reklama-pr', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(13, 'Медицина, фармацевтика', 'meditsina-farmatsevtika', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(14, 'Недвижимость', 'nedvizhimost', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(15, 'Образование, наука', 'obrazovanie-nauka', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(16, 'Охрана, безопасность', 'okhrana-bezopasnost', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(17, 'Продажи', 'prodazhi', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(18, 'Производство, сырьё, с/х', 'proizvodstvo-syre-skh', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(19, 'Строительство', 'stroitelstvo', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(20, 'Транспорт, логистика', 'transport-logistika', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(21, 'Туризм, рестораны', 'turizm-restorany', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(22, 'Управление персоналом', 'upravlenie-personalom', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(23, 'Фитнес, салоны красоты', 'fitnes-salony-krasoty', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(24, 'Юриспруденция', 'yurisprudentsiya', '2018-04-01 06:09:15', '2018-04-01 06:09:15');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$OBuJ0A.fuaufFGI9v8EzuemDwYYDx/uuO2nu4I1KBm4sacb6FN4ya', 'I3llqg3FJzid0xFPcel05FaVhnENlk9ZUaQEoeMUZZcSKCKg8sKHHrbVRMgM', '2018-04-01 06:09:15', '2018-04-01 06:09:15'),
(2, 'user', 'user@user.com', '$2y$10$1iv6R2BfTnKBowudNo0kguJ3TMboBN9zt09BRI8M/W2cyGZo0R5S2', 'Ugk6vtf4l4qFpoGbQoNcRfBdpjZB4U6Zl19qywj2SdD90LMLBqIiOeVbo4vi', '2018-04-01 06:09:16', '2018-04-01 06:09:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_url_unique` (`url`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
