-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2015 at 07:17 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_albums`
--

CREATE TABLE IF NOT EXISTS `tbl_albums` (
  `album_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `album_title` varchar(200) NOT NULL,
  `album_info` text NOT NULL,
  `album_image` varchar(100) NOT NULL,
  `singer_id` int(10) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_albums`
--

INSERT INTO `tbl_albums` (`album_id`, `album_title`, `album_info`, `album_image`, `singer_id`) VALUES
(1, 'Em Của Ngày Hôm Qua ', 'Tiếp tục là người tạo những bản HIT gây nghiện của giới trẻ trong thời gian gần đây, Sơn Tùng M-TP tiếp tục ra bài hát mới, sẽ là 1 ca khúc tung hoành trên các BXH âm nhạc', 'em-cua-ngay-hom-qua.jpg', 1),
(2, 'Cơn Mưa Ngang Qua', 'Sơn Tùng M-TP tên thật là Lê Thanh Tùng. Cậu thanh niên sinh năm 1994 ở Thái Bình sớm bị hip hop hớp hồn giống như bao bạn bè đồng trang lứa. Và với niềm đam mê này, M-TP quyết tâm khăn gói tới Hà Nội học hỏi thêm về hip hop. Hiện tại, M-TP vẫn đang học văn hóa và hoạt động underground cùng các rapper đàn anh tên tuổi như LK, Jansaker... Sau khi tốt nghiệp cấp 3, anh chàng dự định sẽ đầu quân làm học viên tại Học viện M4Me để rèn rũa khả năng ca hát, sáng tác... trước khi chính thức theo đuổi con đường âm nhạc.', 'con-mua-ngang-qua.jpg', 1),
(3, 'Không Thể Nói', 'Album chủ đạo của ca sĩ Phạm Trưởng ra mắt dịp cuối năm gồm 8 ca khúc nhạc trẻ mới nhất được biên tập kĩ lưởng và thu phối chuyên nghiệp tại phòng thu Phạm Trưởng', 'khong-the-noi.jpg', 2),
(4, 'Nợ', 'Album Vol 2 của Phạm Trưởng đã chính thức có mặt tại Zing mp3 với các ca khúc mới do anh tự sáng tác.', 'no.jpg', 2),
(5, 'Mỗi Thứ Em Thêm Vào Tình Yêu', 'Trong những ngày đầu tháng 8 - tháng sinh nhật của mình, Phạm Quỳnh Anh đã bất ngờ giới thiệu đến khán giả single mới nhất của mình mang tên - Mỗi thứ em thêm vào ', 'moi-thu.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_singers`
--

