-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-07-24 02:31:26
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `stock`
--

-- --------------------------------------------------------

--
-- 資料表結構 `history`
--

CREATE TABLE `history` (
  `Serial` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Codename` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Buy` enum('Buy','Sell','','') COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(6) NOT NULL,
  `Price` float NOT NULL,
  `Total` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `history`
--

INSERT INTO `history` (`Serial`, `ID`, `Date`, `Codename`, `Name`, `Buy`, `Quantity`, `Price`, `Total`) VALUES
(1, 2, '2021-06-10', '3406', '穩懋', 'Buy', 4, 360.5, ''),
(2, 2, '2021-06-10', '2317', '鴻海', 'Buy', 6, 110.5, ''),
(3, 2, '2021-06-01', '2317', 'aaaa', 'Buy', 6, 110, '660'),
(4, 2, '2021-06-10', '123', '鴻海', 'Buy', 6, 110, '660'),
(5, 2, '2021-06-11', '2317', '板橋水水阿保', 'Buy', 520, 1314, '683280'),
(8, 2, '2021-06-16', '2603', '長榮', 'Buy', 10, 141, '1410'),
(9, 2, '2021-06-16', '2615', '萬海', 'Buy', 10, 208.5, '2085'),
(11, 2, '2021-06-21', '2609', '陽明', 'Buy', 12, 158.5, '1902'),
(12, 2, '2021-06-23', '2603', '長榮', 'Sell', 10, 140, '1400'),
(15, 2, '2021-06-23', '2609', '陽明', 'Sell', 12, 141, '1692'),
(16, 2, '2021-06-23', '2615', '萬海', 'Sell', 10, 239.5, '2395'),
(17, 2, '2021-06-23', '3406', '玉晶光', 'Sell', 3, 525, '1575'),
(19, 2, '2021-06-25', '3406', '玉晶光', 'Sell', 2, 575, '1150'),
(20, 2, '2021-07-02', '2603', '長榮', 'Buy', 5, 206.5, '1032.5'),
(21, 2, '2021-07-02', '2603', '長榮', 'Buy', 5, 210, '1050'),
(22, 2, '2021-07-02', '2615', '萬海', 'Buy', 10, 335.5, '3355'),
(23, 3, '2021-07-02', '520', '豪豪', 'Buy', 13, 14, '1314'),
(24, 2, '2021-07-15', '2317', '鴻海', 'Buy', 123, 110, '13530'),
(25, 2, '2021-07-01', '2317', '鴻海', 'Buy', 123, 110, '13530');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`Serial`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `history`
--
ALTER TABLE `history`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
