-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 12:31 PM
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
-- Database: `suvform`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `sl` int(11) NOT NULL,
  `questiontitle` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `op4` text NOT NULL,
  `orans` text NOT NULL,
  `mark` int(11) NOT NULL,
  `type` text NOT NULL,
  `picname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`sl`, `questiontitle`, `op1`, `op2`, `op3`, `op4`, `orans`, `mark`, `type`, `picname`) VALUES
(1, 'Quick sort time complexity in wrost case ?', 'O(nlogn)', 'O(logn)', 'O(n^2)', 'O(1)', 'O(n^2)', 1, 'mcq', ''),
(2, 'Best sorting algorithm is Merge Sort', 'True', 'False', '', '', 'True', 1, 'tf', ''),
(3, 'Who is He ?', 'god', 'RDJ', 'Iron man', '2 and 3 both', '2 and 3 both', 1, 'imgmcq', 'download05292022103642.jpg'),
(4, 'floyd warshall Algorithm time complexity is -', 'O(1)', 'O(n^3)', 'O(n^2)', 'O(n^n)', 'O(n^3)', 1, 'mcq', ''),
(5, 'IPv6 Internet Protocol address is represented as eight groups of four Octal digits.', 'True', 'False', '', '', 'False', 1, 'tf', ''),
(6, 'OS Name is -', 'ubuntu', 'Kali linux', 'Parot OS', 'Dos', 'Kali linux', 1, 'imgmcq', 'kali05292022122001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
