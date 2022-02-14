-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 06:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storebaby_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'admin',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`, `role`, `date`) VALUES
(1, 'admin', 'admin', 'admin', '2022-02-13 18:46:16'),
(2, 'test', 'test', 'admin', '2021-10-14 05:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `product_type` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `product_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `product_type`, `product_type_id`) VALUES
(0, 'Bookmark', 'ยอดนิยม', 0),
(1, 'CATEID001', 'ของใช้เด็ก', 1),
(2, 'CATEID002', 'ผลิตภัณฑ์', 2),
(3, 'CATEID003', 'สุขอนามัย', 3),
(4, 'CATEID004', 'โภชนาการ', 4),
(5, 'CATEID005', 'ชุดเครื่องนอน', 5),
(6, 'CATEID006', 'ของเล่น', 6),
(7, 'CATEID007', 'แพมเพิศ & นมผง', 7),
(11, 'Promotion', 'โปรโมชั่น', 8),
(12, 'Collection', 'คอลเลคชั่น', 9);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `contact_stat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `subject`, `name`, `message`, `email`, `userid`, `contact_stat`, `contact_date`) VALUES
(10, '007', 'asdsarar', 'yuiuyiuyiuyiuyiuy', 'asdsar@sadfsarsa', 5, 'Receive', '2021-10-16 08:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_details` varchar(500) CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_type`, `product_image`, `brand`, `category`, `product_type_id`, `product_details`) VALUES
(3, 'รถเข็นเด็กพับ', '11000', 'ของใช้เด็ก', 'c001.jpg', 'Prince&Princess', 'CATEID001', 1, 'Prince&Princess รถเข็นเด็กพับได้ อัตโนมัติ ช่วยเพิ่มความสะดวกและความคล่องตัวให้กับพ่อแม่ ด้วยการใช้งานที่ง่ายด้วยการกดปุ่มเพียงครั้งเดียว การใช้งานระบบ AUTOPACT รวดเร็ว ว่องไว เคลื่อนย้ายได้สะดวกไปทุกที่ '),
(4, 'เบาะเป่าลมเด็ก', '12000', 'ของใช้เด็ก', 'c008.jpg', 'No Brand', 'CATEID001', 1, 'เบาะเป่าลมเด็ก สีชมพู/สีฟ้า อันเล็ก'),
(6, 'เก้าอี้ทานข้าวเด็ก', '13000', 'ของใช้เด็ก', 'c007.jpg', 'No Brand', 'CATEID001', 1, 'เก้าอี้สำหรับทานข้าวเด็กสีขาว'),
(7, 'รถเข็นเด็ก', '12000', 'ของใช้เด็ก', 'c006.jpg', 'kinderkraft', 'CATEID001', 1, 'รถเข็นเด็ก kinderkraft รุ่น CRUISER เหมาะสำหรับเด็กแรกเกิด จนถึงน้ำหนัก 15 กิโลกรัมดีไซน์สวย เบาะรองนอนกว้างเพื่อให้ลูกน้อยนอนได้อย่างสบายมากยิ่งขึ้น มีที่กั้นหน้าแบบถาด สำหรับวางของต่างๆ ที่วางเท้าปรับขึ้นลงได้รองรับช่วงเพื่อความสบายของลูก หลังคาโดมขนาดใหญ่ ป้องกันแสงแดดได้ดี มีช่องหน้าต่างสามารถเปิด-ปิดได้ '),
(8, 'รถเข็นเด็ก', '8900', 'ของใช้เด็ก', 'c005.jpg', 'Nuebabe', 'CATEID001', 1, 'รถเข็นเด็ก Nuebabe รุ่น Traveller ขนาดกำลังพอเหมาะเมื่อพับแล้วสามารถพกพาขึ้นเครื่องได้สะดวกสำหรับรุ่นนี้จะมาพร้อมกับ กระเป๋าสำหรับใส่รถเข็น และ ที่ใส่ขวดนมหรือแก้วน้ำ ต่อการใช้งาน เหมาะ เหมาะสำหรับเด็กที่มีน้ำหนักตัวไม่เกิน 25 กิโลกรัม'),
(9, 'เป้อุ้มเด็กคาเมร่า', '9500', 'ของใช้เด็ก', 'c004.jpg', 'Camera', 'CATEID001', 1, 'เป้อุ้มเด็กคาเมร่า รุ่น HIPPA5 ทำจากผ้า Polyster และ cotton 100% จากประเทศเกาหลี สามารถใช้ได้ตั้งแต่ 3 เดือน – 48 เดือน รองรับน้ำหนักได้ถึง 20 กิโลกรัม ได้รับการรับรองจาก สถาบัน IHDI (International Hip Dysplasia Institute) ของประเทศสหรัฐอเมริกา Hip seat Healthy Product สามารถรองรับสรีระช่วงสะโพกและขาของเด็ก ป้องกันภาวะข้อต่อสะโพกเคลื่อน (Hip Dislocation) '),
(10, 'รถเข็นเด็ก', '9900', 'ของใช้เด็ก', 'c003.jpg', 'Graco Modes', 'CATEID001', 1, 'รถเข็นเด็ก Graco Modes™ 3-in-1 Travel System ช่วยเพิ่มความสะดวกสบายให้กับพ่อแม่และลูกน้อย น้ำหนักเบา สะดวกและง่ายต่อการพกพา สามารถกางและพับเก็บได้ง่ายด้วยมือเดียว การติดตั้งไม่ยุ่งยากโดยใช้เข็มขัดนิรภัยรถยนต์หรือ LATCH สามารถปรับรูปแบบการนั่งได้ 10 แบบ สามารถปรับรูปแบบหันหน้าเข้า-ออกได้ พร้อมปรับเอนได้ 4 ระดับ '),
(11, 'เป้อุ้ม', '9000', 'ของใช้เด็ก', 'c002.jpg', 'Ergobaby', 'CATEID001', 1, 'เป้อุ้มเด็ก Ergobaby รุ่น OMNI360 วัสดุทำจากผ้าตาข่ายระบายความร้อน Cool Air Mesh เย็นสบายกว่า ออกแบบตามหลักสรีรศาสตร์ ได้รับการรับรองจากสถาบันโรคข้อสะโพกนานาชาติ (International Hip Dysplasia Institute) ลดความกังวลเรื่องปัญหากับกระดูกข้อต่อสะโพกของเด็ก เด็กขาไม่โก่ง '),
(15, 'ครีมทา', '12000', 'ผลิตภัณฑ์', 'c009.jpg', 'Mahahing', 'CATEID002', 2, ''),
(16, 'สบู่เหลว', '12000', 'ผลิตภัณฑ์', 'c010.jpg', 'Johnson', 'CATEID002', 2, ''),
(20, 'เสื่อรองคลาน', '8000', 'สุขอนามัย', 'c011.jpg', 'No Brand', 'CATEID003', 3, ''),
(21, 'ตัดเล็บเด็กอัตโนมัติ ', '8000', 'สุขอนามัย', 'c012.jpg', 'No Brand', 'CATEID003', 3, ''),
(24, 'Elava ที่นอนกันกรดไหลย้อน รุ่น Dual', '2888', 'ชุดเครื่องนอน', '896363317237940922-2-1.jpg', 'Elava', 'CATEID005', 5, 'ออกแบบตามหลักสรีระศาสตร์ : ตัวเบาะเอียง 30 องศา ใกล้เคียงกันกับองศาที่แม่อุ้ม ป้องกันกรดไหลย้อนและอาการแหวะนม ตัวเบาะโอบรับตัวลูกได้ดีกว่า ทาให้ทารกรู้สึกอุ่นใจเวลานอน เป็นตัวช่วยให้คุณแม่ไม่ต้องอุ้มตลอดเวลา ผ่านการทดสอบแล้วว่าป้องกันไรฝุ่นและเชื้อแบคทีเรีย : ผ่านการทดสอบจากสถาบันชั้นนาจากประเทศเกาหลี ,ญี่ปุ่น และสวิตเซอร์แลนด์ แล้วว่าป้องกันไรฝุ่นและเชื้อแบคทีเรียได้ ปลอดภัยต่อลูกน้อย น้าหนักเบาเคลื่อนย้ายสะดวก : คุณแม่สามารถพกเบาะนี้ไปได้ทุกที่ ให้ลูกหลับสบายทุกที่ ทุกเวลา สามารถถอดซักทาความสะ'),
(37, 'อาหารเสริมสําหรับเด็ก', '1699', 'โภชนาการ', '7643066889029991Picture5.jpg', 'Nutrimaster', 'CATEID004', 3, 'ml บำรุงสมอง เสริมความจำ บำรุงสายตา  เบนไซรัป ผลิตภัณฑ์เสริมอาหาร จากน้ำมันปลาทูน่า (ดีเอชเอ 70%) และวิตามินรวม กลิ่นผลไม้รวม  ได้คัดสรรน้ำมันปลาทูน่าที่มี DHA ความเข้มข้นสูง ซึ่งสามารถดูดซึมและคงตัวอยู่ในร่างกายได้นาน  จึงมีประสิทธิภาพสูงกว่าน้ำมันปลาทั่วไป โดยเน้นในเรื่องของการบำรุงสมองโดยเฉพาะ'),
(81, 'Huile Toys - พวงมาลัยรถ Happy Mini Steering Wheel', '550', 'ของเล่น', '53092355777390352916-01-510x510.jpg', 'Huile Toys', 'CATEID006', 6, 'พวงมาลัยหัดขับ มีไฟ มีเสียง กระจกมองข้าง ช่วยกระตุ้นพัฒนาการด้านสายตา, มัดกล้ามเนื้อ และยังสนุกสนานไปกับเสียงดนตรี แถมยังมีฐานที่มีคุณสมบัติสามารถดูดติดพื้นได้ทุกที่ ทำให้ง่ายในการเล่นของเด็กๆ พร้อมปุ่มกดฟังก์ชั่นมากมาย ให้น้องๆเพลิดเพลินเวลาเล่น พวงมาลัยหัดขับรถ มีเสียง มีไฟ ลูกเล่นมากมาย ต่อไปนี้คุณหนูๆ ไม่ต้องไปแย่งพวงมาลัยคุณพ่อเวลาขับรถแล้ว น้องๆจะสนุกสนานกับพวงมาลัยหัดขับที่มีทั้งเสียงและไฟที่น่าตื่นเต้น พร้อมปุ่มกดฟังก์ชั่นมากมาย ให้น้องๆเพลิดเพลินเวลาอยู่ในรถจนลืมซนเลย'),
(157, 'Manu Shirt Kid', '10000', 'ยอดนิยม', 'BM001.png', 'Manchester United', 'Bookmark', 0, ''),
(158, 'Liverpool Shift Kid', '10000', 'ยอดนิยม', 'BM002.jpg', 'Liverpool', 'Bookmark', 0, ''),
(159, 'Chelsea Shirt Kid', '10000', 'ยอดนิยม', 'BM003.jfif', 'Chelsea', 'Bookmark', 0, ''),
(203, 'ไฮคิว เปปติ พรีไบโอโพรเทก อาหารสำหรับทารกที่แพ้โปร', '550', 'แพมเพิศและนมผง', '7734571499021017ShotType1_540x540 (1).jpg', 'Hi-Q', 'CATEID007', 7, 'เหมาะสำหรับทารกแรกเกิด-1 ปี ไฮคิว เปปติ พรีไบโอโพรเทก อาหารสำหรับทารกที่แพ้โปรตีนนมวัวสูตรผสมโปรตีนเวย์เข้มข้นจากนมที่ผ่านการย่อยอย่างละเอียด(อาหารทางการแพทย์)  ผสม patented GOS/lcFOS ratio of 9:1 combination ซึ่งเป็นเอกสิทธิ์เฉพาะ'),
(468, 'ผ้าอ้อมสำเร็จรูป แบบเทป แบบกางเกง Cherry Baby เชอร', '400', 'แพมเพิศและนมผง', '834088983272605957.jpg', 'Cherry Baby ', 'CATEID007', 7, 'ผลิตโดยใช้เทคโนโลยีจากประเทศญี่ปุ่น ซึมซับน้ำได้ถึง 8 แก้ว บางเพียง 3 มม. อ่อนโยนต่อผิวลูกน้อย ด้วยเส้นใยฝ้ายเป็นมิตรกับผิว สวมใส่สบายให้ความรู้สึกเหมือนกางเกงในผ้าฝ้าย ไม่ก่อให้เกิดความระคายเคือง การออกแบบพิเศษรูปตัว U นูนด้านหลังดึงขึ้น แม้ดูดซับของเหลว ในปริมาณมาก ก็ไม่ทำให้ผ้าอ้อมหย่อนลงด้านหลัง แผ่นซึมซับด้านในแบบ 3 มิติ การดูดซึมรูปแบบผีเสื้อ ซึมซับรวดเร็ว กระจายทั่วแผ่น เหมาะสำหรับลูกน้อยที่ปัสสาวะบ่อยหรือปริมาณมาก'),
(632, 'AAG ของเล่นบล๊อกไม้เสริมพัฒนาการ (ชุด 1-10)', '555', 'ของเล่น', '554210801688542648dl0d6-510x576.png', 'AAG', 'CATEID006', 6, 'ของเล่นไม้เสริมพัฒนาการ ด้วยตัวอักษรภาษาอังกฤษและตัวเลข เพื่อเสริมสร้างทักษะ ให้เกิดความคุ้นชินกับตัวเลขและตัวอักษร อีกทั้งยังเสริมสร้างพัฒนาการประสาทสัมผัสจากการหยิบจับ และสายตาได้ดียิ่งขึ้น ด้วยสีสันที่สวยงามในโทนสดใสที่ออกแบบมาให้สำหรับเด็กน้อย เสริมสร้างพัฒนาการ ทั้งด้านการคิด การจดจำ ประสาทสัมผัส และสายตา'),
(752, 'อ่างอาบน้ำเด็ก', '390', 'ยอดนิยม', '90917308862334591category02.jpg', 'No Brand', 'Bookmark', 0, ''),
(851, 'Chillafish - จักรยานทรงตัว รุ่น Quadie + Trailer', '3400', 'ของเล่น', '88433933762129267HSS-CPQT01-03-510x510.jpg', 'Chillafish', 'CATEID006', 6, 'จักรยานขาไถสำหรับเด็กออกแบบคำนึงถึงสรีระเด็ก 1-3 ปี ใช้งานง่าย ปลอดภัย ดีไซน์สุดคูลจากเบลเยียม น้ำหนักเบา พกพาง่ายด้วยที่จับบริเวณเบาะนั่ง เติมเต็มความฝันของเด็กๆด้วยรถพ่วงที่มาพร้อมกัน และฟังก์ชั่นพิเศษ Click & Play Connector ที่ออกแบบมาให้สามารถต่อพ่วงกับ Chillafish Quadie คันอื่น หรือพ่วงกับรถพ่วงคันอื่น ให้ความสนุกทวีคูณ เมื่อต่อเป็นรถไฟยาวไกล Quadie + Trailie เล่นด้วยกัน มันส์กว่าแน่นอน'),
(909, 'Mamypoko Pants Lovely Day&Night ', '400', 'แพมเพิศและนมผง', '30986352226784666.jpg', 'Mamypoko ', 'CATEID007', 7, 'กางเกงผ้าอ้อมเด็กสำเร็จรูปราคาประหยัด ด้วยการซึมซับได้นานถึง 8 ชั่วโมง ใช้ได้ทั้งกลางวันและกลางคืน พร้อมแผ่นระบายอากาศ ที่ช่วยคลายกังวลเรื่องความอับชื้น ให้ลูกน้อยสบายตัวตลอดวัน'),
(1176, 'เพลเพน Nuebabe รุ่น 1746 สีฟ้า', '2500', 'ชุดเครื่องนอน', '84936321950394031i0.jpg', 'Nuebabe', 'CATEID005', 5, 'Playpen เปลไกว 2 ระดับชั้น  - โมบายตุ๊กตา มีเสียงดนตรี เสริมสร้างพัฒนาการ - ปรับเปลี่ยนเป็นเพลเพนได้ เปลมี 2 ชั้น - ให้คุณแม่ไม่ต้องก้มลงลึก ป้องกันแผลผ่าคลอด - มีตัวล็อคล้อ ป้องกันอันตราย - ขนาดกว้าง 74 cm ยาว 105 cm สูง 84 cm'),
(1753, 'เครื่องนึ่งขวดนม Fico เครื่องนึ่งขวดนม รุ่น FBS-05', '3240', 'โภชนาการ', '29478524099536553Picture7.jpg', 'Fico ', 'CATEID004', 4, 'ใช้งานได้ 3 ฟังก์ชั่นสุดคุ้ม นึ่ง อบแห้ง อุ่นนม-อุ่นอาหาร สุดยอดเครื่องนึ่งขวดนมที่ขายดีที่สุดตลอดกาล   - ปลั๊กแท้ เสียบใช้งานได้ไม่ต้องผ่านตัวแปลง - ระบบดิจิตอลใช้งานง่าย - เลือกใช้งานโหมดนึ่งฆ่าเชื้อพร้อมอบแห้ง 40,50,60 นาที - โหมดนึ่งฆ่าเชื้อ 10 นาที'),
(2019, 'Huile Toys - กล่องกิจกรรมการเรียนรู้ Happy Small W', '400', 'ของเล่น', '15779330936606975806-00-510x510.jpg', 'Huile Toys', 'CATEID006', 6, '  มีเสียงเพลงดนตรีไพเราะให้น้องๆ ฟัง มีไฟกระพริบ ที่น่าตื่นเต้น น้องๆยังจะได้ฝึกกล้ามเนื้อมือ ช่วยส่งเสริมพัฒนาการที่ดี เสริมสร้างความคิดสร้างสรรค์และจินตนาการ การมองเห็น และการได้ยิน'),
(2697, 'Cubbe ขนมมะม่วงกรอบทรงเต๋า', '50', 'โภชนาการ', '75103113513471463mango-pic-800x534.jpg', 'Cubbe', 'CATEID004', 4, 'สำหรับเด็กอายุ 8 เดือนขึ้นไป ละลายง่าย วิตามินเอ ช่วยบำรุงสายตา วิตามินบี1 บำรุงประสาท วิตามินซี ป้องกันหวัดและต้านอนุมูลอิสระ เป็นแหล่งของไฟเบอร์ สารเบต้าแคโรทีน ทำจากมะม่วงนํ้าดอกไม้สีทองสุก 100% ไม่เติมแต่งสารใดๆ'),
(3104, 'Sunny Baby Day&Night Pants ซันนี่เบบี้', '350', 'แพมเพิศและนมผง', '710907954848970833.jpg', 'Sunny Baby Day&Night Pants ', 'CATEID007', 7, 'แพมเพิสราคาถูกผ้าอ้อมแบบกางเกงSunny Baby Day & Night Pants นุ่ม ผ้าอ้อมเด็กสำเร็จรูป⁣ใหม่ บางเพียง 2 มม. นุ่ม เบา ใส่สบาย ระบายความร้อนออกได้อย่างรวดเร็ว ไม่อับชื้น ซึมซับได้อย่างมีประสิทธิภาพด้วยพลังของชุดซึมซับโครงสร้างใยตาข่าย จึงกระจายการซึมซับ ไม่จับตัวเป็นก้อน และบล๊อกการไหลย้อนกลับได้อย่างดี จึงช่วยให้ลูกน้อยเคลื่อนไหวได้อย่างอิสระ                          '),
(3498, 'Pampers แพมเพิร์ส Baby Dry Tape', '350', 'แพมเพิศและนมผง', '921222571926085524.jpg', 'Pampers', 'CATEID007', 7, 'สามารถช่วยดูดซับและล็อกความเปียกชื้นได้ถึง 2 เท่าเมื่อเปรียบเทียบกับผ้าอ้อมแพมเพิร์สรุ่นก่อนโดยมีเทคโนโลยีเมจิเคิลพอดส์ช่วยดูดซับความเปียกชื้นได้อย่างรวดเร็ว และกระจายน้ำอย่างเท่าเทียมกันรอบด้าน ซึบซับได้ดี แห้งยาวนานถึง 12 ชั่วโมง ระบายอากาศรอบด้าน เพื่อป้องกันสาเหตุหนึ่งของปัญหาผื่นผ้าอ้อมและให้ลูกน้อยเคลื่อนไหวอย่างคล่องตัว มีแถบรัดเอวที่อ่อนนุ่ม ไม่ระคายเคือง กระชับและถนอมผิวลูกน้อย '),
(3907, 'ผลิตภัณฑ์ทาหลังยุงกัด Enfant', '165', 'ผลิตภัณฑ์', '69474762738432418Picture4.jpg', 'Enfant', 'CATEID002', 2, 'สูตรอ่อนโยนแม้ผิวบอบบางอุดมด้วยคุณค่าสารสกัดออแกนิคนานาชนิดอย่าง Shea Butter Argan Oil และ Oilve Oil ช่วยให้ Skin barrier เพิ่มมากขึ้นและปกป้องผิวจากความแห้งกร้านและยังอุดมไปด้วย Rice Bran Oil Salflower Seed Oil และ Aloe Vera Extranct ช่วยปรนนิบัติให้ผิวนุ่มเรียบเนียนนอกจากนั้นยังผสาน Bisabolol และ Moringa Seed Oil '),
(5240, 'Summer Collection', '1', 'คอลเลคชั่น', '28255363903167170baby02.png', 'No Brand', 'Collection', 9, ''),
(6014, 'Lamoon', '199', 'ผลิตภัณฑ์', '521219065554458415d.jpg', 'Lamoon', 'CATEID002', 3, 'ผลิตภัณฑ์'),
(6294, 'Huile Toys - ม้าโยก Happy Rocking Pony', '1288', 'ของเล่น', '92519999080389066987-01-510x510.jpg', 'Huile Toys', 'CATEID006', 6, 'Huile Toys - ม้าโยก Happy Rocking Pony'),
(6389, 'เซ็ตเสื้อผ้าสำหรับเด็กทารก', '100', 'โปรโมชั่น', '27548355990850169test008.jpg', 'No Brand', 'Promotion', 8, ''),
(7065, 'เจลแอลกอฮอล์ Hand Sanitizer 400 ml - Prince & Prin', '280', 'สุขอนามัย', '62377159934224634Pack-Shot-Hand-Sanitizer-Alcohol-gel-02-510x510.jpg', 'Prince&Princess', 'CATEID003', 3, 'เจลล้างมือ เจลแอลกอฮอล์ Food Grade 75% ปกป้องคุณและคนในครอบครัว ให้ห่างไกลจากเชื้อไวรัสและแบคทีเรีย ต้องเลือกผลิตภัณฑ์ที่ปลอดภัย และผ่านการรับรองจาก อย. ด้วยสูตรอ่อนโยน เหมาะกับผิวที่บอบบาง จึงสามารถใช้ได้ทั้งผู้ใหญ่ และเด็กอายุตั้งแต่ 1 ขวบขึ้นไป'),
(7099, 'D-nee น้ำยาล้างขวดนมและจุกนม แบบชนิดเติม ', '250', 'ผลิตภัณฑ์', '36118730103172150Picture3.jpg', 'D-NEE', 'CATEID002', 2, 'ขจัดคราบ ไร้กลิ่น อ่อนโยน ปลอดภัย ผ่านการทดสอบ HYPOALLERGENIC TESTED ไม่ก่อให้เกิดการแพ้และการระคายเคือง'),
(7998, 'BabiMild ผลิตภัณฑ์ซักผ้าเด็กผสมปรับผ้านุ่ม \"White ', '170', 'สุขอนามัย', '367965052528856037y.jpg', 'BabiMild', 'CATEID003', 3, 'สูตร 2IN1 ผลิตภัณฑ์ซักผ้าเด็กผสมปรับผ้านุ่ม ผ้าสะอาดสัมผัสนุ่มในขวดเดียว               ด้วย Natural Polymer สารสกัดธรรมชาติที่เพิ่มความนุ่มแทนสารเคมีทั่วไปที่มักทำให้เกิดการระคายเคือง'),
(8549, 'John N Tree หมอนออร์แกนิค ลายรูปลูกสุนัข NATURAL B', '788', 'ชุดเครื่องนอน', '8181900300038847Peekaboo-Puppy-1-1000x1000-510x510.jpg', 'John N Tree', 'CATEID005', 5, 'ผลิตจากผ้าฝ้ายออร์เเกนิค 100% ผ้าที่นุ่มโดยธรรมชาติทั้งหมด เเละใช้เฉพาะผ้าฝ้ายออร์เเกนิคที่ได้ผ่านการรับรองว่าปลูกโดยใช้วิธีปฏิบัติการทางเกษตรอย่างยั่งยืน เเละที่ได้รักษาความอุดมสมบูรณ์ของดินโดยไม่ได้ใช้สารกำจัดศัตรูพืชเเละปุ๋ยที่เป็นพิษ เเละเป็นมิตรต่อสิ่งเเวดล้อม ผลิตภัณฑ์ได้ผ่านการรับรองคุณภาพจากสหภาพ Control Union Certifications (formerly SKAL) ซึ่งเป็นบริษัทตัวแทนที่ได้การรับรองจาก USDA ได้รับรองผลิตภัณฑ์ของเราทั้งหมด เเละได้ผ่านการรองรับว่าไม่ทำลายสิ่งเเวดล้อม'),
(9034, 'Baby Natura ข้าวกล้องบดผสมมันหวาน (80 ก.)', '79', 'โภชนาการ', '7552357337678861061.5.21babynatura_2D_0025.jpg', 'Baby Natura', 'CATEID004', 4, '“Start Right with Baby Natura” อาหารคือจุดเริ่มต้นพัฒนาการและการเติบโตของทารกและเด็กเล็ก เด็กในวัยนี้ควรได้รับสารอาหารจากธรรมชาติที่ปราศจากการปนเปื้อน อาหารแปรรูปจากสัตว์เป็นสิ่งกระตุ้นที่อาจก่อให้เกิดภูมิแพ้และอาการแพ้อาหารในเด็ก Baby Natura ผลิตภัณฑ์อาหารเสริมออร์แกนิกสำหรับทารกและเด็กเล็กหนึ่งในทางเลือกสุขภาพที่ดีสำหรับลูกน้อย ให้คุณแม่มั่นใจได้ว่าปลอดภัย เลือกสรรวัตถุดิบจากพืชออร์แกนิกชั้นดี คงไว้ซึ่งสารอาหารจากธรรมชาติ ปราศจากสารเคมีและการปรุงแต่งใดๆ “เริ่มต้นอย่างถูกต้องเพื่อรากฐานสุขภาพที'),
(14133, 'อุปกรณ์เตรียมอาหาร FARLIN ถ้วยเตรียมอาหารสำหรับเด็', '250', 'โภชนาการ', '18038096038604930Picture6.jpg', 'FARLIN', 'CATEID004', 4, 'ชามบรรจุอาหารเหลว รูปดอกไม้ สีม่วง  ตาข่ายบด/กรอง รูปดอกไม้สีแดง  เครื่องขูดรูปดอกไม้สีเขียว  เครื่องคั้นน้ำผลไม้ รูปดอกไม้สีส้ม ชามบดอาหาร ไม้ตอก บด/ตำ อาหาร (ทำจากไม้ธรรมชาติ) ช้อน-ส้อน ขนาด 5ml เหมาะกับขนาดปากเด็กทารก การออกแบบพิเศษของเครื่องขูด พร้อมช้อนที่มีความจุประมาณ 5 ml  สะดวกสำหรับคุณแม่ในการควบคุมอาหารของลูกน้อย ช้อนป้อนอาหารขนาดพอเหมาะกับปากของทารกพลาสติกทั้งหมดของเครื่องบดอาหาร สามารถนำไปต้มฆ่าเชื้อได้ด้วยไมโครเวฟ(ยกเว้นตะแกรงด้านบนที่เป็นโลหะ และไม้ตอกบดอาหาร)'),
(22467, 'D-NEE New Born Morning Fresh ผลิตภัณฑ์ปรับผ้านุ่มเ', '399', 'ผลิตภัณฑ์', '76893036105392544gg.jpg', 'D-NEE', 'CATEID002', 2, 'ช่วยถนอมเส้นใยของเนื้อผ้าให้สัมผัสสบาย นุ่มฟู และผ้าไม่ลีบติดตัว '),
(26987, 'Mama Cooks ปลานิลหยองดั้งเดิม', '80', 'โภชนาการ', '27378274807896409O01-768x768.jpg', 'Mama Cooks', 'CATEID004', 4, 'ปลานิลหยองสูตรดั้งเดิม (ไม่ปรุง) ตรา มาม๊าคุ๊กส์ ทำจากเนื้อปลา 100% เนื่องจากปลานิลเป็นปลาแม่น้าทาให้ไม่ก่อให้เกิดการแพ้อาหารทะเลสามารถทานได้ตั้งแต่ 6+เดือน อุดมไปด้วยสารอาหาร โอเมก้า3 และ โปรตีน กลูเตนฟรี ไม่เติมน้าตาลหรือเกลือ ไม่ใส่สีและวัตถุกันเสีย ไม่แต่งกลิ่น ไม่ใส่ผงชูรส'),
(31548, 'เพลเพน BABIES PLUS แถมกระโจมใหญ่กันยุง ปรับเป็นเปล', '3500', 'ชุดเครื่องนอน', '44969967919820408si.jpg', 'BABIES PLUS', 'CATEID005', 5, ' แบ่งได้2 ชั้น - มีกระโจมมุ้งเพิ่มความพรุ่งพริ้ง ป้องกันยุงและแมลง - มีที่เปลี่ยนผ้าอ้อม และมี่ที่ใส่ขวดนม - มีล้อเคลื่อนย้ายได้สะดวกและมีเบรกเพื่อไม่ให้เคลื่อนที่ - มีโมบายมีเสียงเพลงเพื่อคงามเพลิดเพลิน - มีกระเป๋าด้านข้างไว้เก็บของใช้ได้สะดวก - ปรับขาเป็นเปลโยกได้'),
(45094, 'แพมเพิส Youli Baby Pants ผ้าอ้อมเด็กสำเร็จรูป ', '400', 'แพมเพิศและนมผง', '55699445352452571Picture1.jpg', 'Youli ', 'CATEID007', 7, 'ดูดซึมเร็วสามารถลดเวลาที่ปัสสาวะจะสัมผัสกับผิวหนัง ยับยั้งการเกิดเชื้อราจากความเปียกชื้น เป็นสาเหตุให้เกิดผดผื่นแดง การ ดูดซึมดีลดเวลาในการเปลี่ยนแพมเพิสหลายรอบ ไม่รบกวนเวลาลูกนอน การออกแบบที่ป้องกันการรั่วซึม สัมผัสอ่อนโยน น้ำหนักเบาและระบายอากาศและรูปทรงที่พอดีตัว'),
(58885, 'ตราหมี โพรเท็กซ์ชัน 3 ผลิตภัณฑ์นมผง รสจืด กลิ่นวาน', '550', 'แพมเพิศและนมผง', '12697734116964619ShotType1_540x540.jpg', 'Bear Brand', 'CATEID007', 7, 'สูตรพัฒนาใหม่ สำหรับเด็ก 1 ปีขึ้นไป และทุกคนในครอบครัว  จุลินทรีย์ที่มีประโยชน์ LGG ใยอาหารจากธรรมชาติ Probio 1 DHA 15 มก. & ARA 2มก. ต่อ 1 แก้ว มี Omega 3, 6, 9 วิตามินเอ, ดี, ซี, สูง แคลเซียมสูง เหล็กสูง'),
(73567, 'Mommylicious Juice น้ำขิงผสมน้ำผึ้งมะนาว 300มิล. (', '89', 'โภชนาการ', '6760512128619353GS_01.jpg', 'Mommylicious Juice ', 'CATEID004', 4, 'Mommylicious Juice : Ginger with Honey&Lime 300ml. (น้ำขิงผสมน้ำผึ้งมะนาว 300มิล.) ดื่มเพลินๆกับรสหวานอมเปรี้ยวของน้ำขิงผสมน้ำผึ้งมะนาว เป็นการผสานรสชาติอย่างลงตัว นอกจากช่วยกระตุ้นการไหลเวียนของน้ำนม น้ำผึ้งและมะนาวช่วยให้ชุ่มคอ สำหรับแม่ที่เป็นหวัดเล็กๆน้อยๆ สามารถดื่มสูตรนี้บรรเทาอาการไอ เจ็บคอได้ดี และขิงยังช่วยบรรเทาอาการคลื่นไส้ อาเจียน จากการแพ้ท้อง และช่วยขับลม แก้ท้องอืด ท้องเฟ้อได้ดีมากๆ'),
(87283, 'เบบี้เลิฟ (BabyLove) อีซี่ เทป', '350', 'แพมเพิศและนมผง', '854022055617307645.jpg', 'BabyLove', 'CATEID007', 7, 'ผ้าอ้อมเด็กสำเร็จรูปชนิดเทป ออกแบบพิเศษเพื่อลูกน้อยด้วยการพัฒนาแผ่นซึมซับนุ่มพิเศษยิ่งขึ้น ดูดซับของเหลวเป็นอย่างดี ป้องกันลูกน้อยอย่างทะนุถนอมและแห้งสบาย ‏ คุณสมบัติสินค้า แผ่นซึมซับเบบี้ซอฟท์: ให้ความนุ่มพิเศษและสัมผัสที่อ่อนโยนต่อผิวที่บอบบางของเด็กแรกเกิด ทำให้ลูกน้อยรู้สึกสบายมากยิ่งขึ้น'),
(89652, 'Airy ผ้ากั้นขอบเตียงหายใจผ่านได้ ผ้า Cotton รุ่น ใ', '3500', 'ชุดเครื่องนอน', '59928072827284397uw.jpg', 'Airy', 'CATEID005', 5, 'ผลิตด้วยเทคโนโลยี 3D Fabric อากาศผ่านได้ ที่ช่วยระบายอากาศ และ หายใจผ่านได้'),
(91889, 'กระโถนกระต่ายน้อย', '690', 'ยอดนิยม', '19573658204378866category04.jpg', 'No Brand', 'Bookmark', 0, ''),
(99775, 'Winter Collection', '1', 'คอลเลคชั่น', '47883841437702613baby01.png', 'No Brand', 'Collection', 9, ''),
(99934, 'Huile Toys - กล่องบ้านกิจกรรมพร้อมคีบอร์ด Funny Co', '350', 'ของเล่น', '94887462020319461739-01-510x510.jpg', 'Huile Toys', 'CATEID006', 6, 'Huile Toys - กล่องบ้านกิจกรรมพร้อมคีบอร์ด Funny Cottage'),
(107687, 'BonnyKids (บอนนี่คิดส์) Baby Bumper Bed ที่นอนเด็ก', '450', 'ชุดเครื่องนอน', '488454780900313984i.jpg', 'BonnyKids', 'CATEID005', 5, 'ที่นอนแบบมีที่กั้น ผลิตจากผ้าฝ้าย 100% ไม่ระคายเคืองผิว ที่นอนและที่กั้นสามารถถอดปลอกออกซักได้ ใยสังเคราะห์เกรด A ไม่ยวบง่าย น้ำหนักเบา นุ่ม นอนสบาย'),
(283486, 'Mama Tales Perfect Oil น้ำมันหอมระเหยบริสุทธิ์จากส', '280', 'สุขอนามัย', '57281031476298443Mamatales-080-4-510x340.jpg', 'Mama Tales', 'CATEID003', 3, '“Mama Tales” ผลิตภัณฑ์ Essentail Oil Organic เป็นน้ำมันหอมระเหยบริสุทธิ์จากสารสกัดธรรมชาติและออร์แกนิค ช่วยให้หายใจโล่ง สดชื่น อ่อนโยนต่อผิวและเพิ่มความชุ่มชื้น ปราศจากน้ำหอมและสารเคมีต่างๆ ที่ก่อให้เกิดอาการแพ้'),
(367860, 'Mama Tales Mosquito Repellent Spray สเปรย์ไล่ยุงแล', '199', 'สุขอนามัย', '89966840191623155200716-Mamatel-Packshot5528-510x510.jpg', 'Mama Tales', 'CATEID003', 3, 'สามารถปกป้องยุงหลายสายพันธ์ เช่น ยุงที่ทำให้เกิดไข้ซิก้า ไข้เลือดออก มาเลเรีย ได้อย่างมีประสิทธิภาพ'),
(470209, 'Huile Toys - รถไฟของเล่นเด็ก Smart Q & A Cartoon T', '299', 'ของเล่น', '94110102628827684556-01.jpg', 'Huile Toys', 'CATEID006', 6, 'Huile Toys - รถไฟของเล่นเด็ก Smart Q & A Cartoon Train'),
(535443, 'Bath Collection', '1', 'คอลเลคชั่น', '80553055205852680kisspng-towel-infant-toddler-child-baby-towel-5b37748beff011.4419355715303609719828.png', 'No Brand', 'Collection', 9, ''),
(719428, 'BabiMild ผลิตภัณฑ์ซักผ้าเด็กผสมปรับผ้านุ่ม \"Sweet ', '170', 'สุขอนามัย', '42021428752061794gc.jpg', 'BabiMild', 'CATEID003', 3, 'สูตร 2IN1 ผลิตภัณฑ์ซักผ้าเด็กผสมปรับผ้านุ่ม ผ้าสะอาดสัมผัสนุ่มในขวดเดียว               ด้วย Natural Polymer สารสกัดธรรมชาติที่เพิ่มความนุ่มแทนสารเคมีทั่วไปที่มัก            ทำให้เกิดการระคายเคือง'),
(826198, 'เสื้อผ้าเด็ก', '88', 'ยอดนิยม', '57001674469580095category03.jpg', 'No Brand', 'Bookmark', 0, ''),
(832845, 'Huile Toys - ชุดเครื่องมือช่าง Little Artisan Game', '680', 'ของเล่น', '60941052476381624907-01-510x510.jpg', 'Huile Toys', 'CATEID006', 6, 'ชุดเครื่องมือช่างของเล่น มาพร้อมกิจกรรมมากมาย ช่วยเสริมสร้างทักษะการเรียนรู้ที่หลากหลาย เช่น การสังเกต แก้ปัญหาต่างๆ เสริมสร้างพัฒนาการกล้ามเนื้อ ไม่ว่าจะเป็นการหมุน บิด กด ทุบ เลื่อน ด้วยอุปกรณ์ช่างครบชุด อีกทั้งน้องๆยังได้เรียนรู้กับรูปทรงเลขาคณิตต่างๆ ตัวเลข สี พร้อมเพลิดเพลินกับแสงไฟกระพริบ เสียงดนตรี และเอฟเฟกต์ต่างๆ สีสันสดใสน่ารัก ดึงดูดความสนใจของเด็กๆ'),
(852068, 'MelaMaru เมล่ามารุ เบบี้ อายโบรว์ เซรั่ม', '300', 'สุขอนามัย', '67838952725062801phpv6Xw3R.jpg', 'MelaMaru', 'CATEID003', 3, 'เซรั่มบำรุงคิ้วสำหรับเด็กสูตรอ่อนโยน  ไม่ต้องล้างออก  เนื้อตัวยาแห้งเร็ว ไม่เหนียวเหนอะหนะ ปราศจากส่วนผสมของสารกันเสีย, แอลกอฮอล์, น้ำหอม, สีสังเคราะห์ซึ่งเป็นปัจจัยที่ทำให้เกิดการแพ้ / ระคายเคือง ด้วยสารสกัดจากธรรมชาติ ช่วยให้เส้นคิ้วดกดำ  ลดโอกาสการหลุดร่วงของขนคิ้ว  ทั้งยังช่วยบำรุงขนคิ้วให้มีความนุ่มชุ่มชื้น และช่วยบำรุงให้รู้สึกสบายผิว  ด้วยหัวแปรงปลายพู่กันที่ช่วยให้วาดทรงคิ้วที่ต้องการได้อย่างง่ายดาย'),
(3846225, 'IFLIN หมอนข้างใยไผ่ My Sweet Dreams Bamboo Bolster', '780', 'ชุดเครื่องนอน', '67159913474641373F_jBi1qQ.png', 'IFLIN', 'CATEID005', 5, 'IFLIN หมอนข้างใยไผ่ My Sweet Dreams Bamboo Bolster ไส้หมอนข้าง เราเลือกใช้เส้นใย Microfiber 100% เกรด premium ไม่มีผสมเส้นใยธรรมดาเลย มันเลยเป็นหมอนข้างที่นุ่มๆ ฟูๆ เด้งๆ กอดสบายมากๆ ใช้ได้ตั้งแต่แรกเกิด ถึง 1.5 ขวบ ใช้กอด ใช้เป็นหมอนเน่า หรือจะใช้หนุนหลังนอนตะแคงก็ได้ค่ะ ไส้หมอนข้างซักได้ เพื่อป้องกันสิ่งสกปรกตกค้างในหมอนข้าง ควรซักมือ แต่ถ้าซักเครื่องแนะนำให้ใช้ถุงตาข่าย ห้ามใช้น้ำร้อนและห้ามอบแห้ง เลือกรอบปั่นเบาสุด มีปลอกหมอนข้างใยไผ่แยกขายนะคะ สำรองเผื่อเอาไว้สลับซัก'),
(7689028, 'Mama Cooks โจ๊กข้าวกล้องหอมมะลิออร์แกนิค', '89', 'โภชนาการ', '14981604586946655J01-768x768.jpg', 'Mama Cooks', 'CATEID004', 4, 'โจ๊กข้าวกล้องหอมมะลิออร์แกนิคกึ่งสาเร็จรูป ตรา มาม๊าคุ๊กส์ อาหารเสริมสาหรับเด็กผลิตจาก ข้าวกล้องหอมมะลิออร์แกนิค 100% สามารถทานได้ตั้งแต่ 6+เดือน ไม่ใส่สีและวัตถุกันเสีย ไม่แต่งกลิ่น ไม่ใส่ผงชูรส ถูกสุขอนามัยมาตรฐาน อย.HALALBRC USDA GMP HACCP สามารถเก็บได้ 1ปีนับจากวันผลิตในกรณีที่ยังไม่เปิด ในกรณีที่ทานไม่หมดสามารถเก็บในอุณหภูมิห้อง และรับประทานให้หมดภายใน 90วัน'),
(23866173, 'Airy แผ่นรองศีรษะทารก รุ่น V.2 (คละสี แพ็คคู่)', '250', 'ชุดเครื่องนอน', '84389655166984911phpCXNZOI.jpg', 'Airy', 'CATEID005', 5, 'ช่วยระบายอากาศ ,รองน้ำลายน้องเวลานอน เปลี่ยนซักง่าย, รองรับสรีระทารกได้ดี');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `reviewid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review` longtext COLLATE utf8_unicode_ci NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`reviewid`, `product_id`, `qty`, `price`, `value`, `name`, `summary`, `review`, `review_date`) VALUES
(10, 11, 1, 1, 1, 'trryttry', 'jkjl', '56156', '2021-10-18 08:51:39'),
(11, 826198, 3, 3, 0, 'สุทธิภัทร ตัณฑะกูล', 'jkjl', '5915949849', '2021-11-07 12:45:38'),
(12, 11, 5, 5, 5, 'สุทธิภัทร', 'เยี่ยมจริงๆ', '-5555', '2022-02-06 04:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(1, 71339, 20),
(2, 82631, 30),
(3, 3, 200),
(4, 4, 20),
(5, 6, 20),
(6, 7, 20),
(7, 8, 20),
(8, 9, 20),
(9, 10, 30),
(10, 11, 149),
(11, 13, 20),
(12, 14, 20),
(13, 15, 20),
(14, 16, 20),
(15, 17, 20),
(16, 19, 20),
(17, 20, 20),
(18, 21, 20),
(19, 26, 13),
(20, 28, 21),
(21, 29, 18),
(22, 30, 20),
(23, 31, 22),
(26, 431860, 39),
(27, 158, 29),
(28, 358159, 30),
(29, 157, 23),
(30, 159, 18),
(31, 961461, 22),
(99999, 0, 274),
(100000, 99999, 999999),
(100001, 12345, 12345),
(100002, 6666, 6666),
(666666, 0, 274),
(77777, 0, 274),
(3333, 3333, 3333),
(9999, 9999, 9999),
(666667, 0, 274),
(666668, 0, 274),
(666669, 9999, 50),
(666670, 680511, 12395),
(666671, 211, 600),
(666672, 12, 12345),
(666673, 8078902, 12345),
(666674, 76, 12345),
(666675, 76, 12345),
(666676, 645, 12345),
(666677, 560162, 150),
(666678, 19772, 12345),
(666679, 19772, 12345),
(666680, 19772, 12345),
(666681, 19772, 12345),
(666682, 19772, 12345),
(666683, 85731, 2345),
(666684, 57014, 50),
(666685, 57014, 50),
(666686, 579112, 50),
(666687, 6456, 6666),
(666688, 502099, 12345),
(666689, 502099, 12345),
(666690, 502099, 12345),
(666691, 9966670, 12345),
(666692, 1440, 12345),
(666693, 78754, 12345),
(666694, 78754, 12345),
(666695, 19977, 999999),
(666696, 19977, 999999),
(666697, 92182, 999999),
(666698, 92182, 999999),
(666699, 92182, 999999),
(666700, 528551, 12345),
(666701, 528551, 12345),
(666702, 528551, 12345),
(666703, 88482, 999999),
(666704, 88482, 999999),
(666705, 88482, 999999),
(666706, 7677, 6666),
(666707, 7677, 6666),
(666708, 19496, 999999),
(666709, 30040, 999999),
(666710, 30040, 999999),
(666711, 30040, 999999),
(666712, 6014, 100),
(666713, 22467, 100),
(666714, 7099, 100),
(666715, 3907, 100),
(666716, 37, 100),
(666717, 14133, 100),
(666718, 1753, 100),
(666719, 7998, 100),
(666720, 719428, 100),
(666721, 7065, 100),
(666722, 367860, 100),
(666723, 283486, 100),
(666724, 852068, 100),
(666725, 26987, 100),
(666726, 2697, 100),
(666727, 73567, 100),
(666728, 7689028, 100),
(666729, 9034, 100),
(666730, 24, 100),
(666731, 8549, 100),
(666732, 3846225, 100),
(666733, 23866173, 100),
(666734, 89652, 100),
(666735, 31548, 100),
(666736, 1176, 100),
(666737, 107687, 100),
(666738, 832845, 100),
(666739, 5401, 100),
(666740, 81, 100),
(666741, 6294, 100),
(666742, 851, 100),
(666743, 99934, 100),
(666744, 470209, 100),
(666745, 2019, 100),
(666746, 632, 100),
(666747, 87283, 100),
(666748, 3104, 100),
(666749, 3498, 100),
(666750, 45094, 100),
(666751, 909, 100),
(666752, 468, 100),
(666753, 58885, 100),
(666754, 203, 100),
(666755, 132146, 100),
(666756, 402624, 100),
(666757, 5240, 100),
(666758, 99775, 100),
(666759, 535443, 100),
(666760, 6389, 10),
(666761, 32263, 8548),
(666762, 91889, 10),
(666763, 752, 10),
(666764, 826198, 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(10) NOT NULL,
  `address` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(5) NOT NULL,
  `tran_image` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Banking` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `customerid`, `amount`, `order_stat`, `order_date`, `firstname`, `lastname`, `telephone`, `address`, `town`, `postcode`, `tran_image`, `Banking`) VALUES
