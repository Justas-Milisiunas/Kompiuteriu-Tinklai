-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2019 at 11:18 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pvz`
--

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojai`
--

CREATE TABLE `darbuotojai` (
  `Tabelio_nr` int(5) NOT NULL,
  `Pavarde` varchar(20) NOT NULL,
  `Vardas` varchar(20) NOT NULL,
  `Pareigos` varchar(20) NOT NULL,
  `Atlyginimas` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darbuotojai`
--

INSERT INTO `darbuotojai` (`Tabelio_nr`, `Pavarde`, `Vardas`, `Pareigos`, `Atlyginimas`) VALUES
(1111, 'Petraitis', 'Petras', 'Direktorius', '1000'),
(2222, 'Jonaitis', 'Jonas', 'Valytojas', '200'),
(3333, 'Kalvis', 'Kalis', 'Inz', '400'),
(44444, 'Jonson', 'Mike', 'Konsultantas', '3300'),
(77777, 'Zonkus', 'Jonas', 'inz', '500'),
(88888, 'Abelis', 'Kostas', 'inz', '1200'),
(99999, 'Petkus', 'Aidas', 'Valytojas', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  ADD PRIMARY KEY (`Tabelio_nr`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
