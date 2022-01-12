-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 12:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `id_pengarang` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `id_penerbit` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `judul_buku` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `kelas` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `prog_keahlian` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `sumber` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tgl_terima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_pengarang`, `id_penerbit`, `judul_buku`, `kelas`, `prog_keahlian`, `tahun_terbit`, `sumber`, `jumlah`, `tgl_terima`) VALUES
('BK001', 'PGG002', 'PBT001', 'Bumi Bulat', 'X', 'TITL', 2021, 'Sumbangan', 9, '2021-12-22'),
('BK002', 'PGG002', 'PBT002', 'Cara Kayang Yang Baik Dan Benar', 'XII', 'UMUM', 1998, 'Sumbangan', 8, '2021-12-21'),
('BK003', 'PGG005', 'PBT004', 'Merawat Bunga Jilid 2', 'XII', 'UMUM', 1999, 'Bantuan', 10, '2022-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `id_anggota` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `id_buku` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
('PM001', 'AGG002', 'BK001', '2021-12-23', '2021-12-30'),
('PM002', 'AGG005', 'BK002', '2021-12-23', '2021-12-30'),
('PM003', 'AGG011', 'BK002', '2022-01-11', '2022-01-18');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `jml_after_pinjam` AFTER INSERT ON `peminjaman` FOR EACH ROW update buku set buku.jumlah = buku.jumlah -1 where buku.id_buku = new.id_buku
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `jml_before_delete` AFTER DELETE ON `peminjaman` FOR EACH ROW update buku set buku.jumlah = buku.jumlah +1 where buku.id_buku = old.id_buku
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `nama_penerbit` varchar(128) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
('PBT001', 'Sinar Cahaya1'),
('PBT002', 'Grameeddd'),
('PBT003', 'Melati'),
('PBT004', 'Kanbaa');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `nama_pengarang` varchar(128) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
('PGG001', 'Ruben1'),
('PGG002', 'Fajri2'),
('PGG004', 'Mawar'),
('PGG005', 'Bankaa');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `id_anggota` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `id_buku` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_kembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `tgl_kembalikan`) VALUES
('PB001', 'AGG002', 'BK001', '2021-12-23', '2021-12-30', '2021-12-23'),
('PB002', 'AGG008', 'BK001', '2021-12-23', '2021-12-30', '2021-12-23'),
('PB003', 'AGG004', 'BK001', '2021-12-23', '2021-12-30', '2021-12-23'),
('PB004', 'AGG005', 'BK002', '2021-12-23', '2021-12-30', '2022-12-01'),
('PB005', 'AGG011', 'BK002', '2022-01-11', '2022-01-18', '2022-01-11'),
('PB006', 'AGG011', 'BK003', '2022-01-11', '2022-01-18', '2022-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_anggota` varchar(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `jenkel` varchar(128) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_anggota`, `name`, `username`, `password`, `image`, `jenkel`, `alamat`, `no_hp`, `role_id`, `is_active`, `date_created`) VALUES
('AGG001', 'Fajri', 'fajri1', '$2y$10$Q8Y1FL5bFoDMABMz6dkNBuc.c9Znpz3igZlz3yph8cCHfxqrdILRy', 'user8-128x128.jpg', 'Laki-laki', 'BANANANAA', '0877456123123', 1, 1, 1639478545),
('AGG002', 'Rubentus Hutapeaa', 'ruben1', '$2y$10$nhZQYZWjoGGBG8wT1DH3J.2/J/W8M7O9s2wF2XGah74WSE0KuIDsW', 'default.jpg', 'Laki-laki', '', '089654111744', 2, 1, 1639478568),
('AGG003', 'Deva Triawan', 'deva1', '$2y$10$EVIAssi2FDIU3B6Kyb7c9uLwHtNd0sbUJtO3FfsdgEKQqUCHM2C2y', 'default.jpg', 'Laki-laki', '', '08878745485212', 1, 1, 1639478636),
('AGG004', 'Denny Halim', 'denny1', '$2y$10$M6.SkUzrrc5T4lmARkGGY./x7dLTgY7SremmcU6AJew6ZwAsS0f1K', 'default.jpg', 'Laki-laki', 'Deasdadasda', '087878454875', 2, 1, 1639488805),
('AGG006', 'Hafiz', 'hafiz1', '$2y$10$NMOxErFzQ59JL3UPMmZbPucE9pMJbaMptEZ7ZfpMqP08t68otnL/y', 'default.jpg', 'Laki-laki', 'Sdasdadadasdada', '087875487545784', 1, 1, 1640147828),
('AGG007', 'Kevin', 'kevin1', '$2y$10$ZcJbBVa21Nh8LJ1pQlzg5OWSVTrrLKm1Brj.p675vOyM4JIbYBmmm', 'default.jpg', 'Laki-laki', 'Asdasdasdasdfaf', '08784548451215', 1, 1, 1640147902),
('AGG008', 'Dini', 'dini1', '$2y$10$7RJ3clNpF4iq8u6u3L3pe.y3bB6WYKKd5EuzwVi741YsZen.hhJk.', 'default.jpg', 'Perempuan', 'Bolong', '0812345678901', 2, 1, 1640248381),
('AGG009', 'Gusli', 'gusli', '$2y$10$eMisysrFDVuPG42GdXBDS.luqED678LPwMlsuZA4jFkY5BUyDc/NC', 'default.jpg', 'Laki-laki', 'Asdasdasd', '087545454121', 1, 1, 1641295025),
('AGG010', 'Fajri', 'admin', '$2y$10$3bO7pjxnLnImEGzg8Fymwe7XR2iY1IGWpypBg3FZqdXqmkAl9gUFe', 'default.jpg', 'Laki-laki', 'Thehok', '0855485454545', 1, 1, 1641929682),
('AGG011', 'Ramadhan', 'anggota', '$2y$10$k9wS5ev1L72P.XL86UwqXe0OwsXILLk0DWV3fP1OZojoxcZoMsc9a', 'user8-128x1281.jpg', 'Laki-laki', 'Jerambah Bolong', '085156186486', 2, 1, 1641929783),
('AGG012', 'Fajri Rafif Ramadhan', 'fajri123', '$2y$10$zTlFk2WsIbxPfM.0BFy9Neoi7j0aEjn.2XC0hINkWaHLL/xbmpm42', 'default.jpg', 'Laki-laki', 'Thehok', '0875485454875', 1, 1, 1641931237),
('AGG013', 'Mawar', 'mawar', '$2y$10$/rAg87Nkhm7yvUMj/dUEMeAld5voqcjrWT5GjgCrXMoZZInkVjqlS', 'default.jpg', 'Laki-laki', 'Thehok', '087878784785', 1, 1, 1641934128);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
