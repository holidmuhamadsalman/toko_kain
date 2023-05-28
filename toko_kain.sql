-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 28 Mei 2023 pada 06.35
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `toko_kain`
--
CREATE DATABASE IF NOT EXISTS `toko_kain` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `toko_kain`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('CL', 'Celana'),
('JK', 'Jaket'),
('KS', 'Kaos'),
('SPT', 'Sepatu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` varchar(11) NOT NULL,
  `kategori_id` varchar(11) NOT NULL,
  `suplier_id` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(15) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `gambar` varchar(5000) NOT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `kategori_id` (`kategori_id`),
  KEY `suplier_id` (`suplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori_id`, `suplier_id`, `nama`, `stok`, `harga`, `warna`, `gambar`) VALUES
('CTN-001', 'KS', 'SP-003', 'Cotton Combed', 20000, 55000, 'Hitam', '\0\0'),
('CTN-002', 'KS', 'SP-003', 'Cotton Combed', 20000, 55000, 'Putih', '\0\0'),
('DRL-001', 'CL', 'SP-002', 'Drill', 20000, 45000, 'Hitam', '\0\0'),
('DRL-002', 'CL', 'SP-002', 'Drill', 20000, 45000, 'Putih', '\0\0'),
('DRL-003', 'CL', 'SP-002', 'Drill', 3000, 45000, 'Merah', 'drill.png'),
('DSP-001', 'JK', 'SP-001', 'Despo', 1000, 21000, 'Hitam', 'despo.png'),
('DSP-002', 'JK', 'SP-001', 'Despo', 2000, 21000, 'Putih', 'despo.png'),
('TSL-001', 'JK', 'SP-001', 'Taslan', 20000, 27000, 'Hitam', '\0\0'),
('TSL-002', 'JK', 'SP-001', 'Taslan', 20000, 27000, 'Putih', '\0\0'),
('TSL-003', 'JK', 'SP-001', 'Taslan', 3000, 27000, 'Merah', 'taslan.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
  `id_suplier` varchar(11) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `alamat`, `telepon`) VALUES
('SP-001', 'PT Jaket Makmur Jaya', 'Jl. Jaket Makmur Jaya No. 1', '0223929029'),
('SP-002', 'PT Celana Makmur Jaya', 'Jl. Celana Makmur Jaya No. 2', '0223929030'),
('SP-003', 'PT Kaos Makmur Jaya', 'Jl. Kaos Makmur Jaya No. 3', '0222334455');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`suplier_id`) REFERENCES `suplier` (`id_suplier`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
