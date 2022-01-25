-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2022 pada 08.09
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cs`
--

CREATE TABLE `cs` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `wn` varchar(100) NOT NULL,
  `almt` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `askl` varchar(100) NOT NULL,
  `na` varchar(100) NOT NULL,
  `ni` varchar(100) NOT NULL,
  `pkot` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cs`
--

INSERT INTO `cs` (`id`, `nama`, `ttl`, `tl`, `wn`, `almt`, `email`, `nohp`, `askl`, `na`, `ni`, `pkot`, `img`) VALUES
(13, 'Udin', 'Bandung', '2022-01-14', 'Indonesia', 'puri melon asri', 'jajang@gmail.com', ' 08123392401', 'Smp Pesat', 'Jajat', 'Siti', '5.000.000', ''),
(14, 'Dayat Komar', 'Jakarta', '2022-01-05', 'Indonesia', 'puri melon asri', 'jajang@gmail.com', '081212121212', 'Smp 1 Batam', 'Jajat', 'nunung', '16.000.000', ''),
(15, 'Komar', 'Bandung', '2022-01-11', 'Indonesia', 'Bogor', 'mocdaffa204@gmail.com', '081212121212', 'Smp 1 Batam', 'Jajat', 'nunung', '10.000.000', '1 (2).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `un` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `un`, `pw`) VALUES
(1, 'user', '123'),
(2, 'gale', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cs`
--
ALTER TABLE `cs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
