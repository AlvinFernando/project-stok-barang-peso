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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.barangs: ~0 rows (approximately)
/*!40000 ALTER TABLE `barangs` DISABLE KEYS */;
REPLACE INTO `barangs` (`id`, `kode_barang`, `item_description`, `unit`, `qty`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'K-001', 'HVS 80 gsm A3+', 'Lembar', 200, 0, '2023-03-11 06:20:11', '2023-03-11 06:20:11');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.barang_keluars: ~0 rows (approximately)
/*!40000 ALTER TABLE `barang_keluars` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.barang_masuks: ~0 rows (approximately)
/*!40000 ALTER TABLE `barang_masuks` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.delivery_order: ~0 rows (approximately)
/*!40000 ALTER TABLE `delivery_order` DISABLE KEYS */;
REPLACE INTO `delivery_order` (`id`, `no_do`, `tanggal`, `nama`, `pegawais_id`, `created_at`, `updated_at`, `customer`, `phone`) VALUES
	(1, 'DO/001/AG/I/2022', '2023-03-13', 'NAYL AUTHOR', 2, '2023-03-11 06:13:52', '2023-03-11 06:13:52', 'AUTHORISM_', '+670 9034 8770');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.delivery_order_barang: ~4 rows (approximately)
/*!40000 ALTER TABLE `delivery_order_barang` DISABLE KEYS */;
REPLACE INTO `delivery_order_barang` (`id`, `do_id`, `description`, `qty`, `unit`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Poster A5', 100, 'Lembar', '2023-03-11 06:13:52', '2023-03-11 06:13:52'),
	(2, 1, 'Poster XXL', 50, 'Lembar', '2023-03-11 06:13:52', '2023-03-11 06:13:52');
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
  `pegawais_id` bigint(20) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) DEFAULT NULL,
  `terbilang` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.invoices: ~7 rows (approximately)
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
REPLACE INTO `invoices` (`id`, `no_inv`, `pegawais_id`, `tanggal`, `created_at`, `updated_at`, `nama`, `customer`, `telp`, `total`, `terbilang`) VALUES
	(1, 'INV/10/2023/I/I', 2, '2023-03-13', '2023-03-11 06:15:04', '2023-03-11 06:15:04', 'NAYL AUTHOR', 'AUTHORISM_', '+670 8875 7624', 570.00, 'Five Hundred Seventy Dollars');
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;

