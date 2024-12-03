-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 04:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_griyaindah`
--

-- --------------------------------------------------------

--
-- Table structure for table `historypenghuni`
--

CREATE TABLE `historypenghuni` (
  `idhistoryPenghuni` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `Penghuni_idPenghuni` int(11) NOT NULL,
  `rumah_idrumah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `historypenghuni`
--

INSERT INTO `historypenghuni` (`idhistoryPenghuni`, `tanggal_mulai`, `tanggal_berakhir`, `Penghuni_idPenghuni`, `rumah_idrumah`) VALUES
(1, '2024-11-01', '2024-12-02', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idPembayaran` int(11) NOT NULL,
  `jenis_iuran` enum('kebersihan','iuran satpam') NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bulan bayar` varchar(12) NOT NULL,
  `status` enum('lunas','belum') NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `Penghuni_idPenghuni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idPembayaran`, `jenis_iuran`, `jumlah`, `bulan bayar`, `status`, `create_at`, `update_at`, `Penghuni_idPenghuni`) VALUES
(1, 'kebersihan', 15000, 'desember', 'lunas', '2024-12-02 04:14:50', '2024-12-02 04:14:50', 10),
(3, 'iuran satpam', 100000, 'desember', 'lunas', '2024-12-02 04:26:07', '2024-12-02 04:26:07', 10),
(4, 'kebersihan', 15000, 'desember', 'lunas', '2024-12-02 05:25:42', '2024-12-02 05:25:42', 2),
(5, 'iuran satpam', 100000, 'desember', 'belum', '2024-12-02 05:25:42', '2024-12-02 05:25:42', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `idpengeluaran` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `kategori` enum('perbaikan jalan','selokan','gaji satpam','token satpam') NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `idpenghuni` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `status_penghuni` enum('kontrak','tetap') NOT NULL,
  `no_telp` varchar(45) NOT NULL,
  `status_menikah` enum('sudah','belum') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`idpenghuni`, `nama`, `foto_ktp`, `status_penghuni`, `no_telp`, `status_menikah`, `created_at`, `updated_at`) VALUES
(2, 'Ika Maria Daniati, S.kom', 'd', 'kontrak', '5', 'belum', '2024-11-27 05:45:02', '2024-11-27 05:45:02'),
(6, 'Ricky Agung Sumiranto, S.kom', 'ktp_files/DmXHAP8xXANZwZGK9PF6wZhSfEPN7NBGiLzateFk.pdf', 'kontrak', '2', 'sudah', '2024-11-28 14:44:47', '2024-11-28 14:44:47'),
(10, 'Agnia Haque', 'ktp_files/xFG87dF0uIAkdBlV2XCZ44ZW0LmkcRSP4e4THBgE.pdf', 'tetap', '09', 'sudah', '2024-11-29 04:25:20', '2024-11-29 04:25:20'),
(11, 'Xena putri ayu cantika sari', 'ktp_files/11cJeubFYeNYtCJV7olQv8yq1DC41hSPInvIjkbv.pdf', 'kontrak', '123', 'belum', '2024-11-30 08:41:44', '2024-11-30 08:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `rekapbulan`
--

CREATE TABLE `rekapbulan` (
  `idrekapBulan` int(11) NOT NULL,
  `bulan` varchar(45) NOT NULL,
  `total_pemasukan` int(11) NOT NULL,
  `total_pengeluaran` int(11) NOT NULL,
  `sisa_saldo` int(11) NOT NULL,
  `Pembayaran_idPembayaran` int(11) NOT NULL,
  `pengeluaran_idpengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `idrumah` int(11) NOT NULL,
  `no_rumah` varchar(45) NOT NULL,
  `status` enum('dihuni','tidak dihuni') NOT NULL,
  `create_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `penghuni_idpenghuni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`idrumah`, `no_rumah`, `status`, `create_at`, `updated_at`, `penghuni_idpenghuni`) VALUES
(1, 'T35', 'dihuni', '2024-11-27 05:45:27', '2024-11-27 05:45:27', 2),
(2, 'T12', 'tidak dihuni', '2024-12-02 04:13:47', '2024-12-02 04:13:47', 10),
(4, 'A15', 'tidak dihuni', '2024-12-02 08:21:08', '2024-12-02 08:21:08', NULL),
(5, 'S04', 'tidak dihuni', '2024-12-02 08:21:20', '2024-12-02 08:21:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historypenghuni`
--
ALTER TABLE `historypenghuni`
  ADD PRIMARY KEY (`idhistoryPenghuni`),
  ADD UNIQUE KEY `idhistoryPenghuni_UNIQUE` (`idhistoryPenghuni`),
  ADD KEY `fk_historyPenghuni_Penghuni1` (`Penghuni_idPenghuni`),
  ADD KEY `fk_historypenghuni_rumah1` (`rumah_idrumah`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPembayaran`),
  ADD UNIQUE KEY `idPembayaran_UNIQUE` (`idPembayaran`),
  ADD KEY `fk_Pembayaran_Penghuni1` (`Penghuni_idPenghuni`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`idpengeluaran`),
  ADD UNIQUE KEY `idpengeluaran_UNIQUE` (`idpengeluaran`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`idpenghuni`),
  ADD UNIQUE KEY `idpenghuni_UNIQUE` (`idpenghuni`);

--
-- Indexes for table `rekapbulan`
--
ALTER TABLE `rekapbulan`
  ADD PRIMARY KEY (`idrekapBulan`),
  ADD UNIQUE KEY `idrekapBulan_UNIQUE` (`idrekapBulan`),
  ADD KEY `fk_rekapBulan_Pembayaran1` (`Pembayaran_idPembayaran`),
  ADD KEY `fk_rekapBulan_pengeluaran1` (`pengeluaran_idpengeluaran`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`idrumah`),
  ADD KEY `fk_rumah_penghuni1` (`penghuni_idpenghuni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historypenghuni`
--
ALTER TABLE `historypenghuni`
  MODIFY `idhistoryPenghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `idpengeluaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `idpenghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rekapbulan`
--
ALTER TABLE `rekapbulan`
  MODIFY `idrekapBulan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `idrumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historypenghuni`
--
ALTER TABLE `historypenghuni`
  ADD CONSTRAINT `fk_historyPenghuni_Penghuni1` FOREIGN KEY (`Penghuni_idPenghuni`) REFERENCES `penghuni` (`idpenghuni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_historypenghuni_rumah1` FOREIGN KEY (`rumah_idrumah`) REFERENCES `rumah` (`idrumah`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_Pembayaran_Penghuni1` FOREIGN KEY (`Penghuni_idPenghuni`) REFERENCES `penghuni` (`idpenghuni`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rekapbulan`
--
ALTER TABLE `rekapbulan`
  ADD CONSTRAINT `fk_rekapBulan_Pembayaran1` FOREIGN KEY (`Pembayaran_idPembayaran`) REFERENCES `pembayaran` (`idPembayaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rekapBulan_pengeluaran1` FOREIGN KEY (`pengeluaran_idpengeluaran`) REFERENCES `pengeluaran` (`idpengeluaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rumah`
--
ALTER TABLE `rumah`
  ADD CONSTRAINT `fk_rumah_penghuni1` FOREIGN KEY (`penghuni_idpenghuni`) REFERENCES `penghuni` (`idpenghuni`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
