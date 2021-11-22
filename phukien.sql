-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 09:57 AM
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
-- Cơ sở dữ liệu: `phukien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` char(8) NOT NULL,
  `id_user` char(8) NOT NULL,
  `ngaymua` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `maloaisp` char(8) NOT NULL,
  `tenLsp` varchar(250) CHARACTER SET utf8 NOT NULL,
  `motaLsp` varchar(450) DEFAULT NULL,
  `hinhanhLSP` varchar(250) DEFAULT NULL,
  `tgtao` datetime DEFAULT NULL,
  `tgcapnhat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`maloaisp`, `tenLsp`, `motaLsp`, `hinhanhLSP`, `tgtao`, `tgcapnhat`) VALUES
('LSP00001', 'Scrunchies', 'Scrunchie là một loại dây chun buộc tóc được bọc vải bên ngoài, thường có kích cỡ lớn và phồng lên như một bông hoa', 'https://storage.googleapis.com/ops-shopee-files-live/live/shopee-blog/2020/05/cach-lam-day-buoc-toc-scrunchies-2.jpg', '2021-11-16 07:52:52', '2021-11-16 07:52:52'),
('LSP00002', 'Kẹp tóc', 'Kẹp tóc thời trang với thiết kế đẹp, mẫu mới, đa dạng, chất lượng cao cấp. Nhiều mẫu kẹp búi tóc công sở, kẹp tóc càng cua, kẹp tóc mái, kẹp bấm, kẹp dọc, ..', 'https://cf.shopee.vn/file/fa418f6fad4ad32d570b646dd65935ae', '2021-11-16 07:52:52', '2021-11-16 07:52:52'),
('LSP00003', 'Băng đô', 'Băng đô là một phụ kiện thời trang, cụ thể hơn là phụ kiện tóc, đeo ở tóc hoặc quanh trán, thường để giữ tóc cách xa mặt hoặc mắt', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20211112/21112046_WH.JPG', '2021-11-16 07:52:52', '2021-11-16 07:52:52'),
('LSP00004', 'Vòng tay', 'Vòng đeo tay là một loại trang sức đeo ở cổ tay. Vòng đeo tay có thể được làm từ rất nhiều loại chất liệu khác nhau dành cho cả nam và nữ được sử dụng từ lâu trong lịch sử. Đây là một loại trang sức được cấu tạo cơ bản bằng một chuỗi hay một dãi đeo quanh cổ tay để làm đẹp.', 'https://eropi.com/media/wysiwyg/tin-tuc-4/vong-tay-va-lac-tay-co-khac-nhau-khong_8_.jpg', '2021-11-16 07:52:52', '2021-11-16 07:52:52'),
('LSP00005', 'Đồng hồ', 'Phái đẹp ngày càng có xu hướng lựa chọn phụ kiện là đồng hồ, bởi đây là món phụ kiện không hề kén trang phục, và hầu như phù hợp với mọi hoàn cảnh. Chỉ với một chiếc đồng hồ đeo tay cũng đã đủ tạo điểm nhấn tinh tế cho phong cách thời trang và vẻ ngoài thanh lịch cho bất cứ chị em nào. ', 'https://cf.shopee.vn/file/d4756a4f3b30114409279bc4e2a3588e', '2021-11-16 07:52:52', '2021-11-16 07:52:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_user` char(8) NOT NULL,
  `hoten` varchar(250) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id_user`, `hoten`, `email`, `password`) VALUES
('ID001', 'Hồ Thị Ái Uyên', 'Hothiaiuyen2309@gmail.com', 'uyencute123'),
('ID002', 'Lưu Hoàng Long', 'luuhoanglong0508@gmail.com', 'longcute123'),
('ID003', 'Chu Thị Thu Hải', 'chuthithuhai@gmail.com', 'uyencute123'),
('ID004', 'Phạm Nguyễn Thanh Hui', 'thanhhui0201@gmail.com', 'longcute123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` char(8) NOT NULL,
  `maloaisp` char(8) NOT NULL,
  `tensp` varchar(250) CHARACTER SET utf8 NOT NULL,
  `motasp` varchar(450) DEFAULT NULL,
  `hinhanh` varchar(250) DEFAULT NULL,
  `dvt` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `dongia` float DEFAULT NULL,
  `giakm` float DEFAULT NULL,
  `tgtao` datetime DEFAULT NULL,
  `tgcapnhat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `maloaisp`, `tensp`, `motasp`, `hinhanh`, `dvt`, `dongia`, `giakm`, `tgtao`, `tgcapnhat`) VALUES
('sp000001', 'LSP00001', 'Buộc tóc scrunchies Fruit strawberries sweet', 'Dây cột tóc cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/psCT/20210531/32208378/Buoc_toc_scrunchies_Fruit_strawberries_sweet_(21052240_hoc).jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000002', 'LSP00001', 'Buộc tóc scrunchies trái tim', 'Dây cột tóc hình trái tim cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/psCT/20210422/31075025/Buoc_toc_MJ_scrunchies_Fruit_dau_tay_sweet_summer_(21041180_xx).jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000003', 'LSP00001', 'Buộc tóc set5 scrunchies Gấu thỏ and else', 'Dây cột tóc cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210613/21050319_XX.JPG', 'cái', 65000, 55000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000004', 'LSP00001', 'Buộc tóc scrunchies scratched fabric nơ', 'Dây cột tóc cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210105/20122162_1000x1000.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000005', 'LSP00001', 'Buộc tóc scrunchies Tai mèo hai màu', 'Dây cột tóc cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/psCT/20201208/27198863/Buoc_toc_MJ_scrunchies_Tai_meo_hai_mau_(20120143_pp).jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000006', 'LSP00002', 'Kẹp tóc càng cua Baby bear heart', 'Kẹp càng cua cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210716/21071000_XX.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000007', 'LSP00002', 'Kẹp tóc MJ A snowflake đính đá', 'Kẹp càng cua cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210614/21050128_SV.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000008', 'LSP00002', 'Kẹp tóc MJ Four smiley faces vòng tròn đính đá', 'Kẹp càng cua cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210614/21050123_GO.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000009', 'LSP00002', 'Kẹp tóc càng cua chữ nhật paint splash pattern', 'Kẹp càng cua cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210424/21042009_1000x1000.jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000010', 'LSP00002', 'Kẹp tóc càng cua Basic one color mini', 'Kẹp càng cua cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210409/21041000_xx.jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000011', 'LSP00003', 'Băng đô bờm Nơ phối lưới ngọc trai', 'Băng đô cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210323/21022197_1000x1000.JPG', 'cái', 35000, 30000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000012', 'LSP00003', 'Băng đô make up Fruit orange cam carrot', 'Băng đô cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210324/21020023_OR_1000x1000.jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000013', 'LSP00003', 'Băng đô make up idol BTS cartoon baby', 'Băng đô cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210114/20121344_HOC_1000x1000.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000014', 'LSP00003', 'Băng đô bờm Tai gấu baby bear', 'Băng đô cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210203/20120483_1000x1000.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000015', 'LSP00003', 'Băng đô make up Thỏ bờ mi', 'Băng đô cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210105/20120199_wh.jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000016', 'LSP00004', 'Vòng tay MJ xích màu Cinnamoroll cute', 'Vòng tay cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210927/21080032.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000017', 'LSP00004', 'Vòng tay charm Butterfly hoa anh đào', 'Vòng tay cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210614/21050174_X.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000018', 'LSP00004', 'Vòng tay charm Thỏ đính đá big star', 'Vòng tay cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210614/21056017_XX.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000019', 'LSP00004', 'Vòng tay mạ bạc Trái tim viền dập nổi', 'Vòng tay cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/psCT/20210317/29855725/Vong_tay_ma_bac_Trai_tim_vien_dap_noi_(21032055_sv).jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000020', 'LSP00004', 'Vòng tay MJ Double pearl ngọc trai', 'Vòng tay cute cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210401/21021111_GO_1000x1000.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000021', 'LSP00005', 'Đồng hồ MJ dây silicone Lovely Rabbit ', 'Đồng hồ đeo tay cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210325/21012274_lb4.jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000022', 'LSP00005', 'Đồng hồ MJ dây silicone Mira little girl ', 'Đồng hồ đeo tay cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210218/21010254_XX_1000x1000.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000023', 'LSP00005', 'Đồng hồ MJ dây vải mặt tròn white basic', 'Đồng hồ đeo tay cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210325/21022025_be4_1000x1000.jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000024', 'LSP00005', 'Đồng hồ MJ dây vải sọc Doukou watch', 'Đồng hồ đeo tay cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210325/21012282_BL4_1000x1000.jpg', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31'),
('sp000025', 'LSP00005', 'Đồng hồ MJ Shhors Sport mặt tròn ', 'Đồng hồ đeo tay cho nữ', 'https://storage.googleapis.com/cdn.nhanh.vn/store/7534/ps/20210228/21012276_1000x1000.JPG', 'cái', 15000, 12000, '2021-11-16 07:49:31', '2021-11-16 07:49:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloaisp`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`,`maloaisp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
