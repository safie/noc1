-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.27 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6530
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table noc.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table noc.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.migrations: ~24 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(7, '2014_10_12_000000_create_users_table', 1),
	(8, '2014_10_12_100000_create_password_resets_table', 1),
	(9, '2019_08_19_000000_create_failed_jobs_table', 1),
	(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(11, '2022_05_31_151154_create_peranans_table', 1),
	(12, '2022_06_01_064206_add_peranan_to_users_table', 1),
	(13, '2022_06_01_151455_add_bahagian_to_users_table', 2),
	(14, '2022_06_02_034117_create_bahagians_table', 3),
	(15, '2022_06_02_034456_create_kementerians_table', 3),
	(16, '2022_06_02_034617_create_peringkats_table', 3),
	(17, '2022_06_02_035002_create_kategoris_table', 3),
	(18, '2022_06_08_023703_create_nocs_table', 4),
	(19, '2022_06_08_125400_create_status_table', 5),
	(20, '2022_06_08_125633_add_status_to_status_table', 5),
	(21, '2022_06_09_070451_tambah_klasifikasi_to_noc_table', 6),
	(22, '2022_06_12_011525_add_semakulasan_to_noc_table', 7),
	(23, '2022_06_12_021405_add_pengurusantinggi_to_noc_table', 8),
	(24, '2022_06_21_011647_add_sgktn_bhgn_to_users_table', 9),
	(25, '2022_06_22_015312_add_noc_id_to_noc_table', 9),
	(26, '2022_07_06_154015_add_flow_on_kategori_table', 10),
	(28, '2022_07_07_105014_add_field_to_noc_table', 11),
	(29, '2022_07_08_230916_rename_add_fields_to_noc_table', 12),
	(30, '2022_07_17_232858_add_status_noc2_to_noc_table', 13),
	(31, '2022_07_19_151828_add_flow_on_noc_table', 14);

-- Dumping structure for table noc.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.password_resets: ~0 rows (approximately)

-- Dumping structure for table noc.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table noc.t_bahagian
DROP TABLE IF EXISTS `t_bahagian`;
CREATE TABLE IF NOT EXISTS `t_bahagian` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_bhgn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sgktn_bhgn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.t_bahagian: ~33 rows (approximately)
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

-- Dumping structure for table noc.t_kategori
DROP TABLE IF EXISTS `t_kategori`;
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

-- Dumping data for table noc.t_kategori: ~18 rows (approximately)
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

-- Dumping structure for table noc.t_kementerian
DROP TABLE IF EXISTS `t_kementerian`;
CREATE TABLE IF NOT EXISTS `t_kementerian` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sgktn_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.t_kementerian: ~27 rows (approximately)
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

-- Dumping structure for table noc.t_noc
DROP TABLE IF EXISTS `t_noc`;
CREATE TABLE IF NOT EXISTS `t_noc` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `noc_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tajuk_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_permohonan` date DEFAULT NULL,
  `tarikh_surat_kementerian` date DEFAULT NULL,
  `no_rujukan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kod_myprojek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kementerian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahagian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `klasifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noc_flow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_noc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_noc2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_submit` datetime DEFAULT NULL,
  `status_semak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_semak_tek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_semak_bajet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengurusan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_semak` datetime DEFAULT NULL,
  `tarikh_semak_bajet` datetime DEFAULT NULL,
  `tarikh_semak_tek` datetime DEFAULT NULL,
  `tarikh_dokumen_tambahan` datetime DEFAULT NULL,
  `tarikh_dokumen_tambahan_bajet` datetime DEFAULT NULL,
  `tarikh_dokumen_tambahan_tek` datetime DEFAULT NULL,
  `tarikh_mohon_ulasan` datetime DEFAULT NULL,
  `tarikh_mohon_ulasan_tek` datetime DEFAULT NULL,
  `tarikh_sedia_ulasan` datetime DEFAULT NULL,
  `tarikh_sedia_ulasan_tek` datetime DEFAULT NULL,
  `tarikh_hantar_ulasan` datetime DEFAULT NULL,
  `tarikh_hantar_ulasan_tek` datetime DEFAULT NULL,
  `tarikh_sedia_memo_kelulusan` datetime DEFAULT NULL,
  `tarikh_hantar_memo_kelulusan` datetime DEFAULT NULL,
  `tarikh_kelulusan_pt` datetime DEFAULT NULL,
  `tarikh_sedia_surat` datetime DEFAULT NULL,
  `tarikh_hantar_surat_lulus` datetime DEFAULT NULL,
  `tarikh_mohon_modul` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.t_noc: ~11 rows (approximately)
REPLACE INTO `t_noc` (`id`, `noc_id`, `tajuk_permohonan`, `tarikh_permohonan`, `tarikh_surat_kementerian`, `no_rujukan`, `kod_myprojek`, `kementerian`, `bahagian`, `klasifikasi`, `noc_flow`, `status_noc`, `status_noc2`, `tarikh_submit`, `status_semak`, `status_semak_tek`, `status_semak_bajet`, `pengurusan_tinggi`, `tarikh_semak`, `tarikh_semak_bajet`, `tarikh_semak_tek`, `tarikh_dokumen_tambahan`, `tarikh_dokumen_tambahan_bajet`, `tarikh_dokumen_tambahan_tek`, `tarikh_mohon_ulasan`, `tarikh_mohon_ulasan_tek`, `tarikh_sedia_ulasan`, `tarikh_sedia_ulasan_tek`, `tarikh_hantar_ulasan`, `tarikh_hantar_ulasan_tek`, `tarikh_sedia_memo_kelulusan`, `tarikh_hantar_memo_kelulusan`, `tarikh_kelulusan_pt`, `tarikh_sedia_surat`, `tarikh_hantar_surat_lulus`, `tarikh_mohon_modul`, `created_at`, `updated_at`) VALUES
	(1, 'noc/2022/7/D1/', 'MENAIKTARAF TAPAK PELUPUSAN SISA PEPEJAL DAN PEMBINAAN SEL SISA PUKAL DI BELANGA PECHAH, LANGKAWI, KEDAH.', '2022-07-04', '2022-07-05', 'rujuk1234', 'kod1234', '2', '20', 'D1', 'flow1', 'noc_2', NULL, '2022-07-09 00:00:00', 'lulus', NULL, NULL, NULL, '2022-07-12 00:00:00', NULL, NULL, '2022-07-11 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 16:38:56', NULL, NULL, NULL, NULL, NULL, '2022-07-09 08:18:44', '2022-07-09 08:29:47'),
	(2, 'noc/2022/7/D7.1/', 'PEMBINAAN EMPAT (4) BENGKEL BARU PROJEK KENDERAAN BAS MARA DI BAWAH RMKe-12', '2022-07-01', '2022-07-01', 'rujuk3456', 'kod3456', '11', '20', 'D7.1', 'flow2', 'noc_7', NULL, '2022-07-09 00:00:00', 'lulus', NULL, 'lulus-mohon', NULL, '2022-07-14 00:00:00', '2022-07-20 00:00:00', NULL, NULL, NULL, NULL, '2022-07-15 00:00:00', NULL, '2022-07-21 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 08:20:40', '2022-07-15 15:59:35'),
	(3, 'noc/2022/7/D7.2/', 'PROGRAM PERUMAHAN RAKYAT (PPR) LADANG TANAH MERAH, PORT DICKSON, NEGERI SEMBILAN.', '2022-06-23', '2022-06-23', 'rujuk9898', 'kod9898', '22', '20', 'D7.2', 'flow3', 'noc_3', 'noc_4', '2022-07-09 00:00:00', 'lulus', NULL, NULL, NULL, '2022-07-15 00:00:00', NULL, NULL, '2022-07-12 00:00:00', NULL, NULL, '2022-07-18 00:00:00', '2022-07-18 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 08:24:02', '2022-07-19 14:40:18'),
	(4, 'noc/2022/7/D7.2/', 'NAIKTARAF SISTEM GAS PERUBATAN, SISTEM ELEKTRIK DAN KERJA-KERJA BERKAITAN DI BANGUNAN UTAMA HOSPITAL SULTANAH NUR ZAHIRAH, KUALA TERENGGANU.', '2022-07-04', '2022-07-04', 'rujuk4567', 'kod4567', '6', '20', 'D7.2', 'flow3', 'noc_16', 'noc_10', '2022-07-09 00:00:00', 'lulus', 'lulus-mohon', 'lulus-mohon', 'kp', '2022-07-12 00:00:00', '2022-07-22 00:00:00', '2022-07-14 00:00:00', NULL, '2022-07-15 00:00:00', NULL, '2022-07-19 00:00:00', '2022-07-13 00:00:00', '2022-07-25 00:00:00', '2022-07-18 00:00:00', '2022-07-28 00:00:00', '2022-07-21 00:00:00', '2022-08-01 00:00:00', '2022-08-04 00:00:00', '2022-08-09 00:00:00', '2022-08-12 00:00:00', '2022-08-15 00:00:00', '2022-08-18 00:00:00', '2022-07-09 08:55:28', '2022-07-19 15:45:49'),
	(5, 'noc/2022/7/D8.2/', 'MEWUJUDKAN BUTIRAN DAN PINDAHAN SILING BAGI PROGRAM PODIUM DALAM RANCANGAN MALAYSIA KEDUA BELAS TAHUN 2022', '2022-07-04', '2022-07-05', 'rujuk3434', 'kod3434', '1', '20', 'D8.2', 'flow2', 'noc_16', NULL, '2022-07-09 00:00:00', 'lulus', NULL, 'lulus-mohon', 'kp', '2022-07-11 00:00:00', '2022-07-19 00:00:00', NULL, NULL, '2022-07-14 00:00:00', NULL, '2022-07-18 00:00:00', NULL, '2022-07-20 00:00:00', NULL, '2022-07-22 00:00:00', NULL, '2022-07-25 00:00:00', '2022-07-27 00:00:00', '2022-08-01 00:00:00', '2022-08-03 00:00:00', '2022-08-12 00:00:00', '2022-08-09 00:00:00', '2022-07-09 08:59:53', '2022-07-19 13:21:44'),
	(6, 'noc/2022/7/D4/', 'PROGRAM PERUMAHAN RAKYAT (PPR) PULAU GADONG, MELAKA TENGAH, MELAKA.', '2022-07-01', '2022-07-01', 'rujuk567', 'kod567', '22', '20', 'D4', 'flow1', 'noc_17', NULL, '2022-07-09 00:00:00', 'dokumen-tambahan', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 09:03:58', '2022-07-19 11:00:05'),
	(7, 'noc/2022/7/D6.1/', 'PEMBINAAN EMPAT (4) BENGKEL BARU PROJEK KENDERAAN BAS MARA DI BAWAH RMKe-12', '2022-06-08', '2022-06-08', 'rujuk9090', 'kod9090', '11', '18', 'D6.1', 'flow1', 'noc_16', NULL, '2022-07-09 00:00:00', 'lulus', NULL, NULL, NULL, '2022-07-11 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-14 00:00:00', '2022-07-19 00:00:00', '2022-07-22 00:00:00', '2022-07-09 10:06:05', '2022-07-19 11:23:04'),
	(8, 'noc/2022/7/D8.2/', 'KAMPUNG KEUSAHAWANAN BERASASKAN KONTENA DI KAWASAN KOLAM AIR PANAS, MACHANG, KELANTAN.', '2022-06-22', '2022-06-23', 'rujuk999', 'kod999', '12', '18', 'D8.2', 'flow2', 'noc_3', NULL, '2022-07-09 00:00:00', 'lulus', NULL, NULL, NULL, '2022-07-11 00:00:00', NULL, NULL, '2022-07-10 00:00:00', NULL, NULL, '2022-07-12 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 10:06:57', '2022-07-11 04:14:10'),
	(9, 'noc/2022/7/D8.1/', 'KLINIK KESIHATAN (JENIS 5) BEBULOH,WILAYAH PERSEKUTUAN LABUAN.', '2022-07-13', '2022-07-12', 'rujuk876', 'kod876', '6', '20', 'D8.1', 'flow3', 'noc_1', NULL, '2022-07-16 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-16 06:01:52', '2022-07-16 07:02:37'),
	(11, 'noc/2022/7/D7.1/', 'PROGRAM TUNAS USAHAWAN BELIA BUMIPUTERA DI BAWAH SELIAAN SME CORPORATION MALAYSIA', '2022-07-13', '2022-07-13', 'rujuk888', 'kod888', '12', '18', 'D7.1', 'flow2', 'noc_3', NULL, '2022-07-19 00:00:00', 'lulus', NULL, NULL, NULL, '2022-07-22 00:00:00', NULL, NULL, '2022-07-20 00:00:00', NULL, NULL, '2022-07-25 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19 11:19:55', '2022-07-19 12:47:53'),
	(12, 'noc/2022/7/D2/', 'PEWUJUDAN LIMA (5) PROJEK BAHARU PEROLEHAN TANAH (BAYARAN PREMIUM) BAGI JABATAN BOMBA DAN PENYELAMAT MALAYSIA (JBPM) DI BAWAH RP2 TAHUN 2022 RMKe-12', '2022-07-05', '2022-07-05', 'rujuk94836', 'kod8674', '4', '20', 'D2', 'flow1', 'noc_1', NULL, '2022-07-19 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19 14:58:24', '2022-07-19 14:58:24');

-- Dumping structure for table noc.t_peranan
DROP TABLE IF EXISTS `t_peranan`;
CREATE TABLE IF NOT EXISTS `t_peranan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `peranan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.t_peranan: ~4 rows (approximately)
REPLACE INTO `t_peranan` (`id`, `peranan`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Pengguna Administrator', '2022-06-01 05:20:25', '2022-06-01 05:20:25'),
	(2, 'Bahagian', 'Pengguna Bahagian EPU', '2022-06-01 05:41:28', '2022-06-01 05:41:28'),
	(3, 'Bajet', 'Penyelaras NOC 1', '2022-06-01 05:43:00', '2022-06-01 05:43:00'),
	(4, 'Nilai', 'Penyelaras NOC 2', '2022-06-01 05:43:17', '2022-06-01 05:43:17');

-- Dumping structure for table noc.t_peringkat
DROP TABLE IF EXISTS `t_peringkat`;
CREATE TABLE IF NOT EXISTS `t_peringkat` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_peringkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.t_peringkat: ~15 rows (approximately)
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

-- Dumping structure for table noc.t_status
DROP TABLE IF EXISTS `t_status`;
CREATE TABLE IF NOT EXISTS `t_status` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table noc.t_status: ~19 rows (approximately)
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

-- Dumping structure for table noc.users
DROP TABLE IF EXISTS `users`;
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

-- Dumping data for table noc.users: ~6 rows (approximately)
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
