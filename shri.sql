-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2024 pada 11.20
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapasien`
--

CREATE TABLE `datapasien` (
  `nomorm` int(12) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `namapasien` varchar(250) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kawin` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapasien`
--

INSERT INTO `datapasien` (`nomorm`, `reg`, `namapasien`, `tempatlahir`, `tgl_lahir`, `kelamin`, `agama`, `kawin`, `pekerjaan`, `alamat`) VALUES
(100250, '0', 'Dwi Kartika sari', '-', '1986-04-21', 'wanita', 'islam', 'kawin', 'pns', '-'),
(100322, '0', 'Farhati', '-', '1981-07-22', 'wanita', 'islam', 'kawin', 'ibu rumah tangga', '-'),
(101010, '0', 'Nella Savira Liani', '-', '1981-02-10', 'wanita', 'islam', 'kawin', 'pns', '-'),
(101210, '0', 'Edy Kusisi', '-', '1984-04-24', 'pria', 'islam', 'kawin', 'pns', '-'),
(101211, '0', 'Destiana', '-', '1977-12-21', 'wanita', 'islam', 'kawin', 'pns', '-'),
(117819, '0', 'Fonny Veronika Runtulalo', '-', '1978-11-29', 'wanita', 'kristen', 'kawin', 'pns', '-'),
(121080, '0', 'Haerani', '-', '1987-08-11', 'wanita', 'islam', 'kawin', 'pns', '-'),
(137632, '0', 'Ni Putu WendiYuniarti', '-', '1983-06-21', 'wanita', 'hindu', 'kawin', 'pns', '-'),
(152010, '0', 'Nurlela lantu', '-', '0019-07-16', 'wanita', 'islam', 'kawin', 'pns', '-'),
(152032, '0', 'Gaipyana Sembiring', '-', '1992-06-21', 'wanita', 'islam', 'kawin', 'pns', '-'),
(192087, '0', 'Ruwayda', '-', '1975-09-13', 'wanita', 'islam', 'kawin', 'pns', '-'),
(197590, '0', 'Santun Setiawati', '-', '1978-12-23', 'wanita', 'islam', 'kawin', 'pns', '-'),
(197890, '0', 'Nusni', '-', '1978-07-07', 'wanita', 'islam', 'kawin', 'pns', '-'),
(198892, '0', 'Sari Dewi', '-', '1878-09-25', 'wanita', 'islam', 'kawin', 'pns', '-'),
(200302, '0', 'Maryati dewi', '-', '1976-05-16', 'wanita', 'islam', 'kawin', 'pns', 'bandung'),
(200911, '0', 'Retno Prihastuti', '-', '1981-04-05', 'wanita', 'islam', 'kawin', 'pns', '-'),
(201012, '0', 'Lilis Dwi Kristyaningrum', '-', '1987-05-12', 'wanita', 'kristen', 'kawin', 'karyawan', '-'),
(201083, '0', 'Supatmi', '-', '1958-08-10', 'wanita', 'islam', 'janda', 'pensiunan', '-'),
(201094, '0', 'Budiman', '-', '1984-02-01', 'pria', 'islam', 'kawin', 'tni', '-'),
(201530, '0', 'Nur Annisa', '-', '1992-08-01', 'wanita', 'islam', 'kawin', 'polri', '-'),
(201628, '0', 'Agung Budiawan', '-', '1990-11-20', 'pria', 'islam', 'kawin', 'pns', '-'),
(201980, '0', 'Indriyani Laidingo', '-', '1990-02-07', 'wanita', 'islam', 'kawin', 'pns', '-'),
(212203, '0', 'Sunarti Arsan', '-', '1981-06-21', 'wanita', 'islam', 'kawin', 'pns', '-'),
(212208, '0', 'Agustina Rifa', '-', '1979-08-31', 'wanita', 'islam', 'kawin', 'pns', '-'),
(212210, '0', 'Senny Rondonuwu', '-', '1979-12-03', 'wanita', 'kristen', 'kawin', 'pns', 'manado'),
(217904, '0', 'Hesty Widyasih', '-', '1979-10-07', 'wanita', 'islam', 'kawin', 'pns', '-'),
(221978, '0', 'Evaliani Surachman', '-', '1982-03-14', 'wanita', 'islam', 'kawin', 'pns', '-'),
(222222, '0', 'Hartini', '-', '1991-07-26', 'wanita', 'islam', 'kawin', 'pns', '-'),
(234079, '0', 'Rosmalinda', '-', '1997-09-20', 'wanita', 'islam', 'belum kawin', 'pns', '-'),
(301256, '0', 'Suriyanti Masaolyra', '-', '1977-06-13', 'wanita', 'islam', 'kawin', 'pns', '-'),
(322013, '0', 'Agustina Medika Putri', '-', '1983-08-20', 'wanita', 'islam', 'kawin', 'pns', '-'),
(402009, '0', 'Rudi Abas', '-', '1983-07-04', 'pria', 'islam', 'kawin', 'pns', '-'),
(402050, '0', 'Lembayung Senja', 'surabaya', '2000-02-20', 'wanita', 'islam', 'belum kawin', 'mahasiswa', 'Rungkut Surabaya jawa timur'),
(402201, '0', 'Rahmah Apriyani', '-', '1997-04-28', 'wanita', 'islam', 'kawin', 'pns', '-'),
(412201, '0', 'ani', '-', '1979-10-25', 'wanita', 'islam', 'kawin', 'pns', '-'),
(422002, '0', 'Lingga Ikaditya', '-', '1988-01-18', 'wanita', 'islam', 'kawin', 'pns', 'Tasikmalaya'),
(432345, '0', 'Salman', '-', '1984-03-25', 'pria', 'islam', 'kawin', 'pns', '-'),
(449863, '0', 'Rizky Rianashia', '-', '1990-12-04', 'wanita', 'islam', 'kawin', 'pns', '-'),
(455678, '0', 'Wenny Winalti', '-', '1988-02-09', 'wanita', 'islam', 'kawin', 'pns', '-'),
(456732, '0', 'Ayune elok Tenan', 'Wonogiri', '2008-08-08', 'wanita', 'islam', 'belum kawin', 'mahasiswa', 'Sambiroto, Wonogiri, Jawa Tengah'),
(472177, '0', 'Nisrina Sabhatina Amalia', '-', '1995-01-02', 'wanita', 'islam', 'belum kawin', 'pns', '-'),
(500125, '0', 'Saiful Bakri', '-', '1975-08-16', 'pria', 'islam', 'kawin', 'pns', '-'),
(501104, '0', 'Muhammad Ardi', '-', '1979-05-01', 'pria', 'islam', 'kawin', 'pns', '-'),
(501204, '0', 'Dyah Titisari', '-', '1989-06-11', 'wanita', 'islam', 'kawin', 'pns', 'surabaya'),
(503201, '0', 'Cici Idela', '-', '1990-06-13', 'wanita', 'islam', 'kawin', 'pns', 'padang'),
(509219, '0', 'Anyong Said', '-', '1993-03-11', 'pria', 'islam', 'kawin', 'pns', '-'),
(510215, '0', 'Shinta Sisca ', '-', '1983-05-10', 'wanita', 'islam', 'kawin', 'ibu rumah tangga', '-'),
(510227, '-', 'Ayu Mardiana', '-', '1982-09-30', 'wanita', 'islam', 'kawin', 'pns', '-'),
(519088, '0', 'Dwi Fitriningtyas', '-', '1988-05-19', 'wanita', 'islam', 'kawin', 'pns', '-'),
(532561, '0', 'Richard king', 'lahat', '1974-04-23', 'pria', 'katholik', 'kawin', 'pns', 'sukarami palembang'),
(546732, '0', 'sembodro ', 'solo', '2005-09-15', 'wanita', 'hindu', 'belum kawin', 'mahasiswa', 'palur ,solo surakarta'),
(563891, '0', 'Siti Hapsah', '-', '1986-03-30', 'wanita', 'islam', 'kawin', 'pns', '-'),
(567431, '0', 'sastro wardoyo', 'karanganyar', '1981-12-12', 'pria', 'islam', 'kawin', 'tni', 'Bangsri, Karanganyar , jawa tengah'),
(567854, '0', 'tirta Bumi semesta', 'jakarta', '2024-03-12', 'pria', 'islam', 'belum kawin', 'lainnya', 'jakarta'),
(678592, '0', 'Agus Triyono', '-', '1983-08-05', 'pria', 'islam', 'kawin', 'pns', '-'),
(700797, '0', 'Arniati', '-', '1986-10-10', 'wanita', 'islam', 'kawin', 'ibu rumah tangga', '-'),
(712022, '0', 'Henny Yuliartini', '-', '1979-07-17', 'wanita', 'islam', 'kawin', 'pns', 'palembang'),
(765461, '0', 'Lily Aryani Dalimunte', '-', '1991-01-17', 'wanita', 'islam', 'kawin', 'pns', '-'),
(769809, '0', 'Lina Kus Megawati', '-', '1988-04-15', 'pria', 'islam', 'kawin', 'pns', '-'),
(777777, '0', 'Gendes ', 'sragen', '2022-02-22', 'wanita', 'kepercayaan', 'belum kawin', 'mahasiswa', 'Sragen jawa tengah'),
(800886, '0', 'Amalia Arnis', '-', '1978-07-06', 'wanita', 'islam', 'kawin', 'pns', '-'),
(801108, '0', 'Rochmad Munandar', '-', '1978-01-24', 'pria', 'islam', 'kawin', 'pelajar', 'kendari'),
(801201, '0', 'Lilis Febriyanti', '-', '1990-02-08', 'wanita', 'islam', 'kawin', 'pns', 'bandung'),
(809083, '0', 'Risna Dwi Yanti', '-', '1983-06-15', 'wanita', 'islam', 'kawin', 'pns', '-'),
(867541, '0', 'Enggar Lestari', '-', '1980-06-17', 'wanita', 'islam', 'kawin', 'pns', '-'),
(876570, '0', 'Siti Yuniarti', '-', '1982-06-08', 'wanita', 'islam', 'kawin', 'pns', '-'),
(887765, '0', 'Hendro Sapto nugroho', '-', '1980-01-01', 'pria', 'islam', 'kawin', 'tni', '-'),
(891907, '0', 'Yunisa Hasifa', '-', '2019-12-12', 'wanita', 'islam', 'belum kawin', 'pelajar', '-'),
(905098, '0', 'nuniek Widyaningrum', '-', '1983-06-30', 'wanita', 'islam', 'kawin', 'pns', '-'),
(906001, '0', 'Silvia safitri', '-', '1995-12-16', 'wanita', 'islam', 'belum kawin', 'belum kerja', '-'),
(906005, '0', 'Nada Hasni', '-', '1966-05-20', 'wanita', 'islam', 'janda', 'lainnya', '-'),
(906006, '0', 'Yustsyak Maulana ', '-', '1994-04-04', 'pria', 'islam', 'belum kawin', 'polri', '-'),
(906007, '0', 'Bama Romadhon', '-', '1986-01-10', 'pria', 'islam', 'kawin', 'tni', 'jember'),
(906008, '0', 'Jumantoro Widodo', '-', '1999-09-09', 'pria', 'islam', 'kawin', 'karyawan', '-'),
(906010, '0', 'Muhammad Fahmi', '-', '1977-06-20', 'pria', 'islam', 'kawin', 'pns', '-'),
(906013, '0', 'pandu Gautama Wiraguna', '-', '1998-01-04', 'pria', 'islam', 'belum kawin', 'tni', '-'),
(906017, '0', 'dita Shafira', 'nganjuk', '2020-10-25', 'wanita', 'islam', 'belum kawin', 'lainnya', 'madura'),
(906018, '0', 'Millani Ika Nardiati', '-', '2011-01-23', 'wanita', 'islam', 'belum kawin', 'lainnya', '-'),
(906019, '0', 'Asih Kundari', '-', '1999-08-19', 'wanita', 'islam', 'belum kawin', 'karyawan', '-'),
(906021, '0', 'komariah', '-', '1950-06-12', 'wanita', 'islam', 'janda', 'lainnya', '-'),
(906042, '0', 'Bahruddin Hasan', 'makasar', '1999-09-19', 'pria', 'islam', 'belum kawin', 'polri', 'makasar '),
(906047, '0', 'Ridho trifianto', '-', '1987-07-31', 'pria', 'islam', 'kawin', 'karyawan', '-'),
(906049, '0', 'Rahma Sarita', 'Banyuwangi', '2009-02-14', 'wanita', 'islam', 'belum kawin', 'belum kerja', 'banyuwangi'),
(906051, '0', 'Wildan Ilham', '-', '1980-01-08', 'pria', 'islam', 'kawin', 'pengusaha', '-'),
(906052, '0', 'Erna Sudrajad', 'bandung', '1978-02-10', 'wanita', 'islam', 'kawin', 'pns', '-'),
(906053, '0', 'Hofidatul Afiyah', 'pasuruan', '2003-12-17', 'wanita', 'islam', 'kawin', 'belum kerja', '-'),
(906056, '0', 'Ike Anggi Fitriananda', '-', '1998-02-23', 'wanita', 'islam', 'belum kawin', 'lainnya', '-'),
(906058, '0', 'Iqbal Baihaqi', '-', '2021-09-30', 'pria', 'islam', 'belum kawin', 'lainnya', '-'),
(906065, '0', 'Nurul Huda', '-', '1968-01-11', 'pria', 'islam', 'kawin', 'pengusaha', '-'),
(906066, '0', 'Nur Ardiansyah', '-', '1988-09-15', 'pria', 'islam', 'kawin', 'polri', '-'),
(906067, '0', 'Fidzi Roumil Ula', '-', '2000-03-12', 'wanita', 'islam', 'belum kawin', 'lainnya', '-'),
(906070, '0', 'Misbahul Munir', '-', '1996-05-04', 'pria', 'islam', 'belum kawin', 'karyawan', '-'),
(906074, '0', 'Dhella Izzah Afqorinah', '-', '1990-03-19', 'wanita', 'islam', 'kawin', 'pns', '-'),
(906078, '0', 'Yuni Indah Sari', 'surabaya', '1972-03-11', 'wanita', 'islam', 'janda', 'lainnya', '-'),
(906080, '0', 'Apriliya Nurfatimah', '-', '2000-02-20', 'wanita', 'islam', 'kawin', 'karyawan', '-'),
(906082, '0', 'Siti anita reza', 'kediri', '2000-02-07', 'wanita', 'islam', 'belum kawin', 'karyawan', 'kediri jawa timur'),
(906092, '0', 'Vicky Firmansyah', '-', '1995-01-25', 'pria', 'islam', 'kawin', 'tni', '-'),
(906093, '0', 'Candra Dwi Prayogi', '-', '1978-08-01', 'pria', 'islam', 'kawin', 'karyawan', '-'),
(906095, '0', 'Sabilla Jasmine', '-', '2015-01-11', 'wanita', 'islam', 'kawin', 'pengusaha', '-'),
(907560, '0', 'Maha Julian', 'Palembang', '2018-05-08', 'pria', 'katholik', 'belum kawin', 'lainnya', 'Palembang'),
(908076, '0', 'kusrina', '-', '1983-09-08', 'wanita', 'islam', 'kawin', 'pns', '-'),
(908098, '0', 'Siti Rahmah', '-', '1989-07-23', 'wanita', 'islam', 'kawin', 'pns', '-'),
(908765, '0', 'Sondang Whita Kristina Tambunan ', '-', '1983-10-03', 'wanita', 'kristen', 'kawin', 'pns', '-'),
(912210, '0', 'Roganda Simanjuntak', '-', '1979-03-27', 'pria', 'kristen', 'kawin', 'pns', 'jayapura'),
(932090, '0', 'Segarnis Dhihasti Bidari', '-', '1993-01-13', 'wanita', 'islam', 'kawin', 'pns', '-'),
(939909, '0', 'Martiningsih', '-', '1975-10-28', 'wanita', 'islam', 'kawin', 'pns', '-'),
(980641, '0', 'rokxan sinatra', '-', '2011-01-23', 'pria', 'katholik', 'belum kawin', 'pelajar', 'sukarami palembang'),
(987654, '0', 'Rizka Pratiwi', '-', '1987-02-23', 'wanita', 'islam', 'kawin', 'pns', '-'),
(987781, '0', 'Putri Rhadiyah', '-', '1991-09-01', 'wanita', 'islam', 'belum kawin', 'pns', '-'),
(999999, '0', 'Panembahan senopati', 'Parangtritis', '1999-09-09', 'pria', 'islam', 'belum kawin', 'mahasiswa', 'Bantul, Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datarumahsakit`
--

