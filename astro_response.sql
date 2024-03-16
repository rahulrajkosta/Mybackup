-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2023 at 12:33 PM
-- Server version: 5.7.25
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astro_response`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanced_panchang`
--

CREATE TABLE `advanced_panchang` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `tithi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hindu_maah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paksha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ritu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sun_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchang_yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vikram_samvat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vkram_samvat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disha_shool` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disha_shool_remedies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nak_shool` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_nivas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abhijit_muhurta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rahukaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guliKaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yamghant_kaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advanced_panchang_sunrise`
--

CREATE TABLE `advanced_panchang_sunrise` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `sunrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hindu_maah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paksha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ritu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sun_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchang_yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vikram_samvat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vkram_samvat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disha_shool` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disha_shool_remedies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nak_shool` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_nivas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abhijit_muhurta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rahukaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guliKaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yamghant_kaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `astro_details`
--

CREATE TABLE `astro_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ascendant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Varna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vashya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Yoni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nadi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NaksahtraLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Charan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Karan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tithi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yunja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tatva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_alphabet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ayanamsha`
--

CREATE TABLE `ayanamsha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formatted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_gem_suggestion`
--

CREATE TABLE `basic_gem_suggestion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `LIFE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BENEFIC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LUCKY` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_panchang`
--

CREATE TABLE `basic_panchang` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_panchang`
--

