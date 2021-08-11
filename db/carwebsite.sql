-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 02:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'shehryar', 'kiyani', 'shehryarkiyani121@gmail.com', 'Shehryar12');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `engine_type` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `transmission_type` varchar(255) DEFAULT NULL,
  `assembly_type` varchar(255) DEFAULT NULL,
  `body_type` varchar(255) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `car_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `model`, `city`, `price`, `manufacturer`, `engine_type`, `color`, `transmission_type`, `assembly_type`, `body_type`, `admin_id`, `car_image`, `status`) VALUES
(8, 'carol', 'rawalpindi', '30', 'Toyota', 'cng', 'white', 'manual', 'local', 'original', 1, 'carol.JPG', 'order'),
(9, 'vezel', 'rawalpindi', '50', 'Toyota', 'cng', 'white', 'automatic', 'local', 'original', 1, 'vezel.JPG', 'order'),
(12, 'axela', 'rawalpindi', '50', 'Suzuki', 'petrol', 'white', 'automatic', 'local', 'original', 1, 'axela.JPG', 'order'),
(13, 'move', 'rawalpindi', '50', 'Toyota', 'cng', 'white', 'automatic', 'local', 'original', 1, 'move.JPG', 'order');

-- --------------------------------------------------------

--
-- Table structure for table `carorder`
--

CREATE TABLE `carorder` (
  `order_id` int(11) NOT NULL,
  `CNIC` varchar(255) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `order_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carorder`
--

INSERT INTO `carorder` (`order_id`, `CNIC`, `car_id`, `order_date`, `status`) VALUES
(3, '3740561921097', 8, 'January 7, 2021, 7:01 pm', 'ordered'),
(4, '3740561921097', 9, 'January 8, 2021, 3:51 pm', 'ordered'),
(5, '3740561921097', 12, 'January 8, 2021, 4:31 pm', 'ordered'),
(6, '3740561921097', 13, 'January 8, 2021, 8:40 pm', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `CNIC` varchar(13) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `CNIC`, `first_name`, `last_name`, `email`, `phone`, `gender`, `city`, `password`) VALUES
(2, '3740561921097', 'hamza', 'kazmi', 'hamzakazmi@gmail.com', '03315866992', 'male', 'rawalpindi', 'Hamza1234'),
(3, '3740561921097', 'Shameer', 'Sheikh', 'shehryarkiyani1122@gmail.com', '02123321127', 'male', 'rawalpindi', 'Shehryar123'),
(4, '3740561921097', 'Rehan', 'Ashraf', 'rehan123@gmail.com', '03315866992', 'male', 'rawalpindi', 'Rehan1234'),
(5, '3740561921097', 'Shameer', 'Sheikh', 'shehryarkiyani1122@gmail.com', '02123321127', 'male', 'rawalpindi', 'Shameer123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `carorder`
--
ALTER TABLE `carorder`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carorder`
--
ALTER TABLE `carorder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carorder`
--
ALTER TABLE `carorder`
  ADD CONSTRAINT `carorder_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
