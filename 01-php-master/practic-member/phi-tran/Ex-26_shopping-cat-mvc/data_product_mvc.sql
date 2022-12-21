-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 27, 2020 lúc 02:03 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data_product_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(5) NOT NULL,
  `cat_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_title`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Đồng hồ'),
(4, 'Tai nghe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(5) NOT NULL,
  `page_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` varchar(10) NOT NULL,
  `page_content` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `page_title`, `created_at`, `page_content`) VALUES
(1, 'Giới thiệu', '27/06/2009', '<p>[Giới thiệu] Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\nChúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu \"Nội dung, nội dung, nội dung\" là nó khiến văn bản giống thật hơn, bình thường hơn. Nhiều phần mềm thiết kế giao diện web và dàn trang ngày nay đã sử dụng Lorem Ipsum làm đoạn văn bản giả, và nếu bạn thử tìm các đoạn \"Lorem ipsum\" trên mạng thì sẽ khám phá ra nhiều trang web hiện vẫn đang trong quá trình xây dựng. Có nhiều phiên bản khác nhau đã xuất hiện, đôi khi do vô tình, nhiều khi do cố ý (xen thêm vào những câu hài hước hay thông tục).\r\n</p>'),
(2, 'Liên hệ', '27/06/2019', '<p>[Liên hệ] Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(7) NOT NULL,
  `product_title` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `qty` smallint(100) NOT NULL,
  `product_thumb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cat_id` smallint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_title`, `price`, `code`, `qty`, `product_thumb`, `product_desc`, `product_content`, `cat_id`) VALUES
(1, 'iPhone 11 Pro Max 64GB', 33990000, 'UNI#1', 0, 'https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-green-400x400.jpg', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', '<p>Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.</p>\r\n        <p><img src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd14-1.jpg\"></p>', 1),
(2, 'iPhone 11 Pro Max 512GB', 40990000, 'UNI#2', 0, 'https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-gold-400x400.jpg', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', '<p>Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.</p>\r\n        <p><img src=\"https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-tgdd8.jpg\"></p>', 1),
(3, 'Samsung Galaxy S20+', 21990000, 'UNI#3', 0, 'https://cdn.tgdd.vn/Products/Images/42/217936/samsung-galaxy-s20-plus-600x600-fix-400x400.jpg', 'Chiếc điện thoại Samsung Galaxy S20 Plus - Siêu phẩm với thiết màn hình tràn viền, hiệu năng đỉnh cao kết hợp cùng nhiều đột phá về công nghệ dẫn đầu thế giới smartphone.', '<p>Chiếc điện thoại Samsung Galaxy S20 Plus - Siêu phẩm với thiết màn hình tràn viền, hiệu năng đỉnh cao kết hợp cùng nhiều đột phá về công nghệ dẫn đầu thế giới smartphone.</p>\r\n        <p><img src=\"https://cdn.tgdd.vn/Products/Images/42/217936/samsung-galaxy-s20-plus1-1.jpg\"></p>', 1),
(4, 'Điện thoại Huawei Mate 30 Pro', 19990000, 'UNI#7', 0, 'https://cdn.tgdd.vn/Products/Images/42/199046/huawei-mate-30-pro-600x600-1-400x400.jpg', 'Những năm gần đây thì Huawei luôn mang tới cho người dùng sự bất ngờ với những trang bị đột phá lần đầu tiên xuất hiện trên chiếc smartphone của mình và mới đây chiếc Huawei Mate 30 Pro đã chính thức ra mắt và nó vẫn mang trong mình rất nhiều công nghệ mang tính đột phá của Huawei.', '<p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>\r\n        <p><img src=\"https://cdn.tgdd.vn/Products/Images/42/199046/huawei-mate-30-pro-tgdd7-1.jpg\"></p>', 1),
(5, 'Macbook Pro Touch 16 inch 2019', 56990000, 'UNI#4', 0, 'https://cdn.tgdd.vn/Products/Images/44/215941/macbook-pro-16-201926-macbookprotouch16inch-1-400x400.jpg', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', '<p>Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.</p>\r\n        <p><img src=\"https://cdn.tgdd.vn/Products/Images/44/215941/macbook-pro-16-201914.jpg\"></p>', 2),
(6, 'Apple Macbook Pro Touch 2019', 37990000, 'UNI#5', 0, 'https://cdn.tgdd.vn/Products/Images/44/213870/apple-macbook-pro-touch-2019-i5-14ghz-8gb-256gb-m-applemacbookprotouch2019-400x400.jpg', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', '<p>Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.</p>\r\n        <p><img src=\"https://cdn.tgdd.vn/Products/Images/44/218493/apple-macbook-air-2019-i5-mvfl2sa-a-corei5.jpg\"></p>', 2),
(7, 'Apple MacBook Air 2019', 32990000, 'UNI#6', 0, 'https://cdn.tgdd.vn/Products/Images/44/218493/apple-macbook-air-2019-i5-16ghz-8gb-256gb-mvfl2sa-400x400.jpg', 'Chiếc điện thoại Samsung Galaxy S20 Plus - Siêu phẩm với thiết màn hình tràn viền, hiệu năng đỉnh cao kết hợp cùng nhiều đột phá về công nghệ dẫn đầu thế giới smartphone.', '<p>Chiếc điện thoại Samsung Galaxy S20 Plus - Siêu phẩm với thiết màn hình tràn viền, hiệu năng đỉnh cao kết hợp cùng nhiều đột phá về công nghệ dẫn đầu thế giới smartphone.</p>\r\n        <p><img src=\"https://cdn.tgdd.vn/Products/Images/44/218493/apple-macbook-air-2019-i5-mvfl2sa-a-corei5.jpg\"></p>', 2),
(8, 'Laptop HP Palivion 15', 26690000, 'UNI#8', 0, 'https://cdn.tgdd.vn/Products/Images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-4-600x600.jpg', 'Laptop HP Pavilion Power 15-cx0178TX 5EF41PA là một cỗ máy chiến game thực thụ với cấu hình mạnh mẽ, thách thức các tựa game hot hiện nay. Máy có thiết kế hiện đại, kiểu dáng mạnh mẽ và đẳng cấp, sự kết hợp giữa hai tông màu xanh và đen lạ mắt và ấn tượng.', '<p>Laptop HP Pavilion Power 15-cx0178TX 5EF41PA có kiểu dáng hiện đại, vỏ nhựa màu đen với logo HP nổi bật trên nắp máy, bốn góc cạnh được bo tròn vừa phải, mang đến vẻ đẹp mạnh mẽ và cứng cáp cho chiếc máy.</p>\r\n        <p><img src=\"https://cdn.tgdd.vn/Products/Images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-1.jpg\"></p>', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
