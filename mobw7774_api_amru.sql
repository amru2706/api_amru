-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2024 at 12:50 AM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobw7774_api_amru`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tempat_kejadian` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `kategori`, `deskripsi`, `tempat_kejadian`, `tanggal`, `status`) VALUES
(7, 'Pemadam Kebakaran', 'Cincin jatuh di selokan', 'Jl. Sdn inpres Cakung jakarta timur', '2024-07-10 03:33:42', 'Terkirim'),
(8, 'Ambulance', 'Kecelakaan Tunggal', 'Jl. Duren Sawit rt 03/09 Jakarta timur', '2024-07-10 13:56:43', 'Terkirim'),
(9, 'Polisi', 'Perselisihan', 'Jl. Pondok Kelapa rt 02/03 Jakarta timur', '2024-07-10 14:24:47', 'Terkirim'),
(10, 'Pemadam Kebakaran', 'Kebakaran Kios', 'Jl. pasar jatinegara rt 05/06 Jakarta timur', '2024-07-11 01:47:18', 'Terkirim');

-- --------------------------------------------------------

--
-- Table structure for table `profileinstansi`
--

CREATE TABLE `profileinstansi` (
  `id` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kantor` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `call_center` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profileinstansi`
--

INSERT INTO `profileinstansi` (`id`, `nama_instansi`, `email`, `kantor`, `alamat`, `call_center`) VALUES
(1, 'Pemadam Kebakaran', 'damkardki@jakarta.go.id', 'Kantor Pemadam Kebakaran', 'Jl.Pondok Kopi 6 Kel.Malaka Sari,Kec.Duren Sawit Kota Jakarta Timur 13460,', '0216344554'),
(2, 'Polisi', 'ppid@polri.go.id', 'Kantor Polisi', 'Jl. Jenderal Sudirman No.Kav. 55, Senayan, Kec.Kby.Baru,Kota Jakarta Selatan,Daerah Khusus Ibukota Jakarta 12190', '0215234074'),
(3, 'Ambulance', 'rsijpk@rsijpondokkopi.co.id ', 'Kantor Ambulance', 'Jl.Pondok Kopi II,RT.2/RW.1, Pd.Kopi,Kec.Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13460', '02129809000'),
(4, 'Dishub', 'DishubJaktim@go.id', 'Dishub Jakarta timur', 'Jl. Pegangsaan raya 35b Jakarta Timu', '0218843423');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'amru', 'e5b80740f36ec400e906d8fd44be191625513f9504c34f4291a11c9eed8b1529', '2024-07-02 23:46:18'),
(2, 'sepi', 'd00d092c4767c3bcb341b704a9eb5b5f6ce5ec6c8220bc7e8a5409c9f25781a7', '2024-07-09 20:54:04'),
(3, 'aca', '$2y$10$YCTEZqnYUQR958eDnS7FFeiUutHE0j84NQWQeOX6ygxY.EnZN0G3S', '2024-07-11 14:05:14'),
(4, 'sapi', '$2y$10$PzyZHa8HFcdRKKBhi0v1AethkfSXYK5r4Kv.HbF3iaeG/Om9io0WG', '2024-07-11 14:09:59'),
(5, 'eca', '$2y$10$xZbwvEEfhLBRYcCcYT1Cke/M69FMFmyvscaJm2Zl1gif335cenBtC', '2024-07-11 14:29:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileinstansi`
--
ALTER TABLE `profileinstansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profileinstansi`
--
ALTER TABLE `profileinstansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
