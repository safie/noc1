-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for noc1
CREATE DATABASE IF NOT EXISTS `noc1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `noc1`;

-- Dumping structure for table noc1.t_bahagian
CREATE TABLE IF NOT EXISTS `t_bahagian` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_bhgn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sgktn_bhgn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc1.t_bahagian: ~33 rows (approximately)
REPLACE INTO `t_bahagian` (`id`, `nama_bhgn`, `sgktn_bhgn`, `created_at`, `updated_at`) VALUES
	(1, 'Pejabat Ketua Pengarah', 'KP', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(2, 'Pejabat Timbalan Ketua Pengarah (SEKTORAL)', 'TKP(Sektoral)', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(3, 'Pejabat Timbalan Ketua Pengarah (MAKRO)', 'TKP(Makro)', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(4, 'Pejabat Timbalan Ketua Pengarah (DASAR)', 'TKP(Dasar)', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(5, 'Pejabat Pengarah Kanan (Pengurusan)', 'PKP', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(6, 'Bahagian Infrastruktur dan Kemudahan Awam', 'BINFRA', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(7, 'Bahagian Pertanian', 'BTANI', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(8, 'Bahagian Pengurusan Nilai', 'BPN', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(9, 'Bahagian Tenaga', 'BTENAGA', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(10, 'Bahagian Keselamatan dan Ketenteraman Awam', 'BKKA', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(11, 'Unit Statistik', 'USTAT', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(12, 'Bahagian Ekonomi Makro', 'BEM', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(13, 'Bahagian Industri Perkhidmatan', 'BIP', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(14, 'Bahagian Industri Pembuatan Sains dan Teknologi', 'BIPST', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(15, 'Bahagian Bajet Pembangunan', 'BBP', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(16, 'Bahagian K-Ekonomi', 'BKE', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(17, 'Bahagian Ekonomi Alam Sekitar Dan Sumber Asli', 'BEASSA', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(18, 'Bahagian Pembangunan Ekuiti', 'BEQT', '2022-06-01 16:00:00', '2022-07-05 14:43:39'),
	(19, 'Unit Audit Dalam', 'UAD', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(20, 'Bahagian Perkhidmatan Sosial', 'BPS', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(21, 'Bahagian Pembangunan Wilayah', 'BPW', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(22, 'Bahagian Pembangunan Modal Insan', 'BPMI', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(23, 'Bahagian Penyelarasan, Kawalan dan Pemantauan', 'BPKP', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(24, 'Bahagian Perancangan Strategik dan Kerjasama Antarabangsa', 'BPSKA', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(25, 'Bahagian Khidmat Pengurusan dan Kewangan', 'BKPK', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(26, 'Bahagian Sumber Manusia', 'BSM', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(27, 'Bahagian Akaun', 'Akaun', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(28, 'Bahagian Pengurusan Maklumat', 'BPM', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(29, 'Unit Komunikasi Korporat', 'UKK', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(30, 'Bahagian Pembangunan', 'BP', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(31, 'Unit Undang-Undang', 'PUU', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(32, 'Sekretariat Majlis Tindakan Ekonomi', 'MTEN', '2022-06-01 16:00:00', '2022-06-01 16:00:00'),
	(33, 'Unit Integriti', 'Integriti', '2022-06-01 16:00:00', '2022-06-01 16:00:00');

-- Dumping structure for table noc1.t_kategori
CREATE TABLE IF NOT EXISTS `t_kategori` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kod_myprojek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc1.t_kategori: ~18 rows (approximately)
REPLACE INTO `t_kategori` (`id`, `nama_kat`, `kod`, `kod_myprojek`, `flow`, `created_at`, `updated_at`) VALUES
	(1, 'Perubahan nama projek', 'D1', 'D1', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:46:41'),
	(2, 'Perubahan kod projek', 'D2', 'D2', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:48:09'),
	(3, 'Perubahan agensi', 'D4', 'D4', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:48:18'),
	(4, 'Perubahan bahagian', 'D5', 'D5', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:48:27'),
	(6, 'Perubahan kawasan', 'D6.1', 'D6', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:48:57'),
	(7, 'Perubahan cara pembiayaan', 'D6.2', 'D6', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:49:03'),
	(8, 'Perubahan sektor utama', 'D6.3', 'D6', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:49:13'),
	(9, 'Perubahan lokasi', 'D6.4', 'D6', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:49:19'),
	(11, 'Kelulusan khas', 'D7.1', 'D7', 'flow2', '2022-06-09 13:09:00', '2022-07-06 14:49:59'),
	(12, 'Wujud semula butiran dengan kenaikan kos', 'D7.2', 'D7', 'flow3', '2022-06-09 13:09:00', '2022-07-06 14:50:28'),
	(13, 'Wujud semula butiran tanpa kenaikan kos', 'D7.3', 'D7', 'flow2', '2022-06-09 13:09:00', '2022-07-06 14:50:55'),
	(15, 'Perubahan kos', 'D8.1', 'D8', 'flow3', '2022-06-09 13:09:00', '2022-07-06 14:51:07'),
	(16, 'Agihan siling', 'D8.2', 'D8', 'flow2', '2022-06-09 13:09:00', '2022-07-06 14:51:19'),
	(17, 'Perubahan maklumat RMK', 'D9', 'D9', 'flow1', '2022-06-09 13:09:00', '2022-07-06 14:49:31'),
	(19, 'Perubahan skop', 'D10.1', 'D10', 'flow3', '2022-06-09 13:09:00', '2022-07-06 14:51:53'),
	(20, 'Perubahan objektif', 'D10.2', 'D10', 'flow3', '2022-06-09 13:09:00', '2022-07-06 14:52:01'),
	(21, 'Perubahan keterangan', 'D10.3', 'D10', 'flow3', '2022-06-09 13:09:00', '2022-07-06 14:52:09'),
	(22, 'Perubahan komponen', 'D10.4', 'D10', 'flow3', '2022-06-09 13:09:00', '2022-07-06 14:52:17');

-- Dumping structure for table noc1.t_kementerian
CREATE TABLE IF NOT EXISTS `t_kementerian` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sgktn_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc1.t_kementerian: ~27 rows (approximately)
REPLACE INTO `t_kementerian` (`id`, `nama_jabatan`, `sgktn_jabatan`, `created_at`, `updated_at`) VALUES
	(1, 'Jabatan Perdana Menteri', 'JPM', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(2, 'Kementerian Alam Sekitar dan Air', 'DOE', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(3, 'Kementerian Belia dan Sukan', 'KBS', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(4, 'Kementerian Dalam Negeri', 'KDN', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(5, 'Kementerian Kerja Raya', 'KKR', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(6, 'Kementerian Kesihatan', 'MOH', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(7, 'Kementerian Kewangan', 'MOF', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(8, 'Kementerian Komunikasi dan Multimedia', 'KKMM', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(9, 'Kementerian Luar Negeri', 'KLN', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(10, 'Kementerian Pelancongan, Seni dan Budaya', 'MOTAC', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(11, 'Kementerian Pembangunan Luar Bandar', 'KPLB', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(12, 'Kementerian Pembangunan Usahawan dan Koperasi', 'MEDAC', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(13, 'Kementerian Pembangunan Wanita, Keluarga dan Masyarakat', 'KPWKM', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(14, 'Kementerian Pendidikan', 'MOE', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(15, 'Kementerian Pengajian Tinggi', 'MOHE', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(16, 'Kementerian Pengangkutan', 'MOT', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(17, 'Kementerian Perdagangan Antarabangsa dan Industri', 'MITI', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(18, 'Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna', 'KPDNHEP', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(19, 'Kementerian Perpaduan Negara', 'KPN', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(20, 'Kementerian Pertahanan', 'MINDEF', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(21, 'Kementerian Pertanian dan Industri Makanan', 'MOA', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(22, 'Kementerian Perumahan dan Kerajaan Tempatan', 'KPKT', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(23, 'Kementerian Perusahaan Perladangan dan Komoditi', 'MPIC', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(24, 'Kementerian Sains, Teknologi dan Inovasi', 'MOSTI', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(25, 'Kementerian Sumber Manusia', 'MOHR', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(26, 'Kementerian Tenaga dan Sumber Asli', 'KATS', '2022-06-02 16:00:00', '2022-06-02 16:00:00'),
	(27, 'Kementerian Wilayah Persekutuan', 'KWP', '2022-06-02 16:00:00', '2022-06-02 16:00:00');

-- Dumping structure for table noc1.t_peranan
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
	(1, 'Admin', 'Pengguna Administrator', '2022-06-01 05:20:25', '2022-06-01 05:20:25'),
	(2, 'Bahagian', 'Pengguna Bahagian EPU', '2022-06-01 05:41:28', '2022-06-01 05:41:28'),
	(3, 'Bajet', 'Penyelaras NOC 1', '2022-06-01 05:43:00', '2022-06-01 05:43:00'),
	(4, 'Nilai', 'Penyelaras NOC 2', '2022-06-01 05:43:17', '2022-06-01 05:43:17');

-- Dumping structure for table noc1.t_peringkat
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

-- Dumping structure for table noc1.t_status
CREATE TABLE IF NOT EXISTS `t_status` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc1.t_status: ~19 rows (approximately)
REPLACE INTO `t_status` (`id`, `id_status`, `nama_status`, `created_at`, `updated_at`) VALUES
	(1, 'noc_1', 'NOC Baharu', '2022-06-08 05:39:57', '2022-06-09 07:24:29'),
	(2, 'noc_2', 'Semakan Bahagian (LULUS)', '2022-06-08 05:52:47', '2022-07-07 12:17:17'),
	(3, 'noc_3', 'Permohonan Ulasan Bajet', '2022-06-09 07:26:36', '2022-07-07 12:17:33'),
	(4, 'noc_4', 'Permohonan Ulasan Teknikal', '2022-06-09 07:59:45', '2022-07-07 12:17:49'),
	(5, 'noc_5', 'Semakan BBP', '2022-06-09 08:01:09', '2022-07-07 12:18:07'),
	(6, 'noc_6', 'Semakan BPN', '2022-06-09 08:01:40', '2022-07-07 12:18:18'),
	(7, 'noc_7', 'Penyediaan Ulasan Bajet', '2022-06-09 08:05:31', '2022-07-07 12:19:23'),
	(8, 'noc_8', 'Penyediaan Ulasan Teknikal', '2022-06-09 08:06:22', '2022-07-07 12:19:38'),
	(9, 'noc_9', 'Pengemukaan Ulasan Bajet', '2022-06-09 08:11:18', '2022-07-07 12:19:54'),
	(10, 'noc_10', 'Pengemukaan Ulasan Teknikal', '2022-06-09 08:12:13', '2022-07-07 12:20:10'),
	(11, 'noc_11', 'Penyediaan Memo', '2022-06-10 17:37:41', '2022-07-07 12:20:26'),
	(12, 'noc_12', 'Penghantaran Memo', '2022-06-10 17:38:13', '2022-07-07 12:20:44'),
	(13, 'noc_13', 'Terima Memo', '2022-06-25 02:16:39', '2022-07-07 12:21:15'),
	(14, 'noc_14', 'Penyediaan Surat', '2022-06-25 02:18:03', '2022-07-07 12:21:32'),
	(15, 'noc_15', 'Penghantaran Surat', '2022-07-07 12:21:53', '2022-07-07 12:21:53'),
	(16, 'noc_16', 'Mohon Modul NOC', '2022-07-07 12:22:22', '2022-07-07 12:22:22'),
	(17, 'noc_17', 'Dokumen Tambahan', '2022-07-07 12:22:54', '2022-07-07 12:22:54'),
	(18, 'noc_18', 'Dokumen Tambahan Bajet', '2022-07-07 12:23:34', '2022-07-07 12:23:34'),
	(19, 'noc_19', 'Dokumen Tambahan Teknikal', '2022-07-07 12:24:07', '2022-07-07 12:24:07');

-- Dumping structure for table noc1.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peranan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahagian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgktn_bhgn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc1.users: ~6 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `peranan`, `bahagian`, `sgktn_bhgn`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Super Admin BPM', 'sadmin_noc@epu.gov.my', '1', '28', NULL, NULL, '$2y$10$tx1.twzbOFoLsng2.vuoDeCyVZRK1bidm3OwW384joPQ9z0U.cy02', NULL, '2022-06-01 05:19:41', '2022-07-09 10:00:17'),
	(2, 'Mohd Syafiq bin Abdullah', 'syafiq_noc@epu.gov.my', '2', '10', NULL, NULL, '$2y$10$butksnn8twrivgD4LuHnVuxEANYKqYJeMQcYpQbvSrUVylCGnKzUq', NULL, '2022-06-08 04:29:37', '2022-06-28 04:45:02'),
	(3, 'Ahmad bin Albab', 'ahmad.albab@epu.gov.my', '2', '20', NULL, NULL, '$2y$10$uYc8s48f3CQTeXRYo/HQWOOi5tRBRg9Zx7W2FIkgLoF6INqAXTBMi', NULL, '2022-06-28 04:44:32', '2022-07-05 13:34:08'),
	(4, 'bajet noc', 'bajet_noc@epu.gov.my', '3', '15', NULL, NULL, '$2y$10$Iia48KoODYiTJEgulAwlq.X4b5Em.SHNIL.uNANxHGCUKSc9Txqtq', NULL, '2022-06-28 04:45:54', '2022-06-28 04:45:54'),
	(5, 'nilai_noc', 'nilai_noc@epu.gov.my', '4', '8', NULL, NULL, '$2y$10$KAFDz0zk/mCTZHJViNqxD.CMrqa5B0zT2/7Rd.eHqhlsmmx2P73IO', NULL, '2022-06-28 04:46:48', '2022-06-28 04:46:48'),
	(6, 'Ramlee bin Ahmad', 'ramlee.ahmad@epu.gov.my', '2', '18', NULL, NULL, '$2y$10$87.uon3A77ZP6KfXwE3qz.89UA5xevXokylLSH8HPLo8togT9p/AS', NULL, '2022-07-05 14:43:09', '2022-07-05 14:43:09');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
