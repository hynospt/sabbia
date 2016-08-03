-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 09:06 PM
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
(4, 0, 'yono', 'yono', 'oyon', '2016-08-03 16:41:15', '2016-08-03 16:41:15'),
(5, 0, 'yono', 'yono', 'oyon', '2016-08-03 16:42:57', '2016-08-03 16:42:57'),
(8, 1, 'Joko Widodo', 'President', 'Lorem Ipsum LBa', '2016-08-03 17:57:56', '2016-08-03 17:57:56'),
(9, 1, 'Joko Widodo 2', 'President', 'Lorem Ipsum LBa', '2016-08-03 18:14:41', '2016-08-03 18:14:41');

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
(1, 'Product Name', 'Product Name', 'Product Name', 'vicon20160731164759dummy-picture-1.jpg', 'Product Name', 'Product Name', 'bg120160731164759dummy-picture-1.jpg', 'Caption Left', 'Caption Left', 'Caption Left', 'Caption dq', 'Caption asda', 'bg220160731164759dummy-picture-1.jpg', 'Caption Left', 'Product Name', '', '2016-07-31 16:47:59', 'Page');

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
  `tag` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_icon`
--

INSERT INTO `service_icon` (`id`, `services_id`, `bgImage`, `coverImage`, `tag`, `created_at`, `updated_at`) VALUES
(1, 1, 'dq', 'dq', '', '2016-07-30 09:36:51', '2016-07-30 10:06:56'),
(2, 1, 'zz', 'zz', '', '2016-07-30 09:37:40', '2016-07-30 10:07:01'),
(3, 1, 'dqdq', 'qweqe', '', '2016-07-30 09:37:50', '2016-07-30 10:07:06'),
(4, 1, 'qweqweq', 'weqwe', '', '2016-07-30 09:38:35', '2016-07-30 09:38:35'),
(5, 0, '', '', '', '2016-08-03 18:16:52', '2016-08-03 18:16:52'),
(6, 0, '', '', '', '2016-08-03 18:17:14', '2016-08-03 18:17:14'),
(7, 0, '', '', '', '2016-08-03 18:18:01', '2016-08-03 18:18:01'),
(8, 0, 'D:\\xampp\\tmp\\php8310.tmp', 'D:\\xampp\\tmp\\php8311.tmp', '', '2016-08-03 18:38:35', '2016-08-03 18:38:35'),
(9, 0, 'D:\\xampp\\tmp\\phpE30F.tmp', 'D:\\xampp\\tmp\\phpE310.tmp', '', '2016-08-03 18:40:05', '2016-08-03 18:40:05'),
(10, 0, 'D:\\xampp\\tmp\\php200B.tmp', 'D:\\xampp\\tmp\\php200C.tmp', '', '2016-08-03 18:45:48', '2016-08-03 18:45:48'),
(11, 0, 'D:\\xampp\\tmp\\php7DBE.tmp', 'D:\\xampp\\tmp\\php7DBF.tmp', '', '2016-08-03 18:46:12', '2016-08-03 18:46:12'),
(12, 0, 'D:\\xampp\\tmp\\php9399.tmp', 'D:\\xampp\\tmp\\php939A.tmp', '', '2016-08-03 18:46:18', '2016-08-03 18:46:18'),
(13, 0, 'D:\\xampp\\tmp\\phpDE31.tmp', 'D:\\xampp\\tmp\\phpDE32.tmp', '', '2016-08-03 18:46:37', '2016-08-03 18:46:37'),
(14, 1, 'D:\\xampp\\tmp\\phpC353.tmp', 'D:\\xampp\\tmp\\phpC354.tmp', '', '2016-08-03 18:47:36', '2016-08-03 18:47:36'),
(15, 1, 'D:\\xampp\\tmp\\php91C1.tmp', 'D:\\xampp\\tmp\\php91C2.tmp', '', '2016-08-03 18:48:29', '2016-08-03 18:48:29'),
(16, 1, 'D:\\xampp\\tmp\\php674E.tmp', 'D:\\xampp\\tmp\\php674F.tmp', '', '2016-08-03 18:50:30', '2016-08-03 18:50:30'),
(17, 1, 'D:\\xampp\\tmp\\php2ED6.tmp', 'D:\\xampp\\tmp\\php2ED7.tmp', '', '2016-08-03 18:51:20', '2016-08-03 18:51:20'),
(18, 1, 'D:\\xampp\\tmp\\php646F.tmp', 'D:\\xampp\\tmp\\php6470.tmp', '', '2016-08-03 18:51:34', '2016-08-03 18:51:34'),
(19, 1, 'D:\\xampp\\tmp\\php46F3.tmp', 'D:\\xampp\\tmp\\php46F4.tmp', '', '2016-08-03 18:52:32', '2016-08-03 18:52:32'),
(20, 1, 'D:\\xampp\\tmp\\php4D75.tmp', 'D:\\xampp\\tmp\\php4D76.tmp', '', '2016-08-03 18:54:44', '2016-08-03 18:54:44'),
(21, 0, 'bg20160803185444Ok-icon.png', 'cover20160803185444dummy-background-1.jpg', '', '2016-08-03 18:54:44', '2016-08-03 18:54:44'),
(22, 1, 'D:\\xampp\\tmp\\phpB2B9.tmp', 'D:\\xampp\\tmp\\phpB2BA.tmp', '', '2016-08-03 18:55:10', '2016-08-03 18:55:10'),
(23, 0, 'bg20160803185510dummy-background-1.jpg', 'cover20160803185510Ok-icon.png', '', '2016-08-03 18:55:10', '2016-08-03 18:55:10'),
(24, 1, 'D:\\xampp\\tmp\\php93BF.tmp', 'D:\\xampp\\tmp\\php93C0.tmp', '', '2016-08-03 18:57:13', '2016-08-03 18:57:13'),
(25, 1, 'bg20160803185713Ok-icon.png', 'cover20160803185713dummy-background-1.jpg', 'asdasd', '2016-08-03 18:57:13', '2016-08-03 18:57:13'),
(26, 1, '', '', '', '2016-08-03 18:57:33', '2016-08-03 18:57:33'),
(27, 1, 'bg20160803185737dummy-background-1.jpg', '', '', '2016-08-03 18:57:37', '2016-08-03 18:57:37'),
(28, 1, '', '', '', '2016-08-03 18:57:41', '2016-08-03 18:57:41'),
(29, 1, 'bg20160803185751hg.txt', 'cover20160803185751hg.txt', 'asdasd', '2016-08-03 18:57:51', '2016-08-03 18:57:51'),
(30, 1, 'bg20160803190539hg.txt', 'cover20160803190539hg.txt', 'asdasdasdasdasdasd', '2016-08-03 19:05:39', '2016-08-03 19:05:39');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_icon`
--
ALTER TABLE `service_icon`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
