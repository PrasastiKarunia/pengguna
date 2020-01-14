-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 04:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengguna`
--

-- --------------------------------------------------------

--
-- Table structure for table `bekerja`
--

CREATE TABLE `bekerja` (
  `idbekerja` int(11) NOT NULL,
  `idpersonal` varchar(1024) DEFAULT NULL,
  `divisi_alumni` varchar(1024) DEFAULT NULL,
  `jabatan_alumni` varchar(1024) DEFAULT NULL,
  `asal_alumni` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bekerja`
--

INSERT INTO `bekerja` (`idbekerja`, `idpersonal`, `divisi_alumni`, `jabatan_alumni`, `asal_alumni`) VALUES
(1, '1', 'aa', 'aa', 'S-1 STATISTIKA');

-- --------------------------------------------------------

--
-- Table structure for table `datapersonal`
--

CREATE TABLE `datapersonal` (
  `idpersonal` int(11) NOT NULL,
  `nama` varchar(1024) DEFAULT NULL,
  `posisi` varchar(1024) DEFAULT NULL,
  `no_telp` varchar(40) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapersonal`
--

INSERT INTO `datapersonal` (`idpersonal`, `nama`, `posisi`, `no_telp`, `email`) VALUES
(1, 'Website Gade', 'aa', '6282139402116', 'aa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dataperusahaan`
--

CREATE TABLE `dataperusahaan` (
  `idperusahaan` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `nama_perusahaan` varchar(1000) DEFAULT NULL,
  `email_perusahaan` varchar(1000) DEFAULT NULL,
  `notelp_perusahaan` varchar(40) DEFAULT NULL,
  `alamat_perusahaan` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataperusahaan`
--

INSERT INTO `dataperusahaan` (`idperusahaan`, `idpersonal`, `nama_perusahaan`, `email_perusahaan`, `notelp_perusahaan`, `alamat_perusahaan`) VALUES
(1, 1, 'ab', 'ab@gmail.com', '028929289829', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_lulusan`
--

CREATE TABLE `evaluasi_lulusan` (
  `idevaluasi3` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `1a` varchar(5) DEFAULT NULL,
  `2a` varchar(5) DEFAULT NULL,
  `3a` varchar(5) DEFAULT NULL,
  `4a` varchar(5) DEFAULT NULL,
  `5a` varchar(5) DEFAULT NULL,
  `6a` varchar(5) DEFAULT NULL,
  `7a` varchar(5) DEFAULT NULL,
  `8a` varchar(5) DEFAULT NULL,
  `9a` varchar(5) DEFAULT NULL,
  `10a` varchar(5) DEFAULT NULL,
  `11a` varchar(5) DEFAULT NULL,
  `12a` varchar(5) DEFAULT NULL,
  `13a` varchar(5) DEFAULT NULL,
  `14a` varchar(5) DEFAULT NULL,
  `15a` varchar(5) DEFAULT NULL,
  `16a` varchar(5) DEFAULT NULL,
  `17a` varchar(5) DEFAULT NULL,
  `18a` varchar(5) DEFAULT NULL,
  `19a` varchar(5) DEFAULT NULL,
  `20a` varchar(5) DEFAULT NULL,
  `21a` varchar(5) DEFAULT NULL,
  `1b` varchar(5) DEFAULT NULL,
  `2b` varchar(5) DEFAULT NULL,
  `3b` varchar(5) DEFAULT NULL,
  `4b` varchar(5) DEFAULT NULL,
  `5b` varchar(5) DEFAULT NULL,
  `6b` varchar(5) DEFAULT NULL,
  `7b` varchar(5) DEFAULT NULL,
  `8b` varchar(5) DEFAULT NULL,
  `9b` varchar(5) DEFAULT NULL,
  `10b` varchar(5) DEFAULT NULL,
  `11b` varchar(5) DEFAULT NULL,
  `12b` varchar(5) DEFAULT NULL,
  `13b` varchar(5) DEFAULT NULL,
  `14b` varchar(5) DEFAULT NULL,
  `15b` varchar(5) DEFAULT NULL,
  `16b` varchar(5) DEFAULT NULL,
  `17b` varchar(5) DEFAULT NULL,
  `18b` varchar(5) DEFAULT NULL,
  `19b` varchar(5) DEFAULT NULL,
  `20b` varchar(5) DEFAULT NULL,
  `21b` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi_lulusan`
--

INSERT INTO `evaluasi_lulusan` (`idevaluasi3`, `idpersonal`, `1a`, `2a`, `3a`, `4a`, `5a`, `6a`, `7a`, `8a`, `9a`, `10a`, `11a`, `12a`, `13a`, `14a`, `15a`, `16a`, `17a`, `18a`, `19a`, `20a`, `21a`, `1b`, `2b`, `3b`, `4b`, `5b`, `6b`, `7b`, `8b`, `9b`, `10b`, `11b`, `12b`, `13b`, `14b`, `15b`, `16b`, `17b`, `18b`, `19b`, `20b`, `21b`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_magang`
--

CREATE TABLE `evaluasi_magang` (
  `idevaluasi2` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `6.1a` varchar(500) DEFAULT NULL,
  `6.2a` varchar(500) DEFAULT NULL,
  `6.3a` varchar(500) DEFAULT NULL,
  `6.3aket` varchar(1024) DEFAULT NULL,
  `6.4a` varchar(500) DEFAULT NULL,
  `6.5a` varchar(500) DEFAULT NULL,
  `6.6a` varchar(500) DEFAULT NULL,
  `6.7a` varchar(500) DEFAULT NULL,
  `6.8a` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi_magang`
--

INSERT INTO `evaluasi_magang` (`idevaluasi2`, `idpersonal`, `6.1a`, `6.2a`, `6.3a`, `6.3aket`, `6.4a`, `6.5a`, `6.6a`, `6.7a`, `6.8a`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `idflag` int(11) NOT NULL,
  `idpersonal` varchar(1024) DEFAULT NULL,
  `datapersonal` varchar(15) DEFAULT NULL,
  `dataperusahaan` varchar(15) DEFAULT NULL,
  `bekerja` varchar(1024) DEFAULT NULL,
  `kerjasama_penilaian` varchar(15) DEFAULT NULL,
  `evaluasi_magang` varchar(15) DEFAULT NULL,
  `evaluasi_lulusan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`idflag`, `idpersonal`, `datapersonal`, `dataperusahaan`, `bekerja`, `kerjasama_penilaian`, `evaluasi_magang`, `evaluasi_lulusan`) VALUES
(1, '1', '1', '1', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `idjurusan` int(11) NOT NULL,
  `namajurusan` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`idjurusan`, `namajurusan`) VALUES
(1, 'S-1 ARSITEKTUR'),
(2, 'S-1 BIOLOGI'),
(3, 'S-1 DESAIN INTERIOR'),
(4, 'S-1 DESAIN PRODUK'),
(5, 'S-1 FISIKA'),
(6, 'S-1 KIMIA'),
(7, 'S-1 MANAJEMEN BISNIS'),
(8, 'S-1 MATEMATIKA'),
(9, 'S-1 PERENCANAAN WILAYAH DAN KOTA'),
(10, 'S-1 SISTEM INFORMASI'),
(11, 'S-1 STATISTIKA'),
(12, 'S-1 STATISTIKA L J GASAL'),
(13, 'S-1 TEKNIK BIOMEDIK'),
(14, 'S-1 TEKNIK ELEKTRO'),
(15, 'S-1 TEKNIK ELEKTRO L J GASAL'),
(16, 'S-1 TEKNIK FISIKA'),
(17, 'S-1 TEKNIK FISIKA L J GASAL'),
(18, 'S-1 TEKNIK GEOFISIKA'),
(19, 'S-1 TEKNIK GEOMATIKA'),
(20, 'S-1 TEKNIK INDUSTRI'),
(21, 'S-1 TEKNIK INFORMATIKA'),
(22, 'S-1 TEKNIK KELAUTAN'),
(23, 'S-1 TEKNIK KIMIA'),
(24, 'S-1 TEKNIK KIMIA L J GASAL'),
(25, 'S-1 TEKNIK KIMIA L J GENAP'),
(26, 'S-1 TEKNIK KOMPUTER'),
(27, 'S-1 TEKNIK LINGKUNGAN'),
(28, 'S-1 TEKNIK MATERIAL'),
(29, 'S-1 TEKNIK MESIN'),
(30, 'S-1 TEKNIK MESIN L J GASAL'),
(31, 'S-1 TEKNIK PERKAPALAN'),
(32, 'S-1 TEKNIK SIPIL'),
(33, 'S-1 TEKNIK SIPIL L J GASAL'),
(34, 'S-1 TEKNIK SISTEM PERKAPALAN'),
(35, 'S-1 TEKNIK SISTEM PERKAPALAN JOINT BACHELOR DEGREE'),
(36, 'S-1 TEKNIK SISTEM PERKAPALAN L J GASAL'),
(37, 'S-1 TEKNIK TRANSPORTASI LAUT');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama_penilaian`
--

CREATE TABLE `kerjasama_penilaian` (
  `idevaluasi` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `4a` varchar(1024) DEFAULT NULL,
  `4aket` varchar(1024) DEFAULT NULL,
  `5.1a` varchar(500) DEFAULT NULL,
  `5.2a` varchar(500) DEFAULT NULL,
  `5.3a` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerjasama_penilaian`
--

INSERT INTO `kerjasama_penilaian` (`idevaluasi`, `idpersonal`, `4a`, `4aket`, `5.1a`, `5.2a`, `5.3a`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bekerja`
--
ALTER TABLE `bekerja`
  ADD PRIMARY KEY (`idbekerja`);

--
-- Indexes for table `datapersonal`
--
ALTER TABLE `datapersonal`
  ADD PRIMARY KEY (`idpersonal`);

--
-- Indexes for table `dataperusahaan`
--
ALTER TABLE `dataperusahaan`
  ADD PRIMARY KEY (`idperusahaan`);

--
-- Indexes for table `evaluasi_lulusan`
--
ALTER TABLE `evaluasi_lulusan`
  ADD PRIMARY KEY (`idevaluasi3`);

--
-- Indexes for table `evaluasi_magang`
--
ALTER TABLE `evaluasi_magang`
  ADD PRIMARY KEY (`idevaluasi2`);

--
-- Indexes for table `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`idflag`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`idjurusan`);

--
-- Indexes for table `kerjasama_penilaian`
--
ALTER TABLE `kerjasama_penilaian`
  ADD PRIMARY KEY (`idevaluasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bekerja`
--
ALTER TABLE `bekerja`
  MODIFY `idbekerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datapersonal`
--
ALTER TABLE `datapersonal`
  MODIFY `idpersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dataperusahaan`
--
ALTER TABLE `dataperusahaan`
  MODIFY `idperusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `evaluasi_lulusan`
--
ALTER TABLE `evaluasi_lulusan`
  MODIFY `idevaluasi3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `evaluasi_magang`
--
ALTER TABLE `evaluasi_magang`
  MODIFY `idevaluasi2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flag`
--
ALTER TABLE `flag`
  MODIFY `idflag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `idjurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `kerjasama_penilaian`
--
ALTER TABLE `kerjasama_penilaian`
  MODIFY `idevaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
