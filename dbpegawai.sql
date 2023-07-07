-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 07:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldivisi`
--

CREATE TABLE `tbldivisi` (
  `Kode_divisi` varchar(2) NOT NULL,
  `Nama_divisi` varchar(30) NOT NULL,
  `Pimpinan_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldivisi`
--

INSERT INTO `tbldivisi` (`Kode_divisi`, `Nama_divisi`, `Pimpinan_divisi`) VALUES
('S1', 'Gudang', 'Beni Permana, SE'),
('S2', 'Produksi', 'Syaiful Bachri, ST'),
('S3', 'HRD', 'Dr. Anggit Dermawan');

-- --------------------------------------------------------

--
-- Table structure for table `tblpegawai`
--

CREATE TABLE `tblpegawai` (
  `NIP` varchar(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` text NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Kode_Divisi` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpegawai`
--

INSERT INTO `tblpegawai` (`NIP`, `Nama`, `Alamat`, `Tanggal_lahir`, `Kode_Divisi`) VALUES
('11234', 'Arini Nikita', 'Jl. Dedali Putih 5A Tangerang', '1988-01-02', 'S1'),
('11235', 'Toni Purana', 'Jl. Temenggung 21B Jakarta Selatan', '1983-04-04', 'S2'),
('11236', 'Gigih Prayitno', 'Jl. Sidopekso 65 Bandung', '1985-11-08', 'S3'),
('11237', 'Hilda Rahmawa', 'Jl. Mendut 12 Bogor', '1986-11-01', 'S2'),
('11238', 'Miftachul Fauzan', 'Jl. Borobudur 1 Bogor', '1984-09-05', 'S1'),
('11239', 'Katrilia Tirta', 'Jl. Kenanga 21 Jakarta Timur', '1984-07-05', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `tblpresensi`
--

CREATE TABLE `tblpresensi` (
  `Tanggal` date NOT NULL,
  `NIP` varchar(5) NOT NULL,
  `Jam_Masuk` time NOT NULL,
  `Jam_Pulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpresensi`
--

INSERT INTO `tblpresensi` (`Tanggal`, `NIP`, `Jam_Masuk`, `Jam_Pulang`) VALUES
('2018-01-02', '11234', '08:10:00', '17:40:00'),
('2018-01-02', '11235', '08:00:00', '17:07:00'),
('2018-01-02', '11236', '07:00:00', '16:30:00'),
('2018-01-03', '11234', '07:45:00', '16:40:00'),
('2018-01-03', '11235', '07:50:00', '16:50:00'),
('2018-01-04', '11234', '07:55:00', '17:30:00'),
('2018-01-05', '11234', '07:20:00', '16:20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldivisi`
--
ALTER TABLE `tbldivisi`
  ADD PRIMARY KEY (`Kode_divisi`);

--
-- Indexes for table `tblpegawai`
--
ALTER TABLE `tblpegawai`
  ADD PRIMARY KEY (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
