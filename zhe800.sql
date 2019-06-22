-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-06-22 03:21:58
-- 服务器版本： 10.1.37-MariaDB
-- PHP 版本： 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `zhe800`
--

-- --------------------------------------------------------

--
-- 表的结构 `ck`
--

CREATE TABLE `ck` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `huohao` varchar(50) CHARACTER SET utf8 NOT NULL,
  `num` varchar(50) CHARACTER SET utf8 NOT NULL,
  `price` varchar(50) CHARACTER SET utf8 NOT NULL,
  `zhe` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fenlei` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `dingdan`
--

CREATE TABLE `dingdan` (
  `id` int(11) NOT NULL,
  `zhuangtai` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `goosid` int(20) NOT NULL,
  `color` varchar(30) CHARACTER SET utf8 NOT NULL,
  `size` varchar(20) CHARACTER SET utf8 NOT NULL,
  `num` varchar(20) CHARACTER SET utf8 NOT NULL,
  `allprice` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time` varchar(20) CHARACTER SET utf8 NOT NULL,
  `xzdz` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ddbh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kuaidi` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `fenlei`
--

CREATE TABLE `fenlei` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fenleiimg` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `fenlei`
--

INSERT INTO `fenlei` (`id`, `name`, `fenleiimg`) VALUES
(1, '衣服', 'http://localhost/phpbox/onlinepro/uploads/2S6MfdG515570254531.png'),
(2, '解决', 'http://localhost/phpbox/onlinepro/uploads/6esPt6IO1560160924TB2CMOzoVXXXXb2XpXXXXXXXXXX_!!107720545.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `goos`
--

CREATE TABLE `goos` (
  `id` int(11) NOT NULL,
  `price` varchar(50) CHARACTER SET utf8 NOT NULL,
  `zhekou` varchar(50) CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fenlei` varchar(50) CHARACTER SET utf8 NOT NULL,
  `num` varchar(50) CHARACTER SET utf8 NOT NULL,
  `huohao` varchar(50) CHARACTER SET utf8 NOT NULL,
  `upgoos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `goos`
--

INSERT INTO `goos` (`id`, `price`, `zhekou`, `title`, `fenlei`, `num`, `huohao`, `upgoos`) VALUES
(1, '50', '10', '衣服1', '1', '200', '001', 1);

-- --------------------------------------------------------

--
-- 表的结构 `goosimg`
--

CREATE TABLE `goosimg` (
  `id` int(11) NOT NULL,
  `goosid` int(11) NOT NULL,
  `zhuurl` varchar(200) CHARACTER SET utf8 NOT NULL,
  `img2url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `img3url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `img4url` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `img5url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `xiang` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ckid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `goosimg`
--

INSERT INTO `goosimg` (`id`, `goosid`, `zhuurl`, `img2url`, `img3url`, `img4url`, `img5url`, `xiang`, `ckid`) VALUES
(1, 1, 'http://localhost/phpbox/onlinepro/uploads/eGwssswz1557026886O1CN010VGQDf1lqxjBJAXC3_!!848414871.jpg_2200x2200Q50s50.jpg', 'http://localhost/phpbox/onlinepro/uploads/eGwssswz1557026886O1CN010VGQDf1lqxjBJAXC3_!!848414871.jpg_2200x2200Q50s50.jpg', 'http://localhost/phpbox/onlinepro/uploads/eGwssswz1557026886O1CN010VGQDf1lqxjBJAXC3_!!848414871.jpg_2200x2200Q50s50.jpg', 'http://localhost/phpbox/onlinepro/uploads/eGwssswz1557026886O1CN010VGQDf1lqxjBJAXC3_!!848414871.jpg_2200x2200Q50s50.jpg', 'http://localhost/phpbox/onlinepro/uploads/eGwssswz1557026886O1CN010VGQDf1lqxjBJAXC3_!!848414871.jpg_2200x2200Q50s50.jpg', 'http://localhost/phpbox/onlinepro/uploads/eGwssswz1557026886O1CN010VGQDf1lqxjBJAXC3_!!848414871.jpg_2200x2200Q50s50.jpg', 0);

-- --------------------------------------------------------

--
-- 表的结构 `guige`
--

CREATE TABLE `guige` (
  `id` int(11) NOT NULL,
  `goosid` int(11) NOT NULL,
  `color` varchar(500) CHARACTER SET ucs2 NOT NULL,
  `chima` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `guige`
--

INSERT INTO `guige` (`id`, `goosid`, `color`, `chima`) VALUES
(1, 1, '红色，蓝色', 'L,2XL,3XL,5XL');

-- --------------------------------------------------------

--
-- 表的结构 `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `userid` int(30) NOT NULL,
  `phone` varchar(30) CHARACTER SET utf8 NOT NULL,
  `suo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `xxdz` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(60) CHARACTER SET utf8 NOT NULL,
  `ismr` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='地址表';

--
-- 转存表中的数据 `locations`
--

INSERT INTO `locations` (`id`, `userid`, `phone`, `suo`, `xxdz`, `username`, `ismr`) VALUES
(1, 6, '33', '上海 虹口区 城区', '3333', '33', '0');

-- --------------------------------------------------------

--
-- 表的结构 `lunbo`
--

CREATE TABLE `lunbo` (
  `id` int(11) NOT NULL,
  `imgurl` varchar(255) CHARACTER SET utf8 NOT NULL,
  `aurl` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='轮播表';

--
-- 转存表中的数据 `lunbo`
--

INSERT INTO `lunbo` (`id`, `imgurl`, `aurl`, `name`) VALUES
(9, 'http://localhost/phpbox/onlinepro/uploads/2S6MfdG515570254531.png', '', ' 活动主推'),
(10, 'http://localhost/phpbox/onlinepro/uploads/2S6MfdG515570254531.png', '', ' '),
(11, 'http://localhost/phpbox/onlinepro/uploads/2S6MfdG515570254531.png', '', ' '),
(12, 'http://localhost/phpbox/onlinepro/uploads/2S6MfdG515570254531.png', '', ' 活动主推'),
(13, 'http://localhost/phpbox/onlinepro/uploads/2S6MfdG515570254531.png', '', ' '),
(14, 'http://localhost/phpbox/onlinepro/uploads/2S6MfdG515570254531.png', '', ' ');

-- --------------------------------------------------------

--
-- 表的结构 `shopcar`
--

CREATE TABLE `shopcar` (
  `id` int(11) NOT NULL,
  `userid` int(10) NOT NULL,
  `goosid` int(10) NOT NULL,
  `color` varchar(100) CHARACTER SET utf8 NOT NULL,
  `size` varchar(100) CHARACTER SET utf8 NOT NULL,
  `num` varchar(10) CHARACTER SET utf8 NOT NULL,
  `img` varchar(300) CHARACTER SET utf8 NOT NULL,
  `title` varchar(300) CHARACTER SET utf8 NOT NULL,
  `zhe` varchar(20) CHARACTER SET utf8 NOT NULL,
  `price` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='购物车表';

--
-- 转存表中的数据 `shopcar`
--

INSERT INTO `shopcar` (`id`, `userid`, `goosid`, `color`, `size`, `num`, `img`, `title`, `zhe`, `price`) VALUES
(1, 6, 1, '红色，蓝色', '3XL', '1', 'http://localhost/phpbox/onlinepro/uploads/eGwssswz1557026886O1CN010VGQDf1lqxjBJAXC3_!!848414871.jpg_2200x2200Q50s50.jpg', '$衣服1', '10', '50');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `class` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `jianjie` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `times` varchar(255) NOT NULL,
  `signature` mediumtext NOT NULL,
  `headimg` varchar(300) NOT NULL DEFAULT 'http://img0.imgtn.bdimg.com/it/u=1415158042,3021649704&fm=26&gp=0.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `class`, `name`, `sex`, `jianjie`, `username`, `password`, `grade`, `phone`, `times`, `signature`, `headimg`) VALUES
(6, '0', '', '女', '', '20000323', '123', '', '123', '101560160767', 'ostemgmkgrdabrgkokas', 'http://localhost/phpbox/onlinepro/uploads/TM4C0P691557035207O1CN010VGQDf1lqxjBJAXC3_!!848414871.jpg_2200x2200Q50s50.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `zhifu`
--

CREATE TABLE `zhifu` (
  `id` int(11) NOT NULL,
  `userid` int(100) NOT NULL,
  `pass_word` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转储表的索引
--

--
-- 表的索引 `ck`
--
ALTER TABLE `ck`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `dingdan`
--
ALTER TABLE `dingdan`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `fenlei`
--
ALTER TABLE `fenlei`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `goos`
--
ALTER TABLE `goos`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `goosimg`
--
ALTER TABLE `goosimg`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `guige`
--
ALTER TABLE `guige`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `lunbo`
--
ALTER TABLE `lunbo`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `shopcar`
--
ALTER TABLE `shopcar`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zhifu`
--
ALTER TABLE `zhifu`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ck`
--
ALTER TABLE `ck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `dingdan`
--
ALTER TABLE `dingdan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `fenlei`
--
ALTER TABLE `fenlei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `goos`
--
ALTER TABLE `goos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `goosimg`
--
ALTER TABLE `goosimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `guige`
--
ALTER TABLE `guige`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `lunbo`
--
ALTER TABLE `lunbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用表AUTO_INCREMENT `shopcar`
--
ALTER TABLE `shopcar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `zhifu`
--
ALTER TABLE `zhifu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
