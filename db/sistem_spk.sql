-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 06 Nov 2020 pada 07.16
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE IF NOT EXISTS `jurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(1, 'Fisika'),
(2, 'Komputer'),
(3, 'matematika'),
(4, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

DROP TABLE IF EXISTS `rekap`;
CREATE TABLE IF NOT EXISTS `rekap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(128) NOT NULL,
  `attitude` varchar(255) NOT NULL,
  `pa` varchar(255) NOT NULL,
  `4k` varchar(255) NOT NULL,
  `pna` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap`
--

INSERT INTO `rekap` (`id`, `nim`, `attitude`, `pa`, `4k`, `pna`, `total`) VALUES
(1, 222, '1.4423076923077', '0.48076923076923', '0.66666666666667', '0.375', '2.9647435897436');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_data`
--

DROP TABLE IF EXISTS `s_data`;
CREATE TABLE IF NOT EXISTS `s_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `s_data`
--

INSERT INTO `s_data` (`id`, `nama`, `nilai`) VALUES
(1, 'c1_c1', '1'),
(2, 'c1_c2', '2'),
(3, 'c1_c3', '4'),
(4, 'c1_c4', '3'),
(5, 'c2_c1', '0.5'),
(6, 'c2_c2', '1'),
(7, 'c2_c3', '2'),
(8, 'c2_c4', '2'),
(9, 'c3_c1', '0.25'),
(10, 'c3_c2', '0.5'),
(11, 'c3_c3', '1'),
(12, 'c3_c4', '2'),
(13, 'c4_c1', '0.33'),
(14, 'c4_c2', '0.66'),
(15, 'c4_c3', '0.5'),
(16, 'c4_c4', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_akses_menu`
--

DROP TABLE IF EXISTS `user_akses_menu`;
CREATE TABLE IF NOT EXISTS `user_akses_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `user_role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_akses_menu`
--

INSERT INTO `user_akses_menu` (`id`, `menu_id`, `user_role`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 1),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_alternatif`
--

DROP TABLE IF EXISTS `user_alternatif`;
CREATE TABLE IF NOT EXISTS `user_alternatif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(255) NOT NULL,
  `attitude` varchar(255) NOT NULL,
  `pa` varchar(255) NOT NULL,
  `4k` varchar(255) NOT NULL,
  `pna` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=340 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_alternatif`
--

INSERT INTO `user_alternatif` (`id`, `nim`, `attitude`, `pa`, `4k`, `pna`) VALUES
(338, 222, '3', '2', '5', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(128) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id`, `nim`, `nama`, `kelas`, `jurusan`, `image`) VALUES
(2, 222, 'asep', 'A1', 'Fisika', '3.jpg'),
(5, 444, 'ringga', 'vfa', 'Bahasa Indonesia', 'user.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id`, `email`, `pass`, `nim`, `role`) VALUES
(2, 'ringga@gmail.com', '$2y$10$ae30Q81yJnwTULzRLdkFh.bHE/Ih4MpIKpy3roAoKzMublSBRgcGm', 'Admin', 1),
(5, 'ringgaadmin@gmail.com', '$2y$10$/p9aATR72cvkeveFEWEECeeII7aNJYeIsKM.e3wsdSQDzUzVadTQO', '222', 2),
(8, 'baa@stiki.ac.id', '$2y$10$RlUCrv6rE6AGiR9XNXc9K.b/6.uMGzAnPwocZXC8b4XOjH9C.uJhi', '444', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE IF NOT EXISTS `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `logo2` varchar(128) NOT NULL,
  `aksi` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `nama`, `logo`, `logo2`, `aksi`) VALUES
(1, 'Admin Menu', 'nav-icon fas fa-circle', 'right fas fa-angle-left', 1),
(2, 'User Menu', 'nav-icon fas fa-atom', 'right fas fa-angle-left', 1),
(3, 'Daftar Beasiswa', 'nav-icon fas fa-balance-scale-right', 'right fas fa-angle-left', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

DROP TABLE IF EXISTS `user_sub_menu`;
CREATE TABLE IF NOT EXISTS `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `url` varchar(128) NOT NULL,
  `aksi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `nama`, `logo`, `url`, `aksi`) VALUES
(1, 1, 'Data Siswa', 'fas fa-users nav-icon', 'akses/user/data_siswa', 1),
(2, 1, 'AHP & MFEP proses', 'fas fa-cog nav-icon', 'akses/sampel/ahp_tampil', 1),
(9, 2, 'Voucher', 'fas fa-address-card nav-icon', 'akses/user/user_voucher', 1),
(5, 3, 'Siswa Penerima', 'fas fa-users nav-icon', 'akses/Beasiswa', 1),
(8, 1, 'Voucher', 'fas fa-address-card nav-icon', 'akses/user/voucher', 1),
(6, 1, 'AHP setting', 'fas fa-cog nav-icon', 'akses/sampel', 1),
(7, 1, 'User Nilai', 'fas fa-users nav-icon', 'akses/user/user_nilai', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE IF NOT EXISTS `voucher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `voucher`
--

INSERT INTO `voucher` (`id`, `nim`, `kode`, `nama`, `info`) VALUES
(15, 222, '2020-11-06=>03:54:33=>222', 'attitude', 'adasdad'),
(14, 444, '2020-11-06=>03:54:33=>444', 'attitude', 'adasdad'),
(13, 222, '2020-11-06=>03:54:21=>222', '4k', 'adasdad'),
(12, 444, '2020-11-06=>03:54:21=>444', '4k', 'adasdad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
