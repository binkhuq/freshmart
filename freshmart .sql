-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2019 lúc 03:48 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `freshmart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(28, '1', 'http://localhost/blog/uploads/banner/home4-slideshow-2.jpg', '2019-11-12 01:38:04', '2019-11-12 01:38:04'),
(29, '2', 'http://localhost/blog/uploads/banner/home2-slideshow-3.jpg', '2019-11-12 01:38:17', '2019-11-12 01:38:17'),
(30, '4', 'http://localhost/blog/uploads/banner/home3-slideshow-3.jpg', '2019-11-12 01:38:44', '2019-11-12 01:38:44'),
(32, '3', 'http://localhost/blog/uploads/banner/home3-slideshow-1.jpg', '2019-11-12 01:39:05', '2019-11-12 01:39:05'),
(33, '6', 'http://localhost/blog/uploads/banner/home1-slideshow-2.jpg', '2019-11-13 03:03:48', '2019-11-13 03:03:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trái cây', 'trai-cay', 1, '2019-09-03 12:44:01', '2019-09-13 00:03:20'),
(3, 'Rau xanh', 'rau-xanh', 1, '2019-09-03 19:12:59', '2019-09-13 00:03:41'),
(6, 'Hải sản', 'hai-san', 1, '2019-09-06 06:35:50', '2019-09-13 00:04:21'),
(7, 'Thịt sạch', 'thit-sach', 1, '2019-09-13 00:29:15', '2019-09-13 00:29:24'),
(8, 'Đồ khô', 'do-kho', 1, '2019-09-13 01:54:08', '2019-09-13 01:54:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comments` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comments`, `created_at`, `updated_at`) VALUES
(2, 'NGUYEN DUC MANH', 'nguyenducmanhbg98@gmail.com', 'đồ tươi và ngon', '2019-11-07 04:39:24', '2019-11-07 04:39:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_09_01_042128_banner', 1),
(3, '2019_09_01_042228_category', 1),
(4, '2019_09_01_042443_orders', 1),
(5, '2019_09_01_042510_product', 1),
(6, '2019_09_01_051950_order_detail', 1),
(7, '2019_11_07_111219_comments', 2),
(8, '2019_11_12_073109_order_detail', 3),
(9, '2019_11_12_074154_order_detail', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `name`, `email`, `phone`, `address`, `payment`, `product_id`, `product_name`, `quantity`, `price`, `status`, `created_at`, `updated_at`) VALUES
(2, 'NGUYEN DUC MANH', 'nguyenducmanhbg98@gmail.com', '342771775', 'Hoàng Liệt-Hoàng Mai-Hà Nội, Hiệp Hòa-Bắc Giang', 'Thanh toán khi nhận hàng', 2, 'Cam sành', 1, 35000, 0, '2019-11-12 01:53:02', '2019-11-13 02:40:34'),
(3, 'NGUYEN DUC MANH', 'nguyenducmanhbg98@gmail.com', '342771775', 'Hoàng Liệt-Hoàng Mai-Hà Nội, Hiệp Hòa-Bắc Giang', 'Thanh toán khi nhận hàng', 2, 'Cam sành', 2, 35000, 0, '2019-11-12 02:13:48', '2019-11-13 02:40:40'),
(7, 'Phan Thị Thu', 'phanthithu250398@gmail.com', '342771775', 'Hoàng Liệt-Hoàng Mai-Hà Nội, Hiệp Hòa-Bắc Giang', 'Thanh toán khi nhận hàng', 16, 'Dưa Yubari', 1, 99000000, 0, '2019-11-18 21:33:17', '2019-11-18 21:33:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`, `image_list`, `price`, `sale_price`, `category_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Cam sành', 'cam-sanh', 'http://localhost/blog/uploads/product/4.jpg', NULL, 40000, 35000, 1, 'Cam sành là một giống cây ăn quả thuộc chi Cam chanh có quả gần như quả cam, có nguồn gốc từ Việt Nam. Quả cam sành rất dễ nhận ra nhờ lớp vỏ dày, sần sùi giống bề mặt mảnh sành, và thường có màu lục nhạt, các múi thịt có màu cam.', 1, '2019-09-04 06:16:52', '2019-09-13 00:36:42'),
(6, 'Đào Sapa', 'dao-sapa', 'http://localhost/blog/uploads/product/7.jpg', NULL, 50000, 49999, 1, 'Đào Sapa được xếp hình tháp, nằm phủ kín các vỉa hè, phố chợ. Đào Sapa có đặc điểm khác biệt, trái chỉ nhỏ như chén uống trà, mùi vị thơm thơm, giòn giòn và hơi chua. Đặc biệt đào Sapa ở ngoài vỏ có lớp lông tơ mềm như lụa và được người dân ở đây gọi với cái tên là “đào lông Sapa”.', 1, '2019-09-04 10:49:11', '2019-09-13 00:39:15'),
(10, 'Chuối Ecuador', 'chuoi-ecuador', 'http://localhost/blog/uploads/product/8.jpg', NULL, 60000, 59000, 1, 'Được nhập khẩu từ Ecuador', 1, '2019-09-04 13:29:07', '2019-09-13 00:42:31'),
(11, 'Thịt bò Kobe', 'thit-bo-kobe', 'http://localhost/blog/uploads/product/15206088073535_14.jpg', NULL, 9500000, 9240000, 7, 'Thịt bò Kobe là loại thịt bò nổi tiếng thế giới và là một đặc sản của thành phố Kobe thuộc vùng Kinki, Nhật Bản thịt được lấy từ Bò Kobe một giống bò thịt độc đáo của vùng Kobe.', 1, '2019-09-13 00:30:36', '2019-09-13 00:30:36'),
(12, 'Súp lơ xanh Đà Lạt', 'sup-lo-xanh-da-lat', 'http://localhost/blog/uploads/product/4735-1519201869-364-width640height327.jpg', NULL, 65000, 60000, 3, 'Súp lơ xanh là một loại cây thuộc loài Cải bắp dại, có hoa lớn ở đầu, thường được dùng như rau. Nó còn có tên gọi khác là bông cải xanh. Đây là thực phẩm rất tốt cho sức khỏe, tăng cường sức đề kháng cao trong cơ thể. Trong thành phần dinh dưỡng của bông cải xanh chứa nhiều vitamin A, C và E hơn nhiều các loại rau củ quả khác. Giá trị lợi ích từ súp lơ xanh được chứng minh có khả năng làm giảm bệnh ung thư. Đặc biệt thức ăn này còn có nhiều tác dụng trong điều trị bệnh của con người.', 1, '2019-09-13 00:33:23', '2019-09-13 00:33:23'),
(13, 'Thịt lợn sạch', 'thit-lon-sach', 'http://localhost/blog/uploads/product/thit-heo-sach.png', NULL, 90000, 85000, 7, 'Thịt lợn ( thịt heo ) là một loại thực phẩm đã rất phổ biến trên thế giới.Chúng ta ăn thịt lợn hàng ngày,thậm trí là từng bữa.Rất nhiều món ngon từ thịt lợn ra đời,người ta có thể đem luộc,rán,nướng hay xào nấu...đều rất ngon và dễ ăn.', 1, '2019-09-13 00:34:18', '2019-09-13 00:34:18'),
(14, 'Cá hồi NaUy', 'ca-hoi-nauy', 'http://localhost/blog/uploads/product/sashimi-ca-hoi.jpg', NULL, 420000, 335000, 6, 'Cá hồi là tên chung cho nhiều loài cá thuộc họ Salmonidae. Nhiều loại cá khác cùng họ được gọi là trout; sự khác biệt thường được cho là cá hồi salmon di cư còn cá hồi trout không di cư, nhưng sự phân biệt này không hoàn toàn chính xác', 1, '2019-09-13 00:35:39', '2019-09-13 00:35:39'),
(15, 'Cá basa', 'ca-basa', 'http://localhost/blog/uploads/product/diemfood%20ca%20basa%20cat%20khuc.jpg', NULL, 80000, 75000, 6, 'Thịt cá basa được sử dụng làm thực phẩm, được chế biến thành nhiều món ăn ngon, bổ dưỡng, ngoài ra còn có tác dụng phòng chữa bệnh. Nhiều nhà nghiên cứu cho biết, cá basa Việt Nam có nhiều mỡ, trong mỡ chứa rất nhiều DHA, Omega 3 và vitamin tan trong dầu như A, E, D... Omega 3 là những chất giúp phát triển trí não, võng mạc, chống lão hóa, ngừa bệnh tim mạch, xương cơ khớp...', 1, '2019-09-13 00:46:34', '2019-09-13 00:46:34'),
(16, 'Dưa Yubari', 'dua-yubari', 'http://localhost/blog/uploads/product/265a9098e6d90f8756c8%20(1).jpg', NULL, 100000000, 99000000, 1, 'Yabari King là giống dưa vàng cực kỳ nổi tiếng của vùng Hokkaido nói riêng và Nhật Bản nói chung. Chúng thậm chí được dùng như một món quà xa xỉ vào mùa hè. Mỗi trái dưa sẽ được đóng trong những chiếc hộp gỗ có màu vàng giống vỏ dưa, bên trong có lót xốp và vải trắng.', 1, '2019-09-13 01:53:25', '2019-09-13 01:53:25'),
(17, 'Khô gà Mixi', 'kho-ga-mixi', 'http://localhost/blog/uploads/product/67802923_380466232665983_687090275100655616_n.jpg', NULL, 350000, 300000, 8, 'Khô gà mixi', 1, '2019-09-13 01:57:02', '2019-09-13 01:57:02'),
(18, 'Gà tươi Mạnh Hoạch', 'ga-tuoi-manh-hoach', 'http://localhost/blog/uploads/th%E1%BB%8Bt-g%C3%A0-ta.jpg', NULL, 150000, 145000, 7, 'Gà nhà nuôi', 1, '2019-11-07 23:11:40', '2019-11-07 23:11:40'),
(19, 'Cà chua', 'ca-chua', 'http://localhost/blog/uploads/ca-chua-1558139604071.jpg', NULL, 25000, 22000, 3, 'Tươi sạch', 1, '2019-11-07 23:16:03', '2019-11-07 23:16:03'),
(20, 'Bơ sáp', 'bo-sap', 'http://localhost/blog/uploads/cach-don-gian-phan-biet-trai-cay-chua-hoa-chat-1.jpg', NULL, 70000, 67000, 1, 'Tươi sạch, đảm bảo an toàn', 1, '2019-11-07 23:17:09', '2019-11-07 23:17:09'),
(21, 'Việt Quất Canada', 'viet-quat-canada', 'http://localhost/blog/uploads/thuc-pham-co-mau-tim-2.jpg', NULL, 240000, 232000, 1, '100% nguyên chất 100%', 1, '2019-11-07 23:21:34', '2019-11-07 23:21:34'),
(22, 'Tôm hùm Alaska', 'tom-hum-alaska', 'http://localhost/blog/uploads/IMG_6777.jpg', NULL, 1250000, 1200000, 6, 'Hàng nhập khẩu', 1, '2019-11-07 23:22:19', '2019-11-07 23:22:19'),
(23, 'Bề bề', 'be-be', 'http://localhost/blog/uploads/buffet-poseidon-be-be-3.jpg', NULL, 220000, 199000, 6, 'Hàng tươi sạch', 1, '2019-11-07 23:23:09', '2019-11-07 23:23:09'),
(24, 'Cà tím', 'ca-tim', 'http://localhost/blog/uploads/eeu82v92xlgulc8uz5e5-ca-tim.jpg', NULL, 39000, 37000, 3, 'Sạch đảm bảo chất lượng', 1, '2019-11-07 23:23:55', '2019-11-07 23:23:55'),
(25, 'Cải chíp', 'cai-chip', 'http://localhost/blog/uploads/c%E1%BA%A3i-chip.jpg', NULL, 26000, 22900, 3, 'Sạch đảm bảo chất lượng', 1, '2019-11-07 23:24:55', '2019-11-07 23:24:55'),
(26, 'Cá thu', 'ca-thu', 'http://localhost/blog/uploads/mua-ca-thu-tai-vung-tau-1-1.png', NULL, 270000, 259000, 6, 'Hàng 100% sạch đảm bảo chất lượng', 1, '2019-11-07 23:25:52', '2019-11-07 23:25:52'),
(27, 'Cà rốt', 'ca-rot', 'http://localhost/blog/uploads/rau-xanh-an-dam-cho-be.jpg', NULL, 27000, 25000, 3, '100% thực phẩm sạch', 1, '2019-11-07 23:31:02', '2019-11-07 23:31:02'),
(28, 'Măng tây', 'mang-tay', 'http://localhost/blog/uploads/mangtay_WGHD.jpg', NULL, 32000, 30000, 3, '100% thực phẩm sạch', 1, '2019-11-07 23:31:51', '2019-11-07 23:31:51'),
(29, 'Mực khô loại 1', 'muc-kho-loai-1', 'http://localhost/blog/uploads/muc-kho-phan-thiet.jpg', NULL, 240000, 230000, 8, '100% đảm bảo an toàn', 1, '2019-11-07 23:33:48', '2019-11-07 23:33:48'),
(30, 'Bò gác bếp', 'bo-gac-bep', 'http://localhost/blog/uploads/an-thit-bo-kho-co-beo-khong-2.jpg', NULL, 330000, 319000, 8, '100% nguyên chất ê', 1, '2019-11-07 23:36:31', '2019-11-07 23:36:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nguyễn Đức Mạnh', 'nguyenducmanh@gmail.com', '$2y$10$353yMvVFefJqnCkrTGENa.pryVxuIB4DtECFLTiDXGDath5lioGsC', 'T63qniGlWUbcu1dD3PFFAaTVOkZzC8kM5TDmdtBZyxIsSkrXxzk73DHuSo5u', '2019-08-31 08:33:53', '2019-09-03 17:51:44'),
(4, 'NGUYEN DUC MANH', 'nguyenducmanhbg98@gmail.com', '$2y$10$3j5PfgjGq5VqW6uxwgc7UesLRwwkGFBNyH6TnWcfeHuayEyuY7rye', 'oBHgWlQQ59relWPSHx7v3fhPPJzxXgcz5tW4e3CWjtZbtpCz5PqPmqXLGNT0', '2019-11-12 00:57:48', '2019-11-12 00:57:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banner_image_unique` (`image`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_slug_unique` (`slug`),
  ADD KEY `product_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
