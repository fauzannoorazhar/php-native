-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 07:28 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `Id_Anggota` int(15) NOT NULL,
  `Nama` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `Tgl_Lhr` date NOT NULL,
  `Tmpt_Lhr` varchar(15) NOT NULL,
  `J_Kel` varchar(15) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `No_Telp` bigint(15) NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`Id_Anggota`, `Nama`, `Alamat`, `Tgl_Lhr`, `Tmpt_Lhr`, `J_Kel`, `Status`, `No_Telp`, `Ket`) VALUES
(1000001, 'Dani Iskandar', 'CIPATAT', '1980-09-08', 'Bandung', 'Laki-Laki', 'Anggota', 82345697, 'aktif'),
(1000002, 'Reno Herdian', 'CIPATAT', '1980-04-09', 'Bandung', 'Laki-Laki', 'Anggota', 823456988, 'aktif'),
(1000003, 'Siti Hasanah', 'CIPATAT', '1985-09-10', 'Bandung', 'Perempuan', 'Anggota', 82345689, 'aktif'),
(1000004, 'Euis Munawaroh', 'CIPATAT', '1980-03-11', 'Garut', 'Perempuan', 'Anggota', 823456990, 'aktif'),
(1000005, 'Jajang Sukmara', 'CIPATAT', '1987-09-12', 'Garut', 'Laki-Laki', 'Anggota', 823456991, 'aktif'),
(1000006, 'Natshir', 'CIPATAT', '1989-09-13', 'Sumedang', 'Laki-Laki', 'Anggota', 823456992, 'aktif'),
(1000007, 'Febri Haryadi', 'CIPATAT', '1981-06-14', 'Cianjur', 'Laki-Laki', 'Anggota', 823456993, 'aktif'),
(1000008, 'Supardi', 'CIPATAT', '1989-09-15', 'Cipatat', 'Laki-Laki', 'Anggota', 823456994, 'aktif\r\n\r\n'),
(1000009, 'Ridwan', 'CIPATAT', '1980-02-16', 'Cimahi', 'Laki-Laki', 'Anggota', 823456995, 'aktif'),
(1000010, 'Horiza Satyfa', 'CIPATAT', '1981-09-16', 'Bogor', 'Perempuan', 'Anggota', 823456996, 'Pasif'),
(1000011, 'Fauzan', 'Bandung', '2001-02-01', 'Bandung', 'Laki - Laki', 'aktif', 8977999, '-'),
(1000012, '1212', '123123', '0000-00-00', '123123', '1231231', '23123123', 12312, '3123');

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE `angsuran` (
  `Id_Angsuran` int(15) NOT NULL,
  `Id_Anggota` int(15) NOT NULL,
  `Id_Pinjaman` int(15) NOT NULL,
  `Id_Kategori` int(15) NOT NULL,
  `Id_Petugas` int(15) NOT NULL,
  `Tgl_Pmbyrn` date NOT NULL,
  `Angsuran_Ke` varchar(15) NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`Id_Angsuran`, `Id_Anggota`, `Id_Pinjaman`, `Id_Kategori`, `Id_Petugas`, `Tgl_Pmbyrn`, `Angsuran_Ke`, `Ket`) VALUES
(50001, 1000001, 400001, 1, 200001, '2017-05-02', '4', 'SESUAI'),
(50002, 1000002, 400002, 2, 200002, '2017-05-03', '4', 'SESUAI'),
(50003, 1000003, 400003, 1, 200003, '2017-05-04', '4', 'SESUIA\r\n'),
(50004, 1000004, 400004, 1, 200004, '2017-05-05', '4', 'SESUAI'),
(50005, 1000005, 400005, 2, 200005, '2017-05-06', '4', 'SESUAI'),
(50006, 1000006, 400006, 1, 200001, '2017-05-07', '4', 'SESUAI'),
(50007, 1000007, 400007, 1, 200002, '2017-05-08', '4', 'SESUAI'),
(50008, 1000008, 400008, 2, 200003, '2017-05-09', '4', 'SESUAI'),
(50009, 1000009, 400009, 2, 200004, '2017-05-10', '4', 'SESUAI'),
(50010, 1000010, 400010, 1, 200005, '2017-05-11', '4', 'SESUAI');

-- --------------------------------------------------------

--
-- Table structure for table `detail_angsuran`
--

