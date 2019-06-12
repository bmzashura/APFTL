-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 01:16 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apftl`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_menu`
--

CREATE TABLE `access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access_menu`
--

INSERT INTO `access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 2),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `apftl_activity`
--

CREATE TABLE `apftl_activity` (
  `id` int(11) NOT NULL,
  `activity` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_activity`
--

INSERT INTO `apftl_activity` (`id`, `activity`) VALUES
(3, 'Activity 1'),
(4, 'Activity 2'),
(5, 'Activity 3'),
(6, 'Activity 4'),
(7, 'Activity 5'),
(8, 'Activity 6'),
(9, 'Activity 7'),
(10, 'Activity 8'),
(11, 'Activity 9'),
(12, 'Activity 10'),
(13, 'Activity 11'),
(14, 'Activity 12');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_c_program`
--

CREATE TABLE `apftl_c_program` (
  `id` int(11) NOT NULL,
  `category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_c_program`
--

INSERT INTO `apftl_c_program` (`id`, `category`) VALUES
(3, 'Category 1'),
(4, 'Category 2'),
(5, 'Category 3'),
(6, 'Category 4'),
(7, 'Category 5');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_election`
--

CREATE TABLE `apftl_election` (
  `id` int(11) NOT NULL,
  `id_distric` int(11) NOT NULL,
  `id_subdistric` int(11) NOT NULL,
  `election_period` varchar(128) NOT NULL,
  `female_register` varchar(128) NOT NULL,
  `male_register` varchar(128) NOT NULL,
  `total_register` varchar(128) NOT NULL,
  `female_selected` varchar(128) NOT NULL,
  `male_selected` varchar(128) NOT NULL,
  `total_selected` varchar(128) NOT NULL,
  `female_candidate` varchar(128) NOT NULL,
  `male_candidate` varchar(128) NOT NULL,
  `total_candidate` varchar(128) NOT NULL,
  `photo_male` varchar(128) NOT NULL,
  `name_male` varchar(128) NOT NULL,
  `birth_p_male` varchar(128) NOT NULL,
  `birth_d_male` date NOT NULL,
  `address_male` varchar(128) NOT NULL,
  `mobile_male` varchar(128) NOT NULL,
  `email_male` varchar(128) NOT NULL,
  `valid_male` varchar(128) NOT NULL,
  `unvalid_male` varchar(128) NOT NULL,
  `photo_female` varchar(128) NOT NULL,
  `name_female` varchar(128) NOT NULL,
  `birth_p_female` varchar(128) NOT NULL,
  `birth_d_female` date NOT NULL,
  `address_female` varchar(128) NOT NULL,
  `mobile_female` varchar(128) NOT NULL,
  `email_female` varchar(128) NOT NULL,
  `valid_female` varchar(128) NOT NULL,
  `unvalid_female` varchar(128) NOT NULL,
  `total_valid` varchar(128) NOT NULL,
  `total_unvalid` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_election`
--

INSERT INTO `apftl_election` (`id`, `id_distric`, `id_subdistric`, `election_period`, `female_register`, `male_register`, `total_register`, `female_selected`, `male_selected`, `total_selected`, `female_candidate`, `male_candidate`, `total_candidate`, `photo_male`, `name_male`, `birth_p_male`, `birth_d_male`, `address_male`, `mobile_male`, `email_male`, `valid_male`, `unvalid_male`, `photo_female`, `name_female`, `birth_p_female`, `birth_d_female`, `address_female`, `mobile_female`, `email_female`, `valid_female`, `unvalid_female`, `total_valid`, `total_unvalid`) VALUES
(1, 1, 13, '2019', '11', '11', '22', '11', '11', '22', '11', '11', '22', '47364949_2087924327935020_3337975194345013248_o1.jpg', 'Bemis', 'aaa', '0000-00-00', 'aaaaa', 'aaaaa', 'aaaaa', '10', '1', 'Selection_1561.png', 'aaaaa', 'aaaaaaa', '0000-00-00', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaaaaa', '10', '1', '20', '2'),
(2, 2, 31, '2019', '100', '100', '200', '50', '50', '100', '25', '25', '50', 'portrait-white-man-isolated_53876-403062.jpg', 'Joao da Silva', 'qwerty', '2011-04-25', 'aaaaaaaaaaaaaaaaaaa', '777777', 'mane@mail.com', '65', '5', 'friendly-brunette-looking-camera_23-21477748492.jpg', 'Maria da Costa', 'qwerty', '2012-05-01', 'qwerty', '7888888', 'feto@mail.com', '55', '15', '120', '20'),
(3, 1, 25, '2019', '190', '121', '311', '70', '21', '91', '11', '24', '35', '', 'qqqqqqqqqq', 'qqqqqqqqqqqqqq', '2019-05-27', 'qqqqqqqqqqqqqqqqqq', '777778', 'mane@mail.com', '90', '23', '', 'uuuuuuuuuuu', 'tttttttttttt', '2019-05-27', 'hhhhhhhhhhhhhhh', '7888888', 'feto@mail.com', '60', '14', '150', '37');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_member`
--

CREATE TABLE `apftl_member` (
  `id` int(11) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `f_name` varchar(128) NOT NULL,
  `l_name` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `birth_p` varchar(128) NOT NULL,
  `birth_d` date NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone_n` varchar(128) NOT NULL,
  `periodu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `apftl_menu`
--

CREATE TABLE `apftl_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_menu`
--

INSERT INTO `apftl_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'Information'),
(3, 'My Profile');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_partner`
--

CREATE TABLE `apftl_partner` (
  `id` int(11) NOT NULL,
  `partner` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_partner`
--

INSERT INTO `apftl_partner` (`id`, `partner`) VALUES
(2, 'Partner 1'),
(3, 'Partner 2'),
(4, 'Partner 3');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_program`
--

CREATE TABLE `apftl_program` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_activity` int(11) NOT NULL,
  `id_partner` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_distric` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  `objective` varchar(128) NOT NULL,
  `participant_m` int(11) NOT NULL,
  `participant_f` int(11) NOT NULL,
  `participant_sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_program`
--

INSERT INTO `apftl_program` (`id`, `id_category`, `id_activity`, `id_partner`, `date`, `id_distric`, `description`, `objective`, `participant_m`, `participant_f`, `participant_sum`) VALUES
(4, 3, 3, 2, '2019-06-04', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 12, 24),
(5, 3, 3, 2, '2019-06-04', 2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 20, 32),
(6, 3, 3, 2, '2019-06-04', 3, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 20, 33, 53),
(7, 3, 4, 3, '2019-06-05', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 10, 12, 22),
(8, 3, 4, 3, '2019-06-05', 9, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 100, 100, 200),
(9, 3, 4, 3, '2019-06-06', 7, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 50, 75, 125),
(10, 4, 5, 4, '2019-06-04', 14, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 99, 111),
(11, 4, 5, 4, '2019-06-07', 8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 12, 100, 112),
(12, 4, 5, 4, '2019-06-07', 11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 12, 180, 192),
(13, 5, 6, 3, '2019-06-10', 5, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 120, 30, 150),
(14, 5, 6, 3, '2019-06-10', 6, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 77, 90, 167),
(15, 5, 6, 3, '2019-06-11', 10, 'ttttttttttttttttt', 'tttttttttttttttttttttttttt', 90, 88, 178),
(16, 6, 7, 3, '2019-06-04', 3, 'ttttttttttttttttt', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 170, 20, 190),
(17, 6, 7, 3, '2019-06-11', 8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 56, 70, 126),
(18, 6, 7, 3, '2019-06-14', 10, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 70, 77, 147),
(19, 4, 7, 4, '2019-06-07', 8, 'ssssssssssssssssssssssssssssss', 'sssssssssssssssssssss', 50, 50, 100),
(20, 4, 5, 2, '2019-06-08', 2, 'cccccccccccccccccccccccccc', 'cccccccccccccccccccccccc', 100, 100, 200),
(21, 3, 4, 2, '2019-06-14', 1, 'gggggggggggggggggggggggggggg', 'hhhhhhhhhhhhhhhhhh', 100, 50, 150);

-- --------------------------------------------------------

--
-- Table structure for table `apftl_submenu`
--

CREATE TABLE `apftl_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_submenu`
--

INSERT INTO `apftl_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Member APFTL', 'member/view', 'fas fa-fw fa-users', 1),
(3, 3, 'Curriculum Vitae', 'user', 'fas fa-fw fa-user', 1),
(6, 1, 'Program Management', 'apftl_program', 'fas fa-fw fa-clipboard', 1),
(7, 2, 'Program APFTL', 'programa/view', 'fas fa-fw fa-clipboard', 1),
(8, 1, 'Member Management', 'apftl_member', 'fas fa-fw fa-users', 1),
(9, 1, 'Election Management', 'apftl_election', 'fas fa-fw fa-archive', 1);

-- --------------------------------------------------------

--
-- Table structure for table `distric`
--

CREATE TABLE `distric` (
  `id` int(11) NOT NULL,
  `distric` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `distric`
--

INSERT INTO `distric` (`id`, `distric`) VALUES
(1, 'Dili'),
(2, 'Cova-lima'),
(3, 'Baucau'),
(5, 'Bobonaro'),
(6, 'Liquiçá'),
(7, 'Manatuto'),
(8, 'Lautém'),
(9, 'Ainaro'),
(10, 'Manufahi'),
(11, 'Viqueque'),
(12, 'Ermera'),
(13, 'Aileu'),
(14, 'Oecussi-Ambeno');

-- --------------------------------------------------------

--
-- Table structure for table `member_f_edu`
--

CREATE TABLE `member_f_edu` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `edu` varchar(128) NOT NULL,
  `name_edu` varchar(128) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_lingua`
--

CREATE TABLE `member_lingua` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `lingua` varchar(128) NOT NULL,
  `reading` varchar(128) NOT NULL,
  `speaking` varchar(128) NOT NULL,
  `writing` varchar(128) NOT NULL,
  `listening` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_n_edu`
--

CREATE TABLE `member_n_edu` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `des_edu` varchar(128) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_org_exp`
--

CREATE TABLE `member_org_exp` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `org_exp` varchar(128) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_work_exp`
--

CREATE TABLE `member_work_exp` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `work_exp` varchar(128) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subdistric`
--

CREATE TABLE `subdistric` (
  `id` int(11) NOT NULL,
  `id_distric` int(11) NOT NULL,
  `subdistric` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subdistric`
--

INSERT INTO `subdistric` (`id`, `id_distric`, `subdistric`) VALUES
(13, 1, 'Atauro'),
(25, 1, 'Cristo Rei\r\n'),
(26, 1, 'Dom Aleixo'),
(27, 1, 'Metinaro'),
(28, 1, 'Nain Feto'),
(29, 1, 'Vera Cruz'),
(30, 2, 'Fatululique'),
(31, 2, 'Fatumean'),
(32, 2, 'Fuorém'),
(33, 2, 'Mape-Zumulai'),
(34, 2, 'Maucatar\r\n'),
(35, 1, 'Suai'),
(36, 2, 'Tilomar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(128) NOT NULL,
  `l_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Bemis', 'Huntala', 'bmz.ashura@gmail.com', 'default.jpg', '$2y$10$ghukluAjlltUjQA5Jox5WuiiowNF1pEkHrEXh2QZbHJlck1KvtV26', 2, 1, 1555604180),
(3, 'Luchy', 'Da Costa', 'luchy.tala@gmail.com', 'default.jpg', '$2y$10$bfobOWqx09d4W6ErtOti1eXh8OqeWGxhgEmqXDVH9VG8ReU2rHTzm', 1, 1, 1555605034);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_menu`
--
ALTER TABLE `access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_activity`
--
ALTER TABLE `apftl_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_c_program`
--
ALTER TABLE `apftl_c_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_election`
--
ALTER TABLE `apftl_election`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_distric` (`id_distric`),
  ADD KEY `id_subdistric` (`id_subdistric`);

--
-- Indexes for table `apftl_member`
--
ALTER TABLE `apftl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_menu`
--
ALTER TABLE `apftl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_partner`
--
ALTER TABLE `apftl_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_program`
--
ALTER TABLE `apftl_program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_partner` (`id_partner`),
  ADD KEY `id_distric` (`id_distric`),
  ADD KEY `activity` (`id_activity`);

--
-- Indexes for table `apftl_submenu`
--
ALTER TABLE `apftl_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distric`
--
ALTER TABLE `distric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_f_edu`
--
ALTER TABLE `member_f_edu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member_lingua`
--
ALTER TABLE `member_lingua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member_n_edu`
--
ALTER TABLE `member_n_edu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member_org_exp`
--
ALTER TABLE `member_org_exp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member_work_exp`
--
ALTER TABLE `member_work_exp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `subdistric`
--
ALTER TABLE `subdistric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_menu`
--
ALTER TABLE `access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `apftl_activity`
--
ALTER TABLE `apftl_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `apftl_c_program`
--
ALTER TABLE `apftl_c_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apftl_election`
--
ALTER TABLE `apftl_election`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apftl_member`
--
ALTER TABLE `apftl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apftl_menu`
--
ALTER TABLE `apftl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apftl_partner`
--
ALTER TABLE `apftl_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apftl_program`
--
ALTER TABLE `apftl_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `apftl_submenu`
--
ALTER TABLE `apftl_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `distric`
--
ALTER TABLE `distric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member_f_edu`
--
ALTER TABLE `member_f_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_lingua`
--
ALTER TABLE `member_lingua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_n_edu`
--
ALTER TABLE `member_n_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_org_exp`
--
ALTER TABLE `member_org_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_work_exp`
--
ALTER TABLE `member_work_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subdistric`
--
ALTER TABLE `subdistric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apftl_election`
--
ALTER TABLE `apftl_election`
  ADD CONSTRAINT `apftl_election_ibfk_1` FOREIGN KEY (`id_distric`) REFERENCES `distric` (`id`),
  ADD CONSTRAINT `apftl_election_ibfk_2` FOREIGN KEY (`id_subdistric`) REFERENCES `subdistric` (`id`);

--
-- Constraints for table `apftl_program`
--
ALTER TABLE `apftl_program`
  ADD CONSTRAINT `apftl_program_ibfk_1` FOREIGN KEY (`id_partner`) REFERENCES `apftl_partner` (`id`),
  ADD CONSTRAINT `apftl_program_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `apftl_c_program` (`id`),
  ADD CONSTRAINT `apftl_program_ibfk_3` FOREIGN KEY (`id_distric`) REFERENCES `distric` (`id`),
  ADD CONSTRAINT `apftl_program_ibfk_4` FOREIGN KEY (`id_activity`) REFERENCES `apftl_activity` (`id`);

--
-- Constraints for table `member_f_edu`
--
ALTER TABLE `member_f_edu`
  ADD CONSTRAINT `member_f_edu_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `apftl_member` (`id`);

--
-- Constraints for table `member_lingua`
--
ALTER TABLE `member_lingua`
  ADD CONSTRAINT `member_lingua_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `apftl_member` (`id`);

--
-- Constraints for table `member_n_edu`
--
ALTER TABLE `member_n_edu`
  ADD CONSTRAINT `member_n_edu_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `apftl_member` (`id`);

--
-- Constraints for table `member_org_exp`
--
ALTER TABLE `member_org_exp`
  ADD CONSTRAINT `member_org_exp_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `apftl_member` (`id`);

--
-- Constraints for table `member_work_exp`
--
ALTER TABLE `member_work_exp`
  ADD CONSTRAINT `member_work_exp_ibfk_1` FOREIGN KEY (`id`) REFERENCES `apftl_member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
