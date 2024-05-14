-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 09:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `agenda_item` varchar(30) NOT NULL,
  `agenda_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`agenda_item`, `agenda_time`) VALUES
('corporate', '2.00pm');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_place` varchar(255) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `amount` int(50) NOT NULL,
  `event_details` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`, `event_time`, `event_place`, `event_type`, `amount`, `event_details`) VALUES
(1, 'Joy Bangla Music Fest 2024', '2024-03-26', '18:00:00', 'Army Stadium', 'Music', 500, 'Joy Bangla Music Fest 2024\r\n\r\nDate: March 26, 2024\r\nTime: 18:00:00\r\nLocation: Army Stadium\r\nType: Music\r\n\r\nDescription: Join us for an electrifying evening filled with the vibrant beats of Bangla music. The Joy Bangla Music Fest 2024 promises to be a celebration of our cultural heritage, featuring renowned artists and bands. Let the music ignite your soul and immerse yourself in the rhythms of Bangladesh.'),
(2, 'Music Fest Concert 2024', '2024-05-31', '20:00:00', 'ICCB EXPO ZONE', 'Music', 750, 'Music Fest Concert 2024\r\n\r\nDate: May 31, 2024\r\nTime: 20:00:00\r\nLocation: ICCB EXPO ZONE\r\nType: Music\r\nDescription: Get ready for an unforgettable night of melodies and harmonies at the Music Fest Concert 2024. Held at the ICCB EXPO ZONE, this concert brings together talented musicians from various genres to enchant the audience. From soulful ballads to energetic anthems, experience the power of music in all its glory.'),
(3, 'Business Conference on Building Smart Bangladesh', '2024-04-10', '11:00:00', 'Bangabandhu International Conference Center', 'Business', 2000, 'Business Conference on Building Smart Bangladesh\r\n\r\nDate: April 10, 2024\r\nTime: 11:00:00\r\nLocation: Bangabandhu International Conference Center\r\nType: Business\r\nDescription: Join industry leaders, innovators, and policymakers at the Business Conference on Building Smart Bangladesh. This conference aims to explore strategies and technologies for sustainable development and economic growth. Engage in insightful discussions, network with key stakeholders, and contribute to shaping the future of Bangladesh\'s business landscape.'),
(4, 'Textile Sourcing Meet', '2024-06-01', '12:00:00', 'International Convention City Bashundhara (ICCB)\r\n', 'Business', 3000, 'Textile Sourcing Meet\r\n\r\nDate: June 1, 2024\r\nTime: 12:00:00\r\nLocation: International Convention City Bashundhara (ICCB)\r\nType: Business\r\nDescription: Calling all textile industry professionals! The Textile Sourcing Meet is your opportunity to connect with leading suppliers, manufacturers, and buyers in the textile sector. Held at the ICCB, this event facilitates trade discussions, showcases the latest innovations, and fosters collaborations to drive the growth of Bangladesh\'s textile industry.'),
(5, 'Tech Expo Bangladesh 2024', '2024-05-15', '15:30:00', 'International Convention City Bashundhara (ICCB)', 'Business', 2500, 'Tech Expo Bangladesh 2024\r\n\r\nDate: May 15, 2024\r\nTime: 15:30:00\r\nLocation: International Convention City Bashundhara (ICCB)\r\nType: Business\r\nDescription: Explore the future of technology at Tech Expo Bangladesh 2024. This premier event brings together tech enthusiasts, entrepreneurs, and industry experts to showcase cutting-edge innovations across various sectors. From AI and IoT to cybersecurity and e-commerce, discover how technology is shaping the landscape of Bangladesh\'s digital economy.'),
(6, 'iftar', '2024-03-31', '16:00:00', 'AIUB', 'closed group', 350, 'Iftar\r\n\r\nDate: March 31, 2024\r\nTime: 16:00:00\r\nLocation: AIUB\r\nType: Closed Group\r\nDescription: Join us for a traditional Iftar gathering at AIUB. This closed group event is a time for friends and colleagues to come together, break their fast, and share in the spirit of Ramadan. Enjoy delicious food, meaningful conversations, and the warmth of community as we observe this special time of the year.'),
(7, 'food', '2024-05-18', '15:00:00', 'mirpur', 'outdoor', 500, 'Food\r\n\r\nDate: May 18, 2024\r\nTime: 15:00:00\r\nLocation: Mirpur\r\nType: Outdoor\r\nDescription: Indulge your taste buds at the Food event in Mirpur. This outdoor gathering brings together food lovers from near and far to savor an array of culinary delights. From local delicacies to international cuisine, there\'s something to please every palate. Join us for a gastronomic adventure under the open sky.'),
(8, 'Adda', '2024-05-14', '21:00:00', 'vhanga', 'reunion', 200, 'Adda\r\n\r\nDate: May 14, 2024\r\nTime: 21:00:00\r\nLocation: Vhanga\r\nType: Reunion\r\nDescription: Reconnect with old friends and reminisce about the good old days at the Adda reunion in Vhanga. This informal gathering is a chance to catch up, share stories, and create new memories together. Whether you\'re a Vhanga native or a visitor, everyone is welcome to join us for a night of laughter, friendship, and nostalgia.'),
(9, 'CS FEST', '2024-05-30', '10:22:00', 'Dhaka', 'Offline', 200, NULL),
(10, 'fest', '2024-05-15', '14:00:00', 'Aiub', 'programming', 500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` int(50) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `bkash_number` varchar(50) NOT NULL,
  `username` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `event_name`, `bkash_number`, `username`) VALUES
