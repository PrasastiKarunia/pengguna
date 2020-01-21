-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 11:43 PM
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
(1, '1', 'aa', 'aa', '11');

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
(1, 'Website Gade', 'aa', '6282139402116', 'prasasti.karunia@gmail.com');

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
(1, 1, 'ab', 'ab@gmail.com', '0837363673', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_lulusan`
--

CREATE TABLE `evaluasi_lulusan` (
  `idevaluasi3` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `a1` varchar(5) DEFAULT NULL,
  `a2` varchar(5) DEFAULT NULL,
  `a3` varchar(5) DEFAULT NULL,
  `a4` varchar(5) DEFAULT NULL,
  `a5` varchar(5) DEFAULT NULL,
  `a6` varchar(5) DEFAULT NULL,
  `a7` varchar(5) DEFAULT NULL,
  `a8` varchar(5) DEFAULT NULL,
  `a9` varchar(5) DEFAULT NULL,
  `a10` varchar(5) DEFAULT NULL,
  `a11` varchar(5) DEFAULT NULL,
  `a12` varchar(5) DEFAULT NULL,
  `a13` varchar(5) DEFAULT NULL,
  `a14` varchar(5) DEFAULT NULL,
  `a15` varchar(5) DEFAULT NULL,
  `a16` varchar(5) DEFAULT NULL,
  `a17` varchar(5) DEFAULT NULL,
  `a18` varchar(5) DEFAULT NULL,
  `a19` varchar(5) DEFAULT NULL,
  `a20` varchar(5) DEFAULT NULL,
  `a21` varchar(5) DEFAULT NULL,
  `b1` varchar(5) DEFAULT NULL,
  `b2` varchar(5) DEFAULT NULL,
  `b3` varchar(5) DEFAULT NULL,
  `b4` varchar(5) DEFAULT NULL,
  `b5` varchar(5) DEFAULT NULL,
  `b6` varchar(5) DEFAULT NULL,
  `b7` varchar(5) DEFAULT NULL,
  `b8` varchar(5) DEFAULT NULL,
  `b9` varchar(5) DEFAULT NULL,
  `b10` varchar(5) DEFAULT NULL,
  `b11` varchar(5) DEFAULT NULL,
  `b12` varchar(5) DEFAULT NULL,
  `b13` varchar(5) DEFAULT NULL,
  `b14` varchar(5) DEFAULT NULL,
  `b15` varchar(5) DEFAULT NULL,
  `b16` varchar(5) DEFAULT NULL,
  `b17` varchar(5) DEFAULT NULL,
  `b18` varchar(5) DEFAULT NULL,
  `b19` varchar(5) DEFAULT NULL,
  `b20` varchar(5) DEFAULT NULL,
  `b21` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi_lulusan`
--

INSERT INTO `evaluasi_lulusan` (`idevaluasi3`, `idpersonal`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `b12`, `b13`, `b14`, `b15`, `b16`, `b17`, `b18`, `b19`, `b20`, `b21`) VALUES
(1, 1, '4', '4', '4', '4', '4', '4', '4', '4', '4', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_magang`
--

CREATE TABLE `evaluasi_magang` (
  `idevaluasi2` int(11) NOT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `61a` varchar(500) DEFAULT NULL,
  `62a` varchar(500) DEFAULT NULL,
  `63a` varchar(500) DEFAULT NULL,
  `63aket` varchar(1024) DEFAULT NULL,
  `64a` varchar(500) DEFAULT NULL,
  `65a` varchar(500) DEFAULT NULL,
  `65aket` varchar(1024) NOT NULL,
  `66a` varchar(500) DEFAULT NULL,
  `66aket` varchar(1024) NOT NULL,
  `67a` varchar(500) DEFAULT NULL,
  `67aket` varchar(1024) NOT NULL,
  `68a` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi_magang`
--

INSERT INTO `evaluasi_magang` (`idevaluasi2`, `idpersonal`, `61a`, `62a`, `63a`, `63aket`, `64a`, `65a`, `65aket`, `66a`, `66aket`, `67a`, `67aket`, `68a`) VALUES
(1, 1, '1', '7', 'Tidak', 'aa', 'Ya', '1,2,3,9', 'aaa', '1,3', '', '2,3', '', 'Mei');

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
(1, '1', '1', '1', '1', '1', '1', '1');

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
  `51a` varchar(500) DEFAULT NULL,
  `52a` varchar(500) DEFAULT NULL,
  `53a` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerjasama_penilaian`
--

INSERT INTO `kerjasama_penilaian` (`idevaluasi`, `idpersonal`, `4a`, `4aket`, `51a`, `52a`, `53a`) VALUES
(1, 1, '1,2,3,4,5,6,7,8,9', 'sssss', '4', '3', '2');

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
