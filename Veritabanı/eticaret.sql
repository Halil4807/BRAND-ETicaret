-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 Oca 2023, 22:53:07
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
-- Tablo için tablo yapısı `banka`
--

CREATE TABLE `banka` (
  `banka_id` int(11) NOT NULL,
  `banka_ad` varchar(250) NOT NULL,
  `banka_iban` varchar(50) NOT NULL,
  `banka_hesapadsoyad` varchar(250) NOT NULL,
  `banka_durum` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banka`
--

INSERT INTO `banka` (`banka_id`, `banka_ad`, `banka_iban`, `banka_hesapadsoyad`, `banka_durum`) VALUES
(1, 'A Banka', '123456789', 'BRAND', '1'),
(3, 'B Banka', '650268465', 'BRAND', '1');

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
-- Tablo için tablo yapısı `ilceler`
--

CREATE TABLE `ilceler` (
  `ilce_id` int(11) NOT NULL,
  `ilce_ad` varchar(255) NOT NULL,
  `il_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilceler`
--

INSERT INTO `ilceler` (`ilce_id`, `ilce_ad`, `il_id`) VALUES
(1, 'ALADAĞ', 1),
(2, 'CEYHAN', 1),
(3, 'ÇUKUROVA', 1),
(4, 'FEKE', 1),
(5, 'İMAMOĞLU', 1),
(6, 'KARAİSALI', 1),
(7, 'KARATAŞ', 1),
(8, 'KOZAN', 1),
(9, 'POZANTI', 1),
(10, 'SAİMBEYLİ', 1),
(11, 'SARIÇAM', 1),
(12, 'SEYHAN', 1),
(13, 'TUFANBEYLİ', 1),
(14, 'YUMURTALIK', 1),
(15, 'YÜREĞİR', 1),
(16, 'BESNİ', 2),
(17, 'ÇELİKHAN', 2),
(18, 'GERGER', 2),
(19, 'GÖLBAŞI', 2),
(20, 'KAHTA', 2),
(21, 'MERKEZ', 2),
(22, 'SAMSAT', 2),
(23, 'SİNCİK', 2),
(24, 'TUT', 2),
(25, 'BAŞMAKÇI', 3),
(26, 'BAYAT', 3),
(27, 'BOLVADİN', 3),
(28, 'ÇAY', 3),
(29, 'ÇOBANLAR', 3),
(30, 'DAZKIRI', 3),
(31, 'DİNAR', 3),
(32, 'EMİRDAĞ', 3),
(33, 'EVCİLER', 3),
(34, 'HOCALAR', 3),
(35, 'İHSANİYE', 3),
(36, 'İSCEHİSAR', 3),
(37, 'KIZILÖREN', 3),
(38, 'MERKEZ', 3),
(39, 'SANDIKLI', 3),
(40, 'SİNANPAŞA', 3),
(41, 'SULTANDAĞI', 3),
(42, 'ŞUHUT', 3),
(43, 'DİYADİN', 4),
(44, 'DOĞUBAYAZIT', 4),
(45, 'ELEŞKİRT', 4),
(46, 'HAMUR', 4),
(47, 'MERKEZ', 4),
(48, 'PATNOS', 4),
(49, 'TAŞLIÇAY', 4),
(50, 'TUTAK', 4),
(51, 'AĞAÇÖREN', 68),
(52, 'ESKİL', 68),
(53, 'GÜLAĞAÇ', 68),
(54, 'GÜZELYURT', 68),
(55, 'MERKEZ', 68),
(56, 'ORTAKÖY', 68),
(57, 'SARIYAHŞİ', 68),
(58, 'SULTANHANI', 68),
(59, 'GÖYNÜCEK', 5),
(60, 'GÜMÜŞHACIKÖY', 5),
(61, 'HAMAMÖZÜ', 5),
(62, 'MERKEZ', 5),
(63, 'MERZİFON', 5),
(64, 'SULUOVA', 5),
(65, 'TAŞOVA', 5),
(66, 'AKYURT', 6),
(67, 'ALTINDAĞ', 6),
(68, 'AYAŞ', 6),
(69, 'BALA', 6),
(70, 'BEYPAZARI', 6),
(71, 'ÇAMLIDERE', 6),
(72, 'ÇANKAYA', 6),
(73, 'ÇUBUK', 6),
(74, 'ELMADAĞ', 6),
(75, 'ETİMESGUT', 6),
(76, 'EVREN', 6),
(77, 'GÖLBAŞI', 6),
(78, 'GÜDÜL', 6),
(79, 'HAYMANA', 6),
(80, 'KAHRAMANKAZAN', 6),
(81, 'KALECİK', 6),
(82, 'KEÇİÖREN', 6),
(83, 'KIZILCAHAMAM', 6),
(84, 'MAMAK', 6),
(85, 'NALLIHAN', 6),
(86, 'POLATLI', 6),
(87, 'PURSAKLAR', 6),
(88, 'SİNCAN', 6),
(89, 'ŞEREFLİKOÇHİSAR', 6),
(90, 'YENİMAHALLE', 6),
(91, 'AKSEKİ', 7),
(92, 'AKSU', 7),
(93, 'ALANYA', 7),
(94, 'DEMRE', 7),
(95, 'DÖŞEMEALTI', 7),
(96, 'ELMALI', 7),
(97, 'FİNİKE', 7),
(98, 'GAZİPAŞA', 7),
(99, 'GÜNDOĞMUŞ', 7),
(100, 'İBRADI', 7),
(101, 'KAŞ', 7),
(102, 'KEMER', 7),
(103, 'KEPEZ', 7),
(104, 'KONYAALTI', 7),
(105, 'KORKUTELİ', 7),
(106, 'KUMLUCA', 7),
(107, 'MANAVGAT', 7),
(108, 'MURATPAŞA', 7),
(109, 'SERİK', 7),
(110, 'ÇILDIR', 75),
(111, 'DAMAL', 75),
(112, 'GÖLE', 75),
(113, 'HANAK', 75),
(114, 'MERKEZ', 75),
(115, 'POSOF', 75),
(116, 'ARDANUÇ', 8),
(117, 'ARHAVİ', 8),
(118, 'BORÇKA', 8),
(119, 'HOPA', 8),
(120, 'KEMALPAŞA', 8),
(121, 'MERKEZ', 8),
(122, 'MURGUL', 8),
(123, 'ŞAVŞAT', 8),
(124, 'YUSUFELİ', 8),
(125, 'BOZDOĞAN', 9),
(126, 'BUHARKENT', 9),
(127, 'ÇİNE', 9),
(128, 'DİDİM', 9),
(129, 'EFELER', 9),
(130, 'GERMENCİK', 9),
(131, 'İNCİRLİOVA', 9),
(132, 'KARACASU', 9),
(133, 'KARPUZLU', 9),
(134, 'KOÇARLI', 9),
(135, 'KÖŞK', 9),
(136, 'KUŞADASI', 9),
(137, 'KUYUCAK', 9),
(138, 'NAZİLLİ', 9),
(139, 'SÖKE', 9),
(140, 'SULTANHİSAR', 9),
(141, 'YENİPAZAR', 9),
(142, 'ALTIEYLÜL', 10),
(143, 'AYVALIK', 10),
(144, 'BALYA', 10),
(145, 'BANDIRMA', 10),
(146, 'BİGADİÇ', 10),
(147, 'BURHANİYE', 10),
(148, 'DURSUNBEY', 10),
(149, 'EDREMİT', 10),
(150, 'ERDEK', 10),
(151, 'GÖMEÇ', 10),
(152, 'GÖNEN', 10),
(153, 'HAVRAN', 10),
(154, 'İVRİNDİ', 10),
(155, 'KARESİ', 10),
(156, 'KEPSUT', 10),
(157, 'MANYAS', 10),
(158, 'MARMARA', 10),
(159, 'SAVAŞTEPE', 10),
(160, 'SINDIRGI', 10),
(161, 'SUSURLUK', 10),
(162, 'AMASRA', 74),
(163, 'KURUCAŞİLE', 74),
(164, 'MERKEZ', 74),
(165, 'ULUS', 74),
(166, 'BEŞİRİ', 72),
(167, 'GERCÜŞ', 72),
(168, 'HASANKEYF', 72),
(169, 'KOZLUK', 72),
(170, 'MERKEZ', 72),
(171, 'SASON', 72),
(172, 'AYDINTEPE', 69),
(173, 'DEMİRÖZÜ', 69),
(174, 'MERKEZ', 69),
(175, 'BOZÜYÜK', 11),
(176, 'GÖLPAZARI', 11),
(177, 'İNHİSAR', 11),
(178, 'MERKEZ', 11),
(179, 'OSMANELİ', 11),
(180, 'PAZARYERİ', 11),
(181, 'SÖĞÜT', 11),
(182, 'YENİPAZAR', 11),
(183, 'ADAKLI', 12),
(184, 'GENÇ', 12),
(185, 'KARLIOVA', 12),
(186, 'KİĞI', 12),
(187, 'MERKEZ', 12),
(188, 'SOLHAN', 12),
(189, 'YAYLADERE', 12),
(190, 'YEDİSU', 12),
(191, 'ADİLCEVAZ', 13),
(192, 'AHLAT', 13),
(193, 'GÜROYMAK', 13),
(194, 'HİZAN', 13),
(195, 'MERKEZ', 13),
(196, 'MUTKİ', 13),
(197, 'TATVAN', 13),
(198, 'DÖRTDİVAN', 14),
(199, 'GEREDE', 14),
(200, 'GÖYNÜK', 14),
(201, 'KIBRISCIK', 14),
(202, 'MENGEN', 14),
(203, 'MERKEZ', 14),
(204, 'MUDURNU', 14),
(205, 'SEBEN', 14),
(206, 'YENİÇAĞA', 14),
(207, 'AĞLASUN', 15),
(208, 'ALTINYAYLA', 15),
(209, 'BUCAK', 15),
(210, 'ÇAVDIR', 15),
(211, 'ÇELTİKÇİ', 15),
(212, 'GÖLHİSAR', 15),
(213, 'KARAMANLI', 15),
(214, 'KEMER', 15),
(215, 'MERKEZ', 15),
(216, 'TEFENNİ', 15),
(217, 'YEŞİLOVA', 15),
(218, 'BÜYÜKORHAN', 16),
(219, 'GEMLİK', 16),
(220, 'GÜRSU', 16),
(221, 'HARMANCIK', 16),
(222, 'İNEGÖL', 16),
(223, 'İZNİK', 16),
(224, 'KARACABEY', 16),
(225, 'KELES', 16),
(226, 'KESTEL', 16),
(227, 'MUDANYA', 16),
(228, 'MUSTAFAKEMALPAŞA', 16),
(229, 'NİLÜFER', 16),
(230, 'ORHANELİ', 16),
(231, 'ORHANGAZİ', 16),
(232, 'OSMANGAZİ', 16),
(233, 'YENİŞEHİR', 16),
(234, 'YILDIRIM', 16),
(235, 'AYVACIK', 17),
(236, 'BAYRAMİÇ', 17),
(237, 'BİGA', 17),
(238, 'BOZCAADA', 17),
(239, 'ÇAN', 17),
(240, 'ECEABAT', 17),
(241, 'EZİNE', 17),
(242, 'GELİBOLU', 17),
(243, 'GÖKÇEADA', 17),
(244, 'LAPSEKİ', 17),
(245, 'MERKEZ', 17),
(246, 'YENİCE', 17),
(247, 'ATKARACALAR', 18),
(248, 'BAYRAMÖREN', 18),
(249, 'ÇERKEŞ', 18),
(250, 'ELDİVAN', 18),
(251, 'ILGAZ', 18),
(252, 'KIZILIRMAK', 18),
(253, 'KORGUN', 18),
(254, 'KURŞUNLU', 18),
(255, 'MERKEZ', 18),
(256, 'ORTA', 18),
(257, 'ŞABANÖZÜ', 18),
(258, 'YAPRAKLI', 18),
(259, 'ALACA', 19),
(260, 'BAYAT', 19),
(261, 'BOĞAZKALE', 19),
(262, 'DODURGA', 19),
(263, 'İSKİLİP', 19),
(264, 'KARGI', 19),
(265, 'LAÇİN', 19),
(266, 'MECİTÖZÜ', 19),
(267, 'MERKEZ', 19),
(268, 'OĞUZLAR', 19),
(269, 'ORTAKÖY', 19),
(270, 'OSMANCIK', 19),
(271, 'SUNGURLU', 19),
(272, 'UĞURLUDAĞ', 19),
(273, 'ACIPAYAM', 20),
(274, 'BABADAĞ', 20),
(275, 'BAKLAN', 20),
(276, 'BEKİLLİ', 20),
(277, 'BEYAĞAÇ', 20),
(278, 'BOZKURT', 20),
(279, 'BULDAN', 20),
(280, 'ÇAL', 20),
(281, 'ÇAMELİ', 20),
(282, 'ÇARDAK', 20),
(283, 'ÇİVRİL', 20),
(284, 'GÜNEY', 20),
(285, 'HONAZ', 20),
(286, 'KALE', 20),
(287, 'MERKEZEFENDİ', 20),
(288, 'PAMUKKALE', 20),
(289, 'SARAYKÖY', 20),
(290, 'SERİNHİSAR', 20),
(291, 'TAVAS', 20),
(292, 'BAĞLAR', 21),
(293, 'BİSMİL', 21),
(294, 'ÇERMİK', 21),
(295, 'ÇINAR', 21),
(296, 'ÇÜNGÜŞ', 21),
(297, 'DİCLE', 21),
(298, 'EĞİL', 21),
(299, 'ERGANİ', 21),
(300, 'HANİ', 21),
(301, 'HAZRO', 21),
(302, 'KAYAPINAR', 21),
(303, 'KOCAKÖY', 21),
(304, 'KULP', 21),
(305, 'LİCE', 21),
(306, 'SİLVAN', 21),
(307, 'SUR', 21),
(308, 'YENİŞEHİR', 21),
(309, 'AKÇAKOCA', 81),
(310, 'CUMAYERİ', 81),
(311, 'ÇİLİMLİ', 81),
(312, 'GÖLYAKA', 81),
(313, 'GÜMÜŞOVA', 81),
(314, 'KAYNAŞLI', 81),
(315, 'MERKEZ', 81),
(316, 'YIĞILCA', 81),
(317, 'ENEZ', 22),
(318, 'HAVSA', 22),
(319, 'İPSALA', 22),
(320, 'KEŞAN', 22),
(321, 'LALAPAŞA', 22),
(322, 'MERİÇ', 22),
(323, 'MERKEZ', 22),
(324, 'SÜLOĞLU', 22),
(325, 'UZUNKÖPRÜ', 22),
(326, 'AĞIN', 23),
(327, 'ALACAKAYA', 23),
(328, 'ARICAK', 23),
(329, 'BASKİL', 23),
(330, 'KARAKOÇAN', 23),
(331, 'KEBAN', 23),
(332, 'KOVANCILAR', 23),
(333, 'MADEN', 23),
(334, 'MERKEZ', 23),
(335, 'PALU', 23),
(336, 'SİVRİCE', 23),
(337, 'ÇAYIRLI', 24),
(338, 'İLİÇ', 24),
(339, 'KEMAH', 24),
(340, 'KEMALİYE', 24),
(341, 'MERKEZ', 24),
(342, 'OTLUKBELİ', 24),
(343, 'REFAHİYE', 24),
(344, 'TERCAN', 24),
(345, 'ÜZÜMLÜ', 24),
(346, 'AŞKALE', 25),
(347, 'AZİZİYE', 25),
(348, 'ÇAT', 25),
(349, 'HINIS', 25),
(350, 'HORASAN', 25),
(351, 'İSPİR', 25),
(352, 'KARAÇOBAN', 25),
(353, 'KARAYAZI', 25),
(354, 'KÖPRÜKÖY', 25),
(355, 'NARMAN', 25),
(356, 'OLTU', 25),
(357, 'OLUR', 25),
(358, 'PALANDÖKEN', 25),
(359, 'PASİNLER', 25),
(360, 'PAZARYOLU', 25),
(361, 'ŞENKAYA', 25),
(362, 'TEKMAN', 25),
(363, 'TORTUM', 25),
(364, 'UZUNDERE', 25),
(365, 'YAKUTİYE', 25),
(366, 'ALPU', 26),
(367, 'BEYLİKOVA', 26),
(368, 'ÇİFTELER', 26),
(369, 'GÜNYÜZÜ', 26),
(370, 'HAN', 26),
(371, 'İNÖNÜ', 26),
(372, 'MAHMUDİYE', 26),
(373, 'MİHALGAZİ', 26),
(374, 'MİHALIÇÇIK', 26),
(375, 'ODUNPAZARI', 26),
(376, 'SARICAKAYA', 26),
(377, 'SEYİTGAZİ', 26),
(378, 'SİVRİHİSAR', 26),
(379, 'TEPEBAŞI', 26),
(380, 'ARABAN', 27),
(381, 'İSLAHİYE', 27),
(382, 'KARKAMIŞ', 27),
(383, 'NİZİP', 27),
(384, 'NURDAĞI', 27),
(385, 'OĞUZELİ', 27),
(386, 'ŞAHİNBEY', 27),
(387, 'ŞEHİTKAMİL', 27),
(388, 'YAVUZELİ', 27),
(389, 'ALUCRA', 28),
(390, 'BULANCAK', 28),
(391, 'ÇAMOLUK', 28),
(392, 'ÇANAKÇI', 28),
(393, 'DERELİ', 28),
(394, 'DOĞANKENT', 28),
(395, 'ESPİYE', 28),
(396, 'EYNESİL', 28),
(397, 'GÖRELE', 28),
(398, 'GÜCE', 28),
(399, 'KEŞAP', 28),
(400, 'MERKEZ', 28),
(401, 'PİRAZİZ', 28),
(402, 'ŞEBİNKARAHİSAR', 28),
(403, 'TİREBOLU', 28),
(404, 'YAĞLIDERE', 28),
(405, 'KELKİT', 29),
(406, 'KÖSE', 29),
(407, 'KÜRTÜN', 29),
(408, 'MERKEZ', 29),
(409, 'ŞİRAN', 29),
(410, 'TORUL', 29),
(411, 'ÇUKURCA', 30),
(412, 'DERECİK', 30),
(413, 'MERKEZ', 30),
(414, 'ŞEMDİNLİ', 30),
(415, 'YÜKSEKOVA', 30),
(416, 'ALTINÖZÜ', 31),
(417, 'ANTAKYA', 31),
(418, 'ARSUZ', 31),
(419, 'BELEN', 31),
(420, 'DEFNE', 31),
(421, 'DÖRTYOL', 31),
(422, 'ERZİN', 31),
(423, 'HASSA', 31),
(424, 'İSKENDERUN', 31),
(425, 'KIRIKHAN', 31),
(426, 'KUMLU', 31),
(427, 'PAYAS', 31),
(428, 'REYHANLI', 31),
(429, 'SAMANDAĞ', 31),
(430, 'YAYLADAĞI', 31),
(431, 'ARALIK', 76),
(432, 'KARAKOYUNLU', 76),
(433, 'MERKEZ', 76),
(434, 'TUZLUCA', 76),
(435, 'AKSU', 32),
(436, 'ATABEY', 32),
(437, 'EĞİRDİR', 32),
(438, 'GELENDOST', 32),
(439, 'GÖNEN', 32),
(440, 'KEÇİBORLU', 32),
(441, 'MERKEZ', 32),
(442, 'SENİRKENT', 32),
(443, 'SÜTÇÜLER', 32),
(444, 'ŞARKİKARAAĞAÇ', 32),
(445, 'ULUBORLU', 32),
(446, 'YALVAÇ', 32),
(447, 'YENİŞARBADEMLİ', 32),
(448, 'ADALAR', 34),
(449, 'ARNAVUTKÖY', 34),
(450, 'ATAŞEHİR', 34),
(451, 'AVCILAR', 34),
(452, 'BAĞCILAR', 34),
(453, 'BAHÇELİEVLER', 34),
(454, 'BAKIRKÖY', 34),
(455, 'BAŞAKŞEHİR', 34),
(456, 'BAYRAMPAŞA', 34),
(457, 'BEŞİKTAŞ', 34),
(458, 'BEYKOZ', 34),
(459, 'BEYLİKDÜZÜ', 34),
(460, 'BEYOĞLU', 34),
(461, 'BÜYÜKÇEKMECE', 34),
(462, 'ÇATALCA', 34),
(463, 'ÇEKMEKÖY', 34),
(464, 'ESENLER', 34),
(465, 'ESENYURT', 34),
(466, 'EYÜPSULTAN', 34),
(467, 'FATİH', 34),
(468, 'GAZİOSMANPAŞA', 34),
(469, 'GÜNGÖREN', 34),
(470, 'KADIKÖY', 34),
(471, 'KAĞITHANE', 34),
(472, 'KARTAL', 34),
(473, 'KÜÇÜKÇEKMECE', 34),
(474, 'MALTEPE', 34),
(475, 'PENDİK', 34),
(476, 'SANCAKTEPE', 34),
(477, 'SARIYER', 34),
(478, 'SİLİVRİ', 34),
(479, 'SULTANBEYLİ', 34),
(480, 'SULTANGAZİ', 34),
(481, 'ŞİLE', 34),
(482, 'ŞİŞLİ', 34),
(483, 'TUZLA', 34),
(484, 'ÜMRANİYE', 34),
(485, 'ÜSKÜDAR', 34),
(486, 'ZEYTİNBURNU', 34),
(487, 'ALİAĞA', 35),
(488, 'BALÇOVA', 35),
(489, 'BAYINDIR', 35),
(490, 'BAYRAKLI', 35),
(491, 'BERGAMA', 35),
(492, 'BEYDAĞ', 35),
(493, 'BORNOVA', 35),
(494, 'BUCA', 35),
(495, 'ÇEŞME', 35),
(496, 'ÇİĞLİ', 35),
(497, 'DİKİLİ', 35),
(498, 'FOÇA', 35),
(499, 'GAZİEMİR', 35),
(500, 'GÜZELBAHÇE', 35),
(501, 'KARABAĞLAR', 35),
(502, 'KARABURUN', 35),
(503, 'KARŞIYAKA', 35),
(504, 'KEMALPAŞA', 35),
(505, 'KINIK', 35),
(506, 'KİRAZ', 35),
(507, 'KONAK', 35),
(508, 'MENDERES', 35),
(509, 'MENEMEN', 35),
(510, 'NARLIDERE', 35),
(511, 'ÖDEMİŞ', 35),
(512, 'SEFERİHİSAR', 35),
(513, 'SELÇUK', 35),
(514, 'TİRE', 35),
(515, 'TORBALI', 35),
(516, 'URLA', 35),
(517, 'AFŞİN', 46),
(518, 'ANDIRIN', 46),
(519, 'ÇAĞLAYANCERİT', 46),
(520, 'DULKADİROĞLU', 46),
(521, 'EKİNÖZÜ', 46),
(522, 'ELBİSTAN', 46),
(523, 'GÖKSUN', 46),
(524, 'NURHAK', 46),
(525, 'ONİKİŞUBAT', 46),
(526, 'PAZARCIK', 46),
(527, 'TÜRKOĞLU', 46),
(528, 'EFLANİ', 78),
(529, 'ESKİPAZAR', 78),
(530, 'MERKEZ', 78),
(531, 'OVACIK', 78),
(532, 'SAFRANBOLU', 78),
(533, 'YENİCE', 78),
(534, 'AYRANCI', 70),
(535, 'BAŞYAYLA', 70),
(536, 'ERMENEK', 70),
(537, 'KAZIMKARABEKİR', 70),
(538, 'MERKEZ', 70),
(539, 'SARIVELİLER', 70),
(540, 'AKYAKA', 36),
(541, 'ARPAÇAY', 36),
(542, 'DİGOR', 36),
(543, 'KAĞIZMAN', 36),
(544, 'MERKEZ', 36),
(545, 'SARIKAMIŞ', 36),
(546, 'SELİM', 36),
(547, 'SUSUZ', 36),
(548, 'ABANA', 37),
(549, 'AĞLI', 37),
(550, 'ARAÇ', 37),
(551, 'AZDAVAY', 37),
(552, 'BOZKURT', 37),
(553, 'CİDE', 37),
(554, 'ÇATALZEYTİN', 37),
(555, 'DADAY', 37),
(556, 'DEVREKANİ', 37),
(557, 'DOĞANYURT', 37),
(558, 'HANÖNÜ', 37),
(559, 'İHSANGAZİ', 37),
(560, 'İNEBOLU', 37),
(561, 'KÜRE', 37),
(562, 'MERKEZ', 37),
(563, 'PINARBAŞI', 37),
(564, 'SEYDİLER', 37),
(565, 'ŞENPAZAR', 37),
(566, 'TAŞKÖPRÜ', 37),
(567, 'TOSYA', 37),
(568, 'AKKIŞLA', 38),
(569, 'BÜNYAN', 38),
(570, 'DEVELİ', 38),
(571, 'FELAHİYE', 38),
(572, 'HACILAR', 38),
(573, 'İNCESU', 38),
(574, 'KOCASİNAN', 38),
(575, 'MELİKGAZİ', 38),
(576, 'ÖZVATAN', 38),
(577, 'PINARBAŞI', 38),
(578, 'SARIOĞLAN', 38),
(579, 'SARIZ', 38),
(580, 'TALAS', 38),
(581, 'TOMARZA', 38),
(582, 'YAHYALI', 38),
(583, 'YEŞİLHİSAR', 38),
(584, 'BAHŞILI', 71),
(585, 'BALIŞEYH', 71),
(586, 'ÇELEBİ', 71),
(587, 'DELİCE', 71),
(588, 'KARAKEÇİLİ', 71),
(589, 'KESKİN', 71),
(590, 'MERKEZ', 71),
(591, 'SULAKYURT', 71),
(592, 'YAHŞİHAN', 71),
(593, 'BABAESKİ', 39),
(594, 'DEMİRKÖY', 39),
(595, 'KOFÇAZ', 39),
(596, 'LÜLEBURGAZ', 39),
(597, 'MERKEZ', 39),
(598, 'PEHLİVANKÖY', 39),
(599, 'PINARHİSAR', 39),
(600, 'VİZE', 39),
(601, 'AKÇAKENT', 40),
(602, 'AKPINAR', 40),
(603, 'BOZTEPE', 40),
(604, 'ÇİÇEKDAĞI', 40),
(605, 'KAMAN', 40),
(606, 'MERKEZ', 40),
(607, 'MUCUR', 40),
(608, 'ELBEYLİ', 79),
(609, 'MERKEZ', 79),
(610, 'MUSABEYLİ', 79),
(611, 'POLATELİ', 79),
(612, 'BAŞİSKELE', 41),
(613, 'ÇAYIROVA', 41),
(614, 'DARICA', 41),
(615, 'DERİNCE', 41),
(616, 'DİLOVASI', 41),
(617, 'GEBZE', 41),
(618, 'GÖLCÜK', 41),
(619, 'İZMİT', 41),
(620, 'KANDIRA', 41),
(621, 'KARAMÜRSEL', 41),
(622, 'KARTEPE', 41),
(623, 'KÖRFEZ', 41),
(624, 'AHIRLI', 42),
(625, 'AKÖREN', 42),
(626, 'AKŞEHİR', 42),
(627, 'ALTINEKİN', 42),
(628, 'BEYŞEHİR', 42),
(629, 'BOZKIR', 42),
(630, 'CİHANBEYLİ', 42),
(631, 'ÇELTİK', 42),
(632, 'ÇUMRA', 42),
(633, 'DERBENT', 42),
(634, 'DEREBUCAK', 42),
(635, 'DOĞANHİSAR', 42),
(636, 'EMİRGAZİ', 42),
(637, 'EREĞLİ', 42),
(638, 'GÜNEYSINIR', 42),
(639, 'HADİM', 42),
(640, 'HALKAPINAR', 42),
(641, 'HÜYÜK', 42),
(642, 'ILGIN', 42),
(643, 'KADINHANI', 42),
(644, 'KARAPINAR', 42),
(645, 'KARATAY', 42),
(646, 'KULU', 42),
(647, 'MERAM', 42),
(648, 'SARAYÖNÜ', 42),
(649, 'SELÇUKLU', 42),
(650, 'SEYDİŞEHİR', 42),
(651, 'TAŞKENT', 42),
(652, 'TUZLUKÇU', 42),
(653, 'YALIHÜYÜK', 42),
(654, 'YUNAK', 42),
(655, 'ALTINTAŞ', 43),
(656, 'ASLANAPA', 43),
(657, 'ÇAVDARHİSAR', 43),
(658, 'DOMANİÇ', 43),
(659, 'DUMLUPINAR', 43),
(660, 'EMET', 43),
(661, 'GEDİZ', 43),
(662, 'HİSARCIK', 43),
(663, 'MERKEZ', 43),
(664, 'PAZARLAR', 43),
(665, 'SİMAV', 43),
(666, 'ŞAPHANE', 43),
(667, 'TAVŞANLI', 43),
(668, 'AKÇADAĞ', 44),
(669, 'ARAPGİR', 44),
(670, 'ARGUVAN', 44),
(671, 'BATTALGAZİ', 44),
(672, 'DARENDE', 44),
(673, 'DOĞANŞEHİR', 44),
(674, 'DOĞANYOL', 44),
(675, 'HEKİMHAN', 44),
(676, 'KALE', 44),
(677, 'KULUNCAK', 44),
(678, 'PÜTÜRGE', 44),
(679, 'YAZIHAN', 44),
(680, 'YEŞİLYURT', 44),
(681, 'AHMETLİ', 45),
(682, 'AKHİSAR', 45),
(683, 'ALAŞEHİR', 45),
(684, 'DEMİRCİ', 45),
(685, 'GÖLMARMARA', 45),
(686, 'GÖRDES', 45),
(687, 'KIRKAĞAÇ', 45),
(688, 'KÖPRÜBAŞI', 45),
(689, 'KULA', 45),
(690, 'SALİHLİ', 45),
(691, 'SARIGÖL', 45),
(692, 'SARUHANLI', 45),
(693, 'SELENDİ', 45),
(694, 'SOMA', 45),
(695, 'ŞEHZADELER', 45),
(696, 'TURGUTLU', 45),
(697, 'YUNUSEMRE', 45),
(698, 'ARTUKLU', 47),
(699, 'DARGEÇİT', 47),
(700, 'DERİK', 47),
(701, 'KIZILTEPE', 47),
(702, 'MAZIDAĞI', 47),
(703, 'MİDYAT', 47),
(704, 'NUSAYBİN', 47),
(705, 'ÖMERLİ', 47),
(706, 'SAVUR', 47),
(707, 'YEŞİLLİ', 47),
(708, 'AKDENİZ', 33),
(709, 'ANAMUR', 33),
(710, 'AYDINCIK', 33),
(711, 'BOZYAZI', 33),
(712, 'ÇAMLIYAYLA', 33),
(713, 'ERDEMLİ', 33),
(714, 'GÜLNAR', 33),
(715, 'MEZİTLİ', 33),
(716, 'MUT', 33),
(717, 'SİLİFKE', 33),
(718, 'TARSUS', 33),
(719, 'TOROSLAR', 33),
(720, 'YENİŞEHİR', 33),
(721, 'BODRUM', 48),
(722, 'DALAMAN', 48),
(723, 'DATÇA', 48),
(724, 'FETHİYE', 48),
(725, 'KAVAKLIDERE', 48),
(726, 'KÖYCEĞİZ', 48),
(727, 'MARMARİS', 48),
(728, 'MENTEŞE', 48),
(729, 'MİLAS', 48),
(730, 'ORTACA', 48),
(731, 'SEYDİKEMER', 48),
(732, 'ULA', 48),
(733, 'YATAĞAN', 48),
(734, 'BULANIK', 49),
(735, 'HASKÖY', 49),
(736, 'KORKUT', 49),
(737, 'MALAZGİRT', 49),
(738, 'MERKEZ', 49),
(739, 'VARTO', 49),
(740, 'ACIGÖL', 50),
(741, 'AVANOS', 50),
(742, 'DERİNKUYU', 50),
(743, 'GÜLŞEHİR', 50),
(744, 'HACIBEKTAŞ', 50),
(745, 'KOZAKLI', 50),
(746, 'MERKEZ', 50),
(747, 'ÜRGÜP', 50),
(748, 'ALTUNHİSAR', 51),
(749, 'BOR', 51),
(750, 'ÇAMARDI', 51),
(751, 'ÇİFTLİK', 51),
(752, 'MERKEZ', 51),
(753, 'ULUKIŞLA', 51),
(754, 'AKKUŞ', 52),
(755, 'ALTINORDU', 52),
(756, 'AYBASTI', 52),
(757, 'ÇAMAŞ', 52),
(758, 'ÇATALPINAR', 52),
(759, 'ÇAYBAŞI', 52),
(760, 'FATSA', 52),
(761, 'GÖLKÖY', 52),
(762, 'GÜLYALI', 52),
(763, 'GÜRGENTEPE', 52),
(764, 'İKİZCE', 52),
(765, 'KABADÜZ', 52),
(766, 'KABATAŞ', 52),
(767, 'KORGAN', 52),
(768, 'KUMRU', 52),
(769, 'MESUDİYE', 52),
(770, 'PERŞEMBE', 52),
(771, 'ULUBEY', 52),
(772, 'ÜNYE', 52),
(773, 'BAHÇE', 80),
(774, 'DÜZİÇİ', 80),
(775, 'HASANBEYLİ', 80),
(776, 'KADİRLİ', 80),
(777, 'MERKEZ', 80),
(778, 'SUMBAS', 80),
(779, 'TOPRAKKALE', 80),
(780, 'ARDEŞEN', 53),
(781, 'ÇAMLIHEMŞİN', 53),
(782, 'ÇAYELİ', 53),
(783, 'DEREPAZARI', 53),
(784, 'FINDIKLI', 53),
(785, 'GÜNEYSU', 53),
(786, 'HEMŞİN', 53),
(787, 'İKİZDERE', 53),
(788, 'İYİDERE', 53),
(789, 'KALKANDERE', 53),
(790, 'MERKEZ', 53),
(791, 'PAZAR', 53),
(792, 'ADAPAZARI', 54),
(793, 'AKYAZI', 54),
(794, 'ARİFİYE', 54),
(795, 'ERENLER', 54),
(796, 'FERİZLİ', 54),
(797, 'GEYVE', 54),
(798, 'HENDEK', 54),
(799, 'KARAPÜRÇEK', 54),
(800, 'KARASU', 54),
(801, 'KAYNARCA', 54),
(802, 'KOCAALİ', 54),
(803, 'PAMUKOVA', 54),
(804, 'SAPANCA', 54),
(805, 'SERDİVAN', 54),
(806, 'SÖĞÜTLÜ', 54),
(807, 'TARAKLI', 54),
(808, '19 MAYIS', 55),
(809, 'ALAÇAM', 55),
(810, 'ASARCIK', 55),
(811, 'ATAKUM', 55),
(812, 'AYVACIK', 55),
(813, 'BAFRA', 55),
(814, 'CANİK', 55),
(815, 'ÇARŞAMBA', 55),
(816, 'HAVZA', 55),
(817, 'İLKADIM', 55),
(818, 'KAVAK', 55),
(819, 'LADİK', 55),
(820, 'SALIPAZARI', 55),
(821, 'TEKKEKÖY', 55),
(822, 'TERME', 55),
(823, 'VEZİRKÖPRÜ', 55),
(824, 'YAKAKENT', 55),
(825, 'BAYKAN', 56),
(826, 'ERUH', 56),
(827, 'KURTALAN', 56),
(828, 'MERKEZ', 56),
(829, 'PERVARİ', 56),
(830, 'ŞİRVAN', 56),
(831, 'TİLLO', 56),
(832, 'AYANCIK', 57),
(833, 'BOYABAT', 57),
(834, 'DİKMEN', 57),
(835, 'DURAĞAN', 57),
(836, 'ERFELEK', 57),
(837, 'GERZE', 57),
(838, 'MERKEZ', 57),
(839, 'SARAYDÜZÜ', 57),
(840, 'TÜRKELİ', 57),
(841, 'AKINCILAR', 58),
(842, 'ALTINYAYLA', 58),
(843, 'DİVRİĞİ', 58),
(844, 'DOĞANŞAR', 58),
(845, 'GEMEREK', 58),
(846, 'GÖLOVA', 58),
(847, 'GÜRÜN', 58),
(848, 'HAFİK', 58),
(849, 'İMRANLI', 58),
(850, 'KANGAL', 58),
(851, 'KOYULHİSAR', 58),
(852, 'MERKEZ', 58),
(853, 'SUŞEHRİ', 58),
(854, 'ŞARKIŞLA', 58),
(855, 'ULAŞ', 58),
(856, 'YILDIZELİ', 58),
(857, 'ZARA', 58),
(858, 'AKÇAKALE', 63),
(859, 'BİRECİK', 63),
(860, 'BOZOVA', 63),
(861, 'CEYLANPINAR', 63),
(862, 'EYYÜBİYE', 63),
(863, 'HALFETİ', 63),
(864, 'HALİLİYE', 63),
(865, 'HARRAN', 63),
(866, 'HİLVAN', 63),
(867, 'KARAKÖPRÜ', 63),
(868, 'SİVEREK', 63),
(869, 'SURUÇ', 63),
(870, 'VİRANŞEHİR', 63),
(871, 'BEYTÜŞŞEBAP', 73),
(872, 'CİZRE', 73),
(873, 'GÜÇLÜKONAK', 73),
(874, 'İDİL', 73),
(875, 'MERKEZ', 73),
(876, 'SİLOPİ', 73),
(877, 'ULUDERE', 73),
(878, 'ÇERKEZKÖY', 59),
(879, 'ÇORLU', 59),
(880, 'ERGENE', 59),
(881, 'HAYRABOLU', 59),
(882, 'KAPAKLI', 59),
(883, 'MALKARA', 59),
(884, 'MARMARAEREĞLİSİ', 59),
(885, 'MURATLI', 59),
(886, 'SARAY', 59),
(887, 'SÜLEYMANPAŞA', 59),
(888, 'ŞARKÖY', 59),
(889, 'ALMUS', 60),
(890, 'ARTOVA', 60),
(891, 'BAŞÇİFTLİK', 60),
(892, 'ERBAA', 60),
(893, 'MERKEZ', 60),
(894, 'NİKSAR', 60),
(895, 'PAZAR', 60),
(896, 'REŞADİYE', 60),
(897, 'SULUSARAY', 60),
(898, 'TURHAL', 60),
(899, 'YEŞİLYURT', 60),
(900, 'ZİLE', 60),
(901, 'AKÇAABAT', 61),
(902, 'ARAKLI', 61),
(903, 'ARSİN', 61),
(904, 'BEŞİKDÜZÜ', 61),
(905, 'ÇARŞIBAŞI', 61),
(906, 'ÇAYKARA', 61),
(907, 'DERNEKPAZARI', 61),
(908, 'DÜZKÖY', 61),
(909, 'HAYRAT', 61),
(910, 'KÖPRÜBAŞI', 61),
(911, 'MAÇKA', 61),
(912, 'OF', 61),
(913, 'ORTAHİSAR', 61),
(914, 'SÜRMENE', 61),
(915, 'ŞALPAZARI', 61),
(916, 'TONYA', 61),
(917, 'VAKFIKEBİR', 61),
(918, 'YOMRA', 61),
(919, 'ÇEMİŞGEZEK', 62),
(920, 'HOZAT', 62),
(921, 'MAZGİRT', 62),
(922, 'MERKEZ', 62),
(923, 'NAZIMİYE', 62),
(924, 'OVACIK', 62),
(925, 'PERTEK', 62),
(926, 'PÜLÜMÜR', 62),
(927, 'BANAZ', 64),
(928, 'EŞME', 64),
(929, 'KARAHALLI', 64),
(930, 'MERKEZ', 64),
(931, 'SİVASLI', 64),
(932, 'ULUBEY', 64),
(933, 'BAHÇESARAY', 65),
(934, 'BAŞKALE', 65),
(935, 'ÇALDIRAN', 65),
(936, 'ÇATAK', 65),
(937, 'EDREMİT', 65),
(938, 'ERCİŞ', 65),
(939, 'GEVAŞ', 65),
(940, 'GÜRPINAR', 65),
(941, 'İPEKYOLU', 65),
(942, 'MURADİYE', 65),
(943, 'ÖZALP', 65),
(944, 'SARAY', 65),
(945, 'TUŞBA', 65),
(946, 'ALTINOVA', 77),
(947, 'ARMUTLU', 77),
(948, 'ÇINARCIK', 77),
(949, 'ÇİFTLİKKÖY', 77),
(950, 'MERKEZ', 77),
(951, 'TERMAL', 77),
(952, 'AKDAĞMADENİ', 66),
(953, 'AYDINCIK', 66),
(954, 'BOĞAZLIYAN', 66),
(955, 'ÇANDIR', 66),
(956, 'ÇAYIRALAN', 66),
(957, 'ÇEKEREK', 66),
(958, 'KADIŞEHRİ', 66),
(959, 'MERKEZ', 66),
(960, 'SARAYKENT', 66),
(961, 'SARIKAYA', 66),
(962, 'SORGUN', 66),
(963, 'ŞEFAATLİ', 66),
(964, 'YENİFAKILI', 66),
(965, 'YERKÖY', 66),
(966, 'ALAPLI', 67),
(967, 'ÇAYCUMA', 67),
(968, 'DEVREK', 67),
(969, 'EREĞLİ', 67),
(970, 'GÖKÇEBEY', 67),
(971, 'KİLİMLİ', 67),
(972, 'KOZLU', 67),
(973, 'MERKEZ', 67);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

CREATE TABLE `iller` (
  `il_id` int(11) NOT NULL,
  `il_ad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`il_id`, `il_ad`) VALUES