(10000, 750, 'food', '01343675893', 'hrm99'),
(10001, 400, 'Adda', '01437384748', 'kazi123'),
(10002, 400, 'Adda', '01453674897', 'hrm85'),
(10003, 350, 'Tech Expo Bangladesh 2024', '01632383281', 'deep123'),
(10004, 1000, 'iftar', '01632383283', 'hrm67'),
(10005, 200, 'Joy Bangla Music Fest 2024', '01632383285', 'kazi123'),
(10006, 875, 'iftar', '01648748595', 'hrm99'),
(10007, 1000, 'Business Conference on Building Smart Bangladesh', '01736474833', 'hrm67'),
(10008, 750, 'Music Fest Concert 2024', '01736474838', 'kazi123'),
(10009, 2500, 'Tech Expo Bangladesh 2024', '01745677669', 'hrm67'),
(10010, 500, 'food', '01784947594', 'hrm67'),
(10011, 3000, 'Textile Sourcing Meet', '01793474838', 'deep123'),
(10012, 250, 'food', '01793746474', 'hrm99'),
(10013, 200, 'Adda', '01793748494', 'deep123'),
(10014, 1000, 'Joy Bangla Music Fest 2024', '01794659364', 'kazi123'),
(10015, 200, 'Adda', '01836473834', 'hrm67'),
(10016, 1000, 'food', '01846463734', 'hrm85'),
(10017, 1750, 'iftar', '01938475857', 'linux99'),
(10018, 2000, 'food', '01794669675', 'linux99'),
(10019, 3500, 'food', '01794669675', 'linux99'),
(10020, 3500, 'food', '01794669675', 'linux99'),
(10021, 1000, 'food', '01794669675', 'linux99'),
(10022, 1750, 'food', '01794669675', 'hrm99'),
(10023, 500, 'food', '01847638762', 'hrm67');

-- --------------------------------------------------------

--
-- Table structure for table `sp`
--

CREATE TABLE `sp` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sp`
--

INSERT INTO `sp` (`id`, `role`, `name`, `bio`) VALUES
(1, 'Performer', 'Deep', 'Charm'),
(2, 'Speaker', 'D', 'N/A'),
(3, 'Speaker', 'S', 'NA'),
(4, 'Speaker', 'N/A', 'N/A'),
(5, 'Performer', 'DEEP', 'd'),
(6, 'Speaker', 'N/A', 'N/A'),
(7, 'Speaker', 'N/A', 'N/A'),
(8, 'Performer', 'N/A', 'N/A'),
(9, 'Performer', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship_details`
--

CREATE TABLE `sponsorship_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `reference` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `sponsor_for` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsorship_details`
--

