-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20 Nov 2017 pada 20.26
-- Versi Server: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apptrans`
--
CREATE DATABASE IF NOT EXISTS `apptrans` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `apptrans`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kategori` varchar(30) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `merk_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `editoleh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `kode_barangmasuk` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `oleh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `barangmasuk`
--
DELIMITER $$
CREATE TRIGGER `barang_masuk` AFTER INSERT ON `barangmasuk` FOR EACH ROW begin
update barang set jumlah = jumlah + new.jumlah where kode_barang = new.kode_barang;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `barangmasukkurang` AFTER DELETE ON `barangmasuk` FOR EACH ROW begin
update barang set jumlah = jumlah - old.jumlah where kode_barang = old.kode_barang;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`level`) VALUES
('admin'),
('member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`username`, `password`, `nama`, `level`) VALUES
('mine', 'mine', 'yasminemine', 'member'),
('yasmine', 'yap', 'Yasmine Yap', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merkban`
--

CREATE TABLE `merkban` (
  `merkban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merkban`
--

INSERT INTO `merkban` (`merkban`) VALUES
('CORSA'),
('FDR'),
('MAXXIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merkhelm`
--

CREATE TABLE `merkhelm` (
  `merkhelm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merkhelm`
--

INSERT INTO `merkhelm` (`merkhelm`) VALUES
('DYR'),
('GM'),
('GTZONE'),
('KYT'),
('MDS'),
('NPN'),
('TAKIRA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan`
--

CREATE TABLE `pendapatan` (
  `tanggal` date NOT NULL,
  `pendapatan_kotor` int(100) NOT NULL,
  `pendapatan_bersih` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `kode_jual` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `harga_pokok` int(10) NOT NULL,
  `harga_jualtotal` int(100) NOT NULL,
  `harga_pokoktotal` int(100) NOT NULL,
  `laba` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `oleh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `penjualan`
--
DELIMITER $$
CREATE TRIGGER `hasilpenjualan` AFTER INSERT ON `penjualan` FOR EACH ROW begin
update barang set jumlah = jumlah - new.jumlah where kode_barang = new.kode_barang;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penjualantidakjadi` AFTER DELETE ON `penjualan` FOR EACH ROW begin
update barang set jumlah = jumlah + old.jumlah where kode_barang = old.kode_barang;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `harga` (`harga`),
  ADD KEY `oleh` (`oleh`),
  ADD KEY `editoleh` (`editoleh`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`kode_barangmasuk`),
  ADD KEY `oleh` (`oleh`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `merkban`
--
ALTER TABLE `merkban`
  ADD PRIMARY KEY (`merkban`);

--
-- Indexes for table `merkhelm`
--
ALTER TABLE `merkhelm`
  ADD PRIMARY KEY (`merkhelm`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode_jual`),
  ADD KEY `harga_pokok` (`harga_pokok`),
  ADD KEY `oleh` (`oleh`),
  ADD KEY `harga_jualtotal` (`harga_jualtotal`),
  ADD KEY `laba` (`laba`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `kode_barangmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `kode_jual` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `kode_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`oleh`) REFERENCES `member` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`editoleh`) REFERENCES `member` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD CONSTRAINT `barangmasuk_ibfk_1` FOREIGN KEY (`oleh`) REFERENCES `member` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`harga_pokok`) REFERENCES `barang` (`harga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`oleh`) REFERENCES `member` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
