-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 10, 2022 lúc 07:23 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ph25572_php1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`) VALUES
(1, 'Điện Thoại'),
(2, 'Máy tính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(550) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(999) NOT NULL,
  `time` varchar(225) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `quantity`, `image`, `description`, `time`, `cate_id`) VALUES
(4, 'Điện thoại di động Apple iPhone 13 Pro Max - Chính hãng VN/A', 27990000, 100, 'KenSine_1660103790.png', 'Mua iPhone 13 Pro Max chính hãng, giá tốt tại Hoàng Hà Mobile\r\nApple đã chính thức ra mắt dòng iPhone 2021 với tên gọi iPhone 13 Series. Trong đó iPhone 13 Pro Max là phiên bản cao cấp nhất với màn hình lớn, tốc độ làm tươi 120Hz và dung lượng lưu trữ lên tới 1TB.\r\n\r\nThiết kế vuông vức sang trọng, tần số quét lên tới 120Hz\r\nXét về phong cách thiết kế, iPhone 13 Pro Max vẫn sở hữu khung viền vuông vức bằng kim loại sang trọng tương tự như iPhone 12 Pro Max. Mặt lưng của máy được hoàn thiện nhám để tránh lưu lại vân tay khi sử dụng. Cầm chiếc iPhone 13 Pro Max trên tay chắc chắn sẽ thu hút mọi ánh nhìn bởi thiết kế quá ấn tượng.\r\n\r\nLà chiếc iPhone lớn nhất nên màn hình của iPhone 13 Pro Max cũng có kích thước lên tới 6.7 inch. Trên màn hình vẫn có tai thỏ quen thuộc nhưng đã được tinh chỉnh nhỏ gọn hơn thế hệ trước 20% nhằm tối ưu hóa không gian hiển thị. Camera selfie 12MP nằm trong tai thỏ và cung cấp bảo mật Face ID. Màn hình vẫn được bảo vệ bởi kính cường lực Ceramic Shield siêu bền', '1660102556', 1),
(5, 'Laptop Dell Vostro 3510 - V5I3305W (i3-1115G4/RAM 8GB/256 SSD/15.6', 11690000, 100, 'KenSine_1660104357.jpg', 'Laptop Dell Vostro 3500 - V5I3305W là là một chiếc laptop học tập - văn phòng có hiệu năng mạnh mẽ cùng với màn hình lớn hướng đến người dùng là sinh viên, nhân viên văn phòng với nhu cầu học tập, giải trí và chỉnh sửa hình ảnh cơ bản. Ngoài ra, Người dùng sẽ không cần phải lo đến vấn đề phần mềm khi laptop đã được cài sẵn Windows 11 bản quyền.\r\n\r\nThiết kế sang trọng, thanh lịch\r\n\r\nDell Vostro 3500 - V5I3305W sở hữu một thiết kế đặc trưng của thương hiệu Dell với các đường nét được làm tỉ mỉ. Với trọng lượng nhẹ, chỉ là 1.69 kg nhờ đó máy có thể dễ dàng mang theo trong làm việc và học tập.', '1660103467', 2),
(6, 'Điện thoại di động Apple iPhone 13 Pro Max - Chính hãng VN/A1', 28990000, 100, 'KenSine_1660102556.png', 'Mua iPhone 13 Pro Max chính hãng, giá tốt tại Hoàng Hà Mobile\r\nApple đã chính thức ra mắt dòng iPhone 2021 với tên gọi iPhone 13 Series. Trong đó iPhone 13 Pro Max là phiên bản cao cấp nhất với màn hình lớn, tốc độ làm tươi 120Hz và dung lượng lưu trữ lên tới 1TB.\r\n\r\nThiết kế vuông vức sang trọng, tần số quét lên tới 120Hz\r\nXét về phong cách thiết kế, iPhone 13 Pro Max vẫn sở hữu khung viền vuông vức bằng kim loại sang trọng tương tự như iPhone 12 Pro Max. Mặt lưng của máy được hoàn thiện nhám để tránh lưu lại vân tay khi sử dụng. Cầm chiếc iPhone 13 Pro Max trên tay chắc chắn sẽ thu hút mọi ánh nhìn bởi thiết kế quá ấn tượng.\r\n\r\nLà chiếc iPhone lớn nhất nên màn hình của iPhone 13 Pro Max cũng có kích thước lên tới 6.7 inch. Trên màn hình vẫn có tai thỏ quen thuộc nhưng đã được tinh chỉnh nhỏ gọn hơn thế hệ trước 20% nhằm tối ưu hóa không gian hiển thị. Camera selfie 12MP nằm trong tai thỏ và cung cấp bảo mật Face ID. Màn hình vẫn được bảo vệ bởi kính cường lực Ceramic Shield siêu bền', '1660103474', 1),
(7, 'Laptop Dell Vostro 3510 - V5I3305W (i3-1115G4/RAM 8GB/256 SSD/15.6', 11690000, 100, 'KenSine_1660104357.jpg', 'Laptop Dell Vostro 3500 - V5I3305W là là một chiếc laptop học tập - văn phòng có hiệu năng mạnh mẽ cùng với màn hình lớn hướng đến người dùng là sinh viên, nhân viên văn phòng với nhu cầu học tập, giải trí và chỉnh sửa hình ảnh cơ bản. Ngoài ra, Người dùng sẽ không cần phải lo đến vấn đề phần mềm khi laptop đã được cài sẵn Windows 11 bản quyền.\r\n\r\nThiết kế sang trọng, thanh lịch\r\n\r\nDell Vostro 3500 - V5I3305W sở hữu một thiết kế đặc trưng của thương hiệu Dell với các đường nét được làm tỉ mỉ. Với trọng lượng nhẹ, chỉ là 1.69 kg nhờ đó máy có thể dễ dàng mang theo trong làm việc và học tập.', '1660103467', 2),
(8, 'Laptop Dell Vostro 3510 - V5I3305W (i3-1115G4/RAM 8GB/256 SSD/15.6', 11690000, 100, 'KenSine_1660104357.jpg', 'Laptop Dell Vostro 3500 - V5I3305W là là một chiếc laptop học tập - văn phòng có hiệu năng mạnh mẽ cùng với màn hình lớn hướng đến người dùng là sinh viên, nhân viên văn phòng với nhu cầu học tập, giải trí và chỉnh sửa hình ảnh cơ bản. Ngoài ra, Người dùng sẽ không cần phải lo đến vấn đề phần mềm khi laptop đã được cài sẵn Windows 11 bản quyền.\r\n\r\nThiết kế sang trọng, thanh lịch\r\n\r\nDell Vostro 3500 - V5I3305W sở hữu một thiết kế đặc trưng của thương hiệu Dell với các đường nét được làm tỉ mỉ. Với trọng lượng nhẹ, chỉ là 1.69 kg nhờ đó máy có thể dễ dàng mang theo trong làm việc và học tập.', '1660103467', 2),
(10, 'Điện thoại di động Apple iPhone 13 Pro Max - Chính hãng VN/A1', 15000000, 100, 'KenSine_1660105229.png', 'Điện thoại di động Apple iPhone 13 Pro Max - Chính hãng VN/A1', '1660105229', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`, `email`, `avatar`, `address`) VALUES
(1, 'tanndph25572', 'tanndph25572', 1, 'tanndph25572@fpt.edu.vn', '', ''),
(2, 'tanndph25573', 'tanndph25572', 0, 'tanndph25572@fpt.edu.vn', '', ''),
(3, 'tanndph25574', 'tanndph25572', 0, 'tanndph25572@fpt.edu.vn', '', ''),
(4, 'tanndph25575', 'tanndph25575', 0, 'tanndph25572@fpt.edu.vn', '', ''),
(5, 'tanndph25570', 'tanndph25570', 0, 'tanndph25572@fpt.edu.vn', '', ''),
(6, 'tanndph25577', 'tanndph25577', 0, 'tanndph25572@fpt.edu.vn', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
