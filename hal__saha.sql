-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Nis 2024, 19:27:35
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `halısaha`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `müşteriler`
--

CREATE TABLE `müşteriler` (
  `müşteri_id` int(11) NOT NULL,
  `ad` varchar(54) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `müşteriler`
--

INSERT INTO `müşteriler` (`müşteri_id`, `ad`, `email`, `telefon`) VALUES
(101, 'Ahmet tan', 'ahmet45@gmail.com', 542252565),
(102, 'Mehmet kara', 'mehmet54@gmail.com', 54215462),
(103, 'Caner TAŞ', 'caner72@gmail.com', 542464268);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyon`
--

CREATE TABLE `rezervasyon` (
  `rezervasyon_id` int(11) NOT NULL,
  `müşteri_id` int(11) NOT NULL,
  `rezervasyon_tarihi` int(11) NOT NULL,
  `başlangıc_saati` int(11) NOT NULL,
  `bitiş_saati` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `rezervasyon`
--

INSERT INTO `rezervasyon` (`rezervasyon_id`, `müşteri_id`, `rezervasyon_tarihi`, `başlangıc_saati`, `bitiş_saati`) VALUES
(201, 101, 5, 21, 22),
(202, 102, 24, 19, 20),
(203, 103, 28, 22, 23);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `müşteriler`
--
ALTER TABLE `müşteriler`
  ADD PRIMARY KEY (`müşteri_id`);

--
-- Tablo için indeksler `rezervasyon`
--
ALTER TABLE `rezervasyon`
  ADD PRIMARY KEY (`rezervasyon_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
