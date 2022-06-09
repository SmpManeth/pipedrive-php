-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pipeline`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `curr_id` int(10) NOT NULL,
  `currency_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`curr_id`, `currency_name`) VALUES
(1, 'Afghanistan Afghani (AFN)'),
(2, 'Albanian Lek (ALL)'),
(3, 'Algerian Dinar (DZD)'),
(4, 'Angolan Kwanza (AOA)'),
(5, 'Argentine Peso (ARS)'),
(6, 'Armenian Dram (AMD)'),
(7, 'Aruban Guilder (AWG)'),
(8, 'Australian Dollar (AUD)'),
(9, 'Azerbaijan Manat (AZN)'),
(10, 'Azerbaijan Old Manat (AZM)'),
(11, 'Bahamian Dollar (BSD)'),
(12, 'Bahraini Dinar (BHD)'),
(13, 'Bangladesh Taka(BDT)'),
(14, 'Barbados Dollar (BBD)'),
(15, 'Belarusian Ruble (BYR)'),
(16, 'Belize Dollar (BZD)'),
(17, 'Bermudian Dollar (BMD)'),
(18, 'Bhutan Ngultrum (BTN)'),
(19, 'Bitcoin (XBT)'),
(20, 'Bolivian Boliviano (BOB)'),
(21, 'Bolívar Soberano (VES)'),
(22, 'Bosnia and Herzegovina Convertible Marks (BAM)'),
(23, 'Botswana Pula (BWP)'),
(24, 'Brazilian Real (BRL)'),
(25, 'Brunei Dollar (BND)'),
(26, 'Bulgarian Lev (BGN)'),
(27, 'Burundi Franc (BIF)'),
(28, 'CFA Franc BCEAO (XOF)'),
(29, 'CFA Franc BEAC (XAF)'),
(30, 'CFP Franc (XPF)'),
(31, 'Cambodia Riel (KHR)'),
(32, 'Canadian Dollar (CAD)'),
(33, 'Cape Verde Escudo (CVE)'),
(34, 'Cayman Islands Dollar (KYD)'),
(35, 'Chilean Peso (CLP)'),
(36, 'Chilean Unidad de Fomento (CLF)'),
(37, 'Chinese Yuan Renminbi (CNY)'),
(38, 'Colombian Peso (COP)'),
(39, 'Comoran Franc (KMF)'),
(40, 'Costa Rican Colon (CRC)'),
(41, 'Croatian Kuna (HRK)'),
(42, 'Cuban Peso (CUP)'),
(43, 'Cyprus Pound (CYP)'),
(44, 'Czech Koruna (CZK)'),
(45, 'Danish Krone (DKK)'),
(46, 'Djibouti Franc (DJF)'),
(47, 'Dobra (STN)'),
(48, 'Dominican Peso (DOP)'),
(49, 'East Caribbean Dollar (XCD)'),
(50, 'Egyptian Pound (EGP)'),
(51, 'El Salvador Colon (SVC)'),
(52, 'Eritrea Nafka (ERN)'),
(53, 'Estonian Kroon (EEK)'),
(54, 'Ethiopian Birr (ETB)'),
(55, 'Euro (EUR)'),
(56, 'Falkland Islands Pound (FKP)'),
(57, 'Fiji Dollar (FJD)'),
(58, 'Franc Congolais (CDF)'),
(59, 'Gambian Dalasi (GMD)'),
(60, 'Georgian Lari (GEL)'),
(61, 'Ghana Cedi (GHC)'),
(62, 'Ghanaian Cedi (GHS)'),
(63, 'Gibraltar Pound (GIP)'),
(64, 'Gold (XAU)'),
(65, 'Guatemala Quetzal (GTQ)'),
(66, 'Guinean Franc (GNF)'),
(67, 'Guyana Dollar (GYD)'),
(68, 'Haiti Gourde (HTG)'),
(69, 'Honduras Lempira (HNL)'),
(70, 'Hong Kong Dollar (HKD)'),
(71, 'Hungarian Forint (HUF)'),
(72, 'Iceland Krona (ISK)'),
(73, 'Indian Rupee (INR)'),
(74, 'Indonesian Rupiah (IDR)'),
(75, 'Iranian Rial (IRR)'),
(76, 'Iraqi Dinar (IQD)'),
(77, 'Jamaican Dollar (JMD)'),
(78, 'Japanese Yen (JPY)'),
(79, 'Jordanian Dinar (JOD)'),
(80, 'Kazakhstan Tenge (KZT)'),
(81, 'Kenyan Shilling (KES)'),
(82, 'Korean Won (KRW)'),
(83, 'Kuwaiti Dinar (KWD)'),
(84, 'Kyrgyzstan Som (KGS)'),
(85, 'Lao Kip (LAK)'),
(86, 'Latvian Lats (LVL)'),
(87, 'Lebanese Pound (LBP)'),
(88, 'Lesotho Loti (LSL)'),
(89, 'Liberian Dollar (LRD)'),
(90, 'Libyan Dinar (LYD)'),
(91, 'Lithuanian Litas (LTL)'),
(92, 'Macau Pataca (MOP)'),
(93, 'Macedonian Dear (MKD)'),
(94, 'Malagasy Ariary (MGA)'),
(95, 'Malawi Kwacha (MWK)'),
(96, 'Malaysian Ringgit (MYR)'),
(97, 'Maldives Rufiyaa (MVR)'),
(98, 'Maltese Lira (MTL)'),
(99, 'Mauritania Ouguiya (MRO)'),
(100, 'Mauritius Rupee (MUR)'),
(101, 'Mexican Peso (MXN)'),
(102, 'Moldovan Leu (MDL)'),
(103, 'Mongolian Tugrik (MNT)'),
(104, 'Moroccan Dirham (MAD)'),
(105, 'Mozambican Metical (MZN)'),
(106, 'Mozambique Metical (MZM)'),
(107, 'Myanmar Kyat (MMK)'),
(108, 'Namibia Dollar (NAD)'),
(109, 'Nepalese Rupee (NPR)'),
(110, 'Netherlands Antillian Guilder (ANG)'),
(111, 'New Belarusian Ruble (BYN)'),
(112, 'New Israeli Shekel (ILS)'),
(113, 'New Taiwan Dollar (TWD)'),
(114, 'New Zealand Dollar (NZD)'),
(115, 'Nicaragua Cordoba Or (NIO)'),
(116, 'Nigerian Naira (NGN)'),
(117, 'North Korean Won (KPW)'),
(118, 'Norwegian Krone (NOK)'),
(119, 'Ouguiya (MRU)'),
(120, 'Pakistan Rupee (PKR)'),
(121, 'Palladium (XPD)'),
(122, 'Panama Ralhaa (PAR)'),
(123, 'Panama Balboa (PAB)'),
(124, 'Papua New Guinea Kina (PGK)'),
(125, 'Paraguayan Guarani (PYG)'),
(126, 'Peruvian Nuevo Sol (PEN)'),
(127, 'Peso Convertible (CUC)'),
(128, 'Peso Uruguayo (UYU)'),
(129, 'Philippine Peso (PHP)'),
(130, 'Platinum (XPT)'),
(131, 'Polish Zloty (PLN)'),
(132, 'Pound Sterling (GBP)'),
(133, 'Qatari Rial (QAR)'),
(134, 'Rial Omani (OMR)'),
(135, 'Romanian Leu (RON)'),
(136, 'Russian Ruble (RUB)'),
(137, 'Rwanda Franc (RWF)'),
(138, 'SDR (Special Drawing Rights) (XDR)'),
(139, 'Samoa Tala (WST)'),
(140, 'Saudi Riyal (SAR)'),
(141, 'Serbian Dinar (CSD)'),
(142, 'Serbian Dinar (RSD)'),
(143, 'Seychelles Rupee (SCR)'),
(144, 'Sierra Leone Leone (SLL)'),
(145, 'Silver (XAG)'),
(146, 'Singapore Dollar (SGD)'),
(147, 'Slovak Koruna (SKK)'),
(148, 'Slovenian Tolar (SIT)'),
(149, 'Solomon Islands Dollar (SBD)'),
(150, 'Somali Shilling (SOS)'),
(151, 'South African Rand (ZAR)'),
(152, 'South Sudanese Pound (SSP)'),
(153, 'Sri Lanka Rupee (LKR)'),
(154, 'St Helena Pound (SHP)'),
(155, 'Sudanese Dinar (SDD)'),
(156, 'Sudanese Pound (SDG)'),
(157, 'Surinam Dollar (SRD)'),
(158, 'Swaziland Lilangeni (SZL)'),
(159, 'Swedish Krona (SEK)'),
(160, 'Swiss Franc (CHF)'),
(161, 'Syrian Pound (SYP)'),
(162, 'São Tome and Principe Dobra (STD)'),
(163, 'Tajik Somoni (TJS)'),
(164, 'Tanzanian Shilling (TZS)'),
(165, 'Thai Baht (THB)'),
(166, 'Tonga Paanga (TOP)'),
(167, 'Trinidad and Tobago Dollar (TTD)'),
(168, 'Tunisian Dinar (TND)'),
(169, 'Turkish Lira (TRY)'),
(170, 'Turkmenistan Manat (TMM)'),
(171, 'Turkmenistani Manat (TMT)'),
(172, 'UAE Dirham (AED)'),
(173, 'US Dollar (USD)'),
(174, 'Uganda Shilling (UGX)'),
(175, 'Ukraine Hryvnia (UAH)'),
(176, 'Uzbekistan Sum (UZS)'),
(177, 'Vanuatu Vatu (VUV)'),
(178, 'Venezuelan Bolivar (VEB)'),
(179, 'Venezuelan Bolívar (VEF)'),
(180, 'Vietnamese Dong (VND)'),
(181, 'Yemeni Rial (YER)'),
(182, 'Zambian Kwacha (ZMK)'),
(183, 'Zambian Kwacha (ZMW)'),
(184, 'Zimbabwe Dollar (ZWL)');

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `deal_id` int(11) NOT NULL,
  `Contact_person_Name` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `pipeline` varchar(255) NOT NULL,
  `pipeline_stage` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `expected_closing_date` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`deal_id`, `Contact_person_Name`, `organization`, `title`, `value`, `pipeline`, `pipeline_stage`, `project_name`, `expected_closing_date`, `user_id`) VALUES
