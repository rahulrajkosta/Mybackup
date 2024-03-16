-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2023 at 08:07 AM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responseAstro`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanced_panchang`
--

CREATE TABLE `advanced_panchang` (
  `id` int UNSIGNED NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `tithi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hindu_maah` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `paksha` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ritu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sun_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunrise` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunset` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchang_yog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vikram_samvat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vkram_samvat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disha_shool` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disha_shool_remedies` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nak_shool` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_nivas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abhijit_muhurta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rahukaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guliKaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yamghant_kaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advanced_panchang`
--

INSERT INTO `advanced_panchang` (`id`, `day`, `sunset`, `sunrise`, `moonrise`, `moonset`, `user_id`, `status`, `sta`, `tithi`, `nakshatra`, `yog`, `karan`, `hindu_maah`, `paksha`, `ritu`, `sun_sign`, `moon_sign`, `vedic_sunrise`, `vedic_sunset`, `ayana`, `panchang_yog`, `vikram_samvat`, `shaka_samvat`, `shaka_samvat_name`, `vkram_samvat_name`, `disha_shool`, `disha_shool_remedies`, `nak_shool`, `moon_nivas`, `abhijit_muhurta`, `rahukaal`, `guliKaal`, `yamghant_kaal`, `created_at`, `updated_at`) VALUES
(1, 'Monday', '16:50:18', '5:37:28', '5:4:55', '16:0:59', 2, 'Y', 'Y', '{\"details\":{\"tithi_number\":30,\"tithi_name\":\"Amavasya\",\"special\":\"Poorna\",\"summary\":\"Auspicious day to start important businesses, construction, spiritual ceremonies, household work and physical activities.\",\"deity\":\"Viswadevas\"},\"end_time\":{\"hour\":35,\"minute\":54,\"second\":34},\"end_time_ms\":1013499755000}', '{\"details\":{\"nak_number\":22,\"nak_name\":\"Shravan\",\"ruler\":\"Moon\",\"deity\":\"Hari\",\"special\":\"Udharvamukh Nakshatra\",\"summary\":\"It is favourable for undertaking travel, acquiring conveyances, gardening, going on processions, visiting friends, shopping, and anything of a temporary nature.\"},\"end_time\":{\"hour\":23,\"minute\":33,\"second\":34},\"end_time_ms\":1013455294000}', '{\"details\":{\"yog_number\":17,\"yog_name\":\"Vyatipaat\",\"special\":\"It is Inauspicious yoga,Not good for auspicious undertakings.\",\"meaning\":\"(Calamity) \\u2014 prone to sudden mishaps and reversals, fickle and unreliable.\"},\"end_time\":{\"hour\":13,\"minute\":7,\"second\":8},\"end_time_ms\":1013417709000}', '{\"details\":{\"karan_number\":10,\"karan_name\":\"Chatushpad\",\"special\":\" This Karana falling on Amavasya (New Moon) is suitable for vanquishing enemies through Tantric methods It gives success in all business related to four footed animals,particularly cattle.\",\"deity\":\"Vrishabh\"},\"end_time\":{\"hour\":22,\"minute\":51,\"second\":13},\"end_time_ms\":1013452753000}', '{\"adhik_status\":false,\"purnimanta\":\"Magha\",\"amanta\":\"Pausha\",\"amanta_id\":10,\"purnimanta_id\":11}', 'Krishna-Paksha', 'Shishir', 'Capricorn', 'Capricorn', '5:41:22', '16:46:25', 'Uttarayana', '', '2058', '1923', 'Vrish', 'Jay', 'EAST', '-', '{\"direction\":\"none\",\"remedies\":\"-\"}', 'SOUTH', '{\"start\":\"10:51\",\"end\":\"11:35\"}', '{\"start\":\"07:01:34\",\"end\":\"08:25:40\"}', '{\"start\":\"12:37:59\",\"end\":\"14:02:06\"}', '{\"start\":\"09:49:47\",\"end\":\"11:13:53\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advanced_panchang_sunrise`
--

CREATE TABLE `advanced_panchang_sunrise` (
  `id` int UNSIGNED NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sunrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunrise` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunset` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hindu_maah` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `paksha` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ritu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sun_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchang_yog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vikram_samvat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vkram_samvat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disha_shool` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disha_shool_remedies` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nak_shool` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_nivas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abhijit_muhurta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rahukaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guliKaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yamghant_kaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advanced_panchang_sunrise`
--

INSERT INTO `advanced_panchang_sunrise` (`id`, `day`, `sunset`, `user_id`, `status`, `sta`, `sunrise`, `moonrise`, `moonset`, `vedic_sunrise`, `vedic_sunset`, `tithi`, `nakshatra`, `yog`, `karan`, `hindu_maah`, `paksha`, `ritu`, `sun_sign`, `moon_sign`, `ayana`, `panchang_yog`, `vikram_samvat`, `shaka_samvat`, `shaka_samvat_name`, `vkram_samvat_name`, `disha_shool`, `disha_shool_remedies`, `nak_shool`, `moon_nivas`, `abhijit_muhurta`, `rahukaal`, `guliKaal`, `yamghant_kaal`, `created_at`, `updated_at`) VALUES
(1, 'Monday', '16:50:18', 2, 'Y', 'Y', '5:37:28', '5:4:55', '16:0:59', '5:41:22', '16:46:25', '{\"details\":{\"tithi_number\":29,\"tithi_name\":\"Krishna Chaturdashi\",\"special\":\"Rikta Tithi\",\"summary\":\"Inauspicious for any important businesses. Do only your daily routine and read scriptures.\",\"deity\":\"Kaali\"},\"end_time\":{\"hour\":9,\"minute\":50,\"second\":4},\"end_time_ms\":1013405884000}', '{\"details\":{\"nak_number\":22,\"nak_name\":\"Shravan\",\"ruler\":\"Moon\",\"deity\":\"Hari\",\"special\":\"Udharvamukh Nakshatra\",\"summary\":\"It is favourable for undertaking travel, acquiring conveyances, gardening, going on processions, visiting friends, shopping, and anything of a temporary nature.\"},\"end_time\":{\"hour\":23,\"minute\":33,\"second\":15},\"end_time_ms\":1013455275000}', '{\"details\":{\"yog_number\":17,\"yog_name\":\"Vyatipaat\",\"special\":\"It is Inauspicious yoga,Not good for auspicious undertakings.\",\"meaning\":\"(Calamity) \\u2014 prone to sudden mishaps and reversals, fickle and unreliable.\"},\"end_time\":{\"hour\":13,\"minute\":7,\"second\":52},\"end_time_ms\":1013417752000}', '{\"details\":{\"karan_number\":9,\"karan_name\":\"Shakuni\",\"special\":\"Shakuni Karana falling in the night in the 14th day of the dark moon is suitable for hold-ups, committing theft and the like crimes, driving away enemies and soldiers, taming birds, starting medication and all kinds of war operations.\",\"deity\":\"Garuda (Eagle)\"},\"end_time\":{\"hour\":9,\"minute\":50,\"second\":4},\"end_time_ms\":1013405884000}', '{\"adhik_status\":false,\"purnimanta\":\"Magha\",\"amanta\":\"Pausha\",\"amanta_id\":10,\"purnimanta_id\":11}', 'Krishna-Paksha', 'Shishir', 'Capricorn', 'Capricorn', 'Uttarayana', '', '2058', '1923', 'Vrish', 'Jay', 'EAST', '-', '{\"direction\":\"none\",\"remedies\":\"-\"}', 'SOUTH', '{\"start\":\"10:51\",\"end\":\"11:35\"}', '{\"start\":\"07:01:34\",\"end\":\"08:25:40\"}', '{\"start\":\"12:37:59\",\"end\":\"14:02:06\"}', '{\"start\":\"09:49:47\",\"end\":\"11:13:53\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Astro`
--

CREATE TABLE `Astro` (
  `id` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `contact_info` varchar(15) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Experience` year NOT NULL,
  `Rate` varchar(10) NOT NULL,
  `astro_rating_id` int NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `isLive` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Astro`
--

INSERT INTO `Astro` (`id`, `Name`, `contact_info`, `Specialization`, `Experience`, `Rate`, `astro_rating_id`, `status`, `isLive`, `created_at`, `updated_at`) VALUES
(1, 'Yasir Khan', 'Yasir Khan', 'Yasir Khan', '2001', '10', 1, 'Y', 1, '2023-12-30 07:23:20', '2023-12-30 07:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `AstroServices`
--

CREATE TABLE `AstroServices` (
  `id` int NOT NULL,
  `services` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `AstroServices`
--

INSERT INTO `AstroServices` (`id`, `services`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Advanced Panchang', 'Y', '2023-12-28 05:31:27', '2023-12-28 05:31:27'),
(2, 'Advanced Panchang Sunrise', 'Y', '2023-12-28 05:31:27', '2023-12-28 05:31:27'),
(4, 'Advanced_panchang', 'Y', '2023-12-30 07:31:30', '2023-12-30 07:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `astro_details`
--

CREATE TABLE `astro_details` (
  `id` bigint UNSIGNED NOT NULL,
  `ascendant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ascendant_lord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Varna` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vashya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Yoni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nadi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SignLord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Naksahtra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NaksahtraLord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Charan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Yog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Karan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tithi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yunja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tatva` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_alphabet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `paya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `astro_details`
--

INSERT INTO `astro_details` (`id`, `ascendant`, `ascendant_lord`, `Varna`, `Vashya`, `Yoni`, `Gan`, `Nadi`, `sign`, `SignLord`, `Naksahtra`, `NaksahtraLord`, `Charan`, `Yog`, `Karan`, `Tithi`, `yunja`, `tatva`, `name_alphabet`, `paya`, `user_id`, `status`, `sta`) VALUES
(1, 'Taurus', 'Venus', 'Vaishya', 'Jalchar', 'Vaanar', 'Dev', 'Ant', 'Capricorn', 'Saturn', 'Shravan', 'Moon', '3', 'Vyatipaat', 'Chatushpad', 'Amavasya', 'Parbhaag', 'Earth', 'Khe', 'Copper', 2, 'Y', 'Y'),
(2, 'Taurus', 'Venus', 'Vaishya', 'Jalchar', 'Vaanar', 'Dev', 'Ant', 'Capricorn', 'Saturn', 'Shravan', 'Moon', '3', 'Vyatipaat', 'Chatushpad', 'Amavasya', 'Parbhaag', 'Earth', 'Khe', 'Copper', 2, 'Y', 'Y'),
(3, 'Taurus', 'Venus', 'Vaishya', 'Jalchar', 'Vaanar', 'Dev', 'Ant', 'Capricorn', 'Saturn', 'Shravan', 'Moon', '3', 'Vyatipaat', 'Chatushpad', 'Amavasya', 'Parbhaag', 'Earth', 'Khe', 'Copper', 2, 'Y', 'Y'),
(4, 'Taurus', 'Venus', 'Vaishya', 'Jalchar', 'Vaanar', 'Dev', 'Ant', 'Capricorn', 'Saturn', 'Shravan', 'Moon', '3', 'Vyatipaat', 'Chatushpad', 'Amavasya', 'Parbhaag', 'Earth', 'Khe', 'Copper', 4, 'Y', 'Y'),
(5, 'Taurus', 'Venus', 'Vaishya', 'Jalchar', 'Vaanar', 'Dev', 'Ant', 'Capricorn', 'Saturn', 'Shravan', 'Moon', '3', 'Vyatipaat', 'Chatushpad', 'Amavasya', 'Parbhaag', 'Earth', 'Khe', 'Copper', 4, 'Y', 'Y'),
(6, 'Taurus', 'Venus', 'Vaishya', 'Jalchar', 'Vaanar', 'Dev', 'Ant', 'Capricorn', 'Saturn', 'Shravan', 'Moon', '3', 'Vyatipaat', 'Chatushpad', 'Amavasya', 'Parbhaag', 'Earth', 'Khe', 'Copper', 4, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `astro_rating`
--

CREATE TABLE `astro_rating` (
  `id` int NOT NULL,
  `ratings` int NOT NULL,
  `astro_id` int NOT NULL,
  `review` longtext,
  `user_id` int NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `astro_rating`
--

INSERT INTO `astro_rating` (`id`, `ratings`, `astro_id`, `review`, `user_id`, `status`, `create_at`, `updated_at`) VALUES
(1, 5, 1, NULL, 1, 'Y', '2023-12-30 07:28:28', '2023-12-30 07:28:28'),
(2, 5, 1, NULL, 1, 'Y', '2023-12-30 07:29:18', '2023-12-30 07:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `ayanamsha`
--

CREATE TABLE `ayanamsha` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `formatted` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_gem_suggestion`
--

CREATE TABLE `basic_gem_suggestion` (
  `id` bigint UNSIGNED NOT NULL,
  `LIFE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BENEFIC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LUCKY` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_gem_suggestion`
--

INSERT INTO `basic_gem_suggestion` (`id`, `LIFE`, `BENEFIC`, `LUCKY`, `user_id`, `status`, `sta`) VALUES
(1, '{\"name\":\"Diamond\",\"gem_key\":\"diamond\",\"semi_gem\":\"Opal\\/Zircon\",\"wear_finger\":\"Index\",\"weight_caret\":\"1 - 4.25\",\"wear_metal\":\"Silver\",\"wear_day\":\"Friday\",\"gem_deity\":\"Venus\"}', '{\"name\":\"Emerald\",\"gem_key\":\"emerald\",\"semi_gem\":\"Onyx\",\"wear_finger\":\"Little\",\"weight_caret\":\" 4 - 6.25\",\"wear_metal\":\"Gold\",\"wear_day\":\"Wednesday\",\"gem_deity\":\"Mercury\"}', '{\"name\":\"Blue Sapphire\",\"gem_key\":\"blue_sapphire\",\"semi_gem\":\"Amethyst\",\"wear_finger\":\"Middle\",\"weight_caret\":\"3 - 4.25\",\"wear_metal\":\"Silver\",\"wear_day\":\"Saturday\",\"gem_deity\":\"Saturn\"}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `basic_panchang`
--

CREATE TABLE `basic_panchang` (
  `id` int UNSIGNED NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_panchang`
--

INSERT INTO `basic_panchang` (`id`, `day`, `tithi`, `nakshatra`, `yog`, `karan`, `sunrise`, `sunset`, `vedic_sunrise`, `vedic_sunset`, `created_at`, `updated_at`, `user_id`, `status`, `sta`) VALUES
(1, 'Monday', 'Krishna Chaturdashi', 'Shravan', 'Vyatipaat', 'Shakuni', '05:29:55', '16:43:42', '05:33:49', '16:39:50', '2023-08-19 12:59:22', '2023-08-19 12:59:22', 1, 'Y', 'Y'),
(2, 'Friday', 'Krishna Chaturthi', 'Uttra Phalguni', 'Sukarma', 'Baalav', '05:43:02', '16:43:19', '05:46:59', '16:39:21', '2023-08-19 14:26:16', '2023-08-19 14:26:16', 1, 'Y', 'Y'),
(3, 'Monday', 'Amavasya', 'Shravan', 'Vyatipaat', 'Chatushpad', '05:37:28', '16:50:18', '05:41:22', '16:46:25', '2023-08-19 14:26:42', '2023-08-19 14:26:42', 1, 'Y', 'Y'),
(4, 'Monday', 'Amavasya', 'Shravan', 'Vyatipaat', 'Chatushpad', '05:37:28', '16:50:18', '05:41:22', '16:46:25', '2023-12-20 06:34:56', '2023-12-20 06:34:56', 2, 'Y', 'Y'),
(5, 'Monday', 'Amavasya', 'Shravan', 'Vyatipaat', 'Chatushpad', '05:37:28', '16:50:18', '05:41:22', '16:46:25', '2023-12-28 15:08:58', '2023-12-28 15:08:58', 4, 'Y', 'Y'),
(6, 'Monday', 'Amavasya', 'Shravan', 'Vyatipaat', 'Chatushpad', '05:37:28', '16:50:18', '05:41:22', '16:46:25', '2023-12-30 06:08:51', '2023-12-30 06:08:51', 4, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `basic_panchang_sunrise`
--

CREATE TABLE `basic_panchang_sunrise` (
  `id` bigint UNSIGNED NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedic_sunset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_panchang_sunrise`
--

INSERT INTO `basic_panchang_sunrise` (`id`, `day`, `tithi`, `yog`, `nakshatra`, `karan`, `sunrise`, `sunset`, `vedic_sunrise`, `vedic_sunset`, `user_id`, `status`, `sta`) VALUES
(1, 'Monday', 'Krishna Chaturdashi', 'Vyatipaat', 'Shravan', 'Shakuni', '05:37:28', '16:50:18', '05:41:22', '16:46:25', 2, 'Y', 'Y'),
(2, 'Monday', 'Krishna Chaturdashi', 'Vyatipaat', 'Shravan', 'Shakuni', '05:37:28', '16:50:18', '05:41:22', '16:46:25', 4, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `bhav_madhya`
--

CREATE TABLE `bhav_madhya` (
  `id` bigint UNSIGNED NOT NULL,
  `ascendant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `midheaven` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayanamsha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bhav_madhya` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bhav_sandhi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bhav_madhya`
--

INSERT INTO `bhav_madhya` (`id`, `ascendant`, `midheaven`, `ayanamsha`, `bhav_madhya`, `bhav_sandhi`, `user_id`, `status`, `sta`) VALUES
(1, '36.43161085766', '291.67575432783', '-23.886608773539', '[{\"house\":1,\"degree\":36.43161085766019,\"sign\":\"Taurus\",\"norm_degree\":6.431610857660189,\"sign_id\":1},{\"house\":2,\"degree\":61.512992014383826,\"sign\":\"Gemini\",\"norm_degree\":1.5129920143838262,\"sign_id\":2},{\"house\":3,\"degree\":86.59437317110752,\"sign\":\"Gemini\",\"norm_degree\":26.59437317110752,\"sign_id\":2},{\"house\":4,\"degree\":111.67575432783121,\"sign\":\"Cancer\",\"norm_degree\":21.675754327831214,\"sign_id\":3},{\"house\":5,\"degree\":146.59437317110752,\"sign\":\"Leo\",\"norm_degree\":26.59437317110752,\"sign_id\":4},{\"house\":6,\"degree\":181.51299201438383,\"sign\":\"Libra\",\"norm_degree\":1.5129920143838262,\"sign_id\":6},{\"house\":7,\"degree\":216.4316108576602,\"sign\":\"Scorpio\",\"norm_degree\":6.431610857660189,\"sign_id\":7},{\"house\":8,\"degree\":241.51299201438385,\"sign\":\"Sagittarius\",\"norm_degree\":1.5129920143838547,\"sign_id\":8},{\"house\":9,\"degree\":266.5943731711075,\"sign\":\"Sagittarius\",\"norm_degree\":26.59437317110752,\"sign_id\":8},{\"house\":10,\"degree\":291.6757543278312,\"sign\":\"Capricorn\",\"norm_degree\":21.675754327831214,\"sign_id\":9},{\"house\":11,\"degree\":326.5943731711075,\"sign\":\"Aquarius\",\"norm_degree\":26.59437317110752,\"sign_id\":10},{\"house\":12,\"degree\":1.512992014383883,\"sign\":\"Aries\",\"norm_degree\":1.512992014383883,\"sign_id\":0}]', '[{\"house\":1,\"degree\":48.97230143602201,\"sign\":\"Taurus\",\"norm_degree\":18.972301436022008,\"sign_id\":1},{\"house\":2,\"degree\":74.0536825927457,\"sign\":\"Gemini\",\"norm_degree\":14.053682592745702,\"sign_id\":2},{\"house\":3,\"degree\":99.1350637494694,\"sign\":\"Cancer\",\"norm_degree\":9.135063749469396,\"sign_id\":3},{\"house\":4,\"degree\":129.1350637494694,\"sign\":\"Leo\",\"norm_degree\":9.135063749469396,\"sign_id\":4},{\"house\":5,\"degree\":164.05368259274564,\"sign\":\"Virgo\",\"norm_degree\":14.053682592745645,\"sign_id\":5},{\"house\":6,\"degree\":198.972301436022,\"sign\":\"Libra\",\"norm_degree\":18.972301436022008,\"sign_id\":6},{\"house\":7,\"degree\":228.97230143602204,\"sign\":\"Scorpio\",\"norm_degree\":18.972301436022036,\"sign_id\":7},{\"house\":8,\"degree\":254.0536825927457,\"sign\":\"Sagittarius\",\"norm_degree\":14.053682592745702,\"sign_id\":8},{\"house\":9,\"degree\":279.1350637494694,\"sign\":\"Capricorn\",\"norm_degree\":9.135063749469396,\"sign_id\":9},{\"house\":10,\"degree\":309.1350637494694,\"sign\":\"Aquarius\",\"norm_degree\":9.135063749469396,\"sign_id\":10},{\"house\":11,\"degree\":344.0536825927457,\"sign\":\"Pisces\",\"norm_degree\":14.053682592745702,\"sign_id\":11},{\"house\":12,\"degree\":18.972301436022008,\"sign\":\"Aries\",\"norm_degree\":18.972301436022008,\"sign_id\":0}]', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `biorhythm`
--

CREATE TABLE `biorhythm` (
  `id` bigint UNSIGNED NOT NULL,
  `physical` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `emotional` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `intellectual` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `average` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biorhythm`
--

INSERT INTO `biorhythm` (`id`, `physical`, `emotional`, `intellectual`, `average`, `user_id`, `status`, `sta`) VALUES
(1, '{\"percent\":27,\"trend\":1}', '{\"percent\":44,\"trend\":1}', '{\"percent\":-69,\"trend\":1}', '{\"percent\":1,\"trend\":1}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `birth_details`
--

CREATE TABLE `birth_details` (
  `id` bigint UNSIGNED NOT NULL,
  `year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `minute` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seconds` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayanamsha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birth_details`
--

INSERT INTO `birth_details` (`id`, `year`, `month`, `day`, `hour`, `minute`, `latitude`, `longitude`, `timezone`, `sunrise`, `sunset`, `name`, `seconds`, `ayanamsha`, `user_id`, `status`, `sta`) VALUES
(1, '2002', '2', '11', '10', '48', '25.52', '78.12', '4.2', '5:37:28', '16:50:18', 'Rahul Raj Kosta', '0', '23.886608773539', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `discription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `auther` varchar(255) NOT NULL,
  `view_count` int NOT NULL,
  `status` varchar(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `discription`, `image`, `auther`, `view_count`, `status`, `created_at`, `update_at`) VALUES
(1, 'test', 'test', 'test', 'test', 1, '1', '2023-12-30 07:34:21', '2023-12-30 07:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `bookPooja`
--

CREATE TABLE `bookPooja` (
  `id` int NOT NULL,
  `PoojaName` varchar(50) NOT NULL,
  `AstrologerName` varchar(50) NOT NULL,
  `price` int NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookPooja`
--

INSERT INTO `bookPooja` (`id`, `PoojaName`, `AstrologerName`, `price`, `purpose`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 1000, 'test', 'test', 'Y', '2023-12-30 07:37:09', '2023-12-30 07:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `chaughadiya_muhurta`
--

CREATE TABLE `chaughadiya_muhurta` (
  `id` bigint UNSIGNED NOT NULL,
  `chaughadiya` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chaughadiya_muhurta`
--

INSERT INTO `chaughadiya_muhurta` (`id`, `chaughadiya`, `created_at`, `updated_at`, `user_id`, `status`, `sta`) VALUES
(1, '{\"day\":[{\"time\":\"05:37:28 - 07:01:34\",\"muhurta\":\"Amrit\"},{\"time\":\"07:01:34 - 08:25:40\",\"muhurta\":\"Kaal\"},{\"time\":\"08:25:40 - 09:49:47\",\"muhurta\":\"Shubh\"},{\"time\":\"09:49:47 - 11:13:53\",\"muhurta\":\"Rog\"},{\"time\":\"11:13:53 - 12:37:59\",\"muhurta\":\"Udveg\"},{\"time\":\"12:37:59 - 14:02:06\",\"muhurta\":\"Char\"},{\"time\":\"14:02:06 - 15:26:12\",\"muhurta\":\"Labh\"},{\"time\":\"15:26:12 - 16:50:18\",\"muhurta\":\"Amrit\"}],\"night\":[{\"time\":\"16:50:18 - 18:26:12\",\"muhurta\":\"Char\"},{\"time\":\"18:26:12 - 20:02:06\",\"muhurta\":\"Rog\"},{\"time\":\"20:02:06 - 21:37:59\",\"muhurta\":\"Kaal\"},{\"time\":\"21:37:59 - 23:13:53\",\"muhurta\":\"Labh\"},{\"time\":\"23:13:53 - 24:49:47\",\"muhurta\":\"Udveg\"},{\"time\":\"24:49:47 - 26:25:40\",\"muhurta\":\"Shubh\"},{\"time\":\"26:25:40 - 28:01:34\",\"muhurta\":\"Amrit\"},{\"time\":\"28:01:34 - 05:37:28\",\"muhurta\":\"Char\"}]}', NULL, NULL, 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `current_chardasha`
--

CREATE TABLE `current_chardasha` (
  `id` bigint UNSIGNED NOT NULL,
  `dasha_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_chardasha`
--

INSERT INTO `current_chardasha` (`id`, `dasha_date`, `major_dasha`, `sub_dasha`, `sub_sub_dasha`, `user_id`, `status`, `sta`) VALUES
(1, '20-12-2023', '{\"sign_id\":11,\"sign_name\":\"Pisces\",\"duration\":\"9 Years\",\"start_date\":\"11-2-2022\",\"end_date\":\"11-2-2031\"}', '{\"sign_id\":2,\"sign_name\":\"Gemini\",\"duration\":\"9 Months\",\"start_date\":\"11-8-2023\",\"end_date\":\"11-5-2024\"}', '{\"sign_id\":8,\"sign_name\":\"Sagittarius\",\"start_date\":\"3-12-2023\",\"end_date\":\"26-12-2023\"}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `current_vdasha`
--

CREATE TABLE `current_vdasha` (
  `id` bigint UNSIGNED NOT NULL,
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_minor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_minor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_sub_minor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_vdasha`
--

INSERT INTO `current_vdasha` (`id`, `major`, `minor`, `sub_minor`, `sub_sub_minor`, `sub_sub_sub_minor`, `user_id`, `status`, `sta`) VALUES
(1, '{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"2-12-2013  21:4\",\"end\":\"3-12-2031  9:4\"}', '{\"planet\":\"Mercury\",\"planet_id\":3,\"start\":\"14-11-2021  14:46\",\"end\":\"3-6-2024  0:4\"}', '{\"planet\":\"Jupiter\",\"planet_id\":4,\"start\":\"5-9-2023  8:21\",\"end\":\"7-1-2024  12:48\"}', '{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"19-12-2023  21:44\",\"end\":\"7-1-2024  12:48\"}', '{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"19-12-2023  21:44\",\"end\":\"22-12-2023  16:47\"}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `current_vdasha_all`
--

CREATE TABLE `current_vdasha_all` (
  `id` bigint UNSIGNED NOT NULL,
  `major` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_minor` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_minor` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_sub_minor` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_vdasha_all`
--

INSERT INTO `current_vdasha_all` (`id`, `major`, `minor`, `sub_minor`, `sub_sub_minor`, `sub_sub_sub_minor`, `user_id`, `status`, `sta`) VALUES
(1, '{\"dasha_period\":[{\"planet\":\"Moon\",\"planet_id\":1,\"start\":\"2-12-1996  15:4\",\"end\":\"3-12-2006  3:4\"},{\"planet\":\"Mars\",\"planet_id\":2,\"start\":\"3-12-2006  3:4\",\"end\":\"2-12-2013  21:4\"},{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"2-12-2013  21:4\",\"end\":\"3-12-2031  9:4\"},{\"planet\":\"Jupiter\",\"planet_id\":4,\"start\":\"3-12-2031  9:4\",\"end\":\"3-12-2047  9:4\"},{\"planet\":\"Saturn\",\"planet_id\":6,\"start\":\"3-12-2047  9:4\",\"end\":\"3-12-2066  3:4\"},{\"planet\":\"Mercury\",\"planet_id\":3,\"start\":\"3-12-2066  3:4\",\"end\":\"3-12-2083  9:4\"},{\"planet\":\"Ketu\",\"planet_id\":8,\"start\":\"3-12-2083  9:4\",\"end\":\"3-12-2090  3:4\"},{\"planet\":\"Venus\",\"planet_id\":5,\"start\":\"3-12-2090  3:4\",\"end\":\"4-12-2110  3:4\"},{\"planet\":\"Sun\",\"planet_id\":0,\"start\":\"4-12-2110  3:4\",\"end\":\"3-12-2116  15:4\"}]}', '{\"planet\":{\"major\":\"Rahu\"},\"dasha_period\":[{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"2-12-2013  21:4\",\"end\":\"15-8-2016  1:16\"},{\"planet\":\"Jupiter\",\"planet_id\":4,\"start\":\"15-8-2016  1:16\",\"end\":\"8-1-2019  15:40\"},{\"planet\":\"Saturn\",\"planet_id\":6,\"start\":\"8-1-2019  15:40\",\"end\":\"14-11-2021  14:46\"},{\"planet\":\"Mercury\",\"planet_id\":3,\"start\":\"14-11-2021  14:46\",\"end\":\"3-6-2024  0:4\"},{\"planet\":\"Ketu\",\"planet_id\":8,\"start\":\"3-6-2024  0:4\",\"end\":\"21-6-2025  12:22\"},{\"planet\":\"Venus\",\"planet_id\":5,\"start\":\"21-6-2025  12:22\",\"end\":\"21-6-2028  6:22\"},{\"planet\":\"Sun\",\"planet_id\":0,\"start\":\"21-6-2028  6:22\",\"end\":\"15-5-2029  23:46\"},{\"planet\":\"Moon\",\"planet_id\":1,\"start\":\"15-5-2029  23:46\",\"end\":\"14-11-2030  20:46\"},{\"planet\":\"Mars\",\"planet_id\":2,\"start\":\"14-11-2030  20:46\",\"end\":\"3-12-2031  9:4\"}]}', '{\"planet\":{\"major\":\"Rahu\",\"minor\":\"Mercury\"},\"dasha_period\":[{\"planet\":\"Mercury\",\"planet_id\":3,\"start\":\"14-11-2021  14:46\",\"end\":\"26-3-2022  13:29\"},{\"planet\":\"Ketu\",\"planet_id\":8,\"start\":\"26-3-2022  13:29\",\"end\":\"19-5-2022  21:26\"},{\"planet\":\"Venus\",\"planet_id\":5,\"start\":\"19-5-2022  21:26\",\"end\":\"22-10-2022  2:59\"},{\"planet\":\"Sun\",\"planet_id\":0,\"start\":\"22-10-2022  2:59\",\"end\":\"7-12-2022  16:39\"},{\"planet\":\"Moon\",\"planet_id\":1,\"start\":\"7-12-2022  16:39\",\"end\":\"23-2-2023  7:25\"},{\"planet\":\"Mars\",\"planet_id\":2,\"start\":\"23-2-2023  7:25\",\"end\":\"18-4-2023  15:22\"},{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"18-4-2023  15:22\",\"end\":\"5-9-2023  8:21\"},{\"planet\":\"Jupiter\",\"planet_id\":4,\"start\":\"5-9-2023  8:21\",\"end\":\"7-1-2024  12:48\"},{\"planet\":\"Saturn\",\"planet_id\":6,\"start\":\"7-1-2024  12:48\",\"end\":\"3-6-2024  0:4\"}]}', '{\"planet\":{\"major\":\"Rahu\",\"minor\":\"Mercury\",\"sub_minor\":\"Jupiter\"},\"dasha_period\":[{\"planet\":\"Jupiter\",\"planet_id\":4,\"start\":\"5-9-2023  8:21\",\"end\":\"21-9-2023  21:45\"},{\"planet\":\"Saturn\",\"planet_id\":6,\"start\":\"21-9-2023  21:45\",\"end\":\"11-10-2023  13:39\"},{\"planet\":\"Mercury\",\"planet_id\":3,\"start\":\"11-10-2023  13:39\",\"end\":\"29-10-2023  3:53\"},{\"planet\":\"Ketu\",\"planet_id\":8,\"start\":\"29-10-2023  3:53\",\"end\":\"5-11-2023  9:44\"},{\"planet\":\"Venus\",\"planet_id\":5,\"start\":\"5-11-2023  9:44\",\"end\":\"26-11-2023  2:29\"},{\"planet\":\"Sun\",\"planet_id\":0,\"start\":\"26-11-2023  2:29\",\"end\":\"2-12-2023  7:30\"},{\"planet\":\"Moon\",\"planet_id\":1,\"start\":\"2-12-2023  7:30\",\"end\":\"12-12-2023  15:52\"},{\"planet\":\"Mars\",\"planet_id\":2,\"start\":\"12-12-2023  15:52\",\"end\":\"19-12-2023  21:44\"},{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"19-12-2023  21:44\",\"end\":\"7-1-2024  12:48\"}]}', '{\"planet\":{\"major\":\"Rahu\",\"minor\":\"Mercury\",\"sub_minor\":\"Jupiter\",\"sub_sub_minor\":\"Rahu\"},\"dasha_period\":[{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"19-12-2023  21:44\",\"end\":\"22-12-2023  16:47\"},{\"planet\":\"Jupiter\",\"planet_id\":4,\"start\":\"22-12-2023  16:47\",\"end\":\"25-12-2023  4:24\"},{\"planet\":\"Saturn\",\"planet_id\":6,\"start\":\"25-12-2023  4:24\",\"end\":\"28-12-2023  3:11\"},{\"planet\":\"Mercury\",\"planet_id\":3,\"start\":\"28-12-2023  3:11\",\"end\":\"30-12-2023  18:31\"},{\"planet\":\"Ketu\",\"planet_id\":8,\"start\":\"30-12-2023  18:31\",\"end\":\"31-12-2023  20:36\"},{\"planet\":\"Venus\",\"planet_id\":5,\"start\":\"31-12-2023  20:36\",\"end\":\"3-1-2024  23:6\"},{\"planet\":\"Sun\",\"planet_id\":0,\"start\":\"3-1-2024  23:6\",\"end\":\"4-1-2024  21:28\"},{\"planet\":\"Moon\",\"planet_id\":1,\"start\":\"4-1-2024  21:28\",\"end\":\"6-1-2024  10:43\"},{\"planet\":\"Mars\",\"planet_id\":2,\"start\":\"6-1-2024  10:43\",\"end\":\"7-1-2024  12:48\"}]}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `current_vdasha_date`
--

CREATE TABLE `current_vdasha_date` (
  `id` bigint UNSIGNED NOT NULL,
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_minor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_minor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_sub_minor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_yogini_dasha`
--

CREATE TABLE `current_yogini_dasha` (
  `id` bigint UNSIGNED NOT NULL,
  `major_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_yogini_dasha`
--

INSERT INTO `current_yogini_dasha` (`id`, `major_dasha`, `sub_dasha`, `sub_sub_dasha`, `user_id`, `status`, `sta`) VALUES
(1, '{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"duration\":\"7 Years\",\"start_date\":\"5-8-2022 21:37\",\"end_date\":\"5-8-2029 21:37\"}', '{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"16-12-2023 1:7\",\"end_date\":\"6-7-2025 5:7\"}', '{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"16-12-2023 1:7\",\"end_date\":\"20-4-2024 7:20\"}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `daily_nakshatra_consolidated`
--

CREATE TABLE `daily_nakshatra_consolidated` (
  `id` bigint UNSIGNED NOT NULL,
  `birth_moon_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_moon_nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_nakshatra_prediction`
--

CREATE TABLE `daily_nakshatra_prediction` (
  `id` bigint UNSIGNED NOT NULL,
  `birth_moon_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_moon_nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_nakshatra_prediction`
--

INSERT INTO `daily_nakshatra_prediction` (`id`, `birth_moon_sign`, `birth_moon_nakshatra`, `prediction`, `prediction_date`, `user_id`, `status`, `sta`) VALUES
(1, 'Capricorn', 'Shravan', '{\"health\":\"Constant sitting in one place may bring you pain in neck and back. Your mind will be stressed too. Meditation can help you deal with this. \",\"emotions\":\"You will be very short-tempered today. It is advisable that you engage in some vigorous swimming or any sort of physical activity. \",\"profession\":\"Today is not a very favorable day- so check your financial situation and limit your expenses. You may find yourself running from pillar to post with little fruitful outcome. Do not lose heart. Do not give in to temper. \",\"luck\":\"Luck is not in your favor today. Things just don\\u2019t seem to be working in your favour. Be patient and wait for the right time to come. \",\"personal_life\":\"You can hurt someone else under an impulse of anger. Don\\u2019t be in a rush to take decisions. Differences with siblings will upset you. Avoid using harsh words and try to maintain peace in relationships. \",\"travel\":\"You may face troubles while making short trips. Chances of getting injured or getting involving in disputes are likely. Travel only if you have to. \"}', '20 December 2023', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `daily_nakshatra_prediction_next`
--

CREATE TABLE `daily_nakshatra_prediction_next` (
  `id` bigint UNSIGNED NOT NULL,
  `birth_moon_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_moon_nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_nakshatra_prediction_next`
--

INSERT INTO `daily_nakshatra_prediction_next` (`id`, `birth_moon_sign`, `birth_moon_nakshatra`, `prediction`, `prediction_date`, `user_id`, `status`, `sta`) VALUES
(1, 'Capricorn', 'Shravan', '{\"health\":\"You will experience a new wave of vigor and energy. You are likely to take up a health and fitness regime, which you have been putting off till now. \",\"emotions\":\"Your mind will be light hearted and will be in mood to laugh will others. Your mood will be very lively. Try to put your high confidence to good use today. \",\"profession\":\"This is a day of achievements. You can initiate new projects or plans today. You\\u2019ll get opportunities to earn income from more than one source. Success and social reputation will increase. \",\"luck\":\"Today is one of the lucky days for you when fortune smiles on you. Event which you never expected have a high probability of happening today. \",\"personal_life\":\"You will experience a new wave of vigor and energy. You are likely to take up a health and fitness regime, which you have been putting off till now. \",\"travel\":\"Trips undertaken today will prove beneficial for you. You may also get opportunity to go on business trips along with your friends. \"}', '21 December 2023', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `daily_nakshatra_prediction_previous`
--

CREATE TABLE `daily_nakshatra_prediction_previous` (
  `id` bigint UNSIGNED NOT NULL,
  `birth_moon_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_moon_nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_nakshatra_prediction_previous`
--

INSERT INTO `daily_nakshatra_prediction_previous` (`id`, `birth_moon_sign`, `birth_moon_nakshatra`, `prediction`, `prediction_date`, `user_id`, `status`, `sta`) VALUES
(1, 'Capricorn', 'Shravan', '{\"health\":\"Today is best suited to bring about a complete change in your health and fitness regime. You shall be cured of some physical problem which may have been troubling you for quite some time now. \",\"emotions\":\"You will be at the top shape and will perform excellently in all pursuits. Colleagues at workplace are going to be especially helpful and accommodating. You may get some good news relating to promotion or increase in business. \",\"profession\":\"You will be at the top shape and will perform excellently in all pursuits. Colleagues at workplace are going to be especially helpful and accommodating. You may get some good news relating to promotion or increase in business. \",\"luck\":\"There are a few pleasant surprises in store for you today. You will be able to achieve big results with little efforts. \",\"personal_life\":\"Today is a good time to enjoy some family activities. You will be able to express your heartfelt feelings toward your partner. This will improve your mutual understanding. You will be able to take things in a flexible manner. \",\"travel\":\"Travel for health purpose is likely. Trips to natural place will rejuvenate your body and mind. \"}', '19 December 2023', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `find_nakshatra_nakshatraname`
--

CREATE TABLE `find_nakshatra_nakshatraname` (
  `id` bigint UNSIGNED NOT NULL,
  `nakshatra_to_find` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `find_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `past_matches` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `future_matches` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_ascendant_report`
--

CREATE TABLE `general_ascendant_report` (
  `id` bigint UNSIGNED NOT NULL,
  `asc_report` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_ascendant_report`
--

INSERT INTO `general_ascendant_report` (`id`, `asc_report`, `user_id`, `status`, `sta`) VALUES
(1, '{\"ascendant\":\"Taurus\",\"report\":\"People with Taurus rising tend to be strong, persistent, slow to change, determined, stable, quiet (until pushed too far then there will be trouble), practical, stubborn, non-aggressive, patient, affectionate, loyal, hard-working, passive and unassuming in general, and fixed in their convictions with a general slow pace of mind. Taureans can be led or coaxed, but never pushed or driven. Resources and possessions, whether people or finances are very important to you. You want to build and make things grow, but you can\'t be hurried. You want to get your hands on things and see the practical results of your own hard work. You are good at taking what others have started then carrying on. Success comes to you by sheer persistence and will. Your love of sweet or rich food can incline you to put on weight. Try to be less rigid in all you do. Tame any jealousy and instinct to possessiveness. You hate and fear sickness and pain. Spiritual lesson to learn: Detachment. Venus rules Taurus so Venus will be important in your chart.\"}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `general_house_report_planet_name`
--

CREATE TABLE `general_house_report_planet_name` (
  `id` bigint UNSIGNED NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_report` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_house_report_planet_name`
--

INSERT INTO `general_house_report_planet_name` (`id`, `planet`, `house_report`, `user_id`, `status`, `sta`) VALUES
(1, 'Moon', 'You are a dreamer and muse often about the higher aspects of life. Since you may not be content with the way your life currently is going, you have the desire to search for fresh fields. This search may take you on many long travels, both physically and mentally. Security may be found in a religious or philosophical ideal. Your philosophy of life is what nurtures you and gives you security. You have a variety of interests, in sports, hobbies and studies. You make a stimulating teacher because of your personal interest in the subjects you teach. They are really a part of you and that comes across to those who listen to you. You may have precognitive dreams. Concerning vocation: the emphasis is placed upon the higher mind, the dimensions of philosophy, public mores, religion, law or sharing the reasoning of the public. Issues regarding foreign travel, relocation, even citizenship change are important dimensions to consider in the quest for work conditions that will bring personal success.', 2, 'Y', 'Y'),
(2, 'Sun', 'You may wish to find, understand, live and accept a higher ideal or philosophy. But, then again, you may be one who insists upon scientific proof before anything can be believed. You can be the far-sighted thinker, one of high ideals and tolerance of other people\'s views or the dogmatic fanatic who just parrots what others have told you. Generally, there is a quest for truth and wisdom and a love of travel, not necessarily physical. You may have an aptitude for foreign languages and a love of foreign culture.', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `general_nakshatra_report`
--

CREATE TABLE `general_nakshatra_report` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `physical` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `character` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `health` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_nakshatra_report`
--

INSERT INTO `general_nakshatra_report` (`id`, `user_id`, `physical`, `character`, `family`, `health`, `education`, `status`) VALUES
(1, 2, '[\"He has a very good attractive physical feature. Normally his height will be small. There will be a peculiar sign on his face, may be in the form of a mole or some other marks which appears to be a kind of disfigurement. In some cases, it has been noticed that black mole beneath shoulder.\"]', '[\"He is very sweet in the speech and also maintain neatness in every work he undertakes. There is a set principle for him in his life. He expect his surroundings to be very clean and he dislikes the persons who do not have the tendency of maintaining neatness. Once he notices a person in untidy condition he will not hesitate to open his mouth. He takes pity on the condition of others and try to help others as far as possible. He likes to have a very neat and delicious food. It is because of this he is found to be a very good host.\",\"He is god fearing and has full guru bhakti (respect to the teacher). He is a believer of_ \\u2018Satyameva J ayate\' (Truth only will win). He cannot expect much benefit or return from those persons whom he has helped whereas it has been noticed that he is subject to deceit from others. Even if a thief is caught by him, he will try to find out the truth of the circumstances which led that person to become a thief and if he is convinced he will let that fellow go. His inherent quality of peaceful appearance and the knack of dealings will penetrate to the minds of the public, hence he is fittest politician for the modern times. His one smile is enough for others to be attracted and once he is attracted they cannot forget the native.\",\"Whatever may be the ups and downs in his life, neither he will reach to the top nor he will be at the bottom. In other words, a mediocre life will be enjoyed by him.\",\"Even illiterate persons born in this Nakshatra will show complete maturity and will be eager to gather knowledge whenever they get opportunity. \",\"He is a very good adviser. Others will look upon him for solving individual as well as collective problems. He is a versatile genius. He has the ability and capacity to undertake different jobs at a time. If he is installed in a seat where some power and authority vests, he will shine well. He is always in search for authoritative job.\",\"Since he has to shoulder much responsibilities and spend for fulfilling his responsibilities he will always be in need of money. He will not like to take any revenge even to his bitterest enemies. On the other hand he will think that let the God give the due punishment to them.\"]', '[\"His married life will be filled with extra-ordinary happiness He will have most obedient wife with all good qualities that is expected of a wife. Even then sex relationship with other ladies are not ruled out.\"]', '[\"He may stiffer from ear problem, Skin disease, eczema, rheumatism, tuberculosis and indigestion.\"]', '[\"Normally period upto30 years of age will undergo several changes. Period between 30 years to 45 years of age will mark stability in all walks of life. In case he goes beyond 65 years due to beneficial planetary positions he can expect remarkable progress both economical and social. \",\"The native is suitable for taking up mechanical or technical work or engineering. He may also be connected with petroleum or oil products.\"]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `general_rashi_report_planet_name`
--

CREATE TABLE `general_rashi_report_planet_name` (
  `id` bigint UNSIGNED NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rashi_report` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_rashi_report_planet_name`
--

INSERT INTO `general_rashi_report_planet_name` (`id`, `planet`, `rashi_report`, `user_id`, `status`) VALUES
(1, 'Moon', 'You tend to be very serious and responsible, thinking that duty calls first before all else. You are not comfortable displaying your emotions for all to see and you certainly don\'t want them to think that you need help and support. You never want to appear emotionally weak. There is a great sense of ambition within you, perhaps because you feel unloved, unwanted or inadequate. You then work very hard because it makes you feel important or needed. You need to feel secure in your own authority. Security needs are what drive you. You may be shy and insecure over your own worth and can be overly sensitive to real or imagined hurts. Sometimes you feel as though you have to carry the weight of the world on your shoulders.\r\n\r\nYou are especially uncomfortable with emotional dependency, and will tell yourself and others (even children) not to be a baby. You need to accept that no one is self-sufficient all the time, and to be gentler with your childish emotional needs and wants. To others, you may appear to be rather hard-nosed and tough, with a business-like attitude toward their personal concerns and feelings. Your feelings and loyalties run deep, but you often do not let people know how much you care. You also need to learn to relax, enjoy yourself, and play sometimes. You are conservative, reliable and ambitious. You have the ability to bring plans to completion. On the negative side, you may be ruthless in your desire for power and success. Selfishness and manipulation are possible. You desire recognition. The emotions are steady, but can be quite cold.', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `geo_details`
--

CREATE TABLE `geo_details` (
  `id` bigint UNSIGNED NOT NULL,
  `geonames` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghat_chakra`
--

CREATE TABLE `ghat_chakra` (
  `id` bigint UNSIGNED NOT NULL,
  `month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pahar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ghat_chakra`
--

INSERT INTO `ghat_chakra` (`id`, `month`, `tithi`, `day`, `nakshatra`, `yog`, `karan`, `pahar`, `moon`, `user_id`, `status`, `sta`) VALUES
(1, 'Vaishakh', '4,9,14', 'Tuesday', 'Rohini', 'Vaidhriti', 'Shakuni', '4', '8', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `hora_muhurta`
--

CREATE TABLE `hora_muhurta` (
  `id` bigint UNSIGNED NOT NULL,
  `hora` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hora_muhurta`
--

INSERT INTO `hora_muhurta` (`id`, `hora`, `user_id`, `status`, `sta`) VALUES
(1, '{\"day\":[{\"time\":\"5:37 : 6:37\",\"hora\":\"Moon\"},{\"time\":\"6:37 : 7:37\",\"hora\":\"Saturn\"},{\"time\":\"7:37 : 8:37\",\"hora\":\"Jupiter\"},{\"time\":\"8:37 : 9:37\",\"hora\":\"Mars\"},{\"time\":\"9:37 : 10:37\",\"hora\":\"Sun\"},{\"time\":\"10:37 : 11:37\",\"hora\":\"Venus\"},{\"time\":\"11:37 : 12:37\",\"hora\":\"Mercury\"},{\"time\":\"12:37 : 13:37\",\"hora\":\"Moon\"},{\"time\":\"13:37 : 14:37\",\"hora\":\"Saturn\"},{\"time\":\"14:37 : 15:37\",\"hora\":\"Jupiter\"},{\"time\":\"15:37 : 16:37\",\"hora\":\"Mars\"},{\"time\":\"16:37 : 17:37\",\"hora\":\"Sun\"}],\"night\":[{\"time\":\"17:37 : 18:37\",\"hora\":\"Venus\"},{\"time\":\"18:37 : 19:37\",\"hora\":\"Mercury\"},{\"time\":\"19:37 : 20:37\",\"hora\":\"Moon\"},{\"time\":\"20:37 : 21:37\",\"hora\":\"Saturn\"},{\"time\":\"21:37 : 22:37\",\"hora\":\"Jupiter\"},{\"time\":\"22:37 : 23:37\",\"hora\":\"Mars\"},{\"time\":\"23:37 : 0:37\",\"hora\":\"Sun\"},{\"time\":\"0:37 : 1:37\",\"hora\":\"Venus\"},{\"time\":\"1:37 : 2:37\",\"hora\":\"Mercury\"},{\"time\":\"2:37 : 3:37\",\"hora\":\"Moon\"},{\"time\":\"3:37 : 4:37\",\"hora\":\"Saturn\"},{\"time\":\"4:37 : 5:37\",\"hora\":\"Jupiter\"}]}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `hora_muhurta_dinman`
--

CREATE TABLE `hora_muhurta_dinman` (
  `id` bigint UNSIGNED NOT NULL,
  `hora` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horoscope`
--

CREATE TABLE `horoscope` (
  `id` int NOT NULL,
  `sun_sign` varchar(50) NOT NULL,
  `prediction_date` date DEFAULT NULL,
  `prediction_month` varchar(20) DEFAULT NULL,
  `prediction` longtext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horo_chart_chart_id`
--

CREATE TABLE `horo_chart_chart_id` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `horo_chart_chart_id`
--

INSERT INTO `horo_chart_chart_id` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '\"[{\\\"sign\\\":2,\\\"sign_name\\\":\\\"Taurus\\\",\\\"planet\\\":[\\\"SATURN\\\"],\\\"planet_small\\\":[\\\"Sa \\\"],\\\"planet_degree\\\":[]},{\\\"sign\\\":3,\\\"sign_name\\\":\\\"Gemini\\\",\\\"planet\\\":[\\\"JUPITER\\\",\\\"RAHU\\\"],\\\"planet_small\\\":[\\\"Ju \\\",\\\"Ra \\\"],\\\"planet_degree\\\":[]},{\\\"sign\\\":4,\\\"sign_name\\\":\\\"Cancer\\\",\\\"planet\\\":[],\\\"planet_small\\\":[],\\\"planet_degree\\\":[]},{\\\"sign\\\":5,\\\"sign_name\\\":\\\"Leo\\\",\\\"planet\\\":[],\\\"planet_small\\\":[],\\\"planet_degree\\\":[]},{\\\"sign\\\":6,\\\"sign_name\\\":\\\"Virgo\\\",\\\"planet\\\":[],\\\"planet_small\\\":[],\\\"planet_degree\\\":[]},{\\\"sign\\\":7,\\\"sign_name\\\":\\\"Libra\\\",\\\"planet\\\":[],\\\"planet_small\\\":[],\\\"planet_degree\\\":[]},{\\\"sign\\\":8,\\\"sign_name\\\":\\\"Scorpio\\\",\\\"planet\\\":[],\\\"planet_small\\\":[],\\\"planet_degree\\\":[]},{\\\"sign\\\":9,\\\"sign_name\\\":\\\"Sagittarius\\\",\\\"planet\\\":[\\\"KETU\\\"],\\\"planet_small\\\":[\\\"Ke \\\"],\\\"planet_degree\\\":[]},{\\\"sign\\\":10,\\\"sign_name\\\":\\\"Capricorn\\\",\\\"planet\\\":[\\\"SUN\\\",\\\"MOON\\\",\\\"MERCURY\\\"],\\\"planet_small\\\":[\\\"Su \\\",\\\"Mo \\\",\\\"Me \\\"],\\\"planet_degree\\\":[]},{\\\"sign\\\":11,\\\"sign_name\\\":\\\"Aquarius\\\",\\\"planet\\\":[\\\"VENUS\\\"],\\\"planet_small\\\":[\\\"Ve \\\"],\\\"planet_degree\\\":[]},{\\\"sign\\\":12,\\\"sign_name\\\":\\\"Pisces\\\",\\\"planet\\\":[\\\"MARS\\\"],\\\"planet_small\\\":[\\\"Ma \\\"],\\\"planet_degree\\\":[]},{\\\"sign\\\":1,\\\"sign_name\\\":\\\"Aries\\\",\\\"planet\\\":[],\\\"planet_small\\\":[],\\\"planet_degree\\\":[]}]\"', 'Y'),
(2, 2, '[{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[\"JUPITER\",\"RAHU\"],\"planet_small\":[\"Ju \",\"Ra \"],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"SUN\",\"MOON\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Mo \",\"Me \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `horo_chart_extended_chart_id`
--

CREATE TABLE `horo_chart_extended_chart_id` (
  `id` bigint UNSIGNED NOT NULL,
  `sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horo_chart_image_chartid`
--

CREATE TABLE `horo_chart_image_chartid` (
  `id` bigint UNSIGNED NOT NULL,
  `svg` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `horo_chart_image_chartid`
--

INSERT INTO `horo_chart_image_chartid` (`id`, `svg`, `user_id`, `status`, `sta`) VALUES
(1, '<svg width=\"350\" height=\"350\" id=\"chartSvg\" xmlns=\"http://www.w3.org/2000/svg\"><g class=\"slice\"><path d=\"M10,10L175,10L92.5,92.5L10,10\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M175,10L340,10L257.5,92.5L175,10\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M92.5,92.5L10,175L10,10\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M92.5,92.5L175,175L257.5,92.5L175,10\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M257.5,92.5L340,175L340,10\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M92.5,92.5L175,175L92.5,257.5L10,175\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M257.5,92.5L340,175L257.5,257.5L175,175\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M92.5,257.5L10,340L10,175\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M175,175L257.5,257.5L175,340L92.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M92.5,257.5L175,340L10,340\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M257.5,257.5L340,340L175,340\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><text font-size=\"15\">11</text><text font-size=\"15\" x=\"171.7\" y=\"161.8\" style=\"fill: black;\">2</text><text font-size=\"15\" x=\"92.5\" y=\"76\" style=\"fill: black;\">3</text><text font-size=\"15\" x=\"67.75\" y=\"99.1\" style=\"fill: black;\">4</text><text font-size=\"15\" x=\"158.5\" y=\"179.95\" style=\"fill: black;\">5</text><text font-size=\"15\" x=\"69.4\" y=\"265.75\" style=\"fill: black;\">6</text><text font-size=\"15\" x=\"82.6\" y=\"277.3\" style=\"fill: black;\">7</text><text font-size=\"15\" x=\"168.4\" y=\"194.8\" style=\"fill: black;\">8</text><text font-size=\"15\" x=\"249.25\" y=\"277.3\" style=\"fill: black;\">9</text><text font-size=\"15\" x=\"274\" y=\"257.5\" style=\"fill: black;\">10</text><text font-size=\"15\" x=\"186.55\" y=\"179.95\" style=\"fill: black;\">11</text><text font-size=\"15\" x=\"274\" y=\"97.45\" style=\"fill: black;\">12</text><text font-size=\"15\" x=\"249.25\" y=\"76\" style=\"fill: black;\">1</text><text font-size=\"14\" x=\"165\" y=\"97.5\" style=\"fill: black;\">Sa </text><text font-size=\"14\" x=\"247.5\" y=\"175\" style=\"fill: black;\">Ve </text><text font-size=\"14\" x=\"82.5\" y=\"30\" style=\"fill: black;\">Ju </text><text font-size=\"14\" x=\"59.5\" y=\"30\" style=\"fill: black;\">Ra </text><text font-size=\"14\" x=\"247.5\" y=\"330\" style=\"fill: black;\">Ke </text><text font-size=\"14\" x=\"320\" y=\"97.5\" style=\"fill: black;\">Ma </text><text font-size=\"14\" x=\"320\" y=\"262.5\" style=\"fill: black;\">Su </text><text font-size=\"14\" x=\"300\" y=\"262.5\" style=\"fill: black;\">Mo </text><text font-size=\"14\" x=\"320\" y=\"242.5\" style=\"fill: black;\">Me </text></g><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#8C64B4\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#c1121f\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#FB7F29\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#8C64B4\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#8C64B4\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#fc1303\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#666666\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"#333\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path><path d=\"M340,175L340,340L257.5,257.5\" stroke=\"black\" stroke-width=\"1\" fill=\"none\"></path></svg>', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kalsarpa_details`
--

CREATE TABLE `kalsarpa_details` (
  `id` bigint UNSIGNED NOT NULL,
  `present` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `one_line` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kalsarpa_details`
--

INSERT INTO `kalsarpa_details` (`id`, `present`, `type`, `one_line`, `name`, `report`, `user_id`, `status`, `sta`) VALUES
(1, '1', 'Full Ascending', 'You have ascending kalsarpa dosha direction, which is treated as powerful. The KalSarpa Dosha is having full effect in your horoscope.', 'Kulik', '{\"house_id\":2,\"report\":\"<p>In your horoscope the Kulik Kaal Sarp Yog is present. Due to this the financial position of the native remains weak as his expenses may be more. There may be hurdles in obtaining good education. <\\/p>\\n\\n<p>The influence of Moon makes the mind of native disturbed and restless. Native has to struggle for moving ahead. The married life is painful and disturbed. There could be a separation. The native develops contacts with many persons of opposite sex and may have to face humiliation. The family life remains disturbed; peace and happiness remain absent.<\\/p>\\n\\n<p>The friends of the native try to deceive him again and again. He is full of spirit of charity but others try to take advantage of it. The father of the native may die at native\'s early age. On many occasions there is fall of prestige or there is lack of esteem.<\\/p>\\n\\n<p>The evil spirits or ghosts may disturb the native.<\\/p>\\n\\n<p>The native is devoid of bliss of children or there is some lack of pleasure from them. The children may be cruel or disobedient. The health of native may suffer. The second half of life may be full of struggles or the native may remain worried about old age.<\\/p>\\n\\n<p>The native gets success in business or job. <\\/p>\"}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_debts`
--

CREATE TABLE `lalkitab_debts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lalkitab_debts`
--

INSERT INTO `lalkitab_debts` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '[{\"debt_name\":\"Debts to Relatives\",\"indications\":\"killing or getting killed a she buffalo which is going to deliver a calf, performing black magic at the time of construction of a house or laying foundation stone by others, hating those people who mingle with the relatives of the native, keeping away in the functions like birth days of children or family festivals.\",\"events\":\"The native cheats his friends, spoils the work done by others or burns the ripe crops in the agricultural fields of others.\"},{\"debt_name\":\"Father Debts\",\"indications\":\"Changing or defaming of family priest, districting the shrine constructed along with residence, cutting or having holy long pepper tree.\",\"events\":\"The hair of the any one of the elder’s persons in the family will become white. After turning to white,the hair colour starts becoming pale. Complaining of cough, or events like keeping the stigma of the bad actions of all other people on his head, etc., will happen.\"},{\"debt_name\":\"Debts to Evil Person\",\"indications\":\"Not purchasing machinery or houses even after giving advance,sending out of examination hall without any reason, disputes or legal cases against elder people without any reason etc.\",\"events\":\"Untimely death of progeny or in-laws, godowns of oil or coconut or wood or any other commodity of trade getting fired, no fate of residing in the house purchased, if house is purchased repairing stair case or demolishing stair case and again constructing, incidents like drinking poisons, death out of weapons\"}]', 'Y'),
(2, 2, '[{\"debt_name\":\"Debts to Relatives\",\"indications\":\"killing or getting killed a she buffalo which is going to deliver a calf, performing black magic at the time of construction of a house or laying foundation stone by others, hating those people who mingle with the relatives of the native, keeping away in the functions like birth days of children or family festivals.\",\"events\":\"The native cheats his friends, spoils the work done by others or burns the ripe crops in the agricultural fields of others.\"},{\"debt_name\":\"Father Debts\",\"indications\":\"Changing or defaming of family priest, districting the shrine constructed along with residence, cutting or having holy long pepper tree.\",\"events\":\"The hair of the any one of the elder’s persons in the family will become white. After turning to white,the hair colour starts becoming pale. Complaining of cough, or events like keeping the stigma of the bad actions of all other people on his head, etc., will happen.\"},{\"debt_name\":\"Debts to Evil Person\",\"indications\":\"Not purchasing machinery or houses even after giving advance,sending out of examination hall without any reason, disputes or legal cases against elder people without any reason etc.\",\"events\":\"Untimely death of progeny or in-laws, godowns of oil or coconut or wood or any other commodity of trade getting fired, no fate of residing in the house purchased, if house is purchased repairing stair case or demolishing stair case and again constructing, incidents like drinking poisons, death out of weapons\"}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_horoscope`
--

CREATE TABLE `lalkitab_horoscope` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lalkitab_horoscope`
--

INSERT INTO `lalkitab_horoscope` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '[{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[\"JUPITER\",\"RAHU\"],\"planet_small\":[\"Ju \",\"Ra \"],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SUN\",\"MOON\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Mo \",\"Me \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]', 'Y'),
(2, 2, '[{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[\"JUPITER\",\"RAHU\"],\"planet_small\":[\"Ju \",\"Ra \"],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SUN\",\"MOON\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Mo \",\"Me \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_houses`
--

CREATE TABLE `lalkitab_houses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lalkitab_houses`
--

INSERT INTO `lalkitab_houses` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '[{\"khana_number\":1,\"maalik\":\"Mars\",\"pakka_ghar\":\"Sun\",\"kismat\":\"Mars\",\"soya\":true,\"exalt\":[\"Sun\"],\"debilitated\":[\"Saturn\"]},{\"khana_number\":2,\"maalik\":\"Venus\",\"pakka_ghar\":\"Jupiter\",\"kismat\":\"Moon\",\"soya\":false,\"exalt\":[\"Moon\",\"Rahu\"],\"debilitated\":\"-\"},{\"khana_number\":3,\"maalik\":\"Mercury\",\"pakka_ghar\":\"Mars\",\"kismat\":\"Mercury\",\"soya\":true,\"exalt\":[\"Rahu\"],\"debilitated\":[\"Ketu\"]},{\"khana_number\":4,\"maalik\":\"Moon\",\"pakka_ghar\":\"Moon\",\"kismat\":\"Moon\",\"soya\":true,\"exalt\":[\"Jupiter\"],\"debilitated\":[\"Mars\"]},{\"khana_number\":5,\"maalik\":\"Sun\",\"pakka_ghar\":\"Jupiter\",\"kismat\":\"Sun\",\"soya\":true,\"exalt\":\"-\",\"debilitated\":\"-\"},{\"khana_number\":6,\"maalik\":\"Mercury\",\"pakka_ghar\":\"Mars\",\"kismat\":\"Rahu\",\"soya\":true,\"exalt\":[\"Mercury\"],\"debilitated\":[\"Venus\"]},{\"khana_number\":7,\"maalik\":\"Venus\",\"pakka_ghar\":\"Venus\",\"kismat\":\"Venus\",\"soya\":true,\"exalt\":[\"Saturn\"],\"debilitated\":[\"Sun\"]},{\"khana_number\":8,\"maalik\":\"Mars\",\"pakka_ghar\":\"Saturn\",\"kismat\":\"Moon\",\"soya\":false,\"exalt\":[\"Ketu\"],\"debilitated\":[\"Moon\"]},{\"khana_number\":9,\"maalik\":\"Jupiter\",\"pakka_ghar\":\"Sun\",\"kismat\":\"Jupiter\",\"soya\":true,\"exalt\":[\"Ketu\"],\"debilitated\":[\"Rahu\"]},{\"khana_number\":10,\"maalik\":\"Saturn\",\"pakka_ghar\":\"Sun\",\"kismat\":\"Saturn\",\"soya\":false,\"exalt\":[\"Mars\"],\"debilitated\":[\"Jupiter\"]},{\"khana_number\":11,\"maalik\":\"Saturn\",\"pakka_ghar\":\"Jupiter\",\"kismat\":\"Jupiter\",\"soya\":true,\"exalt\":\"-\",\"debilitated\":\"-\"},{\"khana_number\":12,\"maalik\":\"Jupiter\",\"pakka_ghar\":\"Saturn\",\"kismat\":\"Ketu\",\"soya\":true,\"exalt\":[\"Venus\"],\"debilitated\":[\"Mercury\"]}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_planets`
--

CREATE TABLE `lalkitab_planets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lalkitab_planets`
--

INSERT INTO `lalkitab_planets` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '[{\"planet\":\"Sun\",\"rashi\":\"Sagittarius\",\"soya\":true,\"position\":\"Friend Sign\",\"nature\":\"Malefic\"},{\"planet\":\"Moon\",\"rashi\":\"Sagittarius\",\"soya\":true,\"position\":\"Neutral Sign\",\"nature\":\"Malefic\"},{\"planet\":\"Mars\",\"rashi\":\"Aquarius\",\"soya\":true,\"position\":\"Neutral Sign\",\"nature\":\"Malefic\"},{\"planet\":\"Mercury\",\"rashi\":\"Sagittarius\",\"soya\":true,\"position\":\"Neutral Sign\",\"nature\":\"Malefic\"},{\"planet\":\"Jupiter\",\"rashi\":\"Taurus\",\"soya\":false,\"position\":\"Enemy Sign\",\"nature\":\"Benefic\"},{\"planet\":\"Venus\",\"rashi\":\"Capricorn\",\"soya\":true,\"position\":\"Friend Sign\",\"nature\":\"Benefic\"},{\"planet\":\"Saturn\",\"rashi\":\"Aries\",\"soya\":true,\"position\":\"Debilitated\",\"nature\":\"Malefic\"},{\"planet\":\"Rahu\",\"rashi\":\"Taurus\",\"soya\":false,\"position\":\"-\",\"nature\":\"Malefic\"},{\"planet\":\"Ketu\",\"rashi\":\"Scorpio\",\"soya\":false,\"position\":\"-\",\"nature\":\"Malefic\"}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lalkitab_remedies_planet_name`
--

CREATE TABLE `lalkitab_remedies_planet_name` (
  `id` bigint UNSIGNED NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lal_kitab_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lal_kitab_remedies` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lalkitab_remedies_planet_name`
--

INSERT INTO `lalkitab_remedies_planet_name` (`id`, `planet`, `house`, `lal_kitab_desc`, `lal_kitab_remedies`, `user_id`, `status`, `sta`) VALUES
(1, 'Sun', 'Ninth', 'Benefits and favours from government, good health and financially stronger.The native will get a government job and comforts of vehicles and servants.The native will always be suspicious about others.If the Sun is in the 4th house, the native.s father will die in his childhood.If the Sun is in the 10th house and moon is in the 5th house the native will have a very short life.If the 4th house is without any planet, the native will be deprived of government favours and benefits. ', '[\"Never wear blue or black clothes.\",\"Throwing a copper coin in a river or canal for 43 years will be highly beneficial.\",\"Abstain from liquor and meat.\"]', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `major_chardasha`
--

CREATE TABLE `major_chardasha` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `major_chardasha`
--

INSERT INTO `major_chardasha` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '[{\"sign_id\":1,\"sign_name\":\"Taurus\",\"duration\":\"9 Years\",\"start_date\":\"11-2-2002\",\"end_date\":\"11-2-2011\"},{\"sign_id\":0,\"sign_name\":\"Aries\",\"duration\":\"11 Years\",\"start_date\":\"11-2-2011\",\"end_date\":\"11-2-2022\"},{\"sign_id\":11,\"sign_name\":\"Pisces\",\"duration\":\"9 Years\",\"start_date\":\"11-2-2022\",\"end_date\":\"11-2-2031\"},{\"sign_id\":10,\"sign_name\":\"Aquarius\",\"duration\":\"9 Years\",\"start_date\":\"11-2-2031\",\"end_date\":\"11-2-2040\"},{\"sign_id\":9,\"sign_name\":\"Capricorn\",\"duration\":\"8 Years\",\"start_date\":\"11-2-2040\",\"end_date\":\"11-2-2048\"},{\"sign_id\":8,\"sign_name\":\"Sagittarius\",\"duration\":\"6 Years\",\"start_date\":\"11-2-2048\",\"end_date\":\"11-2-2054\"},{\"sign_id\":7,\"sign_name\":\"Scorpio\",\"duration\":\"4 Years\",\"start_date\":\"11-2-2054\",\"end_date\":\"11-2-2058\"},{\"sign_id\":6,\"sign_name\":\"Libra\",\"duration\":\"4 Years\",\"start_date\":\"11-2-2058\",\"end_date\":\"11-2-2062\"},{\"sign_id\":5,\"sign_name\":\"Virgo\",\"duration\":\"8 Years\",\"start_date\":\"11-2-2062\",\"end_date\":\"11-2-2070\"},{\"sign_id\":4,\"sign_name\":\"Leo\",\"duration\":\"7 Years\",\"start_date\":\"11-2-2070\",\"end_date\":\"11-2-2077\"},{\"sign_id\":3,\"sign_name\":\"Cancer\",\"duration\":\"6 Years\",\"start_date\":\"11-2-2077\",\"end_date\":\"11-2-2083\"},{\"sign_id\":2,\"sign_name\":\"Gemini\",\"duration\":\"7 Years\",\"start_date\":\"11-2-2083\",\"end_date\":\"11-2-2090\"}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `major_vdasha`
--

CREATE TABLE `major_vdasha` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `major_vdasha`
--

INSERT INTO `major_vdasha` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '[{\"planet\":\"Moon\",\"planet_id\":1,\"start\":\"2-12-1996  15:4\",\"end\":\"3-12-2006  3:4\"},{\"planet\":\"Mars\",\"planet_id\":2,\"start\":\"3-12-2006  3:4\",\"end\":\"2-12-2013  21:4\"},{\"planet\":\"Rahu\",\"planet_id\":7,\"start\":\"2-12-2013  21:4\",\"end\":\"3-12-2031  9:4\"},{\"planet\":\"Jupiter\",\"planet_id\":4,\"start\":\"3-12-2031  9:4\",\"end\":\"3-12-2047  9:4\"},{\"planet\":\"Saturn\",\"planet_id\":6,\"start\":\"3-12-2047  9:4\",\"end\":\"3-12-2066  3:4\"},{\"planet\":\"Mercury\",\"planet_id\":3,\"start\":\"3-12-2066  3:4\",\"end\":\"3-12-2083  9:4\"},{\"planet\":\"Ketu\",\"planet_id\":8,\"start\":\"3-12-2083  9:4\",\"end\":\"3-12-2090  3:4\"},{\"planet\":\"Venus\",\"planet_id\":5,\"start\":\"3-12-2090  3:4\",\"end\":\"4-12-2110  3:4\"},{\"planet\":\"Sun\",\"planet_id\":0,\"start\":\"4-12-2110  3:4\",\"end\":\"3-12-2116  15:4\"}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `major_yogini_dasha`
--

CREATE TABLE `major_yogini_dasha` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `major_yogini_dasha`
--

INSERT INTO `major_yogini_dasha` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '[{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2001 21:37\",\"end_date\":\"5-8-2002 21:37\",\"start_ms\":997047420000,\"end_ms\":1028583420000,\"duration\":1},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2002 21:37\",\"end_date\":\"5-8-2004 21:37\",\"start_ms\":1028583420000,\"end_ms\":1091741820000,\"duration\":2},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2004 21:37\",\"end_date\":\"5-8-2007 21:37\",\"start_ms\":1091741820000,\"end_ms\":1186349820000,\"duration\":3},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2007 21:37\",\"end_date\":\"5-8-2011 21:37\",\"start_ms\":1186349820000,\"end_ms\":1312580220000,\"duration\":4},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2011 21:37\",\"end_date\":\"5-8-2016 21:37\",\"start_ms\":1312580220000,\"end_ms\":1470433020000,\"duration\":5},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2016 21:37\",\"end_date\":\"5-8-2022 21:37\",\"start_ms\":1470433020000,\"end_ms\":1659735420000,\"duration\":6},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2022 21:37\",\"end_date\":\"5-8-2029 21:37\",\"start_ms\":1659735420000,\"end_ms\":1880660220000,\"duration\":7},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2029 21:37\",\"end_date\":\"5-8-2037 21:37\",\"start_ms\":1880660220000,\"end_ms\":2133121020000,\"duration\":8},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2037 21:37\",\"end_date\":\"5-8-2038 21:37\",\"start_ms\":2133121020000,\"end_ms\":2164657020000,\"duration\":1},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2038 21:37\",\"end_date\":\"5-8-2040 21:37\",\"start_ms\":2164657020000,\"end_ms\":2227815420000,\"duration\":2},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2040 21:37\",\"end_date\":\"5-8-2043 21:37\",\"start_ms\":2227815420000,\"end_ms\":2322423420000,\"duration\":3},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2043 21:37\",\"end_date\":\"5-8-2047 21:37\",\"start_ms\":2322423420000,\"end_ms\":2448653820000,\"duration\":4},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2047 21:37\",\"end_date\":\"5-8-2052 21:37\",\"start_ms\":2448653820000,\"end_ms\":2606506620000,\"duration\":5},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2052 21:37\",\"end_date\":\"5-8-2058 21:37\",\"start_ms\":2606506620000,\"end_ms\":2795809020000,\"duration\":6},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2058 21:37\",\"end_date\":\"5-8-2065 21:37\",\"start_ms\":2795809020000,\"end_ms\":3016733820000,\"duration\":7},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2065 21:37\",\"end_date\":\"5-8-2073 21:37\",\"start_ms\":3016733820000,\"end_ms\":3269194620000,\"duration\":8},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2073 21:37\",\"end_date\":\"5-8-2074 21:37\",\"start_ms\":3269194620000,\"end_ms\":3300730620000,\"duration\":1},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2074 21:37\",\"end_date\":\"5-8-2076 21:37\",\"start_ms\":3300730620000,\"end_ms\":3363889020000,\"duration\":2},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2076 21:37\",\"end_date\":\"5-8-2079 21:37\",\"start_ms\":3363889020000,\"end_ms\":3458497020000,\"duration\":3},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2079 21:37\",\"end_date\":\"5-8-2083 21:37\",\"start_ms\":3458497020000,\"end_ms\":3584727420000,\"duration\":4},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2083 21:37\",\"end_date\":\"5-8-2088 21:37\",\"start_ms\":3584727420000,\"end_ms\":3742580220000,\"duration\":5},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2088 21:37\",\"end_date\":\"5-8-2094 21:37\",\"start_ms\":3742580220000,\"end_ms\":3931882620000,\"duration\":6},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2094 21:37\",\"end_date\":\"5-8-2101 21:37\",\"start_ms\":3931882620000,\"end_ms\":4152721020000,\"duration\":7},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2101 21:37\",\"end_date\":\"5-8-2109 21:37\",\"start_ms\":4152721020000,\"end_ms\":4405181820000,\"duration\":8}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `manglik`
--

CREATE TABLE `manglik` (
  `id` bigint UNSIGNED NOT NULL,
  `manglik_present_rule` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `manglik_cancel_rule` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_mars_manglik_cancelled` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `manglik_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_manglik_present` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_manglik_after_cancellation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `manglik_report` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_present` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manglik`
--

INSERT INTO `manglik` (`id`, `manglik_present_rule`, `manglik_cancel_rule`, `is_mars_manglik_cancelled`, `manglik_status`, `percentage_manglik_present`, `percentage_manglik_after_cancellation`, `manglik_report`, `is_present`, `user_id`, `status`, `sta`) VALUES
(1, '{\"based_on_aspect\":[\"Fourth house of your birth chart is aspected by Ketu\",\"Twelfth house of your birth chart is aspected by Ketu.\",\"Rahu is aspecting eighth house of your birth chart.\",\"Seventh house of your birth chart is aspected by Saturn\",\"Mars is aspecting second house of your birth chart.\",\"Ketu is aspecting second house of your birth chart.\"],\"based_on_house\":[\"Planet Saturn is in First house in your horoscope.\",\"Planet Rahu is situated in Second house in your birth chart.\",\"Planet Ketu is situated in Eighth house in your birth chart.\"]}', '[]', '0', 'EFFECTIVE', '27.5', '27.5', 'Manglik dosha has been detected in your horosocpe and the extent of mangal dosha present is effective and therefore needs due carefulness. You are manglik.', '1', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_panchang`
--

CREATE TABLE `monthly_panchang` (
  `id` bigint UNSIGNED NOT NULL,
  `year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moon_biorhythm`
--

CREATE TABLE `moon_biorhythm` (
  `id` bigint UNSIGNED NOT NULL,
  `considered_date` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bird_id` int NOT NULL,
  `birth_pakshi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_pakshi_details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity_cycle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moon_biorhythm`
--

INSERT INTO `moon_biorhythm` (`id`, `considered_date`, `bird_id`, `birth_pakshi`, `birth_pakshi_details`, `requested_day`, `activity_cycle`, `user_id`, `status`, `sta`) VALUES
(1, '21-12-2023', 0, 'Vulture', '{\"name_letter\":[\"E\",\"EE\"],\"death_day\":[\"Tuesday\"],\"day_ruling_days\":[\"Friday\"],\"night_ruling_days\":[\"Sunday\",\"Tuesday\"],\"color\":\"Black\",\"direction\":\"East\",\"enemy\":[\"Owl\",\"Cock\"],\"friend\":[\"Crow\",\"Peacock\"]}', NULL, '{\"day\":[{\"start_time\":\"05:40:50\",\"end_time\":\"07:47:26\",\"start_hours\":5.6806,\"end_hours\":7.7906,\"activity_id\":3,\"activity\":\"Sleep\",\"activity_meaning\":\"Relax\"},{\"start_time\":\"07:47:26\",\"end_time\":\"09:54:02\",\"start_hours\":7.7906,\"end_hours\":9.9006,\"activity_id\":4,\"activity\":\"Die\",\"activity_meaning\":\"Caution\"},{\"start_time\":\"09:54:02\",\"end_time\":\"12:00:37\",\"start_hours\":9.9006,\"end_hours\":12.0106,\"activity_id\":1,\"activity\":\"Eat\",\"activity_meaning\":\"Energize\"},{\"start_time\":\"12:00:37\",\"end_time\":\"14:07:13\",\"start_hours\":12.0106,\"end_hours\":14.1206,\"activity_id\":2,\"activity\":\"Walk\",\"activity_meaning\":\"Action\"},{\"start_time\":\"14:07:13\",\"end_time\":\"16:13:49\",\"start_hours\":14.1206,\"end_hours\":16.2306,\"activity_id\":0,\"activity\":\"Rule\",\"activity_meaning\":\"Succeed\"}],\"night\":[{\"start_time\":\"16:13:49\",\"end_time\":\"18:20:19\",\"start_hours\":16.2306,\"end_hours\":18.3389,\"activity_id\":3,\"activity\":\"Sleep\",\"activity_meaning\":\"Relax\"},{\"start_time\":\"18:20:19\",\"end_time\":\"20:26:50\",\"start_hours\":18.3389,\"end_hours\":20.4472,\"activity_id\":1,\"activity\":\"Eat\",\"activity_meaning\":\"Energize\"},{\"start_time\":\"20:26:50\",\"end_time\":\"22:33:20\",\"start_hours\":20.4472,\"end_hours\":22.5556,\"activity_id\":2,\"activity\":\"Walk\",\"activity_meaning\":\"Action\"},{\"start_time\":\"22:33:20\",\"end_time\":\"00:39:50\",\"start_hours\":22.5556,\"end_hours\":24.6639,\"activity_id\":4,\"activity\":\"Die\",\"activity_meaning\":\"Caution\"},{\"start_time\":\"00:39:50\",\"end_time\":\"02:46:20\",\"start_hours\":24.6639,\"end_hours\":26.7722,\"activity_id\":0,\"activity\":\"Rule\",\"activity_meaning\":\"Succeed\"}]}', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `numero_fasts_report`
--

CREATE TABLE `numero_fasts_report` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numero_fasts_report`
--

INSERT INTO `numero_fasts_report` (`id`, `title`, `description`, `user_id`, `status`, `sta`) VALUES
(1, 'Fast Vrata Timing For You', ' You should observe fasts on Mondays. Begin on a Monday with Chitra Nakshatra. According to rules this fast should be observed for 54 Mondays but minimum for 7 Mondays, it is essential.  Wear white clothes on the day of fast and donate white goods. Recite mantra for Moon preferably on beads of pearl. ', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `numero_fav_lord`
--

CREATE TABLE `numero_fav_lord` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numero_fav_lord`
--

INSERT INTO `numero_fav_lord` (`id`, `title`, `description`, `user_id`, `status`, `sta`) VALUES
(1, 'Favourable Lord For You', ' Worship Moon or Lord Shiva. Recite every day \"Om Namah Shivay\".  If you offer at least 21 or 108 leaves of wood apple tree (Beil) to Lord Shiva, this will rid you of various diseases and problems. ', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `numero_fav_mantra`
--

CREATE TABLE `numero_fav_mantra` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numero_fav_mantra`
--

INSERT INTO `numero_fav_mantra` (`id`, `title`, `description`, `user_id`, `status`, `sta`) VALUES
(1, 'Favourable Gayatri Mantra For You', 'To increase the beneficial effects of the Moon recite every morning after bath, 11 or 21 or 108 times the following Gayatri Mantra of Moon.  Mantra : || \"Amritangay Vidmahe kalarupay Dhimhi Tannah Somah Prachodyat\" || ', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `numero_fav_time`
--

CREATE TABLE `numero_fav_time` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numero_fav_time`
--

INSERT INTO `numero_fav_time` (`id`, `title`, `description`, `user_id`, `status`, `sta`) VALUES
(1, 'Favourable Time For You', ' The Sun remains in Cancer from 16th July to 16th August.The Cancer is own sign of the Moon.  The Sun remains in Taurus from 13th may to 14th June, which is exalted sign of the Moon. This period is auspicious for Radical no 2 for initiating any new project or important work.  You should endeavor to carry out your chief plans and ideas on days whose numbers vibrate with your own, such as on the 2nd, 11th, 20th, 29th of any month. ', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `numero_place_vastu`
--

CREATE TABLE `numero_place_vastu` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numero_place_vastu`
--

INSERT INTO `numero_place_vastu` (`id`, `title`, `description`, `user_id`, `status`, `sta`) VALUES
(1, 'Favourable Place Vastu For You', ' To stay at the North-East section of your home will be lucky for you. If the total of your house number is 2, 7 or 9, such a house will be lucky for you. ', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `numero_prediction_daily`
--

CREATE TABLE `numero_prediction_daily` (
  `id` bigint UNSIGNED NOT NULL,
  `prediction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lucky_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lucky_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prediction_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numero_prediction_daily`
--

INSERT INTO `numero_prediction_daily` (`id`, `prediction`, `lucky_color`, `lucky_number`, `prediction_date`, `user_id`, `status`, `sta`) VALUES
(1, 'You might find challenging situations at work and would require patience and hard work to get through it. Some confusion at home might lead to cancellation of your trip with family. You shall take up any art form as your hobby. You shall be a great team player today. Minor health issues might crop up but with time everything shall settle.', 'Light green', '7', '21-12-2023', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `numero_report`
--

CREATE TABLE `numero_report` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numero_report`
--

INSERT INTO `numero_report` (`id`, `title`, `description`, `user_id`, `status`, `sta`) VALUES
(1, 'What the Number Says About You', ' Your radical number 2. Its ruler is Moon, which makes you an imaginative, art loving and affectionate person. Though your imagination shall be of high order, your physical sturdiness may not be so good. You will be blessed with plenty of intelligence and shrewdness, areas in which you will be ahead to others. Like the constant change in appearance of moon, you will not be firm on one thought or plan. You will have a tendency to change your ideas and to leave one project for another. Patience and enterprise will be lacking. Due to this reason, many of your schemes will not be completed in time. You may have less self-confidence and belief in your acumen. This may lead to despair. You will have high social status, and whomsoever you will own in your mind, will render you results as expected. Amongst people, you will be popular, and will build up your social status by your labour. According to your age, you may have to face ailments pertaining to your eyes, stomach and urinary system. Stress and interrelated problems will also disturb you. Water born diseases like cough, cold, headaches will affect you sometimes. ', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `numero_table`
--

CREATE TABLE `numero_table` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `destiny_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `radical_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `evil_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_god` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_mantra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_metal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_stone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_substone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `friendly_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `neutral_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `radical_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `radical_ruler` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numero_table`
--

INSERT INTO `numero_table` (`id`, `name`, `date`, `destiny_number`, `radical_number`, `name_number`, `evil_num`, `fav_color`, `fav_day`, `fav_god`, `fav_mantra`, `fav_metal`, `fav_stone`, `fav_substone`, `friendly_num`, `neutral_num`, `radical_num`, `radical_ruler`, `user_id`, `status`, `sta`) VALUES
(1, 'Rahul Raj Kosta', '11-2-2002', '8', '2', '2', '5', 'White', 'Sunday, Monday, Friday', 'Shiva', '|| Om Som Somay Namah ||', 'Silver', 'Pearl', 'Moon Stone', '8,7,9', '1,3,4,6', '2', 'Moon', 2, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `panchang_chart`
--

CREATE TABLE `panchang_chart` (
  `id` bigint UNSIGNED NOT NULL,
  `sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet_small` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panchang_chart_sunrise`
--

CREATE TABLE `panchang_chart_sunrise` (
  `id` bigint UNSIGNED NOT NULL,
  `sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `planet_small` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panchang_festival`
--

CREATE TABLE `panchang_festival` (
  `id` bigint UNSIGNED NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `festivals` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panchang_lagna_table`
--

CREATE TABLE `panchang_lagna_table` (
  `id` bigint UNSIGNED NOT NULL,
  `lagna` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'MyApp', '371a08276b07acd28852d6df01720c36e78d5724fd68d7b8696d8abcf8973f5a', '[\"*\"]', '2023-08-10 19:20:43', NULL, '2023-08-10 19:02:34', '2023-08-10 19:20:43'),
(2, 'App\\Models\\User', 1, 'MyApp', '50d8120012c039bab71e732b2edc6c7aa7521b652535f46aee340808745aeca6', '[\"*\"]', '2023-08-15 20:34:02', NULL, '2023-08-10 21:32:49', '2023-08-15 20:34:02'),
(3, 'App\\Models\\User', 1, 'MyApp', '933748e68f8139859d9574cf0081dd8b9fdf02409cdecfa371357edf69622350', '[\"*\"]', '2023-08-19 08:56:42', NULL, '2023-08-19 08:43:55', '2023-08-19 08:56:42'),
(4, 'App\\Models\\User', 1, 'MyApp', '6921e678b282d708aafc0ff522232f963242846003c16741baf01478ac60ace4', '[\"*\"]', '2023-12-04 07:40:57', NULL, '2023-12-02 00:08:41', '2023-12-04 07:40:57'),
(5, 'App\\Models\\User', 2, 'MyApp', '56a9d0f148e30c46170b71ef3afdca59c7370eb3e00cb777d261cef869b3345e', '[\"*\"]', '2023-12-22 05:53:12', NULL, '2023-12-19 23:49:36', '2023-12-22 05:53:12'),
(6, 'App\\Models\\User', 3, 'MyApp', '93f49df7e6dc9a2625c7d0e8842f194c2f8d50fe2c17041812c3ec90f7d19ae1', '[\"*\"]', NULL, NULL, '2023-12-27 13:05:16', '2023-12-27 13:05:16'),
(7, 'App\\Models\\User', 3, 'MyApp', '05195e9d16761344c9bf115fc72f4a81560941fce1ee854ae862059c2cd4a0fe', '[\"*\"]', '2023-12-30 07:47:20', NULL, '2023-12-28 05:36:48', '2023-12-30 07:47:20'),
(8, 'App\\Models\\User', 4, 'MyApp', '40dd299133ddcd3b7371c1743fb9272db06c2df930fd827f013e97fe7d2f534e', '[\"*\"]', '2023-12-28 15:04:53', NULL, '2023-12-28 07:51:17', '2023-12-28 15:04:53'),
(9, 'App\\Models\\User', 4, 'MyApp', '4ec01e1a0075a7cd144845b97fd14512b1a32b78ac86bba4d512f47fdeba3d1b', '[\"*\"]', NULL, NULL, '2023-12-28 07:53:16', '2023-12-28 07:53:16'),
(10, 'App\\Models\\User', 4, 'MyApp', 'ac33c48da501f3febb0fffaf5f6f57cbf64512e8472cebc82228166d7c3cb4dc', '[\"*\"]', NULL, NULL, '2023-12-28 14:13:13', '2023-12-28 14:13:13'),
(11, 'App\\Models\\User', 4, 'MyApp', '0abc146ddeb67f6837c2ee68bda6d8d5c65522ea8d3a0224381ce7bff7071077', '[\"*\"]', NULL, NULL, '2023-12-28 14:13:14', '2023-12-28 14:13:14'),
(12, 'App\\Models\\User', 4, 'MyApp', 'fb24a3771eb2c8d960f27a9df7085a97159b8d82bed2a2c2657db748ab0e559c', '[\"*\"]', NULL, NULL, '2023-12-28 14:22:26', '2023-12-28 14:22:26'),
(13, 'App\\Models\\User', 4, 'MyApp', '380cbd272a21ec41aaf969fdd66ae06066b25f66a94308f125b5b55330167067', '[\"*\"]', NULL, NULL, '2023-12-28 14:22:27', '2023-12-28 14:22:27'),
(14, 'App\\Models\\User', 4, 'MyApp', 'c03618e6eaa2ea044fe354c843a8bf47323eaff10a1d952d00d860175aad418e', '[\"*\"]', '2023-12-30 06:20:20', NULL, '2023-12-28 14:29:11', '2023-12-30 06:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE `planets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `planets`
--

INSERT INTO `planets` (`id`, `user_id`, `Data`, `status`) VALUES
(1, 2, '[{\"id\":0,\"name\":\"Sun\",\"fullDegree\":298.47057865894647,\"normDegree\":28.470578658946465,\"speed\":1.0119617891678834,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":2,\"house\":9,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":1,\"name\":\"Moon\",\"fullDegree\":286.9242869139103,\"normDegree\":16.924286913910294,\"speed\":12.10447987379363,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Shravan\",\"nakshatraLord\":\"Moon\",\"nakshatra_pad\":3,\"house\":9,\"is_planet_set\":true,\"planet_awastha\":\"Yuva\"},{\"id\":2,\"name\":\"Mars\",\"fullDegree\":353.0077756554107,\"normDegree\":23.007775655410683,\"speed\":0.719161551354509,\"isRetro\":\"false\",\"sign\":\"Pisces\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Revati\",\"nakshatraLord\":\"Mercury\",\"nakshatra_pad\":2,\"house\":11,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":3,\"name\":\"Mercury\",\"fullDegree\":275.1250241278606,\"normDegree\":5.125024127860627,\"speed\":0.2874379099467809,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Uttra Shadha\",\"nakshatraLord\":\"Sun\",\"nakshatra_pad\":3,\"house\":9,\"is_planet_set\":false,\"planet_awastha\":\"Mrit\"},{\"id\":4,\"name\":\"Jupiter\",\"fullDegree\":72.29629329928459,\"normDegree\":12.296293299284585,\"speed\":-0.06009221685611091,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":2,\"house\":2,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":5,\"name\":\"Venus\",\"fullDegree\":305.1406631297237,\"normDegree\":5.140663129723691,\"speed\":1.2532003756123926,\"isRetro\":\"false\",\"sign\":\"Aquarius\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":4,\"house\":10,\"is_planet_set\":true,\"planet_awastha\":\"Bala\"},{\"id\":6,\"name\":\"Saturn\",\"fullDegree\":44.15885984121388,\"normDegree\":14.158859841213882,\"speed\":0.006038004837586247,\"isRetro\":\"false\",\"sign\":\"Taurus\",\"signLord\":\"Venus\",\"nakshatra\":\"Rohini\",\"nakshatraLord\":\"Moon\",\"nakshatra_pad\":2,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":7,\"name\":\"Rahu\",\"fullDegree\":60.28955152857521,\"normDegree\":0.2895515285752097,\"speed\":-0.05299201503612821,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Mrigshira\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":3,\"house\":2,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":8,\"name\":\"Ketu\",\"fullDegree\":240.2895515285752,\"normDegree\":0.2895515285752026,\"speed\":-0.05299201503612821,\"isRetro\":\"true\",\"sign\":\"Sagittarius\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Mool\",\"nakshatraLord\":\"Ketu\",\"nakshatra_pad\":1,\"house\":8,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":9,\"name\":\"Ascendant\",\"fullDegree\":36.4316108576602,\"normDegree\":6.431610857660203,\"speed\":0,\"isRetro\":false,\"sign\":\"Taurus\",\"signLord\":\"Venus\",\"nakshatra\":\"Krittika\",\"nakshatraLord\":\"Sun\",\"nakshatra_pad\":3,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"--\"}]', 'Y'),
(2, 2, '[{\"id\":0,\"name\":\"Sun\",\"fullDegree\":298.47057865894647,\"normDegree\":28.470578658946465,\"speed\":1.0119617891678834,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":2,\"house\":9,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":1,\"name\":\"Moon\",\"fullDegree\":286.9242869139103,\"normDegree\":16.924286913910294,\"speed\":12.10447987379363,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Shravan\",\"nakshatraLord\":\"Moon\",\"nakshatra_pad\":3,\"house\":9,\"is_planet_set\":true,\"planet_awastha\":\"Yuva\"},{\"id\":2,\"name\":\"Mars\",\"fullDegree\":353.0077756554107,\"normDegree\":23.007775655410683,\"speed\":0.719161551354509,\"isRetro\":\"false\",\"sign\":\"Pisces\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Revati\",\"nakshatraLord\":\"Mercury\",\"nakshatra_pad\":2,\"house\":11,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":3,\"name\":\"Mercury\",\"fullDegree\":275.1250241278606,\"normDegree\":5.125024127860627,\"speed\":0.2874379099467809,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Uttra Shadha\",\"nakshatraLord\":\"Sun\",\"nakshatra_pad\":3,\"house\":9,\"is_planet_set\":false,\"planet_awastha\":\"Mrit\"},{\"id\":4,\"name\":\"Jupiter\",\"fullDegree\":72.29629329928459,\"normDegree\":12.296293299284585,\"speed\":-0.06009221685611091,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":2,\"house\":2,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":5,\"name\":\"Venus\",\"fullDegree\":305.1406631297237,\"normDegree\":5.140663129723691,\"speed\":1.2532003756123926,\"isRetro\":\"false\",\"sign\":\"Aquarius\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":4,\"house\":10,\"is_planet_set\":true,\"planet_awastha\":\"Bala\"},{\"id\":6,\"name\":\"Saturn\",\"fullDegree\":44.15885984121388,\"normDegree\":14.158859841213882,\"speed\":0.006038004837586247,\"isRetro\":\"false\",\"sign\":\"Taurus\",\"signLord\":\"Venus\",\"nakshatra\":\"Rohini\",\"nakshatraLord\":\"Moon\",\"nakshatra_pad\":2,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":7,\"name\":\"Rahu\",\"fullDegree\":60.28955152857521,\"normDegree\":0.2895515285752097,\"speed\":-0.05299201503612821,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Mrigshira\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":3,\"house\":2,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":8,\"name\":\"Ketu\",\"fullDegree\":240.2895515285752,\"normDegree\":0.2895515285752026,\"speed\":-0.05299201503612821,\"isRetro\":\"true\",\"sign\":\"Sagittarius\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Mool\",\"nakshatraLord\":\"Ketu\",\"nakshatra_pad\":1,\"house\":8,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":9,\"name\":\"Ascendant\",\"fullDegree\":36.4316108576602,\"normDegree\":6.431610857660203,\"speed\":0,\"isRetro\":false,\"sign\":\"Taurus\",\"signLord\":\"Venus\",\"nakshatra\":\"Krittika\",\"nakshatraLord\":\"Sun\",\"nakshatra_pad\":3,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"--\"}]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `planets_extended`
--

CREATE TABLE `planets_extended` (
  `id` bigint UNSIGNED NOT NULL,
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `planets_extended`
--

INSERT INTO `planets_extended` (`id`, `Data`, `user_id`, `status`) VALUES
(1, '[{\"id\":0,\"name\":\"SUN\",\"fullDegree\":298.47057865894647,\"normDegree\":28.470578658946465,\"speed\":1.0119617891678834,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":2,\"house\":9,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":1,\"name\":\"MOON\",\"fullDegree\":286.9242869139103,\"normDegree\":16.924286913910294,\"speed\":12.10447987379363,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Shravan\",\"nakshatraLord\":\"Moon\",\"nakshatra_pad\":3,\"house\":9,\"is_planet_set\":true,\"planet_awastha\":\"Yuva\"},{\"id\":2,\"name\":\"MARS\",\"fullDegree\":353.0077756554107,\"normDegree\":23.007775655410683,\"speed\":0.719161551354509,\"isRetro\":\"false\",\"sign\":\"Pisces\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Revati\",\"nakshatraLord\":\"Mercury\",\"nakshatra_pad\":2,\"house\":11,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":3,\"name\":\"MERCURY\",\"fullDegree\":275.1250241278606,\"normDegree\":5.125024127860627,\"speed\":0.2874379099467809,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Uttra Shadha\",\"nakshatraLord\":\"Sun\",\"nakshatra_pad\":3,\"house\":9,\"is_planet_set\":false,\"planet_awastha\":\"Mrit\"},{\"id\":4,\"name\":\"JUPITER\",\"fullDegree\":72.29629329928459,\"normDegree\":12.296293299284585,\"speed\":-0.06009221685611091,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":2,\"house\":2,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":5,\"name\":\"VENUS\",\"fullDegree\":305.1406631297237,\"normDegree\":5.140663129723691,\"speed\":1.2532003756123926,\"isRetro\":\"false\",\"sign\":\"Aquarius\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":4,\"house\":10,\"is_planet_set\":true,\"planet_awastha\":\"Bala\"},{\"id\":6,\"name\":\"SATURN\",\"fullDegree\":44.15885984121388,\"normDegree\":14.158859841213882,\"speed\":0.006038004837586247,\"isRetro\":\"false\",\"sign\":\"Taurus\",\"signLord\":\"Venus\",\"nakshatra\":\"Rohini\",\"nakshatraLord\":\"Moon\",\"nakshatra_pad\":2,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":7,\"name\":\"RAHU\",\"fullDegree\":60.28955152857521,\"normDegree\":0.2895515285752097,\"speed\":-0.05299201503612821,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Mrigshira\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":3,\"house\":2,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":8,\"name\":\"KETU\",\"fullDegree\":240.2895515285752,\"normDegree\":0.2895515285752026,\"speed\":-0.05299201503612821,\"isRetro\":\"true\",\"sign\":\"Sagittarius\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Mool\",\"nakshatraLord\":\"Ketu\",\"nakshatra_pad\":1,\"house\":8,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":9,\"name\":\"URANUS\",\"fullDegree\":300.79592939406206,\"normDegree\":0.7959293940620569,\"speed\":0.057846800235656484,\"isRetro\":\"false\",\"sign\":\"Aquarius\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":3,\"house\":10,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":10,\"name\":\"NEPTUNE\",\"fullDegree\":285.0957014622293,\"normDegree\":15.095701462229272,\"speed\":0.03716402202330009,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Shravan\",\"nakshatraLord\":\"Moon\",\"nakshatra_pad\":2,\"house\":9,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":11,\"name\":\"PLUTO\",\"fullDegree\":233.35678803851133,\"normDegree\":23.356788038511326,\"speed\":0.020459776751866852,\"isRetro\":\"false\",\"sign\":\"Scorpio\",\"signLord\":\"Mars\",\"nakshatra\":\"Jyeshtha\",\"nakshatraLord\":\"Mercury\",\"nakshatra_pad\":3,\"house\":7,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":12,\"name\":\"Ascendant\",\"fullDegree\":36.4316108576602,\"normDegree\":6.431610857660203,\"speed\":0,\"isRetro\":false,\"sign\":\"Taurus\",\"signLord\":\"Venus\",\"nakshatra\":\"Krittika\",\"nakshatraLord\":\"Sun\",\"nakshatra_pad\":3,\"house\":1}]', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `planet_ashtak_planet_name`
--

CREATE TABLE `planet_ashtak_planet_name` (
  `id` bigint UNSIGNED NOT NULL,
  `ashtak_varga` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ashtak_points` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `planet_ashtak_planet_name`
--

INSERT INTO `planet_ashtak_planet_name` (`id`, `ashtak_varga`, `ashtak_points`, `user_id`, `status`) VALUES
(1, '{\"type\":\"Bhinnashtak\",\"planet\":\"Sun\",\"sign\":\"Capricorn\",\"sign_id\":10}', '{\"aries\":{\"sun\":1,\"moon\":0,\"mars\":1,\"mercury\":0,\"jupiter\":1,\"venus\":0,\"saturn\":0,\"ascendant\":1,\"total\":4},\"taurus\":{\"sun\":0,\"moon\":0,\"mars\":0,\"mercury\":1,\"jupiter\":0,\"venus\":0,\"saturn\":1,\"ascendant\":0,\"total\":2},\"gemini\":{\"sun\":0,\"moon\":1,\"mars\":1,\"mercury\":1,\"jupiter\":0,\"venus\":0,\"saturn\":1,\"ascendant\":0,\"total\":4},\"cancer\":{\"sun\":1,\"moon\":0,\"mars\":0,\"mercury\":0,\"jupiter\":0,\"venus\":1,\"saturn\":0,\"ascendant\":1,\"total\":3},\"leo\":{\"sun\":1,\"moon\":0,\"mars\":0,\"mercury\":0,\"jupiter\":0,\"venus\":1,\"saturn\":1,\"ascendant\":1,\"total\":4},\"virgo\":{\"sun\":1,\"moon\":0,\"mars\":1,\"mercury\":1,\"jupiter\":0,\"venus\":0,\"saturn\":0,\"ascendant\":0,\"total\":3},\"libra\":{\"sun\":1,\"moon\":1,\"mars\":1,\"mercury\":1,\"jupiter\":1,\"venus\":0,\"saturn\":0,\"ascendant\":1,\"total\":6},\"scorpio\":{\"sun\":1,\"moon\":1,\"mars\":1,\"mercury\":1,\"jupiter\":1,\"venus\":0,\"saturn\":1,\"ascendant\":0,\"total\":6},\"sagittarius\":{\"sun\":0,\"moon\":0,\"mars\":1,\"mercury\":1,\"jupiter\":0,\"venus\":0,\"saturn\":1,\"ascendant\":0,\"total\":3},\"capricorn\":{\"sun\":1,\"moon\":0,\"mars\":1,\"mercury\":0,\"jupiter\":0,\"venus\":1,\"saturn\":1,\"ascendant\":0,\"total\":4},\"aquarius\":{\"sun\":1,\"moon\":0,\"mars\":0,\"mercury\":0,\"jupiter\":1,\"venus\":0,\"saturn\":1,\"ascendant\":1,\"total\":4},\"pisces\":{\"sun\":0,\"moon\":1,\"mars\":1,\"mercury\":1,\"jupiter\":0,\"venus\":0,\"saturn\":1,\"ascendant\":1,\"total\":5}}', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `planet_nature`
--

CREATE TABLE `planet_nature` (
  `id` bigint UNSIGNED NOT NULL,
  `GOOD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BAD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `KILLER` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `YOGAKARAKA` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planet_panchang`
--

CREATE TABLE `planet_panchang` (
  `id` bigint UNSIGNED NOT NULL,
  `planet_id` int NOT NULL,
  `planet_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDegree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `normDegree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRetro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign_lord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra_lord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planet_panchang_sunrise`
--

CREATE TABLE `planet_panchang_sunrise` (
  `id` bigint UNSIGNED NOT NULL,
  `planet_id` int NOT NULL,
  `planet_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDegree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `normDegree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRetro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `signLord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatraLord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productCategories`
--

CREATE TABLE `productCategories` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `flag` varchar(200) DEFAULT NULL,
  `status` varchar(1) DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productCategories`
--

INSERT INTO `productCategories` (`id`, `name`, `description`, `flag`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'new', 'Y', '2023-12-30 07:42:57', '2023-12-30 07:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 100, 'test', 'Y', '2023-12-30 07:44:50', '2023-12-30 07:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `puja_suggestion`
--

CREATE TABLE `puja_suggestion` (
  `id` bigint UNSIGNED NOT NULL,
  `summary` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `puja_suggestion`
--

INSERT INTO `puja_suggestion` (`id`, `summary`, `suggestions`, `user_id`, `sta`) VALUES
(1, 'Following are the puja suggestions based on your horoscope and planetary combinations.', '[{\"status\":true,\"priority\":5,\"title\":\"Kal Sarpa Dosha Shanti Pujan\",\"puja_id\":\"KAL_SARPA\",\"summary\":\"If all the 7 planets are situated between Rahu and Ketu then Kaal Sarp Yog is formed.According to the situation of Rahu in 12 houses of horoscope there are Kaal Sarp Yogas of 12 types.  These are : 1. Anant, 2. Kulik, 3. Vasuki, 4. Shankhpal, 5. Padma, 6. Mahapadma, 7. Takshak, 8. Karkotak, 9. Shankhchud, 10. Ghaatak, 11. Vishdhar and 12. Sheshnag. The Kaal Sarp Yog is of two types- Ascending and Descending. If all the 7 planets are eaten away by Rahu\'s mouth then it is Ascending Kaal Sarp Yog. If all planets are situated in back of Rahu then Descending Kaal Sarp Yog is formed.\",\"one_line\":\"You have ascending kalsarpa dosha direction, which is treated as powerful. The KalSarpa Dosha is having full effect in your horoscope.\"}]', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `rudraksha_suggestion`
--

CREATE TABLE `rudraksha_suggestion` (
  `id` bigint UNSIGNED NOT NULL,
  `img_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rudraksha_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recommend` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rudraksha_suggestion`
--

INSERT INTO `rudraksha_suggestion` (`id`, `img_url`, `rudraksha_key`, `name`, `recommend`, `detail`, `user_id`, `sta`) VALUES
(1, '/img/three+twelve.jpg', 'three_faced_twelve_faced', 'Three + Twelve Faced Rudraksha (Teen + Baarah Mukhi)', 'You are recommended to wear a combination of THREE and TWELVE FACED Rudraksha.', 'Twelve face rudraksha is symbol of Aditya. This symbolises lord Vishnu too. It should be worn by people wanting to attain influential and powerful positions. It is an extremely blessed bead and provides protection against many evils and perils. The bead is said to increase charisma and charm. Helps in ruling and creating a powerful aura round oneself. Malefic effects of the Sun are controlled.', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sadhesati_current_status`
--

CREATE TABLE `sadhesati_current_status` (
  `id` bigint UNSIGNED NOT NULL,
  `consideration_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_saturn_retrograde` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturn_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_undergoing_sadhesati` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sadhesati_phase` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sadhesati_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `what_is_sadhesati` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sadhesati_current_status`
--

INSERT INTO `sadhesati_current_status` (`id`, `consideration_date`, `is_saturn_retrograde`, `moon_sign`, `saturn_sign`, `is_undergoing_sadhesati`, `sadhesati_phase`, `start_date`, `end_date`, `sadhesati_status`, `what_is_sadhesati`, `user_id`, `sta`) VALUES
(1, '21-12-2023', '0', 'Capricorn', 'Aquarius', 'Yes, currently you are undergoing Sadhesati.', 'Ending Phase', '26-10-2017', '29-3-2025', '1', 'Sadhe Sati refers to the seven-and-a-half year period in which Saturn moves through three signs, the moon sign, one before the moon and the one after it. Sadhe Sati starts when Saturn (Shani) enters the 12th sign from the birth Moon sign and ends when Saturn leaves 2nd sign from the birth Moon sign.  Since Saturn approximately takes around two and half years to transit a sign which is called Shani\'s dhaiya  it takes around seven and half year to transit three signs  and that is why it is known as Sadhe Sati. Generally Sade-Sati comes thrice in a horoscope in the life time - first in childhood, second in youth & third in old-age. First Sade-Sati has effect on education & parents. Second Sade-Sati has effect on profession, finance & family. The last one affects health more than anything else.', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sadhesati_life_details`
--

CREATE TABLE `sadhesati_life_details` (
  `id` bigint UNSIGNED NOT NULL,
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sadhesati_life_details`
--

INSERT INTO `sadhesati_life_details` (`id`, `Data`, `user_id`, `status`) VALUES
(1, '[{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Sagittarius\",\"is_saturn_retrograde\":false,\"type\":\"RISING_START\",\"millisecond\":\"1485478800000\",\"date\":\"27-1-2017\",\"summary\":\"Sadhesati Rise Phase starting.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Sagittarius\",\"is_saturn_retrograde\":true,\"type\":\"RISING_END\",\"millisecond\":\"1498006800000\",\"date\":\"21-6-2017\",\"summary\":\"Sadhesati Rise Phase ending and with this Sadhesati is also ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Sagittarius\",\"is_saturn_retrograde\":false,\"type\":\"RISING_START\",\"millisecond\":\"1508979600000\",\"date\":\"26-10-2017\",\"summary\":\"Sadhesati Rise Phase starting.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Capricorn\",\"is_saturn_retrograde\":false,\"type\":\"PEAK_START\",\"millisecond\":\"1579827600000\",\"date\":\"24-1-2020\",\"summary\":\"Sadhesati Peak Phase starting with Rise Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Aquarius\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_START\",\"millisecond\":\"1651194000000\",\"date\":\"29-4-2022\",\"summary\":\"Sadhesati Setting Phase starting with Peak Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Aquarius\",\"is_saturn_retrograde\":true,\"type\":\"PEAK_START\",\"millisecond\":\"1657587600000\",\"date\":\"12-7-2022\",\"summary\":\"Sadhesati Peak Phase starting with Rise Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Aquarius\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_START\",\"millisecond\":\"1673917200000\",\"date\":\"17-1-2023\",\"summary\":\"Sadhesati Setting Phase starting with Peak Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Pisces\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_END\",\"millisecond\":\"1743210000000\",\"date\":\"29-3-2025\",\"summary\":\"Sadhesati Setting Phase ending and with this Sadhesati is also ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Sagittarius\",\"is_saturn_retrograde\":false,\"type\":\"RISING_START\",\"millisecond\":\"2427843600000\",\"date\":\"8-12-2046\",\"summary\":\"Sadhesati Rise Phase starting.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Capricorn\",\"is_saturn_retrograde\":false,\"type\":\"PEAK_START\",\"millisecond\":\"2498605200000\",\"date\":\"6-3-2049\",\"summary\":\"Sadhesati Peak Phase starting with Rise Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Capricorn\",\"is_saturn_retrograde\":true,\"type\":\"RISING_START\",\"millisecond\":\"2509405200000\",\"date\":\"9-7-2049\",\"summary\":\"Sadhesati Rise Phase starting.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Capricorn\",\"is_saturn_retrograde\":false,\"type\":\"PEAK_START\",\"millisecond\":\"2522192400000\",\"date\":\"4-12-2049\",\"summary\":\"Sadhesati Peak Phase starting with Rise Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Aquarius\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_START\",\"millisecond\":\"2592435600000\",\"date\":\"25-2-2052\",\"summary\":\"Sadhesati Setting Phase starting with Peak Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Pisces\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_END\",\"millisecond\":\"2662333200000\",\"date\":\"14-5-2054\",\"summary\":\"Sadhesati Setting Phase ending and with this Sadhesati is also ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Pisces\",\"is_saturn_retrograde\":true,\"type\":\"SETTING_START\",\"millisecond\":\"2671923600000\",\"date\":\"2-9-2054\",\"summary\":\"Sadhesati Setting Phase starting with Peak Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Pisces\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_END\",\"millisecond\":\"2685402000000\",\"date\":\"5-2-2055\",\"summary\":\"Sadhesati Setting Phase ending and with this Sadhesati is also ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Sagittarius\",\"is_saturn_retrograde\":false,\"type\":\"RISING_START\",\"millisecond\":\"3346362000000\",\"date\":\"16-1-2076\",\"summary\":\"Sadhesati Rise Phase starting.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Sagittarius\",\"is_saturn_retrograde\":true,\"type\":\"RISING_END\",\"millisecond\":\"3361568400000\",\"date\":\"10-7-2076\",\"summary\":\"Sadhesati Rise Phase ending and with this Sadhesati is also ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Sagittarius\",\"is_saturn_retrograde\":false,\"type\":\"RISING_START\",\"millisecond\":\"3369690000000\",\"date\":\"12-10-2076\",\"summary\":\"Sadhesati Rise Phase starting.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Capricorn\",\"is_saturn_retrograde\":false,\"type\":\"PEAK_START\",\"millisecond\":\"3440883600000\",\"date\":\"14-1-2079\",\"summary\":\"Sadhesati Peak Phase starting with Rise Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Capricorn\",\"is_saturn_retrograde\":false,\"type\":\"PEAK_START\",\"millisecond\":\"3440970000000\",\"date\":\"15-1-2079\",\"summary\":\"Sadhesati Peak Phase starting with Rise Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Aquarius\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_START\",\"millisecond\":\"3511645200000\",\"date\":\"12-4-2081\",\"summary\":\"Sadhesati Setting Phase starting with Peak Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Aquarius\",\"is_saturn_retrograde\":true,\"type\":\"PEAK_START\",\"millisecond\":\"3521408400000\",\"date\":\"3-8-2081\",\"summary\":\"Sadhesati Peak Phase starting with Rise Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Aquarius\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_START\",\"millisecond\":\"3534973200000\",\"date\":\"7-1-2082\",\"summary\":\"Sadhesati Setting Phase starting with Peak Phase ending.\"},{\"moon_sign\":\"Capricorn\",\"saturn_sign\":\"Pisces\",\"is_saturn_retrograde\":false,\"type\":\"SETTING_END\",\"millisecond\":\"3604352400000\",\"date\":\"20-3-2084\",\"summary\":\"Sadhesati Setting Phase ending and with this Sadhesati is also ending.\"}]', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sarvashtak`
--

CREATE TABLE `sarvashtak` (
  `id` bigint UNSIGNED NOT NULL,
  `ashtak_varga` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ashtak_points` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarvashtak`
--

INSERT INTO `sarvashtak` (`id`, `ashtak_varga`, `ashtak_points`, `user_id`, `sta`) VALUES
(1, '{\"type\":\"Sarvashtak\",\"sign\":\"Taurus\",\"sign_id\":2}', '{\"aries\":{\"sun\":4,\"moon\":4,\"mars\":2,\"mercury\":4,\"jupiter\":5,\"venus\":3,\"saturn\":2,\"ascendant\":0,\"total\":24},\"taurus\":{\"sun\":2,\"moon\":4,\"mars\":5,\"mercury\":6,\"jupiter\":3,\"venus\":5,\"saturn\":3,\"ascendant\":0,\"total\":28},\"gemini\":{\"sun\":4,\"moon\":4,\"mars\":4,\"mercury\":7,\"jupiter\":5,\"venus\":3,\"saturn\":2,\"ascendant\":0,\"total\":29},\"cancer\":{\"sun\":3,\"moon\":6,\"mars\":2,\"mercury\":0,\"jupiter\":5,\"venus\":3,\"saturn\":5,\"ascendant\":0,\"total\":24},\"leo\":{\"sun\":4,\"moon\":4,\"mars\":1,\"mercury\":3,\"jupiter\":3,\"venus\":5,\"saturn\":4,\"ascendant\":0,\"total\":24},\"virgo\":{\"sun\":3,\"moon\":2,\"mars\":2,\"mercury\":4,\"jupiter\":7,\"venus\":5,\"saturn\":2,\"ascendant\":0,\"total\":25},\"libra\":{\"sun\":6,\"moon\":6,\"mars\":3,\"mercury\":5,\"jupiter\":6,\"venus\":2,\"saturn\":5,\"ascendant\":0,\"total\":33},\"scorpio\":{\"sun\":6,\"moon\":5,\"mars\":5,\"mercury\":6,\"jupiter\":5,\"venus\":5,\"saturn\":4,\"ascendant\":0,\"total\":36},\"sagittarius\":{\"sun\":3,\"moon\":3,\"mars\":3,\"mercury\":6,\"jupiter\":3,\"venus\":5,\"saturn\":3,\"ascendant\":0,\"total\":26},\"capricorn\":{\"sun\":4,\"moon\":4,\"mars\":3,\"mercury\":4,\"jupiter\":5,\"venus\":5,\"saturn\":3,\"ascendant\":0,\"total\":28},\"aquarius\":{\"sun\":4,\"moon\":1,\"mars\":2,\"mercury\":4,\"jupiter\":4,\"venus\":5,\"saturn\":3,\"ascendant\":0,\"total\":23},\"pisces\":{\"sun\":5,\"moon\":6,\"mars\":7,\"mercury\":5,\"jupiter\":5,\"venus\":6,\"saturn\":3,\"ascendant\":0,\"total\":37}}', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sub_chardasha`
--

CREATE TABLE `sub_chardasha` (
  `id` bigint UNSIGNED NOT NULL,
  `major_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_chardasha_majorrashi_subrashi`
--

CREATE TABLE `sub_chardasha_majorrashi_subrashi` (
  `id` bigint UNSIGNED NOT NULL,
  `major_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_chardasha_rashi`
--

CREATE TABLE `sub_chardasha_rashi` (
  `id` bigint UNSIGNED NOT NULL,
  `major_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_sub_sub_vdasha`
--

CREATE TABLE `sub_sub_sub_sub_vdasha` (
  `id` bigint UNSIGNED NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_sub_vdasha`
--

CREATE TABLE `sub_sub_sub_vdasha` (
  `id` bigint UNSIGNED NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_vdasha`
--

CREATE TABLE `sub_sub_vdasha` (
  `id` bigint UNSIGNED NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_vdasha`
--

CREATE TABLE `sub_vdasha` (
  `id` bigint UNSIGNED NOT NULL,
  `planet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_yogini_dasha`
--

CREATE TABLE `sub_yogini_dasha` (
  `id` bigint UNSIGNED NOT NULL,
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_yogini_dasha`
--

INSERT INTO `sub_yogini_dasha` (`id`, `Data`, `user_id`, `status`) VALUES
(1, '[{\"major_dasha\":{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2001 21:37\",\"end_date\":\"5-8-2002 21:37\",\"start_ms\":997047420000,\"end_ms\":1028583420000,\"duration\":1},\"sub_dasha\":[{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2001 21:37\",\"end_date\":\"16-8-2001 1:7\",\"start_ms\":997047420000,\"end_ms\":997924020000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"16-8-2001 1:7\",\"end_date\":\"5-9-2001 8:7\",\"start_ms\":997924020000,\"end_ms\":999677220000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-9-2001 8:7\",\"end_date\":\"5-10-2001 18:37\",\"start_ms\":999677220000,\"end_ms\":1002307020000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-10-2001 18:37\",\"end_date\":\"15-11-2001 8:37\",\"start_ms\":1002307020000,\"end_ms\":1005813420000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"15-11-2001 8:37\",\"end_date\":\"5-1-2002 2:7\",\"start_ms\":1005813420000,\"end_ms\":1010196420000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-1-2002 2:7\",\"end_date\":\"6-3-2002 23:7\",\"start_ms\":1010196420000,\"end_ms\":1015456020000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"6-3-2002 23:7\",\"end_date\":\"16-5-2002 23:37\",\"start_ms\":1015456020000,\"end_ms\":1021592220000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"16-5-2002 23:37\",\"end_date\":\"5-8-2002 21:37\",\"start_ms\":1021592220000,\"end_ms\":1028583420000}]},{\"major_dasha\":{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2002 21:37\",\"end_date\":\"5-8-2004 21:37\",\"start_ms\":1028583420000,\"end_ms\":1091741820000,\"duration\":2},\"sub_dasha\":[{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2002 21:37\",\"end_date\":\"15-9-2002 11:37\",\"start_ms\":1028583420000,\"end_ms\":1032089820000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"15-9-2002 11:37\",\"end_date\":\"15-11-2002 8:37\",\"start_ms\":1032089820000,\"end_ms\":1037349420000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-11-2002 8:37\",\"end_date\":\"4-2-2003 12:37\",\"start_ms\":1037349420000,\"end_ms\":1044362220000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"4-2-2003 12:37\",\"end_date\":\"16-5-2003 23:37\",\"start_ms\":1044362220000,\"end_ms\":1053128220000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"16-5-2003 23:37\",\"end_date\":\"15-9-2003 17:37\",\"start_ms\":1053128220000,\"end_ms\":1063647420000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"15-9-2003 17:37\",\"end_date\":\"4-2-2004 18:37\",\"start_ms\":1063647420000,\"end_ms\":1075919820000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"4-2-2004 18:37\",\"end_date\":\"16-7-2004 2:37\",\"start_ms\":1075919820000,\"end_ms\":1089945420000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"16-7-2004 2:37\",\"end_date\":\"5-8-2004 21:37\",\"start_ms\":1089945420000,\"end_ms\":1091741820000}]},{\"major_dasha\":{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2004 21:37\",\"end_date\":\"5-8-2007 21:37\",\"start_ms\":1091741820000,\"end_ms\":1186349820000,\"duration\":3},\"sub_dasha\":[{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2004 21:37\",\"end_date\":\"5-11-2004 5:7\",\"start_ms\":1091741820000,\"end_ms\":1099631220000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-11-2004 5:7\",\"end_date\":\"6-3-2005 23:7\",\"start_ms\":1099631220000,\"end_ms\":1110150420000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"6-3-2005 23:7\",\"end_date\":\"6-8-2005 3:37\",\"start_ms\":1110150420000,\"end_ms\":1123299420000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"6-8-2005 3:37\",\"end_date\":\"4-2-2006 18:37\",\"start_ms\":1123299420000,\"end_ms\":1139078220000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"4-2-2006 18:37\",\"end_date\":\"5-9-2006 20:7\",\"start_ms\":1139078220000,\"end_ms\":1157486820000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-9-2006 20:7\",\"end_date\":\"7-5-2007 8:7\",\"start_ms\":1157486820000,\"end_ms\":1178525220000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"7-5-2007 8:7\",\"end_date\":\"6-6-2007 18:37\",\"start_ms\":1178525220000,\"end_ms\":1181155020000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-6-2007 18:37\",\"end_date\":\"5-8-2007 21:37\",\"start_ms\":1181155020000,\"end_ms\":1186349820000}]},{\"major_dasha\":{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2007 21:37\",\"end_date\":\"5-8-2011 21:37\",\"start_ms\":1186349820000,\"end_ms\":1312580220000,\"duration\":4},\"sub_dasha\":[{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2007 21:37\",\"end_date\":\"15-1-2008 5:37\",\"start_ms\":1186349820000,\"end_ms\":1200375420000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"15-1-2008 5:37\",\"end_date\":\"5-8-2008 3:37\",\"start_ms\":1200375420000,\"end_ms\":1217907420000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2008 3:37\",\"end_date\":\"5-4-2009 15:37\",\"start_ms\":1217907420000,\"end_ms\":1238945820000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-4-2009 15:37\",\"end_date\":\"14-1-2010 17:37\",\"start_ms\":1238945820000,\"end_ms\":1263490620000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"14-1-2010 17:37\",\"end_date\":\"5-12-2010 9:37\",\"start_ms\":1263490620000,\"end_ms\":1291541820000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-12-2010 9:37\",\"end_date\":\"14-1-2011 23:37\",\"start_ms\":1291541820000,\"end_ms\":1295048220000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"14-1-2011 23:37\",\"end_date\":\"6-4-2011 3:37\",\"start_ms\":1295048220000,\"end_ms\":1302061020000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"6-4-2011 3:37\",\"end_date\":\"5-8-2011 21:37\",\"start_ms\":1302061020000,\"end_ms\":1312580220000}]},{\"major_dasha\":{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2011 21:37\",\"end_date\":\"5-8-2016 21:37\",\"start_ms\":1312580220000,\"end_ms\":1470433020000,\"duration\":5},\"sub_dasha\":[{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2011 21:37\",\"end_date\":\"15-4-2012 13:7\",\"start_ms\":1312580220000,\"end_ms\":1334495220000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"15-4-2012 13:7\",\"end_date\":\"13-2-2013 22:7\",\"start_ms\":1334495220000,\"end_ms\":1360793220000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"13-2-2013 22:7\",\"end_date\":\"4-2-2014 0:37\",\"start_ms\":1360793220000,\"end_ms\":1391474220000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"4-2-2014 0:37\",\"end_date\":\"16-3-2015 20:37\",\"start_ms\":1391474220000,\"end_ms\":1426538220000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"16-3-2015 20:37\",\"end_date\":\"6-5-2015 14:7\",\"start_ms\":1426538220000,\"end_ms\":1430921220000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-5-2015 14:7\",\"end_date\":\"16-8-2015 1:7\",\"start_ms\":1430921220000,\"end_ms\":1439687220000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"16-8-2015 1:7\",\"end_date\":\"15-1-2016 5:37\",\"start_ms\":1439687220000,\"end_ms\":1452836220000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-1-2016 5:37\",\"end_date\":\"5-8-2016 21:37\",\"start_ms\":1452836220000,\"end_ms\":1470433020000}]},{\"major_dasha\":{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2016 21:37\",\"end_date\":\"5-8-2022 21:37\",\"start_ms\":1470433020000,\"end_ms\":1659735420000,\"duration\":6},\"sub_dasha\":[{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2016 21:37\",\"end_date\":\"6-8-2017 3:37\",\"start_ms\":1470433020000,\"end_ms\":1501990620000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"6-8-2017 3:37\",\"end_date\":\"6-10-2018 6:37\",\"start_ms\":1501990620000,\"end_ms\":1538807820000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"6-10-2018 6:37\",\"end_date\":\"5-2-2020 6:37\",\"start_ms\":1538807820000,\"end_ms\":1580884620000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-2-2020 6:37\",\"end_date\":\"6-4-2020 3:37\",\"start_ms\":1580884620000,\"end_ms\":1586144220000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-4-2020 3:37\",\"end_date\":\"5-8-2020 21:37\",\"start_ms\":1586144220000,\"end_ms\":1596663420000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2020 21:37\",\"end_date\":\"4-2-2021 12:37\",\"start_ms\":1596663420000,\"end_ms\":1612442220000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"4-2-2021 12:37\",\"end_date\":\"6-10-2021 0:37\",\"start_ms\":1612442220000,\"end_ms\":1633480620000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"6-10-2021 0:37\",\"end_date\":\"5-8-2022 21:37\",\"start_ms\":1633480620000,\"end_ms\":1659735420000}]},{\"major_dasha\":{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2022 21:37\",\"end_date\":\"5-8-2029 21:37\",\"start_ms\":1659735420000,\"end_ms\":1880660220000,\"duration\":7},\"sub_dasha\":[{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2022 21:37\",\"end_date\":\"16-12-2023 1:7\",\"start_ms\":1659735420000,\"end_ms\":1702688820000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"16-12-2023 1:7\",\"end_date\":\"6-7-2025 5:7\",\"start_ms\":1702688820000,\"end_ms\":1751778420000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"6-7-2025 5:7\",\"end_date\":\"15-9-2025 5:37\",\"start_ms\":1751778420000,\"end_ms\":1757914620000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"15-9-2025 5:37\",\"end_date\":\"4-2-2026 6:37\",\"start_ms\":1757914620000,\"end_ms\":1770187020000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"4-2-2026 6:37\",\"end_date\":\"5-9-2026 8:7\",\"start_ms\":1770187020000,\"end_ms\":1788595620000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-9-2026 8:7\",\"end_date\":\"16-6-2027 10:7\",\"start_ms\":1788595620000,\"end_ms\":1813140420000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"16-6-2027 10:7\",\"end_date\":\"5-6-2028 12:37\",\"start_ms\":1813140420000,\"end_ms\":1843821420000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-6-2028 12:37\",\"end_date\":\"5-8-2029 21:37\",\"start_ms\":1843821420000,\"end_ms\":1880660220000}]},{\"major_dasha\":{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2029 21:37\",\"end_date\":\"5-8-2037 21:37\",\"start_ms\":1880660220000,\"end_ms\":2133121020000,\"duration\":8},\"sub_dasha\":[{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2029 21:37\",\"end_date\":\"17-5-2031 5:37\",\"start_ms\":1880660220000,\"end_ms\":1936762620000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"17-5-2031 5:37\",\"end_date\":\"6-8-2031 9:37\",\"start_ms\":1936762620000,\"end_ms\":1943775420000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-8-2031 9:37\",\"end_date\":\"15-1-2032 17:37\",\"start_ms\":1943775420000,\"end_ms\":1957801020000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"15-1-2032 17:37\",\"end_date\":\"15-9-2032 5:37\",\"start_ms\":1957801020000,\"end_ms\":1978839420000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-9-2032 5:37\",\"end_date\":\"5-8-2033 21:37\",\"start_ms\":1978839420000,\"end_ms\":2006890620000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2033 21:37\",\"end_date\":\"15-9-2034 17:37\",\"start_ms\":2006890620000,\"end_ms\":2041954620000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"15-9-2034 17:37\",\"end_date\":\"15-1-2036 17:37\",\"start_ms\":2041954620000,\"end_ms\":2084031420000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"15-1-2036 17:37\",\"end_date\":\"5-8-2037 21:37\",\"start_ms\":2084031420000,\"end_ms\":2133121020000}]},{\"major_dasha\":{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2037 21:37\",\"end_date\":\"5-8-2038 21:37\",\"start_ms\":2133121020000,\"end_ms\":2164657020000,\"duration\":1},\"sub_dasha\":[{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2037 21:37\",\"end_date\":\"16-8-2037 1:7\",\"start_ms\":2133121020000,\"end_ms\":2133997620000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"16-8-2037 1:7\",\"end_date\":\"5-9-2037 8:7\",\"start_ms\":2133997620000,\"end_ms\":2135750820000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-9-2037 8:7\",\"end_date\":\"5-10-2037 18:37\",\"start_ms\":2135750820000,\"end_ms\":2138380620000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-10-2037 18:37\",\"end_date\":\"15-11-2037 8:37\",\"start_ms\":2138380620000,\"end_ms\":2141887020000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"15-11-2037 8:37\",\"end_date\":\"5-1-2038 2:7\",\"start_ms\":2141887020000,\"end_ms\":2146270020000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-1-2038 2:7\",\"end_date\":\"6-3-2038 23:7\",\"start_ms\":2146270020000,\"end_ms\":2151529620000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"6-3-2038 23:7\",\"end_date\":\"16-5-2038 23:37\",\"start_ms\":2151529620000,\"end_ms\":2157665820000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"16-5-2038 23:37\",\"end_date\":\"5-8-2038 21:37\",\"start_ms\":2157665820000,\"end_ms\":2164657020000}]},{\"major_dasha\":{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2038 21:37\",\"end_date\":\"5-8-2040 21:37\",\"start_ms\":2164657020000,\"end_ms\":2227815420000,\"duration\":2},\"sub_dasha\":[{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2038 21:37\",\"end_date\":\"15-9-2038 11:37\",\"start_ms\":2164657020000,\"end_ms\":2168163420000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"15-9-2038 11:37\",\"end_date\":\"15-11-2038 8:37\",\"start_ms\":2168163420000,\"end_ms\":2173423020000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-11-2038 8:37\",\"end_date\":\"4-2-2039 12:37\",\"start_ms\":2173423020000,\"end_ms\":2180435820000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"4-2-2039 12:37\",\"end_date\":\"16-5-2039 23:37\",\"start_ms\":2180435820000,\"end_ms\":2189201820000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"16-5-2039 23:37\",\"end_date\":\"15-9-2039 17:37\",\"start_ms\":2189201820000,\"end_ms\":2199721020000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"15-9-2039 17:37\",\"end_date\":\"4-2-2040 18:37\",\"start_ms\":2199721020000,\"end_ms\":2211993420000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"4-2-2040 18:37\",\"end_date\":\"16-7-2040 2:37\",\"start_ms\":2211993420000,\"end_ms\":2226019020000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"16-7-2040 2:37\",\"end_date\":\"5-8-2040 21:37\",\"start_ms\":2226019020000,\"end_ms\":2227815420000}]},{\"major_dasha\":{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2040 21:37\",\"end_date\":\"5-8-2043 21:37\",\"start_ms\":2227815420000,\"end_ms\":2322423420000,\"duration\":3},\"sub_dasha\":[{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2040 21:37\",\"end_date\":\"5-11-2040 5:7\",\"start_ms\":2227815420000,\"end_ms\":2235704820000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-11-2040 5:7\",\"end_date\":\"6-3-2041 23:7\",\"start_ms\":2235704820000,\"end_ms\":2246224020000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"6-3-2041 23:7\",\"end_date\":\"6-8-2041 3:37\",\"start_ms\":2246224020000,\"end_ms\":2259373020000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"6-8-2041 3:37\",\"end_date\":\"4-2-2042 18:37\",\"start_ms\":2259373020000,\"end_ms\":2275151820000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"4-2-2042 18:37\",\"end_date\":\"5-9-2042 20:7\",\"start_ms\":2275151820000,\"end_ms\":2293560420000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-9-2042 20:7\",\"end_date\":\"7-5-2043 8:7\",\"start_ms\":2293560420000,\"end_ms\":2314598820000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"7-5-2043 8:7\",\"end_date\":\"6-6-2043 18:37\",\"start_ms\":2314598820000,\"end_ms\":2317228620000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-6-2043 18:37\",\"end_date\":\"5-8-2043 21:37\",\"start_ms\":2317228620000,\"end_ms\":2322423420000}]},{\"major_dasha\":{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2043 21:37\",\"end_date\":\"5-8-2047 21:37\",\"start_ms\":2322423420000,\"end_ms\":2448653820000,\"duration\":4},\"sub_dasha\":[{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2043 21:37\",\"end_date\":\"15-1-2044 5:37\",\"start_ms\":2322423420000,\"end_ms\":2336449020000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"15-1-2044 5:37\",\"end_date\":\"5-8-2044 3:37\",\"start_ms\":2336449020000,\"end_ms\":2353981020000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2044 3:37\",\"end_date\":\"5-4-2045 15:37\",\"start_ms\":2353981020000,\"end_ms\":2375019420000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-4-2045 15:37\",\"end_date\":\"14-1-2046 17:37\",\"start_ms\":2375019420000,\"end_ms\":2399564220000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"14-1-2046 17:37\",\"end_date\":\"5-12-2046 9:37\",\"start_ms\":2399564220000,\"end_ms\":2427615420000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-12-2046 9:37\",\"end_date\":\"14-1-2047 23:37\",\"start_ms\":2427615420000,\"end_ms\":2431121820000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"14-1-2047 23:37\",\"end_date\":\"6-4-2047 3:37\",\"start_ms\":2431121820000,\"end_ms\":2438134620000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"6-4-2047 3:37\",\"end_date\":\"5-8-2047 21:37\",\"start_ms\":2438134620000,\"end_ms\":2448653820000}]},{\"major_dasha\":{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2047 21:37\",\"end_date\":\"5-8-2052 21:37\",\"start_ms\":2448653820000,\"end_ms\":2606506620000,\"duration\":5},\"sub_dasha\":[{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2047 21:37\",\"end_date\":\"15-4-2048 13:7\",\"start_ms\":2448653820000,\"end_ms\":2470568820000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"15-4-2048 13:7\",\"end_date\":\"13-2-2049 22:7\",\"start_ms\":2470568820000,\"end_ms\":2496866820000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"13-2-2049 22:7\",\"end_date\":\"4-2-2050 0:37\",\"start_ms\":2496866820000,\"end_ms\":2527547820000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"4-2-2050 0:37\",\"end_date\":\"16-3-2051 20:37\",\"start_ms\":2527547820000,\"end_ms\":2562611820000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"16-3-2051 20:37\",\"end_date\":\"6-5-2051 14:7\",\"start_ms\":2562611820000,\"end_ms\":2566994820000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-5-2051 14:7\",\"end_date\":\"16-8-2051 1:7\",\"start_ms\":2566994820000,\"end_ms\":2575760820000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"16-8-2051 1:7\",\"end_date\":\"15-1-2052 5:37\",\"start_ms\":2575760820000,\"end_ms\":2588909820000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-1-2052 5:37\",\"end_date\":\"5-8-2052 21:37\",\"start_ms\":2588909820000,\"end_ms\":2606506620000}]},{\"major_dasha\":{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2052 21:37\",\"end_date\":\"5-8-2058 21:37\",\"start_ms\":2606506620000,\"end_ms\":2795809020000,\"duration\":6},\"sub_dasha\":[{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2052 21:37\",\"end_date\":\"6-8-2053 3:37\",\"start_ms\":2606506620000,\"end_ms\":2638064220000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"6-8-2053 3:37\",\"end_date\":\"6-10-2054 6:37\",\"start_ms\":2638064220000,\"end_ms\":2674881420000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"6-10-2054 6:37\",\"end_date\":\"5-2-2056 6:37\",\"start_ms\":2674881420000,\"end_ms\":2716958220000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-2-2056 6:37\",\"end_date\":\"6-4-2056 3:37\",\"start_ms\":2716958220000,\"end_ms\":2722217820000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-4-2056 3:37\",\"end_date\":\"5-8-2056 21:37\",\"start_ms\":2722217820000,\"end_ms\":2732737020000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2056 21:37\",\"end_date\":\"4-2-2057 12:37\",\"start_ms\":2732737020000,\"end_ms\":2748515820000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"4-2-2057 12:37\",\"end_date\":\"6-10-2057 0:37\",\"start_ms\":2748515820000,\"end_ms\":2769554220000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"6-10-2057 0:37\",\"end_date\":\"5-8-2058 21:37\",\"start_ms\":2769554220000,\"end_ms\":2795809020000}]},{\"major_dasha\":{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2058 21:37\",\"end_date\":\"5-8-2065 21:37\",\"start_ms\":2795809020000,\"end_ms\":3016733820000,\"duration\":7},\"sub_dasha\":[{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2058 21:37\",\"end_date\":\"16-12-2059 1:7\",\"start_ms\":2795809020000,\"end_ms\":2838762420000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"16-12-2059 1:7\",\"end_date\":\"6-7-2061 5:7\",\"start_ms\":2838762420000,\"end_ms\":2887852020000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"6-7-2061 5:7\",\"end_date\":\"15-9-2061 5:37\",\"start_ms\":2887852020000,\"end_ms\":2893988220000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"15-9-2061 5:37\",\"end_date\":\"4-2-2062 6:37\",\"start_ms\":2893988220000,\"end_ms\":2906260620000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"4-2-2062 6:37\",\"end_date\":\"5-9-2062 8:7\",\"start_ms\":2906260620000,\"end_ms\":2924669220000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-9-2062 8:7\",\"end_date\":\"16-6-2063 10:7\",\"start_ms\":2924669220000,\"end_ms\":2949214020000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"16-6-2063 10:7\",\"end_date\":\"5-6-2064 12:37\",\"start_ms\":2949214020000,\"end_ms\":2979895020000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-6-2064 12:37\",\"end_date\":\"5-8-2065 21:37\",\"start_ms\":2979895020000,\"end_ms\":3016733820000}]},{\"major_dasha\":{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2065 21:37\",\"end_date\":\"5-8-2073 21:37\",\"start_ms\":3016733820000,\"end_ms\":3269194620000,\"duration\":8},\"sub_dasha\":[{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2065 21:37\",\"end_date\":\"17-5-2067 5:37\",\"start_ms\":3016733820000,\"end_ms\":3072836220000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"17-5-2067 5:37\",\"end_date\":\"6-8-2067 9:37\",\"start_ms\":3072836220000,\"end_ms\":3079849020000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-8-2067 9:37\",\"end_date\":\"15-1-2068 17:37\",\"start_ms\":3079849020000,\"end_ms\":3093874620000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"15-1-2068 17:37\",\"end_date\":\"15-9-2068 5:37\",\"start_ms\":3093874620000,\"end_ms\":3114913020000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-9-2068 5:37\",\"end_date\":\"5-8-2069 21:37\",\"start_ms\":3114913020000,\"end_ms\":3142964220000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2069 21:37\",\"end_date\":\"15-9-2070 17:37\",\"start_ms\":3142964220000,\"end_ms\":3178028220000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"15-9-2070 17:37\",\"end_date\":\"15-1-2072 17:37\",\"start_ms\":3178028220000,\"end_ms\":3220105020000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"15-1-2072 17:37\",\"end_date\":\"5-8-2073 21:37\",\"start_ms\":3220105020000,\"end_ms\":3269194620000}]},{\"major_dasha\":{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2073 21:37\",\"end_date\":\"5-8-2074 21:37\",\"start_ms\":3269194620000,\"end_ms\":3300730620000,\"duration\":1},\"sub_dasha\":[{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-8-2073 21:37\",\"end_date\":\"16-8-2073 1:7\",\"start_ms\":3269194620000,\"end_ms\":3270071220000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"16-8-2073 1:7\",\"end_date\":\"5-9-2073 8:7\",\"start_ms\":3270071220000,\"end_ms\":3271824420000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-9-2073 8:7\",\"end_date\":\"5-10-2073 18:37\",\"start_ms\":3271824420000,\"end_ms\":3274454220000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-10-2073 18:37\",\"end_date\":\"15-11-2073 8:37\",\"start_ms\":3274454220000,\"end_ms\":3277960620000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"15-11-2073 8:37\",\"end_date\":\"5-1-2074 2:7\",\"start_ms\":3277960620000,\"end_ms\":3282343620000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-1-2074 2:7\",\"end_date\":\"6-3-2074 23:7\",\"start_ms\":3282343620000,\"end_ms\":3287603220000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"6-3-2074 23:7\",\"end_date\":\"16-5-2074 23:37\",\"start_ms\":3287603220000,\"end_ms\":3293739420000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"16-5-2074 23:37\",\"end_date\":\"5-8-2074 21:37\",\"start_ms\":3293739420000,\"end_ms\":3300730620000}]},{\"major_dasha\":{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2074 21:37\",\"end_date\":\"5-8-2076 21:37\",\"start_ms\":3300730620000,\"end_ms\":3363889020000,\"duration\":2},\"sub_dasha\":[{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"5-8-2074 21:37\",\"end_date\":\"15-9-2074 11:37\",\"start_ms\":3300730620000,\"end_ms\":3304237020000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"15-9-2074 11:37\",\"end_date\":\"15-11-2074 8:37\",\"start_ms\":3304237020000,\"end_ms\":3309496620000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-11-2074 8:37\",\"end_date\":\"4-2-2075 12:37\",\"start_ms\":3309496620000,\"end_ms\":3316509420000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"4-2-2075 12:37\",\"end_date\":\"16-5-2075 23:37\",\"start_ms\":3316509420000,\"end_ms\":3325275420000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"16-5-2075 23:37\",\"end_date\":\"15-9-2075 17:37\",\"start_ms\":3325275420000,\"end_ms\":3335794620000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"15-9-2075 17:37\",\"end_date\":\"4-2-2076 18:37\",\"start_ms\":3335794620000,\"end_ms\":3348067020000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"4-2-2076 18:37\",\"end_date\":\"16-7-2076 2:37\",\"start_ms\":3348067020000,\"end_ms\":3362092620000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"16-7-2076 2:37\",\"end_date\":\"5-8-2076 21:37\",\"start_ms\":3362092620000,\"end_ms\":3363889020000}]},{\"major_dasha\":{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2076 21:37\",\"end_date\":\"5-8-2079 21:37\",\"start_ms\":3363889020000,\"end_ms\":3458497020000,\"duration\":3},\"sub_dasha\":[{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2076 21:37\",\"end_date\":\"5-11-2076 5:7\",\"start_ms\":3363889020000,\"end_ms\":3371778420000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-11-2076 5:7\",\"end_date\":\"6-3-2077 23:7\",\"start_ms\":3371778420000,\"end_ms\":3382297620000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"6-3-2077 23:7\",\"end_date\":\"6-8-2077 3:37\",\"start_ms\":3382297620000,\"end_ms\":3395446620000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"6-8-2077 3:37\",\"end_date\":\"4-2-2078 18:37\",\"start_ms\":3395446620000,\"end_ms\":3411225420000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"4-2-2078 18:37\",\"end_date\":\"5-9-2078 20:7\",\"start_ms\":3411225420000,\"end_ms\":3429634020000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-9-2078 20:7\",\"end_date\":\"7-5-2079 8:7\",\"start_ms\":3429634020000,\"end_ms\":3450672420000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"7-5-2079 8:7\",\"end_date\":\"6-6-2079 18:37\",\"start_ms\":3450672420000,\"end_ms\":3453302220000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-6-2079 18:37\",\"end_date\":\"5-8-2079 21:37\",\"start_ms\":3453302220000,\"end_ms\":3458497020000}]},{\"major_dasha\":{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2079 21:37\",\"end_date\":\"5-8-2083 21:37\",\"start_ms\":3458497020000,\"end_ms\":3584727420000,\"duration\":4},\"sub_dasha\":[{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-8-2079 21:37\",\"end_date\":\"15-1-2080 5:37\",\"start_ms\":3458497020000,\"end_ms\":3472522620000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"15-1-2080 5:37\",\"end_date\":\"5-8-2080 3:37\",\"start_ms\":3472522620000,\"end_ms\":3490054620000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2080 3:37\",\"end_date\":\"5-4-2081 15:37\",\"start_ms\":3490054620000,\"end_ms\":3511093020000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-4-2081 15:37\",\"end_date\":\"14-1-2082 17:37\",\"start_ms\":3511093020000,\"end_ms\":3535637820000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"14-1-2082 17:37\",\"end_date\":\"5-12-2082 9:37\",\"start_ms\":3535637820000,\"end_ms\":3563689020000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-12-2082 9:37\",\"end_date\":\"14-1-2083 23:37\",\"start_ms\":3563689020000,\"end_ms\":3567195420000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"14-1-2083 23:37\",\"end_date\":\"6-4-2083 3:37\",\"start_ms\":3567195420000,\"end_ms\":3574208220000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"6-4-2083 3:37\",\"end_date\":\"5-8-2083 21:37\",\"start_ms\":3574208220000,\"end_ms\":3584727420000}]},{\"major_dasha\":{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2083 21:37\",\"end_date\":\"5-8-2088 21:37\",\"start_ms\":3584727420000,\"end_ms\":3742580220000,\"duration\":5},\"sub_dasha\":[{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2083 21:37\",\"end_date\":\"15-4-2084 13:7\",\"start_ms\":3584727420000,\"end_ms\":3606642420000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"15-4-2084 13:7\",\"end_date\":\"13-2-2085 22:7\",\"start_ms\":3606642420000,\"end_ms\":3632940420000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"13-2-2085 22:7\",\"end_date\":\"4-2-2086 0:37\",\"start_ms\":3632940420000,\"end_ms\":3663621420000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"4-2-2086 0:37\",\"end_date\":\"16-3-2087 20:37\",\"start_ms\":3663621420000,\"end_ms\":3698685420000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"16-3-2087 20:37\",\"end_date\":\"6-5-2087 14:7\",\"start_ms\":3698685420000,\"end_ms\":3703068420000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-5-2087 14:7\",\"end_date\":\"16-8-2087 1:7\",\"start_ms\":3703068420000,\"end_ms\":3711834420000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"16-8-2087 1:7\",\"end_date\":\"15-1-2088 5:37\",\"start_ms\":3711834420000,\"end_ms\":3724983420000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-1-2088 5:37\",\"end_date\":\"5-8-2088 21:37\",\"start_ms\":3724983420000,\"end_ms\":3742580220000}]},{\"major_dasha\":{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2088 21:37\",\"end_date\":\"5-8-2094 21:37\",\"start_ms\":3742580220000,\"end_ms\":3931882620000,\"duration\":6},\"sub_dasha\":[{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"5-8-2088 21:37\",\"end_date\":\"6-8-2089 3:37\",\"start_ms\":3742580220000,\"end_ms\":3774137820000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"6-8-2089 3:37\",\"end_date\":\"6-10-2090 6:37\",\"start_ms\":3774137820000,\"end_ms\":3810955020000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"6-10-2090 6:37\",\"end_date\":\"5-2-2092 6:37\",\"start_ms\":3810955020000,\"end_ms\":3853031820000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"5-2-2092 6:37\",\"end_date\":\"6-4-2092 3:37\",\"start_ms\":3853031820000,\"end_ms\":3858291420000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-4-2092 3:37\",\"end_date\":\"5-8-2092 21:37\",\"start_ms\":3858291420000,\"end_ms\":3868810620000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"5-8-2092 21:37\",\"end_date\":\"4-2-2093 12:37\",\"start_ms\":3868810620000,\"end_ms\":3884589420000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"4-2-2093 12:37\",\"end_date\":\"6-10-2093 0:37\",\"start_ms\":3884589420000,\"end_ms\":3905627820000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"6-10-2093 0:37\",\"end_date\":\"5-8-2094 21:37\",\"start_ms\":3905627820000,\"end_ms\":3931882620000}]},{\"major_dasha\":{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2094 21:37\",\"end_date\":\"5-8-2101 21:37\",\"start_ms\":3931882620000,\"end_ms\":4152721020000,\"duration\":7},\"sub_dasha\":[{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"5-8-2094 21:37\",\"end_date\":\"16-12-2095 1:7\",\"start_ms\":3931882620000,\"end_ms\":3974836020000},{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"16-12-2095 1:7\",\"end_date\":\"6-7-2097 5:7\",\"start_ms\":3974836020000,\"end_ms\":4023925620000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"6-7-2097 5:7\",\"end_date\":\"15-9-2097 5:37\",\"start_ms\":4023925620000,\"end_ms\":4030061820000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"15-9-2097 5:37\",\"end_date\":\"4-2-2098 6:37\",\"start_ms\":4030061820000,\"end_ms\":4042334220000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"4-2-2098 6:37\",\"end_date\":\"5-9-2098 8:7\",\"start_ms\":4042334220000,\"end_ms\":4060742820000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"5-9-2098 8:7\",\"end_date\":\"16-6-2099 10:7\",\"start_ms\":4060742820000,\"end_ms\":4085287620000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"16-6-2099 10:7\",\"end_date\":\"6-6-2100 12:37\",\"start_ms\":4085287620000,\"end_ms\":4115968620000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"6-6-2100 12:37\",\"end_date\":\"5-8-2101 21:37\",\"start_ms\":4115968620000,\"end_ms\":4152721020000}]},{\"major_dasha\":{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2101 21:37\",\"end_date\":\"5-8-2109 21:37\",\"start_ms\":4152721020000,\"end_ms\":4405181820000,\"duration\":8},\"sub_dasha\":[{\"dasha_id\":7,\"dasha_name\":\"Sankata\",\"start_date\":\"5-8-2101 21:37\",\"end_date\":\"17-5-2103 5:37\",\"start_ms\":4152721020000,\"end_ms\":4208823420000},{\"dasha_id\":0,\"dasha_name\":\"Mangla\",\"start_date\":\"17-5-2103 5:37\",\"end_date\":\"6-8-2103 9:37\",\"start_ms\":4208823420000,\"end_ms\":4215836220000},{\"dasha_id\":1,\"dasha_name\":\"Pingla\",\"start_date\":\"6-8-2103 9:37\",\"end_date\":\"15-1-2104 17:37\",\"start_ms\":4215836220000,\"end_ms\":4229861820000},{\"dasha_id\":2,\"dasha_name\":\"Dhanya\",\"start_date\":\"15-1-2104 17:37\",\"end_date\":\"15-9-2104 5:37\",\"start_ms\":4229861820000,\"end_ms\":4250900220000},{\"dasha_id\":3,\"dasha_name\":\"Bhramari\",\"start_date\":\"15-9-2104 5:37\",\"end_date\":\"5-8-2105 21:37\",\"start_ms\":4250900220000,\"end_ms\":4278951420000},{\"dasha_id\":4,\"dasha_name\":\"Bhadrika\",\"start_date\":\"5-8-2105 21:37\",\"end_date\":\"15-9-2106 17:37\",\"start_ms\":4278951420000,\"end_ms\":4314015420000},{\"dasha_id\":5,\"dasha_name\":\"Ulka\",\"start_date\":\"15-9-2106 17:37\",\"end_date\":\"15-1-2108 17:37\",\"start_ms\":4314015420000,\"end_ms\":4356092220000},{\"dasha_id\":6,\"dasha_name\":\"Siddha\",\"start_date\":\"15-1-2108 17:37\",\"end_date\":\"5-8-2109 21:37\",\"start_ms\":4356092220000,\"end_ms\":4405181820000}]}]', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sub_yogini_dasha_dashacycle_dashaname`
--

CREATE TABLE `sub_yogini_dasha_dashacycle_dashaname` (
  `id` bigint UNSIGNED NOT NULL,
  `major_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dasha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sun_sign_prediction`
--

CREATE TABLE `sun_sign_prediction` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `prediction_date` varchar(50) NOT NULL,
  `prediction` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `tamil_month_panchang`
--

CREATE TABLE `tamil_month_panchang` (
  `id` bigint UNSIGNED NOT NULL,
  `month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchang_data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamil_panchang`
--

CREATE TABLE `tamil_panchang` (
  `id` bigint UNSIGNED NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonrise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moonset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tithi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nakshatra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `karan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hindu_month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamil_month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `paksha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ritu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sun_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moon_sign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vikram_samvat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shaka_samvat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vkram_samvat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abhijit_muhurta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rahu_kaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gulik_kaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yamghant_kaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dur_muhurtha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amrit_kaal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `varjyam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anandadi_yog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0',
  `sta` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `timezone_with_dst`
--

CREATE TABLE `timezone_with_dst` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone_in_ms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timezone_with_dst`
--

INSERT INTO `timezone_with_dst` (`id`, `user_id`, `status`, `timezone`, `timezone_in_ms`, `date`) VALUES
(1, 2, '1', '5.5', '19800000', '2001-11-01T10:48:00.000Z');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Raj Kosta', 'rahulrajkoata@gmail.com', NULL, '5f4dcc3b5aa765d61d8327deb882cf99', NULL, '2023-12-02 00:08:41', '2023-12-02 00:08:41'),
(2, 'Rahul Raj Kosta', 'rahulkoata@gmail.com', NULL, '$2y$10$c03RqO48v5ZMQ4li3He0M.FO49YgfEvJ2CK.63pntaczpZfMFgSky', NULL, '2023-12-19 23:49:36', '2023-12-19 23:49:36'),
(3, 'Rahul Raj Kosta', 'rahulrajkosta@gmail.com', NULL, '$2y$12$leTB9dN.IdMpCteQpKPOYe4h33Zw6hPm18ErpLSTCq4SS442H1u16', NULL, '2023-12-27 13:05:16', '2023-12-27 13:05:16'),
(4, 'shubham', 'lekhwarshubham41@gmail.com', NULL, '$2y$12$3THjbXXGyLMjSFds6JBekOdn6kDs6pRH.hnL.rQGpFhx5ZeqvVSam', NULL, '2023-12-28 07:51:17', '2023-12-28 07:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `birth_place` varchar(50) NOT NULL,
  `day` int DEFAULT NULL,
  `month` int DEFAULT NULL,
  `year` int DEFAULT NULL,
  `hour` int DEFAULT NULL,
  `min` int DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `lon` float DEFAULT NULL,
  `tzone` float DEFAULT NULL,
  `user_id` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `status`, `created_at`, `updated_at`, `birth_place`, `day`, `month`, `year`, `hour`, `min`, `lat`, `lon`, `tzone`, `user_id`) VALUES
(1, 'Y', '2023-08-10 22:21:04', '2023-12-28 12:23:23', 'Mahoba', 11, 2, 2002, 10, 48, 25.52, 78.12, 4.2, 4),
(5, 'Y', '2023-08-10 22:21:04', '2023-12-29 04:59:22', 'Mahoba', 11, 2, 2002, 10, 48, 25.52, 78.12, 4.2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_details`
--

CREATE TABLE `varshaphal_details` (
  `id` bigint UNSIGNED NOT NULL,
  `varshaphala_year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_of_native` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayanamsha_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayanamsha_degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `varshaphala_timestamp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `native_birth_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `varshaphala_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchadhikari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `varshaphala_year_lord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `varshaphala_muntha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varshaphal_details`
--

INSERT INTO `varshaphal_details` (`id`, `varshaphala_year`, `age_of_native`, `ayanamsha_name`, `ayanamsha_degree`, `varshaphala_timestamp`, `native_birth_date`, `varshaphala_date`, `panchadhikari`, `varshaphala_year_lord`, `varshaphala_muntha`, `user_id`) VALUES
(1, '2017', '15', 'LAHIRI', '24.0962', '1486796535000', '11-02-2002 10:48:00', '11-02-2017 07:02:15', '{\"muntha_lord\":\"Sun\",\"muntha_lord_id\":0,\"birth_ascendant_lord\":\"Venus\",\"birth_ascendant_lord_id\":5,\"year_ascendant_lord\":\"Saturn\",\"year_ascendant_lord_id\":6,\"dinratri_lord\":\"Saturn\",\"trirashi_lord\":\"Jupiter\"}', 'Saturn', '{\"muntha_sign\":\"Leo\",\"muntha_sign_lord\":\"Sun\"}', 2),
(2, '2017', '15', 'LAHIRI', '24.0962', '1486796535000', '11-02-2002 10:48:00', '11-02-2017 07:02:15', '{\"muntha_lord\":\"Sun\",\"muntha_lord_id\":0,\"birth_ascendant_lord\":\"Venus\",\"birth_ascendant_lord_id\":5,\"year_ascendant_lord\":\"Saturn\",\"year_ascendant_lord_id\":6,\"dinratri_lord\":\"Saturn\",\"trirashi_lord\":\"Jupiter\"}', 'Saturn', '{\"muntha_sign\":\"Leo\",\"muntha_sign_lord\":\"Sun\"}', 2),
(3, '2017', '15', 'LAHIRI', '24.0962', '1486796535000', '11-02-2002 10:48:00', '11-02-2017 07:02:15', '{\"muntha_lord\":\"Sun\",\"muntha_lord_id\":0,\"birth_ascendant_lord\":\"Venus\",\"birth_ascendant_lord_id\":5,\"year_ascendant_lord\":\"Saturn\",\"year_ascendant_lord_id\":6,\"dinratri_lord\":\"Saturn\",\"trirashi_lord\":\"Jupiter\"}', 'Saturn', '{\"muntha_sign\":\"Leo\",\"muntha_sign_lord\":\"Sun\"}', 2),
(4, '2017', '15', 'LAHIRI', '24.0962', '1486796535000', '11-02-2002 10:48:00', '11-02-2017 07:02:15', '{\"muntha_lord\":\"Sun\",\"muntha_lord_id\":0,\"birth_ascendant_lord\":\"Venus\",\"birth_ascendant_lord_id\":5,\"year_ascendant_lord\":\"Saturn\",\"year_ascendant_lord_id\":6,\"dinratri_lord\":\"Saturn\",\"trirashi_lord\":\"Jupiter\"}', 'Saturn', '{\"muntha_sign\":\"Leo\",\"muntha_sign_lord\":\"Sun\"}', 2),
(5, '2018', '16', 'LAHIRI', '24.1101', '1518354773000', '11-02-2002 10:48:00', '11-02-2018 13:12:53', '{\"muntha_lord\":\"Mercury\",\"muntha_lord_id\":3,\"birth_ascendant_lord\":\"Venus\",\"birth_ascendant_lord_id\":5,\"year_ascendant_lord\":\"Mercury\",\"year_ascendant_lord_id\":3,\"dinratri_lord\":\"Saturn\",\"trirashi_lord\":\"Saturn\"}', 'Venus', '{\"muntha_sign\":\"Virgo\",\"muntha_sign_lord\":\"Mercury\"}', 2);

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_harsha_bala`
--

CREATE TABLE `varshaphal_harsha_bala` (
  `id` bigint UNSIGNED NOT NULL,
  `sthana_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ucchaswachetri_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinratri_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `user_id` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varshaphal_harsha_bala`
--

INSERT INTO `varshaphal_harsha_bala` (`id`, `sthana_bala`, `ucchaswachetri_bala`, `gender_bala`, `dinratri_bala`, `total_bala`, `year`, `status`, `user_id`) VALUES
(1, '[0,0,5,0,0,0,0]', '[0,0,5,0,0,0,0]', '[0,5,5,5,5,5,5]', '[5,0,5,0,5,0,0]', '[5,5,20,5,10,5,5]', '0000', 'Y', 2);

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_month_chart`
--

CREATE TABLE `varshaphal_month_chart` (
  `id` bigint UNSIGNED NOT NULL,
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `year` year NOT NULL,
  `user_id` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varshaphal_month_chart`
--

INSERT INTO `varshaphal_month_chart` (`id`, `Data`, `status`, `year`, `user_id`) VALUES
(1, '[{\"month_id\":1,\"chart\":[{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"MOON\",\"SATURN\"],\"planet_small\":[\"Mo \",\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"SUN\",\"MERCURY\",\"KETU\"],\"planet_small\":[\"Su \",\"Me \",\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":2,\"chart\":[{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"MARS\",\"SATURN\"],\"planet_small\":[\"Ma \",\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MOON\",\"KETU\"],\"planet_small\":[\"Mo \",\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"SUN\"],\"planet_small\":[\"Su \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"MERCURY\",\"VENUS\"],\"planet_small\":[\"Me \",\"Ve \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":3,\"chart\":[{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"MARS\",\"SATURN\"],\"planet_small\":[\"Ma \",\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"SUN\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Me \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":4,\"chart\":[{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MARS\",\"KETU\"],\"planet_small\":[\"Ma \",\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"SUN\",\"MOON\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Mo \",\"Me \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":5,\"chart\":[{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MARS\",\"KETU\"],\"planet_small\":[\"Ma \",\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[\"SUN\",\"MOON\"],\"planet_small\":[\"Su \",\"Mo \"],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[\"MERCURY\"],\"planet_small\":[\"Me \"],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"VENUS\",\"RAHU\"],\"planet_small\":[\"Ve \",\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":6,\"chart\":[{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"MOON\",\"MERCURY\",\"RAHU\"],\"planet_small\":[\"Mo \",\"Me \",\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MARS\",\"KETU\"],\"planet_small\":[\"Ma \",\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[\"SUN\"],\"planet_small\":[\"Su \"],\"planet_degree\":[]}]},{\"month_id\":7,\"chart\":[{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MARS\",\"KETU\"],\"planet_small\":[\"Ma \",\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"SUN\",\"MERCURY\",\"RAHU\"],\"planet_small\":[\"Su \",\"Me \",\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"MOON\",\"VENUS\"],\"planet_small\":[\"Mo \",\"Ve \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":8,\"chart\":[{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[\"SUN\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Me \"],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"JUPITER\",\"VENUS\"],\"planet_small\":[\"Ju \",\"Ve \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MARS\",\"KETU\"],\"planet_small\":[\"Ma \",\"Ke \"],\"planet_degree\":[]}]},{\"month_id\":9,\"chart\":[{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"SUN\"],\"planet_small\":[\"Su \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"MERCURY\",\"VENUS\"],\"planet_small\":[\"Me \",\"Ve \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"MOON\",\"SATURN\"],\"planet_small\":[\"Mo \",\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MARS\",\"KETU\"],\"planet_small\":[\"Ma \",\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":10,\"chart\":[{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"SUN\",\"VENUS\"],\"planet_small\":[\"Su \",\"Ve \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"MERCURY\",\"JUPITER\"],\"planet_small\":[\"Me \",\"Ju \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MOON\",\"KETU\"],\"planet_small\":[\"Mo \",\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":11,\"chart\":[{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"SUN\",\"MERCURY\",\"JUPITER\"],\"planet_small\":[\"Su \",\"Me \",\"Ju \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"MOON\",\"MARS\"],\"planet_small\":[\"Mo \",\"Ma \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":12,\"chart\":[{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"MOON\",\"MARS\"],\"planet_small\":[\"Mo \",\"Ma \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"JUPITER\",\"VENUS\"],\"planet_small\":[\"Ju \",\"Ve \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SUN\",\"MERCURY\",\"SATURN\"],\"planet_small\":[\"Su \",\"Me \",\"Sa \"],\"planet_degree\":[]}]}]', 'Y', '0000', 2),
(2, '[{\"month_id\":1,\"chart\":[{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[\"MOON\",\"JUPITER\"],\"planet_small\":[\"Mo \",\"Ju \"],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"MARS\",\"SATURN\",\"RAHU\"],\"planet_small\":[\"Ma \",\"Sa \",\"Ra \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"SUN\"],\"planet_small\":[\"Su \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"MERCURY\"],\"planet_small\":[\"Me \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":2,\"chart\":[{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"MOON\",\"SATURN\"],\"planet_small\":[\"Mo \",\"Sa \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"SUN\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Me \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"MARS\",\"KETU\"],\"planet_small\":[\"Ma \",\"Ke \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]}]},{\"month_id\":3,\"chart\":[{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"SATURN\",\"RAHU\"],\"planet_small\":[\"Sa \",\"Ra \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"SUN\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Me \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]}]},{\"month_id\":4,\"chart\":[{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"MOON\",\"SATURN\",\"RAHU\"],\"planet_small\":[\"Mo \",\"Sa \",\"Ra \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"VENUS\"],\"planet_small\":[\"Ve \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"SUN\",\"KETU\"],\"planet_small\":[\"Su \",\"Ke \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[\"MERCURY\"],\"planet_small\":[\"Me \"],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":5,\"chart\":[{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"VENUS\",\"KETU\"],\"planet_small\":[\"Ve \",\"Ke \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[\"SUN\"],\"planet_small\":[\"Su \"],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[\"MERCURY\",\"JUPITER\"],\"planet_small\":[\"Me \",\"Ju \"],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"SATURN\",\"RAHU\"],\"planet_small\":[\"Sa \",\"Ra \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":6,\"chart\":[{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"MARS\",\"SATURN\"],\"planet_small\":[\"Ma \",\"Sa \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[\"SUN\",\"MERCURY\",\"VENUS\"],\"planet_small\":[\"Su \",\"Me \",\"Ve \"],\"planet_degree\":[]}]},{\"month_id\":7,\"chart\":[{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"SUN\",\"JUPITER\",\"VENUS\"],\"planet_small\":[\"Su \",\"Ju \",\"Ve \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[\"MERCURY\"],\"planet_small\":[\"Me \"],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"MARS\",\"SATURN\"],\"planet_small\":[\"Ma \",\"Sa \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":8,\"chart\":[{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[\"SUN\",\"VENUS\"],\"planet_small\":[\"Su \",\"Ve \"],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"MERCURY\",\"RAHU\"],\"planet_small\":[\"Me \",\"Ra \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":9,\"chart\":[{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"SUN\",\"VENUS\",\"RAHU\"],\"planet_small\":[\"Su \",\"Ve \",\"Ra \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"MERCURY\",\"SATURN\"],\"planet_small\":[\"Me \",\"Sa \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"MOON\",\"JUPITER\"],\"planet_small\":[\"Mo \",\"Ju \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":10,\"chart\":[{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[\"SUN\",\"MERCURY\"],\"planet_small\":[\"Su \",\"Me \"],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"VENUS\",\"SATURN\"],\"planet_small\":[\"Ve \",\"Sa \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]}]},{\"month_id\":11,\"chart\":[{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[\"MOON\"],\"planet_small\":[\"Mo \"],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"RAHU\"],\"planet_small\":[\"Ra \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"SUN\",\"SATURN\"],\"planet_small\":[\"Su \",\"Sa \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"MERCURY\",\"VENUS\"],\"planet_small\":[\"Me \",\"Ve \"],\"planet_degree\":[]},{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]}]},{\"month_id\":12,\"chart\":[{\"sign\":10,\"sign_name\":\"Capricorn\",\"planet\":[\"MERCURY\",\"VENUS\"],\"planet_small\":[\"Me \",\"Ve \"],\"planet_degree\":[]},{\"sign\":11,\"sign_name\":\"Aquarius\",\"planet\":[\"MARS\"],\"planet_small\":[\"Ma \"],\"planet_degree\":[]},{\"sign\":12,\"sign_name\":\"Pisces\",\"planet\":[\"KETU\"],\"planet_small\":[\"Ke \"],\"planet_degree\":[]},{\"sign\":1,\"sign_name\":\"Aries\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":2,\"sign_name\":\"Taurus\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":3,\"sign_name\":\"Gemini\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":4,\"sign_name\":\"Cancer\",\"planet\":[\"JUPITER\"],\"planet_small\":[\"Ju \"],\"planet_degree\":[]},{\"sign\":5,\"sign_name\":\"Leo\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":6,\"sign_name\":\"Virgo\",\"planet\":[\"MOON\",\"RAHU\"],\"planet_small\":[\"Mo \",\"Ra \"],\"planet_degree\":[]},{\"sign\":7,\"sign_name\":\"Libra\",\"planet\":[],\"planet_small\":[],\"planet_degree\":[]},{\"sign\":8,\"sign_name\":\"Scorpio\",\"planet\":[\"SATURN\"],\"planet_small\":[\"Sa \"],\"planet_degree\":[]},{\"sign\":9,\"sign_name\":\"Sagittarius\",\"planet\":[\"SUN\"],\"planet_small\":[\"Su \"],\"planet_degree\":[]}]}]', 'Y', '2014', 3);

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_mudda_dasha`
--

CREATE TABLE `varshaphal_mudda_dasha` (
  `id` bigint UNSIGNED NOT NULL,
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `user_id` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varshaphal_mudda_dasha`
--

INSERT INTO `varshaphal_mudda_dasha` (`id`, `Data`, `year`, `status`, `user_id`) VALUES
(1, '[{\"planet\":\"Venus\",\"duration\":60,\"dasha_start\":\"11-02-2018,13:12:53\",\"dasha_end\":\"13-04-2018,10:12:53\"},{\"planet\":\"Sun\",\"duration\":18,\"dasha_start\":\"13-04-2018,10:12:53\",\"dasha_end\":\"01-05-2018,16:30:53\"},{\"planet\":\"Moon\",\"duration\":30,\"dasha_start\":\"01-05-2018,16:30:53\",\"dasha_end\":\"01-06-2018,03:00:53\"},{\"planet\":\"Mars\",\"duration\":21,\"dasha_start\":\"01-06-2018,03:00:53\",\"dasha_end\":\"22-06-2018,10:21:53\"},{\"planet\":\"Rahu\",\"duration\":54,\"dasha_start\":\"22-06-2018,10:21:53\",\"dasha_end\":\"16-08-2018,05:15:53\"},{\"planet\":\"Jupiter\",\"duration\":48,\"dasha_start\":\"16-08-2018,05:15:53\",\"dasha_end\":\"03-10-2018,22:03:53\"},{\"planet\":\"Saturn\",\"duration\":57,\"dasha_start\":\"03-10-2018,22:03:53\",\"dasha_end\":\"30-11-2018,18:00:53\"},{\"planet\":\"Mercury\",\"duration\":51,\"dasha_start\":\"30-11-2018,18:00:53\",\"dasha_end\":\"21-01-2019,11:51:53\"},{\"planet\":\"Ketu\",\"duration\":21,\"dasha_start\":\"21-01-2019,11:51:53\",\"dasha_end\":\"11-02-2019,19:12:53\"}]', '0000', 'Y', 2),
(2, '[{\"planet\":\"Venus\",\"duration\":60,\"dasha_start\":\"11-02-2018,13:12:53\",\"dasha_end\":\"13-04-2018,10:12:53\"},{\"planet\":\"Sun\",\"duration\":18,\"dasha_start\":\"13-04-2018,10:12:53\",\"dasha_end\":\"01-05-2018,16:30:53\"},{\"planet\":\"Moon\",\"duration\":30,\"dasha_start\":\"01-05-2018,16:30:53\",\"dasha_end\":\"01-06-2018,03:00:53\"},{\"planet\":\"Mars\",\"duration\":21,\"dasha_start\":\"01-06-2018,03:00:53\",\"dasha_end\":\"22-06-2018,10:21:53\"},{\"planet\":\"Rahu\",\"duration\":54,\"dasha_start\":\"22-06-2018,10:21:53\",\"dasha_end\":\"16-08-2018,05:15:53\"},{\"planet\":\"Jupiter\",\"duration\":48,\"dasha_start\":\"16-08-2018,05:15:53\",\"dasha_end\":\"03-10-2018,22:03:53\"},{\"planet\":\"Saturn\",\"duration\":57,\"dasha_start\":\"03-10-2018,22:03:53\",\"dasha_end\":\"30-11-2018,18:00:53\"},{\"planet\":\"Mercury\",\"duration\":51,\"dasha_start\":\"30-11-2018,18:00:53\",\"dasha_end\":\"21-01-2019,11:51:53\"},{\"planet\":\"Ketu\",\"duration\":21,\"dasha_start\":\"21-01-2019,11:51:53\",\"dasha_end\":\"11-02-2019,19:12:53\"}]', '0000', 'Y', 2),
(3, '[{\"planet\":\"Jupiter\",\"duration\":48,\"dasha_start\":\"11-02-2014,12:37:33\",\"dasha_end\":\"01-04-2014,05:25:33\"},{\"planet\":\"Saturn\",\"duration\":57,\"dasha_start\":\"01-04-2014,05:25:33\",\"dasha_end\":\"29-05-2014,01:22:33\"},{\"planet\":\"Mercury\",\"duration\":51,\"dasha_start\":\"29-05-2014,01:22:33\",\"dasha_end\":\"19-07-2014,19:13:33\"},{\"planet\":\"Ketu\",\"duration\":21,\"dasha_start\":\"19-07-2014,19:13:33\",\"dasha_end\":\"10-08-2014,02:34:33\"},{\"planet\":\"Venus\",\"duration\":60,\"dasha_start\":\"10-08-2014,02:34:33\",\"dasha_end\":\"09-10-2014,23:34:33\"},{\"planet\":\"Sun\",\"duration\":18,\"dasha_start\":\"09-10-2014,23:34:33\",\"dasha_end\":\"28-10-2014,05:52:33\"},{\"planet\":\"Moon\",\"duration\":30,\"dasha_start\":\"28-10-2014,05:52:33\",\"dasha_end\":\"27-11-2014,16:22:33\"},{\"planet\":\"Mars\",\"duration\":21,\"dasha_start\":\"27-11-2014,16:22:33\",\"dasha_end\":\"18-12-2014,23:43:33\"},{\"planet\":\"Rahu\",\"duration\":54,\"dasha_start\":\"18-12-2014,23:43:33\",\"dasha_end\":\"11-02-2015,18:37:33\"}]', '2014', 'Y', 3);

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_muntha`
--

CREATE TABLE `varshaphal_muntha` (
  `id` bigint UNSIGNED NOT NULL,
  `data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varshaphal_muntha`
--

INSERT INTO `varshaphal_muntha` (`id`, `data`, `year`, `user_id`, `status`) VALUES
(1, '\"Virgo\"', '0000', 2, '0'),
(2, 'Virgo', '0000', 2, '0'),
(3, 'Taurus', '2014', 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_panchavargeeya_bala`
--

CREATE TABLE `varshaphal_panchavargeeya_bala` (
  `id` bigint UNSIGNED NOT NULL,
  `kshetra_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uccha_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hadda_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `drekkana_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `navmansha_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_bala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL,
  `user_id` int DEFAULT '0',
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varshaphal_panchavargeeya_bala`
--

INSERT INTO `varshaphal_panchavargeeya_bala` (`id`, `kshetra_bala`, `uccha_bala`, `hadda_bala`, `drekkana_bala`, `navmansha_bala`, `total_bala`, `final_bala`, `year`, `user_id`, `status`) VALUES
(1, '[15,22.5,30,15,22.5,22.5,22.5]', '[12.0523,4.0189,11.9523,5.6887,7.434,14.3776,14.2513]', '[11.25,11.25,11.25,7.5,7.5,15,11.25]', '[10,5,7.5,2.5,10,10,2.5]', '[3.75,3.75,5,2.5,3.75,1.25,2.5]', '[52.0523,46.5189,65.7023,33.1887,51.184,63.1276,53.0013]', '[13.0131,11.6297,16.4256,8.2972,12.796,15.7819,13.2503]', '0000', 2, 'Y'),
(2, '[7.5,22.5,22.5,22.5,22.5,7.5,22.5]', '[12.0523,14.9193,7.0642,4.1643,18.0284,9.3949,19.0066]', '[3.75,11.25,3.75,15,11.25,11.25,3.75]', '[10,7.5,7.5,7.5,7.5,7.5,7.5]', '[1.25,1.25,1.25,1.25,5,5,1.25]', '[34.5523,57.4193,42.0642,50.4143,64.2784,40.6449,54.0066]', '[8.6381,14.3548,10.5161,12.6036,16.0696,10.1612,13.5017]', '2014', 3, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `varshaphal_planets`
--

CREATE TABLE `varshaphal_planets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `Data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varshaphal_planets`
--

INSERT INTO `varshaphal_planets` (`id`, `user_id`, `Data`, `year`, `status`) VALUES
(1, 2, '[{\"id\":0,\"name\":\"Sun\",\"fullDegree\":298.4704417266501,\"normDegree\":28.470441726650108,\"speed\":1.0118310608097962,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":2,\"house\":8,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":1,\"name\":\"Moon\",\"fullDegree\":249.16983102719286,\"normDegree\":9.169831027192856,\"speed\":11.79728484766854,\"isRetro\":\"false\",\"sign\":\"Sagittarius\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Mool\",\"nakshatraLord\":\"Ketu\",\"nakshatra_pad\":3,\"house\":7,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":2,\"name\":\"Mars\",\"fullDegree\":225.57093604792567,\"normDegree\":15.57093604792567,\"speed\":0.6067272518664869,\"isRetro\":\"false\",\"sign\":\"Scorpio\",\"signLord\":\"Mars\",\"nakshatra\":\"Anuradha\",\"nakshatraLord\":\"Saturn\",\"nakshatra_pad\":4,\"house\":6,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":3,\"name\":\"Mercury\",\"fullDegree\":293.8013544837707,\"normDegree\":23.801354483770695,\"speed\":1.7277772691521782,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":1,\"house\":8,\"is_planet_set\":true,\"planet_awastha\":\"Kumara\"},{\"id\":4,\"name\":\"Jupiter\",\"fullDegree\":208.09419627972835,\"normDegree\":28.09419627972835,\"speed\":0.07760311138951564,\"isRetro\":\"false\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Vishakha\",\"nakshatraLord\":\"Jupiter\",\"nakshatra_pad\":3,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Mrit\"},{\"id\":5,\"name\":\"Venus\",\"fullDegree\":306.3987481380926,\"normDegree\":6.398748138092628,\"speed\":1.2527799299429974,\"isRetro\":\"false\",\"sign\":\"Aquarius\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":4,\"house\":9,\"is_planet_set\":true,\"planet_awastha\":\"Kumara\"},{\"id\":6,\"name\":\"Saturn\",\"fullDegree\":251.73815294677686,\"normDegree\":11.738152946776864,\"speed\":0.09282522038500103,\"isRetro\":\"false\",\"sign\":\"Sagittarius\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Mool\",\"nakshatraLord\":\"Ketu\",\"nakshatra_pad\":4,\"house\":7,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":7,\"name\":\"Rahu\",\"fullDegree\":110.59892469280125,\"normDegree\":20.598924692801248,\"speed\":-0.052992020144480345,\"isRetro\":\"true\",\"sign\":\"Cancer\",\"signLord\":\"Moon\",\"nakshatra\":\"Ashlesha\",\"nakshatraLord\":\"Mercury\",\"nakshatra_pad\":2,\"house\":2,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":8,\"name\":\"Ketu\",\"fullDegree\":290.59892469280123,\"normDegree\":20.598924692801234,\"speed\":-0.052992020144480345,\"isRetro\":\"true\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Shravan\",\"nakshatraLord\":\"Moon\",\"nakshatra_pad\":4,\"house\":8,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":9,\"name\":\"Ascendant\",\"fullDegree\":71.93329000199846,\"normDegree\":11.933290001998458,\"speed\":0,\"isRetro\":false,\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":2,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"--\"}]', '0000', 'Y'),
(2, 3, '[{\"id\":0,\"name\":\"Sun\",\"fullDegree\":298.47044923173644,\"normDegree\":28.47044923173644,\"speed\":1.0113570793561901,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":2,\"house\":8,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":1,\"name\":\"Moon\",\"fullDegree\":78.72666654052118,\"normDegree\":18.72666654052118,\"speed\":11.848639025121688,\"isRetro\":\"false\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Vridha\"},{\"id\":2,\"name\":\"Mars\",\"fullDegree\":181.57760752018334,\"normDegree\":1.577607520183335,\"speed\":0.1961893299711644,\"isRetro\":\"false\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Chitra\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":3,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":3,\"name\":\"Mercury\",\"fullDegree\":307.52162823005267,\"normDegree\":7.52162823005267,\"speed\":-0.7625827092262808,\"isRetro\":\"true\",\"sign\":\"Aquarius\",\"signLord\":\"Saturn\",\"nakshatra\":\"Shatbhisha\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":1,\"house\":9,\"is_planet_set\":true,\"planet_awastha\":\"Kumara\"},{\"id\":4,\"name\":\"Jupiter\",\"fullDegree\":77.25599180528485,\"normDegree\":17.25599180528485,\"speed\":-0.07397268582762401,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":5,\"name\":\"Venus\",\"fullDegree\":261.55449054272526,\"normDegree\":21.55449054272526,\"speed\":0.3747693082909508,\"isRetro\":\"false\",\"sign\":\"Sagittarius\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Purva Shadha\",\"nakshatraLord\":\"Venus\",\"nakshatra_pad\":3,\"house\":7,\"is_planet_set\":false,\"planet_awastha\":\"Vridha\"},{\"id\":6,\"name\":\"Saturn\",\"fullDegree\":208.94096340422573,\"normDegree\":28.940963404225727,\"speed\":0.03290440484454945,\"isRetro\":\"false\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Vishakha\",\"nakshatraLord\":\"Jupiter\",\"nakshatra_pad\":3,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Mrit\"},{\"id\":7,\"name\":\"Rahu\",\"fullDegree\":188.02156818305303,\"normDegree\":8.021568183053034,\"speed\":-0.05299201569658255,\"isRetro\":\"true\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Swati\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":1,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":8,\"name\":\"Ketu\",\"fullDegree\":8.021568183053034,\"normDegree\":8.021568183053034,\"speed\":-0.05299201569658255,\"isRetro\":\"true\",\"sign\":\"Aries\",\"signLord\":\"Mars\",\"nakshatra\":\"Ashwini\",\"nakshatraLord\":\"Ketu\",\"nakshatra_pad\":3,\"house\":11,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":9,\"name\":\"Ascendant\",\"fullDegree\":63.6676500418162,\"normDegree\":3.667650041816202,\"speed\":0,\"isRetro\":false,\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Mrigshira\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"--\"}]', '0000', 'Y'),
(3, 3, '[{\"id\":0,\"name\":\"Sun\",\"fullDegree\":298.47044923173644,\"normDegree\":28.47044923173644,\"speed\":1.0113570793561901,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":2,\"house\":8,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":1,\"name\":\"Moon\",\"fullDegree\":78.72666654052118,\"normDegree\":18.72666654052118,\"speed\":11.848639025121688,\"isRetro\":\"false\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Vridha\"},{\"id\":2,\"name\":\"Mars\",\"fullDegree\":181.57760752018334,\"normDegree\":1.577607520183335,\"speed\":0.1961893299711644,\"isRetro\":\"false\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Chitra\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":3,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":3,\"name\":\"Mercury\",\"fullDegree\":307.52162823005267,\"normDegree\":7.52162823005267,\"speed\":-0.7625827092262808,\"isRetro\":\"true\",\"sign\":\"Aquarius\",\"signLord\":\"Saturn\",\"nakshatra\":\"Shatbhisha\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":1,\"house\":9,\"is_planet_set\":true,\"planet_awastha\":\"Kumara\"},{\"id\":4,\"name\":\"Jupiter\",\"fullDegree\":77.25599180528485,\"normDegree\":17.25599180528485,\"speed\":-0.07397268582762401,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":5,\"name\":\"Venus\",\"fullDegree\":261.55449054272526,\"normDegree\":21.55449054272526,\"speed\":0.3747693082909508,\"isRetro\":\"false\",\"sign\":\"Sagittarius\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Purva Shadha\",\"nakshatraLord\":\"Venus\",\"nakshatra_pad\":3,\"house\":7,\"is_planet_set\":false,\"planet_awastha\":\"Vridha\"},{\"id\":6,\"name\":\"Saturn\",\"fullDegree\":208.94096340422573,\"normDegree\":28.940963404225727,\"speed\":0.03290440484454945,\"isRetro\":\"false\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Vishakha\",\"nakshatraLord\":\"Jupiter\",\"nakshatra_pad\":3,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Mrit\"},{\"id\":7,\"name\":\"Rahu\",\"fullDegree\":188.02156818305303,\"normDegree\":8.021568183053034,\"speed\":-0.05299201569658255,\"isRetro\":\"true\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Swati\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":1,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":8,\"name\":\"Ketu\",\"fullDegree\":8.021568183053034,\"normDegree\":8.021568183053034,\"speed\":-0.05299201569658255,\"isRetro\":\"true\",\"sign\":\"Aries\",\"signLord\":\"Mars\",\"nakshatra\":\"Ashwini\",\"nakshatraLord\":\"Ketu\",\"nakshatra_pad\":3,\"house\":11,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":9,\"name\":\"Ascendant\",\"fullDegree\":63.6676500418162,\"normDegree\":3.667650041816202,\"speed\":0,\"isRetro\":false,\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Mrigshira\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"--\"}]', '0000', 'Y'),
(5, 3, '[{\"id\":0,\"name\":\"Sun\",\"fullDegree\":298.47044923173644,\"normDegree\":28.47044923173644,\"speed\":1.0113570793561901,\"isRetro\":\"false\",\"sign\":\"Capricorn\",\"signLord\":\"Saturn\",\"nakshatra\":\"Dhanishtha\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":2,\"house\":8,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":1,\"name\":\"Moon\",\"fullDegree\":78.72666654052118,\"normDegree\":18.72666654052118,\"speed\":11.848639025121688,\"isRetro\":\"false\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Vridha\"},{\"id\":2,\"name\":\"Mars\",\"fullDegree\":181.57760752018334,\"normDegree\":1.577607520183335,\"speed\":0.1961893299711644,\"isRetro\":\"false\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Chitra\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":3,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Bala\"},{\"id\":3,\"name\":\"Mercury\",\"fullDegree\":307.52162823005267,\"normDegree\":7.52162823005267,\"speed\":-0.7625827092262808,\"isRetro\":\"true\",\"sign\":\"Aquarius\",\"signLord\":\"Saturn\",\"nakshatra\":\"Shatbhisha\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":1,\"house\":9,\"is_planet_set\":true,\"planet_awastha\":\"Kumara\"},{\"id\":4,\"name\":\"Jupiter\",\"fullDegree\":77.25599180528485,\"normDegree\":17.25599180528485,\"speed\":-0.07397268582762401,\"isRetro\":\"true\",\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Ardra\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"Yuva\"},{\"id\":5,\"name\":\"Venus\",\"fullDegree\":261.55449054272526,\"normDegree\":21.55449054272526,\"speed\":0.3747693082909508,\"isRetro\":\"false\",\"sign\":\"Sagittarius\",\"signLord\":\"Jupiter\",\"nakshatra\":\"Purva Shadha\",\"nakshatraLord\":\"Venus\",\"nakshatra_pad\":3,\"house\":7,\"is_planet_set\":false,\"planet_awastha\":\"Vridha\"},{\"id\":6,\"name\":\"Saturn\",\"fullDegree\":208.94096340422573,\"normDegree\":28.940963404225727,\"speed\":0.03290440484454945,\"isRetro\":\"false\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Vishakha\",\"nakshatraLord\":\"Jupiter\",\"nakshatra_pad\":3,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Mrit\"},{\"id\":7,\"name\":\"Rahu\",\"fullDegree\":188.02156818305303,\"normDegree\":8.021568183053034,\"speed\":-0.05299201569658255,\"isRetro\":\"true\",\"sign\":\"Libra\",\"signLord\":\"Venus\",\"nakshatra\":\"Swati\",\"nakshatraLord\":\"Rahu\",\"nakshatra_pad\":1,\"house\":5,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":8,\"name\":\"Ketu\",\"fullDegree\":8.021568183053034,\"normDegree\":8.021568183053034,\"speed\":-0.05299201569658255,\"isRetro\":\"true\",\"sign\":\"Aries\",\"signLord\":\"Mars\",\"nakshatra\":\"Ashwini\",\"nakshatraLord\":\"Ketu\",\"nakshatra_pad\":3,\"house\":11,\"is_planet_set\":false,\"planet_awastha\":\"Kumara\"},{\"id\":9,\"name\":\"Ascendant\",\"fullDegree\":63.6676500418162,\"normDegree\":3.667650041816202,\"speed\":0,\"isRetro\":false,\"sign\":\"Gemini\",\"signLord\":\"Mercury\",\"nakshatra\":\"Mrigshira\",\"nakshatraLord\":\"Mars\",\"nakshatra_pad\":4,\"house\":1,\"is_planet_set\":false,\"planet_awastha\":\"--\"}]', '2014', 'Y');

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
-- Indexes for table `Astro`
--
ALTER TABLE `Astro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AstroServices`
--
ALTER TABLE `AstroServices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astro_details`
--
ALTER TABLE `astro_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astro_rating`
--
ALTER TABLE `astro_rating`
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
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookPooja`
--
ALTER TABLE `bookPooja`
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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `productCategories`
--
ALTER TABLE `productCategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- Indexes for table `sun_sign_prediction`
--
ALTER TABLE `sun_sign_prediction`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advanced_panchang_sunrise`
--
ALTER TABLE `advanced_panchang_sunrise`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Astro`
--
ALTER TABLE `Astro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AstroServices`
--
ALTER TABLE `AstroServices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `astro_details`
--
ALTER TABLE `astro_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `astro_rating`
--
ALTER TABLE `astro_rating`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ayanamsha`
--
ALTER TABLE `ayanamsha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_gem_suggestion`
--
ALTER TABLE `basic_gem_suggestion`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic_panchang`
--
ALTER TABLE `basic_panchang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `basic_panchang_sunrise`
--
ALTER TABLE `basic_panchang_sunrise`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bhav_madhya`
--
ALTER TABLE `bhav_madhya`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biorhythm`
--
ALTER TABLE `biorhythm`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `birth_details`
--
ALTER TABLE `birth_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookPooja`
--
ALTER TABLE `bookPooja`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chaughadiya_muhurta`
--
ALTER TABLE `chaughadiya_muhurta`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `current_chardasha`
--
ALTER TABLE `current_chardasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `current_vdasha`
--
ALTER TABLE `current_vdasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `current_vdasha_all`
--
ALTER TABLE `current_vdasha_all`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `current_vdasha_date`
--
ALTER TABLE `current_vdasha_date`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_yogini_dasha`
--
ALTER TABLE `current_yogini_dasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_nakshatra_consolidated`
--
ALTER TABLE `daily_nakshatra_consolidated`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_nakshatra_prediction`
--
ALTER TABLE `daily_nakshatra_prediction`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_nakshatra_prediction_next`
--
ALTER TABLE `daily_nakshatra_prediction_next`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_nakshatra_prediction_previous`
--
ALTER TABLE `daily_nakshatra_prediction_previous`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `find_nakshatra_nakshatraname`
--
ALTER TABLE `find_nakshatra_nakshatraname`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_ascendant_report`
--
ALTER TABLE `general_ascendant_report`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_house_report_planet_name`
--
ALTER TABLE `general_house_report_planet_name`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `general_nakshatra_report`
--
ALTER TABLE `general_nakshatra_report`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_rashi_report_planet_name`
--
ALTER TABLE `general_rashi_report_planet_name`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `geo_details`
--
ALTER TABLE `geo_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghat_chakra`
--
ALTER TABLE `ghat_chakra`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hora_muhurta`
--
ALTER TABLE `hora_muhurta`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hora_muhurta_dinman`
--
ALTER TABLE `hora_muhurta_dinman`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horo_chart_chart_id`
--
ALTER TABLE `horo_chart_chart_id`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `horo_chart_extended_chart_id`
--
ALTER TABLE `horo_chart_extended_chart_id`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horo_chart_image_chartid`
--
ALTER TABLE `horo_chart_image_chartid`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kalsarpa_details`
--
ALTER TABLE `kalsarpa_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lalkitab_debts`
--
ALTER TABLE `lalkitab_debts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lalkitab_horoscope`
--
ALTER TABLE `lalkitab_horoscope`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lalkitab_houses`
--
ALTER TABLE `lalkitab_houses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lalkitab_planets`
--
ALTER TABLE `lalkitab_planets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lalkitab_remedies_planet_name`
--
ALTER TABLE `lalkitab_remedies_planet_name`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `major_chardasha`
--
ALTER TABLE `major_chardasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `major_vdasha`
--
ALTER TABLE `major_vdasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `major_yogini_dasha`
--
ALTER TABLE `major_yogini_dasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manglik`
--
ALTER TABLE `manglik`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monthly_panchang`
--
ALTER TABLE `monthly_panchang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moon_biorhythm`
--
ALTER TABLE `moon_biorhythm`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numero_fasts_report`
--
ALTER TABLE `numero_fasts_report`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numero_fav_lord`
--
ALTER TABLE `numero_fav_lord`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numero_fav_mantra`
--
ALTER TABLE `numero_fav_mantra`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numero_fav_time`
--
ALTER TABLE `numero_fav_time`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numero_place_vastu`
--
ALTER TABLE `numero_place_vastu`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numero_prediction_daily`
--
ALTER TABLE `numero_prediction_daily`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numero_report`
--
ALTER TABLE `numero_report`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numero_table`
--
ALTER TABLE `numero_table`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panchang_chart`
--
ALTER TABLE `panchang_chart`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panchang_chart_sunrise`
--
ALTER TABLE `panchang_chart_sunrise`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panchang_festival`
--
ALTER TABLE `panchang_festival`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panchang_lagna_table`
--
ALTER TABLE `panchang_lagna_table`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `planets`
--
ALTER TABLE `planets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `planets_extended`
--
ALTER TABLE `planets_extended`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planet_ashtak_planet_name`
--
ALTER TABLE `planet_ashtak_planet_name`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planet_nature`
--
ALTER TABLE `planet_nature`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planet_panchang`
--
ALTER TABLE `planet_panchang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planet_panchang_sunrise`
--
ALTER TABLE `planet_panchang_sunrise`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productCategories`
--
ALTER TABLE `productCategories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `puja_suggestion`
--
ALTER TABLE `puja_suggestion`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rudraksha_suggestion`
--
ALTER TABLE `rudraksha_suggestion`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sadhesati_current_status`
--
ALTER TABLE `sadhesati_current_status`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sadhesati_life_details`
--
ALTER TABLE `sadhesati_life_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarvashtak`
--
ALTER TABLE `sarvashtak`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_chardasha`
--
ALTER TABLE `sub_chardasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_chardasha_majorrashi_subrashi`
--
ALTER TABLE `sub_chardasha_majorrashi_subrashi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_chardasha_rashi`
--
ALTER TABLE `sub_chardasha_rashi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_sub_sub_vdasha`
--
ALTER TABLE `sub_sub_sub_sub_vdasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_sub_vdasha`
--
ALTER TABLE `sub_sub_sub_vdasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_vdasha`
--
ALTER TABLE `sub_sub_vdasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_vdasha`
--
ALTER TABLE `sub_vdasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_yogini_dasha`
--
ALTER TABLE `sub_yogini_dasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_yogini_dasha_dashacycle_dashaname`
--
ALTER TABLE `sub_yogini_dasha_dashacycle_dashaname`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sun_sign_prediction`
--
ALTER TABLE `sun_sign_prediction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tamil_month_panchang`
--
ALTER TABLE `tamil_month_panchang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tamil_panchang`
--
ALTER TABLE `tamil_panchang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timezone_with_dst`
--
ALTER TABLE `timezone_with_dst`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `varshaphal_details`
--
ALTER TABLE `varshaphal_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `varshaphal_harsha_bala`
--
ALTER TABLE `varshaphal_harsha_bala`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `varshaphal_month_chart`
--
ALTER TABLE `varshaphal_month_chart`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `varshaphal_mudda_dasha`
--
ALTER TABLE `varshaphal_mudda_dasha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `varshaphal_muntha`
--
ALTER TABLE `varshaphal_muntha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `varshaphal_panchavargeeya_bala`
--
ALTER TABLE `varshaphal_panchavargeeya_bala`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `varshaphal_planets`
--
ALTER TABLE `varshaphal_planets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
