-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2020 pada 14.18
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kendaraan`
--

CREATE TABLE `detail_kendaraan` (
  `nik` char(20) NOT NULL,
  `norang` varchar(20) NOT NULL,
  `sales` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_kendaraan`
--

INSERT INTO `detail_kendaraan` (`nik`, `norang`, `sales`, `type`, `status`, `tanggal`) VALUES
('77587366464', 'ASDFGHJKL', 'sarah', 'mio m3', 'belum', '13 Januari 2020'),
('74747747774', 'BDMMDJ78NN', 'yani', 'nmax', 'belum', '12 Januari 2020'),
('77464675775', 'DJFHFJ67DJJD78', 'yani', 'nmax', 'belum', '13 Januari 2020'),
('75775058858', 'JFJFFJFUUF87YH', 'yani', 'lexi', 'belum', '13 Januari 2020'),
('64775885885', 'THNNFNF876ND', 'sarah', 'jupiter mx', 'belum', '12 Januari 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengambilan`
--

CREATE TABLE `detail_pengambilan` (
  `norang` varchar(20) NOT NULL,
  `status1` varchar(50) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `tgl1` date NOT NULL,
  `status2` varchar(50) DEFAULT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `tgl2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pengambilan`
--

INSERT INTO `detail_pengambilan` (`norang`, `status1`, `nama1`, `tgl1`, `status2`, `nama2`, `tgl2`) VALUES
('BDMMDJ78NN', 'sudah ambil', 'santi', '2020-02-05', 'sudah ambil', 'santi', '2020-02-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id` int(11) NOT NULL,
  `nik` char(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id`, `nik`, `nama`, `alamat`, `kota`, `telp`, `email`) VALUES
(1, '74747747774', 'alex', 'jl. vetran utara', 'makassar', '851884884', 'alex@gmail.com'),
(2, '64775885885', 'budi', 'jl. baji ateka', 'makassar', '854554747', 'budi@gmail.com'),
(3, '75775058858', 'clara', 'jl. vetran utara', 'makassar', '8514577854', 'clara@gmail.com'),
(4, '77464675775', 'ranto', 'jl. Sika', 'gowa', '85145673891', 'ranto@gmail.com'),
(5, '77587366464', 'mahalimi', 'jl. Rotan', 'makassar', '8217466577', 'mahalimi@gmail.com'),
(6, '7773261516164', 'test', 'jln.test', '', '08215', 'test1@mail.com'),
(7, '38464661646166', 'test1', 'jlndfsgfhdj', '', '20115625', 'test1@mail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Yanoris Arnold Nigga', 'arnold040897@gmail.com', '$2y$10$Qpqws8IGL'),
(2, 'Yanoris Arnold Nigga', 'arnold040897@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Arnold', 'bisulcustom@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'ivan darmawan', 'ivan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_kendaraan`
--
ALTER TABLE `detail_kendaraan`
  ADD PRIMARY KEY (`norang`);

--
-- Indeks untuk tabel `detail_pengambilan`
--
ALTER TABLE `detail_pengambilan`
  ADD PRIMARY KEY (`norang`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
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
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
