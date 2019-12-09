-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 03:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clungup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `user_no` int(11) NOT NULL,
  `user_login` varchar(25) DEFAULT NULL,
  `user_password` varchar(25) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`user_no`, `user_login`, `user_password`, `name`) VALUES
(1, 'admin', 'admin12345', 'abdul\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cek_list`
--

CREATE TABLE `cek_list` (
  `id` int(11) NOT NULL,
  `kd_book` varchar(20) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `qty` int(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cek_list`
--

INSERT INTO `cek_list` (`id`, `kd_book`, `item`, `qty`, `keterangan`) VALUES
(57, 'bd477', 'MINUMAN BOTOL, GELAS PLASTIK DAN KALENG', 1, ''),
(58, 'bd477', 'MIE / KERTAS MINYAK', 3, ''),
(59, 'bd477', 'PERALATAN MANDI / SHAMPO, ODOL, DLL ', 4, ''),
(60, 'bd477', 'TRASH BAG / PLASTIK SAMPAH', 1, ''),
(61, 'bd477', 'SNACK / MAKANAN RINGAN', 1, ''),
(62, 'bd477', 'ROKOK', 1, ''),
(63, 'bd477', 'TISSUE', 1, ''),
(64, 'bd477', 'MASKER', 1, ''),
(65, 'bd477', 'SACHEET', 1, ''),
(66, 'bd477', 'PEMBALUT', 1, ''),
(67, 'bd477', 'TEMPAT MAKANAN', 0, ''),
(68, 'bd477', '', 0, ''),
(69, 'bd477', '', 0, ''),
(70, 'bd477', '', 0, ''),
(71, '', 'MINUMAN BOTOL, GELAS PLASTIK DAN KALENG', 5, ''),
(72, '', 'MIE / KERTAS MINYAK', 5, ''),
(73, '', 'PERALATAN MANDI / SHAMPO, ODOL, DLL ', 0, ''),
(74, '', 'TRASH BAG / PLASTIK SAMPAH', 0, ''),
(75, '', 'SNACK / MAKANAN RINGAN', 0, ''),
(76, '', 'ROKOK', 0, ''),
(77, '', 'TISSUE', 0, ''),
(78, '', 'MASKER', 0, ''),
(79, '', 'SACHEET', 0, ''),
(80, '', 'PEMBALUT', 0, ''),
(81, '', 'TEMPAT MAKANAN', 0, ''),
(82, '', '', 0, ''),
(83, '', '', 0, ''),
(84, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `quantity` int(2) NOT NULL,
  `booking_code` varchar(15) NOT NULL,
  `payment` int(11) DEFAULT NULL,
  `booking_date_start` date NOT NULL,
  `time_of_arrival` time NOT NULL,
  `sesi` int(1) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Bayar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `name`, `email`, `contact`, `no_rekening`, `alamat`, `quantity`, `booking_code`, `payment`, `booking_date_start`, `time_of_arrival`, `sesi`, `status`) VALUES
(26, 'Otniel', 'Nandamoklet20@gmail.com', '098765432', '876543456789', 'Malang', 1, 'bd477', 10000, '2018-03-23', '09:32:00', 1, 'Batal'),
(27, 'Norman', 'justanorman98@gmail.com', '96216633', '1883727523', 'Malang', 5, '08d22', 50000, '2018-03-28', '09:32:00', 1, 'Konfirmasi'),
(28, 'otniel v', 'pokemonmalang01@gmail.com', '085336161461 ', '25423850065252', 'Malang', 7, '25148', 70000, '2018-03-30', '09:32:00', 1, 'Konfirmasi'),
(29, 'Alfi Samudro', 'alfialfarisi@gmail.com', '082339803192', '7474748900', 'Malang', 10, '60a61', 10000, '2019-03-24', '09:36:00', 1, 'Belum Bayar'),
(30, 'Norman', 'Nandamoklet20@gmail.com', '087543677555', '0986665533', 'Malang', 2, '4be38', 40000, '2018-03-24', '10:20:00', 1, 'Belum Bayar'),
(31, 'Joshua Davian', 'joshuadavian@gmail.com', '081252699323', '986579098544', 'Jl. Candi Bajang Ratu Malang', 7, 'VAWUL', 70, '0000-00-00', '07:00:00', 1, 'Belum Bayar'),
(32, 'Alvin', 'joshuadavian@gmail.com', '081252699323', '986579098544', 'Jl. Candi Bajang Ratu Malang', 4, 'CFIBG', 40, '0000-00-00', '10:00:00', 1, 'Konfirmasi'),
(33, 'Nana', 'nana@gmail.com', '08276548976', '986579098544', 'Malang', 8, 'CAXQO', 80, '2019-10-04', '09:00:00', 2, 'Konfirmasi'),
(34, 'Andy', 'andy@gmail.com', '08276548976', '986579098544', 'Surabaya', 8, 'B8C2T', 80000, '2019-11-10', '08:00:00', 3, 'Belum Bayar'),
(35, 'Joshua Davian', 'joshuadavian@gmail.com', '081252699323', '986579098544', 'Jl. Candi Bajang Ratu Malang', 10, 'A5GUW', 100000, '2019-08-01', '07:00:00', 1, 'Belum Bayar'),
(36, 'Joshua Davian', 'joshuadavian@gmail.com', '081252699323', '986579098544', 'Jl. Candi Bajang Ratu Malang', 7, '86OCY', 70000, '2019-12-01', '09:00:00', 1, 'Konfirmasi'),
(37, 'Hanif Lukmantya', 'hanif@gmail.com', '081252699323', '986579098544', 'Malang', 4, 'L12ZX', 40000, '2019-12-06', '10:00:00', 2, 'Konfirmasi'),
(38, 'Hanif Lukmantya', 'anneke@gmail.com', '081252699323', '986579098544', 'Malang', 5, 'T3GSP', 50000, '2019-12-20', '10:00:00', 2, 'Konfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`user_no`);

--
-- Indexes for table `cek_list`
--
ALTER TABLE `cek_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cek_list`
--
ALTER TABLE `cek_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
