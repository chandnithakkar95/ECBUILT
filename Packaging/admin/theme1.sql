-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2015 at 07:35 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `theme1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Categoryname` varchar(255) NOT NULL,
  `Categorydescription` varchar(5000) NOT NULL,
  `Categoryimage` varchar(255) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  `Categorystatus` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Categoryname`, `Categorydescription`, `Categoryimage`, `C_date`, `U_date`, `Categorystatus`) VALUES
(26, 'animals', '', '', '2015-08-17', '2015-08-17', 1),
(27, 'ocean', '', '', '2015-08-17', '2015-08-17', 1),
(28, 'wildlife', '', '', '2015-08-17', '2015-08-17', 1),
(29, 'nature', '', '', '2015-08-17', '2015-08-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Follow` varchar(255) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  `Contactstatus` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Address`, `City`, `State`, `Country`, `Pincode`, `Phone`, `Mobile`, `Email`, `Website`, `Follow`, `C_date`, `U_date`, `Contactstatus`) VALUES
(1, '1234 Advocate Drive', 'AHEMDABAD', 'GUJARAT', 'INDIA', 334452, '123.333.4524 ', '', 'info@advocate.com ', 'www.advocate.com', '', '2015-08-18', '2015-08-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Menuname` int(5) NOT NULL,
  `Contentname` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `Contentimage` varchar(255) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  `Contentstatus` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ID`, `Menuname`, `Contentname`, `Content`, `Contentimage`, `C_date`, `U_date`, `Contentstatus`) VALUES
(19, 0, 'footer1', 'all_pages/fooer1.txt', 'image/content/', '2015-08-17', '2015-08-17', 1),
(20, 0, 'footer2', 'all_pages/footer2.txt', 'image/content/', '2015-08-17', '2015-08-17', 1),
(21, 18, 'about1', 'all_pages/about1.txt', 'image/content/blog-post_1.jpg', '2015-08-17', '2015-08-17', 1),
(22, 18, 'Grow a Garden', 'all_pages/Grow a Garden.txt', 'image/content/about-grow.jpg', '2015-08-17', '2015-08-17', 1),
(23, 18, 'Protect Wildlife', 'all_pages/Protect Wildlife.txt', 'image/content/about-wildlife.jpg', '2015-08-17', '2015-08-18', 1),
(24, 18, 'Volunteer', 'all_pages/Volunteer.txt', 'image/content/about-volunteer.jpg', '2015-08-17', '2015-08-17', 1),
(25, 17, 'Beautiful themes loaded with easy to customize options.', 'all_pages/Beautiful themes loaded with easy to customize options..txt', 'image/content/', '2015-08-17', '2015-08-17', 1),
(26, 17, 'Buy Stuff', 'all_pages/Buy Stuff.txt', 'image/content/', '2015-08-17', '2015-08-17', 1),
(27, 17, 'Donate', 'all_pages/Donate.txt', 'image/content/', '2015-08-17', '2015-08-17', 1),
(28, 17, 'Share', 'all_pages/Share.txt', 'image/content/', '2015-08-17', '2015-08-17', 1),
(29, 17, 'Save The Whales', 'all_pages/Save The Whales.txt', 'image/content/', '2015-08-18', '2015-08-18', 1),
(30, 17, 'Vote Superman for President', 'all_pages/Vote Superman for President.txt', 'image/content/', '2015-08-18', '2015-08-18', 1),
(31, 17, 'Protect Our Coral Reefs', 'all_pages/Protect Our Coral Reefs.txt', 'image/content/', '2015-08-18', '2015-08-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `extraimage`
--

CREATE TABLE IF NOT EXISTS `extraimage` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Imagename` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `extraimage`
--

INSERT INTO `extraimage` (`ID`, `Imagename`, `Image`) VALUES
(10, 'gallery', 'image/extraimage/gallery_thumb_1.jpg'),
(11, 'gallery', 'image/extraimage/gallery_thumb_2.jpg'),
(12, 'gallery', 'image/extraimage/gallery_thumb_3.jpg'),
(13, 'gallery', 'image/extraimage/gallery_thumb_4.jpg'),
(14, 'gallery', 'image/extraimage/gallery_thumb_5.jpg'),
(15, 'gallery', 'image/extraimage/gallery_thumb_6.jpg'),
(16, 'sponcer', 'image/extraimage/sponsor-1.png'),
(17, 'sponcer', 'image/extraimage/sponsor-2.png'),
(18, 'sponcer', 'image/extraimage/sponsor-3.png'),
(19, 'sponcer', 'image/extraimage/sponsor-4.png'),
(20, 'sponcer', 'image/extraimage/sponsor-5.png'),
(21, 'sponcer', 'image/extraimage/sponsor-6.png'),
(22, 'sponcer', 'image/extraimage/sponsor-7.png'),
(23, 'sponcer', 'image/extraimage/sponsor-9.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Imagename` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `CategoryID` int(5) NOT NULL,
  `SubcategoryID` int(5) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Target` varchar(255) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  `Gallerystatus` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `Imagename`, `Image`, `CategoryID`, `SubcategoryID`, `Link`, `Target`, `C_date`, `U_date`, `Gallerystatus`) VALUES
(44, 'photo1', 'image/gallery/gallery-large_1.jpg', 26, 0, '', '', '2015-08-17', '2015-08-17', 1),
(46, 'photo3', 'image/gallery/gallery-large_3.jpg', 27, 0, '', '', '2015-08-17', '2015-08-17', 1),
(47, 'photo4', 'image/gallery/gallery-large_4.jpg', 27, 0, '', '', '2015-08-17', '2015-08-17', 1),
(48, 'photo5', 'image/gallery/gallery-large_5.jpg', 28, 0, '', '', '2015-08-17', '2015-08-17', 1),
(49, 'photo6', 'image/gallery/gallery-large_6.jpg', 27, 0, '', '', '2015-08-17', '2015-08-17', 1),
(50, 'photo7', 'image/gallery/gallery-large_7.jpg', 29, 0, '', '', '2015-08-17', '2015-08-17', 1),
(51, 'photo8', 'image/gallery/gallery-large_8.jpg', 29, 0, '', '', '2015-08-17', '2015-08-17', 1),
(52, 'photo9', 'image/gallery/gallery-large_9.jpg', 29, 0, '', '', '2015-08-17', '2015-08-17', 1),
(53, 'photo10', 'image/gallery/gallery-large_10.jpg', 29, 0, '', '', '2015-08-17', '2015-08-17', 1),
(54, 'photo11', 'image/gallery/gallery-large_11.jpg', 28, 0, '', '', '2015-08-17', '2015-08-17', 1),
(55, 'photo12', 'image/gallery/gallery-large_12.jpg', 28, 0, '', '', '2015-08-17', '2015-08-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Logoname` varchar(255) NOT NULL,
  `Logotitle` varchar(255) NOT NULL,
  `Logoimage` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`ID`, `Logoname`, `Logotitle`, `Logoimage`) VALUES
