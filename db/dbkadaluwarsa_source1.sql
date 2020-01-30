-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jan 2020 pada 09.19
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkadaluwarsa_source1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluwarsa` date NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_member` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `kode_barang`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `tgl_masuk`, `tgl_kadaluwarsa`, `barcode`, `supplier`, `harga_beli`, `harga_jual`, `harga_member`) VALUES
(1, 'Minyak dan Sembako', 'Indomilk Susu Kaleng', 'Susu', 12, '2020-01-01', '2020-06-16', '12345678', 'Susu Cap Gantung', 10500, 11000, '-'),
(2, 'Minyak dan Sembako', 'Minyak Bimoli 1L', 'Minyak Goreng', 6, '2020-01-02', '2020-05-20', '87654321', 'Lendir Kelapa', 11500, 13500, '-'),
(3, 'Minuman', 'Floridina', 'Minuman Kesehatan', 12, '2020-01-03', '2020-07-11', '23456789', 'Jeruk Purut', 2200, 3000, '-'),
(4, 'Minuman', 'Le Minerale', 'Minuman Jernih', 12, '2020-01-13', '2020-05-25', '98765432', 'Gunung Segar', 2300, 3000, '-'),
(5, 'Sampo dan Kosmetik', 'Zinc Men Active Cool', 'Shampoo', 15, '2020-02-18', '2020-10-29', '34567890', 'Anti Keriting Club', 14500, 17000, '-'),
(6, 'Sampo dan Kosmetik', 'Ponds Age Miracle', 'Bedak', 7, '2020-02-27', '2020-08-08', '09876543', 'Bedak Meong', 23000, 27000, '-'),
(7, 'Obat-obatan', 'Shad Nigella Plus', 'Obat', 13, '2020-01-15', '2021-01-22', '45678901', 'Herbal Kekinian', 118000, 149000, '118000'),
(8, 'Obat-obatan', 'Habbatussauda', 'Herbal', 13, '2020-03-24', '2021-03-24', '10987654', 'Herbal Kekinian', 40000, 50000, '-'),
(9, 'Ditergen dan Insektisida', 'Deterjen Daia Lemon', 'Deterjen', 8, '2020-02-10', '2020-07-10', '56789012', 'Busa Kental', 5500, 7000, '-'),
(10, 'Ditergen dan Insektisida', 'Deterjen Bubuk Boom', 'Deterjen', 10, '2020-01-23', '2020-04-10', '21098765', 'Busa Kental', 5500, 8000, '-'),
(11, 'Perlengkapan Rumah Tangga', 'Sikat Gigi Ciptadent', 'Sikat Gigi', 7, '2020-01-01', '2021-03-01', '67890123', 'Sikatku', 5500, 6000, '-'),
(12, 'Perlengkapan Rumah Tangga', 'Gilette Blue', 'Pencukur', 10, '2020-03-14', '2021-03-06', '32109876', 'Cukurata', 11500, 13000, '-'),
(13, 'Permen dan Biskuit', 'Permen KIS', 'Permen', 6, '2020-04-09', '2020-09-19', '78901234', 'Mintzzz', 4500, 5500, '-'),
(14, 'Permen dan Biskuit', 'Wafer Tango', 'Wafer', 24, '2020-05-05', '2021-03-26', '43210987', 'Wafer Renyah', 4000, 5000, '-'),
(15, 'Buah-buahan', 'Kurma Ajwa', 'Buah', 9, '2020-02-22', '2021-08-24', '89012345', 'Kurma Barokah', 120000, 160000, '-'),
(16, 'Buah-buahan', 'Kurma Khallas', 'Buah', 10, '2020-03-11', '2021-03-13', '54321098', 'Kurma Barokah', 55000, 75000, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(25) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `passwd`, `email`, `nama`, `level`, `ket`) VALUES
('Ifit', '62151baf551800881547b8f5347b899c', 'Fitriana04@gmail.com', 'Fitriana', 3, 'Karyawan'),
('Imay', 'd7f32cf0d04dfbf4a3dbeb7040e8cbfb', 'maisyaroh55@gmail.com', 'Maisyaroh', 2, 'Karyawan'),
('Mr.Bay', '10310abc1ab4d38075284e6b55244672', 'darumaikka31@gmail.com', 'Bayu Nugraha Purnama', 1, 'Manajer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
