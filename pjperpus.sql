-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 02:10 PM
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
('BK001', 'PGG001', 'PBT001', 'Cara Kayang Yang Baik Dan Benar', 'X', 'UMUM', 2019, 'Bansos', 10, '2021-12-01'),
('BK002', 'PGG002', 'PBT002', 'Asdadada Asda Adsdasd', 'XII', 'UMUM', 1997, 'Moontong', 11, '2021-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pm` varchar(10) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `no_hp` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('PBT002', 'Asdadasd1');

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
('PGG002', 'Fajri2');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_kembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_anggota` varchar(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
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

INSERT INTO `user` (`id_anggota`, `name`, `username`, `image`, `password`, `jenkel`, `alamat`, `no_hp`, `role_id`, `is_active`, `date_created`) VALUES
('AGG001', 'Fajri', 'fajri1', 'user8-128x128.jpg', '$2y$10$1xnriswW/QgO8EkZdJ4V/On3ZlBTxP8OzalmIY6nfMce1xpS.8l.q', 'Laki-laki', 'BANANANAA', '0878787748745', 1, 1, 1639478545),
('AGG002', 'Rubentus Hutapeaa', 'ruben1', 'default.jpg', '$2y$10$nhZQYZWjoGGBG8wT1DH3J.2/J/W8M7O9s2wF2XGah74WSE0KuIDsW', 'Laki-laki', '', '08787874548541', 2, 1, 1639478568),
('AGG003', 'Deva Triawan', 'deva1', 'default.jpg', '$2y$10$EVIAssi2FDIU3B6Kyb7c9uLwHtNd0sbUJtO3FfsdgEKQqUCHM2C2y', 'Laki-laki', '', '08878745485212', 1, 1, 1639478636),
('AGG004', 'Denny Halim', 'denny1', 'default.jpg', '$2y$10$M6.SkUzrrc5T4lmARkGGY./x7dLTgY7SremmcU6AJew6ZwAsS0f1K', 'Laki-laki', 'Deasdadasda', '087878454875', 2, 1, 1639488805),
('AGG005', 'Wbbwbasdas', 'asdaw', 'default.jpg', '$2y$10$wB4OHtpCrEDLE25U3uJOye7C.CXJwmVo0ybQ0nIOKYxlNiaoo/hcO', 'Perempuan', 'Asfasdfasd', '087845451215245', 2, 1, 1639986955),
('AGG006', 'Hafiz', 'hafiz1', 'default.jpg', '$2y$10$NMOxErFzQ59JL3UPMmZbPucE9pMJbaMptEZ7ZfpMqP08t68otnL/y', 'Laki-laki', 'Sdasdadadasdada', '087875487545784', 1, 1, 1640147828),
('AGG007', 'Kevin', 'kevin1', 'default.jpg', '$2y$10$ZcJbBVa21Nh8LJ1pQlzg5OWSVTrrLKm1Brj.p675vOyM4JIbYBmmm', 'Laki-laki', 'Asdasdasdasdfaf', '08784548451215', 1, 1, 1640147902);

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
  ADD PRIMARY KEY (`id_pm`);

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
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
