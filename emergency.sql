-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-04-25 17:39:43
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `emergency`
--

-- --------------------------------------------------------

--
-- 資料表結構 `db_emergency`
--

CREATE TABLE `db_emergency` (
  `ID` int(10) UNSIGNED NOT NULL,
  `AttendanceTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `AttendanceUnit` int(11) NOT NULL,
  `Name` text NOT NULL,
  `IdCardNumber` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `db_emergency`
--

INSERT INTO `db_emergency` (`ID`, `AttendanceTime`, `AttendanceUnit`, `Name`, `IdCardNumber`, `Age`, `Flag`) VALUES
(7, '2017-04-05 17:39:29', 31, '135', '15164651', 13, 0),
(8, '2017-04-05 18:01:06', 13, 'szgz', 'zsgg', 15, 0),
(12, '2017-04-05 18:52:58', 49, '1354138', '138684', 13, 0),
(15, '2017-04-06 18:02:49', 27, 'MDSK', 'G13513578', 34, 0),
(18, '2017-04-07 02:16:06', 36, 'MDSK412', 'A04052', 41, 0),
(20, '2017-04-08 07:44:20', 24, 'qwd', 'R1254', 26, 0),
(21, '2017-04-08 07:51:32', 42, 'test', 'test123', 18, 0),
(22, '2017-04-08 07:52:46', 24, 'awfw', 'gerg', 0, 0),
(23, '2017-04-08 07:53:45', 0, 'ry45', 'e46', 345, 0),
(24, '2017-04-11 08:07:09', 0, 'GRG', 'gerg', 16, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `db_emergency`
--
ALTER TABLE `db_emergency`
  ADD PRIMARY KEY (`ID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `db_emergency`
--
ALTER TABLE `db_emergency`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
