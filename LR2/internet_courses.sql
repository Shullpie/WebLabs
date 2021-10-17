-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 17 2021 г., 08:08
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `internet_courses`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int(11) UNSIGNED NOT NULL,
  `img_path` varchar(255) NOT NULL DEFAULT 'no_img.png',
  `name` varchar(255) NOT NULL,
  `id_lecturer` int(10) UNSIGNED NOT NULL,
  `program` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `img_path`, `name`, `id_lecturer`, `program`, `cost`) VALUES
(1, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/44/2959b0502911e5851f058ad6ebf936/pythondata_thumbnail_1x1.png', 'Структуры Данных Python', 1, 'Установка и Использование Python, Строки, Списки', 1400),
(2, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/5f/534b3094c211e783d43998c65a97c8/WA4E_thumbnail_PHP2_1x1.png?auto=format%2Ccompress&dpr=1&w=250', 'Разработка Веб-Приложений на PHP', 1, 'Установка PHP and SQL, Работа с базой данных, Верстка', 5678),
(3, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/44/2959b0502911e5851f058ad6ebf936/pythondata_thumbnail_1x1.png', 'Введение в Structured Query Language (SQL)', 1, 'Создание Базы Данных, Работа с Базами Данных\r\n', 500),
(4, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/78/bf51e094c211e78308116c229500da/WA4E_thumbnail_JS_1x1.png', 'JavaScript, jQuery, and JSON', 1, 'Введение в JavaScript, Использование JQuery, JSON', 6000),
(5, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/e4/338aaaed464b91b04ddf65c50dd673/Course-logo-2.png', 'Улучшение Глубоких Нейронных Сетей: Настройка, Регуляризация и Оптимизация Гиперпараметров', 3, 'Практические Аспекты Глубокого Обучения, Алгоритмы Оптимизации, Настройка Гиперпараметров, Рамки Пакетной Нормализации и Программирования', 15000),
(6, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/41/763803169e4d31a5e7611bc928124b/Course-Logo.png', 'Искусственный Интеллект Для Каждого', 3, 'Что Такое ИИ, Создание Проектов AI, Создание Искусственного Интеллекта в Вашей Компании, ИИ и Общество\r\n', 11000),
(7, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/64/396db0843a456b8af3748b81aaa298/Course-logo-3.png', 'Структурирование Проектов Машинного Обучения', 3, 'Производство и Оптимизация Машинного Обучения, Разработка Процедур Анализа Ошибок для Оценки Наиболее Эффективных Вариантов', 14325),
(8, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/c1/16a2fa16b943038f07cd0e4064a25e/Course-logo-1.png', 'Нейронные Сети и Глубокое Обучение', 3, 'Нейронные Сети и Глубокое Обучение, Основы Нейронных Сетей, Глубокие Нейронные Сети', 19990),
(9, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/10/1f9b10795411e79f662ba7081ab510/fundamentals-of-network-communication3.jpg', 'Основы Сетевых Коммуникаций', 2, 'Коммуникационные Сети и Услуги, Многослойные Архитектуры, API и Цифровая Передача, Контроль Ошибок', 12000),
(10, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/b4/46d9e0795611e7944fcd8c9517c543/tcpIP.jpg', 'TCP/IP', 2, 'Интернет Протокол, IP-адресация, Протокол Управления Передачей', 999),
(11, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/54/6b3570795611e7b61b0debcda61d72/packet-switching.jpg', 'Коммутация Пакетов и Алгоритмы', 2, 'Коммутация Кадров и Коммутация Пакетов, Маршрутизация в Пакетных Сетях, Маршрутизация по Кратчайшему Пути, Управление Траффиком', 5000),
(12, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/ee/77c590795411e7945ae5b9331638bc/Peer_to_peer2.jpg', 'Одноранговые Протоколы и Локальные Сети', 2, 'Одноранговые Протоколы, Надежные Службы и Контроль Каналов Передачи Данных, Локальные Сети\r\n', 3000),
(13, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/a3/22df90bb5711e7842119c980fccf54/Cyber-Attack-Countermeasures.png', 'Противодействие Кибератакам', 4, 'Гарантии Кибербезопасности, Понимание Протоколов Аутентификации, Введение в Традиционную Криптографию, Обзор Методов Шифрования с Открытым Ключом', 10000),
(14, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/dd/e746c0bb5711e7a5304be05d016ad5/Advanced-Topics-in-Cyber-Security.png', 'Безопасность Предприятия и Инфраструктуры', 4, 'Осведомленность о Безопасности, Блокчейн, Анонимность и Защита Критической Инфраструктуры', 7500),
(15, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/bf/e1bac0bb5711e797d69d8eb3c0ee4d/Real-Time-Cyber-Threat-Detection-and-Mitigation.png', 'Обнаружение и Устранение Киберугроз в Реальном Времени', 4, 'Базовая Сетевая Безопасность, Более Продвинутые Технологии Сетевой Безопасности, Архитектуры Сетевой Безопасности', 9999),
(16, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/2e/fab2a0bb5711e797d69d8eb3c0ee4d/Introduction-to-Cyber-Attacks.png', 'Введение в Кибератаки', 4, 'Введение в Кибербезопасность, Более Пристальное Изучение Киберугроз, Введение в Анализ Рисков', 14000),
(17, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/40/87040528fc40a7a6d2b17a00db9e4a/Computer-Hardware-and-Software_CourseraGraphics_1200x1200.jpg', 'Компьютерное Оборудование и Программное Обеспечение', 5, 'Аппаратное Обеспечение, Программное Обеспечение, Сеть и Интернет', 2000),
(18, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/69/67b9c74135419ba3f999a79f86251a/Database-Design_CourseraGraphics_1200x1200.jpg', 'Природа Данных и Проектирование Реляционных Баз Данных', 5, 'Бизнес-Аналитика, Природа Данных и Описательная Статистика, Дизайн Реляционной Базы Данных (ERD и нормализация), Язык Структурированных Запросов (SQL)', 1000),
(19, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/44/c42a2eaf364c22aba1442e805cc5c9/Data-Security-Privacy_CourseraGraphics_1200x1200.jpg', 'Производительность и Создание Систем', 5, 'Инструменты Для Повышения Производительности, Системный Дизайн и Разработка', 3000),
(20, 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera-course-photos.s3.amazonaws.com/34/03ec6d1ef94aabb6f34ab3864e3d3a/Data-Warehousing_CourseraGraphics_1200x1200.jpg', 'Хранение Данных и Бизнес-Аналитика\n', 5, 'Многомерное Моделирование Хранилищ Данных, Интеллектуальный Анализ Данных для Прогнозирования и Объяснения, Интеллектуальный Анализ Данных для Кластеризации и Ассоциации', 1234);

-- --------------------------------------------------------

--
-- Структура таблицы `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`) VALUES
(1, 'Charles Russell'),
(2, 'Xiaobo Zhou'),
(3, 'Andrew Ng'),
(4, 'Dr. Edward G. Amoroso'),
(5, 'Tim Carrington');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lecturer` (`id_lecturer`),
  ADD KEY `id_lecturer_2` (`id_lecturer`);

--
-- Индексы таблицы `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT для таблицы `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `foreign_key_1` FOREIGN KEY (`id_lecturer`) REFERENCES `lecturers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
