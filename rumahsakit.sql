-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:39 PM
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
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idpasien` varchar(12) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `jenis_penyakit` varchar(20) NOT NULL,
  `lama_inap` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumahsakit`
--

INSERT INTO `rumahsakit` (`updated_at`, `idpasien`, `nama_pasien`, `jenis_kelamin`, `jenis_penyakit`, `lama_inap`) VALUES
('2021-12-14 22:43:15', '10', 'Slamer', 'L', 'DBD', 4),
('2021-12-12 14:27:39', '13', 'Seno', 'L', 'JANTUNG', 8),
('2021-12-12 14:27:39', '14', 'Budi', 'L', 'PARU-PARU', 3),
('2021-12-12 14:27:39', '15', 'Wina', 'P', 'DBD', 3),
('2021-12-12 14:27:39', '16', 'Niken', 'P', 'JANTUNG', 4),
('2021-12-12 14:27:39', '17', 'Ahmad', 'L', 'JANTUNG', 9),
('2021-12-15 05:46:56', '20', 'Atan', 'L', 'Flu', 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
