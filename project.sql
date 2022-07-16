-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2022 pada 17.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `project_leader` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `end_at` date NOT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `campaign`
--

INSERT INTO `campaign` (`id`, `project_name`, `client`, `project_leader`, `email`, `created_at`, `end_at`, `progress`) VALUES
(1, 'Pembuatan Si Keuangan', 'Bakeuda Prov. Kalsel', 'Indra Setiawan', 'indra.setyawan@gmail.com', '0000-00-00', '2022-08-14', 30),
(2, 'Learning Management System', 'Ruang Guru', 'Hylman Syaputra', 'hilman.syah@gmail.com', '2022-01-30', '2022-03-10', 80),
(4, 'Si Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'Febri Gunawan', 'febri.gunawan@gmail.com', '2022-02-02', '2022-05-30', 40),
(5, 'Employee Monitoring', 'PT. Bina Sarana Sukses', 'Handoko Aji', 'handoko.aji@gmail.com', '2021-09-02', '2022-01-15', 100),
(6, 'Crowfounding Web', 'Institut', 'Agus Marsadualan', 'agusmarsadu@gmail.com', '2022-07-01', '2022-07-09', 50);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
