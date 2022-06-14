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

-- Dumping structure for table noc1.t_peringkat
DROP TABLE IF EXISTS `t_peringkat`;
CREATE TABLE IF NOT EXISTS `t_peringkat` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_peringkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc1.t_peringkat: ~15 rows (approximately)
REPLACE INTO `t_peringkat` (`id`, `nama_peringkat`, `order`, `created_at`, `updated_at`) VALUES
	(1, 'Kunci masuk maklumat permohonan', '1', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(2, 'Semakan dokumen permohonan', '2', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(3, 'Permohonan ulasan Bahagian Pengurusan Nilai', '3', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(4, 'Permohonan ulasan Bahagian Bajet Pembangunan', '4', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(5, 'Penyediaan ulasan Bahagian Pengurusan Nilai', '5', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(6, 'Penyediaan ulasan Bahagian Bajet Pembangunan', '6', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(7, 'Pengemukaan ulasan Bahagian Pengurusan Nilai', '7', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(8, 'Pengemukaan ulasan Bahagian Bajet Pembangunan', '8', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(9, 'Penyediaan Memo Kelulusan Pengurusan Tertinggi', '9', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(10, 'Pengemukaan Memo Kelulusan - Perakuan TKP', '10', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(11, 'Pengemukaan Memo Kelulusan - Kelulusan KP', '11', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(12, 'Kelulusan Pengurusan Tertinggi', '12', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(13, 'Penyediaan Surat Kelulusan Rasmi EPU, JPM', '13', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(14, 'Pengemukaan Surat Kelulusan Rasmi EPU, JPM kepada kementerian', '14', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(15, 'Permohonan Modul NOC MyProjek oleh kementerian', '15', '2022-06-02 16:00:00', '2022-06-02 16:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
