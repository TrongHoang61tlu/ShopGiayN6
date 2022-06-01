-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th6 01, 2022 lúc 06:24 PM
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
-- Cơ sở dữ liệu: `shopbangiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `MaHang` int(11) NOT NULL,
  `TenHang` varchar(255) DEFAULT NULL,
  `anhSP` varchar(255) NOT NULL,
  `MauSac` varchar(10) DEFAULT NULL,
  `Size` char(15) DEFAULT NULL,
  `DVT` varchar(30) DEFAULT NULL,
  `SlgTon` int(11) DEFAULT NULL,
  `GiaBan` float NOT NULL,
  `NgungBan` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`MaHang`, `TenHang`, `anhSP`, `MauSac`, `Size`, `DVT`, `SlgTon`, `GiaBan`, `NgungBan`) VALUES
(1, 'Faded', '', 'do', '1', 'test', 10, 100000, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `SoHD` int(11) NOT NULL,
  `NgayBan` date DEFAULT NULL,
  `MaNV` int(10) NOT NULL,
  `MaKh` int(10) NOT NULL,
  `MaHang` int(11) NOT NULL,
  `TongTien` float DEFAULT 0,
  `HoanThanh` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach`
--

CREATE TABLE `khach` (
  `MaKh` int(11) NOT NULL,
  `TenKh` varchar(255) DEFAULT NULL,
  `Emailkh` varchar(255) DEFAULT NULL,
  `Passwordkh` varchar(255) DEFAULT NULL,
  `GioiTinhKHACH` varchar(10) DEFAULT NULL,
  `DiaChiKh` varchar(30) DEFAULT NULL,
  `SDTKh` char(12) DEFAULT NULL,
  `activated` tinyint(1) NOT NULL,
  `varkey` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach`
--

INSERT INTO `khach` (`MaKh`, `TenKh`, `Emailkh`, `Passwordkh`, `GioiTinhKHACH`, `DiaChiKh`, `SDTKh`, `activated`, `varkey`) VALUES
(1, 'Hoàng', 'hoangne@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, 0, ''),
(2, 'Hoàng', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, 0, ''),
(3, '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, 0, ''),
(8, 'Hoàng', 'tronghoang19112001@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, 1, '7aa2ed232110787e8e9b49a219494e78'),
(15, 'Hoàng', 'nguyenyenngoc61ht@gmail.com', '698d51a19d8a121ce581499d7b701668', NULL, NULL, NULL, 0, '01a8168f55130b3da1b68c16044c10bf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luongnv`
--

CREATE TABLE `luongnv` (
  `MaCV` int(11) NOT NULL,
  `ChucVu` varchar(255) DEFAULT NULL,
  `Luong` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `luongnv`
--

INSERT INTO `luongnv` (`MaCV`, `ChucVu`, `Luong`) VALUES
(1, 'sep', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(255) DEFAULT NULL,
  `NTNS` date DEFAULT NULL,
  `GioiTinhNV` varchar(10) DEFAULT NULL,
  `SđtNV` char(10) DEFAULT NULL,
  `EmailNV` varchar(255) NOT NULL,
  `PasswordNV` varchar(255) NOT NULL,
  `permission` int(5) NOT NULL,
  `DiaChiNV` varchar(30) DEFAULT NULL,
  `DaNghi` bit(1) DEFAULT NULL,
  `MaCV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `ID` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`ID`, `tieude`, `noidung`) VALUES
(1, 'review', 'sản phẩm tốt'),
(2, 'review', 'đáng tiền'),
(4, 'review', 'sản phẩm rất rẻ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`MaHang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`SoHD`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaKh` (`MaKh`),
  ADD KEY `MaHang` (`MaHang`);

--
-- Chỉ mục cho bảng `khach`
--
ALTER TABLE `khach`
  ADD PRIMARY KEY (`MaKh`);

--
-- Chỉ mục cho bảng `luongnv`
--
ALTER TABLE `luongnv`
  ADD PRIMARY KEY (`MaCV`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaCV` (`MaCV`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `MaHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `SoHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach`
--
ALTER TABLE `khach`
  MODIFY `MaKh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `luongnv`
--
ALTER TABLE `luongnv`
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaKh`) REFERENCES `khach` (`MaKh`),
  ADD CONSTRAINT `hoadon_ibfk_3` FOREIGN KEY (`MaHang`) REFERENCES `hang` (`MaHang`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaCV`) REFERENCES `luongnv` (`MaCV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
