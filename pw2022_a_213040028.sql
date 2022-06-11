-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220609.11e34a6fec
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_a_213040028`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital_info`
--

CREATE TABLE `hospital_info` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `Ambulance` varchar(255) NOT NULL,
  `Domisili` varchar(255) NOT NULL,
  `Tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_info`
--

INSERT INTO `hospital_info` (`id`, `Gambar`, `Ambulance`, `Domisili`, `Tempat`) VALUES
(1, '629eea438314e.jpg', 'ambulance Al-hasya', 'Kabupaten Bandung ', 'RSUD AL-ihsan'),
(3, '6299bda539126.jpg', 'ambulance al-rasyid ', 'Kota Bandung ', 'RS Advent'),
(4, '6299bf2b58327.jpeg', 'ambulance 554', 'Kota Bandung ', 'RS muhammadiyah '),
(5, '6299c3ae605ef.jpg', 'ambulance PMI bandung ', 'Kota Bandung ', 'PMI Pusat Kota bandung '),
(6, '6299c514cbea5.jpeg', 'Ambulance 457', 'Kabupaten bandung ', 'RSUD Soreang lama '),
(7, '6299c5982ccb2.jpg', 'ambulance PEMKOT Bandung ', 'Kota Bandung ', 'PEMKOT Bandung '),
(8, '62a0d380e0191.jpg', 'Ambulance 431', 'Kota Bandung ', 'PMI  pusat Kota bandung '),
(9, '62a0d471b486d.jpg', 'Ambulance sejahtera ', 'Kabupaten bandung ', 'RSUD Soreang Lama '),
(10, '62a0d4d358151.jpg', 'Ambulance PKS Bandung ', 'Kota Bandung ', 'DPD PKS Kota Bandung '),
(11, '62a0d54eda7e8.jpeg', 'Ambulance 559', 'Kabupaten Bandung barat ', 'RSUD Cililin'),
(12, '62a0d6e990a09.jpg', 'Ambulance 430', 'Kabupaten Bandung Barat', 'MedRec RSUD Lembang ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, 'haykalalvegio', '$2y$10$rTh4VOZ6jd6URPeVLEf26OmVnG9AQTLhzJAiFXwEzgyZBx1nldvoq'),
(8, 'admin1', '$2y$10$TWA/5uLQkcSlk3Lme6s.PuQeR4woP1O.xPwCr3WqhGc28lgP2xS0y'),
(9, 'admin-super', '$2y$10$yTqiACQIlwdF6MBwRQeAcuJwbXG98BXiUWQ17xuzdxbwb1NwmnGq.'),
(10, 'admin2', '$2y$10$0O8vf78gQuMOeoq4rOqfIuOVAVr3mScweqc3kKHD.FGmGALslG8Cq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital_info`
--
ALTER TABLE `hospital_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital_info`
--
ALTER TABLE `hospital_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