(1, 'ADANA'),
(2, 'ADIYAMAN'),
(3, 'AFYON'),
(4, 'AĞRI'),
(5, 'AMASYA'),
(6, 'ANKARA'),
(7, 'ANTALYA'),
(8, 'ARTVİN'),
(9, 'AYDIN'),
(10, 'BALIKESİR'),
(11, 'BİLECİK'),
(12, 'BİNGÖL'),
(13, 'BİTLİS'),
(14, 'BOLU'),
(15, 'BURDUR'),
(16, 'BURSA'),
(17, 'ÇANAKKALE'),
(18, 'ÇANKIRI'),
(19, 'ÇORUM'),
(20, 'DENİZLİ'),
(21, 'DİYARBAKIR'),
(22, 'EDİRNE'),
(23, 'ELAZIĞ'),
(24, 'ERZİNCAN'),
(25, 'ERZURUM'),
(26, 'ESKİŞEHİR'),
(27, 'GAZİANTEP'),
(28, 'GİRESUN'),
(29, 'GÜMÜŞHANE'),
(30, 'HAKKARİ'),
(31, 'HATAY'),
(32, 'ISPARTA'),
(33, 'İÇEL'),
(34, 'İSTANBUL'),
(35, 'İZMİR'),
(36, 'KARS'),
(37, 'KASTAMONU'),
(38, 'KAYSERİ'),
(39, 'KIRKLARELİ'),
(40, 'KIRŞEHİR'),
(41, 'KOCAELİ'),
(42, 'KONYA'),
(43, 'KÜTAHYA'),
(44, 'MALATYA'),
(45, 'MANİSA'),
(46, 'KAHRAMANMARAŞ'),
(47, 'MARDİN'),
(48, 'MUĞLA'),
(49, 'MUŞ'),
(50, 'NEVŞEHİR'),
(51, 'NİĞDE'),
(52, 'ORDU'),
(53, 'RİZE'),
(54, 'SAKARYA'),
(55, 'SAMSUN'),
(56, 'SİİRT'),
(57, 'SİNOP'),
(58, 'SİVAS'),
(59, 'TEKİRDAĞ'),
(60, 'TOKAT'),
(61, 'TRABZON'),
(62, 'TUNCELİ'),
(63, 'ŞANLIURFA'),
(64, 'UŞAK'),
(65, 'VAN'),
(66, 'YOZGAT'),
(67, 'ZONGULDAK'),
(68, 'AKSARAY'),
(69, 'BAYBURT'),
(70, 'KARAMAN'),
(71, 'KIRIKKALE'),
(72, 'BATMAN'),
(73, 'ŞIRNAK'),
(74, 'BARTIN'),
(75, 'ARDAHAN'),
(76, 'IĞDIR'),
(77, 'YALOVA'),
(78, 'KARABÜK'),
(79, 'KİLİS'),
(80, 'OSMANİYE'),
(81, 'DÜZCE');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(250) NOT NULL,
  `kategori_ust` int(2) NOT NULL,
  `kategori_icon` varchar(100) NOT NULL,
  `kategori_seourl` varchar(250) NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_icon`, `kategori_seourl`, `kategori_sira`, `kategori_durum`) VALUES
(1, 'Ayakkabı', 0, '', 'ayakkabi', 1, '1'),
(2, 'Gömlek', 0, '', 'gomlek', 2, '1'),
(3, 'T-shirt', 0, '', 't-shirt', 3, '1'),
(4, 'Pantolon', 0, '', 'pantolon', 4, '1'),
(5, 'Şapka', 0, '', 'sapka', 5, '1');

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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` varchar(50) NOT NULL,
  `menu_ad` varchar(100) NOT NULL,
  `menu_detay` text NOT NULL,
  `menu_url` varchar(250) NOT NULL,
  `menu_sira` int(3) NOT NULL,
  `menu_durum` enum('0','1') NOT NULL,
  `menu_seourl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(1, '0', 'Hakkımızda', '<p>Hakkımızda</p>\r\n', 'hakkimizda.php', 1, '1', 'hakkimizda'),
(2, '0', 'Iletişim', '<p>Yok</p>\r\n', 'iletisim.php', 2, '1', 'iletisim'),
(3, '0', 'Gizlilik Koşulları', '<h2 style=\"font-style:italic\">&nbsp;</h2>\r\n\r\n<p>NDA&nbsp;İngilizce&nbsp;non-disclosure agreement&nbsp;kelimelerinin baş harflerinden oluşmuş,&nbsp;T&uuml;rk&ccedil;eye&nbsp;kabaca &quot;Gizlilik anlaşması&quot; olarak &ccedil;evrilebilecek&nbsp;hukuki&nbsp;bir&nbsp;terimdir.</p>\r\n\r\n<p>Bir gizlilik anlaşması, en az iki taraf arasında akdedilir. Bu t&uuml;r anlaşmalar, bir ilişki sebebi ile taraflardan birinin ticari ya da mesleki sırlarının diğerine verilmesi gerektiğinde yapılır. &Ouml;rneğin bir yazılım firmasının bir m&uuml;şterisine yapacağı&nbsp;yazılım&nbsp;sebebi ile &ouml;ğreneceği &quot;kamuya a&ccedil;ık olmayan bilgileri&quot; başkaları ile paylaşmamasını sağlar. NDA&#39;lar &ouml;zel ya da&nbsp;t&uuml;zel&nbsp;kişiler arasında akdedilebilir. Kimi &ouml;zel durumlarda bu anlaşmanın ihlali, yani&nbsp;firmaya&nbsp;&ouml;zel bilgilerin &uuml;&ccedil;&uuml;nc&uuml; partilerle paylaşılması durumunda uygulanacak cezai&nbsp;yaptırımlar&nbsp;bulunmaktadır.</p>\r\n\r\n<p>Diğer bir kullanımı da, bir &uuml;reticinin&nbsp;patentle&nbsp;korunmakla birlikte kullanıcıya vereceği ve &uuml;r&uuml;n&uuml;n kullanılabilmesi i&ccedil;in gerekli bazı yayımlanmamış bilgileri vermeden &ouml;nce imzalanan t&uuml;r&uuml;d&uuml;r. Bu t&uuml;r anlaşmalar &ccedil;ok zaman bir&nbsp;&uuml;cret&nbsp;karşılığı imzalanır.</p>\r\n', '', 4, '1', 'gizlilik-kosullari'),
(8, '0', 'Kategoriler', '<p>Kategori</p>\r\n', 'kategoriler.php', 3, '1', 'kategoriler'),
(15, '0', 'Mesafeli Satış Sözleşmesi', '<p>Bu sayfada yer alan mesafeli satış s&ouml;zleşmesi tamamen &ouml;rnek olması i&ccedil;in eklenmiştir. Maddeler sekt&ouml;re g&ouml;re değişiklik g&ouml;sterilebilir. Mesafeli satış S&ouml;zleşmesi i&ccedil;eriğini firmanıza g&ouml;re d&uuml;zenleyerek sitenize eklemelisiniz. &Ouml;rnek s&ouml;zleşme i&ccedil;eriğinden site sahibi sorumludur, Firmamızın &ouml;rnek s&ouml;zleşmelerin eklenmesinden kaynaklı herhangi bir y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; bulunmamaktadır.<br />\r\nS&ouml;zleşmeleri &nbsp;İ&ccedil;erik Y&ouml;netimi &nbsp;&gt;&gt; &nbsp;Sayfalar b&ouml;l&uuml;m&uuml;nden d&uuml;zenleyebilirsiniz. Sayfalar b&ouml;l&uuml;m&uuml; ile ilgili hazırladığımız yardım sayfası i&ccedil;in&nbsp;buraya tıklayınız.</p>\r\n\r\n<p>**&Ouml;RNEKTİR. KULLANMADAN &Ouml;NCE KENDİ SİTENİZE UYGUN BİR ŞEKİLDE D&Uuml;ZENLEYİNİZ**</p>\r\n\r\n<p>MESAFELİ SATIŞ S&Ouml;ZLEŞMESİ</p>\r\n\r\n<p>1.TARAFLAR</p>\r\n\r\n<p>İşbu S&ouml;zleşme aşağıdaki taraflar arasında aşağıda belirtilen h&uuml;k&uuml;m ve şartlar &ccedil;er&ccedil;evesinde imzalanmıştır.</p>\r\n\r\n<p>&lsquo;ALICI&rsquo; ; (s&ouml;zleşmede bundan sonra &quot;ALICI&quot; olarak anılacaktır)</p>\r\n\r\n<p>AD- SOYAD:<br />\r\nADRES:</p>\r\n\r\n<p>&lsquo;SATICI&rsquo; ; (s&ouml;zleşmede bundan sonra &quot;SATICI&quot; olarak anılacaktır)</p>\r\n\r\n<p>AD- SOYAD:<br />\r\nADRES:</p>\r\n\r\n<p>İş bu s&ouml;zleşmeyi kabul etmekle ALICI, s&ouml;zleşme konusu siparişi onayladığı takdirde sipariş konusu bedeli ve varsa kargo &uuml;creti, vergi gibi belirtilen ek &uuml;cretleri &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; altına gireceğini ve bu konuda bilgilendirildiğini peşinen kabul eder.</p>\r\n\r\n<p>2.TANIMLAR</p>\r\n\r\n<p>İşbu s&ouml;zleşmenin uygulanmasında ve yorumlanmasında aşağıda yazılı terimler karşılarındaki yazılı a&ccedil;ıklamaları ifade edeceklerdir.</p>\r\n\r\n<p>BAKAN : G&uuml;mr&uuml;k ve Ticaret Bakanı&rsquo;nı,</p>\r\n\r\n<p>BAKANLIK : G&uuml;mr&uuml;k ve Ticaret Bakanlığı&rsquo;nı,</p>\r\n\r\n<p>KANUN : 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;u,</p>\r\n\r\n<p>Y&Ouml;NETMELİK : Mesafeli S&ouml;zleşmeler Y&ouml;netmeliği&rsquo;ni (RG:27.11.2014/29188)</p>\r\n\r\n<p>HİZMET : Bir &uuml;cret veya menfaat karşılığında yapılan ya da yapılması taahh&uuml;t edilen mal sağlama dışındaki her t&uuml;rl&uuml; t&uuml;ketici işleminin konusunu ,</p>\r\n\r\n<p>SATICI : Ticari veya mesleki faaliyetleri kapsamında t&uuml;keticiye mal sunan veya mal sunan adına veya hesabına hareket eden şirketi,</p>\r\n\r\n<p>ALICI : Bir mal veya hizmeti ticari veya mesleki olmayan ama&ccedil;larla edinen, kullanan veya yararlanan ger&ccedil;ek ya da t&uuml;zel kişiyi,</p>\r\n\r\n<p>SİTE : SATICI&rsquo;ya ait internet sitesini,</p>\r\n\r\n<p>SİPARİŞ VEREN: Bir mal veya hizmeti SATICI&rsquo;ya ait internet sitesi &uuml;zerinden talep eden ger&ccedil;ek ya da t&uuml;zel kişiyi,</p>\r\n\r\n<p>TARAFLAR : SATICI ve ALICI&rsquo;yı,</p>\r\n\r\n<p>S&Ouml;ZLEŞME : SATICI ve ALICI arasında akdedilen işbu s&ouml;zleşmeyi,</p>\r\n\r\n<p>MAL : Alışverişe konu olan taşınır eşyayı ve elektronik ortamda kullanılmak &uuml;zere hazırlanan yazılım, ses, g&ouml;r&uuml;nt&uuml; ve benzeri gayri maddi malları ifade eder.</p>\r\n\r\n<p>3.KONU</p>\r\n\r\n<p>İşbu S&ouml;zleşme, ALICI&rsquo;nın, SATICI&rsquo;ya ait internet sitesi &uuml;zerinden elektronik ortamda siparişini verdiği aşağıda nitelikleri ve satış fiyatı belirtilen &uuml;r&uuml;n&uuml;n satışı ve teslimi ile ilgili olarak 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun ve Mesafeli S&ouml;zleşmelere Dair Y&ouml;netmelik h&uuml;k&uuml;mleri gereğince tarafların hak ve y&uuml;k&uuml;ml&uuml;l&uuml;klerini d&uuml;zenler.</p>\r\n\r\n<p>Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir. S&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>4. SATICI BİLGİLERİ</p>\r\n\r\n<p>&Uuml;nvanı<br />\r\nAdres<br />\r\nTelefon<br />\r\nFaks<br />\r\nEposta</p>\r\n\r\n<p>5. ALICI BİLGİLERİ</p>\r\n\r\n<p>Teslim edilecek kişi<br />\r\nTeslimat Adresi<br />\r\nTelefon<br />\r\nFaks<br />\r\nEposta/kullanıcı adı</p>\r\n\r\n<p>6. SİPARİŞ VEREN KİŞİ BİLGİLERİ</p>\r\n\r\n<p>Ad/Soyad/Unvan</p>\r\n\r\n<p>Adres<br />\r\nTelefon<br />\r\nFaks<br />\r\nEposta/kullanıcı adı</p>\r\n\r\n<p>7. S&Ouml;ZLEŞME KONUSU &Uuml;R&Uuml;N/&Uuml;R&Uuml;NLER BİLGİLERİ</p>\r\n\r\n<p>1.&nbsp;Malın /&Uuml;r&uuml;n/&Uuml;r&uuml;nlerin/ Hizmetin temel &ouml;zelliklerini (t&uuml;r&uuml;, miktarı, marka/modeli, rengi, adedi) SATICI&rsquo;ya ait internet sitesinde yayınlanmaktadır. Satıcı tarafından kampanya d&uuml;zenlenmiş ise ilgili &uuml;r&uuml;n&uuml;n temel &ouml;zelliklerini kampanya s&uuml;resince inceleyebilirsiniz. Kampanya tarihine kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>7.2.&nbsp;Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir. S&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>7.3.&nbsp;S&ouml;zleşme konusu mal ya da hizmetin t&uuml;m vergiler d&acirc;hil satış fiyatı aşağıda g&ouml;sterilmiştir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&Uuml;r&uuml;n A&ccedil;ıklaması</p>\r\n\r\n<p>Adet</p>\r\n\r\n<p>Birim Fiyatı</p>\r\n\r\n<p>Ara Toplam<br />\r\n(KDV Dahil)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kargo Tutarı</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Toplam :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&Ouml;deme Şekli ve Planı</p>\r\n\r\n<p>Teslimat Adresi</p>\r\n\r\n<p>Teslim Edilecek kişi</p>\r\n\r\n<p>Fatura Adresi</p>\r\n\r\n<p>Sipariş Tarihi</p>\r\n\r\n<p>Teslimat tarihi</p>\r\n\r\n<p>Teslim şekli</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>7.4.&nbsp; &Uuml;r&uuml;n sevkiyat masrafı olan kargo &uuml;creti ALICI tarafından &ouml;denecektir.</p>\r\n\r\n<p>8. FATURA BİLGİLERİ</p>\r\n\r\n<p>Ad/Soyad/Unvan</p>\r\n\r\n<p>Adres<br />\r\nTelefon<br />\r\nFaks<br />\r\nEposta/kullanıcı adı<br />\r\nFatura teslim :Fatura sipariş teslimatı sırasında fatura adresine sipariş ile birlikte&nbsp;<br />\r\nteslim edilecektir.</p>\r\n\r\n<p>9. GENEL H&Uuml;K&Uuml;MLER</p>\r\n\r\n<p>9.1.&nbsp;ALICI, SATICI&rsquo;ya ait internet sitesinde s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n temel nitelikleri, satış fiyatı ve &ouml;deme şekli ile teslimata ilişkin &ouml;n bilgileri okuyup, bilgi sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini kabul, beyan ve taahh&uuml;t eder. ALICI&rsquo;nın; &Ouml;n Bilgilendirmeyi elektronik ortamda teyit etmesi, mesafeli satış s&ouml;zleşmesinin kurulmasından evvel, SATICI tarafından ALICI&#39; ya verilmesi gereken adresi, siparişi verilen &uuml;r&uuml;nlere ait temel &ouml;zellikleri, &uuml;r&uuml;nlerin vergiler d&acirc;hil fiyatını, &ouml;deme ve teslimat bilgilerini de doğru ve eksiksiz olarak edindiğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>9.2.&nbsp;S&ouml;zleşme konusu her bir &uuml;r&uuml;n, 30 g&uuml;nl&uuml;k yasal s&uuml;reyi aşmamak kaydı ile ALICI&#39; nın yerleşim yeri uzaklığına bağlı olarak internet sitesindeki &ouml;n bilgiler kısmında belirtilen s&uuml;re zarfında ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa teslim edilir. Bu s&uuml;re i&ccedil;inde &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya teslim edilememesi durumunda, ALICI&rsquo;nın s&ouml;zleşmeyi feshetme hakkı saklıdır.</p>\r\n\r\n<p>9.3.&nbsp;SATICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri, kullanım kılavuzları işin gereği olan bilgi ve belgeler ile teslim etmeyi, her t&uuml;rl&uuml; ayıptan ar&icirc; olarak yasal mevzuat gereklerine g&ouml;re sağlam, standartlara uygun bir şekilde işi doğruluk ve d&uuml;r&uuml;stl&uuml;k esasları d&acirc;hilinde ifa etmeyi, hizmet kalitesini koruyup y&uuml;kseltmeyi, işin ifası sırasında gerekli dikkat ve &ouml;zeni g&ouml;stermeyi, ihtiyat ve &ouml;ng&ouml;r&uuml; ile hareket etmeyi kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>9.4.&nbsp;SATICI, s&ouml;zleşmeden doğan ifa y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n s&uuml;resi dolmadan ALICI&rsquo;yı bilgilendirmek ve a&ccedil;ık&ccedil;a onayını almak suretiyle eşit kalite ve fiyatta farklı bir &uuml;r&uuml;n tedarik edebilir.</p>\r\n\r\n<p>9.5.&nbsp;SATICI, sipariş konusu &uuml;r&uuml;n veya hizmetin yerine getirilmesinin imk&acirc;nsızlaşması halinde s&ouml;zleşme konusu y&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getiremezse, bu durumu, &ouml;ğrendiği tarihten itibaren 3 g&uuml;n i&ccedil;inde yazılı olarak t&uuml;keticiye bildireceğini, 14 g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde toplam bedeli ALICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.&nbsp;</p>\r\n\r\n<p>9.6.&nbsp;ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n teslimatı i&ccedil;in işbu S&ouml;zleşme&rsquo;yi elektronik ortamda teyit edeceğini, herhangi bir nedenle s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin &ouml;denmemesi ve/veya banka kayıtlarında iptal edilmesi halinde, SATICI&rsquo;nın s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; teslim y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n sona ereceğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>9.7.&nbsp;ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa tesliminden sonra ALICI&#39;ya ait kredi kartının yetkisiz kişilerce haksız kullanılması sonucunda s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin ilgili banka veya finans kuruluşu tarafından SATICI&#39;ya &ouml;denmemesi halinde, ALICI S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; 3 g&uuml;n i&ccedil;erisinde nakliye gideri SATICI&rsquo;ya ait olacak şekilde SATICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>9.8.&nbsp;SATICI, tarafların iradesi dışında gelişen, &ouml;nceden &ouml;ng&ouml;r&uuml;lemeyen ve tarafların bor&ccedil;larını yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması gibi m&uuml;cbir sebepler halleri nedeni ile s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; s&uuml;resi i&ccedil;inde teslim edemez ise, durumu ALICI&#39;ya bildireceğini kabul, beyan ve taahh&uuml;t eder. ALICI da siparişin iptal edilmesini, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n varsa emsali ile değiştirilmesini ve/veya teslimat s&uuml;resinin engelleyici durumun ortadan kalkmasına kadar ertelenmesini SATICI&rsquo;dan talep etme hakkını haizdir. ALICI tarafından siparişin iptal edilmesi halinde ALICI&rsquo;nın nakit ile yaptığı &ouml;demelerde, &uuml;r&uuml;n tutarı 14 g&uuml;n i&ccedil;inde kendisine nakden ve defaten &ouml;denir. ALICI&rsquo;nın kredi kartı ile yaptığı &ouml;demelerde ise, &uuml;r&uuml;n tutarı, siparişin ALICI tarafından iptal edilmesinden sonra 14 g&uuml;n i&ccedil;erisinde ilgili bankaya iade edilir. ALICI, SATICI tarafından kredi kartına iade edilen tutarın banka tarafından ALICI hesabına yansıtılmasına ilişkin ortalama s&uuml;recin 2 ile 3 haftayı bulabileceğini, bu tutarın bankaya iadesinden sonra ALICI&rsquo;nın hesaplarına yansıması halinin tamamen banka işlem s&uuml;reci ile ilgili olduğundan, ALICI, olası gecikmeler i&ccedil;in SATICI&rsquo;yı sorumlu tutamayacağını kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>9.9.&nbsp;SATICININ, ALICI tarafından siteye kayıt formunda belirtilen veya daha sonra kendisi tarafından g&uuml;ncellenen adresi, e-posta adresi, sabit ve mobil telefon hatları ve diğer iletişim bilgileri &uuml;zerinden mektup, e-posta, SMS, telefon g&ouml;r&uuml;şmesi ve diğer yollarla iletişim, pazarlama, bildirim ve diğer ama&ccedil;larla ALICI&rsquo;ya ulaşma hakkı bulunmaktadır. ALICI, işbu s&ouml;zleşmeyi kabul etmekle SATICI&rsquo;nın kendisine y&ouml;nelik yukarıda belirtilen iletişim faaliyetlerinde bulunabileceğini kabul ve beyan etmektedir.</p>\r\n\r\n<p>9.10.&nbsp;ALICI, s&ouml;zleşme konusu mal/hizmeti teslim almadan &ouml;nce muayene edecek; ezik, kırık, ambalajı yırtılmış vb. hasarlı ve ayıplı mal/hizmeti kargo şirketinden teslim almayacaktır. Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu kabul edilecektir. Teslimden sonra mal/hizmetin &ouml;zenle korunması borcu, ALICI&rsquo;ya aittir. Cayma hakkı kullanılacaksa mal/hizmet kullanılmamalıdır. Fatura iade edilmelidir.</p>\r\n\r\n<p>9.11.&nbsp;ALICI ile sipariş esnasında kullanılan kredi kartı hamilinin aynı kişi olmaması veya &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya tesliminden evvel, siparişte kullanılan kredi kartına ilişkin g&uuml;venlik a&ccedil;ığı tespit edilmesi halinde, SATICI, kredi kartı hamiline ilişkin kimlik ve iletişim bilgilerini, siparişte kullanılan kredi kartının bir &ouml;nceki aya ait ekstresini yahut kart hamilinin bankasından kredi kartının kendisine ait olduğuna ilişkin yazıyı ibraz etmesini ALICI&rsquo;dan talep edebilir. ALICI&rsquo;nın talebe konu bilgi/belgeleri temin etmesine kadar ge&ccedil;ecek s&uuml;rede sipariş dondurulacak olup, mezkur taleplerin 24 saat i&ccedil;erisinde karşılanmaması halinde ise SATICI, siparişi iptal etme hakkını haizdir.</p>\r\n\r\n<p>9.12.&nbsp;ALICI, SATICI&rsquo;ya ait internet sitesine &uuml;ye olurken verdiği kişisel ve diğer sair bilgilerin ger&ccedil;eğe uygun olduğunu, SATICI&rsquo;nın bu bilgilerin ger&ccedil;eğe aykırılığı nedeniyle uğrayacağı t&uuml;m zararları, SATICI&rsquo;nın ilk bildirimi &uuml;zerine derhal, nakden ve defaten tazmin edeceğini beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>9.13.&nbsp;ALICI, SATICI&rsquo;ya ait internet sitesini kullanırken yasal mevzuat h&uuml;k&uuml;mlerine riayet etmeyi ve bunları ihlal etmemeyi baştan kabul ve taahh&uuml;t eder. Aksi takdirde, doğacak t&uuml;m hukuki ve cezai y&uuml;k&uuml;ml&uuml;l&uuml;kler tamamen ve m&uuml;nhasıran ALICI&rsquo;yı bağlayacaktır.</p>\r\n\r\n<p>9.14.&nbsp;ALICI, SATICI&rsquo;ya ait internet sitesini hi&ccedil;bir şekilde kamu d&uuml;zenini bozucu, genel ahlaka aykırı, başkalarını rahatsız ve taciz edici şekilde, yasalara aykırı bir ama&ccedil; i&ccedil;in, başkalarının maddi ve manevi haklarına tecav&uuml;z edecek şekilde kullanamaz. Ayrıca, &uuml;ye başkalarının hizmetleri kullanmasını &ouml;nleyici veya zorlaştırıcı faaliyet (spam, virus, truva atı, vb.) işlemlerde bulunamaz.</p>\r\n\r\n<p>9.15.&nbsp;SATICI&rsquo;ya ait internet sitesinin &uuml;zerinden, SATICI&rsquo;nın kendi kontrol&uuml;nde olmayan ve/veya başkaca &uuml;&ccedil;&uuml;nc&uuml; kişilerin sahip olduğu ve/veya işlettiği başka web sitelerine ve/veya başka i&ccedil;eriklere link verilebilir. Bu linkler ALICI&rsquo;ya y&ouml;nlenme kolaylığı sağlamak amacıyla konmuş olup herhangi bir web sitesini veya o siteyi işleten kişiyi desteklememekte ve Link verilen web sitesinin i&ccedil;erdiği bilgilere y&ouml;nelik herhangi bir garanti niteliği taşımamaktadır.</p>\r\n\r\n<p>9.16.&nbsp;İşbu s&ouml;zleşme i&ccedil;erisinde sayılan maddelerden bir ya da birka&ccedil;ını ihlal eden &uuml;ye işbu ihlal nedeniyle cezai ve hukuki olarak şahsen sorumlu olup, SATICI&rsquo;yı bu ihlallerin hukuki ve cezai sonu&ccedil;larından ari tutacaktır. Ayrıca; işbu ihlal nedeniyle, olayın hukuk alanına intikal ettirilmesi halinde, SATICI&rsquo;nın &uuml;yeye karşı &uuml;yelik s&ouml;zleşmesine uyulmamasından dolayı tazminat talebinde bulunma hakkı saklıdır.</p>\r\n\r\n<p>10. CAYMA HAKKI</p>\r\n\r\n<p>10.1.&nbsp;ALICI; mesafeli s&ouml;zleşmenin mal satışına ilişkin olması durumunda, &uuml;r&uuml;n&uuml;n kendisine veya g&ouml;sterdiği adresteki kişi/kuruluşa teslim tarihinden itibaren 14 (on d&ouml;rt) g&uuml;n i&ccedil;erisinde, SATICI&rsquo;ya bildirmek şartıyla hi&ccedil;bir hukuki ve cezai sorumluluk &uuml;stlenmeksizin ve hi&ccedil;bir gerek&ccedil;e g&ouml;stermeksizin malı reddederek s&ouml;zleşmeden cayma hakkını kullanabilir. Hizmet sunumuna ilişkin mesafeli s&ouml;zleşmelerde ise, bu s&uuml;re s&ouml;zleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile hizmetin ifasına başlanan hizmet s&ouml;zleşmelerinde cayma hakkı kullanılamaz. Cayma hakkının kullanımından kaynaklanan masraflar SATICI&rsquo; ya aittir.&nbsp;ALICI, iş bu s&ouml;zleşmeyi kabul etmekle, cayma hakkı konusunda bilgilendirildiğini peşinen kabul eder.</p>\r\n\r\n<p>10.2.&nbsp;Cayma hakkının kullanılması i&ccedil;in 14 (ond&ouml;rt) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde SATICI&#39; ya iadeli taahh&uuml;tl&uuml; posta, faks veya eposta ile yazılı bildirimde bulunulması ve &uuml;r&uuml;n&uuml;n işbu s&ouml;zleşmede d&uuml;zenlenen &quot;Cayma Hakkı Kullanılamayacak &Uuml;r&uuml;nler&quot; h&uuml;k&uuml;mleri &ccedil;er&ccedil;evesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde,&nbsp;</p>\r\n\r\n<p>a)&nbsp;3. kişiye veya ALICI&rsquo; ya teslim edilen &uuml;r&uuml;n&uuml;n faturası, (İade edilmek istenen &uuml;r&uuml;n&uuml;n faturası kurumsal ise, iade ederken kurumun d&uuml;zenlemiş olduğu iade faturası ile birlikte g&ouml;nderilmesi gerekmektedir. Faturası kurumlar adına d&uuml;zenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.)</p>\r\n\r\n<p>b)&nbsp;İade formu,</p>\r\n\r\n<p>c)&nbsp;İade edilecek &uuml;r&uuml;nlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.</p>\r\n\r\n<p>d)&nbsp;SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en ge&ccedil; 10 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde toplam bedeli ve ALICI&rsquo;yı bor&ccedil; altına sokan belgeleri ALICI&rsquo; ya iade etmek ve 20 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde malı iade almakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n\r\n<p>e)&nbsp;ALICI&rsquo; nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imk&acirc;nsızlaşırsa ALICI kusuru oranında SATICI&rsquo; nın zararlarını tazmin etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Ancak cayma hakkı s&uuml;resi i&ccedil;inde malın veya &uuml;r&uuml;n&uuml;n usul&uuml;ne uygun kullanılması sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir.&nbsp;</p>\r\n\r\n<p>f)&nbsp;Cayma hakkının kullanılması nedeniyle SATICI tarafından d&uuml;zenlenen kampanya limit tutarının altına d&uuml;ş&uuml;lmesi halinde kampanya kapsamında faydalanılan indirim miktarı iptal edilir.</p>\r\n\r\n<p>11. CAYMA HAKKI KULLANILAMAYACAK &Uuml;R&Uuml;NLER</p>\r\n\r\n<p>ALICI&rsquo;nın isteği veya a&ccedil;ık&ccedil;a kişisel ihtiya&ccedil;ları doğrultusunda hazırlanan ve geri g&ouml;nderilmeye m&uuml;sait olmayan, i&ccedil; giyim alt par&ccedil;aları, mayo ve bikini altları, makyaj malzemeleri, tek kullanımlık &uuml;r&uuml;nler, &ccedil;abuk bozulma tehlikesi olan veya son kullanma tarihi ge&ccedil;me ihtimali olan mallar, ALICI&rsquo;ya teslim edilmesinin ardından ALICI tarafından ambalajı a&ccedil;ıldığı takdirde iade edilmesi sağlık ve hijyen a&ccedil;ısından uygun olmayan &uuml;r&uuml;nler, teslim edildikten sonra başka &uuml;r&uuml;nlerle karışan vedoğası gereği ayrıştırılması m&uuml;mk&uuml;n olmayan &uuml;r&uuml;nler, Abonelik s&ouml;zleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi s&uuml;reli yayınlara ilişkin mallar, Elektronik ortamda anında ifa edilen hizmetler veya t&uuml;keticiye anında teslim edilen&nbsp;gayrimaddi&nbsp;mallar,ile ses veya g&ouml;r&uuml;nt&uuml; kayıtlarının, kitap, dijital i&ccedil;erik, yazılım programlarının, veri kaydedebilme ve veri depolama cihazlarının, bilgisayar sarf malzemelerinin, ambalajının ALICI tarafından a&ccedil;ılmış olması halinde iadesi Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir. Ayrıca Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile ifasına başlanan hizmetlere ilişkin cayma hakkının kullanılması daY&ouml;netmelik gereği m&uuml;mk&uuml;n değildir.</p>\r\n\r\n<p>Kozmetik ve kişisel bakım &uuml;r&uuml;nleri, i&ccedil; giyim &uuml;r&uuml;nleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve kasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi i&ccedil;in ambalajlarının a&ccedil;ılmamış, denenmemiş, bozulmamış ve kullanılmamış olmaları gerekir.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>12. TEMERR&Uuml;T HALİ VE HUKUKİ SONU&Ccedil;LARI</p>\r\n\r\n<p>ALICI, &ouml;deme işlemlerini kredi kartı ile yaptığı durumda temerr&uuml;de d&uuml;şt&uuml;ğ&uuml; takdirde, kart sahibi banka ile arasındaki kredi kartı s&ouml;zleşmesi &ccedil;er&ccedil;evesinde faiz &ouml;deyeceğini ve bankaya karşı sorumlu olacağını kabul, beyan ve taahh&uuml;t eder. Bu durumda ilgili banka hukuki yollara başvurabilir; doğacak masrafları ve vek&acirc;let &uuml;cretini ALICI&rsquo;dan talep edebilir ve her koşulda ALICI&rsquo;nın borcundan dolayı temerr&uuml;de d&uuml;şmesi halinde, ALICI, borcun gecikmeli ifasından dolayı SATICI&rsquo;nın uğradığı zarar ve ziyanını &ouml;deyeceğini kabul, beyan ve taahh&uuml;t eder</p>\r\n\r\n<p>13. YETKİLİ MAHKEME</p>\r\n\r\n<p>İşbu s&ouml;zleşmeden doğan uyuşmazlıklarda şikayet ve itirazlar,&nbsp;aşağıdaki kanunda belirtilen parasal sınırlar d&acirc;hilinde t&uuml;keticinin yerleşim yerinin bulunduğu veya t&uuml;ketici işleminin yapıldığı yerdeki t&uuml;ketici sorunları hakem heyetine veya t&uuml;ketici mahkemesine yapılacaktır. Parasal sınıra ilişkin bilgiler aşağıdadır:&nbsp;</p>\r\n\r\n<p>28/05/2014 tarihinden itibaren ge&ccedil;erli olmak &uuml;zere:</p>\r\n\r\n<p>a)&nbsp;6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;un 68. Maddesi gereği değeri 2.000,00 (ikibin) TL&rsquo;nin altında olan uyuşmazlıklarda il&ccedil;e t&uuml;ketici hakem heyetlerine,</p>\r\n\r\n<p>b) Değeri 3.000,00(&uuml;&ccedil;bin)TL&rsquo; nin altında bulunan uyuşmazlıklarda il t&uuml;ketici hakem heyetlerine,</p>\r\n\r\n<p>c) B&uuml;y&uuml;kşehir stat&uuml;s&uuml;nde bulunan illerde ise değeri 2.000,00 (ikibin) TL ile 3.000,00(&uuml;&ccedil;bin)TL&rsquo; arasındaki uyuşmazlıklarda il t&uuml;ketici hakem heyetlerine başvuru yapılmaktadır.<br />\r\nİşbu S&ouml;zleşme ticari ama&ccedil;larla yapılmaktadır.</p>\r\n\r\n<p>14. Y&Uuml;R&Uuml;RL&Uuml;K</p>\r\n\r\n<p>ALICI, Site &uuml;zerinden verdiği siparişe ait &ouml;demeyi ger&ccedil;ekleştirdiğinde işbu s&ouml;zleşmenin t&uuml;m şartlarını kabul etmiş sayılır. SATICI, siparişin ger&ccedil;ekleşmesi &ouml;ncesinde işbu s&ouml;zleşmenin sitede ALICI tarafından okunup kabul edildiğine dair onay alacak şekilde gerekli yazılımsal d&uuml;zenlemeleri yapmakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n\r\n<p>SATICI:</p>\r\n\r\n<p>ALICI:</p>\r\n\r\n<p>TARİH:</p>\r\n', '', 20, '1', 'mesafeli-satis-sozlesmesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_adet` int(3) NOT NULL,
  `sepet_zaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `siparis_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `siparis_no` int(11) DEFAULT NULL,
  `kullanici_id` int(11) NOT NULL,
  `siparis_toplam` float(9,2) NOT NULL,
  `siparis_tip` varchar(50) NOT NULL,
  `siparis_banka` varchar(50) DEFAULT NULL,
  `siparis_odeme` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_zaman`, `siparis_no`, `kullanici_id`, `siparis_toplam`, `siparis_tip`, `siparis_banka`, `siparis_odeme`) VALUES
(200002, '2023-01-28 00:28:21', NULL, 1, 1427.00, 'Banka Havalesi', 'A Banka', ''),
(200003, '2023-01-28 14:19:49', NULL, 1, 1099.00, 'Banka Havalesi', 'A Banka', ''),
(200004, '2023-01-28 14:26:02', NULL, 1, 100.00, 'Banka Havalesi', 'B Banka', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

CREATE TABLE `siparis_detay` (
  `siparisdetay_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_adet` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_detay`
