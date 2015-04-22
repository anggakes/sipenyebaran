-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 08:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipenyebaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double(10,6) NOT NULL,
  `lng` double(10,6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 'Alang-Alang Lebar', -2.947598, 104.694625, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Bukit Kecil', -2.988155, 104.751543, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Gandus', -3.005914, 104.675420, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Ilir Barat I', -2.985878, 104.716923, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Ilir Barat II', -2.998153, 104.742999, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Ilir Timur I', -2.974100, 104.757241, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Ilir Timur II', -2.961459, 104.781951, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Kalidoni', -2.965905, 104.811815, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Kemuning', -2.954801, 104.749348, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Kertapati', -3.044259, 104.721901, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Plaju', -2.999743, 104.816621, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Sako', -2.927843, 104.787020, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Seberang Ulu I', -3.009399, 104.774230, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Seberang Ulu II', -2.999551, 104.792935, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Sematang Borang', -2.940611, 104.838766, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Sukarami', -2.889366, 104.716923, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kontraktor`
--

CREATE TABLE IF NOT EXISTS `kontraktor` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kontraktor`
--

INSERT INTO `kontraktor` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'CV. EMPAT PUTRI', '2015-04-15 08:46:16', '2015-04-15 08:46:16'),
(2, 'CV. GEMPAR JAYA', '2015-04-15 08:57:18', '2015-04-15 08:57:18'),
(3, 'CV. AB YUNIOR', '2015-04-15 09:37:40', '2015-04-15 09:37:40'),
(4, 'NICHOLA JAYA', '2015-04-15 09:49:03', '2015-04-15 09:49:03'),
(5, 'CV. KANAKA ARYA', '2015-04-15 10:03:31', '2015-04-15 10:03:31'),
(6, 'CV.BUANA ABADI', '2015-04-15 10:09:03', '2015-04-15 10:09:03'),
(7, 'CV. KARYA PERDANA', '2015-04-15 10:16:34', '2015-04-15 10:16:34'),
(8, 'CV. MEDIA KARYA CITRA', '2015-04-15 10:20:51', '2015-04-15 10:20:51'),
(9, 'CV. BERKAH MANDIRI', '2015-04-15 10:27:55', '2015-04-15 10:27:55'),
(10, 'CV. HIERARKI DETAIL ', '2015-04-15 10:35:25', '2015-04-15 10:35:25'),
(11, 'CV. DUA SEKAWAN', '2015-04-15 11:10:01', '2015-04-15 11:10:01'),
(12, 'CV. TELADAN INDAH', '2015-04-15 11:51:19', '2015-04-15 11:51:19'),
(13, 'CV. DWI PUTRI', '2015-04-15 11:59:30', '2015-04-15 11:59:30'),
(14, 'CV. SAMUDERA KONTRUKSI', '2015-04-15 12:07:40', '2015-04-15 12:07:40'),
(15, 'CV. HANDAYANI MANDIRI LESTARI', '2015-04-15 12:21:56', '2015-04-15 12:21:56'),
(16, 'CV. SUBAN PERMATA', '2015-04-15 14:08:24', '2015-04-15 14:08:24'),
(17, 'CV. AGUNG MULIA', '2015-04-15 14:15:15', '2015-04-15 14:15:15'),
(18, 'CV. CAHAYA APRIL', '2015-04-15 14:32:31', '2015-04-15 14:32:31'),
(19, 'CV. PUTRA GEMILANG', '2015-04-15 14:38:05', '2015-04-15 14:38:05'),
(20, 'CV. HIKMAH BERDIKARI', '2015-04-15 15:32:42', '2015-04-15 15:32:42'),
(21, 'CV. GOLD STAR', '2015-04-15 16:02:47', '2015-04-15 16:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
`id` int(10) unsigned NOT NULL,
  `id_proyek` int(10) unsigned NOT NULL,
  `lat` double(10,6) NOT NULL,
  `lng` double(10,6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `id_proyek`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 1, -2.948685, 104.777692, '2015-04-15 08:54:49', '2015-04-15 09:51:28'),
(2, 2, -2.941984, 104.687641, '2015-04-15 09:12:10', '2015-04-15 09:12:10'),
(3, 3, -2.969592, 104.722266, '2015-04-15 09:47:49', '2015-04-15 09:47:49'),
(4, 4, -2.949855, 104.777541, '2015-04-15 09:53:30', '2015-04-15 09:53:30'),
(5, 5, -2.928096, 104.831084, '2015-04-15 10:02:03', '2015-04-15 10:02:03'),
(6, 6, -2.998171, 104.766076, '2015-04-15 10:07:30', '2015-04-15 10:07:30'),
(7, 7, -2.989889, 104.770636, '2015-04-15 10:10:48', '2015-04-15 10:10:48'),
(8, 8, -3.001471, 104.777427, '2015-04-15 10:18:07', '2015-04-15 10:18:07'),
(9, 9, -2.934096, 104.813875, '2015-04-15 10:26:35', '2015-04-15 10:26:35'),
(10, 10, -2.938468, 104.798297, '2015-04-15 10:32:55', '2015-04-15 10:32:55'),
(11, 11, -2.955548, 104.714967, '2015-04-15 10:39:46', '2015-04-15 10:39:46'),
(12, 12, -2.923526, 104.695487, '2015-04-15 11:13:34', '2015-04-15 11:13:34'),
(13, 13, -3.017057, 104.686406, '2015-04-15 11:55:10', '2015-04-15 11:55:10'),
(14, 14, -2.928914, 104.780883, '2015-04-15 12:01:23', '2015-04-15 12:01:23'),
(15, 15, -2.928786, 104.780840, '2015-04-15 12:13:15', '2015-04-15 12:13:15'),
(16, 16, -2.980992, 104.725442, '2015-04-15 12:26:35', '2015-04-15 12:26:35'),
(17, 17, -2.961459, 104.781951, '2015-04-15 14:16:47', '2015-04-15 14:16:47'),
(18, 18, -2.953723, 104.775600, '2015-04-15 14:26:26', '2015-04-15 14:26:26'),
(19, 19, -2.996053, 104.732141, '2015-04-15 14:36:31', '2015-04-15 14:36:31'),
(20, 20, -2.968766, 104.814433, '2015-04-15 14:39:57', '2015-04-15 14:39:57'),
(21, 21, -2.999551, 104.792935, '2015-04-15 15:49:12', '2015-04-16 08:03:57'),
(22, 22, -2.998500, 104.821342, '2015-04-15 16:11:56', '2015-04-15 16:11:56'),
(25, 25, -2.926943, 104.778823, '2015-04-20 15:01:33', '2015-04-20 15:07:36'),
(26, 26, -2.948685, 104.777692, '2015-04-22 12:11:39', '2015-04-22 12:12:10'),
(27, 27, -2.948685, 104.777692, '2015-04-22 13:01:26', '2015-04-22 13:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_04_15_135340_create_table_kontraktor', 1),
('2015_04_15_135355_create_table_kecamatan', 1),
('2015_04_15_135404_create_table_proyek', 1),
('2015_04_15_135417_create_table_lokasi', 1),
('2015_04_22_140502_add_id_parent_to_proyek', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE IF NOT EXISTS `proyek` (
`id` int(10) unsigned NOT NULL,
  `id_kontraktor` int(10) unsigned NOT NULL,
  `id_kecamatan` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mulai` date NOT NULL,
  `akhir` date NOT NULL,
  `nilai` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_parent` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id`, `id_kontraktor`, `id_kecamatan`, `nama`, `mulai`, `akhir`, `nilai`, `created_at`, `updated_at`, `id_parent`) VALUES