CREATE TABLE IF NOT EXISTS `tbl_singers` (
  `singer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `singer_name` varchar(150) NOT NULL,
  `singer_info` text NOT NULL,
  `singer_image` varchar(100) NOT NULL,
  PRIMARY KEY (`singer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_singers`
--

INSERT INTO `tbl_singers` (`singer_id`, `singer_name`, `singer_info`, `singer_image`) VALUES
(1, 'Sơn Tùng MTP', 'M-TP tên thật là Nguyễn Thanh Tùng. Cậu thanh niên sinh năm 1994 ở Thái Bình sớm bị hip hop hớp hồn giống như bao bạn bè đồng trang lứa. Và với niềm đam mê này, M-TP quyết tâm khăn gói tới Hà Nội học hỏi thêm về hip hop. Hiện tại, M-TP vẫn đang học văn hóa và hoạt động underground cùng các rapper đàn anh tên tuổi như LK, Jansaker...', 'son-tung.jpg'),
(2, 'Phạm Trưởng', 'Với sự thành công rực rỡ của nhóm Vboys qua các ca khúc ; Đàn Ông Là Thế, Xin Lỗi Anh Đã Sai,...do chính mình sáng tác Phạm Trưởng đã nhận đươc những tình cảm rất quý báu của các bạn gần xa . Sau khi nhóm Vboys tách rời , thời gian đầu Phạm Trưởng gặp rất nhiều khó khăn nhưng nhờ động lực của gia đình va các bạn Phạm Trưởng cũng đã vượt qua khó khăn đó để phát hành 2 album vol1 , vol2 và được khán giả yêu thích qua các ca khúc do mình sáng tác: Chiếc Áo Cô Đơn, Yêu Không Dám Nói, Người Dự Bị, Em Vô Tình Hay Cố Ý...', 'pahm-truong.jpg'),
(3, 'Phạm Quỳnh Anh', 'Phạm Quỳnh Anh sinh hoạt văn nghệ thiếu nhi tại Hà Nội từ 4 tuổi, là gương mặt quen thuộc trên các chương trình văn nghệ thiếu nhi truyền hình Hà Nội. \r\n\r\nCùng Thang Phương Mai thành lập nhóm Sắc Màu năm 13 tuổi, chính thức hoạt động âm nhạc chuyên nghiệp tại Hà Nội gây được nhiều tiếng vang tốt. \r\n\r\nNăm 2003, cô quyết định phát triển sự nghiệp tại Thành phố Hồ Chí Minh bằng bản hợp đồng với công ty Wepro.', 'pham-quynh-anh.jpg'),
(4, 'Akira Phan', 'Akira Phan tên thật là Phan Võ Thanh Hùng. Giải thích về cái tên rất Nhật này, Akira bộc bạch “Từ trước đến nay, ca sĩ ta thường theo phong cách của Hàn Quốc, Đài Loan… nhưng ít ai ', 'akira-phan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_songs`
--

CREATE TABLE IF NOT EXISTS `tbl_songs` (
  `song_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `song_title` varchar(200) NOT NULL,
  `song_link` text NOT NULL,
  `album_id` int(10) NOT NULL,
  `singer_id` int(10) NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_songs`
--

INSERT INTO `tbl_songs` (`song_id`, `song_title`, `song_link`, `album_id`, `singer_id`) VALUES
(1, 'Bụi bay vào mắt', 'http://mp3.zing.vn/embed/song/ZWZ98676?autostart=true', 5, 3),
(2, 'Nợ - Phạm trưởng', 'http://mp3.zing.vn/embed/song/ZWZF0F8D?autostart=true', 4, 2),
(3, 'Cơn Mưa Ngang Qua', 'http://mp3.zing.vn/embed/song/ZWZCF80A?autostart=true', 2, 1),
(4, 'Em Của Ngày Hôm Qua', 'http://mp3.zing.vn/embed/song/ZW69BZOF?autostart=true', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL DEFAULT '2',
  `phone` int(20) DEFAULT NULL,
  `adress` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(10) unsigned NOT NULL DEFAULT '2',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`, `fullname`, `gender`, `phone`, `adress`, `email`, `level`, `status`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'ha anh don', '1', 974136509, 'Hà Nội - Singapore', 'haanhdon@gmail.com', 1, 1),
(2, 'thienhb', '827ccb0eea8a706c4c34a16891f84e7b', 'Trần Hoàng Thiện', '1', 912345678, 'Hà Nội - Việt Nam', 'thienhb12@gmail.com', 1, 0),
(3, 'duct0an', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Đức Toàn', '1', 977133234, 'Phúc Yên', 'anht0an70412@yahoo.com', 2, 0),
(4, 'bachnx', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Xuân Bách', '1', 976256106, 'Cầu Giấy - Hà Nội', 'bachnx92@gmail.com', 1, 1),
(5, 'tuannt', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Thanh Tuấn', '2', 912345678, 'Hà Nội - Việt Nam', 'tuannt@gmail.com', 2, 1),
(6, 'kieuthanh', '827ccb0eea8a706c4c34a16891f84e7b', 'Kiều Thanh', '0', 912345678, 'Hà Nội - Việt Nam', 'thanhkieu@gmail.com', 2, 1),
(7, 'giangnv', '827ccb0eea8a706c4c34a16891f84e7b', 'Ngô Văn Giang', '0', 912345678, 'Hà Nội - Việt Nam', 'giangnv@gmail.com', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
