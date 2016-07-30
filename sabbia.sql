-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 10:11 PM
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
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `id` int(1) NOT NULL,
  `mainTag` varchar(255) NOT NULL,
  `mainBgImage` varchar(255) NOT NULL,
  `mainLogo` varchar(255) NOT NULL,
  `titleRow2` varchar(255) NOT NULL,
  `titleRow3` varchar(255) NOT NULL,
  `contentRow3` varchar(255) NOT NULL,
  `videoUrl1` varchar(255) NOT NULL,
  `videoUrl2` varchar(255) NOT NULL,
  `videoCaption1` varchar(255) NOT NULL,
  `videoCaption2` varchar(255) NOT NULL,
  `text2Row2` varchar(255) NOT NULL,
  `philosophyImg` varchar(255) NOT NULL,
  `philosophyTitle` varchar(255) NOT NULL,
  `philosophyContent` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`id`, `mainTag`, `mainBgImage`, `mainLogo`, `titleRow2`, `titleRow3`, `contentRow3`, `videoUrl1`, `videoUrl2`, `videoCaption1`, `videoCaption2`, `text2Row2`, `philosophyImg`, `philosophyTitle`, `philosophyContent`, `type`, `created_at`, `updated_at`) VALUES
(1, 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'Page', '2016-07-28 18:56:59', '2016-07-29 19:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `chain`
--

CREATE TABLE `chain` (
  `id` int(1) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `content1` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `content2` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chain`
--

INSERT INTO `chain` (`id`, `title1`, `content1`, `image1`, `title2`, `content2`, `image2`, `created_at`, `updated_at`) VALUES
(1, '1231', '231', '231', '23', '132123', '123', '2016-07-29 19:37:49', '2016-07-29 19:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE `connect` (
  `id` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `bgImage` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connect`
--

INSERT INTO `connect` (`id`, `title`, `content`, `bgImage`, `created_at`, `updated_at`) VALUES
(1, 'title ', 'title ', 'asdasda', '2016-07-30 20:01:12', '2016-07-30 20:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `design_partners`
--

CREATE TABLE `design_partners` (
  `id` int(11) NOT NULL,
  `pageId` int(1) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `board_id` int(1) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `board_id`, `fullname`, `role`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '1', '1', '2016-07-28 18:46:29', '2016-07-29 19:11:27'),
(2, 1, 'asdf', 'qwer', 'zxc', '2016-07-28 18:46:30', '2016-07-29 19:11:19'),
(3, 1, 'e', '3', '3', '2016-07-28 18:46:56', '2016-07-29 19:11:35');

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
-- Table structure for table `legal`
--

CREATE TABLE `legal` (
  `id` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mainTitle` varchar(255) NOT NULL,
  `subTitle1` varchar(255) NOT NULL,
  `subTitle2` varchar(255) NOT NULL,
  `subContent1` varchar(255) NOT NULL,
  `subContent2` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legal`
--

INSERT INTO `legal` (`id`, `title`, `mainTitle`, `subTitle1`, `subTitle2`, `subContent1`, `subContent2`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'aq', 'sdaasda', 'sdasdsa', 'sdsdaasd', 'asdasd', 'dsa', 'asdasda', 'dsasdsdasda', '2016-07-29 19:29:42', '2016-07-29 19:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `pageId` int(1) NOT NULL,
  `partnerLogo` varchar(255) NOT NULL,
  `partnerCompanyName` varchar(255) NOT NULL,
  `partnerContent` varchar(255) NOT NULL,
  `partnerBackgroundImage` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `pageId`, `partnerLogo`, `partnerCompanyName`, `partnerContent`, `partnerBackgroundImage`, `created_at`, `updated_at`) VALUES
(1, 1, 'partnerLogo ', 'partnerLogo ', 'partnerLogo ', 'asdasd', '2016-07-30 19:30:11', '2016-07-30 19:30:11'),
(2, 1, 'asd', 'partnerBackgroundImage ', 'partnerBackgroundImage mpanyName ', 'partnerBackgroundImage ', '2016-07-30 19:30:28', '2016-07-30 19:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_pages`
--

CREATE TABLE `portfolio_pages` (
  `pageId` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `bgImage` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `lastRowTitle` varchar(255) NOT NULL,
  `partners` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_pages`
--

INSERT INTO `portfolio_pages` (`pageId`, `title`, `bgImage`, `logo`, `lastRowTitle`, `partners`, `type`, `created_at`, `updated_at`) VALUES
(1, 'title ', 'title ', 'title ', 'title ', 'title ', 'title ', '2016-07-30 18:58:52', '2016-07-30 18:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subTitle` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `title`, `subTitle`, `created_at`, `updated_at`) VALUES
(1, 'qqa', 'qqz', '2016-07-30 07:24:32', '2016-07-30 07:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `service_icon`
--

CREATE TABLE `service_icon` (
  `id` int(1) NOT NULL,
  `services_id` int(11) NOT NULL,
  `bgImage` varchar(255) NOT NULL,
  `coverImage` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_icon`
--

INSERT INTO `service_icon` (`id`, `services_id`, `bgImage`, `coverImage`, `created_at`, `updated_at`) VALUES
(1, 1, 'dq', 'dq', '2016-07-30 09:36:51', '2016-07-30 10:06:56'),
(2, 1, 'zz', 'zz', '2016-07-30 09:37:40', '2016-07-30 10:07:01'),
(3, 1, 'dqdq', 'qweqe', '2016-07-30 09:37:50', '2016-07-30 10:07:06'),
(4, 1, 'qweqweq', 'weqwe', '2016-07-30 09:38:35', '2016-07-30 09:38:35');

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
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `legal`
--
ALTER TABLE `legal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_pages`
--
ALTER TABLE `portfolio_pages`
  ADD PRIMARY KEY (`pageId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `service_icon`
--
ALTER TABLE `service_icon`
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
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_icon`
--
ALTER TABLE `service_icon`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
