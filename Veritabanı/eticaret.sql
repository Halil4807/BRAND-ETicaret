-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Oca 2023, 02:38:47
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) NOT NULL,
  `ayar_url` varchar(50) NOT NULL,
  `ayar_title` varchar(250) NOT NULL,
  `ayar_description` varchar(250) NOT NULL,
  `ayar_keywords` varchar(50) NOT NULL,
  `ayar_author` varchar(50) NOT NULL,
  `ayar_tel` varchar(50) NOT NULL,
  `ayar_gsm` varchar(50) NOT NULL,
  `ayar_faks` varchar(50) NOT NULL,
  `ayar_mail` varchar(50) NOT NULL,
  `ayar_ilce` varchar(50) NOT NULL,
  `ayar_il` varchar(50) NOT NULL,
  `ayar_adres` varchar(250) NOT NULL,
  `ayar_mesai` varchar(250) NOT NULL,
  `ayar_maps` varchar(250) NOT NULL,
  `ayar_analystic` varchar(50) NOT NULL,
  `ayar_zopim` varchar(250) NOT NULL,
  `ayar_facebook` varchar(50) NOT NULL,
  `ayar_twitter` varchar(50) NOT NULL,
  `ayar_google` varchar(50) NOT NULL,
  `ayar_youtube` varchar(50) NOT NULL,
  `ayar_smtphost` varchar(50) NOT NULL,
  `ayar_smtpuser` varchar(50) NOT NULL,
  `ayar_smtppassword` varchar(50) NOT NULL,
  `ayar_smtpport` varchar(50) NOT NULL,
  `ayar_bakim` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'dimg/230123212819logo.png', 'http://localhost/BRAND-ETicaret/', 'BRAND E-Ticaret', 'BRAND E-Ticaret Scripti yazım eğitimi projesi', 'eticaret, shopping, php', 'Halil ÖZTÜRK', '0850 000 00 00', '0530 000 00 00', '0242 000 00 00', 'info@halilozturk.com', 'Merkez', 'Antalya', 'Merkez/Antalya', '7 x 24 açık eticaret scripti', 'ayar_maps_api API', 'ayar_analystic Kodu', 'ayar_zopima API', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'mail.alanadiniz.com', 'Halil', '1', '587', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) NOT NULL,
  `hakkimizda_icerik` text NOT NULL,
  `hakkimizda_video` varchar(50) NOT NULL,
  `hakkimizda_vizyon` varchar(500) NOT NULL,
  `hakkimizda_misyon` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'BRAND E-Ticaret', '<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n\r\n<h2><strong>Nereden Gelir?</strong></h2>\r\n\r\n<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n', 'b5Rf5G0umZU', 'BRAND ile ilgili hakkımızda vizyon içeriği burada yer alacağından buraya vizyon verisi girilecekitir.', 'BRAND ile ilgili hakkımızda misyon içeriği burada yer alacağından buraya vizyon verisi girilecekitir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT current_timestamp(),
  `kullanici_resim` varchar(250) NOT NULL,
  `kullanici_tc` varchar(50) NOT NULL,
  `kullanici_ad` varchar(50) NOT NULL,
  `kullanici_mail` varchar(100) NOT NULL,
  `kullanici_gsm` varchar(50) NOT NULL,
  `kullanici_password` varchar(50) NOT NULL,
  `kullanici_adsoyad` varchar(50) NOT NULL,
  `kullanici_adres` varchar(250) NOT NULL,
  `kullanici_il` varchar(100) NOT NULL,
  `kullanici_ilce` varchar(100) NOT NULL,
  `kullanici_unvan` varchar(100) NOT NULL,
  `kullanici_yetki` int(2) NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2023-01-01 15:21:45', '', '11111111111', '', 'info@halilozturk.com', '000', 'c4ca4238a0b923820dcc509a6f75849b', 'Halil', 'adres', 'ANTALYA', 'FETHİYE', '', 5, 1),
(2, '2023-01-21 23:43:46', 'Yok', '11111111111', 'halil.ozturk', 'info@halilozturk.com.tr', '000', 'c4ca4238a0b923820dcc509a6f75849b', 'Halil', 'adres', 'ANTALYA', 'KEMER', '', 5, 1),
(161, '2023-01-24 00:49:31', 'jpg', '11111111115', 'd', 'deneme@deneme', '000', 'c4ca4238a0b923820dcc509a6f75849b', 'Deneme', 'adres', 'ANTALYA', 'KEMER', 'user', 0, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
