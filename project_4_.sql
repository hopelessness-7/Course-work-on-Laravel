-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 26 2021 г., 02:43
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project(4)`
--

-- --------------------------------------------------------

--
-- Структура таблицы `balls`
--

CREATE TABLE `balls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `ball` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `balls`
--

INSERT INTO `balls` (`id`, `student_id`, `subject_id`, `ball`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '4', '2021-04-26 18:47:15', '2021-04-26 18:47:15'),
(6, 1, 1, '3', '2021-04-26 18:47:23', '2021-04-26 18:47:23'),
(7, 1, 1, '2', '2021-05-26 18:47:34', '2021-04-26 18:47:34'),
(8, 1, 1, '2', '2021-04-26 18:47:34', '2021-04-26 18:47:34');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_01_151857_create_student_table', 1),
(5, '2021_03_11_121902_create_teachers_table', 1),
(6, '2021_03_14_040304_create_subjects_table', 2),
(7, '2021_03_24_020009_create_balls_table', 2),
(8, '2021_03_29_042432_crate_teachers_table', 3),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(10, '2021_03_29_050043_create_permission_tables', 5),
(11, '2021_03_31_131629_create_subjects_table', 6),
(12, '2021_03_31_133102_create_balls_table', 7),
(13, '2021_04_07_103859_create_balls_table', 8),
(14, '2021_04_07_105001_create_subjects_table', 9),
(15, '2021_04_07_105307_create_students_table', 10),
(16, '2021_04_07_105435_create_teachers_table', 10),
(17, '2021_04_07_111507_create_balls_table', 11),
(18, '2021_04_07_111851_create_balls_table', 12),
(19, '2021_04_07_112500_create_teachers_table', 13),
(20, '2021_04_07_112719_create_subjects_table', 14),
(21, '2021_04_07_113112_create_balls_table', 15),
(22, '2021_04_21_133640_create_students_table', 16),
(23, '2021_04_21_134645_create_teachers_table', 17),
(24, '2021_04_21_134735_create_subjects_table', 18),
(25, '2021_04_21_134827_create_balls_table', 19),
(26, '2021_05_20_121542_create_downloads_table', 20),
(27, '2021_05_20_122405_create_downloadable_table', 20),
(28, '2021_05_20_151125_create_schedules_table', 21),
(29, '2021_05_20_152051_create_schedules_table', 22);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(0, 'App\\Models\\User', 9),
(1, 'App\\Models\\User', 12),
(1, 'App\\Models\\User', 14),
(1, 'App\\Models\\User', 15),
(1, 'App\\Models\\User', 16),
(1, 'App\\Models\\User', 17),
(1, 'App\\Models\\User', 18),
(1, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 13);

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
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(0, 'admin', 'web', '2021-03-28 22:04:02', '2021-03-28 22:04:02'),
(1, 'user', 'web', '2021-03-28 22:13:43', '2021-03-28 22:13:43'),
(3, 'student', 'web', '2021-04-02 06:19:48', '2021-04-02 06:19:48'),
(4, 'teacher', 'web', '2021-04-02 06:20:31', '2021-04-02 06:20:31');

-- --------------------------------------------------------

