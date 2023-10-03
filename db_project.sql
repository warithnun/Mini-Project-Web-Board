-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 10:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `commentDetail` varchar(255) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `topicID` int(11) DEFAULT NULL,
  `commentdatetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `commentDetail`, `customerID`, `topicID`, `commentdatetime`) VALUES
(88, 'ไม่หายหรอกครับ มวยไทยเป็นที่ยอมรับ และชาวต่างชาติก็ให้ความสนใจเป็นอย่างมาก', 52, 33, '30-09-2023 19:21'),
(89, 'มวยไทยเวทีในปัจจุบันพัฒนาการออกหมัดมาจากมวยสากลนั่นแหละครับ มวยไทยสมัยโบรานณไม่ได้ออกหมัดได้ดีอย่างปัจจุบันหรอก\r\n', 52, 32, '30-09-2023 19:22');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fileimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `username`, `pass`, `firstname`, `lastname`, `email`, `phone`, `fileimg`) VALUES
(50, 'ttahalo', '11111', 'ต้า', 'นะจ๊ะ', 'ttar@mail.com', '0923387270', 'customer_img/LINE_ALBUM_29165_๒๓๐๙๑๓_5.jpg'),
(51, 'ttdream', '11111', 'ดรีม', 'ทีที', 'ttdream@mail.com', '022222222', 'customer_img/353397707_772418801009813_3043232413234741000_n.jpg'),
(52, 'anupong.gg', '11111', 'นุนุ', 'ปอยปอย', 'nunu@mail.com', '0111111111', 'customer_img/301195761_146451691406099_6307648126784765589_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topicID` int(11) NOT NULL,
  `topicName` varchar(255) NOT NULL,
  `customerID` int(11) DEFAULT NULL,
  `topicDetail` longtext DEFAULT NULL,
  `topicdatetime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topicID`, `topicName`, `customerID`, `topicDetail`, `topicdatetime`) VALUES
(32, 'มวยไทย กับ มวยสากล ต่างกันยังไง ! ?', 50, 'เพื่อนๆคิดว่า มวยไทย กับ มวยสากล ต่างกันยังไงครับ และชอบแบบไหนมากกว่ากัน', '30-09-2023 18:59'),
(33, 'ทุกคนคิดว่า มวยไทยจะหายไปจากเราเหมือนวัฒนธรรมหรือประเพณี อื่นๆ ไหมครับ', 50, 'อย่างข้างต้นที่กล่าวมา ผมเห็นวัฒนธรรมหลายต่อหลายอย่างของไทย ได้หายไปโดยผู้คนลืม และไม่ได้สืบสานวัฒนธรรมต่อ เพื่อนๆมีความคิดเห็นยังไงกับ มวยไทยครับ ', '30-09-2023 19:02'),
(34, 'ผู้หญิงสามารถเรียนมวยไทยได้ไหมคะ', 51, 'พอดีอยากฝึกศิลปะการป้องกันตัว แล้วก็ชอบในมวยไทยค่ะ ', '30-09-2023 19:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `topicID` (`topicID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topicID`),
  ADD KEY `customerID` (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`topicID`) REFERENCES `topics` (`topicID`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
