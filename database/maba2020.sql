-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2020 pada 14.26
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webhmpsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `maba2020`
--

CREATE TABLE `maba2020` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_reg` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `hobby` varchar(30) NOT NULL,
  `schoolorigin` varchar(50) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `idline` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `ukuranfoto` varchar(20) NOT NULL,
  `typefoto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maba2020`
--

INSERT INTO `maba2020` (`id`, `email`, `no_reg`, `name`, `placeofbirth`, `dateofbirth`, `hobby`, `schoolorigin`, `phonenumber`, `idline`, `foto`, `ukuranfoto`, `typefoto`) VALUES
(1, 'afandiwu22@gmail.com', 'BM_192218', 'afandi wu', 'batam', '2020-07-12', 'Sports', 'SMK putra Batam', '081267714878', 'afndi', '', '', ''),
(2, 'Budiemon@gmail.com', 'Bm0001', 'budi', 'Batam', '2020-07-20', 'Eating', 'SMK putra Batam', '0811771311', 'afandi', '9207174.jpg', '49948', ''),
(3, 'afandiwu22@gmail.com', 'BM_192218', 'hello', 'Batam', '2020-07-03', 'Eating', 'SMK putra Batam', '0911', 'afandi', '9207174.jpg', '49948', 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `maba2020`
--
ALTER TABLE `maba2020`
  ADD PRIMARY KEY (`id`,`no_reg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `maba2020`
--
ALTER TABLE `maba2020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