--

INSERT INTO `siparis_detay` (`siparisdetay_id`, `siparis_id`, `urun_id`, `urun_fiyat`, `urun_adet`) VALUES
(1, 200002, 10, 427.00, 1),
(2, 200002, 5, 1000.00, 1),
(3, 200003, 11, 999.00, 1),
(4, 200003, 5, 100.00, 1),
(5, 200004, 5, 100.00, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(250) NOT NULL,
  `slider_resimyol` varchar(250) NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_link` varchar(250) NOT NULL,
  `slider_durum` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_sira`, `slider_link`, `slider_durum`) VALUES
(4, 'Ceket', 'dimg/slider/230123020735slide-1.jpg', 1, 'ceket.php', '1'),
(6, 'Mont', 'dimg/slider/270123034047slide-2.jpg', 2, 'mont.php', '1'),
(7, 'Ayakkabı', 'dimg/slider/230123031351slide-3.jpg', 3, 'ayakkabi.php', '1'),
(8, 'Yüzük', 'dimg/slider/230123021619slide-4.jpg', 4, 'yuzuk.php', '1'),
(9, 'Boş Slider', 'dimg/slider/230123214623930x387.png', 5, 'index.php', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_zaman` date NOT NULL DEFAULT current_timestamp(),
  `urun_ad` varchar(250) NOT NULL,
  `urun_seourl` varchar(250) NOT NULL,
  `urun_detay` text NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_keyboard` varchar(250) NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_durum` enum('0','1') NOT NULL DEFAULT '1',
  `urun_onecikar` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `kategori_id`, `urun_zaman`, `urun_ad`, `urun_seourl`, `urun_detay`, `urun_fiyat`, `urun_keyboard`, `urun_stok`, `urun_durum`, `urun_onecikar`) VALUES
(1, 1, '2023-01-25', 'Nike 42 Numara Erkek Ayakkabı', 'nike-42-numara-erkek-ayakkabi', '<p>Lorem Ipsum , basım ve dizgi end&uuml;strisinin basit bir şekilde sahte metnidir. Lorem Ipsum, bilinmeyen bir yazıcının bir yazı tipi kadırgasını alıp onu bir tip numune kitabı yapmak i&ccedil;in karıştırdığı 1500&#39;lerden beri end&uuml;strinin standart sahte metni olmuştur. Sadece beş y&uuml;z yıl hayatta kalmakla kalmadı, aynı zamanda esasen değişmeden elektronik dizgiye sı&ccedil;radı. 1960&#39;larda Lorem Ipsum pasajları i&ccedil;eren Letraset yapraklarının yayınlanmasıyla ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımlarıyla pop&uuml;ler oldu.</p>\r\n', 100.00, 'ayakkabi', 10, '1', '1'),
(2, 1, '2023-01-25', 'Adidas Ayakkabı', 'adidas-ayakkabi', '<p>&Ccedil;ok iyi ayakkabı</p>\r\n', 1000.00, 'adidas,ayakkabi', 3, '1', '1'),
(5, 4, '2023-01-26', 'Yırtık Mavi Pantolon', 'yirtik-mavi-pantolon', '<p>harika pantolon</p>\r\n', 100.00, 'pantolon', 0, '1', '1'),
(6, 4, '2023-01-26', 'Mavi', 'mavi', '<p>pantolon123</p>\r\n', 427.00, 'pantolon', 10, '1', '0'),
(7, 3, '2023-01-26', 'Tshirt', 'tshirt', '<p>tshirt</p>\r\n', 100.00, 'tshirt', 10, '1', '0'),
(9, 1, '2023-01-26', 'Adidas Ayakkabı2', 'adidas-ayakkabi2', '<p>İyidir iyi</p>\r\n', 100.00, 'ayakkabi', 10, '1', '1'),
(10, 1, '2023-01-26', 'deneme', 'deneme', '', 427.00, 'ayakkabi', 5651, '0', '1'),
(11, 5, '2023-01-26', 'Fötür Şapka', 'fotur-sapka', '<p>M&uuml;kemmel</p>\r\n', 999.00, 'şapka', 3, '1', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunresmi`
--

CREATE TABLE `urunresmi` (
  `urunresmi_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urunresmi_adres` varchar(250) NOT NULL,
  `urunresmi_zaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunresmi`
--

INSERT INTO `urunresmi` (`urunresmi_id`, `urun_id`, `urunresmi_adres`, `urunresmi_zaman`) VALUES
(16, 1, 'dimg/urun/2901231850424_org_zoom.jpg', '2023-01-29 17:50:42'),
(17, 1, 'dimg/urun/2901231852451_org_zoom.jpg', '2023-01-29 17:52:45'),
(18, 2, 'dimg/urun/2901231854472_org_zoom.jpg', '2023-01-29 17:54:47'),
(19, 2, 'dimg/urun/2901231854471_org_zoom (1).jpg', '2023-01-29 17:54:47'),
(20, 9, 'dimg/urun/2901231854561_org_zoom (1).jpg', '2023-01-29 17:54:56'),
(21, 9, 'dimg/urun/2901231854562_org_zoom.jpg', '2023-01-29 17:54:56'),
(22, 10, 'dimg/urun/2901231855062_org_zoom.jpg', '2023-01-29 17:55:06'),
(23, 10, 'dimg/urun/2901231855061_org_zoom (1).jpg', '2023-01-29 17:55:06'),
(24, 7, 'dimg/urun/290123185525sample-3.jpg', '2023-01-29 17:55:25'),
(25, 5, 'dimg/urun/290123185833mavi3.jpg', '2023-01-29 17:58:33'),
(26, 5, 'dimg/urun/290123185833mavi2.jpg', '2023-01-29 17:58:33'),
(27, 5, 'dimg/urun/290123185833mavi1.jpg', '2023-01-29 17:58:33'),
(28, 6, 'dimg/urun/290123185852mavi1.jpg', '2023-01-29 17:58:52'),
(29, 6, 'dimg/urun/290123185852mavi2.jpg', '2023-01-29 17:58:52'),
(32, 11, 'dimg/urun/290123190107şapka2.jpg', '2023-01-29 18:01:07'),
(33, 11, 'dimg/urun/290123190107şapka.jpg', '2023-01-29 18:01:07'),
(35, 7, 'dimg/urun/290123190220demo-img.jpg', '2023-01-29 18:02:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_detay` text NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorum_durum` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `kullanici_id`, `urun_id`, `yorum_detay`, `yorum_zaman`, `yorum_durum`) VALUES
(1, 2, 5, 'Neden stokta yok?', '2023-01-26 02:10:00', '1'),
(2, 2, 5, 'Neden stokta yok?', '2023-01-26 02:10:41', '0'),
(3, 2, 5, 'Neden stokta yok?', '2023-01-26 02:10:48', '0'),
(4, 2, 5, 'dede', '2023-01-26 02:12:42', '0'),
(5, 2, 5, 'asdas', '2023-01-26 02:13:59', '0'),
(6, 2, 5, 'asdas', '2023-01-26 02:14:00', '1'),
(7, 2, 5, 'asdas', '2023-01-26 02:14:55', '0'),
(8, 2, 5, 'sdfs', '2023-01-26 02:15:26', '0'),
(9, 2, 5, 'asdas', '2023-01-26 02:15:48', '0'),
(10, 2, 5, 'asdas', '2023-01-26 02:16:23', '0'),
(11, 2, 5, 'sfds', '2023-01-26 02:17:19', '1'),
(12, 2, 5, '12. Yorum', '2023-01-26 02:31:30', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `banka`
--
ALTER TABLE `banka`
  ADD PRIMARY KEY (`banka_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `ilceler`
--
ALTER TABLE `ilceler`
  ADD PRIMARY KEY (`ilce_id`);

--
-- Tablo için indeksler `iller`
--
ALTER TABLE `iller`
  ADD PRIMARY KEY (`il_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `siparis_detay`
--
ALTER TABLE `siparis_detay`
  ADD PRIMARY KEY (`siparisdetay_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `urunresmi`
--
ALTER TABLE `urunresmi`
  ADD PRIMARY KEY (`urunresmi_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banka`
--
ALTER TABLE `banka`
  MODIFY `banka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `ilceler`
--
ALTER TABLE `ilceler`
  MODIFY `ilce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=974;

--
-- Tablo için AUTO_INCREMENT değeri `iller`
--
ALTER TABLE `iller`
  MODIFY `il_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200005;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_detay`
--
ALTER TABLE `siparis_detay`
  MODIFY `siparisdetay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `urunresmi`
--
ALTER TABLE `urunresmi`
  MODIFY `urunresmi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
