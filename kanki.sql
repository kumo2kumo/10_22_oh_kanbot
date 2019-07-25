-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 7 朁E23 日 13:22
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gsf_d03_db22`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kanki`
--

CREATE TABLE IF NOT EXISTS `kanki` (
`id` int(11) NOT NULL,
  `word` varchar(140) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kanki`
--

INSERT INTO `kanki` (`id`, `word`) VALUES
(1, 'ここで大人の戦いを覚えていけ　飛信隊   (桓騎)'),
(2, '何だかんだであの逃げ方が一番多く助かるんだよなァ （桓騎)'),
(3, 'ハハッ　心配すんな雷土　全部　上手くいく   (桓騎)'),
(4, '仕方ねェな遊んでやるか   (桓騎)'),
(5, 'しっかりと目に焼きつけて死ねそれが狩られる奴の見る景色だ   (桓騎)'),
(6, 'フッ慶舎はもうどうでもいいこの戦いの本当の敵は別の奴だ   (桓騎)'),
(7, 'さァて始めるか  (桓騎)'),
(8, 'でけェもん作りすぎたんじゃねェのか？   (桓騎)'),
(9, '青臭ぇやり方やってるっつー話だけはがっかりだ  (桓騎)'),
(10, 'オギコ…よくやったぞ  (桓騎)'),
(11, 'てめェは　はしゃぎすぎなんだよ  (桓騎)'),
(12, '桓騎軍に来たからには、桓騎軍の戦り方に従ってもらう  (桓騎)'),
(13, '……生きてやがったか面倒くせーのが  (桓騎)'),
(14, '秦が滅びようがどうしようが俺の知ったこっちゃねぇんだよ  (桓騎)'),
(15, '得意なんだよ留守中にしのび込むのがな  (桓騎)'),
(16, 'いるかよ　雑魚が   (桓騎)'),
(17, 'そんなに有り難がるものかよ　国家なんて一枚皮をはぎゃ　ごく一部の人間が好き放題やってるだけのクソ溜めだろうが  (桓騎)'),
(18, '寝言は死んで言えよ………　チッ　調子の狂うじじィだったぜ全く    (桓騎)'),
(19, '派手にやれ　白老へのたむけだ  (桓騎)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kanki`
--
ALTER TABLE `kanki`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kanki`
--
ALTER TABLE `kanki`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
