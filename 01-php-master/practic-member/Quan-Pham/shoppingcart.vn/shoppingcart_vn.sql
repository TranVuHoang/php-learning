-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 02:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart.vn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_content` varchar(5000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_description` varchar(2000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_code` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_thumbnail` varchar(2000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_title`, `product_content`, `product_description`, `product_price`, `product_code`, `product_thumbnail`, `product_cat_id`) VALUES
(1, 'iPhone 11 64GB', 'Sau bao nhiÃªu chá» Ä‘á»£i cÅ©ng nhÆ° Ä‘á»“n Ä‘oÃ¡n thÃ¬ cuá»‘i cÃ¹ng Apple Ä‘Ã£ chÃ­nh thá»©c giá»›i thiá»‡u bá»™ 3 siÃªu pháº©m iPhone 11 máº¡nh máº½ nháº¥t cá»§a mÃ¬nh vÃ o thÃ¡ng 9/2019. CÃ³ má»©c giÃ¡ ráº» nháº¥t nhÆ°ng váº«n Ä‘Æ°á»£c nÃ¢ng cáº¥p máº¡nh máº½ nhÆ° chiáº¿c iPhone Xr nÄƒm ngoÃ¡i, Ä‘Ã³ chÃ­nh lÃ  phiÃªn báº£n iPhone 11 64GB.<a href=\'\'><img src=\'public/images/iphone-11-red-content.png\' alt=\'\'></a>', 'Náº¿u nhÆ° trÆ°á»›c Ä‘Ã¢y iPhone Xr chá»‰ cÃ³ má»™t camera thÃ¬ nay vá»›i iPhone 11 chÃºng ta sáº½ cÃ³ tá»›i hai camera á»Ÿ máº·t sau.', 22000000, 'DT#1', 'public/images/iphone-11-red-thumbnail.png', 1),
(2, 'Samsung Galaxy A20s 64GB', 'Samsung Galaxy A20s 64GB lÃ  phiÃªn báº£n cáº£i tiáº¿n cá»§a chiáº¿c Samsung Galaxy A20 64GB  Ä‘Ã£ ra máº¯t trÆ°á»›c Ä‘Ã³ vá»›i nhá»¯ng nÃ¢ng cáº¥p vá» máº·t camera vÃ  kÃ­ch thÆ°á»›c mÃ n hÃ¬nh.<a href=\'\'><img src=\'public/images/samsung-galaxy-a20s-content.jpg\' alt=\'\'></a>', 'Trong phÃ¢n khÃºc táº§m trung, Samsung Galaxy A20s lÃ  má»™t trong nhá»¯ng smartphone hiáº¿m hoi Ä‘Æ°á»£c trang bá»‹ cá»¥m 3 camera sau.', 5000000, 'DT#2', 'public/images/samsung-galaxy-a20s-black-thumbnail.png', 1),
(3, 'BlackBerry KEY2', 'BlackBerry Key2 lÃ  má»™t báº£n nÃ¢ng cáº¥p toÃ n diá»‡n cho chiáº¿c KeyOne vá»›i ráº¥t nhiá»u thay Ä‘á»•i vÃ  Ä‘iá»u Ä‘Ã¡ng má»«ng lÃ  yáº¿u tá»‘ Ä‘áº·c trÆ°ng nháº¥t cá»§a dÃ²ng Ä‘iá»‡n thoáº¡i BlackBerry lÃ  bÃ n phÃ­m váº­t lÃ½ cá»• Ä‘iá»ƒn váº«n Ä‘Æ°á»£c giá»¯ láº¡i.<a href=\'\'><img src=\'public/images/blackberry-key2-content.jpg\' alt=\'\'></a>', 'Thiáº¿t káº¿ cá»§a nhá»¯ng chiáº¿c mÃ¡y BlackBerry luÃ´n Ä‘Æ°á»£c ngÆ°á»i dÃ¹ng Ä‘Ã¡nh giÃ¡ cao bá»Ÿi cháº¥t doanh nhÃ¢n cá»§a mÃ¡y.', 17000000, 'DT#3', 'public/images/blackberry-key2-thumbnail.png', 1),
(4, 'OPPO Reno2', 'Sau sá»± thÃ nh cÃ´ng cá»§a chiáº¿c OPPO Reno vá»›i thiáº¿t káº¿ má»›i láº¡, camera cháº¥t lÆ°á»£ng thÃ¬ má»›i Ä‘Ã¢y OPPO tiáº¿p tá»¥c giá»›i thiá»‡u phiÃªn báº£n nÃ¢ng cáº¥p cá»§a chiáº¿c smartphone nÃ y lÃ  chiáº¿c OPPO Reno2.<a href=\'\'><img src=\'public/images/oppo-reno2-content.jpg\' alt=\'\'></a>', 'Vá»›i OPPO Reno2 thÃ¬ mÃ¡y Ä‘Æ°á»£c nÃ¢ng cáº¥p lÃªn tá»›i 4 camera chÃ­nh thay vÃ¬ chá»‰ 2 camera nhÆ° tháº¿ há»‡ cÅ©.', 15000000, 'DT#4', 'public/images/oppo-reno2-black-mtp1-thumbnail.png', 1),
(5, 'GVN Titan M', 'TrÆ°á»›c háº¿t GVN Titan M Ä‘Æ°á»£c trang bá»‹ Mainboard H310M Ä‘Æ°Æ¡Ì£c thiÃªÌt tÃ´Ìi Æ°u nhÄƒÌ€m Ä‘em laÌ£i hiÃªÌ£u nÄƒng Ã´Ì‰n Ä‘iÌ£nh nhÃ¢Ìt cho bÃ´Ì£ nhÆ¡Ì giuÌp ngÆ°Æ¡Ì€i sÆ°Ì‰ duÌ£ng coÌ thÃªÌ‰ khai thaÌc triÃªÌ£t Ä‘ÃªÌ‰ sÆ°Ìc maÌ£nh cuÌ‰a caÌc CPU Intel. Vá»›i nhá»¯ng thiÃªÌt tÃ´Ìi Æ°u nhÄƒÌ€m Ä‘em laÌ£i hiÃªÌ£u nÄƒng Ã´Ì‰n Ä‘iÌ£nh nhÃ¢Ìt cho bÃ´Ì£ nhÆ¡Ì giuÌp ngÆ°Æ¡Ì€i sÆ°Ì‰ duÌ£ng khai thaÌc triÃªÌ£t Ä‘ÃªÌ‰ sÆ°Ìc maÌ£nh cuÌ‰a caÌc CPU Intel. Trang bá»‹ Ram Geil Evo Forza Gaming vá»›i dung lÆ°á»£ng 8GB Ä‘Æ°á»£c há»— trá»£ (BUS) á»Ÿ má»©c 2666MHz.         Bá»™ xá»­ lÃ½ Intel Pentium Gold G5400 Ä‘áº£m báº£o mÃ¡y tÃ­nh Ä‘a nhiá»‡m mÆ°á»£t mÃ , á»•n Ä‘á»‹nh vá»›i tá»‘c Ä‘á»™ cao. BÃªn cáº¡nh Ä‘Ã³, Chip Ä‘Æ°á»£c sáº£n xuáº¥t trÃªn cÃ´ng nghá»‡ 14 nm vÃ  bá»™ nhá»› cache 4MB giÃºp tÄƒng tá»‘c Ä‘á»™ xá»­ lÃ½ cá»§a chip lÃªn khÃ¡ cao. Giáº£m Ä‘iá»‡n nÄƒng tiÃªu thá»¥ vÃ  lÆ°á»£ng nhiá»‡t tá»a ra (trung bÃ¬nh tiÃªu thá»¥ 54W).<a href=\'\'><img src=\'public/images/gearvn-gvn-titan-1650-msi-content.png\' alt=\'\'></a>', 'Vá»›i kinh phÃ­ dÆ°á»›i 9 triá»‡u Ä‘á»“ng nhÆ°ng láº¡i cáº§n build má»™t chiáº¿c pc cháº¥t lÆ°á»£ng nháº±m há»— trá»£ cÃ´ng viá»‡c. Äáº·c biá»‡t, Ä‘Ã¡p á»©ng Ä‘Æ°á»£c nhu cáº§u giáº£i trÃ­ vá»›i cÃ¡c tá»±a game Ä‘Ã¬nh Ä‘Ã¡m.', 9000000, 'MT#1', 'public/images/gvn_titan_m_thumbnail.png', 2),
(6, 'gvn-titan-1650-msi', 'Náº¿u báº¡n Ä‘ang tÃ¬m kiáº¿m 1 dÃ n PC cÃ³ thá»ƒ cÃ¢n tá»‘t Ä‘Æ°á»£c háº§u háº¿t nhá»¯ng tá»±a game Ä‘ang hot hiá»‡n nay nhÆ° Apex Legends, PUBG á»Ÿ Ä‘á»™ phÃ¢n giáº£i Full HD, lÃ m tá»‘t cÃ¡c tÃ¡c vá»¥ Ä‘á»“ há»a nháº¹ nhÃ ng nhÆ° dá»±ng phim Full HD vÃ  Photoshop vá»›i má»©c giÃ¡ dá»… chá»‹u cÃ¹ng nhiá»u Æ°u Ä‘Ã£i háº¥p dáº«n khÃ¡c, thÃ¬ GEARVN chÃºng tÃ´i cÃ³ má»™t lá»i Ä‘á» nghá»‹ háº¥p dáº«n dÃ nh cho báº¡n. Tá»«ng linh kiá»‡n cá»§a dÃ n mÃ¡y nÃ y Ä‘á»u Ä‘Æ°á»£c lá»±a chá»n kÄ© cÃ ng, sao cho cÃ³ thá»ƒ lÃ m viá»‡c cÃ¹ng nhau má»™t cÃ¡ch hoÃ n háº£o, Ä‘em Ä‘áº¿n cho báº¡n nhá»¯ng tráº£i nghiá»‡m tuyá»‡t vá»i nháº¥t. <a href=\'\'><img src=\'public/images/gearvn-gvn-titan-1650-msi-content.png\' alt=\'\'></a>', 'ÄÃ³ lÃ  bá»™ mÃ¡y GVN Viper 1660 - má»™t dÃ n PC máº¡nh máº½ cÃ³ thá»ƒ cÃ¢n tá»‘t Ä‘Æ°á»£c Apex, PUBG cÃ¹ng nhiá»u game khÃ¡c á»Ÿ thiáº¿t láº­p tá»‘i Ä‘a.', 13000000, 'MT#2', 'public/images/gvn_titan_m_thumbnail.png', 2),
(7, 'GVN Dragon X', 'Äá»‘i tÆ°á»£ng nháº¯m Ä‘áº¿n cá»§a bá»™ GVN nÃ y lÃ  cÃ¡c báº¡n há»c sinh/sinh viÃªn vá»›i nhu cáº§u chÆ¡i chá»§ yáº¿u lÃ  chiáº¿n Ä‘Æ°á»£c háº§u háº¿t cÃ¡c tá»±a game online(LoL, Dota 2, CSGO,PUBG â€¦). ChÆ¡i mÆ°á»£t cÃ¡c game offline (GTA V, Crysis 3,â€¦) á»Ÿ medium-high-Ultra. Vá»›i tiÃªu chÃ­ lÃ  tá»‘i Æ°u hoÃ¡ hiá»‡u nÄƒng khi chÆ¡i game vÃ  cÃ¡c tÃ¡c vá»¥ thÃ´ng thÆ°á»ng thÃ¬ cÃ¡c bá»™ mÃ¡y dÃ²ng GVN Ä‘á»u khuyÃªn dÃ¹ng SSD 256G thay cho HDD 1TB náº¿u nhu cáº§u lÆ°u trá»¯ khÃ´ng quÃ¡ nhiá»u. <a href=\'\'><img src=\'public/images/helios_z_content_1.jpg\' alt=\'\'></a> <a href=\'\'><img src=\'public/images/helios_z_content_2.png\' alt=\'\'></a>', 'Äá»‘i tÆ°á»£ng nháº¯m Ä‘áº¿n cá»§a bá»™ GVN nÃ y lÃ  cÃ¡c báº¡n há»c sinh/sinh viÃªn vá»›i nhu cáº§u chÆ¡i chá»§ yáº¿u lÃ  chiáº¿n Ä‘Æ°á»£c háº§u háº¿t cÃ¡c tá»±a game online', 66300000, 'MT#3', 'public/images/gvn_helios_thumbnail.png', 2),
(8, 'GVN Predator Z', 'Äá»‘i tÆ°á»£ng nháº¯m Ä‘áº¿n cá»§a bá»™ GVN nÃ y lÃ  cÃ¡c báº¡n há»c sinh/sinh viÃªn vá»›i nhu cáº§u chÆ¡i chá»§ yáº¿u lÃ  chiáº¿n Ä‘Æ°á»£c háº§u háº¿t cÃ¡c tá»±a game online(LoL, Dota 2, CSGO,â€¦). ChÆ¡i mÆ°á»£t cÃ¡c game offline (GTA V, Crysis 3,â€¦) á»Ÿ medium-high. Vá»›i tiÃªu chÃ­ lÃ  tá»‘i Æ°u hoÃ¡ hiá»‡u nÄƒng khi chÆ¡i game vÃ  cÃ¡c tÃ¡c vá»¥ thÃ´ng thÆ°á»ng thÃ¬ cÃ¡c bá»™ mÃ¡y dÃ²ng GVN Ä‘á»u khuyÃªn dÃ¹ng SSD 120G thay cho HDD 1TB náº¿u nhu cáº§u lÆ°u trá»¯ khÃ´ng quÃ¡ nhiá»u. <a href=\'\'><img src=\'public/images/gvn_predator_2080s_content_1.png\' alt=\'\'></a> <a href=\'\'><img src=\'public/images/gvn_predator_2080s_content_2.png\' alt=\'\'></a>', 'Äá»‘i tÆ°á»£ng nháº¯m Ä‘áº¿n cá»§a bá»™ GVN nÃ y lÃ  cÃ¡c báº¡n há»c sinh/sinh viÃªn vá»›i nhu cáº§u chÆ¡i chá»§ yáº¿u lÃ  chiáº¿n Ä‘Æ°á»£c háº§u háº¿t cÃ¡c tá»±a game online', 46000000, 'MT#4', 'public/images/gvn_predator_2080s_thumbnail.png', 2),
(9, 'Razer Kraken Quartz Pink Edition', 'Razer Kraken Pro v2 vÃ³ lá»›p vá» vÃ  bá»™ khung Ä‘Æ°á»£c lÃ m tá»« há»£p kim NhÃ´m - BÃ´-xÃ­t. Há»£p kim nÃ y cÃ³ Ä‘á»™ bá»n siÃªu cao, cháº¯c khá»e vÃ  siÃªu nháº¹. ChÃ­nh vÃ¬ váº­y Kraken Pro v2 cÃ³ Ä‘á»™ bá»n tuyá»‡t vá»i nhÆ°ng váº«n Ä‘áº£m báº£o trá»ng lÆ°á»£ng nháº¹, táº¡o Ä‘á»™ thoáº£i mÃ¡i vÃ  linh hoáº¡t cho game thá»§. Razer biáº¿t ráº±ng, viá»‡t trao Ä‘á»•i thÃ´ng tin giá»¯a cÃ¡c game thá»§ trong cÃ¹ng má»™t Ä‘á»™i lÃ  tá»‘i quan trá»ng, nháº¥t lÃ  trong cÃ¡c tráº­n thi Ä‘áº¥u Ä‘á»‰nh cao. ChÃ­nh vÃ¬ váº­y mÃ  Razer Kraken Pro v2 Ä‘Æ°á»£c trang bá»‹ micro cÃ³ cháº¥t lÆ°á»£ng ráº¥t cao, Ä‘áº£m báº£o cho viá»‡c voice-chat cá»§a game thá»§ nhanh chÃ³ng, thuáº­n tiá»‡n, ká»‹p trá»i vÃ  á»•n Ä‘á»‹nh nháº¥t. <a href=\'\'><img src=\'public/images/gearvn_kraken2019_content.png\' alt=\'\'></a>', 'Razer Kraken Pro V2 Ä‘Æ°á»£c nÃ¢ng cáº¥p cá»§ loa tháº¿ há»‡ má»›i vá»›i Ä‘Æ°á»ng kÃ­nh lÃªn tá»›i 50mm nháº±m tÄƒng cÆ°á»ng cháº¥t lÆ°á»£ng Ã¢m thanh lÃªn táº§m cao má»›i.', 2500000, 'TN#1', 'public/images/gearvn_kraken2019_7_thumbnail.jpg', 3),
(10, 'Kingston HyperX Cloud Revolver', 'Kingston HyperX Cloud Revolver táº¡o ra khÃ´ng gian Ã¢m thanh vÃ´ cÃ¹ng sÃ¢u rá»™ng nháº±m tÃ¡i táº¡o Ã¢m thanh trung thá»±c nháº¥t. ChÃ­nh vÃ¬ vÃ¢y, Revolver giÃºp game thá»§ chiáº¿m trá»n lá»£i tháº¿ vá» \'Ä‘Ã´i tai\', game thá»§ cÃ³ thá»ƒ nghe Ä‘Æ°á»£c cÃ¡c Ã¢m thanh trong game chÃ­nh xÃ¡c hÆ¡n, rÃµ rÃ ng hÆ¡n cho dÃ¹ cÃ¡c chi tiáº¿t Ã¢m thanh nhá» nháº¥t xa nháº¥t. Kingston HyperX Cloud Revolver tiáº¿p tá»¥c kháº³ng Ä‘á»‹nh cháº¯t lÆ°á»£ng build cháº¯c \'nhÆ° xe tÄƒng\' cá»§a tai nghe Kingston. CÃ¡c váº­t liá»‡u cháº¿ táº¡o Revolver Ä‘á»u cÃ³ Ä‘á»™ bá»n ráº¥t cao, Ä‘áº£m báº£o cho tai nghe hoáº¡t Ä‘á»™ng á»•n Ä‘á»‹nh vÃ  lÃ¢u dÃ i trong mÃ´i trÆ°á»ng thá»i tiáº¿t nÃ³ng áº©m nhÆ° á»Ÿ Viá»‡t Nam. <a href=\'\'><img src=\'public/images/gearvn_kraken2019_content.png\' alt=\'\'></a>', 'Cháº¥t lÆ°á»£ng Ã¢m thanh tiÃªu chuáº©n nhÆ° trong phÃ²ng thu', 2100000, 'TN#2', 'public/images/cloudiisilver-thumbnail.jpg', 3),
(11, 'SteelSeries Arctis Pro Wireless', 'ÄÆ°á»£c cung cáº¥p Driver cÃ³ nam chÃ¢m Neodymium cÃ³ kháº£ nÄƒng cáº£i thiá»‡n dáº£i táº§n sá»‘ Ã¢m thanh lÃªn tá»›i 40,000 Hz, lá»›n gáº§n gáº¥p Ä‘Ã´i so vá»›i cÃ¡c loáº¡i tai nghe khÃ¡c ( 22,000 Hz ). Cá»±c kÃ¬ nháº¹ vÃ  Ä‘Æ¡n giáº£n, thiáº¿t káº¿ mang tÃ­nh thá»ƒ thao vá»›i chiá»‡c Ä‘á»‡m tai cá»±c Ãªm khÃ´ng há» gÃ¢y má»i má»‡t. Chiáº¿c quai Ä‘Æ°á»£c Ä‘Ãºc káº¿t cá»±c cháº¯c cháº¯n mÃ  co giÃ£n ráº¥t tá»‘t. ThÃ­ch há»£p vá»›i má»i loáº¡i kÃ­ch thÆ°á»›c Ä‘áº§u cá»§a má»i game thá»§. <a href=\'\'><img src=\'public/images/steelseries_arctic_pro_content.png\' alt=\'\'></a>', 'Ã‚m thanh trung thá»±c nháº¥t láº§n Ä‘áº§u tiÃªn Ä‘Æ°á»£c xuáº¥t hiá»‡n trong bá»™ 3 sáº£n pháº©m má»›i nháº¥t cá»§a SteelSeries. HÃ£y cÃ¹ng Playzone thá»­ xem chiÃªc tai nghe Arctis Pro nÃ y cÃ³ gÃ¬ thÃº vá»‹ nhÃ©!', 9300000, 'TN#3', 'public/images/gearvn_ss_prowireless_thumbnail.png', 3),
(12, 'Corsair VIRTUOSO RGB Wireless', 'Tá»« Ã¢m thanh bÆ°á»›c chÃ¢n cá»±c kÃ¬ nháº¹ cho tá»›i má»™t Ã¢m bass sÃ¢u tráº§m nháº¥t, báº¡n sáº½ nghe Ä‘Æ°á»£c táº¥t cáº£ má»i thá»© vá»›i VIRTUOSO RGB Wireless. Vá»›i bá»™ drivers neodymium 50mm máº­t Ä‘á»™ cao cÃ³ dáº£i táº§n sá»‘ 20Hz-40.000Hz - gáº¥p Ä‘Ã´i hoÃ n toÃ n má»i tai nghe gaming trÆ°á»›c Ä‘Ã¢y cá»§a báº¥t cá»© hÃ£ng nÃ o. Miáº¿ng Ä‘á»‡m tai nghe xá»‘p cao cáº¥p phÃ¹ há»£p vá»›i form cá»§a Ä‘áº§u báº¡n, cÃ¹ng vá»›i má»™t headband khÃ¡ nháº¹, mang Ä‘áº¿n cáº£m giÃ¡c má»m máº¡i nhÆ° tá»±a lÃªn gá»‘i gá»‘i, giÃºp thoáº£i mÃ¡i lÃ¢u dÃ i ká»ƒ cáº£ khi sá»­ dá»¥ng liÃªn tá»¥c. Vá»›i cáº¥u trÃºc nhÃ´m gia cÃ´ng. Tai nghe Corsair VIRTUOSO RGB Wireless mang Ä‘áº¿n sá»± pha trá»™n hoÃ n háº£o giá»¯a thiáº¿t káº¿ gá»n nháº¹, Ä‘á»™ bá»n máº¡nh vÃ  sá»± thoáº£i mÃ¡i tá»‘i Ä‘a cho ngÆ°á»i sá»­ dá»¥ng. <a href=\'\'><img src=\'public/images/cossair-VIRTUOSO-content.png\' alt=\'\'></a>', 'Chiáº¿c tai nghe má»›i nháº¥t cá»§a Corsair cháº¯c cháº¯n sáº½ trá»Ÿ thÃ nh má»™t trong nhá»¯ng chiáº¿c tai nghe High-End má»›i nháº¥t cho tá»›i thá»i Ä‘iá»ƒm hiá»‡n táº¡i. Tá»« cháº¥t lÆ°á»£ng thiáº¿t káº¿, Ã¢m thanh, thiáº¿t káº¿ Ä‘á»u mang nÃ©t Ä‘á»™t phÃ¡ cao cáº¥p. HÃ£y cÃ¹ng Playzone Ä‘iá»ƒm qua cÃ¡c tÃ­nh nÄƒng ná»•i báº­t cá»§a sáº£n pháº©m nÃ y nhÃ©!', 4800000, 'TN#4', 'public/images/cossair-VIRTUOSO-thumbnail.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cat`
--

CREATE TABLE `tbl_product_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_product_cat`
--

INSERT INTO `tbl_product_cat` (`cat_id`, `cat_title`) VALUES
(1, 'Äiá»‡n thoáº¡i'),
(2, 'MÃ¡y tÃ­nh'),
(3, 'Tai nghe'),
(5, 'á»ng thá»Ÿ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `income` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `fullname`, `username`, `password`, `email`, `gender`, `income`) VALUES
(1, 'Phan TrÆ°á»ng QuÃ¢n', 'leovergil18', 'a82e5fe0c4b4f634c4b91dd7d3d7eca5', 'leovergil@gmail.com', 'male', 10000000),
(2, 'Trá»‹nh Huá»³nh Thu Tháº£o', 'thuthao123', '637085b7bb73abb3bb19c57b15d1cf73', 'thuthao@gmail.com', 'female', 20000000),
(3, 'Phan Tuáº¥n Khanh', 'tuankhanh123', '8eaa9fef0f0531799d74799467152764', 'tuankhanh@gmail.com', 'male', 30000000),
(4, 'Tráº§n Thá»‹ Thanh Lan', 'thanhlan123', 'fb6a5afd8417169d30b16097adaa5191', 'thanhlan@gmail.com', 'female', 40000000),
(9, 'Nguyá»…n vÄƒn A', 'nguyena', 'ade9e01eef2eb639ffda6bff17833a7b', 'nguyena@gmail.com', 'male', 1000000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat_id` (`product_cat_id`);

--
-- Indexes for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`product_cat_id`) REFERENCES `tbl_product_cat` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
