-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 01 月 10 日 06:18
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `student`
--
CREATE DATABASE `student` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `student`;

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `Cid` int(11) NOT NULL,
  `Cname` varchar(50) NOT NULL,
  `Ctea` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Cid`),
  UNIQUE KEY `Cid` (`Cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`Cid`, `Cname`, `Ctea`) VALUES
(2012, 'java', '张老师'),
(2013, 'php', '沈老师'),
(2014, 'mfc', '游老师'),
(2015, '英语', '席老师'),
(2016, '计算机安全', '付老师'),
(2017, '计算机组装', '郑老师');

-- --------------------------------------------------------

--
-- 表的结构 `eva`
--

CREATE TABLE IF NOT EXISTS `eva` (
  `张老师` varchar(10) DEFAULT NULL,
  `沈老师` varchar(10) DEFAULT NULL,
  `游老师` varchar(10) DEFAULT NULL,
  `付老师` varchar(10) DEFAULT NULL,
  `席老师` varchar(10) DEFAULT NULL,
  `郑老师` varchar(10) DEFAULT NULL,
  `Sid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `eva`
--

INSERT INTO `eva` (`张老师`, `沈老师`, `游老师`, `付老师`, `席老师`, `郑老师`, `Sid`) VALUES
('A', 'B', 'A', 'B', 'A', 'B', 3012),
('A', 'B', 'A', 'B', 'A', 'B', 3013),
('A', 'B', 'A', 'B', 'A', 'B', 3015),
('A', 'B', 'A', 'B', 'A', 'B', 3016),
('A', 'B', 'A', 'B', 'A', 'B', 3017),
('A', 'B', 'A', 'B', 'A', 'B', 3018),
('A', 'B', 'A', 'B', 'A', 'B', 4019),
('A', 'B', 'A', 'B', 'A', 'B', 4020),
('A', 'B', 'A', 'B', 'A', 'B', 4021);

-- --------------------------------------------------------

--
-- 表的结构 `evastu`
--

CREATE TABLE IF NOT EXISTS `evastu` (
  `张三` varchar(10) DEFAULT NULL,
  `李四` varchar(10) DEFAULT NULL,
  `王五` varchar(10) DEFAULT NULL,
  `Tname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `evastu`
--

INSERT INTO `evastu` (`张三`, `李四`, `王五`, `Tname`) VALUES
('A', 'B', 'A', '张老师'),
('A', 'B', 'A', '沈老师'),
('A', 'B', 'A', '游老师'),
('A', 'B', 'A', '席老师'),
('A', 'B', 'A', '付老师'),
('A', 'B', 'A', '郑老师');

-- --------------------------------------------------------

--
-- 表的结构 `selcourse`
--

CREATE TABLE IF NOT EXISTS `selcourse` (
  `courseId` int(11) DEFAULT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `Tid` int(11) DEFAULT NULL,
  `Tname` varchar(50) DEFAULT NULL,
  `Sfen` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `selcourse`
--

INSERT INTO `selcourse` (`courseId`, `courseName`, `Tid`, `Tname`, `Sfen`) VALUES
(2018, 'python', 4014, '沈老师', 3),
(2019, 'c++', 465, 'asd', 6),
(123, 'asd', 132, 'ads', 12);

-- --------------------------------------------------------

--
-- 表的结构 `stuinfo`
--

CREATE TABLE IF NOT EXISTS `stuinfo` (
  `snum` int(11) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `ssex` varchar(10) DEFAULT NULL,
  `sage` int(11) DEFAULT NULL,
  `spho` int(11) DEFAULT NULL,
  `scla` varchar(50) DEFAULT NULL,
  `sadd` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `stuinfo`
--

INSERT INTO `stuinfo` (`snum`, `sname`, `ssex`, `sage`, `spho`, `scla`, `sadd`) VALUES
(3012, '张三', '男', 23, 123456, '16计应1班', '湖北'),
(3013, '李四', '男', 24, 456465, '16计应1班', '江西'),
(3015, '王五', '男', 21, 99565, '16计应1班', '浙江');

-- --------------------------------------------------------

--
-- 表的结构 `stusocre`
--

CREATE TABLE IF NOT EXISTS `stusocre` (
  `Uid` int(11) DEFAULT NULL,
  `Uname` varchar(50) DEFAULT NULL,
  `Cname` varchar(50) DEFAULT NULL,
  `Csoc` int(11) DEFAULT NULL,
  `Cfen` int(11) DEFAULT NULL,
  `Tid` int(11) DEFAULT NULL,
  `Tname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `stusocre`
--

INSERT INTO `stusocre` (`Uid`, `Uname`, `Cname`, `Csoc`, `Cfen`, `Tid`, `Tname`) VALUES
(3012, '张三', 'java', 99, 3, 4012, '张老师'),
(3012, '张三', 'php', 89, 3, 4013, '沈老师'),
(3012, '张三', 'mfc', 75, 3, 4014, '游老师'),
(3012, '张三', '英语', 86, 3, 4015, '席老师'),
(3012, '张三', '计算机安全', 89, 3, 4016, '付老师'),
(3012, '张三', '计算机组装', 78, 3, 4017, '郑老师'),
(3013, '李四', '计算机安全', 89, 3, 4016, '付老师'),
(3013, '李四', '英语', 86, 3, 4015, '席老师'),
(3013, '李四', 'mfc', 75, 3, 4014, '游老师'),
(3013, '李四', 'php', 89, 3, 4013, '沈老师'),
(3013, '李四', 'java', 99, 3, 4012, '张老师'),
(3013, '李四', '计算机组装', 78, 3, 4017, '郑老师'),
(3015, '王五', 'java', 99, 3, 4012, '张老师'),
(3015, '王五', 'php', 89, 3, 4013, '沈老师'),
(3015, '王五', 'mfc', 75, 3, 4014, '游老师'),
(3015, '王五', '英语', 86, 3, 4015, '席老师'),
(3015, '王五', '计算机安全', 89, 3, 4016, '付老师'),
(3015, '王五', '计算机组装', 78, 3, 4017, '郑老师');

-- --------------------------------------------------------

--
-- 表的结构 `synotice`
--

CREATE TABLE IF NOT EXISTS `synotice` (
  `notice` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `synotice`
--

INSERT INTO `synotice` (`notice`) VALUES
('关于*****的通知'),
('关于*****的通知'),
('关于*****的通知'),
('关于*****的通知'),
('关于*****的通知'),
('');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `Tid` int(11) NOT NULL,
  `Tname` varchar(50) NOT NULL,
  `TD` varchar(50) NOT NULL,
  `Tpwd` int(11) DEFAULT NULL,
  PRIMARY KEY (`Tid`),
  UNIQUE KEY `Tid` (`Tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`Tid`, `Tname`, `TD`, `Tpwd`) VALUES
(4012, '李校长', 'ssss', 4012),
(4013, '张老师', '计算机', 4013),
(4014, '沈老师', '计算机', 4014),
(4015, '游老师', '计算机', 4015),
(4016, '席老师', '计算机', 4016),
(4017, '付老师', '计算机', 4017),
(4018, '郑老师', '计算机', 4018);

-- --------------------------------------------------------

--
-- 表的结构 `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `12` char(50) NOT NULL,
  `34` char(50) NOT NULL,
  `56` char(50) NOT NULL,
  `78` char(50) NOT NULL,
  `day` int(5) NOT NULL,
  PRIMARY KEY (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `timetable`
--

INSERT INTO `timetable` (`12`, `34`, `56`, `78`, `day`) VALUES
('计算机网络安全', '', '', '', 1),
('计算机组装', '', 'MFC', '', 2),
('计算机专业英语', '计算机网络安全', '', 'php', 3),
('', 'php', '', 'mfc', 4),
('java', 'python', '计算机组装', '', 5),
('', '', '', '', 6),
('', '', '', '', 7);

-- --------------------------------------------------------

--
-- 表的结构 `upfile`
--

CREATE TABLE IF NOT EXISTS `upfile` (
  `filename` varchar(50) DEFAULT NULL,
  `filedir` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `upfile`
--

INSERT INTO `upfile` (`filename`, `filedir`) VALUES
('Java.docx', 'uploads/Java.docx');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Uid` varchar(50) NOT NULL,
  `per` varchar(50) DEFAULT NULL,
  `Upwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`Uid`, `per`, `Upwd`) VALUES
('3012', '张三', '3012'),
('3013', '李四', '3013'),
('3018', '孙八', '3018'),
('root', '李校长', 'root'),
('t4013', '张老师', '4013'),
('t4014', '沈老师', '4014'),
('t4015', '游老师', '4015'),
('t4016', '席老师', '4016'),
('t4017', '付老师', '4017'),
('t4018', '郑老师', '4018'),
('1234', 'asd', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
