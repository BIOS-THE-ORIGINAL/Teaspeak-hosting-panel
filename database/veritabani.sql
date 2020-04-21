-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 02 Nis 2018, 15:24:49
-- Sunucu sürümü: 10.1.32-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tgntrcom_panel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `authme`
--

CREATE TABLE `authme` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `lastlogin` varchar(50) DEFAULT NULL,
  `x` varchar(50) DEFAULT NULL,
  `y` varchar(50) DEFAULT NULL,
  `z` varchar(50) DEFAULT NULL,
  `world` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `yetki` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `adres` longtext,
  `port` longtext,
  `odeme_tarihi` longtext,
  `durum` longtext,
  `sifre` longtext,
  `kullanici_adi` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`adres`, `port`, `odeme_tarihi`, `durum`, `sifre`, `kullanici_adi`) VALUES
('', '541', '14/06/2017', '1', '123456', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `adi` varchar(50) DEFAULT NULL,
  `aciklama` longtext,
  `bilgi1` longtext,
  `bilgi2` longtext,
  `bilgi3` longtext,
  `fiyat` varchar(50) DEFAULT NULL,
  `durum` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`adi`, `aciklama`, `bilgi1`, `bilgi2`, `bilgi3`, `fiyat`, `durum`) VALUES
('Teamspeak 3 128 SLOT', '', '', '', '', '5', '1'),
('Teamspeak 3 512 SLOT', '', '', '', '', '10', '1'),
('Teamspeak 3 1024 SLOT', '', '', '', '', '15', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ipler`
--

CREATE TABLE `ipler` (
  `ip` longtext,
  `durum` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ipler`
--

INSERT INTO `ipler` (`ip`, `durum`) VALUES
('127.0.0.1', '1'),
('217.182.237.223', '1'),
('37.59.161.97', '1'),
('193.75.16.21', '1'),
('5.135.296.40', '1'),
('95.173.178.214', '1'),
('46.45.127.28', '1'),
('212.176.95.12', '1'),
('31.210.221.45', '1'),
('185.152.95.43', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konusma`
--

CREATE TABLE `konusma` (
  `gonderen` varchar(50) DEFAULT NULL,
  `alan` varchar(50) DEFAULT NULL,
  `icerik` longtext,
  `durum` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `konusma`
--

INSERT INTO `konusma` (`gonderen`, `alan`, `icerik`, `durum`) VALUES
('admin', 'admin', '<div class=\"msg_cont right\">\n<img src=\"0\" width=\"50\" height=\"50\" alt=\"User\">\n<ul>\n<li>\n<h3>0 0:</h3> \n<span>Panel-im</span>\n</li>\n<li>aaa</li>\n</ul>    \n</div> <div class=\"msg_cont right\">\n<img src=\"0\" width=\"50\" height=\"50\" alt=\"User\">\n<ul>\n<li>\n<h3>0 0:</h3> \n<span>Panel-im</span>\n</li>\n<li>ss\r\n</li>\n</ul>    \n</div> ', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL DEFAULT '0',
  `parola` varchar(50) NOT NULL DEFAULT '0',
  `eposta` varchar(50) NOT NULL DEFAULT '0',
  `tc` varchar(50) NOT NULL DEFAULT '0',
  `dtarih` varchar(50) NOT NULL DEFAULT '0',
  `kurum` varchar(50) NOT NULL DEFAULT '0',
  `ys` varchar(50) NOT NULL DEFAULT '0',
  `website` varchar(50) NOT NULL DEFAULT '0',
  `fb` varchar(50) NOT NULL DEFAULT '0',
  `tt` varchar(50) NOT NULL DEFAULT '0',
  `skype` varchar(50) NOT NULL DEFAULT '0',
  `avatar` varchar(50) NOT NULL DEFAULT '0',
  `yetki` varchar(50) NOT NULL DEFAULT '0',
  `isim` varchar(50) NOT NULL DEFAULT '0',
  `soyisim` varchar(50) NOT NULL DEFAULT '0',
  `tarih` varchar(50) NOT NULL DEFAULT '0',
  `online` varchar(50) NOT NULL DEFAULT '0',
  `cinsiyet` varchar(50) NOT NULL DEFAULT '0',
  `paramone_y` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `parola`, `eposta`, `tc`, `dtarih`, `kurum`, `ys`, `website`, `fb`, `tt`, `skype`, `avatar`, `yetki`, `isim`, `soyisim`, `tarih`, `online`, `cinsiyet`, `paramone_y`) VALUES
(1, 'admin', '999a6a8be3b549294600931735f880f2', '0', '2121', '231', '1241', '23412', 'wf', 'wef', 'WF', 'WFD', 'images/no-img.jpg', '1', '0', '0', '0', '1', '1', '10'),
(45495, 'deneme', '994fd428a06b4523a6ff23d50ab17b07', 'deneme@gmail.com', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'deneme', 'deneme', '18-03-27', '0', '', '0'),
(349584, 'namidegerhasan', '8c31c2198e9590bf196053080df4691f', 'mynemishsn@gmail.com', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 'hasan', 'atilan', '18-03-26', '1', '1', '0'),
(448949, 'brotype', '999a6a8be3b549294600931735f880f2', 'sadsasda@gg.com', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'bro', 'selam', '18-03-27', '0', '0', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesaj_id` int(11) NOT NULL,
  `mesaj_gonderen` varchar(50) DEFAULT NULL,
  `mesaj_mail` varchar(50) DEFAULT NULL,
  `mesaj_ip` varchar(50) DEFAULT NULL,
  `mesaj_tarih` varchar(50) DEFAULT NULL,
  `mesaj_konu` varchar(50) DEFAULT NULL,
  `mesaj_icerik` longtext,
  `mesaj_durum` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `durum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `proxy`
--

CREATE TABLE `proxy` (
  `id` int(11) NOT NULL,
  `alanid` text,
  `ip` text,
  `port` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `proxy`
--

INSERT INTO `proxy` (`id`, `alanid`, `ip`, `port`) VALUES
(1, '4141', '127.0.0.1', '2222');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `hizmet_numarasi` int(11) NOT NULL,
  `hizmet_durum` varchar(50) DEFAULT NULL,
  `hizmet_bitis` varchar(50) DEFAULT NULL,
  `hizmet_baslangic` varchar(50) DEFAULT NULL,
  `hizmet_sahibi` varchar(50) DEFAULT NULL,
  `hizmet_adi` varchar(50) DEFAULT NULL,
  `hizmet_ip` varchar(50) DEFAULT NULL,
  `hizmet_sifre` varchar(50) DEFAULT NULL,
  `hizmet_bilgi` varchar(50) DEFAULT NULL,
  `hizmet_suresi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`hizmet_numarasi`, `hizmet_durum`, `hizmet_bitis`, `hizmet_baslangic`, `hizmet_sahibi`, `hizmet_adi`, `hizmet_ip`, `hizmet_sifre`, `hizmet_bilgi`, `hizmet_suresi`) VALUES
(23347, '1', '27.04.2018', '28.03.2018', 'admin', 'Teamspeak 3 128 SLOT', '37.59.161.97', 'qweqweqwe', 'qweqweqweqwe', '30'),
(89550, '0', '', '', 'namidegerhasan', 'Teamspeak 3 1024 SLOT', '127.0.0.1', 'sdasda', 'sdasdasda', '30'),
(99831, '1', '27.04.2018', '28.03.2018', 'namidegerhasan', 'Teamspeak 3 512 SLOT', '127.0.0.1', 'sdasda', 'sdasda', '30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ticketler`
--

CREATE TABLE `ticketler` (
  `ticket_id` int(11) NOT NULL,
  `ticket_gonderen` varchar(50) DEFAULT NULL,
  `ticket_oncelik` varchar(50) DEFAULT '0',
  `ticket_konu` varchar(200) DEFAULT '0',
  `ticket_hizmet` varchar(50) DEFAULT '0',
  `ticket_icerik` longtext,
  `ticket_icerik2` longtext,
  `ticket_durum` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ticketler`
--

INSERT INTO `ticketler` (`ticket_id`, `ticket_gonderen`, `ticket_oncelik`, `ticket_konu`, `ticket_hizmet`, `ticket_icerik`, `ticket_icerik2`, `ticket_durum`) VALUES
(39114, 'namidegerhasan', 'Orta', 'sasad', 'Yok', 'GÃ¶nderen: <b>namidegerhasan</b><br>sadsda', NULL, '0'),
(56691, 'admin', 'Orta', 'deneme', 'Yok', 'GÃ¶nderen: <b>admin</b><br>deneme', NULL, '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tsdns`
--

CREATE TABLE `tsdns` (
  `id` int(11) NOT NULL,
  `alanid` int(11) NOT NULL,
  `dns` text NOT NULL,
  `ip` text NOT NULL,
  `port` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tsdns`
--

INSERT INTO `tsdns` (`id`, `alanid`, `dns`, `ip`, `port`) VALUES
(1294, 3160, 'fÄ±lgÅŸ', '91.134.15.210', '3454'),
(1295, 3162, 'L.O.L Gamings', '91.134.15.210', '403'),
(1296, 3168, 'just', '91.134.15.210', '3728'),
(1297, 3172, 'privatesunucum', '91.134.15.210', '3473'),
(1298, 3180, 'Begnetwork.', '91.134.15.210', '1562'),
(1299, 3181, 'VATANIN MALÄ°KANESÄ°', '91.134.15.210', '408'),
(1300, 3180, 'Begnetwork', '91.134.15.210', '1562'),
(1301, 3180, 'Begnetwork', '91.134.15.210', '1562'),
(1302, 3182, 'Gaming', '91.134.15.210', '1619'),
(1303, 3188, 'Kankalar', '91.134.15.210', '3920'),
(1304, 3199, 'R3SID3NC3', '91.134.15.210', '1773'),
(1305, 3206, 'DK CLAN', '91.134.15.210', '3589'),
(1306, 3206, 'dkclan', '91.134.15.210', '3589'),
(1307, 3205, 'FANTASTIC', '91.134.15.210', '2465'),
(1308, 3205, 'fantastÄ±c', '91.134.15.210', '2465'),
(1309, 3205, 'fantastÄ±c', '91.134.15.210', '2465'),
(1310, 3205, 'fantastÄ±c', '91.134.15.210', '2465'),
(1311, 3218, 'rEÄ°SOR0AD', '91.134.15.210', '2365'),
(1312, 3220, 'eim.ts3.center', '91.134.15.210', '534'),
(1313, 3159, 'tr', '91.134.15.210', '88'),
(1314, 3252, 'KelimeiSehadet', '91.134.15.210', '1626'),
(1315, 3254, 'TRColdConcon', '91.134.15.210', '3963'),
(1316, 3254, 'ColdConcon', '91.134.15.210', '3963'),
(1317, 3176, 'Ts1.csduragi.com', '91.134.15.210', '1579'),
(1318, 3261, 'StarGaming', '91.134.15.210', '3985'),
(1319, 3261, 'star', '91.134.15.210', '3985'),
(1320, 3251, 'CanSimsek', '91.134.15.210', '1278'),
(1321, 3263, 'arkadaÅŸlar', '91.134.15.210', '962'),
(1322, 3265, 'enemyforces', '91.134.15.210', '3400'),
(1323, 3268, 'eremkar', '91.134.15.210', '3363'),
(1324, 3268, 'eremkar', '91.134.15.210', '3363'),
(1325, 3265, 'cÃ¼bbeli', '91.134.15.210', '3400'),
(1326, 3274, 'pb', '91.134.15.210', '1927'),
(1327, 3274, 'PB', '91.134.15.210', '1927'),
(1328, 3274, 'PB', '91.134.15.210', '1927'),
(1329, 3274, 'PB', '91.134.15.210', '1927'),
(1330, 3277, 'PAYITAH GAMÄ°NG', '91.134.15.210', '1047'),
(1331, 3274, 'Pro', '91.134.15.210', '1927'),
(1332, 3280, 'turkishgaming', '91.134.15.210', '3525'),
(1333, 3284, 'CumaEren', '91.134.15.210', '205'),
(1334, 3249, 'TheKoyGec', '91.134.15.210', '42'),
(1335, 3249, 'dasdsa', '91.134.15.210', '42'),
(1336, 3290, 'Most Value', '91.134.15.210', '2455'),
(1337, 3290, 'mostvalue', '91.134.15.210', '2455'),
(1338, 3296, 'obs', '91.134.15.210', '3257'),
(1339, 3298, 'karapiyade', '91.134.15.210', '1784'),
(1340, 3299, 'sonmezsunucum', '91.134.15.210', '1028'),
(1341, 3300, 'qeqwe', '91.134.15.210', '1566'),
(1342, 3216, 'Gaming', '91.134.15.210', '1130'),
(1343, 3303, 'cenka gaminh', '91.134.15.210', '3351'),
(1344, 3216, 'PowerKing', '91.134.15.210', '1130'),
(1345, 3304, 'lopezesc07', '91.134.15.210', '1308'),
(1346, 3308, 'Emobaba', '91.134.15.210', '3912'),
(1347, 3308, 'DreDNoVa | Gaming', '91.134.15.210', '3912'),
(1348, 3308, 'EmoBEYY', '91.134.15.210', '3912'),
(1349, 3180, 'TheOrdeR', '91.134.15.210', '1562'),
(1350, 3312, 'Murat', '91.134.15.210', '1337'),
(1351, 3312, 'Murat', '91.134.15.210', '1337'),
(1352, 3315, 'Ustailesi', '91.134.15.210', '1280'),
(1353, 3212, 'Killer Gaming', '91.134.15.210', '3314'),
(1354, 3212, 'killergaming', '91.134.15.210', '3314'),
(1355, 3212, 'killergaming', '91.134.15.210', '3314'),
(1356, 3317, 'ts3  Edo', '91.134.15.210', '1707'),
(1357, 3322, 'eÐ¼reÐ²ey!', '91.134.15.210', '1767'),
(1358, 3325, 'HellsNetwork', '91.134.15.210', '742'),
(1359, 3326, 'kapitanpb', '91.134.15.210', '3481'),
(1360, 3330, 'THEBEST', '91.134.15.210', '3860'),
(1361, 3330, 'thebest', '91.134.15.210', '3860'),
(1362, 3332, 'tonemtr', '91.134.15.210', '3532'),
(1363, 3333, 'shutuo', '91.134.15.210', '2089'),
(1364, 3333, 'shutuo', '91.134.15.210', '2089'),
(1365, 3333, 'shutup', '91.134.15.210', '2089'),
(1366, 3333, 'shutup', '91.134.15.210', '2089'),
(1367, 3335, 'PGT', '91.134.15.210', '414'),
(1368, 3336, 'OzelTs3', '91.134.15.210', '1821'),
(1369, 3339, 'holyspirints.wt.', '91.134.15.210', '1670'),
(1370, 3341, 'Cadde', '91.134.15.210', '550'),
(1371, 3342, 'Tan_Gaming', '91.134.15.210', '1550'),
(1372, 3297, 'MuazzamTutkumuz', '91.134.15.210', '2734'),
(1373, 3344, 'Archer', '91.134.15.210', '2333'),
(1374, 3344, 'thrown', '91.134.15.210', '2333'),
(1375, 3344, 'thrown', '91.134.15.210', '2333'),
(1376, 3308, 'QWE123', '91.134.15.210', '3912'),
(1377, 3270, 'sohbet-muhabbet', '91.134.15.210', '1034'),
(1378, 3255, 'WinnerGamings', '91.134.15.210', '2830'),
(1379, 3355, 'thegaming', '91.134.15.210', '3417'),
(1380, 3233, 'ELTH', '91.134.15.210', '1595'),
(1381, 3308, '5.196.220.115:3912', '91.134.15.210', '3912'),
(1382, 3362, 'Devleti Alem GamÄ±ng', '91.134.15.210', '1055'),
(1383, 3254, 'BtAgar', '91.134.15.210', '3963'),
(1384, 3363, '77jb', '91.134.15.210', '1319'),
(1385, 3194, 'Ã¼lkÃ¼ocaklarÄ±', '91.134.15.210', '2052'),
(1386, 3279, 'Alemdar', '91.134.15.210', '2622'),
(1387, 3368, 'TeamNegro', '91.134.15.210', '2108'),
(1388, 3377, 'Dant.ts3sunucum.net', '91.134.15.210', '1567'),
(1389, 3382, 'AlperGKTRK', '91.134.15.210', '1803'),
(1390, 3388, 'ankagaming', '91.134.15.210', '3735'),
(1391, 3388, 'anka', '91.134.15.210', '3735'),
(1392, 3389, 'DogukanBey', '91.134.15.210', '3972'),
(1393, 3392, 'WolfteamKlan', '91.134.15.210', '2255'),
(1394, 3393, 'ReiS GaminG', '91.134.15.210', '1244'),
(1395, 3302, 'palavra', '91.134.15.210', '2462'),
(1396, 3302, 'Palavragaming', '91.134.15.210', '2462'),
(1397, 3162, 'YarakYiyenMert', '91.134.15.210', '403'),
(1398, 3162, 'yarakmertgaming', '91.134.15.210', '403'),
(1399, 3162, 'yarakmertgaming', '91.134.15.210', '403'),
(1400, 3162, 'yarakmertgaming', '91.134.15.210', '403'),
(1401, 3162, 'yarakmertgaming', '91.134.15.210', '403'),
(1402, 3162, 'Ts34.tekvatan', '91.134.15.210', '403'),
(1403, 3408, 'â„“Ñ”gÑ”Î·âˆ‚Î±ÑÑƒ gÎ±Ð¼Î¹Î·g', '91.134.15.210', '2331'),
(1404, 3408, 'legendary', '91.134.15.210', '2331'),
(1405, 3408, 'legendary', '91.134.15.210', '2331'),
(1406, 3410, 'nighthunters', '91.134.15.210', '38'),
(1407, 3413, 'Hellforce', '91.134.15.210', '871'),
(1408, 3414, 'sadrazamturk', '91.134.15.210', '1227'),
(1409, 3415, 'turkcugaming', '91.134.15.210', '1417'),
(1410, 3314, 'youtube', '91.134.15.210', '2434'),
(1411, 3422, 'cs5.csoyuncu.com', '91.134.15.210', '3988'),
(1412, 3382, 'AlperGKTRK', '91.134.15.210', '1803'),
(1413, 3207, 'UluSevdam', '91.134.15.210', '2894'),
(1414, 3207, 'UluSevdam', '91.134.15.210', '2894'),
(1415, 3430, 'EMIHATIN', '91.134.15.210', '3742'),
(1416, 3430, 'emÄ±hatÄ±nklan', '91.134.15.210', '3742'),
(1417, 3430, 'gamingklanlarts65', '91.134.15.210', '3742'),
(1418, 3431, 'Benim adim', '91.134.15.210', '3073'),
(1419, 3431, 'Q::DQ:WDQWDQWDWddd', '91.134.15.210', '3073'),
(1420, 3435, 'AyanMahzeni', '91.134.15.210', '3104'),
(1421, 3389, 'DogukanBey', '91.134.15.210', '3972'),
(1422, 3443, 'piliuclan', '91.134.15.210', '3767'),
(1423, 3339, 'holyspirints1', '91.134.15.210', '1670'),
(1424, 3457, 'zedoo', '91.134.15.210', '1325'),
(1425, 3458, '5.196.220.115:2570', '91.134.15.210', '2570'),
(1426, 3458, 'ÅžÃ¼heda Gaming', '91.134.15.210', '2570'),
(1427, 3459, 'metrologistics', '91.134.15.210', '1774'),
(1428, 3455, '10', '91.134.15.210', '1120'),
(1429, 3301, 'ts3', '91.134.15.210', '2568'),
(1430, 3465, 'KingBabys', '91.134.15.210', '3012'),
(1431, 3439, 'Gaming', '91.134.15.210', '3654'),
(1432, 3439, 'Grand Gaming RE', '91.134.15.210', '3654'),
(1433, 3439, 'Grand Gaming RE ts3.web.tr', '91.134.15.210', '3654'),
(1434, 3439, 'Grand Gaming RE', '91.134.15.210', '3654'),
(1435, 3462, 'blody gamÄ±ng', '91.134.15.210', '1911'),
(1436, 3468, '5.196.220.115:519', '91.134.15.210', '519'),
(1437, 3472, 'manifestailemiz', '91.134.15.210', '3814'),
(1438, 3469, 'CSZÄ°RVESÄ°', '91.134.15.210', '3209'),
(1439, 3473, 'trgaming', '91.134.15.210', '431'),
(1440, 3473, 'trgaming', '91.134.15.210', '431'),
(1441, 3472, 'manifestwt', '91.134.15.210', '3814'),
(1442, 3437, 'ts3.okeanosjb.com', '91.134.15.210', '2416'),
(1443, 3476, 'AmigoGaming', '91.134.15.210', '1936'),
(1444, 3437, 'OsmanlÄ±Gaming', '91.134.15.210', '2416'),
(1445, 3471, 'Fire Gaming', '91.134.15.210', '2963'),
(1446, 3449, 'JusticeThrone', '91.134.15.210', '1194'),
(1447, 3483, 'Temporary', '91.134.15.210', '2558'),
(1448, 3483, 'Temporary', '91.134.15.210', '2558'),
(1449, 3483, 'Temporary', '91.134.15.210', '2558'),
(1450, 3483, 'Temporary', '91.134.15.210', '2558'),
(1451, 3494, '185.128.113.42', '91.134.15.210', '1689'),
(1452, 3497, 'Ã–lÃ¼mÃ¼neDenk', '91.134.15.210', '371'),
(1453, 3497, 'Ã–lÃ¼meDek', '91.134.15.210', '371'),
(1454, 3498, 'Woolpit', '91.134.15.210', '1172'),
(1455, 3499, 'extremezula|esc', '91.134.15.210', '3546'),
(1456, 3500, 'eskidostlar', '91.134.15.210', '3956'),
(1457, 3500, 'eskÄ±dostlar', '91.134.15.210', '3956'),
(1458, 3166, 'apobey', '91.134.15.210', '3684'),
(1459, 3500, 'eskidostlar', '91.134.15.210', '3956'),
(1460, 3500, 'eskidostlar', '91.134.15.210', '3956'),
(1461, 3500, 'eskidostlar', '91.134.15.210', '3956'),
(1462, 3501, 'yineyeneriz', '91.134.15.210', '124'),
(1463, 3501, 'yineyeneriz', '91.134.15.210', '124'),
(1464, 3500, 'eskidostlar', '91.134.15.210', '3956'),
(1465, 3504, 'aze', '91.134.15.210', '3126'),
(1466, 3506, 'DHT ! {KURUCU}', '91.134.15.210', '3697'),
(1467, 3508, 'Knight', '91.134.15.210', '3259'),
(1468, 3514, 'EnemiesGrave', '91.134.15.210', '540'),
(1469, 3157, 'test', '91.134.15.210', '9987'),
(1470, 3157, 'test2', '5.196.220.115', '9987'),
(1471, 3198, 'Reddawn Gaming', '5.196.220.115', '2563'),
(1472, 3157, 'SADsda', '5.196.220.115', '9987'),
(1473, 3157, 'SADsda', '5.196.220.115', '9987'),
(1474, 3500, 'eskidostlar', '5.196.220.115', '3956'),
(1475, 3500, 'eskÄ±dostlar', '5.196.220.115', '3956'),
(1476, 3157, 'sadsdasda', '5.196.220.115', '9987'),
(1477, 3517, 'AtatÃ¼rk Gaming', '5.196.220.115', '3986'),
(1478, 3518, 'd21', '5.196.220.115', '3244'),
(1479, 3518, 'd21.sinsxd', '5.196.220.115', '3244'),
(1480, 3523, 'asdsad', '5.196.220.115', '3683'),
(1481, 3523, 'adsadad', '5.196.220.115', '3683'),
(1482, 3525, 'sancak', '5.196.220.115', '3746'),
(1483, 3525, 'SancaK', '5.196.220.115', '3746'),
(1484, 3526, 'ht', '5.196.220.115', '1245'),
(1485, 3529, 'kÄ±zÄ±lsancak', '5.196.220.115', '524'),
(1486, 3531, 'rohan', '5.196.220.115', '1837'),
(1487, 3531, 'rohan-esports', '5.196.220.115', '1837'),
(1488, 3531, 'rohan', '5.196.220.115', '1837'),
(1489, 3531, 'rohan-esports', '5.196.220.115', '1837'),
(1490, 3531, 'rohan', '5.196.220.115', '1837'),
(1491, 3531, '5.196.220.115:1837', '5.196.220.115', '1837'),
(1492, 3531, 'rohan-esports', '5.196.220.115', '1837'),
(1493, 3531, 'rohanEsc', '5.196.220.115', '1837'),
(1494, 3534, 'kuba', '5.196.220.115', '3437'),
(1495, 3541, 'Krallar', '5.196.220.115', '476'),
(1496, 3550, 'jandarmaÃ¶zelharekat', '5.196.220.115', '707'),
(1497, 3550, 'azetr', '5.196.220.115', '707'),
(1498, 3555, 'cakiraskeripolisiye', '5.196.220.115', '2517'),
(1499, 3555, 'cakiraskeriye', '5.196.220.115', '2517'),
(1500, 3556, 'AzeTrJOH', '5.196.220.115', '2823'),
(1502, 3532, 'misalisancak', '5.196.220.115', '3404'),
(1501, 3555, 'cakÄ±r', '5.196.220.115', '2517'),
(1503, 3381, 'eÐ¼reÐ²ey!', '5.196.220.115', '344'),
(1504, 3290, 'BooTBrothers', '5.196.220.115', '2455'),
(1505, 3558, 'GAMÄ°NG', '5.196.220.115', '1853'),
(1506, 3558, 'BoZavagar', '5.196.220.115', '1853'),
(1507, 3465, 'YenÄ± Ts3 QÄ±ng  gamÄ±ng', '5.196.220.115', '3012'),
(1508, 3207, 'UluSevdam', '5.196.220.115', '2894'),
(1509, 3235, 'jailciler', '5.196.220.115', '1993'),
(1510, 3512, 'Seyo', '5.196.220.115', '3710'),
(1511, 3461, 'emrebey', '5.196.220.115', '2651'),
(1512, 3461, 'emrebey', '5.196.220.115', '2651'),
(1513, 3468, 'REDCLAN', '5.196.220.115', '519'),
(1514, 3468, 'red.ts3.center', '5.196.220.115', '519'),
(1515, 3572, 'axe', '5.196.220.115', '1201'),
(1516, 3574, 'onurbey', '5.196.220.115', '764'),
(1517, 3573, 'NeosGaminG', '5.196.220.115', '1415'),
(1518, 3575, 'ck', '5.196.220.115', '3789'),
(1519, 3575, 'ck', '5.196.220.115', '3789'),
(1520, 3575, 'ck.ts3.wep.tr', '5.196.220.115', '3789'),
(1521, 3577, 'TCKLOJÄ°STÄ°K', '5.196.220.115', '2087'),
(1522, 3157, 'sadsdasd', '5.196.220.115', '9987'),
(1523, 3157, 'keser', '5.196.220.115', '9987'),
(1524, 3578, 'strongunion', '5.196.220.115', '3241'),
(1525, 3578, 'StrongUnion', '5.196.220.115', '3241'),
(1526, 3580, 'KanuniMT2 ', '5.196.220.115', '228'),
(1527, 3581, 'Caspersunu', '5.196.220.115', '934'),
(1528, 3585, 'hayalprest', '5.196.220.115', '2839'),
(1529, 3589, 'sonerÃ¶fkeli', '5.196.220.115', '3888'),
(1530, 3599, 'Scp', '5.196.220.115', '1737'),
(1531, 3601, 'berkinan', '5.196.220.115', '419'),
(1532, 3600, 'ASQ', '5.196.220.115', '426'),
(1533, 3611, 'kayanyÄ±ldÄ±z', '5.196.220.115', '766'),
(1534, 3613, 'Vatan Gaming', '5.196.220.115', '1731'),
(1535, 3571, '5.196.220.115:2964', '5.196.220.115', '2964'),
(1536, 3571, 'SatÄ±lÄ±kgaming', '5.196.220.115', '2964'),
(1537, 3618, 'God', '5.196.220.115', '158'),
(1538, 3623, 'youtuberamazankaradas', '5.196.220.115', '2458'),
(1539, 3616, 'arda', '5.196.220.115', '573'),
(1540, 3629, 'ck1', '5.196.220.115', '3628'),
(1541, 3628, 'lulucraft', '5.196.220.115', '316'),
(1542, 3627, 'tcbordaharekat', '5.196.220.115', '1813'),
(1543, 3627, 'tcbordaharekat', '5.196.220.115', '1813'),
(1544, 3627, 'tcbordaharekaT', '5.196.220.115', '1813'),
(1545, 3635, 'kral // gaming', '5.196.220.115', '2292'),
(1546, 3636, 'Alone-CounteR', '5.196.220.115', '2761'),
(1547, 3623, 'ramazankaradas', '5.196.220.115', '2458'),
(1548, 3608, 'candar', '5.196.220.115', '136'),
(1549, 3632, 'The|Avengers', '5.196.220.115', '1471'),
(1550, 3632, 'T', '5.196.220.115', '1471'),
(1551, 3632, 'Gaming', '5.196.220.115', '1471'),
(1552, 3641, 'SirinlerEsport', '5.196.220.115', '3440'),
(1553, 3638, 'turkiyegaming', '5.196.220.115', '2047'),
(1554, 3644, 'Cete', '5.196.220.115', '2710'),
(1555, 3643, 'BarFurYÄ±l', '5.196.220.115', '2356'),
(1556, 3647, 'StromArmy', '5.196.220.115', '2228'),
(1557, 3632, '5.196.220.115:1471', '5.196.220.115', '1471'),
(1558, 3651, 'mylance', '5.196.220.115', '2536'),
(1559, 3651, 'tt', '5.196.220.115', '2536'),
(1560, 3649, 'TR GAMER', '5.196.220.115', '2262'),
(1561, 3649, 'TÃœRK OYUNCU', '5.196.220.115', '2262'),
(1562, 3627, 'tcbordaharekaT', '5.196.220.115', '1813'),
(1563, 3662, 'TANRIHuzurunda', '5.196.220.115', '2178'),
(1564, 3662, 'TANRIHuzurunda', '5.196.220.115', '2178'),
(1565, 3609, 'amklar', '5.196.220.115', '1981'),
(1566, 3670, 'hown', '5.196.220.115', '173'),
(1567, 3672, 'Red-brotherspbts3.com', '5.196.220.115', '3994'),
(1568, 3649, 'ts3.trgamer', '5.196.220.115', '2262'),
(1569, 3678, 'gmgltn', '5.196.220.115', '1609'),
(1570, 3683, 'makineesport', '5.196.220.115', '75'),
(1571, 3345, 'ts0.csduragi.com', '5.196.220.115', '1411'),
(1580, 3361, 'ibrahimbey', '5.196.220.115', '1314'),
(1572, 3613, 'Vatan Gaming', '5.196.220.115', '1731'),
(1573, 3613, 'Kadir tetikolu', '5.196.220.115', '1731'),
(1574, 3673, 'Respect', '5.196.220.115', '3315'),
(1575, 3687, 'mod-z', '5.196.220.115', '3072'),
(1576, 3688, 'ehlibeyt', '5.196.220.115', '1494'),
(1577, 3691, 'canakkale', '5.196.220.115', '3400'),
(1578, 3692, 'League Of Legends', '5.196.220.115', '1525'),
(1579, 3691, 'canakkale', '5.196.220.115', '3400'),
(1581, 3633, 'BLOODBOONE', '5.196.220.115', '1974'),
(1582, 3696, 'gelecegehatÄ±ra', '5.196.220.115', '351'),
(1583, 3696, 'GelecegeHatÄ±ra', '5.196.220.115', '351'),
(1584, 3524, 'aim', '5.196.220.115', '1008'),
(1585, 3704, 'Tanatos', '5.196.220.115', '3338'),
(1586, 3524, 'aga', '5.196.220.115', '1008'),
(1587, 3524, 'hey', '5.196.220.115', '1008'),
(1588, 3654, 'manifestailemiz', '5.196.220.115', '3914'),
(1589, 3601, 'combatrygorz', '5.196.220.115', '419'),
(1590, 3524, 'gggggggggggggggggggggg', '5.196.220.115', '1008'),
(1591, 3637, 'marasalbrothers', '5.196.220.115', '1769'),
(1592, 3715, 'marasalailesi', '5.196.220.115', '2075'),
(1593, 3719, 'RekorTakipEtme', '5.196.220.115', '3786'),
(1594, 3716, 'karasakalfun', '5.196.220.115', '894'),
(1595, 3711, ' meraklÄ± oda ', '5.196.220.115', '1996'),
(1596, 3720, 'soulcomander', '5.196.220.115', '3591'),
(1597, 3722, 'muazzamask.ts3.ripa', '5.196.220.115', '1498'),
(1598, 3722, 'muazzamask', '5.196.220.115', '1498'),
(1599, 3724, 'AtesLeOynuyoruz', '5.196.220.115', '382'),
(1600, 3723, 'ateÅŸ', '5.196.220.115', '3368'),
(1601, 3725, 'sayginbeyler', '5.196.220.115', '2151'),
(1602, 3731, 'donboz', '5.196.220.115', '1743'),
(1603, 3736, 'GiveNW', '5.196.220.115', '1442'),
(1604, 3739, 'Medusa Gaming COPY!.', '5.196.220.115', '1530'),
(1605, 3658, 'Bozkurt', '5.196.220.115', '3008'),
(1606, 3742, 'JustWatch Gaming', '5.196.220.115', '2350'),
(1607, 3753, 'Ready2Die', '5.196.220.115', '3139'),
(1608, 3753, 'rustlegacy', '5.196.220.115', '3139'),
(1609, 3710, '[Arkdaslar Gaming]', '5.196.220.115', '1007'),
(1610, 3265, 'enemyforces', '5.196.220.115', '3400'),
(1611, 3712, 'wolfteamTR', '5.196.220.115', '3373'),
(1612, 3712, 'theclipton', '5.196.220.115', '3373'),
(1613, 3763, 'garipcenter', '5.196.220.115', '417'),
(1614, 3763, 'garipcenter', '5.196.220.115', '417'),
(1615, 3766, 'YiÄŸitcan', '5.196.220.115', '1936'),
(1616, 3771, 'crowded', '5.196.220.115', '3728'),
(1617, 3771, 'Crowded', '5.196.220.115', '3728'),
(1618, 3777, 'ts3.sunucu', '5.196.220.115', '695'),
(1619, 3760, 'cottonss', '5.196.220.115', '2562'),
(1620, 3244, 'TarihiBizKoyduk', '5.196.220.115', '1423'),
(1621, 3547, 'easier.', '5.196.220.115', '3050'),
(1622, 3547, 'easier', '5.196.220.115', '3050'),
(1623, 3671, 'ehlidef', '5.196.220.115', '2567'),
(1624, 3317, 'ts3  Edo', '5.196.220.115', '1707'),
(1625, 3613, 'youtube[gk]', '5.196.220.115', '1731'),
(1626, 3613, 'youtube[gk]', '5.196.220.115', '1731'),
(1627, 3784, 'ReedTeen', '5.196.220.115', '2655'),
(1628, 3787, 'LD', '5.196.220.115', '3195'),
(1629, 3298, 'karapiyade', '5.196.220.115', '1784'),
(1630, 3788, '[G-K] Gece KurtlarÄ± Game Server', '5.196.220.115', '2971'),
(1631, 3802, 'gg', '5.196.220.115', '3515'),
(1632, 3181, 'vatan', '5.196.220.115', '408'),
(1633, 3250, 'Reisler', '5.196.220.115', '55'),
(1634, 3250, 'Reisler', '5.196.220.115', '55'),
(1635, 3810, 'nizamÄ±-alem', '5.196.220.115', '1987'),
(1636, 3809, 'yokoluyor', '5.196.220.115', '612'),
(1637, 3817, 'takÄ±lÄ±yoruz', '5.196.220.115', '2450'),
(1638, 3818, 'Miro52', '5.196.220.115', '3957'),
(1639, 3820, 'SARHOSHAYDUT(YiÄŸit Efe Ã–rnek)', '5.196.220.115', '101'),
(1640, 3822, 'Alsancak LoJÄ°stik', '5.196.220.115', '2814'),
(1641, 3818, 'Meyhane', '5.196.220.115', '3957'),
(1642, 3818, 'Meyhane', '5.196.220.115', '3957'),
(1643, 3833, 'csduragi', '5.196.220.115', '3228'),
(1644, 3834, 'DesturGaming', '5.196.220.115', '470'),
(1645, 3792, 'turkiyegaming', '5.196.220.115', '2738'),
(1646, 3839, 'amkahmeti', '5.196.220.115', '2887'),
(1647, 3844, 'yunsav', '5.196.220.115', '3221'),
(1648, 3845, 'SHNESPORT', '5.196.220.115', '1850'),
(1649, 3853, 'CrewMacina', '5.196.220.115', '1741'),
(1650, 3853, 'CrewMacina', '5.196.220.115', '1741'),
(1651, 3850, 'MahkemeMakamÄ±', '5.196.220.115', '1370'),
(1652, 3850, 'MaHkEmEMaKaMI.ts3dns.com', '5.196.220.115', '1370'),
(1653, 3850, 'MahkemeMakats3mÄ±.', '5.196.220.115', '1370'),
(1654, 3855, 'kissyoujailbreak', '5.196.220.115', '3081'),
(1655, 3850, 'MahkemeMakamÄ±.ts3dns.com', '5.196.220.115', '1370'),
(1656, 3817, 'hayelperest', '5.196.220.115', '2450'),
(1657, 3862, 'DertliSultanS', '5.196.220.115', '746'),
(1658, 3862, 'DertliSultanS', '5.196.220.115', '746'),
(1659, 3617, 'mezarcÄ±lar', '5.196.220.115', '2825'),
(1660, 3161, '37', '5.196.220.115', '470'),
(1661, 3739, 'Medusa Gaming COPY', '5.196.220.115', '1530'),
(1662, 3869, 'Csgojb', '5.196.220.115', '1914'),
(1663, 3868, 'visusbilisim', '5.196.220.115', '3854'),
(1664, 3872, '5.196.220.115:3026', '5.196.220.115', '3026'),
(1665, 3873, 'ahmed', '5.196.220.115', '21'),
(1666, 3873, 'ae', '5.196.220.115', '21'),
(1667, 3875, 'Relax Gaming', '5.196.220.115', '3521'),
(1668, 3876, 'bedava', '5.196.220.115', '1356'),
(1669, 3877, 'tsaz', '5.196.220.115', '3224'),
(1670, 3877, 'pbtr', '5.196.220.115', '3224'),
(1671, 3880, 'fsalÄ±mda', '5.196.220.115', '465'),
(1672, 3827, 'ewrwe', '5.196.220.115', '763'),
(1673, 3869, 'ByOpSky', '5.196.220.115', '1914'),
(1674, 3887, 'reddawn', '5.196.220.115', '1976'),
(1675, 3668, 'Oyunsever', '5.196.220.115', '2130'),
(1676, 3815, 'hw', '5.196.220.115', '2235'),
(1677, 3894, 'badder.ts3.cloud:8525', '5.196.220.115', '725'),
(1678, 3889, 'platoondesign', '5.196.220.115', '439'),
(1679, 3897, 'GaminG', '5.196.220.115', '1193'),
(1680, 3906, 'f1clan', '5.196.220.115', '1017'),
(1681, 3905, 'mf', '5.196.220.115', '947'),
(1682, 3908, 'yuuu', '5.196.220.115', '1640'),
(1683, 3908, 'er', '5.196.220.115', '1640'),
(1684, 3909, 'ts3alemi', '5.196.220.115', '2564'),
(1685, 3896, 'MUSIC', '5.196.220.115', '1613'),
(1686, 3914, 'bedotim', '5.196.220.115', '3460'),
(1687, 3916, 'devran', '5.196.220.115', '1590'),
(1688, 3915, ' ', '5.196.220.115', '2610'),
(1689, 3919, 'Nakliyat Lojistik', '5.196.220.115', '2836'),
(1690, 3915, 'FairBaTTLe', '5.196.220.115', '2610'),
(1691, 3925, 'PhoenixPlay', '5.196.220.115', '3134'),
(1692, 3915, 'fairbattle', '5.196.220.115', '2610'),
(1693, 3925, 'hackler', '5.196.220.115', '3134'),
(1694, 3845, 'yigit', '5.196.220.115', '1850'),
(1695, 3929, 'WhiteBlackEsc!', '5.196.220.115', '1840'),
(1696, 3927, 'TM', '5.196.220.115', '471'),
(1697, 3936, 'Baskan Umutcan ', '5.196.220.115', '1423'),
(1698, 3939, 'marmara', '5.196.220.115', '801'),
(1699, 3941, 'SNOWMAN', '5.196.220.115', '153'),
(1700, 3937, 'severehose159', '5.196.220.115', '957'),
(1701, 3949, 'MeshurZalÄ±m', '5.196.220.115', '1604'),
(1702, 3949, 'Meshur', '5.196.220.115', '1604'),
(1703, 3950, 'wolfteam', '5.196.220.115', '3926'),
(1704, 3952, 'warcry', '5.196.220.115', '1358'),
(1705, 3952, 'warcryklani', '5.196.220.115', '1358'),
(1706, 3951, 'tyxon', '5.196.220.115', '3059'),
(1707, 3876, 'karsiyakabilisim', '5.196.220.115', '1356'),
(1708, 3961, 'Revenge', '5.196.220.115', '3023'),
(1709, 3926, 'TS3.NKL', '5.196.220.115', '3645'),
(1710, 3876, 'Bedavateamspeak3', '5.196.220.115', '1356'),
(1711, 3926, 'Berkayberkay', '5.196.220.115', '3645'),
(1712, 3974, 'odaniactakil', '5.196.220.115', '1133'),
(1713, 3975, 'rachezeid', '5.196.220.115', '1388'),
(1714, 3937, '12severehose', '5.196.220.115', '957'),
(1715, 3981, 'gaming', '5.196.220.115', '1678'),
(1716, 3984, 'Kankalar', '5.196.220.115', '388'),
(1717, 3984, 'Ts1', '5.196.220.115', '388'),
(1718, 3991, 'titanwolwes', '5.196.220.115', '3508'),
(1719, 4002, 'Ã¶ztÃ¼rk', '5.196.220.115', '2426'),
(1720, 4000, 'Imseyzatack', '5.196.220.115', '631'),
(1721, 4003, 'as1lmevzuy1k1m.cfd.ts3.com', '5.196.220.115', '3415'),
(1722, 4008, 'YiÄŸitcan', '5.196.220.115', '3455'),
(1723, 4006, '[SavaÅŸ Gaming]', '5.196.220.115', '3217'),
(1724, 4012, 'winners.esc', '5.196.220.115', '3770'),
(1725, 4012, 'winners.esc', '5.196.220.115', '3770'),
(1726, 4012, 'winners.esc', '5.196.220.115', '3770'),
(1727, 3988, 'adalet', '5.196.220.115', '1106'),
(1728, 4018, 'ayariverdim', '5.196.220.115', '3921'),
(1729, 4018, 'ayariverdim', '5.196.220.115', '3921'),
(1730, 4031, 'SancakTR', '5.196.220.115', '3426'),
(1731, 4031, 'SancakTR', '5.196.220.115', '3426'),
(1732, 3874, 'EYM', '5.196.220.115', '2733'),
(1733, 4035, 'Dindar1453', '5.196.220.115', '2846'),
(1734, 4035, 'Dindar1453', '5.196.220.115', '2846'),
(1735, 4035, 'Dindar', '5.196.220.115', '2846'),
(1736, 4035, 'Dindar1453', '5.196.220.115', '2846'),
(1737, 4038, 'SkyBlack', '5.196.220.115', '3982'),
(1738, 4039, 'Elysion', '5.196.220.115', '3926'),
(1739, 4040, 'ahmed', '5.196.220.115', '3844'),
(1740, 4041, 'stargate', '5.196.220.115', '341'),
(1741, 4044, 'safsafa', '5.196.220.115', '2816'),
(1742, 4045, 'fake', '5.196.220.115', '1945'),
(1743, 4048, 'f4f', '5.196.220.115', '765'),
(1744, 4039, 'elysion', '5.196.220.115', '3926'),
(1745, 4039, 'elysion.warface', '5.196.220.115', '3926'),
(1746, 4051, 'kurnazmisali', '5.196.220.115', '733'),
(1747, 4063, 'rescf', '5.196.220.115', '3834'),
(1748, 4062, 'omc', '5.196.220.115', '3078'),
(1749, 4064, 'DR GAMÄ°NGS', '5.196.220.115', '994'),
(1750, 3348, 'turkculerotagi', '5.196.220.115', '952'),
(1751, 4032, 'nail bey', '5.196.220.115', '1080'),
(1752, 3849, 'Katamia GaminG HNS', '5.196.220.115', '2253'),
(1753, 4062, 'omc', '5.196.220.115', '3078'),
(1754, 4068, 'ayazz berkay kuseyirli', '5.196.220.115', '2554'),
(1755, 4069, 'ÐºÎ±Ñ‚Î±Ð¼Î¹Î± gÎ±Ð¼Î¹Î·g | ÏÑÏƒ', '5.196.220.115', '3589'),
(1756, 4071, 'megat', '5.196.220.115', '24'),
(1757, 4070, 'pabloescobar', '5.196.220.115', '2670'),
(1758, 4073, 'rebel', '5.196.220.115', '814'),
(1759, 4073, 'machines', '5.196.220.115', '814'),
(1760, 4073, 'gaming', '5.196.220.115', '814'),
(1761, 4077, 'zamanli', '5.196.220.115', '1604'),
(1762, 4079, 'SeDDuLBaHiR', '5.196.220.115', '3087'),
(1763, 4079, 'SeDDuLBaHiR', '5.196.220.115', '3087'),
(1764, 4085, 'MinecraftcÄ±yÄ±z', '5.196.220.115', '2210'),
(1765, 4078, 'Dostlar', '5.196.220.115', '1351'),
(1766, 4079, 'seddulbahir', '5.196.220.115', '3087'),
(1767, 4090, 'war4heaven', '5.196.220.115', '1901'),
(1768, 4090, 'war4heaven', '5.196.220.115', '1901'),
(1769, 4090, 'r2dailesi', '5.196.220.115', '1901'),
(1770, 3821, 'SonOttoman', '5.196.220.115', '2916'),
(1771, 4100, 'tabutcub1rl1k', '5.196.220.115', '3556'),
(1772, 4100, 'GAMÄ°Ng', '5.196.220.115', '3556'),
(1773, 4101, 'Fierry`Arrow', '5.196.220.115', '2610'),
(1774, 4100, 'TABUTCUB1RL1K', '5.196.220.115', '3556'),
(1775, 3918, 'TÃ¼rkiyem Gaming', '5.196.220.115', '2189'),
(1776, 4096, 'exlendailesi', '5.196.220.115', '3101'),
(1777, 4101, 'Fierry`Arrow', '5.196.220.115', '2610'),
(1778, 4109, 'SaygiBizde', '5.196.220.115', '198'),
(1779, 4109, 'SaygiBizde', '5.196.220.115', '198'),
(1780, 4108, 'kaptanmisaliclan', '5.196.220.115', '1403'),
(1781, 4110, 'hehnolmus', '5.196.220.115', '1982'),
(1782, 4112, 'atesleoflu', '5.196.220.115', '1361'),
(1783, 4115, 'rsgaming', '5.196.220.115', '1973'),
(1784, 4037, 'kral', '5.196.220.115', '3273'),
(1785, 4056, 'oyunserveri', '5.196.220.115', '436'),
(1786, 4113, 'winner', '5.196.220.115', '426'),
(1787, 3821, 'SonOttoman', '5.196.220.115', '2916'),
(1788, 4065, 'LifeTurk', '5.196.220.115', '1858'),
(1789, 4056, 'os', '5.196.220.115', '436'),
(1790, 3992, 'sedasko', '5.196.220.115', '1067'),
(1791, 4017, 'furkanbilen', '5.196.220.115', '550'),
(1792, 4080, 'mami', '5.196.220.115', '3619'),
(1793, 3241, 'Bandits', '5.196.220.115', '699'),
(1794, 4078, 'Dostlar OffÄ±ce', '5.196.220.115', '1351'),
(1795, 4098, 'ORN GAMING', '5.196.220.115', '1118'),
(1796, 3312, '57alay', '5.196.220.115', '1337'),
(1797, 3300, 'farukreiz', '5.196.220.115', '1566'),
(1798, 3300, 'qweqwe', '5.196.220.115', '1566'),
(1799, 3477, 'Arena Roleplay * GerÃ§ek Hayat *', '5.196.220.115', '413'),
(1800, 3254, 'Crowsel', '5.196.220.115', '3963'),
(1801, 4055, 'Crowsel', '5.196.220.115', '1397'),
(1802, 4100, 'kenantayfasÄ±', '5.196.220.115', '3556'),
(1803, 4100, 'kenan', '5.196.220.115', '3556'),
(1804, 3255, 'WinnerGamings', '5.196.220.115', '2830'),
(1805, 3233, 'Gain', '5.196.220.115', '1595'),
(1806, 3934, '51.140.78.166:10080.', '5.196.220.115', '3982'),
(1807, 3330, 'belk', '5.196.220.115', '3860'),
(1808, 3765, 'beyazcicek', '5.196.220.115', '3976'),
(1809, 1, 'team', '5.196.220.115', '9987');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `port` text NOT NULL,
  `isimsoyisim` text NOT NULL,
  `iplog` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `port`, `isimsoyisim`, `iplog`) VALUES
(1, 'mrsbyt3@gmail.com', '$2y$10$/d9zKiFHUqb7RCnFA9VMyu6SpSeidfH2oR1d0iUzYx74miuKGTl5.', '9987', 'Hasan ATILAN', ''),
(2, 'hasan@gmail.com', '$2y$10$/d9zKiFHUqb7RCnFA9VMyu6SpSeidfH2oR1d0iUzYx74miuKGTl5.', '9988', 'Hasan Test', '176.240.17.205');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yedekler`
--

CREATE TABLE `yedekler` (
  `id` int(11) NOT NULL,
  `yedekadi` text,
  `yedekaciklama` text,
  `port` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `yedekler`
--

INSERT INTO `yedekler` (`id`, `yedekadi`, `yedekaciklama`, `port`) VALUES
(1, 'yedekler/yedek_127001_9987_1522079437.yedek', 'YEDEK (26.03.2018 - 18:50:37) ALINDI', '9987');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yyedek`
--

CREATE TABLE `yyedek` (
  `id` int(11) NOT NULL,
  `yedekadi` text,
  `yedekaciklama` text,
  `port` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Tablo için indeksler `proxy`
--
ALTER TABLE `proxy`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`hizmet_numarasi`);

--
-- Tablo için indeksler `ticketler`
--
ALTER TABLE `ticketler`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Tablo için indeksler `tsdns`
--
ALTER TABLE `tsdns`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yedekler`
--
ALTER TABLE `yedekler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yyedek`
--
ALTER TABLE `yyedek`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448950;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `proxy`
--
ALTER TABLE `proxy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1809;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `hizmet_numarasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99832;

--
-- Tablo için AUTO_INCREMENT değeri `ticketler`
--
ALTER TABLE `ticketler`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56692;

--
-- Tablo için AUTO_INCREMENT değeri `tsdns`
--
ALTER TABLE `tsdns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1810;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yedekler`
--
ALTER TABLE `yedekler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yyedek`
--
ALTER TABLE `yyedek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