(1, 1, 7, 'Pembuatan Talud Jalan RA. Rozak', '2014-11-25', '2015-02-25', 299659000, '2015-04-15 08:54:49', '2015-04-15 08:54:49', NULL),
(2, 2, 1, 'Normalisasi/ Pembuatan Talud dan Box culvert sal. Primer depan kantor lurah Talang Kelapa', '2014-11-28', '2015-02-27', 249708000, '2015-04-15 09:12:10', '2015-04-15 09:12:10', NULL),
(3, 3, 4, 'Normalisasi/ Pembuatan Talud Saluran Sekunder Lrg. Famili IV Rt.05 Rw.06 Kel. Siring Agung', '2014-11-28', '2015-02-27', 298274000, '2015-04-15 09:47:49', '2015-04-15 09:47:49', NULL),
(4, 4, 7, 'Normalisasi/Pembuatan Talud Anak Sungai Buah Belakang SMA Kumbang (Lanjutan)', '2014-11-28', '2015-02-27', 349619999, '2015-04-15 09:53:30', '2015-04-15 09:53:30', NULL),
(5, 2, 15, 'Pembuatan Talud Jalan Tansa Trisna', '2014-11-28', '2015-02-26', 299690000, '2015-04-15 10:02:03', '2015-04-15 10:02:03', NULL),
(6, 5, 13, 'Normalisasi/ Pembuatan Talud Sungai Kenduruan', '2014-07-30', '2014-10-30', 599680000, '2015-04-15 10:07:30', '2015-04-15 10:07:30', NULL),
(7, 6, 13, 'Pembuatan Talud Sungai Karang Panjang Kel. 12 Ulu', '2014-07-30', '2014-10-30', 749697000, '2015-04-15 10:10:48', '2015-04-15 10:10:48', NULL),
(8, 7, 13, 'Pembuatan Talud Sungai Yucing', '2014-07-30', '2014-10-30', 799684000, '2015-04-15 10:18:07', '2015-04-15 10:18:07', NULL),
(9, 8, 15, 'Normalisasi/ Pembuatan Talud Jl. Dharma Mulia Rt. 10 Kel. Srimulya', '2014-07-30', '2014-10-30', 299673000, '2015-04-15 10:26:35', '2015-04-15 10:26:35', NULL),
(10, 9, 15, 'Normalisasi/ Pembuatan Talud Anak Sungai Borang Jl. Padat Karya Menuju Sungai Borang', '2014-07-30', '2014-10-30', 799660000, '2015-04-15 10:32:55', '2015-04-15 10:32:55', NULL),
(11, 10, 1, 'Pembuatan Talud & Box Culvert Jl. Gotong Royong dan Jl. Tri Sukses Kel. Srijaya', '2014-08-11', '2014-11-11', 499700000, '2015-04-15 10:39:46', '2015-04-15 10:39:46', NULL),
(12, 11, 16, 'Normalisasi /Pembuatan Talud Saluran Sekunder Belakang SMA Madi Wacana Kel. Kebun Bunga', '2014-08-11', '2014-11-11', 399756000, '2015-04-15 11:13:34', '2015-04-15 11:13:34', NULL),
(13, 12, 3, 'Normalisasi/Pembuatan Talud Anak Sungai Soak Batang Komp. Griya Asri', '2013-11-14', '2014-02-11', 299681000, '2015-04-15 11:55:10', '2015-04-15 11:55:10', NULL),
(14, 13, 12, 'Normalisasi/Pembuatan Talud Saluran Sekunder Jl. Lebak Murni ', '2014-07-14', '2014-10-14', 699687000, '2015-04-15 12:01:23', '2015-04-15 12:01:23', NULL),
(15, 14, 12, 'Normalisasi dan Pembuatan Talud Saluran Sekunder Jl. Sukatani (Depan YPAC) Kel. Suka Maju', '2014-12-11', '2015-03-11', 449667000, '2015-04-15 12:13:15', '2015-04-15 12:13:15', NULL),
(16, 15, 4, 'Pembuatan Talud Sekunder Jl. Bonsai Raya', '2013-12-04', '2014-03-05', 299677000, '2015-04-15 12:26:35', '2015-04-15 12:26:35', NULL),
(17, 17, 7, 'NORMALISASI DAN PEMBUATAN TALUD ANAK SUNGAI BUAH BELAKANG SMU KUMBANG', '2012-10-11', '2013-01-10', 299340000, '2015-04-15 14:16:47', '2015-04-15 14:16:47', NULL),
(18, 13, 7, 'Normalisasi dan Pembuatan Talud JL. Taman Kenten dan sekitarnya', '2013-03-27', '2013-06-26', 599413000, '2015-04-15 14:26:26', '2015-04-15 14:26:26', NULL),
(19, 18, 5, 'Normalisasi dan Pembuatan Talud Jl. Binjai Kel. Kemang Manis', '2013-04-10', '2013-07-10', 749282000, '2015-04-15 14:36:31', '2015-04-15 14:36:31', NULL),
(20, 19, 8, 'Normalisasi/Pembuatan Talud Saluran Sekunder Jl. Mayor Zen Lrg. Kapling I Rt. 12 Kel. Kalidoni', '2013-12-04', '2014-03-04', 249076000, '2015-04-15 14:39:57', '2015-04-15 14:39:57', NULL),
(21, 17, 14, 'weleee', '2015-01-22', '2015-12-24', 4294967295, '2015-04-15 15:49:12', '2015-04-15 16:18:32', NULL),
(22, 16, 11, 'sdsdda', '2015-01-01', '2015-07-30', 433243421, '2015-04-15 16:11:56', '2015-04-15 16:11:56', NULL),
(25, 13, 12, 'Pembangunan Talud Jalan Merawan', '2015-01-01', '2015-04-01', 459867598, '2015-04-20 15:01:33', '2015-04-20 15:07:36', NULL),
(26, 1, 7, 'Pembuatan Talud Jalan RA. Rozak (lanjutan)', '2015-02-06', '2015-05-10', 349874938, '2015-04-22 12:11:39', '2015-04-22 12:12:10', 1),
(27, 15, 7, 'Pembuatan Talud Jalan RA. Rozak (lanjutan)(lanjutan)', '2016-02-02', '2016-05-09', 394940389, '2015-04-22 13:01:26', '2015-04-22 13:01:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'isa9x', '$2y$10$/gin14gQFS30z2j8xZuYg.jp07pCdcq1kL6QJfQqmReDzZ2Neerb2', 'MG4RqGb9kJc14hnR8T77JnPfvVHCgyXDmXWaZwAK2ApkJPkghA78fzyYiUER', '2015-04-15 08:34:21', '2015-04-20 17:27:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontraktor`
--
ALTER TABLE `kontraktor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
 ADD PRIMARY KEY (`id`), ADD KEY `lokasi_id_proyek_index` (`id_proyek`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
 ADD PRIMARY KEY (`id`), ADD KEY `proyek_id_kontraktor_index` (`id_kontraktor`), ADD KEY `proyek_id_kecamatan_index` (`id_kecamatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kontraktor`
--
ALTER TABLE `kontraktor`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
ADD CONSTRAINT `lokasi_id_proyek_foreign` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proyek`
--
ALTER TABLE `proyek`
ADD CONSTRAINT `proyek_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `proyek_id_kontraktor_foreign` FOREIGN KEY (`id_kontraktor`) REFERENCES `kontraktor` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
