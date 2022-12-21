-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 04:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `create_at` date NOT NULL,
  `page_content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `page_title`, `create_at`, `page_content`) VALUES
(1, 'Giới thiệu', '2019-12-20', '[Giới thiệu] Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus perspiciatis veritatis illo quis possimus, hic quae et blanditiis fugiat unde! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus cum molestiae non facilis, temporibus placeat soluta, in officiis ipsum natus recusandae earum velit qui, iste, enim eius tempora totam voluptatem neque sed aut libero aperiam dolorum. Facilis delectus error odio pariatur quae at, atque laborum nostrum omnis porro nulla '),
(2, 'Liên hệ', '2016-12-06', '[Liên hệ] Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus perspiciatis veritatis illo quis possimus, hic quae et blanditiis fugiat unde! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestias quia vitae rem iusto fuga expedita commodi sunt eius saepe, omnis distinctio blanditiis, repudiandae odio corporis adipisci nulla. Quos, doloribus delectus tenetur voluptate aperiam cum vitae sapiente distinctio autem, minus ducimus, iste, esse error est nihil ratio');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_title` varchar(250) NOT NULL,
  `prices` int(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_thumb` varchar(250) NOT NULL,
  `product_content` varchar(1000) NOT NULL,
  `cat_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_title`, `prices`, `code`, `product_desc`, `product_thumb`, `product_content`, `cat_id`) VALUES
(1, 'iPhone 11 64GB', 19990000, 'UNI#1', 'Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019. Có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như chiếc', 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-red-2-400x460-400x460.png', '<p>Nói về nâng cấp thì camera chính là điểm có nhiều cải tiến nhất trên thế hệ </p><p><img img src=\'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-tgdd42.jpg\'></p>', 1),
(2, 'Điện thoại iPhone 11 Pro Max 256GB', 35990000, 'UNI#2', 'là chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019 và quả thực chiếc ', 'https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-black-400x460.png', '<p>Camera là một trong những điểm nâng cấp mạnh mẽ nhất năm nay Apple mang đến cho chiếc iPhone 11 Pro Max.</p><p><img img src=\'https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd15-1.jpg\'></p>', 1),
(3, 'Điện thoại iPhone Xs Max 256GB', 28990000, 'UNI#3', 'iPhone Xs Max được Apple trang bị cho con chip mới toanh hàng đầu của hãng mang tên ', 'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-white-400x460.png', '<p> Sau 1 năm mong chờ, chiếc smartphone  cao cấp nhất của Apple đã chính thức ra mắt mang tên . Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.</p><p><img img src=\'https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-black-400x460.png\'></p>', 1),
(4, 'Laptop Apple Macbook Pro Touch 2019 i5 1.4GHz/8GB/256GB (MUHP2SA/A)', 37990000, 'UNI#4', 'Ưu đãi khi mua Phụ Kiện cùng Apple Macbook Pro Touch 2019 i5 1.4GHz/8GB/256GB (MUHP2SA/A)', 'https://cdn.tgdd.vn/Products/Images/44/213870/apple-macbook-pro-touch-2019-i5-14ghz-8gb-256gb-m-applemacbookprotouch2019-600x600.jpg', '<p> được trang bị màn hình Retina tuyệt đẹp với công nghệ True Tone mang đến những thước phim cực sống động. Hơn nữa, cấu hình Intel Core i5 mạnh mẽ đưa bạn đến những trải nghiệm làm việc cực mượt mà khi thiết kế đồ hoạ hay chơi game giải trí.</p>\r\n							<p><img src=\'https://cdn.tgdd.vn/Products/Images/44/213870/Slider/vi-vn-macbook-pro-touch-2019.jpg\'></p>', 2),
(5, 'Laptop Apple MacBook Air 2019 i5 1.6GHz/8GB/256GB (MVFL2SA/A)', 34990000, 'UNI#5', 'Ưu đãi khi mua Phụ Kiện cùng Apple Macbook Pro Touch 2019 i5 1.4GHz/8GB/256GB (MUHP2SA/A)', 'https://cdn.tgdd.vn/Products/Images/44/218493/apple-macbook-air-2019-i5-16ghz-8gb-256gb-mvfl2sa-600x600.jpg', '<p>  i5 (MVFL2SA/A) là phiên bản nâng cấp nhẹ so với MacBook Air 2018. Màn hình Retina nay được trang bị công nghệ Truetone hiện đại, có nhiều cải tiến trên bàn phím cánh bướm.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/44/218493/Slider/apple-macbook-air-2019-i5-mvfl2sa-a-125120-085127.jpg\'></p>', 2),
(6, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', 19990000, 'UNI#6', 'Ưu đãi khi mua Phụ Kiện cùng Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', 'https://cdn.tgdd.vn/Products/Images/44/106875/apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg', '<p>  , có thiết kế siêu mỏng và nhẹ, vỏ nhôm nguyên khối sang trọng. Máy có hiệu năng ổn định, thời lượng pin cực lâu 12 giờ, phù hợp cho hầu hết các nhu cầu làm việc và giải trí. </p><p><img src=\'https://cdn.tgdd.vn/Products/Images/44/106875/apple-macbook-air-mqd32sa-a-i5-5350u-4.jpg\'></p>', 2),
(7, 'Điện thoại iPhone 8 Plus 64GB', 14999000, 'UNI#1', 'Đặc điểm nổi bật của iPhone 8 Plus 64GB\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim\r\n\r\nThừa hưởng những thiết kế đã đạt đến độ chuẩn mực, thế hệ iPhone 8 Plus thay đổi phong cách bóng bẩy hơn và bổ sung hàng loạt tính năng cao cấp cho trải nghiệm sử dụng vô cùng tuyệt vời.', 'https://cdn.tgdd.vn/Products/Images/42/114110/iphone-8-plus-1-400x460.png', 'Thiết kế từ kính và kim loại\r\nSmartphone iPhone 8 Plus giữ nguyên hoàn toàn những đường nét thiết kế đã hoàn thiện từ thế hệ trước nhưng sử dụng phong cách 2 mặt kính cường lực kết hợp bộ khung kim loại.\r\n\r\nThiết kế điện thoại iPhone 8 Plus 64GB\r\n\r\nMặt lưng kính bo cong 2.5D thời thượng, khung kim loại được gia cố cứng cáp, bền bỉ hơn với 7 lớp xử lý màu sơn, hạn chế bong tróc.', 1),
(10, 'Điện thoại iPhone 11 128GB', 23190000, 'UNI#1', 'Được xem là phiên bản iPhone \"giá rẻ\" trong bộ 3 iPhone mới ra mắt nhưng iPhone 11 128GB vẫn sở hữu cho mình rất nhiều ưu điểm mà hiếm có một chiếc smartphone nào khác sở hữu.', 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-green-400x460.png', 'Nâng cấp mạnh mẽ về cụm camera\r\nNăm nay với iPhone 11 thì Apple đã nâng cấp khá nhiều về camera nếu so sánh với chiếc iPhone Xr 128GB năm ngoái.\r\n\r\nĐiện thoại iPhone 11 128GB | Cụm camera kép phía sau\r\n\r\nChúng ta đã có bộ đôi camera kép thay vì camera đơn như trên thế hệ cũ và với một camera góc siêu rộng thì bạn cũng có nhiều hơn những lựa chọn khi chụp hình.\r\n\r\nĐiện thoại iPhone 11 128GB | Giao diện chụp ảnh\r\n\r\nTrước đây để lấy được hết kiến trúc của một tòa nhà, để ghi lại hết sự hùng vĩ của một ngọn núi thì không còn cách nào khác là bạn phải di chuyển ra khá xa để chụp.', 1),
(11, 'Điện thoại iPhone 11 256GB\r\n', 25690000, 'UNI#1', 'iPhone 11 256GB là chiếc máy có mức giá \"dễ chịu\" trong bộ 3 iPhone vừa được Apple giới thiệu và nếu bạn muốn được trải nghiệm những nâng cấp về camera mới hay hiệu năng hàng đầu mà lại không muốn bỏ ra quá nhiều tiền thì đây thực sự là lựa chọn hàng đầu dành cho bạn.', 'https://cdn.tgdd.vn/Products/Images/42/210648/iphone-11-256gb-black-400x460.png', 'Hiệu năng vẫn tương đương phiên bản Pro Max\r\nMặc dù có mức giá rẻ hơn nhưng không vì vậy mà iPhone 11 bị cắt giảm đi về mặt cấu hình.\r\n\r\nĐiện thoại iPhone 11 256GB | Hiệu năng mạnh mẽ\r\n\r\nMáy vẫn sẽ sở hữu cho mình con chip Apple A13 Bionic mạnh mẽ cùng 4 GB RAM tương đương với người anh em đắt tiền iPhone 11 Pro Max.\r\n\r\nĐiện thoại iPhone 11 256GB | Trải nghiệm chơi game trên iPhone 11\r\n\r\nPhiên bản này sẽ có bộ nhớ lên tới 256 GB thoải mái cho bạn cài đặt game ứng dụng hay lưu trữ video độ phân giải cao.\r\n\r\nĐiện thoại iPhone 11 256GB | Trải nghiệm chơi game trên iPhone 11\r\n\r\nHiệu năng của những chiếc iPhone luôn được đánh giá rất cao và hiện tại để tìm được một đối thủ có thể đánh bại iPhone 11 256GB là điều không hề dễ dàng chút nào.\r\n\r\nĐiện thoại iPhone 11 256GB | Điểm hiệu năng Antutu Benchmark\r\n\r\nTrong sự kiện ra mắt sản phẩm, Apple đã cho biết Apple A13 là CPU nhanh nhất trên giới smartphone hiện nay và bạn sẽ cảm thấy rất hài lòng với nó.', 1),
(12, 'Điện thoại iPhone 11 128GB', 23190000, 'UNI#1', 'Được xem là phiên bản iPhone \"giá rẻ\" trong bộ 3 iPhone mới ra mắt nhưng iPhone 11 128GB vẫn sở hữu cho mình rất nhiều ưu điểm mà hiếm có một chiếc smartphone nào khác sở hữu.', 'https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-128gb-green-400x460.png', 'Nâng cấp mạnh mẽ về cụm camera\r\nNăm nay với iPhone 11 thì Apple đã nâng cấp khá nhiều về camera nếu so sánh với chiếc iPhone Xr 128GB năm ngoái.\r\n\r\nĐiện thoại iPhone 11 128GB | Cụm camera kép phía sau\r\n\r\nChúng ta đã có bộ đôi camera kép thay vì camera đơn như trên thế hệ cũ và với một camera góc siêu rộng thì bạn cũng có nhiều hơn những lựa chọn khi chụp hình.\r\n\r\nĐiện thoại iPhone 11 128GB | Giao diện chụp ảnh\r\n\r\nTrước đây để lấy được hết kiến trúc của một tòa nhà, để ghi lại hết sự hùng vĩ của một ngọn núi thì không còn cách nào khác là bạn phải di chuyển ra khá xa để chụp.', 1),
(13, 'Điện thoại iPhone 11 256GB\r\n', 25690000, 'UNI#1', 'iPhone 11 256GB là chiếc máy có mức giá \"dễ chịu\" trong bộ 3 iPhone vừa được Apple giới thiệu và nếu bạn muốn được trải nghiệm những nâng cấp về camera mới hay hiệu năng hàng đầu mà lại không muốn bỏ ra quá nhiều tiền thì đây thực sự là lựa chọn hàng đầu dành cho bạn.', 'https://cdn.tgdd.vn/Products/Images/42/210648/iphone-11-256gb-black-400x460.png', 'Hiệu năng vẫn tương đương phiên bản Pro Max\r\nMặc dù có mức giá rẻ hơn nhưng không vì vậy mà iPhone 11 bị cắt giảm đi về mặt cấu hình.\r\n\r\nĐiện thoại iPhone 11 256GB | Hiệu năng mạnh mẽ\r\n\r\nMáy vẫn sẽ sở hữu cho mình con chip Apple A13 Bionic mạnh mẽ cùng 4 GB RAM tương đương với người anh em đắt tiền iPhone 11 Pro Max.\r\n\r\nĐiện thoại iPhone 11 256GB | Trải nghiệm chơi game trên iPhone 11\r\n\r\nPhiên bản này sẽ có bộ nhớ lên tới 256 GB thoải mái cho bạn cài đặt game ứng dụng hay lưu trữ video độ phân giải cao.\r\n\r\nĐiện thoại iPhone 11 256GB | Trải nghiệm chơi game trên iPhone 11\r\n\r\nHiệu năng của những chiếc iPhone luôn được đánh giá rất cao và hiện tại để tìm được một đối thủ có thể đánh bại iPhone 11 256GB là điều không hề dễ dàng chút nào.\r\n\r\nĐiện thoại iPhone 11 256GB | Điểm hiệu năng Antutu Benchmark\r\n\r\nTrong sự kiện ra mắt sản phẩm, Apple đã cho biết Apple A13 là CPU nhanh nhất trên giới smartphone hiện nay và bạn sẽ cảm thấy rất hài lòng với nó.', 1),
(14, 'Laptop Apple Macbook Air 2020 i3 1.1GHz/8GB/256GB (MWTL2SA/A)\r\n\r\n', 28990000, 'UNI#5', 'MacBook Air 2020 i3 mới với thiết kế sang trọng, hiệu năng khá, bàn phím Magic lần đầu tiên xuất hiện trên dòng Macbook Air. Với nhiều tính năng hiện đại, đây là chiếc MacBook Air rất đáng sở hữu với mức giá gần như rẻ nhất từ trước đến nay. ', 'https://cdn.tgdd.vn/Products/Images/44/220174/apple-macbook-air-2020-i3-11ghz-8gb-256gb-600x600.jpg', '\"Cân tất\" ứng dụng văn phòng\r\nMacBook Air phiên bản 2020 có cấu hình gồm CPU Intel Core i3 thế hệ 10 mới nhất hiện nay, RAM 8 GB có nhiều cải tiến, khả năng đồ họa cải thiện tới 80% so với thế hệ 2019.\r\n\r\nKhi sử dụng các thao tác cơ bản như tách nền, cắt ghép hình ảnh trên Photoshop hay mở một lúc khoảng 20 tab Chrome, máy hoạt động mượt và không có hiện tượng giật lag. \r\n\r\nMacBook Air 2020 i3 | CPU Intel Core i3 thế hệ 10\r\n\r\nMáy còn trang bị card đồ họa tích hợp Intel Iris Plus hỗ trợ đồ họa tốt hơn khi sử dụng thiết kế đồ họa 2D.\r\n\r\nMacBook Air 2020 i3 | Intel Iris Plus\r\n\r\nLaptop vận hành nhanh chóng nhờ có ổ cứng SSD 256 GB mở máy cực nhanh, xử lí trơn tru các tác vụ thông thường. Bộ nhớ 256 GB đủ rộng để lưu được rất nhiều dữ liệu. \r\n\r\nMacBook Air 2020 i3 | SSD 256 GB\r\n\r\nTheo như Apple công bố, MacBook Air 2020 có thời lượng pin sử dụng được khoảng 10 giờ liên tục. Với thời lượng dài như vậy, MacBook đủ sức đồng hành cùng bạn cả ngày dài học tập và làm việc. \r\n\r\nHiển thị sắc nét, m', 2),
(15, 'Laptop Macbook Pro Touch 16 inch 2019 i7 2.6GHz/16GB/512GB/4GB Radeon Pro 5300M (MVVJ2SA/A)\r\n\r\n', 56990000, 'UNI#5', 'MacBook ProTouch 2019 i7 chiếc laptop cấu hình mạnh mẽ của Apple sẽ đem đến những trải nghiệm mà không phải chiếc laptop nào cũng có được. Thiết kế sang trọng tinh tế, cấu hình khủng, được trang bị card đồ họa và các công nghệ độc quyền của Apple sẽ đem lại nhiều thích thú cho người dùng.', 'https://cdn.tgdd.vn/Products/Images/44/215941/macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 'Thiết kế tinh tế đẳng cấp\r\nVỏ kim loại nguyên khối toát lên vẻ ngoài sang trọng, mỏng chỉ 16.2 mm - trọng lượng 2 kg, cùng với những chi tiết được gia công tỉ mỉ đạt đến độ tinh xảo.\r\n\r\nLaptop Macbook Pro Touch 2019 i7 với thiết kế đẳng cấp\r\n\r\nHiệu năng mạnh mẽ \r\nMacBook Pro Touch đáp ứng mọi tác vụ nặng với cấu hình khủng, máy được trang bị CPU Intel Core i7 và RAM 16 GB thì chiếc MacBook Pro Touch phù hợp với tất cả công việc từ các ứng dụng văn phòng như Office 365 cho đến lập trình, xử lý hình ảnh độ phân giải cao, kết xuất đồ họa 3D, chỉnh sửa nhiều luồng video 4K và nhiều tác vụ chuyên nghiệp khác. Để đáp ứng hầu hết các công việc thì laptop còn được trang bị card đồ họa rời Radeon Pro 5300M 4GB cho trải nghiệm hình ảnh mượt mà, không giật lag, sử dụng các ứng dụng đồ họa kỹ thuật cực tốt.\r\n\r\nLaptop Macbook Pro Touch 2019 i7 với cấu hình mạnh mẽ\r\n\r\nỔ cứng SSD cực nhanh - lưu trữ lớn\r\nKhông chỉ có cấu hình mạnh mẽ, MacBook Pro Touch 2019 còn có tốc độ xử lí cực nhanh nhờ được tran', 2),
(16, 'Laptop HP Envy 13 aq1022TU i5 10210U/8GB/512GB/Win10 (8QN69PA)\r\n\r\n', 22690000, 'UNI#3', 'Laptop HP Envy 13 aq1022TU i5 (8QN69PA) là chiếc laptop doanh nhân cao cấp có thiết kế siêu mỏng nhẹ và cấu hình mạnh. Bảo mật vân tay hiện đại, ổ cứng SSD cực nhanh là những điểm cộng nổi bật của chiếc laptop này.', 'https://cdn.tgdd.vn/Products/Images/44/217269/hp-envy-13-aq1022tu-i5-10210u-8gb-512gb-win10-8qn-600x600.jpg', 'CPU Intel thế hệ mới nhất\r\nBộ vi xử lí Intel Core i5 thế hệ mới kết hợp với RAM 8 GB cùng hệ điều hành Windows 10 cho máy hiệu năng mạnh, xử lí nhanh mọi tác vụ văn phòng (như bộ phần mềm Microsoft Office), đồ họa mượt mà trên các ứng dụng phổ biến giúp bạn tự tin giải quyết công việc, giải trí hằng ngày.\r\n\r\nLaptop HP Envy 13 aq1022TU i5 trang bị CPU Intel Core i5 thế hệ mới nhất\r\n\r\nXem thêm: Vi xử lí Intel thế hệ 10.\r\n\r\nThiết kế siêu mỏng nhẹ \r\nĐược hoàn thiện từ vỏ kim loại nguyên khối phủ sơn vàng óng, HP Envy 13 có ngoại hình sang trọng và cực kì thu hút. Laptop được thiết kế siêu mỏng nhẹ chỉ xấp xỉ một vài quyển sách, trọng lượng chỉ 1.17 kg và độ dày 14.7 mm cho bạn dễ dàng cho vào balo đem theo bên mình.\r\n\r\nLaptop HP Envy 13 aq1022TU i5 thiết kế siêu mỏng nhẹ\r\n\r\nTốc độ cực nhanh\r\nPhản hồi mọi thao tác chỉ trong tích tắc với ổ cứng SSD 512 GB M.2 PCIe. Với HP Envy 13, bạn chỉ cần chưa đến 10 giây để mở máy và 3-5 giây để mở các ứng dụng. Lưu trữ thoải mái với 512 GB dung lượng, ', 3),
(17, 'Laptop Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)\r\n\r\n', 19999000, 'UNI#3', 'Laptop Dell Vostro 3590 i7 (GRMGK2) là phiên bản laptop đồ họa kĩ thuật có thiết kế hiện đại, cấu hình khỏe với vi xử lí gen 10 và card đồ họa rời. Đây chính là chiếc laptop đáng cân nhắc đối với dân đồ họa hay sinh viên khối ngành kĩ thuật.', 'https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-220718-600x600.jpg', 'Hiệu năng ấn tượng \r\nDell Vostro sử dụng CPU Intel Core i7 Comet Lake thế hệ 10 mạnh mẽ, được cải tiến về hiệu năng, sử dụng được các ứng dụng nặng, chơi được các tựa game phổ biến. \r\n\r\nRAM 8 GB mang lại khả năng xử lí đa nhiệm mượt mà, dễ dàng chuyển đổi giữa các ứng dụng đang mở. Máy còn hỗ trợ 1 khe RAM 16 GB cho người dùng dễ nâng cấp. \r\n\r\nLaptop Dell Vostro 3590 i7 (GRMGK2) là phiên bản laptop đồ họa kĩ thuật \r\n\r\nXem thêm: Tìm hiểu về vi xử lí thế hệ 10.\r\n\r\nỔ cứng SSD 256 GB lưu trữ đủ dùng, tốc độ nhanh chóng. Với ổ cứng SSD này, bạn chỉ mất khoảng 10-15s để khởi động Windows. \r\n\r\nLaptop Dell Vostro 3590 i7 lưu trữ đủ dùng\r\n\r\nCard đồ họa rời AMD Radeon 610R5, 2GB giúp chạy mượt các ứng dụng đồ họa yêu cầu xử lý hình ảnh ở mức cao, xử lí video không quá phức tạp.\r\n\r\n Laptop Dell Vostro 3590 i7 chạy mượt các ứng dụng đồ họa \r\n\r\nBảo mật vân tay thông minh, kết nối đa dạng\r\nChỉ cần chạm nhẹ, cảm biến sẽ quét vân tay giúp bạn mở khóa thiết bị mà không cần nhập mật khẩu.', 3),
(18, 'Laptop Acer Aspire A315 54 36QY i3 10110U/4GB/256GB/Win10 (NX.HM2SV.001)', 0, 'UNI#3', 'Ngừng Kinh Doanh', 'https://cdn.tgdd.vn/Products/Images/44/212625/acer-aspire-a315-54-36qy-i3-10110u-4gb-256gb-win10-1-600x600.jpg', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cat`
--

CREATE TABLE `tbl_product_cat` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_cat`
--

INSERT INTO `tbl_product_cat` (`cat_id`, `cat_name`) VALUES
(1, 'Điện thoại'),
(2, 'Macbook'),
(3, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `fullname`, `username`, `password`, `email`, `gender`) VALUES
(130, 'Trương Hoàng Vy', 'hoangvy', 'd8ba3f4203b3b58a83e32efb823832b4', 'hoangvy@gmail.com', 'female'),
(131, 'Nguyễn Hoàng Sang', 'hoangsang', 'e88ed14d8d8a50764391189eb23f59a8', '', 'male'),
(132, 'Nguyễn Phi Thoàng', 'phithoang', 'b022351ebf637f828091331afca1c591', '', 'male'),
(133, 'Lý Long Ẩn', 'longan', '8d733408039cf84deeb757f9be9a628b', '', 'male'),
(134, 'Châu Chí Kil', 'chikil', '52f1545055694308c5109bd2df3fbb33', '', 'male'),
(218, 'Lương Hồng Phấn', 'hongphan', '038b83c99fa575eec6ea7f1f0633fb82', 'hongphan@gmail.com', 'female'),
(219, 'Phùng Thị Cẩm Loan', 'camloan', '089ac246ae5a5d1e7b1b7abf0f121f5c', 'camloan@gmail.com', 'female'),
(220, 'Lâm Phi Yến', 'phiyen', '018c5529ce216fc5ae3c658e52f5d55b', 'phiyen@gmail.com', 'female'),
(221, 'Trần Hoàng Gọn', 'hoanggon', '19a7a39b7eb58da58c9951e98ae94230', 'hoanggon@gmail.com', 'male'),
(222, 'Danh Thái Bình', 'danhthaibinh', '9924544a05b4149ea6812cb924b0860d', 'danhthaibinh@gmail.com', 'male'),
(223, 'Thái Minh Tín', 'thaiminhtinh', '1bdc41329c048464e89517338a7464e1', 'thaiminhtin@gmail.com', 'male'),
(224, 'Nguyễn Tuấn Vĩ', 'tuanvy', 'd72af6618e57e5bbf9e10c66aa4ab4a8', 'tuanvy@gmail.com', 'male'),
(225, 'Nguyễn Bình Phương Duy', 'phuongduy', '857fc0887632982617e1cc3c87f79f8e', 'phuongduy@gmail.com', 'male'),
(226, 'Kiều Yến Phi', 'yenphi', 'af12b68e602dadfac3315514a9496121', 'yenphi@gmail.com', 'male'),
(227, 'Phạm Tấn Đạt', 'Tandat', 'fa87519ddbd07e47f1c30a820531e307', 'tandat@gmail.com', 'male'),
(228, 'Đặng Trọng Nhân', 'dangtrongnhan', 'a76593b37ca99612dd53b1505d87ea17', 'dangtrongnhan@gmail.com', 'male'),
(229, 'Vũ Ngọc Anh', 'vungocanh', '9554d3cbc52f91013ca8b437c521105f', 'vungocanh@gmail.com', 'male'),
(230, 'Phạm Phương Toán', 'phuongtoan', '344fab411d1e4d832dd9e03a2486b31f', 'phuongtoan@gmail.com', 'male'),
(231, 'Nguyễn Hải Âu', 'haiaunguyen', '83dc03dc0bfaa9dfb43afd251c01210a', 'haiaunguyen@gmail.com', 'male'),
(232, 'Đào Thanh Huy', 'daothanhhuy', '6d788af8f1b048cbd78bc903b085788a', 'daothanhhuy@gmail.com', 'male'),
(233, 'Đào Thị Diễm', 'daothidiem', 'b10d5685c3851d92d4805135f8fbdcc7', 'daothidiem@gmail.com', 'female'),
(234, 'Nguyễn Thị Yến Ngọc', 'yenngoc', '984343a9f874a2978b5b9aeebab46468', 'yenngoc@gmail.com', 'female'),
(235, 'Lưu Thị Tươi', 'luutuoi', '5055029c88ed39a75f8170b1109296be', 'luutuoi@gmail.com', 'female'),
(237, 'Nguyễn Thùy Dương', 'thuyduong', '8e5f1cf65a0c68d573326532a82ae3c0', 'thuyduong@gmail.com', 'male'),
(238, 'Tạ Thuận Ký', 'thuanky', '3039bae042d9098aca3549d0e5d90e06', 'thuanky@gmail.com', 'male'),
(239, 'Nguyễn Phúc Hiệp', 'phuchiep', '4ba1b540f9198b87203a6b9b9163b0cf', 'phuchiep@gmail.com', 'male'),
(240, 'Phạm Anh Ngân', 'anhngan', '74bcadc36987e8dcf4dd65187d4535f1', 'anhngan@gmail.com', 'male'),
(241, 'Đặng Minh Nhựt', 'minhnhat', 'c28d2d012d7ca63052a296dc36aa6b05', 'minhnhat@gmail.com', 'male'),
(242, 'Thiên Phương Hiền', 'phuonghien', 'c6e7a7a285604d7321dafec5061651ec', 'phuonghien@gmail.com', 'male'),
(243, 'Đoàn Ngọc Toàn', 'doanngoctoan', '396bf48c0f3237ad4ae48114e96185b2', 'doanngoctoan@gmail.com', 'male'),
(244, 'Quach Anh Hào', 'anhhao', 'eaef79a5b4a5a0a508791f522d9098d0', 'anhhao@gmail.com', 'male'),
(245, 'trantran', 'trantran', 'd8ba3f4203b3b58a83e32efb823832b4', 'trantran12c@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

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
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_product_cat` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
