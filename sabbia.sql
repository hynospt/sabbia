-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2016 at 07:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabbia`
--

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(1) NOT NULL,
  `footerLogo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `vendorImages` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `headerRow1` varchar(255) NOT NULL,
  `text1Row1` varchar(255) NOT NULL,
  `text2Row1` varchar(255) NOT NULL,
  `videoIcon` varchar(255) NOT NULL,
  `videoText` varchar(255) NOT NULL,
  `videoUrl` varchar(255) NOT NULL,
  `bgImageRow1` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `unitType` varchar(255) NOT NULL,
  `text1Row2` varchar(255) NOT NULL,
  `text2Row2` varchar(255) NOT NULL,
  `bgImageRow2` varchar(255) NOT NULL,
  `portfolioTag` varchar(255) NOT NULL,
  `portfolioImage` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `headerRow1`, `text1Row1`, `text2Row1`, `videoIcon`, `videoText`, `videoUrl`, `bgImageRow1`, `productPrice`, `productName`, `unitType`, `text1Row2`, `text2Row2`, `bgImageRow2`, `portfolioTag`, `portfolioImage`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Headings', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ', '', 'Watch Our Story Here', '#', '#', 'Rp 1,230,000,000', 'Diesel Fuel Floor Price', 'Barel', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\n', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\n', '#', 'Every sector of the industry that is in need of refined oil will be able to engage with our services. ', '#', '', '', 'Page');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$2i0MzXuMdwGPDlMPH3Xw3uq78LRSmU3Y/ZK5HayOs8cGv6Ln8Al.u', 'admin@admin.com', 'Haryono', '6i1nAdrd4F4laOAGnTo4z0KjOggKGXrkDoSm4aBVCRxgR7j2FlWGBaLmpae2', '2016-07-25 14:51:19', '2016-07-26 15:16:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
