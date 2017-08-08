-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2017 at 12:53 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brisat`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(71, '2014_10_12_000000_create_users_table', 1),
(72, '2017_07_28_022632_create_product_table', 1),
(73, '2017_07_31_193242_create_suppliers_table', 1),
(74, '2017_08_08_014838_create_pesanan_table', 2),
(75, '2017_08_08_024954_create_pengadaan_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE `pengadaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_spk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `nama_supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`id`, `id_spk`, `nama_barang`, `jenis_barang`, `jumlah`, `harga_satuan`, `nama_supplier`, `keperluan`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, '123', 'adhgadhg', 'ahdgadg', 1, 1345, 'Telkom', 'hadghagd', '2017-08-10', '2017-08-07 21:17:25', '2017-08-07 21:17:25'),
(2, '123', 'susu', 'asuasu', 1, 124, 'Telkom', 'adaf', '2017-08-10', '2017-08-07 22:13:56', '2017-08-07 22:13:56'),
(3, '123', 'ayam', 'as', 2, 234, 'Telkom', 'adaf', '2017-08-10', '2017-08-07 22:13:56', '2017-08-07 22:13:56'),
(4, '124', 'Flashdisk', 'storage', 20, 100000, 'Toshiba', 'bisini', '2017-08-15', '2017-08-07 22:18:44', '2017-08-07 22:18:44'),
(5, '124', 'Harddisk', 'storage', 20, 500000, 'Toshiba', 'bisini', '2017-08-15', '2017-08-07 22:18:44', '2017-08-07 22:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `nama_supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_permintaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_request` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_produk`, `type_produk`, `jumlah_produk`, `nama_supplier`, `status_permintaan`, `tanggal_request`, `created_at`, `updated_at`) VALUES
(1, 'Router', 'IUU', 760, 'Samsung', 'Menunggu', '2017-08-01', '2017-08-01 13:14:20', '2017-08-01 13:14:20'),
(3, 'Flashdisk', 'Media', 20, 'Toshiba', 'Menunggu', '2017-08-02', '2017-08-01 21:07:44', '2017-08-01 21:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama_supplier`, `alamat_supplier`, `no_telepon`, `created_at`, `updated_at`) VALUES
(1, 'Telkom', 'Ragunan 12', '725645', '2017-08-01 20:30:03', '2017-08-01 20:30:03'),
(2, 'Toshiba', 'Cilandak', '785649', '2017-08-06 22:55:39', '2017-08-06 22:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$aK.R5DaFo2BwEfAeF0JLouA9EP9xo3JhF4v7iLCzPn3joRMwVulnO', '56jCVAiXQeMTO7W9keZ6ZqQvnzYJh2yPNsYg80Lbq2FQ2BM4Sgnz0aMeENj6', NULL, '2017-07-31 03:50:21', '2017-07-31 03:50:21'),
(2, 'anre', 'anre@gmail.com', '$2y$10$WRQ2PZkJw2R3XhXIkLpUbuqvIqrp9LmSAqcXNYT6yWNx871iUcdii', 'CaZgAqdqNgCUfkJ8IIdoQF8amsVH2Srp5eki1nrGmanFq5P2Qgc9RYiDpCXo', NULL, '2017-08-01 20:56:14', '2017-08-01 20:56:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
