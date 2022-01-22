-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 03:13 PM
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
  `nomor_induk` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
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

INSERT INTO `buku` (`id_buku`, `id_pengarang`, `id_penerbit`, `nomor_induk`, `judul_buku`, `kelas`, `prog_keahlian`, `tahun_terbit`, `sumber`, `jumlah`, `tgl_terima`) VALUES
('BK001', 'PGG001', 'PBT001', '001/B/MUHI/2022', 'Produktif Berbahasa Indonesia', 'XII', 'UMUM', 2017, 'B', 12, '2022-01-22'),
('BK002', 'PGG001', 'PBT001', '002/B/MUHI/2022', 'Kimia', 'X', 'UMUM', 2017, 'B', 6, '2022-01-22'),
('BK003', 'PGG001', 'PBT001', '003/B/MUHI/2022', 'Fisika', 'X', 'UMUM', 2017, 'B', 6, '2022-01-22'),
('BK004', 'PGG002', 'PBT001', '004/B/MUHI/2022', 'Pendidikan Agama Islam & Budi Pekerti', 'XII', 'UMUM', 2017, 'B', 11, '2022-01-22'),
('BK005', 'PGG003', 'PBT001', '005/B/MUHI/2022', 'Pendidikan Pancasila & Kewarganegaraan', 'XII', 'UMUM', 2017, 'B', 12, '2022-01-22'),
('BK006', 'PGG004', 'PBT001', '006/B/MUHI/2022', 'Matematika', 'XI', 'UMUM', 2017, 'B', 10, '2022-01-22'),
('BK007', 'PGG005', 'PBT001', '007/B/MUHI/2022', 'Komputer Akuntansi Pada Perusahaan Jasa Dengan MYOB', 'X', 'UMUM', 2017, 'B', 3, '2022-01-22'),
('BK008', 'PGG002', 'PBT001', '008/B/MUHI/2022', 'Perbankan Dasar', 'X', 'PB', 2017, 'B', 8, '2022-01-22'),
('BK009', 'PGG004', 'PBT001', '009/B/MUHI/2022', 'Akuntansi Dasar', 'X', 'PB', 2017, 'B', 2, '2022-01-22'),
('BK010', 'PGG003', 'PBT001', '010/B/MUHI/2022', 'Akuntansi Perbankan Syariah', 'XI', 'PB', 2017, 'B', 6, '2022-01-22'),
('BK011', 'PGG005', 'PBT001', '011/B/MUHI/2022', 'Sejarah Indonesia', 'X', 'UMUM', 2017, 'B', 34, '2022-01-22'),
('BK012', 'PGG005', 'PBT002', '012/B/MUHI/2022', 'Sejarah Indonesia', 'X', 'UMUM', 2017, 'B', 8, '2022-01-22'),
('BK013', 'PGG001', 'PBT002', '013/B/MUHI/2022', 'Matematika', 'X', 'UMUM', 2017, 'B', 28, '2022-01-22'),
('BK014', 'PGG003', 'PBT002', '014/B/MUHI/2022', 'Bahasa Indonesia', 'XII', 'UMUM', 2017, 'B', 3, '2022-01-22'),
('BK015', 'PGG003', 'PBT003', '015/B/MUHI/2022', 'Bahasa Indonesia', 'XII', 'UMUM', 2017, 'B', 11, '2022-01-22'),
('BK016', 'PGG004', 'PBT003', '016/B/MUHI/2022', 'Bahasa Indonesia', 'XII', 'UMUM', 2017, 'B', 11, '2022-01-22'),
('BK017', 'PGG005', 'PBT004', '017/B/MUHI/2022', 'Get Along English', 'XII', 'UMUM', 2017, 'B', 9, '2022-01-22'),
('BK018', 'PGG002', 'PBT004', '018/B/MUHI/2022', 'Bahasa Indonesia', 'X', 'UMUM', 2006, 'B', 35, '2022-01-22'),
('BK019', 'PGG004', 'PBT002', '019/B/MUHI/2022', 'Pendidikan Pancasila & Kewarganegaraan', 'XI', 'UMUM', 2017, 'B', 12, '2022-01-22'),
('BK020', 'PGG005', 'PBT001', '020/B/MUHI/2022', 'Forward An English', 'XI', 'UMUM', 2017, 'B', 13, '2022-01-22'),
('BK021', 'PGG002', 'PBT001', '021/B/MUHI/2022', 'Matematika', 'XII', 'UMUM', 2017, 'B', 11, '2022-01-22'),
('BK022', 'PGG003', 'PBT001', '022/B/MUHI/2022', 'Bahasa Indonesia', 'X', 'UMUM', 2017, 'B', 11, '2022-01-22'),
('BK023', 'PGG004', 'PBT004', '023/B/MUHI/2022', 'Etika Profesi', 'X', 'PB', 2006, 'B', 8, '2022-01-22'),
('BK024', 'PGG003', 'PBT001', '024/B/MUHI/2022', 'Prakarya Dan Kewirausahaan', 'X', 'UMUM', 2017, 'B', 27, '2022-01-22'),
('BK025', 'PGG002', 'PBT002', '025/B/MUHI/2022', 'Pendidikan Agama Islam & Budi Pekerti', 'X', 'UMUM', 2017, 'B', 28, '2022-01-22'),
('BK026', 'PGG001', 'PBT004', '026/B/MUHI/2022', 'Pendidikan Agama Islam', 'X', 'UMUM', 2017, 'B', 1, '2022-01-22'),
('BK027', 'PGG004', 'PBT001', '027/B/MUHI/2022', 'Pendidikan Jasmani, Olahraga & Kesehatan', 'XI', 'UMUM', 2017, 'B', 9, '2022-01-22'),
('BK028', 'PGG003', 'PBT001', '028/B/MUHI/2022', 'Simulasi Dan Komunikasi Digital', 'X', 'UMUM', 2017, 'B', 12, '2022-01-22'),
('BK029', 'PGG004', 'PBT001', '029/B/MUHI/2022', 'Produktif Berbahasa Indonesia', 'XI', 'UMUM', 2017, 'B', 12, '2022-01-22'),
('BK030', 'PGG003', 'PBT001', '030/B/MUHI/2022', 'Administrasi Umum', 'X', 'UMUM', 2017, 'B', 2, '2022-01-22'),
('BK031', 'PGG001', 'PBT004', '031/B/MUHI/2022', 'Get Along With English', 'XI', 'UMUM', 2006, 'B', 11, '2022-01-22'),
('BK032', 'PGG003', 'PBT001', '032/B/MUHI/2022', 'Forward An English', 'XII', 'UMUM', 2017, 'B', 11, '2022-01-22'),
('BK033', 'PGG002', 'PBT002', '033/B/MUHI/2022', 'Pendidikan Pancasila & Kewarganegaraan', 'X', 'UMUM', 2017, 'B', 37, '2022-01-22'),
('BK034', 'PGG004', 'PBT009', '034/B/MUHI/2022', 'Gambar Teknik Listrik', 'X', 'TITL', 2017, 'B', 30, '2022-01-22'),
('BK035', 'PGG005', 'PBT009', '035/B/MUHI/2022', 'Pengelolaan Kas', 'XI', 'PB', 2017, 'B', 30, '2022-01-22'),
('BK036', 'PGG005', 'PBT009', '036/B/MUHI/2022', 'Instalasi Motor Listrik', 'XI', 'TITL', 2017, 'B', 30, '2022-01-22'),
('BK037', 'PGG004', 'PBT009', '037/B/MUHI/2022', 'Instalasi Motor Listrik', 'XII', 'TITL', 2017, 'B', 30, '2022-01-22'),
('BK038', 'PGG003', 'PBT002', '038/B/MUHI/2022', 'Aplikasi Pengolahaan Angka / Spreadsheet', 'X', 'PB', 2017, 'B', 3, '2022-01-22'),
('BK039', 'PGG004', 'PBT004', '039/B/MUHI/2022', 'Seni Budaya', 'X', 'UMUM', 2006, 'B', 5, '2022-01-22'),
('BK040', 'PGG005', 'PBT009', '040/B/MUHI/2022', 'Ekonomi Bisnis', 'X', 'PB', 2017, 'B', 30, '2022-01-22'),
('BK041', 'PGG002', 'PBT009', '041/B/MUHI/2022', 'Produk Kreatif Dan Kewirausahaan', 'XII', 'PB', 2017, 'B', 30, '2022-01-22'),
('BK042', 'PGG002', 'PBT009', '042/B/MUHI/2022', 'Administrasi Pajak', 'XI', 'PB', 2017, 'B', 30, '2022-01-22'),
('BK043', 'PGG003', 'PBT009', '043/B/MUHI/2022', 'Dasar Listrik & Elektronika', 'X', 'TITL', 2017, 'B', 30, '2022-01-22'),
('BK044', 'PGG005', 'PBT009', '044/B/MUHI/2022', 'Akuntansi Perbankan & Keuangan Mikro', 'XII', 'PB', 2017, 'B', 30, '2022-01-22'),
('BK045', 'PGG005', 'PBT009', '045/B/MUHI/2022', 'Instalasi Penerangan Listrik', 'XII', 'TITL', 2017, 'B', 30, '2022-01-22'),
('BK046', 'PGG004', 'PBT005', '046/B/MUHI/2022', 'Iqro\'', 'X', 'UMUM', 2017, 'B', 14, '2022-01-22'),
('BK047', 'PGG001', 'PBT004', '047/B/MUHI/2022', 'Matematika', 'X', 'UMUM', 2006, 'B', 5, '2022-01-22'),
('BK048', 'PGG001', 'PBT004', '048/B/MUHI/2022', 'Matematika', 'XI', 'UMUM', 2006, 'B', 5, '2022-01-22'),
('BK049', 'PGG001', 'PBT004', '049/B/MUHI/2022', 'Matematika', 'XII', 'UMUM', 2006, 'B', 5, '2022-01-22'),
('BK050', 'PGG003', 'PBT009', '050/B/MUHI/2022', 'Layanan Lembaga Perbankan & Keuangan Mikro', 'XII', 'PB', 2017, 'B', 30, '2022-01-22');

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
('PM001', 'AGG057', 'BK027', '2022-01-22', '2022-01-29');

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
('PBT001', 'K13 Erlangga'),
('PBT002', 'Kementrian P2K'),
('PBT003', 'Pusat Perbukuan DPN'),
('PBT004', 'KTSP Erlangga'),
('PBT005', 'Kunfayakun'),
('PBT006', 'Departemen Agama'),
('PBT007', 'CV. Karya Utama'),
('PBT008', 'PT. Intan Pariwara'),
('PBT009', 'Penerbit Andi');

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
('PGG001', 'Yustinah'),
('PGG002', 'Unggul Sudarmo'),
('PGG003', 'Moh. Masrun, DKK'),
('PGG004', 'Yuyus K'),
('PGG005', 'Restu Gunawan');

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
('AGG001', 'Administrator', 'admin', '$2y$10$37d5WpOLESpdJsAgLftzIehso2h1tHjFnGQsRGV5vTbQ52I5swQKW', 'default1.jpg', 'Laki-laki', 'Thehok', '0877456123123', 1, 1, 1639478545),
('AGG002', 'Ika Kusumawati, SH', 'ika', '$2y$10$Tc1U61NVyeSxPz6B4pF/P.3J6kg0sEfSYcsvRVuCGbiM23buNsEYG', 'default.jpg', 'Perempuan', '', '08123456789', 1, 1, 1642775883),
('AGG003', 'Ade Kurniawan', '218', '$2y$10$i0GSMLC/b61YqeCe3jZWXu9XHINxCzhVgGxU5XHLdCsPvj/r/Aw5i', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642776487),
('AGG004', 'Andreansyah', '239', '$2y$10$sm2rbYCsrh6Tf/LMimWyduWwlCEwqq8iDAwNvWwmJ438QcaOQfeeS', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642776601),
('AGG005', 'Angga', '242', '$2y$10$9WVfqboR9AfqmueNgJCDSO88GxO8lvCGEbN0VQ8oflqydfbkVBgJ2', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642776741),
('AGG006', 'Ayu Lestari', '204', '$2y$10$dOBK.AfFiYSvWx8/DJQYaO84.uKcKmP6rUxDVILcGQpGB6bLotXWK', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642776824),
('AGG007', 'Dini Liandri', '212', '$2y$10$MJq3NE1N6GyvAk97fKU6o.btk4GxWPy/SxqK4GRjNT4eHqQHXSeOa', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642776850),
('AGG008', 'Erik Setiawan', '209', '$2y$10$h0XHRKbGmDmz7jvxL/3rt.nRfjW4rauwH0slkRYSfbc9/TWZ7F3la', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642776928),
('AGG009', 'Fauzan Maulana', '243', '$2y$10$V.Fx/ivvEA6goFHFaFmG1ueM.CivoKtBjcUO/3LDIjhc4R6Sj9y2O', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642776973),
('AGG010', 'Fatur Fatahillah S.', '248', '$2y$10$XMeLlnKzP0RJpOOoPVWUne4CdMQxAyRoVpcIkl0kp1vX8zYfUsGLm', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642777414),
('AGG011', 'Gilang Dwi Cahyono', '219', '$2y$10$rqcamAGkILC3/.pJJZrA3uWFi5v1cDbFO9l5Ada3kHSNt.wCInBdC', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642777559),
('AGG012', 'Jefri Kurnianto', '230', '$2y$10$AUkASoZt0k1Shq2IU0sZKOy2mi9HrQ46e2i32SI4yv4fSBgvjjGFW', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642777620),
('AGG013', 'M. Parel Romadhon', '205', '$2y$10$GhL5N1O4zLnlFQicegyqK.2CNLNVrWAVAORhz8LyjpvEDlMZVdTxu', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642777683),
('AGG014', 'M. Fikri', '214', '$2y$10$Vdt.vN.HT8kTHgLi7th16.ow7Y6mRWbJFOeWTXfKPGFF0I.6rJj3q', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642777741),
('AGG015', 'M. Ridho Syaputra', '237', '$2y$10$XUwGQiGTEyUKLc8D2mgQSO96AjYa/Qi3bi6ZIhntk78Tspo15evYC', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642777803),
('AGG016', 'Nofri Mardiyanto', '236', '$2y$10$ioMdoKp8TOY1vtHxdSaf7eDT2Lq8yiIqL14LILQR9UJ5ouczzySoW', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642778067),
('AGG017', 'Ragil Prakoso', '223', '$2y$10$fwQ8ddN1ssWXv7HlwvnIo.cS/ooeIR/xzoA.Gpq1xGotRur406aCK', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642778255),
('AGG018', 'Rahmah Syakirah', '213', '$2y$10$kr40NugyPnquVc3UCyytSO.vLLYTRhGCfmE6h/FtSxOPbf/BE8RCO', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642778466),
('AGG019', 'Ranto Wibowo', '208', '$2y$10$jrJBs6HIWMMPpAQ.jyZTLOnO7X9MvGXXbgkd8KlM0knmYCrdeZ1Hu', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642778498),
('AGG020', 'Reihan Ramadhan', '215', '$2y$10$UPDLjHOFIEou56SqPMrJJ.QUmf8FfVg4xXLkIrzbbMpnv.zqtP8Vu', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642778540),
('AGG021', 'Rizaldi Kurniawan N.', '217', '$2y$10$MAdgA3lZJXGynE3ePDC1BeLviwNEHYRb8WBsSsL1uSVNwX.8UKSF.', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642778592),
('AGG022', 'Roy Mahendra', '229', '$2y$10$mghxEgIEK.6E5/xUmPuxVeIy.tbDh4nMwmAvaSNnPWYleTLoHATwW', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642778664),
('AGG023', 'Shinta Bella', '232', '$2y$10$LZRuS0iO/RC7eF0Hz1euuOKjpsF335SCieZ5GuI4t.8OOWitRSEZ6', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642778730),
('AGG024', 'Tri Atmaja', '220', '$2y$10$/MYwiqH0uEwAGl4NqJp80uJrSpXZlQMv3I2PZV3C/vemX6DyRghJm', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642778772),
('AGG025', 'Yoga Febriansyah', '206', '$2y$10$C1UxDVYMVcGYathMRBHZJ.VGM/PtW8tPw5/6idIvyzgjTB1jbB8pm', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642778801),
('AGG026', 'Dila Aprianti', '241', '$2y$10$Sjkb4PvQD/jMpOAqQgmkF.guMjeHn35/rTHoCq1aRA.nou9CFSGl2', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642784029),
('AGG027', 'Fauzan Nurhakim', '244', '$2y$10$T2Re7oIaXTKNvtxzqaaTc.qBeDTpo7fqNYxOjXmuyWZTbKbwAllO.', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642784055),
('AGG028', 'Mutia Citra Dewanti', '247', '$2y$10$32wT4eBW3Ynhml/vjmAmPe8goH3rEn0lCr4ILCNyMhOVWRNP0Vf92', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642784116),
('AGG029', 'Natasya Putri Amanda', '238', '$2y$10$9yFeDcml3hSBcugDdmNuOOOU//RjBmjzpAIwZwd3EfFbd7TLNDf8i', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642784160),
('AGG030', 'Nur Aliyah Putri', '210', '$2y$10$VzMAzKVTjgHYfWPU/QGglO3BeUZeIlGiNMQNVapiB0CEWJkfKaBZ2', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642784194),
('AGG031', 'Nur Astri', '227', '$2y$10$ENmVVfhmX0cnA5YeG1nCm.zTnspWyGQj.rJxiwn4Hgqk5IZVE2igG', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642784234),
('AGG032', 'Putri Anggi Ramadani', '246', '$2y$10$62aQVvLvLHwQu3GnUQv/Q.I/K9hA9es7LYgCpmM6oB39ApZqNmc4e', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642784264),
('AGG033', 'Shindy Karmila', '222', '$2y$10$qLUPnbSplwo8i0kYqPkWtOAB22NsvaRJxOdJLwsFrEgPKX5tKxiX2', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642784295),
('AGG034', 'Zalika Salsabila', '211', '$2y$10$UQbU7afTQz76TnSf.zZv6.Zq4FIUxfn5ob4.RV1PZ0neXNJBBLsiu', 'default.jpg', 'Perempuan', '', '0812345678', 2, 1, 1642784341),
('AGG035', 'Abdullah Said', '216', '$2y$10$eENG3Qy8y.ibI94pKYxUz.Ii1KDtT40MLW3PhT3.u//vZ8t0QG3jW', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642784379),
('AGG036', 'Aji Pengestu', '228', '$2y$10$/qEnwUwfawDtiDPwe2GhIufKg0rVhlCZSoUm5faj0W0Gk.P9ymON.', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642784427),
('AGG037', 'Bobi Setiyadi', '235', '$2y$10$UKilP0UQcl.G.hhnN/L6..Uf5OFNrXeg9rKS/wYC9n1zWElJqh8Gq', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642784488),
('AGG038', 'M. Jefri Syahputra', '231', '$2y$10$Pe1KL3KPpQprZHOY.vKeKuisxjEnf/7.ZIphnmwxmeY243mklmKum', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642784588),
('AGG039', 'M. Rizki Khoirullah', '234', '$2y$10$rd.17zVXgSWInbSlPjO..e9os7PZBSPlCwCWWLz5LRc6JZ3I16utm', 'default.jpg', 'Laki-laki', '', '0812345678', 2, 1, 1642784626),
('AGG040', 'M. Alfandi Miharjoyo', '207', '$2y$10$hFxQ5XzP9NDTcybBW8YNpudc.IZprDn3MvlWBxtvvNKeNVFQthU3i', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642784663),
('AGG041', 'Muhammad Fadli', '226', '$2y$10$2gOtAIPSzY0FwPvayX/YtORQITFdjqVoQgXbE1RdBDi6JjaIA2lHm', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642784687),
('AGG042', 'Muhammad Putra', '225', '$2y$10$4YiPxkwSw9JKGeL21QjkteOFRY5sgzLwxaq/v8WcGcr/qxziwmdfq', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642784724),
('AGG043', 'Nikken Safira', '221', '$2y$10$k2KusOp2h5LCf98DU.eHt.I4UzOaBpXO3R1DxY/51sG.IOD83SpNq', 'default.jpg', 'Perempuan', '', '08787878787', 2, 1, 1642784765),
('AGG044', 'Nurul Ikhsan', '233', '$2y$10$2htyMRCEdTGGOfPhwFU0c.T5YYqIUtb7P3W8aDDvIdCCR3MZvYRBK', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642784796),
('AGG045', 'Pajri Aftorizon', '224', '$2y$10$ARIBCm1egQRXe.pwXVyHoOFJFcPT8gI3rki.JYW0IVVtWMMWPvAgS', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642784825),
('AGG046', 'Riki', '245', '$2y$10$SDjT/9Vt/re246VVI5WqO.JTqAoA8nViNCDzJ0fn07bHbF906o14C', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642784859),
('AGG047', 'Andhyni Putri Wijaya', '173', '$2y$10$V2t9RET4S79JpvUIQrBPbuuxfhPbw2F0dy635vwpU9pkOvBS3ir6C', 'default.jpg', 'Perempuan', '', '08787878787', 2, 1, 1642784939),
('AGG048', 'Desvira', '181', '$2y$10$UeyDEpV9XIvtEONW.u.DFuxMQ64.y2zYVo3cGeGRmjzzDtCgdQ8a2', 'default.jpg', 'Perempuan', '', '08787878787', 2, 1, 1642784965),
('AGG049', 'RTS. Suci Shaibah', '172', '$2y$10$wliS4Tb/ZBsl5G5DDiK9fehaCIA1G9vWn0D0Iex08zSctr9DcQhZK', 'default.jpg', 'Perempuan', '', '08787878787', 2, 1, 1642785009),
('AGG050', 'Sinta', '167', '$2y$10$rvqXa.IChTqmiHHAbXaXSOdx3Dn3iaBvMxJ1AMXEjEoZLdRX9IRb2', 'default.jpg', 'Perempuan', '', '08787878787', 2, 1, 1642785037),
('AGG051', 'Aszemi', '201', '$2y$10$6PGlkfaPfSnAv.AtGsU8yODgYNVyBFVqZu7gdsE4ckUIio5OMHiPu', 'default.jpg', 'Perempuan', '', '08787878787', 2, 1, 1642785062),
('AGG052', 'Fransisco Rio Fernando', '198', '$2y$10$Yv8an2wCnWyjh0.UMg0TMefXLxTbOMXl86A7aWFEfwcFDOHvfCPA2', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642785095),
('AGG053', 'M. Alif Firmansyah', '185', '$2y$10$xXntY.rtuZJSUtfYdi1XS.T2eJhE2SSQVuTjgrhoEG7ID7Ebo.aci', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642785122),
('AGG054', 'Ogio Vanni Saputra', '176', '$2y$10$3/4PW83Qb4M1PP2.YVTo/e0dawQ3FM3hwXLGan9HeRdg90b2MnYTS', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642785151),
('AGG055', 'Prengki', '199', '$2y$10$jQZhUujVBwilNoJEueo0w.EhlO99QEbEhhs4G3eEtO4uj4kKs1d3a', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642785182),
('AGG056', 'Yodo', '200', '$2y$10$Zjg1NjUa.SW9uCFiTp/ucu58CalrgOALSDpr/t5vJVJ8QZLgBdu5q', 'default.jpg', 'Laki-laki', '', '08787878787', 2, 1, 1642785210),
('AGG057', 'Anggota', 'anggota', '$2y$10$a61.cLZUx/1j5i4Uzp7.6e9tpJncBFZQNy82qKkM3TshEjWvDX7.i', 'default.jpg', 'Laki-laki', '', '085156186486', 2, 1, 1642785236);

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
