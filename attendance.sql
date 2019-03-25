-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
<<<<<<< HEAD
-- Generation Time: Feb 19, 2019 at 12:17 AM
=======
-- Generation Time: Mar 05, 2019 at 02:31 AM
>>>>>>> CRUD for student_class and take_attendance
=======
-- Generation Time: Mar 06, 2019 at 07:44 PM
>>>>>>> Updated
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `section` varchar(20) DEFAULT NULL,
  `subject_code` varchar(20) DEFAULT NULL,
<<<<<<< HEAD
<<<<<<< HEAD
  `semester` tinyint(4) DEFAULT NULL,
=======
  `semester` varchar(16) DEFAULT NULL,
>>>>>>> CRUD for student_class and take_attendance
=======
  `semester` varchar(16) DEFAULT NULL,
>>>>>>> Updated
  `academic_year` char(9) DEFAULT NULL,
  `schedule_day` varchar(10) DEFAULT NULL,
  `schedule_time` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> Updated
--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `section`, `subject_code`, `semester`, `academic_year`, `schedule_day`, `schedule_time`) VALUES
(10, 'BSIT-3A', 'IT-34', 'Second Semester', '2018-2019', 'TTH', '10:00-11:30 01:00-04:00'),
(11, 'BSIT-3A', 'IT-35', 'Second Semester', '2018-2019', 'MW', '07:00-08:30 01:00-04:00'),
(12, 'BSIT-3A', 'IT-36', 'Second Semester', '2018-2019', 'TTH', '08:30-10:00'),
(13, 'BSIT-3A', 'IT-37', 'Second Semester', '2018-2019', 'MWF', '08:30-10:00 08:00-11:00'),
(14, 'BSIT-3A', 'IT-38', 'Second Semester', '2018-2019', 'MW', '10:00-11:30 01:00-04:00'),
(15, 'BSIT-3A', 'MATH 36', 'Second Semester', '2018-2019', 'TTH', '07:00-08:30');

<<<<<<< HEAD
>>>>>>> CRUD for student_class and take_attendance
=======
>>>>>>> Updated
-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_number` varchar(20) NOT NULL,
<<<<<<< HEAD
<<<<<<< HEAD
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `name_extension` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

=======
=======
>>>>>>> Updated
  `first_name` varchar(50) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `name_extension` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_number`, `first_name`, `middle_initial`, `last_name`, `name_extension`) VALUES
('1110534', 'Diane', 'B', 'CordeÃ±o', ''),
<<<<<<< HEAD
('1234567', 'Da', '', 'Yang', ''),
('2017-00205', 'Yan', '', 'CordeÃ±o', '');

>>>>>>> CRUD for student_class and take_attendance
=======
('1234567', 'Dhai', '', 'Yan', ''),
('2017-00205', 'Yan', '', 'CordeÃ±o', ''),
('7654321', 'Da', '', 'Yang', '');

>>>>>>> Updated
-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
<<<<<<< HEAD
<<<<<<< HEAD
  `student_id` varchar(20) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

=======
=======
  `number` int(11) NOT NULL,
>>>>>>> Updated
  `id_number` varchar(20) DEFAULT NULL,
  `class_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class`
--

<<<<<<< HEAD
INSERT INTO `student_class` (`id_number`, `class_id`) VALUES
('1110534', 10);

>>>>>>> CRUD for student_class and take_attendance
=======
INSERT INTO `student_class` (`number`, `id_number`, `class_id`) VALUES
(3, '1234567', 10),
(4, '2017-00205', 10),
(5, '7654321', 10),
(6, '1110534', 10),
(7, '1110534', 13);

>>>>>>> Updated
-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_code` varchar(20) NOT NULL,
  `subject_title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Table structure for table `take_attendance`
--

CREATE TABLE `take_attendance` (
  `student_id` varchar(20) DEFAULT NULL,
  `time_stamp` varchar(15) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
=======
>>>>>>> Updated
--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `subject_title`) VALUES
<<<<<<< HEAD
=======
('FAV', 'RECESS TIME'),
('FAV1', 'LUNCH BREAK'),
>>>>>>> Updated
('IT-34', 'Database  Management 2'),
('IT-35', 'OOP 1'),
('IT-36', 'MIS'),
('IT-37', 'CCNA 3'),
('IT-38', 'Elective 1'),
('MATH 36', 'Probability and Statistics');
<<<<<<< HEAD
>>>>>>> CRUD for student_class and take_attendance
=======
>>>>>>> Updated

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
<<<<<<< HEAD
<<<<<<< HEAD
  ADD KEY `Subject_Code` (`subject_code`);
=======
  ADD KEY `fk_subject_subject_code` (`subject_code`);
>>>>>>> CRUD for student_class and take_attendance
=======
  ADD KEY `fk_subject_subject_code` (`subject_code`);
>>>>>>> Updated

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
<<<<<<< HEAD
<<<<<<< HEAD
  ADD KEY `Student_ID` (`student_id`),
  ADD KEY `Class_ID` (`class_id`);
=======
  ADD KEY `fk_student_id_number` (`id_number`),
  ADD KEY `fk_class_class_id` (`class_id`);
>>>>>>> CRUD for student_class and take_attendance
=======
  ADD PRIMARY KEY (`number`),
  ADD KEY `fk_student_id_number` (`id_number`),
  ADD KEY `fk_class_class_id` (`class_id`);
>>>>>>> Updated

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_code`);

--
<<<<<<< HEAD
<<<<<<< HEAD
-- Indexes for table `take_attendance`
--
ALTER TABLE `take_attendance`
  ADD KEY `Student_ID` (`student_id`),
  ADD KEY `Class_ID` (`class_id`);

--
=======
>>>>>>> CRUD for student_class and take_attendance
=======
>>>>>>> Updated
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
>>>>>>> CRUD for student_class and take_attendance
=======
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `student_class`
--
ALTER TABLE `student_class`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> Updated
--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
<<<<<<< HEAD
<<<<<<< HEAD
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`);
=======
  ADD CONSTRAINT `fk_subject_subject_code` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`) ON DELETE CASCADE;
>>>>>>> CRUD for student_class and take_attendance
=======
  ADD CONSTRAINT `fk_subject_subject_code` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`) ON DELETE CASCADE;
>>>>>>> Updated

--
-- Constraints for table `student_class`
--
ALTER TABLE `student_class`
<<<<<<< HEAD
<<<<<<< HEAD
  ADD CONSTRAINT `student_class_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id_number`),
  ADD CONSTRAINT `student_class_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `take_attendance`
--
ALTER TABLE `take_attendance`
  ADD CONSTRAINT `take_attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id_number`),
  ADD CONSTRAINT `take_attendance_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);
=======
  ADD CONSTRAINT `fk_class_class_id` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_student_id_number` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE;
>>>>>>> CRUD for student_class and take_attendance
=======
  ADD CONSTRAINT `fk_class_class_id` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_student_id_number` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE;
>>>>>>> Updated

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
