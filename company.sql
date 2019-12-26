-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2019 г., 23:21
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `company`
--

-- --------------------------------------------------------

--
-- Структура таблицы `company_info`
--

CREATE TABLE `company_info` (
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vladelec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company_info`
--

INSERT INTO `company_info` (`logo`, `name`, `about`, `vladelec`) VALUES
('https://kubnews.ru/upload/iblock/23c/23c9c36143fa90245daff29c8c1fadea.jpg', 'Магнит', '«Магнит» (юридическое наименование — ПАО «Магнит») — российская холдинговая компания, занимающаяся розничной торговлей через сеть магазинов «Магнит».', 'Сергей Галицкий'),
('https://moneymakerfactory.ru/Pics/verstka/img-721-1543174304.png', 'Пятёрочка', '«Пятёрочка» — российская сеть продовольственных магазинов «у дома», которой управляет X5 Retail Group.', 'Сергей Гончаров'),
('https://im.kommersant.ru/gboxtexts/sp_com/logos/049.jpg', 'Лента', '«Ле́нта» — российская сеть гипермаркетов. Управляется компанией «Lenta Ltd». Головной офис находится в Санкт-Петербурге.', 'Олег Жеребцов'),
('http://nedelya40.ru/wp-content/uploads/2015/05/dcc495bbe02cf682857e.jpg', 'Сбербанк', 'Публичное акционерное общество Сбербанк — российский финансовый конгломерат, крупнейший транснациональный и универсальный банк России, Центральной и Восточной Европы. Контролируется Центральным банком Российской Федерации, которому принадлежит 50 % уставного капитала плюс одна голосующая акция', 'Сергей Гончаров'),
('https://f.sravni.ru/cms/KnowledgeBaseArticle/Picture/mat_94632.jpg', 'Тинькоф', '«Тинькофф Банк» — российский коммерческий банк, сфокусированный полностью на дистанционном обслуживании, не имеющий розничных отделений. Штаб-квартира банка расположена в Москве', 'Олег Тинькоф');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
