-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 02:33 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `shopgiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `idDH` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  PRIMARY KEY (`idDH`),
  KEY `idSP` (`idSP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietdonhang`
--


-- --------------------------------------------------------

--
-- Table structure for table `chungloai`
--

CREATE TABLE IF NOT EXISTS `chungloai` (
  `idCL` int(11) NOT NULL,
  `tenCL` varchar(20) CHARACTER SET utf8 NOT NULL,
  `hienthi` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`idCL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chungloai`
--


-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `madanhmuc` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(20) NOT NULL,
  PRIMARY KEY (`madanhmuc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madanhmuc`, `tendanhmuc`) VALUES
(1, 'KhanhHang'),
(2, 'SanPham'),
(3, 'HoaDon'),
(4, 'CTHD'),
(5, 'TinhTrang'),
(6, 'TheLoai'),
(7, 'NhanVien');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `idDH` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `ngaydathang` date NOT NULL,
  `ngaygiaohang` date NOT NULL,
  `tennguoinhan` varchar(20) CHARACTER SET utf8 NOT NULL,
  `diachigiaohang` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` varchar(10) CHARACTER SET utf8 NOT NULL,
  `ghichu` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idDH`),
  KEY `idKH` (`idKH`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donhang`
--


-- --------------------------------------------------------

--
-- Table structure for table `gia`
--

CREATE TABLE IF NOT EXISTS `gia` (
  `idGia` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  PRIMARY KEY (`idGia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gia`
--


-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `idKH` int(11) NOT NULL,
  `hoten` varchar(20) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `KHxau` int(11) NOT NULL,
  PRIMARY KEY (`idKH`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--


-- --------------------------------------------------------

--
-- Table structure for table `menuql`
--

CREATE TABLE IF NOT EXISTS `menuql` (
  `idMenu` int(11) NOT NULL,
  `tenMenu` varchar(20) CHARACTER SET utf8 NOT NULL,
  `link` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hinh` varchar(20) CHARACTER SET utf8 NOT NULL,
  `hienthi` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuql`
--


-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `idUser` int(11) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idUser`, `hoten`, `sdt`, `email`, `diachi`) VALUES
(1, 'nguyen van a', 583320861, 'vana@gmail.com', '123 an duong vuong');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `TenQuyen` varchar(10) NOT NULL,
  `idQuyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`TenQuyen`, `idQuyen`) VALUES
('Admin', 1),
('Nhan Vien', 2);

-- --------------------------------------------------------

--
-- Table structure for table `q_dm`
--

CREATE TABLE IF NOT EXISTS `q_dm` (
  `idQuyen` int(11) NOT NULL,
  `madanhmuc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_dm`
--

INSERT INTO `q_dm` (`idQuyen`, `madanhmuc`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(2, 2),
(2, 3),
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `idSP` int(11) NOT NULL,
  `ten` varchar(20) CHARACTER SET utf8 NOT NULL,
  `idloai` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` varchar(500) CHARACTER SET utf8 NOT NULL,
  `ngayphathanh` date NOT NULL,
  `solanxem` int(11) NOT NULL,
  `solanmua` int(11) NOT NULL,
  `hinhanh` varchar(20) CHARACTER SET utf8 NOT NULL,
  `hienthi` int(11) NOT NULL,
  PRIMARY KEY (`idSP`),
  KEY `idloai` (`idloai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `ten`, `idloai`, `soluong`, `gia`, `mota`, `ngayphathanh`, `solanxem`, `solanmua`, `hinhanh`, `hienthi`) VALUES
(1, 'AIR FORCE 1', 1, 200, 3200000, 'Nike Air Force 1 Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng', '2018-03-21', 12, 1000, 'nike_1.jgp', 1),
(2, 'AIR FORCE 1 LV8', 1, 200, 3600000, 'AIR FORCE 1 LV8', '2019-03-21', 11, 1000, 'nike_2.jgp', 1),
(3, 'Giày Vans Style 36 C', 2, 200, 1850000, 'THÔNG TIN SẢN PHẨM Thương hiệu Vans Xuất xứ thương hiệu Mỹ Sản xuất tại Việt Nam ...', '2020-03-18', 100, 2000, 'vans_1.jgp', 1),
(4, 'AIR FORCE 3', 1, 200, 3600000, 'Nike Air Force 3 Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng', '2020-03-23', 100, 1000, 'nike_3.jgp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `idQuyen` int(11) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idUser`, `tendangnhap`, `matkhau`, `idQuyen`) VALUES
(1, 'nguyenvana', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `idloai` int(11) NOT NULL,
  `tentheloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `hienthi` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`idloai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`idloai`, `tentheloai`, `hienthi`, `thutu`) VALUES
(1, 'Nike', 1, 1),
(2, 'Vans', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE IF NOT EXISTS `trangthai` (
  `idTrangthai` int(11) NOT NULL,
  `tenTrangthai` int(11) NOT NULL,
  PRIMARY KEY (`idTrangthai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trangthai`
--

