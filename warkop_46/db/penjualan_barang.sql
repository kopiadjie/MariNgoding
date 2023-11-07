-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2023 pada 11.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warkop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_barang`
--

CREATE TABLE `penjualan_barang` (
  `id_barang` int(11) NOT NULL,
  `produk` varchar(12) NOT NULL,
  `harga` int(8) NOT NULL,
  `foto_produk` varchar(50) NOT NULL,
  `pemasukan` int(8) DEFAULT NULL,
  `pengeluaran` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan_barang`
--

INSERT INTO `penjualan_barang` (`id_barang`, `produk`, `harga`, `foto_produk`, `pemasukan`, `pengeluaran`) VALUES
(1, 'Kopi Sanger', 9000, 'Sanger.jpg', NULL, NULL),
(2, 'Kopi Pandan', 12000, 'Kopipandan.jpg', NULL, NULL),
(3, 'Manis Dingin', 5000, 'Manis Dingin.jpg', NULL, NULL),
(7, 'Sanger', 10000, 'Sanger.jpg', NULL, NULL),
(8, 'Sanger', 10000, 'Sanger.jpg', NULL, NULL),
(9, 'Kopi ', 10000, 'Sanger.jpg', NULL, NULL),
(10, 'Kolak Dingin', 5000, 'Sanger.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penjualan_barang`
--
ALTER TABLE `penjualan_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penjualan_barang`
--
ALTER TABLE `penjualan_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