INSERT INTO `sponsorship_details` (`id`, `company_name`, `address`, `details`, `reference`, `contact_number`, `sponsor_for`, `email`) VALUES
(1, 'vector', '221-b baker street', '', 'Mr mangobani', '01677664780', 'Iftar party', 'somew@gmail.com'),
(7, 'ajax', 'kuratoli', 'katana company', 'sword', '01366778831', 'sword', 'sword@gmail.com'),
(46, 'asdsad', 'asd', 'asd', 'asdsda', '123123123', 'asd', 'nayemgasf@gmail.com'),
(47, 'ajax22', 'kuratoli', 'adasd', 'Mr Mango-bani', '01123012331', 'party', 'party@gmail.com'),
(48, 'Casio', '323/abc street', 'A calculator making company', 'Casio Calculator', '0555222111', 'Math Olympaid', 'Casio@gmail.com'),
(49, 'Shebly and Co', 'Kumilla', 'Accountant consultancy', 'Ami shebly Rahman', '01633224780', 'Adda', 'amisheblyrahman@gmail.com'),
(50, 'K-R Grp Ind.', 'kuratoli', 'A company for wedding managemnet', 'mangobani', '01848674543', 'Wedding', 'kazi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ticketsells`
--

CREATE TABLE `ticketsells` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `ticket_type` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount_coupon` varchar(255) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticketsells`
--

INSERT INTO `ticketsells` (`id`, `customer_name`, `event_name`, `ticket_type`, `quantity`, `discount_coupon`, `username`) VALUES
(1, 'H. R. Masum', 'Tech Expo Bangladesh 2024', 'General Pass', 1, '', 'hrm99'),
(2, 'Masum', 'Business Conference on Building Smart Bangladesh', 'General Pass', 1, '', 'hrm67'),
(3, 'H R M', 'Joy Bangla Music Fest 2024', 'VIP Pass', 2, '', 'hrm85'),
(4, 'Masum', 'Music Fest Concert 2024', 'General Pass', 3, 'DMRS50', 'hrm67'),
(5, 'H. R. Masum', 'Music Fest Concert 2024', 'VIP Pass', 2, '', 'hrm99'),
(6, 'Masum', 'Textile Sourcing Meet', 'General Pass', 1, '', 'hrm67'),
(7, 'H. R. Masum', 'Music Fest Concert 2024', 'General Pass', 1, '', 'hrm99'),
(8, 'H. R. Masum', 'Tech Expo Bangladesh 2024', 'VIP Pass', 1, '', 'hrm99'),
(9, 'H. R. Masum', 'Business Conference on Building Smart Bangladesh', 'VIP Pass', 2, '', 'hrm99'),
(10, 'Mr Masum', 'Joy Bangla Music Fest 2024', 'General Pass', 1, '', 'hrm67'),
(11, 'Mr Masum', 'Music Fest Concert 2024', 'VIP Pass', 2, 'DMRS50', 'hrm67'),
(12, 'H. R. Masum', 'Joy Bangla Music Fest 2024', 'VIP Pass', 2, 'DMRS50', 'hrm99'),
(13, 'H. R. Masum', 'Music Fest Concert 2024', 'VIP Pass', 2, '', 'hrm99'),
(14, 'Mr Masum', 'Music Fest Concert 2024', 'General Pass', 2, '', 'hrm67'),
(15, 'Mr Masum', 'Joy Bangla Music Fest 2024', 'General Pass', 1, '', 'hrm67'),
(16, 'Mr Masum', 'Tech Expo Bangladesh 2024', 'General Pass', 1, 'DMRS50', 'hrm67'),
(17, 'Mr Masum', 'Joy Bangla Music Fest 2024', 'VIP Pass', 1, 'DMRS50', 'hrm67'),
(18, 'Mr Masum', 'Business Conference on Building Smart Bangladesh', 'General Pass', 1, '', 'hrm67'),
(19, 'Mr Masum', 'Business Conference on Building Smart Bangladesh', 'General Pass', 2, 'DMRS50', 'hrm67'),
(20, 'Mr Masum', '', '', 0, '', 'hrm67'),
(21, 'Mr Masum', '', '', 0, '', 'hrm67'),
(22, 'Mr Masum', '', '', 0, '', 'hrm67'),
(23, 'Mr Masum', 'food', 'General Pass', 2, 'DMRS50', 'hrm67'),
(24, 'Mr Masum', 'iftar', 'General Pass', 4, '', 'hrm67'),
(25, 'Mr Masum', 'iftar', 'General Pass', 4, '', 'hrm67'),
(26, 'Mr Masum', 'iftar', 'General Pass', 4, '', 'hrm67'),
(27, 'Mr Masum', 'iftar', 'General Pass', 4, '', 'hrm67'),
(28, 'Mr Masum', 'food', 'General Pass', 3, '', 'hrm67'),
(29, 'Mr Masum', 'Adda', 'General Pass', 2, '', 'hrm67'),
(30, 'Mr Masum', 'iftar', 'General Pass', 5, '', 'hrm67'),
(31, 'Mr Masum', 'food', 'General Pass', 4, 'DMRS50', 'hrm67'),
(32, 'Mr Masum', 'food', 'General Pass', 3, 'DMRS50', 'hrm67'),
(33, 'Mahmudur Rahman Masum', 'Adda', 'General Pass', 1, '', 'hrm84'),
(34, 'Mr Masum', 'food', 'General Pass', 4, 'DMRS50', 'hrm67'),
(35, 'Mr Masum', 'Adda', 'General Pass', 2, '', 'hrm67'),
(36, 'Mr Masum', 'food', 'General Pass', 1, '', 'hrm67'),
(37, 'Mr Masum', 'iftar', 'General Pass', 5, 'DMRS50', 'hrm67'),
(38, 'Mr Masum', 'Adda', 'General Pass', 1, '', 'hrm67'),
(39, 'Mr Masum', 'food', 'General Pass', 1, 'DMRS50', 'hrm67'),
(40, 'Mr Masum', 'Joy Bangla Music Fest 2024', 'General Pass', 2, '', 'hrm67'),
(41, 'Mr Masum', 'Business Conference on Building Smart Bangladesh', 'General Pass', 1, 'DMRS50', 'hrm67'),
(42, 'Mr Masum', 'Music Fest Concert 2024', 'General Pass', 1, '', 'hrm67'),
(43, 'Mr Masum', 'Textile Sourcing Meet', 'General Pass', 1, '', 'hrm67'),
(44, 'Mr Masum', 'Tech Expo Bangladesh 2024', 'General Pass', 4, '', 'hrm67'),
(45, 'Mr Masum', 'Tech Expo Bangladesh 2024', 'General Pass', 1, '', 'hrm67'),
(46, 'MD Masum', 'food', 'General Pass', 4, '', 'linux99'),
(47, 'MD Masum', 'food', 'VIP Pass', 4, '', 'linux99'),
(48, 'MD Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'linux99'),
(49, 'MD Masum', 'food', 'General Pass', 4, 'DMRS50', 'linux99'),
(50, 'MD Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'linux99'),
(51, 'MD Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'linux99'),
(52, 'H. R. Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'hrm99'),
(53, 'H. R. Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'hrm99'),
(54, 'H. R. Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'hrm99'),
(55, 'H. R. Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'hrm99'),
(56, 'H. R. Masum', 'food', 'VIP Pass', 4, '', 'hrm99'),
(57, 'H. R. Masum', 'food', 'General Pass', 4, '', 'hrm99'),
(58, 'H. R. Masum', 'food', 'General Pass', 4, 'DMRS50', 'hrm99'),
(59, 'H. R. Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'hrm99'),
(60, 'H. R. Masum', 'food', 'VIP Pass', 4, '', 'hrm99'),
(61, 'H. R. Masum', 'food', 'VIP Pass', 4, 'DMRS50', 'hrm99'),
(62, 'Mr Masum', 'food', 'General Pass', 2, 'DMRS50', 'hrm67');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uID` int(13) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(16) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(24) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(32) NOT NULL,
  `usertype` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `name`, `email`, `phone`, `username`, `password`, `gender`, `dob`, `usertype`) VALUES
(1, 'Mr Masum', 'hrmasum67@gmail.com', '01794669675', 'hrm69', 'hrm69#123', 'Male', '1999-10-28', 'Admin'),
(2, 'Supeed Mondal', 'hrmasum99.study@gmail.com', '01990618077', 'deep69', 'deep69#123', 'Male', '1999-10-28', 'Customer'),
(5, 'Mahmudur Rahman Masum', 'hrmasum84@gmail.com', '01794669675', 'hrm84', 'hrm84#123', 'Male', '1999-10-28', 'Host'),
(8, 'Mr XYZ', 'mrxyz@gmail.com', '01734781289', 'mrxyz', 'mrxyz#123', 'Male', '1997-09-15', 'Customer'),
(10, 'Mustakim Ahmed', 'mustakim@gmalil.com', '01983776376', 'mustakim123', 'mustakim#123', 'Male', '2000-01-01', 'Host'),
(11, 'Kazi Redwan', 'kazi@gmail.com', '01928673873', 'kazi123', 'kazi#123', 'Male', '2000-01-01', 'Customer'),
(12, 'Sudeep Depp', 'deep@gmail.com', '+8801748394657', 'deep123', 'deep#123', 'Male', '2001-01-01', 'Customer'),
(13, 'mamun sarkar', 'mamun@gmail.com', '01716012312', 'mamun#69', 'mamun69#123', 'gender', '2024-05-29', 'host');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `venue_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `venue_name`, `location`, `capacity`) VALUES
(2, 'International Convention City Bashundhara (ICCB)', 'International Convention City Bashundhara, Purbachal Express-way, Dhaka', 20000),
(3, 'ICCB EXPO ZONE', 'Purbachal Link Road, Dhaka', 20000),
(5, 'mirpur', 'mirpur', 250),
(6, 'aiub', 'Koratoli, Kilkhet, Dhaka-1229', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_name` (`event_name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsorship_details`
--
ALTER TABLE `sponsorship_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketsells`
--
ALTER TABLE `ticketsells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10024;

--
-- AUTO_INCREMENT for table `sp`
--
ALTER TABLE `sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sponsorship_details`
--
ALTER TABLE `sponsorship_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ticketsells`
--
ALTER TABLE `ticketsells`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
