-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 12:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fgci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(7) NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int(7) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `title`, `description`, `date`) VALUES
(14, 'asfasdf', 'image_3.png', '2022-06-09 23:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `office_staff`
--

CREATE TABLE `office_staff` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_staff`
--

INSERT INTO `office_staff` (`id`, `name`, `designation`, `mobile`, `img`, `fb_id`) VALUES
(1, 'Parimol Das', 'Cleaner', '01716206507', 'stf-4.jpg', ''),
(2, 'Shamoli Rani Das', 'Cleaner', '01738044108', 'stf-5.jpg', ''),
(3, 'Jafar Iqbal', 'Laboratory Assistant', '01814713208', 'stf-1.jpg', ''),
(4, 'Shahidul Islam', 'Cashier', '01688827604', 'stf-3.jpg', ''),
(5, 'Surman Ali', 'Librarian', '0175644511', 'stf-2.jpg', ''),
(6, 'Taifur Rahman', 'Office Assistant', '01754209451', 'stf-6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(7) NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `image`) VALUES
(8, 'pht-000012.jpg'),
(9, 'pht-000013.jpg'),
(10, 'pht-000011.jpg'),
(11, 'pht-000010.jpg'),
(12, 'collage_slider3.jpg'),
(13, 'collage_slider2.jpg'),
(14, 'collage_slider1.jpg'),
(15, 'pht-000004.jpg'),
(16, 'pht-000002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `roll`, `grade`, `gpa`, `result`, `semester`) VALUES
(11, 929410, '4.00/3.50/4.00/2.75/3.00/3.25/3.75', '3.79', 'Passed', 'First'),
(12, 453024, '4.00/3.50/4.00/2.75/3.00/3.25', '3.72', 'Passed', 'Second'),
(13, 725201, '4.00/3.50/4.00/2.75/3.00/3.25/3.75', '4.00', 'Passed', 'Third');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(7) NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `title`, `description`, `session`, `department`, `semester`) VALUES
(1, 'TCT first semester 2nd shift', 'rtn-tct-1-2-17-18.jpg', '17-18', 'Telecommunication Technology', 'First'),
(2, 'DTNT first semester 1st shift', 'rtn-dtnt-1-1-18-19.jpg', '18-19', 'Data Telecommunication & Networking Technology', 'First'),
(3, 'CST first semester 1st shift', 'rtn-cst-1-1-18-19.jpg', '18-19', 'Computer Science Technology', 'First'),
(4, 'DTNT first semester second shift', 'rtn-dtnt-1-2-18-19.jpg', '18-19', 'Data Telecommunication & Networking Technology', 'First'),
(5, 'CST fourth semester 1st shift', 'rtn-cst-4-1-18-19.jpg', '18-19', 'Computer Science Technology', 'Fourth'),
(6, 'CST first semester 2nd shift', 'rtn-cst-1-2-18-19.jpg', '18-19', 'Computer Science Technology', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` int(11) NOT NULL,
  `shift` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `shift`, `registration`, `date_of_birth`, `session`, `img`, `father_name`, `mother_name`, `blood_group`, `department`, `semester`) VALUES
