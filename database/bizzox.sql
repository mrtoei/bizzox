-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 01:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizzox`
--

-- --------------------------------------------------------

--
-- Table structure for table `xcustomer`
--

CREATE TABLE `xcustomer` (
  `id` int(11) UNSIGNED NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `country_code` varchar(5) DEFAULT NULL,
  `enabled` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xcustomer`
--

INSERT INTO `xcustomer` (`id`, `gender`, `first_name`, `last_name`, `email`, `phone`, `fax`, `country_code`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'M', 'Allie', 'Harkess', 'aharkess0@dedecms.com', '677 732 3663', '922 197 5103', 'CN', 1, '2019-09-15 07:40:21', '2020-01-03 01:25:32'),
(2, 'F', 'Delcine', 'sdfasdfdsf', NULL, '961 763 6019', '594 870 5412', 'CN', 1, '2019-11-13 05:09:14', '2020-07-20 12:48:48'),
(3, 'F', 'Vinni', 'Ostridge', 'vostridge2@who.int', '396 223 8947', '256 671 3762', 'CN', 0, '2020-02-01 14:19:39', '2020-07-03 04:13:21'),
(4, 'M', 'Tracey', 'Rothon', 'trothon3@wufoo.com', '544 660 6925', '308 952 9596', 'CN', 0, '2019-09-19 12:03:01', '2020-04-09 06:47:21'),
(5, 'M', 'Elias', 'Jansa', 'ejansa4@multiply.com', '237 962 8536', '444 883 8224', 'JP', 0, '2019-10-19 08:53:15', '2019-12-17 17:16:01'),
(6, 'M', 'Nicol', 'McCready', 'nmccready5@lulu.com', '821 761 0759', '880 635 7205', 'CN', 0, '2020-07-04 19:16:06', '2019-07-28 14:02:16'),
(7, 'F', 'Tony', 'Conahy', 'tconahy6@dmoz.org', '513 229 3239', '233 906 2506', 'CN', 0, '2019-08-07 17:14:39', '2019-10-22 10:40:52'),
(8, 'F', 'Letty', 'Paulon', 'lpaulon7@thetimes.co.uk', '434 382 3245', '787 957 8509', 'CN', 0, '2019-12-09 03:47:34', '2020-04-27 23:43:52'),
(9, 'M', 'Ephraim', 'Belcham', 'ebelcham8@nyu.edu', '434 581 6340', '325 114 8289', 'MY', 0, '2019-10-15 23:30:15', '2020-04-28 04:01:09'),
(10, 'M', 'Gaylord', 'Fratson', 'gfratson9@vimeo.com', '742 843 8838', '435 558 1958', 'CN', 0, '2020-07-14 04:05:10', '2019-09-22 15:59:14'),
(11, 'M', 'Elliot', 'Rosenblad', 'erosenblada@youtube.com', '336 862 7883', '502 264 3941', 'CN', 0, '2020-04-10 21:49:51', '2019-08-22 02:12:21'),
(12, 'M', 'Marco', 'Realph', 'mrealphb@baidu.com', '504 723 2630', '249 463 9087', 'CN', 0, '2020-04-12 12:52:36', '2020-04-04 17:56:10'),
(13, 'M', 'Levy', 'Crossthwaite', 'lcrossthwaitec@ucla.edu', '642 880 4186', '760 907 4350', 'CN', 0, '2020-05-02 17:11:08', '2020-06-15 09:13:40'),
(14, 'F', 'Geri', 'Cruwys', 'gcruwysd@slate.com', '170 838 1676', '307 320 7206', 'CN', 0, '2019-12-01 05:34:45', '2020-03-10 08:25:56'),
(15, 'F', 'Katinka', 'Keyzor', 'kkeyzore@amazon.co.jp', '325 293 1675', '628 368 4458', 'CN', 0, '2019-09-12 16:09:12', '2019-08-06 04:25:41'),
(16, 'M', 'Harper', 'Ruffey', 'hruffeyf@marketwatch.com', '379 621 4669', '704 873 8484', 'CN', 0, '2020-04-23 17:57:59', '2019-08-10 16:52:08'),
(17, 'F', 'Bernadine', 'Millom', 'bmillomg@google.nl', '877 456 8194', '631 712 8880', 'CN', 0, '2019-12-12 14:11:35', '2020-07-16 12:53:21'),
(18, 'F', 'Rina', 'Quare', 'rquareh@nifty.com', '597 170 5387', '995 236 8947', 'CN', 0, '2020-06-24 00:38:29', '2020-07-02 19:26:21'),
(19, 'F', 'Bert', 'Pichmann', 'bpichmanni@github.io', '538 188 8092', '914 188 8314', 'CN', 0, '2019-12-02 04:34:50', '2020-05-04 23:50:39'),
(20, 'M', 'Stacy', 'Buttriss', 'sbuttrissj@deviantart.com', '737 940 3342', '166 182 7620', 'CN', 0, '2019-11-05 11:34:50', '2020-06-17 22:37:53'),
(21, 'M', 'Jud', 'Tokell', 'jtokellk@shinystat.com', '734 922 1569', '767 267 9206', 'CN', 0, '2019-07-23 00:31:41', '2019-12-03 17:10:10'),
(22, 'F', 'Andria', 'St. Pierre', 'astpierrel@last.fm', '870 895 0677', '231 702 1814', 'CN', 0, '2019-07-23 12:04:35', '2020-01-19 21:59:05'),
(23, 'M', 'Care', 'Ciubutaro', 'cciubutarom@google.com', '953 185 7430', '753 897 0821', 'CN', 0, '2019-09-07 04:30:16', '2019-10-29 17:33:18'),
(24, 'M', 'Hyman', 'Donalson', 'hdonalsonn@nymag.com', '488 311 5532', '282 490 8273', 'CN', 0, '2020-01-08 00:54:56', '2020-05-29 00:11:13'),
(25, 'M', 'Wilt', 'Mitchall', 'wmitchallo@xinhuanet.com', '403 764 2816', '596 696 9648', 'CN', 0, '2020-06-24 11:14:35', '2019-08-26 04:25:21'),
(26, 'M', 'Cullin', 'Sedgebeer', 'csedgebeerp@tumblr.com', '339 175 3084', '555 277 0376', 'CN', 0, '2019-12-12 16:08:44', '2020-01-09 06:09:31'),
(27, 'F', 'Astrid', 'Coleman', 'acolemanq@360.cn', '675 318 1141', '925 108 5543', 'CN', 0, '2020-04-15 03:45:21', '2020-05-21 12:31:12'),
(28, 'M', 'Winny', 'Tubbs', 'wtubbsr@bandcamp.com', '269 858 8435', '801 153 6738', 'CN', 0, '2020-07-18 20:04:20', '2020-04-23 15:23:11'),
(29, 'F', 'Sharia', 'Harpin', 'sharpins@ed.gov', '836 800 1796', '785 762 2756', 'MY', 0, '2020-03-28 05:00:40', '2020-03-15 21:31:36'),
(30, 'M', 'Kelly', 'Rebert', 'krebertt@npr.org', '763 436 0967', '784 393 8806', 'CN', 0, '2019-09-05 11:56:04', '2020-06-01 22:18:30'),
(31, 'F', 'Betteanne', 'Iceton', 'bicetonu@weather.com', '584 906 1131', '235 207 5773', 'CN', 0, '2020-07-15 15:35:22', '2020-04-04 18:04:12'),
(32, 'F', 'Sara', 'Tankus', 'stankusv@furl.net', '886 417 3915', '321 883 0717', 'CN', 0, '2020-02-16 21:33:28', '2019-07-30 15:03:12'),
(33, 'F', 'Gwenore', 'Livezey', 'glivezeyw@prnewswire.com', '393 526 3479', '224 613 0375', 'CN', 0, '2019-12-13 22:12:31', '2020-04-30 14:29:56'),
(34, 'F', 'Laura', 'Rickeard', 'lrickeardx@gmpg.org', '943 629 7550', '981 651 8435', 'CN', 0, '2019-08-25 19:51:57', '2019-08-30 23:49:03'),
(35, 'F', 'Bernardine', 'Bearblock', 'bbearblocky@yolasite.com', '452 641 8724', '932 836 1090', 'CN', 0, '2019-09-11 11:10:19', '2020-02-26 16:13:16'),
(36, 'F', 'Sabra', 'MacSkeagan', 'smacskeaganz@buzzfeed.com', '387 886 0126', '856 815 6400', 'CN', 0, '2020-02-06 05:04:05', '2019-10-11 06:13:54'),
(37, 'F', 'Ardella', 'Chinnock', 'achinnock10@youtube.com', '581 287 9025', '105 692 1280', 'CN', 0, '2019-09-11 11:45:22', '2020-03-20 04:01:19'),
(38, 'F', 'Jorie', 'Gleader', 'jgleader11@nbcnews.com', '203 740 9063', '611 687 2783', 'CN', 0, '2019-11-12 23:53:58', '2020-01-11 09:17:09'),
(39, 'F', 'Brittan', 'Luetkemeyer', 'bluetkemeyer12@toplist.cz', '522 278 5591', '667 638 6731', 'CN', 0, '2020-05-28 13:38:23', '2020-06-15 01:30:38'),
(40, 'M', 'Far', 'Betteridge', 'fbetteridge13@unicef.org', '974 536 7201', '774 573 0879', 'CN', 0, '2019-10-04 12:17:24', '2019-11-11 11:37:03'),
(41, 'M', 'Broderick', 'Castellucci', 'bcastellucci14@creativecommons.org', '785 370 2998', '712 601 8992', 'CN', 0, '2019-12-24 07:58:42', '2019-09-21 10:37:46'),
(42, 'F', 'Bobette', 'Gymblett', 'bgymblett15@java.com', '381 237 3295', '600 916 2973', 'CN', 0, '2020-01-12 14:01:08', '2019-11-20 01:45:47'),
(43, 'M', 'Cirilo', 'Tamburo', 'ctamburo16@edublogs.org', '655 831 9240', '491 340 3353', 'CN', 0, '2019-11-04 11:38:27', '2019-10-20 17:47:48'),
(44, 'F', 'Sidonnie', 'Camolli', 'scamolli17@usda.gov', '551 670 1919', '383 926 3111', 'CN', 0, '2019-11-15 02:30:45', '2019-09-02 08:08:05'),
(45, 'F', 'Liana', 'Stanion', 'lstanion18@flavors.me', '735 335 0253', '904 235 4242', 'CN', 0, '2019-11-16 19:30:50', '2019-07-29 08:05:37'),
(46, 'F', 'Mercedes', 'Vallentine', 'mvallentine19@ow.ly', '427 717 0079', '666 867 8248', 'TH', 0, '2020-04-24 08:41:47', '2020-05-29 02:35:06'),
(47, 'F', 'Tasha', 'Emanuelov', 'temanuelov1a@github.io', '517 322 9906', '339 773 6965', 'CN', 0, '2020-05-28 06:51:41', '2020-02-01 11:06:14'),
(48, 'F', 'Devon', 'Cleve', 'dcleve1b@xinhuanet.com', '460 633 0570', '348 339 3421', 'CN', 0, '2020-02-16 09:59:11', '2019-12-27 22:41:16'),
(49, 'M', 'Carling', 'Blenkharn', 'cblenkharn1c@buzzfeed.com', '996 269 3337', '404 643 8456', 'CN', 0, '2019-08-06 02:22:04', '2020-02-03 12:25:08'),
(50, 'M', 'Van', 'Piggens', 'vpiggens1d@phpbb.com', '151 238 4819', '674 644 8542', 'CN', 0, '2020-01-28 19:50:23', '2020-07-07 17:58:15'),
(51, 'F', 'Aindrea', 'O\'Neill', 'aoneill1e@cdc.gov', '159 506 4945', '391 241 5671', 'CN', 0, '2020-02-23 07:59:01', '2020-02-24 17:02:44'),
(52, 'F', 'Lilyan', 'Marioneau', 'lmarioneau1f@wired.com', '655 681 4030', '897 481 1278', 'CN', 0, '2020-07-06 03:05:07', '2020-07-04 04:51:24'),
(53, 'F', 'Cassaundra', 'Itzakovitz', 'citzakovitz1g@bloglovin.com', '542 148 3906', '666 973 0643', 'CN', 0, '2019-08-16 15:19:41', '2020-05-28 09:13:01'),
(54, 'M', 'Monte', 'Howgego', 'mhowgego1h@cargocollective.com', '938 473 4431', '387 485 3185', 'CN', 0, '2020-05-27 11:01:38', '2020-01-24 19:01:20'),
(55, 'M', 'Spenser', 'Pepperrall', 'spepperrall1i@marketwatch.com', '702 534 5517', '217 956 8524', 'CN', 0, '2020-03-09 07:27:55', '2020-07-14 03:26:35'),
(56, 'F', 'Thalia', 'Meade', 'tmeade1j@wiley.com', '953 431 7523', '919 106 9437', 'CN', 0, '2019-08-07 06:36:07', '2020-03-11 10:46:03'),
(57, 'M', 'Thaddus', 'Tearny', 'ttearny1k@gnu.org', '706 500 7323', '300 462 9502', 'MY', 0, '2019-09-03 07:09:15', '2019-08-29 08:22:45'),
(58, 'F', 'Sabra', 'Jeckells', 'sjeckells1l@artisteer.com', '550 310 7656', '824 978 4314', 'LA', 0, '2020-06-12 13:54:13', '2019-12-17 06:38:46'),
(59, 'M', 'Grantham', 'Bannerman', 'gbannerman1m@nytimes.com', '546 131 6663', '116 787 9292', 'CN', 0, '2019-12-25 12:35:55', '2020-04-03 18:21:45'),
(60, 'M', 'Mart', 'Ranaghan', 'mranaghan1n@google.com.br', '712 858 4525', '825 213 0037', 'MY', 0, '2019-11-17 23:35:58', '2020-05-02 12:05:47'),
(61, 'M', 'Myrvyn', 'Oleksinski', 'moleksinski1o@shareasale.com', '619 708 8234', '503 411 5318', 'CN', 0, '2020-01-13 21:26:13', '2020-06-16 00:28:36'),
(62, 'F', 'Shell', 'Gerrans', 'sgerrans1p@cdbaby.com', '448 683 3967', '159 402 3472', 'CN', 0, '2020-05-31 01:34:36', '2019-07-30 13:29:06'),
(63, 'F', 'Athene', 'Ganford', 'aganford1q@studiopress.com', '640 844 3423', '995 970 6194', 'CN', 0, '2019-09-06 21:03:45', '2019-09-12 23:06:56'),
(64, 'F', 'Maggie', 'Maliffe', 'mmaliffe1r@si.edu', '355 637 5604', '962 307 3188', 'CN', 0, '2019-12-29 02:22:25', '2019-12-08 12:00:15'),
(65, 'F', 'Brooks', 'Crystal', 'bcrystal1s@phoca.cz', '109 502 4439', '369 219 8931', 'CN', 0, '2019-10-30 12:34:37', '2020-06-18 06:27:13'),
(66, 'F', 'Genny', 'Goodchild', 'ggoodchild1t@last.fm', '520 955 8162', '197 450 9832', 'CN', 0, '2019-10-24 11:27:42', '2020-03-01 15:13:00'),
(67, 'M', 'Kahaleel', 'Ambrozik', 'kambrozik1u@about.me', '169 979 3393', '234 391 2072', 'CN', 0, '2019-08-17 18:40:04', '2019-07-26 21:25:25'),
(68, 'M', 'Nap', 'Capey', 'ncapey1v@nsw.gov.au', '971 285 5713', '160 281 7471', 'CN', 0, '2019-08-07 14:06:25', '2020-02-24 09:56:13'),
(69, 'M', 'Sidney', 'Kirkebye', 'skirkebye1w@angelfire.com', '132 849 9995', '349 315 4997', 'CN', 0, '2019-09-06 10:20:22', '2019-08-15 09:16:36'),
(70, 'M', 'Griffie', 'Leber', 'gleber1x@163.com', '588 804 2005', '832 790 2126', 'CN', 0, '2020-01-26 13:29:45', '2020-03-05 21:30:20'),
(71, 'M', 'Cosimo', 'Boyda', 'cboyda1y@goo.gl', '797 991 3613', '451 593 3282', 'CN', 0, '2020-07-10 22:23:40', '2019-11-03 16:09:02'),
(72, 'F', 'Minnnie', 'Element', 'melement1z@flavors.me', '765 487 5149', '418 221 3862', 'TH', 0, '2020-05-21 10:36:08', '2019-09-11 08:33:10'),
(73, 'M', 'Ben', 'Cicerone', 'bcicerone20@nsw.gov.au', '664 404 6786', '388 572 1497', 'CN', 0, '2020-01-01 13:40:53', '2020-03-09 09:52:46'),
(74, 'M', 'Farlie', 'Firth', 'ffirth21@addtoany.com', '888 148 3689', '504 454 2140', 'CN', 0, '2019-11-21 00:36:17', '2020-06-26 02:29:00'),
(75, 'M', 'Jocko', 'Handlin', 'jhandlin22@vkontakte.ru', '116 540 1836', '507 835 7918', 'CN', 0, '2020-03-23 21:17:45', '2020-01-15 12:21:03'),
(76, 'F', 'Flossi', 'McGoon', 'fmcgoon23@europa.eu', '844 901 0037', '416 909 0856', 'CN', 0, '2019-09-20 15:25:54', '2019-09-23 07:39:38'),
(77, 'M', 'Stafford', 'Goldbourn', 'sgoldbourn24@odnoklassniki.ru', '524 396 1581', '945 880 3304', 'MY', 0, '2020-04-22 19:52:23', '2020-06-04 08:52:59'),
(78, 'M', 'Levi', 'O\'Beirne', 'lobeirne25@mac.com', '393 294 3214', '134 812 5954', 'CN', 0, '2019-12-09 04:48:06', '2020-06-18 19:40:07'),
(79, 'M', 'Ciro', 'Armit', 'carmit26@mysql.com', '432 180 4702', '137 865 6604', 'CN', 0, '2019-11-25 11:22:45', '2020-04-21 15:27:06'),
(80, 'F', 'Fancie', 'Gavini', 'fgavini27@wisc.edu', '613 147 6394', '562 534 7680', 'CN', 0, '2020-05-15 18:03:31', '2020-01-24 20:15:17'),
(81, 'M', 'Moises', 'Stredder', 'mstredder28@amazon.com', '738 586 9858', '837 171 5669', 'CN', 0, '2019-11-05 22:41:35', '2020-05-27 06:35:12'),
(82, 'M', 'Richmond', 'Dagleas', 'rdagleas29@google.ca', '388 417 5458', '484 260 4170', 'CN', 0, '2019-10-14 14:17:27', '2019-08-17 08:30:15'),
(83, 'F', 'Antonia', 'Clayden', 'aclayden2a@instagram.com', '150 993 3016', '827 107 8983', 'CN', 0, '2020-06-14 05:27:34', '2020-03-26 06:36:36'),
(84, 'M', 'Markos', 'D\'Antuoni', 'mdantuoni2b@thetimes.co.uk', '377 578 4666', '126 192 1945', 'JP', 0, '2020-02-03 14:48:51', '2020-07-14 17:18:48'),
(85, 'M', 'Armstrong', 'Bruggeman', 'abruggeman2c@fc2.com', '139 232 7604', '862 553 7735', 'CN', 0, '2020-06-22 16:44:09', '2019-08-28 02:56:32'),
(86, 'F', 'Tallulah', 'Gimbart', 'tgimbart2d@columbia.edu', '526 970 9751', '962 350 0507', 'CN', 0, '2020-02-05 14:22:31', '2020-03-11 02:46:47'),
(87, 'M', 'Harp', 'Minshull', 'hminshull2e@whitehouse.gov', '664 144 0144', '781 646 4863', 'MY', 0, '2019-08-16 12:58:41', '2020-04-04 07:22:21'),
(88, 'M', 'Rolland', 'Krabbe', 'rkrabbe2f@shareasale.com', '646 605 9649', '722 296 2191', 'MY', 0, '2020-01-03 16:52:31', '2019-12-07 11:52:46'),
(89, 'M', 'Cristiano', 'Garfitt', 'cgarfitt2g@scientificamerican.com', '502 864 5970', '540 337 8389', 'CN', 0, '2020-07-03 02:09:46', '2020-07-05 00:01:15'),
(90, 'M', 'Asa', 'Koschke', 'akoschke2h@soup.io', '289 541 8683', '851 206 7483', 'CN', 0, '2020-05-24 22:04:29', '2020-06-17 17:48:39'),
(91, 'M', 'Cash', 'Beatens', 'cbeatens2i@goodreads.com', '699 886 0296', '461 173 6077', 'CN', 0, '2020-03-12 05:38:58', '2019-12-29 19:10:22'),
(92, 'M', 'Morey', 'Drance', 'mdrance2j@amazonaws.com', '598 862 4028', '218 504 6914', 'CN', 0, '2019-10-24 10:37:08', '2020-05-27 05:52:45'),
(93, 'F', 'Mady', 'Tapply', 'mtapply2k@ifeng.com', '188 953 7194', '716 976 2053', 'JP', 0, '2019-11-27 18:47:10', '2019-11-15 11:08:18'),
(94, 'F', 'Judy', 'Bubear', 'jbubear2l@shop-pro.jp', '358 335 5482', '385 948 3770', 'CN', 0, '2020-04-26 20:31:56', '2020-01-09 21:56:45'),
(95, 'F', 'Marne', 'Southall', 'msouthall2m@netlog.com', '730 874 6940', '173 893 3395', 'CN', 0, '2020-04-30 02:55:34', '2019-12-23 02:46:53'),
(96, 'F', 'Sayre', 'Norwell', 'snorwell2n@sitemeter.com', '913 959 5276', '750 222 1722', 'JP', 0, '2020-05-19 10:41:34', '2019-10-05 02:47:43'),
(97, 'F', 'Lizette', 'Lawfull', 'llawfull2o@zdnet.com', '852 500 7154', '734 103 8901', 'CN', 0, '2019-07-23 10:11:29', '2019-10-12 18:26:01'),
(98, 'F', 'Lyda', 'Hebbard', 'lhebbard2p@army.mil', '626 270 3355', '143 611 3283', 'CN', 0, '2020-05-08 05:14:26', '2019-10-20 14:45:54'),
(99, 'M', 'Glenden', 'Blazek', 'gblazek2q@umn.edu', '398 280 5612', '717 836 0793', 'CN', 1, '2020-06-11 20:24:02', '2019-12-31 13:02:57'),
(100, 'M', 'Brendis', 'Riccioppo', 'briccioppo2r@photobucket.com', '726 251 1493', '791 927 6606', 'CN', 1, '2019-12-27 22:19:06', '2019-12-04 01:04:10'),
(10002, 'M', 'jkgjk', 'dfgsdfgsfdg', NULL, 'dfgs', 'dfgsdf', 'sdfgs', 1, '2020-07-20 11:52:38', '2020-07-20 11:52:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xcustomer`
--
ALTER TABLE `xcustomer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xcustomer`
--
ALTER TABLE `xcustomer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
