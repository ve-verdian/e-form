-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2022 pada 07.48
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_asamurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_klasifikasi`
--

CREATE TABLE `ref_klasifikasi` (
  `id` int(4) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_klasifikasi`
--

INSERT INTO `ref_klasifikasi` (`id`, `kode`, `nama`, `uraian`) VALUES
(1, 'ACC.01', 'Accounting', 'Accounting'),
(2, 'ADM.01', 'Administration', 'Administration'),
(3, 'BYT.01', 'Bayi Tabung - FFC', 'Bayi Tabung - FFC'),
(4, 'DKT.01', 'Diklat', 'Diklat'),
(5, 'DR.01', 'Dokter', 'Dokter'),
(6, 'SIM.01', 'SIMRS', 'SIMRS'),
(7, 'FAR.01', 'Farmasi', 'Farmasi'),
(8, 'FIN.01', 'Finance', 'Finance'),
(9, 'FIS.01', 'Fisioterapi', 'Fisioterapi'),
(10, 'HRD.01', 'HRD', 'HRD'),
(11, 'IGD.01', 'IGD', 'IGD'),
(12, 'KMB.01', 'Kamar Bayi', 'Kamar Bayi'),
(13, 'LAB.01', 'Laboratorium', 'Laboratorium'),
(14, 'LAB.CT', 'Lab - Cytogenetic', 'Lab - Cytogenetic'),
(15, 'LGT.01', 'Logistik', 'Logistik'),
(16, 'MKR.01', 'Marketing', 'Marketing'),
(17, 'MNJ.01', 'Manajemen', 'Manajemen'),
(18, 'MDS.PNJ.01', 'Medis - Penunjang', 'Medis - Penunjang'),
(19, 'MR.01', 'Medical Record', 'Medical Record'),
(20, 'OKA.01', 'Kamar Bedah', 'Kamar Bedah'),
(21, 'PDCA.01', 'PDCA', 'PDCA'),
(22, 'PER.01', 'Perawatan - Lt. 1', 'Perawatan - Lt. 1'),
(23, 'PER.02', 'Perawatan - Lt. 2', 'Perawatan - Lt. 2'),
(24, 'PER.03', 'Perawatan - Lt. 3', 'Perawatan - Lt. 3'),
(25, 'POL.AN', 'Poli - Anak', 'Poli - Anak'),
(26, 'POL.GI', 'Poli - Gigi', 'Poli - Gigi'),
(27, 'POL.OB', 'Poli - Obsgyn', 'Poli - Obsgyn'),
(28, 'PUR.01', 'Purchasing', 'Purchasing'),
(29, 'RAD.01', 'Radiologi', 'Radiologi'),
(30, 'TAX.01', 'Tax & Audit', 'Tax & Audit'),
(31, 'UMUM.01', 'Bidang Umum', 'Bidang Umum'),
(32, 'VK.01', 'VK', 'VK'),
(33, 'OTH.01', 'Others', 'Others'),
(34, 'RKP.01', 'RK', 'Ruko Pembelian'),
(35, 'POL.JA', 'PJ', 'Poli - Jantung'),
(36, 'PJK.01', 'PJ', 'Pajak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_instansi`
--

CREATE TABLE `tr_instansi` (
  `id` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kepsek` varchar(100) NOT NULL,
  `nip_kepsek` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `fax` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tr_instansi`
--

INSERT INTO `tr_instansi` (`id`, `nama`, `alamat`, `kepsek`, `nip_kepsek`, `logo`, `telp`, `fax`) VALUES
(1, 'Rumah Sakit Ibu dan Anak Family', 'Jl. Pluit Mas I Blok A No. 2A-5A, Jakarta Utara', 'dr. Fery', '9876543210', 'fam.png', '(021) 6695066, 6694990', '(021) 6615563');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(75) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id`, `username`, `password`, `nama`, `nip`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '0123456789', 'Super Admin'),
(2, 'admrajal', '81dc9bdb52d04dc20036dbd8313ed055', 'Mida Matris', '123456', 'Admin'),
(3, 'admranap', 'a01610228fe998f515a72dd730294d87', 'Sumarsih', '123456', 'Admin'),
(4, 'informasi', '81dc9bdb52d04dc20036dbd8313ed055', 'Sri Hardjanti', '123456', 'Admin'),
(5, 'kamarbayi', '81dc9bdb52d04dc20036dbd8313ed055', 'Minayu Tri Wulandari ', '123456', 'Admin'),
(6, 'kamarbedah', '81dc9bdb52d04dc20036dbd8313ed055', ' Dewi Asih ', '123456', 'Admin'),
(7, 'perawat1', '81dc9bdb52d04dc20036dbd8313ed055', 'Dinasti Christiani', '123456', 'Admin'),
(8, 'perawat2', '81dc9bdb52d04dc20036dbd8313ed055', 'Nawang Wulan', '123456', 'Admin'),
(9, 'perawat3', '81dc9bdb52d04dc20036dbd8313ed055', 'Ellys Mawaty Sihombing ', '123456', 'Admin'),
(10, 'unitigd', '81dc9bdb52d04dc20036dbd8313ed055', 'Sumiyati', '123456', 'Admin'),
(11, 'poli', '81dc9bdb52d04dc20036dbd8313ed055', 'Ervina Indrasari ', '123456', 'Admin'),
(12, 'kamarbersalin', '81dc9bdb52d04dc20036dbd8313ed055', 'Asdiana', '123456', 'Admin'),
(13, 'farmasi', '81dc9bdb52d04dc20036dbd8313ed055', 'Novita Sandra Manurung', '123456', 'Admin'),
(14, 'radiologi', '81dc9bdb52d04dc20036dbd8313ed055', 'Seno Aji', '123456', 'Admin'),
(15, 'laborat', '81dc9bdb52d04dc20036dbd8313ed055', 'Dyah Ayu', '123456', 'Admin'),
(16, 'labcyto', '81dc9bdb52d04dc20036dbd8313ed055', 'Imah', '123456', 'Admin'),
(17, 'medrec', '81dc9bdb52d04dc20036dbd8313ed055', 'Nova Lusyana Dewi', '11.1018.17', 'Admin'),
(18, 'rehabcenter', '81dc9bdb52d04dc20036dbd8313ed055', 'Lidi Notalia Manik', '123456', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_disposisi`
--

CREATE TABLE `t_disposisi` (
  `id` int(6) NOT NULL,
  `id_surat` int(6) NOT NULL,
  `kpd_yth` varchar(250) NOT NULL,
  `isi_disposisi` varchar(250) NOT NULL,
  `sifat` enum('Biasa','Segera','Perlu Perhatian Khusus','Perhatian Batas Waktu') NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_disposisi`
--

INSERT INTO `t_disposisi` (`id`, `id_surat`, `kpd_yth`, `isi_disposisi`, `sifat`, `batas_waktu`, `catatan`) VALUES
(1, 1, 'Kepala TU', 'ditindaklanjuti', 'Biasa', '2015-05-27', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_surat_keluar`
--

CREATE TABLE `t_surat_keluar` (
  `id` int(6) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `no_agenda` varchar(7) NOT NULL,
  `isi_ringkas` mediumtext NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_catat` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `pengolah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_surat_keluar`
--

INSERT INTO `t_surat_keluar` (`id`, `kode`, `no_agenda`, `isi_ringkas`, `tujuan`, `no_surat`, `tgl_surat`, `tgl_catat`, `keterangan`, `file`, `pengolah`) VALUES
(1, 'HM', '0001', 'Permintaan data masjid bersejarah di Kota Yogyakarta', 'Kantor Kemenag Kota Yogyakartas', '800/1221', '2015-05-24', '2015-05-24', '', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_surat_keputusan`
--

CREATE TABLE `t_surat_keputusan` (
  `id` int(6) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `tahun` varchar(7) NOT NULL,
  `tentang` mediumtext NOT NULL,
  `tgl_surat` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `pengolah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_surat_masuk`
--

CREATE TABLE `t_surat_masuk` (
  `id` int(6) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `no_agenda` varchar(7) NOT NULL,
  `indek_berkas` varchar(100) NOT NULL,
  `isi_ringkas` mediumtext NOT NULL,
  `dari` varchar(250) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `pengolah` int(4) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `akses_menu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_surat_masuk`
--

INSERT INTO `t_surat_masuk` (`id`, `kode`, `no_agenda`, `indek_berkas`, `isi_ringkas`, `dari`, `no_surat`, `tgl_surat`, `tgl_diterima`, `keterangan`, `file`, `pengolah`, `nomor_hp`, `akses_menu`) VALUES
(1, 'HM', '0001', 'data', 'Permintaan data kunjungan wisatawan semester 1 tahun 2015', 'Dinas Pariwisata DIY', 'Par/HM.01/100/2015', '2015-05-22', '2015-05-24', '', 'Tes_Upload_file1.docx', 1, '', ''),
(11, 'Rekam Medis', '0001', '', 'Staff ', 'Anggie Hesvita Natallia', '100855', '2022-09-13', '2022-09-13', '', '', 17, '', 'Rekam Medis'),
(12, 'Farmasi ', '0001', '', 'Tenaga Teknis Kefarmasian', 'Dewi Lestari Sitepu', '110722249', '2022-09-20', '2022-09-20', '', '', 13, '', 'Pendaftaran, Depo, Farmasi, Warehouse'),
(13, 'FRC', '0001', '', 'Koordinator', 'Lidi Notalia Manik', '-', '2022-09-22', '2022-09-22', '', '', 18, '', 'Rehab Medik'),
(14, 'Administrasi Rawat Inap', '0002', '', 'Staff', 'Lutfi Akbar', '111022269', '2022-10-31', '2022-10-31', '', '', 3, '', '1. Registrasi Pasien RI, ODC, Klinik Fertilitas, Klinik Gizi, 2. Kasir, 3. Input Tindakan Perawatan'),
(15, 'Administrasi Rawat Inap', '0001', '', 'Staff', 'Elsy Marsita Simbolon', '110721213', '2021-07-26', '2022-10-31', '', '', 3, '', '1. Registrasi Pasien RI, ODC, Klinik Fertilitas, Klinik Gizi, 2. Kasir, 3. Input Tindakan Perawatan'),
(16, 'Administrasi', '0001', '', 'Staff', 'Indah Juniarti', '100864', '2022-11-10', '2022-11-10', '', '', 2, '', 'Pendaftaran,Kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ref_klasifikasi`
--
ALTER TABLE `ref_klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tr_instansi`
--
ALTER TABLE `tr_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_disposisi`
--
ALTER TABLE `t_disposisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_surat_keluar`
--
ALTER TABLE `t_surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_surat_keputusan`
--
ALTER TABLE `t_surat_keputusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_surat_masuk`
--
ALTER TABLE `t_surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ref_klasifikasi`
--
ALTER TABLE `ref_klasifikasi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tr_instansi`
--
ALTER TABLE `tr_instansi`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `t_disposisi`
--
ALTER TABLE `t_disposisi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_surat_keluar`
--
ALTER TABLE `t_surat_keluar`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_surat_keputusan`
--
ALTER TABLE `t_surat_keputusan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_surat_masuk`
--
ALTER TABLE `t_surat_masuk`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