CREATE TABLE `detail_angsuran` (
  `Id_Angsuran` int(15) NOT NULL,
  `Tgl_Jth_Tmp` date NOT NULL,
  `Besar_Angsuran` varchar(15) NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_angsuran`
--

INSERT INTO `detail_angsuran` (`Id_Angsuran`, `Tgl_Jth_Tmp`, `Besar_Angsuran`, `Ket`) VALUES
(50001, '2017-06-02', 'Rp. 2.000.000', 'Pelunasan'),
(50002, '2017-06-03', '10Gram', 'Pelunasan'),
(50003, '2017-06-04', 'Rp. 5.000.000', 'Pelunasan'),
(50004, '2017-06-05', 'Rp. 2.000.000', 'Pelunasan'),
(50005, '2017-06-06', '5Gram', 'Pelunasan'),
(50006, '2017-06-07', 'Rp. 2.000.000', 'Pelunasan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `Id_Kategori` int(15) NOT NULL,
  `Nm_Pinjaman` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`Id_Kategori`, `Nm_Pinjaman`) VALUES
(1, 'Uang'),
(2, 'Emas');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('admin1', 'admin1'),
('admin2', 'admin2'),
('admin3', 'admin3'),
('admin4', 'admin4'),
('admin5', 'admin5');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_koperasi`
--

CREATE TABLE `petugas_koperasi` (
  `Id_Petugas` int(15) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Nama` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `No_Telp` bigint(15) NOT NULL,
  `Tmpt_Lhr` varchar(15) NOT NULL,
  `Tgl_Lhr` date NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_koperasi`
--

INSERT INTO `petugas_koperasi` (`Id_Petugas`, `Username`, `Nama`, `Alamat`, `No_Telp`, `Tmpt_Lhr`, `Tgl_Lhr`, `Ket`) VALUES
(200001, 'admin1', 'Jhon Alfarizi', 'Bandung', 98765436576, 'Bandung', '1990-07-09', 'Petugas'),
(200002, 'admin2', 'Al Fatih', 'Bandung', 98765436577, 'Bandung', '1986-07-10', 'Petugas'),
(200003, 'admin3', 'Fityan', 'Bandung', 98765436578, 'Bandung', '1986-07-11', 'Petugas'),
(200004, 'admin4', 'Arif Munif', 'Bandung', 98765436579, 'Bandung', '1980-07-12', 'Petugas'),
(200005, 'admin5', 'Deden', 'Bandung', 98765436580, 'Bandung', '1970-07-13', 'Petugas\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `Id_Pinjaman` int(15) NOT NULL,
  `Id_Anggota` int(15) NOT NULL,
  `Id_Kategori` int(15) NOT NULL,
  `Id_Petugas` int(11) NOT NULL,
  `Besar_Pinjaman` varchar(15) NOT NULL,
  `Tgl_Pengajuan_Pinjaman` date NOT NULL,
  `Tgl_Acc_Pinjaman` date NOT NULL,
  `Tgl_Pinjaman` date NOT NULL,
  `Tgl_Penulisan` date NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`Id_Pinjaman`, `Id_Anggota`, `Id_Kategori`, `Id_Petugas`, `Besar_Pinjaman`, `Tgl_Pengajuan_Pinjaman`, `Tgl_Acc_Pinjaman`, `Tgl_Pinjaman`, `Tgl_Penulisan`, `Ket`) VALUES
(400001, 1000001, 1, 200001, 'Rp. 500.000', '2017-01-13', '2017-01-20', '2017-01-13', '2017-01-20', '-'),
(400002, 1000002, 2, 200001, '10Gram', '2017-01-14', '2017-01-21', '2017-01-21', '2017-01-21', '-'),
(400003, 1000003, 1, 200001, 'Rp. 5.000.000', '2017-01-05', '2017-01-22', '2017-01-22', '2017-01-22', '-'),
(400004, 1000004, 1, 200001, 'Rp. 2.000.000', '2017-01-16', '2017-01-23', '2017-01-23', '2017-01-23', '-'),
(400005, 1000005, 2, 200002, '5Gram', '2017-01-17', '2017-01-24', '2017-01-24', '2017-01-24', '-'),
(400006, 1000006, 1, 200002, 'Rp. 2.000.000', '2017-01-18', '2017-01-25', '2017-01-25', '2017-01-25', '-'),
(400007, 1000007, 1, 200002, 'Rp. 3.000.000', '2017-01-19', '2017-01-26', '2017-01-26', '2017-01-26', '-'),
(400008, 1000008, 1, 200002, 'Rp. 5.000.000', '2017-01-20', '2017-01-27', '2017-01-27', '2017-01-27', '-'),
(400009, 1000009, 2, 200003, '8Gram', '2017-01-21', '2017-01-28', '2017-01-28', '2017-01-28', '-'),
(400010, 1000010, 1, 200004, 'Rp. 2.000.000', '2017-01-22', '2017-01-29', '2017-01-29', '2017-01-29', '-'),
(400011, 1000001, 1, 200001, 'Rp. 500.000', '2017-02-01', '2017-01-02', '2017-02-01', '2017-01-02', '-');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `Id_Simpanan` int(15) NOT NULL,
  `Id_Anggota` int(15) NOT NULL,
  `Id_Petugas` int(15) NOT NULL,
  `Nm_Simpanan` varchar(15) NOT NULL,
  `Tgl_Simpanan` date NOT NULL,
  `Besar_Simpanan` varchar(15) NOT NULL,
  `Ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`Id_Simpanan`, `Id_Anggota`, `Id_Petugas`, `Nm_Simpanan`, `Tgl_Simpanan`, `Besar_Simpanan`, `Ket`) VALUES
(30001, 1000001, 200001, 'Regular', '2017-01-04', 'Rp. 500.000', '-'),
(30002, 1000002, 200002, 'Hari Tua', '2017-01-05', 'Rp. 900.000', '-'),
(30003, 1000003, 200003, 'Pendidikan', '2017-01-06', 'Rp. 700.000', '-'),
(30004, 1000004, 200004, 'Hari Raya', '2017-01-07', 'Rp. 300.000', '-\r\n'),
(30005, 1000005, 200004, 'Pendidikan', '2017-01-08', 'Rp. 500.000', '-'),
(30006, 1000006, 200001, 'Hari Raya', '2017-01-09', 'Rp. 800.000', '-'),
(30007, 1000007, 200003, 'Hari Tua', '2017-01-10', 'Rp. 400.000', '-'),
(30008, 1000008, 200005, 'Regular', '2017-01-11', 'Rp. 500.000', '-'),
(30009, 1000009, 200002, 'Regular', '2017-01-12', 'Rp. 300.000', '-'),
(30010, 1000010, 200005, 'Regular', '2017-01-13', 'Rp. 500.000', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`Id_Anggota`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`Id_Angsuran`),
  ADD KEY `Id_Anggota` (`Id_Anggota`,`Id_Pinjaman`,`Id_Kategori`,`Id_Petugas`),
  ADD KEY `Id_Pinjaman` (`Id_Pinjaman`),
  ADD KEY `Id_Kategori` (`Id_Kategori`),
  ADD KEY `Id_Petugas` (`Id_Petugas`);

--
-- Indexes for table `detail_angsuran`
--
ALTER TABLE `detail_angsuran`
  ADD KEY `Id_Angsuran` (`Id_Angsuran`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`Id_Kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `petugas_koperasi`
--
ALTER TABLE `petugas_koperasi`
  ADD PRIMARY KEY (`Id_Petugas`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`Id_Pinjaman`),
  ADD KEY `Id_Anggota` (`Id_Anggota`,`Id_Kategori`,`Id_Petugas`),
  ADD KEY `Id_Kategori` (`Id_Kategori`,`Id_Petugas`),
  ADD KEY `Id_Petugas` (`Id_Petugas`),
  ADD KEY `Id_Petugas_2` (`Id_Petugas`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`Id_Simpanan`),
  ADD KEY `Id_Anggota` (`Id_Anggota`,`Id_Petugas`),
  ADD KEY `Id_Petugas` (`Id_Petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `Id_Anggota` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000013;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `Id_Kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petugas_koperasi`
--
ALTER TABLE `petugas_koperasi`
  MODIFY `Id_Petugas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200006;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD CONSTRAINT `angsuran_ibfk_1` FOREIGN KEY (`Id_Anggota`) REFERENCES `anggota` (`Id_Anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `angsuran_ibfk_3` FOREIGN KEY (`Id_Kategori`) REFERENCES `kategori` (`Id_Kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `angsuran_ibfk_5` FOREIGN KEY (`Id_Pinjaman`) REFERENCES `pinjaman` (`Id_Pinjaman`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `angsuran_ibfk_6` FOREIGN KEY (`Id_Petugas`) REFERENCES `petugas_koperasi` (`Id_Petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_angsuran`
--
ALTER TABLE `detail_angsuran`
  ADD CONSTRAINT `detail_angsuran_ibfk_1` FOREIGN KEY (`Id_Angsuran`) REFERENCES `angsuran` (`Id_Angsuran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas_koperasi`
--
ALTER TABLE `petugas_koperasi`
  ADD CONSTRAINT `petugas_koperasi_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `login` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`Id_Anggota`) REFERENCES `anggota` (`Id_Anggota`),
  ADD CONSTRAINT `pinjaman_ibfk_2` FOREIGN KEY (`Id_Kategori`) REFERENCES `kategori` (`Id_Kategori`),
  ADD CONSTRAINT `pinjaman_ibfk_3` FOREIGN KEY (`Id_Petugas`) REFERENCES `petugas_koperasi` (`Id_Petugas`);

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`Id_Anggota`) REFERENCES `anggota` (`Id_Anggota`),
  ADD CONSTRAINT `simpanan_ibfk_2` FOREIGN KEY (`Id_Petugas`) REFERENCES `petugas_koperasi` (`Id_Petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