-- Dumping structure for table peso-odp.invoice_barang
CREATE TABLE IF NOT EXISTS `invoice_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `invoices_id` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unit` enum('Koli','Dos','Pcs','Box','Btl','Lembar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.invoice_barang: ~8 rows (approximately)
/*!40000 ALTER TABLE `invoice_barang` DISABLE KEYS */;
REPLACE INTO `invoice_barang` (`id`, `invoices_id`, `description`, `qty`, `harga`, `created_at`, `updated_at`, `unit`, `jumlah`) VALUES
	(1, 1, 'Poster Big Size XL', 50, 3.00, '2023-03-11 06:15:04', '2023-03-11 06:15:04', 'Lembar', 150.00),
	(2, 1, 'Poster Big Size 2XL', 100, 4.20, '2023-03-11 06:15:04', '2023-03-11 06:15:04', 'Lembar', 420.00);
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
  `no_jo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `materials_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `materials_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.job_orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `job_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_orders` ENABLE KEYS */;

-- Dumping structure for table peso-odp.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.migrations: ~28 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(59, '2022_04_11_061522_create_job_order_barang_table', 1),
	(103, '2022_12_26_050737_add_unit_jumlah_invoice_barang', 4),
	(105, '2022_12_26_064827_add_customer_delivery_order', 6),
	(106, '2022_12_26_065051_add_customer_delivery_order', 7),
	(202, '2014_10_12_000000_create_users_table', 8),
	(203, '2014_10_12_100000_create_password_resets_table', 8),
	(204, '2019_08_19_000000_create_failed_jobs_table', 8),
	(205, '2021_11_14_035431_create_pegawais_table', 8),
	(206, '2022_03_01_112232_create_barang_masuks_table', 8),
	(207, '2022_04_06_040750_create_barangs_table', 8),
	(208, '2022_04_06_041926_create_barang_keluars_table', 8),
	(209, '2022_04_06_042938_create_job_orders_table', 8),
	(210, '2022_04_11_031401_create_invoices_table', 8),
	(211, '2022_04_12_035711_create_invoice_barang_table', 8),
	(212, '2022_04_13_042618_create_delivery_order_table', 8),
	(213, '2022_04_13_051439_create_delivery_order_barang_table', 8),
	(214, '2022_12_21_053121_add_keterangan_barang_keluar', 8),
	(215, '2022_12_21_054958_add_role_users', 8),
	(216, '2022_12_21_064234_add_materials_job_order', 8),
	(217, '2022_12_21_081732_create_admins_table', 8),
	(218, '2022_12_21_082019_add_user_id_pegawais', 8),
	(219, '2022_12_26_044927_add_nama_customer_telp_terbilang_invoices', 8),
	(220, '2022_12_26_051152_add_unit_jumlah_invoice_barang', 8),
	(221, '2022_12_26_065440_add_customer_phone_delivery_order', 8),
	(222, '2023_01_23_073808_add_no_jo_jam_joborder', 8),
	(223, '2023_01_25_052242_add_materials23_joborder', 8),
	(224, '2023_01_31_064428_add_total_terbilang_invoice_list', 8),
	(225, '2023_02_25_063515_add_total_terbilang_invoices', 8);
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

-- Dumping data for table peso-odp.pegawais: ~0 rows (approximately)
/*!40000 ALTER TABLE `pegawais` DISABLE KEYS */;
REPLACE INTO `pegawais` (`id`, `nama`, `jabatan`, `created_at`, `updated_at`, `user_id`) VALUES
	(1, 'Junita Dos Santos', 'Admin', '2023-03-11 06:12:27', '2023-03-11 06:12:27', 4),
	(2, 'Fina', 'Admin', '2023-03-11 06:12:40', '2023-03-11 06:12:40', 5);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peso-odp.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
	(1, 'Admin Koko', 'adminkoko@peso.co.id', NULL, '$2y$10$ciNBvUD1JIa3qhAX6F/IpeQvyVV0Ot/SkB0HWy2s9jUn7mJjQR0HC', 'KMMo0YzHLSKtnoJdeKZS1Rg22NM0CkXQvlW5ZDQ2LwRwCV4WyontnsQ6Aa18', '2023-03-11 06:10:59', '2023-03-11 06:10:59', 'admin'),
	(2, 'Meme Ike', 'meme_ike@peso.co.id', NULL, '$2y$10$VohXzz29kV9wyaJ8VtCs6uuhbXeCflJGbOyCBiWCuwix2czbSl2mK', 'tdDlRxdt5fql6xLmtvmlBrvJQxByXuB4n69cK8RLSSh51KOsemF5GkNk6tua', '2023-03-11 06:10:59', '2023-03-11 06:10:59', 'admin'),
	(3, 'Pegawai123', 'pegawai@peso.co.id', NULL, '$2y$10$pSzE/4FL0W21302CkX0PLuuvHvz8L8rHEkog1cK/I.SDvaRWhy6b2', 'fOKXdungLIJ0zI5esJoM5veQBicrW5nXHUgmRTQmZVPgpHWTqUHXuiI95fK4', '2023-03-11 06:10:59', '2023-03-11 06:10:59', 'pegawai'),
	(4, 'Junita Dos Santos', 'junitadossantos@peso.co.id', NULL, '$2y$10$magxuF2vb4tyGXOz/LzZRO8JmHrVWxglTO6slmq8He/GMjts6DEl2', 'Sruz0w8cbVOOUaWYIdVy4ei32ycLAsA04M2myFT6JVNwsBBmdqAAO1WOF3Sn', '2023-03-11 06:12:27', '2023-03-11 06:12:27', 'pegawai'),
	(5, 'Fina', 'fina@peso.co.id', NULL, '$2y$10$ZboJu3QI0wGvQ8L2lOl.mucKu.Q/GEhQcgege/wl3YhowtEXydIsC', '2SEKDOyDj9RJsN81OK1tdFD6qT2Oa0MnMVN5SB2DbpGUGF29bMwbEJ4UXfWT', '2023-03-11 06:12:40', '2023-03-11 06:12:40', 'pegawai');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
