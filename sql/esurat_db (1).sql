-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2023 pada 10.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

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
-- Struktur dari tabel `dokumen`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `nama_pengirim`, `no_surat`, `no_agenda`, `tanggal`, `perihal`, `file_dokumen`, `status`, `timestamp`) VALUES
(8, 'PT Waskita Karya(Persero)', 'XX1/WSKT/2023', '128', '2023-12-08', 'Acceptanble', '8ddbc9f042bfd8f96e4521afb429484e.pdf', 'OnProcess', '2023-12-07'),
(9, 'PT Barata Jaya', '1XX/12/31', '127', '2023-12-08', 'Donasi', '11cc1a7bd9044a5139c632a9f079ba86.pdf', 'OnAction GM', '2023-12-08'),
(10, 'PT Pertamina Persero', '123/XX2/123/1212', '123', '2023-12-12', 'Sosialisasi', '87af695d909651a10531b50a1066e0e2.pdf', 'OnProgress GM', '2023-12-08'),
(11, 'PT Petrokimia Gresik', '123/XX2/123/1212', '1234', '2023-12-08', 'sadasd', '83b5ec3472ee0aa82f9b50e92def13d3.pdf', 'OnProgress GM', '2023-12-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_user`
--

CREATE TABLE `dokumen_user` (
  `id_dokumen_user` int(11) NOT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp(),
  `id_users` int(11) DEFAULT NULL,
  `id_dokumen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumen_user`
--

INSERT INTO `dokumen_user` (`id_dokumen_user`, `keterangan`, `timestamp`, `id_users`, `id_dokumen`) VALUES
(8, NULL, '2023-12-07 23:40:54', 2, 11),
(9, NULL, '2023-12-07 23:40:58', 6, 10),
(10, 'Segera Lanjutkan', '2023-12-07 23:41:50', 3, 11),
(11, NULL, '2023-12-08 01:29:29', 2, 9),
(12, 'Segera Di tindsak Lnajuti Terkait Surat ini', '2023-12-08 06:20:18', 3, 10),
(13, 'Segera ditindak lanjuti', '2023-12-08 07:24:46', 15, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Sekper'),
(2, 'members', 'Direksi'),
(3, 'general', 'General Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(68, '::1', 'admin@barata.id', 1701984945),
(73, '::1', 'admin@barata.id', 1701987792),
(74, '::1', 'admin@barata.id', 1701992562),
(77, '::1', 'direksi@barata.id', 1702019400),
(78, '::1', 'cor@barata.id', 1702020311);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'sekdir', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'sekdir@barata.id', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1702018259, 1, 'Sekretaris', 'Direksi', 'default.jpg', '0'),
(2, '::1', 'dirut', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'dirut@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701327537, 1702020136, 1, 'Direktur', 'Utama', 'default.jpg', '+623830158599'),
(3, '::1', 'bsmk3lh', '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'bsmk3lh@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701419430, 1702019958, 1, 'GM', 'BSMK3LH', 'default.jpg', '+623830158599'),
(4, '::1', 'dksdmmr', '$2y$10$wSGK26hasqhIfnF.cEAxJeIM53R1u.xwsE3yhxjy9u7TawHy/FRci', 'dksdmmr@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701924673, NULL, 1, 'Direktur', 'KSDMMR', 'default.jpg', '+623830158599'),
(5, '::1', 'dirops', '$2y$10$Rjl.j954XkYYO4wi5gVXMu2VIP7zWaq7Ko311LLFtNYfC0SAnLitS', 'dirops@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701927521, 1701988185, 1, 'Direktur', 'Operasi', 'default.jpg', '085236352892'),
(6, '::1', 'dirpem', '$2y$10$TC0NyeqlG.iqY8g.n78l4ev248IKa9VHpPT/JSqI1NC00tlvesYcG', 'dirpem@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701927935, 1702016390, 1, 'Direktur', 'Pemasaran', 'default.jpg', '085236352892'),
(7, '::1', 'sekper', '$2y$10$KHaVyYwW6XuM2b0Lwp.qY.Zcw1dUspclSsDYBqFSARxiKODnqiwIS', 'sekper@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702000888, NULL, 1, 'Sekretaris', 'Perusahaan', 'default.jpg', '085236352892'),
(8, '::1', 'spi', '$2y$10$2WtFuKk.ymo830Amc1Qvy.MCTK9rMMDnkDE0OxCQwGEtW6k3wlyOm', 'spi@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702000946, NULL, 1, 'Kepala', 'SPI', 'default.jpg', '085236352892'),
(9, '::1', 'busdev', '$2y$10$BhoHoeQBxoNZlz7hFpGeWu9/SgtWBs622K0uGXV1hZBV60y/Epwxi', 'busdev@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702001131, NULL, 1, 'GM Biro', 'Pengembangan Usaha', 'default.jpg', '085236352892'),
(10, '::1', 'sdm', '$2y$10$Tl1UFVeHqHSfAK8Tmt5/9.HD9FkaAMARfjlAkg0Dl0L6mUiMqoy1e', 'sdm@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702001914, 1702008790, 1, 'GM Biro', 'SDM', 'default.jpg', '085236352892'),
(11, '::1', 'gmap', '$2y$10$v9RII25TTQXni.LSne7UMuQHPr565qfTTlcssAnQOd43cJX9Io0AG', 'gmap@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702002120, NULL, 1, 'GM Biro', 'Keuangan & Akuntansi', 'default.jpg', '085236352892'),
(12, '::1', 'gmbmsc', '$2y$10$HnLYgdDkelOpeXrp8sQR0e32cp9CzeYvS/C1WtMw07sV7kHXlInb2', 'gmbmsc@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702002180, 1702008608, 1, 'GM Biro', 'Supply Chain', 'default.jpg', '085236352892'),
(13, '::1', 'gmlegal', '$2y$10$zSbwoLihoAaqCPYvUZukb.ywTsBim6hnHHDkxkU2xvaebfuLzEQtC', 'gmlegal@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702004873, NULL, 1, 'GM Biro', 'Legal', 'default.jpg', '085236352892'),
(14, '::1', 'gmdikp', '$2y$10$ycpS.jCKn7E6YUzV4ZUv4eJ0zES7.YfDAJO0nnoezdjcJOegXQ2ia', 'gmdikp@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007446, NULL, 1, 'GM', 'DIKP', 'default.jpg', '085236352892'),
(15, '::1', 'gmcor', '$2y$10$oPtqc0NODpkVkMwjriA9ruMpseZC8W.vFkbY9p19wPBHboCafDqwK', 'gmcor@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007500, 1702027093, 1, 'GM', 'COR', 'default.jpg', '085236352892'),
(16, '::1', 'gmsda', '$2y$10$D21Kokar0wY.BIENQik1c.YiN3efp1RHKXWGEqz6.xYks6HlqsFbq', 'gmsda@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007554, NULL, 1, 'GM', 'DSDA', 'default.jpg', '085236352892'),
(17, '::1', 'gmpbkt', '$2y$10$3DgOMUw3oMmk3qlkF9fpruKWR21FPvFegOoQbnMtaT0P25IilOcqC', 'gmpbkt@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1702007605, NULL, 1, 'GM', 'D. Pembangkit', 'default.jpg', '085236352892');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
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
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indeks untuk tabel `dokumen_user`
--
ALTER TABLE `dokumen_user`
  ADD PRIMARY KEY (`id_dokumen_user`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `dokumen_user`
--
ALTER TABLE `dokumen_user`
  MODIFY `id_dokumen_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
