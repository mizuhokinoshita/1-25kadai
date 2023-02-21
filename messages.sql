-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-02-07 07:44:40
-- サーバのバージョン： 10.6.11-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `keijiban`
CREATE DATABASE IF NOT EXISTS `keijiban` ;
USE `keijiban`;

-- --------------------------------------------------------

--
-- テーブルの構造 `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `messages` varchar(200) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- テーブルのデータのダンプ `messages`
--

INSERT INTO `messages` (`id`, `messages`, `modified`) VALUES
(2, 'dddd', '0000-00-00 00:00:00'),
(3, 'ddd', '0000-00-00 00:00:00'),
(4, 'ddsddd', '0000-00-00 00:00:00'),
(5, 'ssss', '0000-00-00 00:00:00'),
(6, 'rrrrrr', '2023-02-07 03:17:13'),
(7, 'uuuu', '2023-02-07 03:18:45'),
(8, 'ｗｗｗｗ', '2023-02-07 03:23:13'),
(9, 'aaa', '2023-02-07 03:29:27'),
(10, 'ああああああああああ', '2023-02-07 03:29:40'),
(11, 'ｗｗｗｗｗｗｗ', '2023-02-07 03:32:09'),
(12, 'eeee', '2023-02-07 05:09:34'),
(13, 'ｆｆｆｆｆ', '2023-02-07 05:21:50'),
(14, 'えええええ', '2023-02-07 05:21:58'),
(15, 'ｇｇｇｇｇ', '2023-02-07 05:22:06'),
(16, 'ｓｄｓｄ', '2023-02-07 05:22:13'),
(17, 'ｓｓｓｓｓｄｄｄｄｄ', '2023-02-07 05:22:32'),
(18, 'あささｓ', '2023-02-07 05:22:39'),
(19, 'ああああああああああああああああああああああああああああああ', '2023-02-07 05:23:04'),
(20, 'うううううううううううううううううう', '2023-02-07 05:26:11'),
(21, 'ｒｔｒｔｒ', '2023-02-07 05:26:30'),
(22, 'tttt', '2023-02-07 05:40:05'),
(23, 'fff', '2023-02-07 05:48:53'),
(24, 'llll', '2023-02-07 05:50:39'),
(25, 'ｄｄｄｄｄ', '2023-02-07 06:39:25');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
