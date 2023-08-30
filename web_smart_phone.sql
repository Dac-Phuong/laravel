-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 30, 2023 lúc 04:24 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_smart_phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'banner', '1692672633-product.png', '2023-08-21 19:50:33', '2023-08-21 19:50:33'),
(2, 'banner2', '1692673229-product.jpg', '2023-08-21 20:00:29', '2023-08-21 20:00:29'),
(4, 'banner3 update', '1692683651-product.jpg', '2023-08-21 20:01:08', '2023-08-21 22:54:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Iphone', '2023-08-19 07:31:34', NULL),
(3, 'SamSung', '2023-08-19 07:31:49', '2023-08-20 09:39:19'),
(6, 'Phụ kiện', '2023-08-20 17:59:42', '2023-08-20 17:59:42'),
(7, 'laptop', '2023-08-22 07:20:45', '2023-08-22 07:20:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `title`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'dacphuong', 'nguyendacphuong11@gmail.com', '0918212282', 'rewrw', 'ẻwerwer', 1, '2023-08-24 06:31:45', '2023-08-24 06:31:45'),
(6, 'dacphuong', 'nguyendacphuong11@gmail.com', '0334262754', 'hethet', 'egtregtreat', 1, '2023-08-24 06:32:17', '2023-08-24 06:32:17'),
(7, 'da', 'nguyendacphuong11@gmail.com', '0334262754', 'adgtehrt', 'ưerwerwer', 1, '2023-08-27 23:45:03', '2023-08-27 23:45:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `provinces_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `created_at`, `updated_at`, `name`, `provinces_id`) VALUES
(1, NULL, NULL, 'Quận Ba Đình', 1),
(2, NULL, NULL, 'Quận Hoàn Kiếm', 1),
(3, NULL, NULL, 'Quận Hai Bà Trưng', 1),
(4, NULL, NULL, 'Quận Hồng Bàng', 2),
(5, NULL, NULL, 'Quận Lê Chân', 2),
(6, NULL, NULL, 'Quận Ngô Quyền', 2),
(7, NULL, NULL, 'Hạ Long', 3),
(8, NULL, NULL, 'Móng Cái', 3),
(9, NULL, NULL, 'Uông Bí', 3),
(10, NULL, NULL, 'Thành phố Bắc Ninh', 4),
(11, NULL, NULL, 'Huyện Từ Sơn', 4),
(12, NULL, NULL, 'Huyện Gia Bình', 4),
(13, NULL, NULL, 'Sông Công', 14),
(14, NULL, NULL, 'Định Hóa', 14),
(15, NULL, NULL, 'Đồng Hỷ', 14),
(16, NULL, NULL, 'Võ Nhai', 14),
(17, NULL, NULL, 'Đại Từ', 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(14, '2023_08_16_162215_create_sessions_table', 1),
(15, '2014_10_12_000000_create_users_table', 2),
(16, '2014_10_12_100000_create_password_resets_table', 2),
(17, '2019_08_19_000000_create_failed_jobs_table', 2),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(19, '2023_08_17_114029_create_products_table', 3),
(20, '2023_08_17_120213_create_categories_table', 3),
(21, '2023_08_21_135107_create_posts_table', 4),
(22, '2023_08_21_140739_create_posts_table', 5),
(23, '2023_08_21_140943_create_posts_table', 6),
(24, '2023_08_22_023309_create_banners_table', 7),
(25, '2023_08_23_142118_create_contacts_table', 8),
(26, '2023_08_26_090217_create_orders_table', 9),
(27, '2023_08_27_160908_create_provinces_table', 10),
(28, '2023_08_27_160924_create_districts_table', 10),
(29, '2023_08_29_014200_create_orders_table', 11),
(30, '2023_08_29_014832_create_order_details_table', 11),
(31, '2023_08_29_020848_create_order_details_table', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_price` int(50) NOT NULL,
  `provinces_id` bigint(20) UNSIGNED NOT NULL,
  `districts_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `total_price`, `provinces_id`, `districts_id`, `user_id`, `trash`, `status`, `created_at`, `updated_at`) VALUES
(17, 'admin', '334262754', 'z115 quyết thắng tp thái nguyên', 54035250, 1, 5, 1, 1, '2', '2023-08-28 22:37:54', '2023-08-29 06:57:23'),
(19, 'phuong', '334262754', 'z115 thái nguyên', 54035250, 2, 3, 9, 1, '0', '2023-08-29 00:57:26', '2023-08-29 00:57:26'),
(20, 'phuong', '334262754', 'thái nguyên', 54035250, 3, 3, 9, 1, '2', '2023-08-29 01:01:22', '2023-08-29 07:07:06'),
(21, 'phuong', '334262754', 'thai nguyen', 50931816, 3, 2, 9, 1, '1', '2023-08-29 01:03:53', '2023-08-29 07:07:29'),
(25, 'phuong', '334262754', 'đường z115 xã quyết thắng thành phố thái nguyên', 172120000, 14, 16, 9, 0, '0', '2023-08-30 01:40:21', '2023-08-30 01:40:21'),
(26, 'phuong', '334262754', 'tổ 4 phường chùa hàng , đồng hủy thái nguyên', 20340000, 14, 15, 9, 0, '0', '2023-08-30 01:46:27', '2023-08-30 01:46:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `name_product` varchar(200) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `orders_id`, `products_id`, `name_product`, `quantity`, `price`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(6, 17, 7, 'Chuột Không dây Rapoo B2', 5, 100000.00, 'pending', 1, '2023-08-28 22:37:54', '2023-08-28 22:37:54'),
(7, 17, 11, 'Bàn Phím Cơ Bluetooth Rapoo V700 - 8A', 2, 1340000.00, 'pending', 1, '2023-08-28 22:37:54', '2023-08-28 22:37:54'),
(8, 17, 6, 'Điện thoại OPPO A58 6GB', 1, 2543434.00, 'pending', 1, '2023-08-28 22:37:54', '2023-08-28 22:37:54'),
(9, 17, 3, 'Samsung Galaxy S10 Mỹ mới 100% Fullbox', 4, 2545454.00, 'pending', 1, '2023-08-28 22:37:54', '2023-08-28 22:37:54'),
(10, 17, 14, 'Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU (MGN63SA/A)', 2, 18990000.00, 'pending', 1, '2023-08-28 22:37:54', '2023-08-28 22:37:54'),
(16, 19, 7, 'Chuột Không dây Rapoo B2', 5, 100000.00, 'pending', 1, '2023-08-29 00:57:26', '2023-08-29 00:57:26'),
(17, 19, 11, 'Bàn Phím Cơ Bluetooth Rapoo V700 - 8A', 2, 1340000.00, 'pending', 1, '2023-08-29 00:57:26', '2023-08-29 00:57:26'),
(18, 19, 6, 'Điện thoại OPPO A58 6GB', 1, 2543434.00, 'pending', 1, '2023-08-29 00:57:26', '2023-08-29 00:57:26'),
(19, 19, 3, 'Samsung Galaxy S10 Mỹ mới 100% Fullbox', 4, 2545454.00, 'pending', 1, '2023-08-29 00:57:26', '2023-08-29 00:57:26'),
(20, 19, 14, 'Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU (MGN63SA/A)', 2, 18990000.00, 'pending', 1, '2023-08-29 00:57:26', '2023-08-29 00:57:26'),
(21, 20, 7, 'Chuột Không dây Rapoo B2', 5, 100000.00, 'pending', 1, '2023-08-29 01:01:22', '2023-08-29 01:01:22'),
(22, 20, 11, 'Bàn Phím Cơ Bluetooth Rapoo V700 - 8A', 2, 1340000.00, 'pending', 1, '2023-08-29 01:01:22', '2023-08-29 01:01:22'),
(23, 20, 6, 'Điện thoại OPPO A58 6GB', 1, 2543434.00, 'pending', 1, '2023-08-29 01:01:22', '2023-08-29 01:01:22'),
(24, 20, 3, 'Samsung Galaxy S10 Mỹ mới 100% Fullbox', 4, 2545454.00, 'pending', 1, '2023-08-29 01:01:22', '2023-08-29 01:01:22'),
(25, 20, 14, 'Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU (MGN63SA/A)', 2, 18990000.00, 'pending', 1, '2023-08-29 01:01:22', '2023-08-29 01:01:22'),
(26, 21, 11, 'Bàn Phím Cơ Bluetooth Rapoo V700 - 8A', 2, 1340000.00, 'pending', 1, '2023-08-29 01:03:53', '2023-08-29 01:03:53'),
(27, 21, 3, 'Samsung Galaxy S10 Mỹ mới 100% Fullbox', 4, 2545454.00, 'pending', 1, '2023-08-29 01:03:53', '2023-08-29 01:03:53'),
(28, 21, 14, 'Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU (MGN63SA/A)', 2, 18990000.00, 'pending', 1, '2023-08-29 01:03:53', '2023-08-29 01:03:53'),
(29, 19, 7, 'Chuột Không dây Rapoo B2', 5, 100000.00, 'pending', 1, '2023-08-29 00:57:26', '2023-08-29 00:57:26'),
(30, 19, 7, 'Chuột Không dây Rapoo B2', 5, 100000.00, 'pending', 1, '2023-08-29 00:57:26', '2023-08-29 00:57:26'),
(40, 25, 16, 'Laptop MSI Gaming GF63 Thin 11UC i7 11800H/8GB/512GB/4GB RTX3050/144Hz/Win11 (1228VN)', 2, 18890000.00, '0', 0, '2023-08-30 01:40:21', '2023-08-30 01:40:21'),
(41, 25, 14, 'Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU (MGN63SA/A)', 7, 18990000.00, '0', 0, '2023-08-30 01:40:21', '2023-08-30 01:40:21'),
(42, 25, 12, 'Chuột Không dây Bluetooth Silent Logitech Signature M650', 2, 660000.00, '0', 0, '2023-08-30 01:40:21', '2023-08-30 01:40:21'),
(43, 26, 14, 'Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU (MGN63SA/A)', 1, 18990000.00, '0', 0, '2023-08-30 01:46:27', '2023-08-30 01:46:27'),
(44, 26, 12, 'Chuột Không dây Bluetooth Silent Logitech Signature M650', 2, 660000.00, '0', 0, '2023-08-30 01:46:27', '2023-08-30 01:46:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `upload` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `upload`, `created_at`, `updated_at`) VALUES
(1, 'Bất chấp lệnh cấm, doanh số smartphone của Huawei vẫn tăng 130% ở Trung Quốc', 'Điều này cho thấy ảnh hưởng từ cuộc chiến tranh thương mại Mỹ - Trung lên thị trường Trung Quốc là không đáng kể.', '1692628208-product.jpg', '<p>Kể từ khi chính phủ Hoa Kỳ đưa&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/huawei\">Huawei</a>&nbsp;vào “danh sách đen”, rất nhiều công ty như Google Intel, Qualcomm và ARM,... đều cũng đã lên tiếng xác nhận ngừng hợp tác với nhà sản xuất đến từ Trung Quốc này.</p><p>Ngoài ra, các hiệp hội như Wi-Fi Alliance, hiệp hội bán dẫn JEDEC, SDA (Hiệp hội SD) và tiêu chuẩn PCIe cũng hủy bỏ tư cách thành viên của Huawei. Người ta tin rằng tình trạng này sẽ làm sụp đổ hoạt động kinh doanh của Huawei ngay cả ở thị trường quê nhà Trung Quốc. Tuy nhiên, dường như lệnh cấm của Mỹ đang khuyến khích người Trung Quốc chọn mua smartphone của nhà sản xuất Trung Quốc này.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"https://fptshop.com.vn/uploads/images/tin-tuc/84115/Originals/Huawei-dat-doanh-thu-khung-tren-Tmall-2.jpg\" alt=\"\"></p><p>Cụ thể, sau lệnh cấm của Mỹ đối với Huawei vào ngày 16 tháng 5, doanh số của điện thoại thông minh Huawei trên nền tảng Tmall đã tăng mạnh. Theo dữ liệu chính thức từ Tmall, từ ngày 18 đến 20 tháng 5, các lô hàng điện thoại di động của Huawei từ Tmall đã tăng 130%, vượt mức tăng trưởng trung bình của ngành smartphone nói chung tới 30%. Và để “ăn mừng” điều này, Huawei cũng đã đăng tải một tấm poster để “chia vui” cùng người dùng.</p><p>Để đạt được điều này là do Trung Quốc gần như là một thị trường khép kín với các dịch vụ “tự cung tự cấp” và không hề dựa dẫm quá nhiều vào môi trường bên ngoài. Do đó ảnh hưởng từ lệnh cấm vận của Mỹ lên thị trường tỷ dân này là không đáng kể và Huawei hoàn toàn có thể làm chủ tình hình ở ngay tại thị trường nội địa mà không gặp bất cứ vấn đề nào.</p><p><strong>Theo:&nbsp;</strong><a href=\"http://www.gizchina.com/2019/05/24/huawei-smartphone-shipment-grows-despite-us-ban/\"><i>Gizchina</i></a></p>', '2023-08-21 07:30:08', '2023-08-21 07:30:08'),
(3, 'Apple mất mốc vốn hóa lịch sử 3.000 tỷ USD update', 'Apple mất mốc vốn hóa lịch sử 3.000 tỷ USD', '1692674581-product.jpg', '<p>Triển vọng mảng phần cứng kém lạc quan khiến cổ phiếu Apple giảm gần 5% phiên cuối tuần, kéo vốn hóa xuống dưới 3.000 tỷ USD.</p><p>Chốt phiên giao dịch 4/8, cổ phiếu Apple giảm 4,8%, khiến giá trị thị trường của hãng chỉ còn 2.850 tỷ USD. Mức giảm vốn hóa 160 tỷ USD một ngày cũng là lớn nhất kể từ tháng 9/2022.</p><p>Cổ phiếu Apple đi xuống sau khi hãng công bố báo cáo tài chính quý kết thúc vào ngày 1/7. Theo đó, doanh thu Táo Khuyết giảm quý thứ ba liên tiếp, với 81,8 tỷ USD, thấp hơn dự báo và giảm 1,4% so với cùng kỳ năm ngoái. Apple cũng cảnh báo tình trạng tương tự trong quý này.</p><p><picture><source srcset=\"https://i1-kinhdoanh.vnecdn.net/2023/08/05/cats-6196-1691207085.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=uOIrn5rpUSd6L5z4w5jdYA 1x, https://i1-kinhdoanh.vnecdn.net/2023/08/05/cats-6196-1691207085.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=mrh92rzimAjp7_lPGAnV0A 1.5x, https://i1-kinhdoanh.vnecdn.net/2023/08/05/cats-6196-1691207085.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=XFuxBILmnBXLLBzvB_Om0g 2x\"><img src=\"https://i1-kinhdoanh.vnecdn.net/2023/08/05/cats-6196-1691207085.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=uOIrn5rpUSd6L5z4w5jdYA\" alt=\"Diễn biến cổ phiếu Apple từ đầu năm. Đồ thị: Bloomberg\"></picture></p><p>Diễn biến cổ phiếu Apple từ đầu năm. Đồ thị: <i>Bloomberg</i></p><p>Quý trước, lĩnh vực phần cứng chủ chốt của Apple ghi nhận doanh thu thấp hơn dự báo. Trong đó, iPhone mang về 39,67 tỷ USD và Mac đem lại 6,84 tỷ USD. Tuy nhiên, lợi nhuận của công ty vẫn tăng 2,3% so với quý III/2022 và đạt 19,9 tỷ USD.</p><p>Theo công ty chứng khoán Rosenblatt, báo cáo cho thấy \"sự giảm tốc của Apple\". Mảng Dịch vụ của Táo Khuyết đang tăng tốc, với doanh thu 21,21 tỷ USD - cao nhất từ trước đến nay. Tuy nhiên, hoạt động kinh doanh ảm đạm tại thị trường Mỹ có thể còn kéo dài.</p><p>Hồi tháng 6, Apple trở thành công ty đầu tiên trên thế giới đạt mốc vốn hóa 3.000 tỷ USD, khi nhóm cổ phiếu công nghệ gần đây được ưa chuộng nhờ làn sóng AI.</p><p>Vốn hóa của Apple luôn là mối quan tâm của nhà đầu tư. Hệ số giá cổ phiếu trên lợi nhuận (P/E) của công ty này hiện là 28 – cao nhất trong lịch sử Apple và cũng cao hơn thị trường chung. Cổ phiếu Apple năm nay đã tăng 40%, tương đương chỉ số Nasdaq 100.</p>', '2023-08-21 19:02:31', '2023-08-21 20:23:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_list` varchar(200) DEFAULT NULL,
  `price` int(50) NOT NULL,
  `description` longtext DEFAULT NULL,
  `sale` varchar(255) DEFAULT '0',
  `quantity` int(11) NOT NULL,
  `category_id` int(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `image_list`, `price`, `description`, `sale`, `quantity`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'iPhone 14 Pro Max 128GB (Likenew)', '1692418415-product.png', NULL, 21000000, 'iPhone 14 Pro Max 128GB (Likenew) sở hữu thiết kế vuông vức, được trang bị màn hình Super Retina XDR OLED được cải tiến mang lại tỷ lệ tương phản đáng kinh ngạc. Bên cạnh đó, hiệu năng của thiết bị cũng hoạt động mạnh mẽ nhờ được trang bị chipset A16 Bionic. Ngoài ra, hệ thống camera được trang bị các tính năng hiện đại giúp người dùng sáng tạo bứt phá.', '5', 1, 2, 1, '2023-08-18 21:13:35', '2023-08-18 21:13:35'),
(3, 'Samsung Galaxy S10 Mỹ mới 100% Fullbox', '1692421591-product.png', NULL, 2545454, 'Samsung Galaxy S10 Mỹ sắp ra mắt là một trong những điện thoại thông minh được mong đợi nhất nửa đầu 2019. Thế hệ smartphone thuộc dòng S10 Series lần này được kỳ vọng có những tính năng hấp dẫn, cải thiện thời lượng pin, hiệu suất hay chất lượng camera. Galaxy S10 phiên bản tiêu chuẩn của dòng S năm nay sở hữu đầy đủ tính năng  mới nhất không kém cạnh đàn anh S10+.\r\n\r\n1.Thiết kế và kích thước \r\nGalaxy S10 giờ đây đã có thiết kế vuông vắn hơn cho cảm giác cầm nắm dễ chịu thuận tiên khi sử dụng.\r\nGalaxy S10 sở hữu màn hình Dynamic AMOLED kích thước 6,1 inch có thiết kế cong tràn viền, tỉ lệ 19:9 và độ phân giải Quad HD+.Cạnh phải trên Galaxy S10 là 1 camera. Màn hình trên Galaxy S10 mới đạt chuẩn hình ảnh HDR10+ giúp hiển thị nội dung video có dải tương phản động cao.', '2', 1, 3, 1, '2023-08-18 22:06:31', '2023-08-18 22:06:31'),
(6, 'Điện thoại OPPO A58 6GB', '1692551581-product.jpg', NULL, 2543434, 'OPPO là nhà sản xuất điện thoại di động hàng đầu của Trung Quốc, tiếp tục thể hiện sự đổi mới và sáng tạo với dòng sản phẩm mới mang tên OPPO A58. Thiết kế của chiếc điện thoại này mang đậm tính hiện đại, đẹp mắt, cùng với nhiều tính năng hấp dẫn, hứa hẹn sẽ làm thỏa mãn nhu cầu của người dùng.', '0', 1, 3, 1, '2023-08-20 10:06:42', '2023-08-20 10:13:01'),
(7, 'Chuột Không dây Rapoo B2', '1692603803-product.jpg', NULL, 100000, 'Chuột không dây Rapoo B2 sở hữu kiểu dáng tối giản, thiết kế gọn chắc, màu sắc thời thượng, độ nhạy cao, mang đến cho người dùng những trải nghiệm tuyệt vời nhất.\r\n• Thiết kế chắc chắn, khối lượng gọn nhẹ chỉ với 60 g dễ dàng mang theo mọi lúc mọi nơi. Ngoài ra, chất liệu sản xuất chuột bền bỉ, nâng cao trải nghiệm trong quá trình sử dụng.\r\n\r\n• Chuột tương thích với hệ điều hành Windows, hỗ trợ kết nối dễ dàng và tiện lợi với máy tính qua đầu thu USB.\r\n\r\n• Độ phân giải chuột lên đến 1200 DPI cho khả năng phản hồi nhanh nhạy, xử lý tốt các tác vụ văn phòng cơ bản của người dùng.\r\n\r\n• Phím nổi có độ nảy cao, con lăn mềm mại, di chuột nhẹ nhàng và chính xác.\r\n\r\n• Chuột Rapoo sử dụng pin AA thông dụng, dễ dàng thay thế khi hết pin.', '10', 1, 6, 1, '2023-08-21 00:43:23', '2023-08-21 00:43:23'),
(9, 'Bàn phím Gaming Asus ROG Strix Scope RX BL SW', '1692603969-product.jpg', NULL, 2040000, 'Bàn phím Gaming Asus ROG Strix Scope RX BL SW Đen là mẫu bàn phím Full size với thiết kế thời thượng, đèn LED RGB đẹp mắt cùng nhiều tính năng hấp dẫn khác, mang đến cho người dùng những trải nghiệm chơi game, làm việc ấn tượng nhất.\r\n• Thiết kế bề thời thượng tích hợp đèn LED RGB nổi bật giúp góc làm việc của bạn trông “nghệ\" hơn. Phím nhấn được làm từ chất liệu nhựa PTB 2 lớp vừa tạo cảm giác cao cấp và sang trọng khi đèn LED chiếu qua, vừa gia tăng độ bền cho các phím.\r\n\r\n• Trang bị switch quang ROG RX Red với độ nảy tốt cho hành trình phím sâu, không cần dùng quá nhiều lực khi gõ phím, khả năng phản hồi cực kỳ nhanh chóng, yên tâm sử dụng lâu dài với độ bền lên đến 100 triệu lần nhấn (thử nghiệm của hãng).', '0', 1, 6, 1, '2023-08-21 00:46:09', '2023-08-21 00:46:09'),
(10, 'Chuột Gaming Zadez G156M', '1692604275-product.jpg', NULL, 300000, 'Chuột Gaming Zadez G156M sở hữu thiết kế mạnh mẽ, kích thước vừa vặn tay cầm, trang bị đèn LED đẹp mắt, độ phân giải cao, mang đến cho các game thủ những trải nghiệm tốt nhất.\r\n• Thiết kế ​​Ergonomic vừa lòng bàn tay, mang đến cảm giác tối ưu trong quá trình sử dụng.\r\n\r\n• Gam màu đẹp mắt, tăng thêm phần thẩm mỹ cho bàn làm việc của bạn mà không lo chiếm quá nhiều diện tích.\r\n\r\n• Chuột trang bị độ phân giải 7200 DPI cho độ nhạy cao, phản hồi chính xác, đảm bảo từng thao tác của game thủ được thực thi, dùng tốt cả những tựa game có nhịp độ cao.\r\n\r\n• Sử dụng Driver để tuỳ chỉnh chế độ Game Mode sang chế độ Office Mode ngay lập tức. Ngoài ra, người dùng có thể chỉnh nhiều tính năng khác bao gồm: Cài đặt chế độ vận hành, chế độ hiển thị đèn, cài đặt Macro (tổ hợp lệnh) và tùy chỉnh các thông số chi tiết như FPS, Response Rate,...', '10', 1, 6, 1, '2023-08-21 00:46:56', '2023-08-21 00:51:15'),
(11, 'Bàn Phím Cơ Bluetooth Rapoo V700 - 8A', '1692604380-product.jpg', NULL, 1340000, 'Bàn Phím Cơ Bluetooth Rapoo V700 - 8A có kiểu dáng tối giản cùng cách phối màu độc đáo, kích thước cực kỳ nhỏ gọn không chiếm quá nhiều diện tích khi đặt trên bàn làm việc, dễ dàng bỏ vào balo hay vali để mang theo bất cứ đâu.\r\n• Thiết kế nhỏ gọn và chắc chắn, bàn phím chỉ chiếm không gian khá nhỏ trên khu vực làm việc.\r\n\r\n• Trang bị đèn LED màu trắng với 7 hiệu ứng ánh sáng vừa hỗ trợ gõ phím dễ dàng hơn, vừa giúp tăng tính thẩm mỹ cho không gian làm việc hay giải trí, đặc biệt làm nổi bật góc phòng khi làm việc/học tập vào ban đêm hoặc những nơi thiếu sáng.\r\n\r\n• Bàn phím sở hữu các phím cơ kiểu máy đánh chữ, khi sử dụng bạn sẽ nghe những âm thanh lách cách phát ra từng bàn phím rất vui tai.', '15', 1, 6, 1, '2023-08-21 00:53:00', '2023-08-21 00:53:00'),
(12, 'Chuột Không dây Bluetooth Silent Logitech Signature M650', '1692604457-product.jpg', NULL, 660000, 'Chuột Không dây Bluetooth Silent Logitech Signature M650 sở hữu kiểu dáng công thái học cùng độ phân giải lớn, đáp ứng tốt gần như mọi nhu cầu từ sử dụng cơ bản tới những tác vụ chuyên nghiệp của người dùng.\r\n• Thiết kế gọn đẹp, vừa tay, màu sắc thời thượng, lịch lãm, viền bên được lót thêm miếng cao su giúp cầm và sử dụng chuột chắc chắn hơn.\r\n• Chuột không dây này có thể kết nối được với phần lớn các máy tính hiện nay nhờ tương thích với các hệ điều hành phổ biến: Windows và macOS.\r\n• Độ phân giải lên tới 4000 DPI, cho phản hồi cực kỳ nhanh chóng và chính xác.\r\n• Kích thước chuột cỡ vừa (size M), phù hợp với kích cỡ tay của phần đông người dùng (chiều dài tay khoảng 17.5 cm - 19 cm).', '0', 1, 6, 1, '2023-08-21 00:54:17', '2023-08-21 00:54:17'),
(13, 'Điện thoại iPhone 14 Pro Max 128GB update', '1692674023-product.png', NULL, 26490000, 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.', '5', 1, 2, 1, '2023-08-21 00:56:03', '2023-08-21 20:13:43'),
(14, 'Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU (MGN63SA/A)', '1692715197-product.jpg', NULL, 18990000, 'Thông tin sản phẩm\r\nMacBook Air M1 2020 sở hữu thiết kế sang trọng nhỏ gọn có thể dễ dàng mang theo bên mình. Cấu hình máy với hiệu năng xử lý nhanh, đạt hiệu quả cao với chip Apple M1 mới, sẽ là trợ thủ đắc lực hỗ trợ bạn tốt trong mọi công việc.\r\nHiệu năng xử lý tốt, thao tác mượt mà\r\nApple MacBook Air 2020 được trang bị chip Apple M1 hiện đại với CPU 8 nhân gồm 4 nhân cho hiệu năng cao và 4 nhân tiết kiệm năng lượng. Đây là vi xử lý chạy trên cấu trúc ARM cho hiệu năng xử lý nhanh hơn 3,5 lần so với thế hệ trước, pin dùng được lâu dài hơn lên đến 10 giờ đồng hồ.', '0', 1, 7, 1, '2023-08-22 07:39:57', '2023-08-22 07:39:57'),
(16, 'Laptop MSI Gaming GF63 Thin 11UC i7 11800H/8GB/512GB/4GB RTX3050/144Hz/Win11 (1228VN)', '1692773356-product.jpg', NULL, 18890000, 'Thông tin sản phẩm\r\nLaptop MSI Gaming GF63 Thin 11UC i7 11800H (1228VN) gây ấn tượng bởi vẻ ngoài hiện đại nhưng không kém phần cuốn hút và mạnh mẽ của một chiếc laptop gaming, cùng với những tính năng vượt trội, sẵn sàng đồng hành cùng bạn trên mọi đấu trường ảo.\r\n• Máy cho phép người dùng chiến các tựa game hấp dẫn một cách mượt mà, đồng thời xử lý đồ họa, các tác vụ văn phòng, thiết kế,.... nhanh chóng và hiệu quả nhờ hiệu năng vượt bậc của CPU Intel Core i7 11800H với cấu trúc 8 nhân, 16 luồng cùng tốc độ xung nhịp tối đa lên đến 4.6 GHz.\r\n\r\n• Card rời NVIDIA GeForce RTX 3050 Max-Q, 4 GB mang đến hiệu năng xử lý đồ họa vượt bậc, bạn có thể thỏa sức sáng tạo cùng những phần mềm thiết kế hình ảnh, video,... Ngoài ra, laptop MSI còn nâng cao trải nghiệm chơi game với chất lượng hình ảnh rõ nét qua từng chuyển động trong thế giới ảo.', '10', 1, 7, 1, '2023-08-22 07:42:57', '2023-08-22 23:49:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', NULL, NULL),
(2, 'Hải Phòng', NULL, NULL),
(3, 'Quảng Ninh', NULL, NULL),
(4, 'Bắc Ninh', NULL, NULL),
(5, 'Bắc Giang', NULL, NULL),
(6, 'Hải Dương', NULL, NULL),
(7, 'Hòa Bình', NULL, NULL),
(8, 'Hưng Yên', NULL, NULL),
(9, 'Lào Cai', NULL, NULL),
(10, 'Nam Định', NULL, NULL),
(11, 'Ninh Bình', NULL, NULL),
(12, 'Phú Thọ', NULL, NULL),
(13, 'Thái Bình', NULL, NULL),
(14, 'Thái Nguyên', NULL, NULL),
(15, 'Tuyên Quang', NULL, NULL),
(16, 'Vĩnh Phúc', NULL, NULL),
(17, 'Yên Bái', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ntNvOq6yV5xjnbzKoOX8c7f6ckhDpBMbiatBNnIL', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQlJveXhGUWFJSHZ1SXVYbWNOZE9rNnlMR0l0R0hqY2ZyakRZS054VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1692345259),
('VElB3ZU2YY5OMSP83KyNMcExk0iQ4oJv59ev9Z16', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM1JoamxrWmVlc293U0dVamp0R0dNaTIxa2ZjeGxma2dLUG5sQk9iaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1692433699),
('vnlPqjpE76WpOBbNn3VbsV3B6QlmsqfHoQkfF341', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicGxFN0M4bGFIRjBaUURIZVB1c3A5OUxTdEE0bm9UYk43cXhQVzRYeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1692270890);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `roles` tinytext NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `roles`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 334262754, '1', NULL, '$2y$10$Ux/LVtUqM5qRP2DwC9maM.6ZcrmmSIwqHy6oWuLtOWTkifJ3r1JGa', NULL, '2023-08-18 00:54:18', '2023-08-18 00:54:18'),
(6, 'tramy123', 'vutramy@gmail.com', 334262754, '0', NULL, '$2y$10$gRuergNEgaamjwnt2i.luu95lvbF9ElXg7ZIpx5E69JYYYNdRFsU.', NULL, '2023-08-23 09:04:23', '2023-08-23 09:04:23'),
(8, 'tramy', 'trmy01@gmail.com', 321554525, '0', NULL, '$2y$10$jaJtr1HNQD08o87bMTfNROcwxEbFOUJ4ftDWODoW/tLFFKfml/FdG', NULL, '2023-08-24 19:35:46', '2023-08-24 19:35:46'),
(9, 'phuong', 'nguyendacphuong111@gmail', 334262754, '0', NULL, '$2y$10$VBqwKNIPlhZBT1tR6fUcF.ABTfR/My0erVSnM4Std4zHlkdbGuktO', NULL, '2023-08-27 03:36:57', '2023-08-27 03:36:57');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_provinces_id_foreign` (`provinces_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_provinces_id_foreign` (`provinces_id`),
  ADD KEY `orders_districts_id_foreign` (`districts_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_orders_id_foreign` (`orders_id`),
  ADD KEY `order_details_products_id_foreign` (`products_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_provinces_id_foreign` FOREIGN KEY (`provinces_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_districts_id_foreign` FOREIGN KEY (`districts_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_provinces_id_foreign` FOREIGN KEY (`provinces_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
