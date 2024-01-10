-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 04:29 AM
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
  `token` varchar(10) NOT NULL,
  `timestamp` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `nama_pengirim`, `no_surat`, `no_agenda`, `tanggal`, `perihal`, `file_dokumen`, `status`, `token`, `timestamp`) VALUES
(86, 'PT Boma Bisma Indra', 'XX1/BBI/2023', '1256', '2023-12-19', 'Testing', 'cc4867038bb4f917e42111f974ff4edc.pdf', 'OnProgress', 'DOWC3js16c', '2023-12-19'),
(87, 'PT Waskita Karya(Persero)', 'B771/ILMATE.3/IND/X1/2023', '1256', '2023-12-19', 'Testing', '082bf138bf87104167e951dc01a692b6.pdf', 'OnProgress', 'fA8qIo1g90', '2023-12-19'),
(89, 'PT Pertamina Persero', '123/XX2/123/1212', 'PRT/252/250', '2024-01-01', 'Permintaan Perbaikan Tuntutan', '935e6dde986ef2ca52f051fe31dc3cd9.pdf', 'OnProgress', 'FHrbEWAXBm', '2024-01-01'),
(90, 'adasd', 'aasdas', 'asdasd', '2024-01-01', 'asdasdas', 'd0158b7de43b3716a559d02d8925e5b5.pdf', 'OnProgress', 'GLIKuwoehD', '2024-01-01'),
(91, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-01', 'Sharing Knowledge With Industry 4.0', '42efa8d677a12b38e870c17f8387dbdd.pdf', 'OnProgress', 'Bp9Tbn75cP', '2024-01-01'),
(92, 'Testing', '123/XX2/123/1212', '-', '2024-01-01', 'Testing', 'a992489c5247bd888e7c175c1bf764c9.pdf', 'OnProgress', 'DExYX3higq', '2024-01-01'),
(93, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-01', 'Testing', 'a5647cba7763753107c70910aa3fa7ab.pdf', 'OnProgress', 'PV51SyqtsU', '2024-01-01'),
(94, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-01', 'Testing', '2e77945a99264f57b058c445fa83584c.pdf', 'OnProgress', 'xT6hysL2IJ', '2024-01-01'),
(95, 'Testing', '123/XX2/123/1212', '-', '2024-01-01', 'tes', '2d1207e7a0c898cba44ab7e00bc5a755.pdf', 'OnProgress', 'zNZQ0P8cW3', '2024-01-01'),
(96, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-01', 'Testing', '6ef5459ae9a16ff64bbde70e3c269710.pdf', 'OnProgress', 'Ju9ndPKZiF', '2024-01-01'),
(97, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-01', 'Testing', '97e687ac65f89277765589e6eaf64939.pdf', 'OnProgress', 'Wekz3jIBbl', '2024-01-01'),
(98, 'Testing', '123/XX2/123/1212', '-', '2024-01-01', 'Testing', 'a14e704a0eac1f1958b076ebb196081e.pdf', 'OnProgress', 'q8aIe9XKTS', '2024-01-01'),
(99, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-01', 'Testing', 'c1346e5d408c018eab7c507fb61102a9.pdf', 'OnProgress', 'bS91KugHEZ', '2024-01-01'),
(101, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-01', 'Tes', 'b701cb443975c2a290553fd96d3cd03e.pdf', 'OnProgress', '9sBt6yVAHf', '2024-01-01'),
(102, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-01', 'Testing', 'f3ab55fd017c3d258e0d54da7b3bb174.pdf', 'OnProgress', 'xadkOGD3WN', '2024-01-01'),
(103, 'asd', 'asd', 'asdas', '2024-01-01', 'asdasd', 'd16894f36eaa38dfa2dd2f88f24f2d05.pdf', 'OnProgress', 'taSYGZowfR', '2024-01-01'),
(104, 'asd', 'asd', 'asda', '2024-01-01', 'asdas', 'f5fe71e4fa7354cdbb6c5304651f6e8f.pdf', 'OnProgress', 'SsTPM0rxd8', '2024-01-01'),
(105, 'Tes', '123/XX2/123/1212', '-', '2024-01-02', 'Tes', '73ea61b4ab6f6c1ef38713407f62b4e7.pdf', 'OnProgress', 'yAFlWuT3ZV', '2024-01-02'),
(106, 'zxczx', 'asdasd', 'asdasdas', '2024-01-02', 'asdasdas', 'e856881e74b1fe25f8e5a58ae5056a88.pdf', 'OnProgress', 'PwOVEMuI8N', '2024-01-02'),
(107, 'sdfdf', 'sdfsdf', '-', '2024-01-02', 'sdfsdf', '576af88eed9990ce893489c8a2cb8c0b.pdf', 'OnProgress', 'fqy9nJjNzB', '2024-01-02'),
(108, 'asd', 'asdas', 'asdasd', '2024-01-02', 'asdasd', '5b385c72e1b912ee02c766648b6032a8.pdf', 'OnProgress', 'YaB40ZR3HG', '2024-01-02'),
(109, 'PT Barata Jaya', '123/XX2/123/1212', '-', '2024-01-03', 'Testing', 'c43dde7b627e857f96ed172b443f3d58.pdf', 'OnProgress', 'cnTY8fVjBN', '2024-01-03'),
(110, 'asdasd', 'asdasd', 'asdasd', '2024-01-03', 'asdasd', 'f02881bb86e84ccc22ee44af90c24fd6.pdf', 'OnProgress', '8VpXhwav0k', '2024-01-03'),
(111, 'asdas', 'asdasd', 'asdasd', '2024-01-03', 'asdasd', '51fd68d634f17c59b8cba4547d3fdf00.pdf', 'OnProgress', 'fNUchEzRlX', '2024-01-03'),
(112, 'asdas', 'asdasd', '-', '2024-01-03', 'asdasdasd', 'a735eccd1553e242b648d6c168582217.pdf', 'OnProgress', 'cUTnOFiD59', '2024-01-03'),
(113, 'asdas', 'asdasd', '-', '2024-01-03', 'asdasd', '385616166a68028f5e8d0f3ce400fb87.pdf', 'OnProgress', 'K5qGhRf961', '2024-01-03'),
(114, 'werwe', 'werwe', 'werwer', '2024-01-03', 'werwerwe', 'f24e066e24cc102adea62c443aa4989c.pdf', 'OnProgress', '0qHW15uZpl', '2024-01-03'),
(115, 'asdas', 'asdasd', 'as', '2024-01-03', 'asdasdas', '9af275291e75eafcafee000c83e46fe0.pdf', 'OnProgress', 'FShb0snjfX', '2024-01-03'),
(116, 'PT Barata Jaya', 'asdas', '-', '2024-01-04', 'asdasdas', 'b9d538e13f92387e4ce47b23ea811503.pdf', 'OnProgress', 'ZW86iTFt7q', '2024-01-04'),
(117, 'PT Barata Jaya', 'asd', 'asdasd', '2024-01-04', 'asdasd', '609fdc49df63ce266975ef5ad13ff93a.pdf', 'OnProgress', 'UBRV5qzM3H', '2024-01-04'),
(118, 'sdfsd', 'sdfsd', '-', '2024-01-04', 'sdfsdf', '84e36bdc0085790280275fe79df770cb.pdf', 'OnProgress', '41Kf7anF0Y', '2024-01-04'),
(119, 'sdfsd', 'sdfsd', 'sdfsdf', '2024-01-04', 'sdfsdf', '30aafaf3be9aff46c8b548aeb5b34a64.pdf', 'OnProgress', 'VwD26xoQXS', '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_user`
--

CREATE TABLE `dokumen_user` (
  `id_dokumen_user` int(11) NOT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp(),
  `id_users` int(11) DEFAULT NULL,
  `id_users_requestor` int(11) DEFAULT NULL,
  `id_dokumen` int(11) DEFAULT NULL,
  `responswa` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `gmtoken` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen_user`
--

INSERT INTO `dokumen_user` (`id_dokumen_user`, `keterangan`, `timestamp`, `id_users`, `id_users_requestor`, `id_dokumen`, `responswa`, `status`, `gmtoken`) VALUES
(119, NULL, '2023-12-19 07:32:38', 2, NULL, 86, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'r8LqZHhpMa'),
(120, NULL, '2023-12-19 07:32:39', 3, NULL, 86, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'O8f41CRqNu'),
(121, NULL, '2023-12-19 08:19:39', 2, NULL, 87, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'XYVqE9o56P'),
(122, NULL, '2023-12-19 08:19:40', 5, NULL, 87, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'vOCgSk9tP1'),
(123, NULL, '2024-01-01 12:32:04', 2, NULL, 89, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', '3VXYfLSgey'),
(124, 'TEsting', '2024-01-01 12:36:18', 9, NULL, 90, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'PQJ9BgXbpW'),
(125, 'Baik', '2024-01-01 12:49:11', 2, NULL, 91, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'ismwLQl57u'),
(126, '', '2024-01-01 12:52:34', 9, NULL, 89, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'z2pkPivFbo'),
(127, NULL, '2024-01-01 14:20:10', 3, NULL, 92, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'Gm2UFkVjnP'),
(128, NULL, '2024-01-01 14:20:12', 10, NULL, 92, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'u685dUrDhG'),
(129, NULL, '2024-01-01 14:20:13', 11, NULL, 92, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', '6EvGdPipY8'),
(130, NULL, '2024-01-01 14:46:40', 2, NULL, 93, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'Bxkpel3I1y'),
(131, 'Baik', '2024-01-01 14:47:47', 9, NULL, 93, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'V4NTDIdZYk'),
(132, NULL, '2024-01-01 14:50:44', 2, NULL, 94, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'Yl7RBKmVfu'),
(133, 'Tolong Hadir Semua', '2024-01-01 14:51:18', 9, NULL, 94, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'oAgCU2EvaV'),
(134, 'Testing', '2024-01-01 15:19:58', 2, NULL, 95, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'kqJWLIYfDu'),
(135, 'Tolong Hadir Semua', '2024-01-01 15:50:40', 2, NULL, 96, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'kuSyawfnGr'),
(136, NULL, '2024-01-01 15:54:55', 2, NULL, 97, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'Xcu7jpxGfP'),
(137, 'Tlong Dihadiri', '2024-01-01 16:14:22', 9, NULL, 97, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'fE0WuNkHC4'),
(138, '-', '2024-01-01 16:30:01', 2, NULL, 98, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'FKlt2UrpVP'),
(139, NULL, '2024-01-01 16:31:42', 2, NULL, 99, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'GJXcx0jIea'),
(140, NULL, '2024-01-01 16:32:19', 9, NULL, 99, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'O3rzvysZUw'),
(141, NULL, '2024-01-01 16:38:50', 2, NULL, 101, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', '5fahD1eTzw'),
(142, NULL, '2024-01-01 16:38:52', 5, NULL, 101, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', '8W5YenaubZ'),
(143, 'Tolong dihadiri', '2024-01-01 16:39:22', 9, NULL, 101, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'SwYFI5P7AW'),
(144, NULL, '2024-01-01 16:42:15', 2, NULL, 102, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'wgViF2B1uZ'),
(145, NULL, '2024-01-01 16:42:17', 5, NULL, 102, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'ojXT9tsOzN'),
(146, NULL, '2024-01-01 16:42:18', 9, NULL, 102, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'xbnH4C5vDV'),
(147, '', '2024-01-01 16:43:42', 11, NULL, 102, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'QkrpSWexi0'),
(148, 'Tolong Dihadiri', '2024-01-01 16:54:32', 13, NULL, 102, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'HYLGIM85Po'),
(149, 'Tolong Dihadiri', '2024-01-01 16:54:33', 14, NULL, 102, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'XfpUAmLNId'),
(150, NULL, '2024-01-01 16:56:17', 2, NULL, 103, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'QJmxjynk3H'),
(151, '', '2024-01-01 16:56:56', 9, NULL, 103, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'E7ceTAhVmZ'),
(152, NULL, '2024-01-01 16:58:45', 2, NULL, 104, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'zR1PpCjaIM'),
(153, 'Testing', '2024-01-01 16:59:09', 9, NULL, 104, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'hpLfUQGwq3'),
(154, 'ts', '2024-01-01 17:05:52', 15, NULL, 87, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', '8oTBhPHVQg'),
(155, 'Tolong Semua Hadir', '2024-01-01 22:51:38', 9, NULL, 86, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'syOUxr43EX'),
(156, 'Tolong Semua Hadir', '2024-01-01 22:51:39', 11, NULL, 86, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'AC73Wvya1M'),
(157, NULL, '2024-01-02 05:45:23', 2, NULL, 105, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'X1sd7YOPmj'),
(158, NULL, '2024-01-02 07:27:17', 2, NULL, 106, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'ZMdE56b2Tr'),
(159, NULL, '2024-01-02 07:27:18', 5, NULL, 106, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', '74jpWUAcSF'),
(160, NULL, '2024-01-02 07:27:19', 4, NULL, 106, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'cEgLuKY9wU'),
(161, 'Tolong Berikan Pendapat\r\n', '2024-01-02 07:32:52', 9, NULL, 106, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'psUS2Zv5yj'),
(162, NULL, '2024-01-02 07:52:12', 2, NULL, 107, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'yclFPRCBZg'),
(163, NULL, '2024-01-02 07:52:13', 5, NULL, 107, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'sctNlHK2bq'),
(164, NULL, '2024-01-02 07:52:14', 4, NULL, 107, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', '3BjQ1JIsHv'),
(165, NULL, '2024-01-02 07:52:15', 6, NULL, 107, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'CY5RVbzLeZ'),
(166, 'Tolong dengarkan', '2024-01-02 14:24:27', 16, NULL, 107, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'Ss2YyMtODi'),
(167, 'Testing', '2024-01-02 14:24:54', 3, NULL, 105, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'kSDHRNzJjh'),
(168, NULL, '2024-01-02 15:16:35', 2, NULL, 108, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'mD9ZfzlsPY'),
(169, NULL, '2024-01-02 15:16:37', 5, NULL, 108, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'AjK1vUWlDJ'),
(170, 'Tolong Segera di lanjutkan', '2024-01-02 15:18:32', 8, NULL, 108, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'jUXvIhCbGs'),
(171, 'Tes', '2024-01-02 15:36:53', 11, NULL, 108, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'rDdGKBLhaH'),
(172, 'Tes', '2024-01-02 15:44:34', 13, NULL, 108, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 't0AR5fYS1x'),
(173, NULL, '2024-01-03 01:33:18', 2, NULL, 109, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'ywmLaZxFYf'),
(174, NULL, '2024-01-03 01:33:19', 5, NULL, 109, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'KeCYOQJsNM'),
(175, 'Tolong Perbaiki', '2024-01-03 01:41:55', 3, NULL, 109, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'JWia7BmH29'),
(176, NULL, '2024-01-03 02:11:30', 2, NULL, 110, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', '5uHPETztak'),
(177, NULL, '2024-01-03 02:11:31', 5, NULL, 110, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'DU50N2Vlbw'),
(178, 'Testing', '2024-01-03 02:12:10', 9, 2, 110, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'gOShRvLoiU'),
(179, 'Testing', '2024-01-03 02:21:34', 3, 5, 110, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', '0Fq21cyEzj'),
(180, NULL, '2024-01-03 02:45:24', 2, NULL, 111, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'h4DVUdApOB'),
(181, NULL, '2024-01-03 02:45:25', 5, NULL, 111, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'ZBlIySQJ5H'),
(182, 'Testing', '2024-01-03 02:52:21', 8, 2, 111, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', '68CqO2sZiB'),
(183, 'Testing', '2024-01-03 02:52:22', 9, 2, 111, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'FhzVbn1rAv'),
(184, 'Tolong dikerjakan juga', '2024-01-03 02:54:09', 10, 5, 111, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'YGbOtApa9P'),
(185, NULL, '2024-01-03 02:56:57', 2, NULL, 112, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'KtQghJ51Fp'),
(186, NULL, '2024-01-03 02:56:58', 5, NULL, 112, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'LCJsFdPQoT'),
(187, NULL, '2024-01-03 02:58:28', 2, NULL, 113, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', '1084qrTEOe'),
(188, NULL, '2024-01-03 02:58:29', 5, NULL, 113, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'gG1icE8sek'),
(189, 'Tes', '2024-01-03 03:39:30', 9, 2, 113, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'JqNYPCVUBL'),
(190, 'Tes', '2024-01-03 03:54:02', 11, 2, 112, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'KDUhEFe3bN'),
(191, NULL, '2024-01-03 03:55:19', 3, NULL, 114, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', '6JqkseZ29U'),
(192, NULL, '2024-01-03 03:55:20', 9, NULL, 114, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'ZBXGV7eM6w'),
(193, 'TOlong di lanjutkan', '2024-01-03 04:08:25', 8, 3, 114, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'y7ce5sd8Uj'),
(194, NULL, '2024-01-03 06:49:00', 2, NULL, 115, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'OWMTcDb2GI'),
(195, NULL, '2024-01-03 06:49:00', 5, NULL, 115, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'NJ79AbYw45'),
(196, 'Tolong Perbaiki', '2024-01-03 06:50:32', 9, 2, 115, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'Mp4uQKRGg5'),
(197, NULL, '2024-01-04 01:17:02', 2, NULL, 116, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'mFZn3OBRwK'),
(198, NULL, '2024-01-04 01:17:03', 5, NULL, 116, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'OnProgress', 'H0L6Rn4Brl'),
(199, 'Tolong Perbaiki', '2024-01-04 01:27:56', 9, 2, 116, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'EazkgPOsHN'),
(200, NULL, '2024-01-04 01:42:13', 8, NULL, 117, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'MSOFNyEXkQ'),
(201, NULL, '2024-01-04 01:42:13', 9, NULL, 117, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'NPtosbGIa3'),
(202, NULL, '2024-01-04 02:09:34', 8, NULL, 118, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'zaNeAZFsbR'),
(203, NULL, '2024-01-04 02:09:35', 9, NULL, 118, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', '1OWC2VcxJY'),
(204, NULL, '2024-01-04 02:09:56', 2, NULL, 119, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'zoRJLn2wty'),
(205, NULL, '2024-01-04 02:09:58', 5, NULL, 119, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Continued', 'xVztKP1Yn5'),
(206, 'TOlong Lanjutkan', '2024-01-04 02:27:16', 9, 5, 119, '{\"status\":true,\"response\":{\"key\":{\"remoteJid\":\"6283830158599@s.whatsapp.net\",\"fromMe\":true,\"id\":\"BAE', 'Accepted', 'Ohr5R9gylj');

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

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(110, '::1', 'gmspi@barata.id', 1704332580);

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
(1, '127.0.0.1', 'sekdir', '$2y$10$TAJOMC9u4iqOBmVDtFYhHuduyDgHj75t6d1kpY5DIdzhvND1jHt4m', 'sekdir.gresik@barata.id', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1704330867, 1, 'Sekretaris', 'Direksi', 'sekdir.jpg', '083830158599'),
(2, '::1', 'dirut', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'dirut@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701327537, 1704331646, 1, 'Direktur', 'Utama', 'dirut.jpg', '083830158599'),
(3, '::1', 'bsmk3lh', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'bsmk3lh@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701419430, 1704174123, 1, 'GM', 'BSMK3LH', 'default.jpg', '083830158599'),
(4, '::1', 'dksdmmr', '$2y$10$wSGK26hasqhIfnF.cEAxJeIM53R1u.xwsE3yhxjy9u7TawHy/FRci', 'dksdmmr@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701924673, 1702345116, 1, 'Direktur', 'KSDMMR', 'dksdmm.JPG', '083830158599'),
(5, '::1', 'dirops', '$2y$10$Rjl.j954XkYYO4wi5gVXMu2VIP7zWaq7Ko311LLFtNYfC0SAnLitS', 'dirops@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701927521, 1704262164, 1, 'Direktur', 'Operasi', 'dirops.jpg', '083830158599'),
(6, '::1', 'dirpem', '$2y$10$TC0NyeqlG.iqY8g.n78l4ev248IKa9VHpPT/JSqI1NC00tlvesYcG', 'dirpem@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701927935, 1704262154, 1, 'Direktur', 'Pemasaran', 'default.jpg', '083830158599'),
(7, '::1', 'sekper', '$2y$10$KHaVyYwW6XuM2b0Lwp.qY.Zcw1dUspclSsDYBqFSARxiKODnqiwIS', 'sekper@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702000888, NULL, 1, 'Sekretaris', 'Perusahaan', 'default.jpg', '083830158599'),
(8, '::1', 'spi', '$2y$10$2WtFuKk.ymo830Amc1Qvy.MCTK9rMMDnkDE0OxCQwGEtW6k3wlyOm', 'spi@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702000946, 1704332623, 1, 'Kepala', 'SPI', 'default.jpg', '083830158599'),
(9, '::1', 'busdev', '$2y$10$BhoHoeQBxoNZlz7hFpGeWu9/SgtWBs622K0uGXV1hZBV60y/Epwxi', 'busdev@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702001131, 1704332641, 1, 'GM', 'BPU', 'default.jpg', '083830158599'),
(10, '::1', 'sdm', '$2y$10$Tl1UFVeHqHSfAK8Tmt5/9.HD9FkaAMARfjlAkg0Dl0L6mUiMqoy1e', 'sdm@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702001914, 1702008790, 1, 'GM Biro', 'SDM', 'default.jpg', '083830158599'),
(11, '::1', 'gmap', '$2y$10$v9RII25TTQXni.LSne7UMuQHPr565qfTTlcssAnQOd43cJX9Io0AG', 'gmap@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702002120, 1704121271, 1, 'GM', 'BKA', 'default.jpg', '083830158599'),
(12, '::1', 'gmbmsc', '$2y$10$HnLYgdDkelOpeXrp8sQR0e32cp9CzeYvS/C1WtMw07sV7kHXlInb2', 'gmbmsc@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702002180, 1702008608, 1, 'GM Biro', 'Supply Chain', 'default.jpg', '083830158599'),
(13, '::1', 'gmlegal', '$2y$10$zSbwoLihoAaqCPYvUZukb.ywTsBim6hnHHDkxkU2xvaebfuLzEQtC', 'gmlegal@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702004873, NULL, 1, 'GM Biro', 'Legal', 'default.jpg', '083830158599'),
(14, '::1', 'gmdikp', '$2y$10$ycpS.jCKn7E6YUzV4ZUv4eJ0zES7.YfDAJO0nnoezdjcJOegXQ2ia', 'gmdikp@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007446, NULL, 1, 'GM', 'DIKP', 'default.jpg', '083830158599'),
(15, '::1', 'gmcor', '$2y$10$oPtqc0NODpkVkMwjriA9ruMpseZC8W.vFkbY9p19wPBHboCafDqwK', 'gmcor@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007500, 1702959836, 1, 'GM', 'COR', 'default.jpg', '083830158599'),
(16, '::1', 'gmsda', '$2y$10$D21Kokar0wY.BIENQik1c.YiN3efp1RHKXWGEqz6.xYks6HlqsFbq', 'gmsda@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007554, NULL, 1, 'GM', 'DSDA', 'default.jpg', '083830158599'),
(17, '::1', 'gmpbkt', '$2y$10$3DgOMUw3oMmk3qlkF9fpruKWR21FPvFegOoQbnMtaT0P25IilOcqC', 'gmpbkt@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007605, 1702959926, 1, 'GM', 'D. Pembangkit', 'default.jpg', '083830158599');

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
(36, 1, 1),
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
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `dokumen_user`
--
ALTER TABLE `dokumen_user`
  MODIFY `id_dokumen_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
