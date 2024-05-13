-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2024 г., 22:56
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `demo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statements`
--

CREATE TABLE `statements` (
  `id` int NOT NULL,
  `userId` int NOT NULL,
  `carNumber` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `statements`
--

INSERT INTO `statements` (`id`, `userId`, `carNumber`, `description`, `status`) VALUES
(1, 13, 'к003от', 'КОКОС\r\n', 'new'),
(2, 15, 'х228уй', 'подрезал на перекрестке\r\n', 'new');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `phone`, `email`, `login`, `password`) VALUES
(1, 'сэрж', '79339337354', 'fobebago@mailinator.com', 'Labore sunt sunt v', '$2y$10$IPYLvkQU2FM6O1pxrkxVQu49brzMHbXMZwUbYCKvljprxd/JZFxl2'),
(3, 'Et odio est inventor', '18032067552', 'tosybofez@mailinator.com', 'Voluptas deserunt qu', '$2y$10$biEH56sxnxGfBXxbgLkccufSP9p9Z8hwHXnpmpnUBriBONv2DGQIq'),
(4, 'Ea consectetur odit ', '15048719616', 'nudibesapi@mailinator.com', 'Temporibus commodi v', '$2y$10$4WRRxWDVnr7s4/w7s2FwFu8jVBt6sfnzOZ861p.g.R28pqOze1MEW'),
(11, 'Repellendus Quis qu', '12349077876', 'zilezesa@mailinator.com', 'Similique magnam dol', '$2y$10$YFmOfgpr0yx5qY7PPHV47O0/dIQ0XymJmzA9yno7SZGaBsL8ujmku'),
(12, 'Quia est quas eu ip', '11277357074', 'salodir@mailinator.com', 'Possimus sint sit ', '$2y$10$fH9wxT6Oc9tkhiC9K1Al5esmaS//.XRo0XIrf0e9Wy02Mzdy/vFJ6'),
(13, 'Серега Малимонов', '79339337354', 'test@mail.ru', 'smlmnvv', '$2y$10$S/drbqtO.QblCHflULhq5uGSQ//KNzKtK5botEx/nw4C6D0Io349C'),
(14, 'Sunt laboriosam ac', '16841539401', 'cume@mailinator.com', 'test', '$2y$10$EMqWe6vGuiKawcpkGmwPkuiaQlhkbCId91OzmsMnPWhjflU4neRp6'),
(15, 'Таня Блынских', '13962284201', 'tataners@mail.ru', 'tataners', '$2y$10$LGDRWXOPlbo.0Eg7hT8nYO0fy5.i0js11NvWY2KaUKCpjMjmQlTYG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statements`
--
ALTER TABLE `statements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statements`
--
ALTER TABLE `statements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `statements`
--
ALTER TABLE `statements`
  ADD CONSTRAINT `statements_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
