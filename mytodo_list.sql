-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 10:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytodo_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `email`, `name`, `description`, `date`, `type`) VALUES
(9, '123@3', '111', '\r\n                1111', '2022-12-14', '111'),
(16, 'subham4mroy@gmail.com', 'money', '111\r\n                ', '2022-12-06', '222'),
(17, 'subham4mroy@gmail.com', 'honey', '\r\n                222', '2022-12-22', '22222rr'),
(18, '1111@1111111', 'web development', 'Complete the project of todo Lists. \r\n                ', '2022-12-31', 'College work');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `code`) VALUES
(1, 'pritam', 'sharma', '123@3', 'c4ca4238a0b923820dcc509a6f75849b', '91388e163502852c075b289dc06f0cca'),
(2, '123', '123', '123@qw', 'c4ca4238a0b923820dcc509a6f75849b', '857d2aec2dff03bbb4853e88caac04b4'),
(3, '123', '2', '123@df', '202cb962ac59075b964b07152d234b70', '0c5dd2a6613f96e14a60694ede1c6f08'),
(4, '123', '234', 'subham4mroy@gmail.com', '202cb962ac59075b964b07152d234b70', '6bed61224f6309c55eeadb537ec0e2d7'),
(5, '123', '222', '123@123', '698d51a19d8a121ce581499d7b701668', '63f6a4e835d9365b462399025f65e90b'),
(6, '123', '222', '123@df2', 'c4ca4238a0b923820dcc509a6f75849b', '09d0e778004026bc0c0a8d45de775f54'),
(7, 'Pritam', 'Sharma', '123@gmail.com', '202cb962ac59075b964b07152d234b70', '5f4746ab2e93d48bb57a4981d7ae5859'),
(8, 'Saurav', '11', '11@111', '6512bd43d9caa6e02c990b0a82652dca', 'de1691fa1a28b7e207ba583b778ff63c'),
(9, '1231111', '11111', '123@1231', '6512bd43d9caa6e02c990b0a82652dca', '25bf683d821051e25396c07317c7fbf5'),
(10, 'Pritam', '123', '1111@11', 'c4ca4238a0b923820dcc509a6f75849b', '35cd26d198b4252be213e1e475bb3297'),
(11, '1111', '11111111', '1111@1111111', '6512bd43d9caa6e02c990b0a82652dca', '5780f4226dfb2a0d9e00ef13f59f043a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
