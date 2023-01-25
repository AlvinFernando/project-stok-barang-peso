-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table peso-odp.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profil` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.admins: ~0 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table peso-odp.barangs
CREATE TABLE IF NOT EXISTS `barangs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` enum('Koli','Dos','Pcs','Box','Btl','Lembar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.barangs: ~2 rows (approximately)
/*!40000 ALTER TABLE `barangs` DISABLE KEYS */;
REPLACE INTO `barangs` (`id`, `kode_barang`, `item_description`, `unit`, `qty`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'K-00001', 'HVS 80 gsm A3+', 'Koli', 30, 0, '2022-12-26 04:05:28', '2022-12-31 03:51:10'),
	(2, 'K-00002', 'HVS 80 gsm A3 (Sidu)', 'Koli', 100, 0, '2022-12-26 04:06:05', '2022-12-26 04:06:05');
/*!40000 ALTER TABLE `barangs` ENABLE KEYS */;

-- Dumping structure for table peso-odp.barang_keluars
CREATE TABLE IF NOT EXISTS `barang_keluars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `barangs_id` bigint(20) unsigned NOT NULL,
  `customer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.barang_keluars: ~0 rows (approximately)
/*!40000 ALTER TABLE `barang_keluars` DISABLE KEYS */;
REPLACE INTO `barang_keluars` (`id`, `barangs_id`, `customer`, `qty`, `tanggal`, `created_at`, `updated_at`, `keterangan`) VALUES
	(1, 1, 'EDO', 150, '2022-12-27', '2022-12-26 05:17:45', '2022-12-26 05:17:45', 'Cetak Skripsi A4'),
	(2, 1, 'UNDP Spotlight 38wvsd', 20, '2022-12-31', '2022-12-31 03:51:09', '2022-12-31 03:51:09', 'Cetak Brosur Gereja');
/*!40000 ALTER TABLE `barang_keluars` ENABLE KEYS */;

-- Dumping structure for table peso-odp.barang_masuks
CREATE TABLE IF NOT EXISTS `barang_masuks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `barangs_id` bigint(20) unsigned NOT NULL,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.barang_masuks: ~0 rows (approximately)
/*!40000 ALTER TABLE `barang_masuks` DISABLE KEYS */;
REPLACE INTO `barang_masuks` (`id`, `barangs_id`, `supplier`, `qty`, `tanggal`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Sidu2', 100, '2022-12-27', '2022-12-26 05:16:58', '2022-12-26 05:16:58');
/*!40000 ALTER TABLE `barang_masuks` ENABLE KEYS */;

-- Dumping structure for table peso-odp.delivery_order
CREATE TABLE IF NOT EXISTS `delivery_order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_do` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawais_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.delivery_order: ~6 rows (approximately)
/*!40000 ALTER TABLE `delivery_order` DISABLE KEYS */;
REPLACE INTO `delivery_order` (`id`, `no_do`, `tanggal`, `nama`, `pegawais_id`, `created_at`, `updated_at`, `customer`, `phone`) VALUES
	(1, 'DO/001/AG/I/2022', '2022-12-27', 'Edo', 1, '2022-12-26 04:14:22', '2022-12-30 03:45:32', 'KING', '234345456'),
	(2, 'DO/002/AG/I/2022', '2022-12-27', 'Edy', 1, '2022-12-26 05:22:45', '2022-12-30 04:00:08', 'EDO2', '42624624'),
	(4, 'DO/004/AG/I/2023', '2022-12-29', 'Jafet', 1, '2022-12-28 04:56:02', '2022-12-28 04:56:02', 'AFELA', '085233000735'),
	(5, 'DO/001/AG/I/2023', '2022-12-30', 'Dicky', 1, '2022-12-30 04:55:18', '2022-12-30 04:55:18', 'UNDP Spotlight 38wvsd', '085235314735'),
	(6, 'DO/003/AA/I/2023', '2023-12-30', 'Bayu Lesmana', 1, '2022-12-30 05:06:29', '2022-12-30 05:06:29', 'YHS', '0874983401'),
	(7, 'DO/004/AG/I/2022', '2023-12-30', 'Tulus', 1, '2022-12-30 06:07:28', '2022-12-30 06:07:28', 'PHILIP', '42624213');
/*!40000 ALTER TABLE `delivery_order` ENABLE KEYS */;

-- Dumping structure for table peso-odp.delivery_order_barang
CREATE TABLE IF NOT EXISTS `delivery_order_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `do_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` enum('Koli','Dos','Pcs','Box','Btl','Lembar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.delivery_order_barang: ~21 rows (approximately)
/*!40000 ALTER TABLE `delivery_order_barang` DISABLE KEYS */;
REPLACE INTO `delivery_order_barang` (`id`, `do_id`, `description`, `qty`, `unit`, `created_at`, `updated_at`) VALUES
	(4, 3, 'Print Skripsi A4', 3, 'Pcs', '2022-12-26 06:58:19', '2022-12-26 06:58:19'),
	(12, 2, 'Print Skripsi A5', 3, 'Pcs', '2022-12-30 04:00:08', '2022-12-30 04:00:08'),
	(13, 1, 'Print Acrilic 18x11', 20, 'Lembar', '2022-12-30 04:00:30', '2022-12-30 04:00:30'),
	(14, 1, 'Print Book A4', 100, 'Lembar', '2022-12-30 04:00:30', '2022-12-30 04:00:30'),
	(15, 1, 'THESis', 20, 'Pcs', '2022-12-30 04:00:30', '2022-12-30 04:00:30'),
	(18, 6, 'Banner X', 1, 'Pcs', '2022-12-30 05:06:29', '2022-12-30 05:06:29'),
	(19, 6, 'Print Acrilic 18x11', 10, 'Pcs', '2022-12-30 05:06:29', '2022-12-30 05:06:29'),
	(20, 7, 'Buku Cerita', 20, 'Pcs', '2022-12-30 06:07:28', '2022-12-30 06:07:28'),
	(21, 7, 'Buku Cerita A6', 20, 'Pcs', '2022-12-30 06:07:28', '2022-12-30 06:07:28'),
	(22, 7, 'Print Acrilic 18x11', 20, 'Dos', '2022-12-30 06:07:28', '2022-12-30 06:07:28'),
	(23, 7, 'Gelas Botol Kaca Size XL', 200, 'Btl', '2022-12-30 06:07:29', '2022-12-30 06:07:29'),
	(26, 4, 'Buku Cerita', 20, 'Lembar', '2022-12-30 06:12:08', '2022-12-30 06:12:08'),
	(27, 4, 'Book A4 MyKING', 20, 'Lembar', '2022-12-30 06:12:09', '2022-12-30 06:12:09'),
	(28, 4, 'Book A4 Buku Cerita', 20, 'Lembar', '2022-12-30 06:12:09', '2022-12-30 06:12:09'),
	(29, 4, 'LKS SD', 10, 'Box', '2022-12-30 06:12:09', '2022-12-30 06:12:09'),
	(30, 5, 'BIG X', 10, 'Lembar', '2022-12-30 06:13:14', '2022-12-30 06:13:14'),
	(31, 5, 'Book A4', 1, 'Pcs', '2022-12-30 06:13:14', '2022-12-30 06:13:14'),
	(32, 5, 'Print Acrilic 18x11', 1, 'Koli', '2022-12-30 06:13:14', '2022-12-30 06:13:14'),
	(36, 1, 'Buku Cerita', 11, 'Pcs', '2022-12-30 06:55:16', '2022-12-30 06:55:16'),
	(37, 2, 'Print Skripsi A4 X', 3, 'Pcs', '2022-12-30 07:07:13', '2022-12-30 07:07:13'),
	(38, 1, 'Baliho Size 3XL', 5, 'Koli', '2022-12-30 07:08:06', '2022-12-30 07:08:06');
/*!40000 ALTER TABLE `delivery_order_barang` ENABLE KEYS */;

-- Dumping structure for table peso-odp.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table peso-odp.invoices
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_inv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `pegawais_id` bigint(20) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `terbilang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.invoices: ~0 rows (approximately)
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;

-- Dumping structure for table peso-odp.invoice_barang
CREATE TABLE IF NOT EXISTS `invoice_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `invoices_id` int(11) NOT NULL,
  `jenis_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unit` enum('Koli','Dos','Pcs','Box','Btl','Lembar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.invoice_barang: ~0 rows (approximately)
/*!40000 ALTER TABLE `invoice_barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice_barang` ENABLE KEYS */;

-- Dumping structure for table peso-odp.job_orders
CREATE TABLE IF NOT EXISTS `job_orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `customer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `finishing` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawais_id` bigint(20) unsigned NOT NULL,
  `deadline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `materials` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.job_orders: ~2 rows (approximately)
/*!40000 ALTER TABLE `job_orders` DISABLE KEYS */;
REPLACE INTO `job_orders` (`id`, `tanggal`, `customer`, `jenis_order`, `size`, `pages`, `color`, `finishing`, `qty`, `pegawais_id`, `deadline`, `created_at`, `updated_at`, `materials`) VALUES
	(1, '2022-12-26', 'UNDP Spotlight', 'Booklist & Poster', 'A3', '100 pages', 'FC Full Color', 'Book', '1', 2, '1 month', '2022-12-26 04:57:43', '2022-12-26 04:57:43', 'HVS Sidu 3+'),
	(2, '2022-12-27', 'EDO', 'Skripsi', 'A4', '150 pages', 'FC Full Color', 'Cetak Skripsi', '3', 2, 'Tommorow', '2022-12-26 05:19:17', '2022-12-26 05:19:17', 'HVS Sidu 3+');
/*!40000 ALTER TABLE `job_orders` ENABLE KEYS */;

-- Dumping structure for table peso-odp.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.migrations: ~22 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(59, '2022_04_11_061522_create_job_order_barang_table', 1),
	(85, '2014_10_12_000000_create_users_table', 2),
	(86, '2014_10_12_100000_create_password_resets_table', 2),
	(87, '2019_08_19_000000_create_failed_jobs_table', 2),
	(88, '2021_11_14_035431_create_pegawais_table', 2),
	(89, '2022_03_01_112232_create_barang_masuks_table', 2),
	(90, '2022_04_06_040750_create_barangs_table', 2),
	(91, '2022_04_06_041926_create_barang_keluars_table', 2),
	(92, '2022_04_06_042938_create_job_orders_table', 2),
	(93, '2022_04_11_031401_create_invoices_table', 2),
	(94, '2022_04_12_035711_create_invoice_barang_table', 2),
	(95, '2022_04_13_042618_create_delivery_order_table', 2),
	(96, '2022_04_13_051439_create_delivery_order_barang_table', 2),
	(97, '2022_12_21_053121_add_keterangan_barang_keluar', 2),
	(98, '2022_12_21_054958_add_role_users', 2),
	(99, '2022_12_21_064234_add_materials_job_order', 2),
	(100, '2022_12_21_081732_create_admins_table', 2),
	(101, '2022_12_21_082019_add_user_id_pegawais', 2),
	(102, '2022_12_26_044927_add_nama_customer_telp_terbilang_invoices', 3),
	(103, '2022_12_26_050737_add_unit_jumlah_invoice_barang', 4),
	(104, '2022_12_26_051152_add_unit_jumlah_invoice_barang', 5),
	(105, '2022_12_26_064827_add_customer_delivery_order', 6),
	(106, '2022_12_26_065051_add_customer_delivery_order', 7),
	(107, '2022_12_26_065440_add_customer_phone_delivery_order', 8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table peso-odp.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table peso-odp.pegawais
CREATE TABLE IF NOT EXISTS `pegawais` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.pegawais: ~2 rows (approximately)
/*!40000 ALTER TABLE `pegawais` DISABLE KEYS */;
REPLACE INTO `pegawais` (`id`, `nama`, `jabatan`, `created_at`, `updated_at`, `user_id`) VALUES
	(1, 'Junita Dos Santos', 'Admin', '2022-12-26 04:07:27', '2022-12-26 04:07:27', 5),
	(2, 'Nickolas', 'Desainer Poster', '2022-12-26 04:13:15', '2022-12-26 05:16:20', 6);
/*!40000 ALTER TABLE `pegawais` ENABLE KEYS */;

-- Dumping structure for table peso-odp.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
	(1, 'Admin Koko', 'adminkoko@peso.co.id', NULL, '$2y$10$Jub4hAjNpbWTzMF1oJAste.ei/Wgb1wdeI2LDsxvTwIYci/P1JN52', '3DBfQpQJB9W1BVl2hYKAJqnL3Ht1b8hAuzoo42g4K7F75m2oZbYY0QgLjDTn', '2022-12-26 04:04:32', '2022-12-26 04:04:32', 'admin'),
	(2, 'Meme Ike', 'meme_ike@peso.co.id', NULL, '$2y$10$qWY6Ts7f4AGmphkJytzbOOmwuHcwaF7a7KBNL9evRzk7f6.yhuz8y', 'SbLUH4tHFKR770n302iQD3SJZ9OsLRatKBWwCViU32IIndNOT991OBEqhHiG', '2022-12-26 04:04:32', '2022-12-26 04:04:32', 'admin'),
	(3, 'Pegawai123', 'pegawai@peso.co.id', NULL, '$2y$10$WOfEm.pYWVidKDYlJxqSn.ZcKzDyYmMZvsu/ymR0SO1rtneqfI6gu', 'kxpqBtY0xBEdoU8ctMpRn7vASqRhMgoyF882ukrjYdJNx95grpTGTcKeOARi', '2022-12-26 04:04:32', '2022-12-26 04:04:32', 'pegawai'),
	(5, 'Junita Dos Santos', 'junitadossantos@peso.co.id', NULL, '$2y$10$zdFTnAXx/RzhCdeIlDpP5.AZ/kfj8BDu4oy1PBNykAn5HVgdmHV8q', 'BzMX1vtqKQGFq5KPvMvcWZ0U3MkrWPrj5hNOGDQOpHxZ7obaC479Zd4X4SHX', '2022-12-26 04:07:27', '2022-12-26 04:07:27', 'pegawai'),
	(6, 'Nicko', 'nicko@peso.co.id', NULL, '$2y$10$eKr7GeUVJBwoNHSW.2P3PONy9jPMfcsuoIWklGio/YyPxSgsrs5Ge', 'UWYTYpRD5tFc2Ydu9kMiC2JMfS3Nu2nvzI9bpohuOgjnrtV3ZPIfSswea1nB', '2022-12-26 04:13:15', '2022-12-26 04:13:15', 'pegawai');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
