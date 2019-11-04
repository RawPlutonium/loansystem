-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 12:23 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesamobieussd`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_registrations`
--

CREATE TABLE `app_registrations` (
  `id` int(32) NOT NULL,
  `idnumber` int(20) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `salutation` varchar(10) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phoneimei` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sttatus` int(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daraja_money`
--

CREATE TABLE `daraja_money` (
  `id` int(32) NOT NULL,
  `net_salary` varchar(100) NOT NULL,
  `advance_limit` varchar(100) NOT NULL,
  `request_amt` varchar(100) NOT NULL,
  `requested_by` varchar(100) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '0',
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daraja_money`
--

INSERT INTO `daraja_money` (`id`, `net_salary`, `advance_limit`, `request_amt`, `requested_by`, `status`, `request_date`) VALUES
(1, '80000', '53334', '10000', '+254721481766', 0, '2018-09-10 07:19:29'),
(2, '80000', '53334', '5000', '+254721481766', 0, '2018-09-10 07:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `loan_request`
--

CREATE TABLE `loan_request` (
  `id` int(32) NOT NULL,
  `net_salary` varchar(100) NOT NULL,
  `payment_period` varchar(100) NOT NULL,
  `loan_limit` varchar(100) NOT NULL,
  `request_amt` varchar(100) NOT NULL,
  `requested_by` varchar(100) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '0',
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_request`
--

INSERT INTO `loan_request` (`id`, `net_salary`, `payment_period`, `loan_limit`, `request_amt`, `requested_by`, `status`, `request_date`) VALUES
(1, '100000', '3 months', '200004', '50000', '+254721491491', 0, '2018-09-11 21:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(32) NOT NULL,
  `idnumber` int(20) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `salutation` varchar(10) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `PNum` varchar(100) NOT NULL,
  `EarningAmount` varchar(100) NOT NULL,
  `availableamt` varchar(100) NOT NULL,
  `max_request_amt` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `idnumber`, `pin`, `salutation`, `surname`, `firstname`, `othernames`, `PNum`, `EarningAmount`, `availableamt`, `max_request_amt`, `password`, `phone`, `reg_date`) VALUES
(1, 455329, 'A001276730Z', 'Mr', 'Kandie', 'Ambassador', 'Julius Kiplagat', '1984055964', '52300', '52300', '34868', '827ccb0eea8a706c4c34a16891f84e7b', '+254722738261', '2018-09-08 14:07:05'),
(2, 2712190, 'A001365773A', 'Mr', 'Okonya', 'Francis', 'Omondi', '1988103230', '80000', '80000', '53334', '4a7d1ed414474e4033ac29ccb8653d9b', '+254721481766', '2018-09-10 07:13:27'),
(3, 9855051, 'A002646888R', 'Miss', 'Nkoroi', 'Juster', 'Nkirote', '1997022255', '100000', '100000', '66668', '81dc9bdb52d04dc20036dbd8313ed055', '+254721491491', '2018-09-11 18:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `rid` int(32) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL,
  `added_by` varchar(150) DEFAULT NULL,
  `status` int(4) DEFAULT '0',
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`rid`, `role_name`, `added_by`, `status`, `when_added`) VALUES
(1, 'Employer', 'System Administrator', 1, '2018-07-25 16:48:58'),
(2, 'Bank', 'System Administrator', 1, '2018-07-25 20:31:26'),
(3, 'Administrator', 'System Administrator', 1, '2018-07-25 20:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `salarytompesa`
--

CREATE TABLE `salarytompesa` (
  `sid` int(32) NOT NULL,
  `net_salary` varchar(100) NOT NULL,
  `mpesa_send_amount` varchar(100) NOT NULL,
  `for_the_next` varchar(100) NOT NULL,
  `applied_by` varchar(100) NOT NULL,
  `approval_status` int(4) NOT NULL DEFAULT '0',
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salarytompesa`
--

INSERT INTO `salarytompesa` (`sid`, `net_salary`, `mpesa_send_amount`, `for_the_next`, `applied_by`, `approval_status`, `application_date`) VALUES
(1, '80000', '20000', '3 Months', '+254721481766', 0, '2018-09-10 07:16:26'),
(2, '52300', '10000', '3 Months', '+254722738261', 0, '2018-09-10 09:09:06'),
(3, '52300', '10000', '1 Month', '+254722738261', 0, '2018-09-11 15:03:51'),
(4, '52300', '22', '1 Month', '+254722738261', 0, '2018-09-11 15:10:51'),
(5, '100000', '5000', '1 Month', '+254721491491', 0, '2018-09-11 19:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(32) NOT NULL,
  `sdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sessionid` varchar(150) NOT NULL,
  `msisdn` varchar(100) NOT NULL,
  `page` int(11) NOT NULL,
  `data` varchar(150) NOT NULL,
  `level` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `sdate`, `sessionid`, `msisdn`, `page`, `data`, `level`) VALUES
(1, '2018-09-03 08:48:24', '', '', 4, '', 5),
(2, '2018-09-03 12:25:30', 'ATUid_ae43a90508d9ccd59812fa51b092fd9c', '+254736955708', 2, '', 3),
(3, '2018-09-03 12:26:46', 'ATUid_7b41433a6f859a1654f9c9c156c6cb21', '+254736955708', 2, '', 3),
(4, '2018-09-03 12:27:13', 'ATUid_3fb4fe39f47ae5cf71537e1f39461ce0', '+254721491491', 2, '', 3),
(5, '2018-09-03 12:28:35', 'ATUid_b2b6864f59a9a0c71b01272e2c7b6801', '+254721491491', 2, '', 3),
(6, '2018-09-03 12:29:08', 'ATUid_99c593aee6997e4d9ebb2307374ef5d7', '+254722738261', 1, '', 2),
(7, '2018-09-03 12:31:02', 'ATUid_6ea8a569c3091b75b0672698bb845dbd', '+254722738261', 2, '', 3),
(8, '2018-09-03 12:31:18', 'ATUid_72fe3b4071e88b9b9b5ee1f5927a82f0', '+254722738261', 2, '', 3),
(9, '2018-09-03 12:32:18', 'ATUid_48efe88dc902d84dacbc7e4599548c89', '+254721491491', 1, '', 2),
(10, '2018-09-03 12:32:33', 'ATUid_c726336edd3cc615ecfa6a0748f102cf', '+254734900560', 1, '', 2),
(11, '2018-09-03 12:32:43', 'ATUid_31a1157dc267b10704e2d783fe7d4743', '+254721491491', 1, '', 2),
(12, '2018-09-03 12:34:28', 'ATUid_55ea542c160aa06c57831f79a4f34b56', '+254721491491', 2, '', 3),
(13, '2018-09-03 12:36:15', 'ATUid_f71782e088fdef65a4aece17425fe989', '+254721491491', 1, '', 2),
(14, '2018-09-03 12:36:54', 'ATUid_bda9539de9ee1eb93614f8dbed86cb15', '+254721491491', 1, '', 2),
(15, '2018-09-03 12:39:20', 'ATUid_46d9a4ab67ef4f68f2a794276896b743', '+254721491491', 2, '', 3),
(16, '2018-09-03 12:41:02', 'ATUid_a5f985ebc5658d8d7dd0535a0801fc73', '+254721491491', 4, '', 10),
(17, '2018-09-03 12:46:46', 'ATUid_86445d5de23b7c3d921cdb9ce51185c7', '+254721491491', 23, '', 23),
(18, '2018-09-03 12:48:20', 'ATUid_4767629471c6c40dc59f3aae633afb4c', '+254721491491', 7, '', 4),
(19, '2018-09-03 12:50:29', 'ATUid_2539906a11d095bfa305ab9aafc474db', '+254721491491', 8, '', 4),
(20, '2018-09-03 12:59:06', 'ATUid_33a4e5e8152f440e10ac7a755d88ae71', '+254721491491', 3, '', 4),
(21, '2018-09-03 15:12:55', 'ATUid_ae8cbe35089eb24203d4eaf2f5dc22ac', '+254721491491', 1, '', 2),
(22, '2018-09-03 16:50:08', 'ATUid_63bcb1a856f7eee537ffdabedbbe41d4', '+254722738261', 1, '', 2),
(23, '2018-09-03 16:50:37', 'ATUid_e7860258598a1a31b081cf6abf7701f8', '+254722738261', 23, '', 23),
(24, '2018-09-03 17:18:10', 'ATUid_012031d9ae7071599aec483506e4df4e', '+254736955708', 2, '', 3),
(25, '2018-09-04 05:21:02', 'ATUid_002a34ede4fee9f5b426c0eb14835bd2', '+254736955708', 2, '', 21),
(26, '2018-09-04 07:37:54', 'ATUid_2cfcda59ca4ea5ef5c33b2316eacb638', '+254722738261', 1, '', 2),
(27, '2018-09-04 10:53:18', 'ATUid_f684a56c885e67c3467af40f57a4aeac', '+254722738261', 22, '', 23),
(28, '2018-09-05 04:55:40', 'ATUid_dad4ccb0ab06d05b80bb8a3aca508b02', '+254721491491', 4, '', 7),
(29, '2018-09-05 08:36:31', 'ATUid_157cf9199ceda461beed38c73cacdfea', '+254721491491', 22, '', 23),
(30, '2018-09-05 08:38:57', 'ATUid_ce13fd7c0688b2825123597fdea68ec9', '+254721491491', 22, '', 23),
(31, '2018-09-05 08:40:49', 'ATUid_1e180c2ee318b5cbb70046d27c0122b7', '+254721491491', 22, '', 23),
(32, '2018-09-05 08:41:55', 'ATUid_239f67661cf6af1312efe6644edd892b', '+254721491491', 22, '', 23),
(33, '2018-09-05 08:43:17', 'ATUid_ec667e556f4219ee2940dce7d2d72382', '+254721491491', 22, '', 23),
(34, '2018-09-05 08:52:04', 'ATUid_748f798ff6104e5f9f84dc886498f2cf', '+254721491491', 22, '', 23),
(35, '2018-09-05 09:29:33', 'ATUid_ece7ae5fcfa84eb05b53e2e2a372ccdf', '+254721491491', 23, '', 23),
(36, '2018-09-05 09:30:55', 'ATUid_6d03b34ef6ee0123a5600cd11888ed1c', '+254721491491', 23, '', 23),
(37, '2018-09-05 09:32:34', 'ATUid_f281e964a699e650ffcf7d402381e486', '+254721491491', 1, '', 2),
(38, '2018-09-05 09:33:09', 'ATUid_5e8a17acdf8a539a1ff6dc76bb94a921', '+254721491491', 1, '', 2),
(39, '2018-09-05 09:33:10', 'ATUid_fe89d7910ad8f071b96ae54e03ddd6cf', '+254736955708', 23, '', 23),
(40, '2018-09-05 09:35:48', 'ATUid_8f6941418bed073697455f01c9a77a2d', '+254721491491', 23, '', 23),
(41, '2018-09-05 09:36:34', 'ATUid_624c8aa90e96319cbaac0894ad82a0f2', '+254721491491', 2, '', 3),
(42, '2018-09-05 09:49:26', 'ATUid_554a2769e576bdd87091a3028b522616', '+254721491491', 1, '', 2),
(43, '2018-09-05 09:49:58', 'ATUid_d6eb5b7cd302d3bd4c394c6a5d2372e8', '+254736955708', 1, '', 2),
(44, '2018-09-05 09:51:08', 'ATUid_dd9ea4b291dc1bd4af23de08a1664266', '+254721491491', 1, '', 2),
(45, '2018-09-05 09:51:35', 'ATUid_11b09753c378f1940257a80188c2bc8c', '+254721491491', 1, '', 2),
(46, '2018-09-05 09:52:51', 'ATUid_0d5740568e1fbf44f88198b9414574fd', '+254721491491', 2, '', 3),
(47, '2018-09-05 09:54:39', 'ATUid_40b4ad96730a262bff61e794094c5b61', '+254721491491', 2, '', 3),
(48, '2018-09-05 09:56:30', 'ATUid_ecaa50acaf8e7530807c7504e4f37ba9', '+254721491491', 2, '', 3),
(49, '2018-09-05 10:03:43', 'ATUid_a0a953531e8fefa70f5af46cd5efc970', '+254721491491', 2, '', 3),
(50, '2018-09-05 10:04:20', 'ATUid_9374c7a7977ef697f0b29030cbdf4eb4', '+254721491491', 3, '', 4),
(51, '2018-09-05 10:12:03', 'ATUid_ed481d52a266c9bacfa5942f592897d2', '+254722738261', 1, '', 2),
(52, '2018-09-05 14:35:25', 'ATUid_c9a3c1690cd9d1aa2b097d346d615760', '+254721491491', 2, '', 3),
(53, '2018-09-05 16:11:56', 'ATUid_bf1583b1d2651a2c675edf70118df277', '+254740804109', 1, '', 2),
(54, '2018-09-05 16:12:22', 'ATUid_84da70f7ec6f5cfda0a3a6826ec65682', '+254740804109', 23, '', 23),
(55, '2018-09-06 15:28:59', 'ATUid_470342b580ccb10533a8283ec1a2edc4', '+254722738261', 1, '', 2),
(56, '2018-09-06 15:40:45', 'ATUid_f1fc384ae6669cf23174519f417be5e8', '+254722738261', 23, '', 23),
(57, '2018-09-06 15:47:10', 'ATUid_173b6db9ede7c60c21283bd4d6b51760', '+254722738261', 3, '', 4),
(58, '2018-09-06 15:57:18', 'ATUid_4998f3aead8f2dc5d788c13d04d4ef46', '+254721491491', 1, '', 2),
(59, '2018-09-06 16:01:12', 'ATUid_cd97a0fa6db9c09bba2a06cccf79f178', '+254722738261', 20, '', 11),
(60, '2018-09-06 16:26:14', 'ATUid_5318daa1781f4d7f7914c8482f5bed50', '+254721491491', 1, '', 2),
(61, '2018-09-06 18:56:37', 'ATUid_bc983c047eadff9209e89fa4540955be', '+254726941482', 1, '', 2),
(62, '2018-09-06 20:33:25', 'ATUid_1f9946c35b58fb795b4f5f88abc6a7b5', '+254721491491', 20, '', 11),
(63, '2018-09-06 20:35:20', 'ATUid_3855359dbe51608ff99f0dd5dfb5d76f', '+254721491491', 10, '', 20),
(64, '2018-09-06 20:41:06', 'ATUid_a219008ce9cb4ff8dd357af5c66ba782', '+254721491491', 20, '', 11),
(65, '2018-09-06 20:47:50', 'ATUid_598025bc2622479616cacea5897eedf8', '+254721491491', 20, '', 11),
(66, '2018-09-06 20:50:14', 'ATUid_cad2e7ff7f476d47b2d15a7e18ecdabb', '+254721491491', 20, '', 11),
(67, '2018-09-06 20:52:34', 'ATUid_edc2e908b6cc130fdeaa216741c09168', '+254721491491', 20, '', 11),
(68, '2018-09-06 20:59:22', 'ATUid_24864511d0ea1d7be6d5833496025f15', '+254721491491', 20, '', 11),
(69, '2018-09-06 21:01:25', 'ATUid_901c3bf5a6aaeaab8250531f4f0a44ed', '+254721491491', 20, '', 11),
(70, '2018-09-06 21:09:31', 'ATUid_857f3417ce3f2a74d13656a6e53f9fec', '+254721491491', 4, '', 5),
(71, '2018-09-06 21:10:16', 'ATUid_0c52e7fd96eb49682a1c5603cac58b4b', '+254721491491', 6, '', 12),
(72, '2018-09-06 21:19:30', 'ATUid_c0d5b39d83e11bfd912f4eb22407b0cb', '+254721491491', 12, '', 11),
(73, '2018-09-06 21:21:58', 'ATUid_92c0b73241f9a7c61b4432834529cd9b', '+254721491491', 6, '', 12),
(74, '2018-09-06 21:22:29', 'ATUid_c81eaed874c6c3607928fa42292f0ab2', '+254721491491', 4, '', 10),
(75, '2018-09-06 21:23:05', 'ATUid_8e849993d03516e11b6d1d959b02a9cc', '+254721491491', 12, '', 11),
(76, '2018-09-06 21:24:08', 'ATUid_226611f9b68b9fe7ccdfcf650c497e95', '+254721491491', 12, '', 11),
(77, '2018-09-06 21:30:01', 'ATUid_03f6dc43eefaa66f5782a122dfdd26d7', '+254721491491', 12, '', 11),
(78, '2018-09-06 21:38:26', 'ATUid_61981a22ef8b2bea48a6bd8d6880fdbe', '+254721491491', 2, '', 3),
(79, '2018-09-06 21:38:52', 'ATUid_c594101083761c8ade2dc2c7690d1afd', '+254721491491', 6, '', 12),
(80, '2018-09-06 21:43:27', 'ATUid_59a990ecbeb49b204bb5df999212d367', '+254721491491', 4, '', 7),
(81, '2018-09-06 21:44:02', 'ATUid_e4962585447eac4411693068b7d8cd3b', '+254721491491', 4, '', 7),
(82, '2018-09-07 03:35:56', 'ATUid_b9ed051f3cdf97a569184d1c1468d6b5', '+254722738261', 4, '', 10),
(83, '2018-09-07 07:26:22', 'ATUid_56d778e8053caf2a17d4d1dde0c40336', '+254726941482', 2, '', 21),
(84, '2018-09-07 08:09:50', 'ATUid_7ce0970ac68ec84d20d64f247ecaabcb', '+254722738261', 1, '', 2),
(85, '2018-09-07 08:09:55', 'ATUid_da04d7ce5d440227bb03fda30104fe05', '+254707227226', 23, '', 23),
(86, '2018-09-07 08:10:01', 'ATUid_cf1e4c2144a96ee15510bd973632ef01', '+254721481766', 21, '', 22),
(87, '2018-09-07 08:11:06', 'ATUid_d4f3186f4cf067465b9c129b68ad950a', '+254721481766', 23, '', 23),
(88, '2018-09-07 08:15:32', 'ATUid_4ddf777379252e687cba4a7d3d79d787', '+254707227226', 2, '', 3),
(89, '2018-09-07 08:15:33', 'ATUid_13403bb980dd42fe28485b94b7b5b67d', '+254721481766', 4, '', 10),
(90, '2018-09-07 08:16:05', 'ATUid_c264cd555146099a4e4bef5d0bdd255b', '+254707227226', 3, '', 4),
(91, '2018-09-07 09:15:11', 'ATUid_d5ea7162eccddf8a4e1edbcca30d9b61', '+254722738261', 3, '', 4),
(92, '2018-09-07 09:17:07', 'ATUid_f28115ed0514e70b7f59bb093420d207', '+254722738261', 4, '', 10),
(93, '2018-09-08 06:53:52', 'ATUid_cdd72958c93eb71ed3c51f6687c9d9a2', '+254721491491', 23, '', 24),
(94, '2018-09-08 06:55:09', 'ATUid_de0f4719bfe62318c58f50074353140a', '+254721491491', 24, '', 26),
(95, '2018-09-08 07:07:37', 'ATUid_e82da4d93b0570eec88c86c0ad74308e', '+254722738261', 1, '', 2),
(96, '2018-09-08 07:22:12', 'ATUid_30bac1196b12c4ffb000b25f2c5b066a', '+254721491491', 23, '', 24),
(97, '2018-09-08 07:23:21', 'ATUid_45a674eaac01b9fea357f5f174fa2376', '+254721491491', 24, '', 26),
(98, '2018-09-08 07:24:01', 'ATUid_7ba3f1f281301b6ecb94fb6c85962189', '+254721491491', 23, '', 23),
(99, '2018-09-08 07:24:42', 'ATUid_7fec6b0f75a93aa7f0e48c5fe24b117e', '+254721491491', 23, '', 23),
(100, '2018-09-08 07:31:07', 'ATUid_a7f30af9709d9a4a865a375ecc943d60', '+254721491491', 23, '', 23),
(101, '2018-09-08 07:33:51', 'ATUid_4ba7b1fc92bb25da4a45fce8e190e56b', '+254721491491', 3, '', 4),
(102, '2018-09-08 08:01:34', 'ATUid_77ed10031afaff528bfe4a1be6999821', '+254721491491', 4, '', 6),
(103, '2018-09-08 08:04:18', 'ATUid_801f25ced1d6a65adcb665e0548bbbb7', '+254721491491', 9, '', 11),
(104, '2018-09-08 08:28:32', 'ATUid_c5f8feda00b6cecb9ac42a35aebacc88', '+254721491491', 4, '', 10),
(105, '2018-09-08 08:33:08', 'ATUid_12993caf1a5b5a8f16afe672d8ea5a7d', '+254721491491', 4, '', 10),
(106, '2018-09-08 08:41:43', 'ATUid_45164b0839608fc0abe7e4a06feff800', '+254721491491', 12, '', 11),
(107, '2018-09-08 09:09:07', 'ATUid_77e43928663e7c6eb5b296769096736a', '+254721491491', 6, '', 12),
(108, '2018-09-08 09:10:25', 'ATUid_5f1a2f64bb9438eb0f0ea1d57cce4547', '+254721491491', 6, '', 12),
(109, '2018-09-08 09:20:56', 'ATUid_7ba166f817a884c31534b46b89ad1a8d', '+254721491491', 6, '', 12),
(110, '2018-09-08 09:21:38', 'ATUid_6a8cb2f5e4ee199b77a97f598c3d787b', '+254721491491', 9, '', 11),
(111, '2018-09-08 09:25:55', 'ATUid_e17d223f132fafe5d3726c3bcebb2eb4', '+254721491491', 6, '', 27),
(112, '2018-09-08 09:27:02', 'ATUid_b905ce4d70dfee2f3aa8d677f1665650', '+254721491491', 6, '', 27),
(113, '2018-09-08 09:28:41', 'ATUid_cf8731221b55501236b9f2093ebddd3d', '+254721491491', 6, '', 27),
(114, '2018-09-08 09:32:37', 'ATUid_c2d6117b78595d3f528634786ac4ae2e', '+254721491491', 2, '', 3),
(115, '2018-09-08 09:33:04', 'ATUid_168f9c84552db26d49f267703652f540', '+254721491491', 6, '', 27),
(116, '2018-09-08 09:33:57', 'ATUid_5f1b972b2eb702fbe280f54dc659f62d', '+254721491491', 2, '', 3),
(117, '2018-09-08 09:34:09', 'ATUid_bc2ea18a9b431919db5ea7a7d0ee4eab', '+254721491491', 9, '', 11),
(118, '2018-09-08 09:35:34', 'ATUid_fde84fe32e2377950894954dce624eb1', '+254721491491', 6, '', 12),
(119, '2018-09-08 09:36:28', 'ATUid_142ee9ce2336cb0c05ba86410381ac51', '+254721491491', 8, '', 15),
(120, '2018-09-08 09:37:47', 'ATUid_a1e8c4c48166467874b2df2ee2501916', '+254721491491', 6, '', 12),
(121, '2018-09-08 09:41:38', 'ATUid_8a14c66bb96a0fe85fb90841d87dc39c', '+254721491491', 12, '', 11),
(122, '2018-09-08 09:53:44', 'ATUid_4a75736b7fe25551c98c441cdebc2c89', '+254721491491', 1, '', 2),
(123, '2018-09-08 09:54:13', 'ATUid_a791944b04f02101c6e3706bc01d82c2', '+254721491491', 1, '', 2),
(124, '2018-09-08 09:54:37', 'ATUid_b1b42628f2715edb6570bf8d0b5c13c5', '+254721491491', 1, '', 2),
(125, '2018-09-08 09:55:39', 'ATUid_9e5f40619e6ec9a1c37b9c1c021ef7a0', '+254721491491', 23, '', 23),
(126, '2018-09-08 09:58:47', 'ATUid_765c88018abf8bccacea5402ad6aa575', '+254721491491', 1, '', 2),
(127, '2018-09-08 09:59:13', 'ATUid_22a412e401b7103d8b6aac6076224809', '+254721491491', 1, '', 2),
(128, '2018-09-08 09:59:27', 'ATUid_895603ef7c49e661ecb88a8c0f359389', '+254721491491', 23, '', 23),
(129, '2018-09-08 10:01:06', 'ATUid_47d4b7677d5ecd1aaa43be20a462dd46', '+254721491491', 6, '', 11),
(130, '2018-09-08 10:04:52', 'ATUid_7015593b5e9a9f79470dff89ad64ea83', '+254721491491', 16, '', 18),
(131, '2018-09-08 10:21:10', 'ATUid_cd06da0d92fc1d28b4ff1d77ea302bad', '+254721491491', 8, '', 15),
(132, '2018-09-08 10:22:40', 'ATUid_e7162892e643404f05a36d29847d0f30', '+254721491491', 2, '', 3),
(133, '2018-09-08 10:23:20', 'ATUid_0a52d7d7d546b08db159aafc5cdf57b2', '+254721491491', 8, '', 15),
(134, '2018-09-08 10:25:16', 'ATUid_7c0a68984e8d097ce605b71e95e14c7b', '+254721491491', 8, '', 15),
(135, '2018-09-08 10:38:31', 'ATUid_3c4f33a4fc88e16f4b1db74547f0f7d7', '+254721491491', 16, '', 18),
(136, '2018-09-08 10:43:29', 'ATUid_785c0efdf908c33403f510ed1dedbe95', '+254721491491', 8, '', 15),
(137, '2018-09-08 10:52:02', 'ATUid_3d83ab46a6751268dd4c560c10f087d1', '+254721491491', 16, '', 18),
(138, '2018-09-08 10:53:53', 'ATUid_e4dafbe60df621d8f0ed1d1a43115a68', '+254721491491', 16, '', 18),
(139, '2018-09-08 11:17:05', 'ATUid_60b0440601946d4d922040b38cc4957a', '+254721491491', 1, '', 2),
(140, '2018-09-08 11:17:39', 'ATUid_6075821fd6fca5958bf9c128e27cc5c1', '+254721491491', 1, '', 2),
(141, '2018-09-08 11:18:34', 'ATUid_3a041636ce254b4f3ce0e9f0535c2196', '+254721491491', 1, '', 2),
(142, '2018-09-08 11:21:05', 'ATUid_44b29ab8129bbce6b2cb3ba0fc08291c', '+254721491491', 18, '', 11),
(143, '2018-09-08 11:38:21', 'ATUid_e57c8cb02100e4dae3d3ed61bed7d0a7', '+254721491491', 18, '', 11),
(144, '2018-09-08 11:40:39', 'ATUid_eb243002c5f6ce07013a5acb2a5a1dc8', '+254721491491', 18, '', 11),
(145, '2018-09-08 11:42:26', 'ATUid_bc9c7bbd6d4045b6b166cce2253b50cf', '+254721491491', 8, '', 15),
(146, '2018-09-08 11:56:12', 'ATUid_f63c51d0cd30bcdbb9f17d6d83ecb7bc', '+254721491491', 8, '', 15),
(147, '2018-09-08 11:56:52', 'ATUid_43abab4c92bb75fa1f2c247dba477af5', '+254721491491', 8, '', 15),
(148, '2018-09-08 11:57:32', 'ATUid_dbd02345ee065998f7739a7d8822c787', '+254721491491', 9, '', 11),
(149, '2018-09-08 12:01:50', 'ATUid_17289c817d6d00e3b4d4b4345f277810', '+254722738261', 1, '', 2),
(150, '2018-09-08 12:03:10', 'ATUid_cd2b99f24022a98b61409fd442284ad1', '+254722738261', 2, '', 21),
(151, '2018-09-08 12:20:43', 'ATUid_80efd0fc781de57a11e06fc295ef197d', '+254722738261', 23, '', 23),
(152, '2018-09-08 12:22:50', 'ATUid_269d92e6e1954d9d9bc265750ca64dab', '+254722738261', 20, '', 11),
(153, '2018-09-08 12:25:06', 'ATUid_0a056ff2ce1945c515713f9cf5b0e894', '+254722738261', 20, '', 11),
(154, '2018-09-08 12:26:25', 'ATUid_5cdc8cfa77af85dfb1354e4c639bafbb', '+254722738261', 4, '', 6),
(155, '2018-09-08 12:30:11', 'ATUid_53a47dee24bce9b3033ae6bee19ea730', '+254722738261', 12, '', 11),
(156, '2018-09-08 12:30:41', 'ATUid_5f5af15608bf47a3cad523ae8e19940e', '+254721491491', 6, '', 12),
(157, '2018-09-08 12:31:23', 'ATUid_53741e23e16843efc5ef63d347a3866b', '+254722738261', 2, '', 3),
(158, '2018-09-08 12:31:47', 'ATUid_0db15c4399c94ae4879d2ae74e4a2403', '+254722738261', 12, '', 11),
(159, '2018-09-08 12:36:15', 'ATUid_a1ca4b4db6206d6156f240348cccbd6e', '+254722738261', 6, '', 12),
(160, '2018-09-08 12:37:06', 'ATUid_424e150cb607bf76df2b1f68992493bf', '+254722738261', 18, '', 11),
(161, '2018-09-08 12:38:53', 'ATUid_5309db7f86018fc3accf42633c6be568', '+254721491491', 16, '', 18),
(162, '2018-09-08 12:39:58', 'ATUid_78cebcafe3993a351caeb5f616e1fdb8', '+254722738261', 2, '', 3),
(163, '2018-09-08 12:40:12', 'ATUid_344b83480df53566fe4c4474ea693d00', '+254722738261', 18, '', 11),
(164, '2018-09-08 12:41:54', 'ATUid_bf4bb0cbbe3578d3caedf5d435069aac', '+254721491491', 6, '', 12),
(165, '2018-09-08 12:42:31', 'ATUid_186ad902e4dbd6522e709c3eaf120033', '+254721491491', 8, '', 16),
(166, '2018-09-08 12:43:39', 'ATUid_396c016f8811f4895f1d5eae8e40a3d7', '+254721491491', 8, '', 16),
(167, '2018-09-08 12:44:59', 'ATUid_1d946304992e8caf916f96211718f05c', '+254722738261', 6, '', 11),
(168, '2018-09-08 12:45:47', 'ATUid_e88765507375012dc2e244bb57f9aa84', '+254722738261', 16, '', 18),
(169, '2018-09-08 12:47:09', 'ATUid_c2ffe52906218ba5c6b0c19d3a334428', '+254722738261', 11, '', 4),
(170, '2018-09-08 12:51:15', 'ATUid_5c91fd47931db6c1502f81c15558de77', '+254722738261', 9, '', 11),
(171, '2018-09-08 12:52:18', 'ATUid_d04a3560152e3f545df49b5fe8d59764', '+254721491491', 4, '', 10),
(172, '2018-09-08 13:14:56', 'ATUid_f69c24e41fd38cfbd7bfe9ade1660135', '+254721491491', 12, '', 11),
(173, '2018-09-08 13:16:08', 'ATUid_81c396139f98fa9cd44886a10a37f93b', '+254721491491', 6, '', 25),
(174, '2018-09-08 13:20:27', 'ATUid_994299947354fd9e9542f455b2e94f4c', '+254721491491', 18, '', 11),
(175, '2018-09-08 13:21:28', 'ATUid_1a0ea2b2a616be5e650e023e22f4d835', '+254721491491', 18, '', 11),
(176, '2018-09-08 13:24:41', 'ATUid_781426d5df10cfd2c6318922d7025ff1', '+254721491491', 18, '', 11),
(177, '2018-09-08 13:26:22', 'ATUid_b0c3c3c26b7e512b5c4815c2288a89b3', '+254721491491', 18, '', 11),
(178, '2018-09-08 13:27:34', 'ATUid_385bcf492fe8b543de2c3ae753cafd7e', '+254721491491', 18, '', 11),
(179, '2018-09-08 13:28:31', 'ATUid_fecb8c50f7ec5b3e9016aef3df0d6006', '+254721491491', 18, '', 11),
(180, '2018-09-08 13:36:49', 'ATUid_15bbd6e2749c1d2927bab0288f9cab60', '+254721491491', 16, '', 11),
(181, '2018-09-08 13:38:50', 'ATUid_55657fdcb0f5afdb114e78e125d1a897', '+254721491491', 8, '', 15),
(182, '2018-09-08 13:49:23', 'ATUid_c98e32dfb28fddbc029764463fa2f32c', '+254721491491', 4, '', 10),
(183, '2018-09-08 13:50:59', 'ATUid_67806a3093342d85e5784b8c55eb0625', '+254721491491', 4, '', 6),
(184, '2018-09-08 13:51:29', 'ATUid_16fa80cb979b9bc3182e9d91fb06eac0', '+254721491491', 4, '', 10),
(185, '2018-09-08 13:59:57', 'ATUid_52464365489c185510188e2c57f43234', '+254721491491', 11, '', 4),
(186, '2018-09-08 14:06:22', 'ATUid_db7f2e76500ed6f85ec507ff521d7844', '+254722738261', 23, '', 23),
(187, '2018-09-08 14:06:22', 'ATUid_8046f137d72d5c579c19dbb69a31fc6c', '+254721491491', 1, '', 2),
(188, '2018-09-08 14:06:40', 'ATUid_9db4dc55530d9f5dd4bb14c4f1bb3242', '+254721491491', 1, '', 2),
(189, '2018-09-08 14:07:01', 'ATUid_ed7adaf3ae21cac37f1bd017d329541c', '+254721491491', 23, '', 23),
(190, '2018-09-08 14:07:16', 'ATUid_9e5d6d60e7397be963ea4e4904acd8fe', '+254722738261', 4, '', 10),
(191, '2018-09-08 14:54:33', 'ATUid_09c75b9bf9fc27b03cf066f352fbe84b', '+254722738261', 2, '', 3),
(192, '2018-09-08 14:54:58', 'ATUid_84f0ce9b1c69b3547bf740a797df6d6b', '+254722738261', 3, '', 4),
(193, '2018-09-08 16:16:28', 'ATUid_1d67f3c56f33fd143ab17645549d0e15', '+254736955708', 1, '', 2),
(194, '2018-09-09 08:27:39', 'ATUid_165d55c8d6e08ff327cd7e183f58ed0c', '+254740804109', 1, '', 2),
(195, '2018-09-10 06:23:52', 'ATUid_1002d4ff81e57a7a2a81018cc235054d', '+254722738261', 2, '', 3),
(196, '2018-09-10 06:28:15', 'ATUid_c11936d05cac1caa96062fa12b2d90d1', '+254722738261', 4, '', 10),
(197, '2018-09-10 07:12:26', 'ATUid_92e2f3bca88cb3722120c2dba54613a5', '+254721481766', 23, '', 23),
(198, '2018-09-10 07:14:37', 'ATUid_c014d1c9e9c0e0cc4af3cf797d3c03c4', '+254721481766', 20, '', 11),
(199, '2018-09-10 07:17:12', 'ATUid_e0ff3232a0ebd4dd66d2f426edcf17b6', '+254721481766', 2, '', 3),
(200, '2018-09-10 07:17:48', 'ATUid_aa4e8ff9f4d09672e4c0686d28a3b074', '+254721481766', 11, '', 4),
(201, '2018-09-10 07:20:29', 'ATUid_27826ffc87bfc6ffd483c138dbbd4d1c', '+254721481766', 9, '', 11),
(202, '2018-09-10 07:23:22', 'ATUid_0c3c31ad8b6c91ea153f5409b3d4ec25', '+254721481766', 7, '', 13),
(203, '2018-09-10 07:24:22', 'ATUid_1642bee83ccf2519fea0d31d15332dc9', '+254721481766', 4, '', 9),
(204, '2018-09-10 07:25:13', 'ATUid_7788e9fcdb255b5d9bca6b0c49b593a4', '+254721481766', 3, '', 4),
(205, '2018-09-10 09:03:47', 'ATUid_3a099ba99d3d7a736b43e20dc111d7ef', '+254722738261', 1, '', 2),
(206, '2018-09-10 09:07:50', 'ATUid_a65124c05dc5849036f30f2490875339', '+254722738261', 20, '', 11),
(207, '2018-09-10 09:13:34', 'ATUid_67fa975a79ce6862f07b8c7488a73527', '+254722738261', 6, '', 12),
(208, '2018-09-10 09:16:37', 'ATUid_5f223f0431a738f835bd706e50c6e6c3', '+254722738261', 4, '', 6),
(209, '2018-09-10 09:21:07', 'ATUid_344b486e89c4c0938999b7019cc346df', '+254722738261', 7, '', 13),
(210, '2018-09-10 09:23:30', 'ATUid_5c336687b2eddfb51189a7ae651415b9', '+254722738261', 16, '', 18),
(211, '2018-09-10 09:25:00', 'ATUid_9d315128c4f35a067615783053e2cfd8', '+254722738261', 8, '', 27),
(212, '2018-09-10 09:27:18', 'ATUid_421c53dd6d465a5daab3aefb2997ab59', '+254722738261', 3, '', 4),
(213, '2018-09-11 14:56:29', 'ATUid_059160997df609fb4dedafe75eab7440', '+254722738261', 2, '', 3),
(214, '2018-09-11 15:03:14', 'ATUid_692a505467144f719baafbb554cdb78d', '+254722738261', 20, '', 11),
(215, '2018-09-11 15:05:08', 'ATUid_c6f6f0fbf22736fc24e1fcfe094a8543', '+254722738261', 1, '', 2),
(216, '2018-09-11 15:09:31', 'ATUid_2afc407a4df74dc58c0a48e5a02e4e0e', '+254722738261', 9, '', 11),
(217, '2018-09-11 15:10:24', 'ATUid_0dec0caabc9bf72da22f920779bd4a33', '+254722738261', 11, '', 4),
(218, '2018-09-11 15:30:52', 'ATUid_08f7f54dd1e9984fa0def413a72ebd14', '+254722738261', 3, '', 4),
(219, '2018-09-11 18:24:01', 'ATUid_0973fb7f05cc9d11b96f3aaeed72d58b', '+254721491491', 1, '', 2),
(220, '2018-09-11 18:25:21', 'ATUid_098672294e8b8b9c1c70857b4c239b91', '+254721491491', 23, '', 23),
(221, '2018-09-11 18:57:58', 'ATUid_2d26f454fcbb76dbee37fe318cfd3eb0', '+254721491491', 1, '', 2),
(222, '2018-09-11 18:58:38', 'ATUid_9a48bbde31122f086feb7a2bca9e7bec', '+254721491491', 1, '', 2),
(223, '2018-09-11 19:33:38', 'ATUid_7fbbbc4c3001abc77bc000e0ec544077', '+254721491491', 6, '', 11),
(224, '2018-09-11 21:45:09', 'ATUid_98fdd78857e8a8064d545c50e88d2e91', '+254721491491', 18, '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(32) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `names` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneno` varchar(100) DEFAULT NULL,
  `roleid` int(4) DEFAULT NULL,
  `status` int(4) DEFAULT '0',
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `names`, `email`, `phoneno`, `roleid`, `status`, `when_added`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'System Administrator', 'test@admin.com', '123456', 3, 1, '2018-07-24 14:23:54'),
(4, 'employer', 'e10adc3949ba59abbe56e057f20f883e', 'Employer', 'emp@employer.com', '0721497499', 1, 1, '2018-07-25 22:05:04'),
(5, 'bank', 'e10adc3949ba59abbe56e057f20f883e', 'Test Bank', 'test@bank.com', '0721497496', 2, 1, '2018-07-26 19:59:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_registrations`
--
ALTER TABLE `app_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daraja_money`
--
ALTER TABLE `daraja_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_request`
--
ALTER TABLE `loan_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `salarytompesa`
--
ALTER TABLE `salarytompesa`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_registrations`
--
ALTER TABLE `app_registrations`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daraja_money`
--
ALTER TABLE `daraja_money`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loan_request`
--
ALTER TABLE `loan_request`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `rid` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salarytompesa`
--
ALTER TABLE `salarytompesa`
  MODIFY `sid` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
