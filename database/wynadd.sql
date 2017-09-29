-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.2
-- Thời gian đã tạo: Th9 29, 2017 lúc 06:26 AM
-- Phiên bản máy phục vụ: 10.1.24-MariaDB
-- Phiên bản PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wynadd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhangs`
--

CREATE TABLE `khachhangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `binhluan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhangs`
--

INSERT INTO `khachhangs` (`id`, `ten`, `chucvu`, `binhluan`, `Hinh`, `created_at`, `updated_at`) VALUES
(1, 'ddasdasdasdas', 'đâsdasdasdasdas', '<p style=\"text-align:justify\">Sau cuộc đua tranh Messi - Ronaldo, đến hôm nay thế giới&nbsp;<a class=\"TextlinkBaiviet\" href=\"http://www.24h.com.vn/bong-da-c48.html\" style=\"text-decoration-line: none; color: rgb(0, 0, 255);\" title=\"bóng đá\">bóng đá</a>&nbsp;mới lại chứng kiến một cuộc đua tranh hấp dẫn nữa giữa hai cá nhân. Họ - Alvaro Morata và Romelu&nbsp;<strong>Lukaku</strong>, mang trong mình những vết gợn kể từ cuộc chuyển nhượng đổ vỡ giữa MU và Morata hồi đầu hè, để rồi từ đó nảy sinh một cuộc chạy đua vô hình nhưng rất đáng chú ý.</p>\r\n\r\n<p><img alt=\"Lukaku - Morata: Đua ghi bàn từ Ngoại hạng đến C1, Messi - Ronaldo mới? - 1\" class=\"news-image\" src=\"http://image.24h.com.vn/upload/3-2017/images/2017-09-28/1506552861-44cbfbfe00000578-4926774-it_was_a_contrast_of_emotions_between_the_two_teams_on_26_minute-m-29_1506543158661.jpg\" style=\"border:0px; max-width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\">Lukaku ăn mừng khá \"khệnh\" khi ghi bàn vào lưới CSKA</p>\r\n\r\n<p style=\"text-align:justify\">Tại&nbsp;<a class=\"TextlinkBaiviet\" href=\"http://www.24h.com.vn/bong-da-ngoai-hang-anh-c149.html\" style=\"text-decoration-line: none; color: rgb(0, 0, 255);\" title=\"giải Ngoại hạng Anh\">giải Ngoại hạng Anh</a>, phong độ của Lukaku và Morata là quá thuyết phục. Họ đã cùng nhau có 6 bàn thắng sau vòng 6, riêng Morata còn có thêm 2 đường kiến tạo trong khi Lukaku cũng có 1 lần. Hai tân binh trị giá 145 triệu bảng này tiếp tục duy trì phong độ ổn định khi bước ra sân chơi lớn Champions League.</p>', 'LBhj_tablet_smartphone_laptop_size.jpg', '2017-09-28 02:09:21', '2017-09-28 02:09:21'),
(2, '12233', '12233', '<p>test nội dung của khách hàng</p>', 'SiSU_image-1476865925-DSC07670.jpg', '2017-09-28 20:28:48', '2017-09-28 20:28:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitins`
--

CREATE TABLE `loaitins` (
  `id` int(10) UNSIGNED NOT NULL,
  `idtheloai` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_09_16_103950_create_slides_table', 1),
(10, '2017_09_16_104517_create_theloais_table', 1),
(11, '2017_09_16_104704_create_loaitins_table', 1),
(12, '2017_09_16_104733_create_tintucs_table', 1),
(13, '2017_09_28_062014_create_khachhangs_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `ten`, `Hinh`, `noidung`, `link`) VALUES
(1, '1', 'nG7Z_3n.jpg', 'slide1', NULL),
(2, '2', '39ux_4n.jpg', 'slide2', NULL),
(3, '3', 'EpeY_5n.jpg', 'slide3', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloais`
--

CREATE TABLE `theloais` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintucs`
--

CREATE TABLE `tintucs` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieudekhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noibat` int(11) NOT NULL DEFAULT '1',
  `soluotxem` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintucs`
--

INSERT INTO `tintucs` (`id`, `tieude`, `tieudekhongdau`, `tomtat`, `noidung`, `Hinh`, `noibat`, `soluotxem`, `created_at`, `updated_at`) VALUES
(1, 'tin tuc', 'tin-tuc', 'HOẠT HÌNH QUẢNG CÁO 2D, 3D Bạn biết rõ ràng là bất cứ thương hiệu mạnh nào trên thế giới cũng đều có một logo đơn giản và ấn tượng phải không nào?', 'HOẠT HÌNH QUẢNG CÁO 2D, 3D Bạn biết rõ ràng là bất cứ thương hiệu mạnh nào trên thế giới cũng đều có một logo đơn giản và ấn tượng phải không nào? Và thiết kế logo chính là bước đầu tiên trong hành trình kinh doanh chuyên nghiệp của bất cứ thương hiệu nào.   Logo chính là biểu tượng đơn giản', 'S9if_17155377_1274278895942519_8400451521117593185_n.jpg', 1, 0, NULL, NULL),
(2, 'tin tuc2', 'tin-tuc2', 'Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn.', 'Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn. Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn.', 'dZI8_17264357_1274313825939026_2159529202962058988_n.jpg', 1, 0, NULL, NULL),
(3, 'tt3', 'tt3', 'Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn.', 'Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn. Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn.', 'qLO5_1n.jpg', 1, 0, NULL, NULL),
(5, 'tt6', 'tt6', 'Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn.', 'Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn. Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa máy tính, Wynads sẽ cam kết đảm bảo sẽ thiết kế thành công thương hiệu cho của bạn.', 'R3eR_Clipboard.png', 1, 0, '2017-09-25 21:28:21', '2017-09-25 21:28:21'),
(6, 'ttt77', 'ttt77', '<p>t7t7t7</p>', '<h4>&nbsp;HÌNH QUẢNG CÁO 2D, 3D Bạn biết rõ ràng là bất cứ thương hiệu mạnh nào trên thế giới cũng đều có&nbsp;&nbsp;HÌNH QUẢNG CÁO 2D, 3D Bạn biết rõ ràng là bất cứ thương hiệu mạnh nào trên thế giới cũng đều có&nbsp;&nbsp;HÌNH QUẢNG CÁO 2D, 3D Bạn biết rõ ràng là bất cứ thương hiệu mạnh nào trên thế giới cũng đều có&nbsp;</h4>', 'Xb2y_17202816_1274313905939018_8240995701294489171_n.jpg', 1, 0, '2017-09-27 00:26:18', '2017-09-27 00:26:18'),
(7, 'tttt8', 'tttt8', '<p>fdfdsfs<span style=\"color:rgb(166, 167, 170); font-family:hind,sans-serif; font-size:15px\">Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa mVới 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa m</span></p>', '<p>fdfdsfs<span style=\"color:rgb(166, 167, 170); font-family:hind,sans-serif; font-size:15px\">Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa mVới 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa m</span>fdfdsfs<span style=\"color:rgb(166, 167, 170); font-family:hind,sans-serif; font-size:15px\">Với 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa mVới 15 năm kinh nghiệm trong lĩnh vực thiết kế nghệ thuật và đồ họa m</span></p>', '3tjb_banner6.png', 1, 0, '2017-09-27 00:26:50', '2017-09-27 00:26:50'),
(8, 'tttttt9', 'tttttt9', '<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.Bên c</span></p>', '<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.Bên cBên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.Bên c</span></p>', 'A0kJ_cach-bao-quan-pin-laptop-hieu-qua.jpg', 1, 0, '2017-09-27 00:27:57', '2017-09-27 00:27:57'),
(9, 'tin tức test thứ 10', 'tin-tuc-test-thu-10', '<p>tóm tắt&nbsp;tin tức test thứ 10</p>', '<p>nội dung&nbsp;tin tức test thứ 10 hình ảnh showw</p>', 'RtFD_acer-r3-131t_400copy-400x400.png', 1, 0, '2017-09-27 00:52:31', '2017-09-27 00:52:31'),
(10, 'test tin tức', 'test-tin-tuc', 'test tin tức', '<p>test tin tức nội dung tin tức áda</p>', '5Ucl_skifree6.jpg', 1, 0, '2017-09-27 00:57:07', '2017-09-27 00:57:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitins`
--
ALTER TABLE `loaitins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaitins_idtheloai_foreign` (`idtheloai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloais`
--
ALTER TABLE `theloais`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintucs`
--
ALTER TABLE `tintucs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `loaitins`
--
ALTER TABLE `loaitins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `theloais`
--
ALTER TABLE `theloais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tintucs`
--
ALTER TABLE `tintucs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `loaitins`
--
ALTER TABLE `loaitins`
  ADD CONSTRAINT `loaitins_idtheloai_foreign` FOREIGN KEY (`idtheloai`) REFERENCES `theloais` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
