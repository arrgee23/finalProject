-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2016 at 12:49 PM
-- Server version: 5.1.61-community
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erudite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=185 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`) VALUES
(1, 'A.J.C Bose Road'),
(2, 'Agarpara'),
(3, 'Ahiritola'),
(4, 'Airport 1 no Gate'),
(5, 'Ajoynagar'),
(6, 'Alambazar'),
(7, 'Alipore'),
(8, 'Amharst Street'),
(9, 'Ananda Palit'),
(10, 'Ariadaha'),
(11, 'arihitola'),
(12, 'Ashok Nagar'),
(13, 'Avishikta'),
(14, 'B. T. Road'),
(15, 'Babughat'),
(16, 'Bagbazar'),
(17, 'Baghajatin'),
(18, 'Baguihati'),
(19, 'Baidyabati'),
(20, 'Ballygunge'),
(21, 'Ballygunge Circular Road'),
(22, 'Banhugli'),
(23, 'Bansdroni'),
(24, 'Barabazar Market'),
(25, 'Baranagar'),
(26, 'Barasat'),
(27, 'Barisha'),
(28, 'Barrackpore'),
(29, 'Baruipur'),
(30, 'Beckbagan'),
(31, 'Behala'),
(32, 'Belgharia'),
(33, 'Belghoria'),
(34, 'Beliaghata'),
(35, 'Bhatpara'),
(36, 'Bhawanipur'),
(37, 'Bhowanipore'),
(38, 'Bijoygarh'),
(39, 'Birati'),
(40, 'Boral'),
(41, 'Bosepukur'),
(42, 'Bowbazar'),
(43, 'Budge Budge'),
(44, 'Camac Street'),
(45, 'Central Avenue'),
(46, 'Central Road'),
(47, 'Chakraberia'),
(48, 'Chandannagar'),
(49, 'Chandni chowk'),
(50, 'Chetla'),
(51, 'Chingrighata'),
(52, 'Chinsurah'),
(53, 'Chowringhee'),
(54, 'CIT Road'),
(55, 'City Center'),
(56, 'College Street'),
(57, 'Dakshineswar'),
(58, 'Dalhousie'),
(59, 'Dankuni'),
(60, 'Desopriya Park'),
(61, 'Dhaka Kalibari'),
(62, 'Dhakuria'),
(63, 'Dum Dum'),
(64, 'Dum Dum Chiriamore'),
(65, 'Dum Dum Metro'),
(66, 'Dumdum'),
(67, 'Dunlop'),
(68, 'Durganagar'),
(69, 'Elgin Road'),
(70, 'EM Bypass'),
(71, 'Entally'),
(72, 'Esplanade'),
(73, 'Ganguli Bagan'),
(74, 'Gardenreach'),
(75, 'Garfa'),
(76, 'Garia'),
(77, 'riahat'),
(78, 'Girish Park'),
(79, 'Golf Green'),
(80, 'Golpark'),
(81, 'Gorabazar'),
(82, 'Habra'),
(83, 'Haltu'),
(84, 'Hastings'),
(85, 'Hati Bagan'),
(86, 'Hazra'),
(87, 'Hedua Park'),
(88, 'Hiland Park'),
(89, 'Howrah'),
(90, 'Jadavpur'),
(91, 'Jodhpur Garden'),
(92, 'Jodhpur Park'),
(93, 'Kalighat'),
(94, 'Kalikapur'),
(95, 'Kalindi'),
(96, 'Kalyani'),
(97, 'Kamalgazi'),
(98, 'Kamarhati'),
(99, 'Kankurgachi'),
(100, 'Karunamoyee'),
(101, 'Kasba'),
(102, 'Kestopur'),
(103, 'Khanna Cinema'),
(104, 'Khardah'),
(105, 'Kiderpore'),
(106, 'Lake Gardens'),
(107, 'Lake Town'),
(108, 'Liluah'),
(109, 'Lords More'),
(110, 'Madanmohan Tala'),
(111, 'Madhyamgram'),
(112, 'Mahamayatala'),
(113, 'Maheshtala'),
(114, 'Manicktala'),
(115, 'Maniktala'),
(116, 'Minto Park'),
(117, 'Moulali'),
(118, 'Mudiali'),
(119, 'Nagerbazar'),
(120, 'Naihati'),
(121, 'Naktala'),
(122, 'Narendrapur'),
(123, 'Narkeldanga'),
(124, 'Netaji Nagar'),
(125, 'New Alipore'),
(126, 'New Barrackpur'),
(127, 'New Town'),
(128, 'Nimta'),
(129, 'Paikpara'),
(130, 'Palta'),
(131, 'Park Circus'),
(132, 'Park Street'),
(133, 'Parnasree Palli'),
(134, 'Patuli'),
(135, 'Peerless Hospital'),
(136, 'Phoolbagan'),
(137, 'Prince Anwar Shah Connector'),
(138, 'Prince Anwar Shah More'),
(139, 'Purbachal Kalitala Road'),
(140, 'Rabindra Sadan'),
(141, 'Rahara'),
(142, 'Rajabazar'),
(143, 'Rajarahat'),
(144, 'Rajpur'),
(145, 'Ramlal Bazar'),
(146, 'Ranikuthi'),
(147, 'Rashbehari'),
(148, 'Ruby Hospital'),
(149, 'Salkia'),
(150, 'Salt Lake'),
(151, 'Santoshpur'),
(152, 'Satgachi'),
(153, 'Sealdah'),
(154, 'Selimpur'),
(155, 'Shaker Bazar'),
(156, 'Shibpur'),
(157, 'Shreebhumi'),
(158, 'Shrimani Bazar'),
(159, 'Shyambazar'),
(160, 'Shyamnagar'),
(161, 'Shymbazar'),
(162, 'Silpara'),
(163, 'Singhabari'),
(164, 'Sinthee Road'),
(165, 'Sodepur'),
(166, 'Sonarpur'),
(167, 'South City'),
(168, 'Southern Avenue'),
(169, 'Sova Bazar'),
(170, 'Sreerampore'),
(171, 'Survey Park'),
(172, 'Talla Park Avenue'),
(173, 'Tangra'),
(174, 'Taratala'),
(175, 'Tegharia'),
(176, 'Tetultala'),
(177, 'Thakurpukur'),
(178, 'Theatre Road'),
(179, 'Tiljala'),
(180, 'Tollygunge'),
(181, 'Topsia'),
(182, 'Ultadanga'),
(183, 'Uttarpara'),
(184, 'VIP Road');

-- --------------------------------------------------------

--
-- Table structure for table `executive_table`
--

CREATE TABLE IF NOT EXISTS `executive_table` (
  `ex_id` int(10) NOT NULL AUTO_INCREMENT,
  `ex_user_id` varchar(50) NOT NULL,
  `ex_password` varchar(50) NOT NULL,
  `ex_name` varchar(50) NOT NULL,
  PRIMARY KEY (`ex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `executive_table`
