-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2021 pada 20.57
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pensiun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `nohp`, `email`, `alamat`, `foto`, `created_at`, `updated_at`) VALUES
('11551102433', 'Abdul Aziz', 'L', '1996-07-24', '6282345445644', 'aziz@gmail.com', 'garuda sakti', '1608385248_afaa56b33db4c2ce8623.jpg', '2020-12-19 07:40:48', '2020-12-20 05:28:42'),
('11551105411', 'Bayu Sugara', 'L', '1996-05-26', '6281235326195', 'bayusugara@gmail.com', 'jln kapau sari', '1608290686_0e0d063e7bb514a5b1ca.jpg', '2020-12-18 05:24:46', '2020-12-20 05:29:08'),
('11551105415', 'Dicky Perdana', 'L', '1960-11-27', '6281276546126', 'dixky@gmail.com', 'Kubang', 'user.png', '2020-12-19 10:40:54', '2020-12-20 05:26:52'),
('11551105416', 'Dadan', 'L', '1959-11-29', '6285263861448', 'dadan@gmail.com', 'dumai', '1608389529_0faa778e789c0cf1c06a.jpg', '2020-12-19 08:52:09', '2020-12-20 07:57:30'),
('11551105419', 'Beno Syahputra', 'L', '1960-11-29', '6285271171136', 'beno@gmail.com', 'Hangtuah', 'user.png', '2020-12-19 10:18:18', '2020-12-23 01:07:55'),
('11551187655', 'Dika', 'L', '1960-11-28', '6281365643177', 'dika@gmail.com', 'Mawar', '1608408786_9545e98792f083c76c59.jpg', '2020-12-19 10:42:27', '2020-12-20 05:26:39'),
('11551187666', 'Andry P', 'L', '1998-09-29', '6282345445644', 'andry@gmail.com', 'Flamboyan', '1608150638_bc3f3a0e9a79fe59d8b5.jpg', '2020-12-16 14:30:38', '2020-12-20 05:29:20'),
('11651111902', 'Ucok', 'L', '1998-03-03', '08123456789', 'ucok@gmail.com', 'jalan melati', 'user.png', '2020-12-23 00:31:49', '2020-12-23 00:31:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sukses_kirim`
--

CREATE TABLE `sukses_kirim` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sukses_kirim`
--

INSERT INTO `sukses_kirim` (`id`, `nik`, `created_at`, `updated_at`) VALUES
(1, '11551105419', '2021-01-05 08:53:28', '2021-01-05 08:53:28'),
(69, '11551105419', '2021-01-14 09:37:59', '2021-01-14 09:37:59'),
(70, '11551187655', '2021-01-14 11:13:44', '2021-01-14 11:13:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('superadmin','admin') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'Dadans', 'admin', '$2y$10$JrmaGGo1O4ONbUqOIIbrrO9.I3ZdrwVqOMna2vszZtpPd083ChwXG', 'admin', 'user.png', '2020-12-14 05:34:31', '2020-12-19 12:53:37'),
(7, 'Super Admin', 'superadmin', '$2y$10$7YlQAqzRgVWG3DdxZMA0L.C5oiVDsUdaXQ8QlyHz1cPFRQuuigPE6', 'superadmin', '1610644404_556de8305f7cbe745dc6.jpg', '2020-12-23 00:13:05', '2021-01-14 11:13:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `sukses_kirim`
--
ALTER TABLE `sukses_kirim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sukses_kirim`
--
ALTER TABLE `sukses_kirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sukses_kirim`
--
ALTER TABLE `sukses_kirim`
  ADD CONSTRAINT `sukses_kirim_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
