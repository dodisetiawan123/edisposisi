-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 01:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esurat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nama_pengirim` varchar(80) DEFAULT NULL,
  `no_surat` varchar(45) DEFAULT NULL,
  `no_agenda` varchar(45) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `file_dokumen` varchar(80) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `timestamp` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `nama_pengirim`, `no_surat`, `no_agenda`, `tanggal`, `perihal`, `file_dokumen`, `status`, `timestamp`) VALUES
(8, 'PT Waskita Karya(Persero)', 'XX1/WSKT/2023', '128', '2023-12-08', 'Acceptanble', '8ddbc9f042bfd8f96e4521afb429484e.pdf', 'OnProgress BOD', '2023-12-07'),
(9, 'PT Barata Jaya', '1XX/12/31', '127', '2023-12-08', 'Donasi', '11cc1a7bd9044a5139c632a9f079ba86.pdf', 'OnAction GM', '2023-12-08'),
(10, 'PT Pertamina Persero', '123/XX2/123/1212', '123', '2023-12-12', 'Sosialisasi', '87af695d909651a10531b50a1066e0e2.pdf', 'OnProgress GM', '2023-12-08'),
(11, 'PT Petrokimia Gresik', '123/XX2/123/1212', '1234', '2023-12-08', 'sadasd', '83b5ec3472ee0aa82f9b50e92def13d3.pdf', 'OnAction GM', '2023-12-08'),
(12, 'Testing', 'asd', 'asdas', '2023-12-10', 'asdasd', '2a303984b7d9dd3dd5854042051d68d1.pdf', 'OnProgress BOD', '2023-12-10'),
(13, 'asdas', 'asdas', 'asdas', '2023-12-10', 'asdasd', '260d1ee33051594992b3c2353c312d4a.pdf', 'OnProgress BOD', '2023-12-10'),
(14, 'asdasd', 'asdasd', 'asdasd', '2023-12-10', 'asdasd', '75289464f35eed31689c6465459c8a8f.pdf', 'OnProgress BOD', '2023-12-10'),
(15, 'asdasd', 'asdasd', 'asdasd', '2023-12-10', 'asdasd', '073f907a1dd61cb39182c5433138aebd.pdf', 'OnProgress BOD', '2023-12-10'),
(16, 'asdasd', 'asdasd', 'asdasd', '2023-12-10', 'asdasd', '97c989d86271ae036f943a544c04b3c2.pdf', 'OnProgress BOD', '2023-12-10'),
(17, 'asdas', 'asdasd', 'asdasd', '2023-12-10', 'asdasd', 'd1807e4ee3a06966d2ed18560fedee15.pdf', 'OnProgress BOD', '2023-12-10'),
(18, 'asdasd', 'asdasd', 'asdasd', '2023-12-10', 'asdasd', '3e4cbd775564832efcfb531c3b7309cb.pdf', 'OnProgress BOD', '2023-12-10'),
(19, 'asdas', 'asdasd', 'asdasd', '2023-12-10', 'asdasd', '21670b9b7e843200c5cc6c5a82de68ef.pdf', 'OnProgress BOD', '2023-12-10'),
(20, 'asdasd', 'asdasd', 'asdasd', '2023-12-10', 'asdasd', '9d2fdbf293f7ed6b23b738f1a3727117.pdf', 'OnProgress BOD', '2023-12-10'),
(21, 'werwe', 'werwe', 'werwer', '2023-12-10', 'werwerwe', '7c2dbdac84ecfd2b10a8e82b72bc150c.pdf', 'OnProgress BOD', '2023-12-10'),
(22, 'asdasd', 'asdasd', 'asdasd', '2023-12-10', 'asdas', '0aedfcda10cb1cc267f722655346b419.pdf', 'OnProgress BOD', '2023-12-10'),
(23, 'dfgdf', 'dfgdf', 'dfgdf', '2023-12-10', 'dfgdfg', '869a2be3fd1d95d6d4ea69e84e99ff46.pdf', 'OnProgress BOD', '2023-12-10'),
(24, 'asdasd', 'asdasd', 'asdasd', '2023-12-10', 'asdasd', '4096e5024950cf6e768110866fd241c8.pdf', 'OnProgress BOD', '2023-12-10'),
(25, 'sadasd', 'asdas', 'asdasd', '2023-12-11', 'asdasd', 'ecae02b24c4281a4c3ed78c0a79d3710.pdf', 'OnProgress BOD', '2023-12-11'),
(26, 'wqeqwe', 'qweqwe', 'qweqwe', '2023-12-11', 'qweqwe', '047beb4f9b8c2521d5678dc9f9b41d43.pdf', 'OnProgress BOD', '2023-12-11'),
(27, 'asdas', 'asda', 'dasda', '2023-12-11', 'asdasd', '22e919e455424eb9bf444f69a5787c45.pdf', 'OnProgress BOD', '2023-12-11'),
(28, 'asdas', 'asdasd', 'asdasd', '2023-12-11', 'asdasd', '5a3d32dd84df57a34845eceb7993a036.pdf', 'OnProgress BOD', '2023-12-11'),
(29, 'sdfsdf', 'sdfsd', 'sdfsdf', '2023-12-11', 'sdfsdf', 'dfa0c26ebd33b5b4dc2f5c0850c78a81.pdf', 'OnProgress BOD', '2023-12-11'),
(30, 'asd', 'asd', 'asda', '2023-12-11', 'asdasd', 'e08272b40a1076a5d1737beac26cfba9.pdf', 'OnProgress BOD', '2023-12-11'),
(31, 'sdfsdf', 'sdfsdf', 'sdfsd', '2023-12-11', 'sdfsdf', '71a281f60465ca53ad22eda548ac9684.pdf', 'OnProgress BOD', '2023-12-11'),
(32, 'zxczx', 'zxczx', 'czxczxc', '2023-12-11', 'zxczxc', 'b78e3870a93d8b75193df37f6ccecb9b.pdf', 'OnProgress BOD', '2023-12-11'),
(33, 'asdasd', 'asdas', 'asdas', '2023-12-11', 'dasdas', '8fa08808cb2467a079d6965daf696b25.pdf', 'OnProgress BOD', '2023-12-11'),
(34, 'sdfsd', 'sdfsd', 'sdfsd', '2023-12-11', 'sdfsdf', 'fc0bcd38bcd9e6a13c68caa9b6ac16d8.pdf', 'OnProgress BOD', '2023-12-11'),
(35, 'asdas', 'dasd', 'asdasd', '2023-12-11', 'asdasd', '083bfd4cd9fd83cdaf8366bd1d10f266.pdf', 'OnProgress BOD', '2023-12-11'),
(36, 'asdas', 'dasd', 'asdasd', '2023-12-11', 'asdasd', 'b8da741d84ab45560560844d11f59abd.pdf', 'OnProgress BOD', '2023-12-11'),
(37, 'zxc', 'zxczx', 'czxc', '2023-12-11', 'zxczxc', 'b32d592cf6c9ae25075c4fb083b5dd7e.pdf', 'OnProgress BOD', '2023-12-11'),
(38, 'asda', 'sdas', 'asdas', '2023-12-11', 'dasd', '6ddebcf9d1b855633b0f81b514a7ec05.pdf', 'OnProgress BOD', '2023-12-11'),
(39, 'sdfsd', 'fsdf', 'sdf', '2023-12-11', 'sdfdf', '710456806547908bdfcacb819e5348ab.pdf', 'OnProgress BOD', '2023-12-11'),
(40, 'zdasd', 'asd', 'asdas', '2023-12-11', 'asdasd', '3d90c486178386e8f5c72716e2ea882b.pdf', 'OnProgress BOD', '2023-12-11'),
(41, 'asdasd', 'asdas', 'dasd', '2023-12-11', 'asdasd', '7d001c2018694d6b54738a0c2ce13dfc.pdf', 'OnProgress BOD', '2023-12-11'),
(42, 'asdas', 'dasd', 'asdasd', '2023-12-11', 'asdasdas', 'd981fff2c2a7df89482f59bb681b2774.pdf', 'OnProgress BOD', '2023-12-11'),
(43, 'asd', 'asda', 'dasd', '2023-12-11', 'asdasd', '244261bf3a6dbcec74d4ae0bf9cc4624.pdf', 'OnProgress BOD', '2023-12-11'),
(44, 'sdf', 'sdf', 'sdf', '2023-12-11', 'sdf', 'c5e143066cee08edea18e0bb6c4de95d.pdf', 'OnProgress BOD', '2023-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_user`
--

