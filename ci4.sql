-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 10:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `overview` varchar(500) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tahun` int(4) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `judul`, `slug`, `overview`, `kategori`, `tahun`, `poster`, `created_at`, `updated_at`) VALUES
(2, 'Aladdin', 'aladdin', 'Aladdin adalah penjahat jalanan baik hati. Ia akan bersaing dengan Jafar seorang penyihir jahat untuk memperebutkan lampu ajaib yang memiliki kekuatan membuat keinginan terdalam mereka menjadi kenyataan.', 'Petualangan, Fantasi, Percintaan, Keluarga', 2019, 'aladdin-poster.png', NULL, NULL),
(5, 'Toy Story 4', 'toy-story-4', 'Woody selalu yakin tentang tempatnya di dunia dan bahwa prioritasnya adalah merawat anaknya, apakah itu Andy atau Bonnie. Tetapi ketika Bonnie menambahkan mainan baru yang enggan disebut Forky ke kamarnya, petualangan perjalanan bersama teman-teman lama dan baru akan menunjukkan kepada Woody seberapa besar dunia untuk sebuah mainan.', 'Petualangan, Animasi, Komedi, Keluarga, Fantasi, Drama', 2019, 'toystory-poster.jpg', NULL, NULL),
(13, 'Mulan', 'mulan', 'wWhen the Emperor of China issues a decree that one man per family must serve in the Imperial Chinese Army to defend the country from Huns, Hua Mulan, the eldest daughter of an honored warrior, steps in to take the place of her ailing father. She is spirited, determined and quick on her feet. Disguised as a man by the name of Hua Jun, she is tested every step of the way and must harness her innermost strength and embrace her true potential.', 'wPetualangan, Fantasi', 2020, 'mulan.jpg1', '2021-03-07 09:17:28', '2021-03-07 09:39:01'),
(14, 'Enola Holmes', 'enola-holmes', 'Saat kecil, Enola melewati masa kecilnya dengan penuh keceriaan. Namun, kini ia berada di bawah asuha kedua kakaknya, Sherlock (Henry Cavill) dan Mycrof (Sam Claflin). Sherlock dan Mycrof tidak terlalu senang akan kehadiran Enola dan bertekad akan mengirimnya ke sekolah yang mendidik para wanita muda. Namun, Enola menolak untuk mengikuti keinginan para kakaknya. Enola kemudian melarikan diri ke London untuk mencari ibunya. Saat sedang diperjalanan, Enola terlibat dalam misteri yang berkaitan den', 'Kejahatan, Drama, Misteri', 2020, 'enola.jpg', '2021-03-07 09:18:10', '2021-03-07 09:18:10'),
(15, 'Scooby-Doo! The Sword and the Scoob', 'scooby-doo-the-sword-and-the-scoob', 'An evil sorceress transports the gang back to the age of chivalrous knights, spell-casting wizards, and fire-breathing dragons.', 'Animasi, Komedi, Keluarga, Misteri, Petualangan ', 2021, 'scooby.jpg', '2021-03-07 09:19:03', '2021-03-07 09:19:03'),
(16, 'The Croods: A New Age', 'the-croods-a-new-age', 'Keluarga prasejarah The Croods kembali ke shenanigans mereka yang lama di dunia baru yang berbahaya dan aneh.', 'Keluarga, Fantasi, Animasi, Komedi', 2020, 'croods.jpg', '2021-03-07 09:19:54', '2021-03-07 09:19:54'),
(17, 'a3', 'a3', '1s', 'qwd', 1234, 'Untitled_2.png', '2021-03-08 03:13:06', '2021-03-08 03:13:06'),
(18, 'a3k', 'a3k', 'l', 'l', 1233, '1615194990_4a1ab1705ea659349d58.png', '2021-03-08 03:16:30', '2021-03-08 03:16:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
