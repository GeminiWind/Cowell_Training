-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 02, 2017 lúc 08:59 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tin_tuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parrent_id` int(255) DEFAULT NULL,
  `news_count` int(11) DEFAULT NULL,
  `name_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keyword_seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_public` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `parrent_id`, `news_count`, `name_seo`, `keyword_seo`, `description`, `is_public`, `created_at`, `update_at`) VALUES
(9, 'Quá»‘c táº¿', NULL, NULL, 'quá»‘c táº¿ tin', NULL, '', 0, '2017-02-27 05:54:14', '2017-02-27 12:54:14'),
(11, 'XÃ£ Há»™i', NULL, NULL, 'fff', NULL, 'dáº§', 0, '2017-03-01 02:23:16', '2017-03-01 09:23:16'),
(14, 'Sá»©c sá»‘ng sá»‘', NULL, NULL, '', NULL, 'thÃ´ng tin cÃ´ng nghá»‡', 0, '2017-03-01 15:40:41', '2017-03-01 22:40:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `censor_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_hot` int(11) DEFAULT NULL,
  `sapo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) DEFAULT NULL,
  `time_public` datetime NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_public` tinyint(4) DEFAULT NULL,
  `feedback` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `cate_id`, `user_id`, `censor_id`, `comment_id`, `title`, `is_hot`, `sapo`, `content`, `view`, `time_public`, `tag`, `is_public`, `feedback`, `created_at`, `update_at`) VALUES
(36, 0, NULL, NULL, NULL, 'VÃ¬ sao S-400 khÃ´ng báº¯n khi Israel táº­p kÃ­ch Syria?', NULL, 'Má»¥c Ä‘Ã­ch Nga Ä‘Æ°a S-400 Ä‘áº¿n Syria Ä‘Ã£ khÃ¡ rÃµ rÃ ng ngay tá»« Ä‘áº§u. VÃ¬ váº­y, Ä‘Ã¡nh cháº·n hay khÃ´ng Ä‘á»‘i vá»›i mÃ¡y bay Israel Ä‘ang Ä‘áº·t Moskva vÃ o tháº¿ khÃ³.', 'Bá»™ trÆ°á»Ÿng Bá»™ Quá»‘c phÃ²ng Israel Avigdor Liberman vá»«a báº¥t ngá» lÃªn tiáº¿ng nháº­n trÃ¡ch nhiá»‡m vá» má»™t sá»‘ cuá»™c táº¥n cÃ´ng vá»«a qua nháº¯m vÃ o lÃ£nh thá»• Syria.\r\n\r\nDÃ¹ khÃ´ng nÃ³i rÃµ cá»¥ thá»ƒ lÃ  vá»¥ táº¥n cÃ´ng nÃ o song Ã´ng Liberman chá»‰ nÃ³i chung chung ráº±ng nguyÃªn nhÃ¢n há» táº¥n cÃ´ng lÃ  nháº±m ngÄƒn cháº·n dÃ²ng váº­n chuyá»ƒn vÅ© khÃ­ tá»« Syria cá»§a tá»• chá»©c Hezbollah.\r\n\r\nGiá»›i chá»©c Israel trÆ°á»›c Ä‘Ã¢y bÃ y tá» quan ngáº¡i ráº±ng Hezbollah cÃ³ thá»ƒ Ä‘Æ°á»£c nháº­n WMD hoáº·c vÅ© khÃ­ hÃ³a há»c tá»« chÃ­nh quyá»n Syria.\r\n\r\nTuy nhiÃªn, Ã´ng Lieberman hy vá»ng cÃ³ thá»ƒ Ä‘áº¡t Ä‘Æ°á»£c má»™t giáº£i phÃ¡p hÃ²a bÃ¬nh á»Ÿ Syria, cho dÃ¹ Ã´ng khÃ´ng cho ráº±ng báº¡o lá»±c vÃ  cÄƒng tháº³ng vá»›i ngÆ°á»i Palestine sá»›m dá»«ng láº¡i.', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '2017-02-27 15:50:22', '2017-02-27 15:50:22'),
(38, 6, NULL, NULL, NULL, 'Má»¥c Ä‘Ã­ch Nga Ä‘Æ°a S-400 Ä‘áº¿n Syria Ä‘Ã£ khÃ¡ rÃµ rÃ ng ngay tá»« Ä‘áº§u. VÃ¬ váº­y, Ä‘Ã¡nh cháº·n hay khÃ´ng Ä‘á»‘i vá»›i mÃ¡y bay Israel Ä‘ang Ä‘áº·t Moskva vÃ o tháº¿ khÃ³.', NULL, 'Má»¥c Ä‘Ã­ch Nga Ä‘Æ°a S-400 Ä‘áº¿n Syria Ä‘Ã£ khÃ¡ rÃµ rÃ ng ngay tá»« Ä‘áº§u. VÃ¬ váº­y, Ä‘Ã¡nh cháº·n hay khÃ´ng Ä‘á»‘i vá»›i mÃ¡y bay Israel Ä‘ang ', 'Bá»™ trÆ°á»Ÿng Bá»™ Quá»‘c phÃ²ng Israel Avigdor Liberman vá»«a báº¥t ngá» lÃªn tiáº¿ng nháº­n trÃ¡ch nhiá»‡m vá» má»™t sá»‘ cuá»™c táº¥n cÃ´ng vá»«a qua nháº¯m vÃ o lÃ£nh thá»• Syria.\r\n\r\nDÃ¹ khÃ´ng nÃ³i rÃµ cá»¥ thá»ƒ lÃ  vá»¥ táº¥n cÃ´ng nÃ o song Ã´ng Liberman chá»‰ nÃ³i chung chung ráº±ng nguyÃªn nhÃ¢n há» táº¥n cÃ´ng lÃ  nháº±m ngÄƒn cháº·n dÃ²ng váº­n chuyá»ƒn vÅ© khÃ­ tá»« Syria cá»§a tá»• chá»©c Hezbollah.', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '2017-02-27 15:51:22', '2017-02-27 15:51:22'),
(49, 0, NULL, NULL, NULL, 'Nga tung robot chiáº¿n Ä‘áº¥u hiá»‡n Ä‘áº¡i nháº¥t Ä‘áº¿n Syria', NULL, 'Nga vá»«a triá»ƒn khai máº«u robot chiáº¿n Ä‘áº¥u hiá»‡n Ä‘áº¡i nháº¥t Uran-9 Ä‘áº¿n thá»­ lá»­a táº¡i chiáº¿n trÆ°á»ng Syria.', 'HÃ¬nh áº£nh lan truyá»n trÃªn cÃ¡c diá»…n Ä‘Ã n máº¡ng xÃ£ há»™i táº¡i Syria cho tháº¥y máº«u robot chiáº¿n Ä‘áº¥u Uran-9 hiá»‡n Ä‘áº¡i nháº¥t cá»§a Nga tham gia cuá»™c chiáº¿n chá»‘ng NhÃ  nÆ°á»›c Há»“i giÃ¡o tá»± xÆ°ng (IS) táº¡i quá»‘c gia Trung ÄÃ´ng nÃ y, theo Live Journal.\r\n\r\nTrÆ°á»›c Ä‘Ã³, chuyÃªn gia quÃ¢n sá»± Nga, biÃªn táº­p tá» \"Tiá»m lá»±c vÅ© khÃ­ quá»‘c gia\", Viktor Murakhovski cÅ©ng cÃ³ phÃ¡t biá»ƒu Ã¡m chá»‰ káº¿ hoáº¡ch sá»­ dá»¥ng loáº¡i robot uy lá»±c táº¡i Syria.\r\n\r\n\"Viá»‡c Nga triá»ƒn khai robot phÃ¡ mÃ¬n Uran-6 vÃ  cÃ¡c dÃ²ng robot chiáº¿n Ä‘áº¥u Soratnik vÃ  Nerekhta tá»›i Syria khÃ´ng pháº£i lÃ  bÃ­ máº­t. Sáº¯p tá»›i, nhÆ° nhá»¯ng gÃ¬ truyá»n thÃ´ng Anh Ä‘á» cáº­p, khÃ´ng loáº¡i trá»« kháº£ nÄƒng chiáº¿n trÆ°á»ng nÃ y sáº½ xuáº¥t hiá»‡n máº«u robot Uran-9 vÃ  nhiá»u phÆ°Æ¡ng tiá»‡n khÃ¡c\", Ã´ng Murakhovski cho biáº¿t.', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '2017-03-01 17:37:31', '2017-03-01 17:37:31'),
(50, 0, NULL, NULL, NULL, 'aaaaaaaaaaaaaaa', NULL, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '2017-03-01 17:49:15', '2017-03-01 17:49:15'),
(51, 0, NULL, NULL, NULL, 'bbbbbbbbbbbbbbb', NULL, 'bbbbbbbbbbb', 'bbbbbbbbbbbbbbbb', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '2017-03-01 18:55:18', '2017-03-01 18:55:18'),
(53, 0, NULL, NULL, NULL, 'ssssssssssssssssssssss', NULL, '', 'sssssssssssssssssssssssssss', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '2017-03-01 20:21:34', '2017-03-01 20:21:34'),
(54, 0, NULL, NULL, NULL, 'test', NULL, 'fdddddddddddd', 'fdasssssssssdddddddddddddddddd', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '2017-03-01 20:22:37', '2017-03-01 20:22:37'),
(57, 0, NULL, NULL, NULL, 'ffffffffffffffffffffffff', NULL, '', '', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, '2017-03-01 20:30:54', '2017-03-01 20:30:54'),
(70, 9, NULL, NULL, NULL, '  Syria phÃ¡ há»§y Ä‘oÃ n xe quÃ¢n sá»± cá»§a IS á»Ÿ Deir Ezzor', 1, ' Trong hoáº¡t Ä‘á»™ng chá»‘ng khá»§ng bá»‘ cá»§a quÃ¢n Ä‘á»™i Syria ngÃ y 1-3, cÃ¡c chiáº¿n Ä‘áº¥u cÆ¡ nÆ°á»›c nÃ y Ä‘Ã£ nháº¯m má»¥c tiÃªu vÃ  táº¥n cÃ´ng trÃºng Ä‘oÃ n xe quÃ¢n sá»± dÃ i cá»§a Tá»• chá»©c NhÃ  nÆ°á»›c Há»“i giÃ¡o tá»± xÆ°ng (IS).				', ' Nháº­n Ä‘Æ°á»£c thÃ´ng tin chÃ­nh xÃ¡c tá»« cÆ¡ quan an ninh trong nÆ°á»›c vá» viá»‡c má»™t Ä‘oÃ n xe quÃ¢n sá»± cá»§a IS Ä‘ang di chuyá»ƒn trÃªn tuyáº¿n Ä‘Æ°á»ng tá»« Raqqa Ä‘áº¿n Deir Ezzor, lá»±c lÆ°á»£ng khÃ´ng quÃ¢n Syria ngay sau Ä‘Ã³ Ä‘Ã£ tiáº¿n hÃ nh má»™t cuá»™c táº¥n cÃ´ng nháº¯m trÃºng Ä‘oÃ n xe nÃ y, phÃ¡ há»§y háº§u háº¿t cÃ¡c phÆ°Æ¡ng tiá»‡n, tiÃªu diá»‡t má»™t sá»‘ lÆ°á»£ng lá»›n nhá»¯ng tÃªn khá»§ng bá»‘ ngá»“i trÃªn xe\", má»™t nguá»“n tin quÃ¢n Ä‘á»™i Syria cho biáº¿t.\r\n\r\nNgoÃ i chiáº¿n tháº¯ng má»›i Ä‘áº¡t Ä‘Æ°á»£c nÃ y, cÃ¡c mÃ¡y bay chiáº¿n Ä‘áº¥u Syria cÅ©ng Ä‘Ã£ tiáº¿n hÃ nh dá»™i bom hang á»• vÃ  vá»‹ trÃ­ cá»§a IS trong khu phá»‘ al-Hamidiyeh, ngá»n nÃºi al-Thardah vÃ  al-Mohandeseen, khu vá»±c á»Ÿ gáº§n sÃ¢n bay Deir Ezzor, gÃ¢y thiá»‡t háº¡i náº·ng cho nhá»¯ng káº» khá»§ng bá»‘ cáº£ vá» nhÃ¢n lá»±c vÃ  trang thiáº¿t bá»‹ quÃ¢n sá»±.\r\n\r\nTrong khi Ä‘Ã³, lá»±c lÆ°á»£ng bá»™ binh cá»§a quÃ¢n Ä‘á»™i Syria Ä‘Ã£ thá»±c hiá»‡n cÃ¡c cuá»™c táº¥n cÃ´ng dá»“n Ä‘áº­p vÃ o vá»‹ trÃ­ cá»§a IS gáº§n Lá»¯ Ä‘oÃ n Tamin, á»Ÿ ngoáº¡i Ã´ phÃ­a nam cá»§a thÃ nh phá»‘ Deir Ezzor. Hiá»‡n phiáº¿n quÃ¢n Ä‘ang loay hoay tÃ¬m cÃ¡ch Ä‘á»‘i phÃ³ vá»›i nhá»¯ng Ä‘Ã²n táº¥n cÃ´ng uy lá»±c cá»§a quÃ¢n chÃ­nh phá»§.						', NULL, '0000-00-00 00:00:00', ' quan he quoc te', NULL, NULL, '2017-03-02 13:15:33', '2017-03-02 13:15:33'),
(71, 11, NULL, NULL, NULL, '  Viá»‡t Nam sáºµn sÃ ng há»— trá»£ cÃ´ng dÃ¢n ÄoÃ n Thá»‹ HÆ°Æ¡ng', 0, ' 							Trao Ä‘á»•i vá»›i PV DÃ¢n trÃ­ trÆ°a nay 2/3, Chá»§ tá»‹ch LiÃªn Ä‘oÃ n Luáº­t sÆ° Viá»‡t Nam, Äáº¡i biá»ƒu Quá»‘c há»™i Äá»— Ngá»c Thá»‹nh cho biáº¿t, LiÃªn Ä‘oÃ n Luáº­t sÆ° sáºµn sÃ ng há»— trá»£ phÃ¡p lÃ½ cho cÃ´ng dÃ¢n ÄoÃ n Thá»‹ HÆ°Æ¡ng', ' 							Theo Ã´ng Äá»— Ngá»c Thá»‹nh, LiÃªn Ä‘oÃ n Luáº­t sÆ° Viá»‡t Nam Ä‘Ã£ trao Ä‘á»•i, Ä‘á» xuáº¥t vá»›i Bá»™ Ngoáº¡i giao, Bá»™ TÆ° phÃ¡p Ä‘á»ƒ Ä‘Æ°á»£c cá»­ luáº­t sÆ° tham gia há»— trá»£ phÃ¡p lÃ½ cho cÃ´ng dÃ¢n Viá»‡t Nam Äá»— Thá»‹ HÆ°Æ¡ng cÃ³ dáº¥u hiá»‡u pháº¡m tá»™i Ä‘ang Ä‘Æ°á»£c toÃ  Ã¡n á»Ÿ Malaysia Ä‘Æ°a ra xÃ©t xá»­.\r\n\r\nâ€œBá»™ TÆ° phÃ¡p vÃ  Bá»™ Ngoáº¡i giao Ä‘Ã£ ghi nháº­n Ä‘á» xuáº¥t vÃ  cho biáº¿t sáº½ cÃ³ thÃ´ng bÃ¡o pháº£n há»“i tá»›i LiÃªn Ä‘oÃ n Luáº­t sÆ° Viá»‡t Nam. ChÃºng tÃ´i cÅ©ng Ä‘Ã£ trao Ä‘á»•i vá»›i má»™t sá»‘ luáº­t sÆ°, há» Ä‘á»u sáºµn sÃ ng tham gia há»— trá»£ phÃ¡p lÃ½ trong vá»¥ Ã¡n nÃ y trÃªn tinh tháº§n náº¿u Ä‘Æ°á»£c NhÃ  nÆ°á»›c há»— trá»£ thÃ¬ tá»‘t nháº¥t, náº¿u khÃ´ng thÃ¬ há» sáº½ tá»± bá» tiá»n ra Ä‘á»ƒ thá»±c hiá»‡nâ€- Ã´ng Thá»‹nh nÃ³i.\r\n\r\nLuáº­t sÆ° Äá»— Ngá»c Thá»‹nh kháº³ng Ä‘á»‹nh, khi má»™t cÃ´ng dÃ¢n Viá»‡t Nam ra nÆ°á»›c ngoÃ i thÃ¬ pháº£i Ä‘Æ°á»£c Bá»™ Ngoáº¡i giao cáº¥p há»™ chiáº¿u. ChÃ­nh vÃ¬ tháº¿ Ä‘á»ƒ tham gia báº£o vá»‡ cho cÃ´ng dÃ¢n ÄoÃ n Thá»‹ HÆ°Æ¡ng pháº£i Ä‘Æ°á»£c sá»± Ä‘á»“ng Ã½ cá»§a Bá»™ Ngoáº¡i giao vÃ  cÃ³ há»— trá»£ cá»§a cÆ¡ quan nhÃ  nÆ°á»›c Viá»‡t Nam.\r\n\r\nâ€œCÃ¡c luáº­t sÆ° muá»‘n tham gia há»— trá»£ phÃ¡p lÃ½ trong vá»¥ Ã¡n nÃ y Ä‘á»u lÃ  cÃ¡c luáº­t sÆ° cÃ³ kinh nghiá»‡m quá»‘c táº¿, cÃ³ Ä‘áº§y Ä‘á»§ kháº£ nÄƒng vá» tiáº¿ng Anh, cÃ³ nhiá»u kinh nghiá»‡m Ä‘á»ƒ sáºµn sÃ ng tham gia báº£o vá»‡ cho cÃ´ng dÃ¢n Viá»‡t Namâ€- Chá»§ tá»‹ch LiÃªn Ä‘oÃ n Luáº­t sÆ° Viá»‡t Nam Äá»— Ngá»c Thá»‹nh nháº¥n máº¡nh.						', NULL, '0000-00-00 00:00:00', ' ', NULL, NULL, '2017-03-02 13:16:34', '2017-03-02 13:16:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