(1, 5, 780, 'Process', 'Nov 12, 2021', 'สุทธิภัทร', 'ตัณฑะกูล', 616099648, 'B 62/101 สวนหลวงคอนโดทาวน์ แขวงหนองบอน เขตประเวศ กรุงเทพมหานคร', 'dggggggggd', 10250, '359567234751731981.jpg', 'SCB'),
(5, 5, 9000, 'Confirmed', 'Oct 16, 2021', 'sarewtert', 'ertertretret', 2147483647, 'sgfdgfdgd4gd4g49d4g9d49gd', 'dggggggggd', 101010, '332337865532862783k.jpg', 'TrueWallet'),
(25, 5, 9000, 'Shipped', 'Oct 16, 2021', 'sarewtert', 'ertertretret', 2147483647, 'sgfdgfdgd4gd4g49d4g9d49gd', 'dggggggggd', 101010, '431411372961847525k.jpeg', 'TrueWallet'),
(83, 5, 9900, 'Process', 'Oct 16, 2021', 'sarewtert', 'ertertretret', 2147483647, 'sgfdgfdgd4gd4g49d4g9d49gd', 'dggggggggd', 101010, '38586599248543722C1.png', 'SCB'),
(686, 5, 129000, 'Route', 'Oct 16, 2021', 'sarewtert', 'ertertretret', 2147483647, 'sgfdgfdgd4gd4g49d4g9d49gd', 'dggggggggd', 101010, '50901083316591032C1.png', 'TrueWallet'),
(822, 5, 9000, 'Process', 'Feb 13, 2022', 'fgegefg', 'wefewfewf', 2147483647, 'fdgfdgdgregr', 'dggggggggd', 101010, '2580809449058968620220119220229.jpg', 'SCB'),
(8163, 5, 9000, 'ON HOLD', 'Feb 06, 2022', '', '', 0, '', '', 0, '8517428573534997ไไไไ.jfif', 'TrueWallet'),
(6395138, 4, 690, 'Process', 'Nov 07, 2021', 'fgegefg', 'wefewfewf', 2147483647, 'fdgfdgdgregr', 'dggggggggd', 101010, '55948498055953290120708771_810033659753589_8472358044943618957_n.jpg', 'TrueWallet');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transacton_detail_id`, `product_id`, `order_qty`, `transaction_id`) VALUES
(142, 159, 3, 686),
(141, 10, 10, 686),
(140, 10, 1, 83),
(139, 11, 1, 25),
(138, 11, 1, 5),
(143, 91889, 1, 6395138),
(144, 3846225, 1, 1),
(145, 11, 1, 8163),
(146, 11, 1, 822);

-- --------------------------------------------------------

--
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `userid` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(10) NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'guest',
  `user_profile` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'icon.jfif',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `useracc`
--

INSERT INTO `useracc` (`userid`, `password`, `firstname`, `lastname`, `email`, `telephone`, `address`, `username`, `role`, `user_profile`, `date`) VALUES
(4, '151515', 'test', 'test', 'fdgfdg6fd@sadadar', 751616, 'asdsaarsartar11wer', 'test', 'guest', '74386111122974396120708771_810033659753589_8472358044943618957_n.jpg', '2021-11-07 12:45:17'),
(5, '151515', 'asdsarar', 'werewrewr', 'asdsar@sadfsarsa', 27470321, 'fdgfdgdgregr', 'Rarey', 'guest', '8670089758462173220220119215751.jpg', '2022-02-13 18:35:53'),
(6, '1', 'dsfsdfdsf', 'dsfdsf', 'sadopsakodko@saokdoaskod', 751616, 'fdgfdgfdgfd3g26fd2g6', 'test123', 'guest', 'icon.jfif', '2021-10-12 17:00:00'),
(7, '151515', 'sarewtert', 'ertertretret', 'sasdfdsfdsar@asfdsafrsdf', 111, 'sgfdgfdgd4gd4g49d4g9d49gd', 'Rarey01', 'guest', 'icon.jfif', '2021-10-12 17:00:00'),
(8, 'admin', '', '', '', 0, '', 'admin', 'admin', 'icon.jfif', '2021-11-12 09:48:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- Indexes for table `useracc`
--
ALTER TABLE `useracc`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=666765;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `useracc`
--
ALTER TABLE `useracc`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;