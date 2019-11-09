-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 04, 2019 lúc 05:07 PM
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
-- Cơ sở dữ liệu: `contacts`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`) VALUES
(3, 'Nguyen Van A', '0987654321', 'asfd@akfjc.aisdh'),
(4, 'Nguyen Van B', '0987456789', 'asd@ksfa.sdasd'),
(5, 'Nguyen Van ASD', '0987654321', 'asfd@akfjc.aisdh'),
(7, 'Nguyen Van ASFDV', '0923423454321', 'asfd@akfjc.aisdh'),
(9, 'Nguyen Van SDVXV', '8734203', 'asfd@akfjc.aisdh'),
(11, 'Nguyen Van ASDFSD', '12423654', 'asfd@akfjc.aisdh'),
(13, 'Nguyen Van AGRG', '53847123', 'asfd@akfjc.aisdh'),
(15, 'Nguyen Van SFSDFA', '023572354321', 'asfd@akfjc.aisdh'),
(43, 'Abs', '123', 'asd@ssd.asd'),
(44, 'Csufh', '123', 'asd@ssd.asd'),
(45, 'Usodig', '123', 'asd@ssd.asd');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
