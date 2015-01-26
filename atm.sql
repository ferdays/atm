-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Okt 2014 pada 12.22
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `noatm`
--

CREATE TABLE IF NOT EXISTS `noatm` (
  `no` text NOT NULL,
  `pin` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`pin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `noatm`
--

INSERT INTO `noatm` (`no`, `pin`, `nama`, `level`) VALUES
('1', 1, 'Ferdi', 'admin'),
('2', 2, 'Agus', 'nasabah'),
('3', 3, 'alan', 'nasabah'),
('4', 4, 'asrul', 'nasabah'),
('5', 5, 'Reza', 'nasabah'),
('1234567890', 123456, 'ferday', 'nasabah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `totaluang`
--

CREATE TABLE IF NOT EXISTS `totaluang` (
  `no` int(50) NOT NULL,
  `uang` int(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `totaluang`
--

INSERT INTO `totaluang` (`no`, `uang`) VALUES
(2, 16500000),
(3, 1000000),
(4, 0),
(5, 400000),
(1234567890, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `idkirim` int(50) NOT NULL,
  `idterima` int(50) NOT NULL,
  `nominal` int(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transfer`
--

INSERT INTO `transfer` (`idkirim`, `idterima`, `nominal`, `pesan`) VALUES
(5, 2, 1000000, 'Ini uangnya 2'),
(5, 2, 500000, 'faere'),
(5, 2, 500000, '1'),
(5, 2, 1000000, 'fer'),
(5, 2, 10000000, 'fa'),
(5, 2, 500000, 'fawe'),
(5, 2, 3000000, 'faew'),
(5, 3, 1000000, 'fer'),
(5, 2, 500000, 'fear');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang`
--

CREATE TABLE IF NOT EXISTS `uang` (
  `pin` int(20) NOT NULL,
  `uang` int(50) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`tanggal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uang`
--

INSERT INTO `uang` (`pin`, `uang`, `tanggal`, `type`) VALUES
(5, 10000000, '23/10/2014 11:22:25', 'setor uang'),
(5, 500000, '23/10/2014 11:32:39', 'setor uang'),
(5, 500000, '23/10/2014 11:35:34', 'setor uang'),
(5, 500000, '23/10/2014 11:35:40', 'setor uang'),
(5, 1000000, '23/10/2014 11:36:18', 'setor uang'),
(5, 1000000, '23/10/2014 11:36:23', 'setor uang'),
(5, 500000, '23/10/2014 11:38:20', 'setor uang'),
(5, 500000, '23/10/2014 11:38:21', 'setor uang'),
(5, 1000000, '23/10/2014 11:38:43', 'setor uang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
