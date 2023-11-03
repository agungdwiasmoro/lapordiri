-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 09:16 AM
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
-- Table structure for table `koordiantor_sekolah`
--

CREATE TABLE `koordiantor_sekolah` (
  `id_koordiantor` int(11) NOT NULL,
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
  `scan_rekening` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `tgl_lahir`, `gender`, `telepon`, `no_ukg`, `nuptk`, `nik`, `nip`, `kontak_darurat`, `no_darurat`, `tempat_lahir`, `npsn_sekolah`, `sekolah`, `jenjang`, `jabatan`, `lptk`, `bidang_studi`, `kode_bidang_studi`, `nama_kelas`, `tahun`, `angkatan`, `alamat_rumah`, `provinsi_rumah`, `kabupaten_rumah`, `kecamatan_rumah`, `kp_rumah`, `alamat_pengiriman`, `provinsi_pengiriman`, `kabupaten_pengiriman`, `kp_pengiriman`, `nama_penerima`, `kontak_penerima`, `instansi_asal`, `alamat_instansi_asal`, `provinsi_instansi_asal`, `kabupaten_instansi_asal`, `kecamatan_instansi_asal`, `kp_instansi_asal`, `no_rekening`, `nama_bank`, `cabang_bank`, `nama_rekening`, `npwp`, `form_a1`, `pakta_integritas`, `bio`, `ijasah`, `transkip`, `surat_sehat`, `surat_izin`, `pas_foto`, `skck`, `surat_napsa`, `scan_npwp`, `scan_ktp`, `sk_tugas`, `sk_pangkat`, `bukti_pmb`, `note_berkas`, `scan_rekening`) VALUES
(1, 'LAILIN MUFIDAH\r\n', '1989-05-23', 'Perempuan', '085292915308', '201699505690', '1955767668230072', '3318216306890003', '0', 'SUPRIYANTO', '089671621235', 'WONOSOBO', '69895564', 'SMP ALMADINA', 'SMP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koordiantor_sekolah`
--
ALTER TABLE `koordiantor_sekolah`
  ADD PRIMARY KEY (`id_koordiantor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koordiantor_sekolah`
--
ALTER TABLE `koordiantor_sekolah`
  MODIFY `id_koordiantor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