--

INSERT INTO `executive_table` (`ex_id`, `ex_user_id`, `ex_password`, `ex_name`) VALUES
(1, 'executive_user1', 'secure', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `segment`
--

CREATE TABLE IF NOT EXISTS `segment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `segment`
--

INSERT INTO `segment` (`id`, `name`) VALUES
(34, 'Nursery Level'),
(35, 'Class 1 - 5'),
(36, 'Class 6 - 8'),
(37, 'Class 9 - 10'),
(38, 'Special Education'),
(39, 'Class 11 - 12'),
(40, 'College Level'),
(41, 'Engineering Subjects'),
(42, 'Law Subjects'),
(43, 'MBA / BBA'),
(44, 'Engineering Entrance & IITJEE'),
(45, 'Medical Entrance & AIPMT'),
(46, 'CA / CS / CPT'),
(47, 'Competitive Exams'),
(48, 'Test Preparation'),
(49, 'Languages'),
(50, 'English Speaking'),
(51, 'Technology'),
(52, 'Graphics & Multimedia'),
(53, 'Programming Language'),
(54, 'Web Technologies'),
(55, 'Basic Computer / Office'),
(56, 'Application/Enterprise Platform'),
(57, 'Data Science / DBMS'),
(58, 'Certification'),
(59, 'Sports'),
(60, 'Music'),
(61, 'Dance'),
(62, 'Hobby Classes'),
(63, 'Business Training');

-- --------------------------------------------------------

--
-- Table structure for table `segmentsubject`
--

CREATE TABLE IF NOT EXISTS `segmentsubject` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `segmentId` int(10) NOT NULL,
  `subjectId` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `segmentId` (`segmentId`),
  KEY `subjectId` (`subjectId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=192 ;

--
-- Dumping data for table `segmentsubject`
--

INSERT INTO `segmentsubject` (`id`, `segmentId`, `subjectId`) VALUES
(6, 34, 4),
(7, 34, 5),
(8, 34, 6),
(9, 34, 7),
(10, 34, 8),
(11, 34, 9),
(12, 34, 10),
(13, 35, 11),
(14, 35, 12),
(15, 35, 13),
(16, 35, 14),
(17, 35, 15),
(18, 35, 16),
(19, 35, 17),
(20, 35, 18),
(21, 35, 19),
(22, 35, 20),
(23, 35, 21),
(24, 35, 22),
(25, 35, 23),
(26, 35, 24),
(27, 35, 25),
(28, 35, 26),
(29, 35, 27),
(30, 35, 28),
(31, 36, 29),
(32, 36, 30),
(33, 36, 31),
(34, 36, 32),
(35, 36, 33),
(36, 36, 34),
(37, 36, 35),
(38, 36, 37),
(39, 36, 38),
(40, 36, 39),
(41, 36, 40),
(42, 36, 41),
(43, 36, 42),
(44, 36, 43),
(45, 36, 44),
(46, 36, 45),
(47, 36, 46),
(48, 36, 47),
(49, 36, 48),
(50, 36, 49),
(51, 36, 50),
(52, 36, 51),
(53, 36, 52),
(54, 36, 53),
(55, 36, 54),
(56, 36, 55),
(57, 36, 56),
(58, 36, 57),
(59, 36, 58),
(60, 36, 59),
(61, 36, 60),
(62, 36, 61),
(63, 36, 62),
(64, 37, 29),
(65, 37, 30),
(66, 37, 31),
(67, 37, 32),
(68, 37, 33),
(69, 37, 34),
(70, 37, 35),
(71, 37, 37),
(72, 37, 38),
(73, 37, 39),
(74, 37, 40),
(75, 37, 41),
(76, 37, 42),
(77, 37, 43),
(78, 37, 44),
(79, 37, 45),
(80, 37, 46),
(81, 37, 47),
(82, 37, 48),
(83, 37, 49),
(84, 37, 50),
(85, 37, 51),
(86, 37, 52),
(87, 37, 53),
(88, 37, 54),
(89, 37, 55),
(90, 37, 56),
(91, 37, 57),
(92, 37, 58),
(93, 37, 59),
(94, 37, 60),
(95, 37, 61),
(96, 37, 62),
(97, 38, 63),
(98, 38, 64),
(99, 38, 65),
(100, 38, 66),
(101, 38, 67),
(102, 38, 68),
(103, 38, 69),
(104, 38, 70),
(105, 39, 71),
(106, 39, 72),
(107, 39, 73),
(108, 39, 74),
(109, 39, 75),
(110, 39, 76),
(111, 39, 77),
(112, 39, 78),
(113, 39, 79),
(114, 39, 80),
(115, 39, 81),
(116, 39, 82),
(117, 39, 83),
(118, 39, 84),
(119, 39, 85),
(120, 39, 86),
(121, 39, 87),
(122, 39, 88),
(123, 39, 89),
(124, 39, 90),
(125, 39, 91),
(126, 39, 92),
(127, 39, 93),
(128, 39, 94),
(129, 39, 95),
(130, 39, 96),
(131, 39, 97),
(132, 39, 98),
(133, 39, 99),
(134, 39, 100),
(135, 39, 101),
(136, 39, 102),
(137, 39, 103),
(138, 39, 104),
(139, 39, 105),
(140, 39, 106),
(141, 39, 107),
(142, 40, 108),
(143, 40, 109),
(144, 40, 110),
(145, 40, 111),
(146, 40, 112),
(147, 40, 113),
(148, 40, 114),
(149, 40, 115),
(150, 40, 116),
(151, 40, 117),
(152, 40, 118),
(153, 40, 119),
(154, 40, 120),
(155, 40, 121),
(156, 40, 122),
(157, 40, 123),
(158, 40, 124),
(159, 40, 125),
(160, 40, 126),
(161, 40, 127),
(162, 40, 128),
(163, 40, 129),
(164, 40, 130),
(165, 40, 131),
(166, 40, 132),
(167, 40, 133),
(168, 40, 134),
(169, 40, 135),
(170, 40, 136),
(171, 40, 137),
(172, 40, 138),
(173, 40, 139),
(174, 40, 140),
(175, 40, 141),
(176, 40, 142),
(177, 40, 143),
(178, 40, 144),
(179, 40, 145),
(180, 40, 146),
(181, 40, 147),
(182, 40, 148),
(183, 40, 149),
(184, 40, 150),
(185, 40, 151),
(186, 40, 152),
(187, 40, 153),
(188, 40, 154),
(189, 40, 155),
(190, 40, 156),
(191, 40, 157);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=158 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(4, 'All Subjects'),
(5, 'Counting Skills'),
(6, 'Drawing & Painting'),
(7, 'Nursery Rhymes'),
(8, 'Reading Skills'),
(9, 'Story Telling	'),
(10, 'Writing Skills'),
(11, 'Abacus Training'),
(12, 'All Subjects'),
(13, 'Biology	Chemistry'),
(14, 'Computer'),
(15, 'Cyber Olympiad'),
(16, 'Effective Communication'),
(17, 'English'),
(18, 'EVS'),
(19, 'Geography'),
(20, 'Hindi'),
(21, 'History'),
(22, 'Language'),
(23, 'Mathematics'),
(24, 'Mental Maths'),
(25, 'Olympiad Exam Preparation'),
(26, 'Physics'),
(27, 'Robotics'),
(28, 'Science'),
(29, 'Science Olympiad'),
(30, 'Special Education'),
(31, 'Spell Bee Training'),
(32, 'Vedic Math'),
(33, 'Abacus Training	'),
(34, 'Accountancy	'),
(35, 'Algebra	'),
(36, 'All Subjects	'),
(37, 'Bengali	'),
(38, 'Biology	'),
(39, 'Chemistry	'),
(40, 'Commerce Subjects	'),
(41, 'Computer Science	'),
(42, 'Economics	'),
(43, 'Effective Communication	'),
(44, 'English	'),
(45, 'EVS	'),
(46, 'Geography	'),
(47, 'Hindi	'),
(48, 'History	'),
(49, 'Marathi	'),
(50, 'Mathematics	'),
(51, 'Mental Maths	'),
(52, 'NSTSE	'),
(53, 'NTSE	'),
(54, 'Olympiad Exam Preparation	'),
(55, 'Physics	'),
(56, 'Robotics	'),
(57, 'School level computer	'),
(58, 'Social Studies	'),
(59, 'Special Education	'),
(60, 'Spell Bee Training	'),
(61, 'Vedic Maths	'),
(62, 'Zoology'),
(63, 'Art of Living'),
(64, 'Behavioural Disabilities'),
(65, 'Cerebral Palsy'),
(66, 'Hearing Impairment'),
(67, 'Learning Disabilities'),
(68, 'Mental Retardation'),
(69, 'Physical Disability'),
(70, 'Slow Learners'),
(71, 'Accountancy'),
(72, 'Algebra'),
(73, 'Anatomy'),
(74, 'Anthropology'),
(75, 'Arts Group'),
(76, '	Bengali'),
(77, 'Bio Technology'),
(78, 'Biology	Botany'),
(79, 'Business Maths'),
(80, 'Business Organisation'),
(81, 'Business Studies'),
(82, 'Chemistry'),
(83, 'Commerce Subjects'),
(84, 'Computer Science'),
(85, 'Costing	Economics'),
(86, 'Education'),
(87, 'English'),
(88, 'EVS'),
(89, 'Fashion Study'),
(90, 'Food & Nutrition'),
(91, 'Geography'),
(92, 'Hindi'),
(93, 'History'),
(94, 'Home Science'),
(95, 'IT & Computer Subjects'),
(96, 'KVPY Exam'),
(97, 'Logic'),
(98, 'Mathematics'),
(99, 'Philosophy'),
(100, 'Physics'),
(101, 'Physiology'),
(102, 'Political Science'),
(103, 'Psychology'),
(104, 'Robotics'),
(105, 'Sociology'),
(106, 'Statistics'),
(107, 'Zoology'),
(108, 'Accountancy'),
(109, 'Actuarial Science'),
(110, 'Anthropology'),
(111, 'Arts Group'),
(112, 'Auditing'),
(113, 'B.Arch'),
(114, 'B.Com Coaching'),
(115, 'B.Ed / M.Ed	B.Sc Coaching'),
(116, 'BA Coaching'),
(117, 'Banking & Finance'),
(118, 'BBA Coaching'),
(119, 'BCA Coaching'),
(120, 'Bengali'),
(121, 'Bio Chemistry'),
(122, 'Bio Technology'),
(123, 'Bio-informatics'),
(124, 'Bio-medical'),
(125, 'Biology'),
(126, 'Botany'),
(127, 'Business Maths'),
(128, 'Chemistry'),
(129, 'Computer Science'),
(130, 'Costing'),
(131, 'Direct Tax'),
(132, 'Economics'),
(133, 'Education'),
(134, 'Electronics'),
(135, 'English'),
(136, 'Financial Management'),
(137, 'Food & Nutrition'),
(138, 'Geography'),
(139, 'Hindi'),
(140, 'History'),
(141, 'Home Science'),
(142, 'Hotel Management'),
(143, 'Indirect Tax'),
(144, 'IT'),
(145, 'Mass communication'),
(146, 'Mathematics'),
(147, 'MicroBiology'),
(148, 'Pharma Subjects'),
(149, 'Philosophy'),
(150, 'Physics'),
(151, 'Physiology'),
(152, 'Political Science'),
(153, 'Polytechnic	Psychology'),
(154, 'Public Administration'),
(155, 'Sociology'),
(156, 'Statistics'),
(157, 'Zoolog');

-- --------------------------------------------------------

--
-- Table structure for table `teacherarea`
--

CREATE TABLE IF NOT EXISTS `teacherarea` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `teacherId` int(10) NOT NULL,
  `areaId` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teacherId` (`teacherId`,`areaId`),
  KEY `areaId` (`areaId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teachersegmentsubject`
--

CREATE TABLE IF NOT EXISTS `teachersegmentsubject` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `teacherId` int(10) NOT NULL,
  `segmentsubjectId` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teacherId` (`teacherId`,`segmentsubjectId`),
  KEY `segmentsubjectId` (`segmentsubjectId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `teachersegmentsubject`
--

INSERT INTO `teachersegmentsubject` (`id`, `teacherId`, `segmentsubjectId`) VALUES
(26, 31, 6),
(25, 31, 13),
(27, 31, 32),
(28, 31, 70);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE IF NOT EXISTS `teacher_details` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_img` blob NOT NULL,
  `t_nm` varchar(60) NOT NULL,
  `t_dob` varchar(10) NOT NULL,
  `t_age` varchar(10) NOT NULL,
  `t_gen` varchar(10) NOT NULL,
  `t_married` varchar(10) NOT NULL,
  `t_ph` varchar(20) NOT NULL,
  `t_aph` varchar(20) NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_padd` varchar(100) NOT NULL,
  `t_cadd` varchar(100) NOT NULL,
  `t_area` varchar(100) NOT NULL,
  `t_carea` varchar(100) NOT NULL,
  `t_hqua` varchar(50) NOT NULL,
  `t_sub` varchar(50) NOT NULL,
  `t_ins` varchar(100) NOT NULL,
  `t_exp` varchar(10) NOT NULL,
  `t_cact` varchar(50) NOT NULL,
  `t_cv` longtext NOT NULL,
  `t_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `t_source` varchar(150) NOT NULL,
  `t_doneby` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`t_id`, `t_img`, `t_nm`, `t_dob`, `t_age`, `t_gen`, `t_married`, `t_ph`, `t_aph`, `t_email`, `t_padd`, `t_cadd`, `t_area`, `t_carea`, `t_hqua`, `t_sub`, `t_ins`, `t_exp`, `t_cact`, `t_cv`, `t_time`, `t_source`, `t_doneby`) VALUES
(31, 0x50686f746f732f3438383131395f3331313331323539323239373838345f313233333430393533315f6e2e6a7067, 'Amit Kumar', '2016-01-14', '29', 'Male', 'Unmarried', '9856232562', '985635623', 'c@s.b', 'abc', 'abc', 'sd', 'abc,abc', 'M.SC', 'Math', 'JU', '1', 'none', 'CVs/654242main_p1220b3k-fileminimizer-fileminimizer.jpg', '2016-01-03 18:30:00', 'MPT', 'user1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `segmentsubject`
--
ALTER TABLE `segmentsubject`
  ADD CONSTRAINT `segmentsubject_ibfk_1` FOREIGN KEY (`segmentId`) REFERENCES `segment` (`id`),
  ADD CONSTRAINT `segmentsubject_ibfk_2` FOREIGN KEY (`subjectId`) REFERENCES `subject` (`id`);

--
-- Constraints for table `teacherarea`
--
ALTER TABLE `teacherarea`
  ADD CONSTRAINT `teacherarea_ibfk_1` FOREIGN KEY (`teacherId`) REFERENCES `teacher_details` (`t_id`),
  ADD CONSTRAINT `teacherarea_ibfk_2` FOREIGN KEY (`areaId`) REFERENCES `area` (`id`);

--
-- Constraints for table `teachersegmentsubject`
--
ALTER TABLE `teachersegmentsubject`
  ADD CONSTRAINT `teachersegmentsubject_ibfk_1` FOREIGN KEY (`teacherId`) REFERENCES `teacher_details` (`t_id`),
  ADD CONSTRAINT `teachersegmentsubject_ibfk_2` FOREIGN KEY (`segmentsubjectId`) REFERENCES `segmentsubject` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
