-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2016 at 06:03 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

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
  `photo` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `board_id`, `fullname`, `role`, `text`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '1', '1', '', '2016-07-28 18:46:29', '2016-07-29 19:11:27'),
(4, 1, 'qweq', 'eq', 'we', '', '2016-08-02 13:31:49', '2016-08-02 13:31:49'),
(5, 1, 'qweq', 'eq', 'we', '', '2016-08-02 13:32:01', '2016-08-02 13:32:01'),
(6, 1, 'a', 'dsasd', 'asdasd', '', '2016-08-02 13:32:05', '2016-08-02 13:32:05'),
(7, 1, 'ads', 'asdasd', 'asd', '', '2016-08-02 14:14:19', '2016-08-02 14:14:19'),
(8, 1, 'fullname ', 'fullname ', 'fullname ', '', '2016-08-02 14:14:23', '2016-08-02 14:14:23'),
(9, 1, 'fullname ', 'fullname ', 'fullname ', '', '2016-08-02 14:14:27', '2016-08-02 14:14:27'),
(10, 1, 'fullname ', 'fullname ', 'fullname ', '', '2016-08-02 14:14:28', '2016-08-02 14:14:28'),
(11, 1, 'fullname ', 'fullname ', 'fullname ', '', '2016-08-02 14:14:33', '2016-08-02 14:14:33'),
(13, 1, 'fullname ', 'fullname ', 'fullname ', '', '2016-08-02 14:15:33', '2016-08-02 14:15:33'),
(14, 1, 'fullname ', 'fullname ', 'fullname ', '', '2016-08-02 14:15:35', '2016-08-02 14:15:35'),
(15, 1, 'fullname ', 'fullname ', 'fullname ', '', '2016-08-02 14:15:37', '2016-08-02 14:15:37'),
(16, 1, 'tesa', 'dasd', 'asd', '', '2016-08-02 14:23:38', '2016-08-02 14:23:38'),
(17, 1, 'zzz', 'zzz', 'zzz', '', '2016-08-02 14:23:53', '2016-08-02 14:23:53'),
(18, 0, '', '', '', '', '2016-08-02 15:02:04', '2016-08-02 15:02:04'),
(19, 0, '', '', '', '', '2016-08-02 15:02:58', '2016-08-02 15:02:58'),
(20, 0, 'qweqweqwe', 'ezazzz', 'zzzxxcccxxx', '', '2016-08-02 15:54:31', '2016-08-02 15:54:31'),
(21, 0, 'qweqweqwe', 'ezazzz', 'zzzxxcccxxx', '', '2016-08-02 15:54:52', '2016-08-02 15:54:52'),
(22, 0, 'xxxx', 'xxxxx', 'xxxx', '', '2016-08-02 15:55:22', '2016-08-02 15:55:22'),
(23, 0, 'Colton Charles', 'Ut velit consequatur sit ipsam odit aut facere voluptas voluptas nihil quia dolores aut ut exercitationem deserunt eiusmod', 'Aut laboris a distinctio. Atque alias rem obcaecati fugit, minim cupiditate in laboriosam, porro nulla eu qui odit fugiat.', '', '2016-08-02 15:59:12', '2016-08-02 15:59:12'),
(24, 1, 'Aaron Nelson', 'Esse sit elit iure nihil iure fuga Cumque corrupti qui aut culpa anim odio', 'Consequuntur et accusamus nobis aliquip distinctio. Nisi voluptatem molestiae accusantium maiores in id pariatur? Ut rerum quia eos.', '', '2016-08-02 16:00:03', '2016-08-02 16:00:03');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
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
