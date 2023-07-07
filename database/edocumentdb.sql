-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edocumentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `clients_acc`
--

CREATE TABLE `clients_acc` (
  `id` int(11) NOT NULL,
  `cFirstname` varchar(255) NOT NULL,
  `cMiddlename` varchar(255) NOT NULL,
  `cLastname` varchar(255) NOT NULL,
  `cUsername` varchar(255) NOT NULL,
  `cPassword` varchar(255) NOT NULL,
  `cDOB` date NOT NULL,
  `cAddress` varchar(500) NOT NULL,
  `cEmail` varchar(255) NOT NULL,
  `cContactNumber` varchar(255) NOT NULL,
  `cPicture` varchar(255) NOT NULL,
  `verifyCode` varchar(255) NOT NULL,
  `password_token` varchar(255) NOT NULL,
  `verify_status` int(11) NOT NULL DEFAULT 0 COMMENT '0 = false, 1 = true',
  `admin_status` int(11) NOT NULL DEFAULT 0,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients_acc`
--

INSERT INTO `clients_acc` (`id`, `cFirstname`, `cMiddlename`, `cLastname`, `cUsername`, `cPassword`, `cDOB`, `cAddress`, `cEmail`, `cContactNumber`, `cPicture`, `verifyCode`, `password_token`, `verify_status`, `admin_status`, `date_created`) VALUES
(1, 'Hya', 'Genodepa', 'Dojillo', 'HelloWorld', 'mine_01', '2000-01-01', 'skajdkajskdj', 'yangyangdojillo01@gmail.com', '09123456789', '8cEbkjpni.jpg', '3a3c2d15838785cf6f29902d00efe15d', 'b590f68424c134849319c2cce6b0ee2ceDoc', 1, 1, '2023-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `DocuCode` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Docu_type` varchar(255) NOT NULL,
  `nso_psa` varchar(255) NOT NULL,
  `baptismal_cert` varchar(255) NOT NULL,
  `marriage_cert_Parents` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `voters_cert` varchar(255) NOT NULL,
  `birth_cert_Sibling` varchar(255) NOT NULL,
  `joint_affidavit` varchar(255) NOT NULL,
  `brgy_cert` varchar(255) NOT NULL,
  `cenomar_both` varchar(255) NOT NULL,
  `birth_cert_both` varchar(255) NOT NULL,
  `tree_planting` varchar(255) NOT NULL,
  `mar_counseling` varchar(255) NOT NULL,
  `parent_sign_m` varchar(255) NOT NULL,
  `parent_sign_f` varchar(255) NOT NULL,
  `consent_sign` varchar(255) NOT NULL,
  `cert_legal_capacity` varchar(255) NOT NULL,
  `divorce_paper` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `DocuCode`, `username`, `Docu_type`, `nso_psa`, `baptismal_cert`, `marriage_cert_Parents`, `cedula`, `voters_cert`, `birth_cert_Sibling`, `joint_affidavit`, `brgy_cert`, `cenomar_both`, `birth_cert_both`, `tree_planting`, `mar_counseling`, `parent_sign_m`, `parent_sign_f`, `consent_sign`, `cert_legal_capacity`, `divorce_paper`, `passport`, `date_created`) VALUES
(1, 'LB-2023-07-07-1', 'HelloWorld', 'Live Birth Certificate', 'batman.pub', '0', 'ConPlan-MRCS-Final.docx', '20220927_190122.jpg', '', '20190807_095724-1.jpg', 'farm.pub', 'DOJILLO-Application-Letter.docx', '', '', '', '', '', '', '', '', '', '', '2023-07-07 16:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `DocuCode` varchar(255) NOT NULL,
  `cUsername` varchar(255) NOT NULL,
  `rFirstname` varchar(255) NOT NULL,
  `rMiddlename` varchar(255) NOT NULL,
  `rLastname` varchar(255) NOT NULL,
  `rAge` int(11) NOT NULL,
  `rSex` varchar(50) NOT NULL,
  `rEmail` varchar(255) NOT NULL,
  `idType` varchar(255) NOT NULL,
  `validID` varchar(255) NOT NULL,
  `tod` varchar(255) NOT NULL COMMENT 'Type of Document',
  `reg_status` int(11) NOT NULL COMMENT 'yes = 1, no = 0',
  `dor` date NOT NULL DEFAULT current_timestamp() COMMENT 'Date of Request',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT 'true = 1, false = 0',
  `date_created` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `DocuCode`, `cUsername`, `rFirstname`, `rMiddlename`, `rLastname`, `rAge`, `rSex`, `rEmail`, `idType`, `validID`, `tod`, `reg_status`, `dor`, `status`, `date_created`) VALUES
(1, 'LB-2023-07-07-1', 'HelloWorld', 'Hya Cynth', 'Genodepa', 'Dojillo', 22, 'Female', 'yangyangdojillo01@gmail.com', 'National ID', 'Certi.jpg', 'Live Birth Certificate', 0, '2023-07-08', 0, '2023-07-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_acc`
--
ALTER TABLE `clients_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients_acc`
--
ALTER TABLE `clients_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
