-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2022 lúc 03:53 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bannersale`
--

CREATE TABLE `bannersale` (
  `hienthi` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bannersale`
--

INSERT INTO `bannersale` (`hienthi`, `hinhanh`) VALUES
(2, 'bannersale1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `idDH` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `Size` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`idDH`, `idSP`, `Size`, `soluong`, `gia`) VALUES
(19, 14, 38, 1, 1200000),
(20, 14, 37, 1, 1200000),
(20, 19, 40, 1, 1500000),
(22, 11, 37, 3, 1200000),
(23, 6, 37, 2, 2000000),
(23, 15, 38, 2, 1200000),
(24, 35, 37, 1, 699000),
(25, 62, 39, 1, 2000000),
(26, 12, 40, 1, 780000),
(27, 4, 37, 2, 3600000),
(27, 11, 37, 5, 1200000),
(28, 20, 40, 2, 1300000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chungloai`
--

CREATE TABLE `chungloai` (
  `idCL` varchar(11) NOT NULL,
  `tenCL` varchar(20) CHARACTER SET utf8 NOT NULL,
  `hienthi` int(11) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madanhmuc` varchar(11) NOT NULL,
  `tendanhmuc` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madanhmuc`, `tendanhmuc`) VALUES
('1', 'Mua Hàng'),
('qlsp', 'Quản lí sản phẩm'),
('qldh', 'Quản lí đơn hàng'),
('thongke', 'Thống kê sản phẩm'),
('qltk', 'Quản lí tài khoản'),
('qldm', 'Quản lí quyền'),
('tkkd', 'Thống kê kinh doanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `ngaydathang` date NOT NULL,
  `tennguoinhan` varchar(20) CHARACTER SET utf8 NOT NULL,
  `diachigiaohang` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` varchar(10) CHARACTER SET utf8 NOT NULL,
  `ghichu` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idDH`, `idKH`, `ngaydathang`, `tennguoinhan`, `diachigiaohang`, `tongtien`, `trangthai`, `ghichu`) VALUES
(19, 3, '2022-05-03', 'Đào văn hoạt', '19/7 Bình Thạnh ', 1220000, '1', ''),
(20, 8, '2022-05-05', 'Tuấn Nam', '40/2 An Dương Vương', 2720000, '1', ''),
(22, 8, '2022-05-13', 'nguyenvana', 'dsadas', 3620000, '0', ''),
(23, 9, '2022-05-10', 'Nguyễn Chí Thanh', '30/4 Hòa Hưng Q7', 6420000, '0', ''),
(24, 10, '2022-05-17', 'Trần Văn a', '13/2 Nghĩa Thục ', 699000, '0', ''),
(25, 10, '2022-05-17', 'Trần Văn a', '13/2 Nghĩa Thục ', 2000000, '0', ''),
(26, 12, '2022-05-19', 'Văn Hùng', '123 abc', 780000, '1', ''),
(27, 12, '2022-05-19', 'Văn Hùng', '123 abc', 13200000, '1', ''),
(28, 3, '2022-05-20', 'đâsdsa', 'dsadsa', 2600000, '1', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gia`
--

CREATE TABLE `gia` (
  `idGia` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idUser` int(11) NOT NULL,
  `hoten` varchar(20) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `KHxau` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idUser`, `hoten`, `diachi`, `dienthoai`, `email`, `KHxau`) VALUES
(1, 'abc', 'xyz', 12345, 'nam@gmail.com', 0),
(8, 'nguyenvana', 'dsadas', 12347, 'd2@gmail.com', 0),
(9, 'Nguyễn Chí Thanh', '30/4 Hòa Hưng Q7', 12836981, 'thanh@gmail.com', 0),
(10, 'Trần Văn a', '13/2 Nghĩa Thục ', 123123456, 'vana@gmail.com', 0),
(11, 'Thanh Trần', '977/7 Hòa Hưng', 1253722779, 'thanh@gmail.com', 0),
(12, 'Văn Hùng', '123 abc', 356667889, 'hung2@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idUser` int(11) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idUser`, `hoten`, `sdt`, `email`, `diachi`) VALUES
(1, 'nguyen van a', 583320861, 'vana@gmail.com', '123 an duong vuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `TenQuyen` varchar(10) NOT NULL,
  `idQuyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`TenQuyen`, `idQuyen`) VALUES
('Admin', 1),
('Nhan Vien', 2),
('KhachHang', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `q_dm`
--

CREATE TABLE `q_dm` (
  `idQuyen` varchar(11) NOT NULL,
  `madanhmuc` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `q_dm`
--

INSERT INTO `q_dm` (`idQuyen`, `madanhmuc`) VALUES
('1', 'qldh'),
('1', 'qldm'),
('1', 'qlsp'),
('1', 'qltk'),
('1', 'thongke'),
('1', 'tkkd'),
('2', 'qldh'),
('2', 'qlsp'),
('2', 'thongke'),
('2', 'tkkd'),
('3', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `ten` varchar(200) CHARACTER SET utf8 NOT NULL,
  `idloai` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `kieudang` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mausac` varchar(10) CHARACTER SET utf8 NOT NULL,
  `chatlieu` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ngayphathanh` date NOT NULL,
  `hinhanh` varchar(20) CHARACTER SET utf8 NOT NULL,
  `hienthi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `ten`, `idloai`, `soluong`, `gia`, `mota`, `kieudang`, `mausac`, `chatlieu`, `ngayphathanh`, `hinhanh`, `hienthi`) VALUES
(2, 'AIR FORCE 1 LV8', 1, 198, 3600000, 'AIR FORCE 1 LV8', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2019-03-21', 'nike_2.png', 1),
(3, 'Giày Vans Style 36 C', 2, 200, 1850000, 'THÔNG TIN SẢN PHẨM Thương hiệu Vans Xuất xứ thương hiệu Mỹ Sản xuất tại Việt Nam ...', 'Giày thể thao', 'Đen', 'Vải Canvas', '2020-03-18', 'vans_1.png', 1),
(4, 'AIR FORCE 3', 1, 198, 3600000, 'Nike Air Force 3 Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng', 'Giày thể thao', 'Xám trắng', 'Vải Canvas', '2020-03-23', 'nike_3.png', 1),
(5, 'Vans style 2', 2, 100, 1200000, 'Giày Vans', 'Giày thể thao', 'Cam', 'Vải Canvas', '2020-03-11', 'vans_2.png', 1),
(6, 'Vans style 3', 2, 198, 2000000, 'Giày Vans 3', 'Giày thể thao', 'Xanh biển', 'Vải Canvas', '2020-03-03', 'vans_3.png', 2),
(7, 'Vans style 5', 2, 300, 1000000, 'Giày Vans 5', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2022-03-02', 'vans_5.png', 1),
(8, 'adidas 1', 3, 300, 2000000, 'Adidas style 1', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-03-01', 'adidas_1.png', 1),
(9, 'adidas 2', 3, 1000, 1500000, 'Giày adidas style 2', 'Giày thể thao', 'Xanh biển', 'Vải Canvas', '2020-03-05', 'adidas_2.png', 1),
(10, 'Converse style 1', 4, 1000, 2000000, 'Giày Converse', 'Giày thể thao', 'Cam', 'Vải Canvas', '2022-03-16', 'converse_1.png', 1),
(11, 'Converse style 2', 4, 192, 1200000, 'Giày Converse 2', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-03-13', 'converse_2.png', 1),
(12, 'Balenciaga style 1', 5, 299, 1200000, 'Giày Balenciaga 1', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2020-03-03', 'balenciaga_1.png', 2),
(13, 'Balenciaga style 2', 5, 200, 1000000, 'Giày Balenciaga 2', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-03-02', 'balenciaga_2.png', 1),
(14, 'Nike style 4', 1, 200, 1200000, 'Nike Style 4', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-03-01', 'nike_4.png', 1),
(15, 'Adidas style 3', 3, 198, 1200000, 'Adidas style 3', 'Giày thể thao', 'Nâu', 'Vải Canvas', '2022-04-06', 'adidas_3.png', 1),
(16, 'Adidas style 4', 3, 2000, 1300000, 'Adidas style 4', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-04-10', 'adidas_4.png', 2),
(17, 'Converse style 3', 4, 1000, 2000000, 'Converse style 3', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-04-05', 'converse_3.png', 2),
(18, 'Converse style 4', 4, 100, 1200000, 'Converse style 4', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-04-06', 'converse_4.png', 2),
(19, 'Balenciaga style 3', 5, 300, 1500000, 'Balenciaga style 3', 'Giày thể thao', 'Vàng', 'Vải Canvas', '2020-04-01', 'balenciaga_3.png', 1),
(20, 'Balenciaga style 4', 5, 998, 2000000, 'Balenciaga style 4', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2021-04-09', 'balenciaga_4.png', 2),
(21, 'Vans style 4', 2, 300, 1200000, 'Vans style 4', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-04-06', 'vans_4.png', 1),
(22, 'Nike Air Max 90 G', 1, 200, 3829000, 'Nike Air Max 90 ban đầu nổi tiếng với những đường nét sạch sẽ và phong cách vượt thời gian. Nike Air Max 90 G vẫn đúng với biểu tượng OG với một số cập nhật dành cho chơi gôn, như lực kéo tích hợp và lớp phủ mỏng giúp ngăn nước.', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2019-04-16', 'nike_22.png', 2),
(23, 'Air Jordan XII ', 1, 2000, 6500000, 'Trò chơi kinh điển chiến thắng của Michael Jordan từ giữa những năm 90 trở lại — và lần này nó được xây dựng cho chơi gôn. Air Jordan 12 Low cập nhật những đường chỉ khâu nổi tiếng, lấy cảm hứng từ mặt trời mọc và phần trên giống như chần bông với đế ngoài có gai cực kỳ quyến rũ và bộ phận Zoom Air có chiều dài đầy đủ có lò xo.', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2022-04-01', 'nike_23.png', 2),
(24, 'Nike SB Force 58', 1, 300, 2100000, 'Là cải tiến mới nhất và tuyệt vời nhất để tung ra đường phố, Nike SB Force 58 mang đến cho bạn độ bền của đế lót giày với tính linh hoạt của một đôi giày được làm từ vải thô.', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2021-04-06', 'nike_24.png', 1),
(25, 'Nike ZoomX Vaporfly ', 1, 2000, 6600000, 'Tiếp tục sự phát triển tiếp theo của tốc độ với một đôi giày đua được sản xuất để giúp bạn theo đuổi các mục tiêu và kỷ lục mới. Nó giúp cải thiện sự thoải mái và khả năng thở với phần trên được thiết kế lại. Từ cự ly 10K đến marathon, mô hình này, giống như phiên bản trước, có đệm đáp ứng và hỗ trợ an toàn để thúc đẩy bạn hướng tới mục tiêu tốt nhất của mình.', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-04-10', 'nike_25.png', 2),
(26, 'Air Max 270 White Red', 1, 1000, 890000, 'Giày thể thao Air Max 270 White Nam || Nữ là loại giày chuyên cho những ai đam mê với phong cách thiết kế của những đôi giày chuyên dùng để tập gym\r\n\r\nCó phong cách thiết kế streetwear  trẻ trung năng động iconic này\r\n\r\nPhong Cách Thiết Kế Của Air Max 270 White\r\nTrẻ trung năng động\r\nĐường may vô cùng tỉ mỉ, tinh tế', 'Giày thể thao', 'Xám', 'Vải Canvas', '2022-04-03', 'nike_26.png', 1),
(27, 'Nike Air Force 16', 1, 2000, 699000, 'Điểm khác nhau giữa giày nike air force 1 nam nữ Tróc Sơn là bạn cần phải đi 1 thời gian để cho lớp sơn nó tróc ra rồi từ từ hưởng thụ nhé.\r\n\r\nKo nên lấy khò để khò lớp vỏ đó ra\r\nĐi 1 thời gian để cho đôi giày được  tróc ra từ từ, làm cho đôi giày có vẻ huyển bí trong mắt người khác.\r\nNike Tróc Sơn Rep 1:1 Bán Tại – 1SNEAKER\r\nĐôi giày Giày Nike REP 1:1 siêu cấp TPHCM tróc sơn phong cách, độc đáo và lạ, được nhiều bạn trẻ yêu thích, đây được xem là đôi giày chưa bao giờ là hết hot.\r\n', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2021-04-05', 'nike_27.png', 1),
(28, 'Giày Jordan 1 High Zoom Xanh Đen', 1, 300, 810000, 'JORDAN 1 HIGH ZOOM ZEN GREEN CK6637-002\r\nGiày Jordan 1 High Zoom Zen Green CK6637-002 mẫu giày sneaker hoàn toàn mới trong thời gian gần đây, mẫu giày thừa hưởng nhiều phong cách riêng của dòng sản phẩm này,\r\n\r\nLogo Swoosh đặc trưng của Nike chạy ngang qua mỗi bên, trong khi các thương hiệu khác như logo đôi cánh và logo Jumpman cũng xuất hiện.\r\nĐôi giày có thể đi học, đi chơi hay đi làm rất tiện lợi\r\nMẫu giày nằm trong bộ sưu tập giày sneaker cảu Nike Jordan cổ cao', 'Giày thể thao', 'Xanh đen', 'Vải Canvas', '2022-04-18', 'nike_28.png', 1),
(29, 'Giày Jordan 7 Màu 1 Nike Air Jordan', 1, 2000, 939000, 'Giày Nike Jordan 1 Mid SE Multicolor | Sắc màu cuộc sống đây là bản phối màu nằm trong bộ sưu tập giày sneaker Joran 1 SE với phiên bản màu độc đáo, đôi giày vừa sáng tạo, vừa cổ điển cũng như mang cho mình 1 phong cách riêng, Giày Nike Jordan 1 Mid SE Multicolor có form dáng được lấy cảm hứng từ phiên bản gốc ra mắt vào năm 1985 mà ông vua huyền thoại bóng rổ đã mang chính chiến thắng rất nhiều giải thưởng\r\n\r\nGiày Nike Jordan 1 Mid SE Multicolor Có Gì\r\nThe Air Jordan 1 Mid “Lightbulb” là sự kết hợp giữa các mảng màu trên đôi giày đặc trưng của Michael Jordan ở phiên bản Mid-top.\r\n\r\nPhối màu White / Black — Lightbulb — Team Orange\r\nPhát hành 8 tháng 4 năm 2020\r\nNhà thiết kế Peter Moore\r\nNubuck màu tím chấm các lớp phủ bàn chân trước và cổ giày\r\nKí hiệu “Swoosh” bằng da màu đen ở hai bên và chi tiết “Wings” màu đen trên cổ giày', 'Giày thể thao', 'Nhiều màu', 'Vải Canvas', '2022-04-19', 'nike_29.png', 1),
(30, 'Giày Air Jordan 1 Low SE Arctic Punch', 1, 100, 660000, 'GIÀY AIR JORDAN 1 LOW SE ARCTIC PUNCH ( JORDAN HỒNG TÍM)\r\nMẫu Giày Air Jordan 1 Low SE Arctic Punch ( Jordan Hồng Tím) này đa được ra mắt với phiên bản màu đẹp cũng như phong cách mới nhất của thị trường, với đôi giày này bạn hoàn toàn có thể mix lên cho mình những bộ đồ siêu đẹp\r\n\r\nNike Hồng Tím đẹp,\r\ngiày cổ thấp dễ mix cho mình những bộ đồ đẹp thoải mái với trang phục và phong cách riêng của ban,\r\nPhối màu Arctic Punch / Purple Pulse / White', 'Giày thể thao', 'Hồng', 'Vải Canvas', '2022-04-08', 'nike_30.png', 1),
(31, 'Air Jordan 1 Retro High OG shattered backboard', 1, 2000, 755000, 'Air Jordan 1 Retro High OG shattered backboard là 1 đôi giày giành riêng cho bộ môn bóng rổi, dùng để sử dụng trên sân khâu chuyên nghiệp đên từ nhà Nike Jordan\r\n\r\nSự thành công của Jordan được lấy cảm hứng từ từ ông vua Bóng Rổ Michael Jordan với tinh thân bất khuất không bao giờ bỏ cuộc nên cho đến thời điểm hiện tại đôi giày có 1 phong cách thiết kết của thập kỷ 80 nhưng đến giờ nó vấn là 1 iteam hót nhiều khi có tiền chưa chắc đã mua được 1 đôi jordan yêu thích và có những đôi lên đến gần chục tỷ đồng.\r\n\r\nAir Jordan 1 Retro High OG Shattered Backboard Có Gì Nổi Bật\r\nAir Jordan 1 Retro High OG shattered backboard với tông màu chủ đao là màu cam, đôi giày được đánh giá khá là cao về màu sắc Với 2 màu đen, cam được thiết kế đã tạo cho ấn phẩm này nét đặc trưng và sự thu hút không thể chối bỏ. Không chỉ được ứng dụng trong thể thao đôi giày này vẫn “chất lừ” khi kết hợp để xuống phố.\r\n\r\nShattered Backboard chỉ có 1000 đôi và được bán nhiều địa điểm khác nhau nên bạn sở hữu em nó là 1 điều cực kỳ khó khăn,.\r\n', 'Giày thể thao', 'Cam', 'Vải Canvas', '2022-04-05', 'nike_31.png', 1),
(32, 'Air Jordan 1 Retro High OG UNC Patent', 1, 1000, 899000, 'AIR JORDAN 1 RETRO HIGH OG UNC PATENT\r\nJORDAN là chàng bóng rổ nổi lên từ thập niên 80 khi anh là chàng tuyển thủ bầu rỗ ao ước có được chữ kí của thương hiệu ADIDAS thời đó , nhưng so với cái tên Michael Jordan thời điểm đó và dàn tuyển thủ mà ADIDAS đã kí trước đó thì Jordan là cái tên ADIDAS không chọn và Nike đã liều lĩnh kí vào bảng hợp đồng đó và bây giờ đây thương hiệu “JORDAN BRAND ” đã làm nên lịch sử .', 'Giày thể thao', 'Xanh biển', 'Vải Canvas', '2016-04-06', 'nike_32.png', 1),
(33, 'Giày Nike M2K Tekno White Grey', 1, 2000, 799000, 'GIÀY NIKE M2K TEKNO WHITE GREY\r\nGiày nike 2MK tekno là sự cải tiến của những gì tốt nhất trong Nike Air Monarch DNA.\r\n\r\nCho đến tận ngày nay, nhãn giày Nike luôn là 1 trong những thương hiệu nổi tiếng toàn thế giới. Những sản phẩm truyền thống, có lịch sự phát triển lâu đời. Mỗi sản phẩm được thiết kế nên, được ra mắt trên thị trường đều ẩn chứa những câu chuyện li kì, những ý nghĩa độc đáo riêng.', 'Giày thể thao', 'Trắng ', 'Vải Canvas', '2022-04-17', 'nike_33.png', 1),
(34, 'Giày Nike AIR FORCE 1 ĐEN FULL', 1, 300, 890000, 'IKE AIR FORCE 1 ĐEN FULL NAM, NỮ đôi giày không bao giờ là lỗi thời cả, đôi giày luôn giày được sự quan tâm của nhiều bạn nam và nữ, đôi giày đơn giản, dễ phối đồ, và luôn là mẫu giày cho mọi sự kiện độc đáo\r\n\r\nNIKE AIR FORCE 1 ĐEN FULL NAM, NỮ Rep 1:1\r\nKhông phải phủ định với nhiều phiên bản giày AF 1 của Nike CHO RA khá là nhiều phiên bản phối màu khác nhau đã tạo nên được sự đồng điệu và đa giạn màu sắc cảu đôi giày\r\n\r\nNIKE AIR FORCE 1 ĐEN FULL này dễ phối đồ cho các tín đồ yêu giày\r\nĐôi giày có tông màu phù hợp với đại đa số người như sủ dụng em nó để đi học, đi chơi hay đi làm rất tiện lợi\r\nLuôn là mẫu giày nằm trong top bán chạy nhất mọi thời đại như mẫu giày Aff Full trắng.\r\nHàng đẹp có sẵn nên bạn không cần phải chờ hay order nếu cần gấp có thể giao nhanh trong ngày tại nội thành\r\nVới phiên bản độc đáo NIKE AIR FORCE 1 ĐEN FULL NAM, NỮ này thì shop giày sneaker bọn mình còn nhiều mẫu giày độc đáo hơn nữa, bạn có thể xem thêm những đôi giày của mình tại 1Sneaker nhé.', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-05-02', 'nike_34.png', 1),
(35, 'Giày Nike Air Force 1 iD GUCCI', 1, 299, 699000, 'Giày Nike Air Force REP 1:1 – Được ra mắt vào năm 1982 Nike Air Force 1 được thiết kế cho các cầu thủ. Nike air force 1 là đôi giày đã thu hút được các bạn nữ trên toàn Hà Nội và Sài Gòn lúc bấy giờ.\r\n\r\nNike Air Force 1 ID GUCCI Rep 1 1 AF1 Gucci\r\nNgười ta nói đến dòng sản phẩm đến từ Nike AF 1 Thì sẽ nhắc đến những đôi giày chất lượng êm ái và đậm chất phong cách sneaker đường phố\r\nMẫu mã phong phú, được nhiều bạn trẻ yêu thích và lựa chọn làm mẫu giày hàng ngày\r\nLựa chọn làm mẫu giày xinh xắm và dễ đi phối đồ là sự lựa chọn của mọi người.\r\nAF 1 năm nay đã tung ra những mẫu Sneaker phong cách có tên là Nike Air Force 1 Low ID. nhanh chóng được những người yêu thích sneaker lăn lùng với phiên bản đặc biệt này,', 'Giày thể thao', 'Nhiều màu', 'Vải Canvas', '2022-05-11', 'nike_35.png', 1),
(36, 'Giày Nike Air Force 1 Low Just', 1, 200, 690000, 'Giày Nike nữ rep 1 1 luôn tinh tế trong từng đường nét, thể hiện sự năng động và trẻ trung, có những điểm nhấn đặc sắc và nổi bật.\r\n\r\n', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2022-05-02', 'nike_36.png', 1),
(37, 'Giày Nike AIR FORCE 1 LOW', 1, 300, 700000, 'AIR FORCE 1 LOW LV8 GS ‘DOUBLE SWOOSH’ NIKE HỒNG BABY\r\nMẫu giày Nike đẹp với cái tên AIR FORCE 1 LOW LV8 GS ‘DOUBLE SWOOSH’ đang làm mưa làm gió trên cộng đồng trong thời gian gần đây\r\n\r\nĐôi giày phục vụ tốt việc đi học, đi chơi đi làm cho các bạn nữ\r\nPhối màu dễ thương cá tính và đẹp cho từng bạn.', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-05-20', 'nike_37.png', 1),
(38, 'Giày Nike Air Force 1 Low Tear', 1, 300, 567000, 'Nike Air Force 1 All-White GIÀY NIKE XÉ REP 1:1\r\nAir Force 1 Tear Away Có Gì Đặc Biệt mà các tin đồ lại yêu thích đôi gìay lại đến thế, mẫu giày Nike Air Force 1 All-White này có phong cách thiết kế vô cùng độc đáo đã làm nên 1 phong cách trào lưu có 1 không 2.\r\n\r\nHãy cùng xem đôi giày Nike Air Force 1 All-White Nike tear away này có gì đặc biệt đến thế nhé.', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2019-05-07', 'nike_38.png', 2),
(39, 'Adidas EQT Bask trắng đen phản quang', 3, 100, 890000, 'ADIDAS EQT BASK ADV TRẮNG ĐEN PHẢN QUANG\r\n', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2019-05-21', 'adidas_39.png', 2),
(40, 'Giày Adidas Alaphabounce Beyond', 3, 100, 890000, 'Giày Adidas Alaphabounce Beyond ghi vàng có phối màu cực kì tinh tế, đôi với màu sắc của dòng sản phẩm Ggiày Adidas Alphabounce luôn làm cho bạn phải yêu thích bởi tính đa dụng và luôn có những màu sắc đẹp và đặt trưng nhất của dòng sản phẩm đó.', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2020-05-05', 'adidas_40.png', 1),
(41, 'Giày Adidas Alphabounce Instinct', 3, 500, 699000, 'ALPHABOUNCE INSTINCT M CORE BLACK 1:1 là mẫu giày adidas alphabounce instinct với thiết kế thể thao phong cách, là mẫu giày adidas nam dưới 1 triệu có thể sử dụng với những hoạt động như tập gym, chạy bộ, với đế nhẹ và vải thiết kế ôm sát vào chân', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2022-04-06', 'adidas_40.png', 2),
(42, 'Giày Adidas Alphabounce Instinct', 3, 200, 789000, 'ALPHABOUNCE INSTINCT M CORE BLACK 1:1 là mẫu giày adidas alphabounce instinct với thiết kế thể thao phong cách, là mẫu giày adidas nam dưới 1 triệu có thể sử dụng với những hoạt động như tập gym, chạy bộ, với đế nhẹ và vải thiết kế ôm sát vào chân', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2022-04-18', 'adidas_42.png', 2),
(43, 'Giày Adidas Alphabounce Instinct', 3, 100, 989000, 'Giày Adidas Alphabounce Instinct M Xám Cam thuộc dòng giày adidas alphabounce là đôi giày sneaker chạy bộ đẹp, mẫu sneaker luôn giành được sự ưu ái của nhà Adiddas chuyên giày chạy bộ, mẫu sneaker luôn là sự lựa chọn hàng đầu của mọi khách hàng.\r\n\r\nĐôi giày phù hợp với nhiều người, đi học đi chơi đi làm rất tiện lợi\r\nHàng có sẵn tại shop với mức giá tốt\r\nNhận hàng kiểm tra thanh toán online toàn quốc\r\nĐội ngũ nhân viên hỗ trợ tư vấn 24/7 giúp khách hàng tìm được mẫu mã phù hợp,', 'Giày thể thao', 'Cam', 'Vải Canvas', '2020-05-20', 'adidas_43.png', 2),
(44, 'Giày Adidas Alphabounce Instinct M', 3, 300, 699000, 'Giày Adidas Alphabounce Instinct M Xanh Xám đôi giày chạy bộ nằm trong bộ sưu tập giày của giày adidas alphabounce like authenic đẹp và phong cách, mẫu giày hot đang làm mưa làm gió trên thị trường với mức giá ưu đãi và hợp lý, mẫu sneaker là dòng giày adidas nam thời trang và là sự lựa chọn hàng đầu cho  những ai yêu thích chạy bộ,\r\n\r\nHàng có sẵn tại shop với mức giá ưu đãi.\r\nNhận hàng kiểm tra thanh toán\r\nMẫu sneaker chuẩn phong cách\r\nMàu xanh xám tinh tế mix mọi bộ đồ đều rất đẹp\r\nGIÀY phù hợp với học sinh, sinh viên, người đi học, đi chơi, đi làm, đặc biệt chạy bộ tập gym hỗ trợ lực cho người chạy bộ,', 'Giày thể thao', 'Xám xanh', 'Vải Canvas', '2022-04-21', 'adidas_44.png', 2),
(45, 'Giày Adidas Chạy Bộ Adidas Alphabounce', 3, 200, 1500000, 'ADIDAS ALPHABOUNCE INSTINCT M WHITE RED BLUE nằm trong bộ sưu tập của giày adidas alphabounce và đây cũng là một trong dòng giày adidas nam bán chạy nhất trong những năm gần đây\r\n\r\nMức giá hợp lý cho mẫu giày rep 1:1 chuẩn thị trường\r\nMàu đẹp, hỗ trợ tập gym, chạy bộ và các hoạt động thể thao\r\nĐi học, đi chơi, đi làm', 'Giày thể thao', 'Trắng đỏ', 'Vải Canvas', '2020-03-03', 'adidas_45.png', 2),
(46, 'Giày Adidas EQT Bask ADV đen trắng', 3, 2000, 699000, 'GIÀY ADIDAS EQT BASK ADV ĐEN TRẮNG PHẢN QUANG\r\n', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-04-19', 'adidas_46.png', 2),
(47, 'Giày Vans Caro đẹp hàng Vans Slip-On', 2, 300, 678000, 'Giày Vans OG Slip on Checkerboard là mẫu giày được yêu thích trong bộ sưu tập giày Vans của mọi người,\r\n\r\nVans OG Slip on Checkerboard mẫu giày Vans có thiết kế hệ caro chỉnh chu\r\nVans Slip-On sọc caro tự hào được trở thành “cameo” danh dự trong bộ phim Fast Times đình đám lúc bấy giờ\r\nVans Classic Slip-On Checkerboard là đôi giày thuộc hàng kinh điển trong giới sneaker', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2020-03-03', 'vans_47.png', 2),
(48, 'Vans Style 36 Sunflower', 2, 300, 699000, 'Đôi Giày Vans Style 36 Sunflower Nam || Nữ 1 trong những đôi giày bạn nhìn vào là có thể thấy được mùa hè với nắng vàng cũng nhưng 1 vài thông tin về sản phẩm rất là hót, Thị trường giày của Vans chính hãng ở Việt Nam không phải lúc nào bạn cũng có sản phẩm để bán, điều đã làm nên thương hiệu vì ko có giày để bán cho những người yêu thích Vans.\r\n\r\nVan.s Style 36 Sunflower vàng là sản phẩm bán chạy, chất lượng nhất của thương hiệu này, luôn cháy hàng ngay sau khi lên kệ.\r\n\r\nVới chất liệu da lộn mài mix vải, cùng với phối màu vàng – trắng siêu dễ phối dù là vest lịch lãm, váy bánh bèo hay sexy cho đến những bộ đồng phục nghiêm túc, đều giúp bạn nổi bật hơn hết.\r\n\r\nStyle 36 Sunflowe Có Gì Đặc Biệt.\r\nPhong các trẻ trung\r\nHợp trời trang\r\nMẫu mã đa dạng\r\nCác bạn trẻ yêu thích đặc biệt là nhóm nhạc big bang rất thích những đôi giày đơn giản kiểu như thế này\r\nĐường may tỷ mỉ\r\nSự đơn giản tinh gọn.\r\nSự thoải mái khi vận động\r\nTiện lợi để đi khắp mọi nơi\r\nVans: Biểu tượng văn hóa\r\nGiày thể thao Nam Nữ màu Vàng sọc trắng. Phong cách streetwear trẻ trung năng động gắn liền với dòng giày iconic này. Hàng mới về Full box. Giao hàng toàn quốc. Đổi trả dễ dàng khi mua Giày Sneakers Style 36 Classic  Nam Nữ màu Vàng Trainers  Rubber Unisex in Yellow.', 'Giày thể thao', 'Cam', 'Vải Canvas', '2022-04-18', 'vans_48.png', 2),
(49, 'Vans 36 Retro Sport Biking Red', 2, 300, 890000, 'Đôi gìay Style 36 Retro Sport. 3 ver Đỏ / Xanh Navy/ Vàng với bộ 3 sản phẩm được mọi người yêu thích, có thể nói đây là 1 trong những đơn giản nhiều màu được Vans tung ra nhưng lại rất nhiều bạn trẻ yêu thích.\r\n\r\nRetro Sport Style 36 là bước ngoặt mới mà hãng muốn mang đến cho các tín đồ thời trang – những người đam mê phong cách streetwear đường phố bởi những chi tiết được biến tấu trên đôi giày vô cùng đặc biệt.\r\n\r\nCó ga màu trắng chủ đạo, có thể nói Vans đã làm nổi bật thêm những sản phẩm của mình tạo ra, đây là 1 trong những đôi giày có sự kết hợp ăn ý nhất mà được người dùng đánh giá cao về tính thẩm mỹ của nó mang lại\r\n\r\nGiày Style 36 Retro Sport Biking Red CÓ Gì Đặc Biệt.\r\nSự đơn giản tinh gọn.\r\nSự thoải mái khi vận động\r\nTiện lợi để đi khắp mọi nơi\r\nVans: Biểu tượng văn hóa\r\nThiết kể thể thao, kiểu hàng mạnh mẽ\r\nĐộ bền cao đã được chứng minh từ trước đến giờ.\r\nĐế cao su bền và chắc\r\nCó độ bám đường cao\r\nĐường may tỷ mỉ rất là sắc sao khi nói về những đôi giày kiểu như thế này\r\nGa màu chủ đạo có thể nói đây là 1 trong những ga màu hót nhất từ trước đến nay bạn có thể tham khảo thêm những mẫu hình ảnh mà Vans tạo nên những sắc màu trong cuộc sống là như thế nào nhé.', 'Giày thể thao', 'Đỏ', 'Vải Canvas', '2020-03-03', 'vans_49.png', 2),
(50, 'Vans Style 36 Marshmallow Jolly Green', 2, 100, 1200000, 'Style 36 được biết đến như giày skate nguyên bản của Vans, Vans Old Skool Style 36 được mô phỏng lại theo phối màu ‘Marshmallow’. Sự kết hợp giữa chất liệu canvas và da lộn trên phần upper gợi lại chi tiết ban đầu của phiên bản năm 1977.\r\n\r\nỞ Việt Nam, những đôi giày Vans bạn có thể thấy đây là 1 trong những đôi giày Vans mà đã trải qua không biết bao nhiêu thế hệ học sinh, sinh viên đểu biết đến những đôi giày mang thương hiệu này, những đôi giày Sneaker phá cách, cá tính , vẫn là 1 trong những tâm điểm được mọi người yêu thích, đó cũng chính là vì sao Vans lại là 1 trong những thương hiệu phổ biến Tại Việt Nam và trên toàn thế giới như hiện nay.\r\n\r\nƯu Điểm Của Style 36 “Marshmallow” Jolly Green\r\nPhong các trẻ trung\r\nHợp trời trang\r\nMẫu mã đa dạng\r\nCác bạn trẻ yêu thích đặc biệt là nhóm nhạc big bang rất thích những đôi giày đơn giản kiểu như thế này\r\nĐường may tỷ mỉ\r\nCác đường chỉ may thủ công vô cùng tỉ mỉ, từng đường line vô cùng chắc chắn và dứt khoát. Cụm từ “VANS of The Wall” được in trên miếng tag gắn vào sau gót giày kèm theo là tag vải in chữ Vans sắc xảo. Đây cùng là một trong những điểm nhận diện để bạn có thể phân biệt với các loại giày fake kém chất lượng.\r\n\r\nPhần mũ, gót giày và lót dây được làm từ chất liệu da lộn siêu mềm mịn cùng đế giày cao su đặc trưng, được nâng cao hơn đảm bảo độ vững chắc khi di chuyển hay hoạt động mạnh. Đây cũng chính là một điểm cộng lớn mà người ta thường hay nhắc đến Vans Retro Sport Style 36 mỗi khi bàn về chất lượng.\r\n\r\nTrong thiết kế lần này, điểm ấn tượng mà nhất định phải kể đến đó chính là chi tiết lượn sóng bên hông thân giày, được trang bị bằng một dải vải da trơn phối cùng những gam màu đậm, nhạt lạ mắt khác biệt hơn so với những đôi Vans Old Skool trước đây.', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-04-18', 'vans_50.png', 1),
(51, 'Vans Old Skool Checkerboard', 2, 100, 1500000, 'Tinh tế, trẻ trung, năng động, có thể nói đến những đôi giày Sneaker của Vans với bộ Vans Old Skool Checkerboard Nam Nữ\r\n\r\nVới mẫu giày có sọc đen trắng và carô này có thể là 1 trong những mẫu giày được các bạn trẻ yêu đón nhận và yêu thích, Vans đã khẳng định được vị thế của mình trong từng đường nét sản phẩm, đánh giá chung về đôi giày này khá là ok.\r\n\r\nGiày Vans Old Skool Checkerboard Nam | Nữ Và Phong Các Tiêt Kế.\r\nĐường may vô cùng tỉ mỉ, tinh tế\r\nTrạng thái : Còn hàng\r\nTình trạng : Hàng mới 100%\r\nGiao hàng & Thanh toán : Giao hàng trên toàn quốc và thanh toán khi nhận hàng\r\nGiày Vans Old Skool True White (Trắng): Phù hợp: nam nữ, đi học, đi làm, hoạt động thể thao.\r\n', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2020-03-03', 'vans_51.png', 1),
(52, 'Van Old Skool True White', 2, 125, 699000, 'GIÀY VAN OLD SKOOL TRUE WHITE HÀNG SIÊU CẤP\r\nCó thể nói Giày Van Old Skool True White Nếu ai đang muon muốn mua 1 đôi giày để Custom  đều có thể thấy được đây là 1 trong những đôi giày phù hợp với ban, Hoặc bạn yêu thích những đôi giày được những người nổi tiển chuyên dùng để Custom  thì dây sẽ là 1 đôi không thể bỏ qua\r\n\r\nLà phiên bản được Van.s sử dụng chủ yếu trong các sự kiện Custom giày, được các fan hâm mộ của hãng giày vẽ ra rất nhiều kiểu dáng khác nhau và luôn được Van.s ủng hộ thậm chí là tài trợ để có những phiên bản Custom đặc sắc.', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-04-21', 'vans_52.png', 1),
(53, 'Converse Trái Tim cổ cao màu đen', 4, 100, 2000000, 'GIÀY THỂ THAO CONVERSE CHUCK TAYLOR ALL-STAR 70S CỔ CAO REPLICA 1:1\r\nVới những ai yêu thích những đôi giày Sneaker rẻ của Converse sẽ không thé không bỏ qua 1 đôi giày CV Tim đen cổ cao này, vẫn là 1 phong cách cổ điển mang cho mình đập chất của tự tao nhã, với dòng CV 1970 CDG cổ cao Đã có 2 màu, bạn có thể xem thêm giày converse khuyến mãi tại 1Sneaker.', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-04-06', 'converse_53.png', 2),
(54, 'Converse trắng kem cổ cao', 4, 300, 599000, 'CONVERSE TRẮNG CỔ CAO (1970S) REP 1:1\r\nGiày Converse vẫy là 1 trong những xu thế mà các bạn trẻ thích và mong muốn sở hữu cho mình 1 đôi giày phù hợp với mình tạo ra 1 điểm nhấn trong phong cách thiết kế.\r\n\r\nFullboxCV 1970 cổ cao màu đen. Phù hợp: nam nữ, đi học, đi làm, hoạt động thể thao. Size: 36-44. Chất liệu: Canvas. Giao hàng toàn quốc.', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2020-03-03', 'converse_54.png', 1),
(55, 'Converse Tim trắng cổ thấp', 4, 100, 890000, 'Lại thêm 1 đôi giày Converse cổ thấp màu trắng huyền thoại, vẫn là 1 dòng sản phẩm mà các bạn trẻ muốn hướng đến, có thể nói đây là 1 đôi giày đối với các bạn luô yêu quý các dòng sản phẩm đến từ Giày Converse với thiết kế cổ điển của 1 đôi giày thể thao mà không có đơn vị nào có thể nhâm lẫn được\r\n\r\nVới những bạn đang đam mê những đôi giày Sneaker HCM kiểu như thế này thì có thể thêm 1 đôi giày của mình vao tủ của mình, để làm phong phú bộ sưu tập riêng của mình,\r\n\r\nThiết Kế Đơn Giản Đến Từ Đôi Giày CV Trắng Tim Cổ Thấp.\r\nLớp lót dày tạo cảm giác êm ái khi vận động.\r\nVải dày dặn, cứng form hơn.\r\nDây giày dày hơn, cùng màu với phần đế.\r\nTem gót đen 1st-tring – đặc trưng riêng của dòng 1970s có thêm 1 cái tim ở mỗi bên giày.\r\nVề form dáng, Converse 1970s có form to, bằng size với dòng CDG', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-04-18', 'converse_55.png', 2),
(56, 'Converse Trái Tim cổ thấp', 4, 2000, 699000, 'CONVERSE TRÁI TIM CỔ THẤP REP 1:1\r\nConverse Trái Tim cổ thấp Ra đời từ năm 2013 cho đến tận bây giờ vẫn còn chưa hết hót, có thể nói sức hút của những đôi giành Sneaker phong các cổ điển và trường tồn bởi những con mắt tinh tế, đặc biệt những cô nàng không thế không có nó trong tủ giày của mình.\r\n\r\nVới sự kết hợp hoàn hảo giữa COMME des GARÇONS và Converse 1970, làm cho người yêu thích nhũng đôi giày Sneaker càng thêm bị cuốn hút và săn lùng nó 1 cách ráo riết trên thị trường.\r\n\r\nGiày Converse Chuck Taylor All-Star 70s Ox Comme Des Garcons PLAY Black (1970s CDG)\r\nKết Hợp Thời Trang Converse Trái Tim Cổ Thấp Rep 1:1\r\nVới xu hướng cổ điển + thêm 1 chút nhẹ nhàng chút ngọt ngào của tình yêu không quá khó cho các bạn nữ kết hợp 1 đôi giày sneaker giảm giá này với 1 váy thật là xinh xắn và chụp 1 vài kiểu ảnh,\r\nMẫu giày phù hợp với các bạn học sinh, sinh viên, người đi làm, người thường xuyên tập thể dục. nhìn rất là xinh\r\nNếu bạn có 1 gu thời trang thi không quá khó để tạo và lựa chọn cho mình 1 gu thời trang thật là đẹp phải ko nào?\r\nChất Liệu Giày Và 1 Số Ưu Điểm\r\nChất liệu của bản 1970S vẫn là vải canvas, tuy nhiên lớp đế giày được gia công dày dặn và chắc chắn hơn so với Converse Classic. Ngoài ra logo phía gót giày là màu đen chữ trắng thay vì chữ đen logo trắng như ở bản classic. Điểm khác biệt ở phiên bản 2018 này là logo được làm bằng da và được khâu vào cổ giày, thay vì logo in và được dán vào cổ giày như phiên bản cũ. Ngoài ra đế giày của bản 2018 cũng cứng cáp và nặng hơn phiên bản cũ.\r\n\r\nCó thể nói Comme des Garçons Play x Chuck 70 Low ‘Black White’  là 1 trong những mẫu giày giày converse xịn được các bạn tre ưu chuộng, với những đôi chân nhỏ và xinh xắn chắc chắn đi đôi này sẽ rất là êm.\r\n\r\n', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-04-10', 'converse_56.png', 1),
(57, 'CV Chuck Taylor All Star High Top Black', 4, 300, 890000, 'GIÀY THỂ THAO CV CHUCK TAYLOR ALL STAR HIGH TOP BLACK CONVERSE CỔ CAO\r\nGiày Converse Chuck Taylor All Star High Top Black (Classic) là 1 trong những mẫu thiết kế trẻ trung, năng động, và cực kì đơn giản, có thể nói đây là 1 trong những mẫu thiết kết mà giới trẻ ở Việt Nam mình rất là thích, và mọi người ai cũng muốn có 1 bộ sưu tập riêng cho mình ở trong tủ giày của mình phải không? Đối với con gái khi mang 1 đôi giày sneaker mới nhất như thế này sẽ làm bật lên sự tao nhã đơn giản của 1 đôi giày Converse.\r\n\r\nCV sinh ra với tiêu chí trời trang đơn giản, với phương thức cổ điển (Classic ) CV đã được giới trẻ đón nhận hơn 1 thập kỉ nay. nó phù hợp với mọi đối tượng, độ tuổi cũng như tầng lớp, đặc biệt không bao giờ là lỗi thời khi bạn mang 1 đôi CV Converse Chuck Taylor All Star High Top Black 1998\r\n\r\n', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-04-06', 'converse_57.png', 1),
(58, 'Xvessel Black Nam Nữ style rách', 4, 2000, 939000, 'Những năm gần đây thị trường sneaker xuất hiện thêm nhiều mẫu giày sneaker mới có tên thương hiệu là Xvessel, đôi giày có ý nghĩa về tâm lý rất là lớn, bạn làm được tôi cũng làm được, thể hiện qua sự động lực khi nhà sán lập đôi giày này công bố.\r\n\r\nXvessel có nghĩa là con thuyền, xVESSEL Sneaker Peace by Piece đôi giày của Ngô Kiến Hào\r\n\r\nXvessel Black Nam Nữ Style Rách\r\nXvessel Black Nam Nữ style rách mẫu giày sneaker hot trong năm được các bạn yêu thích giành tặng cho các bạn nữ\r\n\r\nXvessel Black Nam Nữ style rách phù hợp đi học, đi chơi đi làm rất tiện lợi\r\nMẫu giày đang hot trong năm và được các bạn trẻ săn đón rất là nhiều trong thời gian vừa qua.', 'Giày thể thao', 'Trắng đen', 'Vải Canvas', '2022-04-19', 'converse_58.png', 1),
(59, 'Xvessel G.O.P. Slip On White Đạp gót', 4, 300, 890000, 'XVESSEL G.O.P. SLIP ON WHITE ĐẠP GÓT TRẮNG\r\nMẫu giày Xvessel G.O.P. Slip On White Đạp gót Trắng được ra mắt vào năm 2018 cho tới này cũng được vài năm rồi, nhưng có thể nói đây là 1 trong những cơn sốt của giới yêu thích giày sneaker,\r\n\r\nMẫu mã mới, đa giạng và luôn có những phiên bản giới hạn là cho các Fan phải đốn tim\r\nMẫu giày nói lên ý chí của 1 người, không gì là không thể của CEO hãng giày nổi tiếng trên\r\nLà 1 trong những phiên bản đẹp, đôi giày đạp gót này có bản phối màu trắng kem cực xịn xò hãy cùng 1Sneaker xem đôi giày có gì thêm nhé,', 'Giày thể thao', 'Trắng', 'Vải Canvas', '2022-04-18', 'converse_59.png', 1),
(60, 'Xvessel Low For Yohji Yamamoto All Black', 4, 2000, 755000, 'XVESSEL G.O.P LOW FOR YOHJI YAMAMOTO ALL BLACK\r\nGiày XVESSEL G.O.P. Lows for Yohji Yamamoto All mẫu giày phong cách full đen đến từ nhà  Van Ness Wu người Đài Loan\r\n\r\nXuất xứ: Châu Á\r\nKiểu dáng: Giày thể thao\r\nChất liệu: Vải/Cao su đế gỗ kết hợp với gỗ và cao su', 'Giày thể thao', 'Đen', 'Vải Canvas', '2022-04-10', 'converse_60.png', 1),
(61, 'Giày Balenciaga Cam Triple S Clear Sole', 5, 100, 1500000, 'Giày Balenciaga Triple S chất lượng Clear Sole “Orange/White/Grey” – Màn khai pháo đã mang giày Balenciaga mới nhất – một thương hiệu thời trang cao cấp lần đầu tiên đặt chân lên vùng đất Sneaker màu mỡ, cũng là một trong số những phát hành khơi mào cho trào lưu Chunky Sneaker (giày “đồ sộ”) lên ngôi. Nếu muốn đem vào tủ giày thêm những sự lựa chọn phá cách và đầy táo bạo thì Triple S hẳn sẽ là cái tên mà bạn khó lòng có thể bỏ qua.\r\n\r\nBalenciaga Triple S Clear Sole Orange Grey Black\r\nPhía trong lồng ghép với nhiều khung da được đánh dấu bằng những đường kẻ khác màu tùy ý, và trong cùng là lớp vải mesh bao bọc trực tiếp lấy bàn chân. Dây giày Balenciaga có đế khí Triple S độc lạ thống nhất với thiết kế “sọc dưa”, được đan xen giữa các tầng upper, nên nếu bạn muốn thắt một kiểu dây khác so với bản gốc từ hãng, bạn sẽ cần đầu tư rất nghiêm túc và cần nhiều thời gian chỉnh sửa.\r\n\r\nNếu bạn đang có nhu cầu mua cho bạn thân mình một đôi giày Balenciaga Cam Triple S Clear Sole Orange Grey Black thì bạn có thể đến với cửa hàng 1sneaker để được mang thử và trải nghiệm nhé.', 'Giày thể thao', 'Nhiều màu', 'Vải Canvas', '2022-04-06', 'balenciaga_61.png', 1),
(62, 'Giày Thể Thao Balenciaga Triple S Trainer', 5, 299, 2000000, 'Giày Balenciaga Triple S đẹp Trainer Grey 2018 khi đập vào mắt bạn là 1 thiết kế hầm hố có có thiết kế khá hiếm hoi về độ đồ sộ của em nó, Được xem là 1 trong những mẫu giày sang chảnh nhất cho tới thời điểm hiện tại bây giờ, Balenciaga Triple S Trainer vẫn là dòng được yêu thích nhiều nhất cũng như độ hót của nó.\r\n\r\nBalenciaga Triple S Trainer Grey 2018\r\nĐôi giày Balenciaga vừa hỗ trợ tốt trên lộ trình chạy bộ hằng ngày, vừa là điểm nhấn cá tính trong set đồ Streetstyle của bạn. Chi tiết các mảnh ghép da lộn màu sắc hài hòa cũng được nhấn nhá khá tinh tế ở vị trí hông giày quen thuộc, màu xanh lá cây, nổi bật trên nền vàng nhạt tạo nên tổng thể hài hòa trẻ trung cho những ai sở hữu mẫu giày này\r\n\r\nBalenciaga Triple S Trainer Grey 2018 Có Ưu Điểm Gì?\r\nChất liệu cao cấp rất mềm mại và êm ái, tạo cảm giác thoải mái cho từng bước đi.\r\nKiểu dáng tinh tế, hợp xu hướng được thiết kế trẻ trung, là một thiết kế dành bạn, giày chú trọng phom dáng với từng đường, làm toát lên vẻ trẻ trung, thanh lịch. Đường may tỉ mỉ và đường keo dán chắc chắn và bền bỉ trong thời gian dài.\r\nSự kết hợp hoàn hảo với những bộ trang phục đủ mọi phong cách.\r\nThiết kế đột phá.\r\nMột đôi giày ra đời đã phá vỡ những tiêu chuẩn về thời trang hiện nay.\r\nPhần đế cao, uốn lượn hơn hẳn để bạn ăn gian thêm vài centimet\r\nPha trộn những gam màu vintage và nhiều chất liệu vải khác nhau.\r\nTrên thân, gót hay đế giày cũng đều được thêu và khắc tên thương hiệu, tạo sự đẳng cấp.\r\nNếu bạn đang có nhu cầu mua cho bạn thân mình một đôi Giày Thể Thao Balenciaga Triple S Trainer Grey 2018, thì bạn có thể đến với cửa hàng 1sneaker để được mang thử và trải nghiệm nhé.', 'Giày thể thao', 'Xám', 'Vải Canvas', '2022-04-21', 'balenciaga_62.png', 1),
(66, 'abc', 1, 0, 0, '', '', '', 'Vải xịn', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idUser` int(11) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `idQuyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idUser`, `tendangnhap`, `matkhau`, `idQuyen`) VALUES
(1, 'dinhtuannam', '123456', 2),
(2, 'quocdat', '123456', 2),
(3, 'vanhoat', '111222', 3),
(4, 'admin', '123456', 1),
(9, 'thanh', 'thanh123', 3),
(8, 'abc1', '123123', 3),
(14, 'test 7', '111222', 3),
(12, 'hung123', '123456', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idloai` int(11) NOT NULL,
  `tentheloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `hienthi` int(11) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idloai`, `tentheloai`, `hienthi`, `thutu`) VALUES
(1, 'nike', 1, 1),
(2, 'vans', 1, 2),
(3, 'adidas', 1, 3),
(4, 'converse', 1, 4),
(5, 'balenciaga', 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `idTrangthai` int(11) NOT NULL,
  `tenTrangthai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`idDH`,`idSP`,`Size`);

--
-- Chỉ mục cho bảng `chungloai`
--
ALTER TABLE `chungloai`
  ADD PRIMARY KEY (`idCL`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madanhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`),
  ADD KEY `idKH` (`idKH`);

--
-- Chỉ mục cho bảng `gia`
--
ALTER TABLE `gia`
  ADD PRIMARY KEY (`idGia`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`idQuyen`);

--
-- Chỉ mục cho bảng `q_dm`
--
ALTER TABLE `q_dm`
  ADD PRIMARY KEY (`idQuyen`,`madanhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `idloai` (`idloai`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idloai`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`idTrangthai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
