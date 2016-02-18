-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Feb 2016 pada 05.20
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `nip` int(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Hindu','Budha') NOT NULL,
  `pend_terakhir` enum('SMA','D4/S1','S2','S3') NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` varchar(15) NOT NULL,
  `nuptk` varchar(100) NOT NULL,
  `gol` varchar(20) NOT NULL,
  `tgs_mengajar` varchar(30) NOT NULL,
  `tgs_tambahan` varchar(30) NOT NULL,
  `thn_sertifikasi` char(4) NOT NULL,
  `stat_kepegawaian` enum('PNS','CPNS','ADM.Honor') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `sk_cpns` varchar(100) NOT NULL,
  `tmt_cpns` date NOT NULL,
  `sk_pns` varchar(100) NOT NULL,
  `tmt_pns` date NOT NULL,
  `tmt_guru` date NOT NULL,
  `tmt_disekolah` date NOT NULL,
  `stat_perkawinan` enum('Menikah','Belum Menikah') NOT NULL,
  `nm_sekolah` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nama_guru`, `jenis_kelamin`, `agama`, `pend_terakhir`, `jurusan`, `tempat_lahir`, `tanggal_lahir`, `umur`, `nuptk`, `gol`, `tgs_mengajar`, `tgs_tambahan`, `thn_sertifikasi`, `stat_kepegawaian`, `no_hp`, `sk_cpns`, `tmt_cpns`, `sk_pns`, `tmt_pns`, `tmt_guru`, `tmt_disekolah`, `stat_perkawinan`, `nm_sekolah`, `gambar`) VALUES
(2, 'najirah umar', 'L', 'Islam', 'SMA', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` int(11) NOT NULL,
  `nm_jurusan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `kode_jurusan`, `nm_jurusan`) VALUES
(3, 2, 'ti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `nm_kelas` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kode_kelas`, `nm_kelas`) VALUES
(4, 2, 'dfgdfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_prakerin`
--

CREATE TABLE `tbl_nilai_prakerin` (
  `id_nilai` int(5) NOT NULL,
  `id_prakerin` int(5) NOT NULL,
  `nilai` char(5) NOT NULL,
  `keterangan` enum('Lulus','Tidak Lulus') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prakerin`
--

CREATE TABLE `tbl_prakerin` (
  `id_prakerin` int(5) NOT NULL,
  `kode_siswa` int(5) NOT NULL,
  `kode_jurusan` int(5) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `lokasi_prakerin` varchar(100) NOT NULL,
  `alamat_lokasi` varchar(100) NOT NULL,
  `notelp` varchar(30) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_prakerin`
--

INSERT INTO `tbl_prakerin` (`id_prakerin`, `kode_siswa`, `kode_jurusan`, `kode_kelas`, `lokasi_prakerin`, `alamat_lokasi`, `notelp`, `kode_guru`, `periode`) VALUES
(1, 9, 2, 2, 'hnfhn', 'fhnhn', '4674667', 2, 'ttju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `kode_siswa` int(11) NOT NULL,
  `nm_siswa` varchar(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `angkatan` varchar(30) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `tempat_lhr` varchar(100) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `umur` varchar(30) NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_tinggal` enum('Bersama Orangtua','Wali','Lainnya') NOT NULL,
  `status` varchar(100) NOT NULL,
  `nm_sekolah` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`kode_siswa`, `nm_siswa`, `nis`, `jenkel`, `angkatan`, `nik`, `nisn`, `tempat_lhr`, `tgl_lhr`, `umur`, `agama`, `alamat`, `jenis_tinggal`, `status`, `nm_sekolah`, `gambar`) VALUES
(9, 'akbar', 454, 'L', '4', '43443', '3535', 'hnhf', '2016-02-03', '14', 'Islam', 'dgfdg', 'Bersama Orangtua', 'dgbdg', 'dgdg', 'an.jpg'),
(34, 'fris', 234234, 'L', '234', '23442', '24442', 'fbdfb', '2016-02-04', '4', 'Islam', 'srgfg', 'Wali', 'ffb', 'dfbfb', ' gd.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hak_akses` enum('Admin','Guru','Siswa') NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `nama`, `hak_akses`, `aktif`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Akbar Abustang', 'Admin', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_nilai_prakerin`
--
ALTER TABLE `tbl_nilai_prakerin`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_prakerin`
--
ALTER TABLE `tbl_prakerin`
  ADD PRIMARY KEY (`id_prakerin`),
  ADD KEY `kode_siswa` (`kode_siswa`),
  ADD KEY `kode_jurusan` (`kode_jurusan`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`kode_siswa`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_nilai_prakerin`
--
ALTER TABLE `tbl_nilai_prakerin`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `kode_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
