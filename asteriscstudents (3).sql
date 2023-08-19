-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 12:09 PM
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
-- Database: `asteriscstudents`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_details`
--

CREATE TABLE `branch_details` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch_details`
--

INSERT INTO `branch_details` (`id`, `branch_name`) VALUES
(1, 'Bhande Plot'),
(2, 'Tirangaa Square'),
(3, 'Friends Colony');

-- --------------------------------------------------------

--
-- Table structure for table `certificatetb`
--

CREATE TABLE `certificatetb` (
  `sr` int(11) NOT NULL,
  `course` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `remark` varchar(45) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificatetb`
--

INSERT INTO `certificatetb` (`sr`, `course`, `date`, `remark`, `email`, `cer`) VALUES
(1, 'C ', '12/06/2022', 'Complete', 'harshal45mandale@gmail.com', 'MyCertificate.pdf'),
(2, 'C++', '17/05/2022', 'Complete', 'harshal45mandale@gmail.com', 'Immortals of Meluha by Amish Tripathi-1-1 (1) (1).pdf'),
(3, 'Java', '21/12/2022', 'Pending', 'harshal45mandale@gmail.com', NULL),
(4, 'Adv Java', '12/03/2023', 'Pending', 'harshal45mandale@gmail.com', NULL),
(5, 'C Lang', '12/06/2022', 'Pending', 'anuj12pandhre@gmail.com', NULL),
(6, 'C++', '17/07/2022', 'Pending', 'anuj12pandhre@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `google_drive_link` varchar(255) NOT NULL,
  `course_fees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course_name`, `course_duration`, `google_drive_link`, `course_fees`) VALUES
(1, 'C Programming with Project', '2 months', 'abcd', 4800),
(2, 'C++ Programming with Project', '2 months', 'abcd', 4800),
(3, 'C & C++ Programming with Project', '3 months', 'abcd', 7000),
(4, 'Core Java Programming with Project', '4 months', 'abcd', 25000),
(5, 'Advance Java Programming with Project', '2 months', 'abcd', 38000),
(6, 'Industrial Java Training (Full Stack)', '6 months', 'abcd', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `fees_details`
--

CREATE TABLE `fees_details` (
  `Stu_inv` int(11) DEFAULT NULL,
  `Stu_inv_date` varchar(255) DEFAULT NULL,
  `Stu_due_date` varchar(255) DEFAULT NULL,
  `Stu_total` double DEFAULT NULL,
  `Stu_status` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees_details`
--

INSERT INTO `fees_details` (`Stu_inv`, `Stu_inv_date`, `Stu_due_date`, `Stu_total`, `Stu_status`, `email`) VALUES
(1111, '26-01-2023', '31--01-2023', 58000, 'Completed', '	anuj12pandhre@gmail.com'),
(2222, '27-01-2023', '01-02-2023', 55000, 'Pending', 'raju67bhasme@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `student_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `dob` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `parent_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `e_number` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `batch_timing` varchar(255) NOT NULL,
  `tutor_name` varchar(255) NOT NULL,
  `photofile` varchar(255) NOT NULL,
  `docfile` varchar(255) NOT NULL,
  `total_fees` varchar(255) NOT NULL,
  `paid_fees` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `admission_date` varchar(255) NOT NULL,
  `receipt_number` varchar(255) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`student_id`, `full_name`, `gender`, `dob`, `email`, `student_number`, `parent_number`, `address`, `city`, `pin_code`, `work`, `c_name`, `e_number`, `branch`, `course`, `batch_timing`, `tutor_name`, `photofile`, `docfile`, `total_fees`, `paid_fees`, `payment_type`, `cheque_no`, `admission_date`, `receipt_number`, `Password`) VALUES
(1, 'Harshal Bhumeshwar Mandale', 'Female', '2023-02-04', 'harshal45mandale@gmail.com', '7744952465', '8376754537', 'Shani Chowk', 'Katol', '41512', 'prof', 'Nabira Mahavidyalaya', '12431', 'Bhande Plot', 'Full Stack Java', '1pm-2pm', 'Chandrakant Sir', 'pngegg (2).png', 'xyz', '65000', '30000', 'Cash', 'xyz', '12/05/2022', '121', 'Harshal12'),
(2, 'Raju Bhasme', 'Male', '23/05/2000', 'raju67bhasme@gmail.com', '9878656778', '7654548905', 'Sharda Chowk', 'Katol', '41512', 'prof', 'Full Stack Java', 'xyz', 'Bhande Plot', 'Offline', '12pm-2pm', 'Chandrakant Sir', 'download (1).jpg', 'xyz', '65000', '30000', 'UPI', 'xyz', '6/05/2022', '12342', 'raju12'),
(3, 'Anuj Pandhre', 'Male', '12/02/1997', 'anuj12pandhre@gmail.com', '9845623289', '9921887421', 'Aheri', 'Gadchiroli', '441281', 'Developer', 'KDK College', 'xyz', 'Hingna', 'Full Stack Java', '12pm-2pm', 'Pooja Sao', 'xyz', 'xyz', '65000', '30000', 'Cash', 'none', '12/05/2022', '12414', 'anuj12'),
(4, 'Nayan Ingle', 'Male', '2023-04-30', 'nayan11@gmail.com', '9359086635', '2145451677', 'Ambika Nagar', 'Nagpur', '441805', 'student', 'GH RAISONI', '44125847745', 'Bhande Plot', 'C & C++ Programming with Project', '11.00 TO 12.00 PM', 'Chandrakant Sir', '16.jpg', 'DOC-644e38afb089e6.14617885.png', '7000', '2000', 'cash', '', '2023-04-30', '963872987', 'nayan12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificatetb`
--
ALTER TABLE `certificatetb`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
