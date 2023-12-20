-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-06-19 13:01:44
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `0619`
--

-- --------------------------------------------------------

--
-- 資料表結構 `profile`
--

CREATE TABLE `profile` (
  `SeriaINm` int(5) NOT NULL,
  `Account` varchar(30) NOT NULL,
  `Passwd` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `profile`
--

INSERT INTO `profile` (`SeriaINm`, `Account`, `Passwd`, `Email`, `Name`, `TimeStamp`) VALUES
(1, '123', '123', '123@gmail.com', '123', '2023-06-19 09:53:05'),
(2, '123', '123', '123@gmail.com', '123', '2023-06-19 09:54:56'),
(3, '456', '456', '456@gmail.com', '456', '2023-06-19 10:11:47'),
(4, 'apple', 'apple', 'apple@gmail.com', 'apple', '2023-06-19 10:14:08');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`SeriaINm`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `profile`
--
ALTER TABLE `profile`
  MODIFY `SeriaINm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
