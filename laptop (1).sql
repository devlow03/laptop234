-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 05:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `idchitiet` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `iddon` varchar(20) NOT NULL,
  `uid` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`idchitiet`, `masp`, `tensp`, `hinhanh`, `soluong`, `gia`, `iddon`, `uid`) VALUES
(59, 4, 'Asus VivoBook A415EA i3', 'vanphong4.jpg', 1, '14490000', '3655', '6346734');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `iddon` varchar(20) NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` text NOT NULL,
  `sodt` varchar(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `uid` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`iddon`, `gioitinh`, `hoten`, `ngaysinh`, `diachi`, `sodt`, `tongtien`, `uid`) VALUES
('3655', 1, 'a', '2022-05-28', '123', '456', 14490000, '6346734');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `idcart` int(11) NOT NULL,
  `masp` int(20) NOT NULL,
  `uid` varchar(60) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhomsanpham`
--

CREATE TABLE `nhomsanpham` (
  `manhom` int(11) NOT NULL,
  `tenNhom` varchar(50) NOT NULL,
  `trangthai` int(11) DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhomsanpham`
--

INSERT INTO `nhomsanpham` (`manhom`, `tenNhom`, `trangthai`) VALUES
(1, 'Văn phòng', 4),
(2, 'Gaming', 4),
(3, 'Macbook', 4),
(4, 'Mỏng nhẹ', 4),
(5, 'Cao cấp', 4),
(8, 'cơ bản', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ma` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `chitiet` text NOT NULL,
  `thongtin` text NOT NULL,
  `manhom` int(11) NOT NULL,
  `idhieu` int(11) NOT NULL,
  `idnoibat` int(11) NOT NULL,
  `tinhtrang` int(11) DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma`, `ten`, `gia`, `hinhanh`, `chitiet`, `thongtin`, `manhom`, `idhieu`, `idnoibat`, `tinhtrang`) VALUES
(1, 'Lenovo Ideapad 3 15ITL6 i3', '16490000', 'vanphong1.jpg', 'M.HÌNH\r\n15.6\", Full HD\r\n\r\nCPU\r\ni5, 1135G7, 2.4GHz\r\n\r\nCARD\r\nIntel Iris Xe\r\n\r\nPIN\r\n38 Wh', 'Laptop Lenovo Ideapad 3 15ITL6 i5 (82H801P9VN) sở hữu thiết kế mỏng nhẹ cùng hiệu năng mạnh mẽ đến từ CPU Intel thế hệ thứ 11 là người bạn đồng hành lý tưởng cho học sinh, sinh viên hay nhân viên văn phòng. Đáp ứng tốt nhu cầu học tập - văn phòng nhờ những ứng dụng tiện ích được cài đặt sẵn trên hệ điều hành Windows 11.', 1, 5, 1, 3),
(2, ' Apple MacBook Air M1 ', '29390000', 'vanphong2.jpg', 'M.HÌNH\n13.3\", Retina\n\nCPU\nApple M1\n\nCARD\n7 nhân GPU\n\nPIN\nKhoảng 10 tiếng', 'Laptop Apple MacBook Air M1 2020 có thiết kế đẹp, sang trọng với CPU M1 độc quyền từ Apple cho hiệu năng đồ họa cao, màn hình Retina hiển thị siêu nét cùng với hệ thống bảo mật tối ưu.Laptop Apple MacBook Air M1 2020 (Z124000DE) là chiếc laptop mỏng nhẹ nhưng có cấu hình mạnh mẽ, nhiều tính năng hiện đại đáng để sở hữu trong phân khúc, thích hợp cho các tác vụ văn phòng thường ngày và thiết kế đồ hoạ.', 1, 3, 1, 3),
(3, 'HP 240 G8 i5', '18190000', 'vanphong3.jpg', 'M.HÌNH\n14\", Full HD\n\nCPU\ni5, 1135G7, 2.4GHz\n\nCARD\nIntel Iris Xe\n\nPIN\n3-cell, 41Wh', 'Với thiết kế hiện đại, bền bỉ cùng hiệu năng vượt trội đến từ con chip Intel Gen 11 tân tiến, HP 240 G8 i5 (518V7PA) tự tin đáp ứng tốt các nhu cầu học tập, làm việc và giải trí cơ bản hàng ngày của bạn. Vẻ ngoài tối giản không kém phần sang trọng.HP 240 G8 i5 (518V7PA) là một trong những chiếc laptop học tập - văn phòng xứng đáng để bạn chọn mua khi sở hữu thiết kế thanh lịch, bền bỉ cùng với những thông số kỹ thuật ổn định đáp ứng tốt nhu cầu học tập, làm việc và giải trí cơ bản hàng ngày của bạn.', 1, 6, 1, 2),
(4, 'Asus VivoBook A415EA i3', '14490000', 'vanphong4.jpg', 'M.HÌNH\n14\", Full HD\n\nCPU\ni3, 1125G4, 2GHz\n\nCARD\nIntel UHD\n\nPIN\n3-cell, 42Wh', 'Asus VivoBook A415EA i3 (EB1748W) sẽ là một sự lựa chọn đáng cân nhắc cho người dùng là học sinh, sinh viên hay dân văn phòng bởi ngoại hình thanh lịch, hiệu năng ổn định cùng mức giá lý tưởng, xử lý đa dạng mọi tác vụ học tập, làm việc hay giải trí cơ bản.  ', 1, 2, 1, 3),
(5, ' Asus TUF Gaming FX517ZC i5', '27990000', 'gaming1.jpg', 'M.HÌNH\r\n15.6\", Full HD, 144Hz\r\n\r\nCPU\r\ni5, 12450H, 3.3GHz\r\n\r\nCARD\r\nRTX 3050 4GB\r\n\r\nPIN\r\n4-cell, 76Wh', 'Sở hữu ngoại hình ấn tượng thu hút mọi ánh nhìn cùng hiệu năng mạnh mẽ đến từ laptop CPU thế hệ 12 mới nhất, Asus TUF Gaming FX517ZC i5 12450H (HN077W) là lựa chọn xứng tầm cho mọi nhu cầu chiến game giải trí hay đồ hoạ - kỹ thuật của người dùng.', 2, 2, 0, 3),
(6, 'Acer Nitro 5 Gaming AN515 i5', '32990000', 'Acer Nitro 5 AN515 45 R9SC.jpg', 'M.HÌNH\r\n15.6\", Full HD, 144Hz\r\n\r\nCPU\r\ni5, 11400H, 2.7GHz\r\n\r\nCARD\r\nRTX 3060 6GB\r\n\r\nPIN\r\n4-cell, 57.5Wh', 'Laptop Acer Nitro 5 Gaming AN515 57 553E (NH.QENSV.006) là sự cân bằng hoàn hảo của diện mạo hầm hố chuẩn laptop gaming cùng hiệu năng của chip Intel thế hệ 11 mạnh mẽ kết hợp với card màn hình rời NVIDIA sẵn sàng cùng bạn chinh phục trên mọi đấu trường ảo.', 2, 1, 0, 3),
(7, 'MSI Gaming GF63 Thin 11UD i7', '27990000', 'gaming3.jpg', 'M.HÌNH\n15.6\", Full HD\n\nCPU\ni7, 11800H, 2.30 GHz\n\nCARD\nNVIDIA GeForce RTX 3050Ti Max-Q, 4GB\n\nPIN\n3-cell, 51Wh', 'Cấu hình được thiết kế vượt trội đến từ laptop MSI Gaming GF63 Thin 10SC i7 10750H (480VN), cùng kiểu dáng gaming mạnh mẽ, là người cộng sự lý tưởng, nâng tầm mọi trải nghiệm cho người dùng.', 2, 7, 1, 3),
(8, 'Dell Gaming G15 5511 i5 ', '24740000', 'gaming4.jpg', 'M.HÌNH\n15.6\", Full HD, 120Hz\n\nCPU\ni5, 11400H, 2.7GHz\n\nCARD\nRTX 3050 4GB\n\nPIN\n3-cell, 56Wh', 'Cấu hình được thiết kế vượt trội đến từ laptop MSI Gaming GF63 Thin 10SC i7 10750H (480VN), cùng kiểu dáng gaming mạnh mẽ, là người cộng sự lý tưởng, nâng tầm mọi trải nghiệm cho người dùng.', 2, 4, 1, 3),
(9, 'Apple MacBook Air M1 2020', '29390000', 'macbook air.jpg', 'M.HÌNH\n13.3\", Retina\n\nCPU\nApple M1\n\nCARD\n8 nhân GPU\n\nPIN\nKhoảng 10 tiếng', 'Laptop Apple MacBook Air M1 2020 có thiết kế đẹp, sang trọng với CPU M1 độc quyền từ Apple cho hiệu năng đồ họa cao, màn hình Retina hiển thị siêu nét cùng với hệ thống bảo mật tối ưu.', 3, 3, 1, 3),
(10, 'Apple MacBook Pro 14 M1 Max 2021', '84900000', 'macbook pro.jpg', 'M.HÌNH\n14.2 inch, Retina, 120Hz\n\nCPU\nApple M1 Max, 400GB/s memory bandwidth\n\nCARD\n32 nhân GPU\n\nPIN\nKhoảng 10 tiếng', 'Sự đẳng cấp không chỉ ở thiết kế thời thượng, sang trọng mà còn sở hữu sức mạnh siêu năng với con chip Apple M1 Pro phiên bản nâng cấp ấn tượng đến từ nhà Apple, mang đến cho bạn trải nghiệm làm việc chuyên nghiệp nhất dù là các tác vụ đồ họa - kỹ thuật chuyên sâu.', 3, 3, 1, 3),
(11, 'Apple MacBook Pro 14 M1 Pro 2021', '77990000', 'macbook pro.jpg', 'M.HÌNH\n14.2 inch, Retina, 120Hz\n\nCPU\nApple M1 Pro, 200GB/s memory bandwidth\n\nCARD\n16 core-GPU\n\nPIN\nKhoảng 10 tiếng', 'Sự đẳng cấp không chỉ ở thiết kế thời thượng, sang trọng mà còn sở hữu sức mạnh siêu năng với con chip Apple M1 Pro phiên bản nâng cấp ấn tượng đến từ nhà Apple, mang đến cho bạn trải nghiệm làm việc chuyên nghiệp nhất dù là các tác vụ đồ họa - kỹ thuật chuyên sâu.', 3, 3, 1, 3),
(12, 'Apple MacBook Pro 16 M1 Pro 2021 ', '61490000', 'macbook pro.jpg', 'M.HÌNH\n16.2 inch, 120Hz\n\nCPU\nApple M1 Pro, 200GB/s memory bandwidth\n\nCARD\n16 core-GPU\n\nPIN\nKhoảng 10 tiếng', 'Laptop Lenovo ThinkBook 14p G2 ACH (20YN001HVN) sẵn sàng đáp ứng mọi nhu cầu từ văn phòng đến đồ hoạ khi sở hữu cấu hình vượt trội cùng phong cách thiết kế cao cấp - sang trọng, hứa hẹn mang đến những trải nghiệm tốt nhất cho người dùng.', 3, 3, 1, 3),
(13, 'Apple MacBook Air M1 2020', '25490000', 'mongnhe1.jpg', 'M.HÌNH\n13.3\", Retina\n\nCPU\nApple M1\n\nCARD\n7 nhân GPU\n\nPIN\nKhoảng 10 tiếng', 'Laptop Apple MacBook Air M1 2020 có thiết kế đẹp, sang trọng với CPU M1 độc quyền từ Apple cho hiệu năng đồ họa cao, màn hình Retina hiển thị siêu nét cùng với hệ thống bảo mật tối ưu.', 4, 3, 1, 3),
(14, ' Asus ZenBook UX425EA i5 ', '22990000', 'mongnhe2.jpg', 'M.HÌNH\n14\", Full HD\n\nCPU\ni5, 1135G7, 2.4GHz\n\nCARD\nIntel Iris Xe\n\nPIN\n4-cell', 'Với những thông số kỹ thuật ấn tượng cùng phong cách thiết kế mỏng nhẹ - thời trang, laptop Asus ZenBook UX425EA (KI839W) sẽ là một người bạn đồng hành hoàn hảo cùng người dùng trong mọi tác vụ.', 4, 2, 1, 3),
(15, 'Dell XPS 13 9310 i5', '41490000', 'mongnhe3.jpg', 'M.HÌNH\n13.4\", Full HD+\n\nCPU\ni5, 1135G7, 2.4GHz\n\nCARD\nIntel Iris Xe\n\nPIN\n4-cell, 52Wh', 'Dell XPS 13 9310 i5 1135G7 (70273578) sở hữu thiết kế hiện đại với màu bạc thời thượng cùng hiệu năng mạnh mẽ, xứng danh bạn đồng hành đắc lực trên mọi mặt trận.', 4, 4, 1, 3),
(16, 'Lenovo YOGA Slim 7 Carbon 13ITL5 i7', '30990000', 'mongnhe4.jpg', 'M.HÌNH\n13.3\", 2K\n\nCPU\ni7, 1165G7, 2.8GHz\n\nCARD\nIntel Iris Xe\n\nPIN\n50Wh', '', 4, 5, 1, 3),
(17, 'Asus ZenBook UX425EA i5 ', '22990000', 'caocap1.jpg', 'M.HÌNH\n14\", Full HD\n\nCPU\ni5, 1135G7, 2.4GHz\n\nCARD\nIntel Iris Xe\n\nPIN\n4-cell', 'Với những thông số kỹ thuật ấn tượng cùng phong cách thiết kế mỏng nhẹ - thời trang, laptop Asus ZenBook UX425EA (KI839W) sẽ là một người bạn đồng hành hoàn hảo cùng người dùng trong mọi tác vụ.', 5, 2, 1, 3),
(18, 'Lenovo ThinkBook 14p G2', '23990000', 'Lenovo ThinkBook 14p.jpg', 'M.HÌNH\r\n14\", 2K\r\n\r\nCPU\r\nRyzen 5, 5600H, 3.3GHz\r\n\r\nCARD\r\nRadeon\r\n\r\nPIN\r\n61Wh', 'Laptop Lenovo ThinkBook 14p G2 ACH (20YN001HVN) sẵn sàng đáp ứng mọi nhu cầu từ văn phòng đến đồ hoạ khi sở hữu cấu hình vượt trội cùng phong cách thiết kế cao cấp - sang trọng, hứa hẹn mang đến những trải nghiệm tốt nhất cho người dùng.', 1, 5, 1, 3),
(19, 'Dell XPS 17 9710 i7 ', '82990000', 'caocap3.jpg', 'M.HÌNH\n17\", 4K\n\nCPU\ni7, 11800H, 2.30 GHz\n\nCARD\nRTX 3050 4GB\n\nPIN\n6-cell Li-ion, 97Wh', 'Laptop Dell XPS 17 9710 (XPS7I7001W1) sẽ không làm người dùng thất vọng khi sở hữu ngoại hình thời thượng cùng những thông số kỹ thuật đẳng cấp. ', 5, 4, 1, 3),
(20, 'MacBook Pro 14 M1 Max 2021', '84900000', 'caocap4.jpg', 'M.HÌNH\n14.2 inch, Retina, 120Hz\n\nCPU\nApple M1 Max, 400GB/s memory bandwidth\n\nCARD\n32 nhân GPU\n\nPIN\nKhoảng 10 tiếng', 'Sự đẳng cấp không chỉ ở thiết kế thời thượng, sang trọng mà còn sở hữu sức mạnh siêu năng với con chip Apple M1 Pro phiên bản nâng cấp ấn tượng đến từ nhà Apple, mang đến cho bạn trải nghiệm làm việc chuyên nghiệp nhất dù là các tác vụ đồ họa - kỹ thuật chuyên sâu.', 5, 3, 1, 3),
(22, 'Lenovo ThinkBook 14p', '25990000', 'Lenovo ThinkBook 14p.jpg', 'M.HÌNH\n14\", 2K\n\nCPU\nRyzen 5, 5600H, 3.3GHz\n\nCARD\nRadeon\n\nPIN\n61Wh', 'Laptop Lenovo ThinkBook 14p G2 ACH (20YN001HVN) sẵn sàng đáp ứng mọi nhu cầu từ văn phòng đến đồ hoạ khi sở hữu cấu hình vượt trội cùng phong cách thiết kế cao cấp - sang trọng, hứa hẹn mang đến những trải nghiệm tốt nhất cho người dùng.', 1, 5, 0, 3),
(23, 'HP 15s du1108TU', '12960000', 'Asus VivoBook Pro 16X OLED M7600 QC.jpg', 'M.HÌNH\r\n15.6\", Full HD\r\n\r\nCPU\r\ni3, 10110U, 2.1GHz\r\n\r\nCARD\r\nIntel UHD\r\n\r\nPIN\r\n3-cell, 41Wh', 'HP 15s du1108TU i3 (2Z6L7PA) thuộc dòng laptop học tập - văn phòng có thiết kế đơn giản và thanh lịch, cấu hình đủ dùng theo nhu cầu cùng một mức giá rất hợp lý, sẽ là một lựa chọn tốt cho học sinh, sinh viên, nhân viên văn phòng.', 1, 6, 1, 2),
(24, 'HP ZBook Firefly 14 G8', '41380000', 'HP ZBook Firefly 14 G8.jpg', 'M.HÌNH\n14\", Full HD\n\nCPU\ni7, 1165G7, 2.8GHz\n\nCARD\nNVIDIA QuadroT500, 4GB\n\nPIN\n3-cell, 53Wh', 'HP ZBook Firefly 14 G8 (275V5AV) chinh phục mọi đối tượng khách hàng với phong cách thiết kế thời thượng, gọn nhẹ cùng những tính năng ưu việt mà nó mang lại, đáp ứng tối đa mọi nhu cầu cần thiết từ học tập - văn phòng cơ bản đến thiết kế đồ họa chuyên sâu.', 1, 6, 0, 3),
(25, 'Lenovo ThinkBook 14p G2 ACH', '23990000', 'Lenovo ThinkBook 14p G2 ACH.jpg', 'M.HÌNH\r\n14\", Full HD\r\n\r\nCPU\r\ni7, 1165G7, 2.8GHz\r\n\r\nCARD\r\nIntel Iris Xe\r\n\r\nPIN\r\n45Wh', 'Laptop Lenovo ThinkBook 14p G2 ACH (20YN001HVN) sẵn sàng đáp ứng mọi nhu cầu từ văn phòng đến đồ hoạ khi sở hữu cấu hình vượt trội cùng phong cách thiết kế cao cấp - sang trọng, hứa hẹn mang đến những trải nghiệm tốt nhất cho người dùng.', 1, 5, 1, 3),
(26, 'Nitro 5 AN515 45 R9SC ', '31990000', 'Acer Nitro 5 AN515 45 R9SC.jpg', 'M.HÌNH\r\n15.6\", Full HD, 144Hz\r\n\r\nCPU\r\nRyzen 7, 5800H, 3.2GHz\r\n\r\nCARD\r\nRTX 3070 8GB\r\n\r\nPIN\r\n4-cell, 57Wh', 'Laptop Acer Nitro 5 AN515 45 R9SC R7 (NH.QBRSV.001) gây ấn tượng mạnh nhờ vẻ ngoài độc đáo, cá tính cùng bộ vi xử lý mạnh mẽ nhà AMD và card đồ hoạ rời dòng RTX, sẽ là người bạn đồng hành hoàn hảo của các game thủ.Acer Nitro 5 AN515 45 R9SC R7 (NH.QBRSV.001) xứng tầm là một trong những chiếc laptop gaming hoàn hảo đáng để bạn trải nghiệm và chọn mua.', 2, 1, 0, 3),
(27, 'Nitro 5 Gaming AN515 57 54MV', '23840000', 'Acer Nitro 5 Gaming AN515 57 54MV.jpg', 'M.HÌNH\r\n15.6\", Full HD, 144Hz\r\n\r\nCPU\r\ni5, 11400H, 2.7GHz\r\n\r\nCARD\r\nRTX 3050 4GB\r\n\r\nPIN\r\n4-cell, 57.5Wh', 'Acer Nitro 5 Gaming AN515 57 54MV i5 (NH.QENSV.003) mang trên mình sức mạnh từ con chip Intel thế hệ 11, card rời cho khả năng tối ưu hoá mọi tác vụ từ đồ hoạ đến game, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời khó quên cho người dùng.Acer Nitro 5 Gaming AN515 57 54MV i5 (NH.QENSV.003) là chiếc laptop gaming đáp ứng được nhiều nhu cầu người dùng. Đây chính là công cụ đắc lực, đồng hành cùng các game thủ trong mọi cuộc chiến.', 2, 1, 0, 3),
(28, 'Acer Nitro 5 Gaming AN515 57 5831', '24740000', 'Acer Nitro 5 Gaming AN515 57 5831.jpg', 'M.HÌNH\r\n15.6\", Full HD, 144Hz\r\n\r\nCPU\r\ni5, 11400H, 2.7GHz\r\n\r\nCARD\r\nRTX 3060 6GB\r\n\r\nPIN\r\n4-cell, 57.5Wh', 'Laptop Acer Nitro 5 Gaming AN515 57 5831 i5 (NH.QDGSV.003) là thế hệ laptop gaming mới của nhà Acer có nhiều thay đổi trong thiết kế. Hiệu năng vẫn giữ vững phong độ, tự tin mang đến cho game thủ trải nghiệm chơi game cực đã. Acer Nitro 5 Gaming AN515 57 5831 i5 (NH.QDGSV.003) mang trong mình hiệu năng mạnh mẽ, công nghệ hiện đại sẽ phù hợp với những ai có nhu cầu chơi game nhưng vẫn cần có tính linh hoạt cao.', 2, 1, 1, 3),
(29, 'Acer Aspire 7 Gaming A715 42G R4XX', '17990000', 'Acer Aspire 7 Gaming A715 42G R4XX.jpg', 'M.HÌNH\r\n15.6\", Full HD\r\n\r\nCPU\r\nRyzen 5, 5500U, 2.1GHz\r\n\r\nCARD\r\nGTX 1650 4GB\r\n\r\nPIN\r\n48Wh', 'Acer Aspire 7 Gaming A715 42G R4XX R5 (NH.QAYSV.008) sở hữu hiệu năng khoẻ cùng thiết kế mạnh mẽ, là bạn đồng hành lý tưởng trong mọi cuộc hành trình.', 2, 1, 0, 3),
(30, 'MSI Creator Z16P B12UGST i7', '22990000', 'msi-creator-z16p.jpg', 'M.HÌNH\r\n15.6\", Full HD\r\n\r\nCPU\r\ni5, 11400H, 2.7GHz\r\n\r\nCARD\r\nRTX 3050 4GB\r\n\r\nPIN\r\n3-cell, 51Wh', 'Laptop MSI Gaming GF63 Thin 11UC (445VN) khơi nguồn mọi cảm hứng cho game thủ bởi ngoại hình hầm hố, năng động cùng những thông số kỹ thuật ấn tượng. ', 2, 7, 1, 3),
(31, 'ROG Strix Gaming G513IH R7', '22990000', 'asus g513 r7.jpg', 'M.HÌNH\r\n15.6\", Full HD, 144Hz\r\n\r\nCPU\r\nRyzen 7, 4800H, 2.9GHz\r\n\r\nCARD\r\nGTX 1650 4GB\r\n\r\nPIN\r\n4-cell, 56Wh', 'Laptop Asus ROG Strix Gaming G513IH (HN015W) là một trợ thủ đắc lực cho mọi game thủ chuyên nghiệp với phong cách thiết kế vô cùng độc đáo, ấn tượng chuẩn gaming cùng bộ cấu hình đầy mạnh mẽ.', 2, 2, 1, 3),
(86, 'Apple MacBook Pro M1 2020', '39490000', 'macbook-pro-m1-2020.jpg', 'M.HÌNH\r\n14.2 inch, Retina, 120Hz\r\n\r\nCPU\r\nApple M1 Max, 400GB/s memory bandwidth\r\n\r\nCARD\r\n24 nhân GPU\r\n\r\nPIN\r\nKhoảng 10 tiếng', 'Khoác lên mình vẻ ngoài mới lạ so với các dòng Mac trước đó, thiết kế màn hình tai thỏ ấn tượng, bắt mắt cùng bộ hiệu năng đỉnh cao M1 Max mạnh mẽ, MacBook Pro 14 inch M1 Max 2021 xứng tầm là chiếc laptop cao cấp chuyên dụng dành cho dân kỹ thuật - đồ họa, sáng tạo nội dung.', 3, 3, 1, 3),
(90, 'Acer Swift 3 SF314 511 55QE i5', '20960000', 'acer-swift-3-sf314-511-55qe-i5.jpg', 'M.HÌNH\r\n14\", Full HD\r\n\r\nCPU\r\ni5, 1135G7, 2.4GHz\r\n\r\nCARD\r\nIntel Iris Xe\r\n\r\nPIN\r\n56Wh', 'Laptop Acer Swift 3 SF314 511 55QE i5 (NX.ABNSV.003) sở hữu kiểu dáng thanh lịch cùng hiệu năng mạnh mẽ, cùng bạn giải quyết mọi tác vụ hằng ngày.', 4, 1, 1, 3),
(94, 'Lenovo Yoga 9 14ITL5 i7', '40090000', 'lenovo-yoga-9-14itl5-i7.jpg', 'M.HÌNH\r\n14\", 4K\r\n\r\nCPU\r\ni7, 1185G7, 3GHz\r\n\r\nCARD\r\nIntel Iris Xe\r\n\r\nPIN\r\n60 Wh', 'Sang trọng, đẳng cấp, mạnh mẽ là những mỹ từ tóm gọn giá trị mà laptop Lenovo Yoga 9 14ITL5 (82BG006EVN) mang lại cho bạn. Nếu đang tìm 1 chiếc laptop mỏng nhẹ, linh hoạt, cấu hình ấn tượng hỗ trợ các tác vụ nặng, trải nghiệm ngay phiên bản cao cấp này từ Lenovo.', 5, 5, 1, 3),
(96, 'asus', '14550000', 'asus g513 r7.jpg', 'aaaaa', 'bbbbb', 8, 2, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `ho` varchar(100) NOT NULL,
  `ten` varchar(8) NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`user`, `pass`, `ho`, `ten`, `gioitinh`, `email`, `quyen`) VALUES
('admin', '456', 'Nguyễn Lê', 'Thiên', 1, 'thien@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `idhieu` int(11) NOT NULL,
  `tenhieu` varchar(30) NOT NULL,
  `hienthi` int(11) DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`idhieu`, `tenhieu`, `hienthi`) VALUES
(1, 'Acer', 4),
(2, 'Asus', 4),
(3, 'Apple', 4),
(4, 'Dell', 4),
(5, 'Lenovo', 4),
(6, 'HP', 4),
(7, 'MSI', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`idchitiet`),
  ADD KEY `iddon` (`iddon`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddon`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idcart`),
  ADD KEY `giohang_ibfk_1` (`masp`);

--
-- Indexes for table `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  ADD PRIMARY KEY (`manhom`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `Fk_nhomsanpham_sanpham` (`manhom`),
  ADD KEY `FK_thuonghieu_sanpham` (`idhieu`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`idhieu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `idchitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  MODIFY `manhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `idhieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`iddon`) REFERENCES `donhang` (`iddon`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`ma`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_thuonghieu_sanpham` FOREIGN KEY (`idhieu`) REFERENCES `thuonghieu` (`idhieu`),
  ADD CONSTRAINT `Fk_nhomsanpham_sanpham` FOREIGN KEY (`manhom`) REFERENCES `nhomsanpham` (`manhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
