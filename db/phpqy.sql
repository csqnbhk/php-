-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2018 年 12 月 17 日 08:21
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phpqy`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(12) CHARACTER SET utf8 NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(124) NOT NULL AUTO_INCREMENT,
  `yhm` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mm` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `uname` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- 导出表中的数据 `users`
--

INSERT INTO `users` (`id`, `yhm`, `mm`, `tel`, `uname`, `address`) VALUES
(60, '张强', '111111', '15227289123', '强哥', '广州茂名'),
(59, '张三', '111111', '1231232133', '小三', '山西太原'),
(61, '李四', '111111', '15227280199', '小张', '河北石家庄'),
(62, '王强', '111111', '15227280166', '小王', '北京海淀');
