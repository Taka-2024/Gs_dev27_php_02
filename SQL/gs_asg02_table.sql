-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-28 03:17:53
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_asg02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_asg02_table`
--

CREATE TABLE `gs_asg02_table` (
  `ID` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_asg02_table`
--

INSERT INTO `gs_asg02_table` (`ID`, `name`, `email`, `password`, `address`) VALUES
(1, 'n1', 'e1', 'p1', 'a1'),
(2, 'n2', 'e2', 'p2', 'a2'),
(3, 'n3', 'e3', 'p3', 'a3'),
(4, 'tanaka', 'tanaka@tanaka', 'tanaka-pass', 'tanaka-city'),
(10, '鈴木', 'suzuki@suzuki', 'suzuki-pass', 'suzuki-city');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_asg02_table`
--
ALTER TABLE `gs_asg02_table`
  ADD PRIMARY KEY (`ID`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_asg02_table`
--
ALTER TABLE `gs_asg02_table`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
