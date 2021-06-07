-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2021 pada 15.11
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasiweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacovid`
--

CREATE TABLE `datacovid` (
  `kasus` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `wilayah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datacovid`
--

INSERT INTO `datacovid` (`kasus`, `keterangan`, `wilayah`) VALUES
('Sembuh', '164.787', 'DKI JAKARTA'),
('Kasus Positif', '198.387', 'DKI JAKARTA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datacovid`
--
ALTER TABLE `datacovid`
  ADD PRIMARY KEY (`keterangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
