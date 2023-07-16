-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 16 Jul 2023 pada 09.25
-- Versi server: 5.7.34
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpu_hss_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diklat`
--

CREATE TABLE `diklat` (
  `id_diklat` int(11) NOT NULL,
  `jenis_diklat` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_diklat` varchar(50) NOT NULL,
  `filest` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `diklat`
--

INSERT INTO `diklat` (`id_diklat`, `jenis_diklat`, `id_user`, `status_diklat`, `filest`) VALUES
(1, 'Diklat Fungsional', 11, 'Pengajuan', '67465.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nominatif_pegawai`
--

CREATE TABLE `nominatif_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `pangkat_gol` varchar(50) DEFAULT NULL,
  `pangkat_tmt` date DEFAULT NULL,
  `jabatan_struktural` varchar(50) DEFAULT NULL,
  `jabatan_tmt` date DEFAULT NULL,
  `no_sk_penempatan` varchar(50) DEFAULT NULL,
  `jk` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pendidikan_umum` varchar(50) DEFAULT NULL,
  `pendidikan_tmt` date DEFAULT NULL,
  `keterangan` text,
  `filepangkat` varchar(255) DEFAULT NULL,
  `filejabatan` varchar(255) DEFAULT NULL,
  `filepenempatan` varchar(255) DEFAULT NULL,
  `filependidikan` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `nominatif_pegawai`
--

INSERT INTO `nominatif_pegawai` (`id_pegawai`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `nip`, `pangkat_gol`, `pangkat_tmt`, `jabatan_struktural`, `jabatan_tmt`, `no_sk_penempatan`, `jk`, `agama`, `pendidikan_umum`, `pendidikan_tmt`, `keterangan`, `filepangkat`, `filejabatan`, `filepenempatan`, `filependidikan`, `id_user`) VALUES
(2, 'H.GUSTI ACHMAD RIDUAN,S.Sos', 'Banjarmasin', '1965-06-27', '196506271986031011', 'Pembina Tk.I,IV/b', '2020-01-10', 'Sekretaris', '2020-09-15', '-', 'Laki-laki', 'Islam', 'S1', '1999-01-01', 'Organik', '', '', '', '', 0),
(3, 'WAWAN SETIAWAN,SH', 'Kandangan', '1986-06-01', '198606012010121004', 'Penata, IIIc', '2018-04-01', 'Kepala Sub Bagian Keungan,Umum dan Logistik', '2022-03-11', '-', 'Laki-laki', 'Islam', 'S1', '2010-04-01', 'Organik', '', '', '', '', 0),
(4, 'FARAH AGUSTINA SETIAWATI,SH', 'Ujung Pandang', '1984-09-28', '198408282010122003', 'Penata, IIIc', '2019-01-04', 'Kepala Sub. Bagian Hukum dan Sumber Daya Manusia', '2022-11-03', '-', 'Perempuan', 'Islam', 'S1', '2019-01-04', 'Organik', '', '', '', '', 0),
(5, 'SUCI LESTARI,S.Ikom', 'Hulu Sungai Tengah', '1985-08-01', '198501082010122006', 'Penata, IIIc', '2019-01-04', 'Penyusun Bahan Informasi dan Publikasi', '2020-03-08', '-', 'Perempuan', 'Islam', 'S1', '2009-01-04', 'Organik', '', '', '', '', 0),
(6, 'RUSMA ARIATI,SE', 'Karang Jawa', '1984-06-21', '198406212011012013', 'Penata,IIIc', '2019-01-04', 'Penyusun Program Anggaran dan Pelaporan', '2020-01-20', '-', 'Perempuan', 'Islam', 'S1', '2006-01-04', 'Organik', '', '', '', '', 0),
(7, 'HELMALINA', 'Banjarbaru', '1968-03-18', '196803181990032003', 'Penata Muda Tk.I, IIIb', '2010-04-01', 'Pemeriksa Laporan dan Transaksi Keuangan', '2021-01-04', '-', 'Perempuan', 'Islam', 'SMA', '1988-01-01', 'Organik', '', '', '', '', 0),
(8, 'SYAIFUL ANWAR', 'Banjarbaru', '1974-11-27', '197411272007101001', 'Pengatur Tk.I,IId', '2019-10-01', 'Pengelola Kepegawaian', '2022-03-18', '-', 'Laki-laki', 'Islam', 'SMA', '1994-03-01', 'Organik', '', '', '', '', 0),
(9, 'ZAINAL HILMI YUSTAN', 'Kandangan', '1982-10-25', '198210252007011003', 'Pengatur Tk.I,IId', '2019-05-01', 'Pengelola Data', '2020-08-03', '-', 'Laki-laki', 'Islam', 'SMA', '2001-04-01', 'Organik', '', '', '', '', 0),
(10, 'NAJMI HIDAYATI', 'Kandangan', '1985-06-08', '198506082007012003', 'Pengatur Tk.I,IId', '2019-04-01', 'Verifikator Keuangan', '2016-01-14', '-', 'Perempuan', 'Islam', 'SMA', '2003-05-01', 'Organik', '', '', '', '', 0),
(11, 'JAINAL ABIDIN', 'Kandangan', '1982-07-12', '198207122009101001', 'Pengatur,IIc', '2018-04-01', 'Pengadministrasi Umum', '2020-08-03', '-', 'Laki-laki', 'Islam', 'SMA', '2001-02-01', 'Organik', '', '', '', '', 0),
(12, '1234', '1234', '2023-02-27', '1234', '1234', '2023-01-29', '1234', '2023-02-20', '1234', 'Laki-laki', 'Islam', 'SMA', '2023-02-20', '1231234', '21413.pdf', '98635.pdf', '37689.pdf', '57496.pdf', 0),
(13, 'Maria Ulfah', 'Kandangan', '2023-07-16', '123456', 'II B', '2023-07-16', '123', '2023-07-16', '123', 'Perempuan', 'Islam', 'S2', '2023-07-16', '123', '', '', '', '', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nominatif_ppnpn`
--

CREATE TABLE `nominatif_ppnpn` (
  `id_ppnpn` int(11) NOT NULL,
  `nama_ppnpn` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jk` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `sub_bagian` varchar(50) DEFAULT NULL,
  `ket` text,
  `filependidikan` varchar(255) DEFAULT NULL,
  `filesubbagian` varchar(255) DEFAULT NULL,
  `filepelatihan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `nominatif_ppnpn`
--

INSERT INTO `nominatif_ppnpn` (`id_ppnpn`, `nama_ppnpn`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `pendidikan`, `sub_bagian`, `ket`, `filependidikan`, `filesubbagian`, `filepelatihan`) VALUES
(5, 'SALDOZ YEDI', 'Kandangan', '1980-08-11', 'Laki-laki', 'Islam', 'SMA', 'Keungan,Umum dan Logistik', 'Petugas Keamanan (Satpam)', '', '', ''),
(6, 'MASTONI RIDANI', 'Taniran', '1991-06-01', 'Laki-laki', 'Islam', 'SMA', 'Keungan,Umum dan Logistik', 'Petugas Keamanan (Satpam)', '', '', ''),
(7, 'SUARIADI', 'Negara', '1998-03-02', 'Laki-laki', 'Islam', 'SMP', 'Keungan,Umum dan Logistik', 'Penjaga malam', '', '', ''),
(8, 'ABDURRAHMAN', 'PADANG BATUNG', '1988-10-12', 'Laki-laki', 'Islam', 'SMA', 'HUKUM DAN SDM', 'SOPIR', '', '', ''),
(9, 'EMALIANI', 'TANIRAN KUBAH', '1989-06-22', 'Perempuan', 'Islam', 'SMA', 'Keungan,Umum dan Logistik', 'PRAMUBAKTI', '', '', ''),
(10, 'APRIADI RAKHMAN,S.Kom', 'Kandangan', '1989-04-22', 'Laki-laki', 'Islam', 'S1', 'PERENCANAAN,DATA,DAN INFORMASI', 'ADMINISTRASI', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_pns`
--

CREATE TABLE `rekap_pns` (
  `id_rekap_pns` int(11) NOT NULL,
  `satker` varchar(50) DEFAULT NULL,
  `sekretaris` varchar(50) DEFAULT NULL,
  `kasubbag` varchar(50) DEFAULT NULL,
  `jumlah_staff` varchar(50) DEFAULT NULL,
  `jumlah_pegawai` varchar(50) DEFAULT NULL,
  `jk_lakilaki` varchar(50) DEFAULT NULL,
  `jk_perempuan` varchar(50) DEFAULT NULL,
  `jumlah_dpk` varchar(50) DEFAULT NULL,
  `jumlah_organik` varchar(50) DEFAULT NULL,
  `sd` varchar(50) DEFAULT NULL,
  `smp` varchar(50) DEFAULT NULL,
  `sma` varchar(50) DEFAULT NULL,
  `d1` varchar(50) DEFAULT NULL,
  `d2` varchar(50) DEFAULT NULL,
  `d3` varchar(50) DEFAULT NULL,
  `d4` varchar(50) DEFAULT NULL,
  `s1` varchar(50) DEFAULT NULL,
  `s2` varchar(50) DEFAULT NULL,
  `s3` varchar(50) DEFAULT NULL,
  `islam` varchar(50) DEFAULT NULL,
  `protestan` varchar(50) DEFAULT NULL,
  `katolik` varchar(50) DEFAULT NULL,
  `hindu` varchar(50) DEFAULT NULL,
  `budha` varchar(50) DEFAULT NULL,
  `khonghucu` varchar(50) DEFAULT NULL,
  `es3` varchar(50) DEFAULT NULL,
  `es4` varchar(50) DEFAULT NULL,
  `ket_jabatan_kosong` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rekap_pns`
--

INSERT INTO `rekap_pns` (`id_rekap_pns`, `satker`, `sekretaris`, `kasubbag`, `jumlah_staff`, `jumlah_pegawai`, `jk_lakilaki`, `jk_perempuan`, `jumlah_dpk`, `jumlah_organik`, `sd`, `smp`, `sma`, `d1`, `d2`, `d3`, `d4`, `s1`, `s2`, `s3`, `islam`, `protestan`, `katolik`, `hindu`, `budha`, `khonghucu`, `es3`, `es4`, `ket_jabatan_kosong`) VALUES
(3, 'Kab. HSS', '1', '3', '8', '12', '6', '6', '0', '12', '0', '0', '5', '0', '0', '0', '0', '7', '0', '0', '12', '0', '0', '0', '0', '0', '1', '3', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_ppnpn`
--

CREATE TABLE `rekap_ppnpn` (
  `id_rekap_ppnpn` int(11) NOT NULL,
  `satker` varchar(50) DEFAULT NULL,
  `jumlah_ppnpn` varchar(50) DEFAULT NULL,
  `jk_lakilaki` varchar(50) DEFAULT NULL,
  `jk_perempuan` varchar(50) DEFAULT NULL,
  `sd` varchar(50) DEFAULT NULL,
  `smp` varchar(50) DEFAULT NULL,
  `sma` varchar(50) DEFAULT NULL,
  `d1` varchar(50) DEFAULT NULL,
  `d2` varchar(50) DEFAULT NULL,
  `d3` varchar(50) DEFAULT NULL,
  `d4` varchar(50) DEFAULT NULL,
  `s1` varchar(50) DEFAULT NULL,
  `s2` varchar(50) DEFAULT NULL,
  `s3` varchar(50) DEFAULT NULL,
  `pramubakti` varchar(50) NOT NULL,
  `pengamanan` varchar(50) NOT NULL,
  `supir` varchar(50) NOT NULL,
  `bidang_administrasi` varchar(50) NOT NULL,
  `islam` varchar(50) DEFAULT NULL,
  `protestan` varchar(50) DEFAULT NULL,
  `katolik` varchar(50) DEFAULT NULL,
  `hindu` varchar(50) DEFAULT NULL,
  `budha` varchar(50) DEFAULT NULL,
  `khonghucu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rekap_ppnpn`
--

INSERT INTO `rekap_ppnpn` (`id_rekap_ppnpn`, `satker`, `jumlah_ppnpn`, `jk_lakilaki`, `jk_perempuan`, `sd`, `smp`, `sma`, `d1`, `d2`, `d3`, `d4`, `s1`, `s2`, `s3`, `pramubakti`, `pengamanan`, `supir`, `bidang_administrasi`, `islam`, `protestan`, `katolik`, `hindu`, `budha`, `khonghucu`) VALUES
(3, 'Kabupaten/Kota', '9', '7', '2', '0', '1', '5', '0', '0', '0', '0', '3', '0', '0', '2', '3', '2', '2', '9', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `role`) VALUES
(1, 'Maulida', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(11, 'Maria Ulfah', 'maria', '827ccb0eea8a706c4c34a16891f84e7b', 'PNS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diklat`
--
ALTER TABLE `diklat`
  ADD PRIMARY KEY (`id_diklat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `nominatif_pegawai`
--
ALTER TABLE `nominatif_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `nominatif_ppnpn`
--
ALTER TABLE `nominatif_ppnpn`
  ADD PRIMARY KEY (`id_ppnpn`);

--
-- Indeks untuk tabel `rekap_pns`
--
ALTER TABLE `rekap_pns`
  ADD PRIMARY KEY (`id_rekap_pns`);

--
-- Indeks untuk tabel `rekap_ppnpn`
--
ALTER TABLE `rekap_ppnpn`
  ADD PRIMARY KEY (`id_rekap_ppnpn`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diklat`
--
ALTER TABLE `diklat`
  MODIFY `id_diklat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nominatif_pegawai`
--
ALTER TABLE `nominatif_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `nominatif_ppnpn`
--
ALTER TABLE `nominatif_ppnpn`
  MODIFY `id_ppnpn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rekap_pns`
--
ALTER TABLE `rekap_pns`
  MODIFY `id_rekap_pns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rekap_ppnpn`
--
ALTER TABLE `rekap_ppnpn`
  MODIFY `id_rekap_ppnpn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
