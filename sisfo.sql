-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mei 2018 pada 20.22
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_karyawan`
--

CREATE TABLE `daftar_karyawan` (
  `NIK` int(20) NOT NULL COMMENT 'Nomor Induk Karyawan',
  `Nama_Karyawan` varchar(25) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `No_Handphone` int(15) NOT NULL,
  `Bidang_Pekerjaan` int(20) NOT NULL,
  `Alamat` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detil_poin`
--

CREATE TABLE `detil_poin` (
  `id_detil` int(11) NOT NULL,
  `id_poin` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detil_poin`
--

INSERT INTO `detil_poin` (`id_detil`, `id_poin`, `NIP`, `tanggal`) VALUES
(19, 1, 2018050401, '2018-05-08'),
(20, 2, 2018050401, '2018-05-08'),
(21, 1, 2018050401, '2018-05-08'),
(22, 2, 2018050401, '2018-05-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detil_proyek`
--

CREATE TABLE `detil_proyek` (
  `id_detilproyek` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detil_proyek`
--

INSERT INTO `detil_proyek` (`id_detilproyek`, `id_proyek`, `NIP`, `progress`) VALUES
(1, 1, 2018050401, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_penukaran`
--

CREATE TABLE `histori_penukaran` (
  `id_penukaran` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `id_penawaran` int(11) NOT NULL,
  `waktu_penukaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `histori_penukaran`
--

INSERT INTO `histori_penukaran` (`id_penukaran`, `NIP`, `id_penawaran`, `waktu_penukaran`) VALUES
(1, 2018050401, 1, '2018-05-08 17:42:30'),
(2, 2018050401, 1, '2018-05-08 17:42:30'),
(3, 2018050401, 1, '2018-05-08 17:42:30'),
(4, 2018050401, 1, '2018-05-08 17:42:30'),
(5, 2018050401, 1, '2018-05-08 17:42:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hrd`
--

CREATE TABLE `hrd` (
  `id_hrd` int(11) NOT NULL,
  `NIP` int(10) NOT NULL,
  `position` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hrd`
--

INSERT INTO `hrd` (`id_hrd`, `NIP`, `position`) VALUES
(1, 2018050403, 'Admin HR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(15) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('DSP', 'Kedisiplinan'),
('PRJ', 'Manajemen Proyek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `No_Laporan` int(100) NOT NULL,
  `No_IndukPeawai` varchar(100) NOT NULL,
  `Nama_Pegawai` varchar(100) NOT NULL,
  `Divisi_Pegawai` varchar(100) NOT NULL,
  `Bulan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_23_045700_create_penilaians_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawaran`
--

CREATE TABLE `penawaran` (
  `id_penawaran` int(11) NOT NULL,
  `nama_penawaran` text NOT NULL,
  `harga_poin` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penawaran`
--

INSERT INTO `penawaran` (`id_penawaran`, `nama_penawaran`, `harga_poin`, `deskripsi`) VALUES
(1, 'Liburan ke Bali', 10, 'Liburan bersama keluarga ke pulau dewata bali, menginap di hotel bintang 5 bersama keluarga! Rasakan nikmatnya!'),
(2, 'Umroh sekeluarga', 500, 'Nikmati perjalanan sekeluarga ke tanah suci mekkah. Temukan suasana religi pada setiap tempat yang dikunjungi.'),
(3, 'Paket liburan ke Disneyland', 2000, 'Nikmati perjalanan sekeluarga ke disneyland. Temukan wahana menantang pada setiap tempat yang dikunjungi.'),
(4, 'Wisata ke Pulau Seribu', 50, 'Nikmati perjalanan romantis bersama pasangan ke Pulau seribu, nikmati suasana pulau yang indah dan udara yang bersih bersama pasangan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
--

CREATE TABLE `penggajian` (
  `Kode_Gaji` int(50) NOT NULL,
  `Nama_Pegawai` varchar(100) NOT NULL,
  `No_Rekening` int(11) NOT NULL,
  `Bulan` date NOT NULL,
  `Rincian` varchar(10000) NOT NULL,
  `Nominal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `NIP` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaians`
--

CREATE TABLE `penilaians` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `kritis` double NOT NULL,
  `solutif` double NOT NULL,
  `hasil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poin`
--

CREATE TABLE `poin` (
  `id_poin` int(11) NOT NULL,
  `id_kategori` varchar(15) NOT NULL,
  `ket_poin` varchar(100) NOT NULL,
  `jum_poin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poin`
--

INSERT INTO `poin` (`id_poin`, `id_kategori`, `ket_poin`, `jum_poin`) VALUES
(1, 'DSP', 'Datang tepat waktu', 10),
(2, 'PRJ', 'Dapat bekerja tanpa pengawasan', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(11) NOT NULL,
  `nama_proyek` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `id_supervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `nama_proyek`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `id_supervisor`) VALUES
(1, 'Pembuatan Laporan Keuangan', '- Melakukan Rekap Track Record Penjualan<br>- Melaporkan ke bidang keuangan', '2018-05-08', '2018-05-16', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supervisor`
--

CREATE TABLE `supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `NIP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supervisor`
--

INSERT INTO `supervisor` (`id_supervisor`, `NIP`) VALUES
(1, 2018050402);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_div` int(2) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `tgl_input_div` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_div`, `divisi`, `tgl_input_div`) VALUES
(1, 'Factory', '2018-05-03 20:50:35'),
(2, 'Finance', '2018-05-03 20:51:19'),
(3, 'Logistic', '2018-05-03 20:52:25'),
(4, 'Purchasing', '2018-05-03 20:53:10'),
(5, 'Sales  &Marketing', '2018-05-03 20:54:40'),
(6, 'Public & Internal Affairs', '2018-05-03 20:29:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` int(2) NOT NULL,
  `id_div` int(2) NOT NULL,
  `nama_pg` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nohp` int(12) NOT NULL,
  `tgl_input_pg` datetime NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `id_div`, `nama_pg`, `pekerjaan`, `nohp`, `tgl_input_pg`, `foto`) VALUES
(2018050401, 6, 'Muhammad Fadhlan Supriadi', 'Publikasi', 2147483647, '2018-05-03 21:11:41', 'indocement2.gif'),
(2018050402, 5, 'Afdal Fauzan', 'Promosi', 2147483647, '2018-05-03 21:12:22', 'indocement3.gif'),
(2018050403, 4, 'Fadhillah Maryam', 'Pengadaan Material', 2147483647, '2018-05-03 21:13:49', 'indocement4.gif'),
(2018050404, 2, 'Siti Al Munawwirah', 'Pendataan Penjualan', 2147483647, '2018-05-03 21:15:18', 'indocement5.gif'),
(2018050405, 3, 'Yodie Suparman', 'Pendinginan', 2147483647, '2018-05-03 21:16:31', 'indocement6.gif'),
(2018050406, 1, 'Ridho Ahmad', 'manager', 2147483647, '2018-05-03 21:17:47', 'indocement7.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id_presensi` int(5) NOT NULL,
  `nip` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kodepresensi` enum('1','2') NOT NULL,
  `jampresensi` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_presensi`
--

INSERT INTO `tb_presensi` (`id_presensi`, `nip`, `tanggal`, `kodepresensi`, `jampresensi`) VALUES
(5, 2018050401, '2018-05-03', '1', '21:18:54'),
(6, 2018050401, '2018-05-03', '2', '21:18:58'),
(7, 2018050402, '2018-05-03', '1', '21:19:02'),
(8, 2018050403, '2018-05-03', '1', '21:19:04'),
(9, 2018050404, '2018-05-03', '1', '21:19:06'),
(10, 2018050405, '2018-05-03', '1', '21:19:08'),
(11, 2018050406, '2018-05-03', '1', '21:19:09'),
(12, 2018050402, '2018-05-03', '2', '21:19:14'),
(13, 2018050403, '2018-05-03', '2', '21:19:16'),
(14, 2018050404, '2018-05-03', '2', '21:19:17'),
(15, 2018050405, '2018-05-03', '2', '21:19:19'),
(16, 2018050406, '2018-05-03', '2', '21:19:20'),
(25, 2018050401, '2018-05-06', '1', '03:12:47'),
(26, 2018050401, '2018-05-06', '2', '03:12:50'),
(27, 2018050402, '2018-05-06', '1', '03:22:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `pass_user` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `NIP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `pass_user`, `nama`, `NIP`) VALUES
(1, 'adminhr1', 'adminhr1', 'Admin HR1', 0),
(2, 'padlan', '123', 'Muhammad Fadhlan Supriadi', 2018050401),
(4, 'afda', '123456', 'Afdal Fauzan', 2018050402),
(5, 'fadh', '123456', 'Fadhillah Maryam', 2018050403),
(6, 'siti', '123456', 'Siti Al Munawwirah', 2018050404),
(7, 'yodi', '123456', 'Yodie Suparman', 2018050405),
(8, 'ridh', '123456', 'Ridho Ahmad', 2018050406);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi`
--

CREATE TABLE `verifikasi` (
  `Kode_Verifikasi` int(50) NOT NULL,
  `Nama_Pegawai` varchar(100) NOT NULL,
  `No_IndukPegawai` varchar(100) NOT NULL,
  `Divisi_Pegawai` varchar(100) NOT NULL,
  `No_IndukSupervisor` varchar(100) NOT NULL,
  `Bulan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_karyawan`
--
ALTER TABLE `daftar_karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `detil_poin`
--
ALTER TABLE `detil_poin`
  ADD PRIMARY KEY (`id_detil`),
  ADD KEY `FK_POIN` (`id_poin`),
  ADD KEY `FK_PEGAWAI` (`NIP`);

--
-- Indexes for table `detil_proyek`
--
ALTER TABLE `detil_proyek`
  ADD PRIMARY KEY (`id_detilproyek`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indexes for table `histori_penukaran`
--
ALTER TABLE `histori_penukaran`
  ADD PRIMARY KEY (`id_penukaran`),
  ADD KEY `id_penawaran` (`id_penawaran`);

--
-- Indexes for table `hrd`
--
ALTER TABLE `hrd`
  ADD PRIMARY KEY (`id_hrd`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`No_Laporan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penawaran`
--
ALTER TABLE `penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`Kode_Gaji`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `penilaians`
--
ALTER TABLE `penilaians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poin`
--
ALTER TABLE `poin`
  ADD PRIMARY KEY (`id_poin`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`),
  ADD KEY `proyek_ibfk_1` (`id_supervisor`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id_supervisor`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_div`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `NIP` (`NIP`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`Kode_Verifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detil_poin`
--
ALTER TABLE `detil_poin`
  MODIFY `id_detil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `detil_proyek`
--
ALTER TABLE `detil_proyek`
  MODIFY `id_detilproyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `histori_penukaran`
--
ALTER TABLE `histori_penukaran`
  MODIFY `id_penukaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hrd`
--
ALTER TABLE `hrd`
  MODIFY `id_hrd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id_penawaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penilaians`
--
ALTER TABLE `penilaians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poin`
--
ALTER TABLE `poin`
  MODIFY `id_poin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `id_div` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `nip` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018050407;

--
-- AUTO_INCREMENT for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id_presensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detil_poin`
--
ALTER TABLE `detil_poin`
  ADD CONSTRAINT `FK_PEGAWAI` FOREIGN KEY (`NIP`) REFERENCES `tb_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_POIN` FOREIGN KEY (`id_poin`) REFERENCES `poin` (`id_poin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detil_proyek`
--
ALTER TABLE `detil_proyek`
  ADD CONSTRAINT `detil_proyek_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `tb_pegawai` (`nip`),
  ADD CONSTRAINT `detil_proyek_ibfk_2` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `histori_penukaran`
--
ALTER TABLE `histori_penukaran`
  ADD CONSTRAINT `histori_penukaran_ibfk_1` FOREIGN KEY (`id_penawaran`) REFERENCES `penawaran` (`id_penawaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hrd`
--
ALTER TABLE `hrd`
  ADD CONSTRAINT `hrd_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `tb_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `poin`
--
ALTER TABLE `poin`
  ADD CONSTRAINT `id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD CONSTRAINT `proyek_ibfk_1` FOREIGN KEY (`id_supervisor`) REFERENCES `supervisor` (`id_supervisor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `supervisor_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `tb_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_user` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
