-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2021 at 01:48 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinfast`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_city`
--

CREATE TABLE `table_city` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matp` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_contact`
--

CREATE TABLE `table_contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `diachi` text COLLATE utf8_unicode_ci,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_counter`
--

CREATE TABLE `table_counter` (
  `id` int(11) NOT NULL,
  `tm` int(11) DEFAULT '0',
  `ip` varchar(16) COLLATE utf8_unicode_ci DEFAULT '0.0.0.0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_counter`
--

INSERT INTO `table_counter` (`id`, `tm`, `ip`) VALUES
(1, 1622297722, '::1'),
(2, 1622299475, '::1'),
(3, 1622301218, '::1'),
(4, 1622304792, '::1'),
(5, 1622305802, '::1'),
(6, 1622306717, '::1'),
(7, 1622344055, '::1'),
(8, 1622345350, '::1'),
(9, 1622346683, '::1'),
(10, 1622348005, '::1'),
(11, 1622349013, '::1'),
(12, 1622349939, '::1'),
(13, 1622350874, '::1'),
(14, 1622378145, '::1'),
(15, 1622379758, '::1'),
(16, 1622380821, '::1'),
(17, 1622381834, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `table_district`
--

CREATE TABLE `table_district` (
  `id` int(11) NOT NULL,
  `id_city` int(11) DEFAULT '0',
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maqh` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_excel`
--

CREATE TABLE `table_excel` (
  `id` int(11) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_gallery`
--

CREATE TABLE `table_gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_photo` int(11) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_mau` int(11) DEFAULT '0',
  `taptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_video` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kind` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `val` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_gallery`
--

INSERT INTO `table_gallery` (`id`, `id_photo`, `photo`, `hash`, `tenen`, `tenvi`, `id_mau`, `taptin`, `link_video`, `stt`, `type`, `com`, `kind`, `val`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(17, 1, 'fadiln1-5596.jpg', '', NULL, '', 0, NULL, NULL, 2, 'san-pham', 'product', 'man', 'san-pham', 1, 1622301209, 0),
(18, 1, 'fadiln2-2753.jpg', '', NULL, '', 0, NULL, NULL, 3, 'san-pham', 'product', 'man', 'san-pham', 1, 1622301209, 0),
(19, 1, 'fadilorange-2708.png', '', NULL, '', 0, NULL, NULL, 1, 'san-pham', 'product', 'man', 'san-pham', 1, 1622301209, 0),
(20, 1, 'fadilred-1-2089.png', '', NULL, '', 0, NULL, NULL, 4, 'san-pham', 'product', 'man', 'san-pham', 1, 1622301209, 0),
(21, 1, 'fadilred-2376.png', '', NULL, '', 0, NULL, NULL, 5, 'san-pham', 'product', 'man', 'san-pham', 1, 1622301209, 0),
(22, 1, 'fadilsilver-8171.png', '', NULL, '', 0, NULL, NULL, 6, 'san-pham', 'product', 'man', 'san-pham', 1, 1622301209, 0),
(23, 1, 'fadilwhite-3301.png', '', NULL, '', 0, NULL, NULL, 7, 'san-pham', 'product', 'man', 'san-pham', 1, 1622301209, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_lang`
--

CREATE TABLE `table_lang` (
  `id` int(11) UNSIGNED NOT NULL,
  `giatri` text COLLATE utf8_unicode_ci,
  `langvi` text COLLATE utf8_unicode_ci,
  `langen` text COLLATE utf8_unicode_ci,
  `stt` int(11) UNSIGNED DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_member`
--

CREATE TABLE `table_member` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_social` tinyint(1) DEFAULT '0',
  `username` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxacnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` tinyint(1) DEFAULT '0',
  `login_session` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastlogin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaysinh` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_news`
--

CREATE TABLE `table_news` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_list` int(11) DEFAULT '0',
  `id_item` int(11) DEFAULT '0',
  `id_cat` int(11) DEFAULT '0',
  `id_sub` int(11) DEFAULT '0',
  `id_tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noibat` tinyint(1) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` longblob,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `luotxem` int(11) DEFAULT '0',
  `chucvuvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_news`
--

INSERT INTO `table_news` (`id`, `id_list`, `id_item`, `id_cat`, `id_sub`, `id_tags`, `noibat`, `photo`, `options`, `tenkhongdauvi`, `tenkhongdauen`, `noidungen`, `noidungvi`, `motaen`, `motavi`, `tenen`, `tenvi`, `stt`, `hienthi`, `type`, `ngaytao`, `ngaysua`, `luotxem`, `chucvuvi`, `taptin`) VALUES
(1, 0, 0, 0, 0, NULL, 1, 'cafef1-6770.png', NULL, 'vingroup-la-mo-trong-nhung-tap-doan-dong-gop-chong-dich-covid-19-noi-bat-nhat-khu-vuc-chau-a', '', NULL, 0x266c743b702667743b4de1bb9b6920c491c3a2792c2074726f6e672062e1baa36e2074696e207468e1bb9d692073e1bbb12063e1bba76120c490c3a06920434e4e20284de1bbb9292c2056696e67726f7570207472e1bb9f207468c3a06e6820c49169e1bb836d206e68e1baa56e206de1bb9b692063e1bba761205669e1bb8774204e616d2074726f6e67207669e1bb8763206368e1bb916e6720c491e1baa1692064e1bb8b636820436f7669642d31392e2056696e67726f757020c491c6b0e1bba36320c491e1bb812063e1baad702c206cc3a020c491e1baa169206469e1bb876e207469c3aa75206269e1bb83752074726f6e67206e68e1bbaf6e6720646f616e68206e676869e1bb8770206ce1bb9b6e207472c3aa6e20746fc3a06e2063e1baa7752067c3b3702073e1bba963206368e1bb916e672064e1bb8b63682c2063c3b96e672076e1bb9b692063c3a1632054e1baad7020c4916fc3a06e206b68c3a163206e68c6b020416c69626162612c204879756e6461692c20474d2e266c743b2f702667743b0d0a, NULL, 'Mới đây, trong bản tin thời sự của Đài CNN (Mỹ), Vingroup trở thành điểm nhấn mới của Việt Nam trong việc chống đại dịch Covid-19. Vingroup được đề cập, là đại diện tiêu biểu trong những doanh nghiệp lớn trên toàn cầu góp sức chống dịch, cùng với các Tập đoàn khác như Alibaba, Hyundai, GM.', NULL, 'VINGROUP LÀ MỘ TRONG NHỮNG TẬP ĐOÀN ĐÓNG GÓP CHỐNG DỊCH COVID-19 NỔI BẬT NHẤT KHU VỰC CHÂU Á', 1, 1, 'tin-tuc', 1622304945, 0, 0, NULL, NULL),
(2, 0, 0, 0, 0, NULL, 1, 'cafef1-6770-8485.png', NULL, 'vingroup-la-mo-trong-nhung-tap-doan-dong-gop-chong-dich-covid-19-noi-bat-nhat-khu-vuc-chau-a-1', NULL, NULL, 0x266c743b702667743b4de1bb9b6920c491c3a2792c2074726f6e672062e1baa36e2074696e207468e1bb9d692073e1bbb12063e1bba76120c490c3a06920434e4e20284de1bbb9292c2056696e67726f7570207472e1bb9f207468c3a06e6820c49169e1bb836d206e68e1baa56e206de1bb9b692063e1bba761205669e1bb8774204e616d2074726f6e67207669e1bb8763206368e1bb916e6720c491e1baa1692064e1bb8b636820436f7669642d31392e2056696e67726f757020c491c6b0e1bba36320c491e1bb812063e1baad702c206cc3a020c491e1baa169206469e1bb876e207469c3aa75206269e1bb83752074726f6e67206e68e1bbaf6e6720646f616e68206e676869e1bb8770206ce1bb9b6e207472c3aa6e20746fc3a06e2063e1baa7752067c3b3702073e1bba963206368e1bb916e672064e1bb8b63682c2063c3b96e672076e1bb9b692063c3a1632054e1baad7020c4916fc3a06e206b68c3a163206e68c6b020416c69626162612c204879756e6461692c20474d2e266c743b2f702667743b0d0a, NULL, 'Mới đây, trong bản tin thời sự của Đài CNN (Mỹ), Vingroup trở thành điểm nhấn mới của Việt Nam trong việc chống đại dịch Covid-19. Vingroup được đề cập, là đại diện tiêu biểu trong những doanh nghiệp lớn trên toàn cầu góp sức chống dịch, cùng với các Tập đoàn khác như Alibaba, Hyundai, GM.', NULL, 'VINGROUP LÀ MỘ TRONG NHỮNG TẬP ĐOÀN ĐÓNG GÓP CHỐNG DỊCH COVID-19 NỔI BẬT NHẤT KHU VỰC CHÂU Á (1)', 0, 1, 'tin-tuc', 1622344821, 0, 0, NULL, NULL),
(3, 0, 0, 0, 0, NULL, 1, 'cafef1-6770-8485-5092.png', NULL, 'vingroup-la-mo-trong-nhung-tap-doan-dong-gop-chong-dich-covid-19-noi-bat-nhat-khu-vuc-chau-a-1-1', NULL, NULL, 0x266c743b702667743b4de1bb9b6920c491c3a2792c2074726f6e672062e1baa36e2074696e207468e1bb9d692073e1bbb12063e1bba76120c490c3a06920434e4e20284de1bbb9292c2056696e67726f7570207472e1bb9f207468c3a06e6820c49169e1bb836d206e68e1baa56e206de1bb9b692063e1bba761205669e1bb8774204e616d2074726f6e67207669e1bb8763206368e1bb916e6720c491e1baa1692064e1bb8b636820436f7669642d31392e2056696e67726f757020c491c6b0e1bba36320c491e1bb812063e1baad702c206cc3a020c491e1baa169206469e1bb876e207469c3aa75206269e1bb83752074726f6e67206e68e1bbaf6e6720646f616e68206e676869e1bb8770206ce1bb9b6e207472c3aa6e20746fc3a06e2063e1baa7752067c3b3702073e1bba963206368e1bb916e672064e1bb8b63682c2063c3b96e672076e1bb9b692063c3a1632054e1baad7020c4916fc3a06e206b68c3a163206e68c6b020416c69626162612c204879756e6461692c20474d2e266c743b2f702667743b0d0a, NULL, 'Mới đây, trong bản tin thời sự của Đài CNN (Mỹ), Vingroup trở thành điểm nhấn mới của Việt Nam trong việc chống đại dịch Covid-19. Vingroup được đề cập, là đại diện tiêu biểu trong những doanh nghiệp lớn trên toàn cầu góp sức chống dịch, cùng với các Tập đoàn khác như Alibaba, Hyundai, GM.', NULL, 'VINGROUP LÀ MỘ TRONG NHỮNG TẬP ĐOÀN ĐÓNG GÓP CHỐNG DỊCH COVID-19 NỔI BẬT NHẤT KHU VỰC CHÂU Á (1) (1)', 0, 1, 'tin-tuc', 1622344822, 0, 0, NULL, NULL),
(4, 0, 0, 0, 0, NULL, 1, 'cafef1-6770-8485-5092-3319.png', NULL, 'vingroup-la-mo-trong-nhung-tap-doan-dong-gop-chong-dich-covid-19-noi-bat-nhat-khu-vuc-chau-a-1-1-1', NULL, NULL, 0x266c743b702667743b4de1bb9b6920c491c3a2792c2074726f6e672062e1baa36e2074696e207468e1bb9d692073e1bbb12063e1bba76120c490c3a06920434e4e20284de1bbb9292c2056696e67726f7570207472e1bb9f207468c3a06e6820c49169e1bb836d206e68e1baa56e206de1bb9b692063e1bba761205669e1bb8774204e616d2074726f6e67207669e1bb8763206368e1bb916e6720c491e1baa1692064e1bb8b636820436f7669642d31392e2056696e67726f757020c491c6b0e1bba36320c491e1bb812063e1baad702c206cc3a020c491e1baa169206469e1bb876e207469c3aa75206269e1bb83752074726f6e67206e68e1bbaf6e6720646f616e68206e676869e1bb8770206ce1bb9b6e207472c3aa6e20746fc3a06e2063e1baa7752067c3b3702073e1bba963206368e1bb916e672064e1bb8b63682c2063c3b96e672076e1bb9b692063c3a1632054e1baad7020c4916fc3a06e206b68c3a163206e68c6b020416c69626162612c204879756e6461692c20474d2e266c743b2f702667743b0d0a, NULL, 'Mới đây, trong bản tin thời sự của Đài CNN (Mỹ), Vingroup trở thành điểm nhấn mới của Việt Nam trong việc chống đại dịch Covid-19. Vingroup được đề cập, là đại diện tiêu biểu trong những doanh nghiệp lớn trên toàn cầu góp sức chống dịch, cùng với các Tập đoàn khác như Alibaba, Hyundai, GM.', NULL, 'VINGROUP LÀ MỘ TRONG NHỮNG TẬP ĐOÀN ĐÓNG GÓP CHỐNG DỊCH COVID-19 NỔI BẬT NHẤT KHU VỰC CHÂU Á (1) (1) (1)', 0, 1, 'tin-tuc', 1622344823, 0, 0, NULL, NULL),
(5, 0, 0, 0, 0, NULL, 1, 'cafef1-6770-8485-5092-3319-5169.png', NULL, 'vingroup-la-mo-trong-nhung-tap-doan-dong-gop-chong-dich-covid-19-noi-bat-nhat-khu-vuc-chau-a-1-1-1-1', NULL, NULL, 0x266c743b702667743b4de1bb9b6920c491c3a2792c2074726f6e672062e1baa36e2074696e207468e1bb9d692073e1bbb12063e1bba76120c490c3a06920434e4e20284de1bbb9292c2056696e67726f7570207472e1bb9f207468c3a06e6820c49169e1bb836d206e68e1baa56e206de1bb9b692063e1bba761205669e1bb8774204e616d2074726f6e67207669e1bb8763206368e1bb916e6720c491e1baa1692064e1bb8b636820436f7669642d31392e2056696e67726f757020c491c6b0e1bba36320c491e1bb812063e1baad702c206cc3a020c491e1baa169206469e1bb876e207469c3aa75206269e1bb83752074726f6e67206e68e1bbaf6e6720646f616e68206e676869e1bb8770206ce1bb9b6e207472c3aa6e20746fc3a06e2063e1baa7752067c3b3702073e1bba963206368e1bb916e672064e1bb8b63682c2063c3b96e672076e1bb9b692063c3a1632054e1baad7020c4916fc3a06e206b68c3a163206e68c6b020416c69626162612c204879756e6461692c20474d2e266c743b2f702667743b0d0a, NULL, 'Mới đây, trong bản tin thời sự của Đài CNN (Mỹ), Vingroup trở thành điểm nhấn mới của Việt Nam trong việc chống đại dịch Covid-19. Vingroup được đề cập, là đại diện tiêu biểu trong những doanh nghiệp lớn trên toàn cầu góp sức chống dịch, cùng với các Tập đoàn khác như Alibaba, Hyundai, GM.', NULL, 'VINGROUP LÀ MỘ TRONG NHỮNG TẬP ĐOÀN ĐÓNG GÓP CHỐNG DỊCH COVID-19 NỔI BẬT NHẤT KHU VỰC CHÂU Á (1) (1) (1) (1)', 0, 1, 'tin-tuc', 1622344824, 0, 0, NULL, NULL),
(6, 0, 0, 0, 0, NULL, 1, 'cafef1-6770-8485-5092-3319-5169-2816.png', '{\"p\":\"cafef1-6770-8485-5092-3319-5169-2816.png\",\"w\":640,\"h\":400,\"m\":\"image\\/png\"}', 'vingroup-la-mo-trong-nhung-tap-doan-dong-gop-chong-dich-covid-19-noi-bat-nhat-khu-vuc-chau-a-1-1-1-1-1', NULL, NULL, 0x266c743b702667743b4de1bb9b6920c491c3a2792c2074726f6e672062e1baa36e2074696e207468e1bb9d692073e1bbb12063e1bba76120c490c3a06920434e4e20284de1bbb9292c2056696e67726f7570207472e1bb9f207468c3a06e6820c49169e1bb836d206e68e1baa56e206de1bb9b692063e1bba761205669e1bb8774204e616d2074726f6e67207669e1bb8763206368e1bb916e6720c491e1baa1692064e1bb8b636820436f7669642d31392e2056696e67726f757020c491c6b0e1bba36320c491e1bb812063e1baad702c206cc3a020c491e1baa169206469e1bb876e207469c3aa75206269e1bb83752074726f6e67206e68e1bbaf6e6720646f616e68206e676869e1bb8770206ce1bb9b6e207472c3aa6e20746fc3a06e2063e1baa7752067c3b3702073e1bba963206368e1bb916e672064e1bb8b63682c2063c3b96e672076e1bb9b692063c3a1632054e1baad7020c4916fc3a06e206b68c3a163206e68c6b020416c69626162612c204879756e6461692c20474d2e266c743b2f702667743b0d0a, NULL, 'Mới đây, trong bản tin thời sự của Đài CNN (Mỹ), Vingroup trở thành điểm nhấn mới của Việt Nam trong việc chống đại dịch Covid-19. Vingroup được đề cập, là đại diện tiêu biểu trong những doanh nghiệp lớn trên toàn cầu góp sức chống dịch, cùng với các Tập đoàn khác như Alibaba, Hyundai, GM.', NULL, 'VINGROUP LÀ MỘ TRONG NHỮNG TẬP ĐOÀN ĐÓNG GÓP CHỐNG DỊCH COVID-19 NỔI BẬT NHẤT KHU VỰC CHÂU Á (1) (1) (1) (1) (1)', 0, 1, 'tin-tuc', 1622344850, 0, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_newsletter`
--

CREATE TABLE `table_newsletter` (
  `id` int(11) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` text COLLATE utf8_unicode_ci,
  `chude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `ghichu` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` text COLLATE utf8_unicode_ci,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT '0',
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhthucthanhtoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `table_news_cat`
--

CREATE TABLE `table_news_cat` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_list` int(11) DEFAULT '0',
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_news_item`
--

CREATE TABLE `table_news_item` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_list` int(11) DEFAULT '0',
  `id_cat` int(11) DEFAULT '0',
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysua` int(11) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_news_list`
--

CREATE TABLE `table_news_list` (
  `id` int(11) UNSIGNED NOT NULL,
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_news_sub`
--

CREATE TABLE `table_news_sub` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_list` int(11) DEFAULT '0',
  `id_cat` int(11) DEFAULT '0',
  `id_item` int(11) DEFAULT '0',
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysua` int(11) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_order`
--

CREATE TABLE `table_order` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT '0',
  `madonhang` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `httt` int(11) DEFAULT '0',
  `tamtinh` double DEFAULT '0',
  `tonggia` double DEFAULT '0',
  `city` int(11) DEFAULT '0',
  `district` int(11) DEFAULT '0',
  `wards` int(11) DEFAULT '0',
  `phiship` double DEFAULT '0',
  `yeucaukhac` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `ngaytao` int(11) DEFAULT '0',
  `tinhtrang` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_order_detail`
--

CREATE TABLE `table_order_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) DEFAULT '0',
  `id_order` int(11) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia` double DEFAULT '0',
  `giamoi` double DEFAULT '0',
  `soluong` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_permission`
--

CREATE TABLE `table_permission` (
  `ma` int(11) UNSIGNED NOT NULL,
  `ma_nhom_quyen` int(11) DEFAULT '0',
  `quyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_permission_group`
--

CREATE TABLE `table_permission_group` (
  `id` int(11) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_photo`
--

CREATE TABLE `table_photo` (
  `id` int(11) UNSIGNED NOT NULL,
  `noibat` int(11) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci,
  `link_video` text COLLATE utf8_unicode_ci,
  `options` text COLLATE utf8_unicode_ci,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `act` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_photo`
--

INSERT INTO `table_photo` (`id`, `noibat`, `photo`, `noidungen`, `noidungvi`, `motaen`, `motavi`, `tenen`, `tenvi`, `link`, `link_video`, `options`, `type`, `act`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 0, 'logo-3046.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"p\":\"logo-3046.png\",\"w\":500,\"h\":141,\"m\":\"image\\/png\"}', 'logo', 'photo_static', 0, 1, 1622299981, 0),
(2, 0, 'logo-7533.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'favicon', 'photo_static', 0, 1, 1622299987, 0),
(3, 0, 'home-car-bg-desktop-4996.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'quang-cao', 'photo_static', 0, 1, 1622300045, 0),
(4, 0, '2003-1-86430.jpg', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'slide', 'photo_multi', 1, 1, 0, 0),
(5, 0, '2003-2-17380.jpg', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'slide', 'photo_multi', 1, 1, 0, 0),
(6, 0, '2003-3-96390.jpg', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'slide', 'photo_multi', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE `table_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_list` int(11) DEFAULT '0',
  `id_item` int(11) DEFAULT '0',
  `id_cat` int(11) DEFAULT '0',
  `id_sub` int(11) DEFAULT '0',
  `id_brand` int(11) DEFAULT '0',
  `id_size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_mau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noibat` tinyint(1) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masp` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia` double DEFAULT '0',
  `giacu` double DEFAULT '0',
  `giakm` double DEFAULT '0',
  `giamoi` double DEFAULT '0',
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `luotxem` int(11) DEFAULT '0',
  `noibat1` tinyint(1) DEFAULT '0',
  `noibat2` tinyint(1) DEFAULT '0',
  `diachivi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dientich` int(11) DEFAULT '0',
  `motanganvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauxe` text COLLATE utf8_unicode_ci,
  `tinhnangvi` text COLLATE utf8_unicode_ci,
  `noibatvi` text COLLATE utf8_unicode_ci,
  `tongquanvi` text COLLATE utf8_unicode_ci,
  `thongsovi` text COLLATE utf8_unicode_ci,
  `phibienso` double DEFAULT NULL,
  `phisudungduongbo` double DEFAULT NULL,
  `phikiemdinh` double DEFAULT NULL,
  `baohiemtnds` double DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`id`, `id_list`, `id_item`, `id_cat`, `id_sub`, `id_brand`, `id_size`, `id_mau`, `id_tags`, `noibat`, `photo`, `options`, `tenkhongdauvi`, `tenkhongdauen`, `noidungen`, `noidungvi`, `motaen`, `motavi`, `tenen`, `tenvi`, `masp`, `gia`, `giacu`, `giakm`, `giamoi`, `stt`, `hienthi`, `type`, `ngaytao`, `ngaysua`, `luotxem`, `noibat1`, `noibat2`, `diachivi`, `dientich`, `motanganvi`, `mauxe`, `tinhnangvi`, `noibatvi`, `tongquanvi`, `thongsovi`, `phibienso`, `phisudungduongbo`, `phikiemdinh`, `baohiemtnds`, `banner`) VALUES
(1, 0, 0, 0, 0, 0, NULL, NULL, NULL, 1, 'fadilred-1-5164.png', '{\"p\":\"fadilred-1-5164.png\",\"w\":1024,\"h\":600,\"m\":\"image\\/png\"}', 'xe-vinfast-fadil', '', NULL, '', NULL, NULL, NULL, 'XE VINFAST FADIL', NULL, 382500000, 500000000, 0, 0, 1, 1, 'san-pham', 1622301212, 1622307487, 18, 0, 0, NULL, 0, NULL, '[{\"mauxe\":\"FADIL TI\\u00caU CHU\\u1ea8N\",\"giabanle\":\"382500000\",\"khuyenmai\":\"\"},{\"mauxe\":\"FADIL N\\u00c2NG C\\u1ea4P\",\"giabanle\":\"482500000\",\"khuyenmai\":\"\"},{\"mauxe\":\"FADIL CAO C\\u1ea4P\",\"giabanle\":\"582500000\",\"khuyenmai\":\"\"}]', NULL, '&lt;p&gt;&lt;strong&gt;FADIL BẢN TIÊU CHUẨN TRẢ TRƯỚC 56 TRIỆU LẤY XE NGAY&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;FADIL BẢN NÂNG CAO TRẢ TRƯỚC 61 TRIỆU LẤY XE NGAY&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;FADIL BẢN CAO CẤP TRẢ TRƯỚC 66 TRIỆU LẤY XE NGAY&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Ưu đãi 0% lãi suất trong vòng 2 năm&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Cam kết lãi suất từ năm thứ 3 trở đi không trên 10,5%.&lt;/strong&gt;&lt;/p&gt;\r\n', '&lt;article id=&quot;car-content&quot;&gt;\r\n&lt;p&gt;&lt;img alt=&quot;fadil&quot; src=&quot;https://vinfastdongsaigon.com/content/VINFAST/san-pham/fadil/01.jpg&quot; /&gt;&lt;br /&gt;\r\n&lt;img alt=&quot;fadil&quot; src=&quot;https://vinfastdongsaigon.com/content/VINFAST/san-pham/fadil/02.jpg&quot; /&gt;&lt;/p&gt;\r\n&lt;/article&gt;\r\n\r\n&lt;h2&gt;THÔNG SỐ XE VINFAST FADIL&lt;/h2&gt;\r\n\r\n&lt;article id=&quot;car-specs&quot;&gt;\r\n&lt;p&gt;&lt;img alt=&quot;fadil&quot; src=&quot;https://vinfastdongsaigon.com/content/VINFAST/san-pham/fadil/03.jpg&quot; /&gt;&lt;br /&gt;\r\n&lt;img alt=&quot;fadil&quot; src=&quot;https://vinfastdongsaigon.com/content/VINFAST/san-pham/fadil/04.jpg&quot; /&gt;&lt;/p&gt;\r\n&lt;/article&gt;\r\n', '&lt;p&gt;Thông số&lt;/p&gt;\r\n', 1000000, 1000000, 1000000, 1000000, 'lux-a20-6248.jpg'),
(2, 0, 0, 0, 0, 0, NULL, NULL, NULL, 1, '2-8733.jpg', '{\"p\":\"2-8733.jpg\",\"w\":1024,\"h\":576,\"m\":\"image\\/jpeg\"}', 'vinfast-vfe34-2021', '', NULL, '', NULL, NULL, NULL, 'Vinfast VFE34 2021', NULL, 590000000, 0, 0, 0, 1, 1, 'san-pham', 1622304790, 0, 11, 0, 0, NULL, 0, NULL, '[{\"mauxe\":\"VINFAST VFE34 2021\",\"giabanle\":\"590000000\",\"khuyenmai\":\"\"}]', NULL, '', '', '', 0, 0, 0, 0, 'vf31frontview21-9808.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_product_brand`
--

CREATE TABLE `table_product_brand` (
  `id` int(11) NOT NULL,
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_cat`
--

CREATE TABLE `table_product_cat` (
  `id` int(11) NOT NULL,
  `id_list` int(11) DEFAULT '0',
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_item`
--

CREATE TABLE `table_product_item` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_list` int(11) DEFAULT '0',
  `id_cat` int(11) DEFAULT '0',
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysua` int(11) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_list`
--

CREATE TABLE `table_product_list` (
  `id` int(11) NOT NULL,
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `noibat1` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_mau`
--

CREATE TABLE `table_product_mau` (
  `id` int(11) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mau` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaihienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_price`
--

CREATE TABLE `table_product_price` (
  `id` int(11) UNSIGNED NOT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `giatu` double NOT NULL DEFAULT '0',
  `giaden` double NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_size`
--

CREATE TABLE `table_product_size` (
  `id` int(11) UNSIGNED NOT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_sub`
--

CREATE TABLE `table_product_sub` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_list` int(11) DEFAULT '0',
  `id_cat` int(11) DEFAULT '0',
  `id_item` int(11) DEFAULT '0',
  `noibat` tinyint(1) DEFAULT '0',
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysua` int(11) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_pushonesignal`
--

CREATE TABLE `table_pushonesignal` (
  `id` int(11) UNSIGNED NOT NULL,
  `number` int(5) DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '0',
  `date` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `times` int(11) DEFAULT '0',
  `time_star` int(11) DEFAULT '0',
  `gio` int(11) DEFAULT '0',
  `phut` int(11) DEFAULT '0',
  `solancon` int(11) DEFAULT '0',
  `timegannhat` int(11) DEFAULT '0',
  `test` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_seo`
--

CREATE TABLE `table_seo` (
  `id` int(11) UNSIGNED NOT NULL,
  `idmuc` int(11) DEFAULT '0',
  `com` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `act` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titlevi` text COLLATE utf8_unicode_ci,
  `keywordsvi` text COLLATE utf8_unicode_ci,
  `descriptionvi` text COLLATE utf8_unicode_ci,
  `titleen` text COLLATE utf8_unicode_ci,
  `keywordsen` text COLLATE utf8_unicode_ci,
  `descriptionen` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `table_seo`
--

INSERT INTO `table_seo` (`id`, `idmuc`, `com`, `act`, `type`, `titlevi`, `keywordsvi`, `descriptionvi`, `titleen`, `keywordsen`, `descriptionen`) VALUES
(6, 1, 'product', 'man', 'san-pham', '', '', '', NULL, NULL, NULL),
(3, 2, 'product', 'man', 'san-pham', '', '', '', NULL, NULL, NULL),
(4, 1, 'news', 'man', 'tin-tuc', '', '', '', NULL, NULL, NULL),
(11, 0, 'setting', 'capnhat', 'setting', '', '', '', NULL, NULL, NULL),
(12, 0, 'static', 'capnhat', 'gioi-thieu', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_seopage`
--

CREATE TABLE `table_seopage` (
  `id` int(11) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titlevi` text COLLATE utf8_unicode_ci,
  `keywordsvi` text COLLATE utf8_unicode_ci,
  `descriptionvi` text COLLATE utf8_unicode_ci,
  `titleen` text COLLATE utf8_unicode_ci,
  `keywordsen` text COLLATE utf8_unicode_ci,
  `descriptionen` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `table_setting`
--

CREATE TABLE `table_setting` (
  `id` int(11) NOT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `mastertool` text COLLATE utf8_unicode_ci,
  `headjs` text COLLATE utf8_unicode_ci,
  `bodyjs` text COLLATE utf8_unicode_ci,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `analytics` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_setting`
--

INSERT INTO `table_setting` (`id`, `options`, `mastertool`, `headjs`, `bodyjs`, `tenvi`, `tenen`, `analytics`) VALUES
(1, '{\"diachi\":\"Vincom Plaza C\\u1ed9ng H\\u00f2a, 15-17, C\\u1ed9ng H\\u00f2a, Ph\\u01b0\\u1eddng 4, Qu\\u1eadn T\\u00e2n B\\u00ecnh, TP.HCM\",\"email\":\"phunguyen2811996@gmail.com\",\"zalo\":\"0919560550\\u00a0\",\"hotline\":\"0919560550\\u00a0\",\"hotline2\":\"0919560550\\u00a0\",\"dienthoai\":\"0919560550\\u00a0\",\"oaidzalo\":\"0919560550\\u00a0\",\"website\":\"autovinfast-vietnam.com\",\"fanpage\":\"facebook.com\\/facebook\\/\",\"toado_iframe\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3919.139536006187!2d106.65612546428726!3d10.800623261701235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175293732dc552d%3A0xb5c2bdb614c42760!2zMTUgQ-G7mW5nIEjDsmEsIFBoxrDhu51uZyA0LCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1622350505273!5m2!1svi!2s\\\" width=\\\"600\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\"><\\/iframe>\"}', '', '', '', 'VINFAST TRƯỜNG CHINH', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `table_static`
--

CREATE TABLE `table_static` (
  `id` int(11) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_static`
--

INSERT INTO `table_static` (`id`, `photo`, `options`, `tenkhongdauvi`, `tenkhongdauen`, `noidungen`, `noidungvi`, `motaen`, `motavi`, `tenen`, `tenvi`, `taptin`, `type`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, NULL, NULL, '', '', NULL, '&lt;p&gt;Để nhận được &lt;b&gt;&quot;SỰ PHỤC VỤ TỐT NHẤT&quot;&lt;/b&gt;, bạn hãy liên hệ với &lt;b&gt;0919560550&lt;/b&gt; hoặc điền thông tin dưới đây. Tôi chắn chắn rằng bạn sẽ nhận được &lt;b&gt;&quot;ƯU ĐÃI TỐT NHẤT&quot;&lt;/b&gt; cho dòng xe mà bạn quan tâm. Cảm ơn bạn đã chọn tôi!&lt;/p&gt;\r\n', NULL, NULL, NULL, NULL, NULL, 'content-baogia', 1, 1622347028, 0),
(2, NULL, NULL, '', '', NULL, '&lt;h2&gt;VinFast Cộng Hòa&lt;/h2&gt;\r\n&lt;ul&gt;\r\n	&lt;li&gt;Địa chỉ: Vincom Plaza Cộng Hòa, 15-17, Cộng Hòa, Phường 4, Quận Tân Bình, TP.HCM&lt;/li&gt;\r\n	&lt;li&gt;Hotline KD: &lt;a href=&quot;tel:0919560550&quot;&gt;0919560550&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;Website: &lt;a href=&quot;https://autovinfast-vietnam.com/&quot;&gt;https://autovinfast-vietnam.com&lt;/a&gt; - Email: &lt;a href=&quot;mailto:phunguyen2811996@gmail.com&quot;&gt;phunguyen2811996@gmail.com&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', NULL, NULL, NULL, NULL, NULL, 'lienhe', 1, 1622350737, 0),
(3, NULL, NULL, '', '', NULL, '&lt;h2&gt;VinFast Cộng Hòa&lt;/h2&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Địa chỉ: Vincom Plaza Cộng Hòa, 15-17, Cộng Hòa, Phường 4, Quận Tân Bình, TP.HCM&lt;/li&gt;\r\n	&lt;li&gt;Hotline KD: &lt;a href=&quot;tel:0919560550&quot;&gt;0919560550&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;Website: &lt;a href=&quot;https://autovinfast-vietnam.com/&quot;&gt;https://autovinfast-vietnam.com&lt;/a&gt; - Email: &lt;a href=&quot;mailto:phunguyen2811996@gmail.com&quot;&gt;phunguyen2811996@gmail.com&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', NULL, NULL, NULL, NULL, NULL, 'footer', 1, 1622350745, 0),
(4, NULL, NULL, 'gioi-thieu-ve-vinfast', '', NULL, '', NULL, NULL, NULL, 'Giới thiệu về Vinfast', NULL, 'gioi-thieu', 1, 1622378472, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_status`
--

CREATE TABLE `table_status` (
  `id` int(11) NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_street`
--

CREATE TABLE `table_street` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_city` int(11) DEFAULT '0',
  `id_district` int(11) DEFAULT '0',
  `id_wards` int(11) DEFAULT '0',
  `ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `gia` double DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_tags`
--

CREATE TABLE `table_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `noibat` tinyint(1) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_nhomquyen` int(11) DEFAULT '0',
  `username` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxacnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` tinyint(1) DEFAULT '0',
  `login_session` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastlogin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '0',
  `quyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT '0',
  `role` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `id_nhomquyen`, `username`, `password`, `maxacnhan`, `avatar`, `ten`, `dienthoai`, `email`, `diachi`, `gioitinh`, `login_session`, `user_token`, `lastlogin`, `hienthi`, `quyen`, `ngaysinh`, `stt`, `role`) VALUES
(1, 0, 'admin', '6fc5d639f5a5752512988d16e95599a5', '', '', '', '', '', '', 1, '239bcec3ea6c09ee3359c29b02b98b9a', 'decd028b0c22c40b7a258c90cdec8305', '1622381063', 1, '239bcec3ea6c09ee3359c29b02b98b9a', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `table_user_limit`
--

CREATE TABLE `table_user_limit` (
  `id` int(11) NOT NULL,
  `login_ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login_attempts` int(11) NOT NULL,
  `attempt_time` int(11) NOT NULL,
  `locked_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_user_log`
--

CREATE TABLE `table_user_log` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT '0',
  `ip` varchar(16) COLLATE utf8_unicode_ci DEFAULT '0.0.0.0',
  `timelog` int(11) DEFAULT '0',
  `user_agent` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_user_log`
--

INSERT INTO `table_user_log` (`id`, `id_user`, `ip`, `timelog`, `user_agent`) VALUES
(1, 1, '::1', 1622297769, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36 Edg/91.0.864.37'),
(2, 1, '::1', 1622344672, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36 Edg/91.0.864.37'),
(3, 1, '::1', 1622378429, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36 Edg/91.0.864.37');

-- --------------------------------------------------------

--
-- Table structure for table `table_user_online`
--

CREATE TABLE `table_user_online` (
  `session` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_user_online`
--

INSERT INTO `table_user_online` (`session`, `time`, `ip`) VALUES
('ubtc1j5sg8c1qvinq1cue1cngb', 1622382423, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `table_wards`
--

CREATE TABLE `table_wards` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_city` int(11) DEFAULT '0',
  `id_district` int(11) DEFAULT '0',
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mapx` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cap` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `gia` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_city`
--
ALTER TABLE `table_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_contact`
--
ALTER TABLE `table_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_counter`
--
ALTER TABLE `table_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_district`
--
ALTER TABLE `table_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_excel`
--
ALTER TABLE `table_excel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_gallery`
--
ALTER TABLE `table_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_lang`
--
ALTER TABLE `table_lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_member`
--
ALTER TABLE `table_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_news`
--
ALTER TABLE `table_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_newsletter`
--
ALTER TABLE `table_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_news_list`
--
ALTER TABLE `table_news_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_order`
--
ALTER TABLE `table_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_order_detail`
--
ALTER TABLE `table_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_permission`
--
ALTER TABLE `table_permission`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `table_permission_group`
--
ALTER TABLE `table_permission_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_photo`
--
ALTER TABLE `table_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_brand`
--
ALTER TABLE `table_product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_cat`
--
ALTER TABLE `table_product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_item`
--
ALTER TABLE `table_product_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_list`
--
ALTER TABLE `table_product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_mau`
--
ALTER TABLE `table_product_mau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_price`
--
ALTER TABLE `table_product_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_size`
--
ALTER TABLE `table_product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_sub`
--
ALTER TABLE `table_product_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pushonesignal`
--
ALTER TABLE `table_pushonesignal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_seo`
--
ALTER TABLE `table_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_seopage`
--
ALTER TABLE `table_seopage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_setting`
--
ALTER TABLE `table_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_static`
--
ALTER TABLE `table_static`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_status`
--
ALTER TABLE `table_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_street`
--
ALTER TABLE `table_street`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tags`
--
ALTER TABLE `table_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user_limit`
--
ALTER TABLE `table_user_limit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user_log`
--
ALTER TABLE `table_user_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_wards`
--
ALTER TABLE `table_wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_city`
--
ALTER TABLE `table_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_contact`
--
ALTER TABLE `table_contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_counter`
--
ALTER TABLE `table_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `table_district`
--
ALTER TABLE `table_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_excel`
--
ALTER TABLE `table_excel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_gallery`
--
ALTER TABLE `table_gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `table_lang`
--
ALTER TABLE `table_lang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_member`
--
ALTER TABLE `table_member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_news`
--
ALTER TABLE `table_news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_newsletter`
--
ALTER TABLE `table_newsletter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_news_list`
--
ALTER TABLE `table_news_list`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_order`
--
ALTER TABLE `table_order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_order_detail`
--
ALTER TABLE `table_order_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_permission`
--
ALTER TABLE `table_permission`
  MODIFY `ma` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_permission_group`
--
ALTER TABLE `table_permission_group`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_photo`
--
ALTER TABLE `table_photo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_product_brand`
--
ALTER TABLE `table_product_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_product_cat`
--
ALTER TABLE `table_product_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_product_item`
--
ALTER TABLE `table_product_item`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_product_list`
--
ALTER TABLE `table_product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_product_mau`
--
ALTER TABLE `table_product_mau`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_product_price`
--
ALTER TABLE `table_product_price`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_product_size`
--
ALTER TABLE `table_product_size`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_product_sub`
--
ALTER TABLE `table_product_sub`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_pushonesignal`
--
ALTER TABLE `table_pushonesignal`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_seo`
--
ALTER TABLE `table_seo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_seopage`
--
ALTER TABLE `table_seopage`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_setting`
--
ALTER TABLE `table_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_static`
--
ALTER TABLE `table_static`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_status`
--
ALTER TABLE `table_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_street`
--
ALTER TABLE `table_street`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_tags`
--
ALTER TABLE `table_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `table_user_limit`
--
ALTER TABLE `table_user_limit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_user_log`
--
ALTER TABLE `table_user_log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_wards`
--
ALTER TABLE `table_wards`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
