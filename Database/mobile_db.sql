-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 03:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monile_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `find`
--

CREATE TABLE `find` (
  `id` int(11) NOT NULL,
  `nameFind` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `find`
--

INSERT INTO `find` (`id`, `nameFind`) VALUES
(1, 'Vui'),
(2, 'Buồn'),
(3, 'Tức giận'),
(4, 'Hạnh phúc');

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

CREATE TABLE `lib` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `find_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`id`, `title`, `content`, `date`, `image`, `user_id`, `find_id`) VALUES
(11, 'Tối nay ở nhà ngủ', 'Đi chơi với mấy bạn', 'Sun Nov 27 16:09:06 GMT+07:00 2022', '8151ca89a0debb46d4b94eea15148d461669540146133.jpg', 'linhlinh1', 3),
(15, 'Coi đá banh', 'Trận BaLan đá với Arg', 'Sun Nov 27 16:08:24 GMT+07:00 2022', 'ro-si-9-153050062599913663152431669540104957.jpg', 'linhlinh1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `name`, `content`, `date`, `user_id`, `time`) VALUES
('11258', 'Ngày mai đi học', 'Môn Android Studio', '27-11-2022', 'linhlinh1', '4:10 PM'),
('12558', 'Học bài buổi tối', 'Ăn bắp rang + Coi phim hoạt hình', '27-11-2022', 'linhlinh1', '4:06 PM'),
('19233', 'Làm việc nhà', 'Quét nhà + Lau nhà', '25-11-2022', 'linhlinh1', '9:34 AM'),
('59880', 'Chuẩn bị thuyết trình môn Android', 'Seminar giữa kỳ', '26-11-2022', 'linhlinh1', '8:55 AM'),
('62285', 'Coi Messi đá banh', 'Trận đá với đội tuyển Ba Lan', '1-12-2022', 'linhlinh1', '2:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fullname` varchar(255) NOT NULL,
  `ngaySinh` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `namelogin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fullname`, `ngaySinh`, `phone`, `namelogin`, `password`, `image`) VALUES
('Nguyễn Thanh Quỳnh Linh', '21-6-2002', 981984623, 'linhlinh1', '123', '28003-16311719501669539839875.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `find`
--
ALTER TABLE `find`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lib`
--
ALTER TABLE `lib`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `find_id` (`find_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`namelogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `find`
--
ALTER TABLE `find`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lib`
--
ALTER TABLE `lib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lib`
--
ALTER TABLE `lib`
  ADD CONSTRAINT `lib_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`namelogin`),
  ADD CONSTRAINT `lib_ibfk_2` FOREIGN KEY (`find_id`) REFERENCES `find` (`id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`namelogin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
