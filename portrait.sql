-- phpMyAdmin SQL Dump
-- version 4.1.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 24 2014 г., 15:56
-- Версия сервера: 5.5.34-0ubuntu0.13.10.1
-- Версия PHP: 5.5.3-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `portrait`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gr_datapick`
--

CREATE TABLE IF NOT EXISTS `gr_datapick` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `datapick` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `created` int(255) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `home_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `gr_lookup`
--

CREATE TABLE IF NOT EXISTS `gr_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `gr_lookup`
--

INSERT INTO `gr_lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(18, 'Новый', 1, 'datapickStatus', 1),
(19, 'Отклоненный', 3, 'datapickStatus', 3),
(20, 'Подтвержденный', 2, 'datapickStatus', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `gr_upload`
--

CREATE TABLE IF NOT EXISTS `gr_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `home_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `gr_user`
--

CREATE TABLE IF NOT EXISTS `gr_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=132 ;

--
-- Дамп данных таблицы `gr_user`
--

INSERT INTO `gr_user` (`id`, `password`, `username`, `active`) VALUES
(1, 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
