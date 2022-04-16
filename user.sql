-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2022 lúc 04:19 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `teamnews3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accounttype` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `accounttype`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Anh Kiệt 123', 'anhkiet123@gmail.com', NULL, '$2y$10$wEnqsiKpl7ieKAmXEKsUJ.nZBxGYFnZc3TVtnlRWmkMoX/k1pwfTm', 0, NULL, '2021-10-19 06:03:00', '2021-12-04 18:43:01'),
(3, 'Anh Kiệt 111', 'anhkiet111@gmail.com', NULL, '$2y$10$0yj9WY7uC6zXTu18VXFjAeesLfr5ccGp6kWNoaVQ0GxH0bGh503Tm', 0, NULL, '2021-10-19 06:22:49', '2021-10-19 06:22:49'),
(4, 'Nguyễn Văn Tèo', 'nguyenvanteo@gmail.com', NULL, '$2y$10$9SiGL0A5I2S/Um1my7iXT.yu/3sxWAeAmEt0.Wv6QYZnJsO1hH0ne', 0, NULL, '2021-10-19 21:23:20', '2021-12-04 01:29:24'),
(5, 'Nguyễn Văn A1', 'nguyenvana@gmail.com', NULL, '$2y$10$srgJR2k7JLeEbcuJKTkZ5Ous8rp1tgiC4cNa3N.lZNr/o1mDaU76C', 0, NULL, '2021-10-19 21:24:46', '2021-11-30 21:09:21'),
(6, 'Anh Kiệt', 'anhkietk053@gmail.com', NULL, '$2y$10$znvkhlGdXkcgz1HWtEu6mOgVIQBKGWT9HAo1t6HFkfnsOxJLfHD6y', 1, NULL, '2021-11-12 18:51:34', '2021-11-12 18:51:34'),
(7, 'Dương Lê Minh Hậu', 'minhhau@gmail.com', NULL, '$2y$10$DYkvVOQ/eBdXbpeMprRQZO6MP/4pN6/MwEsSaWETZ8b/kDZNAdyxG', 2, NULL, '2021-12-03 06:09:00', '2021-12-03 06:09:00'),
(8, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', NULL, '$2y$10$4oaZizKFqKxjIKTjZB4CJuNY9TUmwFr/DAvSL0Hjr0BU0IitMsFnW', 0, NULL, '2021-12-03 07:46:41', '2021-12-03 07:46:41'),
(9, 'Nguyễn Văn C', 'nguyenvanc@gmail.com', NULL, '$2y$10$58hS8MMIKZFgkPU780TBW.QgL.zyWEhSG/oauM/NGry0J7DV/BouS', 0, NULL, '2021-12-05 01:41:10', '2021-12-05 01:41:10');

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
