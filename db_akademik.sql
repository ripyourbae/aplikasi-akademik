-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jul 2018 pada 05.42
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `headline` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` longtext NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `dibaca` int(15) NOT NULL,
  `waktu_terbit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `headline`, `isi_berita`, `gambar`, `dibaca`, `waktu_terbit`) VALUES
(1, 'Masa Orientasi Siswa (MOS)', 'Y', '<p>Masa Orientasi Siswa (MOS) SMP NEGERI 2 Patikraja&nbsp;Tahun Pelajaran 2011/2012</p>\r\n', 'DSC00764.JPG', 2, '2017-11-18 09:57:03'),
(2, 'Pemilihan Ketua OSIS SMP N 2 PATIKRAJA', 'Y', '<p>Pemilihan ketua OSIS SMP Negeri 2 Patikraja Masa Bakti 2013 / 2014</p>\r\n', 'DSC00922.JPG', 0, '2017-11-18 09:38:06'),
(3, 'SMP N 2 Patikraja Terakreditasi A', 'Y', '<p>SMP yang terletak di kecamatan patikraja ini sudah terakreditasi A</p>\r\n', '2.jpg', 65, '2017-10-18 00:23:57'),
(4, 'SMP N 2 PATIKRAJA Meraih Juara LT III', 'N', '<p>Pada Lomba LT III Se-Kabupaten Banyumas, SMP NEGERI 2 PATIKRAJA meraih Juara 1</p>\r\n', 'DSC03298.JPG', 0, '2017-11-18 09:21:10'),
(5, 'Lomba Bola Volley Se-Kabupaten Banyumas', 'N', '<p>SMP NEGERI 2 PATIKRAJA mengikuti lomba bola volley putri SMP/MTs Se-Kabupaten Banyumas</p>\r\n', 'DSC03672.JPG', 0, '2017-11-18 09:21:10'),
(6, 'Lomba Band SMP Se-Kabupaten Banyumas', 'N', '<p>SMP NEGERI 2 Patikraja mengikuti lomba band tingkat SMP Se-Kabupaten Banyumas</p>\r\n', '08012012044.jpg', 0, '2017-11-18 09:38:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nuptk` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nip` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_pegawai` enum('PNS','Tenaga Honor Sekolah','Guru Honor Sekolah') NOT NULL,
  `jenis_ptk` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tugas_tambahan` varchar(50) NOT NULL,
  `sk_cpns` varchar(30) NOT NULL,
  `tanggal_cpns` date NOT NULL,
  `sk_pengangkatan` varchar(30) NOT NULL,
  `tmt_pengangkatan` date NOT NULL,
  `lembaga_pengangkat` varchar(50) NOT NULL,
  `pangkat_golongan` varchar(10) NOT NULL,
  `sumber_gaji` enum('APBN','APBD Kabupaten/Kota','Sekolah') NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `status_perkawinan` enum('Menikah','Belum Menikah','Janda/Duda') NOT NULL,
  `nama_pasangan` varchar(50) NOT NULL,
  `nip_pasangan` varchar(30) NOT NULL,
  `pekerjaan_pasangan` varchar(50) NOT NULL,
  `tmt_pns` date NOT NULL,
  `lisensi_kepsek` enum('Ya','Tidak') NOT NULL,
  `diklat_kepengawasan` enum('Ya','Tidak') NOT NULL,
  `keahlian_braille` enum('Ya','Tidak') NOT NULL,
  `keahlian_isyarat` enum('Ya','Tidak','','') NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `nama_wajib_pajak` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `bank` varchar(40) NOT NULL,
  `nomor_rekening` varchar(40) NOT NULL,
  `rekening_atas_nama` varchar(30) NOT NULL,
  `nik` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nama_guru`, `nuptk`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nip`, `password`, `status_pegawai`, `jenis_ptk`, `agama`, `alamat_lengkap`, `kecamatan`, `kode_pos`, `telepon`, `email`, `tugas_tambahan`, `sk_cpns`, `tanggal_cpns`, `sk_pengangkatan`, `tmt_pengangkatan`, `lembaga_pengangkat`, `pangkat_golongan`, `sumber_gaji`, `nama_ibu_kandung`, `status_perkawinan`, `nama_pasangan`, `nip_pasangan`, `pekerjaan_pasangan`, `tmt_pns`, `lisensi_kepsek`, `diklat_kepengawasan`, `keahlian_braille`, `keahlian_isyarat`, `npwp`, `nama_wajib_pajak`, `kewarganegaraan`, `bank`, `nomor_rekening`, `rekening_atas_nama`, `nik`, `foto`) VALUES
(1, 'Agus Dwi Hartono', '75064/A2/C/1994', 'Laki-laki', 'Pekalongan', '1969-08-10', '196908101994121003', '100869', 'PNS', 'Guru Mapel', 'Islam', 'Kedungwuluh Kidul RT04/02', 'Patikraja', '53171', '081548847290', 'adeha1969@gmail.com', '', '75064/A2/C/1994', '1994-12-12', '75064/A2/C/1994', '1994-12-01', 'Pemerintah Provinsi', 'IV/a', 'APBN', 'Cartimah', 'Menikah', 'Laelatul Komariyah', '', 'Lainnya', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484198148521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(2, 'Almi Darojah', '9262750651300003', 'Perempuan', 'Banyumas', '1972-09-30', '197209301998022003', '300972', 'PNS', 'Guru Mapel', 'Islam', 'Jl. A Zain Gg Hadirin Pasir Kidul RT01/02, Pasir Kidul', 'Patikraja', '53135', '081327263668', 'almiesperotika@gmail.com', '', '13148/A2/KP/1998', '1998-12-01', '13148/A2/KP/1998', '1998-02-01', 'Pemerintah Pusat', 'IV/a', 'APBD Kabupaten/Kota', 'H. Sumiati', '', 'Sunarwanto', '', 'PNS/TNI/Polri', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484198205521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(3, 'Amir Dahlan', '4560739639200002', 'Laki-laki', 'Kudus', '1961-02-28', '196102281981021001', '280261', 'PNS', 'Kepala Sekolah', 'Islam', 'Pageraji, RT01/09, Pageraji', 'Colongok', '53162', '081327005878', 'amirdahlan860@yahoo.co.id', 'Kepala Sekolah', '30364/C/2/1981', '1981-02-01', '3865E/I03.1.2/C/1982', '1981-10-01', 'Pemerintah Pusat', 'IV/a', 'APBD Kabupaten/Kota', 'Maemunatun', 'Menikah', 'Kusyati', '', 'Tidak Bekerja', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '472422427521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(4, 'Ari Sudrajat', '7246745647200023', 'Laki-laki', 'Banyumas', '1967-09-14', '196709141995121002', '140967', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Pahlawan Gg 4 No. 73, RT01/04, Tanjung', 'Purwoketo Selatan', '53143', '08122771857', 'arisudrajat15@gmail.com', '', '77475/A2/KP/1995', '1995-12-01', '77475/A2/KP/1995', '1995-12-31', 'Pemerintah Pusat', 'IV/a', 'APBN', 'Ning Sukinah', 'Janda/Duda', 'Sri Sugiarti', '', 'Lainnya', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484198270521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(5, 'Arif Prasetyo', '5445747650200023', 'Laki-laki', 'Banyumas', '1969-11-13', '196911132008011010', '131169', 'PNS', 'Guru Mapel', 'Islam', 'Patikraja RT03/02, Patikraja', 'Patikraja', '53171', '02816844608', 'arifspd69@gmail.com', '', '813/1893/2008', '2008-01-01', '813/1893/2008', '2008-01-01', 'Pemerintah Kab/Kota', 'III/b', 'APBN', 'Murdingatin', 'Menikah', 'Wahidah', '', 'Lainnya', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '899698270521000', '', '', '', '', '', 2147483647, ''),
(6, 'Eis Nur Azizah, S.Pd.', '6353748651300023', 'Perempuan', 'Banyumas', '1970-10-21', '197010212008012012', '211070', 'PNS', 'Guru Mapel', 'Islam', 'Patikraja, RT02/07, Patikraja', 'Patikraja', '53171', '085227975446', 'yayanyuyun866@yahoo.co.id', '', '813/1893/2008', '2008-01-01', '813/1893/2008', '2008-01-01', 'Pemerintah Kab/Kota', 'II/B', 'APBN', 'Tjartidjah', 'Menikah', 'Eko Huriyanto', '', 'Wiraswasta', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '889698304521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(7, 'Eko Mardiyana', '8949744646200022', 'Laki-laki', 'Surakarta', '1966-06-17', '196606171990031008', '170666', 'PNS', 'Guru Mapel', 'Islam', 'Kawungcarang RT03/02, Kawungcarang', 'Sumbang', '53183', '081327072497', 'ekomardiyanadecha@gmail.com', '', '2702/I03.d.1/Cb.1990', '1991-11-01', '2702/I03.d.1/Cb.1990', '1990-03-01', 'Pemerintah Provinsi', 'IV/a', 'APBN', 'sARNI', 'Menikah', 'Tri Asih Andriyani', '19661017 199512   ', 'PNS/TNI/Polri', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484198155521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(8, 'Haryanto', '0451755656200012', 'Laki-laki', 'Banyumas', '1977-01-19', '197701192007011007', '190177', 'PNS', 'Guru Mapel', 'Islam', 'Kedungwuluh Lor, RT02/02, Kedungwuluh Lor', 'Patikraja', '53171', '081327095310', 'ryantospd@gmail.com', 'Kepala Perpustakaan', '813./623/2007', '2007-01-01', '813./623/2007', '2007-01-01', 'Pemerintah Kab/Kota', 'III/c', 'APBN', 'Darsiwi', 'Menikah', 'Tri Sulasmi', '', 'Karyawan Swasta', '0000-00-00', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '878976000521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(9, 'Joko Kus Subiyanto', '1242738639200023', 'Laki-laki', 'Klaten', '1960-09-10', '196009101986031011', '091060', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Waru 3 No. 71 Perumnas Tanjungelok Rr01/08, tANJUNG', 'Purwoketo Selatan', '53143', '081328007261', 'joko.kus_60@yahoo.co.id', 'Wakil Kepala Sekolah', '19416.E/I03.4/Cb.1986', '1988-03-01', '19416.E/I03.4/Cb.1986', '1986-03-01', 'Pemerintah Provinsi', 'IV/a', 'APBN', 'Sriyanto', 'Menikah', 'Tri Naimah', '', 'Lainnya', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484198213521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(10, 'Karso', '3935740642200032', 'Laki-laki', 'Banyumas', '1962-06-03', '196206031995121001', '090662', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Pahlawan Gang 9no. 10 Tajung RT02/05, Tanjung', 'Purwoketo Selatan', '53143', '081226770799', 'karsoamarta@gmail.com', '', '27313/A2/KP/1995', '1995-12-01', '27313/A2/KP/1995', '1992-12-01', 'Pemerintah Provinsi', 'IV/a', 'APBN', 'Sumini', 'Menikah', 'Enti Triani G.S', '196604051988031003', 'PNS/TNI/Polri', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484198262521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(11, 'Margono', '9957746648200012', 'Laki-laki', 'Sragen', '1968-06-25', '196806251991031010', '250668', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Raya Patikraja Purwokerto RT03/04, Patikraja', 'Patikraja', '53171', '082135783171', 'umarmar127@gmail.com', '', '2810/I03.d.1/Cb.1991', '1991-03-01', '2810/I03.d.1/Cb.1991', '1991-03-01', 'Pemerintah Provinsi', 'IV/a', 'APBN', 'Surami', 'Menikah', 'Susdiana Dani R', '', 'Pedagang Besar', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '088760277521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(12, 'Nadliroh Indah Kurnia', '5435753653300002', 'Laki-laki', 'Banyumas', '1975-03-01', '197501032006042007', '010375', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Pramuka RT05/01, Kedungrandu', 'Patikraja', '53171', '082135445571', 'naniksaiful@gmail.com', 'Kepala Laboratorium', '813.3/188/2006', '2006-01-01', '040/SK/III.4/D/1998', '1998-09-01', 'Pemerintah Kab/Kota', 'III/d', 'APBN', 'Masngadah', 'Menikah', 'Saiful Muarif', '197107061999011005', 'Lainnya', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '', '', 'Indonesia', '', '', '', 2147483647, ''),
(13, 'Nur Azizah', '4647753654300012', 'Perempuan', 'Banyumas', '1975-03-15', '197503152008012006', '150375', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Sarwaji RT02/05, Karanggude, Sidabowa', 'Patikraja', '53171', '081391657336', 'nurazizah.na375@gmail.com', '', '813/1893/2008', '2008-01-01', '813/1893/2008', '2008-01-01', 'Pemerintah Kab/Kota', 'III/b', 'APBN', 'Subiarti', 'Menikah', 'Barnik Suryono', '', 'Karyawan Swasta', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '889684718521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(14, 'Eis Nur Azizah, S.Pd.', '4434760661300063', 'Perempuan', 'Banyumas', '1982-11-11', '198202112006042004', '111182', 'PNS', 'Guru Mapel', 'Islam', 'Kedungwuluh Lor, RT01/02, Kedungwuluh Lor', 'Patikraja', '53171', '08157631554', 'ziz_zah@yahoo.com', '', '813.3/185/2006', '2006-04-01', '813.3/185/2006', '2006-04-01', 'Pemerintah Kab/Kota', 'III/d', 'APBN', 'Suwari', 'Menikah', 'Setyo Sumarso', '1975060520050110  ', 'PNS/TNI/Polri', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484060660521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(15, 'Nur Rohmiyati', '5455745648300012', 'Perempuan', 'Banyumas', '1967-01-03', '196701232007012007', '030167', 'PNS', 'Guru Mapel', 'Islam', 'Tambaksogra Sumbang RT01/03, Tambaksogra', 'Sumbang', '83183', '081327061175', 'nurrohmiyati67@gmail.com', '', '813.3/1062/2007', '2007-01-01', '813.3/1062/2007', '2007-01-01', 'Pemerintah Kab/Kota', 'III/c', 'APBN', 'Karsiti', 'Menikah', 'Rojikin', '', 'Karyawan Swasta', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '889698239521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(16, 'Rahmat Subarkah', '6650743644200012', 'Laki-laki', 'Banyumas', '1965-03-18', '196503181989031007', '180265', 'PNS', 'Guru Mapel', 'Islam', 'Pecikalan Li No. 21 RT04/06, Wangon', 'Wangon', '53176', '081327099007', 'alfabetpu3@gmail.com', '', '5655/I02.Kep/C.PB.1.1989', '1989-03-01', '5655/I02.Kep/C.PB.1.1989', '1989-03-01', 'Pemerintah Pusat', 'IV/a', 'APBN', 'E. Sri Aminah', 'Menikah', 'Jatiweni', '', 'Wiraswasta', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484198064521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(17, 'Resthu Utami', '2449759659300003', 'Perempuan', 'Banyumas', '1981-11-17', '198111172008012016', '171181', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Masjid, RT01/07, Menganti', 'Rawalo', '53173', '083862321798', 'restuklanese@gmail.com', '', '813/144/2009', '2008-01-01', '813/144/2009', '2008-01-01', 'Pemerintah Kab/Kota', 'III/b', 'APBN', 'Sainah', 'Menikah', 'Yusuf Sugiyono', '', 'Wiraswasta', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '898226048521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(18, 'Retna Aristiyanti', '6336751653300013', 'Perempuan', 'Sragen', '1973-10-04', '197310042010012004', '041073', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Wadaskelir RT06/05, Karangklesem', 'Purwoketo Selatan', '53144', '082221522227', 'retnarel4@gmail.com', '', '813/580/2010', '2010-01-01', '813/580/2010', '2010-01-01', 'Pemerintah Kab/Kota', 'II/b', 'APBN', 'Chusnaini', 'Menikah', 'Karsito', '', 'Wiraswasta', '0000-00-00', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '352557805521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(19, 'Retno Mariyani, S.Si', '7935756656300002', 'Perempuan', 'Banyumas', '1978-03-06', '197803062008012012', '06031978', 'PNS', 'Guru Mapel', 'Islam', 'Kedungwringin RT01/02, Kedungwringin', 'Patikraja', '53171', '081327309605', 'retnomariyani@yahoo.co.id', '', '813/1893/2008', '2008-01-01', '813/1893/2008', '2008-01-01', 'Pemerintah Kab/Kota', 'III/b', 'APBN', 'Suprijatiningsih', 'Menikah', 'Udiyono', '', 'PNS/TNI/Polri', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '889698296521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(20, 'Rokhmat, S. Ag', '7345747651200003', 'Laki-laki', 'Banyumas', '1969-10-13', '196910132007011016', '131069', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Krapyak Kel. Teluk, RT03/02, Teluk', 'Purwoketo Selatan', '53145', '0281643641', 'rokhmat236@gmail.com', '', '813.3/1438/2007', '2007-01-01', '813.3/1438/2007', '2007-01-01', 'Pemerintah Kab/Kota', 'III/c', 'APBN', 'Laswikem', 'Menikah', 'Dwi Rokhimawatu', '', 'Karyawan Swasta', '0000-00-00', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '256257569521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(21, 'Saharuddin', '5563745648200323', 'Laki-laki', 'Busoa', '1967-12-31', '196712311992031165', '311267', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Pembina RT04/07, Karangucung', 'Purwoketo Selatan', '53141', '082137277493', 'PakSaharuddin67@gmail.com', '', '347/117/CIII.2/92', '2007-03-01', '347/I17/CIII.2/92', '1992-03-01', 'Pemerintah Pusat', 'IV/a', 'APBN', 'Wakabe', 'Menikah', 'Ida Rusminawati', '', 'PNS/TNI/Polri', '0000-00-00', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '262704141521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(22, 'Sri Cahyawati M', '4147750653300023', 'Perempuan', 'Banyumas', '1972-08-15', '197208152007012006', '150872', 'PNS', 'Guru Mapel', 'Islam', 'Rempoah RT01/02, Rempoah', 'Baturaden', '53151', '081327092596', 'cahyawatisri15@gmail.com', '', '813.3/749/2007', '2007-01-01', '813.3/749/2007', '2007-01-01', 'Pemerintah Kab/Kota', 'III/c', 'APBN', 'Musringah', 'Menikah', 'Murdiantoro', '', 'Lainnya', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '889698247521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(23, 'Sujiato, S.Si', '0039753655200023', 'Laki-laki', 'Banyumas', '1975-07-07', '197507072008011026', '070775', 'PNS', 'Guru Mapel', 'Islam', 'Kedungwringin RT01/02, Jatilawang', 'Jatilawang', '53174', '081234564975', 'sujito75@gmail.com', '', '813/144/2009', '2008-01-01', '813/144/2009', '2008-01-01', 'Pemerintah Kab/Kota', 'III/b', 'APBN', 'Sainah', 'Menikah', 'Yuni Priyati', '', 'Lainnya', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '898226030521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(24, 'Surtinah', '3551742643300023', 'Perempuan', 'Banyumas', '1964-12-19', '196412191987032008', '191264', 'PNS', 'Guru Mapel', 'Islam', 'Rawalo RT02/02, Rawalo', 'Rawalo', '53173', '081391232488', 'surtinah1964@gmail.com', '', '8632.E/I03.d/Cb.87', '1987-03-01', '8632.E/I03.d/Cb.87', '1987-03-01', 'Pemerintah Provinsi', 'IV/a', 'APBN', 'Sikem', 'Menikah', 'Sugeng Imam Subagyo', '196108041987031001', 'Karyawan Swasta', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '484198122521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(25, 'Suwarni', '9655742643300032', 'Perempuan', 'Banyumas', '1964-03-23', '196403231987032012', '230364', 'PNS', 'Guru Mapel', 'Islam', 'Kedungwuluh Lor, RT01/03,  Kedungwuluh', 'Patikraja', '53171', '085227470000', 'suwarni23364@gmail.com', '', '36772/A2.III.1/C/1987', '1987-03-01', '36772/A2.III.1/C/1987', '1987-03-01', 'Pemerintah Provinsi', 'IV/a', 'APBN', 'Karsem', 'Menikah', 'Sugianto', '', 'Pensiunan', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '884198171521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(26, 'Tri Wahyuni', '4162753655300023', 'Perempuan', 'Banyumas', '1975-08-30', '197508302007012008', '300875', 'PNS', 'Guru Mapel', 'Islam', 'Jl. Trowongrejo RT02/02, Sidabowa', 'Patikraja', '53171', '081327058273', 'triyogikuntarso1975@gmail.com', '', '813.3/614/2007', '2007-01-01', '813.3/614/2007', '2007-01-01', 'Pemerintah Kab/Kota', 'III/b', 'APBN', 'Karlem', 'Menikah', 'Yogi Kuntarso', '19680627199803   ', 'PNS/TNI/Polri', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '078090644521001', '', 'Indonesia', '', '', '', 2147483647, ''),
(27, 'Umarotul Muslimah', '7059755657300043', 'Perempuan', 'Banyumas', '1977-07-27', '197707272008012011', '270777', 'PNS', 'Guru Mapel', 'Islam', 'Kedungwuluh Lor, RT05/01, Kedungwuluh Lor', 'Patikraja', '53171', '081327576443', 'umarotul2707@gmail.com', '', '813/1893/2008', '2008-01-01', '813/1893/2008', '2008-01-01', 'Pemerintah Kab/Kota', 'III/b', 'APBN', 'Nafsyah', 'Menikah', 'Dudiyono', '', 'PNS/TNI/Polri', '0000-00-00', 'Ya', 'Tidak', 'Tidak', 'Tidak', '889698288521000', '', 'Indonesia', '', '', '', 2147483647, ''),
(28, 'Bambang Budi Priyanto, S.Pd.', '7342741645200003', 'Laki-laki', 'Banyumas', '1963-10-10', '', '', 'Tenaga Honor Sekolah', 'Guru Mapel', 'Islam', 'Jl. Dl Panjaitan 30, RT07/01, Purwokerto Kulon', 'Purwokerto Selatan', '53141', '085227380777', 'bambangyos@gmail.com', '', '', '0000-00-00', 'G.231/BS/Pend.VI/86', '1986-08-01', 'Ketua Yayasan', '', 'APBN', 'Supinah', 'Menikah', 'Supriyati Dyah Puspitowati', 'Karyawan Swasta', '', '0000-00-00', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '', '', 'Indonesia', '', '', '', 2147483647, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_halaman`
--

CREATE TABLE IF NOT EXISTS `tbl_halaman` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `judul_seo` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `waktu_terbit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_halaman`
--

INSERT INTO `tbl_halaman` (`id_halaman`, `judul`, `judul_seo`, `detail`, `waktu_terbit`) VALUES
(1, 'Selamat datang di Sistem Informasi Pengolahan Data Akademik SMP NEGERI 2 PATIKRAJA', 'selamat-datang-di-sistem-informasi-pengolahan-data-akademik-smp-negeri-2-patikraja', '<p><img alt="" src="../images/2.jpg" style="float:left; height:225px; width:300px" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pembangunan dunia pendidikan yang selalu mengalami perkembangan pesat seiring dengan laju perkembangan teknologi informasi yang sangat beraneka ragam, diperlukan peningkatan mutu dan mekanisme pelayanan di bidang pendidikan agar lebih berdaya guna dan berhasil guna, sehingga Sumber Daya Manusia (SDM) yang diciptakan dapat berpartisipasi dalam membangun dunia luar sesuai dengan kemampuannya. Sekolah-sekolah negeri maupun swasta sudah banyak yang menampilkan sistem informasi akademik berbasis Web.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Munculnya media internet akan sangat memudahkan dalam pembelajaran sesuatu yang baru, karena dengan mengakses segala informasi yang ada di internet akan menambah pengetahuan kita. Pencarian-pencarian informasi dapat dilakukan melalui media pencarian search engine. Banyak sekali media internet yaitu situs-situs yang memberi fasilitas ini misalnya Google, Yahoo dan web hosting sejenisnya.</p>\r\n', '2017-11-17 02:05:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_header_print`
--

CREATE TABLE IF NOT EXISTS `tbl_header_print` (
  `id_header_print` int(5) NOT NULL,
  `header_1` varchar(255) NOT NULL,
  `header_2` varchar(255) NOT NULL,
  `ttd_kiri` varchar(100) NOT NULL,
  `ttd_kanan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_header_print`
--

INSERT INTO `tbl_header_print` (`id_header_print`, `header_1`, `header_2`, `ttd_kiri`, `ttd_kanan`) VALUES
(1, '<h2><strong>SMP NEGERI 2 PATIKRAJA</strong></h2>\r\n', '<p>Jl. Balai Desa, Desa Kedungwuluh Lor, Kec. Patikraja, Kab. Banyumas,<br />\r\nJawa Tengah 53171, Telp (0281) 7609898&nbsp;<br />\r\nEmail : smpn2patikraja@gmail.com</p>\r\n', 'Wali Kelas', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `kode_pelajaran` varchar(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tahun_ajaran` varchar(5) NOT NULL,
  `jam` time NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `kode_kelas`, `kode_pelajaran`, `nip`, `tahun_ajaran`, `jam`, `hari`) VALUES
(3, 'KL15', 'MP02', '196911132008011010', '2017', '09:30:00', 'Kamis'),
(4, 'KL01', 'MP01', '197701192007011007', '2017', '07:15:00', 'Senin'),
(5, 'KL01', 'MP02', '197209301998022003', '2017', '09:00:00', 'Senin'),
(6, 'KL01', 'MP03', '197010212008012012', '2017', '11:30:00', 'Senin'),
(7, 'KL01', 'MP04', '196009101986031011', '2017', '12:30:00', 'Senin'),
(8, 'KL01', 'MP06', '196206031995121001', '2017', '12:30:00', 'Senin'),
(9, 'KL01', 'MP07', '196908101994121003', '2017', '07:15:00', 'Selasa'),
(10, 'KL01', 'MP08', '196606171990031008', '2017', '08:45:00', 'Selasa'),
(11, 'KL01', 'MP11', '197010212008012012', '2017', '10:30:00', 'Selasa'),
(12, 'KL02', 'MP01', '197701192007011007', '2017', '07:20:00', 'Senin'),
(13, 'KL02', 'MP02', '197209301998022003', '2017', '08:45:00', 'Senin'),
(14, 'KL02', 'MP06', '196206031995121001', '2017', '10:45:00', 'Senin'),
(15, 'KL02', 'MP07', '196908101994121003', '2017', '12:30:00', 'Senin'),
(16, 'KL02', 'MP08', '196911132008011010', '2017', '07:30:00', 'Selasa'),
(17, 'KL02', 'MP11', '196009101986031011', '2017', '08:30:00', 'Selasa'),
(18, 'KL02', 'MP02', '196911132008011010', '2017', '10:00:00', 'Selasa'),
(19, 'KL02', 'MP03', '196102281981021001', '2017', '11:30:00', 'Selasa'),
(20, 'KL03', 'MP11', '196009101986031011', '2017', '07:30:00', 'Senin'),
(21, 'KL03', 'MP07', '196908101994121003', '2017', '08:45:00', 'Senin'),
(22, 'KL03', 'MP06', '196206031995121001', '2017', '10:00:00', 'Senin'),
(23, 'KL03', 'MP03', '196102281981021001', '2017', '12:30:00', 'Senin'),
(24, 'KL03', 'MP04', '197010212008012012', '2017', '13:45:00', 'Senin'),
(25, 'KL04', 'MP03', '196102281981021001', '2017', '07:30:00', 'Senin'),
(26, 'KL04', 'MP11', '196009101986031011', '2017', '08:45:00', 'Senin'),
(27, 'KL04', 'MP02', '197209301998022003', '2017', '10:45:00', 'Senin'),
(28, 'KL04', 'MP01', '197701192007011007', '2017', '12:30:00', 'Senin'),
(29, 'KL06', 'MP08', '196911132008011010', '2017', '07:15:00', 'Rabu'),
(30, 'KL06', 'MP07', '196908101994121003', '2017', '08:45:00', 'Rabu'),
(31, 'KL06', 'MP06', '196206031995121001', '2017', '10:00:00', 'Rabu'),
(32, 'KL06', 'MP02', '197209301998022003', '2017', '12:30:00', 'Rabu'),
(33, 'KL06', 'MP03', '196102281981021001', '2017', '13:45:00', 'Rabu'),
(34, 'KL08', 'MP06', '196709141995121002', '2017', '07:15:00', 'Selasa'),
(35, 'KL08', 'MP07', '196908101994121003', '2017', '08:45:00', 'Selasa'),
(36, 'KL08', 'MP03', '196102281981021001', '2017', '10:15:00', 'Selasa'),
(37, 'KL08', 'MP02', '197209301998022003', '2017', '12:30:00', 'Selasa'),
(38, 'KL10', 'MP10', '197010212008012012', '2017', '07:15:00', 'Rabu'),
(39, 'KL10', 'MP08', '196911132008011010', '2017', '08:15:00', 'Rabu'),
(40, 'KL10', 'MP06', '196709141995121002', '2017', '10:00:00', 'Rabu'),
(41, 'KL10', 'MP03', '196102281981021001', '2017', '11:30:00', 'Rabu'),
(42, 'KL11', 'MP02', '197209301998022003', '2017', '07:15:00', 'Jumat'),
(43, 'KL11', 'MP01', '197701192007011007', '2017', '09:00:00', 'Jumat'),
(44, 'KL11', 'MP07', '196908101994121003', '2017', '10:45:00', 'Jumat'),
(45, 'KL12', 'MP06', '196709141995121002', '2017', '07:15:00', 'Rabu'),
(46, 'KL12', 'MP11', '196009101986031011', '2017', '08:45:00', 'Rabu'),
(47, 'KL12', 'MP03', '196102281981021001', '2017', '10:30:00', 'Rabu'),
(48, 'KL15', 'MP07', '196908101994121003', '2017', '07:15:00', 'Kamis'),
(49, 'KL15', 'MP08', '196606171990031008', '2017', '08:45:00', 'Kamis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `id_kelas` int(10) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `jumlah_siswa` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kode_kelas`, `nip`, `nama_kelas`, `jumlah_siswa`) VALUES
(1, 'KL01', '1.9670914199512E+17', 'VIIA', 35),
(2, 'KL02', '1.9691113200801E+17', 'VIIB', 35),
(3, '', '', '', 0),
(4, '', '', '', 0),
(5, '', '', '', 0),
(6, '', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE IF NOT EXISTS `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` tinytext NOT NULL,
  `dusun` tinytext NOT NULL,
  `desa` tinytext NOT NULL,
  `kecamatan` tinytext NOT NULL,
  `kabupaten` tinytext NOT NULL,
  `provinsi` tinytext NOT NULL,
  `kode_pos` tinytext NOT NULL,
  `lintang` tinytext NOT NULL,
  `bujur` tinytext NOT NULL,
  `telepon` tinytext NOT NULL,
  `fax` tinytext NOT NULL,
  `email` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `alamat`, `rt_rw`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `lintang`, `bujur`, `telepon`, `fax`, `email`) VALUES
(1, 'Jln. Balai Desa Kedungwuluh Lor', '5/1', 'Kedungwuluh Lor', 'Kedungwuluh Lor', 'Kecamatan Patikraja', 'Kabupaten Banyumas', 'Jawa Tengah', '53171', ' -7.4777000', '109.2166000', '(0281) 6574601', '12345', 'smpn2patikraja@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id_nilai` int(10) NOT NULL,
  `nipd` varchar(12) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `semester` int(5) NOT NULL,
  `kode_pelajaran` varchar(20) NOT NULL,
  `nilai_uts` int(5) NOT NULL,
  `nilai_uas` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `nipd`, `kode_kelas`, `tahun_ajaran`, `semester`, `kode_pelajaran`, `nilai_uts`, `nilai_uas`) VALUES
(1, '5457', 'KL11', '2017', 1, 'MP01', 85, 81),
(2, '5596', 'KL02', '2017', 1, 'MP02', 84, 90),
(3, '5213', 'KL15', '2017', 1, 'MP02', 78, 83),
(4, '5630', 'KL03', '2017', 1, 'MP06', 87, 89),
(5, '5631', 'KL03', '2017', 1, 'MP06', 80, 78),
(6, '5596', 'KL02', '2017', 1, 'MP01', 79, 83),
(7, '5457', 'KL11', '2017', 1, 'MP07', 80, 82),
(8, '5562', 'KL01', '2017', 1, 'MP01', 75, 90),
(9, '5563', 'KL01', '2017', 1, 'MP01', 80, 75),
(10, '5564', 'KL01', '2017', 1, 'MP01', 60, 75),
(11, '5565', 'KL01', '2017', 1, 'MP01', 67, 80),
(12, '5566', 'KL01', '2017', 1, 'MP01', 78, 90),
(13, '5567', 'KL01', '2017', 1, 'MP01', 88, 80),
(14, '5568', 'KL01', '2017', 1, 'MP01', 80, 80),
(15, '5569', 'KL01', '2017', 1, 'MP01', 78, 90),
(16, '5570', 'KL01', '2017', 1, 'MP01', 89, 90),
(17, '5571', 'KL01', '2017', 1, 'MP01', 88, 88),
(18, '5572', 'KL01', '2017', 1, 'MP01', 67, 67),
(19, '5573', 'KL01', '2017', 1, 'MP01', 80, 83),
(20, '5574', 'KL01', '2017', 1, 'MP01', 78, 85),
(21, '5575', 'KL01', '2017', 1, 'MP01', 67, 78),
(22, '5576', 'KL01', '2017', 1, 'MP01', 88, 80),
(23, '5577', 'KL01', '2017', 1, 'MP01', 84, 88),
(24, '5578', 'KL01', '2017', 1, 'MP01', 80, 80),
(25, '5579', 'KL01', '2017', 1, 'MP01', 84, 83),
(26, '5580', 'KL01', '2017', 1, 'MP01', 80, 84),
(27, '5581', 'KL01', '2017', 1, 'MP01', 85, 80),
(28, '5582', 'KL01', '2017', 1, 'MP01', 84, 80),
(29, '5583', 'KL01', '2017', 1, 'MP01', 80, 88),
(30, '5584', 'KL01', '2017', 1, 'MP01', 77, 73),
(31, '5585', 'KL01', '2017', 1, 'MP01', 70, 70),
(32, '5586', 'KL01', '2017', 1, 'MP01', 70, 78),
(33, '5587', 'KL01', '2017', 1, 'MP01', 87, 80),
(34, '5588', 'KL01', '2017', 1, 'MP01', 70, 60),
(35, '5589', 'KL01', '2017', 1, 'MP01', 80, 80),
(36, '5590', 'KL01', '2017', 1, 'MP01', 80, 80),
(37, '5591', 'KL01', '2017', 1, 'MP01', 80, 90),
(38, '5592', 'KL01', '2017', 1, 'MP01', 70, 75),
(39, '5593', 'KL01', '2017', 1, 'MP01', 80, 75),
(40, '5594', 'KL01', '2017', 1, 'MP01', 70, 77),
(41, '5595', 'KL01', '2017', 1, 'MP01', 73, 76);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai_detail` (
  `id_nilai_detail` int(10) NOT NULL,
  `id_nilai` int(10) NOT NULL,
  `nilai` int(10) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `status` enum('H','T') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai_detail`
--

INSERT INTO `tbl_nilai_detail` (`id_nilai_detail`, `id_nilai`, `nilai`, `keterangan`, `status`) VALUES
(1, 1, 79, 'Nilai Harian 1', 'H'),
(2, 1, 86, 'Nilai Tugas 1', 'T'),
(3, 2, 84, 'Nilai Tugas 1', 'T'),
(13, 2, 87, 'Nilai Harian 1', 'H'),
(14, 8, 80, '', 'H'),
(15, 8, 80, '', 'T'),
(16, 9, 90, '', 'H'),
(17, 9, 85, '', 'T'),
(18, 10, 67, '', 'H'),
(19, 10, 80, '', 'T'),
(20, 11, 78, '', 'H'),
(21, 11, 80, '', 'T'),
(22, 12, 79, '', 'H'),
(23, 12, 80, '', 'T'),
(24, 13, 90, '', 'H'),
(25, 13, 78, '', 'T'),
(26, 14, 90, '', 'H'),
(27, 14, 0, '', 'T'),
(28, 14, 101, '', 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nuptk` int(30) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nip` int(30) NOT NULL,
  `status_pegawai` enum('PNS','Tenaga Honor Sekolah','','') NOT NULL,
  `jenis_ptk` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `telepon` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tugas_tambahan` text NOT NULL,
  `sk_cpns` varchar(50) NOT NULL,
  `tanggal_cpns` date NOT NULL,
  `sk_pengangkatan` varchar(50) NOT NULL,
  `tmt_pengangkatan` date NOT NULL,
  `lembaga_pengangkatan` varchar(50) NOT NULL,
  `pangkat_golongan` varchar(20) NOT NULL,
  `sumber_gaji` enum('APBN','APBD Kabupaten/Kota','Lainnya','') NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `nama_pasangan` varchar(50) NOT NULL,
  `nip_pasangan` int(30) NOT NULL,
  `pekerjaan_pasangan` varchar(40) NOT NULL,
  `tmt_pns` varchar(30) NOT NULL,
  `lisensi_kepsek` enum('Ya','Tidak','','') NOT NULL,
  `diklat_kepengawasan` enum('Ya','Tidak','','') NOT NULL,
  `keahlian_braille` enum('Ya','Tidak','','') NOT NULL,
  `keahlian_bahasa_isyarat` enum('Ya','Tidak','','') NOT NULL,
  `npwp` int(30) NOT NULL,
  `nama_wajib_pajak` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `nomor_rekening` int(30) NOT NULL,
  `rekening_atas_nama` varchar(30) NOT NULL,
  `nik` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelajaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pelajaran` (
  `id_pelajaran` int(20) NOT NULL,
  `kode_pelajaran` varchar(10) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `semester` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelajaran`
--

INSERT INTO `tbl_pelajaran` (`id_pelajaran`, `kode_pelajaran`, `nama_pelajaran`, `semester`) VALUES
(1, 'MP01', 'Pendidikan Kewarganegaraan', 1),
(2, 'MP02', 'Matematika', 1),
(3, 'MP03', 'Ilmu Pengatahuan Sosial', 1),
(4, '', '', 0),
(5, '', '', 0),
(6, '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_predikat`
--

CREATE TABLE IF NOT EXISTS `tbl_predikat` (
  `id_predikat` int(5) NOT NULL,
  `nilai_a` int(3) NOT NULL,
  `nilai_b` int(3) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_predikat`
--

INSERT INTO `tbl_predikat` (`id_predikat`, `nilai_a`, `nilai_b`, `grade`, `keterangan`) VALUES
(1, 85, 100, 'A', 'A adalah Grade Nilai Tertinggi dengan Rentang Nilai 85 sampai 100'),
(2, 75, 84, 'B', 'B adalah Grade dengan Rentang Nilai 75 sampai 84'),
(3, 55, 74, 'C', 'C adalah Grade dengan Rentang Nilai 55 sampai 74'),
(4, 35, 54, 'D', 'D adalah Grade dengan Rentang Nilai 35 sampai 54'),
(6, 0, 34, 'E', 'E adalah Grade dengan Rentang Nilai 0 sampai 34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profil`
--

CREATE TABLE IF NOT EXISTS `tbl_profil` (
  `id_profil` int(11) NOT NULL,
  `npsn` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bentuk_pendidikan` varchar(255) NOT NULL,
  `status_kepemilikan` varchar(255) NOT NULL,
  `sk_pendirian` varchar(255) NOT NULL,
  `tanggal_sk` date NOT NULL,
  `sk_operasional` varchar(255) NOT NULL,
  `tanggal_operasional` date NOT NULL,
  `kebutuhan_khusus` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `atas_nama_rek` varchar(255) NOT NULL,
  `luas_tanah_milik` varchar(255) NOT NULL,
  `luas_tanah_bukan` varchar(255) NOT NULL,
  `status_bos` varchar(255) NOT NULL,
  `waktu_penyelenggaraan` varchar(255) NOT NULL,
  `sertifikasi_iso` varchar(255) NOT NULL,
  `sumber_listrik` varchar(255) NOT NULL,
  `daya_listrik` varchar(255) NOT NULL,
  `akses_internet` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `npsn`, `status`, `bentuk_pendidikan`, `status_kepemilikan`, `sk_pendirian`, `tanggal_sk`, `sk_operasional`, `tanggal_operasional`, `kebutuhan_khusus`, `nama_bank`, `cabang`, `atas_nama_rek`, `luas_tanah_milik`, `luas_tanah_bukan`, `status_bos`, `waktu_penyelenggaraan`, `sertifikasi_iso`, `sumber_listrik`, `daya_listrik`, `akses_internet`) VALUES
(1, '20301933', 'Negeri', 'Sekolah Menengah Pertama', 'Pemerintah Daerah', '0216/O/1992', '1992-05-05', '0216/O/1992', '1992-05-01', 'Tidak Ada', 'BPD Jateng', '-', 'SMPN 2 Patikraja', '14686', '0', 'Bersedia Menerima', 'Pagi', 'Belum Bersertifikast', 'PLN', '9000', 'Telkom Speedy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rumus_raport`
--

CREATE TABLE IF NOT EXISTS `tbl_rumus_raport` (
  `id_rumus_raport` int(5) NOT NULL,
  `nilai_harian` int(3) NOT NULL,
  `nilai_tugas` int(3) NOT NULL,
  `nilai_uts` int(3) NOT NULL,
  `nilai_uas` int(3) NOT NULL,
  `kkm` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rumus_raport`
--

INSERT INTO `tbl_rumus_raport` (`id_rumus_raport`, `nilai_harian`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `kkm`) VALUES
(1, 25, 20, 25, 30, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sekolah`
--

CREATE TABLE IF NOT EXISTS `tbl_sekolah` (
  `id_sekolah` int(3) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `nss` char(20) NOT NULL,
  `nis` char(20) NOT NULL,
  `npsn` char(20) NOT NULL,
  `skpd` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon_sekolah` char(13) NOT NULL,
  `fax` char(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `profil_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nipd` int(20) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `nisn` int(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` int(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `jenis_tinggal` varchar(30) NOT NULL,
  `alat_transportasi` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `skhun` varchar(30) NOT NULL,
  `penerima_kps` enum('Ya','Tidak','','') NOT NULL,
  `no_kps` varchar(20) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `tahun_lahir_ayah` int(4) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `penghasilan_ayah` varchar(100) NOT NULL,
  `nik_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `tahun_lahir_ibu` int(4) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `nik_ibu` int(30) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `tahun_lahir_wali` int(4) NOT NULL,
  `pendidikan_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `penghasilan_wali` varchar(100) NOT NULL,
  `nik_wali` int(30) NOT NULL,
  `no_peserta_un` varchar(30) NOT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  `penerima_kip` enum('Ya','Tidak','','') NOT NULL,
  `nomor_kip` varchar(20) NOT NULL,
  `nama_di_kip` varchar(50) NOT NULL,
  `nomor_kks` varchar(20) NOT NULL,
  `no_reg_akta_lahir` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `nomor_rekening` int(30) NOT NULL,
  `rekening_atas_nama` varchar(50) NOT NULL,
  `layak_pip` enum('Ya','Tidak','','') NOT NULL,
  `alasan_layak_pip` varchar(50) NOT NULL,
  `kebutuhan_khusus` enum('Ya','Tidak','','') NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama_siswa`, `nipd`, `jenis_kelamin`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `nik`, `agama`, `alamat_lengkap`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `jenis_tinggal`, `alat_transportasi`, `telepon`, `hp`, `email`, `kode_kelas`, `nama_kelas`, `skhun`, `penerima_kps`, `no_kps`, `nama_ayah`, `tahun_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nik_ayah`, `nama_ibu`, `tahun_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nik_ibu`, `nama_wali`, `tahun_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nik_wali`, `no_peserta_un`, `no_ijazah`, `penerima_kip`, `nomor_kip`, `nama_di_kip`, `nomor_kks`, `no_reg_akta_lahir`, `bank`, `nomor_rekening`, `rekening_atas_nama`, `layak_pip`, `alasan_layak_pip`, `kebutuhan_khusus`, `sekolah_asal`, `foto`, `password`) VALUES
(1, 'Abelia Lin Nurwibowo', 5457, 'Perempuan', 40716306, 'Banyumas', '2004-03-27', 2147483647, 'Islam', 'Sawangan RT04/01, Sawangan Wetan', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'KL11', 'VIIIE', '', 'Tidak', '', 'Karsono', 1943, 'SMA', 'Pegawai Swasta', 'Menengah', '', 'Ika Nur Fitri', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', '', '', '', '', '', '', 0, '', 'Tidak', '', 'Ya', '', 'no-image.jpg', '12345'),
(2, 'Abi Prasetyo', 5213, 'Laki-laki', 33052834, 'Banyumas', '2004-03-27', 2147483647, 'Islam', 'Jl. Raya Kedungwuluh Lor, RT05/01, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '085229178773', '', 'KL15', 'IXC', '', 'Tidak', '', 'Karsono', 1965, 'SMA', 'Pegawai Swasta', 'Menengah', '', 'Naiti', 1968, 'Putus Sekolah', 'Buruh', 'Menengah', 0, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'P1PBEU', 'Abi Prasetyo', '', '', 'BRI', 2147483647, 'Abi Prasetyo', 'Tidak', '', 'Tidak', '', 'no-image.jpg', '220603'),
(3, 'Ade Setiadi', 5389, 'Laki-laki', 42297921, 'Banyumas', '2004-05-29', 2147483647, 'Islam', 'Karanganyar RT04/03, Karanganyar', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'KL12', 'VIIIF', '', 'Ya', 'PVGEO5', 'Likhin', 1958, 'SD', 'Buruh', 'Menengah', '', 'Aminah', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'PVGEO5', 'Ade Setiadi', '', '', 'BRI', 2147483647, 'Ade Setiadi', 'Tidak', '', 'Tidak', '', 'no-image.jpg', '290504'),
(4, 'Ade Setiawan', 5732, 'Laki-laki', 31013101, 'Banyumas', '2005-08-29', 2147483647, 'Islam', 'Jl. Raya Kedungwuluh Lor, RT05/05, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'KL06', 'VIIF', '', 'Tidak', '', 'Sugeng Riyanto', 1974, 'SD', 'Buruh', 'Kecil', '', 'Waryanti', 1976, 'Putus Sekolah', 'Buruh', 'Kecil', 0, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'TQ77IS', 'Ade Setiawan', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD N 2 Kedungwuluh Lor', 'no-image.jpg', '290805'),
(5, 'Adelia Yusnia Romadona', 5458, 'Perempuan', 35151414, 'Banyumas', '2003-11-11', 2147483647, 'Islam', 'Jl. Raya Karangdendep RT03/02, Karangendep', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'KL10', 'VIIID', '', 'Ya', '3953171005', 'Yusup', 1973, 'SD', 'Buruh', 'Kecil', '', 'Darsini', 1973, 'SD', 'Buruh', 'Kecil', 0, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'TO7RKV', 'Adella Yusnia Romadona', '', '', 'BRI', 2147483647, 'Adella Yusnia Roma', 'Tidak', '', 'Tidak', '', 'no-image.jpg', '101103'),
(6, 'Adena Tyastuti', 5596, 'Perempuan', 56918143, 'Banyumas', '2005-08-06', 2147483647, 'Islam', 'Notog RT05/02, Karangendep', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'KL02', 'VIIB', '', 'Ya', '', 'Darno', 1969, 'SMA', 'Berdagang', 'Tinggi', '3302122509690001', 'Darmestuti Kaeksi', 1972, 'SD', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '3720/KEC/2005', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 2 NOTOG', 'no-image.jpg', '060805'),
(7, 'Adhitya Nur Pratama', 5630, 'Laki-laki', 55634255, 'Banyumas', '2005-06-02', 0, 'Islam', 'Jl. Raya Notog RT03/06, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Angkudes', '', '089227835790', '', 'KL03', 'VIIC', '', 'Tidak', '', 'Agus Setiawan', 1979, 'SMA', 'Pegawai Swasta', 'Kecil', '3302121808790003', 'Dwi Nur Khayati', 1982, 'SMA', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MAARIF NU NOTOG', 'no-image.jpg', '020605'),
(8, 'Adinda Aprilia Tarto Saputri', 5664, 'Perempuan', 51959498, 'Banyumas', '2005-04-12', 2147483647, 'Islam', 'Perumaan Sidayasa Kedungrandu RT03/05, Kedungrandu', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'KL04', 'VIID', '', 'Tidak', '', 'Tarto', 1942, 'SMA', 'Pegawai Swasta', 'Menengah', '', 'Efi Fajar Diana', 1942, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD N 2 Kedungrandu', 'no-image.jpg', '120405'),
(9, 'Aditya Fajri Pradipta', 5631, 'Laki-laki', 58449952, 'Banyumas', '2005-01-17', 2147483647, 'Islam', 'Jl. Raya Kedungwuluh Lor, RT01/03, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'KL03', 'VIIC', '', 'Tidak', '', 'Solikhin', 1976, 'SD', 'Buruh', 'Menengah', '', 'Susi Erna Wati', 1978, 'SD', 'Buruh', 'Menengah', 0, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 1 KEDUNGWULUH LOR', 'no-image.jpg', '170105'),
(10, 'Afiana', 5432, 'Perempuan', 41439341, 'Serang', '2004-08-10', 2147483647, 'Islam', 'Jl. Kedungwuluh Kidul T02/01, Kedungwuluh Kidul', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '087737040668', '', 'KL08', 'VIIIB', '', 'Tidak', '', 'Kirwan', 1974, 'SMP', 'Buruh', 'Menengah', '3604052007750002', 'Hamdah', 1975, 'Putus Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', 1942, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', '', 'no-image.jpg', '100804'),
(11, 'Afif Fadhil Saputra', 5525, 'Laki-laki', 40857234, 'Banyumas', '2004-04-10', 2147483647, 'Islam', 'Jl. Raya Karangendep RT06/02, Karangendep', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl02', 'VIIB', '', 'Tidak', '', 'Tarso', 1943, 'SD', 'Buruh', 'Menengah', '', 'Eka Yuni Arti', 1983, 'SMP', 'Buruh', 'Kecil', 2147483647, '', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'TOBVBU', 'Afif Fadhil Saputra', '', '28/TP/PRJ/2008', 'BRI', 2147483647, 'Afif Fadhil Saputra', 'Tidak', '', 'Tidak', '', '', '100104'),
(12, 'Afifah Jihan Azzahra', 5281, 'Perempuan', 24679814, 'Jakarta', '2002-12-20', 2147483647, 'Islam', 'Jl. Kedungwuluh Lor RT01/02, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '081226779119', '', 'kl16', 'IXD', '', 'Tidak', '', 'Muhasim', 1965, 'SMA', 'Wiraswasta', 'Tinggi', '', 'Siti Koniah', 1969, 'S1', 'Pegawai Swasta', 'Tinggi', 0, '', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', '', '', '201202'),
(13, 'Afiqka', 5143, 'Perempuan', 31819392, 'Banyumas', '2003-09-08', 2147483647, 'Islam', 'Jl. Raya Karangedep RT01/02, Karangedep', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '081903258090', '087837127243', '', 'kl16', 'IXD', '', 'Tidak', '', 'Sudirin', 1975, 'SMP', 'Buruh', 'Tinggi', '', 'Wahyuni', 1984, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', '', '', '080903'),
(14, 'Afelia Muftahul Janah', 5424, 'Perempuan', 40877970, 'Banyumas', '2004-04-01', 2147483647, 'Islam', 'Karanganyar RT01/02, Karanganyar', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl09', 'VIIIC', '', 'Tidak', 'PIV2JB', 'Sutarno', 1944, 'SD', 'Buruh', 'Menengah', '', 'Supriyatin', 1943, 'Putus Sekolah', 'Tidak Bekerja', 'Menengah', 0, '', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'PIV2JB', 'Afrelia Muftahul Janah', '', '', 'BRI', 2147483647, 'AFRELIA MIFTAHUL JANAH', 'Tidak', '', 'Tidak', '', '', '010404'),
(15, 'Agali Dika Iriawan', 5214, 'Laki-laki', 30752726, 'Banyumas', '2003-08-29', 2147483647, 'Islam', 'Jl. Raya Notog RT06/01, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '08578258949', '', 'kl13', 'IXA', '', 'Tidak', '', 'Minto', 1970, 'SMP', 'Berdagang', 'Menengah', '', 'Samsini', 1971, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', '', '', '290803'),
(16, 'Agety Apriliani', 5526, 'Perempuan', 40912760, 'Bekasi', '2004-04-17', 2147483647, 'Islam', 'Kedungwuluh Lor RT05/03, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl09', 'VIIC', '', 'Tidak', '', 'Sunarto', 1974, 'SMP', 'Buruh', 'Menengah', '', 'Parsiti', 1978, 'SMP', 'Pegawai Swasta', 'Menengah', 0, '', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Ya', 'Miskin', 'Tidak', '', '', '170404'),
(17, 'Agil Triawan', 5215, 'Laki-laki', 25770623, 'Banyumas', '2002-10-18', 2147483647, 'Islam', 'Jl. Raya Notog RT06/02, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '082844033058', '', 'kl14', 'IXB', '', 'Tidak', '', 'Pardoyo', 1963, 'SD', 'Buruh', 'Menengah', '', 'Tumiyah', 1969, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', '', '', '181002'),
(18, 'Agung Febrianto', 5698, 'Laki-laki', 56950656, 'Banyumas', '2005-02-25', 2147483647, 'Islam', 'Karanganyar RT02/02, Karanganyar', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl05', 'VIIE', '', 'Tidak', '', 'Saekuni', 1984, 'SD', 'Buruh', 'Menengah', '', 'Suci Tri Astuti', 1986, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 1 KARANGANYAR', '', '250205'),
(19, 'Agung Santoso', 5699, 'Laki-laki', 63336864, 'Banyumas', '2006-01-07', 0, 'Islam', 'Jl. Kedungwuluh Lor RT05/03, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '082242593993', '', 'kl05', 'VIIE', '', 'Tidak', '', 'Sumarsono', 1962, 'SMP', 'Pegawai Swasta', 'Menengah', '', 'Narsem', 1966, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MAARIF NU KEDUNGWULUH LOR', '', '070106'),
(20, 'Agus Fathoni', 5247, 'Laki-laki', 33195782, 'Banyumas', '2003-07-02', 0, 'Islam', 'Jl. Balai Desa Kedungwuluh Lor RT03/02, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '', '', 'kl17', 'IXE', '', 'Tidak', '', 'Rasiwan', 1955, 'SMA', 'Lainnya', 'Menengah', '', 'Siti Rohayati', 1967, 'SMA', 'Lainnya', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', '', '', '020703'),
(21, 'Agus Sunarto', 5527, 'Laki-laki', 24831922, 'Banyumas', '2002-08-15', 2147483647, 'Islam', 'Kedungwuluh Lor RT01/05, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl11', 'VIIIE', '', 'Tidak', '', 'Kasroh', 1969, 'SD', 'Buruh', 'Menengah', '', 'Daryati', 1975, 'SD', 'Buruh', 'Menengah', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'P8Z001', 'Agus Sunarto', '', '', 'BRI', 2147483647, 'Agus Sunarto', 'Tidak', '', 'Tidak', '', '', '150802'),
(22, 'Agustin Indah Lestari', 5349, 'Perempuan', 11189101, 'Banyumas', '2002-08-13', 2147483647, 'Islam', 'Jl. Raya Bojongsari, RT03/02, Bojongsari', 'Kembaran', 'Banyumas', 'Jateng', 53182, 'Wali', 'Sepeda', '', '', '', 'kl17', 'IXE', '', 'Tidak', '', 'Agus Suyoto', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', '', 'Nurjariyah', 1984, 'SMP', 'Buruh', 'Kecil', 0, 'Kosim', 1943, 'Putus Sekolah', 'Buruh', 'Kecil', 0, '', 'DN-03 Dd 0057349', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', '', '', '130802'),
(23, 'Agustin Aulia Saputri', 5248, 'Perempuan', 25791568, 'Banyumas', '2002-08-08', 0, 'Islam', 'Jl. Raya Sidabowa RT02/07, Sidabowa', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Angkudes', '', '081327420483', '', 'kl18', 'IXF', '', 'Tidak', '', 'Sudarto', 1972, 'SD', 'Buruh', 'Menengah', '', 'Sugiarti', 1976, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', '', '', '080802'),
(24, 'Ahmad Fahrudin', 5144, 'Laki-laki', 26824453, 'Banyumas', '2002-08-22', 2147483647, 'Islam', 'Jl. Raya Notog RT02/05, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '', '', 'kl18', 'IXF', '', 'Ya', 'P53CIS', 'Sudirjo', 1960, 'SD', 'Buruh', 'Menengah', '', 'Ratiwen', 1966, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'P53CIS', 'Ahmad Fahrudin', '', '', 'BRI', 2147483647, 'Ahmad Fahrudin', 'Tidak', '', 'Tidak', '', '', '220802'),
(25, 'Aisya Frestiana Putri', 5315, 'Perempuan', 31591845, 'Banyumas', '2003-02-13', 2147483647, 'Islam', 'Jl. Balai Desa Kedungwuluh Lor RT04/01, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Wali', 'Sepeda', '', '081903298719', '', 'kl16', 'IXD', '', 'Tidak', 'T0O7U5', 'Tambir Pujiyanto', 1975, 'SMP', 'Pegawai Swasta', 'Menengah', '', 'Rokhayati', 1972, 'SMA', 'Tidak Bekerja', 'Kecil', 0, 'Gema Kamaludin', 1964, 'SMP', 'Buruh', 'Menengah', 0, '', '', 'Ya', 'T0O7U5', 'Aisya Frestiana Putri', '', '', 'BRI', 2147483647, 'Aisya Frestiana Putri', 'Tidak', '', 'Tidak', '', '', '130203'),
(26, 'Al Firstar Ratu Wening Sesasi', 5562, 'Perempuan', 52389550, 'Banyumas', '2005-09-09', 2147483647, 'Islam', 'Notog RT02/04, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Angkudes', '', '085869973654', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Mohamad Abdul Syarif', 1969, 'SMA', 'Lainnya', 'Naik', '3302122509690004', 'Windu Setiyani', 1982, 'SMA', 'Pegawai Swasta', 'Tinggi', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '4068/KEC/2005', '', 0, '', 'Tidak', 'Miskin', 'Tidak', 'SD NEGERI 1 NOTOG', '', '090905'),
(27, 'Amaliah Windu Shofi', 5563, 'Perempuan', 51739878, '3302125905050003', '2005-05-19', 2147483647, 'Islam', 'Jl. Raya Karangedep RT03/02, Karangedep', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Ya', 'PA1XWP', 'Buang', 1962, 'SD', 'Buruh', 'Kecil', '', 'Saritem', 1977, 'SMA', 'Buruh', 'Kecil', 0, 'Siti Romlah', 1964, 'SD', 'Tidak Bekerja', 'Kecil', 2147483647, '', '', 'Ya', 'PA1XWP', 'Amaliah Windu Shofi', '', '', 'BRI', 2147483647, 'Amaliah Windu Shofi', 'Tidak', '', 'Tidak', 'SD NEGERI KARANGENDEP', '', '190505'),
(28, 'Amelia Saputri', 5564, 'Perempuan', 59589290, 'Banyumas', '2005-03-04', 2147483647, 'Islam', 'Jl. Gunung Putri RT04/01, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '083870100489', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Heri Supangat', 1984, 'SMP', 'Lainnya', 'Tinggi', '3302120109840003', 'Feriyatun Asbiah', 1988, 'SMP', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MAARIF NU KEDUNGWULUH LOR', '', '040305'),
(29, 'Anis Yuliana', 5565, 'Perempuan', 57594661, 'Banyumas', '2005-04-05', 0, 'Islam', 'Jl. Kedungwuluh Lor RT02/02, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Jumiarto Kirsun', 1962, 'SD', 'Buruh', 'Kecil', '3302120303620001', 'Jaminah', 1968, 'SD', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MAARIF NU KEDUNGWULUH LOR', '', '050405'),
(30, 'Ardelia Emmery Silvain', 5566, 'Perempuan', 45000043, 'Banyumas', '2004-11-15', 0, 'Islam', 'Jl. Balai Desa Notog RT01/01, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '081282892292', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Deni Imam Buniawan', 1974, 'SMA', 'Pegawai Swasta', 'Menengah', '', 'Lina Vuliarti Jamil', 1983, 'SMA', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD Negeri Cawang 10 Pagi Jakarta Timur', '', '151104'),
(31, 'Azizah Febriyanti', 5567, 'Perempuan', 54477652, 'Banyumas', '2005-02-17', 2147483647, 'Islam', 'Jl. Kedungwuluh Lor RT02/04, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '085641530700', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Supriyadi', 1972, 'SMP', 'Buruh', 'Menengah', '3302120101720002', 'Rasilem', 1979, 'SD', 'Lainnya', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'TITHJV', 'Azizah Febriyanti', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MAARIF NU KEDUNGWULUH LOR', '', '170205'),
(32, 'Bintang Akhmad Al Kindi', 5568, 'Laki-laki', 56300783, 'Banyumas', '2005-04-10', 0, 'Islam', 'Jl. Masjid Baituraohman RT01/02, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '081226492516', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Edi Wikarya', 1975, 'SMP', 'Buruh', 'Menengah', '', 'Siti Juwariyah', 1977, 'SMP', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MAARIF NU KEDUNGWULUH LOR', '', '10042005'),
(33, 'Bruri Maulana', 5569, 'Laki-laki', 51041634, 'Banyumas', '2005-02-02', 2147483647, 'Islam', 'Notog RT03/01, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Priyono', 1979, 'SMA', 'Buruh', 'Kecil', '3302121804790001', 'Uci Meliana', 1984, 'S1', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '368/KEC/2005', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 2 NOTOG', '', '020205'),
(34, 'Dafan Syah Pratama Ramadhanu', 5570, 'Laki-laki', 51508459, 'Cilacap', '2005-10-07', 0, 'Islam', 'Jl. Terowong rejo RT02/02, Sidabowa', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Angkudes', '', '085842998152', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Saefudin', 1977, 'SMA', 'Wiraswasta', 'Menengah', '3301221103770002', 'Sugiatun', 1983, 'SMA', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MAARIF NU SIDABOWA', '', '071005'),
(35, 'Dani Prasetyo', 5571, 'Laki-laki', 51906423, 'Banyumas', '2005-08-15', 2147483647, 'Islam', 'Jl. Legok RT05/04, Panusupan', 'Cilongok', 'Banyumas', 'Jateng', 53162, 'Bersama Orang Tua', 'Angkudes', '', '085229257733', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Nurudin', 1967, 'SMP', 'Buruh', 'Menengah', '3302171503670004', 'Karsini', 1976, 'SD', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MA ARIF NU 2 PANUSUPAN', '', '150805'),
(36, 'Dellyana Putri Ramadhani', 5572, 'Perempuan', 55209321, 'Banyumas', '2005-10-13', 2147483647, 'Islam', 'Kedungwuluh Lor RT03/03, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Joni Fajri Hidayat', 1983, 'SMA', 'Wiraswasta', 'Menengah', '', 'Sri Daniyati', 1983, 'SD', 'Wiraswasta', 'Menengah', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 1 KEDUNGWULUH LOR', '', '131005'),
(37, 'Dias Ayu Afsari', 5573, 'Perempuan', 66074844, 'Banyumas', '2005-06-20', 2147483647, 'Islam', 'Notog RT01/02, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '0281 6844646', '081542892115', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Disan', 1959, 'SMA', 'Wiraswasta', 'Naik', '3302120205590002', 'Ikhwat', 1964, 'SMP', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '3260/KEC/2005', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 1 NOTOG', '', '200605'),
(38, 'Faris Al Fathoni', 5574, 'Laki-laki', 53081633, 'Purwokerto', '2005-03-06', 2147483647, 'Islam', 'Perum STM 75 Blok F No. 22 RT05/06, Sidabowa', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '081325755233', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Edi Purwanto', 1943, 'SMA', 'Pegawai Swasta', 'Tinggi', '', 'Sri Mungkasi', 1943, 'SMA', 'Pegawai Swasta', 'Tinggi', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 1 SIDABOWA', '', '060305'),
(39, 'Felix Agustiar', 5575, 'Laki-laki', 49214644, 'Banyumas', '2004-08-23', 2147483647, 'Islam', 'Kedungwuluh Lor RT03/02, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', 'T3H6NH', 'Nasiman', 1967, 'SMP', 'Buruh', 'Menengah', '', 'Rosimah', 1976, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'T3H6NH', 'Felix Agustiar', '', '', 'BRI', 2147483647, 'Felix Agustiar', 'Tidak', '', 'Tidak', 'SD NEGERI 1 KEDUNGWULUH LOR', '', '230804'),
(40, 'Ferly Setiawan', 5576, 'Laki-laki', 35032124, 'Banyumas', '2003-12-28', 2147483647, 'Islam', 'Notog RT04/03, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Pribadi', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Itoudin', 1977, 'Tidak Sekolah', 'Pegawai Swasta', 'Menengah', '', 'Tien Suprihatin', 1979, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '345/TP/KEC/2004', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 2 NOTOG', '', '281203'),
(41, 'Ferry Herdiansyah', 5577, 'Laki-laki', 58001166, 'Banyumas', '2005-04-25', 2147483647, 'Islam', 'Kedungwuluh Kidul RT03/01, Kedungwuluh Kidul', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '02817908710', '02817908710', 'sdn2kedungwuluhkidul@gmail.com', 'kl01', 'VIIA', '', 'Tidak', '', 'Sujono ', 1973, 'SD', 'Tidak Bekerja', 'Menengah', '', 'Endang Sriwati', 1974, 'SMP', 'Buruh', 'Menengah', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', 'Miskin', 'Tidak', 'SD NEGERI 2 KEDUNGWULUH KIDUL', '', '250405'),
(42, 'Hika Satria Adi', 5578, 'Laki-laki', 57856086, '', '2005-05-26', 0, 'Islam', 'Jl. Kedungwuluh Lor RT06/02, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Ahmad Sukarso', 1964, 'SD', 'Wiraswasta', 'Kecil', '3302123112640057', 'Hadiyah', 1967, 'SD', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MAARIF NU KEDUNGWULUH LOR', '', '260505'),
(43, 'Keefe Jouvand Avilla', 5579, 'Laki-laki', 51372403, 'Banyumas', '2005-02-05', 2147483647, 'Islam', 'Notog RT04/07, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Sugiyat', 1978, 'SMA', 'Pegawai Swasta', 'Tinggi', '3302120706780002', 'Lia Ari Fitanti', 1982, 'SMA', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '435/2005', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 2 NOTOG', '', '050205'),
(44, 'Muhammad Hesa Setiaji', 5580, 'Laki-laki', 54663994, 'Banyumas', '2005-05-04', 2147483647, 'Islam', 'Sawangan Wetan RT01/03, Sawangan Wetan', 'Patikraja', 'Banyumas', 'Jateng', 53171, '', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Heri Sunarto', 1943, 'SMA', 'Buruh', 'Menengah', '', 'Siti Asiyah', 1943, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 2 SAWANGAN', '', '04052005'),
(45, 'Muhammad Irsyad Priyambudi', 5581, 'Laki-laki', 59723236, 'Bandung', '2005-02-27', 2147483647, 'Islam', 'Notog RT05/01, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '085795824910', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Musdiyono', 1975, 'SMA', 'Pegawai Swasta', 'Tinggi', '3204332610750005', 'Listiana', 1978, 'SMA', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '4.338/2005', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 2 NOTOG', '', '270205'),
(46, 'Nabella Mutiara Ramadhani', 5582, 'Laki-laki', 44970320, 'Banyumas', '2004-11-12', 0, 'Islam', 'Sidabowa RT02/07, Sidabowa', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Pribadi', '', '085878682366', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Sugito', 1943, 'SMA', 'PNS', 'Kecil', '', 'Suliarti', 1943, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 9 KRANJI', '', '121104'),
(47, 'Oktana Ramadani', 5583, 'Perempuan', 48189150, 'Banyumas', '2004-10-31', 0, 'Islam', 'Jl. Kedungwuluh Kidul RT09/02, Kedungwuluh Kidul', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '082325621034', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Ahmad Setiarjo', 1968, 'SD', 'Buruh', 'Kecil', '3302121809680001', 'Rakisem', 1971, 'SD', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'MI MUHAMMADIYAH KEDUNGWULUH LOR', '', '311004'),
(48, 'Ovi Ayu Lestari', 5584, 'Perempuan', 58395771, 'Banyumas', '2005-03-12', 2147483647, 'Islam', 'Kedungrandu RT01/04, Kedungrandu', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Angkudes', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Riswanto', 1943, 'SMP', 'Pensiunan', 'Menengah', '', 'Sri Wahyuningsih', 1943, 'SD', 'Pensiunan', 'Menengah', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 1 SIDABOWA', '', '120305'),
(49, 'Putra Bagus Pribadi', 5585, 'Laki-laki', 55879462, 'Banyumas', '2005-04-04', 2147483647, 'Islam', 'Kedungwuluh Kidul RT02/02, Kedungwuluh Kidul', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Sutanto', 1974, 'SMP', 'Buruh', 'Menengah', '', 'Murtiyani', 1972, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '3298/TP-20/2008', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 1 KEDUNGWULUH KIDUL', '', '040405'),
(50, 'Putra Saeful Ansar', 5586, 'Laki-laki', 51896069, 'Banyumas', '2005-03-07', 2147483647, 'Islam', 'Notog RT03/03, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '082137885201', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Sarwoto', 1968, 'SMP', 'Pegawai Swasta', 'Kecil', '3302121004670001', 'Surtiyani', 1978, 'SMP', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '3600/TP/KEC/2005', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 1 NOTOG', '', '070305'),
(51, 'Rafi Yusuf Gunawan', 5587, 'Laki-laki', 44239433, 'Banyumas', '2004-11-18', 2147483647, 'Islam', 'Karanganyar RT02/02, Karanganyar', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Sepeda', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Ardianti', 1943, 'SMP', 'Buruh', 'Tinggi', '', 'Jumiati', 1943, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 1 KARANGANYAR', '', '181104'),
(52, 'Rizki Dwi Pratama', 5588, 'Laki-laki', 57324233, 'Purwokerto', '2005-09-11', 2147483647, 'Islam', 'Sidabowa RT03/01, Sidasari, Sidabowa', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Pribadi', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Seno Adhi Saputro', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', '', 'Kusmaisah', 1981, 'SMA', 'Pegawai Swasta', 'Tinggi', 0, 'Kusmaisan', 1981, 'SMA', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '1219/TP/KEC/2006', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 4 KARANGPUCUNG', '', '110905'),
(53, 'Salma Ayu Safitri', 5589, 'Perempuan', 57154618, 'Banyumas', '2005-04-11', 2147483647, 'Islam', 'Karanganyar RT04/02, Karanganyar', 'Patikraja', '53171', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Jasman', 1943, 'SMA', 'Pegawai Swasta', 'Naik', '', 'Waryati', 1943, 'SD', 'Tidak Bekerja', 'Menengah', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 1 KARANGANYAR', '', '110405'),
(54, 'Salsabila Wulandari', 5590, 'Perempuan', 44833625, 'Banyumas', '2004-09-02', 2147483647, 'Islam', 'Notog RT02/04, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Pribadi', '', '081391613860', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Suparmin', 1975, 'SMA', 'Pegawai Swasta', 'Tinggi', '3302120504750005', 'Lin Herlinah', 1975, 'SMA', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '1801/KEC/2004', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 2 NOTOG', '', '02092004'),
(55, 'Setyo Adi Pradana', 5591, 'Laki-laki', 68907892, 'Cilacap', '2006-09-06', 2147483647, 'Islam', 'Karanganyar RT01/01, Karanganyar', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', '', 'Munijah ', 1983, 'SD', 'Buruh', 'Menengah', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI 1 KARANGANYAR', '', '060906'),
(56, 'Sri Suprihatiningtyas', 5592, 'Perempuan', 41526980, 'Banyumas', '2004-03-04', 2147483647, 'Islam', 'Jl. Raya Karangedep RT02/02, Karangedep', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Angkudes', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Tarjuki', 1972, 'SD', 'Buruh', 'Menengah', '3302120707720003', 'Sutarti', 1970, 'SMA', 'Tidak Bekerja', 'Kecil', 2147483647, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Tidak', '', 'Tidak', 'SD NEGERI KARANGENDEP', '', '040304'),
(57, 'Umi Ida Rahmawati', 5593, 'Perempuan', 57074472, 'Wonoyoso', '0005-03-24', 0, 'Islam', 'Kedungwuluh Lor RT05/01, Kedungwuluh Lor', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Tidak', '', 'Suyatno', 1975, 'Putus Sekolah', 'Buruh', 'Menengah', '', 'Sartini', 1978, 'SMP', 'Buruh', 'Menengah', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', '', '', '', 0, '', 'Ya', 'Miskin', 'Tidak', 'SD NEGERI 1 KEDUNGWULUH LOR', '', '240305'),
(58, 'Uun Saferina', 5594, 'Perempuan', 48089174, 'Banyumas', '2004-02-02', 2147483647, 'Islam', 'Jl. Raya Karangedep RT01/02, Karangedep', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Ya', '39ymjp53171004', 'Slamet', 1966, 'SD', 'Buruh', 'Kecil', '', 'Narsiti', 1969, 'SD', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Tidak', '', '', 'P5LQVN', '', '', 0, '', 'Ya', 'PKH', 'Tidak', 'SD NEGERI KARANGENDEP', '', '020204'),
(59, 'Ziqri Purwanto', 5595, 'Laki-laki', 35172013, 'Banyumas', '2003-10-11', 2147483647, 'Islam', 'Notog RT07/03, Notog', 'Patikraja', 'Banyumas', 'Jateng', 53171, 'Bersama Orang Tua', 'Jalan_kaki', '', '', '', 'kl01', 'VIIA', '', 'Ya', 'TANHDB', 'Supriyatno', 1977, 'SD', 'Buruh', 'Menengah', '', 'Tasni', 1979, 'SMP', 'Tidak Bekerja', 'Kecil', 0, '', 1943, 'Tidak Sekolah', 'Tidak Bekerja', 'Kecil', 0, '', '', 'Ya', 'TANHDB', 'Ziqri Purwanto', '', '', 'BRI', 2147483647, 'Ziqri Purwanto', 'Tidak', '', 'Tidak', 'SD NEGERI 3 NOTOG', '', '111003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visimisi`
--

CREATE TABLE IF NOT EXISTS `tbl_visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi1` text NOT NULL,
  `misi2` text NOT NULL,
  `misi3` text NOT NULL,
  `misi4` text NOT NULL,
  `misi5` text NOT NULL,
  `misi6` text NOT NULL,
  `misi7` text NOT NULL,
  `misi8` text NOT NULL,
  `misi9` text NOT NULL,
  `misi10` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`id_visimisi`, `visi`, `misi1`, `misi2`, `misi3`, `misi4`, `misi5`, `misi6`, `misi7`, `misi8`, `misi9`, `misi10`) VALUES
(1, 'Sehat, Mandiri dan berilmu, Ahklak mulia, Realistis, Takwa dan Terampil dan Berwawasan Lingkungan', 'Meningkatkan keimanan terhadap Tuhan Yang Maha Esa.', 'Meningkatkan pengamalan ajaran agama dan budaya bangsa sehingga menjadi manusia yang berakhlak mulia.', 'Membiasakan warga sekolah untuk berperilaku sehat jasmani dan rohani.', 'Meningkatkan Ilmu Pengetahuan dan Teknologi sesuai dengan perkembangan zaman.', 'Melaksanakan pembelajaran dan bimbingan secara efektif dan menyenangkan sehingga peserta didik dapat  berkembang secara optimal sesuai dengan potensi yang dimiliki.         ', 'Menumbuhkembangkan perilaku berbudaya, berakhlak mulia, dan  berbudi pekerti luhur.', 'Menyusun kurikulum sekolah yang sesuai kaidah dan tepat waktu', 'Mengembangkan silabus pembelajaran.', 'Menyusun RPP dengan menggunakan model pembelajaran yang disesuaikan dengan karakteristik peserta didik.', 'Menyusun RPP dengan menggunakan media pembelajaran yang disesuaikan dengan materi pembelajaran.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_administrator`
--

CREATE TABLE IF NOT EXISTS `user_administrator` (
  `id_admin` int(3) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_administrator`
--

INSERT INTO `user_administrator` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(12, 'administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'superuser'),
(38, 'operator', 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_halaman`
--
ALTER TABLE `tbl_halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `tbl_header_print`
--
ALTER TABLE `tbl_header_print`
  ADD PRIMARY KEY (`id_header_print`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_nilai_detail`
--
ALTER TABLE `tbl_nilai_detail`
  ADD PRIMARY KEY (`id_nilai_detail`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `tbl_predikat`
--
ALTER TABLE `tbl_predikat`
  ADD PRIMARY KEY (`id_predikat`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tbl_rumus_raport`
--
ALTER TABLE `tbl_rumus_raport`
  ADD PRIMARY KEY (`id_rumus_raport`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- Indexes for table `user_administrator`
--
ALTER TABLE `user_administrator`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_halaman`
--
ALTER TABLE `tbl_halaman`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_header_print`
--
ALTER TABLE `tbl_header_print`
  MODIFY `id_header_print` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tbl_nilai_detail`
--
ALTER TABLE `tbl_nilai_detail`
  MODIFY `id_nilai_detail` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `id_pelajaran` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_predikat`
--
ALTER TABLE `tbl_predikat`
  MODIFY `id_predikat` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_rumus_raport`
--
ALTER TABLE `tbl_rumus_raport`
  MODIFY `id_rumus_raport` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_administrator`
--
ALTER TABLE `user_administrator`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
