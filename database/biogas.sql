-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 06:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biogas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar_transfer`
--

CREATE TABLE `bayar_transfer` (
  `idTagihan` varchar(15) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `namarek` varchar(30) NOT NULL,
  `jumlah_transfer` int(10) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar_transfer`
--

INSERT INTO `bayar_transfer` (`idTagihan`, `norek`, `namarek`, `jumlah_transfer`, `bukti`) VALUES
('TGH000000000002', '00129390029195', 'Pariono', 900, 'Screenshot_2018-11-21-18-40-324.png'),
('TGH000000000003', '00129390029190', 'Cek autonumeric', 0, 'Screenshot_2018-11-21-18-40-325.png'),
('TGH000000000004', '00129390029190', 'tes 2', 0, 'Screenshot_2018-11-21-18-40-326.png'),
('TGH000000000005', '123', 'Paijo', 0, 'Screenshot_2018-11-21-18-40-327.png'),
('TGH000000000006', '00129390029190', 'Andrean Bagus Mahendra', 0, 'Screenshot_2018-11-21-18-40-328.png'),
('TGH000000000007', '123', 'Andrean Bagus Mahendra', 0, 'Screenshot_2018-11-21-18-40-329.png'),
('TGH000000000008', '123', 'Andrean Bagus Mahendra', 1234, 'Screenshot_2018-11-21-18-40-3210.png'),
('TGH000000000012', '00129390029190', 'Iwan setiawan', 20000, 'Screenshot_2018-11-21-18-40-3211.png'),
('TGH000000000013', '00129390029190', 'Andrean Bagus Mahendra', 20000, 'Screenshot_2018-11-21-18-40-3212.png'),
('TGH000000000017', '00129390029190', 'Andrean Bagus Mahendra', 20000, 'KTP_DEPAN~1.jpg'),
('TGH000000000019', '00129390029190', 'Andrean Bagus Mahendra', 1234, 'P_20171220_182510_BF.jpg'),
('TGH000000000021', '00129390029190', 'Andrean Bagus Mahendra', 20000, 'Sample_bukti.jpg'),
('TGH000000000022', '00129390029190', 'Andrean Bagus Mahendra', 20000, 'Sample_bukti1.jpg'),
('TGH000000000024', '00129390029190', 'Andrean Bagus Mahendra', 23123, 'Sample_bukti2.jpg'),
('TGH000000000025', '00129390029190', 'Andrean Bagus Mahendra', 20000, 'Sample_bukti3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flowtemp`
--

CREATE TABLE `flowtemp` (
  `idUser` varchar(15) NOT NULL,
  `message` int(15) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowtemp`
--

INSERT INTO `flowtemp` (`idUser`, `message`, `tanggal`) VALUES
('040102040001', 2, '02/05/19, 02:08:43'),
('040102040001', 2, '02/05/19, 02:08:43'),
('040102040001', 8, '02/05/19, 02:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `grup`
--

CREATE TABLE `grup` (
  `idGrup` varchar(5) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`idGrup`, `jabatan`) VALUES
('JBT01', 'Administrator'),
('JBT02', 'Kaur Keuangan'),
('JBT03', 'Penyuplai'),
('JBT04', 'Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `idHarga` int(10) NOT NULL,
  `idUser` varchar(15) NOT NULL,
  `harga` int(10) NOT NULL,
  `tanggal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`idHarga`, `idUser`, `harga`, `tanggal`) VALUES
(1, '0101', 5000, '14/11/2018 01:42:11'),
(2, '0201', 3000, '18/11/2018 08:52:19'),
(3, '0201', 5000, '18/11/2018 08:53:04'),
(4, '0201', 2000, '18/11/2018 20:54:35'),
(5, '0201', 5000, '18/11/2018 20:54:47'),
(6, '0101', 3000, '26/11/2018 10:46:31'),
(7, '0101', 5000, '26/11/2018 10:46:51'),
(8, '0101', 2000, '26/11/2018 21:26:13'),
(9, '0101', 5000, '26/11/2018 21:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `kotak_keluar`
--

CREATE TABLE `kotak_keluar` (
  `idPesan` varchar(15) NOT NULL,
  `idPengirim` varchar(15) NOT NULL,
  `idPenerima` varchar(15) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotak_keluar`
--

INSERT INTO `kotak_keluar` (`idPesan`, `idPengirim`, `idPenerima`, `subjek`, `isi`, `tanggal`) VALUES
('SNT000000000001', '0101', '040102040001', 'tes 1', 'tes 1', '28/11/2018 17:13:41'),
('SNT000000000004', '0101', '040102040001', 'tes pesan panjang', 'ini adalah tes untuk mengetahui pesan yang panjang banget deh pokoknya, sampe sampe harus diberi titik nanti pas kalau difitur inbox yang ada di pelanggan', '28/11/2018 17:15:53'),
('SNT000000000005', '0101', '040102040001', 'tes notif', 'tes notif', '28/11/2018 21:11:14'),
('SNT000000000006', '0101', '040102040001', 'tes notif 2', 'tes notif 2', '28/11/2018 21:12:07'),
('SNT000000000007', '0101', '040102040001', 'tes notif 3', 'tes notif 3', '28/11/2018 21:14:07'),
('SNT000000000008', '0101', '040102040001', 'tes notif 4', 'tes notif 4', '28/11/2018 21:14:48'),
('SNT000000000009', '0101', '040102040001', 'tes notif 5', 'tes notif 5', '28/11/2018 21:24:09'),
('SNT000000000010', '0101', '040102040001', 'tes notif 6', 'tes notif 6', '28/11/2018 21:30:30'),
('SNT000000000011', '0101', '040102040001', 'coba pesan panjang banget', 'ini adalah contoh untuk notifikasi jika pesan yang ingin dituliskan panjannnngggg bangggeeettt', '28/11/2018 21:31:18'),
('SNT000000000012', '0101', '040102040001', 'tes notif 7', 'tes notif 7', '28/11/2018 21:58:09'),
('SNT000000000025', '0201', '0101', 'tes utk admin', 'tes utk admin', '01/12/2018 08:46:21'),
('SNT000000000026', '0201', '040102040001', 'cek to user', 'cek cek cek', '01/12/2018 08:49:23'),
('SNT000000000027', '040102040001', '0201', 'oke bos thx', 'oke oke oke', '01/12/2018 08:53:34'),
('SNT000000000028', '0101', '040102040001', 'pesan cinta dari admin', 'ini adalah pesan cinta dari admin', '02/12/2018 21:34:56'),
('SNT000000000029', '0101', '040102040001', 'cek pesan admin 2', 'cek pesan admin 2', '02/12/2018 21:36:08'),
('SNT000000000030', '0101', '040102040001', 'Kekurangan pembayaran', 'Pembayaran anda kurang harap untuk datang ke kantor balai desa untuk melakukan pelunasan', '03/12/2018 12:00:47'),
('SNT000000000031', '0201', '040102040001', 'Kelebihan pembayaran', 'Mohon maaf untuk pembayaran dengan metode transfer, harap sesuai dengan nominal yang tertera, untuk kembalian pembayaran, mohon untuk datang ke balai desa, terima kasih', '21/01/2019 21:02:52'),
('SNT000000000032', '0201', '040102040001', 'Kelebihan pembayaran', 'Mohon maaf, untuk pembayaran biogas anda melebihi nominal yang tertera, mohon untuk mengambil kelebihan pembayaran di balai desa, terima kasih', '21/01/2019 21:19:10'),
('SNT000000000033', '040102040001', '0201', 'Hai bang', 'Cuma ngetes pesan ini doang bos.. xoxo', '01/05/2019 14:11:24'),
('SNT000000000034', '0201', '040102040001', 'Kelebihan pembayaran', 'Mohon untuk datang ke balai desa untuk mengambil kelebihan pembayaran', '02/05/2019 14:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `kotak_masuk`
--

CREATE TABLE `kotak_masuk` (
  `idPesan` varchar(15) NOT NULL,
  `idPenerima` varchar(15) NOT NULL,
  `idPengirim` varchar(15) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `status` enum('baru','lama') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotak_masuk`
--

INSERT INTO `kotak_masuk` (`idPesan`, `idPenerima`, `idPengirim`, `subjek`, `isi`, `tanggal`, `status`) VALUES
('IBX000000000001', '040102040001', '0101', 'tes 1', 'tes 1', '28/11/2018 17:13:41', 'lama'),
('IBX000000000003', '0201', '0101', 'tes pesan panjang', 'ini adalah tes untuk pesan panjjjjjjaaaaaaaannnggggg bangeeeettttsssssss deeehhhhh', '28/11/2018 17:14:20', 'lama'),
('IBX000000000004', '040102040001', '0101', 'tes pesan panjang', 'ini adalah tes untuk mengetahui pesan yang panjang banget deh pokoknya, sampe sampe harus diberi titik nanti pas kalau difitur inbox yang ada di pelanggan', '28/11/2018 17:15:53', 'lama'),
('IBX000000000005', '040102040001', '0101', 'tes notif', 'tes notif', '28/11/2018 21:11:14', 'lama'),
('IBX000000000006', '040102040001', '0101', 'tes notif 2', 'tes notif 2', '28/11/2018 21:12:07', 'lama'),
('IBX000000000007', '040102040001', '0101', 'tes notif 3', 'tes notif 3', '28/11/2018 21:14:07', 'lama'),
('IBX000000000008', '040102040001', '0101', 'tes notif 4', 'tes notif 4', '28/11/2018 21:14:48', 'lama'),
('IBX000000000009', '040102040001', '0101', 'tes notif 5', 'tes notif 5', '28/11/2018 21:24:09', 'lama'),
('IBX000000000010', '040102040001', '0101', 'tes notif 6', 'tes notif 6', '28/11/2018 21:30:30', 'lama'),
('IBX000000000011', '040102040001', '0101', 'coba pesan panjang banget', 'ini adalah contoh untuk notifikasi jika pesan yang ingin dituliskan panjannnngggg bangggeeettt', '28/11/2018 21:31:18', 'lama'),
('IBX000000000012', '040102040001', '0101', 'tes notif 7', 'tes notif 7', '28/11/2018 21:58:09', 'lama'),
('IBX000000000015', '040102040001', '0201', 'cek notif 3', 'cek notif 3', '28/11/2018 22:06:55', 'lama'),
('IBX000000000016', '040102040001', '0201', 'cek sekali lagi', 'cek notif sekali lagi', '28/11/2018 22:11:12', 'lama'),
('IBX000000000017', '040102040001', '0201', 'sekali lagi lagi', 'notif sekali lagi', '28/11/2018 22:11:32', 'lama'),
('IBX000000000018', '040102040001', '0201', 'tes notif 8', 'tes notif 9', '28/11/2018 22:30:55', 'lama'),
('IBX000000000019', '040102040001', '0201', 'tes notif dari kaur keuangan', 'isi dari tes notif dari kaur keuangan', '29/11/2018 00:00:50', 'lama'),
('IBX000000000020', '040102040001', '0201', 'tes notif dari kaur keuangan 2', 'tes notif dari kaur keuangan 2', '30/11/2018 20:20:51', 'lama'),
('IBX000000000021', '040102040001', '0201', 'tes 2', 'tes 2', '30/11/2018 20:28:38', 'lama'),
('IBX000000000022', '040102040001', '0201', 'tes 3', 'tes 3', '30/11/2018 20:37:04', 'lama'),
('IBX000000000023', '040102040001', '0201', 'tes 4', 'tes 4', '30/11/2018 20:37:28', 'lama'),
('IBX000000000024', '0101', '0201', 'tes utk admin', 'pesan cinta untuk admin', '01/12/2018 08:37:28', 'lama'),
('IBX000000000025', '0101', '0201', 'tes utk admin', 'tes utk admin', '01/12/2018 08:46:21', 'lama'),
('IBX000000000026', '040102040001', '0201', 'cek to user', 'cek cek cek', '01/12/2018 08:49:23', 'lama'),
('IBX000000000027', '0201', '040102040001', 'oke bos thx', 'oke oke oke', '01/12/2018 08:53:34', 'lama'),
('IBX000000000028', '040102040001', '0101', 'pesan cinta dari admin', 'ini adalah pesan cinta dari admin', '02/12/2018 21:34:56', 'lama'),
('IBX000000000029', '040102040001', '0101', 'cek pesan admin 2', 'cek pesan admin 2', '02/12/2018 21:36:08', 'lama'),
('IBX000000000030', '040102040001', '0101', 'Kekurangan pembayaran', 'Pembayaran anda kurang harap untuk datang ke kantor balai desa untuk melakukan pelunasan', '03/12/2018 12:00:47', 'lama'),
('IBX000000000031', '040102040001', '0201', 'Kelebihan pembayaran', 'Mohon maaf untuk pembayaran dengan metode transfer, harap sesuai dengan nominal yang tertera, untuk kembalian pembayaran, mohon untuk datang ke balai desa, terima kasih', '21/01/2019 21:02:52', 'lama'),
('IBX000000000032', '040102040001', '0201', 'Kelebihan pembayaran', 'Mohon maaf, untuk pembayaran biogas anda melebihi nominal yang tertera, mohon untuk mengambil kelebihan pembayaran di balai desa, terima kasih', '21/01/2019 21:19:10', 'lama'),
('IBX000000000033', '0201', '040102040001', 'Hai bang', 'Cuma ngetes pesan ini doang bos.. xoxo', '01/05/2019 14:11:24', 'lama'),
('IBX000000000034', '040102040001', '0201', 'Kelebihan pembayaran', 'Mohon untuk datang ke balai desa untuk mengambil kelebihan pembayaran', '02/05/2019 14:13:06', 'lama');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idBayar` varchar(15) NOT NULL,
  `idUser` varchar(15) NOT NULL,
  `jumlah_bayar` int(8) NOT NULL,
  `daya` decimal(8,4) NOT NULL,
  `tanggal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idBayar`, `idUser`, `jumlah_bayar`, `daya`, `tanggal`) VALUES
('BYR0000000001', '040102040001', 345, '0.0690', '26/11/2018 14:06:30'),
('BYR0000000002', '040102040001', 345, '0.0690', '27/11/2018 19:05:39'),
('BYR0000000003', '040102040001', 345, '0.0690', '27/06/2018 19:06:51'),
('BYR0000000004', '040102040001', 345, '0.0690', '29/11/2018 07:40:06'),
('BYR0000000005', '040102040001', 345, '0.0690', '29/11/2018 07:59:21'),
('BYR0000000006', '040102040001', 345, '0.0690', '29/12/2018 08:00:18'),
('BYR0000000007', '040102040001', 345, '0.0690', '30/11/2018 19:44:19'),
('BYR0000000008', '040102040001', 345, '0.0690', '30/11/2018 19:47:58'),
('BYR0000000009', '040102040001', 345, '0.0690', '30/11/2018 22:03:33'),
('BYR0000000010', '040102040001', 345, '0.0690', '30/11/2018 22:16:03'),
('BYR0000000011', '040102040001', 345, '0.0690', '30/11/2018 22:22:36'),
('BYR0000000012', '040102040001', 345, '0.0690', '30/11/2018 22:30:38'),
('BYR0000000013', '040102040001', 345, '0.0690', '01/12/2018 07:09:48'),
('BYR0000000014', '040103050002', 0, '0.0000', '01/12/2018 07:21:29'),
('BYR0000000015', '040102040001', 1020, '0.2040', '02/12/2018 20:38:38'),
('BYR0000000016', '040102040001', 1020, '0.2040', '02/12/2018 20:40:52'),
('BYR0000000017', '040102040001', 1030, '0.2060', '02/12/2018 21:08:23'),
('BYR0000000018', '040102040001', 0, '0.0000', '02/12/2018 21:12:14'),
('BYR0000000019', '040102040001', 293, '0.0585', '02/12/2018 21:19:06'),
('BYR0000000020', '040102040001', 1015, '0.2030', '03/12/2018 11:57:48'),
('BYR0000000021', '040102040001', 115, '0.0230', '03/12/2018 12:01:18'),
('BYR0000000022', '040102040001', 85, '0.0170', '04/12/2018 13:23:14'),
('BYR0000000023', '040102040001', 0, '0.0000', '07/12/2018 21:26:03'),
('BYR0000000024', '040102040001', 32, '0.0063', '15/01/2019 10:51:59'),
('BYR0000000025', '040102040001', 1508, '0.3017', '21/01/2019 21:03:24'),
('BYR0000000026', '040102040001', 5003, '1.0007', '21/01/2019 21:19:41'),
('BYR0000000027', '040102040001', 367, '0.0734', '27/04/2019 21:08:40'),
('BYR0000000028', '040102040001', 257, '0.0515', '01/05/2019 14:09:16'),
('BYR0000000029', '040102040001', 2508, '0.5015', '02/05/2019 14:13:40'),
('BYR0000000030', '040102040001', 2508, '0.5015', '02/05/2019 14:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `status_bayar`
--

CREATE TABLE `status_bayar` (
  `idUser` varchar(15) NOT NULL,
  `status` enum('terbuka','terkunci') NOT NULL,
  `metode` enum('tunai','transfer','-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_bayar`
--

INSERT INTO `status_bayar` (`idUser`, `status`, `metode`) VALUES
('040102040001', 'terbuka', '-'),
('040103050002', 'terbuka', '-'),
('040103050003', 'terbuka', '-'),
('040203050003', 'terbuka', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `idTagihan` varchar(15) NOT NULL,
  `idUser` varchar(15) NOT NULL,
  `jumlah_tagihan` int(8) NOT NULL,
  `daya` decimal(8,4) NOT NULL,
  `status` enum('belum_lunas','lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`idTagihan`, `idUser`, `jumlah_tagihan`, `daya`, `status`) VALUES
('TGH000000000001', '040102040001', 345, '0.0690', 'lunas'),
('TGH000000000002', '040103050002', 0, '0.0000', 'lunas'),
('TGH000000000003', '040102040001', 345, '0.0690', 'lunas'),
('TGH000000000004', '040102040001', 345, '0.0690', 'lunas'),
('TGH000000000005', '040102040001', 345, '0.0690', 'lunas'),
('TGH000000000006', '040102040001', 345, '0.0690', 'lunas'),
('TGH000000000007', '040102040001', 345, '0.0690', 'lunas'),
('TGH000000000008', '040102040001', 345, '0.0690', 'lunas'),
('TGH000000000009', '040102040001', 1020, '0.2040', 'lunas'),
('TGH000000000010', '040102040001', 1020, '0.2040', 'lunas'),
('TGH000000000011', '040102040001', 1030, '0.2060', 'lunas'),
('TGH000000000012', '040102040001', 0, '0.0000', 'lunas'),
('TGH000000000013', '040102040001', 293, '0.0585', 'lunas'),
('TGH000000000014', '040102040001', 1015, '0.2030', 'lunas'),
('TGH000000000015', '040102040001', 1015, '0.2030', 'lunas'),
('TGH000000000016', '040102040001', 1015, '0.2030', 'lunas'),
('TGH000000000017', '040102040001', 115, '0.0230', 'lunas'),
('TGH000000000018', '040102040001', 85, '0.0170', 'lunas'),
('TGH000000000019', '040102040001', 0, '0.0000', 'lunas'),
('TGH000000000020', '040102040001', 32, '0.0063', 'lunas'),
('TGH000000000021', '040102040001', 1508, '0.3017', 'lunas'),
('TGH000000000022', '040102040001', 5003, '1.0007', 'lunas'),
('TGH000000000023', '040102040001', 367, '0.0734', 'lunas'),
('TGH000000000024', '040102040001', 257, '0.0515', 'lunas'),
('TGH000000000025', '040102040001', 2508, '0.5015', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` varchar(15) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idGrup` varchar(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `nik`, `nama`, `password`, `idGrup`, `alamat`, `jenis_kelamin`, `email`, `telepon`, `foto`) VALUES
('0101', '3516031710950010', 'Andrean Bagus Mahendra', 'db6f6da1ce3437f3d38eb05a63402d41', 'JBT01', 'Jalan Mawar RT 2 RW 4, Dusun Claket', 'Laki-Laki', 'mahentha.mahe@gmail.com', '+6281515333582', 'jodipan_kotak.jpg'),
('0201', '3516031710950002', 'Tholib', 'db6f6da1ce3437f3d38eb05a63402d41', 'JBT02', 'Jalan Mawar RT 2 RW 4, Dusun Claket', 'Laki-Laki', 'dwirezaam@gmail.com', '+6281515333582', 'profil4.png'),
('03010204', '3516031710950003', 'Kasman', 'db6f6da1ce3437f3d38eb05a63402d41', 'JBT03', 'Jalan Mawar RT 2 RW 4, Dusun Claket', 'Laki-Laki', 'riyamahendra74@gmail.com', '+6285645386563', 'profil3.png'),
('040102040001', '3516031710950004', 'Eko Indarwanto', 'db6f6da1ce3437f3d38eb05a63402d41', 'JBT04', 'Jalan Mawar RT 2 RW 4, Dusun Claket', 'Laki-Laki', 'ekoindarwanto@gmail.com', '+6285741517192', 'profil2.png'),
('04010305', '3516031710950001', 'Paiman', '881d2bef3c2cc45bd99358d6a7448210', 'JBT03', 'Jalan Mawar RT 3 RW 5, Dusun Claket', 'Laki-Laki', 'paiman@gmail.com', '082738920283', 'profil1.png'),
('040103050002', '351603171095000A', 'Pariono', 'db6f6da1ce3437f3d38eb05a63402d41', 'JBT04', 'Jalan Mawar RT 3 RW 5, Dusun Claket', 'Laki-Laki', 'pari@gmailcom', '029', 'profil3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar_transfer`
--
ALTER TABLE `bayar_transfer`
  ADD PRIMARY KEY (`idTagihan`);

--
-- Indexes for table `flowtemp`
--
ALTER TABLE `flowtemp`
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`idGrup`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`idHarga`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `kotak_keluar`
--
ALTER TABLE `kotak_keluar`
  ADD PRIMARY KEY (`idPesan`),
  ADD KEY `idPengirim` (`idPengirim`);

--
-- Indexes for table `kotak_masuk`
--
ALTER TABLE `kotak_masuk`
  ADD PRIMARY KEY (`idPesan`),
  ADD KEY `idPenerima` (`idPenerima`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idBayar`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `status_bayar`
--
ALTER TABLE `status_bayar`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`idTagihan`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idGrup` (`idGrup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `idHarga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bayar_transfer`
--
ALTER TABLE `bayar_transfer`
  ADD CONSTRAINT `bayar_transfer_ibfk_1` FOREIGN KEY (`idTagihan`) REFERENCES `tagihan` (`idTagihan`);

--
-- Constraints for table `flowtemp`
--
ALTER TABLE `flowtemp`
  ADD CONSTRAINT `flowtemp_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `kotak_keluar`
--
ALTER TABLE `kotak_keluar`
  ADD CONSTRAINT `kotak_keluar_ibfk_1` FOREIGN KEY (`idPengirim`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `kotak_masuk`
--
ALTER TABLE `kotak_masuk`
  ADD CONSTRAINT `kotak_masuk_ibfk_1` FOREIGN KEY (`idPenerima`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idGrup`) REFERENCES `grup` (`idGrup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
