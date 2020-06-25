-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 6 月 25 日 14:27
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsf_d06_db17`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'SQLをかく', '2020-06-12', '2020-06-20 15:32:33', '2020-06-20 15:32:33'),
(2, 'SQLをかかない', '2020-06-14', '2020-06-20 15:33:18', '2020-06-20 15:33:18'),
(3, 'SQLやらない', '2020-06-25', '2020-06-20 15:38:50', '2020-06-20 15:38:50'),
(4, 'PHP', '2020-06-29', '2020-06-20 15:39:33', '2020-06-20 15:39:33'),
(5, 'JS', '2020-06-23', '2020-06-20 15:40:42', '2020-06-20 15:40:42'),
(6, 'CSSをかく', '2020-07-12', '2020-06-20 15:43:33', '2020-06-20 15:43:33'),
(7, '成功', '2020-06-23', '2020-06-20 17:14:20', '2020-06-20 17:14:20'),
(8, 'やること', '2020-06-03', '2020-06-20 17:14:30', '2020-06-20 17:14:30'),
(9, 'アイ', '2020-06-16', '2020-06-22 14:21:05', '2020-06-22 14:21:05');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `usern` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `usern`, `mail`, `pass`, `created_at`, `updated_at`) VALUES
(1, '七字晃正', 'ここ', 'skosei554@yahoo.co.jp', 'kokoko', '2020-06-22 14:58:47', '2020-06-22 14:58:47'),
(2, '七字晃正', 'ここ', 'skosei554@yahoo.co.jp', 'kokoko', '2020-06-22 14:59:46', '2020-06-22 14:59:46'),
(3, '七字晃正', 'ここ', 'skosei554@yahoo.co.jp', 'kokoko', '2020-06-22 16:02:32', '2020-06-22 16:02:32'),
(4, '七字晃正', 'ここ', 'skosei554@yahoo.co.jp', 'koko', '2020-06-22 17:13:18', '2020-06-22 17:13:18'),
(5, 'しちじ', 'しちじ', 'skosei554@yahoo.co.jp', 'vovovo', '2020-06-22 20:36:54', '2020-06-22 20:36:54'),
(6, 'できる？', 'かな？', 'swswsw@', 'qwqw', '2020-06-23 23:43:24', '2020-06-23 23:43:24'),
(7, 'しちだ', 'じじ', 'skosei554@gamil.com', 'koseikosei', '2020-06-23 23:45:21', '2020-06-23 23:45:21'),
(8, 'しちじ', 'じじ', 'skosei554@gamil.com', 'vovovo', '2020-06-24 23:57:20', '2020-06-24 23:57:20'),
(9, '七字晃正', 'かな？', 'swswsw@', 'っs', '2020-06-25 00:03:30', '2020-06-25 00:03:30'),
(10, '七字晃正', 'しちじ', 'skosei554@yahoo.co.jp', 'koko', '2020-06-25 02:11:16', '2020-06-25 02:11:16'),
(11, '太郎', 'たろう', 'swswsw@', 'qwqw', '2020-06-25 15:40:04', '2020-06-25 15:40:04'),
(12, '太郎', 'たろう', 'skosei555@yahoo.co.jp', 'jiji', '2020-06-25 15:45:01', '2020-06-25 15:45:01'),
(13, '太郎', 'たろう', 'skosei554@yahoo.co.jp', 'huhu', '2020-06-25 15:52:14', '2020-06-25 15:52:14'),
(14, '太郎', 'たろう', 'swswsw@', 'jiji', '2020-06-25 15:59:19', '2020-06-25 15:59:19');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルのAUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
