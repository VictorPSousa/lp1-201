-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 10:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdaula1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `codigo` int(11) NOT NULL,
  `funcionario` varchar(90) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `nomedamae` varchar(90) DEFAULT NULL,
  `nomedopai` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`codigo`, `funcionario`, `endereco`, `bairro`, `cidade`, `uf`, `nomedamae`, `nomedopai`) VALUES
(1, 'Debora Tiemy Miyake', 'Rua Margarida', 'Jardim das Flores', 'Sao Paulo', 'SP', 'Shirley', 'Homero'),
(2, 'Victor Pedro de Sousa', 'Rua Caju', 'Jardim Amor', 'Sao Paulo', 'SP', 'Ligia', ''),
(3, 'Barbara Elisa', 'Rua das Flores', 'Jardim Babilonia', 'Sao Paulo', 'SP', 'Raquel', 'Joao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
