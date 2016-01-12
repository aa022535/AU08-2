-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-01-12 17:17:33
-- 伺服器版本: 5.6.26
-- PHP 版本： 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `aa022535`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `RID` int(10) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `會員姓名` varchar(20) NOT NULL,
  `帳號` varchar(20) NOT NULL,
  `密碼` varchar(20) NOT NULL,
  `信箱` varchar(50) NOT NULL,
  `手機號碼` varchar(20) NOT NULL,
  `性別` varchar(5) NOT NULL,
  `生日` date NOT NULL,
  `顯示` varchar(2) NOT NULL,
  `會員階級` varchar(20) NOT NULL,
  `上次登入` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `登入IP` varchar(20) NOT NULL,
  `刪除` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `account`
--

INSERT INTO `account` (`RID`, `ID`, `會員姓名`, `帳號`, `密碼`, `信箱`, `手機號碼`, `性別`, `生日`, `顯示`, `會員階級`, `上次登入`, `登入IP`, `刪除`) VALUES
(11, 'AA1', '會員測試', 'testa', '123', 'test@yahoo.com.tw', '123456789', '男', '2014-01-01', 'Y', '一般會員', '2015-12-12 11:20:58', '127.0.0.1', 'Y'),
(12, 'AA12', '金睪', 'hungwifi', '123456789', 'zxcv@au.edu.tw', '0912345678', '女', '1111-01-04', 'Y', '一般會員', '2015-06-04 03:39:20', '49.218.50.94', 'N');

-- --------------------------------------------------------

--
-- 資料表結構 `account2`
--

