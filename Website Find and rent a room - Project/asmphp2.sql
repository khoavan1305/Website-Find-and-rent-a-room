-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 05:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asmphp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baidang`
--

CREATE TABLE `tbl_baidang` (
  `id` int(11) NOT NULL,
  `tinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `huyen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `xa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sonha` int(11) NOT NULL,
  `adress` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `rolebaidang` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `rolegoi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `giathue` double NOT NULL,
  `dientich` int(11) NOT NULL,
  `doituong` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tennd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lienhe` int(12) NOT NULL,
  `iddm` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_baidang`
--

INSERT INTO `tbl_baidang` (`id`, `tinh`, `huyen`, `xa`, `sonha`, `adress`, `rolebaidang`, `rolegoi`, `tieude`, `noidung`, `giathue`, `dientich`, `doituong`, `img`, `tennd`, `lienhe`, `iddm`, `iduser`) VALUES
(161, 'TP HCM', 'Gò Vấp', 'Phạm Văn Chiêu', 0, 'Đường Phạm Văn Chiêu, Phường 14, Quận Gò Vấp', 'Cho thuê nhà nguyên căn', 'Gói tin VIP', 'Nhà nguyên căn Phạm Văn Chiêu, Phường 14, Quận Gò Vấp - nhà 4x10m', 'CHO THUÊ NHÀ NGUYÊN CĂN PHẠM VĂN CHIÊU- p14 GÒ VẤP.\r\n\r\n_ Nhà 4m x 10m ( nở hậu 7m )\r\n\r\nđường xe hơi\r\n\r\n1 trệt 1 lầu - 1 phòng khách - 1 bếp(nội thất cơ bản)- 3 phòng ngủ( có máy lạnh) - 2 WC - sân sau rộng rãi.\r\n\r\n_Gần chợ Thạch Đà , Bách Hóa Xanh, Trường tiểu học , ngân hàng bệnh viện, tiện nghi đầy đủ trong khu vực.\r\n\r\nGiá:8 tr/ tháng giá k TL ( cọc 2 tháng )\r\n\r\nLh: 0901181270 Linh', 8000000, 40, 'Tất cả', 'upload/img12.jpg', 'Trần Phương Trinh', 776689142, 2, 26),
(162, 'TP HCM', ' Quận 1', ' Nguyễn Thị Minh Khai ', 0, 'Đường Nguyễn Thị Minh Khai Phường Đa Kao Quận 1', 'Cho thuê căn hộ dịch vụ', 'Gói tin VIP', 'Cho thuê CHDV ngay SVĐ Hoa Lư quận 1', 'Căn hộ ngay tại trung tâm quận 1 phường Đa Kao .\r\n\r\nFull nội thất , đầy đủ trang thiết bị nội thất dọn vào ở ngay .\r\n\r\nHợp đồng 6 tháng 8tr2\r\n\r\nHợp đồng 1 năm 8tr\r\n\r\nHình thật chụp bằng điện thoại.', 8000000, 40, 'Tất cả', 'upload/img13.jpg', '	Tống Hoàng Duy', 389719737, 6, 26),
(163, 'TP HCM', ' Quận 2', 'Trần Não', 34, '34 Đường Trần Não Quận 2', 'Cho thuê căn hộ dịch vụ', 'Gói tin VIP', 'Cho thuê CHDV ngay SVĐ Hoa Lư quận 1', 'Căn hộ ngay tại trung tâm quận 1 phường Đa Kao .\r\n\r\nFull nội thất , đầy đủ trang thiết bị nội thất dọn vào ở ngay .\r\n\r\nHợp đồng 6 tháng 8tr2\r\n\r\nHợp đồng 1 năm 8tr\r\n\r\nHình thật chụp bằng điện thoại.', 8000000, 40, 'Tất cả', 'upload/img8.jpg', '	Tống Hoàng Duy', 389719737, 6, 26),
(175, 'TP HCM', 'Gò Vấp', 'NVK', 307, '307/13 Nguyễn Văn Khối P14 Gò Vấp', 'Cho thuê căn hộ', 'Gói tin thường', 'Phòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽ', 'Phòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽPhòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽPhòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽPhòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽ', 500000, 25, 'Tất cả', 'upload/img13.jpg', 'Văn', 933418277, 3, 31),
(176, 'TP HCM', 'Gò Vấp', 'NVK', 307, '307/13 Nguyễn Văn Khối P14 Gò Vấp', 'Cho thuê căn hộ', 'Gói tin thường', 'Phòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽ', 'Phòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽPhòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽPhòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽPhòng trọ như Khách sạn, gần AEON MALL , Tên Lửa, Máy lạnh, cửa sổ mát mẻ, sạch sẽ', 500000, 25, 'Tất cả', 'upload/img13.jpg', 'Văn', 933418277, 3, 31),
(177, 'TP HCM', 'Quận 1', 'Nguễn Trãi', 39, '39/27 Nguyễn Trãi Quận 1', 'Tìm người ở ghép', 'Gói tin VIP', 'Share căn hộ dịch vụ chung cư the morning star', 'Share căn hộ dịch vụ chung cư the morning starShare căn hộ dịch vụ chung cư the morning starShare căn hộ dịch vụ chung cư the morning starShare căn hộ dịch vụ chung cư the morning starShare căn hộ dịch vụ chung cư the morning starShare căn hộ dịch vụ chung cư the morning star', 1500000, 20, 'Tất cả', 'upload/img7.jpg', 'Khoa Văn', 1286590993, 8, 26),
(178, 'Đồng Nai', 'Long Thành', 'ql51', 1807, '1807 ql51 Long Thành Đồng Nai', 'Cho thuê mặt bằng', 'Gói tin VIP', 'Cho thuê mặt bằng QL51 Ngay chợ long phú mới', 'Cho thuê kho, nhà xưởng 5000m² - 50.000m² mặt tiền Quốc Lộ 51, tại huyện Long Thành, tỉnh Đồng Nai.\r\n- Diện tích nhà xưởng cho thuê từ 5000m² đến 50.000m².\r\n- Kho xưởng xây dựng và thiết kế theo tiêu chuẩn công nghiệp:\r\n+ Chiều cao từ 8m - 12m, trang bị hệ thống chiếu sáng tự nhiên, thông gió và mái chống nóng.\r\n+ Nền bê tông kết cấu kiên cố, chịu tải lớn.\r\n+ Trạm điện ba pha công suất lớn; hệ thống PCCC tiêu chuẩn, cấp thoát nước bao quanh nhà xưởng, xử lý nước thải.\r\n+ Ram dốc container thiết kế đảm bảo tải trọng xe container 40 feet;\r\n+ Đường nội bộ thông thoáng 4.5m - 5m xe container di chuyển dễ dàng và thuận lợi cho việc bốc xếp hàng hóa,\r\n- Vị trí giao thông thuận lợi, nằm ở trung tâm vùng kinh tế trọng điểm phía nam cách TP. HCM 25km;\r\n+ Kết nối với tuyến giao thông chính Quốc Lộ 51 và đường cao tốc TP.HCM - Long Thành - Dầu Giây; tuyến đường sắt Ga Biên Hòa (15km).\r\n+ Thuận lợi giao thông đường biển, kết nối với Cảng nước sâu Phú Mỹ (35km), Cảng Cái Mép - Thị Vải, Tân Cảng Sài', 15000000, 300, 'Tất cả', 'upload/img11.jpg', 'Văn', 933418277, 7, 26);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(11) NOT NULL,
  `tendm` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendm`) VALUES
(1, 'Cho thuê phòng trọ'),
(2, 'Cho thuê nhà nguyên căn'),
(3, 'Cho thuê căn hộ'),
(4, 'Cho thuê căn hộ mini'),
(6, 'Cho thuê căn hộ dịch vụ'),
(7, 'Cho thuê mặt bằng'),
(8, 'Tìm người ở ghép');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id` int(11) NOT NULL,
  `roomname` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kichthuoc` int(11) NOT NULL,
  `note` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `id` int(11) NOT NULL,
  `sodutk` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(12) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `sdt`, `email`, `pass`, `role`, `sodu`) VALUES
(20, 'Đức Anh', 1227715033, 'ducanh1305@gmail.com', 'Kv130519988', 'user', 0),
(25, 'Admin', 985256472, 'Woox@gmail.com', 'Kv13051998', 'admin', 0),
(26, 'Khoa Văn', 933418277, 'khoavan198@gmail.com', 'Kv13051998', 'shop', 15000),
(28, 'Lụm', 1286590993, 'khoavan198@gmail.com', 'Kv13051998', 'shop', 0),
(31, 'Oanh Võ', 908656202, 'Oanhvo@gmail.com', 'Kv13051998', 'shop', 5000),
(32, 'Lụm', 1234567891, 'asdasd@gmail.com', 'Kv13051998', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_baidang`
--
ALTER TABLE `tbl_baidang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_baidang_dm` (`iddm`),
  ADD KEY `fk_baidang_user` (`iduser`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_shop_user` (`iduser`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_baidang`
--
ALTER TABLE `tbl_baidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_baidang`
--
ALTER TABLE `tbl_baidang`
  ADD CONSTRAINT `fk_baidang_dm` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`),
  ADD CONSTRAINT `fk_baidang_user` FOREIGN KEY (`iduser`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD CONSTRAINT `fk_shop_user` FOREIGN KEY (`iduser`) REFERENCES `tbl_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
