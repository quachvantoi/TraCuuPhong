-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 29, 2022 lúc 12:19 AM
-- Phiên bản máy phục vụ: 10.5.12-MariaDB
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id18703555_doantotnghiep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CronT`
--

CREATE TABLE `CronT` (
  `ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCapNhat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `CronT`
--

INSERT INTO `CronT` (`ID`, `NgayCapNhat`) VALUES
('1', '21 4 2022'),
('2', '25 4 2022'),
('3', '25 4 2022'),
('4', '26 4 2022'),
('5', '27 4 2022'),
('6', '28 4 2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `DanhGia`
--

CREATE TABLE `DanhGia` (
  `IDKhachSan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDTaiKhoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DanhGia` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `KhuVuc`
--

CREATE TABLE `KhuVuc` (
  `IDKhuVuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLanTimKiem` int(11) DEFAULT NULL,
  `TenKhuVuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenKVTV` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `KhuVuc`
--

INSERT INTO `KhuVuc` (`IDKhuVuc`, `SoLanTimKiem`, `TenKhuVuc`, `TenKVTV`) VALUES
('DL', 0, 'Da Lat', 'Đà Lạt'),
('DN', 31, 'Da Nang', 'Đà Nẵng'),
('HCM', 0, 'Ho Chi Minh', 'Hồ Chí Minh'),
('HN', 3, 'Ha Noi', 'Hà Nội'),
('NT', 0, 'Nha Trang', 'Nha Trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `PhanQuyen`
--

CREATE TABLE `PhanQuyen` (
  `MaLoaiTaiKhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiTaiKhoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `PhanQuyen`
--

INSERT INTO `PhanQuyen` (`MaLoaiTaiKhoan`, `LoaiTaiKhoan`) VALUES
('Admin', 'Admin'),
('User', 'Người Dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Phong`
--

CREATE TABLE `Phong` (
  `IDKhachSan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDKhuVuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenKhachSan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Phong`
--

INSERT INTO `Phong` (`IDKhachSan`, `IDKhuVuc`, `TenKhachSan`) VALUES
('DL-KS0', 'DL', 'Khách sạn Mường Thanh Holiday Đà Lạt'),
('DL-KS1', 'DL', 'Ana Mandara Villas Đà Lạt Resort &amp; Spa'),
('DL-KS10', 'DL', 'Khách sạn Đà Lạt Memory Inn'),
('DL-KS11', 'DL', 'Khách sạn Lê Nguyễn Đà Lạt'),
('DL-KS12', 'DL', 'Khách sạn Mai Vàng 2 Đà Lạt'),
('DL-KS13', 'DL', 'Khách Sạn Đà Lạt Đông Dương'),
('DL-KS14', 'DL', 'Khách sạn Navy Flowers Đà Lạt'),
('DL-KS15', 'DL', 'Khách Sạn Cẩm Đô Đà Lạt'),
('DL-KS16', 'DL', 'Khách sạn SaiGon’s Book Đà Lạt'),
('DL-KS17', 'DL', 'Khách sạn Mai Hoàng Đà Lạt'),
('DL-KS18', 'DL', 'Khách sạn Mine Đà Lạt'),
('DL-KS19', 'DL', 'Khách sạn Teppi Đà Lạt'),
('DL-KS2', 'DL', 'Khách sạn Golf Valley Đà Lạt'),
('DL-KS20', 'DL', 'Dalat Legend Homestay'),
('DL-KS21', 'DL', 'Khách Sạn Hương Mộc Đà Lạt'),
('DL-KS22', 'DL', 'RIMI House Đà Lạt'),
('DL-KS23', 'DL', 'Khách sạn Lan Anh Đà Lạt'),
('DL-KS3', 'DL', 'Khách Sạn Saphir Đà Lạt'),
('DL-KS4', 'DL', 'Khách Sạn La Sapinette Đà Lạt'),
('DL-KS5', 'DL', 'Khu nghỉ dưỡng SAM Tuyền Lâm Đà Lạt'),
('DL-KS6', 'DL', 'Khách sạn Dalat Boutique Đà Lạt'),
('DL-KS7', 'DL', 'Phạm Hùng House Đà Lạt'),
('DL-KS8', 'DL', 'Khách sạn Du Lys Đà Lạt'),
('DL-KS9', 'DL', 'Khách sạn Mỹ Khánh Đà Lạt'),
('DN-KS0', 'DN', 'Khách sạn Mường Thanh Grand Đà Nẵng'),
('DN-KS1', 'DN', 'Khách Sạn Monarque Đà Nẵng'),
('DN-KS10', 'DN', 'Thi Boutique Villa Đà Nẵng'),
('DN-KS11', 'DN', 'Khách sạn Ruby Light Đà Nẵng'),
('DN-KS12', 'DN', 'Khách sạn Greenery Đà Nẵng'),
('DN-KS13', 'DN', 'Khách sạn Quốc Cường Center Đà Nẵng'),
('DN-KS14', 'DN', 'Khách sạn Hemera Boutique Đà Nẵng'),
('DN-KS15', 'DN', 'Khách sạn Ritzy Boutique Đà Nẵng'),
('DN-KS16', 'DN', 'Khách sạn Parze Ocean Đà Nẵng'),
('DN-KS17', 'DN', 'Khách sạn Valencia Đà Nẵng'),
('DN-KS18', 'DN', 'Khách sạn Sunny Ocean Đà Nẵng'),
('DN-KS19', 'DN', 'An Boutique Villa Đà Nẵng'),
('DN-KS2', 'DN', 'Khách sạn Tây Bắc Đà Nẵng'),
('DN-KS20', 'DN', 'Khách sạn Danaciti Đà Nẵng'),
('DN-KS21', 'DN', 'Khách sạn 7.Seven Sea Đà Nẵng'),
('DN-KS22', 'DN', 'Khách sạn Quốc Thiện Đà Nẵng'),
('DN-KS23', 'DN', 'Khách sạn Jay Grand Đà Nẵng'),
('DN-KS3', 'DN', 'Khách sạn Paracel Đà Nẵng'),
('DN-KS4', 'DN', 'Khách sạn Alisia Beach Đà Nẵng'),
('DN-KS5', 'DN', 'Khách sạn Sam Grand Đà Nẵng'),
('DN-KS6', 'DN', 'Khách sạn Golden Rose 3 Đà Nẵng'),
('DN-KS7', 'DN', 'Khách sạn Senorita Boutique Đà Nẵng'),
('DN-KS8', 'DN', 'Khách sạn Prague Đà Nẵng'),
('DN-KS9', 'DN', 'Pandora Boutique Villa Đà Nẵng'),
('DN-PT0', 'DN', 'PH&Ograve;NG TRỌ MINI'),
('DN-PT1', 'DN', 'Cho thu&ecirc; CCMN tại đầu ng&otilde; 2 Ho&agrave;ng Quốc Việt th&ocirc;ng ng&otilde; 1 V&otilde; Ch&iacute; C&ocirc;ng'),
('DN-PT10', 'DN', 'PH&Ograve;NG TRỌ KINH DƯƠNG VƯƠNG V&Agrave; ĐẶNG MINH KHI&Ecirc;M'),
('DN-PT11', 'DN', 'Cho thu&ecirc; ph&ograve;ng cao cấp số 45 ng&otilde; 165 Dương Quảng H&agrave;m 40m2 gi&aacute; 3.5tr 0813842222'),
('DN-PT12', 'DN', 'CHO THU&Ecirc; PH&Ograve;NG 360 X&Atilde; Đ&Agrave;N '),
('DN-PT13', 'DN', 'Ph&ograve;ng trọ 18m2 khu cầu giấy 1,7tr/th&aacute;ng	'),
('DN-PT14', 'DN', 'Ph&ograve;ng trọ cho thu&ecirc; gi&aacute; rẻ tại Cầu Giấy full đồ'),
('DN-PT15', 'DN', '[Chung cư mini- Cầu Đ&ocirc;ng Tr&ugrave;-Long Bi&ecirc;n]'),
('DN-PT16', 'DN', 'Ph&ograve;ng trọ chỉ từ 1 triệu đồng'),
('DN-PT17', 'DN', 'Ph&ograve;ng trọ cho thu&ecirc; gi&aacute; rẻ tại Ng&atilde; Tư Canh - Xu&acirc;n Phương, Nam Từ Li&ecirc;m full đồ gi&aacute; 2tr5'),
('DN-PT18', 'DN', 'Trệt 1tr9 TĐức, BD, Q12, ở liền. Mới đăng 6/3/2021'),
('DN-PT19', 'DN', 'Căn hộ ri&ecirc;ng biệt c&oacute; s&acirc;n Thủ Đức ở liền được'),
('DN-PT2', 'DN', 'Cho Thu&ecirc; Ph&ograve;ng Trọ Mới Ngay Mặt Tiền Chợ Quận 4'),
('DN-PT3', 'DN', 'Ph&ograve;ng 3.5 triệu, 16m2, ở được 4 - 6 người'),
('DN-PT4', 'DN', 'Ph&ograve;ng trọ gi&aacute; rẻ tại Xu&acirc;n Đỉnh, Xu&acirc;n La'),
('DN-PT5', 'DN', 'CHO THU&Ecirc; PH&Ograve;NG GẦN ĐH KIẾN TR&Uacute;C, Đ&Ocirc;NG &Aacute;, ĐỐI DIỆN BV T&Acirc;M TR&Iacute; Đ&Agrave; NẴNG'),
('DN-PT6', 'DN', 'Ph&ograve;ng Cho Thu&ecirc; Ngay Ng&atilde; Tư Bảy Hiền'),
('DN-PT7', 'DN', 'Cho thu&ecirc; nh&agrave; chung cư 22m2 gi&aacute; rẻ tại số 6 ng&otilde; 942 Nguyễn Kho&aacute;i - H&agrave; Nội'),
('DN-PT8', 'DN', 'Ph&ograve;ng trọ 15m2 1,5tr/th&aacute;ng khu cầu giấy'),
('DN-PT9', 'DN', 'Cần t&igrave;m 1 nữ ở gh&eacute;p đường Phan X&iacute;ch Long, P3, Q. Ph&uacute; Nhuận, HCM'),
('HCM-KS0', 'HCM', 'Khách sạn La Vela Saigon'),
('HCM-KS1', 'HCM', 'Khách sạn A&amp;Em Phan Bội Châu – Sài Gòn'),
('HCM-KS10', 'HCM', 'Khách sạn &amp; Căn hộ Sabina Sài Gòn 3'),
('HCM-KS11', 'HCM', 'Khách sạn Hưng Hương Tân Bình'),
('HCM-KS12', 'HCM', 'Khách sạn A&amp;Em Lê Thánh Tôn – Sài Gòn'),
('HCM-KS13', 'HCM', 'Khách sạn Cititel Parkview Saigon'),
('HCM-KS14', 'HCM', 'Khách sạn Ibis Style Saigon Airport'),
('HCM-KS15', 'HCM', 'Khách sạn Thảo Trang (Laluxe Hotel) – TPHCM'),
('HCM-KS16', 'HCM', 'Khách sạn Shi Việt Nam – Sài Gòn'),
('HCM-KS17', 'HCM', 'Khách sạn Blue Diamond Sài Gòn'),
('HCM-KS18', 'HCM', 'Khách sạn Blue Diamond Signature Sài Gòn'),
('HCM-KS19', 'HCM', 'Khách sạn Grand Silverland Tp Hồ Chí Minh'),
('HCM-KS2', 'HCM', 'Khách sạn A&amp;Em Signature Sài Gòn'),
('HCM-KS20', 'HCM', 'Khách sạn New Milano Chi nhánh 1 TPHCM'),
('HCM-KS21', 'HCM', 'Khách sạn Sài Gòn Hà Nội - Trương Định'),
('HCM-KS22', 'HCM', 'Khách sạn New Milano TPHCM'),
('HCM-KS23', 'HCM', 'Khách sạn IBIS Saigon South'),
('HCM-KS3', 'HCM', 'Khách sạn Sunshine Boutique Phú Mỹ Hưng'),
('HCM-KS4', 'HCM', 'Khách sạn Norfolk Sài Gòn'),
('HCM-KS5', 'HCM', 'Khách sạn Sunshine Luxury – Phú Mỹ Hưng, TPHCM'),
('HCM-KS6', 'HCM', 'Khách sạn Holiday Inn &amp; Suites Saigon Airport'),
('HCM-KS7', 'HCM', 'Khách sạn Sky Gem Central Sài Gòn'),
('HCM-KS8', 'HCM', 'Khách sạn Hương Sen Annex Sài Gòn'),
('HCM-KS9', 'HCM', 'Khách sạn Bát Đạt Sài Gòn'),
('HCM-PT0', 'HCM', 'PH&Ograve;NG TRỌ MINI'),
('HCM-PT1', 'HCM', 'Cho thu&ecirc; CCMN tại đầu ng&otilde; 2 Ho&agrave;ng Quốc Việt th&ocirc;ng ng&otilde; 1 V&otilde; Ch&iacute; C&ocirc;ng'),
('HCM-PT10', 'HCM', 'PH&Ograve;NG TRỌ KINH DƯƠNG VƯƠNG V&Agrave; ĐẶNG MINH KHI&Ecirc;M'),
('HCM-PT11', 'HCM', 'Cho thu&ecirc; ph&ograve;ng cao cấp số 45 ng&otilde; 165 Dương Quảng H&agrave;m 40m2 gi&aacute; 3.5tr 0813842222'),
('HCM-PT12', 'HCM', 'CHO THU&Ecirc; PH&Ograve;NG 360 X&Atilde; Đ&Agrave;N '),
('HCM-PT13', 'HCM', 'Ph&ograve;ng trọ 18m2 khu cầu giấy 1,7tr/th&aacute;ng	'),
('HCM-PT14', 'HCM', 'Ph&ograve;ng trọ cho thu&ecirc; gi&aacute; rẻ tại Cầu Giấy full đồ'),
('HCM-PT15', 'HCM', '[Chung cư mini- Cầu Đ&ocirc;ng Tr&ugrave;-Long Bi&ecirc;n]'),
('HCM-PT16', 'HCM', 'Ph&ograve;ng trọ chỉ từ 1 triệu đồng'),
('HCM-PT17', 'HCM', 'Ph&ograve;ng trọ cho thu&ecirc; gi&aacute; rẻ tại Ng&atilde; Tư Canh - Xu&acirc;n Phương, Nam Từ Li&ecirc;m full đồ gi&aacute; 2tr5'),
('HCM-PT18', 'HCM', 'Trệt 1tr9 TĐức, BD, Q12, ở liền. Mới đăng 6/3/2021'),
('HCM-PT19', 'HCM', 'Căn hộ ri&ecirc;ng biệt c&oacute; s&acirc;n Thủ Đức ở liền được'),
('HCM-PT2', 'HCM', 'Cho Thu&ecirc; Ph&ograve;ng Trọ Mới Ngay Mặt Tiền Chợ Quận 4'),
('HCM-PT3', 'HCM', 'Ph&ograve;ng 3.5 triệu, 16m2, ở được 4 - 6 người'),
('HCM-PT4', 'HCM', 'Ph&ograve;ng trọ gi&aacute; rẻ tại Xu&acirc;n Đỉnh, Xu&acirc;n La'),
('HCM-PT5', 'HCM', 'CHO THU&Ecirc; PH&Ograve;NG GẦN ĐH KIẾN TR&Uacute;C, Đ&Ocirc;NG &Aacute;, ĐỐI DIỆN BV T&Acirc;M TR&Iacute; Đ&Agrave; NẴNG'),
('HCM-PT6', 'HCM', 'Ph&ograve;ng Cho Thu&ecirc; Ngay Ng&atilde; Tư Bảy Hiền'),
('HCM-PT7', 'HCM', 'Cho thu&ecirc; nh&agrave; chung cư 22m2 gi&aacute; rẻ tại số 6 ng&otilde; 942 Nguyễn Kho&aacute;i - H&agrave; Nội'),
('HCM-PT8', 'HCM', 'Ph&ograve;ng trọ 15m2 1,5tr/th&aacute;ng khu cầu giấy'),
('HCM-PT9', 'HCM', 'Cần t&igrave;m 1 nữ ở gh&eacute;p đường Phan X&iacute;ch Long, P3, Q. Ph&uacute; Nhuận, HCM'),
('HN-PT0', 'HN', 'PH&Ograve;NG TRỌ MINI'),
('HN-PT1', 'HN', 'Cho thu&ecirc; CCMN tại đầu ng&otilde; 2 Ho&agrave;ng Quốc Việt th&ocirc;ng ng&otilde; 1 V&otilde; Ch&iacute; C&ocirc;ng'),
('HN-PT10', 'HN', 'PH&Ograve;NG TRỌ KINH DƯƠNG VƯƠNG V&Agrave; ĐẶNG MINH KHI&Ecirc;M'),
('HN-PT11', 'HN', 'Cho thu&ecirc; ph&ograve;ng cao cấp số 45 ng&otilde; 165 Dương Quảng H&agrave;m 40m2 gi&aacute; 3.5tr 0813842222'),
('HN-PT12', 'HN', 'CHO THU&Ecirc; PH&Ograve;NG 360 X&Atilde; Đ&Agrave;N '),
('HN-PT13', 'HN', 'Ph&ograve;ng trọ 18m2 khu cầu giấy 1,7tr/th&aacute;ng	'),
('HN-PT14', 'HN', 'Ph&ograve;ng trọ cho thu&ecirc; gi&aacute; rẻ tại Cầu Giấy full đồ'),
('HN-PT15', 'HN', '[Chung cư mini- Cầu Đ&ocirc;ng Tr&ugrave;-Long Bi&ecirc;n]'),
('HN-PT16', 'HN', 'Ph&ograve;ng trọ chỉ từ 1 triệu đồng'),
('HN-PT17', 'HN', 'Ph&ograve;ng trọ cho thu&ecirc; gi&aacute; rẻ tại Ng&atilde; Tư Canh - Xu&acirc;n Phương, Nam Từ Li&ecirc;m full đồ gi&aacute; 2tr5'),
('HN-PT18', 'HN', 'Trệt 1tr9 TĐức, BD, Q12, ở liền. Mới đăng 6/3/2021'),
('HN-PT19', 'HN', 'Căn hộ ri&ecirc;ng biệt c&oacute; s&acirc;n Thủ Đức ở liền được'),
('HN-PT2', 'HN', 'Cho Thu&ecirc; Ph&ograve;ng Trọ Mới Ngay Mặt Tiền Chợ Quận 4'),
('HN-PT3', 'HN', 'Ph&ograve;ng 3.5 triệu, 16m2, ở được 4 - 6 người'),
('HN-PT4', 'HN', 'Ph&ograve;ng trọ gi&aacute; rẻ tại Xu&acirc;n Đỉnh, Xu&acirc;n La'),
('HN-PT5', 'HN', 'CHO THU&Ecirc; PH&Ograve;NG GẦN ĐH KIẾN TR&Uacute;C, Đ&Ocirc;NG &Aacute;, ĐỐI DIỆN BV T&Acirc;M TR&Iacute; Đ&Agrave; NẴNG'),
('HN-PT6', 'HN', 'Ph&ograve;ng Cho Thu&ecirc; Ngay Ng&atilde; Tư Bảy Hiền'),
('HN-PT7', 'HN', 'Cho thu&ecirc; nh&agrave; chung cư 22m2 gi&aacute; rẻ tại số 6 ng&otilde; 942 Nguyễn Kho&aacute;i - H&agrave; Nội'),
('HN-PT8', 'HN', 'Ph&ograve;ng trọ 15m2 1,5tr/th&aacute;ng khu cầu giấy'),
('HN-PT9', 'HN', 'Cần t&igrave;m 1 nữ ở gh&eacute;p đường Phan X&iacute;ch Long, P3, Q. Ph&uacute; Nhuận, HCM'),
('NT-KS0', 'NT', 'Khách sạn The World Nha Trang'),
('NT-KS1', 'NT', 'Khách sạn Starlet Nha Trang'),
('NT-KS10', 'NT', 'Khách sạn Vinpearl Condotel Empire Nha Trang'),
('NT-KS11', 'NT', 'Evason Ana Mandara Nha Trang Resort'),
('NT-KS12', 'NT', 'Khách sạn Diamond Bay Resort &amp; Spa Nha Trang'),
('NT-KS13', 'NT', 'Khách sạn Horizon Nha Trang'),
('NT-KS14', 'NT', 'Khách sạn Vinpearl Condotel Beachfront Nha Trang'),
('NT-KS15', 'NT', 'Khách sạn Ibis Styles Nha Trang'),
('NT-KS16', 'NT', 'Khách sạn Liberty Central Nha Trang'),
('NT-KS17', 'NT', 'Khách sạn Citadines Bayfront Nha Trang'),
('NT-KS18', 'NT', 'Vinpearl Resort Nha Trang'),
('NT-KS19', 'NT', 'Vinpearl Luxury Nha Trang Resort'),
('NT-KS2', 'NT', 'Khách sạn Rigel Nha Trang'),
('NT-KS20', 'NT', 'Vinpearl Resort &amp; Spa Nha Trang Bay'),
('NT-KS21', 'NT', 'Vinpearl Discovery Rockside Nha Trang (Discovery 1)'),
('NT-KS22', 'NT', 'Khách sạn Mường Thanh Luxury Nha Trang (Khánh Hòa)'),
('NT-KS23', 'NT', 'Khách sạn Mường Thanh Luxury Viễn Triều (Nha Trang)'),
('NT-KS3', 'NT', 'Khách sạn B &amp; N (Greenlighthouse) Nha Trang'),
('NT-KS4', 'NT', 'Khách Sạn Dendro Gold Nha Trang'),
('NT-KS5', 'NT', 'Khách sạn Galina Nha Trang'),
('NT-KS6', 'NT', 'Khách sạn Wonderland Nha Trang'),
('NT-KS7', 'NT', 'Khách sạn Libra Nha Trang'),
('NT-KS8', 'NT', 'Khách sạn B&amp;N Nha Trang'),
('NT-KS9', 'NT', 'Khách sạn TTC Premium – Michelia Nha Trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `TaiKhoan`
--

CREATE TABLE `TaiKhoan` (
  `IDTaiKhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenTaiKhoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaLoaiTaiKhoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OTP` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TrangThai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `TaiKhoan`
--

INSERT INTO `TaiKhoan` (`IDTaiKhoan`, `TenTaiKhoan`, `MatKhau`, `SDT`, `MaLoaiTaiKhoan`, `OTP`, `TrangThai`) VALUES
('01', 'VanToi', '123', '0785462153', 'User', NULL, 'Kich Hoat'),
('2', '1', '1', '0123', 'User', NULL, 'Kich Hoat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ThongTinCaNhan`
--

CREATE TABLE `ThongTinCaNhan` (
  `IDTaiKhoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgaySinh` datetime DEFAULT NULL,
  `Dangphong` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDKhachSan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ThongTinPhong`
--

CREATE TABLE `ThongTinPhong` (
  `IDThongTin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDKhachSan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LinkChiTiet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tranglay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ThongTinPhong`
--

INSERT INTO `ThongTinPhong` (`IDThongTin`, `IDKhachSan`, `DiaChi`, `Gia`, `HinhAnh`, `LinkChiTiet`, `Tranglay`) VALUES
('DL-TTKS0', 'DL-KS0', '42 Phan Bội Châu, Phường 1, Tp. Đà Lạt, Lâm Đồng', 1399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_343306/99922a835c9ee6d8768644e7738b7bde.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-muong-thanh-holiday-da-lat.html', 'VNBooking.com'),
('DL-TTKS1', 'DL-KS1', 'Đường Lê Lai, Phường 5, Thành phố Đà Lạt, Lâm Đồng', 2299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_343826/e9371719eb31f13422f9edce0bca0904.jpg', 'https://www.vietnambooking.com/hotel/vietnam/ana-mandara-villas-da-lat-resort-spa.html', 'VNBooking.com'),
('DL-TTKS10', 'DL-KS10', '8/1 Đào Duy Từ, Phường 4, Đà Lạt, Lâm Đồng, Việt Nam', 750000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345038/c985d53881146bba68324bc9af1a82a7.jpg', 'https://www.vietnambooking.com/hotel/vietnam/da-lat-memory-inn.html', 'VNBooking.com'),
('DL-TTKS11', 'DL-KS11', '171 Hai Bà Trưng, Phường 6, Đà Lạt, Lâm Đồng', 800000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345069/8557683d07cc22d549693dd73c47902f.jpg', 'https://www.vietnambooking.com/hotel/vietnam/le-nguyen-da-lat.html', 'VNBooking.com'),
('DL-TTKS12', 'DL-KS12', '131 Đường Bùi Thị Xuân, Phường 2, Thành phố Đà Lạt, Lâm Đồng', 799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345079/e61749e9919148a32a9c7af2e3c9c058.jpg', 'https://www.vietnambooking.com/hotel/vietnam/mai-vang-2-da-lat.html', 'VNBooking.com'),
('DL-TTKS13', 'DL-KS13', '21B Khe Sanh, Phường 10, Đà Lạt, Lâm Đồng', 870000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345089/20a7e5a484b1f57b271a0e7115ceab36.jpg', 'https://www.vietnambooking.com/hotel/vietnam/da-lat-dong-duong.html', 'VNBooking.com'),
('DL-TTKS14', 'DL-KS14', '72 Bùi Thị Xuân, Phường 2, Tp. Đà Lạt', 801000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345098/e5cfcf20f915587755d516551405b35d.jpg', 'https://www.vietnambooking.com/hotel/vietnam/navy-flowers-da-lat.html', 'VNBooking.com'),
('DL-TTKS15', 'DL-KS15', '83 Phan Đình Phùng, Phường 1, Tp. Đà Lạt, Việt Nam', 819000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345110/a76b2d63b231667e505427112bc4bea2.jpg', 'https://www.vietnambooking.com/hotel/vietnam/cam-do-da-lat.html', 'VNBooking.com'),
('DL-TTKS16', 'DL-KS16', ' 16 Trạng Trình, Phường 9, Đà Lạt', 499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345164/601fb593cc66be38ff54b1e0c72b2215.jpg', 'https://www.vietnambooking.com/hotel/vietnam/saigons-book-da-lat.html', 'VNBooking.com'),
('DL-TTKS17', 'DL-KS17', ' 42A Hà Huy Tập, Phường 3, Thành phố Đà Lạt, Lâm Đồng', 299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345196/f84d641fc04c7761bb32b211a051154c.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-mai-hoang-da-lat.html', 'VNBooking.com'),
('DL-TTKS18', 'DL-KS18', ' 5 Đường Chu Văn An, Phường 10, Thành phố Đà Lạt, Lâm Đồng', 299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345212/b0904a544d30ac5c86b6c5a63d7ece6a.jpg', 'https://www.vietnambooking.com/hotel/vietnam/mine-hotel-da-lat.html', 'VNBooking.com'),
('DL-TTKS19', 'DL-KS19', ' 66 Hà Huy Tập, Phường 03, Đà Lạt, Lâm Đồng ', 299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345287/6092120b799968c1e81a97287ddcd73e.jpg', 'https://www.vietnambooking.com/hotel/vietnam/teppi-hotel-da-lat.html', 'VNBooking.com'),
('DL-TTKS2', 'DL-KS2', '94 Đường Bùi Thị Xuân, Phường 2, Thành phố Đà Lạt, Lâm Đồng', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344202/137269bf5ce4bc4a93c3d757e19b6235.jpg', 'https://www.vietnambooking.com/hotel/vietnam/golf-valley-da-lat.html', 'VNBooking.com'),
('DL-TTKS20', 'DL-KS20', ' B30 KQH Hoàng Văn Thụ, Phường 4, TP. Đà Lạt, Lâm Đồng', 99000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345304/49e5d58b1f1bb98db3a874d5a3a05353.jpg', 'https://www.vietnambooking.com/hotel/vietnam/dalat-legend-homestay.html', 'VNBooking.com'),
('DL-TTKS21', 'DL-KS21', ' 42/11 Hà Huy Tập, Phường 3, thành phố Đà Lạt, Lâm Đồng', 299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345323/a74ce0fbd32e5e4c497e7979ca66581a.jpg', 'https://www.vietnambooking.com/hotel/vietnam/huong-moc-da-lat.html', 'VNBooking.com'),
('DL-TTKS22', 'DL-KS22', ' 3 Nhà Chung, phường 3, thành phố Đà Lạt', 399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345339/2c4756e52796eb70ef348ad29da815ef.jpg', 'https://www.vietnambooking.com/hotel/vietnam/rimi-house-da-lat.html', 'VNBooking.com'),
('DL-TTKS23', 'DL-KS23', '27/6 Hai Bà Trưng, Đà Lạt, Lâm Đồng, Việt Nam', 499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345507/8475e8090f7ae5e2e870eaf0980f0de3.jpg', 'https://www.vietnambooking.com/hotel/vietnam/lan-anh-da-lat.html', 'VNBooking.com'),
('DL-TTKS3', 'DL-KS3', '22-24 Phan Như Thạch, Phường 1, Đà Lạt, Lâm Đồng', 1299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344336/8ec9ee050baadfa2fafc4822cc1fee29.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-saphir-da-lat.html', 'VNBooking.com'),
('DL-TTKS4', 'DL-KS4', '01 Phan Chu Trinh, Phường 9, Thành phố Đà Lạt, Lâm Đồng', 1099000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344363/378de9a8f67ad0af9078f4603db5836f.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-la-sapinette-da-lat.html', 'VNBooking.com'),
('DL-TTKS5', 'DL-KS5', 'Phân Khu Chức Năng số 7 & 8, KDL Hồ Tuyền Lâm, Phường 3, Thành phố Đà Lạt, Lâm Đồng', 1188000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344434/cbce29784f45b31a2bccfac061fc497b.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khu-nghi-duong-sam-tuyen-lam.html', 'VNBooking.com'),
('DL-TTKS6', 'DL-KS6', 'Số 14 Huỳnh Thúc Kháng, Đà Lạt, Lâm Đồng', 499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344985/7154853398323c6811d43a8994e58c67.jpg', 'https://www.vietnambooking.com/hotel/vietnam/dalat-boutique-da-lat.html', 'VNBooking.com'),
('DL-TTKS7', 'DL-KS7', 'E11 An Sơn, Phường 4, Đà Lạt, Tỉnh Lâm Đồng, Việt Nam', 536000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344988/68d396c6a076b89c318d319c61f2e9c6.jpg', 'https://www.vietnambooking.com/hotel/vietnam/pham-hung-house-da-lat.html', 'VNBooking.com'),
('DL-TTKS8', 'DL-KS8', '14 Nam Kỳ Khởi Nghĩa, phường 1, Đà Lạt, Lâm Đồng', 699000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344997/1bd66505b5683aaf094b0b9109418973.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-du-lys-da-lat.html', 'VNBooking.com'),
('DL-TTKS9', 'DL-KS9', '11 Tô Hiệu, Phường 8, Thành phố Đà Lạt, Lâm Đồng', 300000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_345033/711a97e583c54ecd888419bad8edb0e7.jpg', 'https://www.vietnambooking.com/hotel/vietnam/my-khanh-da-lat.html', 'VNBooking.com'),
('DN-TTKS0', 'DN-KS0', 'Số 962 Ngô Quyền, An Hải Tây, Sơn Trà, Đà Nẵng', 999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_302454/d37b22e8358804d60429c911c71680ea.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-muong-thanh-grand-da-nang.html', 'VNBooking.com'),
('DN-TTKS1', 'DN-KS1', '238 Võ Nguyên Giáp, Phước Mỹ, Sơn Trà, Đà Nẵng, Vietnam', 1729000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_327220/02bf1e1f9ddfb231a9634533b027f69a.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-monarque-da-nang.html', 'VNBooking.com'),
('DN-TTKS10', 'DN-KS10', '16 Nguyễn Cao Luyện, An Hải Bắc, Sơn Trà, Đà Nẵng', 1399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334942/eb6a242ed67154998f58f256af827391.jpg', 'https://www.vietnambooking.com/hotel/vietnam/thi-boutique-villa.html', 'VNBooking.com'),
('DN-TTKS11', 'DN-KS11', '69 Đỗ Bí, Mỹ An, Ngũ Hành Sơn, Đà Nẵng', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334953/713b0024ec05ce83f98d7d91b7967f1a.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-ruby-light-da-nang.html', 'VNBooking.com'),
('DN-TTKS12', 'DN-KS12', '76 Hà Bổng, Phước Mỹ, Sơn Trà, Đà Nẵng', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334979/54d517ecab5b352d09f330fdcaeb269f.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-greenery-da-nang.html', 'VNBooking.com'),
('DN-TTKS13', 'DN-KS13', '322- 324 đường Hoàng Diệu, Phường Bình Hiên, Quận Hải Châu, Thành Phố Đà Nẵng', 1599000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334985/4c177851a05683aadfaa84229e38cb1a.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-quoc-cuong-center-da-nang.html', 'VNBooking.com'),
('DN-TTKS14', 'DN-KS14', '91 Hồ Xuân Hương, Mỹ An, Ngũ Hành Sơn, Đà Nẵng', 799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335018/f8c90662033c12a4c465349a8e7f4021.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-hemera-boutique-da-nang.html', 'VNBooking.com'),
('DN-TTKS15', 'DN-KS15', '23 - 25 Lê Quang Đạo, Phường Mỹ An, Quận Ngũ Hành Sơn, TP Đà Nẵng', 1499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335049/d98f83838cbd0e500c3a3b7b660f154d.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-cach-ly-ritzy-boutique-da-nang.html', 'VNBooking.com'),
('DN-TTKS16', 'DN-KS16', '15 - 17 Dương Đình Nghệ, Phước Mỹ, Sơn Trà, Đà Nẵng ', 1599000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335103/a7936cd341beb79e697c2e2706373160.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-parze-ocean-da-nang.html', 'VNBooking.com'),
('DN-TTKS17', 'DN-KS17', 'Lô 61 – 62, Phan Liêm, Mỹ An, Ngũ Hành Sơn, Đà Nẵng', 1499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335142/fee374b9fb9833ee88c17b179f6cd7e6.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-valencia-da-nang.html', 'VNBooking.com'),
('DN-TTKS18', 'DN-KS18', '90 Trần Bạch Đằng, Bắc Mỹ Phú, Ngũ Hành Sơn, Đà Nẵng', 1699000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335411/50582460373b9affa2aee3b5e6a9aa3e.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-sunny-ocean-da-nang.html', 'VNBooking.com'),
('DN-TTKS19', 'DN-KS19', '43 Võ Nghĩa, Phước Mỹ, Sơn Trà, Đà Nẵng', 2199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335560/44dc8e71fa6e92111e28952033369a65.jpg', 'https://www.vietnambooking.com/hotel/vietnam/an-boutique-villa-da-nang.html', 'VNBooking.com'),
('DN-TTKS2', 'DN-KS2', '04 Hà Bổng, quận Sơn Trà, Thành phố Đà Nẵng', 1599000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334814/429bc220e6d9da10be8be611c2d37736.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-tay-bac-da-nang.html', 'VNBooking.com'),
('DN-TTKS20', 'DN-KS20', '80 Đông Kinh Nghĩa Thục, Phước Mỹ, Sơn Trà, Đà Nẵng', 1399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335633/b54d167c0ed8029905cc98f80d58272f.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-danaciti-da-nang.html', 'VNBooking.com'),
('DN-TTKS21', 'DN-KS21', '150 Võ Nguyên Giáp, Phước Mỹ, Sơn Trà, Đà Nẵng', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_339830/78e1d080121fb7cb76b4996913ba788e.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-7seven-sea-da-nang.html', 'VNBooking.com'),
('DN-TTKS22', 'DN-KS22', '44-46-48 Tôn Thất Đạm, Q. Thanh Khê, Tp Đà Nẵng', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_342386/6f5d9c194aed16282721754431654a17.jpg', 'https://www.vietnambooking.com/hotel/vietnam/quoc-thien-da-nang.html', 'VNBooking.com'),
('DN-TTKS23', 'DN-KS23', '81 Hồ Nghinh, Phước Mỹ, Sơn Trà, Đà Nẵng', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_342387/0648105e66e69709df9bfc204f2d233c.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-jay-grand-da-nang.html', 'VNBooking.com'),
('DN-TTKS3', 'DN-KS3', '204 Võ Nguyên Giáp, Quận Sơn Trà, Đà Nẵng, Việt Nam', 699000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/82a84c56c9391fc81736b7c60f4a2d57.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-paracel-da-nang.html', 'VNBooking.com'),
('DN-TTKS4', 'DN-KS4', '19 Hoàng Sa, Thọ Quang, Sơn Trà, Đà Nẵng ', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334834/43ec0094d856a34a7054eca7b7abd9a3.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-cach-ly-alisia-beach-da-nang.html', 'VNBooking.com'),
('DN-TTKS5', 'DN-KS5', '07 Phạm Văn Đồng, An Hải Bắc, Sơn Trà, Đà Nẵng', 1599000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334835/060fbb5af41d08617753cb1a2e57f11c.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-sam-grand-da-nang.html', 'VNBooking.com'),
('DN-TTKS6', 'DN-KS6', '70-72 Loseby, An Hải Bắc, Sơn Trà, Đà Nẵng', 1599000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334839/b2c043721dbb7c116eb5d993baee0374.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-golden-rose-3-da-nang.html', 'VNBooking.com'),
('DN-TTKS7', 'DN-KS7', ' 89 Trần Bạch Đằng, Mỹ An, Ngũ Hành Sơn, Đà Nẵng ', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334867/bdecf744288ae39841dd189d68b15fec.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-senorita-boutique-da-nang.html', 'VNBooking.com'),
('DN-TTKS8', 'DN-KS8', '75 Dương Đình Nghệ, Đà Nẵng, Việt Nam', 1399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334908/01a39fd0e0b4e7940107fe12eaf0b15e.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-prague-da-nang.html', 'VNBooking.com'),
('DN-TTKS9', 'DN-KS9', '21-22 Khuê Mỹ Đông 14, Khuê Mỹ, Ngũ Hành Sơn, Đà Nẵng', 1699000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334910/214ace34c7a2dd00f4d11fc7bcdba2cd.jpg', 'https://www.vietnambooking.com/hotel/vietnam/pandora-boutique-villa-da-nang.html', 'VNBooking.com'),
('DN-TTPT0', 'DN-PT0', '33D                          Hà Bá Tường - 12 - Tân Bình - Hồ Chí Minh                    ', 1000000, '../Image/Anh-DN-PT0.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-mini', 'phongtot.vn'),
('DN-TTPT1', 'DN-PT1', 'ng&otilde; 2 Ho&agrave;ng Quốc Việt                          Hoàng Quốc Việt - Nghĩa Đô - Cầu Giấy - Hà Nội                    ', 3500000, '../Image/Anh-DN-PT1.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-ccmn-tai-dau-ngo-2-hoang-quoc-viet-thong-ngo-1-vo-chi-cong', 'phongtot.vn'),
('DN-TTPT10', 'DN-PT10', 'Đặng Minh Khi&ecirc;m - Kinh Dương Vương                          Đặng Minh Khiêm - Hoà Minh - Liên Chiểu - Đà Nẵng                    ', 1500000, '../Image/Anh-DN-PT10.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-kinh-duong-vuong-va-dang-minh-khiem', 'phongtot.vn'),
('DN-TTPT11', 'DN-PT11', '45 ng&otilde; 165 Dương Quảng h&agrave;m                          Dương Quảng Hàm - Quan Hoa - Cầu Giấy - Hà Nội                    ', 3500000, '../Image/Anh-DN-PT11.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-cao-cap-so-45-ngo-165-duong-quang-ham-40m2-gia-35tr-0813842222', 'phongtot.vn'),
('DN-TTPT12', 'DN-PT12', '360 X&Atilde; Đ&Agrave;N                          Xã Đàn - Trung Phụng - Đống Đa - Hà Nội                    ', 3700000, '../Image/Anh-DN-PT12.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-360-xa-dan', 'phongtot.vn'),
('DN-TTPT13', 'DN-PT13', 'số 6 ng&otilde; 163 nguyễn khang cầu giấy h&agrave; nội                          Nguyễn Khang - Yên Hoà - Cầu Giấy - Hà Nội                    ', 1700000, '../Image/Anh-DN-PT13.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-18m2-khu-cau-giay-17trthang', 'phongtot.vn'),
('DN-TTPT14', 'DN-PT14', 's&ocirc; 56 Dịch Vọng, Cầu Giấy                          Dịch Vọng - Dịch Vọng - Cầu Giấy - Hà Nội                    ', 3600000, '../Image/Anh-DN-PT14.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-cho-thue-gia-re-tai-cau-giay-full-do', 'phongtot.vn'),
('DN-TTPT15', 'DN-PT15', 'Ch&acirc;n Cầu Đ&ocirc;ng Tr&ugrave;                          Long Biên - Hà Nội                    ', 2000000, '../Image/Anh-DN-PT15.png', 'http://phongtot.vn/phong-tro-nha-tro/chung-cu-mini-cau-dong-tru-long-bien', 'phongtot.vn'),
('DN-TTPT16', 'DN-PT16', '33D                          Hà Bá Tường - 12 - Tân Bình - Hồ Chí Minh                    ', 1000000, '../Image/Anh-DN-PT16.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-chi-tu-1-trieu-dong', 'phongtot.vn'),
('DN-TTPT17', 'DN-PT17', 'số 31 V&acirc;n Canh, Phương Canh, Nam từ Li&ecirc;m, H&agrave; Nội                          Quốc lộ 32 - Xuân Phương - Từ Liêm - Hà Nội                    ', 2500000, '../Image/Anh-DN-PT17.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-cho-thue-gia-re-tai-nga-tu-canh-xuan-phuong-nam-tu-liem-full-do-gia-2tr5', 'phongtot.vn'),
('DN-TTPT18', 'DN-PT18', 'Gọi 0775041548 để biết địa chỉ ch&iacute;nh x&aacute;c                          Tỉnh lộ 43 - Bình Chiểu - Thủ Đức - Hồ Chí Minh                    ', 1900000, '../Image/Anh-DN-PT18.png', 'http://phongtot.vn/phong-tro-nha-tro/tret-1tr9-tduc-bd-q12-o-lien-moi-dang-632021', 'phongtot.vn'),
('DN-TTPT19', 'DN-PT19', 'Li&ecirc;n hệ 0783586078, 0775041548 để biết địa chỉ ch&iacute;nh x&aacute;c                          Tỉnh lộ 43 - Bình Chiểu - Thủ Đức - Hồ Chí Minh                    ', 3000000, '../Image/Anh-DN-PT19.png', 'http://phongtot.vn/phong-tro-nha-tro/can-ho-rieng-biet-co-san-thu-duc-o-lien-duoc', 'phongtot.vn'),
('DN-TTPT2', 'DN-PT2', '70 T&ocirc;n Thất Thuyết                          Tôn Thất Thuyết - 03 - 4 - Hồ Chí Minh                    ', 2400000, '../Image/Anh-DN-PT2.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-tro-moi-ngay-mat-tien-cho-quan-4', 'phongtot.vn'),
('DN-TTPT3', 'DN-PT3', '1/37                          Huỳnh Lan Khanh - 02 - Tân Bình - Hồ Chí Minh                    ', 3500000, '../Image/Anh-DN-PT3.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-35-trieu-16m2-o-duoc-4-6-nguoi', 'phongtot.vn'),
('DN-TTPT4', 'DN-PT4', 'Xu&acirc;n Đỉnh, Bắc Từ Li&ecirc;m, H&agrave; Nội                          Xuân Đỉnh - Xuân Đỉnh - Từ Liêm - Hà Nội                    ', 1500000, '../Image/Anh-DN-PT4.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-gia-re-tai-xuan-dinh-xuan-la', 'phongtot.vn'),
('DN-TTPT5', 'DN-PT5', '18                          Bình Hòa 10 - Khuê Trung - Cẩm Lệ - Đà Nẵng                    ', 2000000, '../Image/Anh-DN-PT5.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-gan-dh-kien-truc-dong-a-doi-dien-bv-tam-tri-da-nang', 'phongtot.vn'),
('DN-TTPT6', 'DN-PT6', '181 V&otilde; Th&agrave;nh Trang                          Võ Thành Trang - 11 - Tân Bình - Hồ Chí Minh                    ', 4000000, '../Image/Anh-DN-PT6.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-cho-thue-ngay-nga-tu-bay-hien', 'phongtot.vn'),
('DN-TTPT7', 'DN-PT7', 'số 6 ng&otilde; 942 Nguyễn Kho&aacute;i &ndash; H&agrave; Nội                          Nguyễn Khoái - Thanh Trì - Hoàng Mai - Hà Nội                    ', 2200000, '../Image/Anh-DN-PT7.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-nha-chung-cu-22m2-gia-re-tai-so-6-ngo-942-nguyen-khoai-ha-noi', 'phongtot.vn'),
('DN-TTPT8', 'DN-PT8', 'số 6 ng&otilde; 163 nguyễn khang cầu giấy h&agrave; nội                          Nguyễn Khang - Yên Hoà - Cầu Giấy - Hà Nội                    ', 1500000, '../Image/Anh-DN-PT8.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-15m2-15trthang-khu-cau-giay-1632889229zicll', 'phongtot.vn'),
('DN-TTPT9', 'DN-PT9', 'Phan X&iacute;ch Long, P3, Quận Ph&uacute; Nhuận, HCM                          Phan Xích Long - 03 - Phú Nhuận - Hồ Chí Minh                    ', 2500000, '../Image/Anh-DN-PT9.png', 'http://phongtot.vn/phong-tro-nha-tro/can-tim-1-nu-o-ghep-duong-phan-xich-long-p3-q-phu-nhuan-hcm', 'phongtot.vn'),
('HCM-TTKS0', 'HCM-KS0', '280 Nam Kỳ Khởi Nghĩa, phường 8, Quận 3, TP. Hồ Chí Minh', 1799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_302027/51f4d75de044bb0b9ff96b0355554ddf.jpg', 'https://www.vietnambooking.com/hotel/vietnam/la-vela-saigon-hotel.html', 'VNBooking.com'),
('HCM-TTKS1', 'HCM-KS1', '44 Đường Phan Bội Châu, Phường Bến Thành, Quận 1', 1499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_333990/5837641816ed391897b32c4086e614af.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-aem-phan-boi-chau-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS10', 'HCM-KS10', '36-38 Cao Triều Phát, Phường Tân Phong, Quận 7, TPHCM', 2299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334541/792000cd80bbbe6e20ed7d02fb0a00db.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-can-ho-sabina-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS11', 'HCM-KS11', '321 Nguyễn Thái Bình, quận Tân Bình, Thành phố Hồ Chí Minh', 1099000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334611/df730ab0c6c8c5da55957f76e670cc24.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-hung-huong-tan-binh.html', 'VNBooking.com'),
('HCM-TTKS12', 'HCM-KS12', '280 Lê Thánh Tôn, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh', 2399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334724/c2511d1271e2e6312c427c538d9b717a.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-aem-le-thanh-ton-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS13', 'HCM-KS13', '51-55 Cách Mạng Tháng 8, quận 1, TP Hồ Chí Minh', 1799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334743/4a59eb5ef109af7e31168d34516f8ad7.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-cititel-parkview-saigon.html', 'VNBooking.com'),
('HCM-TTKS14', 'HCM-KS14', '2 Hồng Hà, Phường 2, Tân Bình, Thành phố Hồ Chí Minh', 2099000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334746/032bd462785525f2bb6ed5a707b58d43.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-ibis-style-saigon-airport.html', 'VNBooking.com'),
('HCM-TTKS15', 'HCM-KS15', '60-62 Cao Triều Phát , Tân Phong, Phú Mỹ Hưng, TPHCM', 2099000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334759/97479e0d740902d2f2b05fa7dd9d5bdf.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-thao-trang-laluxe-hotel-tphcm.html', 'VNBooking.com'),
('HCM-TTKS16', 'HCM-KS16', '101 - 103 đường Phạm Thái Bường, phường Tân Phong, Quận 7, Thành phố Hồ Chí Minh', 1699000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334786/9842b56dfc4f071c1454b6bd089de30b.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-shi-viet-nam-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS17', 'HCM-KS17', '48-50 Thủ Khoa Huân, Quận 1, TP Hồ Chí Minh', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334791/0e501793b4601e95074bcfe5d82cffdb.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-blue-diamond-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS18', 'HCM-KS18', '11 Thái Văn Lung, phường Bến Nghé, quận 1, TP Hồ Chí Minh', 1899000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334826/df356eb0c704b555fb4830619aa33137.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-blue-diamond-signature-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS19', 'HCM-KS19', '125 Lý Tự Trọng, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh', 2299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334851/043979f5927a8ed7d92117b951f0736d.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-grand-silverland-tp-ho-chi-minh.html', 'VNBooking.com'),
('HCM-TTKS2', 'HCM-KS2', '52-54 Thủ Khoa Huân, Phường Bến Thành, Quận 1, Tp. Hồ Chí Minh', 1999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_333991/e8436ed9aabda1281718581405521ce5.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-aem-signature-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS20', 'HCM-KS20', 'Số 38, 40, 42 đường Nội Khu Hưng Phước 4 Phường Tân Phong Quận 7, HCMC', 2399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334857/fad26303dd0dee110e39f6ee75551572.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-new-milano-chi-nhanh-1-tphcm.html', 'VNBooking.com'),
('HCM-TTKS21', 'HCM-KS21', ' 19 Trương Định, Bến Thành , Quận 1, Hồ Chí Minh', 2099000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334878/57601bb3d78ff3217b64b70fcd1c728e.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-sai-gon-ha-noi-truong-dinh.html', 'VNBooking.com'),
('HCM-TTKS22', 'HCM-KS22', ' 96-98 Cao Triều Phát, Hưng Gia 4, P. Tân Phong, Quận 7, HCMC', 2399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334903/91f5731d4dadf6801dda3f457d498e30.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-new-milano-tphcm.html', 'VNBooking.com'),
('HCM-TTKS23', 'HCM-KS23', '73 Hoàng Văn Thái, Phường Tân Phú, Quận 7, Hồ Chí Minh', 2099000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334905/8949283c8da5b156635af0d0212fc645.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-ibis-saigon-south.html', 'VNBooking.com'),
('HCM-TTKS3', 'HCM-KS3', '16-18-20 Cao Triều Phát, Tân Phong, Quận 7, TP Hồ Chí Minh', 1799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334106/b8a305d8c10f7effd44eaeee19440d46.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-sunshine-boutique-phu-my-hung.html', 'VNBooking.com'),
('HCM-TTKS4', 'HCM-KS4', '117 Lê Thánh Tôn, Bến Nghé, Quận 1, Hồ Chí Minh, Việt Nam', 2199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334180/8c4a8ce4d3545d93e58da33a02ef8dc0.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-norfolk-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS5', 'HCM-KS5', '75 - 77 Phan Khiêm Ích, Phường Tân Phong, Quận 7', 1799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334244/0a3182374284dcb0e111445e81e78b6b.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-sunshine-luxury-phu-my-hung.html', 'VNBooking.com'),
('HCM-TTKS6', 'HCM-KS6', '18E Cộng Hòa, Phường 4, Quận Tân Bình, TP. Hồ Chí Minh, Việt Nam', 2299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334412/205bd3764f14e08b7eadfa27cdf58ada.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-holiday-inn-suites-saigon-airport.html', 'VNBooking.com'),
('HCM-TTKS7', 'HCM-KS7', '26 - 28 Đông Du, phường Bến Nghé, Quận 1, TP Hồ Chí Minh', 1499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334452/4fdb5ea0bf5b5d1160700dab61685063.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-sky-gem-central-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS8', 'HCM-KS8', '4-6-8 Mạc Thị Bưởi, Bến Nghé, Quận 1, Hồ Chí Minh', 1799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334513/c187d2e33475da72ea21eb54140dfcb1.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-huong-sen-annex-sai-gon.html', 'VNBooking.com'),
('HCM-TTKS9', 'HCM-KS9', '238 - 244 Trần Hưng Đạo, Phường 11, Quận 5, TP Hồ Chí Minh', 1799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334521/1b147ba55f5b2ec1b3492795db493517.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-bat-dat-sai-gon.html', 'VNBooking.com'),
('HCM-TTPT0', 'HCM-PT0', '33D                          Hà Bá Tường - 12 - Tân Bình - Hồ Chí Minh                    ', 1000000, '../Image/Anh-HCM-PT0.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-mini', 'phongtot.vn'),
('HCM-TTPT1', 'HCM-PT1', 'ng&otilde; 2 Ho&agrave;ng Quốc Việt                          Hoàng Quốc Việt - Nghĩa Đô - Cầu Giấy - Hà Nội                    ', 3500000, '../Image/Anh-HCM-PT1.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-ccmn-tai-dau-ngo-2-hoang-quoc-viet-thong-ngo-1-vo-chi-cong', 'phongtot.vn'),
('HCM-TTPT10', 'HCM-PT10', 'Đặng Minh Khi&ecirc;m - Kinh Dương Vương                          Đặng Minh Khiêm - Hoà Minh - Liên Chiểu - Đà Nẵng                    ', 1500000, '../Image/Anh-HCM-PT10.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-kinh-duong-vuong-va-dang-minh-khiem', 'phongtot.vn'),
('HCM-TTPT11', 'HCM-PT11', '45 ng&otilde; 165 Dương Quảng h&agrave;m                          Dương Quảng Hàm - Quan Hoa - Cầu Giấy - Hà Nội                    ', 3500000, '../Image/Anh-HCM-PT11.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-cao-cap-so-45-ngo-165-duong-quang-ham-40m2-gia-35tr-0813842222', 'phongtot.vn'),
('HCM-TTPT12', 'HCM-PT12', '360 X&Atilde; Đ&Agrave;N                          Xã Đàn - Trung Phụng - Đống Đa - Hà Nội                    ', 3700000, '../Image/Anh-HCM-PT12.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-360-xa-dan', 'phongtot.vn'),
('HCM-TTPT13', 'HCM-PT13', 'số 6 ng&otilde; 163 nguyễn khang cầu giấy h&agrave; nội                          Nguyễn Khang - Yên Hoà - Cầu Giấy - Hà Nội                    ', 1700000, '../Image/Anh-HCM-PT13.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-18m2-khu-cau-giay-17trthang', 'phongtot.vn'),
('HCM-TTPT14', 'HCM-PT14', 's&ocirc; 56 Dịch Vọng, Cầu Giấy                          Dịch Vọng - Dịch Vọng - Cầu Giấy - Hà Nội                    ', 3600000, '../Image/Anh-HCM-PT14.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-cho-thue-gia-re-tai-cau-giay-full-do', 'phongtot.vn'),
('HCM-TTPT15', 'HCM-PT15', 'Ch&acirc;n Cầu Đ&ocirc;ng Tr&ugrave;                          Long Biên - Hà Nội                    ', 2000000, '../Image/Anh-HCM-PT15.png', 'http://phongtot.vn/phong-tro-nha-tro/chung-cu-mini-cau-dong-tru-long-bien', 'phongtot.vn'),
('HCM-TTPT16', 'HCM-PT16', '33D                          Hà Bá Tường - 12 - Tân Bình - Hồ Chí Minh                    ', 1000000, '../Image/Anh-HCM-PT16.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-chi-tu-1-trieu-dong', 'phongtot.vn'),
('HCM-TTPT17', 'HCM-PT17', 'số 31 V&acirc;n Canh, Phương Canh, Nam từ Li&ecirc;m, H&agrave; Nội                          Quốc lộ 32 - Xuân Phương - Từ Liêm - Hà Nội                    ', 2500000, '../Image/Anh-HCM-PT17.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-cho-thue-gia-re-tai-nga-tu-canh-xuan-phuong-nam-tu-liem-full-do-gia-2tr5', 'phongtot.vn'),
('HCM-TTPT18', 'HCM-PT18', 'Gọi 0775041548 để biết địa chỉ ch&iacute;nh x&aacute;c                          Tỉnh lộ 43 - Bình Chiểu - Thủ Đức - Hồ Chí Minh                    ', 1900000, '../Image/Anh-HCM-PT18.png', 'http://phongtot.vn/phong-tro-nha-tro/tret-1tr9-tduc-bd-q12-o-lien-moi-dang-632021', 'phongtot.vn'),
('HCM-TTPT19', 'HCM-PT19', 'Li&ecirc;n hệ 0783586078, 0775041548 để biết địa chỉ ch&iacute;nh x&aacute;c                          Tỉnh lộ 43 - Bình Chiểu - Thủ Đức - Hồ Chí Minh                    ', 3000000, '../Image/Anh-HCM-PT19.png', 'http://phongtot.vn/phong-tro-nha-tro/can-ho-rieng-biet-co-san-thu-duc-o-lien-duoc', 'phongtot.vn'),
('HCM-TTPT2', 'HCM-PT2', '70 T&ocirc;n Thất Thuyết                          Tôn Thất Thuyết - 03 - 4 - Hồ Chí Minh                    ', 2400000, '../Image/Anh-HCM-PT2.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-tro-moi-ngay-mat-tien-cho-quan-4', 'phongtot.vn'),
('HCM-TTPT3', 'HCM-PT3', '1/37                          Huỳnh Lan Khanh - 02 - Tân Bình - Hồ Chí Minh                    ', 3500000, '../Image/Anh-HCM-PT3.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-35-trieu-16m2-o-duoc-4-6-nguoi', 'phongtot.vn'),
('HCM-TTPT4', 'HCM-PT4', 'Xu&acirc;n Đỉnh, Bắc Từ Li&ecirc;m, H&agrave; Nội                          Xuân Đỉnh - Xuân Đỉnh - Từ Liêm - Hà Nội                    ', 1500000, '../Image/Anh-HCM-PT4.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-gia-re-tai-xuan-dinh-xuan-la', 'phongtot.vn'),
('HCM-TTPT5', 'HCM-PT5', '18                          Bình Hòa 10 - Khuê Trung - Cẩm Lệ - Đà Nẵng                    ', 2000000, '../Image/Anh-HCM-PT5.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-gan-dh-kien-truc-dong-a-doi-dien-bv-tam-tri-da-nang', 'phongtot.vn'),
('HCM-TTPT6', 'HCM-PT6', '181 V&otilde; Th&agrave;nh Trang                          Võ Thành Trang - 11 - Tân Bình - Hồ Chí Minh                    ', 4000000, '../Image/Anh-HCM-PT6.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-cho-thue-ngay-nga-tu-bay-hien', 'phongtot.vn'),
('HCM-TTPT7', 'HCM-PT7', 'số 6 ng&otilde; 942 Nguyễn Kho&aacute;i &ndash; H&agrave; Nội                          Nguyễn Khoái - Thanh Trì - Hoàng Mai - Hà Nội                    ', 2200000, '../Image/Anh-HCM-PT7.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-nha-chung-cu-22m2-gia-re-tai-so-6-ngo-942-nguyen-khoai-ha-noi', 'phongtot.vn'),
('HCM-TTPT8', 'HCM-PT8', 'số 6 ng&otilde; 163 nguyễn khang cầu giấy h&agrave; nội                          Nguyễn Khang - Yên Hoà - Cầu Giấy - Hà Nội                    ', 1500000, '../Image/Anh-HCM-PT8.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-15m2-15trthang-khu-cau-giay-1632889229zicll', 'phongtot.vn'),
('HCM-TTPT9', 'HCM-PT9', 'Phan X&iacute;ch Long, P3, Quận Ph&uacute; Nhuận, HCM                          Phan Xích Long - 03 - Phú Nhuận - Hồ Chí Minh                    ', 2500000, '../Image/Anh-HCM-PT9.png', 'http://phongtot.vn/phong-tro-nha-tro/can-tim-1-nu-o-ghep-duong-phan-xich-long-p3-q-phu-nhuan-hcm', 'phongtot.vn'),
('HN-TTPT0', 'HN-PT0', '33D                          Hà Bá Tường - 12 - Tân Bình - Hồ Chí Minh                    ', 1000000, '../Image/Anh-HN-PT0.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-mini', 'phongtot.vn'),
('HN-TTPT1', 'HN-PT1', 'ng&otilde; 2 Ho&agrave;ng Quốc Việt                          Hoàng Quốc Việt - Nghĩa Đô - Cầu Giấy - Hà Nội                    ', 3500000, '../Image/Anh-HN-PT1.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-ccmn-tai-dau-ngo-2-hoang-quoc-viet-thong-ngo-1-vo-chi-cong', 'phongtot.vn'),
('HN-TTPT10', 'HN-PT10', 'Đặng Minh Khi&ecirc;m - Kinh Dương Vương                          Đặng Minh Khiêm - Hoà Minh - Liên Chiểu - Đà Nẵng                    ', 1500000, '../Image/Anh-HN-PT10.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-kinh-duong-vuong-va-dang-minh-khiem', 'phongtot.vn'),
('HN-TTPT11', 'HN-PT11', '45 ng&otilde; 165 Dương Quảng h&agrave;m                          Dương Quảng Hàm - Quan Hoa - Cầu Giấy - Hà Nội                    ', 3500000, '../Image/Anh-HN-PT11.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-cao-cap-so-45-ngo-165-duong-quang-ham-40m2-gia-35tr-0813842222', 'phongtot.vn'),
('HN-TTPT12', 'HN-PT12', '360 X&Atilde; Đ&Agrave;N                          Xã Đàn - Trung Phụng - Đống Đa - Hà Nội                    ', 3700000, '../Image/Anh-HN-PT12.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-360-xa-dan', 'phongtot.vn'),
('HN-TTPT13', 'HN-PT13', 'số 6 ng&otilde; 163 nguyễn khang cầu giấy h&agrave; nội                          Nguyễn Khang - Yên Hoà - Cầu Giấy - Hà Nội                    ', 1700000, '../Image/Anh-HN-PT13.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-18m2-khu-cau-giay-17trthang', 'phongtot.vn'),
('HN-TTPT14', 'HN-PT14', 's&ocirc; 56 Dịch Vọng, Cầu Giấy                          Dịch Vọng - Dịch Vọng - Cầu Giấy - Hà Nội                    ', 3600000, '../Image/Anh-HN-PT14.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-cho-thue-gia-re-tai-cau-giay-full-do', 'phongtot.vn'),
('HN-TTPT15', 'HN-PT15', 'Ch&acirc;n Cầu Đ&ocirc;ng Tr&ugrave;                          Long Biên - Hà Nội                    ', 2000000, '../Image/Anh-HN-PT15.png', 'http://phongtot.vn/phong-tro-nha-tro/chung-cu-mini-cau-dong-tru-long-bien', 'phongtot.vn'),
('HN-TTPT16', 'HN-PT16', '33D                          Hà Bá Tường - 12 - Tân Bình - Hồ Chí Minh                    ', 1000000, '../Image/Anh-HN-PT16.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-chi-tu-1-trieu-dong', 'phongtot.vn'),
('HN-TTPT17', 'HN-PT17', 'số 31 V&acirc;n Canh, Phương Canh, Nam từ Li&ecirc;m, H&agrave; Nội                          Quốc lộ 32 - Xuân Phương - Từ Liêm - Hà Nội                    ', 2500000, '../Image/Anh-HN-PT17.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-cho-thue-gia-re-tai-nga-tu-canh-xuan-phuong-nam-tu-liem-full-do-gia-2tr5', 'phongtot.vn'),
('HN-TTPT18', 'HN-PT18', 'Gọi 0775041548 để biết địa chỉ ch&iacute;nh x&aacute;c                          Tỉnh lộ 43 - Bình Chiểu - Thủ Đức - Hồ Chí Minh                    ', 1900000, '../Image/Anh-HN-PT18.png', 'http://phongtot.vn/phong-tro-nha-tro/tret-1tr9-tduc-bd-q12-o-lien-moi-dang-632021', 'phongtot.vn'),
('HN-TTPT19', 'HN-PT19', 'Li&ecirc;n hệ 0783586078, 0775041548 để biết địa chỉ ch&iacute;nh x&aacute;c                          Tỉnh lộ 43 - Bình Chiểu - Thủ Đức - Hồ Chí Minh                    ', 3000000, '../Image/Anh-HN-PT19.png', 'http://phongtot.vn/phong-tro-nha-tro/can-ho-rieng-biet-co-san-thu-duc-o-lien-duoc', 'phongtot.vn'),
('HN-TTPT2', 'HN-PT2', '70 T&ocirc;n Thất Thuyết                          Tôn Thất Thuyết - 03 - 4 - Hồ Chí Minh                    ', 2400000, '../Image/Anh-HN-PT2.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-tro-moi-ngay-mat-tien-cho-quan-4', 'phongtot.vn'),
('HN-TTPT3', 'HN-PT3', '1/37                          Huỳnh Lan Khanh - 02 - Tân Bình - Hồ Chí Minh                    ', 3500000, '../Image/Anh-HN-PT3.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-35-trieu-16m2-o-duoc-4-6-nguoi', 'phongtot.vn'),
('HN-TTPT4', 'HN-PT4', 'Xu&acirc;n Đỉnh, Bắc Từ Li&ecirc;m, H&agrave; Nội                          Xuân Đỉnh - Xuân Đỉnh - Từ Liêm - Hà Nội                    ', 1500000, '../Image/Anh-HN-PT4.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-gia-re-tai-xuan-dinh-xuan-la', 'phongtot.vn'),
('HN-TTPT5', 'HN-PT5', '18                          Bình Hòa 10 - Khuê Trung - Cẩm Lệ - Đà Nẵng                    ', 2000000, '../Image/Anh-HN-PT5.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-phong-gan-dh-kien-truc-dong-a-doi-dien-bv-tam-tri-da-nang', 'phongtot.vn'),
('HN-TTPT6', 'HN-PT6', '181 V&otilde; Th&agrave;nh Trang                          Võ Thành Trang - 11 - Tân Bình - Hồ Chí Minh                    ', 4000000, '../Image/Anh-HN-PT6.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-cho-thue-ngay-nga-tu-bay-hien', 'phongtot.vn'),
('HN-TTPT7', 'HN-PT7', 'số 6 ng&otilde; 942 Nguyễn Kho&aacute;i &ndash; H&agrave; Nội                          Nguyễn Khoái - Thanh Trì - Hoàng Mai - Hà Nội                    ', 2200000, '../Image/Anh-HN-PT7.png', 'http://phongtot.vn/phong-tro-nha-tro/cho-thue-nha-chung-cu-22m2-gia-re-tai-so-6-ngo-942-nguyen-khoai-ha-noi', 'phongtot.vn'),
('HN-TTPT8', 'HN-PT8', 'số 6 ng&otilde; 163 nguyễn khang cầu giấy h&agrave; nội                          Nguyễn Khang - Yên Hoà - Cầu Giấy - Hà Nội                    ', 1500000, '../Image/Anh-HN-PT8.png', 'http://phongtot.vn/phong-tro-nha-tro/phong-tro-15m2-15trthang-khu-cau-giay-1632889229zicll', 'phongtot.vn'),
('HN-TTPT9', 'HN-PT9', 'Phan X&iacute;ch Long, P3, Quận Ph&uacute; Nhuận, HCM                          Phan Xích Long - 03 - Phú Nhuận - Hồ Chí Minh                    ', 2500000, '../Image/Anh-HN-PT9.png', 'http://phongtot.vn/phong-tro-nha-tro/can-tim-1-nu-o-ghep-duong-phan-xich-long-p3-q-phu-nhuan-hcm', 'phongtot.vn'),
('NT-TTKS0', 'NT-KS0', '11 Lê Lợi, Nha Trang, Khánh Hòa', 1499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334751/1b545adbddec681a5f90b6a0a2e74248.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-the-world-nha-trang.html', 'VNBooking.com'),
('NT-TTKS1', 'NT-KS1', '51 Tuệ Tĩnh, Lộc Thọ, Thành phố Nha Trang, Khánh Hòa', 1599000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334763/078b358d66b1e3364fe9b3841d1fd327.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-starlet-nha-trang.html', 'VNBooking.com'),
('NT-TTKS10', 'NT-KS10', '44-46 Lê Thánh Tôn, Lộc Thọ, Thành phố Nha Trang, Khánh Hòa', 1999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_339847/c5737edf92308a7e47318bc039516055.jpg', 'https://www.vietnambooking.com/hotel/vietnam/vinpearl-condotel-empire-nha-trang.html', 'VNBooking.com'),
('NT-TTKS11', 'NT-KS11', ' Bờ biển đường Trần Phú, Lộc Thọ, Nha Trang, Khánh Hòa', 2299000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_339973/163efff7618ecc80d246c3f6fe8af2cd.jpg', 'https://www.vietnambooking.com/hotel/vietnam/evason-ana-mandara-nha-trang-resort.html', 'VNBooking.com'),
('NT-TTKS12', 'NT-KS12', 'Nguyễn Tất Thành, Thành phố Nha Trang, Khánh Hòa, Việt Nam', 1699000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_342642/6cfa9aff9918041f8ab83b5b8251abb5.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-diamond-bay-resort-spa-nha-trang.html', 'VNBooking.com'),
('NT-TTKS13', 'NT-KS13', '102 Dương Hiến Quyền, Vĩnh Hải, Nha Trang, Khánh Hòa', 1199000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_343226/ea14a7bfddfaa5c9bd0d25852ae78c2d.jpg', 'https://www.vietnambooking.com/hotel/vietnam/horizon-nha-trang.html', 'VNBooking.com'),
('NT-TTKS14', 'NT-KS14', '78 – 80 đường Trần Phú, phường Lộc Thọ, thành phố Nha Trang, tỉnh Khánh Hoà, Việt Nam', 2799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_343266/b32d6486a828012b033985e035f91761.jpg', 'https://www.vietnambooking.com/hotel/vietnam/vinpearl-condotel-beachfront-nha-trang.html', 'VNBooking.com'),
('NT-TTKS15', 'NT-KS15', 'Số 86 Hùng Vương, phường Lộc Thọ, TP Nha Trang', 799000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_343424/b4d500d1d65f7ca6d8e9a56a2af618ee.jpg', 'https://www.vietnambooking.com/hotel/vietnam/ibis-styles-nha-trang.html', 'VNBooking.com'),
('NT-TTKS16', 'NT-KS16', '9 Biệt Thự, Lộc Thọ, Tp Nha Trang, Khánh Hòa, Việt Nam', 999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_343592/b6db8780cda0c2671b28be9494d4c19a.jpg', 'https://www.vietnambooking.com/hotel/vietnam/liberty-central-nha-trang.html', 'VNBooking.com'),
('NT-TTKS17', 'NT-KS17', '62 Trần Phú, Lộc Thọ, Thành phố Nha Trang, Khánh Hòa', 920000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_343993/820ecad8de54560df41df84d79aafe14.jpg', 'https://www.vietnambooking.com/hotel/vietnam/citadines-bayfront-nha-trang.html', 'VNBooking.com'),
('NT-TTKS18', 'NT-KS18', 'Đảo Hòn Tre, Tp. Nha Trang, Tỉnh Khánh Hòa', 2599000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344263/3ef19f5c3633049b457af68fd15e7af4.jpg', 'https://www.vietnambooking.com/hotel/vietnam/vinpearl-resort-nha-trang.html', 'VNBooking.com'),
('NT-TTKS19', 'NT-KS19', 'Đảo Hòn Tre, Tp. Nha Trang, Tỉnh Khánh Hòa', 7099000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344264/5e255ff124842f02a38237315ad53d5c.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khu-nghi-duong-vinpearl-nha-trang-luxury.html', 'VNBooking.com'),
('NT-TTKS2', 'NT-KS2', ' 86/4 Trần Phú, phường Lộc Thọ, Nha Trang, Khánh Hòa', 999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334767/655ed684280b297db026bc69aad46ca9.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-rigel-nha-trang.html', 'VNBooking.com'),
('NT-TTKS20', 'NT-KS20', 'Đảo Hòn Tre, Tp. Nha Trang, Tỉnh Khánh Hòa', 2599000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344265/188c2386b93f295afd8021b8f1fead7d.jpg', 'https://www.vietnambooking.com/hotel/vietnam/vinpearl-resort-spa-nha-trang-bay.html', 'VNBooking.com'),
('NT-TTKS21', 'NT-KS21', 'Đảo Hòn Tre, phường Vĩnh Nguyên, Tp. Nha Trang, Tỉnh Khánh Hòa', 2499000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344267/2d61457f4b57b97e65208c97435f41df.jpg', 'https://www.vietnambooking.com/hotel/vietnam/vinpearl-discovery-rockside-nha-trang.html', 'VNBooking.com'),
('NT-TTKS22', 'NT-KS22', '60 Trần Phú, Lộc Thọ, Thành phố Nha Trang, Khánh Hòa', 1699000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344494/e60514bb969996957850de7db7e75e95.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-muong-thanh-luxury-nha-trang-khanh-hoa.html', 'VNBooking.com'),
('NT-TTKS23', 'NT-KS23', ' Khu Bãi Dương, Đường Hòn Chồng, Phường Vĩnh Phước, TP. Nha Trang, Tỉnh Khánh Hòa', 999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_344495/5a99c93dfeb094ee8d15b32fa63559da.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-muong-thanh-luxury-vien-trieu-nha-trang.html', 'VNBooking.com'),
('NT-TTKS3', 'NT-KS3', '17/15 Nguyễn Thị Minh Khai, Phường Lộc Thọ, Thành Phố Nha Trang, Khánh Hoà', 1099000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335185/f0397831f679b9f83828beabe360f634.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-b-n-greenlighthouse-nha-trang.html', 'VNBooking.com'),
('NT-TTKS4', 'NT-KS4', ' 86/4 Trần Phú, Lộc Thọ, Nha Trang, Khánh Hòa', 999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335221/ae871eebf575423c1bdbc134abfccb0a.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-dendro-gold-nha-trang.html', 'VNBooking.com'),
('NT-TTKS5', 'NT-KS5', ' 05 Hùng Vương, phường Lộc Thọ, Nha Trang, Khánh Hòa', 1699000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335257/e95e95e3a668ca1e34168028f48f118e.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-galina-nha-trang.html', 'VNBooking.com'),
('NT-TTKS6', 'NT-KS6', '10 - 11 Phạm Văn Đồng, Nha Trang, Khánh Hòa.', 1399000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335289/a9d115b7715c712a069987559f666f5c.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-wonderland-nha-trang.html', 'VNBooking.com'),
('NT-TTKS7', 'NT-KS7', '04 Hùng Vương, Lộc Thọ, Thành phố Nha Trang, Khánh Hòa', 999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335335/2ebe2ab73ce32e451b2d67de45b7416e.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-libra-nha-trang.html', 'VNBooking.com'),
('NT-TTKS8', 'NT-KS8', '75 Võ Trứ, Phường Tân Lập, Tân Lập, Nha Trang, Khánh Hòa', 2498000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_335368/6275f08d3f4bd96243fbddd32799f394.jpg', 'https://www.vietnambooking.com/hotel/vietnam/b-n-nha-trang.html', 'VNBooking.com'),
('NT-TTKS9', 'NT-KS9', '04 Pasteur, Phường Xương Huân,TP. Nha Trang, Việt Nam', 999000, 'https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_337960/081d6c38d4747b9f691993170fe878a4.jpg', 'https://www.vietnambooking.com/hotel/vietnam/khach-san-ttc-premium-michelia-nha-trang.html', 'VNBooking.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `CronT`
--
ALTER TABLE `CronT`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `DanhGia`
--
ALTER TABLE `DanhGia`
  ADD KEY `IDKhachSan` (`IDKhachSan`);

--
-- Chỉ mục cho bảng `KhuVuc`
--
ALTER TABLE `KhuVuc`
  ADD PRIMARY KEY (`IDKhuVuc`);

--
-- Chỉ mục cho bảng `PhanQuyen`
--
ALTER TABLE `PhanQuyen`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`);

--
-- Chỉ mục cho bảng `Phong`
--
ALTER TABLE `Phong`
  ADD PRIMARY KEY (`IDKhachSan`),
  ADD KEY `IDKhuVuc` (`IDKhuVuc`);

--
-- Chỉ mục cho bảng `TaiKhoan`
--
ALTER TABLE `TaiKhoan`
  ADD PRIMARY KEY (`IDTaiKhoan`),
  ADD KEY `MaLoaiTaiKhoan` (`MaLoaiTaiKhoan`);

--
-- Chỉ mục cho bảng `ThongTinCaNhan`
--
ALTER TABLE `ThongTinCaNhan`
  ADD KEY `IDTaiKhoan` (`IDTaiKhoan`);

--
-- Chỉ mục cho bảng `ThongTinPhong`
--
ALTER TABLE `ThongTinPhong`
  ADD PRIMARY KEY (`IDThongTin`),
  ADD KEY `IDKhachSan` (`IDKhachSan`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `DanhGia`
--
ALTER TABLE `DanhGia`
  ADD CONSTRAINT `DanhGia_ibfk_1` FOREIGN KEY (`IDKhachSan`) REFERENCES `Phong` (`IDKhachSan`);

--
-- Các ràng buộc cho bảng `Phong`
--
ALTER TABLE `Phong`
  ADD CONSTRAINT `Phong_ibfk_1` FOREIGN KEY (`IDKhuVuc`) REFERENCES `KhuVuc` (`IDKhuVuc`);

--
-- Các ràng buộc cho bảng `TaiKhoan`
--
ALTER TABLE `TaiKhoan`
  ADD CONSTRAINT `TaiKhoan_ibfk_1` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `PhanQuyen` (`MaLoaiTaiKhoan`);

--
-- Các ràng buộc cho bảng `ThongTinCaNhan`
--
ALTER TABLE `ThongTinCaNhan`
  ADD CONSTRAINT `ThongTinCaNhan_ibfk_1` FOREIGN KEY (`IDTaiKhoan`) REFERENCES `TaiKhoan` (`IDTaiKhoan`);

--
-- Các ràng buộc cho bảng `ThongTinPhong`
--
ALTER TABLE `ThongTinPhong`
  ADD CONSTRAINT `ThongTinPhong_ibfk_1` FOREIGN KEY (`IDKhachSan`) REFERENCES `Phong` (`IDKhachSan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
