-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 01 2019 г., 21:38
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users_learning`
--

-- --------------------------------------------------------

--
-- Структура таблицы `allUsers`
--

CREATE TABLE `allUsers` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `allUsers`
--

INSERT INTO `allUsers` (`id`, `login`, `email`, `password`) VALUES
(1, '1', '1@1.r1', '$2y$10$3FWZvrIvGDdvEfLBEQaDvei003zNQgA0CLFBgad3n7TFxx2Exabd.'),
(27, '2222', '1@1.r2222', '$2y$10$DuA2QUBMiCvCymdOGUB/Yew.qg6Fx5UaWnpqRkuQLo3LIdAZZ9I5i'),
(28, '444', 'manilo.83@mail.ru', '$2y$10$CCRGh5Edd4lns0UcCWIhJOnN9jvNtO.XPp3abHoqiWgTFMFl7FHT2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `allUsers`
--
ALTER TABLE `allUsers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `allUsers`
--
ALTER TABLE `allUsers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
