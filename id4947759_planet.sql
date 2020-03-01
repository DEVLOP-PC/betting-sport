-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2018 at 11:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4947759_planet`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_events`
--

CREATE TABLE `all_events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `crdate` varchar(255) NOT NULL,
  `udate` varchar(255) NOT NULL,
  `subevents_udate` varchar(255) NOT NULL DEFAULT '0',
  `check_event` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_events`
--

INSERT INTO `all_events` (`id`, `name`, `code`, `crdate`, `udate`, `subevents_udate`, `check_event`) VALUES
(1, 'World Cup 2018 - Matches - World Cup - Group A', '480180', '1523145952', '1523145952', '0', 1),
(2, 'World Cup 2018 - Matches - World Cup - Group B', '480181', '1523145952', '1523145952', '0', 1),
(3, 'World Cup 2018 - Matches - World Cup - Group C', '480182', '1523145952', '1523145952', '0', 1),
(4, 'World Cup 2018 - Matches - World Cup - Group D', '480183', '1523145952', '1523145952', '0', 1),
(5, 'World Cup 2018 - Matches - World Cup - Group E', '480184', '1523145952', '1523145952', '0', 1),
(6, 'World Cup 2018 - Matches - World Cup - Group F', '480185', '1523145952', '1523145952', '0', 1),
(7, 'World Cup 2018 - Matches - World Cup - Group G', '480186', '1523145952', '1523145952', '0', 1),
(8, 'World Cup 2018 - Matches - World Cup - Group H', '480187', '1523145952', '1523145952', '0', 1),
(9, 'World Cup 2018 - Tournament Specials - FIFA Coupe du Monde 2018 - Gagnant', '200757', '1523145952', '1523145952', '0', 1),
(10, 'World Cup 2018 - Tournament Specials - World Cup - Best AFC Country', '525898', '1523145952', '1523145952', '0', 1),
(11, 'World Cup 2018 - Tournament Specials - World Cup - Best CAF Country', '525899', '1523145952', '1523145952', '0', 1),
(12, 'World Cup 2018 - Tournament Specials - World Cup - Best CONCACAF Country', '525900', '1523145952', '1523145952', '0', 1),
(13, 'World Cup 2018 - Tournament Specials - World Cup - Best CONMEBOL Country', '525901', '1523145952', '1523145952', '0', 1),
(14, 'World Cup 2018 - Tournament Specials - World Cup - Best UEFA Country', '525902', '1523145952', '1523145952', '0', 1),
(15, 'World Cup 2018 - Tournament Specials - World Cup - Winning Confederation', '525896', '1523145952', '1523145952', '0', 1),
(16, 'World Cup 2018 - Tournament Specials - World Cup - Winning Group', '525897', '1523145952', '1523145952', '0', 1),
(17, 'World Cup 2018 - Tournament Specials - World Cup - First Time Winner', '525904', '1523145952', '1523145952', '0', 1),
(18, 'World Cup 2018 - Tournament Specials - World Cup - Name the Finalists', '526750', '1523145952', '1523145952', '0', 1),
(19, 'World Cup 2018 - Tournament Specials - World Cup - Group A Placement', '479332', '1523145952', '1523145952', '0', 1),
(20, 'World Cup 2018 - Tournament Specials - World Cup - Group B Placement', '479333', '1523145952', '1523145952', '0', 1),
(21, 'World Cup 2018 - Tournament Specials - World Cup - Group C Placement', '479334', '1523145952', '1523145952', '0', 1),
(22, 'World Cup 2018 - Tournament Specials - World Cup - Group D Placement', '479335', '1523145952', '1523145952', '0', 1),
(23, 'World Cup 2018 - Tournament Specials - World Cup - Group E Placement', '479337', '1523145952', '1523145952', '0', 1),
(24, 'World Cup 2018 - Tournament Specials - World Cup - Group F Placement', '479338', '1523145952', '1523145952', '0', 1),
(25, 'World Cup 2018 - Tournament Specials - World Cup - Group G Placement', '479339', '1523145952', '1523145952', '0', 1),
(26, 'World Cup 2018 - Tournament Specials - World Cup - Group H Placement', '479340', '1523145952', '1523145952', '0', 1),
(27, 'World Cup 2018 - Tournament Specials - World Cup - Group A Advancing Double', '526718', '1523145952', '1523145952', '0', 1),
(28, 'World Cup 2018 - Tournament Specials - World Cup - Group B Advancing Double', '526720', '1523145952', '1523145952', '0', 1),
(29, 'World Cup 2018 - Tournament Specials - World Cup - Group C Advancing Double', '526721', '1523145952', '1523145952', '0', 1),
(30, 'World Cup 2018 - Tournament Specials - World Cup - Group D Advancing Double', '526728', '1523145952', '1523145952', '0', 1),
(31, 'World Cup 2018 - Tournament Specials - World Cup - Group E Advancing Double', '526729', '1523145952', '1523145952', '0', 1),
(32, 'World Cup 2018 - Tournament Specials - World Cup - Group F Advancing Double', '526730', '1523145952', '1523145952', '0', 1),
(33, 'World Cup 2018 - Tournament Specials - World Cup - Group G Advancing Double', '526731', '1523145952', '1523145952', '0', 1),
(34, 'World Cup 2018 - Tournament Specials - World Cup - Group H Advancing Double', '526732', '1523145952', '1523145952', '0', 1),
(35, 'World Cup 2018 - Tournament Specials - World Cup - Group A Straight Forecast', '526733', '1523145952', '1523145952', '0', 1),
(36, 'World Cup 2018 - Tournament Specials - World Cup - Group B Straight Forecast', '526734', '1523145952', '1523145952', '0', 1),
(37, 'World Cup 2018 - Tournament Specials - World Cup - Group C Straight Forecast', '526735', '1523145952', '1523145952', '0', 1),
(38, 'World Cup 2018 - Tournament Specials - World Cup - Group D Straight Forecast', '526736', '1523145952', '1523145952', '0', 1),
(39, 'World Cup 2018 - Tournament Specials - World Cup - Group E Straight Forecast', '526737', '1523145952', '1523145952', '0', 1),
(40, 'World Cup 2018 - Tournament Specials - World Cup - Group F Straight Forecast', '526738', '1523145952', '1523145952', '0', 1),
(41, 'World Cup 2018 - Tournament Specials - World Cup - Group G Straight Forecast', '526739', '1523145952', '1523145952', '0', 1),
(42, 'World Cup 2018 - Tournament Specials - World Cup - Group H Straight Forecast', '526740', '1523145952', '1523145952', '0', 1),
(43, 'World Cup 2018 - Team Specials - World Cup - Team HH', '528832', '1523145952', '1523145952', '0', 1),
(44, 'World Cup 2018 - Team Specials - World Cup - Highest Scoring Team', '525919', '1523145952', '1523145952', '0', 1),
(45, 'World Cup 2018 - Team Specials - World Cup - Lowest Scoring Team', '525920', '1523145952', '1523145952', '0', 1),
(46, 'World Cup 2018 - Team Specials - World Cup - Argentina Elimination Round', '526171', '1523145952', '1523145952', '0', 1),
(47, 'World Cup 2018 - Team Specials - World Cup - Australia Elimination Round', '526196', '1523145952', '1523145952', '0', 1),
(48, 'World Cup 2018 - Team Specials - World Cup - Belgium Elimination Round', '526172', '1523145952', '1523145952', '0', 1),
(49, 'World Cup 2018 - Team Specials - World Cup - Brazil Elimination Round', '526168', '1523145952', '1523145952', '0', 1),
(50, 'World Cup 2018 - Team Specials - World Cup - Colombia Elimination Round', '526204', '1523145952', '1523145952', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `be_user`
--

CREATE TABLE `be_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `nb_corr_jour` int(11) NOT NULL DEFAULT '0',
  `nb_corr_tot` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `be_user`
--

INSERT INTO `be_user` (`id`, `username`, `password`, `nom`, `prenom`, `type`, `nb_corr_jour`, `nb_corr_tot`) VALUES
(1, 'TheCracker', 'e816aa1ddda7d37cdfadcb90c8581f0baad66527', 'Rayen', '', 1, 91, 91);

-- --------------------------------------------------------

--
-- Table structure for table `be_user_stat`
--

CREATE TABLE `be_user_stat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `be_user_stat`
--

INSERT INTO `be_user_stat` (`id`, `user_id`, `ip`, `session_id`, `date`, `timestamp`, `event_id`) VALUES
(1, 0, '154.107.254.169', 'j0jqtnsdfnhtlk3g4i6vku0gf6', '2018-03-22 20:27:02', '1521746822', 64),
(2, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:35:16', '1521819316', 14),
(3, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:35:23', '1521819323', 15),
(4, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:36:48', '1521819408', 54),
(5, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:37:27', '1521819447', 51),
(6, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:39:05', '1521819545', 52),
(7, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:52:48', '1521820368', 83),
(8, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:52:53', '1521820373', 101),
(9, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:53:03', '1521820383', 112),
(10, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:53:07', '1521820387', 104),
(11, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:53:11', '1521820391', 86),
(12, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:53:15', '1521820395', 68),
(13, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 16:55:19', '1521820519', 77),
(14, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 17:06:52', '1521821212', 55),
(15, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 17:07:43', '1521821263', 58),
(16, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 17:07:59', '1521821279', 56),
(17, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 17:08:15', '1521821295', 69),
(18, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 17:08:29', '1521821309', 62),
(19, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 17:08:30', '1521821310', 60),
(20, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 17:09:00', '1521821340', 59),
(21, 1, '197.1.16.214', 'gkqll0qkvtibf1kgbier4i6227', '2018-03-23 17:09:07', '1521821347', 66);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `code_coupon` varchar(255) NOT NULL,
  `etat_pari` varchar(255) NOT NULL DEFAULT 'running',
  `usager` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type_pari` enum('multiple','intégrale','','') NOT NULL,
  `type_credidation` varchar(255) NOT NULL DEFAULT 'Compte Client',
  `amount` varchar(255) NOT NULL,
  `multiplicateur` int(9) NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `gain_pot` varchar(255) NOT NULL,
  `gain_pot_min` varchar(255) NOT NULL,
  `gain_pot_max` varchar(255) NOT NULL,
  `bonus_min` varchar(255) NOT NULL,
  `bonus_max` varchar(255) NOT NULL,
  `cote_tot` varchar(255) NOT NULL,
  `cote_min` varchar(255) NOT NULL,
  `cote_max` varchar(255) NOT NULL,
  `montant_gagne` varchar(255) NOT NULL DEFAULT '0',
  `comb_cote_max` varchar(255) NOT NULL,
  `comb_gain_pot_max` varchar(255) NOT NULL,
  `comb_bonus_max` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `code_coupon`, `etat_pari`, `usager`, `date`, `type_pari`, `type_credidation`, `amount`, `multiplicateur`, `bonus`, `gain_pot`, `gain_pot_min`, `gain_pot_max`, `bonus_min`, `bonus_max`, `cote_tot`, `cote_min`, `cote_max`, `montant_gagne`, `comb_cote_max`, `comb_gain_pot_max`, `comb_bonus_max`) VALUES
(1, 'P39EWOB8CUQR-', 'lost', 0, '2018-03-26 20:39:59', 'multiple', 'Compte Client', '0.5', 0, '59.15', '3016.72', '', '', '', '', '5915.14', '', '', '0', '', '', ''),
(2, 'P41YCSZUZEPG-', 'lost', 0, '2018-03-26 20:41:16', 'multiple', 'Compte Client', '0.5', 0, '59.15', '3016.72', '', '', '', '', '5915.14', '', '', '0', '', '', ''),
(3, 'P42KMYJAXICJ-', 'lost', 0, '2018-03-26 20:42:15', 'multiple', 'Compte Client', '0.5', 0, '59.15', '3016.72', '', '', '', '', '5915.14', '', '', '0', '', '', ''),
(4, 'P01PCESZLQ4M-1083637', 'lost', 1083637, '2018-03-27 10:01:34', 'multiple', 'Compte Client', '1', 0, '32.69', '359.58', '', '', '', '', '326.89', '', '', '0', '', '', ''),
(5, 'P04JSZGT2XBO-1083637', 'lost', 1083637, '2018-03-28 15:04:01', 'multiple', 'Compte Client', '1', 0, '39.27', '196.36', '', '', '', '', '157.09', '', '', '0', '', '', ''),
(6, 'P37JHOJDHOTH-1083637', 'win', 1083637, '2018-03-29 08:37:34', 'multiple', 'Compte Client', '1', 0, '18.05', '108.31', '', '', '', '', '90.26', '', '', '108.31', '', '', ''),
(10, 'P57ILMZNUFAY-1101237', 'lost', 1101237, '2018-03-29 16:57:18', 'multiple', 'Compte Client', '1', 0, '15.96', '122.39', '', '', '', '', '106.43', '', '', '0', '', '', ''),
(11, 'P22ZPNJKGQXG-1101237', 'win', 1101237, '2018-03-29 18:22:56', 'multiple', 'Compte Client', '10', 0, '0', '50.9', '', '', '', '', '5.09', '', '', '50.9', '', '', ''),
(12, 'P33TXMJUSOI4-1101237', 'lost', 1101237, '2018-03-29 18:33:22', 'multiple', 'Compte Client', '1', 0, '0.00', '2.53', '', '', '', '', '2.53', '', '', '0', '', '', ''),
(13, 'P03RAFUPFZA9-1083637', 'lost', 1083637, '2018-03-30 09:03:41', 'multiple', 'Compte Client', '1', 0, '88.27', '382.49', '', '', '', '', '294.22', '', '', '0', '', '', ''),
(14, 'P03QHZFWHLKD-1083637', 'lost', 1083637, '2018-03-30 09:03:43', 'multiple', 'Compte Client', '1', 0, '88.27', '382.49', '', '', '', '', '294.22', '', '', '0', '', '', ''),
(15, 'P431ZIGWXJAM-1083637', 'lost', 1083637, '2018-03-30 11:43:05', 'multiple', 'Compte Client', '0.5', 0, '448.91', '1571.19', '', '', '', '', '2244.55', '', '', '0', '', '', ''),
(16, 'P04BN9DMKN8T-1083637', 'lost', 1083637, '2018-03-30 13:04:05', 'multiple', 'Compte Client', '0.5', 0, '448.91', '1571.19', '', '', '', '', '2244.55', '', '', '0', '', '', ''),
(17, 'P03WYG2UYNW8-1083637', 'lost', 1083637, '2018-03-31 11:03:04', 'multiple', 'Compte Client', '0.5', 0, '176.82', '884.09', '', '', '', '', '1414.54', '', '', '0', '', '', ''),
(18, 'P19G4YBCJTXE-1083637', 'lost', 1083637, '2018-03-31 11:19:33', 'intégrale', 'Compte Client', '0.5', 32, '', '', '214.43', '29959.68', '19.49', '2723.61', '', '389.88', '54472.14', '0', '', '', ''),
(19, 'P41GNRBRLZBA-1083637', 'lost', 1083637, '2018-03-31 11:41:31', 'intégrale', 'Compte Client', '0.5', 16, '', '', '26.47', '394.80', '2.41', '35.89', '', '768.67', '11466.73', '0', '', '', ''),
(20, 'P44SRA9JO1ND-1101237', 'win', 1101237, '2018-03-31 16:44:28', 'multiple', 'Compte Client', '10', 0, '0.00', '44.70', '', '', '', '', '4.47', '', '', '44.7', '', '', ''),
(21, 'P11WUBCZSNII-1101238', 'lost', 1101238, '2018-04-01 23:11:25', 'multiple', 'Compte Client', '1', 0, '17.23', '878.52', '', '', '', '', '861.29', '', '', '0', '', '', ''),
(22, 'P42SLEFBK9NY-1101238', 'win', 1101238, '2018-04-01 23:42:29', 'multiple', 'Compte Client', '50', 0, '0.00', '10900.5', '', '', '', '', '218.01', '', '', '0', '', '', ''),
(23, 'P39STGLUIPSP-1101238', 'lost', 1101238, '2018-04-02 01:39:55', 'multiple', 'Compte Client', '4', 0, '3.73', '41.05', '', '', '', '', '9.33', '', '', '0', '', '', ''),
(24, 'P01IIWYWJ7EI-1101238', 'lost', 1101238, '2018-04-03 10:01:07', 'multiple', 'Compte Client', '50', 0, '0.00', '10017.00', '', '', '', '', '200.34', '', '', '0', '', '', ''),
(25, 'P19ZONYKTE42-1101238', 'lost', 1101238, '2018-04-03 16:19:17', 'multiple', 'Compte Client', '50', 0, '0.00', '231.00', '', '', '', '', '4.62', '', '', '0', '', '', ''),
(26, 'P202RFC5IYLX-1101238', 'win', 1101238, '2018-04-03 16:20:09', 'multiple', 'Compte Client', '50', 0, '0.00', '237.50', '', '', '', '', '4.75', '', '', '237.5', '', '', ''),
(27, 'P27SZWEEYSEJ-1101238', 'lost', 1101238, '2018-04-04 09:27:23', 'multiple', 'Compte Client', '50', 0, '0.00', '12110.00', '', '', '', '', '242.20', '', '', '0', '', '', ''),
(28, 'P56HAOQH8OQY-1101238', 'lost', 1101238, '2018-04-04 14:56:54', 'multiple', 'Compte Client', '100', 0, '0', '498', '', '', '', '', '4.98', '', '', '0', '', '', ''),
(29, 'P13MYBAQXEXW-1101239', 'running', 1101239, '2018-04-05 17:13:53', 'multiple', 'Compte Client', '100', 0, '61.92', '1093.92', '', '', '', '', '10.32', '', '', '0', '', '', ''),
(30, 'P21WSEJUE3IC-1101238', 'running', 1101238, '2018-04-06 17:21:19', 'multiple', 'Compte Client', '50', 0, '0.00', '7981.00', '', '', '', '', '159.62', '', '', '0', '', '', ''),
(31, 'P49QDDUWUDCX-1101240', 'running', 1101240, '2018-04-07 22:49:30', 'multiple', 'Compte Client', '10', 0, '10.77', '118.47', '', '', '', '', '10.77', '', '', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_events`
--

CREATE TABLE `coupon_events` (
  `id` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `id_foreign` int(11) NOT NULL,
  `sorting` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupon_events`
--

INSERT INTO `coupon_events` (`id`, `id_local`, `id_foreign`, `sorting`) VALUES
(1, 1, 0, 1),
(2, 1, 0, 2),
(3, 1, 0, 3),
(4, 1, 0, 4),
(5, 2, 0, 1),
(6, 2, 0, 2),
(7, 2, 0, 3),
(8, 2, 0, 4),
(9, 3, 0, 1),
(10, 3, 0, 2),
(11, 3, 0, 3),
(12, 3, 0, 4),
(13, 4, 1, 1),
(14, 4, 2, 2),
(15, 4, 3, 3),
(16, 4, 4, 4),
(17, 4, 5, 5),
(18, 4, 6, 6),
(19, 5, 7, 1),
(20, 5, 7, 2),
(21, 5, 8, 3),
(22, 5, 9, 4),
(23, 5, 10, 5),
(24, 5, 11, 6),
(25, 5, 12, 7),
(26, 5, 13, 8),
(27, 5, 14, 9),
(28, 6, 15, 1),
(29, 6, 16, 2),
(30, 6, 17, 3),
(31, 6, 18, 4),
(32, 6, 19, 5),
(33, 6, 20, 6),
(34, 6, 21, 7),
(35, 6, 22, 8),
(36, 7, 23, 1),
(37, 7, 24, 2),
(38, 7, 25, 3),
(39, 7, 26, 4),
(40, 7, 27, 5),
(41, 7, 28, 6),
(42, 7, 29, 7),
(43, 7, 30, 8),
(44, 10, 31, 1),
(45, 10, 32, 2),
(46, 10, 33, 3),
(47, 10, 34, 4),
(48, 10, 35, 5),
(49, 10, 36, 6),
(50, 10, 37, 7),
(51, 11, 38, 1),
(52, 12, 39, 1),
(53, 12, 34, 2),
(54, 13, 40, 1),
(55, 13, 41, 2),
(56, 13, 42, 3),
(57, 13, 43, 4),
(58, 13, 44, 5),
(59, 13, 45, 6),
(60, 13, 46, 7),
(61, 13, 47, 8),
(62, 13, 48, 9),
(63, 13, 49, 10),
(64, 15, 50, 1),
(65, 15, 51, 2),
(66, 15, 52, 3),
(67, 15, 53, 4),
(68, 15, 54, 5),
(69, 15, 55, 6),
(70, 15, 56, 7),
(71, 15, 57, 8),
(72, 15, 58, 9),
(73, 15, 59, 10),
(74, 15, 60, 11),
(75, 15, 61, 12),
(76, 16, 50, 1),
(77, 16, 62, 2),
(78, 16, 52, 3),
(79, 16, 53, 4),
(80, 16, 54, 5),
(81, 16, 55, 6),
(82, 16, 56, 7),
(83, 16, 57, 8),
(84, 16, 58, 9),
(85, 16, 59, 10),
(86, 16, 63, 11),
(87, 16, 61, 12),
(88, 17, 64, 1),
(89, 17, 65, 2),
(90, 17, 66, 3),
(91, 17, 67, 4),
(92, 17, 68, 5),
(93, 17, 69, 6),
(94, 17, 70, 7),
(95, 17, 71, 8),
(96, 17, 72, 9),
(97, 18, 73, 1),
(98, 18, 74, 2),
(99, 18, 75, 3),
(100, 18, 76, 4),
(101, 18, 77, 5),
(102, 18, 78, 6),
(103, 18, 79, 7),
(104, 18, 80, 8),
(105, 18, 81, 9),
(106, 18, 82, 10),
(107, 18, 83, 11),
(108, 19, 84, 1),
(109, 19, 85, 2),
(110, 19, 86, 3),
(111, 19, 87, 4),
(112, 19, 88, 5),
(113, 19, 89, 6),
(114, 19, 81, 7),
(115, 19, 82, 8),
(116, 19, 90, 9),
(117, 19, 91, 10),
(118, 20, 92, 1),
(119, 21, 93, 1),
(120, 21, 94, 2),
(121, 21, 95, 3),
(122, 21, 96, 4),
(123, 22, 97, 1),
(124, 22, 98, 2),
(125, 22, 99, 3),
(126, 23, 100, 1),
(127, 23, 101, 2),
(128, 23, 102, 3),
(129, 23, 103, 4),
(130, 23, 104, 5),
(131, 23, 105, 6),
(132, 24, 106, 1),
(133, 24, 107, 2),
(134, 24, 108, 3),
(135, 25, 109, 1),
(136, 26, 110, 1),
(137, 27, 111, 1),
(138, 27, 112, 2),
(139, 27, 113, 3),
(140, 28, 114, 1),
(141, 29, 115, 1),
(142, 29, 116, 2),
(143, 29, 117, 3),
(144, 29, 118, 4),
(145, 29, 119, 5),
(146, 30, 120, 1),
(147, 30, 121, 2),
(148, 30, 122, 3),
(149, 31, 123, 1),
(150, 31, 124, 2),
(151, 31, 125, 3),
(152, 31, 126, 4),
(153, 31, 127, 5),
(154, 31, 128, 6);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `codepub` int(8) NOT NULL,
  `players` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `signe` varchar(255) NOT NULL,
  `cote` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `codepub`, `players`, `event`, `date`, `time`, `timestamp`, `signe`, `cote`, `score`, `status`, `user`) VALUES
(1, 9602, '&#xD;\n                                    Japan  -  Ukraine&#xD;\n                                ', 'Amicaux Internationaux&#xD;\n                                ', '2018-03-27 14:20:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,88&#xD;\n                                            ', '1 - 2', 2, ''),
(2, 1596, '&#xD;\n                                    Uganda  -  Malawi&#xD;\n                                ', 'Amicaux Internationaux&#xD;\n                                ', '2018-03-27 15:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,67&#xD;\n                                            ', '0 - 0', 2, ''),
(3, 1286, '&#xD;\n                                    Armenia  -  Lithuania&#xD;\n                                ', 'Amicaux Internationaux&#xD;\n                                ', '2018-03-27 17:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,57&#xD;\n                                            ', '0 - 1', 2, ''),
(4, 8417, '&#xD;\n                                    Georgia  -  Estonia&#xD;\n                                ', 'Amicaux Internationaux&#xD;\n                                ', '2018-03-27 17:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,80&#xD;\n                                            ', '2 - 0', 1, ''),
(5, 3032, '&#xD;\n                                    Russia  -  France&#xD;\n                                ', 'Amicaux Internationaux&#xD;\n                                ', '2018-03-27 17:50:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                6,50&#xD;\n                                            ', '1 - 3', 2, ''),
(6, 1287, '&#xD;\n                                    Azerbaijan  -  FYR Macedonia&#xD;\n                                ', 'Amicaux Internationaux&#xD;\n                                ', '2018-03-27 18:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                3,70&#xD;\n                                            ', '1 - 1', 2, ''),
(7, 1140, '&#xD;\n                                    Matlock Town  -  Stourbridge&#xD;\n                                ', 'England - Northern Premier Division&#xD;\n                                ', '2018-03-28 20:45:00', '18:30', '', '&#xD;\n                                                Plus 2.5&#xD;\n                                            ', '&#xD;\n                                                1,48&#xD;\n                                            ', '0 - 0', 2, ''),
(8, 1785, '&#xD;\n                                    Slavia Prague  -  VfL Wolfsburg&#xD;\n                                ', 'Champions League Femmes&#xD;\n                                ', '2018-03-28 18:00:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,12&#xD;\n                                            ', '1 - 1', 2, ''),
(9, 1782, '&#xD;\n                                    Varbergs Bois  -  Oddevold&#xD;\n                                ', 'Matches Amicaux Club&#xD;\n                                ', '2018-03-28 18:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,41&#xD;\n                                            ', '4 - 1', 1, ''),
(10, 1112, '&#xD;\n                                    Slimbridge AFC  -  Barnstaple Town&#xD;\n                                ', 'England - Southern Football League Division One West&#xD;\n                                ', '2018-03-28 20:45:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,80&#xD;\n                                            ', '2 - 2', 2, ''),
(11, 1784, '&#xD;\n                                    Linkopings  -  Manchester City&#xD;\n                                ', 'Champions League Femmes&#xD;\n                                ', '2018-03-28 18:00:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,52&#xD;\n                                            ', '3 - 5', 1, ''),
(12, 1786, '&#xD;\n                                    Barcelona  -  Lyon&#xD;\n                                ', 'Champions League Femmes&#xD;\n                                ', '2018-03-28 19:00:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,30&#xD;\n                                            ', '0 - 1', 1, ''),
(13, 1787, '&#xD;\n                                    Chelsea  -  Montpellier&#xD;\n                                ', 'Champions League Femmes&#xD;\n                                ', '2018-03-28 20:05:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,62&#xD;\n                                            ', '3 - 1', 1, ''),
(14, 6517, '&#xD;\n                                    Ascoli  -  Bari&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-28 20:30:00', '18:30', '', '&#xD;\n                                                2&amp;GG&#xD;\n                                            ', '&#xD;\n                                                5,69&#xD;\n                                            ', '1 - 0', 2, ''),
(15, 6519, '&#xD;\n                                    Cittadella  -  Spezia&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,88&#xD;\n                                            ', '2 - 1', 1, ''),
(16, 6521, '&#xD;\n                                    Brescia  -  Pescara&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,23&#xD;\n                                            ', '2 - 1', 1, ''),
(17, 6525, '&#xD;\n                                    Virtus Entella  -  Palermo&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                Plus 1.5&#xD;\n                                            ', '&#xD;\n                                                1,35&#xD;\n                                            ', '1 - 2', 1, ''),
(18, 6524, '&#xD;\n                                    Foggia  -  Pro Vercelli&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                Plus 1.5&#xD;\n                                            ', '&#xD;\n                                                1,23&#xD;\n                                            ', '2 - 1', 1, ''),
(19, 6520, '&#xD;\n                                    Carpi  -  Ternana&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,97&#xD;\n                                            ', '2 - 1', 1, ''),
(20, 6523, '&#xD;\n                                    Frosinone  -  Venezia&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,78&#xD;\n                                            ', '2 - 1', 1, ''),
(21, 6522, '&#xD;\n                                    Empoli  -  Salernitana&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,45&#xD;\n                                            ', '2 - 0', 1, ''),
(22, 6518, '&#xD;\n                                    Avellino  -  Parma&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                2,55&#xD;\n                                            ', '1 - 2', 1, ''),
(23, 7289, '&#xD;\n                                    Izarra  -  Amorebieta&#xD;\n                                ', 'Espagne - Segunda B Groupe II&#xD;\n                                ', '2018-03-29 12:00:00', '18:30', '', '&#xD;\n                                                Plus 2.5&#xD;\n                                            ', '&#xD;\n                                                2,16&#xD;\n                                            ', '2 - 0', 2, ''),
(24, 7944, '&#xD;\n                                    Portugalete  -  Real Sociedad C&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-29 11:30:00', '18:30', '', '&#xD;\n                                                Plus 2.5&#xD;\n                                            ', '&#xD;\n                                                2,10&#xD;\n                                            ', '1 - 0', 2, ''),
(25, 3632, '&#xD;\n                                    Alcobendas Sport  -  CDF Tres Cantos&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-29 13:00:00', '18:30', '', '&#xD;\n                                                Plus 2.5&#xD;\n                                            ', '&#xD;\n                                                1,65&#xD;\n                                            ', '0 - 2', 2, ''),
(26, 3633, '&#xD;\n                                    Alcorcon B  -  Trival Valderas&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-29 11:30:00', '18:30', '', '&#xD;\n                                                Plus 2.5&#xD;\n                                            ', '&#xD;\n                                                1,95&#xD;\n                                            ', '1 - 1', 2, ''),
(27, 3635, '&#xD;\n                                    Getafe B  -  El Alamo&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-29 11:30:00', '18:30', '', '&#xD;\n                                                Plus 2.5&#xD;\n                                            ', '&#xD;\n                                                1,55&#xD;\n                                            ', '3 - 0', 1, ''),
(28, 2392, '&#xD;\n                                    Perth Glory  -  Sydney FC&#xD;\n                                ', 'Australie - A League&#xD;\n                                ', '2018-03-29 12:30:00', '18:30', '', '&#xD;\n                                                2&amp;2+&#xD;\n                                            ', '&#xD;\n                                                2,33&#xD;\n                                            ', '2 - 3', 1, ''),
(29, 7290, '&#xD;\n                                    Real Union  -  Real Sociedad B&#xD;\n                                ', 'Espagne - Segunda B Groupe II&#xD;\n                                ', '2018-03-29 12:00:00', '18:30', '', '&#xD;\n                                                GG&amp;3+&#xD;\n                                            ', '&#xD;\n                                                2,68&#xD;\n                                            ', '0 - 0', 2, ''),
(30, 3631, '&#xD;\n                                    AD Colmenar Viejo  -  DAV Santa Ana&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-29 11:30:00', '18:30', '', '&#xD;\n                                                Plus 2.5&#xD;\n                                            ', '&#xD;\n                                                2,04&#xD;\n                                            ', '0 - 2', 2, ''),
(31, 6464, '&#xD;\n                                    Pistoiese  -  Viterbese&#xD;\n                                ', 'Italy - Serie C Group A&#xD;\n                                ', '2018-03-29 18:30:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                2,43&#xD;\n                                            ', '0 - 0', 2, ''),
(32, 3232, '&#xD;\n                                    Pavia  -  Seregno&#xD;\n                                ', 'Italie - Serie D&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,92&#xD;\n                                            ', '3 - 0', 1, ''),
(33, 3237, '&#xD;\n                                    Latina  -  SFF Atletico&#xD;\n                                ', 'Italie - Serie D&#xD;\n                                ', '2018-03-29 19:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,20&#xD;\n                                            ', '2 - 0', 1, ''),
(34, 6519, '&#xD;\n                                    Cittadella  -  Spezia&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,85&#xD;\n                                            ', '2 - 1', 1, ''),
(35, 6465, '&#xD;\n                                    Carrarese  -  Piacenza&#xD;\n                                ', 'Italy - Serie C Group A&#xD;\n                                ', '2018-03-29 18:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,92&#xD;\n                                            ', '2 - 0', 1, ''),
(36, 6523, '&#xD;\n                                    Frosinone  -  Venezia&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,64&#xD;\n                                            ', '2 - 1', 1, ''),
(37, 6524, '&#xD;\n                                    Foggia  -  Pro Vercelli&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,78&#xD;\n                                            ', '2 - 1', 1, ''),
(38, 6520, '&#xD;\n                                    Carpi  -  Ternana&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                HF X/1&#xD;\n                                            ', '&#xD;\n                                                5,09&#xD;\n                                            ', '2 - 1', 1, ''),
(39, 6518, '&#xD;\n                                    Avellino  -  Parma&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-29 20:30:00', '18:30', '', '&#xD;\n                                                12DC&#xD;\n                                            ', '&#xD;\n                                                1,37&#xD;\n                                            ', '1 - 2', 1, ''),
(40, 2213, '&#xD;\n                                    Villanovense  -  CD El Ejido&#xD;\n                                ', 'Espagne - Segunda B Groupe IV&#xD;\n                                ', '2018-03-30 12:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,93&#xD;\n                                            ', '1 - 3', 2, ''),
(41, 7592, '&#xD;\n                                    Guarnizo  -  SD Barreda&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-30 11:45:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,42&#xD;\n                                            ', '1 - 2', 2, ''),
(42, 7593, '&#xD;\n                                    CD Cayon  -  CD Bezana&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-30 12:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,45&#xD;\n                                            ', '2 - 0', 1, ''),
(43, 7595, '&#xD;\n                                    Espanyol B  -  Prat&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-30 12:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,45&#xD;\n                                            ', '1 - 1', 2, ''),
(44, 7597, '&#xD;\n                                    Azuaga  -  CP Cacereno&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-30 12:15:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,52&#xD;\n                                            ', '4 - 0', 2, ''),
(45, 1109, '&#xD;\n                                    Fundacion Albacete  -  Zaragoza CFF&#xD;\n                                ', 'Espagne - Primera Division Féminin&#xD;\n                                ', '2018-03-30 12:00:00', '18:30', '', '&#xD;\n                                                1XDC&#xD;\n                                            ', '&#xD;\n                                                1,30&#xD;\n                                            ', '3 - 0', 1, ''),
(46, 1110, '&#xD;\n                                    Real Sociedad  -  Levante UD&#xD;\n                                ', 'Espagne - Primera Division Féminin&#xD;\n                                ', '2018-03-30 12:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,82&#xD;\n                                            ', '3 - 0', 1, ''),
(47, 7594, '&#xD;\n                                    Santfeliuenc  -  Reus Deportiu B&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-30 12:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,71&#xD;\n                                            ', '1 - 2', 2, ''),
(48, 7596, '&#xD;\n                                    UA Horta  -  Cerdanyola del Valles&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-30 12:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,10&#xD;\n                                            ', '0 - 2', 2, ''),
(49, 7591, '&#xD;\n                                    Muleno  -  Mar Menor&#xD;\n                                ', 'Espagne - Tercera Division&#xD;\n                                ', '2018-03-30 11:30:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                2,32&#xD;\n                                            ', '3 - 2', 2, ''),
(50, 5442, '&#xD;\n                                    Le Havre  -  US Quevilly Rouen&#xD;\n                                ', 'France - Ligue 2&#xD;\n                                ', '2018-03-30 20:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,72&#xD;\n                                            ', '0 - 2', 2, ''),
(51, 9372, '&#xD;\n                                    Millwall  -  Nottingham Forest&#xD;\n                                ', 'England - Championship&#xD;\n                                ', '2018-03-30 14:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,85&#xD;\n                                            ', '2 - 0', 2, ''),
(52, 6055, '&#xD;\n                                    Consolat Marseille  -  Chambly&#xD;\n                                ', 'France - Nationale&#xD;\n                                ', '2018-03-30 20:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,48&#xD;\n                                            ', '1 - 1', 2, ''),
(53, 7449, '&#xD;\n                                    Barnet  -  Crewe&#xD;\n                                ', 'England - League Two&#xD;\n                                ', '2018-03-30 16:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,50&#xD;\n                                            ', '2 - 1', 1, ''),
(54, 6526, '&#xD;\n                                    Novara  -  Cesena&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-03-30 19:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,07&#xD;\n                                            ', '1 - 0', 1, ''),
(55, 3147, '&#xD;\n                                    Rotherham  -  Peterborough&#xD;\n                                ', 'England - League One&#xD;\n                                ', '2018-03-30 16:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,84&#xD;\n                                            ', '1 - 1', 2, ''),
(56, 5441, '&#xD;\n                                    AC Ajaccio  -  Clermont&#xD;\n                                ', 'France - Ligue 2&#xD;\n                                ', '2018-03-30 20:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,40&#xD;\n                                            ', '2 - 1', 1, ''),
(57, 7458, '&#xD;\n                                    Port Vale  -  Chesterfield&#xD;\n                                ', 'England - League Two&#xD;\n                                ', '2018-03-30 16:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,05&#xD;\n                                            ', '2 - 1', 1, ''),
(58, 9381, '&#xD;\n                                    Derby  -  Sunderland&#xD;\n                                ', 'England - Championship&#xD;\n                                ', '2018-03-30 20:45:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,56&#xD;\n                                            ', '1 - 4', 2, ''),
(59, 5446, '&#xD;\n                                    Paris FC  -  GFC Ajaccio&#xD;\n                                ', 'France - Ligue 2&#xD;\n                                ', '2018-03-30 20:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,62&#xD;\n                                            ', '0 - 0', 2, ''),
(60, 3140, '&#xD;\n                                    Wigan  -  Oldham&#xD;\n                                ', 'England - League One&#xD;\n                                ', '2018-03-30 14:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,43&#xD;\n                                            ', '3 - 0', 1, ''),
(61, 6058, '&#xD;\n                                    Red Star Saint Ouen  -  Sannois Saint Gratien&#xD;\n                                ', 'France - Nationale&#xD;\n                                ', '2018-03-30 20:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,68&#xD;\n                                            ', '3 - 0', 1, ''),
(62, 9372, '&#xD;\n                                    Millwall  -  Nottingham Forest&#xD;\n                                ', 'England - Championship&#xD;\n                                ', '-- :00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,85&#xD;\n                                            ', '2 - 0', 1, ''),
(63, 3140, '&#xD;\n                                    Wigan  -  Oldham&#xD;\n                                ', 'England - League One&#xD;\n                                ', '-- :00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,43&#xD;\n                                            ', '3 - 0', 1, ''),
(64, 2900, '&#xD;\n                                    Duisburg  -  Kaiserslautern&#xD;\n                                ', 'Allemagne - 2.Bundesliga&#xD;\n                                ', '2018-03-31 13:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,07&#xD;\n                                            ', '1 - 4', 2, ''),
(65, 4365, '&#xD;\n                                    Panetolikos  -  PAS Giannina&#xD;\n                                ', 'Grèce - Super Ligue&#xD;\n                                ', '-- :00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,05&#xD;\n                                            ', '1 - 0', 1, ''),
(66, 2766, '&#xD;\n                                    Girona  -  Levante&#xD;\n                                ', 'Espagne - Primera Division&#xD;\n                                ', '2018-03-31 13:00:00', '18:30', '', '&#xD;\n                                                GG&#xD;\n                                            ', '&#xD;\n                                                1,95&#xD;\n                                            ', '1 - 1', 1, ''),
(67, 4615, '&#xD;\n                                    Yeni Malatyaspor  -  Genclerbirligi&#xD;\n                                ', 'Turquie - Super Lig&#xD;\n                                ', '2018-03-31 12:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                2,20&#xD;\n                                            ', '4 - 1', 1, ''),
(68, 8358, '&#xD;\n                                    Amkar  -  Lokomotiv Moscow&#xD;\n                                ', 'Russie - Première Ligue&#xD;\n                                ', '-- :00', '18:30', '', '&#xD;\n                                                2&amp;2+&#xD;\n                                            ', '&#xD;\n                                                2,26&#xD;\n                                            ', '2 - 1', 2, ''),
(69, 2902, '&#xD;\n                                    Heidenheim  -  Ingolstadt&#xD;\n                                ', 'Allemagne - 2.Bundesliga&#xD;\n                                ', '2018-03-31 13:00:00', '18:30', '', '&#xD;\n                                                X2&amp;2-3Gls&#xD;\n                                            ', '&#xD;\n                                                2,70&#xD;\n                                            ', '1 - 2', 1, ''),
(70, 2901, '&#xD;\n                                    Dynamo Dresden  -  Nurnberg&#xD;\n                                ', 'Allemagne - 2.Bundesliga&#xD;\n                                ', '2018-03-31 13:00:00', '18:30', '', '&#xD;\n                                                1X&amp;2-3Gls&#xD;\n                                            ', '&#xD;\n                                                2,97&#xD;\n                                            ', '1 - 1 ', 1, ''),
(71, 2761, '&#xD;\n                                    Crystal Palace  -  Liverpool&#xD;\n                                ', 'England - Premier League&#xD;\n                                ', '2018-03-31 13:30:00', '18:30', '', '&#xD;\n                                                2&amp;3-&#xD;\n                                            ', '&#xD;\n                                                2,45&#xD;\n                                            ', '1 - 2', 1, ''),
(72, 5003, '&#xD;\n                                    Bologna  -  Roma&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 12:30:00', '18:30', '', '&#xD;\n                                                GG&#xD;\n                                            ', '&#xD;\n                                                1,75&#xD;\n                                            ', '1 - 1', 1, ''),
(73, 5008, '&#xD;\n                                    Inter  -  Verona&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 15:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,14&#xD;\n                                            ', '3 - 0', 1, ''),
(74, 5008, '&#xD;\n                                    Inter  -  Verona&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 15:00:00', '18:30', '', '&#xD;\n                                                X&#xD;\n                                            ', '&#xD;\n                                                8,10&#xD;\n                                            ', '3 - 0', 2, ''),
(75, 1347, '&#xD;\n                                    Las Palmas  -  Real Madrid&#xD;\n                                ', 'Espagne - Primera Division&#xD;\n                                ', '2018-03-31 18:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                8,75&#xD;\n                                            ', '0 - 3', 2, ''),
(76, 1347, '&#xD;\n                                    Las Palmas  -  Real Madrid&#xD;\n                                ', 'Espagne - Primera Division&#xD;\n                                ', '2018-03-31 18:30:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,32&#xD;\n                                            ', '0 - 3', 1, ''),
(77, 5012, '&#xD;\n                                    Juventus  -  Milan&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 20:45:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,63&#xD;\n                                            ', '3 - 1', 1, ''),
(78, 5012, '&#xD;\n                                    Juventus  -  Milan&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 20:45:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                6,62&#xD;\n                                            ', '3 - 1', 2, ''),
(79, 5007, '&#xD;\n                                    Genoa  -  Spal&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 15:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,95&#xD;\n                                            ', '1 - 1', 2, ''),
(80, 5007, '&#xD;\n                                    Genoa  -  Spal&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 15:00:00', '18:30', '', '&#xD;\n                                                X&#xD;\n                                            ', '&#xD;\n                                                3,15&#xD;\n                                            ', '1 - 1', 1, ''),
(81, 9924, '&#xD;\n                                    Bayern Munchen  -  Borussia Dortmund&#xD;\n                                ', 'Allemagne - Bundesliga&#xD;\n                                ', '2018-03-31 18:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,36&#xD;\n                                            ', '6 - 0', 1, ''),
(82, 9924, '&#xD;\n                                    Bayern Munchen  -  Borussia Dortmund&#xD;\n                                ', 'Allemagne - Bundesliga&#xD;\n                                ', '2018-03-31 18:30:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                8,65&#xD;\n                                            ', '6 - 0', 2, ''),
(83, 5010, '&#xD;\n                                    Sassuolo  -  Napoli&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 18:00:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,39&#xD;\n                                            ', '1 - 1', 2, ''),
(84, 9527, '&#xD;\n                                    Dijon  -  Marseille&#xD;\n                                ', 'France - Ligue 1&#xD;\n                                ', '2018-03-31 17:00:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,75&#xD;\n                                            ', '1 - 3', 1, ''),
(85, 2355, '&#xD;\n                                    PSG  -  Monaco (at Stade de Bordeaux)&#xD;\n                                ', 'France - Coupe de la Ligue Final&#xD;\n                                ', '2018-03-31 21:05:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,47&#xD;\n                                            ', '3 - 0', 1, ''),
(86, 2355, '&#xD;\n                                    PSG  -  Monaco (at Stade de Bordeaux)&#xD;\n                                ', 'France - Coupe de la Ligue Final&#xD;\n                                ', '2018-03-31 21:05:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                6,25&#xD;\n                                            ', '3 - 0', 2, ''),
(87, 2761, '&#xD;\n                                    Crystal Palace  -  Liverpool&#xD;\n                                ', 'England - Premier League&#xD;\n                                ', '2018-03-31 13:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                6,85&#xD;\n                                            ', '1 - 2', 2, ''),
(88, 2761, '&#xD;\n                                    Crystal Palace  -  Liverpool&#xD;\n                                ', 'England - Premier League&#xD;\n                                ', '2018-03-31 13:30:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,48&#xD;\n                                            ', '1 - 2', 1, ''),
(89, 2769, '&#xD;\n                                    Sevilla  -  Barcelona&#xD;\n                                ', 'Espagne - Primera Division&#xD;\n                                ', '2018-03-31 20:45:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,74&#xD;\n                                            ', '2 - 2', 2, ''),
(90, 5010, '&#xD;\n                                    Sassuolo  -  Napoli&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 18:00:00', '18:30', '', '&#xD;\n                                                X&#xD;\n                                            ', '&#xD;\n                                                4,45&#xD;\n                                            ', '1 - 1', 1, ''),
(91, 5010, '&#xD;\n                                    Sassuolo  -  Napoli&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-03-31 18:00:00', '18:30', '', '&#xD;\n                                                2&#xD;\n                                            ', '&#xD;\n                                                1,40&#xD;\n                                            ', '1 - 1', 2, ''),
(92, 3033, '&#xD;\n                                    Universitatea Craiova  -  CFR Cluj&#xD;\n                                ', 'Romania - Liga I Championship Round&#xD;\n                                ', '2018-03-31 19:45:00', '18:30', '', '&#xD;\n                                                HF X/X&#xD;\n                                            ', '&#xD;\n                                                4,47&#xD;\n                                            ', '0 - 0', 1, ''),
(93, 3444, '&#xD;\n                                    Avellino  -  Bari&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-04-02 15:00:00', '18:30', '', '&#xD;\n                                                HF 1/X2&#xD;\n                                            ', '&#xD;\n                                                11,46&#xD;\n                                            ', '1 - 2', 1, ''),
(94, 3443, '&#xD;\n                                    Foggia  -  Empoli&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-04-02 12:30:00', '18:30', '', '&#xD;\n                                                HF 1/X&#xD;\n                                            ', '&#xD;\n                                                14,46&#xD;\n                                            ', '0 - 3', 2, ''),
(95, 3445, '&#xD;\n                                    Carpi  -  Venezia&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-04-02 17:30:00', '18:30', '', '&#xD;\n                                                HF 1X/X2&#xD;\n                                            ', '&#xD;\n                                                2,25&#xD;\n                                            ', '0 - 0', 1, ''),
(96, 3446, '&#xD;\n                                    Parma  -  Palermo&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-04-02 20:30:00', '18:30', '', '&#xD;\n                                                HF 1X/X2&#xD;\n                                            ', '&#xD;\n                                                2,31&#xD;\n                                            ', '2 - 0/1 - 2', 2, ''),
(97, 1870, '&#xD;\n                                    Wacker Innsbruck  -  W. Neustadt&#xD;\n                                ', 'Autriche - Erste Liga&#xD;\n                                ', '2018-04-02 18:30:00', '18:30', '', '&#xD;\r\n                                                2:0&#xD;\r\n                                            ', '&#xD;\n                                                9,34&#xD;\n                                            ', '2 - 0', 1, ''),
(98, 1551, '&#xD;\n                                    Nottingham Forest  -  Barnsley&#xD;\n                                ', 'England - Championship&#xD;\n                                ', '2018-04-02 16:00:00', '18:30', '', '&#xD;\n                                                1:1&#xD;\n                                            ', '&#xD;\n                                                7,41&#xD;\n                                            ', 'void', 3, ''),
(99, 8395, '&#xD;\n                                    Shrewsbury  -  Oxford Utd&#xD;\n                                ', 'England - League One&#xD;\n                                ', '2018-04-02 16:00:00', '18:30', '', '&#xD;\n                                                HF 1/1&#xD;\n                                            ', '&#xD;\n                                                3,15&#xD;\n                                            ', '3 - 2/1 - 0 ', 1, ''),
(100, 3444, '&#xD;\n                                    Avellino  -  Bari&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-04-02 15:00:00', '18:30', '', '&#xD;\n                                                Moins 3.5&#xD;\n                                            ', '&#xD;\n                                                1,18&#xD;\n                                            ', '1 - 2', 1, ''),
(101, 1870, '&#xD;\n                                    Wacker Innsbruck  -  W. Neustadt&#xD;\n                                ', 'Autriche - Erste Liga&#xD;\n                                ', '2018-04-02 18:30:00', '18:30', '', '&#xD;\n                                                1XDC&#xD;\n                                            ', '&#xD;\n                                                1,18&#xD;\n                                            ', '2 - 0', 1, ''),
(102, 1572, '&#xD;\n                                    Macclesfield  -  Chester&#xD;\n                                ', 'England - National League&#xD;\n                                ', '2018-04-02 16:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,22&#xD;\n                                            ', '1 - 0', 1, ''),
(103, 8395, '&#xD;\n                                    Shrewsbury  -  Oxford Utd&#xD;\n                                ', 'England - League One&#xD;\n                                ', '2018-04-02 16:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,83&#xD;\n                                            ', '3 - 2', 1, ''),
(104, 1344, '&#xD;\n                                    Aldosivi  -  Villa Dalmine&#xD;\n                                ', 'Argentine - Primera B Nacional&#xD;\n                                ', '2018-04-03 02:05:00', '18:30', '', '&#xD;\n                                                1&amp;3-&#xD;\n                                            ', '&#xD;\n                                                2,16&#xD;\n                                            ', '1 - 0', 1, ''),
(105, 2075, '&#xD;\n                                    Ismaily SC  -  El Zamalek&#xD;\n                                ', 'Egypte - Première Ligue&#xD;\n                                ', '-- :00', '18:30', '', '&#xD;\n                                                Moins 2.5&#xD;\n                                            ', '&#xD;\n                                                1,39&#xD;\n                                            ', '3 - 1', 2, ''),
(106, 2134, '&#xD;\n                                    Maccabi Netanya  -  Maccabi Tel Aviv&#xD;\n                                ', 'Israël - Première Championnat Groupe&#xD;\n                                ', '-- :00', '18:30', '', '&#xD;\n                                                HF X/2&#xD;\n                                            ', '&#xD;\n                                                4,98&#xD;\n                                            ', '', 0, ''),
(107, 6490, '&#xD;\n                                    Genoa  -  Cagliari&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-04-03 18:30:00', '18:30', '', '&#xD;\n                                                2:0&#xD;\n                                            ', '&#xD;\n                                                8,16&#xD;\n                                            ', '2 - 1', 2, '');
INSERT INTO `events` (`id`, `codepub`, `players`, `event`, `date`, `time`, `timestamp`, `signe`, `cote`, `score`, `status`, `user`) VALUES
(108, 3448, '&#xD;\n                                    Pro Vercelli  -  Perugia&#xD;\n                                ', 'Italie - Serie B&#xD;\n                                ', '2018-04-03 18:00:00', '18:30', '', '&#xD;\n                                                HF X/X&#xD;\n                                            ', '&#xD;\n                                                4,93&#xD;\n                                            ', 'void', 3, ''),
(109, 1556, '&#xD;\n                                    Bolton Wanderers  -  Birmingham&#xD;\n                                ', 'England - Championship&#xD;\n                                ', '2018-04-03 21:00:00', '18:30', '', '&#xD;\n                                                HF X/X&#xD;\n                                            ', '&#xD;\n                                                4,62&#xD;\n                                            ', '0 - 1/0 - 0', 2, ''),
(110, 6490, '&#xD;\n                                    Genoa  -  Cagliari&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-04-03 18:30:00', '18:30', '', '&#xD;\n                                                HF X/1&#xD;\n                                            ', '&#xD;\n                                                4,75&#xD;\n                                            ', '0 - 0/2 - 1', 1, ''),
(111, 6494, '&#xD;\n                                    Milan  -  Inter&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-04-04 18:30:00', '18:30', '', '&#xD;\n                                                HF X/X&#xD;\n                                            ', '&#xD;\n                                                4,98&#xD;\n                                            ', '0 - 0/0 - 0', 1, ''),
(112, 1093, '&#xD;\n                                    Free State Stars  -  Kaizer Chiefs&#xD;\n                                ', 'Afrique du Sud - Première&#xD;\n                                ', '-- :00', '18:30', '', '&#xD;\n                                                0:0&#xD;\n                                            ', '&#xD;\n                                                7,10&#xD;\n                                            ', '', 0, ''),
(113, 2389, '&#xD;\n                                    GKS Belchatow  -  Stal Stalowa Wola&#xD;\n                                ', 'Pologne - 2. Liga&#xD;\n                                ', '2018-04-04 18:00:00', '18:30', '', '&#xD;\n                                                1:0&#xD;\n                                            ', '&#xD;\n                                                6,85&#xD;\n                                            ', '0 - 0', 2, ''),
(114, 1604, '&#xD;\n                                    Necaxa  -  Santos Laguna&#xD;\n                                ', 'Coupe de Mexique&#xD;\n                                ', '2018-04-05 04:15:00', '18:30', '', '&#xD;\n                                                HF X/X&#xD;\n                                            ', '&#xD;\n                                                4,98&#xD;\n                                            ', '1 - 1/1 - 0', 2, ''),
(115, 9199, '&#xD;\n                                    Lazio  -  Salzburg&#xD;\n                                ', 'Europa League&#xD;\n                                ', '2018-04-05 21:05:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,85&#xD;\n                                            ', '', 0, ''),
(116, 2278, '&#xD;\n                                    Wadi Degla  -  AL Asyooti Sport&#xD;\n                                ', 'Egypte - Première Ligue&#xD;\n                                ', '-- :00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,95&#xD;\n                                            ', '', 0, ''),
(117, 9196, '&#xD;\n                                    Arsenal  -  CSKA Moscow&#xD;\n                                ', 'Europa League&#xD;\n                                ', '2018-04-05 21:05:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,30&#xD;\n                                            ', '', 0, ''),
(118, 9197, '&#xD;\n                                    Atletico Madrid  -  Sporting Lisbon&#xD;\n                                ', 'Europa League&#xD;\n                                ', '2018-04-05 21:05:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,35&#xD;\n                                            ', '', 0, ''),
(119, 1928, '&#xD;\n                                    Switzerland  -  Scotland&#xD;\n                                ', 'UEFA WC Qualification Femme&#xD;\n                                ', '2018-04-05 19:00:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,63&#xD;\n                                            ', '', 0, ''),
(120, 4652, '&#xD;\n                                    GFC Ajaccio  -  Auxerre&#xD;\n                                ', 'France - Ligue 2&#xD;\n                                ', '2018-04-06 20:00:00', '18:30', '', '&#xD;\n                                                HF X/X&#xD;\n                                            ', '&#xD;\n                                                4,72&#xD;\n                                            ', '', 0, ''),
(121, 4658, '&#xD;\n                                    Brest  -  Valenciennes&#xD;\n                                ', 'France - Ligue 2&#xD;\n                                ', '2018-04-06 20:00:00', '18:30', '', '&#xD;\n                                                1:0&#xD;\n                                            ', '&#xD;\n                                                8,11&#xD;\n                                            ', '', 0, ''),
(122, 7218, '&#xD;\n                                    Istanbul Basaksehir  -  Yeni Malatyaspor&#xD;\n                                ', 'Turquie - Super Lig&#xD;\n                                ', '2018-04-06 19:00:00', '18:30', '', '&#xD;\n                                                HF X/1&#xD;\n                                            ', '&#xD;\n                                                4,17&#xD;\n                                            ', '', 0, ''),
(123, 2630, '&#xD;\n                                    Napoli  -  Chievo&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-04-08 15:00:00', '18:30', '', '&#xD;\n                                                1&amp;2+&#xD;\n                                            ', '&#xD;\n                                                1,26&#xD;\n                                            ', '', 0, ''),
(124, 2628, '&#xD;\n                                    Torino  -  Inter&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-04-08 12:30:00', '18:30', '', '&#xD;\n                                                GG&#xD;\n                                            ', '&#xD;\n                                                1,60&#xD;\n                                            ', '', 0, ''),
(125, 8117, '&#xD;\n                                    Chelsea  -  West Ham&#xD;\n                                ', 'England - Premier League&#xD;\n                                ', '2018-04-08 17:30:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,26&#xD;\n                                            ', '', 0, ''),
(126, 2632, '&#xD;\n                                    Udinese  -  Lazio&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-04-08 18:00:00', '18:30', '', '&#xD;\n                                                Home Over 0.5 &#xD;\n                                            ', '&#xD;\n                                                1,34&#xD;\n                                            ', '', 0, ''),
(127, 2633, '&#xD;\n                                    Milan  -  Sassuolo&#xD;\n                                ', 'Italie - Serie A&#xD;\n                                ', '2018-04-08 20:45:00', '18:30', '', '&#xD;\n                                                GG&#xD;\n                                            ', '&#xD;\n                                                1,84&#xD;\n                                            ', '', 0, ''),
(128, 7587, '&#xD;\n                                    Real Madrid  -  Atletico Madrid&#xD;\n                                ', 'Espagne - Primera Division&#xD;\n                                ', '2018-04-08 16:15:00', '18:30', '', '&#xD;\n                                                1&#xD;\n                                            ', '&#xD;\n                                                1,72&#xD;\n                                            ', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `livescore`
--

CREATE TABLE `livescore` (
  `id` int(11) NOT NULL,
  `home` varchar(255) NOT NULL,
  `away` varchar(255) NOT NULL,
  `players` varchar(255) NOT NULL,
  `score` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `datefr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_events`
--

CREATE TABLE `sub_events` (
  `id` int(11) NOT NULL,
  `codepub` int(8) NOT NULL,
  `players` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `cote_1` varchar(255) NOT NULL,
  `cote_x` varchar(255) NOT NULL,
  `cote_2` varchar(255) NOT NULL,
  `cote_12dc` varchar(255) NOT NULL,
  `cote_1xdc` varchar(255) NOT NULL,
  `cote_x2dc` varchar(255) NOT NULL,
  `cote_gg` varchar(255) NOT NULL,
  `cote_ng` varchar(255) NOT NULL,
  `cote_over15` varchar(255) NOT NULL,
  `cote_under15` varchar(255) NOT NULL,
  `cote_over25` varchar(255) NOT NULL,
  `cote_under25` varchar(255) NOT NULL,
  `football` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `coupon` varchar(255) NOT NULL,
  `avoir` varchar(255) NOT NULL,
  `droit` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `solde` varchar(255) NOT NULL,
  `id_coupon` int(11) NOT NULL,
  `id_usager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `date`, `type`, `coupon`, `avoir`, `droit`, `sujet`, `solde`, `id_coupon`, `id_usager`) VALUES
(1, '2018-03-12 19:20:28', 'pari', 'P20MQXODGKHX-1', '', '-1', '', '2775.29', 1, 1),
(2, '2018-03-12 23:15:49', 'pari', 'P15MN3RCKPMJ-1', '', '-1', '', '2774.29', 2, 1),
(3, '2018-03-12 23:21:23', 'pari', 'P21SXUEUPYSR-1', '', '-100', '', '2674.29', 3, 1),
(4, '2018-03-13 12:36:43', 'pari', 'P36K8B6NRWLO-111297', '', '-50', '', '9618', 4, 7),
(5, '2018-03-13 12:45:00', 'pari', 'P45B96IXXXUR-111297', '', '-25', '', '9593', 5, 7),
(6, '2018-03-13 19:30:11', 'neteller', '', '10', '', '', '10', 0, 9),
(7, '2018-03-13 21:11:46', 'pari', 'P11FXPAEC3GW-111301', '', '-1', '', '99999', 6, 12),
(8, '2018-03-13 21:12:12', 'gain pari', 'P11FXPAEC3GW-111301', '0', '', '', '99999', 6, 12),
(9, '2018-03-13 21:19:50', 'pari', 'P19NKCNPGPMI-1725413', '', '-1', '', '99998', 7, 12),
(10, '2018-03-13 21:41:43', 'pari', 'P41FTOYKYQWS-1725414', '', '-1', '', '1001', 8, 13),
(11, '2018-03-13 22:42:51', 'pari', 'P42KJXLTPBX3-1725414', '', '-1', '', '1000', 9, 13),
(12, '2018-03-14 02:15:59', 'gain pari', 'P42KJXLTPBX3-1725414', '5.07', '', '', '1005.07', 9, 13),
(13, '2018-03-14 16:55:17', 'pari', 'P55WWCMYL3NT-111299', '', '-1', '', '9', 10, 9),
(14, '2018-03-15 17:48:44', 'pari', 'P48KITBFCCGC-111299', '', '-1', '', '8', 11, 9),
(15, '2018-03-15 17:50:15', 'pari', 'P50NLKNANSD8-111299', '', '-1', '', '7', 12, 9),
(16, '2018-03-15 18:21:36', 'pari', 'P21WUIC2IDSJ-1725414', '', '-100', '', '905.07', 13, 13),
(17, '2018-03-15 20:14:21', 'pari', 'P14EKNMS9HCN-111299', '', '-1', '', '6', 14, 9),
(18, '2018-03-16 17:59:17', 'pari', 'P595UFC75UZT-111299', '', '-1', '', '5', 15, 9),
(19, '2018-03-16 19:01:39', 'pari', 'P01FYYK7JIQI-111299', '', '-2', '', '3', 16, 9),
(20, '2018-03-17 07:30:56', 'pari', 'P30XJQIMUHBH-111299', '', '-1', '', '2', 17, 9),
(21, '2018-03-18 22:32:31', 'pari', 'P32N8FRIS86Q-111299', '', '-1', '', '1', 18, 9),
(22, '2018-03-20 20:33:24', 'pari', 'P33QI6ORDXQD-1725415', '', '-0.5', '', '999.5', 19, 15),
(23, '2018-03-22 21:22:01', 'pari', 'P22M3RBFDLXQ-1725416', '', '-10', '', '999999989', 20, 16),
(24, '2018-03-22 21:22:02', 'pari', 'P22GIERLKXZT-1725416', '', '-10', '', '999999979', 21, 16),
(25, '2018-03-22 21:22:02', 'pari', 'P22RPLMSRBYP-1725416', '', '-10', '', '999999969', 22, 16),
(26, '2018-03-23 11:13:12', 'pari', 'P13AEHKSBMOD-1725416', '', '-100', '', '999999869', 23, 16),
(27, '2018-03-23 11:18:13', 'neteller', '', '200', '', '', '1000000069', 0, 16),
(28, '2018-03-23 12:10:34', 'pari', 'P10PHMHNCAG9-1725416', '', '-69', '', '1000000000', 24, 16),
(29, '2018-03-23 15:44:22', 'pari', 'P44YTISYRXZE-1725417', '', '-1', '', '9', 25, 17),
(30, '2018-03-23 16:17:47', 'neteller', '', '-200', '', '', '999999800', 0, 16),
(31, '2018-03-23 16:18:13', 'neteller', '', '-999999800 ', '', '', '0', 0, 16),
(32, '2018-03-23 16:18:26', 'neteller', '', '90000000000000000000000000000000000000000000000000000000', '', '', '9e55', 0, 16),
(33, '2018-03-23 16:19:05', 'neteller', '', '-500000000000', '', '', '9e55', 0, 16),
(34, '2018-03-23 16:19:53', 'neteller', '', '-900000000000000', '', '', '9e55', 0, 16),
(35, '2018-03-23 16:20:15', 'neteller', '', '-99999999999999999999999999999999999999999999999999999999999999999999999999999999', '', '', '-1e80', 0, 16),
(36, '2018-03-23 16:20:29', 'neteller', '', '1', '', '', '-1e80', 0, 16),
(37, '2018-03-23 16:20:38', 'neteller', '', '10000000000000', '', '', '-1e80', 0, 16),
(38, '2018-03-23 16:20:50', 'neteller', '', '100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000', '', '', '1e158', 0, 16),
(39, '2018-03-23 16:35:45', 'gain pari', 'P36K8B6NRWLO-111297', '0', '', '', '', 4, 0),
(40, '2018-03-24 09:53:36', 'gain pari', 'P10PHMHNCAG9-1725416', '0', '', '', '', 24, 0),
(41, '2018-03-24 09:53:50', 'gain pari', 'P13AEHKSBMOD-1725416', '0', '', '', '', 23, 0),
(42, '2018-03-24 10:16:38', 'pari', 'P16ZDBJFDDHK-1725418', '', '-10', '', '1.0E+20', 26, 18),
(43, '2018-03-24 14:45:35', 'pari', 'P45XKIOLYKNB-1725418', '', '-60', '', '1.0E+20', 27, 18),
(44, '2018-03-24 15:50:37', 'pari', 'P50DUUCHSNEO-1725420', '', '-0.5', '', '9.5', 28, 20),
(45, '2018-03-25 16:55:01', 'pari', 'P55JYLLZYUDX-1725420', '', '-0.5', '', '9', 29, 20),
(46, '2018-03-26 10:47:25', 'pari', 'P47X9LWGE5UC-1725420', '', '-0.5', '', '8.5', 30, 20),
(47, '2018-03-26 13:55:47', 'pari', 'P55DAIOWY7FK-1', '', '-1 000', '', '89999999', 31, 25),
(48, '2018-03-26 13:58:33', 'neteller', '', '65362', '', '', '90065361', 0, 25),
(49, '2018-03-26 14:01:47', 'pari', 'P01WTBYFMHND-1101236', '', '-1000', '', '6854689555652', 32, 26),
(50, '2018-03-26 14:06:42', 'gain pari', 'P01WTBYFMHND-1101236', '4170', '', '', '6854689559822', 32, 26),
(51, '2018-03-26 16:38:29', 'pari', 'P38COMBRMRIF-1101236', '', '-1000', '', '6854689558822', 33, 26),
(52, '2018-03-26 16:57:31', 'pari', 'P57NBSBWMKCN-', '', '-1', '', '8', 34, 23),
(53, '2018-03-26 17:14:37', 'neteller', '', '20', '', '', '1020', 0, 27),
(54, '2018-03-26 17:15:00', 'pari', 'P15GJQKBRAKI-1101236', '', '-8000', '', '6854689550822', 35, 26),
(55, '2018-03-26 17:16:06', 'pari', 'P16O6MUTCICG-1101236', '', '-10', '', '6854689550812', 36, 26),
(56, '2018-03-26 17:25:19', 'neteller', '', '-1020', '', '', '0', 0, 27),
(57, '2018-03-26 18:09:15', 'pari', 'P09GXR4DFLXI-1101239', '', '-0.5', '', '1049.5', 37, 29),
(58, '2018-03-26 18:16:34', 'pari', 'P16UUXRTYLQ9-1101239', '', '-0.5', '', '1049', 38, 29),
(59, '2018-03-26 18:17:32', 'gain pari', 'P57NBSBWMKCN-', '0', '', '', '', 34, 0),
(60, '2018-03-26 18:17:41', 'gain pari', 'P38COMBRMRIF-1101236', '0', '', '', '6854689550812', 33, 26),
(61, '2018-03-26 18:35:56', 'pari', 'P35CGWKH5QYR-1101239', '', '-0.5', '', '1048.5', 39, 29),
(62, '2018-03-26 19:42:54', 'pari', 'P42YUOJZJQWD-1101238', '', '-20', '', '3492', 40, 28),
(63, '2018-03-26 20:39:59', 'pari', 'P39EWOB8CUQR-', '', '-0.5', '', '999998.5', 1, 31),
(64, '2018-03-26 20:41:16', 'pari', 'P41YCSZUZEPG-', '', '-0.5', '', '999998', 2, 31),
(65, '2018-03-26 20:42:15', 'pari', 'P42KMYJAXICJ-', '', '-0.5', '', '999997.5', 3, 31),
(66, '2018-03-27 10:01:34', 'pari', 'P01PCESZLQ4M-1083637', '', '-1', '', '9999999999', 4, 33),
(67, '2018-03-28 15:04:01', 'pari', 'P04JSZGT2XBO-1083637', '', '-1', '', '9999999998', 5, 33),
(68, '2018-03-29 08:37:34', 'pari', 'P37JHOJDHOTH-1083637', '', '-1', '', '9999999997', 6, 33),
(69, '2018-03-29 10:25:05', 'pari', 'P25ZENFRGZF2-1083637', '', '-0.5', '', '9999999996.5', 7, 33),
(70, '2018-03-29 10:25:06', 'pari', 'P25BJKKGT88L-1083637', '', '-0.5', '', '9999999996', 8, 33),
(71, '2018-03-29 10:25:06', 'pari', 'P257GQDCEFAA-1083637', '', '-0.5', '', '9999999995.5', 9, 33),
(72, '2018-03-29 16:57:18', 'pari', 'P57ILMZNUFAY-1101237', '', '-1', '', '499', 10, 35),
(73, '2018-03-29 18:22:56', 'pari', 'P22ZPNJKGQXG-1101237', '', '-10', '', '489', 11, 35),
(74, '2018-03-29 18:33:22', 'pari', 'P33TXMJUSOI4-1101237', '', '-1', '', '488', 12, 35),
(75, '2018-03-29 23:40:54', 'gain pari', 'P22ZPNJKGQXG-1101237', '50.9', '', '', '538.9', 11, 35),
(76, '2018-03-29 23:50:35', 'gain pari', 'P37JHOJDHOTH-1083637', '108.31', '', '', '10000000103.81', 6, 33),
(77, '2018-03-30 09:03:41', 'pari', 'P03RAFUPFZA9-1083637', '', '-1', '', '10000000102.81', 13, 33),
(78, '2018-03-30 09:03:43', 'pari', 'P03QHZFWHLKD-1083637', '', '-1', '', '10000000101.81', 14, 33),
(79, '2018-03-30 11:43:05', 'pari', 'P431ZIGWXJAM-1083637', '', '-0.5', '', '10000000101.31', 15, 33),
(80, '2018-03-30 13:04:05', 'pari', 'P04BN9DMKN8T-1083637', '', '-0.5', '', '10000000100.81', 16, 33),
(81, '2018-03-31 11:03:04', 'pari', 'P03WYG2UYNW8-1083637', '', '-0.5', '', '10000000100.31', 17, 33),
(82, '2018-03-31 11:19:33', 'pari', 'P19G4YBCJTXE-1083637', '', '-0.5', '', '10000000099.81', 18, 33),
(83, '2018-03-31 11:41:31', 'pari', 'P41GNRBRLZBA-1083637', '', '-0.5', '', '10000000099.31', 19, 33),
(84, '2018-03-31 16:44:28', 'pari', 'P44SRA9JO1ND-1101237', '', '-10', '', '528.9', 20, 35),
(85, '2018-04-01 23:11:25', 'pari', 'P11WUBCZSNII-1101238', '', '-1', '', '504', 21, 36),
(86, '2018-04-01 23:42:29', 'pari', 'P42SLEFBK9NY-1101238', '', '-50', '', '454', 22, 36),
(87, '2018-04-02 00:52:51', 'gain pari', 'P44SRA9JO1ND-1101237', '44.7', '', '', '573.6', 20, 35),
(88, '2018-04-02 01:39:55', 'pari', 'P39STGLUIPSP-1101238', '', '-4', '', '450', 23, 36),
(89, '2018-04-02 21:52:31', 'gain pari', 'P42SLEFBK9NY-1101238', '0', '', '', '450', 22, 36),
(90, '2018-04-03 10:01:07', 'pari', 'P01IIWYWJ7EI-1101238', '', '-50', '', '400', 24, 36),
(91, '2018-04-03 16:19:17', 'pari', 'P19ZONYKTE42-1101238', '', '-50', '', '350', 25, 36),
(92, '2018-04-03 16:20:09', 'pari', 'P202RFC5IYLX-1101238', '', '-50', '', '300', 26, 36),
(93, '2018-04-04 09:27:23', 'pari', 'P27SZWEEYSEJ-1101238', '', '-50', '', '250', 27, 36),
(94, '2018-04-04 14:56:54', 'pari', 'P56HAOQH8OQY-1101238', '', '-100', '', '150', 28, 36),
(95, '2018-04-05 00:21:31', 'gain pari', 'P202RFC5IYLX-1101238', '237.5', '', '', '387.5', 26, 36),
(96, '2018-04-05 17:13:53', 'pari', 'P13MYBAQXEXW-1101239', '', '-100', '', '1320', 29, 37),
(97, '2018-04-06 17:21:19', 'pari', 'P21WSEJUE3IC-1101238', '', '-50', '', '337.5', 30, 36),
(98, '2018-04-07 22:49:30', 'pari', 'P49QDDUWUDCX-1101240', '', '-10', '', '0', 31, 38);

-- --------------------------------------------------------

--
-- Table structure for table `usager`
--

CREATE TABLE `usager` (
  `id` int(11) NOT NULL,
  `identificateur` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `solde` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usager`
--

INSERT INTO `usager` (`id`, `identificateur`, `username`, `password`, `solde`, `nom`, `prenom`) VALUES
(33, '1083637', 'hammadifathi', '947f8a6758f72aab27505624e1998dfa7a7998ed', '10000000099.31', 'Ben Mabrouk', 'Hammadi Fathi'),
(35, '1101237', 'Sanctus', 'f742cd1200edd412d49f373142ed5f5f2410f8d2', '573.6', 'Agnus', 'Sanctus'),
(36, '1101238', 'Sabrijlassi', '17f2620f02e13b92962de002f75732e9bbff07a4', '337.5', 'Sabri', 'Jlassi'),
(37, '1101239', 'adamov', '24f9bccb7bfb31d284db28b5caa39f5fd9e10269', '1320', 'Sanches', 'Adamov'),
(38, '1101240', 'Aminebrahem', 'cc906d7819be41a845a2f57a3898590ea534d4cc', '0', 'Brahem', 'Amine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_events`
--
ALTER TABLE `all_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `be_user`
--
ALTER TABLE `be_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `be_user_stat`
--
ALTER TABLE `be_user_stat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_coupon` (`code_coupon`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `coupon_events`
--
ALTER TABLE `coupon_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_local` (`id_local`),
  ADD KEY `id_foreign` (`id_foreign`),
  ADD KEY `id_local_2` (`id_local`),
  ADD KEY `id_foreign_2` (`id_foreign`),
  ADD KEY `id_local_3` (`id_local`),
  ADD KEY `id_foreign_3` (`id_foreign`),
  ADD KEY `id_local_4` (`id_local`),
  ADD KEY `id_foreign_4` (`id_foreign`),
  ADD KEY `id_local_foreign` (`id_local`,`id_foreign`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event` (`event`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `codepub` (`codepub`),
  ADD KEY `timestamp` (`timestamp`),
  ADD KEY `signe` (`signe`),
  ADD KEY `codepub_2` (`codepub`);

--
-- Indexes for table `livescore`
--
ALTER TABLE `livescore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_events`
--
ALTER TABLE `sub_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `codepub` (`codepub`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_coupon` (`id_coupon`),
  ADD KEY `id_usager` (`id_usager`);

--
-- Indexes for table `usager`
--
ALTER TABLE `usager`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identificateur` (`identificateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_events`
--
ALTER TABLE `all_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `be_user`
--
ALTER TABLE `be_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `be_user_stat`
--
ALTER TABLE `be_user_stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `coupon_events`
--
ALTER TABLE `coupon_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `livescore`
--
ALTER TABLE `livescore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_events`
--
ALTER TABLE `sub_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `usager`
--
ALTER TABLE `usager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
