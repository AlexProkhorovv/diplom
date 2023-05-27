-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2023 г., 16:07
-- Версия сервера: 5.6.51
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `save-calculator`
--

CREATE TABLE `save-calculator` (
  `id` int(11) NOT NULL,
  `total` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulation` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bw` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `id-user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `save-test`
--

CREATE TABLE `save-test` (
  `id` int(11) NOT NULL,
  `value1` int(11) NOT NULL,
  `value2` int(11) NOT NULL,
  `value3` int(11) NOT NULL,
  `value4` int(11) NOT NULL,
  `value5` int(11) NOT NULL,
  `user-id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `save-test`
--

INSERT INTO `save-test` (`id`, `value1`, `value2`, `value3`, `value4`, `value5`, `user-id`, `date`) VALUES
(5, 1, 0, 1, 1, 1, 4, '2023-05-22 20:51:28');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `hash`) VALUES
(4, 'gg.nelis.7@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Name', '906babbd889ad5a7452ec961c5b074a0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `save-calculator`
--
ALTER TABLE `save-calculator`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `save-test`
--
ALTER TABLE `save-test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `save-calculator`
--
ALTER TABLE `save-calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `save-test`
--
ALTER TABLE `save-test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
