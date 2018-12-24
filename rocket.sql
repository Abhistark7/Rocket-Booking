-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 11:35 PM
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
-- Database: `rocket`
--

-- --------------------------------------------------------

--
-- Table structure for table `last_index`
--

CREATE TABLE `last_index` (
  `id` int(11) NOT NULL,
  `index_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_index`
--

INSERT INTO `last_index` (`id`, `index_no`) VALUES
(1, 34);

-- --------------------------------------------------------

--
-- Table structure for table `rocket`
--

CREATE TABLE `rocket` (
  `id` int(4) NOT NULL,
  `booking_type` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `passport_id` int(11) NOT NULL,
  `email_id` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `rocket` int(11) NOT NULL,
  `payload` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rocket_booking`
--

CREATE TABLE `rocket_booking` (
  `id` int(4) NOT NULL,
  `booking_type` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `passport_id` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `rocket` varchar(25) NOT NULL,
  `payload` varchar(25) NOT NULL,
  `cost` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rocket_booking`
--

INSERT INTO `rocket_booking` (`id`, `booking_type`, `date`, `name`, `passport_id`, `email_id`, `country`, `rocket`, `payload`, `cost`) VALUES
(1, 'MOON', '30th December, 2019', 'Abhishek Sahu', 'DFF78948F', 'abhi9122305911@gmail.com', 'India', 'Falcon Heavy', '4000 Kgs', '$60M'),
(2, 'MOON', '19th July, 2019', 'Elon Musk', 'IFF489HJG', 'elon.musk@spacex.com', 'US', 'Falcon Heavy', '4000 Kgs', '$60M'),
(3, 'MOON', '5th March, 2020', 'egrger', 'regger', 'egrgre', 'eger', 'Falcon Heavy', '4000 Kgs', '$60M'),
(4, 'MOON', '5th March, 2020', 'egrger', 'regger', 'egrgre', 'egefwefer', 'Long MArch 7', '1', '$60M'),
(5, 'MOON', '5th March, 2020', 'Sukanya Srivastav', 'PHVV789HD', 'sukanya69@gmail.com', 'Netherland', 'Falcon Heavy', '4000 Kgs', '$60M'),
(6, 'MOON', '30th December, 2019', 'Karan Mehra', 'IUYGHIO468', 'karan_rizey@hotmail.com', 'Saudi Arabia', 'Falcon Heavy', '4000 Kgs', '$60M'),
(7, 'MOON', '30th December, 2019', 'Samresh Shankar', 'IUG789IUY', 'samu@kmail.com', 'Brazil', 'Falcon Heavy', '4000 Kgs', '$60M'),
(8, 'MOON', '30th December, 2019', 'Samresh Shankar', 'IUG789IUY', 'samu@kmail.com', 'Brazil', 'Falcon Heavy', '4000 Kgs', '$60M'),
(9, 'MOON', '25th August, 2019', 'Kailash Kumar', '', '', '', 'GSLV', '2', '$90M'),
(10, 'MOON', '19th July, 2019', 'Bethany Bust', 'GFHJ668HG', 'bethy.bust@hotmail.com', 'USA', 'Blue Origin', '3', '$120M'),
(11, 'MOON', '25th August, 2019', 'Berk Homes', 'HIGHIG4747', 'berk_9876@hotmail.com', 'Pakistan', 'Saturn V', '2', '$90M'),
(12, 'MOON', '5th March, 2020', 'Shanti Priya', 'IUYGIUG758', 'shanti.shanti@gmail.com', 'Uganda', 'Soyuz', '2', '$90M'),
(13, 'MOON', '30th December, 2019', 'getegt', 'egrger', 'geregr', 'egregrr', 'Falcon Heavy', '1', '$60M'),
(14, 'PAYLOAD', '19th July, 2019', 'Manish Kumar', '7678UYG', 'manish_maddy@hotmail.com', 'UK', 'Long MArch 7', '3', '$120M'),
(15, 'PAYLOAD', '25th August, 2019', 'Matthew Coar', 'IUIUYG456', 'matthew.coar8765@hotmail.', 'US', 'Falcon Heavy', '4000 Kgs', '$60M'),
(16, 'PAYLOAD', '19th July, 2019', 'egaehrtherrt', 'egrt', 'egrer', 'grereggergre', 'Falcon Heavy', '4000 Kgs', '$60M'),
(17, 'PAYLOAD', '19th July, 2019', 'jyyjd', 'tyydtj', 'jtytj', 'tydjyjttyj', 'Blue Origin', '3+000 Kgs', '$120M'),
(18, 'PAYLOAD', '30th December, 2019', 'Aisha Patil', 'YGIU8668', 'aisha_patil@gmail.com', 'India', 'Blue Origin', '2', '$90M'),
(19, 'PAYLOAD', '19th July, 2019', 'hyrthyrt', 'hrthyrthytr', 'hyghygfhyfg', 'yjmyjtjhy', 'Falcon Heavy', '3000kgs', '$120M'),
(20, 'MOON', '25th August, 2019', 'sfsg', '12345', 'dfghhj', 'india', 'Falcon Heavy', '4000 Kgs', '$60M'),
(21, 'PAYLOAD', '19th July, 2019', 'ujnujjnunujuj', 'jhybjn', 'jnjjjn', 'jnnj', 'Soyuz', '4000kgs', '$160M'),
(22, 'MOON', '19th July, 2019', 'nhfr', 'htrhetr', 'tetheht', 'tehtht', 'Falcon Heavy', '4000 Kgs', '$60M'),
(23, 'MOON', '19th July, 2019', 'Sahara Singh', 'HIJHU466', 'sahara.singh@hotmail.com', 'iNDIA', 'Falcon Heavy', '4000 Kgs', '$60M'),
(24, 'MOON', '19th July, 2019', '', '', '', '', 'Falcon Heavy', '1', '$60M'),
(25, 'MOON', '19th July, 2019', 'Katy Perry', 'IUGIUGIU4', 'katy.perry@hotmail.com', 'USA', 'Falcon Heavy', '4 seats', '$160M'),
(26, 'PAYLOAD', '30th December, 2019', 'Rubin Edgart', 'IJ947UG', 'rubin_1988@gmail.com', 'UK', 'GSLV', '3000kgs', '$120M'),
(27, 'PAYLOAD', '19th July, 2019', 'Sam Rockwell', 'HUHU45456687', 'sam_rockwell@gmail.com', 'Russia', 'Soyuz', '2000kgs', '$90M'),
(28, 'MOON', '19th July, 2019', 'Trishal Kumar', 'IHOIO678786', 'trishalkumar@gmai.com', 'India', 'GSLV', '4 seats', '$160M'),
(29, 'MOON', '19th July, 2019', 'Samantha Jackson', 'IOJHO5656', 'samantha_1@gmail.com', 'US', 'Blue Origin', '1 seat', '$60M'),
(30, 'MOON', '19th July, 2019', '', '', '', '', 'Falcon Heavy', '1 seat', '$60M'),
(31, 'MOON', '30th December, 2019', 'Premlata Kumari', 'HIOHOI588', 'premlata98@gmail.com', 'Spain', 'Long MArch 7', '4 seats', '$160M'),
(32, 'MOON', '30th December, 2019', 'Abhishek Sahu', 'HH4664', 'abhistark7@gmail.com', 'India', 'GSLV', '2 seats', '$90M'),
(33, 'MOON', '30th December, 2019', 'Abhishek Sahu', 'HH4664', 'abhistark7@gmail.com', 'India', 'Falcon Heavy', '1 seat', '$60M'),
(34, 'MOON', '30th December, 2019', 'Bunty bhaiya', 'JUHHI664', 'bunty@mirzapur.com', 'India', 'Blue Origin', '3 seats', '$120M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `last_index`
--
ALTER TABLE `last_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rocket`
--
ALTER TABLE `rocket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rocket_booking`
--
ALTER TABLE `rocket_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `last_index`
--
ALTER TABLE `last_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rocket`
--
ALTER TABLE `rocket`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rocket_booking`
--
ALTER TABLE `rocket_booking`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
