-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Авг 09 2021 г., 21:49
-- Версия сервера: 8.0.26-0ubuntu0.20.04.2
-- Версия PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dashofer`
--

-- --------------------------------------------------------

--
-- Структура таблицы `job_titles`
--

CREATE TABLE `job_titles` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `job_titles`
--

INSERT INTO `job_titles` (`id`, `title`) VALUES
(35, 'Actor'),
(36, 'Producer'),
(37, 'Tutor'),
(38, 'Pharmacist'),
(39, 'President'),
(40, 'Director'),
(41, 'Manager'),
(42, 'Doctor'),
(43, 'Engineer'),
(44, 'Architect');

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `titul` varchar(100) NOT NULL,
  `job_title` int NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`id`, `name`, `surname`, `titul`, `job_title`, `birthday`) VALUES
(59, 'Isabella', 'Smith', 'rr', 38, '1985-08-09'),
(60, 'Jacob', 'Johnson', 'rr', 35, '1974-03-03'),
(61, 'Michael', 'Brown', 'vv', 44, '1954-05-17'),
(62, 'Jayden', 'Davis', 'ff', 39, '1971-02-24'),
(63, 'William', 'Garcia', 'ff', 42, '1982-10-16'),
(64, 'Noah', 'Rodriguez', 'cc', 43, '1990-08-01'),
(65, 'Richard', 'Moore', 'ff', 41, '1989-11-14'),
(66, 'Joseph', 'Taylor', 'ff', 36, '1948-08-19'),
(67, 'Steven', 'Jackson', 'ff', 37, '1979-04-19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `job_titles`
--
ALTER TABLE `job_titles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_title` (`job_title`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `job_titles`
--
ALTER TABLE `job_titles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`job_title`) REFERENCES `job_titles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
