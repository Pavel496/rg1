-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2018 г., 09:08
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Вакансия', 'vakansiya', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(2, 'Резюме', 'rezyume', '2018-04-11 01:49:24', '2018-04-11 01:49:24');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2018_02_11_110354_create_posts_table', 1),
(28, '2018_02_11_142948_create_categories_table', 1),
(29, '2018_02_11_145857_create_tags_table', 1),
(30, '2018_02_11_150422_create_post_tag_table', 1),
(31, '2018_03_11_100700_create_photos_table', 1),
(32, '2018_03_19_071734_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'View posts', 'Просмотр публикаций', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(2, 'Create posts', 'Создание публикаций', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(3, 'Update posts', 'Обновление публикаций', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(4, 'Delete posts', 'Удаление публикаций', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(5, 'View users', 'Просмотр пользователей', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(6, 'Create users', 'Создание пользователей', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(7, 'Update users', 'Обновление пользователей', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(8, 'Delete users', 'Удаление пользователей', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(9, 'View roles', 'Просмотр ролей', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(10, 'Create roles', 'Создание ролей', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(11, 'Update roles', 'Обновление ролей', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(12, 'Delete roles', 'Удаление ролей', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(13, 'View permissions', 'Просмотр разрешений', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(14, 'Update permissions', 'Обновление разрешений', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Публикация №1', 'publikatsiya-1', 'salary №1', 'address №1', 'photo №1', 'phone №1', 'email №1', 'Краткое содержание публикации №1', NULL, '<p>Полное содержание публикации №1</p>', 1, 1, 5, '2018-04-06 01:49:24', NULL, '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(2, 'Публикация №2', 'publikatsiya-2', 'salary №2', 'address №2', 'photo №2', 'phone №2', 'email №2', 'Краткое содержание публикации №2', NULL, '<p>Полное содержание публикации №2</p>', 2, 1, 5, '2018-04-07 01:49:24', NULL, '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(3, 'Публикация №3', 'publikatsiya-3', 'salary №3', 'address №3', 'photo №3', 'phone №3', 'email №3', 'Краткое содержание публикации №3', NULL, '<p>Полное содержание публикации №3</p>', 1, 1, 5, '2018-04-08 01:49:24', NULL, '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(5, 'Публикация №5', 'publikatsiya-5', 'salary №5', 'address №5', 'photo №5', 'phone №5', 'email №5', 'Краткое содержание публикации №5', NULL, '<p>Полное содержание публикации №5</p>', 1, 2, 5, '2018-04-10 01:49:24', NULL, '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(6, 'Специалист по связям с общественностью', 'spetsialist-po-svyazyam-s-obshchestvennostyu', NULL, 'Гатчина', NULL, '89643634027', '', 'Региональному интернет-порталу требуется специалист по связям с общественностью. Требования к кандидатам: опыт, активность. Обязанности: SMM, работа со СМИ, SEO. Работа удаленно. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(7, 'Инженер-сметчик', 'inzhener-smetchik', NULL, 'Гатчина', NULL, '89062284540', 'Bogatova@', 'Требуется инженер-сметчик. КС-2, КС-3, КС-6, КС-6а, составление договоров, ведомостей, работа с заказчиком, чтение чертежей. Требования: Знание сметных программ, Smeta, WIZARD, Грант-Смета. Собеседование после рассмотрения резюме. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(8, 'Прораб', 'prorab', NULL, 'Гатчина', NULL, '89062284540', 'Bogatova@NKizhnerova', 'Организация и ведение производства работ на объекте обеспечение выполнения строительно-монтажных работ по всем количественным и качественным показателям, соблюдением проектов производства работ. ведение учета выполненных работ, оформление технической документации, составление отчетности руководство и управление персоналом на объекте. Собеседование после рассмотрения резюме. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(9, 'Сварщик-сборщик', 'svarshchik-sborshchik', NULL, 'Гатчина улица 120 Гатчинской дивизии д 1', NULL, '89522895286', 'prime200@', 'Предприятию по производству электрощитового оборудования требуется Сварщик-сборщик з/п по итогам собеседования с начальником производства ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(10, 'Слесарь сборщик', 'slesar-sborshchik', NULL, 'Гатчина улица 120 Гатчинской дивизии д 1', NULL, '89522895286', 'prime200@ms34lo', 'Предприятию по производству электрощитового оборудования требуется Слесарь сборщик з/п по итогам собеседования с начальником производства ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(11, 'Требуется парикмахер-универсал', 'trebuetsya-parikmakher-universal', NULL, 'Гатчина', NULL, '89531628266', '', 'Салон красоты, которому уже 8 лет, приглашает на постоянную работу парикмахера-универсала с опытом работы. График работы 2/2, з/п сдельная, хорошие условия труда и большая клиентская база. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(12, 'Требуется менеджер по продажам', 'trebuetsya-menedzher-po-prodazham', NULL, 'Гатчина, Соборная ул', NULL, '89219120356', '', 'Требуется активный менеджер по продажам в компанию занимающуюся продажей и обслуживанием офисной техники. Задачи: оптовые и розничные продажи, поддержание и расширение клиентской базы. Зарплата (после испытательного срока): от 20 т.р. + премии за (пере) выполнение плана. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(13, 'Инженер по лесопользованию', 'inzhener-po-lesopolzovaniyu', NULL, 'Гатчина', NULL, '88137193921', 'gatchinales@kitki.ru', 'В Гатчинское лесничество на временную работу (декретный отпуск основного сотрудника) требуется инженер по лесопользованию. Требования: высшее образование (отрасль - лесное хозяйство), опыт работы. Основная деятельность - подготовка проектной документации лесных участков. Средняя заработная плата - 50000. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(14, 'Требуется водитель такси', 'trebuetsya-voditel-taksi', NULL, 'Гатчина', NULL, '88137190040', 'lyudmilakadri@yandex.ru', 'Требуются водители для работы в такси на плановые автомобили. Водительский стаж от 3х лет, безаварийное и аккуратное вождение, без вп. Хорошее знание города и района будет Вашим преимуществом. Низкий план. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(15, 'Требуется юрист', 'trebuetsya-yurist', NULL, 'Гатчина', NULL, '89216410558', 'trashkova_o@yandex.ru', 'На постоянной основе требуется юрист. Требования: высшее образование, опыт работы от 3 лет, опыт представительства в судах, договорной работы. Обязанности-полное юридическое сопровождение компаний, написание исков, договоров, претензий, представление интересов в судах общей юрисдикции, Арбитражных судах. Заработная плата по результатам собеседования. Резюме на адрес электронной почты. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(16, 'Требуется разнорабочий', 'trebuetsya-raznorabochiy', NULL, 'Гатчина', NULL, '89616070791', '', 'в организацию требуются разнорабочие, без вредных привычек. график работы сменный. з/п от 24000. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(17, 'Требуется продавец-консультант', 'trebuetsya-prodavets-konsultant', NULL, 'Гатчина, ул. Киргетова, д. 6', NULL, '89052347733', '', 'В творческий магазин ткани требуется продавец-консультант. Требования: желание влиться в небольшой дружный коллектив; опыт не обязателен, всему научим, поможем, подскажем; корректное обращение с покупателями; ответственность; честность. Опыт работы на швейной машинке приветствуется. Условия: сменный график, с 10:00 до 20:00, ставка + % от продаж. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(18, 'Швеи-мотористки', 'shvei-motoristki', NULL, 'Гатчина', NULL, '89052587152', '', 'Требуются швеи-мотористки на пошив медицинской одноразовой одежды. Качество пошива не важно, главное скорость. Возможно обучение, если есть навыки работы на промышленной швейной машине. Зарплата хорошая, график 5/2, 2/2, возможен вариант работы на дому. Производство находится в Мариенбурге. Все подробности на собеседовании. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(19, 'Требуется флорист', 'trebuetsya-florist', NULL, 'Гатчина', NULL, '89217967727', 'sorokinvitalik@yandex.ru', 'Срочно требуется опытный флорист. Салон цветов находится в центре Гатчины. Если вы любите цветы, то работа будет для Вас вдвойне приятна. Обязанности: Создание композиций из цветов разной сложности: букеты, корзины, оформление свадеб, поддержания салона и холодильника в надлежащем состояние. Условия и требования оговариваются по телефону. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(20, 'Требуется водитель такси', 'trebuetsya-voditel-taksi-20', NULL, 'Гатчинский район, Гатчина', NULL, '88137190040', 'lyudmilakadri@mail.ru', 'Требуется водитель для работы в такси на плановый автомобиль. Водительский стаж от 3х лет, безаварийное и аккуратное вождение. Хорошее знание города и района будет Вашим преимуществом. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(21, 'Требуется продавец', 'trebuetsya-prodavets', NULL, 'п. Сиверский, пер. Строителей,д 1', NULL, '89213095888', '', 'Магазину \"Все для дома и сада\" в пос. Сиверский (пер. Строителей, д1) требуется продавец-консультант в отдел крупной и мелкой бытовой техники. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(22, 'Дробильщик', 'drobilshchik', NULL, 'Гатчина', NULL, '39005', '', 'Приглашаем дробильщика. Сменный график работы. Оклад 21000. Есть развозка. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(23, 'Оператор коптильной печи', 'operator-koptilnoy-pechi', NULL, 'Гатчинский район, поселок Новый Свет', NULL, '89213610272', 'NKizhnerova@', 'На рыбоперерабатывающий комбинат требуется оператор коптильной печи (термист). График работы: полный день. Обязанности: подготовка рыбы к копчению, копчение рыбы в современной печи немецкого производства, обслуживание печи (мойка), следить за санитарным состоянием участка копчения. Требования: без вредных привычек, опыт работы не обязателен. З/п от 35 тыс. руб. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47'),
(24, 'Парикмахер, мастер по маникюра', 'parikmakher-master-po-manikyura', NULL, 'Гатчина, Володарского 29-а', NULL, '89531793570', '', 'Салон-парикмахерская \" Зебра\" расположенный по адресу Гатчина, Володарского 29-а, приглашает на работу парикмахера-универсала и мастера по маникюру-педикюру. ', NULL, NULL, 1, 1, NULL, NULL, NULL, '2018-04-11 01:52:47', '2018-04-11 01:52:47');

-- --------------------------------------------------------

--
-- Структура таблицы `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Администратор', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(2, 'Writer', 'Писатель', 'web', '2018-04-11 01:49:24', '2018-04-11 01:49:24');

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'IT, интернет, телеком', 'it-internet-telekom', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(2, 'Автомобильный бизнес', 'avtomobilnyy-biznes', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(3, 'Административная работа', 'administrativnaya-rabota', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(4, 'Без опыта, студенты', 'bez-opyta-studenty', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(5, 'Бухгалтерия, финансы', 'bukhgalteriya-finansy', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(6, 'Высший менеджмент', 'vysshiy-menedzhment', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(7, 'Госслужба, НКО', 'gossluzhba-nko', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(8, 'Домашний персонал', 'domashniy-personal', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(9, 'ЖКХ, эксплуатация', 'zhkkh-ekspluatatsiya', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(10, 'Искусство, развлечения', 'iskusstvo-razvlecheniya', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(11, 'Консультирование', 'konsultirovanie', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(12, 'Маркетинг, реклама, PR', 'marketing-reklama-pr', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(13, 'Медицина, фармацевтика', 'meditsina-farmatsevtika', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(14, 'Недвижимость', 'nedvizhimost', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(15, 'Образование, наука', 'obrazovanie-nauka', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(16, 'Охрана, безопасность', 'okhrana-bezopasnost', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(17, 'Продажи', 'prodazhi', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(18, 'Производство, сырьё, с/х', 'proizvodstvo-syre-skh', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(19, 'Строительство', 'stroitelstvo', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(20, 'Транспорт, логистика', 'transport-logistika', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(21, 'Туризм, рестораны', 'turizm-restorany', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(22, 'Управление персоналом', 'upravlenie-personalom', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(23, 'Фитнес, салоны красоты', 'fitnes-salony-krasoty', '2018-04-11 01:49:23', '2018-04-11 01:49:23'),
(24, 'Юриспруденция', 'yurisprudentsiya', '2018-04-11 01:49:23', '2018-04-11 01:49:23');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$tEnLBWBJbPEaUJ38UfA4Z.zu11q/N3PqlE1DZQ9kFKb7uLt2M/yBi', NULL, '2018-04-11 01:49:24', '2018-04-11 01:49:24'),
(2, 'user', 'user@user.com', '$2y$10$89Zvy5D.GWVLdrv4rZSR.eMoQulrlgqO0f.V.VM1TdJQw7p8e1kiG', NULL, '2018-04-11 01:49:24', '2018-04-11 01:49:24');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