(1, 'advocate', 'a theme for non-profits, charities, activists and political campaigns', 'image/logo/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Menuname` varchar(255) NOT NULL,
  `Menulink` varchar(255) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  `Menustatus` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `Menuname`, `Menulink`, `C_date`, `U_date`, `Menustatus`) VALUES
(17, 'home', 'index.php', '2015-08-17', '2015-08-17', 1),
(18, 'about', 'about.php', '2015-08-17', '2015-08-17', 1),
(19, 'products', 'product.php', '2015-08-17', '2015-08-17', 1),
(20, 'gallery', 'gallery.php', '2015-08-17', '2015-08-17', 1),
(21, 'contact', 'contact.php', '2015-08-17', '2015-08-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Mobile` bigint(13) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `Name`, `Mobile`, `Email`, `Subject`, `Message`, `Date`) VALUES
(6, 'sandhya', 9173150746, 'omshri65@gmail.com', 'Volunteer', 'hghghf', '2015-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Pagetitle` varchar(255) NOT NULL,
  `Pagename` varchar(255) NOT NULL,
  `Pagecontent` varchar(255) NOT NULL,
  `Metaname` varchar(255) NOT NULL,
  `Metakeyword` varchar(255) NOT NULL,
  `Metadescription` varchar(255) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  `Pagestatus` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `CategoryID` int(5) NOT NULL,
  `SubcategoryID` int(5) NOT NULL,
  `Productname` varchar(255) NOT NULL,
  `Productdescription` varchar(5000) NOT NULL,
  `Productimage` varchar(255) NOT NULL,
  `Productlink` varchar(255) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  `Productstatus` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `CategoryID`, `SubcategoryID`, `Productname`, `Productdescription`, `Productimage`, `Productlink`, `C_date`, `U_date`, `Productstatus`) VALUES
(83, 26, 0, 'Animal 1', '<div><font color="#8c8c8c" face="Helvetica Neue, helvetica, sans-serif"><span style="font-size: 13px; line-height: 23px;">Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</span></font></div><div><font color="#8c8c8c" face="Helvetica Neue, helvetica, sans-serif"><span style="font-size: 13px; line-height: 23px;">Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</span></font></div>', 'image/product/gallery-large_1.jpg', 'image/product/', '2015-08-17', '2015-08-17', 1),
(84, 28, 0, 'Ocean 1', '<div><font color="#8c8c8c" face="Helvetica Neue, helvetica, sans-serif"><span style="font-size: 13px; line-height: 23px;">Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</span></font></div><div><font color="#8c8c8c" face="Helvetica Neue, helvetica, sans-serif"><span style="font-size: 13px; line-height: 23px;">Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</span></font></div>', 'image/product/gallery-large_4.jpg', 'image/product/', '2015-08-17', '2015-08-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Slidername` varchar(255) NOT NULL,
  `Slidertitle` varchar(255) NOT NULL,
  `Sliderimage` varchar(255) NOT NULL,
  `Sliderstatus` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID`, `Slidername`, `Slidertitle`, `Sliderimage`, `Sliderstatus`) VALUES
(16, 'Slider1', 'Protect Endangered Animals - This is a great place to draw attention to your cause or charity with a bold image and some descriptive text.', 'image/slider/slide-1.jpg', 1),
(18, 'Slider3', 'Plant a Tree - Advocate theme features unlimited color options and Google fonts making it easy to customize to your unique purpose.', 'image/slider/slide-3.jpg', 1),
(19, 'Slider4', 'Save the Rainforest - Bring awareness to your cause with style and function.', 'image/slider/slide-4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Socialname` varchar(255) NOT NULL,
  `Socialimage` varchar(255) NOT NULL,
  `Sociallink` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`ID`, `Socialname`, `Socialimage`, `Sociallink`) VALUES
(5, 'Twitter', 'image/social/', 'a'),
(6, 'Facebook', 'image/social/', 'v'),
(7, 'Flickr', 'image/social/', 'd'),
(8, 'Vimeo', 'image/social/', 'c'),
(9, 'Google', 'image/social/', 't');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `CategoryID` int(5) NOT NULL,
  `Subcategoryname` varchar(255) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  `Subcategorystatus` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `update1`
--

CREATE TABLE IF NOT EXISTS `update1` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Updatename` varchar(255) NOT NULL,
  `Updatedescription` varchar(1000) NOT NULL,
  `Updatelink` varchar(1000) NOT NULL,
  `C_date` date NOT NULL,
  `U_date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Emailid` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Emailid`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
