-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 06:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'chrysnaadmin123', '-IpGGBuKkTvEcdf_qMFtA-SPAu7fSH8b', '$2y$13$I3vYDO8Yrxl54hHtXaRAduJCxw8RVvAsIz/lrm79k1b0JydBqu.ue', NULL, 'chrysnaardy2001@gmail.com', 10, 1618050375, 1618050375, 'YuI68W7iEud7kuZKkpeSGIc1gqyvr-kQ_1618050375');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` int(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `kategori`, `deskripsi`, `gambar`) VALUES
(5, 'Spring Bed 4x4', 2000000, 'Kamar Tidur', 'ini adalah deskripsi testing', 'Spring Bed 4x4.png'),
(6, 'Meja', 80880, 'Ruang Tamu', 'ini adalah deskripsi testing', 'Meja.png'),
(7, 'Pot Bunga', 3000000, 'Dekorasi', 'aweawewaewa', 'Pot Bunga.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `category_id` int(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `timestamp`, `action`, `user`) VALUES
(8, '2021-04-16 05:22:15', 'Create Pot Bunga Ruang Tamu', 'chrysnaadmin123'),
(9, '2021-04-16 05:23:27', 'Update Pot Bunga Ruang Tamu Updated', 'chrysnaadmin123'),
(10, '2021-04-16 05:23:50', 'Delete Pot Bunga Ruang Tamu Updated', 'chrysnaadmin123'),
(11, '2021-04-23 04:28:49', 'Delete Spring Bed', 'chrysnaadmin123'),
(12, '2021-04-23 04:29:02', 'Create Spring Bed 4x4', 'chrysnaadmin123'),
(13, '2021-04-23 04:29:19', 'Create Meja', 'chrysnaadmin123'),
(14, '2021-04-23 04:29:46', 'Create Pot Bunga', 'chrysnaadmin123');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1618048052),
('m130524_201442_init', 1618048057),
('m190124_110200_add_verification_token_column_to_user_table', 1618048057);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'chrysnaadmin123', '-IpGGBuKkTvEcdf_qMFtA-SPAu7fSH8b', '$2y$13$I3vYDO8Yrxl54hHtXaRAduJCxw8RVvAsIz/lrm79k1b0JydBqu.ue', NULL, 'chrysnaardy2001@gmail.com', 10, 1618050375, 1618050375, 'YuI68W7iEud7kuZKkpeSGIc1gqyvr-kQ_1618050375'),
(2, 'chrysnauser123', '4_1x3vB0gVkdcUkvN17yoEuItT8YDLVx', '$2y$13$RBZy4HDMdiwbFuzxbDkwTOol8xdPsYpQ3pfYgOrHrCeXIHc4Lshru', NULL, 'chrysna@gmail.com', 10, 1618062481, 1618062481, 'jYG-Qy4XzX-G8Wq7nmZffv6OZLmNh1y9_1618062481'),
(3, 'user123', 'DimPjtDycd-Qe_yQAeQNFneJRWmD9g3W', '$2y$13$HCXGnplab/EfEdmqz./1q./hZyY.eOyG4wHIpyb/mKOeB5pwRbLZe', NULL, 'chrysna000@gmail.com', 10, 1618541843, 1618541843, 'U_aPf2mCwAINYEzMVjc-daPteTyAzIOJ_1618541843');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
