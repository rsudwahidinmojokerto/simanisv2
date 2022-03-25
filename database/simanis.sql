-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 07:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simanis`
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
-- Table structure for table `m_akses_user`
--

CREATE TABLE `m_akses_user` (
  `id_akses` varchar(5) NOT NULL,
  `nama_akses` varchar(10) NOT NULL,
  `hak_akses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_aplicare`
--

CREATE TABLE `m_aplicare` (
  `id_aplicare` int(3) NOT NULL,
  `koderuang` varchar(10) DEFAULT NULL,
  `namaruang` varchar(150) DEFAULT NULL,
  `id_kelas` varchar(6) NOT NULL,
  `kapasitas` int(4) DEFAULT NULL,
  `tersedia` int(4) DEFAULT NULL,
  `tersediapria` int(4) DEFAULT NULL,
  `tersediawanita` int(4) DEFAULT NULL,
  `tersediapriawanita` int(4) DEFAULT NULL,
  `update_terakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_aplicare`
--

INSERT INTO `m_aplicare` (`id_aplicare`, `koderuang`, `namaruang`, `id_kelas`, `kapasitas`, `tersedia`, `tersediapria`, `tersediawanita`, `tersediapriawanita`, `update_terakhir`) VALUES
(1, 'RU001', 'TRIBHUWANA-VVIP', 'KL001', 4, 2, 0, 0, 0, '2022-03-16 10:32:14'),
(2, 'RU001', 'TRIBHUWANA-VIP', 'KL002', 10, 3, 0, 0, 0, '2022-03-17 08:26:32'),
(3, 'RU002', 'RADEN WIJAYA-VIP', 'KL002', 7, 6, 0, 0, 0, '2022-03-16 11:02:40'),
(4, 'RU002', 'RADEN WIJAYA-KL1', 'KL004', 12, 12, 0, 0, 0, '2022-03-16 11:02:43'),
(5, 'RU002', 'RADEN WIJAYA-ISO', 'KL015', 4, 4, 0, 0, 0, '2022-03-16 11:02:47'),
(6, 'RU003', 'KENCONO WUNGU-KL1', 'KL004', 30, 5, 0, 0, 0, '2022-03-19 12:49:49'),
(7, 'RU008', 'GAYATRI-KL1', 'KL004', 2, 2, 0, 0, 0, '2022-03-01 08:11:03'),
(8, 'RU008', 'GAYATRI-KL2', 'KL005', 2, 2, 0, 0, 0, '2022-03-14 10:37:57'),
(9, 'RU008', 'GAYATRI-KL3', 'KL006', 15, 10, 0, 0, 0, '2022-03-18 14:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `m_bed`
--

CREATE TABLE `m_bed` (
  `id_bed` varchar(15) NOT NULL,
  `id_ruang` varchar(6) NOT NULL,
  `id_kelas` varchar(6) NOT NULL,
  `nama_bed` varchar(35) NOT NULL,
  `status` enum('kosong','terisi','perbaikan','siapkrs','siapmrs') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bed`
--