CREATE TABLE IF NOT EXISTS `account2` (
  `RID` int(5) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `會員姓名` varchar(20) NOT NULL,
  `帳號` varchar(20) NOT NULL,
  `密碼` varchar(20) NOT NULL,
  `顯示` varchar(2) NOT NULL,
  `刪除` varchar(2) NOT NULL,
  `生日` date NOT NULL,
  `上次登入` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `cust`
--

CREATE TABLE IF NOT EXISTS `cust` (
  `Cu_no` varchar(20) NOT NULL DEFAULT '',
  `Cu_name` varchar(20) DEFAULT NULL,
  `Cu_tel` varchar(10) DEFAULT NULL,
  `Cu_addr` varchar(40) DEFAULT NULL,
  `Cu_email` varchar(40) DEFAULT NULL,
  `DelTag` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `cust`
--

INSERT INTO `cust` (`Cu_no`, `Cu_name`, `Cu_tel`, `Cu_addr`, `Cu_email`, `DelTag`) VALUES
('1', '', '', '', '', 'Y'),
('111', '小華', '26958899', '士林區中山北路', 'opop@gmail', 'N'),
('155', '小明9', '123', '123', '123', 'N'),
('22', '', '', '', '', 'Y'),
('aa20150621', '小明', '89911515', '新北市淡水區', '123@gmail.com', '');

-- --------------------------------------------------------

--
-- 資料表結構 `fact`
--

CREATE TABLE IF NOT EXISTS `fact` (
  `Fa_no` varchar(20) NOT NULL DEFAULT '',
  `Fa_name` varchar(20) DEFAULT NULL,
  `Fa_per` varchar(20) DEFAULT NULL,
  `Fa_tel` varchar(10) DEFAULT NULL,
  `Fa_addr` varchar(40) DEFAULT NULL,
  `Fa_email` varchar(40) DEFAULT NULL,
  `DelTag` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fact`
--

INSERT INTO `fact` (`Fa_no`, `Fa_name`, `Fa_per`, `Fa_tel`, `Fa_addr`, `Fa_email`, `DelTag`) VALUES
('A01', '廠商5', '張三', '89911214', '新北市', '123@gmai.com', 'N'),
('A02', '廠商B', '小名', '29947158', '台北市', '456@gmai;.com', 'N'),
('A03', '', '', '', '', '', 'Y');

-- --------------------------------------------------------

--
-- 資料表結構 `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `It_no` varchar(20) NOT NULL,
  `It_name` varchar(20) NOT NULL,
  `It_pri` varchar(10) NOT NULL,
  `It_nowqty` varchar(9999) NOT NULL,
  `DelTag` varchar(2) NOT NULL,
  `ProcUser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `items`
--

INSERT INTO `items` (`It_no`, `It_name`, `It_pri`, `It_nowqty`, `DelTag`, `ProcUser`) VALUES
('1', '', '', '-3', 'Y', ''),
('2', '老農夫', '305', '7', 'Y', ''),
('3', '', '', '', 'Y', ''),
('4', '老農夫的複利投資套書', '499', '100', 'Y', ''),
('5', '', '', '', 'Y', ''),
('6', '', '', '', 'Y', ''),
('A01', '有錢人都愛用零錢包', '368', '55', 'N', ''),
('A02', '美國戰爭', '580', '66', 'N', ''),
('A03', '格雷1', '280', '26', 'N', ''),
('A04', '唐立淇2016星座大事', '489', '73', 'N', ''),
('A05', '紅衣小女孩', '350', '60', 'N', '');

-- --------------------------------------------------------

--
-- 資料表結構 `manger`
--

CREATE TABLE IF NOT EXISTS `manger` (
  `RID` int(10) NOT NULL,
  `ID` int(10) NOT NULL,
  `MName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MUID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MPassword` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MEMail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Enable` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `性別` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `生日` date NOT NULL,
  `聯絡電話` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `行動電話` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `職務類別` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MLoginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MPer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ProcUser` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ProcDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ProcIP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DelTag` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `manger`
--

INSERT INTO `manger` (`RID`, `ID`, `MName`, `MUID`, `MPassword`, `MEMail`, `Enable`, `性別`, `生日`, `聯絡電話`, `行動電話`, `職務類別`, `MLoginTime`, `MPer`, `ProcUser`, `ProcDate`, `ProcIP`, `DelTag`) VALUES
(23, 2, '測試2', 'test2', '123', '', 'Y', '男', '0000-00-00', '', '', '管理部', '2015-11-04 14:42:13', '', 'aa022535', '2015-11-04 14:42:13', '127.0.0.1', 'Y'),
(1, 1, '李思齊', 'aa022535', '123', '', 'Y', '女', '1994-00-00', '', '', '管理部', '2016-01-11 13:36:23', 'A,B,C', 'aa022535', '2015-12-12 10:48:39', '127.0.0.1', 'N'),
(24, 3, '1234', 'aaa', 'aaa', '', 'Y', '男', '0000-00-00', '', '', '管理部', '2015-11-04 14:42:16', 'A,B,C', 'aa022535', '2015-11-04 14:42:16', '127.0.0.1', 'Y'),
(25, 42, '李思齊', 'aa022535', '123', '', 'Y', '女', '1994-09-19', '', '', '系統開發', '2016-01-11 13:36:23', '', 'test', '2015-10-05 04:54:34', '::1', 'Y'),
(33, 1, '劉尚恆', 'aa022770', '123', '', 'Y', '男', '0000-00-00', '', '', '管理部', '2015-12-11 15:29:34', 'A,B,C', 'aa022535', '2015-12-11 15:29:34', '127.0.0.1', 'Y'),
(28, 6, '劉尚恆', 'aa022770', '123', '', 'Y', '男', '0000-00-00', '', '', '管理部', '2015-12-11 15:29:34', '', 'aa022535', '2015-12-11 15:29:34', '127.0.0.1', 'Y'),
(30, 1, '林博凱', 'aa022573', '123', '', 'Y', '男', '0000-00-00', '', '', '管理部', '2015-11-08 17:52:53', 'A,B,C', 'aa022535', '2015-11-04 14:39:44', '127.0.0.1', 'N'),
(32, 1, '詹旻珊', 'aa022582', '123', '', 'Y', '女', '0000-00-00', '', '', '管理部', '2016-01-06 03:02:15', 'A,B,C', 'aa022535', '2015-11-04 14:39:44', '127.0.0.1', 'N'),
(34, 2, '123', 'aa022574', '123', '', 'Y', '男', '0000-00-00', '', '', '管理部', '2016-01-05 16:22:29', '', 'aa022573', '2016-01-05 16:22:29', '127.0.0.1', 'Y');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Item` int(11) NOT NULL,
  `ProductName` varchar(32) CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `StockStatus` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`Item`, `ProductName`, `price`, `StockStatus`) VALUES
(1, 'products1', 336, ''),
(2, 'products2', 299, ''),
(3, 'products3', 600, ''),
(4, 'products4', 605, '');

-- --------------------------------------------------------

--
-- 資料表結構 `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `Sa_no` varchar(20) NOT NULL DEFAULT '',
  `Cu_no` varchar(20) NOT NULL DEFAULT '',
  `It_no` varchar(100) NOT NULL,
  `Sa_qua` varchar(100) NOT NULL,
  `Sa_date` date DEFAULT NULL,
  `DelTag` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `sale`
--

INSERT INTO `sale` (`Sa_no`, `Cu_no`, `It_no`, `Sa_qua`, `Sa_date`, `DelTag`) VALUES
('', '12', '', '', '0000-00-00', 'Y'),
('A01', '1', '1', '2', '2015-12-25', 'N'),
('A02', 'A02', '1', '1', '2016-01-06', 'N');

-- --------------------------------------------------------

--
-- 資料表結構 `saleorder`
--

CREATE TABLE IF NOT EXISTS `saleorder` (
  `Order_no` varchar(20) NOT NULL DEFAULT '',
  `Sa_no` varchar(20) DEFAULT NULL,
  `It_no` varchar(20) DEFAULT NULL,
  `Pri` mediumtext,
  `Qty` varchar(9999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `Sh_no` varchar(20) NOT NULL,
  `Fa_no` varchar(20) NOT NULL,
  `It_no` varchar(20) NOT NULL,
  `Sh_qua` int(150) NOT NULL,
  `Sh_date` date NOT NULL,
  `Sh_expect` date NOT NULL,
  `DelTag` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `shop`
--

INSERT INTO `shop` (`Sh_no`, `Fa_no`, `It_no`, `Sh_qua`, `Sh_date`, `Sh_expect`, `DelTag`) VALUES
('b01', 'A02', '1', 15, '0000-00-00', '0000-00-00', 'N');

-- --------------------------------------------------------

--
-- 資料表結構 `shoporder`
--

CREATE TABLE IF NOT EXISTS `shoporder` (
  `Shorder_no` varchar(20) NOT NULL DEFAULT '',
  `Sh_no` varchar(20) DEFAULT NULL,
  `Pri` mediumtext,
  `Qty` varchar(9999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(8) NOT NULL,
  `user_pwd` varchar(12) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_birthday` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`user_name`, `user_pwd`, `user_email`, `user_mobile`, `user_birthday`) VALUES
('123', '123', '123', '123', '123'),
('aa022535', '123', 'a29941647@gmail.com', '0975600579', '1994/9/19'),
('aa022573', '123', '111', '111', '112558');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`RID`);

--
-- 資料表索引 `account2`
--
ALTER TABLE `account2`
  ADD PRIMARY KEY (`RID`);

--
-- 資料表索引 `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`Cu_no`);

--
-- 資料表索引 `fact`
--
ALTER TABLE `fact`
  ADD PRIMARY KEY (`Fa_no`);

--
-- 資料表索引 `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`It_no`);

--
-- 資料表索引 `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`RID`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Item`);

--
-- 資料表索引 `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`Sa_no`);

--
-- 資料表索引 `saleorder`
--
ALTER TABLE `saleorder`
  ADD PRIMARY KEY (`Order_no`);

--
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`Sh_no`);

--
-- 資料表索引 `shoporder`
--
ALTER TABLE `shoporder`
  ADD PRIMARY KEY (`Shorder_no`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `account`
--
ALTER TABLE `account`
  MODIFY `RID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `account2`
--
ALTER TABLE `account2`
  MODIFY `RID` int(5) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `manger`
--
ALTER TABLE `manger`
  MODIFY `RID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `Item` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
