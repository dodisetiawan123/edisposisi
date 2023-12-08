-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 01:57 AM
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
(8, 'PT Waskita Karya(Persero)', 'XX1/WSKT/2023', '128', '2023-12-08', 'Acceptanble', '8ddbc9f042bfd8f96e4521afb429484e.pdf', 'OnProcess', '2023-12-07'),
(9, 'PT Barata Jaya', '1XX/12/31', '127', '2023-12-08', 'Donasi', '11cc1a7bd9044a5139c632a9f079ba86.pdf', 'OnProcess', '2023-12-08'),
(10, 'PT Pertamina Persero', '123/XX2/123/1212', '123', '2023-12-12', 'Sosialisasi', '87af695d909651a10531b50a1066e0e2.pdf', 'OnProgress BOD', '2023-12-08'),
(11, 'PT Petrokimia Gresik', '123/XX2/123/1212', '1234', '2023-12-08', 'sadasd', '83b5ec3472ee0aa82f9b50e92def13d3.pdf', 'OnProgress GM', '2023-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_user`
--

CREATE TABLE `dokumen_user` (
  `id_dokumen_user` int(11) NOT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp(),
  `id_users` int(11) DEFAULT NULL,
  `id_dokumen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen_user`
--

INSERT INTO `dokumen_user` (`id_dokumen_user`, `keterangan`, `timestamp`, `id_users`, `id_dokumen`) VALUES
(8, NULL, '2023-12-07 23:40:54', 2, 11),
(9, NULL, '2023-12-07 23:40:58', 6, 10),
(10, 'Segera Lanjutkan', '2023-12-07 23:41:50', 3, 11);

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
(67, '::1', 'sekper@barata.id', 1701937767),
(68, '::1', 'admin@barata.id', 1701984945),
(73, '::1', 'admin@barata.id', 1701987792),
(74, '::1', 'admin@barata.id', 1701992562);

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
(1, '127.0.0.1', 'sekdir', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'sekdir@barata.id', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1701992564, 1, 'Sekretaris', 'Direksi', 'default.jpg', '0'),
(2, '::1', 'dirut', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'dirut@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701327537, 1701992476, 1, 'Direktur', 'Utama', 'default.jpg', '+623830158599'),
(3, '::1', 'bsmk3lh', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'bsmk3lh@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701419430, 1701937485, 1, 'GM', 'BSMK3LH', 'default.jpg', '+623830158599'),
(4, '::1', 'dksdmmr', '$2y$10$wSGK26hasqhIfnF.cEAxJeIM53R1u.xwsE3yhxjy9u7TawHy/FRci', 'dksdmmr@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701924673, NULL, 1, 'Direktur', 'KSDMMR', 'default.jpg', '+623830158599'),
(5, '::1', 'dirops', '$2y$10$Rjl.j954XkYYO4wi5gVXMu2VIP7zWaq7Ko311LLFtNYfC0SAnLitS', 'dirops@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701927521, 1701988185, 1, 'Direktur', 'Operasi', 'default.jpg', '085236352892'),
(6, '::1', 'dirpem', '$2y$10$TC0NyeqlG.iqY8g.n78l4ev248IKa9VHpPT/JSqI1NC00tlvesYcG', 'dirpem@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701927935, 1701990251, 1, 'Direktur', 'Pemasaran', 'default.jpg', '085236352892');

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
(13, 6, 2);

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
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dokumen_user`
--
ALTER TABLE `dokumen_user`
  MODIFY `id_dokumen_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
