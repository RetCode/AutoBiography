-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 23 2022 г., 03:30
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `carinfo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bodyname`
--

CREATE TABLE `bodyname` (
  `id` int NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `bodyname`
--

INSERT INTO `bodyname` (`id`, `body`) VALUES
(1, 'Седан'),
(2, 'Универсал'),
(3, 'Купе'),
(4, 'Пикап'),
(5, 'Хэчбек'),
(6, 'Кабриолет'),
(7, 'Фургон'),
(8, 'Джип'),
(9, 'Кроссовер');

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE `car` (
  `id` int NOT NULL,
  `namecar_id` int NOT NULL,
  `model_id` int NOT NULL,
  `enginetype_id` int NOT NULL,
  `body_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `car`
--

INSERT INTO `car` (`id`, `namecar_id`, `model_id`, `enginetype_id`, `body_id`) VALUES
(2, 4, 9, 1, 2),
(1, 4, 12, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `engonetype`
--

CREATE TABLE `engonetype` (
  `id` int NOT NULL,
  `engine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `engonetype`
--

INSERT INTO `engonetype` (`id`, `engine`) VALUES
(1, 'Бензин'),
(2, 'Дизель'),
(3, 'Электро'),
(4, 'Гибрид');

-- --------------------------------------------------------

--
-- Структура таблицы `modelcar`
--

CREATE TABLE `modelcar` (
  `id` int NOT NULL,
  `model` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `namecar_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `modelcar`
--

INSERT INTO `modelcar` (`id`, `model`, `namecar_id`) VALUES
(9, 'Series 5 E39', 4),
(10, 'A6 C5', 5),
(11, 'E-Klasse W210', 6),
(12, 'Series 5 E60', 4),
(13, 'A6 C6', 5),
(14, 'S-Klasse W220', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `namecar`
--

CREATE TABLE `namecar` (
  `id` int NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `namecar`
--

INSERT INTO `namecar` (`id`, `name`) VALUES
(4, 'BMW'),
(5, 'Audi'),
(6, 'Mercedes-Benz'),
(7, 'Bentley'),
(8, 'Buick'),
(9, 'Cadillac'),
(10, 'Chevrolet'),
(11, 'Chrysler'),
(12, 'Citroen'),
(13, 'Dacia'),
(14, 'Daewoo'),
(15, 'Datsun'),
(16, 'Dodge'),
(17, 'Ferrari'),
(18, 'Fiat'),
(19, 'Ford'),
(20, 'Geely'),
(21, 'Genesis'),
(22, 'GMC'),
(23, 'Great Wall'),
(24, 'Haval'),
(25, 'Honda'),
(26, 'Hummer'),
(27, 'Hyundai'),
(28, 'Infiniti'),
(29, 'Isuzu'),
(30, 'Jaguar'),
(31, 'Jeep\r\n'),
(32, 'Kia'),
(33, 'Lada (ВАЗ)'),
(34, 'Lamborghini'),
(35, 'Lancia'),
(36, 'Land Rover'),
(37, 'Lexus'),
(38, 'Lifan'),
(39, 'Lincoln'),
(40, 'Lotus'),
(41, 'Maserati'),
(42, 'Mazda\r\n'),
(43, 'MINI'),
(44, 'Mitsubishi'),
(45, 'Nissan'),
(46, 'Oldsmobile'),
(47, 'Opel'),
(48, 'Peugeot'),
(49, 'Plymouth'),
(50, 'Pontiac'),
(51, 'Porsche'),
(52, 'Renault'),
(53, 'Rover'),
(54, 'Saab'),
(55, 'SEAT'),
(56, 'Skoda'),
(57, 'Suzuki'),
(58, 'Tesla'),
(59, 'Toyota'),
(60, 'Volkswagen'),
(61, 'Volvo'),
(62, 'ГАЗ'),
(63, 'ЗАЗ'),
(64, 'ИЖ'),
(65, 'ЛуАЗ'),
(66, 'Москвич'),
(67, 'УАЗ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bodyname`
--
ALTER TABLE `bodyname`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `namecar_id` (`namecar_id`,`model_id`,`enginetype_id`,`body_id`),
  ADD KEY `enginetype_id` (`enginetype_id`),
  ADD KEY `body_id` (`body_id`),
  ADD KEY `model_id` (`model_id`);

--
-- Индексы таблицы `engonetype`
--
ALTER TABLE `engonetype`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modelcar`
--
ALTER TABLE `modelcar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `namecar_id` (`namecar_id`);

--
-- Индексы таблицы `namecar`
--
ALTER TABLE `namecar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bodyname`
--
ALTER TABLE `bodyname`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `modelcar`
--
ALTER TABLE `modelcar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `namecar`
--
ALTER TABLE `namecar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`enginetype_id`) REFERENCES `engonetype` (`id`),
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`body_id`) REFERENCES `bodyname` (`id`),
  ADD CONSTRAINT `car_ibfk_3` FOREIGN KEY (`namecar_id`) REFERENCES `namecar` (`id`),
  ADD CONSTRAINT `car_ibfk_4` FOREIGN KEY (`model_id`) REFERENCES `modelcar` (`id`);

--
-- Ограничения внешнего ключа таблицы `modelcar`
--
ALTER TABLE `modelcar`
  ADD CONSTRAINT `modelcar_ibfk_1` FOREIGN KEY (`namecar_id`) REFERENCES `namecar` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
