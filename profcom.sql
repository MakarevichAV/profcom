-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 15 2019 г., 22:29
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `profcom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `registered`
--

CREATE TABLE `registered` (
  `id` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(400) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registered`
--

INSERT INTO `registered` (`id`, `fio`, `position`, `unit`, `tel`, `email`, `password`, `date`) VALUES
(1, 'макаревич', 'инженер', '40101-4', '89774625877', 'makarevich.a.v@yandex.ru', 'макар', '0000-00-00'),
(2, 'петров', 'инженер', '40101-4', '89998446939', 'ksyunya.boginskaya@mail.ru', 'ксюня', '0000-00-00'),
(4, 'Иванов Иван', 'электрик', '406', '89999999999', 'ivanov.i.i@gmail.com', 'ивановиван', '0000-00-00'),
(5, 'Иванов Иван', 'электрик', '406', '89999999999', 'ivanov.i.i@gmail.com', 'ивановиван', '2019-06-15');

-- --------------------------------------------------------

--
-- Структура таблицы `wishing_users`
--

CREATE TABLE `wishing_users` (
  `id` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wishing_users`
--

INSERT INTO `wishing_users` (`id`, `fio`, `position`, `unit`, `tel`, `email`) VALUES
(2, 'Макаревич Александр Валерьевич', 'Инженер-электрик', '40101-4', '89774625877', 'makarevich.a.v@yandex.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wishing_users`
--
ALTER TABLE `wishing_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `wishing_users`
--
ALTER TABLE `wishing_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
