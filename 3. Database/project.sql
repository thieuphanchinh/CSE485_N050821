-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2018 lúc 11:30 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@wru.vn', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5c1b74688ca24', '5c1b74688d19e'),
('5c1b746890320', '5c1b74689098a'),
('5c1b75705826f', '5c1b757058abb'),
('5c1b75705c1f8', '5c1b75705c897'),
('5c1b75705fdcf', '5c1b757060bff'),
('5c1b75706581a', '5c1b7570667b2'),
('5c1b75706d037', '5c1b75706ddf4'),
('5c1cbd66e100c', '5c1cbd66e24be'),
('5c1cbd67c482d', '5c1cbd67c51a2'),
('5c1cbd688d555', '5c1cbd688ea33'),
('5c1cbe22c3653', '5c1cbe22c3746'),
('5c1cbee490bfc', '5c1cbee492588');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('chinhtp62@wru.vn', '5c1b73f842207', 0, 2, 1, 1, '2018-12-20 10:57:25'),
('chinhtp62@wru.vn', '5c1b7494b317e', -5, 5, 0, 5, '2018-12-21 09:09:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5c1b74688ca24', ' Hyper Text Markup Language', '5c1b74688d19e'),
('5c1b74688ca24', ' Home Tool Markup Language', '5c1b74688d1a4'),
('5c1b74688ca24', ' Hyperlinks and Text Markup Language', '5c1b74688d1a6'),
('5c1b74688ca24', ' Home Tool Markup', '5c1b74688d1a8'),
('5c1b746890320', ' <heading>', '5c1b746890981'),
('5c1b746890320', ' <h6>', '5c1b746890986'),
('5c1b746890320', ' <head>', '5c1b746890988'),
('5c1b746890320', ' <h1>', '5c1b74689098a'),
('5c1b75705826f', ' echo \"Hello World\";', '5c1b757058abb'),
('5c1b75705826f', ' Document.Write(\"Hello World\");', '5c1b757058ac1'),
('5c1b75705826f', ' \"Hello World\";', '5c1b757058ac3'),
('5c1b75705826f', ' cout<<\"Hello World\";', '5c1b757058ac5'),
('5c1b75705c1f8', '@', '5c1b75705c88e'),
('5c1b75705c1f8', '#', '5c1b75705c895'),
('5c1b75705c1f8', '$', '5c1b75705c897'),
('5c1b75705c1f8', '%', '5c1b75705c898'),
('5c1b75705fdcf', ' VBScript', '5c1b757060bf6'),
('5c1b75705fdcf', ' JavaScript', '5c1b757060bfd'),
('5c1b75705fdcf', ' Perl và C', '5c1b757060bff'),
('5c1b75705fdcf', 'C++', '5c1b757060c01'),
('5c1b75706581a', ' $ _GET [];', '5c1b7570667b2'),
('5c1b75706581a', ' Request.QueryString;', '5c1b7570667bd'),
('5c1b75706581a', ' Request.Form;', '5c1b7570667bf'),
('5c1b75706581a', ' Request', '5c1b7570667c0'),
('5c1b75706d037', ' new_function myFunction()', '5c1b75706ddeb'),
('5c1b75706d037', ' function myFunction()', '5c1b75706ddf4'),
('5c1b75706d037', ' create myFunction()', '5c1b75706ddf6'),
('5c1b75706d037', 'myFunction()', '5c1b75706ddf8'),
('5c1cbd66e100c', '', '5c1cbd66e24be'),
('5c1cbd66e100c', '', '5c1cbd66e24c7'),
('5c1cbd66e100c', '', '5c1cbd66e24c9'),
('5c1cbd66e100c', '', '5c1cbd66e24ca'),
('5c1cbd67c482d', '', '5c1cbd67c51a2'),
('5c1cbd67c482d', '', '5c1cbd67c51a9'),
('5c1cbd67c482d', '', '5c1cbd67c51aa'),
('5c1cbd67c482d', '', '5c1cbd67c51ab'),
('5c1cbd688d555', '', '5c1cbd688ea33'),
('5c1cbd688d555', '', '5c1cbd688ea42'),
('5c1cbd688d555', '', '5c1cbd688ea43'),
('5c1cbd688d555', '', '5c1cbd688ea44'),
('5c1cbe22c3653', 'fopen(“time.txt”,”r”);', '5c1cbe22c3746'),
('5c1cbe22c3653', 'fopen(“time.txt”);', '5c1cbe22c3749'),
('5c1cbe22c3653', 'open(“time.txt”,”r”);', '5c1cbe22c374b'),
('5c1cbe22c3653', 'f(“time.txt”,”r”);', '5c1cbe22c374c'),
('5c1cbee490bfc', ' <js> ', '5c1cbee492588'),
('5c1cbee490bfc', ' <javascript> ', '5c1cbee49258f'),
('5c1cbee490bfc', ' Hyperlinks and Text Markup Language', '5c1cbee492590'),
('5c1cbee490bfc', 'adfds', '5c1cbee492591');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL,
  `qlevel` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`, `qlevel`) VALUES
('5c1b73f842207', '5c1b74688ca24', 'HTML viết tắt của: ', 4, 1, 1),
('5c1b73f842207', '5c1b746890320', 'Chọn thẻ HTML cho tiêu đề lớn nhất:', 4, 2, 1),
('5c1b7494b317e', '5c1b75705826f', 'Làm thế nào để bạn viết \"Hello World\" trong PHP', 4, 1, 1),
('5c1b7494b317e', '5c1b75705c1f8', 'Tất cả các biến trong PHP bắt đầu bằng ký hiệu nào?', 4, 2, 1),
('5c1b7494b317e', '5c1b75705fdcf', 'Cú pháp PHP tương tự nhất với:', 4, 3, 1),
('5c1b7494b317e', '5c1b75706581a', 'Làm thế nào để bạn có được thông tin từ một biểu mẫu được gửi bằng phương thức \"get\"?', 4, 4, 1),
('5c1b7494b317e', '5c1b75706d037', 'Cách chính xác để tạo một hàm trong PHP là gì?', 4, 5, 1),
('5c1b7494b317e', '5c1cbd66e100c', '', 0, 1, 0),
('5c1b7494b317e', '5c1cbd67c482d', '', 0, 1, 0),
('5c1b7494b317e', '5c1cbd688d555', '', 0, 1, 0),
('5c1b7494b317e', '5c1cbee490bfc', 'What is the correct way to open the file “time.txt” as readable?', 4, 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('5c1b73f842207', 'HTML', 1, 1, 2, 2, '', 'html', '2018-12-20 10:50:32'),
('5c1b7494b317e', 'PHP', 1, 1, 5, 5, '', 'php', '2018-12-20 10:53:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('chinhtp62@wru.vn', -15, '2018-12-21 09:09:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Thiều Phan Chính', 'male', '58TH1', 'chinhtp62@wru.vn', 582339871, 'e10adc3949ba59abbe56e057f20f883e'),
('Đặng Minh Hiếu', 'male', '58TH1', 'hieudm620@wru.vn', 582339871, 'e10adc3949ba59abbe56e057f20f883e');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
