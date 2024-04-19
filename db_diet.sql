-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 08.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status_admin` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`, `status_admin`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_diet`
--

CREATE TABLE `tbl_diet` (
  `id_diet` int(10) UNSIGNED NOT NULL,
  `nama_diet` varchar(150) NOT NULL,
  `penjelasan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_diet`
--

INSERT INTO `tbl_diet` (`id_diet`, `nama_diet`, `penjelasan`) VALUES
(7, 'Diet Ketogenik', 'adjadsjasj kdjaksj dkjasdsjasd lajd '),
(8, 'Diet Atkins', '<p>Diet atkins adalah diet yang mengharuskan mengurangi makanan berkarbohidrat atau bahkan untuk menghindarinya, sebagai gantinya dianjurkan untuk mengkonsumsi makanan dengan protein dan lemak dengan jumlah yang banyak. Dengan mengurangi karbohidrat akan '),
(9, 'Diet Mayo', '<p>Diet mayo adalah diet yang mengharuskan pelaku diet untuk berpuasa garam, baik itu makanan yang menggunakan garam ataupun beragam makanan asin lainnya. Cara kerja diet mayo adalah selama proses berpuasa garam tubuh akan secara kehilangan kadar garam da'),
(10, 'Diet Dukan', '<p>Diet dukan adalah diet yang menganjurkan pelaku diet untuk mengkonsumsi protein dengan jumlah yang tinggi dan mengurangi karbohidrat dan makanan berlemak. Dengan asupan protein yang tinggi tubuh akan merasa tidak lapar dalam waktu yang lama. Dalam menj'),
(11, 'Diet Mediterania', '<p>Diet mediterania adalah diet yang diadaptasi dari pola makan penduduk kawasan Mediterania. Olahan masakan Mediterania memang bervariasi menurut wilayah dan negaranya, tetapi sebagian besar menu Mediterania berfokus pada konsumsi sayuran, buah-buahan, b'),
(12, 'Diet Puasa (Intermittent Fasting)', '<p>Dibandingkan dengan istilah “diet” yang biasanya merujuk pada pengurangan atau pembatasan makan, diet puasa tidak mengatur makanan apa yang harus dikurangi atau dikonsumsi, tetapi kapan anda makan dan kapan harus berhenti makan alias “puasa’’. Diet ini'),
(13, 'Diet DASH (Dietary Approaches to Stop Hypertension)', '<p>Diet DASH merupakan diet yang menekankan pada pola makan rendah garam namun tetap mengandung nutrisi seimbang, sehingga tidak hanya mampu mencegah hipertensi saja, tapi juga mengurangi risiko terkena penyakit lain seperti jantung, stroke, diabetes, ost'),
(14, 'diet lokal', 'diet lokal adalah diet yang di buat secara lokal oleh orang lokal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kondisi`
--

CREATE TABLE `tbl_kondisi` (
  `id_kondisi` int(10) UNSIGNED NOT NULL,
  `diet_id` int(10) NOT NULL,
  `nama_kondisi` varchar(150) NOT NULL,
  `pertanyaan` varchar(150) NOT NULL,
  `mb` decimal(5,1) NOT NULL,
  `md` decimal(5,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_kondisi`
--

INSERT INTO `tbl_kondisi` (`id_kondisi`, `diet_id`, `nama_kondisi`, `pertanyaan`, `mb`, `md`) VALUES
(24, 7, 'Cocok untuk penderita epilepsi', 'Apa anda mengidap penyakit epilepsi ?', '0.7', '0.2'),
(25, 7, 'Cocok untuk penderita diabetes', 'apa anda mengidap penyakit diabetes ?', '0.7', '0.7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsultasi`
--

CREATE TABLE `tbl_konsultasi` (
  `id_konsultasi` int(10) UNSIGNED NOT NULL,
  `diet_id` int(10) NOT NULL,
  `total_mb` decimal(5,1) DEFAULT NULL,
  `total_md` decimal(5,1) DEFAULT NULL,
  `hasil` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_diet`
--
ALTER TABLE `tbl_diet`
  ADD PRIMARY KEY (`id_diet`);

--
-- Indeks untuk tabel `tbl_kondisi`
--
ALTER TABLE `tbl_kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indeks untuk tabel `tbl_konsultasi`
--
ALTER TABLE `tbl_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_diet`
--
ALTER TABLE `tbl_diet`
  MODIFY `id_diet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_kondisi`
--
ALTER TABLE `tbl_kondisi`
  MODIFY `id_kondisi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_konsultasi`
--
ALTER TABLE `tbl_konsultasi`
  MODIFY `id_konsultasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