--
-- Структура таблицы `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `schedules`
--

INSERT INTO `schedules` (`id`, `name`, `file_path`, `name_group`, `data_from`, `data_to`, `created_at`, `updated_at`) VALUES
(1, '1621525522_itsolutionstuff.pdf', '/storage/uploads/1621525522_itsolutionstuff.pdf', NULL, NULL, NULL, '2021-05-20 08:45:22', '2021-05-20 08:45:22'),
(2, '1621525603_itsolutionstuff.pdf', '/storage/uploads/1621525603_itsolutionstuff.pdf', NULL, NULL, NULL, '2021-05-20 08:46:43', '2021-05-20 08:46:43'),
(3, '1621525626_itsolutionstuff.pdf', '/storage/uploads/1621525625_itsolutionstuff.pdf', NULL, NULL, NULL, '2021-05-20 08:47:06', '2021-05-20 08:47:06'),
(4, '1621527871_itsolutionstuff.pdf', '/storage/uploads/1621527871_itsolutionstuff.pdf', NULL, NULL, NULL, '2021-05-20 09:24:31', '2021-05-20 09:24:31'),
(5, '1621527882_itsolutionstuff.pdf', '/storage/uploads/1621527882_itsolutionstuff.pdf', NULL, NULL, NULL, '2021-05-20 09:24:42', '2021-05-20 09:24:42'),
(6, '1621528097_itsolutionstuff.pdf', '/storage/uploads/1621528097_itsolutionstuff.pdf', '123dsa', NULL, NULL, '2021-05-20 09:28:17', '2021-05-20 09:28:17'),
(7, '1621528150_itsolutionstuff.pdf', '/storage/uploads/1621528150_itsolutionstuff.pdf', 'С01', '2021-05-03', '2021-05-09', '2021-05-20 09:29:10', '2021-05-20 09:29:10'),
(8, '1621529940_itsolutionstuff.pdf', '/storage/uploads/1621529940_itsolutionstuff.pdf', 'С11', '2021-05-10', '2021-05-16', '2021-05-20 09:59:00', '2021-05-20 09:59:00'),
(9, '1621530023_itsolutionstuff.pdf', '/storage/uploads/1621530023_itsolutionstuff.pdf', '21', '2021-05-17', '2021-05-23', '2021-05-20 10:00:23', '2021-05-20 10:00:23'),
(10, '1621530061_itsolutionstuff.pdf', '/storage/uploads/1621530061_itsolutionstuff.pdf', '25', '2021-05-24', '2021-05-30', '2021-05-20 10:01:01', '2021-05-20 10:01:01');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `users_id`, `name`, `lastname`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 13, 'test', 'test', '88888', 'test@test', NULL, NULL),
(3, 13, 'test1312', 'fgdgsdg', '13', '123@123', '2021-05-21 03:57:40', '2021-05-21 04:01:27'),
(4, 20, 'test', 'fdgfdgdf', '20', 'test@testUE', '2021-05-21 04:34:47', '2021-05-21 04:34:56'),
(5, 13, 'student', 'fdsfdsfds', '13', 'student@st', '2021-05-21 04:35:17', '2021-05-21 04:35:25');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `code`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'test', '10', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `lastname`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'root', 'root@root', NULL, '$2y$10$bSkAzWnrca0XEifJiCkmCOkHDlY.a.eovIHgOFzq80g432aMjzBqa', NULL, NULL, NULL, '2021-04-02 06:22:06', '2021-04-02 06:22:06'),
(10, 'users', 'user@123', NULL, '$2y$10$m1raXQbrbE7xaPb8VHAVNOUyEuVbRD0NtAPxrZD8.I2AMl2iay.l2', NULL, NULL, NULL, '2021-04-02 20:12:56', '2021-04-02 20:14:28'),
(11, '123', '123@123', NULL, '$2y$10$4RPCf.kKlM3NtwgY8g1yD.UwOVKxI5.ZIzC63PKxXsTK.RET91nLe', NULL, NULL, NULL, '2021-04-02 20:16:12', '2021-04-02 20:16:12'),
(12, 'test123', 'test@test', NULL, '$2y$10$0CUPSq2BrwyY5COdyPVhB.0Oar9PgKqvXI8lA63FCEPpQs3oc1Jc2', NULL, NULL, NULL, '2021-04-07 02:46:14', '2021-04-07 02:46:14'),
(13, 'student', 'student@st', NULL, '$2y$10$MWZIYpKJP5iFWjcCZJat9uYhN318VzovvkIErSRpAMMSrm3XKki9a', NULL, NULL, '10AbF5DoZNuFcRyVJrOOSgkGA7Bv68c5w89ALZ8iPFfB7w9cvvETSioxEjid', '2021-04-07 05:09:45', '2021-04-07 05:09:45'),
(14, '123459', '12@rwer', NULL, '$2y$10$PIY2p5P5hW.oY7Eu4itsnulOWAOVhoAsBjOSUmnz.UKvl2LmYK9NO', NULL, NULL, NULL, '2021-04-07 21:38:05', '2021-04-07 21:38:05'),
(15, 'test1', 'test@test5', NULL, '$2y$10$BsBgdlS0bAxUAQJApy4TE.vOk5yxq6uJYFkUUrqmfRTryFHF7vJwK', NULL, NULL, NULL, '2021-04-19 01:19:24', '2021-04-21 05:34:32'),
(16, 'user', 'us@test', NULL, '$2y$10$SpA9WUEQ.RS0X4ZUgm7o6eLnc/472MRyPWGBeX91rShZuUHBJoPz2', NULL, NULL, NULL, '2021-04-19 22:10:01', '2021-04-19 22:10:01'),
(17, 'twst', 'test@gtrew', NULL, '$2y$10$uBLdoQBVrE/14h8MxGhCveh5R/.X2DegXzdECdUJamWVVFL7ge8i6', NULL, NULL, NULL, '2021-04-24 06:02:39', '2021-04-24 06:02:39'),
(18, '123456', '123456@123456', NULL, '$2y$10$nybwrIsP219wVO9gAFVlZu56ICXkWgHH9foIXK7yrFHc5vsTWJCvu', NULL, NULL, NULL, '2021-04-28 02:12:49', '2021-04-28 02:12:49'),
(19, 'test2', 'test@ts', NULL, '$2y$10$t3qQccVVBeHYoRZ9u83NFu6u.habx8szKhykoLi/9ynPcXCk6JNWa', NULL, NULL, NULL, '2021-04-28 05:54:22', '2021-04-28 05:54:22'),
(20, 'test', 'test@testUE', NULL, '$2y$10$EJq0JLN2OLA5CVe5id2KVe/LBimscMfM8V3m9rgdfMTQ26ubEQgBq', NULL, NULL, NULL, '2021-05-10 01:34:09', '2021-05-10 01:34:09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `balls`
--
ALTER TABLE `balls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `balls_student_id_foreign` (`student_id`),
  ADD KEY `balls_subject_id_foreign` (`subject_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_users_id_foreign` (`users_id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_teacher_id_foreign` (`teacher_id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT для таблицы `balls`
--
ALTER TABLE `balls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `balls`
--
ALTER TABLE `balls`
  ADD CONSTRAINT `balls_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `balls_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`model_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
