-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2020 lúc 05:30 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban_dien_thoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` int(255) NOT NULL,
  `hang_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chi_tiet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mau_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sx` date NOT NULL,
  `ngay_nhap` date NOT NULL,
  `anh_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `hang_sp`, `ten_sp`, `gia_sp`, `chi_tiet`, `mau_sp`, `ghi_chu`, `ngay_sx`, `ngay_nhap`, `anh_sp`) VALUES
(8, 'iphone', 'iphone X', '17000000', '', 'đen', '', '0000-00-00', '0000-00-00', 'images/iphone_X.JPG'),
(9, 'Iphone', 'Iphone Xs Max 64BG', '13800000', '', '', '', '0000-00-00', '2020-06-15', 'images/iphone_xs_max.jpg'),
(10, 'iphone', 'Iphone Xs 64BG', '11200000', '', '', '', '0000-00-00', '0000-00-00', 'images/iphone_xs_max.jpg'),
(11, 'Iphone', 'Iphone 8 Plus 64GB', '8000000', '', '', '', '0000-00-00', '0000-00-00', 'images/iphone_8plus.jpg'),
(12, 'Iphone', 'Iphong 7 Plus 32GB', '5200000', '', '', '', '0000-00-00', '0000-00-00', 'images/iphone_7_plus.jpg'),
(13, 'Iphone', 'IphoneX 64GB', '9500000', '', '', '', '0000-00-00', '0000-00-00', 'images/iphone_X.jpg'),
(14, 'Iphone', 'Iphone 11 64GB', '15300000', '', 'vàng', '', '0000-00-00', '2020-06-15', 'images/iphone_11pro.jpg'),
(15, 'Iphone', 'Iphone 7', '6000000', '', 'đen nhám', '', '0000-00-00', '0000-00-00', 'images/iphone_7_plus.jpg'),
(16, 'Iphone', 'Iphone X 64GB(like new)', '9500000', '', '', '', '0000-00-00', '0000-00-00', 'images/iphone_X.jpg'),
(17, 'Iphone', 'Iphone 6s 64GB', '4000000', '', '', '', '0000-00-00', '0000-00-00', 'images/iphone_6s.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_sp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
