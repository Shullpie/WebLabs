-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 08 2022 г., 16:53
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fio` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `interests` varchar(255) NOT NULL,
  `vk_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `blood` varchar(255) NOT NULL,
  `rezus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `fio`, `date`, `adress`, `gender`, `interests`, `vk_link`, `blood`, `rezus`) VALUES
(7, 'email@gmail.com', '$2y$10$KnyyUPJ.Sm39./OxkoHoE.jkV09uwvv8myw7b6rr4AF3cy..VLfZe', 'Петров Вася Володич', '18.02.2002', 'Улица Пушкина', 'Мужской', 'Чай', 'https://vk.com/whatislove_vlz', '4', 'да'),
(8, 'gggggg@yandex.ru', '$2y$10$O4UOWJPjBtdwnvI1SyDw/.v.YCkSEv5Y6LlbnDkL6sbstmi/gUdp6', 'Гребенюк Человек Васильевич', '11.11.2011', 'город Волгоград', 'Мужской', 'деньги', 'https://vk.com/id580289891', '2', 'нет'),
(9, 'efmail@gmail.com', '$2y$10$2G3bUPP7gKlIJKxlcaNlmej4pN94UNNhYTMzaFLBt9E7G7AAo8Hxa', 'Дикий Александр Адаевич', '11.06.2222', 'город Москва', 'Мужской', 'Игры', 'https://vk.com/id680289892', '3', 'да'),
(11, 'dfhsjdfhsdf@yandex.ru', '$2y$10$MPXFBc4XbCBB4sum60tSreNJ02/j8SiRVSm2kjeM74.DxoRX5IHaC', 'Дикий Вася Володич', '22.12.2012', 'Город', 'Мужской', 'Чай', 'https://vk.com/id6802898957', '3', 'да');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
