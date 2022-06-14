-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.27 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6415
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table noc.t_status
DROP TABLE IF EXISTS `t_status`;
CREATE TABLE IF NOT EXISTS `t_status` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.t_status: ~8 rows (approximately)
REPLACE INTO `t_status` (`id`, `id_status`, `nama_status`, `created_at`, `updated_at`) VALUES
	(1, 'noc_1', 'NOC Baharu', '2022-06-08 05:39:57', '2022-06-09 07:24:29'),
	(2, 'noc_2', 'Mohon Ulasan', '2022-06-08 05:52:47', '2022-06-11 07:50:17'),
	(3, 'noc_3', 'Permohonan Ulasan Disemak', '2022-06-09 07:26:36', '2022-06-11 07:50:30'),
	(4, 'noc_4', 'Penyediaan Ulasan', '2022-06-09 07:59:45', '2022-06-09 07:59:45'),
	(5, 'noc_5', 'Ulasan dihantar', '2022-06-09 08:01:09', '2022-06-09 08:01:09'),
	(6, 'noc_6', 'Penyediaan Memo Kelulusan', '2022-06-09 08:01:40', '2022-06-09 08:02:47'),
	(7, 'noc_7', 'Terima Memo Kelulusan', '2022-06-09 08:05:31', '2022-06-11 07:50:53'),
	(8, 'noc_8', 'Penyediaan Surat Kelulusan', '2022-06-09 08:06:22', '2022-06-09 08:06:22'),
	(9, 'noc_9', 'Terima Surat Kelulusan Rasmi', '2022-06-09 08:11:18', '2022-06-11 07:51:09'),
	(10, 'noc_10', 'Modul NOC MyProjek', '2022-06-09 08:12:13', '2022-06-11 20:51:18'),
	(11, 'noc_11', 'Semak Semula', '2022-06-10 17:37:41', '2022-06-10 17:37:41'),
	(12, 'noc_12', 'Perlu Maklumat Tambahan', '2022-06-10 17:38:13', '2022-06-10 17:38:13');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
