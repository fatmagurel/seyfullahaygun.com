-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Eki 2020, 22:52:10
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `photo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form`
--

CREATE TABLE `form` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `numara` varchar(11) DEFAULT NULL,
  `mesaj` varchar(1000) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `form`
--

INSERT INTO `form` (`Id`, `adsoy`, `numara`, `mesaj`, `tarih`) VALUES
(74, 'fatma gürel', '05056517579', 'bilgi almak istiyorum', '2020-09-24 14:42:18'),
(76, 'alperen gürel', '12345678987', 'bilgi almak istiyorum', '2020-09-24 14:42:18');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE `hakkimda` (
  `Id` int(11) NOT NULL,
  `hakkimda` mediumtext,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`Id`, `hakkimda`, `facebook`, `instagram`, `twitter`, `photo`) VALUES
(1, '<p>Gelin ve damat adaylarının en mutlu gününde Türkiye’nin her yerine profesyonel fotoğrafçılık hizmeti sunmaktayız. Türkiye Düğün Fotoğrafçısı Seyfullah Aygün Photography olarak hayatınızın en mutlu gününde sizlerin yanında olmak ve sizleri memnun edecek şekilde fotoğrafları albüm haline getiriyoruz. Albümün tüm detaylarına siz karar vermekle beraber size sadece o günün tadını çıkarmak düşüyor. Siz tadını çıkarın ve biz her anını karelerimize alalım işlem aslında bu kadar basit.Olayımız sadece sizleri bir kareye sığdırmak değil. Sizlerin o fotoğraflara ne zaman bakarsanız bakın yine o gün ne hissettiğinizi, en ufak ayrıntısına kadar hatırlamanızı sağlamak.</p>\r\n', 'https://www.facebook.com/sees6634', 'https://www.instagram.com/seyfullahphotography/', 'https://twitter.com/seyfullahtr', 'seyfullah1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `Id` int(11) NOT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`Id`, `adres`, `telefon`, `email`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'İSTANBUL', ' 0532 651 84 66', ' seyfullah.tr@gmail.com', 'https://www.facebook.com/sees6634', 'https://www.instagram.com/seyfullahphotography/', 'https://twitter.com/seyfullahtr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `kullaniciadi` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`Id`, `kullaniciadi`, `sifre`) VALUES
(1, 'seyfullah aygün', '2020');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `portfolyo`
--

CREATE TABLE `portfolyo` (
  `Id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT '',
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `portfolyo`
--

INSERT INTO `portfolyo` (`Id`, `photo`, `tarih`) VALUES
(1, 'img_1.jpg', NULL),
(2, 'img_2.jpg', '2020-09-21 16:54:13'),
(3, 'img_3.jpg', '2020-09-21 16:54:26'),
(4, 'img_4.jpg', '2020-09-21 16:54:57'),
(5, 'img_5.jpg', '2020-09-21 16:55:34'),
(6, 'img_6.jpg', '2020-09-21 16:55:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sitegenel`
--

CREATE TABLE `sitegenel` (
  `Id` int(11) NOT NULL,
  `siteBasligi` varchar(100) DEFAULT NULL,
  `bannerYazisi` mediumtext,
  `bannerFotografi` varchar(255) DEFAULT NULL,
  `bannerYazisi2` mediumtext,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sitegenel`
--

INSERT INTO `sitegenel` (`Id`, `siteBasligi`, `bannerYazisi`, `bannerFotografi`, `bannerYazisi2`, `tarih`) VALUES
(1, 'Seyfullah Aygün Photography', '<p>Merhaba! Ben Seyfullah Aygün...</p>\r\n', 'hero_12.jpg', '<p>En özel gününüzde, en güzel karelerle anılarınızı renklendirmek için benimle iletişime geçin.</p>\r\n', '2020-09-24 16:26:13');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `portfolyo`
--
ALTER TABLE `portfolyo`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `sitegenel`
--
ALTER TABLE `sitegenel`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `form`
--
ALTER TABLE `form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda`
--
ALTER TABLE `hakkimda`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `portfolyo`
--
ALTER TABLE `portfolyo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `sitegenel`
--
ALTER TABLE `sitegenel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