(32, 'Ravindu', 'WIDZMART', 'Creative Start idea', '', 'Pipeline_Two', '3', 'StartTuts', '2022-05-04', 1),
(33, 'Isuru Diluminda', 'WIDZMART', 'Receive Your Paper', '2151', 'Pipeline_One', '1', 'StartTuts', '2022-05-06', 1),
(34, 'Maneth Ovindu Siman Meru Pathirana', 'sdgndsn', 'Creative Start idea', '75000', 'Pipeline_Two', '2', 'StartTuts', '2022-05-26', 1),
(35, 'stage one sample', 'stage one sample', 'stage one sample', '123', 'Pipeline_One', '1', 'StartTuts', '2022-05-10', 1),
(36, 'stage two sample', 'stage two sample', 'stage two sample', '123', 'Pipeline_One', '2', 'StartTuts', '2022-05-11', 1),
(37, 'stage three', 'stage three', 'stage three', '1243', 'Pipeline_One', '3', 'StartTuts', '2022-05-19', 1),
(38, 'Isuru Diluminda', 'WIDZMART', 'yifoy', '', 'Pipeline_One', '1', 'StartTuts', '2022-05-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deal_phone_numbers`
--

CREATE TABLE `deal_phone_numbers` (
  `deal_id` int(11) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phone_type`
--

CREATE TABLE `phone_type` (
  `pho_type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone_type`
--

INSERT INTO `phone_type` (`pho_type_id`, `type_name`) VALUES
(1, 'Work'),
(2, 'Home'),
(3, 'Mobile'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE `stages` (
  `id` int(11) NOT NULL,
  `stage_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`id`, `stage_name`) VALUES
(1, 'Stage one'),
(2, 'Stage Two'),
(3, 'Stage Three');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `status_name`) VALUES
(1, 'New'),
(2, 'In Progress'),
(3, 'Pending'),
(4, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`id`, `title`, `description`, `project_name`, `status_id`, `created_at`) VALUES
(1, 'Tutorial CRUD', 'CRUD Job for the Tutorial functionality', 'StartTuts', 3, '2018-07-12 18:45:01'),
(2, 'Listing with Filtering and Pagination', 'Tutorial listing with search filter option and pagination links', 'StartTuts', 3, '2018-07-12 18:44:54'),
(3, 'Sorting and Change Ordering', 'Enabling dynamic sorting and change the list order with AJAX  ', 'StartTuts', 4, '2018-07-12 18:44:58'),
(4, 'Client-side and server-side Validation', 'Validating user data with client and the server side validation mechanism.', 'StartTuts', 3, '2018-07-12 18:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `created_at`) VALUES
(1, 'MANETH PATHIRANA', '$2y$10$kAEOcNbN521oywKe.AKFl.6E8eaWcr2IUXrZtfprbfHcyResZH5oK', 'Admin', '2022-05-30 02:54:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `deal_phone_numbers`
--
ALTER TABLE `deal_phone_numbers`
  ADD KEY `deal_id` (`deal_id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
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
-- AUTO_INCREMENT for table `deal`
--
ALTER TABLE `deal`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deal_phone_numbers`
--
ALTER TABLE `deal_phone_numbers`
  ADD CONSTRAINT `deal_phone_numbers_ibfk_1` FOREIGN KEY (`deal_id`) REFERENCES `deal` (`deal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
