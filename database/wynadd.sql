-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.2
-- Thời gian đã tạo: Th10 12, 2017 lúc 11:12 AM
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
(4, 'Nguyễn Ngọc Nhân', 'GD Cty Long Phu Solutions', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,arial,fontawesome,sans-serif\">Tôi đã sử dụng dịch vụ thiết kế tại Wynads, tôi thấy thái độ, cách phục vụ và tư vấn rất nhiệt tình. Nếu bạn cần thiết kế logo theo phong thuỷ hãy liên hệ chị Hậu Wynads.</span></p>', 'zNUp_Nguyen-Ngoc-Nhan.jpg', '2017-10-04 19:50:50', '2017-10-04 19:50:50'),
(5, 'NGUYỄN NGỌC VŨ', 'GD Cty nhôm kính HOWindows', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,arial,fontawesome,sans-serif\">Tôi rất hài lòng về thiết kế của WynAds cho thương hiệu HOWINDOWS của tôi, tất cả mọi thiết kế sau này trong công ty tôi đều giao cho WynAds làm và thực sự rất an tâm.</span></p>', 'kLvN_nhom-kinh-hoang-vu.jpg', '2017-10-04 19:55:35', '2017-10-04 19:55:35'),
(6, 'Mai Quốc Phong', 'Tổng Giám Đốc công ty xây dựng Pthome', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,arial,fontawesome,sans-serif\">Tôi rất hài lòng khi WynAds đã góp ý chỉnh sửa logo cho thương hiệu PTHOME của tôi, và mọi thiết kế hình ảnh của công ty tôi đều yên tâm giao cho WynAds.</span></p>', 'JL1T_a-phong.jpg', '2017-10-04 19:58:28', '2017-10-04 19:58:28'),
(7, 'Nguyễn Thị Liên', 'Phó Giám Đốc Công ty PAN ATLANTIC', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,arial,fontawesome,sans-serif\">Tôi rất thích thiết kế mới theo phong thủy của mình, tôi cảm thấy tự tin hẳn lên khi được tư vấn cho thiết kế mới này.</span></p>', 'oNHs_chi-lien.png', '2017-10-04 21:32:31', '2017-10-04 21:32:31'),
(9, 'Nguyễn Thị Yến Chi', 'Công ty TNHH SX TM DV CÔNG ĐỨC', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,arial,fontawesome,sans-serif\">Thiết kế rất ấn tượng và chuyên nghiệp, chúng tôi rất hài lòng.</span></p>', 'OXc1_chi-yen.png', '2017-10-04 23:57:17', '2017-10-04 23:57:17');

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
(1, 's3', 'UfxZ_slideshow_1.jpg', '<p>s3</p>', NULL),
(2, '2', 'ze5u_Slider3.jpg', '<p>2</p>', NULL),
(3, 'sl4', 'C4Qy_thiet-ke-bo-nhan-dien-thuong-hieu-chuyen-nghiep.jpg', '<p>1</p>', NULL),
(4, '3', '2MFW_unnamed.jpg', '<p>q</p>', NULL);

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
(14, 'Tự hào môn sinh NAM HUỲNH ĐẠO', 'tu-hao-mon-sinh-nam-huynh-dao', 'Tập võ người ta đưa võ công lên hàng đầu, nhưng ở NAM HUỲNH ĐẠO thì võ công ở hạng cuối cùng. ĐẠO - ĐỨC - THIỀN - Y - VÕ.', '<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px;\">Tập võ người ta đưa võ công lên hàng đầu, nhưng ở NAM HUỲNH ĐẠO thì võ công ở hạng cuối cùng. ĐẠO - ĐỨC - THIỀN - Y - VÕ.</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Được làm môn sinh NAM HUỲNH ĐẠO là một cái duyên rất lớn, mà tất cả học trò đều tự hào, cùng tham gia tập luyện với tinh thần cao vút, không ngại nắng mưa, từ các em bé mới 4,5 tuổi hay đến những ông bà già 50, 60 tuổi đều đặn dưỡng sinh hằng ngày mà mình thấy được.</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">\"Võ học vô bờ bến, học võ để rèn luyện nhân cách để tìm hiểu những thứ siêu việt của bản thể để giúp đời chứ không phải tranh hơn thua, danh lợi.<br />\r\nNgười biết chân lý thì nghiêng mình kính sợ, người không biết thì cười hềnh hệch chế giễu, chê bai. Chân lý không bao giờ thay đổi, vàng thật thì không sợ lửa. Hãy để thời gian trả lời.<br />\r\nChiều Matxcơva 15/6/2017<br />\r\nVô Danh Lợi\"</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Ps: Tản mạn chút vào chủ nhật thảnh thơi.</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Cách đây hơn 2500 năm có người đã tu luyện và giác ngộ chân lý mà tiếng Việt mình gọi là PHẬT. (Nhưng đến nay tại Việt Nam mình vẫn thấy có nhiều người bảo là PHẬT, CHÚA là do con người tưởng tượng ra chứ không có thật, mình không hiểu được tại sao là thế kỷ này mà vẫn còn nhiều người thiếu thông tin như vậy).</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Dù ngày nay con người theo đạo FACEBOOK nhiều nhất. Và đạo nào thì cũng có cái hay cái tốt, giúp ích cho người khác thì nó mới tồn tại lâu dài được.</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Khi qua đời Đức Phật có để lại lời nhắn gởi con người là đừng tin ai hết, phải tự trải nghiệm, phải \"TỰ MÌNH ĐỐT ĐUỐC LÊN MÀ ĐI\". Chính mắt thấy, chính tai nghe vẫn còn mông lung lắm, mà phải dấn thân, phải trải nghiệm thì nó mới chính là kết quả của mình...<br />\r\n(Không có người nào mua sách dạy võ về đọc, không lấy toàn thân tu luyện mà giỏi võ cả).</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Khi thành đạo Đức Phật có thần thông, các vị bồ tát giác ngộ đều có thần thông, nhưng Đức Phật rất ít khi sử dụng, ngài chỉ dùng vài lần khi muốn độ cha mẹ ngài (cả gia đình hoàng tộc, làm vua của 1 nước đều xuất gia), ngài lên cõi trời thuyết pháp cho mẹ....</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Trong 49 năm thuyết pháp độ đời, Phật đã chịu không ít lời xỉ nhục, dèm pha, thâm chí là bày mưu tính kế của ngoại đạo để hạ bệ người, nhưng Phật không hề dùng thần thông với họ...</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Đức Phật đã chỉ cách để thay đổi thế giới từ 2500 năm trước, nhưng đến bây giờ KHOA HỌC mới từng bước theo sau... nếu tu luyện có thần thông biến hóa, thì cần gì đến máy bay, cần gì đến internet, smartphone...</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Con người tu luyện có thần thông thì cần gì phải rao giảng TÌNH THƯƠNG, cần gì phải áp dụng triết lý \"CHO ĐI TRƯỚC RỒI MỚI NHẬN LẠI SAU...\"</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Theo sự hiểu biết và trải nghiệm còn hạn chế của em đến nay thì em thấy KHOA HỌC không biết đến bao giờ mới phát triển để chứng minh được những gì Đức Phật đã nói. (2500 năm trước, ngài đã nói trong ly nước chúng ta uống có hàng ngàn sinh vật đang sống, khoa học thì mới chứng minh được đâu 100 năm gần đây khi chế tạo ra được kính hiển vi mà thôi).</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Tóm lại:</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Tu theo đạo Phật để giác ngộ và có thần thông - em tin (vì đã được hơn 2500 năm minh chứng để nó tồn tại đến ngày nay).</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Tập võ NAM HUỲNH ĐẠO có công phu người thường không có được - em tin (vì em cũng đã có những động tác người thường không có được, dù do cv nên e tập luyện rất ít).</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); display: inline; font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-top: 6px;\">HỒNG HẬU - Tự hào môn sinh NAM HUỲNH ĐẠO</div>', '5WkI_16825946_10210610990303672_3712652226112757161_o.jpg', 1, 0, '2017-10-03 19:57:21', '2017-10-03 19:57:21'),
(16, 'Hội ngộ đỉnh cao BNI -STRONG CHAPTER', 'hoi-ngo-dinh-cao-bni-strong-chapter', 'BNI -STRONG CHAPTER', '<p><strong><span style=\"color:#000000\"><span style=\"font-family:roboto,sans-serif; font-size:15px\">Nhằm hưởng ứng chương trình hội ngộ đỉnh cao năm nay diễn ra tại Tp.HCM, STRONG CHAPTER chúng tôi rất là hăng say với điều &nbsp;này.</span></span></strong><br />\r\n&nbsp;</p>\r\n\r\n<div class=\"separator\" style=\"color: rgb(155, 162, 168); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(29, 29, 29); clear: both; text-align: center;\"><strong><a href=\"https://3.bp.blogspot.com/-LABKlrJaztY/WVfTPti1c0I/AAAAAAAADy8/fuNKME5LZ6Ex420JJKdv1qb-o4RJbw66wCLcBGAs/s1600/19650025_10211744085270338_407582189_o.jpg\" style=\"background: transparent; text-decoration-line: none; color: rgb(33, 150, 243); display: inline-block; margin-left: 1em; margin-right: 1em;\"><span style=\"color:#000000\"><img src=\"https://3.bp.blogspot.com/-LABKlrJaztY/WVfTPti1c0I/AAAAAAAADy8/fuNKME5LZ6Ex420JJKdv1qb-o4RJbw66wCLcBGAs/s640/19650025_10211744085270338_407582189_o.jpg\" style=\"border:0px; height:inherit; max-width:100%; width:640px\" /></span></a></strong></div>\r\n\r\n<p><br />\r\n<strong><span style=\"color:#000000\"><span style=\"font-family:roboto,sans-serif; font-size:15px\">&nbsp;Chúng tôi không ngại ngày cuối tuần để gặp mặt họp cho gian hàng tại hội chợ.</span></span></strong><br />\r\n&nbsp;</p>\r\n\r\n<div class=\"separator\" style=\"color: rgb(155, 162, 168); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(29, 29, 29); clear: both; text-align: center;\"><strong><a href=\"https://4.bp.blogspot.com/-wghRJ_NxwCc/WVfTPt7cOnI/AAAAAAAADzA/9_5zn3CIWXwTygPSlSv1P7bxuvDmCLF0gCLcBGAs/s1600/19747853_10211744086590371_431722954_o.jpg\" style=\"background: transparent; text-decoration-line: none; color: rgb(33, 150, 243); display: inline-block; margin-left: 1em; margin-right: 1em;\"><span style=\"color:#000000\"><img src=\"https://4.bp.blogspot.com/-wghRJ_NxwCc/WVfTPt7cOnI/AAAAAAAADzA/9_5zn3CIWXwTygPSlSv1P7bxuvDmCLF0gCLcBGAs/s640/19747853_10211744086590371_431722954_o.jpg\" style=\"border:0px; height:inherit; max-width:100%; width:640px\" /></span></a></strong></div>\r\n\r\n<p><br />\r\n<strong><span style=\"color:#000000\"><span style=\"font-family:roboto,sans-serif; font-size:15px\">&nbsp;Đội bóng thì cũng rất là hăng say tập luyện.</span></span></strong><br />\r\n&nbsp;</p>\r\n\r\n<div class=\"separator\" style=\"color: rgb(155, 162, 168); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(29, 29, 29); clear: both; text-align: center;\"><strong><a href=\"https://3.bp.blogspot.com/-VnR_yLNYbCg/WVfTPq2uHDI/AAAAAAAADzE/peCGXdSJg0AO5umNw_MwTryfT4UK9spVwCLcBGAs/s1600/19720487_1351416514973728_131616835_o.jpg\" style=\"background: transparent; text-decoration-line: none; color: rgb(33, 150, 243); display: inline-block; margin-left: 1em; margin-right: 1em;\"><span style=\"color:#000000\"><img src=\"https://3.bp.blogspot.com/-VnR_yLNYbCg/WVfTPq2uHDI/AAAAAAAADzE/peCGXdSJg0AO5umNw_MwTryfT4UK9spVwCLcBGAs/s640/19720487_1351416514973728_131616835_o.jpg\" style=\"border:0px; height:inherit; max-width:100%; width:640px\" /></span></a></strong></div>\r\n\r\n<p><br />\r\n<strong><span style=\"color:#000000\"><span style=\"font-family:roboto,sans-serif; font-size:15px\">&nbsp;Chúng tôi kết nối để cùng giúp nhau thành công, có nguồn năng lượng tích cực trong cuộc sống, bạn ủng hộ chúng tôi nhé, hãy về đội của chúng tôi khi còn có thể nè.</span><br />\r\n<br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:15px\">Chúng tôi họp mỗi sáng thứ 3 hàng tuần để cùng nhau trao đi cơ hội kinh doanh tại 298 Đinh Bộ Lĩnh, Bình Thạnh. Bạn muốn giao lưu với các chủ doanh nghiệp của chúng tôi, hãy liên hệ 0904 19 20 28 để tôi đặt chổ cho bạn nhé.</span></span></strong></p>', 'lB8O_19601197_1096459347154193_1264243525039580948_n.jpg', 1, 0, '2017-10-03 20:30:26', '2017-10-03 20:42:00'),
(17, 'Đến bảo tàng Singapore tìm hiểu về lịch sử của họ.', 'den-bao-tang-singapore-tim-hieu-ve-lich-su-cua-ho-', 'Đến bảo tàng Singapore tìm hiểu về lịch sử của họ.', '<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">Singapore là 1 thuộc địa của vương quốc anh từ thế kỷ 19 và đó là lý do họ chạy xe bên tay trái.</div>\r\n\r\n<div style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin-bottom: 6px; margin-top: 6px;\">1965 người Anh đang cai trị thì bị Ấn và Hoa xâm nhập vào nên ảnh hưởng rất lớn đến kinh tế. Và họ đã trỗi dậy tách Singapore và Malaysia thành 2 quốc gia độc lập.</div>\r\n\r\n<div class=\"text_exposed_show\" style=\"color: rgb(29, 33, 41); display: inline; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">\r\n<div style=\"font-family: inherit; margin-bottom: 6px;\">Singapore lúc đó lâm vào tình trạng cơ cực nghèo khó, không có việc làm...</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">Và rồi đến năm 90 họ trở thành quốc gia phát triển thịnh vượng nhất, GDP trung bình hàng đầu châu á.</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">Họ đã làm gì? Doanh nghiệp nhỏ muốn phát triển thì phải làm gì?</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">1. Chính phủ đã làm rất nhiều điều, đầu tư con người tầm nhìn sứ mệnh để phục vụ nhân dân.<br />\r\n2. Những người lãnh đạo đầu tiên và đào tạo lớp kế thừa cùng mục tiêu phát triển.<br />\r\n3. Xây dựng luật lệ, hệ thống chắc chắn chặc chẽ.<br />\r\n4. Người dân trong quốc gia đều phải tự hào.</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">&nbsp; &nbsp;<a href=\"https://3.bp.blogspot.com/--kNfdtl9Q94/WUfWJrUlEiI/AAAAAAAADw4/evLuHmKI7eAHs4iFmbM6OINs6w8DAyWHACLcBGAs/s1600/18622493_10211413391483200_3978825297024041381_n.jpg\" style=\"color: rgb(33, 150, 243); font-family: Helvetica, Arial, sans-serif; font-size: 14px; text-align: center; background: transparent; text-decoration-line: none; display: inline-block; margin-left: 1em; margin-right: 1em;\"><img src=\"https://3.bp.blogspot.com/--kNfdtl9Q94/WUfWJrUlEiI/AAAAAAAADw4/evLuHmKI7eAHs4iFmbM6OINs6w8DAyWHACLcBGAs/s320/18622493_10211413391483200_3978825297024041381_n.jpg\" style=\"border:0px; height:inherit; max-width:100%; width:240px\" /></a></div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">Bảo tàng họ có gì?</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">Hệ thống kiến thức 1 cách trực quan hiệu quả. Truyền bá cho người du lịch nhẹ nhàng cuốn hút khiến ai cũng say sưa theo dòng lịch sử của họ.</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">Trẻ con họ được ra ngoài học từ nhỏ chứ k bị nhốt vào học lý thuyết o trong phòng.</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">Họ có câu áp dụng cho toàn dân \"không có tiến bộ hơn thì k phát triển hơn\". Và luôn tích cực trong tất cả tình huống, họ không hề phàn nàn dù xảy ra với họ tình huống xấu...</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">Chúng ta nói thực dân pháp, đế quốc mỹ nhưng họ thì k, họ cảm ơn những ng đã xâm chiếm họ và khai sáng cho đất nước họ trong thời gian họ bị cai trị bởi vương quốc anh.</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">Nghĩ về VN mình sao k tích cực hơn và dạy cho học sinh tự hào về những công trình và kiến trúc mà Pháp, Mỹ để lại nhỉ?</div>\r\n\r\n<div style=\"font-family: inherit; margin-bottom: 6px; margin-top: 6px;\">DN chúng ta học được gì? Đó là lời cảm ơn trong tất cả mọi tình huống, cảm ơn khách hàng khó tính, cảm ơn cả đối thủ cạnh tranh vì chắc chắc là nhờ có họ mà chúng ta sẽ hoàn thiện và phát triển tốt hơn.</div>\r\n\r\n<div class=\"separator\" style=\"clear: both; text-align: center;\">&nbsp;</div>\r\n\r\n<div class=\"separator\" style=\"clear: both; text-align: center;\">&nbsp;</div>\r\n</div>', 'blta_18739685_10211413391563202_7715450605827007687_n.jpg', 1, 0, '2017-10-03 20:46:35', '2017-10-03 20:47:24'),
(18, 'Con người sống trên đời, kỳ thực cũng không cần nhiều thứ lắm', 'con-nguoi-song-tren-doi-ky-thuc-cung-khong-can-nhieu-thu-lam', 'Con người sống trên đời, kỳ thực cũng không cần nhiều thứ lắm, chỉ cần sống khỏe mạnh, chân thành yêu thương mọi người thì đó vẫn được coi là một cuộc sống giàu có, sung túc.', '<div style=\"color: rgb(102, 102, 102); font-family: inherit; font-size: 12px; margin-bottom: 1em; margin-top: 1em;\"><span style=\"font-size:14px\">Cuộc đời này, còn sống chính là thắng lợi, kiếm tiền chính là trò chơi, khỏe mạnh mới là điều cần thiết, vui vẻ hạnh phúc là điều mọi người mong ước nhưng được trở về nơi tốt đẹp mới mục đích.</span></div>\r\n\r\n<div style=\"color: rgb(102, 102, 102); font-family: inherit; font-size: 12px; margin-bottom: 1em; margin-top: 1em;\"><span style=\"font-size:14px\">Ps: Cảm thấy đã thành công và hạnh phúc vô cùng khi đã kéo được ông chồng tham gia vào điều yêu thích của mình.</span></div>\r\n\r\n<div style=\"color: rgb(102, 102, 102); font-family: inherit; font-size: 12px; margin-bottom: 1em; margin-top: 1em;\"><span style=\"font-size:14px\">Trước giờ tâm sự dự án, dự định gì của mình chồng cứ bảo; \"Em cứ làm việc gì mà e thấy thích và vui là được rồi\".</span></div>\r\n\r\n<div style=\"color: rgb(102, 102, 102); font-family: inherit; font-size: 12px; margin-bottom: 1em; margin-top: 1em;\"><span style=\"font-size:14px\">Bây giờ thì anh ấy đã chịu tìm tòi, học hỏi và chịu dành thời gian tham gia vào công việc yêu thích của mình luôn rồi.</span></div>\r\n\r\n<div style=\"color: rgb(102, 102, 102); font-family: inherit; font-size: 12px; margin-bottom: 1em; margin-top: 1em;\"><span style=\"font-size:14px\">Không những vậy câu em trai út của mình cũng bảo \"để tối đi làm về em làm thêm giúp chị\". Còn gì tuyệt vời hơn nữa, khi công việc mình yêu thích đã được những người thân yêu dành thời gian tìm hiểu và giúp đỡ.<br />\r\nMÌNH ĐÃ LÀ NGƯỜI HẠNH PHÚC VÀ THÀNH CÔNG RỒI ĐÚNG KHÔNG Ạ.</span></div>\r\n\r\n<div class=\"separator\" style=\"color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif; font-size: 12px; clear: both; text-align: center;\"><a href=\"https://4.bp.blogspot.com/-ApjYNls3KVk/WUfXzacxhDI/AAAAAAAADxE/rWLGIxFAb6Mj21gJFAbWwCmsCQ0sKop9QCLcBGAs/s1600/14915379_10209601843075622_899213656336725179_n.jpg\" style=\"background: transparent; text-decoration-line: none; color: rgb(33, 150, 243); outline: 0px; display: inline-block; margin-left: 1em; margin-right: 1em;\"><img src=\"https://4.bp.blogspot.com/-ApjYNls3KVk/WUfXzacxhDI/AAAAAAAADxE/rWLGIxFAb6Mj21gJFAbWwCmsCQ0sKop9QCLcBGAs/s320/14915379_10209601843075622_899213656336725179_n.jpg\" style=\"border:0px; height:inherit; max-width:100%; width:320px\" /></a></div>', 'hbWL_14955898_10209601808114748_3075695531617062026_n.jpg', 1, 0, '2017-10-03 20:49:45', '2017-10-03 20:50:40'),
(20, 'LOGO THƯƠNG HIỆU NỔI TIẾNG', 'logo-thuong-hieu-noi-tieng', 'Phân tích các logo của những thương hiệu nổi tiếng đình đám. Những thương hiệu không tiếc tiền đầu tư cho cái logo ban đầu của họ và nó đã được đền đáp xứng đáng. Trong vũ trụ này, mọi vật đều xoay chuyển, đêm ngày, âm dương, không có gì là ngẫu nhiên…', '<h2><a href=\"http://giatrithuonghieu.net/thiet-ke-logo-theo-phong-thuy/\" rel=\"bookmark\" style=\"margin: 0px; padding: 0px; outline: none; text-decoration-line: none; color: rgb(53, 53, 53);\">Thiết kế logo theo phong thủy giúp bạn thịnh vượng.</a></h2>\r\n\r\n<p>Tại sao Steve Jobs qua Ấn Độ 2 năm về rồi mới phát triển Apple nhanh chóng vậy, chứ trước đó ổng cũng trầy trật te tua…</p>\r\n\r\n<p>Ông chủ facebook cũng đã học được gì từ triết học Phương Đông sau khi qua Ấn để phát triển facebook được như bây giờ?</p>\r\n\r\n<p>Và quan niệm về vai trò của công nghệ của Bill Gates cũng đến từ đất nước Ấn kỳ lạ này .<br />\r\n“Hãy đến những trung tâm công nghệ tại Bangalore Infosys (Ấn Độ) và đến cách đó khoảng 4-5km bạn sẽ thấy một sự tương phản rõ rệt, trái ngược với sự phát triển là hình ảnh của những con người đang sống trong cảnh không có nhà vệ sinh, không có nước… Vì vậy, tôi cho rằng thế giới này sẽ “không phẳng” và máy tính sẽ không bao giờ trở thành một trong 5 nhu cầu cấn thiết nhất của con người”, Gates nói với The Financial Times,ngày 1/11/2013.</p>\r\n\r\n<p>Tại sao google lại mời thiền sư Nhất Hạnh về giảng pháp cho toàn bộ nhân viên của mình.</p>\r\n\r\n<p>Bạn biết được các công ty, tập đoàn lớn nhất toàn cầu đó, họ đã phát hiện ra cái gì không?</p>\r\n\r\n<h4><strong><a href=\"http://giatrithuonghieu.net/ta%CC%A3i-sao-pha%CC%89i-thiet-ke-logo-theo-phong-thu%CC%89y/\" style=\"margin: 0px; padding: 0px; outline: none; text-decoration-line: none; color: rgb(222, 171, 4);\" target=\"_blank\">Tại sao phải thiết kế logo theo phong thủy.</a></strong></h4>\r\n\r\n<div class=\"wp-caption aligncenter\" id=\"attachment_318\" style=\"margin: 0px auto; padding: 0px; outline: none; max-width: 100%; clear: both; color: rgb(255, 255, 255); font-family: arial; background-color: rgb(0, 0, 0); width: 649px;\"><img alt=\"thiết kế logo theo phong thủy 1\" class=\"size-full wp-image-318\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/Cach-dat-ten.jpg\" style=\"border:none; height:auto; margin:0px; max-width:100%; outline:none; padding:0px; width:639px\" title=\"thiết kế logo theo phong thủy 1\" />\r\n<p>thiết kế logo theo phong thủy 1</p>\r\n</div>\r\n\r\n<p>Tại sao các logo của tập đoàn nổi tiếng đó nhìn rất đơn giản?</p>\r\n\r\n<p>Những tập đoàn đó họ nghĩ gì khi để những logo như thế?</p>\r\n\r\n<p>Từ những ngày đầu logo của họ như thế nào?</p>\r\n\r\n<p>Tại sao họ lại thay đổi qua từng thời kỳ phát triển?</p>\r\n\r\n<p>Vì sao có cái màu xanh, đỏ, tím, vàng. Có cái thì hình tròn, vuông, elip….</p>\r\n\r\n<p>Do người họa sĩ thích như thế hay ý tưởng của các ông chủ giỏi giang của những tập đoàn đó nghĩ ra.</p>\r\n\r\n<h4><strong><a href=\"http://giatrithuonghieu.net/thiet-ke-logo-theo-ty-le-vang/\" style=\"margin: 0px; padding: 0px; outline: none; text-decoration-line: none; color: rgb(222, 171, 4);\" target=\"_blank\">Thiết kế logo theo phong thủy có mê tín không?</a></strong></h4>\r\n\r\n<p><img alt=\"ti-le-vang8\" class=\"aligncenter size-full wp-image-228\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/Ti-le-vang8.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:610px\" /></p>\r\n\r\n<p>Nhiều khách hàng của mình bảo rằng họ không quan tâm đến phong thủy gì đâu, họ không mê tín như vậy, nên không cần thiết kế theo phong thủy gì cả. Cứ làm bình thường cho họ.</p>\r\n\r\n<p>Như vậy thì thật dễ để làm 1 cái logo hay biểu tượng cho công ty nào đó, bởi vậy thật dễ hiểu vì sao giá trên thị trường hiện nay có rất nhiều logo báo giá 300k, hoặc nhờ ai đó biết thiết kế làm dùm theo cái logo nào đó được lấy từ trên internet về vẽ lại cho tiết kiệm chi phí.</p>\r\n\r\n<p>Họ bảo rằng thương hiệu để phát triển phải trãi qua cả một quá trình chứ không phải cái logo không thôi. Nên không cần phải mê tín, để dành tiền làm những cái khác…</p>\r\n\r\n<h4><strong><a href=\"http://giatrithuonghieu.net/thiet-ke-logo-online-chuyen-nghiep/\" style=\"margin: 0px; padding: 0px; outline: none; text-decoration-line: none; color: rgb(222, 171, 4);\" target=\"_blank\">Vậy sao vẫn có những người thiết kế logo theo phong thủy?</a></strong></h4>\r\n\r\n<p><img alt=\"5\" class=\"aligncenter size-full wp-image-497\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2017/09/5.jpg\" style=\"background-color:rgb(0, 0, 0); border:none; clear:both; color:rgb(255, 255, 255); display:block; font-family:arial; font-size:14px; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:580px\" /></p>\r\n\r\n<p>Khi họ hiểu được logo quan trọng, logo chính là nguồn năng lượng liên kết để phát triển thương hiệu. Họ muốn logo thương hiệu của mình được đầu tư bài bản, đúng với khí trời, âm dương màu sắc đúng với bản mệnh của người sang lập và vận hành công ty tại thời điểm này, đúng với mong muốn phát triển thương hiệu của công ty.</p>\r\n\r\n<p>Họ không muốn công ty họ được đầu tư sơ sài, đơn giản mà việc cơ bản nhất chính là cái logo – trái tim của công ty, thương hiệu muốn phát triển hiện nay.</p>\r\n\r\n<p>Một điều quan trọng là tất cả những tập đoàn lớn nhất thế giới hiện nay đều bắt đầu starup rất nhỏ, nhưng ngay từ khi bắt đầu họ đã đi tìm cho mình một đơn vị thiết kế logo chuyên nghiệp, họ không hề tiết kiệm cho việc này.</p>\r\n\r\n<p>Anh Lý Quý Trung ban đầu cũng đã bỏ 5000USD để thiết kế cái logo thương hiệu của phở 24. Tại sao một người tài năng như ảnh lại không nghĩ logo cho mình mà lúc đầu đầy khó khăn mà cũng phải chịu một số tiền lớn để thiết kế logo thương hiệu bạn đầu như thế.</p>\r\n\r\n<p>Bạn thì sao? Bạn chọn thiết kế logo như thế nào?</p>\r\n\r\n<p><a href=\"http://giatrithuonghieu.net/thiet-ke-logo-online-chuyen-nghiep/\" style=\"margin: 0px; padding: 0px; outline: none; text-decoration-line: none; color: rgb(222, 171, 4);\" target=\"_blank\">Thiết kế logo chuyên nghiệp</a></p>\r\n\r\n<p>Hãy liên hệ với WynAds, bạn sẽ được tư vấn thiết kế miễn phí logo theo phong thủy.</p>', 'VBkp_Ti-le-vang9.jpg', 1, 0, '2017-10-05 00:53:58', '2017-10-05 00:53:58'),
(21, 'THIẾT KẾ CATALOGUE', 'thie-t-ke-catalogue', 'Tầm quan trọng trong việc thiết kế Catalogue', '<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Thiết kế Catalogue rất quan trọng trong việc giới thiệu sản phẩm, dịch vụ của doanh nghiệp đến với khách hàng. Catalogue là cuốn tài liệu được công ty biên soạn ra để giới thiệu về một loạt sản phẩm hoặc dịch vụ của công ty và sẽ đóng thành quyển với số lượng trang tương đối dày. Tối thiểu số lượng trang 1 cuốn catalogue khoảng 16-20 trang. Dựa vào quy mô, nhu cầu của doanh nghiệp mà thiết kế catalogue sao cho phù hợp nhất.</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Catalogue mang tính chất dùng để tra cứu thông tin một cách kỹ lưỡng và đầy đủ nhất về công ty hay doanh nghiệp</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:18.6667px\">Thiết kế catalogue sản phẩm đồ điện gia dụng.</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><img alt=\"Thiết kế Catalogue 1\" class=\"aligncenter size-full wp-image-354\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/catalogue.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:630px\" /></span></p>\r\n\r\n<p><br />\r\n<span style=\"font-family:times new roman,times,serif; font-size:14pt\"><strong>Quy cách:</strong></span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">– Thường thường thì cuốn catalogue sẽ có một số dạng kích thước sau: A4, A5 nhưng trong đó thông dụng nhất vẫn là A4 dọc (A4 nằm ngang cũng có nhưng ít thấy vì bất tiện nó hơi khi sử dụng và tốn kém hơn cho việc in ấn).</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">– Catalogue phải được in offset trên giấy Couche. Trang bìa bắt buộc sẽ in dày hơn, có thể là định lượng C250 hoặc C300 có cán màng mặt ngoài (cán mờ hoặc cán bóng). Trang ruột thường sẽ được in giấy C200 đối với số lượng trang từ 32 trang trở xuống và in định lượng C150 nếu số trang lớn, khoảng 40 trang trở lên. Catalogue thường được đóng quyển dạng dập ghim hoặc đóng gáy dán do vậy số lượng trang sẽ chia hết cho 4 để khi đóng thành quyển sẽ vừa đủ và đẹp</span></p>\r\n\r\n<p><img alt=\"Thiết kế Catalogue 3\" class=\"aligncenter size-full wp-image-356\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/catalogue2.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:630px\" /></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Thiết kế catalogue dịch vụ môi giới bất động sản</span></p>\r\n\r\n<h3><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><strong>Xác định mục đích của cuốn catalogue trước khi thiết kế</strong></span></h3>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Phải xác định được mục đích khi bắt đầu làm catalogue là giới thiệu sản phẩm để bán được hàng. Chứ không phải giới thiệu nhà máy hay ban lãnh đạo công ty dài dòng. Do vậy phải tập trung chủ yếu vào mục tiêu hình thành nó.</span></p>\r\n\r\n<h3><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><strong>Những chú ý khi thiết kế catalogue:</strong></span></h3>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">– Bố cục khi thiết kế catalogue nên có những ý chính như sau: Phần trang bìa đầu và bìa cuối, chúng ta nên giới thiệu một cách ngắn gọn bằng hình ảnh đặc trưng nhất về sản phẩm hay dịch vụ. Phải sử dụng hình ảnh minh họa &nbsp;mang tính cảm xúc cao, tránh đi vào từng chi tiết cụ thể. Phần trang bên trong, nên giới thiệu sơ qua về công ty xúc tích, ngắn gọn, sau đó là đến các nhóm sản phẩm muốn giới thiệu để cho khách hàng tiện theo dõi. Trang cuối cùng của catalogue sẽ để những thông tin hỗ trợ cho công việc bán hàng và marketing như: dịch vụ, liên hệ…</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><img alt=\"Thiết kế Catalogue 4\" class=\"aligncenter size-full wp-image-357\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/catalogue3.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:630px\" /></span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Thiết kế catalo sản phẩm nội thất</span></p>\r\n\r\n<h3><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><strong>Khái quát về in ấn và thiết kế cuốn catalogue</strong></span></h3>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Cần phải lên sẵn ý tưởng trong đầu về một cuốn catalogue chuyên nghiệp sẽ được đưa đến cho khách hàng như thế nào. Các nội dung cần phải quan tâm như sau:</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">– Kích thước như thế nào?</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">– Khổ A4 hay khổ đặc biệt, dọc ngang hay vuông?</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">– Tuỳ thuộc loại sản phẩm, cần đưa ra một kích thước hợp lý.</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">– Số lượng trang</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">– Chất liệu giấy</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><img alt=\"Thiết kế Catalogue 5\" class=\"aligncenter size-full wp-image-358\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/catalogue4.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:630px\" /></span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Thiết kế catalogue sản phẩm sen vòi nội thất nhà tắm</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><img alt=\"Thiết kế Catalogue 6\" class=\"aligncenter size-full wp-image-359\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/catalogue5.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:630px\" /></span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Thiết kế catalogue sản phẩm sen vòi nội thất nhà tắm</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><img alt=\"Thiết kế Catalogue 7\" class=\"aligncenter size-full wp-image-361\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/catalogue6.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:630px\" /></span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Thiết kế catalogue sản phẩm loa và thiết bị điện tử</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><img alt=\"Thiết kế Catalogue 8\" class=\"aligncenter size-full wp-image-362\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/catalogue7.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:630px\" /></span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\">Thiết kế catalog sản phẩm sứ vệ sinh</span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif; font-size:14pt\"><img alt=\"Thiết kế Catalogue 9\" class=\"aligncenter size-full wp-image-363\" src=\"http://giatrithuonghieu.net/wp-content/uploads/2016/12/catalogue8.jpg\" style=\"border:none; clear:both; display:block; height:auto; margin:0px auto; max-width:100%; outline:none; padding:0px; width:630px\" /></span></p>', 'HIKb_catalogue1.jpg', 1, 0, '2017-10-05 02:47:32', '2017-10-05 02:47:32');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `quyen` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `quyen`) VALUES
(1, 'HCT', 'trong.hh@tctav.com', '$2y$10$zzhGtIH2TgWljrevox4ncO9by96uJeLPEFb57qpDzWqvg2PLJLvju', NULL, '2017-10-09 21:05:09', '2017-10-09 21:05:09', 1),
(2, 'trong', 'hohongtrong@gmail.com', '$2y$10$nW8oIJ1Pgd.LYFiL6T/t..O/UgiLciV2AqKM9HeKMdAJ6xRM4yREK', 'yS2hbREIBJDvryB6YoR2HroOPC73vmHvQTeSiaWC8QhIl69KjYeF97QqVPSC', '2017-10-10 00:15:33', '2017-10-10 00:15:33', 1);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `theloais`
--
ALTER TABLE `theloais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tintucs`
--
ALTER TABLE `tintucs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
