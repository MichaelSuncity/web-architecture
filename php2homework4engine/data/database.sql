-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 23 2019 г., 14:39
-- Версия сервера: 5.6.43
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `product_id`) VALUES
(248, 'bla1oe64fb33bcpkjn20c509j5sv4p26', 30),
(255, 'bla1oe64fb33bcpkjn20c509j5sv4p26', 25),
(256, '0gg70s4hmsnd3b3o6158t9cr3vongdf6', 25),
(257, '0gg70s4hmsnd3b3o6158t9cr3vongdf6', 25),
(262, 'a1jrqoh953jft2eqeehe141erv7oqnpl', 26),
(263, 'e9tvldpp9kf72jissnj0es84oo7urkl1', 25),
(264, 'e9tvldpp9kf72jissnj0es84oo7urkl1', 25),
(265, 'e9tvldpp9kf72jissnj0es84oo7urkl1', 30),
(266, 'e9tvldpp9kf72jissnj0es84oo7urkl1', 30),
(267, 'ta4bbvasgnpca8neujcu650tth7d50lk', 35),
(269, 'ta4bbvasgnpca8neujcu650tth7d50lk', 35),
(270, '6a5he3lesd9ramnrdo31o8mt8lmn1eae', 30),
(271, '6a5he3lesd9ramnrdo31o8mt8lmn1eae', 30),
(275, '99ufeep6juil2r7gddtblr39qs3rig2j', 30),
(276, '99ufeep6juil2r7gddtblr39qs3rig2j', 26),
(277, '99ufeep6juil2r7gddtblr39qs3rig2j', 26);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `time`) VALUES
(66, 'gdhfghfh', 'gdhfghfh', '2019-06-27 09:14:58'),
(86, 'пвапваппвапвапв', 'павпавпggfdgd', '2019-06-30 22:26:14'),
(87, 'vc123', 'bvc', '2019-07-01 09:28:51'),
(88, 'gfd', 'gdf', '2019-07-01 10:03:38'),
(89, 'hgf', 'hgf', '2019-07-06 11:39:53');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback_goods`
--

CREATE TABLE `feedback_goods` (
  `id` int(11) NOT NULL,
  `author` text NOT NULL,
  `message` text NOT NULL,
  `id_good` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback_goods`
--

INSERT INTO `feedback_goods` (`id`, `author`, `message`, `id_good`) VALUES
(5, '534543', '534543', 30),
(6, 'hgfhgf', 'hfghfg', 25),
(13, 'hgf123', 'hfg', 30),
(16, 'bvcb', 'bcv', 25),
(18, '123', '867', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `clientName` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `session_id`, `clientName`, `phone`) VALUES
(15, 'e9tvldpp9kf72jissnj0es84oo7urkl1', 'hgf', 534),
(16, 'ta4bbvasgnpca8neujcu650tth7d50lk', 'gdf', 654),
(17, '6a5he3lesd9ramnrdo31o8mt8lmn1eae', 'Виктор', 654687496),
(18, '99ufeep6juil2r7gddtblr39qs3rig2j', 'Наталья', 6845);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL DEFAULT 'товар',
  `description` varchar(128) NOT NULL DEFAULT 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок',
  `price` int(11) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'Зонт', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 142),
(2, 'Молоток', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 123),
(24, 'Медь', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 100),
(25, 'Гвозди', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 321),
(26, 'Лыжи', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 324),
(27, 'товар', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 100),
(28, 'товар', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 100),
(30, 'Корабль', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 424),
(63, 'товар', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 100),
(65, 'товар', 'впр воар ы пвфылвд вп ав вап лваоплавопд ыва выло аывао цкоуок', 100),
(76, 'Пицца', 'описание', 125),
(77, 'Пирожок', 'описание', 100),
(78, 'Пицца', 'описание', 125),
(79, 'Пицца', 'описание', 125),
(80, 'Пицца', 'описание', 125);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$ldZ9AaFDd9r1r4M5CK8YF.B6x06LC9X9xb/P3TSIEN1zv7DNh3gQ6', '10066869305d1d0ae39a5d87.04598424'),
(2, 'Пользователь', '', ''),
(17, 'Пользователь', '', ''),
(18, 'Пользователь', '', ''),
(20, '\'Пользователь\'', '', ''),
(21, 'Пользователь', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback_goods`
--
ALTER TABLE `feedback_goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT для таблицы `feedback_goods`
--
ALTER TABLE `feedback_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