CREATE TABLE `dokumen_user` (
  `id_dokumen_user` int(11) NOT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp(),
  `id_users` int(11) DEFAULT NULL,
  `id_dokumen` int(11) DEFAULT NULL,
  `responswa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen_user`
--

INSERT INTO `dokumen_user` (`id_dokumen_user`, `keterangan`, `timestamp`, `id_users`, `id_dokumen`, `responswa`) VALUES
(8, NULL, '2023-12-07 23:40:54', 2, 11, NULL),
(9, NULL, '2023-12-07 23:40:58', 6, 10, NULL),
(10, 'Segera Lanjutkan', '2023-12-07 23:41:50', 3, 11, NULL),
(11, NULL, '2023-12-08 01:29:29', 2, 9, NULL),
(12, 'Segera Di tindsak Lnajuti Terkait Surat ini', '2023-12-08 06:20:18', 3, 10, NULL),
(13, 'Segera ditindak lanjuti', '2023-12-08 07:24:46', 15, 9, NULL),
(18, NULL, '2023-12-10 11:14:47', 2, 12, NULL),
(19, NULL, '2023-12-10 11:15:47', 2, 13, NULL),
(20, NULL, '2023-12-10 11:28:42', 2, 14, NULL),
(21, NULL, '2023-12-10 11:51:21', 2, 15, NULL),
(22, NULL, '2023-12-10 11:52:26', 2, 16, NULL),
(23, NULL, '2023-12-10 11:56:21', 2, 17, NULL),
(24, NULL, '2023-12-10 11:59:45', 2, 18, NULL),
(25, NULL, '2023-12-10 12:00:46', 2, 19, NULL),
(26, NULL, '2023-12-10 12:01:41', 2, 20, NULL),
(27, NULL, '2023-12-10 12:03:10', 2, 21, NULL),
(28, NULL, '2023-12-10 12:04:37', 2, 22, NULL),
(29, NULL, '2023-12-10 12:05:11', 6, 23, NULL),
(30, NULL, '2023-12-10 12:07:17', 2, 24, NULL),
(31, NULL, '2023-12-10 20:42:38', 6, 25, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(32, NULL, '2023-12-10 21:26:44', 5, 26, '{}'),
(33, NULL, '2023-12-10 21:28:50', 4, 27, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(34, NULL, '2023-12-10 21:29:07', 4, 27, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(35, NULL, '2023-12-10 21:35:08', 2, 28, '{}'),
(36, NULL, '2023-12-10 21:38:47', 2, 29, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(37, NULL, '2023-12-10 21:44:45', 2, 30, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(38, NULL, '2023-12-10 21:51:28', 2, 31, NULL),
(39, NULL, '2023-12-10 21:52:25', 2, 32, NULL),
(40, NULL, '2023-12-10 22:17:54', 2, 33, NULL),
(41, NULL, '2023-12-10 22:20:06', 2, 34, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(42, NULL, '2023-12-10 22:25:02', 2, 35, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(43, NULL, '2023-12-10 22:25:38', 2, 36, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(44, NULL, '2023-12-10 22:26:21', 2, 37, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(45, NULL, '2023-12-10 22:28:07', 2, 38, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(46, NULL, '2023-12-10 22:31:05', 2, 39, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(47, NULL, '2023-12-10 22:31:57', 2, 40, '{}'),
(48, NULL, '2023-12-10 22:34:06', 2, 41, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(49, NULL, '2023-12-10 22:35:22', 2, 42, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(50, NULL, '2023-12-10 22:36:29', 2, 43, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE'),
(51, NULL, '2023-12-10 23:20:28', 2, 44, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Sekper'),
(2, 'members', 'Direksi'),
(3, 'general', 'General Manager');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'sekdir', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'sekdir@barata.id', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1702240739, 1, 'Sekretaris', 'Direksi', 'default.jpg', '083830158599'),
(2, '::1', 'dirut', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'dirut@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701327537, 1702189310, 1, 'Direktur', 'Utama', 'default.jpg', '083830158599'),
(3, '::1', 'bsmk3lh', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'bsmk3lh@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701419430, 1702189330, 1, 'GM', 'BSMK3LH', 'default.jpg', '083830158599'),
(4, '::1', 'dksdmmr', '$2y$10$wSGK26hasqhIfnF.cEAxJeIM53R1u.xwsE3yhxjy9u7TawHy/FRci', 'dksdmmr@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701924673, NULL, 1, 'Direktur', 'KSDMMR', 'default.jpg', '083830158599'),
(5, '::1', 'dirops', '$2y$10$Rjl.j954XkYYO4wi5gVXMu2VIP7zWaq7Ko311LLFtNYfC0SAnLitS', 'dirops@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701927521, 1701988185, 1, 'Direktur', 'Operasi', 'default.jpg', '083830158599'),
(6, '::1', 'dirpem', '$2y$10$TC0NyeqlG.iqY8g.n78l4ev248IKa9VHpPT/JSqI1NC00tlvesYcG', 'dirpem@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701927935, 1702016390, 1, 'Direktur', 'Pemasaran', 'default.jpg', '083830158599'),
(7, '::1', 'sekper', '$2y$10$KHaVyYwW6XuM2b0Lwp.qY.Zcw1dUspclSsDYBqFSARxiKODnqiwIS', 'sekper@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702000888, NULL, 1, 'Sekretaris', 'Perusahaan', 'default.jpg', '083830158599'),
(8, '::1', 'spi', '$2y$10$2WtFuKk.ymo830Amc1Qvy.MCTK9rMMDnkDE0OxCQwGEtW6k3wlyOm', 'spi@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702000946, NULL, 1, 'Kepala', 'SPI', 'default.jpg', '083830158599'),
(9, '::1', 'busdev', '$2y$10$BhoHoeQBxoNZlz7hFpGeWu9/SgtWBs622K0uGXV1hZBV60y/Epwxi', 'busdev@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702001131, NULL, 1, 'GM Biro', 'Pengembangan Usaha', 'default.jpg', '083830158599'),
(10, '::1', 'sdm', '$2y$10$Tl1UFVeHqHSfAK8Tmt5/9.HD9FkaAMARfjlAkg0Dl0L6mUiMqoy1e', 'sdm@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702001914, 1702008790, 1, 'GM Biro', 'SDM', 'default.jpg', '083830158599'),
(11, '::1', 'gmap', '$2y$10$v9RII25TTQXni.LSne7UMuQHPr565qfTTlcssAnQOd43cJX9Io0AG', 'gmap@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702002120, NULL, 1, 'GM Biro', 'Keuangan & Akuntansi', 'default.jpg', '083830158599'),
(12, '::1', 'gmbmsc', '$2y$10$HnLYgdDkelOpeXrp8sQR0e32cp9CzeYvS/C1WtMw07sV7kHXlInb2', 'gmbmsc@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702002180, 1702008608, 1, 'GM Biro', 'Supply Chain', 'default.jpg', '083830158599'),
(13, '::1', 'gmlegal', '$2y$10$zSbwoLihoAaqCPYvUZukb.ywTsBim6hnHHDkxkU2xvaebfuLzEQtC', 'gmlegal@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702004873, NULL, 1, 'GM Biro', 'Legal', 'default.jpg', '083830158599'),
(14, '::1', 'gmdikp', '$2y$10$ycpS.jCKn7E6YUzV4ZUv4eJ0zES7.YfDAJO0nnoezdjcJOegXQ2ia', 'gmdikp@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007446, NULL, 1, 'GM', 'DIKP', 'default.jpg', '083830158599'),
(15, '::1', 'gmcor', '$2y$10$oPtqc0NODpkVkMwjriA9ruMpseZC8W.vFkbY9p19wPBHboCafDqwK', 'gmcor@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007500, 1702027093, 1, 'GM', 'COR', 'default.jpg', '083830158599'),
(16, '::1', 'gmsda', '$2y$10$D21Kokar0wY.BIENQik1c.YiN3efp1RHKXWGEqz6.xYks6HlqsFbq', 'gmsda@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007554, NULL, 1, 'GM', 'DSDA', 'default.jpg', '083830158599'),
(17, '::1', 'gmpbkt', '$2y$10$3DgOMUw3oMmk3qlkF9fpruKWR21FPvFegOoQbnMtaT0P25IilOcqC', 'gmpbkt@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007605, NULL, 1, 'GM', 'D. Pembangkit', 'default.jpg', '083830158599');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(3, 1, 1),
(5, 2, 2),
(8, 3, 3),
(12, 4, 2),
(11, 5, 2),
(13, 6, 2),
(15, 7, 3),
(17, 8, 3),
(19, 9, 3),
(21, 10, 3),
(23, 11, 3),
(25, 12, 3),
(27, 13, 3),
(29, 14, 3),
(31, 15, 3),
(33, 16, 3),
(35, 17, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `dokumen_user`
--
ALTER TABLE `dokumen_user`
  ADD PRIMARY KEY (`id_dokumen_user`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `dokumen_user`
--
ALTER TABLE `dokumen_user`
  MODIFY `id_dokumen_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
