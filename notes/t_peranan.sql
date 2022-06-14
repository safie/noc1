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

-- Dumping structure for table noc1.t_peranan
DROP TABLE IF EXISTS `t_peranan`;
CREATE TABLE IF NOT EXISTS `t_peranan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `peranan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc1.t_peranan: ~4 rows (approximately)
REPLACE INTO `t_peranan` (`id`, `peranan`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Pengguna Administrator', '2022-06-01 00:48:57', '2022-06-01 00:48:57'),
	(2, 'Bahagian', 'Pengguna Bahagian EPU', '2022-06-01 17:35:01', '2022-06-01 17:35:01'),
	(3, 'Bajet', 'Penyelaras NOC BBP', '2022-06-01 18:52:28', '2022-06-01 18:52:28'),
	(4, 'Nilai', 'Penyelaras NOC BPN', '2022-06-01 18:52:51', '2022-06-01 18:52:51');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
