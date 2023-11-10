-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 09:38 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor_diri`
--

-- --------------------------------------------------------

--
-- Table structure for table `kordinator_sekolah`
--

CREATE TABLE `kordinator_sekolah` (
  `id_kordinator` int(11) NOT NULL,
  `npsn` varchar(55) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `nama_kordinator` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `nip` varchar(55) NOT NULL,
  `nik` varchar(55) NOT NULL,
  `golongan` varchar(55) NOT NULL,
  `pangkat` varchar(55) NOT NULL,
  `npwp` varchar(55) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `kontak_pengiriman` varchar(55) NOT NULL,
  `provinsi_pengiriman` varchar(255) NOT NULL,
  `kabupaten_pengiriman` varchar(255) NOT NULL,
  `kecamatan_pengiriman` varchar(255) NOT NULL,
  `kp_pengiriman` varchar(55) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `no_rekening` varchar(55) NOT NULL,
  `nama_bank` varchar(55) NOT NULL,
  `cabang` varchar(55) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `kode_bank` varchar(55) NOT NULL,
  `scan_rekening` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kordinator_sekolah`
--

INSERT INTO `kordinator_sekolah` (`id_kordinator`, `npsn`, `nama_sekolah`, `nama_kordinator`, `kontak`, `nip`, `nik`, `golongan`, `pangkat`, `npwp`, `alamat_pengiriman`, `kontak_pengiriman`, `provinsi_pengiriman`, `kabupaten_pengiriman`, `kecamatan_pengiriman`, `kp_pengiriman`, `nama_penerima`, `no_rekening`, `nama_bank`, `cabang`, `nama_rekening`, `kode_bank`, `scan_rekening`) VALUES
(1, '69895564', '', 'testing1', '1227', '27527', '72782', 'Non-PNS', 'Non-PNS', '7827', '72', '1227', '728', '72', '782', '72', '728', '72', '72', '72', '72', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `layout`
--

CREATE TABLE `layout` (
  `id_layout` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layout`
--

INSERT INTO `layout` (`id_layout`, `link`) VALUES
(1, 'https://umpwr.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `telepon` varchar(55) NOT NULL,
  `no_ukg` varchar(55) NOT NULL,
  `nuptk` varchar(55) NOT NULL,
  `nik` varchar(55) NOT NULL,
  `nip` varchar(55) NOT NULL,
  `kontak_darurat` varchar(55) NOT NULL,
  `no_darurat` varchar(55) NOT NULL,
  `tempat_lahir` varchar(55) NOT NULL,
  `npsn_sekolah` varchar(55) NOT NULL,
  `sekolah` varchar(55) NOT NULL,
  `jenjang` varchar(55) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `lptk` varchar(255) NOT NULL,
  `bidang_studi` varchar(255) NOT NULL,
  `kode_bidang_studi` varchar(55) NOT NULL,
  `nama_kelas` varchar(55) NOT NULL,
  `tahun` varchar(55) NOT NULL,
  `angkatan` varchar(55) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `provinsi_rumah` varchar(255) NOT NULL,
  `kabupaten_rumah` varchar(255) NOT NULL,
  `kecamatan_rumah` varchar(255) NOT NULL,
  `kp_rumah` varchar(55) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `provinsi_pengiriman` varchar(255) NOT NULL,
  `kabupaten_pengiriman` varchar(255) NOT NULL,
  `kecamatan_pengiriman` varchar(255) NOT NULL,
  `kp_pengiriman` varchar(55) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `kontak_penerima` varchar(55) NOT NULL,
  `instansi_asal` varchar(255) NOT NULL,
  `alamat_instansi_asal` text NOT NULL,
  `provinsi_instansi_asal` varchar(255) NOT NULL,
  `kabupaten_instansi_asal` varchar(255) NOT NULL,
  `kecamatan_instansi_asal` varchar(255) NOT NULL,
  `kp_instansi_asal` varchar(55) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `cabang_bank` varchar(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `npwp` varchar(55) NOT NULL,
  `operator` varchar(55) NOT NULL,
  `no_data` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `npsn_ppl` varchar(55) NOT NULL,
  `sekolah_ppl` varchar(255) NOT NULL,
  `provinsi_ppl` varchar(255) NOT NULL,
  `kabupaten_ppl` varchar(255) NOT NULL,
  `kecamatan_ppl` varchar(255) NOT NULL,
  `alamat_ppl` text NOT NULL,
  `form_a1` text NOT NULL,
  `pakta_integritas` text NOT NULL,
  `bio` text NOT NULL,
  `ijasah` text NOT NULL,
  `transkip` text NOT NULL,
  `surat_sehat` text NOT NULL,
  `surat_izin` text NOT NULL,
  `pas_foto` text NOT NULL,
  `skck` text NOT NULL,
  `surat_napsa` text NOT NULL,
  `scan_npwp` text NOT NULL,
  `scan_ktp` text NOT NULL,
  `sk_tugas` text NOT NULL,
  `sk_pangkat` text NOT NULL,
  `bukti_pmb` text NOT NULL,
  `note_berkas` text NOT NULL,
  `level` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `tgl_lahir`, `gender`, `telepon`, `no_ukg`, `nuptk`, `nik`, `nip`, `kontak_darurat`, `no_darurat`, `tempat_lahir`, `npsn_sekolah`, `sekolah`, `jenjang`, `jabatan`, `lptk`, `bidang_studi`, `kode_bidang_studi`, `nama_kelas`, `tahun`, `angkatan`, `alamat_rumah`, `provinsi_rumah`, `kabupaten_rumah`, `kecamatan_rumah`, `kp_rumah`, `alamat_pengiriman`, `provinsi_pengiriman`, `kabupaten_pengiriman`, `kecamatan_pengiriman`, `kp_pengiriman`, `nama_penerima`, `kontak_penerima`, `instansi_asal`, `alamat_instansi_asal`, `provinsi_instansi_asal`, `kabupaten_instansi_asal`, `kecamatan_instansi_asal`, `kp_instansi_asal`, `no_rekening`, `nama_bank`, `cabang_bank`, `nama_rekening`, `npwp`, `operator`, `no_data`, `status`, `npsn_ppl`, `sekolah_ppl`, `provinsi_ppl`, `kabupaten_ppl`, `kecamatan_ppl`, `alamat_ppl`, `form_a1`, `pakta_integritas`, `bio`, `ijasah`, `transkip`, `surat_sehat`, `surat_izin`, `pas_foto`, `skck`, `surat_napsa`, `scan_npwp`, `scan_ktp`, `sk_tugas`, `sk_pangkat`, `bukti_pmb`, `note_berkas`, `level`) VALUES
(1, 'LAILIN MUFIDAH', '1989-05-23', 'Perempuan', '085292915308', '201699505690', '1955767668230072', '3318216306890003', '0', 'SUPRIYANTO', '089671621235', 'WONOSOBO', '69895564', 'SMP ALMADINA', 'SMP', '1', 'Universitas Muhammadiyah Purworejo', '1', '', '1', '2023', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', 'Lapor Diri', '69895564', '', '', '', '', '', '_Dokumen_375934_1698990970_-Sosialisasi-Visitas.pdf', '_Dokumen_375934_1698990970_-Sosialisasi-Visitas.pdf', '_Sertifikat AIPT 2022.pdf', '_Sertifikat_AIPT_2022.pdf', '_Sertifikat_AIPT_2017.pdf', '_Sertifikat AIPT sebelum 2015.pdf', '_SE_Form Kepuasan Tendik.pdf', '_Rofik Hidayat.jpeg', '_stnk.pdf', '_Undangan Persahabatan UMP Purworejo.pdf', '_Undangan Hari Ber-Muhammadiyah.pdf', '11318_Sertifikat AIPT 2022.pdf', '', '', '25651_stnk.pdf', '', 'peserta'),
(2, 'SIGIT PURNOMO', '1989-06-23', '', '', '201503234093', '', '3404120909800003', '', '', '', '', '69895564', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'peserta'),
(3, '', '0000-00-00', '', '', 'admin', '', 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kordinator_sekolah`
--
ALTER TABLE `kordinator_sekolah`
  ADD PRIMARY KEY (`id_kordinator`);

--
-- Indexes for table `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`id_layout`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kordinator_sekolah`
--
ALTER TABLE `kordinator_sekolah`
  MODIFY `id_kordinator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `layout`
--
ALTER TABLE `layout`
  MODIFY `id_layout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
