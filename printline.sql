-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Des 2018 pada 15.33
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jilid`
--

CREATE TABLE `jilid` (
  `id` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `warna` enum('bening','biru','kuning','hijau','merah','mix') NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jilid`
--

INSERT INTO `jilid` (`id`, `id_toko`, `warna`, `harga`) VALUES
(1, 1, 'kuning', 2000),
(2, 1, 'kuning', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_print` int(11) NOT NULL,
  `id_jilid` int(11) NOT NULL,
  `file` blob NOT NULL,
  `tgl_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_ambil` datetime NOT NULL,
  `total` double NOT NULL,
  `note` text NOT NULL,
  `status` enum('belum','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `id_user`, `id_print`, `id_jilid`, `file`, `tgl_pesan`, `tgl_ambil`, `total`, `note`, `status`) VALUES
(1, 1, 4, 1, '', '2018-12-26 12:15:49', '2018-12-19 06:32:22', 40000, 'mix depan bening belakang merah', 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `print`
--

CREATE TABLE `print` (
  `id` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `jenis_cetak` enum('warna','bw') NOT NULL,
  `ink_coverage` enum('full','medium','low') NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `print`
--

INSERT INTO `print` (`id`, `id_toko`, `jenis_cetak`, `ink_coverage`, `ukuran`, `harga`) VALUES
(1, 1, 'bw', 'medium', 'A3', 4000),
(2, 1, 'bw', 'low', 'A4', 500),
(3, 1, 'bw', 'low', 'F4', 500),
(4, 1, 'warna', 'medium', 'A4', 600),
(5, 1, 'warna', 'low', 'A4', 500),
(6, 1, 'warna', 'low', 'A4', 500),
(7, 1, 'warna', 'low', 'A4', 500),
(8, 1, 'warna', 'medium', 'A4', 1),
(9, 1, 'warna', 'medium', 'A4', 1),
(10, 1, 'warna', 'low', 'A3', 1),
(11, 1, 'bw', 'low', 'A4', 700),
(12, 1, 'warna', 'full', 'A3', 700);

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `saldo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id`, `id_user`, `nama_toko`, `alamat`, `deskripsi`, `saldo`) VALUES
(1, 1, 'Aidia Printing', 'Permai 7', 'Bisa print, bisa jilid', 0),
(3, 3, 'Syahdan Printing', 'Gading Elok 2 Karawang Timur', 'Print dokumen, foto, penjilidan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `level` enum('seller','customer') NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nama`, `password`, `level`, `created`, `remember_token`) VALUES
(1, 'aidiaoemami', 'aidiaoemami@gmail.com', 'Aidia Oemami', '$2y$10$mEsLMXANX7iiecfPYNKbwej5aMHl.zR1Jjq06yNRcGL6g7bwSpXPe', 'seller', '2018-12-26 14:25:54', '66zIsE6L2Gthxa3l5VbJx32XgrPemz3mPRehf8KqzkF4pB6mOnlXxlhUflsL'),
(2, 'cust', 'cust@gmail.com', 'cust', 'cust123', 'customer', '2018-12-17 11:19:20', ''),
(3, 'syahdanazzami', 'syahdanazzami@gmail.com', 'Syahdan Azzami', '$2y$10$/PPhizOGdL2IAfjaAwd63uLLMb6bs1FUjXkEbkCUUaC6wadHCDvNG', 'seller', '2018-12-18 07:51:05', 'QhJtZNRPDWKiMkRlVO2bKQl5YJfnZsEus1gNffKoOAKOcmkj88woOPQahzqd'),
(4, 'bunga', 'bunga21@gmail.com', 'Bunga Zaenal', '$2y$10$8QoRf5hL3gfp8OilIa523eZMqzSI9V1IwG/S7XUWxCji3Klj5PVlC', 'customer', '2018-12-26 12:50:13', 'lWEQtlOH7JeOlcqvZaLQ8vk1rC6dPGV1Fq3gRmbxBiNLWTmBZvy3sdjfrXIL'),
(6, 'customer', 'cust123@gmail.com', 'Customer', '$2y$10$rIulFEPvu8x0InIJCbKEreDN48o6OAa0IbUkciWZXIPFVlK3c.kEC', 'customer', '2018-12-19 15:02:32', NULL),
(9, 'darius', 'darius@gmail.com', 'Darius', '$2y$10$JolvyJQv3EAUURUd0piqW.z.I.Yl/Zq3dcsAXeOkh4844EhxOSSMi', 'customer', '2018-12-19 15:05:18', NULL),
(10, 'hanaazzah', 'hanaazzah@gmail.com', 'Hana Azzah', '$2y$10$El7Pal00smqgrJkTxn3bGOaEj7xn46OoDvHNreWjzjJA39056vzHO', 'customer', '2018-12-21 03:20:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jilid`
--
ALTER TABLE `jilid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_print` (`id_print`),
  ADD KEY `id_jilid` (`id_jilid`);

--
-- Indexes for table `print`
--
ALTER TABLE `print`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jilid`
--
ALTER TABLE `jilid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `print`
--
ALTER TABLE `print`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jilid`
--
ALTER TABLE `jilid`
  ADD CONSTRAINT `jilid_ibfk_1` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pesan_ibfk_3` FOREIGN KEY (`id_print`) REFERENCES `print` (`id`);

--
-- Ketidakleluasaan untuk tabel `print`
--
ALTER TABLE `print`
  ADD CONSTRAINT `print_ibfk_1` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id`);

--
-- Ketidakleluasaan untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
