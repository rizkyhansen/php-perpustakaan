-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Agu 2025 pada 00.59
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
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`) VALUES
(4, 'Repellendus Corpori', 'Recusandae Suscipit', '2022-12-23', 'l', 'Saepe porro exercita'),
(34, 'Dolor amet non fugi', 'Et porro aut quis el', '2022-01-22', 'l', 'Minim quibusdam irur'),
(41, 'Vel aut blanditiis q', 'Dolor corporis ut do', '2021-04-25', 'l', 'Illum iusto volupta'),
(78, 'Dicta est in dolor e', 'Recusandae In sunt ', '1980-03-22', 'p', 'In aspernatur quis m'),
(9201, 'dafa', 'jakarta', '2006-07-04', 'l', 'Teknik Informatika'),
(9202, 'danu', 'serang', '2004-07-04', 'l', 'sistem informasi'),
(9204, 'riri', 'bandung', '2003-07-04', 'p', 'kehutanan'),
(9206, 'dinda', 'banyuwangi', '2000-07-04', 'p', 'perawat'),
(200420240, 'rizky', 'jakarta', '2010-11-30', 'l', 'teknik informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `pengarang` varchar(125) NOT NULL,
  `penerbit` varchar(125) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(3, 'docker', 'rizky', 'gramedia', '2022', '1424-ACB', 1, 'rak2', '2019-02-24'),
(4, 'docker', 'rizky', 'gramedia', '2022', '1424-ACB', 1, 'rak1', '2019-02-24'),
(5, 'docker banget', 'jakarta', 'rizky', '2024', '42421', 1, 'rak1', '2242-02-02'),
(6, 'docker banget', 'jakarta', 'rizky', '2024', '42421', 2, 'rak1', '2242-02-02'),
(7, 'query', 'radu', 'gramedia', '2021', '1424-ACB2', 2, 'rak2', '1992-02-24'),
(8, 'kubernetes', 'gramedia', 'yanti', '2025', '22421', 4, 'rak3', '2000-04-20'),
(9, 'jenkins', 'dindaa', 'gramedia', '2021', '1424-ACB1', 4, 'rak3', '2025-09-03'),
(10, 'jenkins', 'dindaa', 'gramedia', '2021', '1424-ACB1', 4, 'rak3', '2025-09-03'),
(13, 'Aut in voluptas offi', 'Nesciunt unde exped', 'Qui repellendus Lab', '1958', 'Dolor ut veniam dol', 66, 'rak2', '2019-02-06'),
(14, 'Qui amet iure minim', 'Iste minus ad cupidi', 'Iusto accusantium au', '1971', 'Magni quo dignissimo', 45, 'rak1', '1993-08-23'),
(15, 'Qui amet iure minim', 'Iste minus ad cupidi', 'Iusto accusantium au', '1971', 'Magni quo dignissimo', 45, 'rak1', '1993-08-23'),
(16, 'Qui amet iure minim', 'Iste minus ad cupidi', 'Iusto accusantium au', '1971', 'Magni quo dignissimo', 45, 'rak1', '1993-08-23'),
(17, 'Obcaecati labore con', 'Dolore tempora in qu', 'Qui dolores harum ci', '1974', 'Sunt voluptate fugi', 51, 'rak3', '1980-08-15'),
(18, 'Repellendus Veniam', 'Error impedit repre', 'Eius et dolores et s', '1962', 'Tenetur quae obcaeca', 25, 'rak2', '2024-09-10'),
(19, 'Quia reprehenderit a', 'Ut praesentium quas ', 'Maiores proident du', '1955', 'Veritatis atque dolo', 14, 'rak1', '2008-03-12'),
(20, 'Laboris quasi non om', 'Dolor fuga Totam ut', 'Nostrum quibusdam re', '2019', 'Tenetur ducimus ips', 16, 'rak2', '2003-01-26'),
(22, 'Quaerat laborum corp', 'Doloribus qui rerum ', 'Placeat aut qui ali', '1960', 'Ipsum aspernatur qu', 55, 'rak3', '2001-03-19'),
(23, 'Quaerat laborum corp', 'Doloribus qui rerum ', 'Placeat aut qui ali', '1960', 'Ipsum aspernatur qu', 55, 'rak3', '2001-03-19'),
(24, 'Ea sunt et totam nob', 'Proident ab do quo ', 'Eiusmod suscipit vol', '1985', 'Est dicta amet ipsu', 67, 'rak1', '1990-07-12'),
(25, 'Debitis beatae sit ', 'Eaque magni ut non e', 'Ad sint aspernatur e', '1965', 'Magnam quia qui esse', 54, 'rak3', '1979-09-20'),
(26, 'laravel', 'rizky', 'gramedia', '2022', '1424-ACB', 4, 'rak1', '2025-08-17'),
(27, 'laravel 2', 'akson', 'gramedia', '2009', '1424-ACB2W', 9, 'rak1', '2004-04-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_pinjam` varchar(30) DEFAULT NULL,
  `tgl_kembali` varchar(30) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 'docker', 9201, 'danu', '2025-08-05', '2025-08-08', 'kembali'),
(7, 'belajar php', 2014, 'rizky', '2024-08-01', '2025-08-08', 'kembali'),
(8, 'belajar php', 2014, 'rizkya', '2025-08-01', '2018-08-23', 'kembali'),
(9, 'laravel 2', 200420240, 'rizky', '17-08-2025', '04-09-25', 'kembali'),
(10, 'docker banget', 9206, 'dinda', '17-08-2025', '24-08-2025', 'pinjam'),
(11, 'laravel 2', 200420240, 'rizky', '17-08-2025', '24-08-2025', 'pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `level` varchar(100) NOT NULL,
  `foto` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin.png'),
(2, 'staff', 'staff', 'staff', 'staff', 'staff.png'),
(3, 'rizky', 'rizky', 'rizky', 'rizky', 'rizky.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