INSERT INTO `m_bed` (`id_bed`, `id_ruang`, `id_kelas`, `nama_bed`, `status`) VALUES
('BD001001001', 'RU001', 'KL001', 'TRIBHUWANA-VVIP-01', 'terisi'),
('BD001001002', 'RU001', 'KL001', 'TRIBHUWANA-VVIP-02', 'kosong'),
('BD001001003', 'RU001', 'KL001', 'TRIBHUWANA-VVIP-03', 'terisi'),
('BD001001004', 'RU001', 'KL001', 'TRIBHUWANA-VVIP-04', 'terisi'),
('BD001002001', 'RU001', 'KL002', 'TRIBHUWANA-VIP-01', 'terisi'),
('BD001002002', 'RU001', 'KL002', 'TRIBHUWANA-VIP-02', 'terisi'),
('BD001002003', 'RU001', 'KL002', 'TRIBHUWANA-VIP-03', 'terisi'),
('BD001002004', 'RU001', 'KL002', 'TRIBHUWANA-VIP-04', 'terisi'),
('BD001002005', 'RU001', 'KL002', 'TRIBHUWANA-VIP-05', 'terisi'),
('BD001002006', 'RU001', 'KL002', 'TRIBHUWANA-VIP-06', 'terisi'),
('BD001002007', 'RU001', 'KL002', 'TRIBHUWANA-VIP-07', 'terisi'),
('BD001002008', 'RU001', 'KL002', 'TRIBHUWANA-VIP-08', 'terisi'),
('BD001002009', 'RU001', 'KL002', 'TRIBHUWANA-VIP-09', 'terisi'),
('BD001002010', 'RU001', 'KL002', 'TRIBHUWANA-VIP-10', 'terisi'),
('BD002002001', 'RU002', 'KL002', 'RADEN WIJAYA-VIP-01', 'kosong'),
('BD002002002', 'RU002', 'KL002', 'RADEN WIJAYA-VIP-02', 'kosong'),
('BD002002003', 'RU002', 'KL002', 'RADEN WIJAYA-VIP-03', 'kosong'),
('BD002002004', 'RU002', 'KL002', 'RADEN WIJAYA-VIP-04', 'kosong'),
('BD002002005', 'RU002', 'KL002', 'RADEN WIJAYA-VIP-05', 'kosong'),
('BD002002006', 'RU002', 'KL002', 'RADEN WIJAYA-VIP-06', 'kosong'),
('BD002002007', 'RU002', 'KL002', 'RADEN WIJAYA-VIP-07', 'terisi'),
('BD002004001', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-01', 'kosong'),
('BD002004002', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-02', 'kosong'),
('BD002004003', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-03', 'kosong'),
('BD002004004', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-04', 'kosong'),
('BD002004005', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-05', 'kosong'),
('BD002004006', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-06', 'kosong'),
('BD002004007', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-07', 'kosong'),
('BD002004008', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-08', 'kosong'),
('BD002004009', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-09', 'kosong'),
('BD002004010', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-10', 'kosong'),
('BD002004011', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-11', 'kosong'),
('BD002004012', 'RU002', 'KL004', 'RADEN WIJAYA-KL1-12', 'kosong'),
('BD002015001', 'RU002', 'KL015', 'RADEN WIJAYA-ISO-01', 'kosong'),
('BD002015002', 'RU002', 'KL015', 'RADEN WIJAYA-ISO-02', 'kosong'),
('BD002015003', 'RU002', 'KL015', 'RADEN WIJAYA-ISO-03', 'kosong'),
('BD002015004', 'RU002', 'KL015', 'RADEN WIJAYA-ISO-04', 'kosong'),
('BD003004001', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-01', 'kosong'),
('BD003004002', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-02', 'kosong'),
('BD003004003', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-03', 'kosong'),
('BD003004004', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-04', 'kosong'),
('BD003004005', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-05', 'kosong'),
('BD003004006', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-06', 'kosong'),
('BD003004007', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-07', 'terisi'),
('BD003004008', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-08', 'kosong'),
('BD003004009', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-09', 'kosong'),
('BD003004010', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-10', 'kosong'),
('BD003004011', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-11', 'kosong'),
('BD003004012', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-12', 'kosong'),
('BD003004013', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-13', 'kosong'),
('BD003004014', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-14', 'kosong'),
('BD003004015', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-15', 'kosong'),
('BD003004016', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-16', 'kosong'),
('BD003004017', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-17', 'kosong'),
('BD003004018', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-18', 'kosong'),
('BD003004019', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-19', 'kosong'),
('BD003004020', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-20', 'kosong'),
('BD003004021', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-21', 'kosong'),
('BD003004022', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-22', 'kosong'),
('BD003004023', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-23', 'kosong'),
('BD003004024', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-24', 'kosong'),
('BD003004025', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-25', 'kosong'),
('BD003004026', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-26', 'kosong'),
('BD003004027', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-27', 'kosong'),
('BD003004028', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-28', 'kosong'),
('BD003004029', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-29', 'kosong'),
('BD003004030', 'RU003', 'KL004', 'KENCONO WUNGU-KL1-30', 'kosong'),
('BD004005001', 'RU004', 'KL005', 'HAYAM WURUK-KL2-01', 'kosong'),
('BD004005002', 'RU004', 'KL005', 'HAYAM WURUK-KL2-02', 'kosong'),
('BD004005003', 'RU004', 'KL005', 'HAYAM WURUK-KL2-03', 'kosong'),
('BD004005004', 'RU004', 'KL005', 'HAYAM WURUK-KL2-04', 'kosong'),
('BD004005005', 'RU004', 'KL005', 'HAYAM WURUK-KL2-05', 'kosong'),
('BD004005006', 'RU004', 'KL005', 'HAYAM WURUK-KL2-06', 'kosong'),
('BD004005007', 'RU004', 'KL005', 'HAYAM WURUK-KL2-07', 'kosong'),
('BD004005008', 'RU004', 'KL005', 'HAYAM WURUK-KL2-08', 'kosong'),
('BD004006001', 'RU004', 'KL006', 'HAYAM WURUK-KL3-01', 'kosong'),
('BD004006002', 'RU004', 'KL006', 'HAYAM WURUK-KL3-02', 'kosong'),
('BD004006003', 'RU004', 'KL006', 'HAYAM WURUK-KL3-03', 'kosong'),
('BD004006004', 'RU004', 'KL006', 'HAYAM WURUK-KL3-04', 'kosong'),
('BD004006005', 'RU004', 'KL006', 'HAYAM WURUK-KL3-05', 'kosong'),
('BD004006006', 'RU004', 'KL006', 'HAYAM WURUK-KL3-06', 'kosong'),
('BD004006007', 'RU004', 'KL006', 'HAYAM WURUK-KL3-07', 'kosong'),
('BD004006008', 'RU004', 'KL006', 'HAYAM WURUK-KL3-08', 'kosong'),
('BD004006009', 'RU004', 'KL006', 'HAYAM WURUK-KL3-09', 'kosong'),
('BD004006010', 'RU004', 'KL006', 'HAYAM WURUK-KL3-10', 'kosong'),
('BD004006011', 'RU004', 'KL006', 'HAYAM WURUK-KL3-11', 'kosong'),
('BD004006012', 'RU004', 'KL006', 'HAYAM WURUK-KL3-12', 'kosong'),
('BD004006013', 'RU004', 'KL006', 'HAYAM WURUK-KL3-13', 'kosong'),
('BD004006014', 'RU004', 'KL006', 'HAYAM WURUK-KL3-14', 'kosong'),
('BD004006015', 'RU004', 'KL006', 'HAYAM WURUK-KL3-15', 'kosong'),
('BD004006016', 'RU004', 'KL006', 'HAYAM WURUK-KL3-16', 'kosong'),
('BD004006017', 'RU004', 'KL006', 'HAYAM WURUK-KL3-17', 'kosong'),
('BD004006018', 'RU004', 'KL006', 'HAYAM WURUK-KL3-18', 'kosong'),
('BD004006019', 'RU004', 'KL006', 'HAYAM WURUK-KL3-19', 'kosong'),
('BD004006020', 'RU004', 'KL006', 'HAYAM WURUK-KL3-20', 'kosong'),
('BD004006021', 'RU004', 'KL006', 'HAYAM WURUK-KL3-21', 'kosong'),
('BD004006022', 'RU004', 'KL006', 'HAYAM WURUK-KL3-22', 'kosong'),
('BD004006023', 'RU004', 'KL006', 'HAYAM WURUK-KL3-23', 'kosong'),
('BD004006024', 'RU004', 'KL006', 'HAYAM WURUK-KL3-24', 'kosong'),
('BD004006025', 'RU004', 'KL006', 'HAYAM WURUK-KL3-25', 'kosong'),
('BD005015001', 'RU005', 'KL015', 'JAYANEGARA-ISO-01', 'kosong'),
('BD005015002', 'RU005', 'KL015', 'JAYANEGARA-ISO-02', 'kosong'),
('BD005015003', 'RU005', 'KL015', 'JAYANEGARA-ISO-03', 'kosong'),
('BD005015004', 'RU005', 'KL015', 'JAYANEGARA-ISO-04', 'kosong'),
('BD005015005', 'RU005', 'KL015', 'JAYANEGARA-ISO-05', 'kosong'),
('BD005015006', 'RU005', 'KL015', 'JAYANEGARA-ISO-06', 'kosong'),
('BD005015007', 'RU005', 'KL015', 'JAYANEGARA-ISO-07', 'kosong'),
('BD005015008', 'RU005', 'KL015', 'JAYANEGARA-ISO-08', 'kosong'),
('BD005015009', 'RU005', 'KL015', 'JAYANEGARA-ISO-09', 'kosong'),
('BD005015010', 'RU005', 'KL015', 'JAYANEGARA-ISO-10', 'kosong'),
('BD005015011', 'RU005', 'KL015', 'JAYANEGARA-ISO-11', 'kosong'),
('BD005015012', 'RU005', 'KL015', 'JAYANEGARA-ISO-12', 'kosong'),
('BD005015013', 'RU005', 'KL015', 'JAYANEGARA-ISO-13', 'kosong'),
('BD006005001', 'RU006', 'KL005', 'KERTAWIJAYA-KL2-01', 'kosong'),
('BD006005002', 'RU006', 'KL005', 'KERTAWIJAYA-KL2-02', 'kosong'),
('BD006005003', 'RU006', 'KL005', 'KERTAWIJAYA-KL2-03', 'kosong'),
('BD006005004', 'RU006', 'KL005', 'KERTAWIJAYA-KL2-04', 'kosong'),
('BD006005005', 'RU006', 'KL005', 'KERTAWIJAYA-KL2-05', 'kosong'),
('BD006005006', 'RU006', 'KL005', 'KERTAWIJAYA-KL2-06', 'kosong'),
('BD006005007', 'RU006', 'KL005', 'KERTAWIJAYA-KL2-07', 'kosong'),
('BD006005008', 'RU006', 'KL005', 'KERTAWIJAYA-KL2-08', 'kosong'),
('BD006006001', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-01', 'kosong'),
('BD006006002', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-02', 'kosong'),
('BD006006003', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-03', 'kosong'),
('BD006006004', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-04', 'kosong'),
('BD006006005', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-05', 'kosong'),
('BD006006006', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-06', 'kosong'),
('BD006006007', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-07', 'kosong'),
('BD006006008', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-08', 'kosong'),
('BD006006009', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-09', 'kosong'),
('BD006006010', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-10', 'kosong'),
('BD006006011', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-11', 'kosong'),
('BD006006012', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-12', 'kosong'),
('BD006006013', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-13', 'kosong'),
('BD006006014', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-14', 'kosong'),
('BD006006015', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-15', 'kosong'),
('BD006006016', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-16', 'kosong'),
('BD006006017', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-17', 'kosong'),
('BD006006018', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-18', 'kosong'),
('BD006006019', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-19', 'kosong'),
('BD006006020', 'RU006', 'KL006', 'KERTAWIJAYA-KL3-20', 'kosong'),
('BD006015001', 'RU006', 'KL015', 'KERTAWIJAYA-ISO-01', 'kosong'),
('BD006015002', 'RU006', 'KL015', 'KERTAWIJAYA-ISO-02', 'kosong'),
('BD006015003', 'RU006', 'KL015', 'KERTAWIJAYA-ISO-03', 'kosong'),
('BD006015004', 'RU006', 'KL015', 'KERTAWIJAYA-ISO-04', 'kosong'),
('BD007005001', 'RU007', 'KL005', 'KERTABHUMI-KL2-01', 'kosong'),
('BD007005002', 'RU007', 'KL005', 'KERTABHUMI-KL2-02', 'kosong'),
('BD007005003', 'RU007', 'KL005', 'KERTABHUMI-KL2-03', 'kosong'),
('BD007005004', 'RU007', 'KL005', 'KERTABHUMI-KL2-04', 'kosong'),
('BD007005005', 'RU007', 'KL005', 'KERTABHUMI-KL2-05', 'kosong'),
('BD007005006', 'RU007', 'KL005', 'KERTABHUMI-KL2-06', 'kosong'),
('BD007005007', 'RU007', 'KL005', 'KERTABHUMI-KL2-07', 'kosong'),
('BD007005008', 'RU007', 'KL005', 'KERTABHUMI-KL2-08', 'kosong'),
('BD007006001', 'RU007', 'KL006', 'KERTABHUMI-KL3-01', 'kosong'),
('BD007006002', 'RU007', 'KL006', 'KERTABHUMI-KL3-02', 'kosong'),
('BD007006003', 'RU007', 'KL006', 'KERTABHUMI-KL3-03', 'kosong'),
('BD007006004', 'RU007', 'KL006', 'KERTABHUMI-KL3-04', 'kosong'),
('BD007006005', 'RU007', 'KL006', 'KERTABHUMI-KL3-05', 'kosong'),
('BD007006006', 'RU007', 'KL006', 'KERTABHUMI-KL3-06', 'kosong'),
('BD007006007', 'RU007', 'KL006', 'KERTABHUMI-KL3-07', 'kosong'),
('BD007006008', 'RU007', 'KL006', 'KERTABHUMI-KL3-08', 'kosong'),
('BD007006009', 'RU007', 'KL006', 'KERTABHUMI-KL3-09', 'kosong'),
('BD007006010', 'RU007', 'KL006', 'KERTABHUMI-KL3-10', 'kosong'),
('BD007006011', 'RU007', 'KL006', 'KERTABHUMI-KL3-11', 'kosong'),
('BD007006012', 'RU007', 'KL006', 'KERTABHUMI-KL3-12', 'kosong'),
('BD007006013', 'RU007', 'KL006', 'KERTABHUMI-KL3-13', 'kosong'),
('BD007006014', 'RU007', 'KL006', 'KERTABHUMI-KL3-14', 'kosong'),
('BD007006015', 'RU007', 'KL006', 'KERTABHUMI-KL3-15', 'kosong'),
('BD007015001', 'RU007', 'KL015', 'KERTABHUMI-ISO-01', 'kosong'),
('BD007015002', 'RU007', 'KL015', 'KERTABHUMI-ISO-02', 'kosong'),
('BD007015003', 'RU007', 'KL015', 'KERTABHUMI-ISO-03', 'kosong'),
('BD007015004', 'RU007', 'KL015', 'KERTABHUMI-ISO-04', 'kosong'),
('BD007015005', 'RU007', 'KL015', 'KERTABHUMI-ISO-05', 'kosong'),
('BD007015006', 'RU007', 'KL015', 'KERTABHUMI-ISO-06', 'kosong'),
('BD008004001', 'RU008', 'KL004', 'GAYATRI-KL1-01', 'kosong'),
('BD008004002', 'RU008', 'KL004', 'GAYATRI-KL1-02', 'kosong'),
('BD008005001', 'RU008', 'KL005', 'GAYATRI-KL2-01', 'kosong'),
('BD008005002', 'RU008', 'KL005', 'GAYATRI-KL2-02', 'kosong'),
('BD008006001', 'RU008', 'KL006', 'GAYATRI-KL3-01', 'kosong'),
('BD008006002', 'RU008', 'KL006', 'GAYATRI-KL3-02', 'kosong'),
('BD008006003', 'RU008', 'KL006', 'GAYATRI-KL3-03', 'kosong'),
('BD008006004', 'RU008', 'KL006', 'GAYATRI-KL3-04', 'kosong'),
('BD008006005', 'RU008', 'KL006', 'GAYATRI-KL3-05', 'kosong'),
('BD008006006', 'RU008', 'KL006', 'GAYATRI-KL3-06', 'kosong'),
('BD008006007', 'RU008', 'KL006', 'GAYATRI-KL3-07', 'kosong'),
('BD008006008', 'RU008', 'KL006', 'GAYATRI-KL3-08', 'kosong'),
('BD008006009', 'RU008', 'KL006', 'GAYATRI-KL3-09', 'kosong'),
('BD008006010', 'RU008', 'KL006', 'GAYATRI-KL3-10', 'kosong'),
('BD008006011', 'RU008', 'KL006', 'GAYATRI-KL3-11', 'kosong'),
('BD008006012', 'RU008', 'KL006', 'GAYATRI-KL3-12', 'kosong'),
('BD008006013', 'RU008', 'KL006', 'GAYATRI-KL3-13', 'kosong'),
('BD008006014', 'RU008', 'KL006', 'GAYATRI-KL3-14', 'kosong'),
('BD008006015', 'RU008', 'KL006', 'GAYATRI-KL3-15', 'kosong'),
('BD009006001', 'RU009', 'KL006', 'PERINATAL-KL3-01', 'kosong'),
('BD009006002', 'RU009', 'KL006', 'PERINATAL-KL3-02', 'kosong'),
('BD009006003', 'RU009', 'KL006', 'PERINATAL-KL3-03', 'kosong'),
('BD009006004', 'RU009', 'KL006', 'PERINATAL-KL3-04', 'kosong'),
('BD009006005', 'RU009', 'KL006', 'PERINATAL-KL3-05', 'kosong'),
('BD009006006', 'RU009', 'KL006', 'PERINATAL-KL3-06', 'kosong'),
('BD009006007', 'RU009', 'KL006', 'PERINATAL-KL3-07', 'kosong'),
('BD009006008', 'RU009', 'KL006', 'PERINATAL-KL3-08', 'kosong'),
('BD009015001', 'RU009', 'KL015', 'PERINATAL-ISO-01', 'kosong'),
('BD009015002', 'RU009', 'KL015', 'PERINATAL-ISO-02', 'kosong'),
('BD009015003', 'RU009', 'KL015', 'PERINATAL-ISO-03', 'kosong'),
('BD009015004', 'RU009', 'KL015', 'PERINATAL-ISO-04', 'kosong'),
('BD009015005', 'RU009', 'KL015', 'PERINATAL-ISO-05', 'kosong'),
('BD009015006', 'RU009', 'KL015', 'PERINATAL-ISO-06', 'kosong'),
('BD010007001', 'RU010', 'KL007', 'ICU-ICU-01', 'kosong'),
('BD010007002', 'RU010', 'KL007', 'ICU-ICU-02', 'kosong'),
('BD010007003', 'RU010', 'KL007', 'ICU-ICU-03', 'kosong'),
('BD010008001', 'RU010', 'KL008', 'ICU-ICC-01', 'kosong'),
('BD010008002', 'RU010', 'KL008', 'ICU-ICC-02', 'kosong'),
('BD010008003', 'RU010', 'KL008', 'ICU-ICC-03', 'kosong'),
('BD010008004', 'RU010', 'KL008', 'ICU-ICC-04', 'kosong'),
('BD010010001', 'RU010', 'KL010', 'ICU-PIC-01', 'kosong'),
('BD010010002', 'RU010', 'KL010', 'ICU-PIC-02', 'kosong'),
('BD010014001', 'RU010', 'KL014', 'ICU-HCU-01', 'kosong'),
('BD010014002', 'RU010', 'KL014', 'ICU-HCU-02', 'kosong'),
('BD010014003', 'RU010', 'KL014', 'ICU-HCU-03', 'kosong'),
('BD011009001', 'RU011', 'KL009', 'NICU-NIC-01', 'kosong'),
('BD011009002', 'RU011', 'KL009', 'NICU-NIC-02', 'kosong'),
('BD011009003', 'RU011', 'KL009', 'NICU-NIC-03', 'kosong'),
('BD011009004', 'RU011', 'KL009', 'NICU-NIC-04', 'kosong'),
('BD011009005', 'RU011', 'KL009', 'NICU-NIC-05', 'kosong'),
('BD011009006', 'RU011', 'KL009', 'NICU-NIC-06', 'kosong'),
('BD011009007', 'RU011', 'KL009', 'NICU-NIC-07', 'kosong'),
('BD011009008', 'RU011', 'KL009', 'NICU-NIC-08', 'kosong'),
('BD012011001', 'RU012', 'KL011', 'IGD-IGD-01', 'kosong'),
('BD012011002', 'RU012', 'KL011', 'IGD-IGD-02', 'kosong'),
('BD012011003', 'RU012', 'KL011', 'IGD-IGD-03', 'kosong'),
('BD012011004', 'RU012', 'KL011', 'IGD-IGD-04', 'kosong'),
('BD012011005', 'RU012', 'KL011', 'IGD-IGD-05', 'kosong'),
('BD012011006', 'RU012', 'KL011', 'IGD-IGD-06', 'kosong'),
('BD012011007', 'RU012', 'KL011', 'IGD-IGD-07', 'kosong'),
('BD012011008', 'RU012', 'KL011', 'IGD-IGD-08', 'kosong'),
('BD013015001', 'RU013', 'KL015', 'ICU-ISO-01', 'kosong'),
('BD013015002', 'RU013', 'KL015', 'ICU-ISO-02', 'kosong'),
('BD013015003', 'RU013', 'KL015', 'ICU-ISO-03', 'kosong'),
('BD013015004', 'RU013', 'KL015', 'ICU-ISO-04', 'kosong'),
('BD013015005', 'RU013', 'KL015', 'ICU-ISO-05', 'kosong'),
('BD013015006', 'RU013', 'KL015', 'ICU-ISO-06', 'kosong'),
('BD013015007', 'RU013', 'KL015', 'ICU-ISO-07', 'kosong'),
('BD013015008', 'RU013', 'KL015', 'ICU-ISO-08', 'kosong'),
('BD013015009', 'RU013', 'KL015', 'ICU-ISO-09', 'kosong'),
('BD013015010', 'RU013', 'KL015', 'ICU-ISO-10', 'kosong'),
('BD013015011', 'RU013', 'KL015', 'ICU-ISO-11', 'kosong'),
('BD013015012', 'RU013', 'KL015', 'ICU-ISO-12', 'kosong');

-- --------------------------------------------------------

--
-- Table structure for table `m_kelas`
--

CREATE TABLE `m_kelas` (
  `id_kelas` varchar(6) NOT NULL,
  `id_kelas_aplicare` varchar(7) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `warna` enum('orange','yellow','maroon','green','blue','red','navy','fuchsia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kelas`
--

INSERT INTO `m_kelas` (`id_kelas`, `id_kelas_aplicare`, `nama_kelas`, `warna`) VALUES
('KL001', 'VVP', 'VVIP', 'orange'),
('KL002', 'VIP', 'VIP', 'yellow'),
('KL003', 'UTM', 'UTAMA', 'yellow'),
('KL004', 'KL1', 'KELAS 1', 'maroon'),
('KL005', 'KL2', 'KELAS 2', 'green'),
('KL006', 'KL3', 'KELAS 3', 'blue'),
('KL007', 'ICU', 'ICU', 'red'),
('KL008', 'ICC', 'ICCU', 'red'),
('KL009', 'NIC', 'NICU', 'red'),
('KL010', 'PIC', 'PICU', 'red'),
('KL011', 'IGD', 'IGD', 'red'),
('KL012', 'UGD', 'UGD', 'red'),
('KL013', 'SAL', 'BERSALIN', 'fuchsia'),
('KL014', 'HCU', 'HCU', 'red'),
('KL015', 'ISO', 'ISOLASI', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `m_ruang`
--

CREATE TABLE `m_ruang` (
  `id_ruang` varchar(6) NOT NULL,
  `kode_ruang` varchar(10) NOT NULL,
  `nama_ruang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_ruang`
--

INSERT INTO `m_ruang` (`id_ruang`, `kode_ruang`, `nama_ruang`) VALUES
('RU001', 'TRBW', 'TRIBHUWANA'),
('RU002', 'RWJ', 'RADEN WIJAYA'),
('RU003', 'KWG', 'KENCONO WUNGU'),
('RU004', 'HWK', 'HAYAM WURUK'),
('RU005', 'JYN', 'JAYANEGARA'),
('RU006', 'KWJ', 'KERTAWIJAYA'),
('RU007', 'KTBM', 'KERTABHUMI'),
('RU008', 'GYTR', 'GAYATRI'),
('RU009', 'PRNT', 'PERINATAL'),
('RU010', 'ICU', 'ICU, ICCU, HCU, PICU'),
('RU011', 'NICU', 'NICU'),
('RU012', 'IGD', 'IGD'),
('RU013', 'ICUISO', 'ICU ISO COVID'),
('RU998', 'MR', 'MEDICAL RECORD'),
('RU999', 'IT', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` varchar(7) NOT NULL,
  `id_ruang` varchar(6) NOT NULL,
  `id_akses` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `id_ruang`, `id_akses`, `username`, `password`, `foto`) VALUES
('US001', 'RU999', 'LV001', 'it', 'db6f6da1ce3437f3d38eb05a63402d41', 'jodipan_kotak.jpg'),
('US002', 'RU998', 'LV002', 'rm', 'db6f6da1ce3437f3d38eb05a63402d41', 'profil2.png'),
('US003', 'RU001', 'LV003', 'trbw', 'eb1839376a7ded7f79de0585688b4a4a', 'profil3.png'),
('US004', 'RU002', 'LV003', 'rwj', '1ec51a530aedab1442b1f5ba8fd1597d', 'profil4.png'),
('US005', 'RU003', 'LV003', 'kwg', '3eb7d13b9ef60cd41f6cb108927ec038', 'profil1.png'),
('US006', 'RU004', 'LV003', 'hwk', 'de15e247e71b1558a96514c876da1307', 'profil1.png'),
('US007', 'RU005', 'LV003', 'jyn', '2f1857737fb6cff2a293b9da4da50755', 'profil4.png'),
('US008', 'RU006', 'LV003', 'kwj', '8566f841ee7e0ace2ba6cfae98e3a87e', 'profil4.png'),
('US009', 'RU007', 'LV003', 'ktbm', 'cdbfca2f0ce34455b7c15dc3e335b6b6', 'profil4.png'),
('US010', 'RU008', 'LV003', 'gytr', 'ae51196444a2e38a38862b25060d8ec0', 'profil4.png'),
('US011', 'RU009', 'LV003', 'prnt', '5511688dcf2adf295daafee6e58d4e1d', 'profil4.png'),
('US012', 'RU010', 'LV003', 'icu', 'f8eaf860ef6bf14b6a52fdf35a5190fd', 'profil4.png'),
('US013', 'RU011', 'LV003', 'nicu', 'e632729ce86a79f68508dcf4ba634950', 'profil4.png'),
('US014', 'RU013', 'LV003', 'icuiso', 'f19a7e534a3df3ee59c18dc48076679b', 'profil4.png');

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
-- Table structure for table `tm_kamar`
--

CREATE TABLE `tm_kamar` (
  `KodeKamar` char(6) NOT NULL,
  `Unit` varchar(25) NOT NULL,
  `NamaKamar` varchar(50) NOT NULL,
  `Harga` int(15) NOT NULL,
  `Kelas` char(8) NOT NULL,
  `Bed` char(3) NOT NULL,
  `Terpakai` char(2) NOT NULL,
  `Aktif` char(2) NOT NULL,
  `Kamar` char(3) NOT NULL,
  `KodeUnit` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_kamar`
--

INSERT INTO `tm_kamar` (`KodeKamar`, `Unit`, `NamaKamar`, `Harga`, `Kelas`, `Bed`, `Terpakai`, `Aktif`, `Kamar`, `KodeUnit`) VALUES
('KM001', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS1-01-01', 0, 'KELAS1', '01', 'N', 'Y', '01', 'KWJ'),
('KM002', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS1-01-02', 0, 'KELAS1', '02', 'N', 'Y', '01', 'KWJ'),
('KM003', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS2-01-01', 0, 'KELAS2', '01', 'Y', 'Y', '01', 'KWJ'),
('KM004', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS2-01-02', 0, 'KELAS2', '02', 'N', 'Y', '01', 'KWJ'),
('KM005', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS2-01-03', 0, 'KELAS2', '03', 'Y', 'Y', '01', 'KWJ'),
('KM006', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS2-01-04', 0, 'KELAS2', '04', 'Y', 'Y', '01', 'KWJ'),
('KM007', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS2-01-05', 0, 'KELAS2', '05', 'N', 'Y', '01', 'KWJ'),
('KM008', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS2-01-06', 0, 'KELAS2', '06', 'Y', 'Y', '01', 'KWJ'),
('KM009', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS2-01-07', 0, 'KELAS2', '07', 'Y', 'Y', '01', 'KWJ'),
('KM010', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-01', 0, 'KELAS3', '01', 'N', 'Y', '01', 'KWJ'),
('KM011', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-02', 0, 'KELAS3', '02', 'Y', 'Y', '01', 'KWJ'),
('KM012', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-03', 0, 'KELAS3', '03', 'Y', 'Y', '01', 'KWJ'),
('KM013', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-03', 0, 'KELAS3', '03', 'N', 'Y', '02', 'JYN'),
('KM014', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-05', 0, 'KELAS3', '05', 'N', 'Y', '01', 'KWJ'),
('KM015', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-03-03 OBYGN', 0, 'ICU', '19', 'Y', 'Y', '03', 'JYN'),
('KM016', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-07', 0, 'KELAS3', '07', 'Y', 'Y', '01', 'KWJ'),
('KM017', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-08', 0, 'KELAS3', '08', 'N', 'Y', '01', 'KWJ'),
('KM018', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-09', 0, 'KELAS3', '09', 'Y', 'Y', '01', 'KWJ'),
('KM019', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-10', 0, 'KELAS3', '10', 'Y', 'Y', '01', 'KWJ'),
('KM020', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-11', 0, 'KELAS3', '11', 'Y', 'Y', '01', 'KWJ'),
('KM021', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-12', 0, 'KELAS3', '12', 'N', 'Y', '01', 'KWJ'),
('KM022', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-01', 0, 'KELAS3', '01', 'Y', 'Y', '02', 'KWJ'),
('KM023', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-02', 0, 'KELAS3', '02', 'Y', 'Y', '02', 'KWJ'),
('KM024', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-03', 0, 'KELAS3', '03', 'Y', 'Y', '02', 'KWJ'),
('KM025', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-04', 0, 'KELAS3', '04', 'Y', 'Y', '02', 'KWJ'),
('KM026', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-05', 0, 'KELAS3', '05', 'Y', 'Y', '02', 'KWJ'),
('KM027', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-06', 0, 'KELAS3', '06', 'Y', 'Y', '02', 'KWJ'),
('KM028', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-07', 0, 'KELAS3', '07', 'N', 'Y', '02', 'KWJ'),
('KM029', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-08', 0, 'KELAS3', '08', 'Y', 'Y', '02', 'KWJ'),
('KM030', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-09', 0, 'KELAS3', '09', 'Y', 'Y', '02', 'KWJ'),
('KM031', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-10', 0, 'KELAS3', '10', 'Y', 'Y', '02', 'KWJ'),
('KM032', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-11', 0, 'KELAS3', '11', 'Y', 'Y', '02', 'KWJ'),
('KM033', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-12', 0, 'KELAS3', '12', 'Y', 'Y', '02', 'KWJ'),
('KM035', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-02', 0, 'KELAS3', '02', 'N', 'Y', '01', 'KWJ'),
('KM036', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-01', 0, 'KELAS3', '01', 'Y', 'Y', '01', 'KWJ'),
('KM037', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-01-02', 0, 'KELAS3', '02', 'Y', 'Y', '01', 'KWJ'),
('KM038', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-01', 0, 'KELAS3', '01', 'N', 'Y', '02', 'KWJ'),
('KM039', 'KERTAWIJAYA', 'KERTAWIJAYA-KELAS3-02-02', 0, 'KELAS3', '02', 'N', 'Y', '02', 'KWJ'),
('KM040', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS2-01-01', 0, 'KELAS2', '01', 'Y', 'Y', '06', 'KTBM'),
('KM041', 'KERTABHUMI', 'A', 0, 'KELAS2', '02', 'Y', 'Y', '06', 'KTBM'),
('KM042', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS2-02-02', 0, 'KELAS2', '03', 'N', 'Y', '02', 'KTBM'),
('KM043', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS2-02-03', 0, 'KELAS2', '04', 'N', 'Y', '02', 'KTBM'),
('KM045', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS2-01-02', 0, 'KELAS2', '05', 'Y', 'Y', '06', 'KTBM'),
('KM046', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS2-01-04', 0, 'KELAS2', '06', 'Y', 'Y', '06', 'KTBM'),
('KM047', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS2-02-01', 0, 'KELAS2', '07', 'N', 'Y', '02', 'KTBM'),
('KM048', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS2-02-04', 0, 'KELAS2', '08', 'Y', 'Y', '02', 'KTBM'),
('KM049', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS3-03-01', 0, 'KELAS2', '09', 'Y', 'Y', '03', 'KTBM'),
('KM050', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS3-03-02', 0, 'KELAS3', '10', 'N', 'Y', '03', 'KTBM'),
('KM051', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS3-03-04', 0, 'KELAS3', '11', 'N', 'Y', '03', 'KTBM'),
('KM052', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-04-02', 0, 'KELAS3', '12', 'Y', 'Y', '07', 'KTBM'),
('KM053', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-04-03', 0, 'KELAS3', '13', 'Y', 'Y', '07', 'KTBM'),
('KM054', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-05-01', 0, 'KELAS3', '14', 'Y', 'Y', '08', 'KTBM'),
('KM055', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-05-02', 0, 'KELAS3', '15', 'Y', 'Y', '08', 'KTBM'),
('KM056', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-05-05', 0, 'KELAS3', '16', 'Y', 'Y', '08', 'KTBM'),
('KM057', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-06-02', 0, 'KELAS3', '17', 'Y', 'Y', '09', 'KTBM'),
('KM058', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-06-03', 0, 'KELAS3', '18', 'Y', 'Y', '09', 'KTBM'),
('KM059', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-06-05', 0, 'KELAS3', '19', 'Y', 'Y', '09', 'KTBM'),
('KM060', 'KERTABHUMI', 'KERTABHUMI BEDAH ISO-KELAS1-07-02', 0, 'KELAS1', '20', 'Y', 'Y', '04', 'KTBM'),
('KM061', 'KERTABHUMI', 'KERTABHUMI BEDAH ISO-KELAS1-08-02', 0, 'KELAS1', '21', 'Y', 'Y', '05', 'KTBM'),
('KM062', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS3-03-03', 0, 'KELAS3', '22', 'Y', 'Y', '03', 'KTBM'),
('KM063', 'KERTABHUMI', 'KERTABHUMI ANAK-KELAS3-03-05', 0, 'KELAS3', '23', 'Y', 'Y', '03', 'KTBM'),
('KM064', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-04-01', 0, 'KELAS3', '24', 'Y', 'Y', '07', 'KTBM'),
('KM065', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-04-04', 0, 'KELAS3', '25', 'Y', 'Y', '07', 'KTBM'),
('KM066', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-04-05', 0, 'KELAS3', '26', 'Y', 'Y', '07', 'KTBM'),
('KM067', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-05-03', 0, 'KELAS3', '27', 'Y', 'Y', '08', 'KTBM'),
('KM068', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-05-04', 0, 'KELAS3', '28', 'Y', 'Y', '08', 'KTBM'),
('KM069', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-06-01', 0, 'KELAS1', '29', 'Y', 'Y', '09', 'KTBM'),
('KM070', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS3-06-04', 0, 'KELAS3', '30', 'Y', 'Y', '09', 'KTBM'),
('KM071', 'KERTABHUMI', 'KERTABHUMI BEDAH-KELAS1-07-01', 0, 'KELAS1', '31', 'N', 'Y', '04', 'KTBM'),
('KM078', 'KERTABHUMI', 'KERTABHUMI BEDAH ISO-KELAS1-08-01', 0, 'KELAS1', '32', 'Y', 'Y', '05', 'KTBM'),
('KM079', 'KERTABHUMI', 'KERTABHUMI ANAK ISO-KELAS1-09-01', 0, 'KELAS1', '33', 'N', 'Y', '01', 'KTBM'),
('KM080', 'KERTABHUMI-ISOLASI', 'KERTABHUMI-KELAS3-01-01', 0, 'KELAS3', '01', 'Y', 'Y', '01', 'KTBM'),
('KM081', 'KERTABHUMI-ISOLASI', 'KERTABHUMI-KELAS3-01-02', 0, 'KELAS3', '02', 'Y', 'Y', '01', 'KTBM'),
('KM082', 'KERTABHUMI-ISOLASI', 'KERTABHUMI-KELAS3-02-01', 0, 'KELAS3', '01', 'Y', 'Y', '02', 'KTBM'),
('KM083', 'KERTABHUMI-ISOLASI', 'KERTABHUMI-KELAS3-02-02', 0, 'KELAS3', '02', 'Y', 'Y', '02', 'KTBM'),
('KM084', 'KERTABHUMI-ISOLASI', 'KERTABHUMI-KELAS3-03-01', 0, 'KELAS3', '01', 'N', 'Y', '03', 'KTBM'),
('KM085', 'KERTABHUMI-ISOLASI', 'KERTABHUMI-KELAS3-03-02', 0, 'KELAS3', '02', 'Y', 'Y', '03', 'KTBM'),
('KM086', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-01-01', 0, 'ICU', '01', 'Y', 'Y', '01', 'JYN'),
('KM087', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-01-02', 0, 'ICU', '02', 'Y', 'Y', '01', 'JYN'),
('KM088', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-01-03', 0, 'ICU', '03', 'Y', 'Y', '01', 'JYN'),
('KM089', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-01-04', 0, 'ICU', '04', 'Y', 'Y', '01', 'JYN'),
('KM090', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-01-05', 0, 'ICU', '05', 'Y', 'Y', '01', 'JYN'),
('KM091', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-01-06', 0, 'ICU', '06', 'Y', 'Y', '01', 'JYN'),
('KM092', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-01-07', 0, 'ICU', '07', 'Y', 'Y', '01', 'JYN'),
('KM093', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-01-08', 0, 'ICU', '08', 'Y', 'Y', '01', 'JYN'),
('KM094', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-02-01', 0, 'ICU', '09', 'Y', 'Y', '02', 'JYN'),
('KM095', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-02-02', 0, 'ICU', '10', 'Y', 'Y', '02', 'JYN'),
('KM096', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-02-03', 0, 'ICU', '11', 'Y', 'Y', '02', 'JYN'),
('KM097', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-02-04', 0, 'ICU', '12', 'Y', 'Y', '02', 'JYN'),
('KM098', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-02-05', 0, 'ICU', '13', 'Y', 'Y', '02', 'JYN'),
('KM099', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-02-06', 0, 'ICU', '14', 'Y', 'Y', '02', 'JYN'),
('KM100', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-02-07', 0, 'ICU', '15', 'Y', 'Y', '02', 'JYN'),
('KM101', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-02-08', 0, 'ICU', '16', 'Y', 'Y', '02', 'JYN'),
('KM102', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-03-01 OBGYN', 0, 'ICU', '17', 'Y', 'Y', '03', 'JYN'),
('KM103', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-03-02 OBGYN', 0, 'ICU', '18', 'Y', 'Y', '03', 'JYN'),
('KM104', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-03-04 OBYGN', 0, 'ICU', '20', 'Y', 'Y', '03', 'JYN'),
('KM106', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-03-05 OBYGN', 0, 'ICU', '21', 'Y', 'Y', '04', 'JYN'),
('KM107', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-03-06 OBYGN', 0, 'ICU', '22', 'Y', 'Y', '04', 'JYN'),
('KM108', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-04-01 ', 0, 'ICU', '23', 'Y', 'Y', '04', 'JYN'),
('KM109', 'JAYANEGARA-ISO', 'ISO COVID JAYANEGARA-04-02 ', 0, 'ICU', '24', 'Y', 'Y', '04', 'JYN'),
('KM110', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-01-12', 0, 'KELAS3', '12', 'Y', 'Y', '01', 'JYN'),
('KM111', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-01', 0, 'KELAS3', '01', 'Y', 'Y', '02', 'JYN'),
('KM112', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-02', 0, 'KELAS3', '02', 'Y', 'Y', '02', 'JYN'),
('KM113', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-03', 0, 'KELAS3', '03', 'Y', 'Y', '02', 'JYN'),
('KM114', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-04', 0, 'KELAS3', '04', 'Y', 'Y', '02', 'JYN'),
('KM115', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-05', 0, 'KELAS3', '05', 'Y', 'Y', '02', 'JYN'),
('KM116', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-06', 0, 'KELAS3', '06', 'Y', 'Y', '02', 'JYN'),
('KM117', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-07', 0, 'KELAS3', '07', 'Y', 'Y', '02', 'JYN'),
('KM118', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-08', 0, 'KELAS3', '08', 'Y', 'Y', '02', 'JYN'),
('KM119', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-09', 0, 'KELAS3', '09', 'Y', 'Y', '02', 'JYN'),
('KM120', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-10', 0, 'KELAS3', '10', 'Y', 'Y', '02', 'JYN'),
('KM121', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-11', 0, 'KELAS3', '11', 'Y', 'Y', '02', 'JYN'),
('KM122', 'JAYANEGARA-ISO', 'JAYANEGARA-KELAS3-02-12', 0, 'KELAS3', '12', 'Y', 'Y', '02', 'JYN'),
('KM123', 'HAYAM WURUK ISO', 'HAYAM WURUK-KELAS2-01-01', 0, 'KELAS2', '5', 'N', 'Y', '03', 'HWK'),
('KM124', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-01-02', 0, 'KELAS2', '6', 'Y', 'Y', '03', 'HWK'),
('KM125', 'HAYAM WURUK ISO', 'HAYAM WURUK-KELAS2-01-03', 0, 'KELAS2', '7', 'N', 'Y', '03', 'HWK'),
('KM126', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-01-04', 0, 'KELAS2', '8', 'Y', 'Y', '03', 'HWK'),
('KM128', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-02-01', 0, 'KELAS2', '9', 'N', 'Y', '04', 'HWK'),
('KM129', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-02-02', 0, 'KELAS2', '10', 'Y', 'Y', '04', 'HWK'),
('KM130', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-02-03', 0, 'KELAS2', '11', 'Y', 'Y', '04', 'HWK'),
('KM131', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-02-04', 0, 'KELAS2', '12', 'Y', 'Y', '04', 'HWK'),
('KM132', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-03-01', 0, 'KELAS2', '13', 'Y', 'Y', '05', 'HWK'),
('KM133', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-03-02', 0, 'KELAS2', '14', 'Y', 'Y', '05', 'HWK'),
('KM134', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-04-02', 0, 'KELAS2', '16', 'Y', 'Y', '06', 'HWK'),
('KM135', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-05-02', 0, 'KELAS3', '18', 'Y', 'Y', '07', 'HWK'),
('KM136', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-05-03', 0, 'KELAS3', '19', 'Y', 'Y', '07', 'HWK'),
('KM137', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-05-04', 0, 'KELAS3', '20', 'N', 'Y', '07', 'HWK'),
('KM138', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-05-05', 0, 'KELAS3', '21', 'N', 'Y', '07', 'HWK'),
('KM139', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-06-02', 0, 'KELAS3', '23', 'Y', 'Y', '08', 'HWK'),
('KM140', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-06-04', 0, 'KELAS3', '25', 'Y', 'Y', '08', 'HWK'),
('KM141', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-06-05', 0, 'KELAS3', '26', 'Y', 'Y', '08', 'HWK'),
('KM142', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-07-01', 0, 'KELAS3', '27', 'Y', 'Y', '09', 'HWK'),
('KM143', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-07-02', 0, 'KELAS3', '28', 'Y', 'Y', '09', 'HWK'),
('KM144', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-07-05', 0, 'KELAS3', '31', 'Y', 'Y', '03', 'HWK'),
('KM145', 'HAYAM WURUK', 'HAYAM WURUK-ISO-01-01', 0, 'KELAS1', '1', 'Y', 'Y', '01', 'HWK'),
('KM146', 'HAYAM WURUK', 'HAYAM WURUK-ISO-01-02', 0, 'KELAS1', '2', 'Y', 'Y', '01', 'HWK'),
('KM147', 'HAYAM WURUK', 'HAYAM WURUK-ISO-02-01', 0, 'KELAS1', '3', 'Y', 'Y', '02', 'HWK'),
('KM148', 'HAYAM WURUK', 'HAYAM WURUK-ISO-02-02', 0, 'KELAS1', '4', 'Y', 'Y', '02', 'HWK'),
('KM153', 'HAYAM WURUK', 'HAYAM WURUK-KELAS2-04-01', 0, 'KELAS2', '15', 'Y', 'Y', '06', 'HWK'),
('KM154', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-05-01', 0, 'KELAS3', '17', 'Y', 'Y', '07', 'HWK'),
('KM155', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-06-01', 0, 'KELAS3', '22', 'Y', 'Y', '08', 'HWK'),
('KM156', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-06-03', 0, 'KELAS3', '24', 'Y', 'Y', '08', 'HWK'),
('KM157', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-07-03', 0, 'KELAS3', '29', 'Y', 'Y', '09', 'HWK'),
('KM158', 'HAYAM WURUK', 'HAYAM WURUK-KELAS3-07-04', 0, 'KELAS3', '30', 'Y', 'Y', '09', 'HWK'),
('KM159', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-01-01', 0, 'UTAMAA', '01', 'Y', 'Y', '01', 'TRBW'),
('KM160', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-02-01', 0, 'UTAMAA', '01', 'Y', 'Y', '02', 'TRBW'),
('KM161', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-03-01', 0, 'UTAMAA', '01', 'Y', 'Y', '03', 'TRBW'),
('KM162', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-04-01', 0, 'UTAMAA', '01', 'Y', 'Y', '04', 'TRBW'),
('KM163', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-05-01', 0, 'UTAMAA', '01', 'Y', 'Y', '05', 'TRBW'),
('KM164', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-06-01', 0, 'UTAMAA', '01', 'Y', 'Y', '06', 'TRBW'),
('KM165', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-07-01', 0, 'UTAMAA', '01', 'Y', 'Y', '07', 'TRBW'),
('KM166', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-08-01', 0, 'UTAMAA', '01', 'Y', 'Y', '08', 'TRBW'),
('KM167', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-09-01', 0, 'UTAMAA', '01', 'Y', 'Y', '09', 'TRBW'),
('KM168', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-10-01', 0, 'UTAMAA', '01', 'Y', 'Y', '10', 'TRBW'),
('KM169', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-11-01', 0, 'UTAMAA', '01', 'Y', 'Y', '11', 'TRBW'),
('KM170', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-12-01', 0, 'UTAMAA', '01', 'Y', 'Y', '12', 'TRBW'),
('KM171', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-13-01', 0, 'UTAMAA', '01', 'Y', 'Y', '13', 'TRBW'),
('KM172', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-14-01', 0, 'UTAMAA', '01', 'Y', 'Y', '14', 'TRBW'),
('KM173', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-15-01', 0, 'UTAMAA', '01', 'Y', 'Y', '15', 'TRBW'),
('KM174', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-16-01', 0, 'UTAMAA', '01', 'Y', 'Y', '16', 'TRBW'),
('KM175', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-17-01', 0, 'UTAMAA', '01', 'Y', 'Y', '17', 'TRBW'),
('KM176', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-18-01', 0, 'UTAMAA', '01', 'Y', 'Y', '18', 'TRBW'),
('KM177', 'TRIBHUWANA', 'TRIBHUWANA-KELASVIPA-19-01', 0, 'UTAMAA', '01', 'Y', 'Y', '19', 'TRBW'),
('KM178', 'TRIBHUWANA', 'TRIBHUWANA-1-1-01', 0, 'KELAS1', '01', 'Y', 'Y', '20', 'TRBW'),
('KM179', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 01-01', 0, 'ICU', '01', 'Y', 'Y', '01', 'KWG'),
('KM180', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 02-01', 0, 'ICU', '02', 'N', 'Y', '02', 'KWG'),
('KM181', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 03-01', 0, 'ICU', '03', 'Y', 'Y', '03', 'KWG'),
('KM182', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 04-01', 0, 'ICU', '04', 'Y', 'Y', '04', 'KWG'),
('KM183', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 05-01', 0, 'ICU', '05', 'Y', 'Y', '05', 'KWG'),
('KM184', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 06-01', 0, 'ICU', '06', 'Y', 'Y', '06', 'KWG'),
('KM185', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 07-01', 0, 'ICU', '07', 'Y', 'Y', '07', 'KWG'),
('KM186', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 08-01', 0, 'ICU', '08', 'Y', 'Y', '08', 'KWG'),
('KM187', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 09-01', 0, 'ICU', '09', 'Y', 'Y', '09', 'KWG'),
('KM188', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 10-01', 0, 'ICU', '10', 'Y', 'Y', '10', 'KWG'),
('KM189', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 11-01', 0, 'ICU', '11', 'Y', 'Y', '11', 'KWG'),
('KM190', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 12-01', 0, 'ICU', '12', 'Y', 'Y', '12', 'KWG'),
('KM191', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 13-01', 0, 'ICU', '13', 'Y', 'Y', '13', 'KWG'),
('KM192', 'KENCONO WUNGU-ISO', 'K.WUNGU-ISO COVID 14-01', 0, 'ICU', '14', 'Y', 'Y', '14', 'KWG'),
('KM193', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-08-01', 0, 'KELAS1', '01', 'N', 'Y', '08', 'KWG'),
('KM194', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-08-02', 0, 'KELAS1', '02', 'N', 'Y', '08', 'KWG'),
('KM195', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-09-01', 0, 'KELAS1', '01', 'N', 'Y', '09', 'KWG'),
('KM196', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-09-02', 0, 'KELAS1', '02', 'N', 'Y', '09', 'KWG'),
('KM197', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-10-01', 0, 'KELAS1', '01', 'N', 'Y', '10', 'KWG'),
('KM198', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-10-02', 0, 'KELAS1', '02', 'Y', 'Y', '10', 'KWG'),
('KM199', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-11-01', 0, 'KELAS1', '01', 'Y', 'Y', '11', 'KWG'),
('KM200', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-11-02', 0, 'KELAS1', '02', 'Y', 'Y', '11', 'KWG'),
('KM201', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-12-01', 0, 'KELAS1', '01', 'Y', 'Y', '12', 'KWG'),
('KM202', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-12-02', 0, 'KELAS1', '02', 'Y', 'Y', '12', 'KWG'),
('KM203', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-13-01', 0, 'KELAS1', '01', 'Y', 'Y', '13', 'KWG'),
('KM204', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-13-02', 0, 'KELAS1', '02', 'N', 'Y', '13', 'KWG'),
('KM205', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-14-01', 0, 'KELAS1', '01', 'N', 'Y', '14', 'KWG'),
('KM206', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-14-02', 0, 'KELAS1', '02', 'Y', 'Y', '14', 'KWG'),
('KM207', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-15-01', 0, 'KELAS1', '01', 'N', 'Y', '15', 'KWG'),
('KM208', 'KENCONO WUNGU', 'KENCONO WUNGU-KELAS1-15-02', 0, 'KELAS1', '02', 'N', 'Y', '15', 'KWG'),
('KM209', 'RADEN WIJAYA ISO', 'RADEN WIJAYA-1-1', 0, 'KELAS1', '03', 'N', 'Y', '02', 'RWJ'),
('KM210', 'RADEN WIJAYA', 'RADEN WIJAYA-2-1', 0, 'KELAS1', '04', 'N', 'Y', '02', 'RWJ'),
('KM211', 'RADEN WIJAYA', 'RADEN WIJAYA-3-1', 0, 'KELAS1', '05', 'N', 'Y', '03', 'RWJ'),
('KM212', 'RADEN WIJAYA', 'RADEN WIJAYA-4-1', 0, 'KELAS1', '06', 'N', 'Y', '03', 'RWJ'),
('KM213', 'RADEN WIJAYA', 'RADEN WIJAYA-5-1', 0, 'KELAS1', '07', 'Y', 'Y', '04', 'RWJ'),
('KM214', 'RADEN WIJAYA', 'RADEN WIJAYA-6-1', 0, 'KELAS1', '08', 'N', 'Y', '04', 'RWJ'),
('KM215', 'RADEN WIJAYA', 'RADEN WIJAYA-7-1', 0, 'KELAS1', '09', 'N', 'Y', '05', 'RWJ'),
('KM216', 'RADEN WIJAYA', 'RADEN WIJAYA-8-1', 0, 'KELAS1', '10', 'N', 'Y', '05', 'RWJ'),
('KM217', 'RADEN WIJAYA', 'RADEN WIJAYA-9-1', 0, 'KELAS1', '11', 'Y', 'Y', '06', 'RWJ'),
('KM218', 'RADEN WIJAYA', 'RADEN WIJAYA-10-1', 0, 'KELAS1', '12', 'Y', 'Y', '06', 'RWJ'),
('KM219', 'RADEN WIJAYA', 'RADEN WIJAYA-11-1', 0, 'KELAS1', '13', 'N', 'Y', '07', 'RWJ'),
('KM220', 'RADEN WIJAYA', 'RADEN WIJAYA-12-1', 0, 'KELAS1', '14', 'Y', 'Y', '07', 'RWJ'),
('KM221', 'RADEN WIJAYA', 'RADEN WIJAYA-13-1', 0, 'KELAS1', '15', 'Y', 'Y', '08', 'RWJ'),
('KM222', 'RADEN WIJAYA', 'RADEN WIJAYA-14-1', 0, 'KELAS1', '16', 'Y', 'Y', '08', 'RWJ'),
('KM224', 'GAYATRI', 'GAYATRI-KELAS1-01-02', 0, 'KELAS1', '01', 'N', 'Y', '01', 'GYTR'),
('KM225', 'GAYATRI', 'GAYATRI-KELAS1-01-02', 0, 'KELAS1', '02', 'Y', 'Y', '01', 'GYTR'),
('KM226', 'GAYATRI', 'GAYATRI-KELAS2-01-01', 0, 'KELAS2', '01', 'Y', 'Y', '01', 'GYTR'),
('KM227', 'GAYATRI', 'GAYATRI-KELAS2-01-02', 0, 'KELAS2', '02', 'Y', 'Y', '01', 'GYTR'),
('KM228', 'GAYATRI', 'GAYATRI-KELAS2-01-03', 0, 'KELAS2', '03', 'Y', 'Y', '01', 'GYTR'),
('KM229', 'GAYATRI', 'GAYATRI-KELAS2-01-04', 0, 'KELAS1', '04', 'Y', 'Y', '01', 'GYTR'),
('KM230', 'GAYATRI', 'GAYATRI-KELAS2-01-05', 0, 'KELAS2', '05', 'N', 'Y', '01', 'GYTR'),
('KM231', 'GAYATRI', 'GAYATRI-KELAS3-01-01', 0, 'KELAS3', '01', 'Y', 'Y', '01', 'GYTR'),
('KM232', 'GAYATRI', 'GAYATRI-KELAS3-01-02', 0, 'KELAS3', '02', 'Y', 'Y', '01', 'GYTR'),
('KM233', 'GAYATRI', 'GAYATRI-KELAS3-01-03', 0, 'KELAS3', '03', 'Y', 'Y', '01', 'GYTR'),
('KM234', 'GAYATRI', 'GAYATRI-KELAS3-01-04', 0, 'KELAS3', '04', 'Y', 'Y', '01', 'GYTR'),
('KM235', 'GAYATRI', 'GAYATRI-KELAS3-01-05', 0, 'KELAS3', '05', 'Y', 'Y', '01', 'GYTR'),
('KM236', 'GAYATRI', 'GAYATRI-KELAS3-01-06', 0, 'KELAS3', '06', 'Y', 'Y', '01', 'GYTR'),
('KM237', 'GAYATRI', 'GAYATRI-KELAS3-01-07', 0, 'KELAS3', '07', 'Y', 'Y', '01', 'GYTR'),
('KM238', 'GAYATRI', 'GAYATRI-KELAS3-01-08', 0, 'KELAS3', '08', 'Y', 'Y', '01', 'GYTR'),
('KM239', 'GAYATRI', 'GAYATRI-KELAS3-01-09', 0, 'KELAS3', '09', 'Y', 'Y', '01', 'GYTR'),
('KM240', 'GAYATRI', 'GAYATRI-KELAS3-01-10', 0, 'KELAS3', '10', 'Y', 'Y', '01', 'GYTR'),
('KM241', 'ICU', 'ICU-NONKELAS-01-01', 0, 'ICU', '01', 'Y', 'Y', '01', 'ICU'),
('KM242', 'ICU', 'ICU-NONKELAS-01-02', 0, 'ICU', '02', 'Y', 'Y', '01', 'ICU'),
('KM243', 'ICU', 'ICU-NONKELAS-01-03', 0, 'ICU', '03', 'N', 'Y', '01', 'ICU'),
('KM244', 'ICU', 'ICU-NONKELAS-01-04', 0, 'ICU', '04', 'Y', 'Y', '01', 'ICU'),
('KM245', 'ICU', 'ICU-NONKELAS-01-05', 0, 'ICU', '05', 'Y', 'Y', '01', 'ICU'),
('KM246', 'ICU', 'ICU-NONKELAS-01-01', 0, 'ICU', '01', 'Y', 'Y', '01', 'ICU'),
('KM247', 'ICU', 'ICU-NONKELAS-01-02', 0, 'ICU', '02', 'Y', 'Y', '01', 'ICU'),
('KM248', 'ICU', 'ICU-NONKELAS-01-03', 0, 'ICU', '03', 'Y', 'Y', '01', 'ICU'),
('KM249', 'ICU', 'ICU-NONKELAS-01-04', 0, 'ICU', '04', 'Y', 'Y', '01', 'ICU'),
('KM250', 'ICU', 'ICU-NONKELAS-01-05', 0, 'ICU', '05', 'Y', 'Y', '01', 'ICU'),
('KM251', 'ICU', 'ICU-NONKELAS-01-06', 0, 'ICU', '06', 'Y', 'Y', '01', 'ICU'),
('KM252', 'ICU', 'ICU-NONKELAS-01-07', 0, 'ICU', '07', 'Y', 'Y', '01', 'ICU'),
('KM253', 'NICU', 'NICU-NONKELAS-01-01', 0, 'NICU', '01', 'N', 'Y', '01', 'NICU'),
('KM254', 'NICU', 'NICU-NONKELAS-01-02', 0, 'NICU', '02', 'Y', 'Y', '01', 'NICU'),
('KM255', 'NICU', 'NICU-NONKELAS-01-03', 0, 'NICU', '03', 'Y', 'Y', '01', 'NICU'),
('KM256', 'NICU', 'NICU-NONKELAS-01-01', 0, 'NICU', '01', 'Y', 'Y', '01', 'NICU'),
('KM257', 'NICU', 'NICU-NONKELAS-01-02', 0, 'NICU', '02', 'Y', 'Y', '01', 'NICU'),
('KM258', 'NICU', 'NICU-NONKELAS-01-01', 0, 'NICU', '01', 'Y', 'Y', '01', 'NICU'),
('KM259', 'NICU', 'NICU-NONKELAS-01-02', 0, 'NICU', '02', 'Y', 'Y', '01', 'NICU'),
('KM260', 'NICU', 'NICU-NONKELAS-01-03', 0, 'NICU', '03', 'Y', 'Y', '01', 'NICU'),
('KM261', 'NICU', 'NICU-NONKELAS-01-04', 0, 'NICU', '04', 'Y', 'Y', '01', 'NICU'),
('KM262', 'NICU', 'NICU-NONKELAS-01-05', 0, 'NICU', '05', 'Y', 'Y', '01', 'NICU'),
('KM263', 'PERINATAL ISO', 'PERINATAL ISO 1', 0, 'ICU', '01', 'Y', 'Y', '01', 'PRNT'),
('KM264', 'PERINATAL', 'PERINATAL-NONKELAS-01-02', 0, 'KELAS1', '02', 'Y', 'Y', '01', 'PRNT'),
('KM265', 'PERINATAL', 'PERINATAL-NONKELAS-01-03', 0, 'KELAS1', '03', 'Y', 'Y', '01', 'PRNT'),
('KM266', 'PERINATAL', 'PERINATAL-NONKELAS-01-04', 0, 'KELAS1', '04', 'Y', 'Y', '01', 'PRNT'),
('KM267', 'PERINATAL', 'PERINATAL-NONKELAS-01-05', 0, 'KELAS1', '05', 'Y', 'Y', '01', 'PRNT'),
('KM268', 'PERINATAL ISO', 'PERINATAL-ISO-01-01', 0, 'ICU', '01', 'Y', 'Y', '01', 'PRNT'),
('KM269', 'PERINATAL ISO', 'PERINATAL-ISO-01-02', 0, 'ICU', '02', 'Y', 'Y', '01', 'PRNT'),
('KM270', 'PERINATAL ISO', 'PERINATAL-ISO-01-03', 0, 'ICU', '03', 'N', 'Y', '01', 'PRNT'),
('KM271', 'JENAZAH', 'JENAZAH-KELAS0-01-01', 0, 'KELAS1', '01', 'Y', 'Y', '01', 'JNZ'),
('KM272', 'JENAZAH', 'JENAZAH-KELAS0-02-02', 0, 'KELAS1', '02', 'Y', 'Y', '02', 'JNZ'),
('KM274', 'HAYAM WURUK', 'HAYAM WURUK ISOLASI', 0, 'KELAS1', '02', 'Y', 'Y', '01', 'HWK'),
('KM275', 'VVIP', 'VVIP-01', 0, 'UTAMAA', '', 'N', 'Y', '01', 'VVIP'),
('KM276', 'VVIP', 'VVIP-02', 0, 'UTAMAA', '', 'N', 'Y', '01', 'VVIP'),
('KM277', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-01', 0, 'ICU', '01', 'Y', 'N', '01', 'CVD'),
('KM278', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-02', 0, 'ICU', '02', 'Y', 'N', '01', 'CVD'),
('KM279', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-03', 0, 'ICU', '03', 'Y', 'N', '01', 'CVD'),
('KM280', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-04', 0, 'ICU', '04', 'Y', 'N', '01', 'CVD'),
('KM281', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-05', 0, 'ICU', '05', 'Y', 'N', '01', 'CVD'),
('KM282', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-06', 0, 'ICU', '06', 'Y', 'N', '01', 'CVD'),
('KM283', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-07', 0, 'ICU', '07', 'Y', 'N', '01', 'CVD'),
('KM284', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-08', 0, 'ICU', '08', 'Y', 'N', '01', 'CVD'),
('KM285', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-09', 0, 'ICU', '09', 'Y', 'N', '01', 'CVD'),
('KM286', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-10', 0, 'ICU', '10', 'N', 'N', '01', 'CVD'),
('KM287', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-11', 0, 'ICU', '11', 'Y', 'N', '01', 'CVD'),
('KM288', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-12', 0, 'ICU', '12', 'Y', 'N', '01', 'CVD'),
('KM289', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-13', 0, 'ICU', '13', 'Y', 'N', '01', 'CVD'),
('KM290', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-14', 0, 'ICU', '14', 'Y', 'N', '01', 'CVD'),
('KM291', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-15', 0, 'ICU', '15', 'Y', 'N', '01', 'CVD'),
('KM292', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-16', 0, 'ICU', '16', 'Y', 'N', '01', 'CVD'),
('KM293', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-17', 0, 'ICU', '17', 'Y', 'N', '01', 'CVD'),
('KM294', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-18', 0, 'ICU', '18', 'Y', 'N', '01', 'CVD'),
('KM295', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-08-02', 0, 'KELAS1', '18', 'Y', 'Y', '09', 'RWJ'),
('KM296', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-09-01', 0, 'KELAS1', '19', 'Y', 'Y', '10', 'RWJ'),
('KM297', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-09-02', 0, 'KELAS1', '20', 'Y', 'Y', '10', 'RWJ'),
('KM298', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-10-01', 0, 'KELAS1', '21', 'Y', 'Y', '11', 'RWJ'),
('KM299', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-10-02', 0, 'KELAS1', '22', 'Y', 'Y', '11', 'RWJ'),
('KM300', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-11-01', 0, 'KELAS1', '23', 'Y', 'Y', '12', 'RWJ'),
('KM301', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-11-02', 0, 'KELAS1', '24', 'Y', 'Y', '12', 'RWJ'),
('KM302', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-12-01', 0, 'KELAS1', '25', 'Y', 'Y', '13', 'RWJ'),
('KM303', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-12-02', 0, 'KELAS1', '26', 'Y', 'Y', '13', 'RWJ'),
('KM304', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-13-01', 0, 'KELAS1', '27', 'Y', 'Y', '14', 'RWJ'),
('KM305', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-13-02', 0, 'KELAS1', '28', 'Y', 'Y', '14', 'RWJ'),
('KM306', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-14-01', 0, 'KELAS1', '29', 'Y', 'Y', '15', 'RWJ'),
('KM307', 'RADEN WIJAYA', 'RADEN WIJAYA-KELAS 1-14-02', 0, 'KELAS1', '30', 'Y', 'Y', '15', 'RWJ'),
('KM310', 'KERTABHUMI', 'KERTABHUMI ANAK ISO-KELAS1-09-02', 0, 'KELAS1', '34', 'Y', 'Y', '01', 'KTBM'),
('KM311', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-19', 0, 'ICU', '19', 'Y', 'N', '01', 'CVD'),
('KM312', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-20', 0, 'ICU', '20', 'Y', 'N', '01', 'CVD'),
('KM313', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-21', 0, 'ICU', '21', 'Y', 'N', '01', 'CVD'),
('KM314', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-22', 0, 'ICU', '22', 'Y', 'N', '01', 'CVD'),
('KM315', 'ICU COVID-ISO', 'ICU-COVID-ISOLASI-01-23', 0, 'ICU', '23', 'Y', 'N', '01', 'CVD'),
('KM316', 'KERTABHUMI', 'KERTABHUMI KLS1 01', 0, 'KELAS1', '01', 'Y', 'Y', '03', 'KTBM'),
('KM317', 'KERTABHUMI', 'KERTABHUMI KLS1 02', 0, 'KELAS1', '01', 'Y', 'Y', '03', 'KTBM'),
('KM318', 'HAYAM WURUK', 'HAYAM WURUK-KELAS1-07-04', 0, 'KELAS1', '01', 'N', 'Y', '03', 'HWK'),
('KM319', 'RADEN WIJAYA-ISO', 'RADEN WIJAYA-ISO-1', 0, 'ICU', '1', 'Y', 'Y', '01', 'RWJ'),
('KM320', 'RADEN WIJAYA-ISO', 'RADEN WIJAYA-ISO-2', 0, 'ICU', '2', 'Y', 'Y', '02', 'RWJ'),
('KM321', 'HAYAM WURUK-ISO', 'HAYAM WURUK-ISO-1', 0, 'ICU', '1', 'Y', 'Y', '01', 'HWK'),
('KM322', 'HAYAM WURUK-ISO', 'HAYAM WURUK-ISO-2', 0, 'ICU', '2', 'Y', 'Y', '02', 'HWK'),
('KM323', 'PERINATAL-ISO', 'PERINATAL-ISO-1', 0, 'ICU', '1', 'Y', 'Y', '01', 'PRNT');

-- --------------------------------------------------------

--
-- Table structure for table `tracer`
--

CREATE TABLE `tracer` (
  `id_temp` varchar(15) NOT NULL,
  `id_user` varchar(7) NOT NULL,
  `aksi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('040103050002', '3516031710950002', 'Pariono', 'db6f6da1ce3437f3d38eb05a63402d41', 'JBT04', 'Jalan Mawar RT 3 RW 5, Dusun Claket', 'Laki-Laki', 'pari@gmailcom', '029', 'profil3.png');

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
-- Indexes for table `m_aplicare`
--
ALTER TABLE `m_aplicare`
  ADD PRIMARY KEY (`id_aplicare`);

--
-- Indexes for table `m_bed`
--
ALTER TABLE `m_bed`
  ADD PRIMARY KEY (`id_bed`);

--
-- Indexes for table `m_kelas`
--
ALTER TABLE `m_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `m_ruang`
--
ALTER TABLE `m_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`);

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
-- Indexes for table `tm_kamar`
--
ALTER TABLE `tm_kamar`
  ADD PRIMARY KEY (`KodeKamar`);

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
-- AUTO_INCREMENT for table `m_aplicare`
--
ALTER TABLE `m_aplicare`
  MODIFY `id_aplicare` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `bed_available` ON SCHEDULE EVERY 10 MINUTE STARTS '2018-04-23 16:40:00' ON COMPLETION PRESERVE DISABLE DO BEGIN
DELETE FROM bed_available_bpjs;
 
INSERT INTO bed_available_bpjs
SELECT
  CONVERT(unit_id, CHAR(10)) as koderuang,
  REPLACE(location.location_name, 'BANGSAL ', '')as namaruang,
  if(CONVERT(unit_id, CHAR(10))=1,'ICU',cos.cos_code_bpjs) as kodekelas,
  if(CONVERT(unit_id, CHAR(10))=1,'ICU', cos_name) as namakelas,
  COUNT(IF(status<>5,sub_unit_id, NULL)) as kapasitas,
  COUNT(IF(status IN(1,2), sub_unit_id, NULL)) as tersedia,
  0 as tersediapria,
  0 as tersediawanita,
  0 as tersediapriawanita
FROM
(SELECT
  unit.unit_id,
  unit.unit_name,
  sub_unit.location_id,
  sub_unit.sub_unit_id,
  status,
  sub_unit.disabled,
  IFNULL(cos_sub_unit.cos_id, IFNULL(cos_unit.cos_id,cos_dept.cos_id)) as cos_id
FROM
  sub_unit
LEFT JOIN unit ON (sub_unit.unit_id = unit.unit_id)
LEFT JOIN cos_dept ON (unit.dept_id=cos_dept.dept_id)
LEFT JOIN cos_dept cos_unit ON (unit.unit_id=cos_unit.unit_id)
LEFT JOIN cos_dept cos_sub_unit ON (sub_unit.sub_unit_id=cos_sub_unit.sub_unit_id)
WHERE (unit.sub_unit_availability = 1) AND (cos_unit.cos_id not in (34,35,36,37,38,39))
GROUP BY
  sub_unit_id) as tmp
LEFT JOIN cos ON (tmp.cos_id=cos.cos_id)
LEFT JOIN location ON (tmp.location_id=location.location_id)
WHERE ((disabled=0) OR (disabled is null)) AND (location.location_id in (36,37,38,39,40,41,48))
GROUP BY kodekelas, namaruang, namakelas
ORDER BY namaruang, kodekelas;
 
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
