-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2016 at 03:00 PM
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
(1, 'asdzxc', 'bg20160814045251dummy-picture-1.jpg', 'logo20160814045259Ok-icon.png', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'main', 'philosopy20160814045259Ok-icon.png', 'main', 'main', 'Page', '2016-07-28 18:56:59', '2016-08-14 04:52:59');

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
(1, '1231', '231', '1_img20160814044920dummy-background-2.jpg', '23', '132123', '2_img20160814044828dummy-picture-1.jpg', '2016-07-29 19:37:49', '2016-08-14 04:49:20');

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
(1, 'asdasd', 'z', 'bg20160814113922Ok-icon.png', '2016-07-30 20:01:12', '2016-08-14 11:42:48');

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
  `photo` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `board_id`, `fullname`, `photo`, `role`, `text`, `created_at`, `updated_at`) VALUES
(4, 0, 'yono', '', 'yono', 'oyon', '2016-08-03 16:41:15', '2016-08-03 16:41:15'),
(5, 0, 'yono', '', 'yono', 'oyon', '2016-08-03 16:42:57', '2016-08-03 16:42:57'),
(13, 0, 'Joko Widodo', 'photo20160814051108Ok-icon.png', 'fasle', 'Lorem Ipsum LBa', '2016-08-14 05:11:08', '2016-08-14 05:11:08'),
(16, 1, 'Goceng', 'photo20160814061251Ok-icon.png', 'fasle', 'Lorem Ipsum LBa', '2016-08-14 06:12:31', '2016-08-14 06:12:51');

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
(1, 'Product Name', 'Product Name', 'Product Name', 'vicon20160811181122dummy-picture-1.jpg', 'Product Name', 'Product Name', 'bg120160811181113Ok-icon.png', 'Caption Left', 'Caption Left', 'Caption Left', 'Caption dq', 'Caption asda', 'bg220160811181104Ok-icon.png', 'Caption Left', 'Product Name', '', '2016-08-11 18:11:22', 'Page');

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
(1, 'z', 'asd', 'subContent1', 'subContent1', 'subContent1', 'subContent1', '1_img20160813170738dummy-picture-1.jpg', '2_img20160813170738dummy-background-1.jpg', '2016-07-29 19:29:42', '2016-08-13 17:28:59');

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
(1, 'asdasdas', 'bg20160814081514dummy-picture-1.jpg', 'logo20160807172608dummy-picture-1.jpg', 'title asdasd', 'asdasd', 'title ', '2016-07-30 18:58:52', '2016-08-14 08:15:14');

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
(1, 'asdasd', 'qqz', '2016-07-30 07:24:32', '2016-08-09 15:50:17');

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
(35, 1, 'bg20160814082754dummy-picture-1.jpg', 'cover20160814082754Ok-icon.png', 'zxczxczxc', '2016-08-14 08:27:54', '2016-08-14 08:27:54'),
(36, 1, 'bg20160814082808Ok-icon.png', 'cover20160814082808Ok-icon.png', 'zzz', '2016-08-14 08:28:08', '2016-08-14 08:28:08'),
(37, 1, 'bg20160814082838dummy-background-1.jpg', 'cover20160814082838dummy-background-1.jpg', 'zxc', '2016-08-14 08:28:38', '2016-08-14 08:28:38');

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
  `photo` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'asdas', '$2y$10$oaWuoiU67LpZGdT42TfPtObGN..NI0Pj6Xn9dA16OyvDiBf6F6Zzi', 'admin@admin.com', 'zxc', 'asdas20160814125937dummy-background-1.jpg', 'jvbZh7ttQvGCZxtreLo4bQpBW2WAWpRofUoSEgwfmI2WNHqIxo3QBnDTjpla', '2016-08-14 12:17:35', '2016-08-14 12:59:37');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `service_icon`
--
ALTER TABLE `service_icon`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
