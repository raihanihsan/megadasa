-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 03:30 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `megadasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `tanggal` date NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `content`, `tanggal`, `url`) VALUES
(1, 'Polisi Kembalikan Puluhan STNK yang Disita di Rumah Rey Utami-Benua', 'Polisi menemukan puluhan STNK saat menggeledah rumah pasangan YouTuber, Rey Utami dan Pablo Benua, di kawasan Bogor. Namun kemudian puluhan STNK itu dikembalikan kepada tersangka."Barbuk diamankan itu STNK, sudah kita kembalikan ke Rey karena tidak ada kaitannya dengan kasus di Krimsus," kata Kabid Humas Polda Metro Jaya Kombes Pol Argo Yuwono kepada wartawan di Polda Metro Jaya, Jakarta, Jumat (12/7/2019).Namun ada dugaan puluhan lembar STNK itu berkaitan erat dengan kasus penipuan dan penggelapan mobil dengan terlapor Pablo Benua. Kasus itu masih diusut polisi.', '2019-07-23', 'https://news.detik.com/berita/d-4621390/polisi-kembalikan-puluhan-stnk-yang-disita-di-rumah-rey-utami-benua'),
(2, 'Kemarahan Barbie Kumalasari Saat Ditanya Rumah Mewahnya Bersama Galih Ginanjar\r\n', 'BANJARMASINPOST.CO.ID - Kemarahan Barbie Kumalasari Saat Ditanya Rumah Mewahnya Bersama Galih GinanjarIstri Galih Ginanjar, Barbie Kumalasari menyemprot awak media saat mendapatkan pertanyaan yang membuatnnya meradang.Berawal saat Barbie Kumalasari tengah mendatangi Polda Metro Jaya bersama pengacara sang suami, Rihat Hutabarat.Barbie Kumalasari memang tengah menjadi sorotan.Segala hal tentangnya kini menarik untuk diperbincangkan, termasuk soal dirinya yang mengeklaim sebuah museum sebagai rumahnya.Artikel ini telah tayang di banjarmasinpost.co.id dengan judul Kemarahan Barbie Kumalasari Saat Ditanya Rumah Mewahnya Bersama Galih Ginanjar, Editor: Restudia', '2019-07-31', 'https://banjarmasin.tribunnews.com/2019/07/13/kemarahan-barbie-kumalasari-saat-ditanya-rumah-mewahnya-bersama-galih-ginanjar');

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE IF NOT EXISTS `rumah` (
`RumahID` int(11) NOT NULL,
  `Judul` varchar(200) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Harga` bigint(20) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`RumahID`, `Judul`, `Gambar`, `Harga`, `Tanggal`) VALUES
(1, 'Tipe 400', 'rumah1.jpg', 500000000, '2019-04-16'),
(2, 'Tipe 6000', 'rumah2.png', 2000000000, '2019-04-30'),
(3, 'tipe 800', 'rumah3.jpg', 3000000000, '2019-04-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
 ADD PRIMARY KEY (`RumahID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
MODIFY `RumahID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
