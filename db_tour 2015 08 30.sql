-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Agu 2015 pada 14.21
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tour`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tcustomer`
--

CREATE TABLE IF NOT EXISTS `tcustomer` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tcustomer`
--

INSERT INTO `tcustomer` (`id`, `nama`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_telp`, `email`, `password`, `status`) VALUES
(1, 'Choerul Sofyan Muhammad Falih', '2015-08-05', 'Pria', 'BANDUNG', '08132458070', 'choerulsofyanmf@gmail.com', '67e0f0fa3da8468b8b4df382182fe1', 'AKTIF'),
(2, 'Puji Saepuloh', '2015-08-21', 'Pria', 'bandung', '08132458070', 'sdfas@s', '67e0f0fa3da8468b8b4df382182fe1', 'AKTIF'),
(3, 'Puji Saepuloh', '2015-08-25', 'Pria', 'bandung', '08132458070', 'sdfas@s', '912ec803b2ce49e4a541068d495ab5', 'AKTIF'),
(4, 'kerul', '2015-10-30', 'Pria', 'sadkfalsdjfklajsdf', '08132458070', 'creativeyouthbandung@gmail.com', '67e0f0fa3da8468b8b4df382182fe1', 'AKTIF'),
(5, 'neneng sobariah', '2015-01-01', 'Wanita', 'bandung', '08132458070', 'neneng.sobariah@yahoo.com', '912ec803b2ce49e4a541068d495ab5', 'AKTIF'),
(6, 'dadang', '2015-08-15', 'Pria', 'bandung', '08132458070', 'choerulsofyanmf@gmail.com', '67e0f0fa3da8468b8b4df382182fe1', 'AKTIF'),
(7, 'jajang', '1985-12-01', 'Pria', 'bandung', '08132458070', 'jajang@gmail.com', '67e0f0fa3da8468b8b4df382182fe1', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `thak_akses`
--

CREATE TABLE IF NOT EXISTS `thak_akses` (
  `id` int(11) NOT NULL,
  `hak_akses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkategori`
--

CREATE TABLE IF NOT EXISTS `tkategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tkategori`
--

INSERT INTO `tkategori` (`id`, `nama_kategori`) VALUES
(1, 'DOMESTIK'),
(2, 'MANCANEGARA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpaket_wisata`
--

CREATE TABLE IF NOT EXISTS `tpaket_wisata` (
  `id` int(11) NOT NULL,
  `judul_wisata` varchar(100) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpaket_wisata`
--

INSERT INTO `tpaket_wisata` (`id`, `judul_wisata`, `kategori_id`, `jumlah_hari`, `tgl_keberangkatan`, `tgl_kembali`, `harga`, `deskripsi`, `gambar`, `status`) VALUES
(2, 'BEST OF EUROPE KEUKENHOFF + MILAN', 2, 12, '2015-08-01', '2015-08-12', 20000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'bangkok.jpg', 'AKTIF'),
(3, 'KOREA 3 HARI 2 MALAM', 2, 3, '2015-08-08', '2015-08-10', 800000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'korea.jpg', 'AKTIF'),
(4, 'LONDON TOUR 3 HARI 2 MALAM', 2, 3, '2015-08-01', '2015-08-03', 12000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'london.jpg', 'AKTIF'),
(5, 'TOKYO 4 HARI 3 MALAM', 2, 4, '2015-08-01', '2015-08-04', 2000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'tokyo.jpg', 'AKTIF'),
(6, 'BELANDA 2 HARI 1 MALAM', 2, 2, '2015-08-01', '2015-08-02', 4500000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'belanda.jpg', 'AKTIF'),
(7, 'RUSSIA 4 HARI 3 MALAM', 2, 4, '2015-08-01', '2015-08-01', 5800000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'russia.jpg', 'AKTIF'),
(8, 'ITALIA 8 HARI 7 MALAM', 2, 8, '2015-08-01', '2015-08-01', 20000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'italia.jpg', 'AKTIF'),
(9, 'PARIS 3 HARI 2 MALAM', 2, 3, '2015-08-01', '2015-08-03', 3700000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'paris.jpg', 'AKTIF'),
(10, 'VENICE 2 HARI 1 MALAM', 2, 2, '2015-12-01', '2015-12-02', 10000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'venice.jpg', 'NON-AKTIF'),
(11, 'JALAN JALAN KE BRAGA', 1, 2, '2015-08-01', '2015-08-02', 3499980, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'jalan-braga.jpg', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpaket_wisata_detail`
--

CREATE TABLE IF NOT EXISTS `tpaket_wisata_detail` (
  `id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `hari_ke` int(11) NOT NULL,
  `rute` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpaket_wisata_detail`
--

INSERT INTO `tpaket_wisata_detail` (`id`, `wisata_id`, `hari_ke`, `rute`, `deskripsi`) VALUES
(1, 6, 1, 'BANDARA SOEKARNO HATTA - BELANDA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 6, 2, 'BELANDA - BANDARA SOEKARNO HATTA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 10, 1, 'bandara italia', 'tiba di italia pada pukul 6 dan istirahat di hotel'),
(4, 10, 2, 'mengunjungi museum di italia', 'asdfasdfa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpembayaran`
--

CREATE TABLE IF NOT EXISTS `tpembayaran` (
  `id` int(11) NOT NULL,
  `no_faktur` varchar(30) NOT NULL,
  `pemesanan_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `total` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `angsuran_ke` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpembayaran`
--

INSERT INTO `tpembayaran` (`id`, `no_faktur`, `pemesanan_id`, `customer_id`, `tgl_pembayaran`, `total`, `pembayaran`, `angsuran_ke`) VALUES
(6, 'FKT-0002', 2, 2, '2015-08-20', 35000000, 15000000, 2),
(7, 'FKT-0002', 2, 2, '2015-08-20', 35000000, 15000000, 3),
(8, 'FKT-0002', 2, 2, '2015-08-23', 120000000, 10000000, 4),
(9, 'FKT-0004', 4, 4, '2015-08-23', 2240000, 2000000, 1),
(10, 'FKT-0006', 6, 6, '2015-08-30', 14500000, 10000000, 1),
(11, 'FKT-0006', 6, 6, '2015-08-30', 14500000, 500000, 2),
(13, 'FKT-0006', 6, 6, '2015-08-30', 14500000, 4000000, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpemesanan`
--

CREATE TABLE IF NOT EXISTS `tpemesanan` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `no_faktur` varchar(30) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `jumlah_orang_dewasa` int(11) NOT NULL,
  `jumlah_orang_anak` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpemesanan`
--

INSERT INTO `tpemesanan` (`id`, `customer_id`, `wisata_id`, `no_faktur`, `tgl_pemesanan`, `jumlah_orang_dewasa`, `jumlah_orang_anak`, `Total`) VALUES
(2, 2, 1, 'FKT-0002', '2016-08-20', 8, 8, 120000000),
(3, 3, 1, 'FKT-0003', '2015-08-20', 3, 1, 35000000),
(4, 4, 2, 'FKT-0004', '2015-08-21', 3, 2, 2240000),
(5, 5, 2, 'FKT-0005', '2015-08-29', 3, 2, 80000000),
(6, 6, 7, 'FKT-0006', '2015-08-30', 2, 1, 14500000),
(7, 7, 4, 'FKT-0007', '2015-08-30', 2, 2, 36000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
--

CREATE TABLE IF NOT EXISTS `tuser` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `grup_user` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `email`, `username`, `password`, `grup_user`, `status`) VALUES
(2, 'Puji Saepuloh', '0000-00-00', 'Pria', 'buahbatu', 'puji.saefuloh.92@gmail.com', 'puji.saepuloh', '67e0f0fa3da8468b8b4df382182fe149', 'USER', 'AKTIF'),
(3, 'Neneng sobariah', '2003-08-15', 'Wanita', 'bandung', 'neneng.sobariah@yahoo.com', 'neneng', '4fa4cb97e4151c0b0fec', 'ADMIN', 'AKTIF'),
(4, 'entin', '1997-05-15', 'Wanita', 'bandung', 'entin.ajjah@gmail.com', 'entin', '67e0f0fa3da8468b8b4df382182fe149', 'USER', 'AKTIF'),
(5, 'Choerul Sofyan Muhammad Falih', '1995-06-20', 'Pria', 'buahbatu', 'choerulsofyanmf@gmail.com', 'kerul', '67e0f0fa3da8468b8b4df382182fe149', 'ADMIN', 'AKTIF'),
(6, 'valdy', '2015-08-18', 'Wanita', 'Kutub', 'Lol', 'rvr', 'c2fc2f64438b1eb36b7e244bdb7bd535', 'ADMIN', 'AKTIF'),
(7, 'arif', '1995-12-01', 'Pria', 'bandung', 'arif@gmail.com', 'arif', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser_group`
--

CREATE TABLE IF NOT EXISTS `tuser_group` (
  `id` int(11) NOT NULL,
  `grup_user` varchar(30) NOT NULL,
  `hak_akses` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tuser_group`
--

INSERT INTO `tuser_group` (`id`, `grup_user`, `hak_akses`) VALUES
(1, 'ADMIN', 'paket_wisata.create'),
(2, 'ADMIN', 'paket_wisata.edit'),
(3, 'ADMIN', 'paket_wisata.update'),
(4, 'ADMIN', 'paket_wisata.delete'),
(5, 'ADMIN', 'paket_wisata.view'),
(6, 'ADMIN', 'paket_wisata_detail.create'),
(7, 'ADMIN', 'paket_wisata_detail.edit'),
(8, 'ADMIN', 'paket_wisata_detail.update'),
(9, 'ADMIN', 'paket_wisata_detail.delete'),
(10, 'ADMIN', 'paket_wisata_detail.view'),
(11, 'ADMIN', 'pemesanan.create'),
(12, 'ADMIN', 'pemesanan.edit'),
(13, 'ADMIN', 'pemesanan.update'),
(14, 'ADMIN', 'pemesanan.delete'),
(15, 'ADMIN', 'pemesanan.view'),
(16, 'ADMIN', 'pembayaran.create'),
(17, 'ADMIN', 'pembayaran.edit'),
(18, 'ADMIN', 'pembayaran.update'),
(19, 'ADMIN', 'pembayaran.delete'),
(20, 'ADMIN', 'pembayaran.view'),
(21, 'ADMIN', 'customer.create'),
(22, 'ADMIN', 'customer.edit'),
(23, 'ADMIN', 'customer.update'),
(24, 'ADMIN', 'customer.delete'),
(25, 'ADMIN', 'customer.view'),
(26, 'ADMIN', 'user.create'),
(27, 'ADMIN', 'user.edit'),
(28, 'ADMIN', 'user.update'),
(29, 'ADMIN', 'user.delete'),
(30, 'ADMIN', 'user.view'),
(31, 'USER', 'paket_wisata_detail.view'),
(32, 'USER', 'pemesanan.delete'),
(34, 'USER', 'pembayaran.create'),
(35, 'USER', 'pembayaran.edit'),
(36, 'USER', 'pembayaran.update'),
(37, 'USER', 'pembayaran.delete'),
(40, 'USER', 'customer.view'),
(41, 'USER', 'customer.edit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tcustomer`
--
ALTER TABLE `tcustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thak_akses`
--
ALTER TABLE `thak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkategori`
--
ALTER TABLE `tkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpaket_wisata`
--
ALTER TABLE `tpaket_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpaket_wisata_detail`
--
ALTER TABLE `tpaket_wisata_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpembayaran`
--
ALTER TABLE `tpembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpemesanan`
--
ALTER TABLE `tpemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser_group`
--
ALTER TABLE `tuser_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tcustomer`
--
ALTER TABLE `tcustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `thak_akses`
--
ALTER TABLE `thak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tkategori`
--
ALTER TABLE `tkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tpaket_wisata`
--
ALTER TABLE `tpaket_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tpaket_wisata_detail`
--
ALTER TABLE `tpaket_wisata_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tpembayaran`
--
ALTER TABLE `tpembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tpemesanan`
--
ALTER TABLE `tpemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tuser_group`
--
ALTER TABLE `tuser_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
