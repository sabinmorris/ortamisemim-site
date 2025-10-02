-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2025 at 08:55 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ortamisemim_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Historia', 'Kujenga mazingira mazuri ya ushiriki wa wananchi katika kudumisha amani, ulinzi wa mali zao, kuimarisha huduma za kijamii, kuhakikisha kuwa jamii inashiriki katika kupanga na kusimamia shughuli za maendeleo katika maeneo yao kwa kuzingatia misingi ya utawala bora ikihusisha kuwatambua wakaazi wa maeneo husika na utambulisho wao.', 1, '2025-03-20 03:50:59', '2025-03-20 05:20:37'),
(2, 'Dira', 'Kuwa taasisi imara katika kusimamia amani, usalama, usajili wa wakaazi na upatikanaji wa huduma karibu na wananchi', 1, '2025-03-20 03:51:45', '2025-03-20 04:14:03'),
(4, 'Dhamira', 'Kujenga mazingira mazuri ya ushiriki wa wananchi katika kudumisha amani, ulinzi wa mali zao, kuimarisha huduma za kijamii, kuhakikisha kuwa jamii inashiriki katika kupanga na kusimamia shughuli za maendeleo katika maeneo yao kwa kuzingatia misingi ya utawala bora ikihusisha kuwatambua wakaazi wa maeneo husika na utambulisho wao.', 1, '2025-04-16 03:51:02', '2025-04-16 03:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `anouncements`
--

CREATE TABLE `anouncements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anouncements`
--

INSERT INTO `anouncements` (`id`, `tittle`, `file_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tangazo la tenda ya vifaa vya tehama-2', 'dpt1_1741938656.pdf', 1, '2025-03-14 04:50:56', '2025-03-17 14:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `department_services`
--

CREATE TABLE `department_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departmentName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_services`
--

INSERT INTO `department_services` (`id`, `departmentName`, `service`, `status`, `created_at`, `updated_at`) VALUES
(1, 'utumishi', 'Kusimamia Sera, Sheria na Kanuni mbali mbali za Ofisi.', 1, '2025-04-08 03:35:06', '2025-04-13 04:08:13'),
(2, 'mipango', 'Kubuni na kusimamia utekelezaji wa miradi ya maendeleo.', 1, '2025-04-08 03:49:58', '2025-04-13 04:08:15'),
(3, 'idara maalum', 'Kudumisha Amani, Ulinzi na Usalama katika Mikoa na Wilaya hadi Shehia.', 1, '2025-04-08 03:50:28', '2025-04-13 04:18:35'),
(5, 'mrajis', 'kusimamia N\'go kusajili nk.', 1, '2025-04-09 06:53:33', '2025-04-13 04:18:47'),
(6, 'uratibu', 'Kusimamia Mikoa,wilaya, shehia, manispaa na mabaraza ya miji yote zanzibar', 1, '2025-04-09 09:56:33', '2025-04-13 04:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaderships`
--

CREATE TABLE `leaderships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaderships`
--

INSERT INTO `leaderships` (`id`, `name`, `role`, `designation`, `description`, `leader_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Masoud Ali Suleiman', 'waziri', 'Waziri Or-tamisemim Zanzibar', 'Uongozi ni zamana ya muda mfupi tusijisahau tufanye kazi kwa bidii na uaminifu ili kulejenga taifa letu.', 'waziri-masoud_1743144712.webp', 1, '2025-03-28 03:51:52', '2025-03-28 07:10:59'),
(2, 'Issa Mahafoudh', 'katibu', 'Katibu Mkuu', 'Tufanye kazi', 'katibu-mkuu-issa_1743148517.webp', 1, '2025-03-28 04:55:17', '2025-03-28 07:12:21'),
(3, 'Mikidadi Mbarouk Mzee', 'naibu', 'Naibu Katibu', 'Tufanye kazi kwa hekma tujenge zanzibar yetu', 'naibu-katibu-mikidadi_1743148617.webp', 1, '2025-03-28 04:56:57', '2025-03-28 08:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `message_infos`
--

CREATE TABLE `message_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `infoMessage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_infos`
--

INSERT INTO `message_infos` (`id`, `fullName`, `email`, `subject`, `infoMessage`, `created_at`, `updated_at`) VALUES
(1, 'fgsfdgs', 'admin@gmail.com', 'tour service', 'dsgfdz', '2025-04-11 12:29:35', '2025-04-11 12:29:35'),
(2, 'fgsfdgs', 'admin@gmail.com', 'tour service', 'dsfasfasfas', '2025-04-11 12:30:24', '2025-04-11 12:30:24'),
(3, 'sabin', 'seventcentl@gmail.com', 'vikosi vya smz', 'haa khajh fajh fjhh aaf', '2025-04-15 02:25:01', '2025-04-15 02:25:01'),
(4, 'sabin', 'waterestaurent@gmail.com', 'vikosi vya smz', 'dgfsdfhgsfhgdshbsghsb', '2025-04-15 02:27:16', '2025-04-15 02:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2025_02_28_061010_create_slides_table', 2),
(34, '2025_03_03_084715_create_posts_table', 3),
(36, '2025_03_05_072148_create_videos_table', 4),
(37, '2025_03_10_064733_create_anouncements_table', 5),
(38, '2025_03_17_080443_create_minister_comments_table', 6),
(39, '2025_03_19_100417_create_about_us_table', 7),
(40, '2025_03_24_044052_create_leaderships_table', 8),
(41, '2025_04_08_055540_create_department_services_table', 9),
(45, '2025_04_10_072229_create_uploaded_docs_table', 10),
(52, '2025_04_11_110714_create_message_infos_table', 11),
(53, '2025_04_13_075736_create_picture_collections_table', 12),
(56, '2014_10_12_000000_create_users_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `minister_comments`
--

CREATE TABLE `minister_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `minister_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minister_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minister_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minister_comments`
--

INSERT INTO `minister_comments` (`id`, `minister_name`, `minister_title`, `minister_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'masoud', 'waziri wa or-tamisemim', 'waziri-masoud_1742241017.webp', 'sdtfygkuhjhuuuuuu', '1', '2025-03-17 16:50:17', '2025-03-19 07:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `picture_collections`
--

CREATE TABLE `picture_collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pictureName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `picture_collections`
--

INSERT INTO `picture_collections` (`id`, `pictureName`, `picture`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'maonesho ya 10 ya biashara 2025', 'miaka-4-mwinyi_1744872600.webp', 'down', 1, '2025-04-14 05:42:44', '2025-04-17 03:50:00'),
(2, 'team tawala maonesho', 'team-maonesho_1744623403.webp', 'top', 1, '2025-04-14 06:36:43', '2025-04-14 07:00:57'),
(3, 'team tehama & habari wa tawala', 'team-tawala_1744623446.webp', 'left', 1, '2025-04-14 06:37:26', '2025-04-14 06:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` tinyint(1) NOT NULL DEFAULT 0,
  `view_count` int(255) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_tittle`, `post_description`, `post_image`, `post_status`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'First Post', 'admin-postkuhgkjhjklnlkaaaaaaaaaaaaarrrrfffsgsfgeeeesgsfdgsjjjjggggrrrr cccvvvvffffbbbbfssffhhhhhffffvvvvvvffvmmmmjjjjkkjjjhhhgggiiii', 'miaka-4-mwinyi_1740999690.webp', 1, 1, '2025-03-03 08:01:30', '2025-04-17 09:04:54'),
(2, 'Second Post', 'Short Descrioption About PostLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?', 'miaka-4-mwinyi_1741000105.webp', 1, 4, '2025-03-03 08:08:25', '2025-07-21 06:29:13'),
(3, 'Third Post', 'Short Descrioption About PostLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?', 'team-maonesho_1741031256.webp', 1, 7, '2025-03-03 16:47:36', '2025-06-13 07:55:48'),
(4, 'Fourth post', 'Short Descrioption About PostLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?', 'team-tawala_1741163384.webp', 1, 6, '2025-03-05 05:29:44', '2025-06-13 08:03:24'),
(5, 'Fifth Post', 'Short Descrioption About PostLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?', 'team-maonesho_1742475106.webp', 1, 21, '2025-03-20 09:51:46', '2025-07-21 06:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_image`, `tittle`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 'team-maonesho_1740736785.webp', 'Wafanyakazi wa Or-tamisemim', 'fgdsgshhhhhhhhhhhhhrrrr3333', 1, '2025-02-28 06:59:45', '2025-03-03 04:57:18'),
(2, 'miaka-4-mwinyi_1740796166.webp', 'Wafanyakazi wa Or-tamisemim', 'eyrtyuetuye', 0, '2025-02-28 23:29:26', '2025-03-01 00:22:44'),
(3, 'team-maonesho_1740802587.webp', 'Wafanyakazi wa Or-tamisemim', 'sdgsdfgsfdgs', 0, '2025-03-01 01:16:27', '2025-03-01 01:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_docs`
--

CREATE TABLE `uploaded_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fileName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departmentName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploaded_docs`
--

INSERT INTO `uploaded_docs` (`id`, `fileName`, `document`, `departmentName`, `status`, `created_at`, `updated_at`) VALUES
(1, 'muundo wa ortamisemim zanzibar', '1743081479966_1744285667.pdf', 'utumishi', 1, '2025-04-10 08:47:47', '2025-04-11 04:10:07'),
(8, 'orodha ya mikoa na wilaya zanzibar', '1743081479966_1744360031.pdf', 'uratibu', 1, '2025-04-11 05:27:11', '2025-04-11 05:27:53'),
(9, 'uzimamizi wa miradi', '1743081479966_1744360051.pdf', 'mipango', 1, '2025-04-11 05:27:31', '2025-04-11 05:27:57'),
(10, 'uzimamizi wa miradi na usalama', '1743081479966_1744360068.pdf', 'idara maalum', 0, '2025-04-11 05:27:48', '2025-04-11 05:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$Ak4CtHaDTXM4xadYBXEyzOtBLf7hyusrA14lCW7sQSeW/79dto3oG',
  `verifyToken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `user_image`, `status`, `email_verified_at`, `password`, `verifyToken`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sabin morris', 'admin@gmail.com', 717035783, 'admin', 'Id-Photo2_1745563674.webp', 1, NULL, '$2y$10$Ak4CtHaDTXM4xadYBXEyzOtBLf7hyusrA14lCW7sQSeW/79dto3oG', '', NULL, NULL, '2025-04-25 03:47:54'),
(8, 'hoza maporo', 'seventcentl@gmail.com', 717098765, 'writer', 'waziri-masoud_1745819833.webp', 0, NULL, '$2y$10$Ak4CtHaDTXM4xadYBXEyzOtBLf7hyusrA14lCW7sQSeW/79dto3oG', 'IBKsbZ83uDP7Kodt1i7Au8tZSq3sGbaD6E3CYvq2', NULL, '2025-04-28 02:57:13', '2025-04-28 02:57:13'),
(9, 'mariama mmanga', 'waterestaurent@gmail.com', 717098765, 'admin', 'mariam_1745821783.webp', 0, NULL, '$2y$10$Ak4CtHaDTXM4xadYBXEyzOtBLf7hyusrA14lCW7sQSeW/79dto3oG', 'tOVnDHcBucPspq2lWlBtvB5vCMCfscLF4FMCWOvX', NULL, '2025-04-28 03:29:43', '2025-04-28 03:29:43'),
(10, 'Ali Mgeni', 'mafanta@gmail.com', 717098765, 'admin', 'waziri-masoud_1745832071.webp', 0, NULL, '$2y$10$Ak4CtHaDTXM4xadYBXEyzOtBLf7hyusrA14lCW7sQSeW/79dto3oG', '7gFDVna324XRYIgs9xFyZnCTogbqLCZjYVuUxOkf', NULL, '2025-04-28 06:21:11', '2025-04-28 06:21:11'),
(11, 'asha silima', 'asha.silima@tamisemim.go.tz', 717035734, 'admin', 'asha photo_1745837807.webp', 0, NULL, '$2y$10$Ak4CtHaDTXM4xadYBXEyzOtBLf7hyusrA14lCW7sQSeW/79dto3oG', 'RVO9mxyPb0urfwlqsmcLpZh16k1lHtyYOqgcD6RA', NULL, '2025-04-28 07:56:47', '2025-04-28 07:56:47'),
(12, 'jayson sabin', 'jaysonsabin@gmail.com', 717098767, 'admin', 'katibu-mkuu-issa_1745842167.webp', 0, NULL, '$2y$10$Ak4CtHaDTXM4xadYBXEyzOtBLf7hyusrA14lCW7sQSeW/79dto3oG', 'AItvblP2wbhwf41T7NjvJ3Gorb31I8KQu60uQkQv', NULL, '2025-04-28 09:09:27', '2025-04-28 09:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `tittle`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'WATENDAJI OR-TAMISEMIM ZANZIBAR WAPATIWA MAFUNZO YA SHERIA NA KANUNI ZA UTUMISHI WA UMMA WA ZANZIBAR', 'https://www.youtube.com/embed/rGU3hckMnwQ', 1, '2025-04-04 04:37:34', '2025-04-04 05:28:22'),
(2, 'EPISODE 3: HASSAN MWAKINYO ALISHIKILIWA GEREZANI KWA SIKU 10, ASIMULIA SIKU ALIYOPEWA GODORO NA NDOO', 'https://www.youtube.com/embed/92HEU0FTwbk', 1, '2025-04-04 05:28:13', '2025-04-04 05:28:23'),
(3, 'TUME YA UTUMISHI YA IDARA MAALUM ZA SMZ YATAKIWA KUHAKIKISHA INATATUA MATATIZO YA KIUTUMISHI', 'https://www.youtube.com/embed/cpF5Ba1wYcY', 1, '2025-04-04 05:29:49', '2025-04-04 05:29:55'),
(4, 'KIKAO KAZI CHA OFISI YA RAIS TAWALA ZA MIKOA, SERIKALI ZA MITAA NA IDARA MAALUM ZA SMZ', 'https://www.youtube.com/embed/h6Xe4pg5HaU', 1, '2025-04-04 05:31:12', '2025-04-04 05:31:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anouncements`
--
ALTER TABLE `anouncements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_services`
--
ALTER TABLE `department_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leaderships`
--
ALTER TABLE `leaderships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_infos`
--
ALTER TABLE `message_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minister_comments`
--
ALTER TABLE `minister_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `picture_collections`
--
ALTER TABLE `picture_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_docs`
--
ALTER TABLE `uploaded_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anouncements`
--
ALTER TABLE `anouncements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department_services`
--
ALTER TABLE `department_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaderships`
--
ALTER TABLE `leaderships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message_infos`
--
ALTER TABLE `message_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `minister_comments`
--
ALTER TABLE `minister_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picture_collections`
--
ALTER TABLE `picture_collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uploaded_docs`
--
ALTER TABLE `uploaded_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
