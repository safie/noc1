-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.29 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6518
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table noc1.t_kategori
DROP TABLE IF EXISTS `t_kategori`;
CREATE TABLE IF NOT EXISTS `t_kategori` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kod_myprojek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc1.t_kategori: ~22 rows (approximately)
REPLACE INTO `t_kategori` (`id`, `nama_kat`, `kod`, `kod_myprojek`, `created_at`, `updated_at`) VALUES
	(1, 'Perubahan nama projek', 'D1', 'D1', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(2, 'Perubahan kod projek', 'D2', 'D2', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(3, 'Perubahan agensi', 'D4', 'D4', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(4, 'Perubahan bahagian', 'D5', 'D5', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(5, 'Perubahan lain-lain', 'D6', 'D6', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(6, 'Perubahan kawasan', 'D6.1', 'D6', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(7, 'Perubahan cara pembiayaan', 'D6.2', 'D6', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(8, 'Perubahan sektor utama', 'D6.3', 'D6', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(9, 'Perubahan lokasi', 'D6.4', 'D6', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(10, 'Penambahan projek baru', 'D7', 'D7', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(11, 'Kelulusan khas', 'D7.1', 'D7', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(12, 'Wujud semula butiran dengan kenaikan kos', 'D7.2', 'D7', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(13, 'Wujud semula butiran tanpa kenaikan kos', 'D7.3', 'D7', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(14, 'Perubahan kos dan siling', 'D8', 'D8', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(15, 'Perubahan kos', 'D8.1', 'D8', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(16, 'Agihan siling', 'D8.2', 'D8', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(17, 'Perubahan maklumat RMK', 'D9', 'D9', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(18, 'Perubahan skop', 'D10', 'D10', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(19, 'Perubahan skop', 'D10.1', 'D10', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(20, 'Perubahan objektif', 'D10.2', 'D10', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(21, 'Perubahan keterangan', 'D10.3', 'D10', '2022-06-09 13:09:00', '2022-06-09 13:09:00'),
	(22, 'Perubahan komponen', 'D10.4', 'D10', '2022-06-09 13:09:00', '2022-06-09 13:09:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
