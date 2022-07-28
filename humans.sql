-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3307
-- Время создания: Июл 28 2022 г., 18:31
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `humans`
--

-- --------------------------------------------------------

--
-- Структура таблицы `humans`
--

CREATE TABLE `humans` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` tinyint(4) NOT NULL,
  `city_of_birth` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `humans`
--

INSERT INTO `humans` (`id`, `name`, `surname`, `date_of_birth`, `sex`, `city_of_birth`) VALUES
(78, '23412345222', '323', '2015-04-15', 1, 'brest22388'),
(94, 'Bob', '29', '2005-04-15', 14, 'vitebsk'),
(96, '23423', '29', '2011-04-15', 1, 'vitebsk'),
(97, '234', '32', '2015-04-15', 56, ''),
(98, '234', '29', '2022-07-13', 1, 'vitebsk'),
(99, 'Alice', '32', '1015-04-15', 0, ''),
(100, '12', '12', '2005-04-15', 0, '12'),
(101, '345', '345', '2015-04-15', 0, '234243');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `humans`
--
ALTER TABLE `humans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `humans`
--
ALTER TABLE `humans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