CREATE TABLE `datarumahsakit` (
  `id` int(12) NOT NULL,
  `bulan` date NOT NULL,
  `tidur` varchar(4) NOT NULL,
  `periode` varchar(2) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `masuk` varchar(12) NOT NULL,
  `keluar` varchar(12) NOT NULL,
  `mati` varchar(12) NOT NULL,
  `matikurang` varchar(12) NOT NULL,
  `matilebih` varchar(12) NOT NULL,
  `jlhkeluar` varchar(12) NOT NULL,
  `lama` varchar(12) NOT NULL,
  `masukkeluar` varchar(12) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `bor` varchar(8) NOT NULL,
  `avlos` varchar(8) NOT NULL,
  `toi` varchar(8) NOT NULL,
  `bto` varchar(8) NOT NULL,
  `ndr` varchar(8) NOT NULL,
  `gdr` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datarumahsakit`
--

INSERT INTO `datarumahsakit` (`id`, `bulan`, `tidur`, `periode`, `petugas`, `masuk`, `keluar`, `mati`, `matikurang`, `matilebih`, `jlhkeluar`, `lama`, `masukkeluar`, `hp`, `bor`, `avlos`, `toi`, `bto`, `ndr`, `gdr`) VALUES
(1, '2022-01-01', '109', '31', 'admin', '601', '615', '8', '6', '2', '623', '2537', '0', '1658', '49.07', '4.07', '2.76', '5.72', '3.21', '12.84'),
(2, '2022-02-01', '109', '28', 'admin', '445', '453', '5', '1', '4', '458', '1727', '0', '1141', '37.39', '3.81', '4.22', '4.16', '8.83', '1000.00'),
(3, '2022-03-01', '109', '31', 'admin', '481', '447', '5', '2', '3', '452', '1509', '0', '1035', '30.63', '3.34', '5.19', '4.15', '6.64', '11.06'),
(4, '2022-04-01', '109', '30', 'admin', '493', '474', '16', '8', '8', '490', '1793', '0', '1278', '39.08', '3.66', '4.07', '4.50', '16.33', '32.65'),
(5, '2022-05-01', '109', '31', 'admin', '586', '574', '8', '7', '1', '582', '2168', '0', '1508', '44.63', '3.73', '3.21', '5.34', '1.72', '13.75'),
(6, '2022-06-01', '109', '30', 'admin', '659', '626', '8', '7', '1', '634', '2588', '0', '1833', '56.06', '4.08', '2.27', '5.82', '1.58', '12.62'),
(7, '2022-07-01', '109', '31', 'admin', '562', '566', '7', '5', '2', '573', '2241', '0', '1589', '47.03', '3.91', '3.12', '5.26', '3.49', '12.22'),
(8, '2022-08-01', '109', '31', 'admin', '698', '702', '7', '4', '3', '709', '2779', '0', '1840', '54.45', '3.92', '2.17', '6.50', '4.23', '9.87'),
(9, '2022-09-01', '109', '30', 'admin', '617', '592', '10', '4', '6', '602', '2228', '0', '1596', '48.81', '3.70', '2.78', '5.52', '9.97', '16.61'),
(10, '2022-10-01', '109', '31', 'admin', '619', '638', '11', '7', '4', '649', '2391', '0', '1630', '48.24', '3.68', '2.69', '5.95', '6.16', '16.95'),
(11, '2022-11-01', '109', '30', 'admin', '630', '606', '12', '7', '5', '618', '1995', '0', '1643', '50.24', '3.23', '2.63', '5.67', '8.09', '19.42'),
(12, '2022-12-01', '109', '31', 'admin', '596', '591', '11', '6', '5', '602', '2245', '0', '1578', '46.70', '3.73', '2.99', '5.52', '8.31', '18.27'),
(13, '2023-01-01', '109', '31', 'admin', '710', '702', '11', '9', '2', '713', '2465', '28', '1616', '47.82', '3.46', '2.47', '6.54', '2.81', '15.43'),
(14, '2023-02-01', '109', '28', 'admin', '621', '625', '8', '4', '4', '633', '2205', '11', '1438', '47.12', '3.48', '2.55', '5.81', '6.32', '12.64'),
(15, '2023-03-01', '109', '31', 'admin', '705', '676', '12', '5', '7', '688', '2383', '13', '1710', '50.61', '3.46', '2.43', '6.31', '10.17', '17.44'),
(16, '2023-04-01', '109', '30', 'admin', '659', '668', '8', '8', '0', '676', '2461', '17', '1699', '51.96', '3.64', '2.32', '6.20', '0', '11.83'),
(17, '2023-05-01', '109', '31', 'admin', '708', '717', '9', '5', '4', '726', '2694', '15', '1835', '54.31', '3.71', '2.13', '6.66', '5.51', '12.40'),
(18, '2023-06-01', '109', '30', 'admin', '694', '675', '14', '6', '8', '689', '2543', '9', '1783', '54.53', '3.69', '2.16', '6.32', '11.61', '20.32'),
(19, '2023-07-01', '109', '31', 'admin', '739', '721', '6', '3', '3', '727', '2621', '11', '1856', '54.93', '3.61', '2.09', '6.67', '4.13', '8.25'),
(21, '2023-08-01', '109', '31', 'admin', '825', '864', '12', '8', '4', '876', '3422', '7', '2270', '67.18', '3.91', '1.27', '8.04', '4.57', '13.70'),
(22, '2023-09-01', '109', '30', 'admin', '1094', '1074', '11', '7', '4', '1085', '4288', '29', '2909', '88.96', '3.95', '0.33', '9.95', '3.69', '10.14'),
(23, '2023-10-01', '109', '31', 'admin', '1043', '1075', '10', '4', '6', '1085', '3891', '36', '2570', '76.06', '3.59', '0.75', '9.95', '5.53', '9.22'),
(24, '2023-11-01', '109', '30', 'admin', '860', '827', '14', '5', '9', '841', '3121', '21', '2152', '65.81', '3.71', '1.33', '7.72', '10.70', '16.65'),
(29, '2023-12-01', '109', '31', 'admin', '716', '761', '9', '6', '3', '770', '2983', '4', '1940', '57.41', '3.87', '1.87', '7.06', '3.90', '11.69');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator`
--

CREATE TABLE `indikator` (
  `id` int(12) NOT NULL,
  `koderuangan` varchar(12) NOT NULL,
  `namaruangan` varchar(100) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `tidur` varchar(4) NOT NULL,
  `bulan` date NOT NULL,
  `masuk` varchar(12) NOT NULL,
  `keluar` varchar(12) NOT NULL,
  `mati` varchar(12) NOT NULL,
  `matikurang` varchar(12) NOT NULL,
  `matilebih` varchar(12) NOT NULL,
  `jlhkeluar` varchar(12) NOT NULL,
  `lama` varchar(12) NOT NULL,
  `masukkeluar` varchar(12) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `periode` varchar(2) NOT NULL,
  `bor` varchar(8) NOT NULL,
  `avlos` varchar(8) NOT NULL,
  `toi` varchar(8) NOT NULL,
  `bto` varchar(8) NOT NULL,
  `ndr` varchar(8) NOT NULL,
  `gdr` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `indikator`
--

INSERT INTO `indikator` (`id`, `koderuangan`, `namaruangan`, `namakelas`, `tidur`, `bulan`, `masuk`, `keluar`, `mati`, `matikurang`, `matilebih`, `jlhkeluar`, `lama`, `masukkeluar`, `hp`, `petugas`, `periode`, `bor`, `avlos`, `toi`, `bto`, `ndr`, `gdr`) VALUES
(15, 'CENDRAWASIH', 'Cendrawasih', 'VIP', '7', '2022-01-01', '3', '3', '0', '0', '0', '3', '8', '0', '6', ' oppa ', '31', '2.76', '2.67', '70.33', '0.43', '0.00', '0.00'),
(16, 'KASWARI', 'Kaswari', 'Kelas I', '6', '2022-01-01', '65', '56', '1', '1', '0', '59', '212', '0', '166', ' oppa ', '31', '89.25', '3.59', '0.34', '9.50', '0.00', '16.95'),
(17, 'MERPATI', 'Merpati (Interna II)', 'Kelas II', '5', '2022-01-01', '8', '9', '0', '0', '0', '9', '40', '0', '23', ' oppa ', '31', '14.84', '4.44', '14.67', '1.80', '0.00', '0.00'),
(18, 'BANGAU', 'Bangau (Syaraf II)', 'Kelas II', '3', '2022-01-01', '2', '2', '0', '0', '0', '2', '4', '1', '3', ' oppa ', '31', '3.23', '2.00', '45.00', '0.67', '0.00', '0.00'),
(19, 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', '4', '2022-01-01', '9', '8', '2', '2', '0', '10', '31', '1', '18', ' oppa ', '31', '14.52', '3.10', '10.60', '2.50', '0.00', '200.00'),
(20, 'MERPATI', 'Merpati (Interna III)', 'Kelas III', '23', '2022-01-01', '62', '56', '1', '1', '0', '59', '212', '0', '166', ' oppa ', '31', '23.28', '3.59', '9.27', '2.48', '0.00', '16.95'),
(21, 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', '3', '2022-01-01', '1', '1', '0', '0', '0', '1', '4', '0', '3', ' oppa ', '31', '3.23', '4.00', '90.00', '0.33', '0.00', '0.00'),
(22, 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '7', '2022-01-01', '24', '39', '1', '1', '0', '41', '141', '0', '92', ' oppa ', '31', '42.40', '3.44', '3.05', '5.71', '0.00', '24.39'),
(23, 'MANYAR', 'Manyar (Anak II)', 'Kelas II', '3', '2022-01-01', '1', '2', '0', '0', '0', '2', '8', '0', '3', ' oppa ', '31', '3.23', '4.00', '45.00', '0.67', '0.00', '0.00'),
(24, 'MANYAR', 'Manyar (Anak III)', 'Kelas III', '8', '2022-01-01', '22', '21', '0', '0', '0', '21', '78', '0', '56', ' oppa ', '31', '22.58', '3.71', '9.14', '2.63', '0.00', '0.00'),
(28, 'MANYAR', 'Manyar (Anak II)', 'Kelas II', '3', '2024-01-01', '10', '9', '0', '0', '0', '9', '27', '0', '21', 'admin', '31', '22.58', '3.00', '8.00', '3.00', '0.00', '0.00'),
(29, 'MANYAR', 'Manyar (Anak III)', 'Kelas III', '8', '2024-01-01', '80', '90', '0', '0', '0', '92', '340', '1', '219', 'admin', '31', '88.31', '3.70', '0.32', '11.25', '0.00', '0.00'),
(32, 'KASWARI', 'Kaswari', 'Kelas I', '6', '2023-01-01', '12', '13', '1', '1', '0', '15', '48', '0', '29', 'admin', '31', '15.59', '3.20', '10.47', '2.50', '0.00', '66.67'),
(33, 'BANGAU', 'BANGAU(BEDAH II)', 'Kelas II', '3', '2024-01-01', '10', '8', '0', '0', '0', '8', '21', '1', '16', ' oppa ', '31', '17.20', '2.63', '9.63', '2.67', '0.00', '0.00'),
(34, 'BANGAU', 'BANGAU(BEDAH III)', 'Kelas III', '7', '2024-01-01', '136', '133', '0', '0', '0', '137', '405', '5', '288', ' oppa ', '31', '132.72', '2.96', '-0.52', '19.57', '0.00', '0.00'),
(35, 'BANGAU', 'BANGAU(SYARAF II)', 'Kelas II', '3', '2024-01-01', '4', '4', '0', '0', '0', '4', '11', '0', '7', ' oppa ', '31', '7.53', '2.75', '21.50', '1.33', '0.00', '0.00'),
(36, 'BANGAU', 'BANGAU (SYARAF III)', 'Kelas III', '4', '2024-01-01', '39', '33', '6', '2', '4', '39', '134', '0', '96', ' oppa ', '31', '77.42', '3.44', '0.72', '9.75', '102.56', '153.85'),
(37, 'MERPATI', 'MERPATI(INTERNA II)', 'Kelas II', '5', '2024-01-01', '13', '7', '1', '1', '0', '9', '33', '0', '32', ' oppa ', '31', '20.65', '3.67', '13.67', '1.80', '0.00', '111.11'),
(38, 'MERPATI', 'MERPATI(INTERNA III)', 'Kelas III', '23', '2024-01-01', '130', '131', '1', '0', '1', '135', '504', '5', '368', ' oppa ', '31', '51.61', '3.73', '2.56', '5.87', '7.41', '7.41'),
(39, 'KENARI', 'KENARI(BERSALIN I)', 'Kelas I', '2', '2024-01-01', '1', '1', '0', '0', '0', '1', '3', '0', '2', ' oppa ', '31', '3.23', '3.00', '60.00', '0.50', '0.00', '0.00'),
(40, 'KENARI', 'KENARI(BERSALIN II)', 'Kelas II', '2', '2024-01-01', '9', '9', '0', '0', '0', '9', '25', '0', '20', ' oppa ', '31', '32.26', '2.78', '4.67', '4.50', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikatorkelas`
--

CREATE TABLE `indikatorkelas` (
  `id` int(12) NOT NULL,
  `kodekelas` varchar(12) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `tidur` varchar(4) NOT NULL,
  `bulan` date NOT NULL,
  `periode` varchar(2) NOT NULL,
  `masuk` varchar(12) NOT NULL,
  `keluar` varchar(12) NOT NULL,
  `mati` varchar(12) NOT NULL,
  `matikurang` varchar(12) NOT NULL,
  `matilebih` varchar(12) NOT NULL,
  `jlhkeluar` varchar(12) NOT NULL,
  `lama` varchar(12) NOT NULL,
  `masukkeluar` varchar(12) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `bor` varchar(8) NOT NULL,
  `avlos` varchar(8) NOT NULL,
  `toi` varchar(8) NOT NULL,
  `bto` varchar(8) NOT NULL,
  `ndr` varchar(8) NOT NULL,
  `gdr` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `indikatorkelas`
--

INSERT INTO `indikatorkelas` (`id`, `kodekelas`, `namakelas`, `tidur`, `bulan`, `periode`, `masuk`, `keluar`, `mati`, `matikurang`, `matilebih`, `jlhkeluar`, `lama`, `masukkeluar`, `hp`, `petugas`, `bor`, `avlos`, `toi`, `bto`, `ndr`, `gdr`) VALUES
(1, 'V01', 'VIP', '7', '2023-01-01', '31', '7', '7', '0', '0', '0', '7', '20', '0', '14', ' operator ', '6.45', '2.86', '29.00', '1.00', '0.00', '0.00'),
(2, 'KL01', 'Kelas I', '8', '2023-01-01', '31', '15', '16', '1', '1', '0', '18', '57', '0', '35', 'admin', '14.11', '3.17', '11.83', '2.13', '0.00', '55.56'),
(3, 'KL02', 'Kelas II', '13', '2023-01-01', '31', '9', '10', '0', '0', '0', '10', '35', '0', '32', 'admin', '7.94', '3.50', '37.10', '0.77', '0.00', '0.00'),
(4, 'KL03', 'Kelas III', '50', '2023-01-01', '31', '394', '399', '7', '5', '2', '408', '1264', '0', '854', ' admin ', '55.10', '3.10', '1.71', '8.12', '4.90', '17.16'),
(5, 'ISO', 'ISOLASI', '10', '2023-01-01', '31', '11', '7', '0', '0', '0', '9', '40', '0', '36', ' admin ', '11.61', '4.44', '30.44', '0.70', '0.00', '0.00'),
(6, 'V01', 'VIP', '7', '2022-01-01', '31', '3', '3', '0', '0', '0', '3', '8', '0', '6', ' admin ', '2.76', '2.67', '70.33', '0.43', '0.00', '0.00'),
(8, 'V01', 'VIP', '7', '2024-01-01', '31', '19', '21', '1', '1', '0', '22', '78', '0', '54', 'oppa', '24.88', '3.55', '7.41', '3.14', '0.00', '45.45'),
(9, 'KL01', 'Kelas I', '8', '2024-01-01', '31', '1', '1', '0', '0', '0', '1', '3', '0', '2', 'oppa', '0.81', '3.00', '246.00', '0.13', '0.00', '0.00'),
(10, 'KL03', 'Kelas III', '50', '2022-01-01', '31', '117', '124', '4', '4', '0', '131', '462', '1', '332', 'oppa', '21.42', '3.53', '9.30', '2.62', '0.00', '30.53'),
(11, 'KL02', 'Kelas II', '13', '2024-01-01', '31', '46', '37', '1', '1', '0', '39', '117', '1', '96', 'oppa', '23.82', '3.00', '7.87', '3.00', '0.00', '25.64');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(12) NOT NULL,
  `kodekelas` varchar(12) NOT NULL,
  `namakelas` varchar(20) NOT NULL,
  `tidur` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kodekelas`, `namakelas`, `tidur`) VALUES
(1, 'V01', 'VIP', '7'),
(2, 'KL01', 'Kelas I', '8'),
(3, 'KL02', 'Kelas II', '13'),
(4, 'KL03', 'Kelas III', '50'),
(5, 'N01', 'NON Kelas', '21'),
(8, 'ISO', 'ISOLASI', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporantahunan`
--

CREATE TABLE `laporantahunan` (
  `id` int(12) NOT NULL,
  `tahun` varchar(6) NOT NULL,
  `masuk` varchar(12) NOT NULL,
  `keluar` varchar(12) NOT NULL,
  `mati` varchar(12) NOT NULL,
  `matikurang` varchar(12) NOT NULL,
  `matilebih` varchar(12) NOT NULL,
  `jlkeluar` varchar(12) NOT NULL,
  `lama` varchar(12) NOT NULL,
  `masukkeluar` varchar(12) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `bor` varchar(8) NOT NULL,
  `avlos` varchar(8) NOT NULL,
  `toi` varchar(8) NOT NULL,
  `bto` varchar(8) NOT NULL,
  `ndr` varchar(8) NOT NULL,
  `gdr` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasienkeluar`
--

CREATE TABLE `pasienkeluar` (
  `id_pasienkeluar` int(12) NOT NULL,
  `nomorm` int(12) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `tgl_masuk` varchar(12) NOT NULL,
  `namapasien` varchar(225) NOT NULL,
  `koderuangan` varchar(12) NOT NULL,
  `namaruangan` varchar(100) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `carabayar` varchar(20) NOT NULL,
  `tgl_keluar` varchar(12) NOT NULL,
  `carakeluar` varchar(12) NOT NULL,
  `keadaankeluar` varchar(100) NOT NULL,
  `petugas` varchar(150) NOT NULL,
  `lamarawat` varchar(12) NOT NULL,
  `masukkeluar` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasienkeluar`
--

INSERT INTO `pasienkeluar` (`id_pasienkeluar`, `nomorm`, `reg`, `tgl_masuk`, `namapasien`, `koderuangan`, `namaruangan`, `namakelas`, `carabayar`, `tgl_keluar`, `carakeluar`, `keadaankeluar`, `petugas`, `lamarawat`, `masukkeluar`) VALUES
(6, 181453, '0', '2024-01-26', 'satini', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-01', 'hidup', 'sembuh', 'admin', '6', ''),
(7, 181601, '0', '2024-01-30', 'natun', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-01', 'hidup', 'sembuh', 'admin', '2', ''),
(8, 181471, '0', '2024-01-27', 'hilal', 'MPT', 'Merpati (Interna II)', 'Kelas II', 'BPJS', '2024-02-01', 'hidup', 'sembuh', 'admin', '5', ''),
(9, 181607, '0', '2024-01-31', 'rositi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-02', 'hidup', 'sembuh', 'admin', '2', ''),
(10, 181284, '0', '2024-01-31', 'bunawi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-02', 'hidup', 'sembuh', 'admin', '2', ''),
(11, 181572, '0', '2024-01-30', 'andiyanto', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-02', 'hidup', 'sembuh', 'admin', '3', ''),
(14, 181531, '0', '2024-01-29', 'SAHAMI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-03', 'hidup', 'kontrol rawat jalan', 'admin', '5', '0'),
(15, 181459, '0', '2024-02-01', 'kusnul', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-03', 'hidup', 'sembuh', 'admin', '2', '0'),
(16, 176516, '0', '2024-01-31', 'JUMANI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-03', 'hidup', 'sembuh', 'admin', '3', '0'),
(17, 181686, '0', '2024-02-02', 'ita farinayah', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-03', 'hidup', 'pulang paksa', 'admin', '1', '0'),
(18, 165130, '0', '2024-02-01', 'ahmad', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-04', 'hidup', 'sembuh', 'admin', '3', '0'),
(20, 148071, '0', '2024-01-30', 'sunarwi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-05', 'hidup', 'sembuh', 'admin', '6', '0'),
(21, 181692, '0', '2024-02-03', 'anang', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-05', 'hidup', 'sembuh', 'admin', '2', '0'),
(22, 181704, '0', '2024-02-03', 'safi\'i', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-05', 'hidup', 'sembuh', 'admin', '2', '0'),
(23, 174874, '0', '2024-01-31', 'rudi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-06', 'hidup', 'sembuh', 'user bangsali', '6', '0'),
(24, 179517, '0', '2024-01-31', 'salim', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-06', 'hidup', 'sembuh', 'user bangsali', '6', '0'),
(25, 181696, '0', '2024-02-03', 'munawerah', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-06', 'hidup', 'kontrol rawat jalan', 'user bangsali', '3', '0'),
(26, 990066, '0', '2024-02-03', 'dulgeni', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-06', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(27, 171649, '0', '2024-02-03', 'rofiah', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-06', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(28, 156088, '0', '2024-02-04', 'SITI CHOTIJAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-06', 'hidup', 'kontrol rawat jalan', 'user bangsali', '2', '0'),
(29, 75936, '0', '2024-02-04', 'MURDIANINGSIH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-07', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(32, 130747, '0', '2024-02-01', 'sumaiya', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-08', 'hidup', 'sembuh', 'user bangsali', '7', '0'),
(33, 180349, '0', '2024-02-05', 'm,ali', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-08', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(34, 139337, '0', '2024-02-08', 'sumiyasih', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-08', 'hidup', 'rujuk', 'user bangsali', '1', '1'),
(35, 36166, '0', '2024-02-04', 'M.TAKI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-09', 'hidup', 'sembuh', 'user bangsali', '5', '0'),
(36, 181774, '0', '2024-02-06', 'Firiyani', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-09', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(37, 181768, '0', '2024-02-06', 'mistina', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-09', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(38, 181814, '0', '2024-02-07', 'sumiyati', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-09', 'hidup', 'sembuh', 'user bangsali', '2', '0'),
(39, 181831, '0', '2024-02-08', 'eko jumadianto', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-09', 'hidup', 'sembuh', 'user bangsali', '1', '0'),
(40, 181869, '0', '2024-02-09', 'ima', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-09', 'hidup', 'rujuk', 'user bangsali', '1', '1'),
(41, 181733, '0', '2024-02-05', 'm.anwar', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-10', 'hidup', 'sembuh', 'user bangsali', '5', '0'),
(42, 136834, '0', '2024-02-06', 'saleh hasan', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-10', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(43, 181776, '0', '2024-02-06', 'lasmi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-10', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(44, 181780, '0', '2024-02-06', 'miswati', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-10', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(45, 180467, '0', '2024-02-06', 'M.sutrisno', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-10', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(46, 181818, '0', '2024-02-07', 'sukartini', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-10', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(47, 160338, '0', '2024-02-07', 'Fauzi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-10', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(48, 181848, '0', '2024-02-09', 'M.syamsuri', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-11', 'hidup', 'sembuh', 'user bangsali', '2', '0'),
(49, 165900, '0', '2024-02-09', 'fikri', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-12', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(50, 181871, '0', '2024-02-09', 'dewi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-12', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(51, 181874, '0', '2024-02-09', 'hadi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-12', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(52, 181875, '0', '2024-02-09', 'M.ivandi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-12', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(53, 181894, '0', '2024-02-10', 'dendra', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-12', 'hidup', 'sembuh', 'user bangsali', '2', '0'),
(54, 181418, '0', '2024-02-09', 'sarina', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-13', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(55, 181876, '0', '2024-02-09', 'tohari', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-13', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(56, 181897, '0', '2024-02-10', 'kholid', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-13', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(57, 181876, '0', '2024-02-10', 'munami', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-13', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(58, 181864, '0', '2024-02-09', 'buyati', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-14', 'hidup', 'pulang_paksa', 'user bangsali', '5', '0'),
(59, 181893, '0', '2024-02-10', 'misnaya', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-14', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(76, 181859, '0', '2024-02-09', 'wakini', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-15', 'hidup', 'sembuh', 'user bangsali', '6', '0'),
(77, 181858, '0', '2024-02-09', 'bebun', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-15', 'hidup', 'sembuh', 'user bangsali', '6', '0'),
(78, 169216, '0', '2024-02-12', 'martab', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-15', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(79, 181951, '0', '2024-02-12', 'fatimah', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-15', 'hidup', 'rujuk', 'user bangsali', '3', '0'),
(80, 169677, '0', '2024-02-11', 'isti\'a', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-15', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(83, 123450, '0', '2024-01-14', 'wayan', 'KSWI', 'Kaswari', 'Kelas I', 'umum', '2024-01-14', 'hidup', 'sembuh', 'user bangsali', '1', '1'),
(85, 645547, '0', '2024-01-14', 'arie', 'KSWI', 'Kaswari', 'Kelas I', 'umum', '2024-01-18', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(86, 879654, '0', '2024-01-14', 'mencle', 'KSWI', 'Kaswari', 'Kelas I', 'BPJS', '2024-01-18', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(88, 465760, '0', '2024-01-14', 'ardi', 'KSWI', 'Kaswari', 'Kelas I', 'umum', '2024-01-18', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(89, 181944, '0', '2024-02-12', 'dina', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-16', 'hidup', 'sembuh', 'user bangsali', '4', '0'),
(90, 181980, '0', '2024-02-13', 'suryati', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-16', 'hidup', 'sembuh', 'user bangsali', '3', '0'),
(91, 182049, '0', '2024-02-16', 'INTAN', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-16', 'hidup', 'rujuk', 'user bangsali', '1', '1'),
(92, 181948, '0', '2024-02-12', 'isnaini', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-17', 'hidup', 'sembuh', 'admin', '5', '0'),
(93, 170071, '0', '2024-02-13', 'sri handayani', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-17', 'hidup', 'sembuh', 'admin', '4', '0'),
(94, 171782, '0', '2024-02-14', 'halima', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-17', 'hidup', 'sembuh', 'admin', '3', '0'),
(96, 182044, '0', '2024-02-16', 'NURUL AINI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-17', 'hidup', 'sembuh', 'admin', '1', '0'),
(97, 139644, '0', '2024-02-14', 'SUYADI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-17', 'hidup', 'sembuh', 'admin', '3', '0'),
(99, 181991, '0', '2024-02-13', 'sutikno', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-18', 'hidup', 'rujuk', 'admin', '5', '0'),
(100, 162747, '0', '2024-02-14', 'siti hafifin', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-18', 'hidup', 'sembuh', 'admin', '4', '0'),
(101, 182003, '0', '2024-02-14', 'SUDAK', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-18', 'hidup', 'sembuh', 'admin', '4', '0'),
(102, 656575, '0', '2024-01-18', 'susan', 'NON', 'ICU', 'NON Kelas', 'umum', '2024-01-24', 'meninggal', 'meninggal_lebih_48_jam', 'operator', '6', '0'),
(103, 656575, '0', '2024-01-18', 'susan', 'NON', 'ICU', 'NON Kelas', 'umum', '2024-01-24', 'meninggal', 'meninggal_lebih_48_jam', 'operator', '6', '0'),
(104, 656860, '0', '2024-01-18', 'wahyu', 'NON', 'ICU', 'NON Kelas', 'perusahaan', '2024-01-24', 'meninggal', 'meninggal_lebih_48_jam', 'user bangsali', '6', '0'),
(105, 425676, '0', '2024-01-14', 'made santa', 'CDWH', 'Cendrawasih', 'VIP', 'perusahaan', '2024-01-18', 'hidup', 'sembuh', 'operator', '4', '0'),
(106, 675465, '0', '2024-01-14', 'susanto', 'CDWH', 'Cendrawasih', 'VIP', 'asuransi', '2024-01-18', 'hidup', 'sembuh', 'operator', '4', '0'),
(107, 467586, '0', '2024-01-14', 'by sinta', 'NON', 'PICU', 'NON Kelas', 'umum', '2024-01-18', 'hidup', 'kontrol', 'admin', '4', '0'),
(108, 154646, '0', '2024-01-14', 'dedek', 'NON', 'PICU', 'NON Kelas', 'umum', '2024-01-18', 'hidup', 'rujuk', 'admin', '4', '0'),
(109, 152344, '0', '2024-02-20', 'TUPAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', '2024-02-22', 'hidup', 'sembuh', 'user bangsali', '2', '0'),
(114, 345670, 'RI000120240126', '2024-01-27', 'beni', 'CDWH', 'Cendrawasih', 'VIP', 'asuransi', '2024-01-31', 'hidup', 'sembuh', 'bang sali', '4', '0'),
(115, 906049, '0', '2024-05-01', 'Rahma Sarita', 'MANYAR', 'Manyar (Anak III)', 'Kelas III', 'BPJS_Kesehatan', '2024-05-02', 'hidup', 'kontrol', 'Evi Tri', '1', '0'),
(116, 198892, '0', '2024-05-02', 'Sari Dewi', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS_Kesehatan', '2024-05-02', 'hidup', 'kontrol', 'Ana linanta udiyanti', '1', '1'),
(117, 212210, '0', '2024-05-02', 'Senny Rondonuwu', 'INTENSIVE', 'ICU', 'NON Kelas', 'BPJS_Kesehatan', '2024-05-02', 'hidup', 'rujuk', 'Nur Farida', '1', '1'),
(118, 222222, '0', '2024-05-02', 'Hartini', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'umum', '2024-05-07', 'hidup', 'kontrol', 'Lucya Dewi Agustin', '5', '0'),
(119, 100322, '0', '2024-05-04', 'Farhati', 'CENDRAWASIH', 'Cendrawasih', 'VIP', 'umum', '2024-05-06', 'hidup', 'kontrol', 'admin', '2', '0'),
(120, 939909, '0', '2024-05-22', 'Martiningsih', 'KASWARI', 'Kaswari', 'Kelas I', 'umum', '2024-05-22', 'hidup', 'rujuk', 'Salim', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasienmasuk`
--

CREATE TABLE `pasienmasuk` (
  `id` int(12) NOT NULL,
  `nomorm` varchar(12) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `namapasien` varchar(225) NOT NULL,
  `koderuangan` varchar(12) NOT NULL,
  `namaruangan` varchar(100) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `carabayar` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `petugas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasienmasuk`
--

INSERT INTO `pasienmasuk` (`id`, `nomorm`, `reg`, `tgl_masuk`, `namapasien`, `koderuangan`, `namaruangan`, `namakelas`, `carabayar`, `status`, `petugas`) VALUES
(1, '123456', 'RI000120240127', '2024-01-28', 'sutik', 'BGU', 'Bangau (Syaraf II)', 'Kelas II', 'BPJS', 'baru', 'admin'),
(2, '233145', 'RI000120240126', '2024-01-28', 'yang', 'BGU', 'Bangau (Syaraf II)', 'Kelas II', 'BPJS', 'baru', 'admin'),
(3, '879051', 'RI000220240127', '2024-02-27', 'bimbim', 'BGU', 'Bangau (Syaraf II)', 'Kelas II', 'BPJS', 'Pindahan', 'admin'),
(4, '345670', 'RI000120240126', '2024-01-27', 'beni', 'CDWH', 'Cendrawasih', 'VIP', 'asuransi', 'Pindahan', 'user bangsali'),
(5, '345621', 'RI000320240127', '2024-01-31', 'cek mala', 'KASWARI', 'Kaswari', 'Kelas I', 'BPJS', 'Pindahan', 'Pengawas'),
(6, '056798', 'RI000326012024', '2024-01-26', 'sidik', 'NON', 'ICU', 'NON Kelas', 'asuransi', 'Pindahan', 'admin'),
(7, '181459', '0', '2024-02-01', 'kusnul', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(8, '130747', '0', '2024-02-01', 'sumaiya', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(9, '165130', '0', '2024-02-01', 'ahmad', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(11, '181601', '0', '2024-01-30', 'natun', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(12, '181453', '0', '2024-01-26', 'satini', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(13, '181659', '0', '2024-02-01', 'hasyim', 'MPT', 'Merpati (Interna II)', 'Kelas II', 'BPJS', 'baru', 'admin'),
(14, '181471', '0', '2024-01-27', 'hilal', 'MPT', 'Merpati (Interna II)', 'Kelas II', 'BPJS', 'baru', 'admin'),
(16, '181686', '0', '2024-02-02', 'ita farinayah', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(17, '181572', '0', '2024-01-30', 'andiyanto', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(18, '181607', '0', '2024-01-31', 'rositi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(19, '181284', '0', '2024-01-31', 'bunawi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(20, '181692', '0', '2024-02-03', 'anang', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(21, '181696', '0', '2024-02-03', 'munawerah', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(22, '181704', '0', '2024-02-03', 'safi\'i', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(23, '171649', '0', '2024-02-03', 'rofiah', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(24, '990066', '0', '2024-02-03', 'dulgeni', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(25, '181531', '0', '2024-01-29', 'SAHAMI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(26, '176516', '0', '2024-01-31', 'JUMANI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(27, '156088', '0', '2024-02-04', 'SITI CHOTIJAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(28, '75936', '0', '2024-02-04', 'MURDIANINGSIH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(29, '36166', '0', '2024-02-04', 'M.TAKI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(31, '181733', '0', '2024-02-05', 'm.anwar', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(32, '180349', '0', '2024-02-05', 'm,ali', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(33, '148071', '0', '2024-01-30', 'sunarwi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(34, '181768', '0', '2024-02-06', 'mistina', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(35, '180467', '0', '2024-02-06', 'M.sutrisno', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(36, '181774', '0', '2024-02-06', 'Firiyani', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(37, '181780', '0', '2024-02-06', 'miswati', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(38, '181776', '0', '2024-02-06', 'lasmi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(39, '174874', '0', '2024-01-31', 'rudi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(40, '179517', '0', '2024-01-31', 'salim', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(41, '181814', '0', '2024-02-07', 'sumiyati', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(42, '181818', '0', '2024-02-07', 'sukartini', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(43, '160338', '0', '2024-02-07', 'Fauzi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(44, '136834', '0', '2024-02-06', 'saleh hasan', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(45, '181831', '0', '2024-02-08', 'eko jumadianto', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(46, '139337', '0', '2024-02-08', 'sumiyasih', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(47, '181858', '0', '2024-02-09', 'bebun', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(48, '165900', '0', '2024-02-09', 'fikri', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(49, '181871', '0', '2024-02-09', 'dewi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(50, '181848', '0', '2024-02-09', 'M.syamsuri', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(51, '181875', '0', '2024-02-09', 'M.ivandi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(52, '181874', '0', '2024-02-09', 'hadi', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(53, '181876', '0', '2024-02-09', 'tohari', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(54, '181418', '0', '2024-02-09', 'sarina', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(55, '181864', '0', '2024-02-09', 'buyati', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(56, '181859', '0', '2024-02-09', 'wakini', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(57, '181869', '0', '2024-02-09', 'ima', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(58, '181876', '0', '2024-02-10', 'munami', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(59, '181893', '0', '2024-02-10', 'misnaya', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(60, '181894', '0', '2024-02-10', 'dendra', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(61, '181897', '0', '2024-02-10', 'kholid', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(62, '169677', '0', '2024-02-11', 'isti\'a', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(63, '181944', '0', '2024-02-12', 'dina', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(64, '181948', '0', '2024-02-12', 'isnaini', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(65, '169216', '0', '2024-02-12', 'martab', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(66, '181951', '0', '2024-02-12', 'fatimah', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(67, '181980', '0', '2024-02-13', 'suryati', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(68, '170071', '0', '2024-02-13', 'sri handayani', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(69, '181991', '0', '2024-02-13', 'sutikno', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(70, '171782', '0', '2024-02-14', 'halima', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(71, '182003', '0', '2024-02-14', 'SUDAK', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(73, '162747', '0', '2024-02-14', 'siti hafifin', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(75, '804350', '0', '2024-02-01', 'gege', 'KASWARI', 'Kaswari', 'Kelas I', 'umum', 'Pindahan', 'user bangsali'),
(76, '986899', '0', '2024-01-27', 'benci', 'BGU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(77, '124560', '0', '2024-01-27', 'caca', 'BGU', 'Bangau (Bedah III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(78, '453547', '0', '2024-01-28', 'cinta', 'KASWARI', 'Kaswari', 'Kelas I', 'BPJS', 'Pindahan', 'user bangsali'),
(79, '119684', '0', '2024-02-15', 'AZIZAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(80, '98853', '0', '2024-02-15', 'S.PUJIARTO', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(84, '139644', '0', '2024-02-14', 'SUYADI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'pindahan', 'admin'),
(86, '656860', '0', '2024-01-18', 'wahyu', 'NON', 'ICU', 'NON Kelas', 'perusahaan', '', ''),
(87, '645547', '0', '2024-01-14', 'arie', 'KSWI', 'Kaswari', 'Kelas I', 'umum', '', ''),
(88, '425676', '0', '2024-01-14', 'made santa', 'CDWH', 'Cendrawasih', 'VIP', 'perusahaan', '', 'user bangsali'),
(89, '123450', '0', '2024-01-14', 'wayan', 'KSWI', 'Kaswari', 'Kelas I', 'umum', '', 'user bangsali'),
(90, '123432', '0', '2024-01-01', 'sen sen', 'NON', 'ICU', 'NON Kelas', 'umum', '', 'user bangsali'),
(91, '154646', '0', '2024-01-14', 'dedek', 'NON', 'PICU', 'NON Kelas', 'umum', '', 'user bangsali'),
(92, '656575', '0', '2024-01-18', 'susan', 'NON', 'ICU', 'NON Kelas', 'umum', '', 'user bangsali'),
(94, '435678', '0', '2024-01-18', 'sean', 'KENARI', 'Manyar (Anak II)', 'Kelas II', 'umum', 'Pindahan', 'user bangsali'),
(95, '467586', '0', '2024-01-14', 'by sinta', 'NON', 'PICU', 'NON Kelas', 'umum', '', 'user bangsali'),
(96, '465760', '0', '2024-01-14', 'ardi', 'KSWI', 'Kaswari', 'Kelas I', 'umum', '', 'user bangsali'),
(97, '879654', '0', '2024-01-14', 'mencle', 'KSWI', 'Kaswari', 'Kelas I', 'BPJS', '', 'user bangsali'),
(98, '675465', '0', '2024-01-14', 'susanto', 'CDWH', 'Cendrawasih', 'VIP', 'asuransi', '', 'admin'),
(99, '976423', '0', '2024-02-16', 'soimah', 'MPT', 'Merpati (Interna II)', 'Kelas II', 'umum', 'baru', 'user bangsali'),
(101, '182083', '0', '2024-02-17', 'MAHTUMAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(102, '169405', '0', '2024-02-17', 'MALIYAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(103, '18211', '0', '2024-02-17', 'AHMAD ZAINI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(104, '182069', '0', '2024-02-16', 'RUKYAT', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(105, '182081', '0', '2024-02-16', 'SUMINANTO', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(106, '182046', '0', '2024-02-16', 'NAFISAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(107, '182044', '0', '2024-02-16', 'NURUL AINI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(108, '182049', '0', '2024-02-16', 'INTAN', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(109, '182106', '0', '2024-02-18', 'SATIJA', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(110, '181763', '0', '2024-02-18', 'JURI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(111, '182133', '0', '2024-02-19', 'TOTOK', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(112, '177919', '0', '2024-02-19', 'IBRAHIM', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(113, '119382', '0', '2024-02-19', 'LUTFIYAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(114, '148966', '0', '2024-02-19', 'SUKARNO', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'user bangsali'),
(115, '182110', '0', '2024-02-19', 'RIKI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'pindahan', 'user bangsali'),
(116, '152004', '0', '2024-02-20', 'TOHARI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(117, '120214', '0', '2024-02-17', 'NURSIYA', 'ISO', 'Isolasi ', 'ISOLASI', 'BPJS', 'pindahan', 'user bangsali'),
(118, '182177', '0', '2024-02-20', 'NALI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(119, '181561', '0', '2024-01-30', 'SUJI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(120, '182190', '0', '2024-02-20', 'S.HARDJO', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', ''),
(121, '152344', '0', '2024-02-20', 'TUPAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', ''),
(122, '175788', '0', '2024-02-20', 'EDI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', ''),
(123, '114995', '0', '2024-02-20', 'NUFIATUL', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', ''),
(124, '132960', '0', '2024-02-20', 'NUR FADILAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', ''),
(125, '138733', '0', '2024-02-20', 'AYU SRI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', ''),
(126, '179483', '0', '2024-02-20', 'SUTAMAI', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', ''),
(127, '156088', '0', '2024-02-04', 'SITI CHOTIJAH', 'MPT', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(128, '112440', '0', '2024-02-20', 'SUPANGGI', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'pindahan', 'admin'),
(129, '120214', '0', '2024-02-20', 'NURSIYA', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'pindahan', 'admin'),
(130, '182218', '0', '2024-02-22', 'NUR HILMI', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'admin'),
(131, '132501', '0', '2024-02-22', 'WILDATUL', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(132, '182222', '0', '2024-02-22', 'ZULHATIN', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(133, '182242', '0', '2024-02-22', 'OGIK', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(135, '92708', '0', '2024-02-23', 'ASTUTIK', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(136, '182250', '0', '2024-02-23', 'BUNASAN', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(137, '182299', '0', '2024-02-23', 'BUANA', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(138, '182302', '0', '2024-02-23', 'DWI NUR', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(139, '182306', '0', '2024-02-23', 'BUSIYA', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(140, '182310', '0', '2024-02-23', 'M.FIO', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(141, '172635', '0', '2024-02-23', 'DEWI', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(142, '182314', '0', '2024-02-23', 'SALEH', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS', 'baru', 'operator'),
(143, '712022', '0', '2024-03-01', 'Henny Yuliartini', 'CENDRAWASIH', 'Cendrawasih', 'VIP', 'BPJS', 'baru', 'bang sali'),
(144, '906080', '0', '2024-03-01', 'Apriliya Nurfatimah', 'CENDRAWASIH', 'Cendrawasih', 'VIP', 'perusahaan', 'baru', 'bang sali'),
(145, '100250', '0', '2024-03-02', 'Dwi Kartika sari', 'CENDRAWASIH', 'Cendrawasih', 'VIP', 'BPJS', 'baru', 'bang sali'),
(146, '197590', '0', '2024-03-02', 'Santun Setiawati', 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', 'BPJS', 'baru', 'bang sali'),
(147, '117819', '0', '2024-03-02', 'Fonny Veronika Runtulalo', 'KASWARI', 'Kaswari', 'Kelas I', 'BPJS', 'baru', 'bang sali'),
(148, '200911', '0', '2024-03-03', 'Retno Prihastuti', 'KASWARI', 'Kaswari', 'Kelas I', 'BPJS', 'baru', 'bang sali'),
(149, '906080', '0', '2024-03-04', 'Apriliya Nurfatimah', 'KASWARI', 'Kaswari', 'Kelas I', 'perusahaan', 'Pindahan', 'bang sali'),
(150, '197590', '0', '2024-03-03', 'Santun Setiawati', 'KASWARI', 'Kaswari', 'Kelas I', 'BPJS', 'baru', 'bang sali'),
(151, '212210', '0', '2024-03-03', 'Senny Rondonuwu', 'KENARI', 'Kenari (Bersalin I )', 'Kelas I', 'BPJS', 'baru', 'bang sali'),
(152, '907560', '0', '2024-03-01', 'Maha Julian', 'KENARI', 'Manyar (Anak II)', 'Kelas II', 'BPJS', 'baru', 'bang sali'),
(153, '456732', '0', '2024-03-02', 'Ayune elok Tenan', 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', 'asuransi', 'baru', 'bang sali'),
(154, '999999', '0', '2024-03-04', 'Panembahan senopati', 'CENDRAWASIH', 'Cendrawasih', 'VIP', 'perusahaan', 'baru', 'bang sali'),
(155, '402050', '0', '2024-03-01', 'Lembayung Senja', 'MERPATI', 'Merpati (Interna II)', 'Kelas II', 'BPJS', 'baru', 'bang sali'),
(156, '980641', '0', '2024-03-05', 'rokxan sinatra', 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', 'BPJS', 'Pindahan', 'bang sali'),
(157, '197590', '0', '2024-04-02', 'Santun Setiawati', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS_Kesehatan', 'Pindahan', 'Salim'),
(158, '906049', '0', '2024-05-01', 'Rahma Sarita', 'MANYAR', 'Manyar (Anak III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Evi Tri'),
(159, '906051', '0', '2024-05-02', 'Wildan Ilham', 'INTENSIVE', 'ICU', 'NON Kelas', 'umum', 'Pindahan', 'Evi Tri'),
(160, '906052', '0', '2024-05-01', 'Erna Sudrajad', 'MANYAR', 'Manyar (Anak III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Evi Tri'),
(161, '906053', '0', '2024-05-01', 'Hofidatul Afiyah', 'MANYAR', 'Manyar (Anak III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Evi Tri'),
(162, '906056', '0', '2024-05-01', 'Ike Anggi Fitriananda', 'MANYAR', 'Manyar (Anak III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Evi Tri'),
(163, '906047', '0', '2024-05-02', 'Ridho trifianto', 'MANYAR', 'Manyar (Anak III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Evi Tri'),
(164, '101010', '0', '2024-05-02', 'Nella Savira Liani', 'MERPATI', 'Merpati (Interna II)', 'Kelas II', 'BPJS_Kesehatan', 'Pindahan', 'Ana linanta udiyanti'),
(165, '101211', '0', '2024-05-01', 'Destiana', 'MERPATI', 'Merpati (Interna II)', 'Kelas II', 'BPJS_Kesehatan', 'baru', 'Ana linanta udiyanti'),
(166, '121080', '0', '2024-05-01', 'Haerani', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Ana linanta udiyanti'),
(167, '198892', '0', '2024-05-02', 'Sari Dewi', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Ana linanta udiyanti'),
(168, '222222', '0', '2024-05-02', 'Hartini', 'KASWARI', 'Kaswari', 'Kelas I', 'BPJS_Kesehatan', 'Pindahan', 'Nur Farida'),
(169, '301256', '0', '2024-05-01', 'Suriyanti Masaolyra', 'INTENSIVE', 'ICU', 'NON Kelas', 'BPJS_Kesehatan', 'baru', 'Nur Farida'),
(170, '217904', '0', '2024-05-02', 'Hesty Widyasih', 'INTENSIVE', 'ICU', 'NON Kelas', 'BPJS_Kesehatan', 'baru', 'Nur Farida'),
(171, '212210', '0', '2024-05-02', 'Senny Rondonuwu', 'INTENSIVE', 'ICU', 'NON Kelas', 'BPJS_Kesehatan', 'baru', 'Nur Farida'),
(172, '201628', '0', '2024-05-01', 'Agung Budiawan', 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Lucya Dewi Agustin'),
(173, '212203', '0', '2024-05-03', 'Sunarti Arsan', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Lucya Dewi Agustin'),
(174, '217904', '0', '2024-05-02', 'Hesty Widyasih', 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Lucya Dewi Agustin'),
(175, '222222', '0', '2024-05-02', 'Hartini', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'umum', 'baru', 'Lucya Dewi Agustin'),
(176, '100250', '0', '2024-05-06', 'Dwi Kartika sari', 'INTENSIVE', 'ICU', 'NON Kelas', 'BPJS_Kesehatan', 'Pindahan', 'admin'),
(177, '100322', '0', '2024-05-04', 'Farhati', 'CENDRAWASIH', 'Cendrawasih', 'VIP', 'umum', 'baru', 'admin'),
(178, '101010', '0', '2024-05-05', 'Nella Savira Liani', 'KASWARI', 'Kaswari', 'Kelas I', 'BPJS_Kesehatan', 'Pindahan', 'admin'),
(179, '939909', '0', '2024-05-22', 'Martiningsih', 'KASWARI', 'Kaswari', 'Kelas I', 'umum', 'baru', 'Salim'),
(180, '932090', '0', '2024-05-22', 'Segarnis Dhihasti Bidari', 'INTENSIVE', 'ICU', 'NON Kelas', 'umum', 'Pindahan', 'Salim'),
(181, '887765', '0', '2024-06-01', 'Hendro Sapto nugroho', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Salim'),
(182, '891907', '0', '2024-06-01', 'Yunisa Hasifa', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Salim'),
(183, '905098', '0', '2024-06-01', 'nuniek Widyaningrum', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Salim'),
(184, '906001', '0', '2024-06-02', 'Silvia safitri', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Salim'),
(185, '906005', '0', '2024-06-02', 'Nada Hasni', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(186, '906007', '0', '2024-06-02', 'Bama Romadhon', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(187, '906006', '0', '2024-06-02', 'Yustsyak Maulana ', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Salim'),
(188, '906008', '0', '2024-06-03', 'Jumantoro Widodo', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(189, '906010', '0', '2024-06-04', 'Muhammad Fahmi', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(190, '809083', '0', '2024-06-05', 'Risna Dwi Yanti', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(191, '906042', '0', '2024-06-05', 'Bahruddin Hasan', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(192, '906066', '0', '2024-06-06', 'Nur Ardiansyah', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(193, '906065', '0', '2024-06-07', 'Nurul Huda', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(194, '906074', '0', '2024-06-07', 'Dhella Izzah Afqorinah', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Salim'),
(195, '906078', '0', '2024-06-07', 'Yuni Indah Sari', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'umum', 'baru', 'Salim'),
(196, '906080', '0', '2024-06-08', 'Apriliya Nurfatimah', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Salim'),
(197, '906092', '0', '2024-06-09', 'Vicky Firmansyah', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(198, '906095', '0', '2024-06-10', 'Sabilla Jasmine', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'umum', 'baru', 'Salim'),
(199, '908098', '0', '2024-06-12', 'Siti Rahmah', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(200, '908765', '0', '2024-06-12', 'Sondang Whita Kristina Tambunan ', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'askin', 'baru', 'Salim'),
(201, '912210', '0', '2024-06-12', 'Roganda Simanjuntak', 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', 'BPJS_Kesehatan', 'baru', 'Salim'),
(202, '999999', '0', '2024-06-20', 'Panembahan senopati', 'INTENSIVE', 'ICU', 'NON Kelas', 'BPJS_Kesehatan', 'Pindahan', 'Salim'),
(203, '987781', '0', '2024-06-20', 'Putri Rhadiyah', 'CENDRAWASIH', 'Cendrawasih', 'VIP', 'BPJS_Kesehatan', 'baru', 'Salim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasienpindah`
--

CREATE TABLE `pasienpindah` (
  `id` int(12) NOT NULL,
  `nomorm` varchar(12) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `tgl_masuk` varchar(12) NOT NULL,
  `namapasien` varchar(225) NOT NULL,
  `koderuangan` varchar(12) NOT NULL,
  `namaruangan` varchar(100) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `tgl_pindah` varchar(12) NOT NULL,
  `masukkeluar` varchar(12) NOT NULL,
  `koderuanganpindah` varchar(12) NOT NULL,
  `namaruanganpindah` varchar(100) NOT NULL,
  `namakelaspindah` varchar(12) NOT NULL,
  `lamarawat` varchar(12) NOT NULL,
  `carabayar` varchar(12) NOT NULL,
  `petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasienpindah`
--

INSERT INTO `pasienpindah` (`id`, `nomorm`, `reg`, `tgl_masuk`, `namapasien`, `koderuangan`, `namaruangan`, `namakelas`, `tgl_pindah`, `masukkeluar`, `koderuanganpindah`, `namaruanganpindah`, `namakelaspindah`, `lamarawat`, `carabayar`, `petugas`) VALUES
(15, '139644', '0', '2024-02-14', 'SUYADI', 'ISO', 'Isolasi ', 'ISOLASI', '2024-02-15', '1', '', 'Merpati (Interna III)', '', '1', 'BPJS', 'user bangsali'),
(28, '976423', '0', '2024-01-14', 'soimah', 'CDWH', 'Cendrawasih', 'VIP', '2024-02-16', '33', 'MPT', 'Merpati (Interna II)', 'Kelas II', '33', 'umum', 'user bangsali'),
(29, '123456', 'RI000120240127', '2024-01-27', 'sutik', 'BGU', 'Bangau (Syaraf III)', 'Kelas III', '2024-01-28', '1', 'BGU', 'Bangau (Syaraf II)', 'Kelas II', '1', 'BPJS', ''),
(30, '233145', 'RI000120240126', '2024-01-27', 'yang', 'BGU', 'Bangau (Syaraf III)', 'Kelas III', '2024-01-28', '1', 'BGU', 'Bangau (Syaraf II)', 'Kelas II', '1', 'BPJS', ''),
(33, '879051', 'RI000220240127', '2024-01-27', 'bimbim', 'BGU', 'Bangau (Syaraf III)', 'Kelas III', '2024-02-27', '31', 'BGU', 'Bangau (Syaraf II)', 'Kelas II', '31', 'BPJS', 'Pengawas'),
(35, '056798', 'RI000326012024', '2024-01-26', 'sidik', 'CDWH', 'Cendrawasih', 'VIP', '2024-01-26', '1', 'NON', 'ICU', 'NON Kelas', '1', 'asuransi', 'admin'),
(36, '435678', '0', '2024-01-14', 'sean', 'NON', 'Camar (Perinatologi)', 'NON Kelas', '2024-01-18', '4', 'KENARI', 'Manyar (Anak II)', 'Kelas II', '4', 'umum', 'operator'),
(37, '804350', '0', '2024-01-27', 'gege', 'BGU', 'Bangau (Bedah III)', 'Kelas III', '2024-01-31', '4', 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', '4', 'umum', 'admin'),
(38, '804350', '0', '2024-01-31', 'gege', 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', '2024-02-01', '1', 'KASWARI', 'Kaswari', 'Kelas I', '1', 'umum', 'admin'),
(39, '345621', 'RI000320240127', '2024-01-27', 'cek mala', 'BGU', 'Bangau (Syaraf II)', 'Kelas II', '2024-01-31', '4', 'KASWARI', 'Kaswari', 'Kelas I', '4', 'BPJS', 'bang sali'),
(40, '453547', '0', '2024-01-27', 'cinta', 'BGU', 'Bangau (Syaraf II)', 'Kelas II', '2024-01-28', '1', 'KASWARI', 'Kaswari', 'Kelas I', '1', 'BPJS', 'bang sali'),
(41, '906080', '0', '2024-03-04', 'Apriliya Nurfatimah', 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', '2024-03-04', '1', 'KASWARI', 'Kaswari', 'Kelas I', '1', 'perusahaan', 'bang sali'),
(42, '980641', '0', '2024-03-05', 'rokxan sinatra', 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '2024-03-05', '1', 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', '1', 'BPJS', 'bang sali'),
(43, '197590', '0', '2024-04-01', 'Santun Setiawati', 'KENARI', 'Kenari (Bersalin III)', 'Kelas III', '2024-04-02', '1', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', '1', 'BPJS_Kesehat', 'Salim'),
(44, '906051', '0', '2024-05-01', 'Wildan Ilham', 'MANYAR', 'Manyar (Anak III)', 'Kelas III', '2024-05-02', '1', 'INTENSIVE', 'ICU', 'NON Kelas', '1', 'umum', 'Evi Tri'),
(45, '101010', '0', '2024-05-01', 'Nella Savira Liani', 'MERPATI', 'Merpati (Interna III)', 'Kelas III', '2024-05-02', '1', 'MERPATI', 'Merpati (Interna II)', 'Kelas II', '1', 'BPJS_Kesehat', 'Ana linanta udiyanti'),
(46, '222222', '0', '2024-05-01', 'Hartini', 'INTENSIVE', 'ICU', 'NON Kelas', '2024-05-02', '1', 'KASWARI', 'Kaswari', 'Kelas I', '1', 'BPJS_Kesehat', 'Nur Farida'),
(47, '100250', '0', '2024-05-06', 'Dwi Kartika sari', 'CENDRAWASIH', 'Cendrawasih', 'VIP', '2024-05-06', '1', 'INTENSIVE', 'ICU', 'NON Kelas', '1', 'BPJS_Kesehat', 'admin'),
(48, '101010', '0', '2024-05-01', 'Nella Savira Liani', 'CENDRAWASIH', 'Cendrawasih', 'VIP', '2024-05-05', '4', 'KASWARI', 'Kaswari', 'Kelas I', '4', 'BPJS_Kesehat', 'Salim'),
(49, '932090', '0', '2024-05-22', 'Segarnis Dhihasti Bidari', 'CENDRAWASIH', 'Cendrawasih', 'VIP', '2024-05-22', '1', 'INTENSIVE', 'ICU', 'NON Kelas', '1', 'umum', 'Salim'),
(50, '999999', '0', '2024-06-20', 'Panembahan senopati', 'CENDRAWASIH', 'Cendrawasih', 'VIP', '2024-06-20', '1', 'INTENSIVE', 'ICU', 'NON Kelas', '1', 'BPJS_Kesehat', 'Salim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(12) NOT NULL,
  `koderuangan` varchar(12) NOT NULL,
  `namaruangan` varchar(100) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `tidur` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `koderuangan`, `namaruangan`, `namakelas`, `tidur`) VALUES
(1, 'CENDRAWASIH', 'Cendrawasih', 'VIP', '7'),
(2, 'KASWARI', 'Kaswari', 'Kelas I', '6'),
(3, 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', '3'),
(4, 'BANGAU', 'Bangau (Syaraf II)', 'Kelas II', '3'),
(5, 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '7'),
(6, 'BANGAU', 'Bangau (Syaraf III)', 'Kelas III', '4'),
(7, 'MERPATI', 'Merpati (Interna II)', 'Kelas II', '5'),
(8, 'MERPATI', 'Merpati (Interna III)', 'Kelas III', '23'),
(9, 'KENARI', 'Manyar (Anak II)', 'Kelas II', '3'),
(10, 'MANYAR', 'Manyar (Anak III)', 'Kelas III', '8'),
(11, 'KENARI', 'Kenari (Bersalin VIP )', 'VIP', '1'),
(12, 'KENARI', 'Kenari (Bersalin I )', 'Kelas I', '2'),
(13, 'KENARI', 'Kenari (Bersalin II )', 'Kelas II', '2'),
(14, 'KENARI', 'Kenari (Bersalin III)', 'Kelas III', '8'),
(15, 'INTENSIVE', 'Camar (Perinatologi)', 'NON Kelas', '13'),
(16, 'INTENSIVE', 'ICU', 'NON Kelas', '4'),
(17, 'INTENSIVE', 'NICU', 'NON Kelas', '2'),
(18, 'INTENSIVE', 'PICU', 'NON Kelas', '2'),
(19, 'ISOLASI', 'Isolasi Garuda', 'ISOLASI', '10'),
(21, 'Rekam Medis', 'Rekam Medis', 'NON Kelas', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sandi`
--

CREATE TABLE `sandi` (
  `id` int(12) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `namaruangan` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(225) NOT NULL,
  `level` varchar(12) NOT NULL,
  `user_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sandi`
--

INSERT INTO `sandi` (`id`, `nip`, `user_name`, `namaruangan`, `jabatan`, `username`, `user_password`, `level`, `user_status`) VALUES
(1, '111111111111', 'admin', 'Rekam Medis', 'Koor.Rekam Medis', 'admin', '1981', 'admin', 1),
(2, '222222222222', 'oppa', 'Rekam Medis', 'Pelaporan Rekam Medis', 'operator', '123456', 'operator', 1),
(3, '333333333333', 'Salim', 'Kaswari', 'Petugas Sensus Ruangan ', 'user', '2222', 'user_bangsal', 1),
(4, '444444444444', 'Maximus Julian', 'kantor managemen', 'Kasie Penunjang Non Medis', 'owner', '1234', 'visitor', 1),
(10, '777777777777', 'Awan julian', 'Ruang rawat Merpati', 'Petugas sensus ruangan Merpati', 'awan', '1234', 'user_bangsal', 1),
(11, '204.2017', 'Tya Sistoning Wulandari', 'Unit Rekam Medis', 'Petugas Pelaporan', 'tya', '1234', 'operator', 1),
(12, '1985020820102022', 'Ari Rinawati', 'Unit Rekam Medis', 'koordinator Rekam Medis', 'arie', '1234', 'admin', 1),
(13, '132.2009', 'Evi Tri', 'Ruang Manyar', 'Perawat Pelaksana', 'evi', '1111', 'user_bangsal', 1),
(14, '172.2015', 'Ana linanta udiyanti', 'Merpati (Interna III)', 'Perawat Pelaksana', 'ana', '0303', 'user_bangsal', 1),
(15, '198011012008012021', 'Nur Farida', 'Ruang ICU', 'Katim Perawatan', 'nur', '3333', 'user_bangsal', 1),
(16, '198108082006042042', 'Lucya Dewi Agustin', 'Bangau (Bedah III)', 'Katim Peraawatan', 'Lucya', '1234', 'user_bangsal', 1),
(17, '199602232022031002', 'Muhammad Fahktur Rozsy', 'Ruangan kelas 1 dan VIP', 'Peawat Pelaksanan', 'Rozsy', '1234', 'user_bangsal', 1),
(18, '199602232022031002', 'Muhammad Fahktur Rozsy	', 'Ruangan kelas 1 dan VIP', 'Perawat Pelaksana', 'Fahktur', '1234', 'visitor', 1),
(19, '182.2015', 'Trias Permadani', 'Unit rekam medis', 'staff Pelaporan', 'trias', '1234', 'operator', 1),
(20, 'G41221664', 'Suparmin', 'kantor managemen', 'General Menejer', 'suparmin', '1234', 'visitor', 1),
(21, '0000', 'Nabella', 'Ruangan Perinatologi', 'Peawat Pelaksanan', 'bella', '1234', 'user_bangsal', 1),
(22, '0000', 'Diah Pratiwi', 'Ruang Kebidanan', 'Peawat Pelaksanan', 'diah', '1234', 'user_bangsal', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensus`
--

CREATE TABLE `sensus` (
  `id` int(12) NOT NULL,
  `koderuangan` varchar(12) NOT NULL,
  `namaruangan` varchar(100) NOT NULL,
  `namakelas` varchar(10) NOT NULL,
  `tidur` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  `awal` varchar(12) NOT NULL,
  `masuk` varchar(12) NOT NULL,
  `pindahan` varchar(12) NOT NULL,
  `jlhmasuk` varchar(12) NOT NULL,
  `keluar` varchar(12) NOT NULL,
  `dipindahkan` varchar(12) NOT NULL,
  `mati` varchar(12) NOT NULL,
  `matikurang` varchar(12) NOT NULL,
  `matilebih` varchar(12) NOT NULL,
  `jlhkeluar` varchar(12) NOT NULL,
  `lama` varchar(12) NOT NULL,
  `masukkeluar` varchar(12) NOT NULL,
  `sisa` varchar(12) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sensus`
--

INSERT INTO `sensus` (`id`, `koderuangan`, `namaruangan`, `namakelas`, `tidur`, `tanggal`, `awal`, `masuk`, `pindahan`, `jlhmasuk`, `keluar`, `dipindahkan`, `mati`, `matikurang`, `matilebih`, `jlhkeluar`, `lama`, `masukkeluar`, `sisa`, `hp`, `petugas`) VALUES
(1, 'KASWARI', 'Kaswari', 'Kelas I', '6', '2023-01-01', '2', '1', '0', '3', '1', '0', '0', '0', '0', '1', '3', '0', '2', '2', 'operator'),
(2, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-02', '2', '0', '0', '2', '1', '1', '0', '0', '0', '2', '5', '0', '0', '0', 'admin'),
(3, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-03', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'admin'),
(4, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-04', '1', '1', '0', '2', '1', '0', '0', '0', '0', '1', '2', '0', '1', '1', 'admin'),
(5, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-05', '1', '2', '0', '3', '0', '0', '0', '0', '0', '0', '0', '0', '3', '3', 'operator'),
(6, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-06', '3', '0', '0', '3', '1', '0', '0', '0', '0', '1', '2', '0', '2', '2', 'admin'),
(7, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-07', '2', '0', '0', '2', '1', '0', '1', '1', '0', '2', '7', '0', '0', '0', 'admin'),
(8, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-08', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'admin'),
(9, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-09', '1', '2', '0', '3', '1', '0', '0', '0', '0', '1', '2', '0', '2', '2', 'admin'),
(10, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-10', '2', '1', '0', '3', '3', '0', '0', '0', '0', '3', '0', '0', '0', '0', 'operator'),
(11, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-11', '2', '0', '0', '2', '2', '0', '0', '0', '0', '2', '6', '0', '0', '0', 'admin'),
(12, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-14', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'admin'),
(13, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-15', '1', '1', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'operator'),
(14, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-16', '2', '0', '0', '2', '1', '0', '0', '0', '0', '1', '3', '0', '1', '1', 'admin'),
(15, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-17', '1', '0', '0', '1', '1', '0', '0', '0', '0', '1', '3', '0', '0', '0', 'admin'),
(16, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-20', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'admin'),
(17, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-22', '1', '1', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'operator'),
(18, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-23', '2', '1', '0', '3', '0', '0', '0', '0', '0', '0', '0', '0', '3', '3', 'admin'),
(19, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-24', '3', '0', '0', '3', '1', '0', '0', '0', '0', '1', '3', '0', '2', '2', 'admin'),
(21, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-26', '1', '0', '0', '1', '1', '0', '0', '0', '0', '1', '4', '0', '0', '0', 'admin'),
(22, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-21', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'admin'),
(23, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-31', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'admin'),
(24, 'KWIK01', 'Kaswari', 'Kelas I', '6', '2023-01-25', '2', '0', '0', '2', '1', '0', '0', '0', '0', '1', '8', '0', '1', '1', 'admin'),
(25, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-01-31', '12', '5', '0', '17', '6', '0', '0', '0', '0', '6', '15', '0', '11', '11', 'admin'),
(26, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-01', '11', '3', '0', '14', '3', '0', '0', '0', '0', '3', '10', '0', '11', '11', 'admin'),
(27, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-02', '11', '1', '0', '12', '3', '0', '0', '0', '0', '3', '7', '0', '9', '9', 'admin'),
(28, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-03', '9', '5', '0', '14', '4', '0', '0', '0', '0', '4', '11', '0', '10', '10', 'admin'),
(29, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-04', '10', '3', '0', '13', '1', '0', '0', '0', '0', '1', '3', '0', '12', '12', 'admin'),
(30, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-05', '12', '2', '0', '14', '3', '0', '0', '0', '0', '3', '10', '0', '11', '11', 'user bangsali'),
(32, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-06', '11', '6', '0', '17', '6', '0', '0', '0', '0', '6', '23', '0', '11', '11', 'user bangsali'),
(33, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-07', '11', '3', '0', '14', '1', '0', '0', '0', '0', '1', '3', '0', '13', '13', 'user bangsali'),
(34, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-08', '13', '2', '0', '15', '3', '0', '0', '0', '0', '3', '11', '1', '12', '13', 'user bangsali'),
(35, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-09', '12', '11', '0', '23', '6', '0', '0', '0', '0', '6', '15', '1', '17', '18', 'user bangsali'),
(36, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-10', '17', '4', '0', '21', '7', '0', '0', '0', '0', '7', '27', '0', '14', '14', 'user bangsali'),
(37, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-11', '14', '1', '0', '15', '1', '0', '0', '0', '0', '1', '2', '0', '14', '14', 'user bangsali'),
(38, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-12', '14', '4', '0', '18', '5', '0', '0', '0', '0', '5', '14', '0', '13', '13', 'user bangsali'),
(39, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-13', '13', '3', '0', '16', '4', '0', '0', '0', '0', '4', '14', '0', '12', '12', 'user bangsali'),
(40, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-14', '12', '3', '0', '15', '2', '0', '0', '0', '0', '2', '9', '0', '13', '13', 'user bangsali'),
(43, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-15', '13', '2', '1', '16', '5', '0', '0', '0', '0', '5', '22', '0', '11', '11', 'admin'),
(44, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-16', '11', '5', '0', '16', '3', '0', '0', '0', '0', '3', '8', '1', '13', '14', 'admin'),
(45, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-17', '13', '3', '0', '16', '5', '0', '0', '0', '0', '5', '16', '0', '11', '11', 'admin'),
(46, 'MPT', 'Merpati (Interna III)', 'Kelas III', '23', '2024-02-18', '11', '2', '0', '13', '3', '0', '0', '0', '0', '3', '13', '0', '10', '10', 'admin'),
(50, 'KENARI', 'Kenari (Bersalin I )', 'Kelas I', '2', '2024-03-03', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'bang sali'),
(52, 'KENARI', 'Manyar (Anak II)', 'Kelas II', '3', '2024-03-01', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'bang sali'),
(53, 'BANGAU', 'Bangau (Bedah II)', 'Kelas II', '3', '2024-03-02', '0', '2', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'bang sali'),
(54, 'MERPATI', 'Merpati (Interna II)', 'Kelas II', '5', '2024-03-01', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'bang sali'),
(56, 'CENDRAWASIH', 'Cendrawasih', 'VIP', '7', '2024-03-01', '0', '2', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'bang sali'),
(57, 'CENDRAWASIH', 'Cendrawasih', 'VIP', '7', '2024-03-02', '2', '1', '0', '3', '0', '0', '0', '0', '0', '0', '0', '0', '3', '3', 'bang sali'),
(58, 'CENDRAWASIH', 'Cendrawasih', 'VIP', '7', '2024-03-03', '3', '0', '0', '3', '0', '0', '0', '0', '0', '0', '0', '0', '3', '3', 'bang sali'),
(59, 'CENDRAWASIH', 'Cendrawasih', 'VIP', '7', '2024-03-04', '3', '1', '0', '4', '0', '0', '0', '0', '0', '0', '0', '0', '4', '4', 'bang sali'),
(60, 'MANYAR', 'Manyar (Anak III)', 'Kelas III', '8', '2024-05-01', '0', '4', '0', '4', '0', '1', '0', '0', '0', '1', '1', '1', '3', '4', 'Evi Tri'),
(61, 'MANYAR', 'Manyar (Anak III)', 'Kelas III', '8', '2024-05-02', '3', '0', '0', '3', '1', '0', '0', '0', '0', '1', '1', '0', '2', '2', 'Evi Tri'),
(62, 'MERPATI', 'Merpati (Interna III)', 'Kelas III', '23', '2024-05-01', '10', '1', '0', '11', '0', '1', '0', '0', '0', '1', '1', '1', '10', '11', 'Ana linanta udiyanti'),
(63, 'MERPATI', 'Merpati (Interna III)', 'Kelas III', '23', '2024-05-02', '10', '1', '0', '11', '1', '0', '0', '0', '0', '1', '1', '1', '10', '11', 'Ana linanta udiyanti'),
(64, 'INTENSIVE', 'ICU', 'NON Kelas', '4', '2024-05-01', '0', '1', '0', '1', '0', '1', '0', '0', '0', '1', '1', '1', '0', '1', 'Nur Farida'),
(65, 'INTENSIVE', 'ICU', 'NON Kelas', '4', '2024-05-02', '0', '3', '1', '4', '1', '0', '0', '0', '0', '1', '1', '1', '3', '4', 'Nur Farida'),
(66, 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '7', '2024-05-01', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', 'Lucya Dewi Agustin'),
(67, 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '7', '2024-05-02', '1', '1', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'Lucya Dewi Agustin'),
(68, 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '7', '2024-05-03', '2', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'Lucya Dewi Agustin'),
(69, 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '7', '2024-05-04', '2', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'Lucya Dewi Agustin'),
(70, 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '7', '2024-05-05', '2', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'Lucya Dewi Agustin'),
(71, 'BANGAU', 'Bangau (Bedah III)', 'Kelas III', '7', '2024-05-06', '2', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2', '2', 'Lucya Dewi Agustin'),
(74, 'CENDRAWASIH', 'Cendrawasih', 'VIP', '7', '2024-06-20', '4', '1', '0', '5', '0', '1', '0', '0', '0', '1', '1', '1', '4', '5', 'Salim');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapasien`
--
ALTER TABLE `datapasien`
  ADD PRIMARY KEY (`nomorm`);

--
-- Indeks untuk tabel `datarumahsakit`
--
ALTER TABLE `datarumahsakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `indikatorkelas`
--
ALTER TABLE `indikatorkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporantahunan`
--
ALTER TABLE `laporantahunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasienkeluar`
--
ALTER TABLE `pasienkeluar`
  ADD PRIMARY KEY (`id_pasienkeluar`);

--
-- Indeks untuk tabel `pasienmasuk`
--
ALTER TABLE `pasienmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasienpindah`
--
ALTER TABLE `pasienpindah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sandi`
--
ALTER TABLE `sandi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sensus`
--
ALTER TABLE `sensus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapasien`
--
ALTER TABLE `datapasien`
  MODIFY `nomorm` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000;

--
-- AUTO_INCREMENT untuk tabel `datarumahsakit`
--
ALTER TABLE `datarumahsakit`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `indikatorkelas`
--
ALTER TABLE `indikatorkelas`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `laporantahunan`
--
ALTER TABLE `laporantahunan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pasienkeluar`
--
ALTER TABLE `pasienkeluar`
  MODIFY `id_pasienkeluar` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `pasienmasuk`
--
ALTER TABLE `pasienmasuk`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT untuk tabel `pasienpindah`
--
ALTER TABLE `pasienpindah`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `sandi`
--
ALTER TABLE `sandi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `sensus`
--
ALTER TABLE `sensus`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