(1, 'MOSAMMAT HAMIDA JANNAT BINTI', 170900, 'First shift', '1500982729', '', '18-19', 'sample.jpg', '', '', '', 'Computer Science Technology', 'Fifth'),
(2, 'NAZMUN NAHAR TASNIM', 170901, 'First shift', '1500982727', '', '18-19', 'sample.jpg', '', '', '', 'Computer Science Technology', 'Fifth'),
(3, 'MADHOBI AZAD', 170902, 'First shift', '1500982723', '', '18-19', 'sample.jpg', '', '', '', 'Computer Science Technology', 'Fifth'),
(4, 'SAIMA SULTANA', 170902, 'First shift', '1500982723', '', '18-19', 'sample.jpg', '', '', '', 'Computer Science Technology', 'Fifth'),
(5, 'JANNATUL TAZ TONIMA', 170906, 'First shift', '1500982705', '', '18-19', 'sample.jpg', '', '', '', 'Computer Science Technology', 'Fifth'),
(6, 'AKRAM HOSSAIN', 170907, 'First shift', '1500982702', '', '18-19', 'sample.jpg', '', '', '', 'Computer Science Technology', 'Fifth'),
(7, 'MOHAMAD OSMAN GONI MOLLAH', 170908, 'First shift', '1500982695', '', '18-19', 'sample.jpg', '', '', '', 'Computer Science Technology', 'Fifth'),
(8, 'IMAM HOSSEN', 170909, 'First shift', '1500982688', '', '18-19', 'sample.jpg', '', '', '', 'Computer Science Technology', 'Fifth'),
(9, 'MD. NUR NOBI', 170809, 'First shift', '1500982547', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(10, 'SUMAYA BINTE YOUSUF BHUIYAN', 170810, 'First shift', '1500982544', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(11, 'JANNATUR NUR SADIA', 170811, 'First shift', '1500982542', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(12, 'AFRANUL HOQUE BHUYAN', 170812, 'First shift', '1500982539', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(13, 'MAHMUDUL HASAN', 170813, 'First shift', '1500982531', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(14, 'IFFAT TABASSUM GENY', 170814, 'First shift', '1500982526', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(15, 'SABRINA SULTANA', 170815, 'First shift', '1500982525', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(16, 'ZAHEDUL ISLAM', 170816, 'First shift', '1500982509', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(17, 'MD. TAREK HOSSAIN', 170817, 'First shift', '1500982508', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(18, 'UMMA HAFSA', 170818, 'First shift', '1500982500', '', '18-19', 'sample.jpg', '', '', '', 'Data Telecommunication & Networking Technology', 'Fifth'),
(19, 'MOHONA AKTER', 170991, 'First shift', '1500982939', '', '18-19', 'sample.jpg', '', '', '', 'Telecommunication Technology', 'Fifth'),
(20, 'HAMIDA AKTHER', 170992, 'First shift', '1500982931', '', '18-19', 'sample.jpg', '', '', '', 'Telecommunication Technology', 'Fifth'),
(21, 'PRANTO MOJUMDER', 170993, 'First shift', '1500982930', '', '18-19', 'sample.jpg', '', '', '', 'Telecommunication Technology', 'Fifth'),
(22, 'MUHAMMAD ABDULLAH AL NOMAN', 170994, 'First shift', '1500982917', '', '18-19', 'sample.jpg', '', '', '', 'Telecommunication Technology', 'Fifth'),
(23, 'MD. SHAKIBUL ISLAM', 170995, 'First shift', '1500982916', '', '18-19', 'sample.jpg', '', '', '', 'Telecommunication Technology', 'Fifth'),
(24, 'TANVIR AHAMMAD', 170996, 'First shift', '1500982914', '', '18-19', 'sample.jpg', '', '', '', 'Telecommunication Technology', 'Fifth'),
(25, 'AOYAN SAHA', 170997, 'First shift', '1500982912', '', '18-19', 'sample.jpg', '', '', '', 'Telecommunication Technology', 'Fifth'),
(26, 'SHATABDI RAHA', 170998, 'First shift', '1500982911', '', '18-19', 'sample.jpg', '', '', '', 'TCT', '5th'),
(27, 'Imraul Rafat', 929410, 'First shift', '1509482705', '', '19-20', 'sample.jpg', 'Abu Yousuf', 'Rozija Akter', 'B+', 'Computer Science Technology', 'First'),
(28, 'Rafayet Rakib', 725201, 'Second', '1500982500', '', '18-19', 'sample.jpg', 'Rayhan Uddin', 'Kulsum Khatun', 'O-', 'Telecommunication Technology', 'Third'),
(29, 'Borhan Uddin', 453024, 'First shift', '1500982508', '', '18-19', 'sample.jpg', 'Kuddus Ali', 'Selina Ali', 'AB+', 'Data Telecommunication & Networking Technology', 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `code`, `name`, `semester`, `department`) VALUES
(1, 65711, 'Bangla', 'Second', 'Computer Science Technology'),
(2, 65712, 'English', 'Second', 'Computer Science Technology'),
(3, 65812, 'Physical Education & Life Skill\r\nDevelopment', 'First', 'Computer Science Technology'),
(4, 65911, 'Mathematics-I', 'First', 'Computer Science Technology'),
(5, 65912, 'Physics-I', 'Second', 'Computer Science Technology'),
(6, 66611, 'Computer Application', 'First', 'Computer Science Technology'),
(7, 66712, 'Electrical Engineering\r\nFundamentals', 'First', 'Computer Science Technology'),
(8, 66621, 'Database Application', 'Second', 'Computer Science Technology'),
(9, 65921, 'Mathematics -2', 'Second', 'Computer Science Technology'),
(10, 66623, 'Graphics Design-I', 'Second', 'Computer Science Technology'),
(11, 66823, 'Analog Electronics', 'Second', 'Computer Science Technology'),
(12, 65921, 'Mathematics-2 ', 'Second', 'Computer Science Technology'),
(13, 65922, 'Physics-2', 'Second', 'Computer Science Technology'),
(14, 65722, 'Communicative English ', 'Third', 'Computer Science Technology'),
(15, 66631, 'Programming Essentials', 'Third', 'Computer Science Technology'),
(16, 66632, 'Web Design', 'Third', 'Computer Science Technology'),
(17, 66633, 'Graphics design-II', 'Third', 'Computer Science Technology'),
(19, 65931, 'Mathematics-3', 'Third', 'Computer Science Technology'),
(20, 65913, 'Chemistry', 'First', 'Computer Science Technology'),
(21, 65811, 'Social Science ', 'First', 'Computer Science Technology'),
(22, 65711, 'Bangla', 'First', 'Data Telecommunication & Networking Technology'),
(23, 65712, 'English', 'First', 'Data Telecommunication & Networking Technology'),
(24, 65911, 'Mathematics-I', 'First', 'Data Telecommunication & Networking Technology'),
(25, 65912, 'Physics-I', 'First', 'Data Telecommunication & Networking Technology'),
(26, 66712, 'Electrical Engineering\r\nFundamentals', 'First', 'Data Telecommunication & Networking Technology'),
(27, 68411, 'Data telecommunication\r\n& Networking Basics', 'First', 'Data Telecommunication & Networking Technology'),
(28, 65921, 'Mathematics -2', 'Second', 'Data Telecommunication & Networking Technology'),
(29, 65922, 'Physics -2', 'Second', 'Data Telecommunication & Networking Technology'),
(30, 65722, 'Communicative English', 'Second', 'Data Telecommunication & Networking Technology'),
(31, 65811, 'Social Science', 'Second', 'Data Telecommunication & Networking Technology'),
(32, 66823, 'Analog Electronics', 'Second', 'Data Telecommunication & Networking Technology'),
(33, 68426, 'Data Telecommunication\r\nFundamentals', 'Second', 'Data Telecommunication & Networking Technology'),
(34, 65812, 'Physical Education & Life Skill\r\nDevelopment', 'Third', 'Data Telecommunication & Networking Technology'),
(35, 65931, 'Mathematics -3', 'Third', 'Data Telecommunication & Networking Technology'),
(36, 65913, 'Chemistry', 'Third', 'Data Telecommunication & Networking Technology'),
(37, 66621, 'Database Application', 'Third', 'Data Telecommunication & Networking Technology'),
(38, 68431, 'Wireless Communication', 'Third', 'Data Telecommunication & Networking Technology'),
(39, 66631, 'Programming Essentials', 'Third', 'Data Telecommunication & Networking Technology'),
(40, 65811, 'Social Science', 'First', 'Telecommunication Technology'),
(41, 65812, 'Physical Education & Life\r\nSkill Development', 'First', 'Telecommunication Technology'),
(42, 65911, 'Mathematics-I', 'First', 'Telecommunication Technology'),
(43, 65913, 'Chemistry', 'First', 'Telecommunication Technology'),
(44, 66712, 'Electrical Engineering\r\nFundamentals', 'First', 'Telecommunication Technology'),
(45, 69411, 'Telecommunication\r\nBasics', 'First', 'Telecommunication Technology'),
(46, 69421, 'Telecommunication\r\nFundamentals', 'Second', 'Telecommunication Technology'),
(47, 66611, 'Computer Application', 'Second', 'Telecommunication Technology'),
(48, 65921, 'Mathematics-2', 'Second', 'Telecommunication Technology'),
(49, 65912, 'Physics-1', 'Second', 'Telecommunication Technology'),
(50, 65712, 'English', 'Second', 'Telecommunication Technology'),
(51, 65711, 'Bangla', 'Second', 'Telecommunication Technology'),
(52, 61011, 'Engineering Drawing ', 'Second', 'Telecommunication Technology'),
(53, 69431, 'Telecom Workshop Practice', 'Third', 'Telecommunication Technology'),
(54, 69432, 'Outside Plant', 'Third', 'Telecommunication Technology'),
(55, 66621, 'Database Application', 'Third', 'Telecommunication Technology'),
(56, 66823, 'Analog Electronics', 'Third', 'Telecommunication Technology'),
(57, 65931, 'Mathematics-3', 'Third', 'Telecommunication Technology'),
(58, 65922, 'Physics-2', 'Third', 'Telecommunication Technology'),
(59, 65722, 'Communicative English', 'Third', 'Telecommunication Technology'),
(60, 66612, 'Computer Laboratory\r\nPractices', 'First', 'Computer Science Technology'),
(61, 66823, 'Analog Electronics', 'Second', 'Computer Science Technology'),
(62, 66834, 'Digital Electronics', 'Third', 'Computer Science Technology'),
(63, 65922, 'Physics -II', 'Third', 'Computer Science Technology');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `designation`, `mobile`, `img`, `fb_id`, `department`) VALUES
(1, 'Afroja Jainab', 'Head of the Department', '01866787179', 'head_cst.jpg', '', 'Computer Science Technology'),
(2, 'Abdullah Al Mamun', 'Head of the Department', '01866787179', 'head_dtnt.jpg', '', 'Data Telecommunication & Networking Technology'),
(3, 'Sayed Mahbub Alam', 'Head of the Department', '01866787179', 'head_tct.jpg', '', 'Telecommunication Technology'),
(4, 'Debabrata Kuman Nath', 'Head of the Department', '01553375004', 'ci.jpg', '', 'RS'),
(5, 'Md. Dulal Hossain', 'Junior Instructor', '01724363463', 'teacher-1.jpg', '', 'RS'),
(6, 'Md. Sanuwar Hossain', 'Instructor', '01737463844', 'teacher-2.jpg', '', 'RS'),
(7, 'Rajib Kumar Gosh', 'Instructor', '01767911281', 'teacher-3.jpg', '', 'RS'),
(8, 'Md. Mojider Rahman', 'Instructor', '01843492677', 'teacher-4.jpg', '', 'RS'),
(9, 'Nahida Sultana', 'Junior Instructor', '01615645224', 'teacher-9.jpg', '', 'Data Telecommunication & Networking Technology'),
(10, 'Helal Uddin', 'Instructor', '01815645223', 'teacher-5.jpg', '', 'Data Telecommunication & Networking Technology'),
(11, 'Engr. Israk Hosain', 'Instructor', '01814722970', 'teacher-6.jpg', '', 'Data Telecommunication & Networking Technology'),
(12, 'Nazmun Nahar', 'Junior Instructor', '01616614292', 'teacher-7.jpg', '', 'Data Telecommunication & Networking Technology'),
(13, 'Mobarrah Akter Neera', 'Junior Instructor', '01828067490', 'teacher-8.jpg', '', 'Data Telecommunication & Networking Technology'),
(14, 'Tasnuba Begum', 'Junior Instructor', '01838599437', 'sample.jpg', '', 'Data Telecommunication & Networking Technology'),
(16, 'Abdus Sobhan Shamim', 'Instructor', '01813243436', 'teacher-11.jpg', '', 'Computer Science Technology'),
(17, 'Md. Nakibul Hassan', 'Instructor', '01710020761', 'teacher-12.jpg', '', 'Computer Science Technology'),
(18, 'Md. Muzahidul Islam', 'Junior Instructor', '017629927719', 'teacher-13.jpg', '', 'Computer Science Technology'),
(19, 'Md. Sohel Rana', 'Junior Instructor', '01625225586', 'teacher-14.jpg', '', 'Computer Science Technology'),
(20, 'M. A Moly', 'Junior Instructor', '01776290973', 'teacher-15.jpg', '', 'Computer Science Technology');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `img_path`, `is_admin`, `date_created`) VALUES
(20, 'Demo', 'demo@gmail.com', '123456', 'bottom_img_1.png', 1, '2022-06-07 07:29:09'),
(21, 'Rahat', 'rahat@gmail.com', '123456', 'logo.png', 1, '2022-06-07 08:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(5) NOT NULL,
  `video` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `video`) VALUES
(5, '3QhU9jd03a0'),
(6, 'tUXPnuKn6M8'),
(7, 'O753uuutqH8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_staff`
--
ALTER TABLE `office_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `office_staff`
--
ALTER TABLE `office_staff`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
