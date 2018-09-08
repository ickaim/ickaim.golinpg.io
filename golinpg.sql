-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 09:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golinpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_us_id` int(11) NOT NULL,
  `about_us_image` text NOT NULL,
  `about_us_title` varchar(32) NOT NULL,
  `about_us_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `about_us_image`, `about_us_title`, `about_us_content`) VALUES
(1, 'krug1.png', 'EXPLORERS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. '),
(2, 'krug2.png', 'CREATORS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. '),
(3, 'krug3.png', 'CONNECTORS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. '),
(4, 'krug4.png', 'CATALYSTS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_link_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `category_link_id`) VALUES
(1, 'PR AND COMMUNICATIONS', 'prand_communications'),
(2, 'EVENT MANAGEMENT', 'prand_communications'),
(3, 'CLIENTS', 'clients'),
(4, 'ABOUT US', 'about_us'),
(5, 'OFFICES', 'offices'),
(6, 'CONTACT', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clients_id` int(11) NOT NULL,
  `clients_image` text NOT NULL,
  `clients_image_title` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clients_id`, `clients_image`, `clients_image_title`) VALUES
(1, 'client1.png', 'MCDONALD’S: THESTRAW'),
(2, 'client2.png', 'MCDONALD’S: FRORK'),
(3, 'client3.png', 'GUINNESS: MADE OF MORE'),
(4, 'client4.png', 'MAGNUM: MAGNUM X MOSCHINO'),
(5, 'client5.png', 'GULDEN’S: #DEFENDTHEDOG'),
(6, 'client6.png', 'TOBLERONE: THE TOBLERONE TAKE'),
(7, 'client1.png', 'SLIDE2'),
(8, 'client1.png', 'SLIDE2'),
(9, 'client1.png', 'SLIDE2'),
(10, 'client1.png', 'SLIDE2'),
(11, 'client1.png', 'SLIDE2'),
(12, 'client1.png', 'SLIDE2'),
(13, 'client2.png', 'SLIDE 3'),
(14, 'client2.png', 'SLIDE 3'),
(15, 'client2.png', 'SLIDE 3'),
(16, 'client2.png', 'SLIDE 3'),
(17, 'client2.png', 'SLIDE 3');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `meeting_id` int(200) NOT NULL,
  `meeting_name` varchar(255) NOT NULL,
  `meeting_firma` varchar(255) NOT NULL,
  `meeting_email` varchar(255) NOT NULL,
  `meeting_telefon` int(15) NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_time` time NOT NULL,
  `meeting_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`meeting_id`, `meeting_name`, `meeting_firma`, `meeting_email`, `meeting_telefon`, `meeting_date`, `meeting_time`, `meeting_status`) VALUES
(1, 'Ivana Markovic', 'Junior d.o.o', 'ickaim@gmail.com', 11223344, '2018-09-14', '08:00:00', 'Approve'),
(2, 'Marko Markovic', 'Junior d.o.o', 'marko@gmail.com', 36589654, '2018-10-12', '09:00:00', 'Approve'),
(3, 'Marina Radonjic', 'Marina d.o.o', 'marina@gmail.com', 6589652, '2018-09-22', '08:00:00', 'for approval'),
(4, 'Ana Marinkovic', 'Ana d.o.o', 'ana@gmail.com', 698569658, '2018-09-21', '08:00:00', 'for approval');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `offices_id` int(11) NOT NULL,
  `offices_continent` varchar(32) NOT NULL,
  `offices_image` text NOT NULL,
  `offices_image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`offices_id`, `offices_continent`, `offices_image`, `offices_image_name`) VALUES
(1, 'EMEA', 'U boji/podgorica.png', 'podgorica'),
(2, 'EMEA', 'crno-bijelo/belgrade.png', 'belgrade'),
(3, 'EMEA', 'crno-bijelo/brussels.png', 'brussels'),
(4, 'EMEA', 'crno-bijelo/bucharest.png', 'bucharest'),
(5, 'EMEA', 'crno-bijelo/dubai.png', 'dubai'),
(6, 'EMEA', 'crno-bijelo/hamburg.png', 'hamburg'),
(7, 'EMEA', 'crno-bijelo/istanbul.png', 'istanbul'),
(8, 'EMEA', 'crno-bijelo/london.png', 'london'),
(9, 'EMEA', 'crno-bijelo/madrid.png', 'madrid'),
(10, 'EMEA', 'crno-bijelo/milano.png', 'milano'),
(11, 'EMEA', 'crno-bijelo/moscow.png', 'moscow'),
(12, 'EMEA', 'crno-bijelo/paris.png', 'paris'),
(13, 'EMEA', 'crno-bijelo/riga.png', 'riga'),
(14, 'EMEA', 'crno-bijelo/stockholm.png', 'stockholm'),
(15, 'AMERICAS', 'U boji/brussels.jpg', 'brussels'),
(16, 'ASIA', 'U boji/dubai.jpg', 'dubai');

-- --------------------------------------------------------

--
-- Table structure for table `pr_and_communication`
--

CREATE TABLE `pr_and_communication` (
  `pr_id` int(11) NOT NULL,
  `category_id` int(3) NOT NULL,
  `pr_title` varchar(32) NOT NULL,
  `pr_content1` text NOT NULL,
  `pr_content2` text NOT NULL,
  `pr_content3` text NOT NULL,
  `pr_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_and_communication`
--

INSERT INTO `pr_and_communication` (`pr_id`, `category_id`, `pr_title`, `pr_content1`, `pr_content2`, `pr_content3`, `pr_image`) VALUES
(1, 1, 'PR AND COMMUNICATIONS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', '', 'fotka2.png'),
(2, 2, 'EVENT MANAGEMENT', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', ' Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'fotka3.png');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_title` varchar(255) NOT NULL,
  `slide_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_title`, `slide_content`) VALUES
(1, 'amplitudo affiliate of Golin', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.    \r\n            \r\n            \r\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'icka', 'icka2323', 'Ivana ', 'Markovic', 'ickaim@gmail.com', '', 'admin', ''),
(2, 'peter', 'peter123', 'Peter', 'Smith', 'peter@gmail.com', '', 'subscriber', ''),
(3, 'Micko', 'micko123', 'Micko', 'Mickovic', 'micko@gmail.com', '', 'subscriber', ''),
(4, 'aco', 'aco2323', 'Aco', 'Acovic', 'aco@gmail.com', '', 'subscriber', ''),
(5, 'aco', 'aco2323', 'Aco', 'Acovic', 'aco@gmail.com', '', 'subscriber', ''),
(6, 'aco', '$2y$10$iusesomecrazystrings2uGmqBM6cRbAnKOXNgsgarkWn/HTRKaFK', 'Aco', 'Acovic', 'aco@gmail.com', '', 'subscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clients_id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`offices_id`);

--
-- Indexes for table `pr_and_communication`
--
ALTER TABLE `pr_and_communication`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clients_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `meeting_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `offices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pr_and_communication`
--
ALTER TABLE `pr_and_communication`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