INSERT INTO `basic_panchang` (`id`, `day`, `tithi`, `nakshatra`, `yog`, `karan`, `sunrise`, `sunset`, `vedic_sunrise`, `vedic_sunset`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Monday', 'Krishna Chaturdashi', 'Shravan', 'Vyatipaat', 'Shakuni', '05:29:55', '16:43:42', '05:33:49', '16:39:50', '2023-08-19 12:59:22', '2023-08-19 12:59:22', 1),
(2, 'Friday', 'Krishna Chaturthi', 'Uttra Phalguni', 'Sukarma', 'Baalav', '05:43:02', '16:43:19', '05:46:59', '16:39:21', '2023-08-19 14:26:16', '2023-08-19 14:26:16', 1),
(3, 'Monday', 'Amavasya', 'Shravan', 'Vyatipaat', 'Chatushpad', '05:37:28', '16:50:18', '05:41:22', '16:46:25', '2023-08-19 14:26:42', '2023-08-19 14:26:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `basic_panchang_sunrise`
--

CREATE TABLE `basic_panchang_sunrise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bhav_madhya`
--

CREATE TABLE `bhav_madhya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ascendant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `midheaven` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayanamsha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bhav_madhya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bhav_sandhi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biorhythm`
--

CREATE TABLE `biorhythm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `physical` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emotional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intellectual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `average` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `birth_details`
--

CREATE TABLE `birth_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayanamsha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chaughadiya_muhurta`
--

CREATE TABLE `chaughadiya_muhurta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chaughadiya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_chardasha`
--

CREATE TABLE `current_chardasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dasha_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_vdasha`
--

CREATE TABLE `current_vdasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_vdasha_all`
--

CREATE TABLE `current_vdasha_all` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_vdasha_date`
--

CREATE TABLE `current_vdasha_date` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_sub_minor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_yogini_dasha`
--

CREATE TABLE `current_yogini_dasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_nakshatra_consolidated`
--

CREATE TABLE `daily_nakshatra_consolidated` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `birth_moon_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_moon_nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_nakshatra_prediction`
--

CREATE TABLE `daily_nakshatra_prediction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `birth_moon_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_moon_nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_nakshatra_prediction_next`
--

CREATE TABLE `daily_nakshatra_prediction_next` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `birth_moon_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_moon_nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_nakshatra_prediction_previous`
--

CREATE TABLE `daily_nakshatra_prediction_previous` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `birth_moon_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_moon_nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `find_nakshatra_nakshatraname`
--

CREATE TABLE `find_nakshatra_nakshatraname` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nakshatra_to_find` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `find_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `past_matches` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `future_matches` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_ascendant_report`
--

CREATE TABLE `general_ascendant_report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asc_report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_house_report_planet_name`
--

CREATE TABLE `general_house_report_planet_name` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_nakshatra_report`
--

CREATE TABLE `general_nakshatra_report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_rashi_report_planet_name`
--

CREATE TABLE `general_rashi_report_planet_name` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `geo_details`
--

CREATE TABLE `geo_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `geonames` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghat_chakra`
--

CREATE TABLE `ghat_chakra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pahar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hora_muhurta`
--

CREATE TABLE `hora_muhurta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hora_muhurta_dinman`
--

CREATE TABLE `hora_muhurta_dinman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horo_chart_chart_id`
--

CREATE TABLE `horo_chart_chart_id` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet_small` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horo_chart_extended_chart_id`
--

CREATE TABLE `horo_chart_extended_chart_id` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horo_chart_image_chartid`
--

CREATE TABLE `horo_chart_image_chartid` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `svg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kalsarpa_details`
--

CREATE TABLE `kalsarpa_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `present` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one_line` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_debts`
--

CREATE TABLE `lalkitab_debts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `debt_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indications` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `events` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_horoscope`
--

CREATE TABLE `lalkitab_horoscope` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_houses`
--

CREATE TABLE `lalkitab_houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `khana_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maalik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakka_ghar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kismat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exalt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debilitated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_planets`
--

CREATE TABLE `lalkitab_planets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rashi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_remedies_planet_name`
--

CREATE TABLE `lalkitab_remedies_planet_name` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lal_kitab_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lal_kitab_remedies` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `major_chardasha`
--

CREATE TABLE `major_chardasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sign_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `major_vdasha`
--

CREATE TABLE `major_vdasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `major_yogini_dasha`
--

CREATE TABLE `major_yogini_dasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dasha_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasha_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_ms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_ms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manglik`
--

CREATE TABLE `manglik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manglik_present_rule` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_mars_manglik_cancelled` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manglik_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_manglik_present` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_manglik_after_cancellation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manglik_report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_present` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_panchang`
--

CREATE TABLE `monthly_panchang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moon_biorhythm`
--

CREATE TABLE `moon_biorhythm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `birth_pakshi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_pakshi_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_cycle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numero_fasts_report`
--

CREATE TABLE `numero_fasts_report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numero_fav_lord`
--

CREATE TABLE `numero_fav_lord` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numero_fav_mantra`
--

CREATE TABLE `numero_fav_mantra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numero_fav_time`
--

CREATE TABLE `numero_fav_time` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numero_place_vastu`
--

CREATE TABLE `numero_place_vastu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numero_prediction_daily`
--

CREATE TABLE `numero_prediction_daily` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prediction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lucky_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lucky_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numero_report`
--

CREATE TABLE `numero_report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numero_table`
--

CREATE TABLE `numero_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destiny_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radical_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evil_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_god` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_mantra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_metal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_stone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_substone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friendly_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neutral_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radical_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radical_ruler` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panchang_chart`
--

CREATE TABLE `panchang_chart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet_small` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panchang_chart_sunrise`
--

CREATE TABLE `panchang_chart_sunrise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet_small` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panchang_festival`
--

CREATE TABLE `panchang_festival` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `festivals` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panchang_lagna_table`
--

CREATE TABLE `panchang_lagna_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lagna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE `planets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet_id` int(11) NOT NULL,
  `planet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRetro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatraLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planets_extended`
--

CREATE TABLE `planets_extended` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet_id` int(11) NOT NULL,
  `planet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRetro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatraLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planet_ashtak_planet_name`
--

CREATE TABLE `planet_ashtak_planet_name` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ashtak_varga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ashtak_points` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planet_nature`
--

CREATE TABLE `planet_nature` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `GOOD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BAD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KILLER` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YOGAKARAKA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planet_panchang`
--

CREATE TABLE `planet_panchang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet_id` int(11) NOT NULL,
  `planet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRetro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_lord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra_lord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planet_panchang_sunrise`
--

CREATE TABLE `planet_panchang_sunrise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet_id` int(11) NOT NULL,
  `planet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRetro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatraLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `puja_suggestion`
--

CREATE TABLE `puja_suggestion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rudraksha_suggestion`
--

CREATE TABLE `rudraksha_suggestion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rudraksha_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recommend` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sadhesati_current_status`
--

CREATE TABLE `sadhesati_current_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consideration_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_saturn_retrograde` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturn_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_undergoing_sadhesati` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sadhesati_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `what_is_sadhesati` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sadhesati_life_details`
--

CREATE TABLE `sadhesati_life_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `what_is_sadhesati` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sarvashtak`
--

CREATE TABLE `sarvashtak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ashtak_varga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ashtak_points` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_chardasha`
--

CREATE TABLE `sub_chardasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_chardasha_majorrashi_subrashi`
--

CREATE TABLE `sub_chardasha_majorrashi_subrashi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_chardasha_rashi`
--

CREATE TABLE `sub_chardasha_rashi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_sub_sub_vdasha`
--

CREATE TABLE `sub_sub_sub_sub_vdasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_sub_vdasha`
--

CREATE TABLE `sub_sub_sub_vdasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_vdasha`
--

CREATE TABLE `sub_sub_vdasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_vdasha`
--

CREATE TABLE `sub_vdasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_yogini_dasha`
--

CREATE TABLE `sub_yogini_dasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_yogini_dasha_dashacycle_dashaname`
--

CREATE TABLE `sub_yogini_dasha_dashacycle_dashaname` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamil_month_panchang`
--

CREATE TABLE `tamil_month_panchang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchang_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamil_panchang`
--

CREATE TABLE `tamil_panchang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonrise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hindu_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamil_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paksha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ritu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sun_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vikram_samvat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vkram_samvat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abhijit_muhurta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rahu_kaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gulik_kaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yamghant_kaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dur_muhurtha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amrit_kaal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varjyam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anandadi_yog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `timezone_with_dst`
--

CREATE TABLE `timezone_with_dst` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone_in_ms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_details`
--

CREATE TABLE `varshaphal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `varshaphala_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_of_native` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayanamsha_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayanamsha_degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varshaphala_timestamp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `native_birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varshaphala_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchadhikari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varshaphala_year_lord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varshaphala_muntha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_harsha_bala`
--

CREATE TABLE `varshaphal_harsha_bala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stana_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ucchaswachetri_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinratri_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_month_chart`
--

CREATE TABLE `varshaphal_month_chart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chart` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_mudda_dasha`
--

CREATE TABLE `varshaphal_mudda_dasha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasha_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasha_end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_muntha`
--

CREATE TABLE `varshaphal_muntha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_panchavargeeya_bala`
--

CREATE TABLE `varshaphal_panchavargeeya_bala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kshetra_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uccha_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hadda_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drekkana_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navmansha_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_bala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_planets`
--

CREATE TABLE `varshaphal_planets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planet_id` int(11) NOT NULL,
  `planet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normDegree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRetro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatraLord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advanced_panchang`
--
ALTER TABLE `advanced_panchang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advanced_panchang_sunrise`
--
ALTER TABLE `advanced_panchang_sunrise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astro_details`
--
ALTER TABLE `astro_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayanamsha`
--
ALTER TABLE `ayanamsha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_gem_suggestion`
--
ALTER TABLE `basic_gem_suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_panchang`
--
ALTER TABLE `basic_panchang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_panchang_sunrise`
--
ALTER TABLE `basic_panchang_sunrise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhav_madhya`
--
ALTER TABLE `bhav_madhya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biorhythm`
--
ALTER TABLE `biorhythm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birth_details`
--
ALTER TABLE `birth_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chaughadiya_muhurta`
--
ALTER TABLE `chaughadiya_muhurta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_chardasha`
--
ALTER TABLE `current_chardasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_vdasha`
--
ALTER TABLE `current_vdasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_vdasha_all`
--
ALTER TABLE `current_vdasha_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_vdasha_date`
--
ALTER TABLE `current_vdasha_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_yogini_dasha`
--
ALTER TABLE `current_yogini_dasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_nakshatra_consolidated`
--
ALTER TABLE `daily_nakshatra_consolidated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_nakshatra_prediction`
--
ALTER TABLE `daily_nakshatra_prediction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_nakshatra_prediction_next`
--
ALTER TABLE `daily_nakshatra_prediction_next`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_nakshatra_prediction_previous`
--
ALTER TABLE `daily_nakshatra_prediction_previous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `find_nakshatra_nakshatraname`
--
ALTER TABLE `find_nakshatra_nakshatraname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_ascendant_report`
--
ALTER TABLE `general_ascendant_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_house_report_planet_name`
--
ALTER TABLE `general_house_report_planet_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_nakshatra_report`
--
ALTER TABLE `general_nakshatra_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_rashi_report_planet_name`
--
ALTER TABLE `general_rashi_report_planet_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geo_details`
--
ALTER TABLE `geo_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghat_chakra`
--
ALTER TABLE `ghat_chakra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hora_muhurta`
--
ALTER TABLE `hora_muhurta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hora_muhurta_dinman`
--
ALTER TABLE `hora_muhurta_dinman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horo_chart_chart_id`
--
ALTER TABLE `horo_chart_chart_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horo_chart_extended_chart_id`
--
ALTER TABLE `horo_chart_extended_chart_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horo_chart_image_chartid`
--
ALTER TABLE `horo_chart_image_chartid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalsarpa_details`
--
ALTER TABLE `kalsarpa_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lalkitab_debts`
--
ALTER TABLE `lalkitab_debts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lalkitab_horoscope`
--
ALTER TABLE `lalkitab_horoscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lalkitab_houses`
--
ALTER TABLE `lalkitab_houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lalkitab_planets`
--
ALTER TABLE `lalkitab_planets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lalkitab_remedies_planet_name`
--
ALTER TABLE `lalkitab_remedies_planet_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `major_chardasha`
--
ALTER TABLE `major_chardasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `major_vdasha`
--
ALTER TABLE `major_vdasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `major_yogini_dasha`
--
ALTER TABLE `major_yogini_dasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manglik`
--
ALTER TABLE `manglik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_panchang`
--
ALTER TABLE `monthly_panchang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moon_biorhythm`
--
ALTER TABLE `moon_biorhythm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numero_fasts_report`
--
ALTER TABLE `numero_fasts_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numero_fav_lord`
--
ALTER TABLE `numero_fav_lord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numero_fav_mantra`
--
ALTER TABLE `numero_fav_mantra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numero_fav_time`
--
ALTER TABLE `numero_fav_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numero_place_vastu`
--
ALTER TABLE `numero_place_vastu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numero_prediction_daily`
--
ALTER TABLE `numero_prediction_daily`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numero_report`
--
ALTER TABLE `numero_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numero_table`
--
ALTER TABLE `numero_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panchang_chart`
--
ALTER TABLE `panchang_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panchang_chart_sunrise`
--
ALTER TABLE `panchang_chart_sunrise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panchang_festival`
--
ALTER TABLE `panchang_festival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panchang_lagna_table`
--
ALTER TABLE `panchang_lagna_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planets_extended`
--
ALTER TABLE `planets_extended`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planet_ashtak_planet_name`
--
ALTER TABLE `planet_ashtak_planet_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planet_nature`
--
ALTER TABLE `planet_nature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planet_panchang`
--
ALTER TABLE `planet_panchang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planet_panchang_sunrise`
--
ALTER TABLE `planet_panchang_sunrise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puja_suggestion`
--
ALTER TABLE `puja_suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rudraksha_suggestion`
--
ALTER TABLE `rudraksha_suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sadhesati_current_status`
--
ALTER TABLE `sadhesati_current_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sadhesati_life_details`
--
ALTER TABLE `sadhesati_life_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarvashtak`
--
ALTER TABLE `sarvashtak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_chardasha`
--
ALTER TABLE `sub_chardasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_chardasha_majorrashi_subrashi`
--
ALTER TABLE `sub_chardasha_majorrashi_subrashi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_chardasha_rashi`
--
ALTER TABLE `sub_chardasha_rashi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_sub_sub_vdasha`
--
ALTER TABLE `sub_sub_sub_sub_vdasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_sub_vdasha`
--
ALTER TABLE `sub_sub_sub_vdasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_vdasha`
--
ALTER TABLE `sub_sub_vdasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_vdasha`
--
ALTER TABLE `sub_vdasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_yogini_dasha`
--
ALTER TABLE `sub_yogini_dasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_yogini_dasha_dashacycle_dashaname`
--
ALTER TABLE `sub_yogini_dasha_dashacycle_dashaname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamil_month_panchang`
--
ALTER TABLE `tamil_month_panchang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamil_panchang`
--
ALTER TABLE `tamil_panchang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timezone_with_dst`
--
ALTER TABLE `timezone_with_dst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varshaphal_details`
--
ALTER TABLE `varshaphal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varshaphal_harsha_bala`
--
ALTER TABLE `varshaphal_harsha_bala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varshaphal_month_chart`
--
ALTER TABLE `varshaphal_month_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varshaphal_mudda_dasha`
--
ALTER TABLE `varshaphal_mudda_dasha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varshaphal_muntha`
--
ALTER TABLE `varshaphal_muntha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varshaphal_panchavargeeya_bala`
--
ALTER TABLE `varshaphal_panchavargeeya_bala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varshaphal_planets`
--
ALTER TABLE `varshaphal_planets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advanced_panchang`
--
ALTER TABLE `advanced_panchang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advanced_panchang_sunrise`
--
ALTER TABLE `advanced_panchang_sunrise`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `astro_details`
--
ALTER TABLE `astro_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ayanamsha`
--
ALTER TABLE `ayanamsha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_gem_suggestion`
--
ALTER TABLE `basic_gem_suggestion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_panchang`
--
ALTER TABLE `basic_panchang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `basic_panchang_sunrise`
--
ALTER TABLE `basic_panchang_sunrise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bhav_madhya`
--
ALTER TABLE `bhav_madhya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biorhythm`
--
ALTER TABLE `biorhythm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `birth_details`
--
ALTER TABLE `birth_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chaughadiya_muhurta`
--
ALTER TABLE `chaughadiya_muhurta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_chardasha`
--
ALTER TABLE `current_chardasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_vdasha`
--
ALTER TABLE `current_vdasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_vdasha_all`
--
ALTER TABLE `current_vdasha_all`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_vdasha_date`
--
ALTER TABLE `current_vdasha_date`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_yogini_dasha`
--
ALTER TABLE `current_yogini_dasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_nakshatra_consolidated`
--
ALTER TABLE `daily_nakshatra_consolidated`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_nakshatra_prediction`
--
ALTER TABLE `daily_nakshatra_prediction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_nakshatra_prediction_next`
--
ALTER TABLE `daily_nakshatra_prediction_next`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_nakshatra_prediction_previous`
--
ALTER TABLE `daily_nakshatra_prediction_previous`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `find_nakshatra_nakshatraname`
--
ALTER TABLE `find_nakshatra_nakshatraname`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_ascendant_report`
--
ALTER TABLE `general_ascendant_report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_house_report_planet_name`
--
ALTER TABLE `general_house_report_planet_name`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_nakshatra_report`
--
ALTER TABLE `general_nakshatra_report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_rashi_report_planet_name`
--
ALTER TABLE `general_rashi_report_planet_name`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geo_details`
--
ALTER TABLE `geo_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghat_chakra`
--
ALTER TABLE `ghat_chakra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hora_muhurta`
--
ALTER TABLE `hora_muhurta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hora_muhurta_dinman`
--
ALTER TABLE `hora_muhurta_dinman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horo_chart_chart_id`
--
ALTER TABLE `horo_chart_chart_id`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horo_chart_extended_chart_id`
--
ALTER TABLE `horo_chart_extended_chart_id`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horo_chart_image_chartid`
--
ALTER TABLE `horo_chart_image_chartid`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kalsarpa_details`
--
ALTER TABLE `kalsarpa_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lalkitab_debts`
--
ALTER TABLE `lalkitab_debts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lalkitab_horoscope`
--
ALTER TABLE `lalkitab_horoscope`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lalkitab_houses`
--
ALTER TABLE `lalkitab_houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lalkitab_planets`
--
ALTER TABLE `lalkitab_planets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lalkitab_remedies_planet_name`
--
ALTER TABLE `lalkitab_remedies_planet_name`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `major_chardasha`
--
ALTER TABLE `major_chardasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `major_vdasha`
--
ALTER TABLE `major_vdasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `major_yogini_dasha`
--
ALTER TABLE `major_yogini_dasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manglik`
--
ALTER TABLE `manglik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monthly_panchang`
--
ALTER TABLE `monthly_panchang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moon_biorhythm`
--
ALTER TABLE `moon_biorhythm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numero_fasts_report`
--
ALTER TABLE `numero_fasts_report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numero_fav_lord`
--
ALTER TABLE `numero_fav_lord`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numero_fav_mantra`
--
ALTER TABLE `numero_fav_mantra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numero_fav_time`
--
ALTER TABLE `numero_fav_time`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numero_place_vastu`
--
ALTER TABLE `numero_place_vastu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numero_prediction_daily`
--
ALTER TABLE `numero_prediction_daily`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numero_report`
--
ALTER TABLE `numero_report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numero_table`
--
ALTER TABLE `numero_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panchang_chart`
--
ALTER TABLE `panchang_chart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panchang_chart_sunrise`
--
ALTER TABLE `panchang_chart_sunrise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panchang_festival`
--
ALTER TABLE `panchang_festival`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panchang_lagna_table`
--
ALTER TABLE `panchang_lagna_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planets`
--
ALTER TABLE `planets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planets_extended`
--
ALTER TABLE `planets_extended`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planet_ashtak_planet_name`
--
ALTER TABLE `planet_ashtak_planet_name`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planet_nature`
--
ALTER TABLE `planet_nature`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planet_panchang`
--
ALTER TABLE `planet_panchang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planet_panchang_sunrise`
--
ALTER TABLE `planet_panchang_sunrise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `puja_suggestion`
--
ALTER TABLE `puja_suggestion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rudraksha_suggestion`
--
ALTER TABLE `rudraksha_suggestion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sadhesati_current_status`
--
ALTER TABLE `sadhesati_current_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sadhesati_life_details`
--
ALTER TABLE `sadhesati_life_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sarvashtak`
--
ALTER TABLE `sarvashtak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_chardasha`
--
ALTER TABLE `sub_chardasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_chardasha_majorrashi_subrashi`
--
ALTER TABLE `sub_chardasha_majorrashi_subrashi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_chardasha_rashi`
--
ALTER TABLE `sub_chardasha_rashi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_sub_sub_vdasha`
--
ALTER TABLE `sub_sub_sub_sub_vdasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_sub_vdasha`
--
ALTER TABLE `sub_sub_sub_vdasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_vdasha`
--
ALTER TABLE `sub_sub_vdasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_vdasha`
--
ALTER TABLE `sub_vdasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_yogini_dasha`
--
ALTER TABLE `sub_yogini_dasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_yogini_dasha_dashacycle_dashaname`
--
ALTER TABLE `sub_yogini_dasha_dashacycle_dashaname`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tamil_month_panchang`
--
ALTER TABLE `tamil_month_panchang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tamil_panchang`
--
ALTER TABLE `tamil_panchang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timezone_with_dst`
--
ALTER TABLE `timezone_with_dst`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varshaphal_details`
--
ALTER TABLE `varshaphal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varshaphal_harsha_bala`
--
ALTER TABLE `varshaphal_harsha_bala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varshaphal_month_chart`
--
ALTER TABLE `varshaphal_month_chart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varshaphal_mudda_dasha`
--
ALTER TABLE `varshaphal_mudda_dasha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varshaphal_muntha`
--
ALTER TABLE `varshaphal_muntha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varshaphal_panchavargeeya_bala`
--
ALTER TABLE `varshaphal_panchavargeeya_bala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varshaphal_planets`
--
ALTER TABLE `varshaphal_planets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
