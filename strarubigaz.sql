-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 08:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strarubigazv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `full_address` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `full_address`, `user_id`, `branch_type`) VALUES
(1, 'Main Branch', '140 Loyola St., Pasig City, Metro Manila', 2, 1),
(2, 'Quezon City', '34 Quezon Avenue, Quezon City, Metro Manila', 16, 1),
(3, 'Pasay City', '420 A. Apolinario, Pasay City, Metro Manila', 17, 1),
(4, 'Biñan', 'CALAX - Greenfield Parkway Exit', NULL, 0),
(5, 'San Pedro', '20 Pacita Avenue, San Pedro City, Laguna', 20, 1),
(6, 'test', 'test', NULL, 0),
(7, 'test', 'test', NULL, 0),
(8, 'adu', 'asda', NULL, 0),
(9, 'kjhk', 'jh', NULL, 0),
(10, 'test', 'test', NULL, 0),
(11, 'test', 'test', NULL, 0),
(12, 'test', 'test', NULL, 0),
(13, 'test', 'sd\r\n', NULL, 0),
(14, 'test', '', NULL, 0),
(15, 'test', '\r\n', NULL, 0),
(16, 'sd', 'asd', NULL, 0),
(17, 'test', '', NULL, 0),
(18, 'test', '', NULL, 0),
(19, 'test', '', NULL, 0),
(20, 'test', '', NULL, 0),
(21, 'test', '', NULL, 0),
(22, 'test', 'sd', NULL, 0),
(23, 'last', '', NULL, 0),
(24, 'test', '', NULL, 0),
(25, 'test', '', NULL, 0),
(26, 'adu', '', NULL, 0),
(27, 'test', '', NULL, 0),
(28, 'test', '', NULL, 0),
(29, 'd', '', NULL, 0),
(30, 'd', '', NULL, 0),
(31, 'b', '', NULL, 0),
(32, 'adu', '', NULL, 0),
(33, 'test', '', NULL, 1),
(34, 'makati', 'Cuenca street', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch_customer`
--

CREATE TABLE `branch_customer` (
  `Bcust_ID` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Bcst_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='branch_customer';

--
-- Dumping data for table `branch_customer`
--

INSERT INTO `branch_customer` (`Bcust_ID`, `branch_id`, `user_id`, `Bcst_type`) VALUES
(1, 1, 51, 1),
(2, 1, 52, 1),
(3, 1, 53, 1),
(4, 1, 54, 0),
(5, 2, 55, 0),
(6, 2, 56, 0),
(7, 2, 57, 1),
(8, 2, 58, 1),
(9, 3, 59, 1),
(10, 3, 60, 1),
(11, 3, 61, 1),
(12, 3, 62, 1),
(13, 4, 63, 0),
(14, 4, 64, 0),
(15, 4, 65, 0),
(16, 4, 66, 0),
(17, 5, 67, 0),
(18, 5, 68, 0),
(19, 5, 69, 0),
(20, 5, 70, 0),
(21, 5, 71, 0),
(22, 1, 72, 0),
(23, 2, 74, 0),
(24, 1, 75, 0),
(25, 1, 80, 1),
(26, 1, 81, 1),
(27, 2, 86, 0),
(28, 2, 87, 0),
(29, 2, 88, 0),
(30, 2, 89, 0),
(31, 2, 90, 0),
(32, 2, 91, 0),
(33, 2, 92, 0),
(34, 2, 93, 0),
(35, 2, 94, 0),
(36, 2, 95, 0),
(37, 34, 96, 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `expense_date` date DEFAULT NULL,
  `expense_type` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `Inv_Type` int(11) NOT NULL,
  `inv_limit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `product_id`, `quantity`, `Inv_Type`, `inv_limit`) VALUES
