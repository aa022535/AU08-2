-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015-10-05: 06:57:20
-- 伺服器版本: 5.6.20
-- PHP 版本： 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `ebbasis`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 資料表的匯出資料 `account`
--

INSERT INTO `account` (`RID`, `ID`, `會員姓名`, `帳號`, `密碼`, `信箱`, `手機號碼`, `性別`, `生日`, `顯示`, `會員階級`, `上次登入`, `登入IP`, `刪除`) VALUES
(11, 'AA1', '會員測試', 'testa', '123', 'test@yahoo.com.tw', '123456789', '男', '2014-01-01', 'Y', '一般會員', '2015-04-15 15:06:25', '127.0.0.1', 'N'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- 資料表的匯出資料 `manger`
--

INSERT INTO `manger` (`RID`, `ID`, `MName`, `MUID`, `MPassword`, `MEMail`, `Enable`, `性別`, `生日`, `聯絡電話`, `行動電話`, `職務類別`, `MLoginTime`, `MPer`, `ProcUser`, `ProcDate`, `ProcIP`, `DelTag`) VALUES
(23, 2, '測試2', 'test2', '123', '', 'Y', '男', '0000-00-00', '', '', '管理部', '2015-10-05 04:23:23', '', 'aaa', '2015-04-16 02:58:21', '210.60.9.248', 'N'),
(1, 1, '測試帳號', 'test', '123', '', 'Y', '男', '2015-01-01', '', '', '管理部', '2015-10-05 04:53:07', 'A,B,C', 'test', '2015-03-27 14:18:22', '127.0.0.1', 'N'),
(24, 3, '1234', 'aaa', 'aaa', '', 'Y', '男', '0000-00-00', '', '', '管理部', '2015-04-16 02:55:08', 'A,B,C', 'test', '2015-04-16 02:54:56', '210.60.9.248', 'N'),
(25, 42, 'yyyy', 'yyyy', '123', '', 'Y', '男', '1999-02-01', '433223434', '43211343', '系統開發', '2015-10-05 04:54:34', '', 'test', '2015-10-05 04:54:34', '::1', 'Y');

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
-- 資料表索引 `manger`
--
ALTER TABLE `manger`
 ADD PRIMARY KEY (`RID`);

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
MODIFY `RID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
