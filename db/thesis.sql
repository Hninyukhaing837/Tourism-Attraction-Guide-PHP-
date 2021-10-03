-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 02:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `a1`
--

CREATE TABLE `a1` (
  `username` varchar(65) NOT NULL,
  `phone` int(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `guest` int(65) NOT NULL,
  `checkindate` text NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a1`
--

INSERT INTO `a1` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('Hnin Yu', 7888888, 'hyk@gmail.com', 5, '2018-09-19', '2018-09-22', 'Superior twin');

-- --------------------------------------------------------

--
-- Table structure for table `a1room`
--

CREATE TABLE `a1room` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a1room`
--

INSERT INTO `a1room` (`room`, `facility`, `choice`, `price`) VALUES
('SUPERIOR DOUBLE', '1 double bed', 'Included:Free breakfast for 2', '$15'),
(' SUPERIOR TWIN', '2 single beds', 'Free breakfast for 2,Flash Deal - Limited time offer. Rate includes 66% discount', '$15'),
('DELUXE TWIN', '2 single beds', 'Free breakfast for 2,Flash Deal - Limited time offer. Rate includes 66% discount! ', '$17'),
(' DELUXE DOUBLE', '1 double bed', 'Free breakfast for 2,Flash Deal - Limited time offer. Rate includes 66% discount!', '$17');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(55) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `username`, `password`, `email`) VALUES
(1, 'hninyu', 'hninyu123', 'hyk@gmail.com'),
(2, 'admin', 'admin', 'admin@gmail.com'),
(3, 'hyk', 'hyk', 'hyk123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `amazing`
--

CREATE TABLE `amazing` (
  `username` varchar(65) NOT NULL,
  `phone` int(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `guest` int(65) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amazing`
--

INSERT INTO `amazing` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('Hnin Yu', 78854323, 'hyk@gmail.com', 5, '2018-07-18', '2018-07-20', 'Sea View Deluxe Double'),
('Thae Ei', 4564236, 'thae@gmail.com', 3, '2018-07-12', '2018-07-14', 'Sea View Deluxe Double'),
('Thu Zar', 84536245, 'tza@gmail.com', 5, '2018-06-29', '2018-07-01', 'Beach Front Suite'),
('Kyi Pyar', 45642366, 'kp12@gmail.com', 3, '2018-07-20', '2018-07-23', 'Sea View-New Wing'),
('Mya Kay', 3253466, 'mya123@gmail.com', 4, '2018-06-21', '2018-06-23', 'Deluxe Double'),
('Pann Ei', 84536287, 'pann@gmail.com', 3, '2018-09-01', '2018-08-03', 'Deluxe Double'),
('Poe Ei', 7888888, 'poe45@gmail.com', 5, '2018-06-21', '2018-06-23', 'Sea View Deluxe Double'),
('Phyo Ei', 3253466, 'phyo78@gmai.com', 3, '2018-07-19', '2018-07-21', 'Beach Front Suite'),
('Moht Moht', 3253466, 'moht12@gmail.com', 4, '2018-06-07', '2018-06-09', 'Sea View-New Wing'),
('Kay Thi', 84536287, 'kt23@gmail.com', 4, '2018-07-20', '2018-07-22', 'Deluxe Double');

-- --------------------------------------------------------

--
-- Table structure for table `amazingroom`
--

CREATE TABLE `amazingroom` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amazingroom`
--

INSERT INTO `amazingroom` (`room`, `facility`, `choice`, `price`) VALUES
('SEA VIEW DELUXE DOUBLE ROOM', 'Ocean view,Terrace Flat-screen TV,Air conditioning,Bathtub Private bathroom,Hardwood/Parquet floors,Wardrobe/Closet  A fridge and coffee/tea making facilities are also provided', 'Included: 5 % TAX, 10 % Property service charge, Breakfast', 'US$86.40'),
(' BEACH FRONT SUITE', 'Ocean view,Flat-screen TV,Air conditioning,Bathtub Private bathroom', 'Included: 5 % TAX, 10 % Property service charge, Breakfast', 'US$150'),
('SEA VIEW DELUXE DOUBLE ROOM-NEW WING', 'Air conditioningBathtub Private bathroom,Flat-screen TV', 'Included: 5 % TAX, 10 % Property service charge, Breakfast', 'Included: 5 % TAX, 10 % Property service charge, Breakfast'),
(' DELUXE DOUBLE', '1 double bed', 'Free breakfast for 2,Flash Deal - Limited time offer. Rate includes 66% discount! ', '$37');

-- --------------------------------------------------------

--
-- Table structure for table `aureum`
--

CREATE TABLE `aureum` (
  `username` varchar(65) NOT NULL,
  `phone` int(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `guest` int(65) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aureum`
--

INSERT INTO `aureum` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('Hnin Yu', 7888888, 'hyk@gmail.com', 1, '2018-07-18', '2018-06-20', 'lotus villa'),
('San Yain', 78854323, 'sy@gmail.com', 3, '2018-06-21', '2018-06-23', 'deluxe'),
('Mu Mu', 3253466, 'Mu123@gmail.com', 3, '2018-06-22', '2018-08-24', 'Superior'),
('Thu Zar', 78854323, 'tza@gmail.com', 3, '2018-06-01', '2018-06-04', 'deluxe'),
('Thae Ei', 4564236, 'thae@gmail.com', 4, '2018-07-05', '2018-07-07', 'family'),
('Pann Ei', 4564236, 'pann@gmail.com', 5, '2018-08-08', '2018-08-11', 'lotus villa'),
('Kyi Pyar', 4564236, 'kp12@gmail.com', 3, '2018-07-12', '2018-07-15', 'Superior'),
('Mya Kay', 3253466, 'mya123@gmail.com', 5, '2018-06-15', '2018-06-17', 'deluxe'),
('War War', 459346023, 'war12@gmail.com', 3, '2018-07-25', '2018-07-27', ' Jasmine or Orchid Garden View Villa'),
('Nann Nann', 694323552, 'nann@gmail.com', 2, '2018-08-14', '2018-08-16', ' Jasmine or Orchid lake View Villa');

-- --------------------------------------------------------

--
-- Table structure for table `aureumroom`
--

CREATE TABLE `aureumroom` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aureumroom`
--

INSERT INTO `aureumroom` (`room`, `facility`, `choice`, `price`) VALUES
('DELUXE ROOM', '1 double bed or 2 single beds,Max 2 adults, plus 1 on extra bed 2', '2 children(1-5 years) stay FREE!  Breakfast, Special deal!', ' $103/night'),
(' FAMILY ROOM', '2 double beds or 4 single beds,Max 4 adults, plus 1 on extra bed', '2 children(1-5 years) stay FREE!  Breakfast, Special deal!', ' $125/night'),
(' LOTUS VILLA', '1 double bed or 2 single beds,Max 2 adults, plus 1 on extra bed 2', '2 children(1-5 years) stay FREE!  Breakfast, Special deal!', '$213/night'),
('SUPERIOR DOUBLE OR TWIN', '1 double bed or 2 single beds', '2 children(1-5 years) stay FREE!  Breakfast, Special deal!', '$70/night'),
('Jasmine or Orchid Garden View Villa', 'Garden view,90 m²/969 ft²,Separate shower/bathtub Balcony/terrace 2 single beds and 1 double bed or 2 single beds', 'Free breakfast for 2,Instant discount: $ 5', '$156/night'),
('Jasmine or Orchid Lake View Villa', 'Lake view 90 m²/969 ft²  Separate shower/bathtub Balcony/terrace 1 double bed or 2 single beds', 'Free breakfast for 2,Instant discount: $ 6', '$181/night');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `contact`, `message`) VALUES
('Hnin Yu', '09-6912534', 'This website is awesome!'),
('Su Su', '09-42756876', 'Nice!'),
('Teacher', '09-798543', 'Good!');

-- --------------------------------------------------------

--
-- Table structure for table `garden`
--

CREATE TABLE `garden` (
  `username` varchar(65) NOT NULL,
  `phone` int(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `guest` int(65) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garden`
--

INSERT INTO `garden` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('Hnin Yu', 78854323, 'hyk@gmail.com', 4, '2018-08-02', '2018-08-04', 'Bungalow');

-- --------------------------------------------------------

--
-- Table structure for table `gardenroom`
--

CREATE TABLE `gardenroom` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `username` varchar(65) NOT NULL,
  `phone` int(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `guest` int(65) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('San Yain', 3253466, 'sy@gmail.com', 3, '2018-06-06', '2018-06-08', 'Superior double'),
('Hnin Yu', 7888888, 'hyk@gmail.com', 1, '2018-07-11', '2018-07-13', 'Standard single'),
('Poe Ei', 3253466, 'poe45@gmail.com', 4, '2018-06-07', '2018-06-11', 'Superior double'),
('Phyo Ei', 78854323, 'phyo78@gmai.com', 1, '2018-06-01', '2018-06-03', 'Standard single'),
('Thu Zar', 3253466, 'tza@gmail.com', 3, '2018-07-18', '2018-07-20', 'Family-3 persons'),
('Moht Moht', 7888888, 'moht12@gmail.com', 4, '2018-06-27', '2018-06-29', 'Deluxe double'),
('Kay Thi', 7885432, 'kt23@gmail.com', 5, '2018-07-10', '2018-07-13', 'Deluxe double');

-- --------------------------------------------------------

--
-- Table structure for table `homeroom`
--

CREATE TABLE `homeroom` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeroom`
--

INSERT INTO `homeroom` (`room`, `facility`, `choice`, `price`) VALUES
('STANDARD SINGLE', '1 single bed', 'Included: 5 % Tax, 10 % Property service charge,Breakfast', 'MMK 43,486'),
(' SUPERIOR DOUBLE OR TWIN ROOM', '2 single beds', 'Free breakfast for 2 ,Instant discount:$ 4', 'MMK 43,486'),
('DELUXE DOUBLE OR TWIN ROOM', '1 double bed', 'Free breakfast for 2 ,includes 40% discount!', 'MMK 50,100'),
('FAMILY - 3 PERSONS', 'Bathtub,3 single beds', 'Free breakfast for 3 Instant discount: $ 6', 'MMK 60,000');

-- --------------------------------------------------------

--
-- Table structure for table `lux`
--

CREATE TABLE `lux` (
  `username` varchar(65) NOT NULL,
  `phone` int(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `guest` int(65) NOT NULL,
  `checkindate` text NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lux`
--

INSERT INTO `lux` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('Hnin Yu', 7888888, 'hyk@gmail.com', 3, '2018-07-23', '2018-07-26', 'Exterior View');

-- --------------------------------------------------------

--
-- Table structure for table `luxroom`
--

CREATE TABLE `luxroom` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mercure`
--

CREATE TABLE `mercure` (
  `username` varchar(55) NOT NULL,
  `phone` int(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `guest` int(65) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mercure`
--

INSERT INTO `mercure` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('Hnin Yu', 7888888, 'hyk@gmail.com', 4, '2018-06-21', '2018-06-23', 'Deluxe king'),
('Susan', 974382221, 'ss34@gmail.com', 3, '2018-07-19', '2018-07-21', 'Jasmine Garden View'),
('Ayeyar', 694382342, 'ay56@gmail.com', 4, '2018-08-09', '2018-08-11', 'Orchid Lake View');

-- --------------------------------------------------------

--
-- Table structure for table `mercureroom`
--

CREATE TABLE `mercureroom` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mercureroom`
--

INSERT INTO `mercureroom` (`room`, `facility`, `choice`, `price`) VALUES
('SUPERIOR 2 SINGLE BEDS', ' Shower and bathtub,2 single beds', 'Free breakfast for 2,Tax receipt available', '$86'),
('SUPERIOR KING BED ROOM', '1 king bed', 'Free breakfast for 2', '$86'),
('DELUXE KING BED ROOM', 'Shower and bathtub,1 king bed', 'Free breakfast for 2', '$93'),
(' DELUXE 2 SINGLE BEDS', 'Shower and bathtub,2 single beds', 'Free breakfast for 2,Tax receipt available ', '$93');

-- --------------------------------------------------------

--
-- Table structure for table `princess`
--

CREATE TABLE `princess` (
  `username` varchar(65) NOT NULL,
  `phone` int(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `guest` int(65) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `princess`
--

INSERT INTO `princess` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('Yin Yin', 4564236, 'yin@gmail.com', 3, '2018-06-01', '2018-06-03', 'Standard Double'),
('Yee Yee', 3253466, 'sy@gmail.com', 3, '2018-08-07', '2018-08-09', 'Deluxe Twin');

-- --------------------------------------------------------

--
-- Table structure for table `princessroom`
--

CREATE TABLE `princessroom` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `princessroom`
--

INSERT INTO `princessroom` (`room`, `facility`, `choice`, `price`) VALUES
('STANDARD DOUBLE ROOM', '1 double bed, Free private parking', 'Included: 5 % Tax, 10 % Property service charge, Breakfast', 'MMK 27,610'),
('STANDARD TRIPLE ROOM', '1 single bed and 1 double bed, Free private parking', 'Included: 5 % Tax, 10 % Property service charge, Breakfast', 'MMK 34,513'),
('SUPERIOR TWIN ROOM', '2 single beds,40 m² City view,Flat-screen,TV Air conditioning,Bath Private bathroom,Free private parking', 'Included: 5 % Tax, 10 % Property service charge, Breakfast', 'MMK 48,318'),
(' DELUXE TWIN ROOM', '2 single beds,42 m² City view,Flat-screen TV,Air conditioning,Bath Private bathroom', 'Included: 5 % Tax, 10 % Property service charge, Breakfast', 'MMK 69,025');

-- --------------------------------------------------------

--
-- Table structure for table `royal`
--

CREATE TABLE `royal` (
  `username` varchar(55) NOT NULL,
  `phone` int(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `guest` int(55) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `rooms` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `royal`
--

INSERT INTO `royal` (`username`, `phone`, `email`, `guest`, `checkindate`, `checkoutdate`, `rooms`) VALUES
('Hnin Yu', 78854323, 'hyk@gmail.com', 4, '2018-06-06', '2018-06-08', 'Family room'),
('Yin Yin', 3253466, 'yin@gmail.com', 2, '2018-08-08', '2018-08-10', 'Grand Deluxe Double'),
('Thu Zar', 4564236, 'tza@gmail.com', 3, '2018-06-29', '2018-06-30', 'Superior Double with Garden View'),
('Thae Ei', 7885432, 'thae@gmail.com', 4, '2018-07-06', '2018-07-08', 'Family room'),
('Pann Ei', 3253466, 'pann@gmail.com', 5, '2018-08-02', '2018-08-05', 'Grand Deluxe Double'),
('Mya Kay', 4564236, 'mya123@gmail.com', 3, '2018-06-09', '2018-06-11', 'Superior Double'),
('Kyi Pyar', 45455555, 'kp12@gmail.com', 3, '2018-07-19', '2018-07-23', 'Superior Double with Garden View'),
('Poe Ei', 974563652, 'poe45@gmail.com', 5, '2018-07-12', '2018-07-14', 'Family room'),
('Phyo Ei', 45576583, 'phyo78@gmai.com', 3, '2018-08-05', '2018-08-08', 'Grand Deluxe Double'),
('Moht Moht', 77563423, 'moht12@gmail.com', 4, '2018-06-15', '2018-06-18', 'Superior Double'),
('Kay Thi', 78854323, 'kt23@gmail.com', 3, '2018-07-10', '2018-07-13', 'Superior Double with Garden View'),
('teacher', 9788888, 'teacher@gmail.com', 3, '2018-07-04', '2018-07-06', 'Family room'),
('Susan', 96953285, 'susan.123@gmail.com', 5, '2018-07-10', '2018-07-12', '1 Person in 5-Bed Dormitory- Mixed- Spa'),
('Yuki', 974382221, 'yuki@gmail.com', 2, '2018-07-03', '2018-07-05', 'Superior Double or Twin - Guestroom');

-- --------------------------------------------------------

--
-- Table structure for table `royalroom`
--

CREATE TABLE `royalroom` (
  `room` varchar(225) NOT NULL,
  `facility` varchar(225) NOT NULL,
  `choice` varchar(225) NOT NULL,
  `price` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `royalroom`
--

INSERT INTO `royalroom` (`room`, `facility`, `choice`, `price`) VALUES
('SUPERIOR DOUBLE OR TWIN ROOM WITH GARDEN VIEW', '2 single beds,1 double bed,Garden view Flat-screen TV Air conditioning Private bathroom', 'Included: 5 % Tax, 10 % Property service charge, Breakfast', 'MMK 43,486'),
(' FAMILY ROOM', '2 double beds or 4 single beds,Max 4 adults, plus 1 on extra bed', '2 children(1-5 years) stay FREE!Breakfast, Special deal!', 'MMK 65,486'),
('GRAND DELUXE DOUBLE ROOM', '1 double bed,42 m² Pool view Flat-screen TV Air conditioning Private bathroom !', 'Included: 5 % Tax, 10 % Property service charge, Breakfast', 'MMK 207,076'),
(' SUPERIOR DOUBLE', '1 double bed or 2 single beds', 'Max 2 adults 2 children(1-5 years) stay FREE! Breakfast, Special deal!', 'MMK 60,076'),
('1 Person in 5-Bed Dormitory - Mixed Spa', '4 bedrooms,Shower,Shared bathroom,1 bunk bed', 'Free Breakfast!Flash Deal - Limited time offer. Rate includes 40% discount! ', 'MMK 65,000'),
('Superior Double or Twin - Guestroom', 'Garden view,41 m²/441 ft²,Shower,1 double bed', 'Free breakfast for 2 ', 'MMK 100,000');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `from-station` varchar(65) NOT NULL,
  `to-station` varchar(65) NOT NULL,
  `train-no` varchar(65) NOT NULL,
  `depart` varchar(65) NOT NULL,
  `arrive` varchar(65) NOT NULL,
  `uc-sleep` varchar(65) NOT NULL,
  `uc-seat` varchar(65) NOT NULL,
  `sc-seat` varchar(65) NOT NULL,
  `oc-seat` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`from-station`, `to-station`, `train-no`, `depart`, `arrive`, `uc-sleep`, `uc-seat`, `sc-seat`, `oc-seat`) VALUES
('Yangon', 'Bagan', '61', '16:00 day1', '09:31 day2', '16,500($17)', '12,000($12)', '6,000($6)', '4,500($4)'),
('Bagan', 'Yangon', '62', '17:00 day1', '10:30 day2', '16,500($17)', '12,000($12)', '6,000($6)', '4,500($4)'),
('Yangon', 'Mandalay', '11,31,9/143,5,3,7', '06:00', '21:00', '12,750($14)', '9,300($10)', '-----', '4,600'),
('Mandalay', 'Yangon', '8,144/10,32,12,6,4', '06:00 ', '21:00', '12,750($14)', '9,300($10)', '-----', '4,600');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