(1, 1, 1000, 0, NULL),
(2, 2, 1, 0, NULL),
(3, 3, 70, 1, 90),
(4, 4, 99999999, 0, NULL),
(5, 5, 24, 0, NULL),
(6, 6, 64, 0, NULL),
(7, 7, 10000, 0, NULL),
(8, 8, 555, 0, NULL),
(9, 9, 999, 0, NULL),
(10, 10, 51, 1, 120),
(11, 11, 2020, 0, NULL),
(12, 12, 435, 0, NULL),
(13, 13, 156, 1, 120),
(14, 14, 69, 0, 100),
(15, 15, 52, 1, 90),
(16, 16, 287, 1, 75),
(17, 17, 98, 1, 120),
(18, 19, 500, 0, 70),
(19, 20, 100, 0, 20),
(20, 21, 1000, 0, 200),
(21, 22, 100, 0, 20),
(22, 23, 100, 0, 50),
(23, 24, 100, 1, 40),
(24, 25, 92, 1, 65),
(25, 26, 60, 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','In Progress','Completed','Cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `branch_id`, `order_date`, `status`) VALUES
(11, 51, 1, '2024-04-15 07:09:08', 'Completed'),
(12, 51, 1, '2024-04-15 11:33:03', 'Completed'),
(13, 51, 1, '2024-04-15 11:35:31', 'Completed'),
(14, 51, 1, '2024-04-15 11:38:25', 'Completed'),
(15, 51, 1, '2024-04-15 12:08:40', 'Completed'),
(16, 51, 1, '2024-04-16 06:26:38', 'Completed'),
(17, 92, 2, '2024-04-16 06:44:44', 'Completed'),
(18, 51, 1, '2024-04-16 08:38:58', 'Completed'),
(19, 51, 1, '2024-04-16 08:39:26', 'Completed'),
(20, 51, 1, '2024-04-16 08:39:46', 'Completed'),
(21, 51, 1, '2024-04-16 08:40:54', 'Completed'),
(22, 51, 1, '2024-04-16 08:41:52', 'Completed'),
(23, 51, 1, '2024-04-16 08:42:40', 'Completed'),
(24, 51, 1, '2024-04-16 08:44:40', 'Completed'),
(25, 51, 1, '2024-04-16 08:45:10', 'Completed'),
(26, 51, 1, '2024-04-16 08:48:10', 'Completed'),
(27, 51, 1, '2024-04-16 08:48:28', 'Completed'),
(28, 51, 1, '2024-04-16 08:53:33', 'Completed'),
(29, 51, 1, '2024-04-16 08:57:21', 'Completed'),
(30, 51, 1, '2024-04-16 08:59:51', 'Completed'),
(31, 51, 1, '2024-04-16 09:04:45', 'Completed'),
(32, 51, 1, '2024-04-16 09:05:39', 'Completed'),
(33, 51, 1, '2024-04-16 09:18:08', 'Completed'),
(34, 51, 1, '2024-04-16 09:20:33', 'Completed'),
(35, 51, 1, '2024-04-16 09:25:23', 'Completed'),
(36, 51, 1, '2024-04-16 09:33:22', 'Completed'),
(37, 51, 1, '2024-04-16 09:34:57', 'Completed'),
(38, 51, 1, '2024-04-16 09:36:23', 'Completed'),
(39, 51, 1, '2024-04-16 09:40:04', 'Completed'),
(40, 51, 1, '2024-04-16 09:49:31', 'Completed'),
(41, 51, 1, '2024-04-16 09:56:42', 'Completed'),
(42, 51, 1, '2024-04-16 10:08:07', 'Completed'),
(43, 51, 1, '2024-04-16 10:31:04', 'Completed'),
(44, 51, 1, '2024-04-16 10:37:24', 'Completed'),
(45, 51, 1, '2024-04-17 10:47:30', 'Completed'),
(46, 51, 1, '2024-04-18 11:45:45', 'Completed'),
(47, 51, 1, '2024-04-20 05:10:27', 'Completed'),
(48, 51, 1, '2024-04-21 07:23:49', 'Completed'),
(49, 51, 1, '2024-04-21 12:45:07', 'Completed'),
(50, 51, 1, '2024-04-22 02:55:08', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(22, 11, 14, 1, 56.00),
(23, 11, 12, 2, 20.00),
(24, 11, 3, 1, 70.00),
(25, 12, 15, 1, 68.09),
(26, 13, 12, 1, 20.00),
(27, 14, 6, 1, 68.09),
(28, 14, 14, 5, 56.00),
(29, 15, 6, 2, 68.09),
(30, 15, 12, 5, 20.00),
(31, 16, 3, 3, 70.00),
(32, 17, 15, 5, 68.09),
(33, 18, 15, 1, 68.09),
(34, 19, 15, 1, 68.09),
(35, 20, 15, 1, 68.09),
(36, 21, 15, 2, 68.09),
(37, 22, 14, 1, 56.00),
(38, 23, 15, 1, 68.09),
(39, 24, 15, 1, 68.09),
(40, 25, 13, 1, 62.00),
(41, 26, 15, 1, 68.09),
(42, 27, 15, 1, 68.09),
(43, 28, 3, 1, 70.00),
(44, 29, 3, 1, 70.00),
(45, 30, 3, 1, 70.00),
(46, 31, 15, 1, 68.09),
(47, 32, 3, 1, 70.00),
(48, 33, 15, 1, 68.09),
(49, 34, 3, 1, 70.00),
(50, 35, 3, 1, 70.00),
(51, 36, 15, 1, 68.09),
(52, 37, 15, 1, 68.09),
(53, 38, 15, 1, 68.09),
(54, 39, 3, 1, 70.00),
(55, 40, 12, 12, 20.00),
(56, 40, 14, 11, 56.00),
(64, 41, 3, 1, 70.00),
(66, 42, 3, 1, 70.00),
(67, 43, 3, 1, 70.00),
(68, 44, 15, 1, 68.09),
(69, 44, 15, 1, 68.09),
(70, 44, 13, 1, 62.00),
(71, 44, 3, 1, 70.00),
(72, 44, 12, 2, 20.00),
(74, 45, 3, 1, 70.00),
(75, 45, 12, 1, 20.00),
(76, 46, 13, 1, 62.00),
(77, 46, 3, 1, 70.00),
(78, 47, 3, 1, 70.00),
(79, 48, 13, 6, 62.00),
(80, 48, 3, 100000000, 70.00),
(81, 48, 10, 2147483647, 69.00),
(82, 49, 16, 200, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `Prod_type` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `base_price` decimal(10,2) DEFAULT NULL,
  `prod_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `Prod_type`, `price`, `supplier_id`, `expiration_date`, `base_price`, `prod_image`) VALUES
(1, 'DAD', 'Diesel', 1550.00, 202400112, '0000-00-00', 40.90, '416008438_2697363370425187_4118653189230528044_n.jpg'),
(2, 'Karldereta', 'Diesel', 68.09, 202400112, '0000-00-00', 40.90, '423105885_2147249585623914_3143380331863502220_n.jpg'),
(3, 'isma', 'tao', 70.00, 202400112, '2024-04-30', 50.90, '430409393_943180997469614_7509784515726083412_n.jpg'),
(4, 'LORD ISRAEL', 'Diesel', 68.09, 202400112, '0000-00-00', 40.90, '96276354_2705802066212650_504183324659417088_n.jpg'),
(5, 'dad', 'Diesel', 68.09, 202400112, '0000-00-00', 40.90, '423541780_1085905049343969_6808135332460782536_n.jpg'),
(6, 'dad', 'Diesel', 68.09, 202400112, '2024-01-01', 40.90, '416008438_2697363370425187_4118653189230528044_n.jpg'),
(7, 'kiwi', 'test', 1.00, 202400125, '0000-00-00', 1.00, 'Screenshot 2023-07-27 204515.png'),
(8, 'lechon', 'kawali', 1000.00, 202400112, '2025-12-02', 2000.00, 'Screenshot 2023-08-22 204336.png'),
(9, 'ang ate', 'breta', 78.00, 202400117, '0000-00-00', NULL, 'Screenshot 2023-11-02 224602.png'),
(10, 'SEV', 'CONSTANTINO', 69.00, 202400125, '2020-02-12', 59.00, '423541780_1085905049343969_6808135332460782536_n.jpg'),
(11, 'test', 'asda', 231.00, 202400135, '0000-00-00', 2000.00, 'Screenshot 2023-07-05 185624.png'),
(12, 'Kiwi', 'DOg', 20.00, 202400135, '0000-00-00', 500.00, 'Screenshot 2023-07-27 204515.png'),
(13, 'ANG ATE', 'asd', 62.00, 202400121, '2025-05-13', 22.00, 'Screenshot 2023-11-02 224602.png'),
(14, 'KARL', 'asdas', 56.00, 202400121, '2024-12-12', 56.00, '423105885_2147249585623914_3143380331863502220_n.jpg'),
(15, 'KARL', 'Diesel', 68.09, 202400121, '2024-04-30', 40.90, '96276354_2705802066212650_504183324659417088_n.jpg'),
(16, 'Hitler', 'niggeR', 1.00, 202400127, '2024-05-04', 0.10, 'Screenshot 2024-02-24 140048.png'),
(17, 'XIEV', 'TAO`', 898.90, 202400135, '2033-12-01', 800.00, 'Screenshot 2023-07-05 185624.png'),
(18, 'test', 'Mango', 2020.00, 202400121, '0000-00-00', 2000.00, 'patient_01.png'),
(19, 'test', 'mango', 2000.00, 202400122, '0000-00-00', 1970.00, 'patient_01.png'),
(20, 'test', 'test', 100.00, 202400121, '0000-00-00', 80.00, '429901790_348053054897562_5899497244798681550_n.jpg'),
(21, 'tesrt', 'asda', 200.00, 202400121, '1970-01-01', 190.00, '429901790_348053054897562_5899497244798681550_n.jpg'),
(22, 'asd', 'sad', 200.00, 202400121, '1970-01-01', 190.00, '429901790_348053054897562_5899497244798681550_n.jpg'),
(23, 'aksjd', '02930', 100.00, 202400121, '2024-05-08', 90.00, '429901790_348053054897562_5899497244798681550_n.jpg'),
(24, 'Oreo', 'Dog', 320.00, 202400121, '2028-11-07', 300.00, 'Screenshot 2024-04-22 123552.png'),
(25, 'Boogie', 'Dog', 720.00, 202400121, '2024-04-30', 700.00, 'Screenshot 2024-04-22 123344.png'),
(26, 'Bongget', 'Dog', 200.00, 202400121, '2028-03-01', 150.00, 'Screenshot 2024-04-22 123313.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchases`
--

CREATE TABLE `product_purchases` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `points_earned` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `reward_id` int(11) NOT NULL,
  `reward_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `point_value` int(11) NOT NULL,
  `reward_image` varchar(255) DEFAULT NULL,
  `reward_qty` int(11) NOT NULL,
  `reward_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`reward_id`, `reward_name`, `description`, `point_value`, `reward_image`, `reward_qty`, `reward_type`) VALUES
(2, 'test', 'test', 123, 'william-daigneault-oWrZoAVOBS0-unsplash.jpg', 1230, 0),
(3, 'test', 'tite tes', 2, 'Nitro_Wallpaper_03_3840x2400.jpg', 189, 1),
(4, 'test', 'test\r\n', 89, 'Nitro_Wallpaper_07_3840x2400.jpg', 1000, 0),
(5, 'test', 'test', 12, 'Screenshot 2023-05-10 093203.png', 3097, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reward_claims`
--

CREATE TABLE `reward_claims` (
  `claim_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reward_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reward_claims`
--

INSERT INTO `reward_claims` (`claim_id`, `user_id`, `reward_id`) VALUES
(1, 51, 5),
(2, 51, 5),
(3, 92, 5),
(4, 51, 3),
(5, 51, 5),
(6, 51, 5),
(7, 51, 3),
(8, 51, 5),
(9, 51, 5),
(10, 51, 5),
(11, 51, 5),
(12, 51, 5),
(13, 51, 3),
(14, 51, 5),
(15, 51, 3),
(16, 51, 5),
(17, 51, 5),
(18, 51, 3),
(19, 51, 5),
(20, 51, 5),
(21, 51, 5),
(22, 51, 5),
(23, 51, 5),
(24, 51, 5),
(25, 51, 5),
(26, 51, 5),
(27, 51, 5),
(28, 51, 5),
(29, 51, 5),
(30, 51, 3),
(31, 51, 3),
(32, 51, 3),
(33, 51, 3),
(34, 51, 3),
(35, 51, 3),
(36, 51, 5);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `Spplr_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `contact_name`, `email`, `phone_number`, `address`, `Spplr_type`) VALUES
(202400111, 'israel', 'Optimus', 'Optimus@gmail,com', '9123456891', 'test', 0),
(202400112, 'aken', 'test', 'test@gmail,com', '123544564', 'test', 0),
(202400113, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '42 San Miguel Avenue. 1550 Mandaluyong City', 0),
(202400114, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '43 San Miguel Avenue. 1550 Mandaluyong City', 0),
(202400115, 'Autobots PetronShell', 'Optimus', 'Optimus@gmail,com', '9123456891', '44 San Miguel Avenue. 1550 Mandaluyong City', 0),
(202400116, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 0),
(202400117, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'test', 0),
(202400118, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 0),
(202400119, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 0),
(202400120, 'Decepticons ', 'Megatron', 'Megabai@gmail.com', '9123456891', 'Triangle Dr, Taguig, Metro Manila', 0),
(202400121, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'test\n', 1),
(202400122, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400123, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400124, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400125, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400126, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400127, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400128, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 1),
(202400129, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 0),
(202400130, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 0),
(202400131, 'Capt. Lebron', 'Bronny', 'bronnyjames@gmail.com', '9123456891', 'Los Banos ', 0),
(202400132, '', '', '', '', '', 0),
(202400133, '', '', '', '', '', 0),
(202400134, 'tets', 'test', 'tetst@gmail.com', '123', 'aosjdla', 0),
(202400135, 'test', 'test', 'test@gmail.com', '982312', 'lasdkjsla', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `claim_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `transaction_type` enum('Purchase','Redeem') NOT NULL,
  `points` decimal(10,2) NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `order_id`, `claim_id`, `user_id`, `transaction_type`, `points`, `transaction_date`) VALUES
(1, 11, NULL, 51, 'Purchase', 30.00, '2024-04-15 11:32:38'),
(2, 12, NULL, 51, 'Purchase', 10.00, '2024-04-15 11:33:07'),
(3, 13, NULL, 51, 'Purchase', 0.00, '2024-04-15 11:35:33'),
(4, 14, NULL, 51, 'Purchase', 69.00, '2024-04-15 11:38:39'),
(7, NULL, 1, 51, 'Redeem', 12.00, '2024-04-16 06:12:37'),
(8, 16, NULL, 51, 'Purchase', 42.00, '2024-04-16 06:26:41'),
(9, NULL, 2, 51, 'Redeem', 12.00, '2024-04-16 06:26:51'),
(10, NULL, 3, 92, 'Redeem', 12.00, '2024-04-16 06:44:30'),
(11, 17, NULL, 92, 'Purchase', 68.00, '2024-04-16 06:44:47'),
(12, NULL, 4, 51, 'Redeem', 2.00, '2024-04-16 07:59:56'),
(13, 18, NULL, 51, 'Purchase', 13.00, '2024-04-16 08:39:16'),
(14, 19, NULL, 51, 'Purchase', 13.00, '2024-04-16 08:39:35'),
(15, 20, NULL, 51, 'Purchase', 13.00, '2024-04-16 08:39:54'),
(16, 21, NULL, 51, 'Purchase', 27.00, '2024-04-16 08:41:00'),
(17, 22, NULL, 51, 'Purchase', 11.00, '2024-04-16 08:42:05'),
(18, 23, NULL, 51, 'Purchase', 13.00, '2024-04-16 08:42:47'),
(19, 24, NULL, 51, 'Purchase', 13.00, '2024-04-16 08:44:45'),
(20, 25, NULL, 51, 'Purchase', 12.00, '2024-04-16 08:46:10'),
(21, 26, NULL, 51, 'Purchase', 13.00, '2024-04-16 08:48:15'),
(22, 27, NULL, 51, 'Purchase', 13.00, '2024-04-16 08:48:34'),
(23, 28, NULL, 51, 'Purchase', 14.00, '2024-04-16 08:53:45'),
(24, 29, NULL, 51, 'Purchase', 14.00, '2024-04-16 08:57:25'),
(25, 30, NULL, 51, 'Purchase', 14.00, '2024-04-16 08:59:56'),
(26, 31, NULL, 51, 'Purchase', 13.00, '2024-04-16 09:04:50'),
(27, 32, NULL, 51, 'Purchase', 14.00, '2024-04-16 09:05:44'),
(28, 33, NULL, 51, 'Purchase', 13.00, '2024-04-16 09:18:13'),
(29, 34, NULL, 51, 'Purchase', 14.00, '2024-04-16 09:20:37'),
(30, 35, NULL, 51, 'Purchase', 14.00, '2024-04-16 09:29:21'),
(31, 36, NULL, 51, 'Purchase', 13.00, '2024-04-16 09:33:34'),
(32, 37, NULL, 51, 'Purchase', 13.00, '2024-04-16 09:35:02'),
(33, 38, NULL, 51, 'Purchase', 13.00, '2024-04-16 09:38:46'),
(34, 39, NULL, 51, 'Purchase', 14.00, '2024-04-16 09:43:02'),
(35, 40, NULL, 51, 'Purchase', 171.00, '2024-04-16 09:50:26'),
(36, 41, NULL, 51, 'Purchase', 14.00, '2024-04-16 10:07:41'),
(37, 42, NULL, 51, 'Purchase', 14.00, '2024-04-16 10:30:37'),
(38, 43, NULL, 51, 'Purchase', 14.00, '2024-04-16 10:31:08'),
(39, NULL, 5, 51, 'Redeem', 12.00, '2024-04-16 10:31:38'),
(40, NULL, 6, 51, 'Redeem', 12.00, '2024-04-16 10:32:22'),
(41, NULL, 7, 51, 'Redeem', 2.00, '2024-04-16 10:34:44'),
(42, NULL, 8, 51, 'Redeem', 12.00, '2024-04-16 10:35:12'),
(43, NULL, 9, 51, 'Redeem', 12.00, '2024-04-16 10:35:53'),
(44, NULL, 10, 51, 'Redeem', 12.00, '2024-04-16 10:36:01'),
(45, NULL, 11, 51, 'Redeem', 12.00, '2024-04-16 10:36:25'),
(46, NULL, 12, 51, 'Redeem', 12.00, '2024-04-16 10:36:42'),
(47, NULL, 13, 51, 'Redeem', 2.00, '2024-04-16 10:36:47'),
(48, NULL, 14, 51, 'Redeem', 12.00, '2024-04-16 10:36:54'),
(49, NULL, 15, 51, 'Redeem', 2.00, '2024-04-16 10:36:57'),
(50, NULL, 16, 51, 'Redeem', 12.00, '2024-04-16 10:37:02'),
(51, 44, NULL, 51, 'Purchase', 61.00, '2024-04-17 07:46:16'),
(52, NULL, 17, 51, 'Redeem', 12.00, '2024-04-17 07:46:48'),
(53, 45, NULL, 51, 'Purchase', 18.00, '2024-04-17 11:22:14'),
(54, NULL, 18, 51, 'Redeem', 2.00, '2024-04-17 11:22:56'),
(55, NULL, 19, 51, 'Redeem', 12.00, '2024-04-17 11:23:03'),
(56, 46, NULL, 51, 'Purchase', 26.00, '2024-04-18 11:53:22'),
(57, 47, NULL, 51, 'Purchase', 14.00, '2024-04-20 05:10:30'),
(58, 48, NULL, 51, 'Purchase', 31.00, '2024-04-21 07:24:55'),
(59, NULL, 20, 51, 'Redeem', 12.00, '2024-04-21 07:26:44'),
(60, NULL, 21, 51, 'Redeem', 12.00, '2024-04-21 07:26:50'),
(61, NULL, 22, 51, 'Redeem', 12.00, '2024-04-21 07:26:52'),
(62, NULL, 23, 51, 'Redeem', 12.00, '2024-04-21 07:26:55'),
(63, NULL, 24, 51, 'Redeem', 12.00, '2024-04-21 07:26:58'),
(64, NULL, 25, 51, 'Redeem', 12.00, '2024-04-21 07:27:00'),
(65, NULL, 26, 51, 'Redeem', 12.00, '2024-04-21 07:27:01'),
(66, NULL, 27, 51, 'Redeem', 12.00, '2024-04-21 07:27:03'),
(67, NULL, 28, 51, 'Redeem', 12.00, '2024-04-21 07:27:04'),
(68, NULL, 29, 51, 'Redeem', 12.00, '2024-04-21 07:27:11'),
(69, NULL, 30, 51, 'Redeem', 2.00, '2024-04-21 07:27:15'),
(70, NULL, 31, 51, 'Redeem', 2.00, '2024-04-21 07:27:23'),
(71, NULL, 32, 51, 'Redeem', 2.00, '2024-04-21 07:27:25'),
(72, NULL, 33, 51, 'Redeem', 2.00, '2024-04-21 07:27:27'),
(73, NULL, 34, 51, 'Redeem', 2.00, '2024-04-21 07:27:31'),
(74, NULL, 35, 51, 'Redeem', 2.00, '2024-04-21 07:27:42'),
(75, NULL, 36, 51, 'Redeem', 12.00, '2024-04-21 12:39:01'),
(76, 49, NULL, 51, 'Purchase', 40.00, '2024-04-21 12:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Super Admin','Admin','Customer') NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `user_reward_pts` decimal(10,2) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `email`, `phone_number`, `user_reward_pts`, `user_type`) VALUES
(1, 'Ralph Mones', 'raga12mones', 'Super Admin', 'ralph12mones@gmail.com', '09391386488', NULL, 1),
(2, 'BJ Angeles', '!admin123', 'Admin', 'Sadmin@gmail.com', '9391386488', NULL, 1),
(16, 'Kiwi Mones', '!adrian123', 'Admin', 'admin.adrian@gmail.com', '09391386488', NULL, 1),
(17, 'Israel Breta', '!israel123', 'Admin', 'admin.israel@gmail.com', '9997126384', NULL, 1),
(18, 'Sev Constantino', '!sev123', 'Admin', 'admin.israel@gmail.com', '9871623712', NULL, 0),
(19, 'Karl Catalan', '!karl123', 'Admin', 'admin.karl@gmail.com', '9126739110', NULL, 0),
(20, 'John Doe', '!John123', 'Admin', 'admin.john@gmail.com', '9271247883', NULL, 1),
(51, 'Miguel Manabat', 'asdf', 'Customer', 'miguel.manabat21@gmail.com', '09371222110', 1136.52, 1),
(52, 'Angelica Ruiz', 'iamanangel123', 'Customer', 'angelicar@gmail.com', '9131492880', 50.00, 1),
(53, 'Anne Abalos', 'annewithane333', 'Customer', 'anneabalos0110@gmail.com', '9943134920', NULL, 1),
(54, 'Rianna Maniego', '3219.Lovely', 'Customer', 'riannamaniego24@gmail.com', '9927213211', NULL, 0),
(55, 'Lorenzo Corpuz', 'ilovemiatacarS12', 'Customer', 'lorenzo.cpz@gmail.com', '9234726182', NULL, 0),
(56, 'Lawrence Diaz', 'Rence8989', 'Customer', 'lawrence.lawrence@gmail.com', '9182734912', NULL, 0),
(57, 'Drew Reyes', 'drewr4621', 'Customer', 'drew_reyes411@gmail.com', '9271623481', NULL, 1),
(58, 'Sam Yu', 'sam1special00', 'Customer', 'samyuarefine@gmail.com', '9275492714', NULL, 1),
(59, 'Carol Reed', 'TWDcarol65', 'Customer', 'carol.deer@gmail.com', '9277548293', NULL, 1),
(60, 'Victor Clemente', 'VictorVC7', 'Customer', 'victorclemente720@gmail.com', '9204726166', NULL, 1),
(61, 'Samuel Manuel', 'Samueleunam88', 'Customer', 'samuelm42@gmail.com', '9155358230', NULL, 1),
(62, 'Christine Reyes', 'CHR.apple123', 'Customer', 'chrstnrys102@gmail.com', '9370021952', NULL, 1),
(63, 'Paul Pinto', '120621pprun', 'Customer', 'paulpin2@gmail.com', '9775182621', NULL, 0),
(64, 'Jake Flores', 'ilikesnakesZZ00', 'Customer', 'jake_flores20@gmail.com', '9195434622', NULL, 0),
(65, 'Aliyah Sotto', 'ahnanihh3242', 'Customer', 'aliyahsotto09@gmail.com', '9196447207', NULL, 0),
(66, 'Maverick Vegas', 'Mbydck72', 'Customer', 'mavedck72@gmail.com', '9726528226', NULL, 0),
(67, 'Matthew Hermi', 'manofronin720', 'Customer', 'matthew.hermi@gmail.com', '9277254596', NULL, 0),
(68, 'Ethan Garcia', 'caesar92', 'Customer', 'ethanethang@gmail.com', '9278927552', NULL, 0),
(69, 'Juana Capiz', 'allithinkaboutisu123', 'Customer', 'jcapiz435@gmail.com', '9198750982', NULL, 0),
(70, 'Maloi Rellosa', 'chicken.feet72', 'Customer', 'maloifree@gmail.com', '9727798002', NULL, 0),
(71, 'test test', '123', 'Customer', 'test@gmail.com', 'test', NULL, 0),
(72, 'test test', '123', 'Customer', 'test@gmail.com', 'test', NULL, 0),
(73, 'root', '123', 'Admin', 'Sadmin@gmail.com', '09391386488', NULL, 0),
(74, 'ets test', '123', 'Customer', 'asda2@gmail.com', '12312', NULL, 0),
(75, 'asd Mones', '123', 'Customer', 'sevyo@gmail.com', '09812731', NULL, 0),
(76, 'root', '123', 'Admin', 'sevyo@gmail.com', '09391386488', NULL, 0),
(77, 'root', '123', 'Admin', 'Sadmin@gmail.com', '09391386488', NULL, 0),
(78, 'Ralph Adrian Mones', '123', 'Admin', 'sevyo@gmail.com', '09391386488', NULL, 0),
(79, 'test test', '123', 'Admin', 'test@gmail.com', '123445', NULL, 0),
(80, 'anong@gmail.com asd', '123', 'Customer', 'asda@gmail.com', '2131', NULL, 1),
(81, 'asd sd', '123', 'Customer', 'asdasdas@gmail.com', '123', NULL, 1),
(82, 'test test', '123', 'Admin', 'test@gmail.com', '0971923', NULL, 0),
(83, 'Ralph Adrian Mones', '123', 'Admin', 'sevyo@gmail.com', '09391386488', NULL, 0),
(84, 'test test', '123', 'Customer', 's@gmail.com', '097212', NULL, 1),
(85, ' ', '123', 'Customer', '', '', NULL, 1),
(86, 'test test', '123', 'Customer', 'test@gmail.com', '0872813', NULL, 0),
(87, 'test test', '123', 'Customer', 'test@gmail.com', '817293812', NULL, 0),
(88, 'test test', '123', 'Customer', 'test@gmail.com', 'test', NULL, 0),
(89, 'test test', '123', 'Customer', 'test@gmail.com', '127931', NULL, 0),
(90, 'test test', '123', 'Customer', 'test@gmail.com', '0981273', NULL, 0),
(91, 'asd test', '123', 'Customer', 'rlph12mones@gmail.com', '09982393', NULL, 0),
(92, 'test test', '123', 'Customer', 'test@gmail.com', '099283293', 106.09, 0),
(93, 'mamama test', '123', 'Customer', 'mama@gmail.com', '9234892', NULL, 0),
(94, 'Last Test', '123', 'Customer', 'last@gmail.com', '082738273', 50.00, 0),
(95, 'Raryner mones', '123', 'Customer', 'ralph12mones@gmail.com', '9090293893', 50.00, 0),
(96, 'Sev Constantino', '123', 'Customer', 'Sevyo@gggg', '09223232323', 50.00, 0),
(97, 'Ralph Adrian Mones', '123', 'Admin', 'ralph12mone@GMAIL.COM', '09391386488', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `branch_customer`
--
ALTER TABLE `branch_customer`
  ADD PRIMARY KEY (`Bcust_ID`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_purchases`
--
ALTER TABLE `product_purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`reward_id`);

--
-- Indexes for table `reward_claims`
--
ALTER TABLE `reward_claims`
  ADD PRIMARY KEY (`claim_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `branch_customer`
--
ALTER TABLE `branch_customer`
  MODIFY `Bcust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_purchases`
--
ALTER TABLE `product_purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reward_claims`
--
ALTER TABLE `reward_claims`
  MODIFY `claim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202400136;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
