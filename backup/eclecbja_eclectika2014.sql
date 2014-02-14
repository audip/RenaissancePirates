-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2014 at 06:04 PM
-- Server version: 5.1.63-rel13.4-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eclecbja_eclectika2014`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE IF NOT EXISTS `questionbank` (
  `qno` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `qdesc` varchar(80) NOT NULL,
  `ques` varchar(500) NOT NULL,
  `ans` varchar(200) NOT NULL,
  `points` int(10) NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `questionbank`
--

INSERT INTO `questionbank` (`qno`, `image`, `qdesc`, `ques`, `ans`, `points`) VALUES
(1, 'img/monalisa.png', '', 'Mona Lisa, oil painting on a poplar wood panel by the Italian painter, Leonardo da Vinci, probably the world&#39;s most famous painting. It was painted sometime between 1503 and 1506, when da Vinci was living in Florence, and it now hangs in Paris, where it remains an object of pilgrimage in the 21st century. The poplar panel shows evidence of warping and was stabilized in 1951 with the addition of an oak frame and in 1970 with four vertical braces. Dovetails also were added, to prevent the wide', 'louvre', 10),
(2, 'img/city.png', '', 'Much of the Renaissance art and education was funded and supported in _____________________, ruled by ________________________.\r\n<br/>(Hint: Enter in order of blanks and dont use any commas)', 'florencelorenzodemedici', 20),
(3, 'img/tom.png', 'Decrypt the Anagram\r\n', 'An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example orchestra can be rearranged into carthorse. <span class="clue">"Tom Marvolo Riddle"</span>\r\n', 'lordvoldemort', 15),
(4, 'img/gunpowder.png', '', 'This Empire had been one of the first Middle Eastern states (that extended into Europe, making them the first European state as well) to effectively use gunpowder weapons and used them to great effect conquering much of the Middle East, North Africa, and the Balkans. In the 17th century, the state began to stagnate as more modern technologies and strategies were not adopted. Which Empire are we talking about? <br/>(Hint : ''Only the name of the empire'')\r\n', 'ottoman\r\n', 10),
(5, 'img/engine.jpg', 'Grab a Mechanical Engineer', 'In a 4-stroke engine, a camshaft is operated through timing ears driven by the rotation of the _______________.<br/> (Hint: Seek the name of this shaft)', 'crankshaft', 40),
(6, 'img/printingworkshop.jpg', '', 'The invention of the printing press by a German goldsmith (1398-1468) is widely regarded as the single most important event of the second millennium, and is one of the defining moments of the Renaissance. The Printing Revolution which it sparked throughout Europe, worked as a modern "agent of change" in the transformation of medieval society. Who is the German Goldsmith?\r\n', 'johannesgutenberg\r\n', 15),
(7, 'img/stpeters.png', '', 'He was an Italian artist and a prominent architect who worked principally in Rome. He was the leading sculptor of his age, credited with creating the Baroque style of sculpture.  His most notable creation during this period was the piazza leading to St Peter''s. \r\nWrite his FULL name.', 'gianlorenzobernini', 15),
(8, 'img/draconiandevil.jpg', 'Decrypt the Anagram', 'An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example orchestra can be rearranged into carthorse. <span class="clue">"O, Draconian Devil"</span>\r\n', 'leonardodavinci', 10),
(9, 'img/florenze.png', '', 'David, a masterpiece created between 1501 and 1504, is a 5.17-metre marble statue of a standing male nude. It refers to a Biblical hero.\r\n David has become one of the most recognized works of Renaissance sculpture, becoming a symbol of both strength and youthful human beauty.\r\nWrite FULL name of the famous artist who carved David.', 'michelangelodilodovicobuonarrotisimoni', 20),
(10, '', 'Grab a Computer Sciecnce Engineer', 'Please follow the link <a href="compsci.php" target="_blank"> LINK </a>', 'csewinsafteratiringeffort', 40);

-- --------------------------------------------------------

--
-- Table structure for table `quizuser`
--

CREATE TABLE IF NOT EXISTS `quizuser` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `score` int(50) NOT NULL,
  `q1` varchar(11) NOT NULL,
  `q2` varchar(11) NOT NULL,
  `q3` varchar(2) NOT NULL,
  `q4` varchar(2) NOT NULL,
  `q5` varchar(2) NOT NULL,
  `q6` varchar(2) NOT NULL,
  `q7` varchar(2) NOT NULL,
  `q8` varchar(2) NOT NULL,
  `q9` varchar(2) NOT NULL,
  `q10` varchar(2) NOT NULL,
  `q11` varchar(2) NOT NULL,
  `q12` varchar(2) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quizuser`
--

INSERT INTO `quizuser` (`id`, `username`, `score`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`) VALUES
(1, 'aditya', 60, '1', '1', '0', '1', '2', '2', '2', '2', '2', '2', '2', '2'),
(2, 'mansi', 0, '0', '0', '0', '0', '2', '2', '2', '2', '2', '2', '2', '2'),
(3, 'trialuser', 110, '1', '1', '1', '0', '1', '0', '1', '1', '0', '0', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE IF NOT EXISTS `stuinfo` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `college` varchar(80) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `branch` varchar(80) NOT NULL,
  `year` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `otp` varchar(15) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`id`, `name`, `username`, `password`, `college`, `mobile`, `email`, `gender`, `branch`, `year`, `pic`, `otp`) VALUES
(1, 'Krishna Khowal', 'krishnakhowal', '1234567890', 'National Institute of Technology, Raipur', '9806966179', 'krishna.khowal@gmail.com', 'Male', 'Computer Science & Engineering', 'Third', '', '52ecf60b56b52'),
(2, 'Aditya Purandare', 'aditya', 'aditya', 'National Institute of Technology, Raipur', '9301522144', 'aditya.p1993@hotmail.com', 'Male', 'Information Technology', 'Third', 'images/aditya.jpg', '52ed097c1b140'),
(3, 'RAKESH ROUSHAN', 'rakesh.100295', 'iMrake$#', 'NIT Raipur | Raipur', '8269244771', 'rakeshroushan@live.com', 'Male', 'Mining Engineering', 'Second', '', '52ed1d7d80495'),
(4, 'Siddharth Dixit', 'dixit.siddharth', '9753330878', 'NIT Raipur | Raipur', '9753330878', 'siddharth@eclectika.org', 'Male', 'Metallurgical Engineering', 'Third', '', '52edbddf6743e'),
(5, 'Divya Panchal', 'divya093', '6970divya', 'Sanghvi Institute of Management and Science | Indore', '9713175236', 'divya.panchal093@gmail.com', 'Female', 'Computer Science & Engineering', 'Fourth', '', '52ee104735e28'),
(6, 'RICHA  SINGHAL', 'richa singhal', 'apple23', 'NIT-Raipur | Raipur', '7587320573', 'richasinghal1291@gmail.com', 'Female', 'Chemical Engineering', 'Fourth', '', '52f50ab723adc'),
(7, 'Harshita Verma', 'Harshita', 'forbearance', 'N.I.T. Raipur', '9479025754', 'harshitaverma1793@gmail.com', 'Female', 'Chemical Engineering', 'Second', '', '52f514d2d8e62'),
(8, 'ishan', 'isp.ishan', 'eclectika14', 'National Institute of Technology, Raipur', '9406248787', 'ishanhhh@gmail.com', 'Male', 'Chemical Engineering', 'Third', '', '52f518ecc976f'),
(9, 'Afroz Husain', 'afrozhusain', 'princeofuni', 'NIT Raipur | Raipur', '8305286179', 'afrozhusain@gmail.com', 'Male', 'Metallurgical Engineering', 'Third', '', '52f53cac32194'),
(10, 'ABHISHEK AGRAWAL', 'abhi2506', '25061994', 'NIT Raipur | Raipur', '7828685190', 'rsppnaa@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'Second', '', '52f5c8b14af54'),
(11, 'Reyaz Adil', 'reyazadil', 'c0mputer', 'NIT Raipur | Raipur', '9669202973', 'reyazadil@gmail.com', 'Male', 'Mechanical Engineering', 'Third', '', '52f5caf26acf7'),
(12, 'kasi', 'kasi', '8982465293', 'National Institute of Technology, Raipur', '8982465293', 'kasi.nath34@gmail.com', 'Male', 'Chemical Engineering', 'Second', '', '52f5d798afb55'),
(13, 'Gagan Virdi', 'virdigagan', 'indian', 'SSIPMT Raipur', '7898268624', 'gagan_virdi_singh@yahoo.co.in', 'Male', 'Civil Engineering', 'Fourth', '', '52f627b489621'),
(14, 'MANISH  BALANI', 'manish', 'manish', 'National Institute of Technology, Raipur', '9165249194', 'manishbalani.nitrr.mech.2k16@gmail.com', 'Male', 'Mechanical Engineering', 'Second', '', '52f630b102338'),
(15, 'Jasmeet Saluja', 'jazz_king', '12121025', 'NIT Raipur | Raipur', '9713110889', 'jasmeetsingh_1994@yahoo.com', 'Male', 'Mining Engineering', 'Second', '', '52f659428328b'),
(16, 'keshaw narayan pathak', 'keshaw_narayan', '123456789', 'NIT Raipur | Raipur', '9039394207', 'knpsiwan@gmail.com', 'Male', 'Computer Science & Engineering', 'Third', '', '52f67c8480f5b'),
(17, 'lucky', 'lucky', '12345', 'NIT | Rourkela', '9198066848', 'luckyluckyrana@gmail.com', 'Male', 'Biotechnology', 'First', '', '52f67d6696f4e'),
(18, 'HIMANSHU WADHWANI', 'HIMANSHU WADHWANI', '7828688930', 'NIT Raipur | Raipur', '7828688930', 'planethimanshu@live.com', 'Male', 'Mining Engineering', 'Second', '', '52f67f46daa1a'),
(19, 'Devendra Kumar', 'princesbiraipur', '31011990', 'NIT-Raipur | Raipur', '9178692469', 'devendra.kumar157@gmail.com', 'Male', 'MCA', 'Second', '', '52f6829094efe'),
(20, 'Mohit', 'mohit123q', 'mohit123', 'NIT Raipur | Raipur', '9907434722', 'mohit123q@gmail.com', 'Male', 'Mining Engineering', 'Third', '', '52f684491877a'),
(21, 'Nihal Siddiqui', 'Nihal', 'bescaredofme', 'NIT Raipur', '09770706254', 'nihal_rockin@yahoo.co.in', 'Male', 'Civil Engineering', 'Second', '', '52f685622c8ba'),
(22, 'Jitendra Bhaskar', 'evocage', 'pass@1234', 'National Institute of Technology, Raipur', '7306311531', 'jitendra.b@pramati.com', 'Male', 'Information Technology', 'Fourth', '', '52f688612b726'),
(23, 'Natrajan Kumar', 'Natrajan Kumar', '31101994@Nraj', 'NIT Raipur | Raipur', '7389248129', 'nrajku4u@gmail.com', 'Male', 'Chemical Engineering', 'Second', '', '52f68b20a75a5'),
(24, 'Anshul', 'anshul', 'fuckyou', 'NIT Raipur | Raipur', '9827470799', 'anshul.agr.1994@gmail.com', 'Male', 'Mechanical Engineering', 'Third', '', '52f68b9decb5a'),
(25, 'ABHISHAEK KUMAR GUPT', 'abhi2302', 'abhishek123', 'National Institute of Technology, Raipur', '7415182547', 'gupta.abhi2302@gmail.com', 'Male', 'Civil Engineering', 'Second', '', '52f692c167bdd'),
(26, 'Jitendra Singh Rathore', 'JeetuPayala', 'Rathore.7', 'National Institute of Technology, Raipur', '8982966207', 'jitendrasinghrathore7@gmail.com', 'Male', 'Mining Engineering', 'Fourth', '', '52f6975a2a372'),
(27, 'PRIYANSHU THAKUR', 'priyanshu131', '4321dimag', 'NIT-Raipur | Raipur', '9425262658', 'priyanshu131@gmail.com', 'Male', 'Mechanical Engineering', 'First', '', '52f6f0b4d2f32'),
(28, 'Vibhore bhatnagar', 'vibhore.bh', 'maskman1', 'National Institute of Technology, Raipur', '8120316094', 'vibhore.bh@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'Second', '', '52f6fd0a3856a'),
(29, 'KALAVALA', 'saikalavala', '9885806264', 'National Institute of Technology, Raipur', '8871118323', 'saikalavala@gmail.com', 'Male', 'Mining Engineering', 'Second', '', '52f707c121f3b'),
(30, 'Naman Sharma', 'namansharma', 'sharma007', 'nit raipur', '7828245660', 'thenamansharma@gmail.com', 'Male', 'Metallurgical Engineering', 'Fourth', '', '52f70d0942ed4'),
(31, 'ANKIT KUMAR SAHU', 'sahuia4500@gmail.com', 'aaabbb', 'NIT Raipur | Raipur', '9691409744', 'sahuia4500@gmail.com', 'Male', 'Information Technology', 'Third', '', '52f71300e5992'),
(32, 'DEEPAK GOYAL', 'deepak1993', 'inspiron15', 'NIT RA', '8349647479', 'goyaldeepak702@gmail.com', 'Male', 'MCA', 'First', '', '52f7164a2890b'),
(33, 'p sai sandeep', 'sid 33', '9000326156', 'national institute of technology ,raipur | raipur', '9000326156', 'saisandeep099@gmail.com', 'Male', 'Metallurgical Engineering', 'First', '', '52f71fd8b2c2b'),
(34, 'D.SURYA ANURAAG', 'Surya Anuraag', 'dsvramarao', 'National Institute of Technology, Raipur', '7415106120', 'dsuryaanuraag@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'Second', '', '52f71feebc490'),
(35, 'geetika yadu', 'geet', 'cgb5110', 'National Institute of Technology, Raipur', '9893990011', 'geetikayadu@gmail.com', 'Female', 'Biomedical Engineering', 'Fourth', '', '52f722a9638cf'),
(36, 'Suraj Pasayat', 'suraj93p', 'QWERTYUIOP', 'National Institue of Technology,Raipur', '8109505423', 'suraj.93p@gmail.com', 'Male', 'Computer Science & Engineering', 'Third', '', '52f723f1e84c2'),
(37, 'Bhukya praveen kumar', 'praveenbhukya', 'pikimidisi', 'National Institute of Technology, Raipur', '7415783596', 'bhukya.praveen14@gmail.com', 'Male', 'Computer Science & Engineering', 'Third', '', '52f7241b1ade1'),
(38, 'RAVI KIRAN', 'rvkiran85', 'ravi270972700', 'National Institute of Technology, Raipur', '7666504080', 'ravi.kiran.1994@ieee.org', 'Male', 'Electrical Engineering', 'Third', '', '52f72459f1404'),
(39, 'Chaitanya', 'itschaitu', 'master1', 'NIT-Raipur | Raipur', '9827946288', 'kchaitanya101095@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'First', '', '52f724e822f9b'),
(40, 'Priyanka Buwe', 'priyanka', 'priyankahome', 'NIT Raipur | Raipur', '8982478129', 'piyu.buwe26@yahoo.co.in', 'Female', 'Information Technology', 'Third', '', '52f728612e5d2'),
(41, 'DEVBRAT KAUSHAL', 'devbrat2908', 'devbrat2908', 'NIT Raipur | Raipur', '9926989682', 'devbratkaushal@gmail.com', 'Male', 'Electrical Engineering', 'Fourth', '', '52f738309fb54'),
(42, 'PRAKHAR CHANDRAKAR', 'prachand29', 'prachand29', 'National Institute of Technology, Raipur', '9479058941', 'prakharcinfo29@gmail.com', 'Male', 'Computer Science & Engineering', 'Fourth', '', '52f738d667ca3'),
(43, 'arvind', 'arvindrv27', 'aasuresh', 'NIT-Raipur | Raipur', '8959819899', 'arvindrv27@gmail.com', 'Male', 'Electrical Engineering', 'Fourth', '', '52f7392e91ccb'),
(44, 'Pragati Shrivastava', 'pragati_shri', 'pragati@02071993', 'NIT-Raipur | Raipur', '9826492990', 'pragatishrivastava1993@gmail.com', 'Female', 'Biomedical Engineering', 'First', '', '52f73e495add6'),
(45, 'Piyush Bhardwaj', 'piyush', 'nupad', 'NIT Raipur | Raipur', '7587196702', 'piyushbhardwaj94@gmail.com', 'Male', 'Information Technology', 'Fifth', '', '52f748639c0cf'),
(46, 'Saumya Srivastava', 'saumya', 'eclectika', 'NIT-Raipur | Raipur', '0969183438', 'saumyasrivastava4592@gmail.com', 'Female', 'MCA', 'First', '', '52f75b2e21314'),
(47, 'Barsha Kumari', 'barsha9', 'barsha90#', 'NIT Raipur | Raipur', '9691943158', 'barsha.plus@gmail.com', 'Female', 'MCA', 'Second', '', '52f7943309f6f'),
(48, 'Shubhrita Tiwari', 'shubhy1', 'shubhy1_', 'National Institute of Technology, Raipur', '7389247905', 'shubhritatiwari6@ymail.com', 'Female', 'Electronic & Telecom. Engineering', 'Second', '', '52f798a0728a9'),
(49, 'Surya Anuraag', 'SuryaAnuraag', 'dsvramarao', 'National Institute of Technology, Raipur', '7415106120', 'dsuryaanuraag@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'Second', '', '52f7a36cd5da3'),
(50, 'shubham dabir', 'shubham', 'enjoyman', 'NIT Raipur | Raipur', '9893647274', 'shubhamdabir94@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'Second', '', '52f7b1968050a'),
(51, 'Abhay Singh', 'nitianabhay', 'asd123456789', 'NIT Raipur | Raipur', '9575419326', 'asabhayjain0@gmail.com', 'Male', 'MCA', 'First', '', '52f7c11dde811'),
(52, 'Devesh Krishnani', 'devesh23', '!@devesh', 'NITRR', '8085883364', 'dev.krish23@gmail.com', 'Male', 'Information Technology', 'First', '', '52f7c15323bbf'),
(53, 'Rwiddhorwito Khan', 'XaoC', 'tearsinheaven', 'National Institute of Technology, Raipur', '8962338880', 'rwiddharwita@gmail.com', 'Male', 'Architecture', 'First', '', '52f7d21aa3f4e'),
(54, 'Debottam Basu', 'debottam', 'debottambasu', 'NIT Raipur | Raipur', '7566488262', 'b.debottam279@ymail.com', 'Male', 'Architecture', 'Fifth', '', '52f7d7d595387'),
(55, 'ITI AGRAWAL', 'iti22', '22-march', 'National Institute of Technology, Raipur', '9926729673', 'itidstar@gmail.com', 'Female', 'Computer Science & Engineering', 'Fourth', '', '52f856384851b'),
(56, 'karthik krishna', 'kk_3080', 'KVVRINDADEVI', 'NIT Raipur | Raipur', '9584550435', 'kk_3080@yahoo.co.in', 'Male', 'Architecture', 'Fifth', '', '52f8a93d753be'),
(57, 'Ruchita Tamgadge', 'ruchita13', 'vanilla143#', 'National Institute of Technology, Raipur', '8103274702', 'ruchitatamgade@gmail.com', 'Female', 'Chemical Engineering', 'First', '', '52f8cf494d975'),
(58, 'Ankit Agrawal', 'ankit', 'technocracy', 'National Institute of Technology, Raipur', '7415757788', 'ankit.agr@live.com', 'Male', 'Information Technology', 'Second', '', '52f8d117b5452'),
(59, 'Anamika C', 'anamika19', 'anamika19', 'National Institute of Technology, Raipur', '7587777940', 'anamikachalil@gmail.com', 'Female', 'Chemical Engineering', 'First', '', '52f8d12029b51'),
(60, 'Febi Fabian', 'febi', 'febi24', 'National Institute of Technology, Raipur', '7354710107', 'febifab@gmail.com', 'Female', 'MCA', 'Second', '', '52f8d1bdeb817'),
(61, 'Pallavi Gedam', 'pallavi23', 'pallavi23', 'National Institute of Technology, Raipur', '9685438167', 'pallavigedam381@gmail.com', 'Female', 'Computer Science & Engineering', 'First', '', '52f8d25ecd02d'),
(62, 'Sanghdeep Gedam', 'Sanghdeep', 'vanita', 'NIT Raipur | Raipur', '8109597169', 'sanghdeep.gedam0310@gmail.com', 'Male', 'Civil Engineering', 'Third', '', '52f8d6dc446f6'),
(63, 'D VIVEK', 'dvivek', 'vivek@nit', 'NIT Raipur | Raipur', '8962826362', 'd.vivek07@gmail.com', 'Male', 'Metallurgical Engineering', 'Second', '', '52f8dcd361596'),
(64, 'SAMEER RANJAN', 'sam758', '7587466585', 'NIT-Raipur | Raipur', '7587466585', 'sameerranjan009@gmail.com', 'Male', 'Mining Engineering', 'First', '', '52f8dd24983fd'),
(65, 'Satyam', 'Satyam', '8109331849', 'Nit raipur', '8109331849', 'Rajsatyam1508@gmail.com', 'Male', 'Metallurgical Engineering', 'First', '', '52f8e8b1d6102'),
(66, 'Bipul', 'Bipul', '8109473788', 'Nit raipur', '8109473788', 'bipulkumar11021996@gmail.com', 'Male', 'Metallurgical Engineering', 'First', '', '52f8e9e53b141'),
(67, 'SANDEEP KUMAR PATRA', 'sandyroxx', 'password', 'National Institute of Technology, Raipur', '9752897541', 'sandeeppatra92@gmail.com', 'Male', 'Electrical Engineering', 'Fourth', '', '52f8ea8037ddd'),
(68, 'aravind reddy', 'aravindreddy444', 'AvidyA2@.', 'NIT Raipur | Raipur', '9617192686', 'aravindreddy444@gmail.com', 'Male', 'Mechanical Engineering', 'Second', '', '52f8eafe92ed4'),
(69, 'yellala vishnu vardhan reddy', 'vishnu', '9573432599', 'NIT Raipur | Raipur', '9000466766', 'y.vishnu55@gmail.com', 'Male', 'Computer Science & Engineering', 'Second', '', '52f8eb4231871'),
(70, 'Upendra Sahu', 'Upendra', 'amitmishra', 'National Institute of Technology, Raipur', '9009609645', 'uppe.wirelessbrain@gmail.com', 'Male', 'Metallurgical Engineering', 'First', '', '52f8f96148812'),
(71, 'DHEERAJ KUMAR ', 'yoursdhiraj', 'deepika@123', 'NIT Raipur | Raipur', '7828112347', 'dheerajnit421@gmail.com', 'Male', 'Metallurgical Engineering', 'Second', '', '52f9259875fd5'),
(72, 'ashish bachchani', 'ashb67', 'ashishab', 'RUNGTA ENGINEERING COLLEGE', '8878886777', 'ashb67@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'Fourth', '', '52f9291ad4ac0'),
(73, 'manish ranjan', 'manishranjan1994', 'ranjanmanish', 'NIT-Raipur | Raipur', '7354472414', 'manishranjan341@gmail.com', 'Male', 'Mechanical Engineering', 'Second', '', '52f93128ba68f'),
(74, 'mansi', 'mansi', 'mansi', '', '', '', '', '', '', '', ''),
(75, 'Trial', 'trialuser', 'trial', 'National Institute of Technology, Raipur', '1212121212', 'trial@aditya.com', 'Male', 'Chemical Engineering', 'Fifth', '', '52fa3134d43b1'),
(76, 'Surya Anuraag', 'dsuryaanuraag@gmail.com', 'dsvramarao', 'National Institute of Technology, Raipur', '7415106120', 'dsuryaanuraag@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'Second', '', '52fa31537f45a'),
(77, 'Vinit Payal', 'vinitpayal', 'QWERTY', 'NIT RR', '0758736282', 'vinitpayal@gmail.com', 'Male', 'Information Technology', 'Third', '', '52fa369d0926c'),
(78, 'Vaibhav Verma', 'vaibhav27', '14376143', 'NIT Raipur | Raipur', '9993492588', 'vaibhavverma2907@gmail.com', 'Male', 'Metallurgical Engineering', 'Third', '', '52fa374dc992e'),
(79, 'Vaibhav Kumar', 'VaibhavK', 'enterFIFA13', 'National Institute of Technology Raipur', '9753866815', 'kumarvaibhav073@gmail.com', 'Male', 'Civil Engineering', 'Third', '', '52fa47de549d9'),
(80, 'Pawan A Narkhede', 'pwn30', '0bn0x!0u$', 'NIT Raipur', '8982673750', 'narkhedepawan@yahoo.com', 'Male', 'Electrical Engineering', 'Fourth', '', '52fa4a23459db'),
(81, 'Anchal Kumar Singh', 'anchal2095', '09827327904', 'nit raipur', '8871382960', 'anchal2095@gmail.com', 'Male', 'Mechanical Engineering', 'Second', '', '52fa547966b3f'),
(82, 'Umesh Singh Rajpoot', 'usr1993', 'usr1993_', 'National Institute of Technology, Raipur', '8827894363', 'usr1993@gmail.com', 'Male', 'Civil Engineering', 'Second', '', '52fa56733f44c'),
(83, 'abhishek dange', 'abhishekdange1995@gmail.com', '9754801724', 'nit raipur', '9754801724', 'abhishekdange1995@gmail.com', 'Male', 'Mechanical Engineering', 'Second', '', '52fa6736719f2'),
(84, 'shivangi', 'Shivangi', 'passwordsh', 'BIT DURG', '8085984485', 'vhshlsimmi@gmail.com', 'Female', 'Computer Science & Engineering', 'Second', '', '52fb03efb5b06'),
(85, 'divyank garg', 'divyank garg', 'divyank@eclectika', 'nit raipur', '8120064406', 'divyankgarg10@gmail.com', 'Male', 'Mechanical Engineering', 'Second', '', '52fb32b852488'),
(86, 'JALAJ KASHYAP', 'Jalaj Kashyap', 'nitraipurelectrical', 'nit raipur', '8962102017', 'jalaj.jack10@gmail.com', 'Male', 'Electrical Engineering', 'Second', '', '52fb343a77f96'),
(87, 'p sai sandeep', 'sai sandeep', 'puriya@me', 'national institute of technology raipur', '9000326156', 'saisandeep099@gmail.com', 'Male', 'Metallurgical Engineering', 'First', '', '52fb391b79fd5'),
(88, 'natasha prasad', 'NATASHA', 'budhu', 'NIT RAIPUR', '8085115188', 'prasadnatasha26@gmail.com', 'Female', 'Metallurgical Engineering', 'Second', '', '52fb51853d736'),
(89, 'prateek gupta', 'prat_manu', '9836698754', 'NIT RAIPUR', '9560219224', 'prateek.guddu@gmail.com', 'Male', 'MCA', 'Third', '', '52fb5a70bd628'),
(90, 'CHERUKURI SAIDEEP', 'saideep', 'saideep16', 'nit raipur', '8871140969', 'cherukurisaideep123@gmail.com', 'Male', 'Electronic & Telecom. Engineering', 'Second', '', '52fb614dd66ce'),
(91, 'AYESH PADHI', 'AYESH ', 'iwillit', 'national institute of technology,raipur', '7587168915', 'ayesh_twinkle@yahoo.co.in', 'Female', 'Civil Engineering', 'First', '', '52fb663828dff'),
(92, 'rahul rathi', 'rahul1994', '8103625569', 'NIT RAIPUR', '8103625569', 'rahulrathi555@gmail.com', 'Male', 'Civil Engineering', 'Second', '', '52fb72a711253'),
(93, 'aayush patel', 'aayush994', 'aayush994', 'nit raipur', '8085546375', 'aayush994@gmail.com', 'Male', 'Chemical Engineering', 'Second', '', '52fb746698f53'),
(94, 'Upendra Sahu', 'Upendra.Sahu', 'amitmishra', 'National Institute of Technology, Raipur', '9009609645', 'uppe.wirelessbrain@gmail.com', 'Male', 'Metallurgical Engineering', 'Second', '', '52fb772d0a4c4'),
(95, 'MEEMANSA', 'MEEMANSA', 'MEEMA2rathod', 'NIT RAIPUR', '8602179516', '163meemansa@gmail.com', 'Female', 'Computer Science & Engineering', 'First', '', '52fb7a42eb470'),
(96, 'harish', 'harish2244', 'arnepalli21', 'NIT Raipur', '9806389493', 'harish.nit2244@gmail.com', 'Male', 'Architecture', 'Fourth', '', '52fb7a9a1bc63'),
(97, 'Rishabh Agrawal', 'Rishabh.03', '4shared', 'NiT Raipur', '9755789981', 'rishabhagrawal@live.com', 'Male', 'Mechanical Engineering', 'Third', '', '52fb7d4b1d5e7'),
(98, 'SACHIN KUMAR CHAUDHARY', 'sachin27', 'sach2701', 'nit raipur', '8109141033', 'sachinchaudhary077@gmail.com', 'Male', 'Metallurgical Engineering', 'Fourth', '', '52fb81d3e7811'),
(99, 'Sourabh Jain', 'Sourabh Jain', 'Geniussourabhjain', 'NIT Raipur', '8109553309', 'sourabh.chabra@gmail.com', 'Male', 'Computer Science & Engineering', 'First', '', '52fb822414551'),
(100, 'RAMAKANT PATEL', 'ramakantpatel', 'patel143', 'NIT RAIPUR', '98066036', 'rmkntpatel@gmail.com', 'Male', 'Civil Engineering', 'Fourth', '', '52fb8287894b2'),
(101, 'Kushagra Dar', 'kushagradarkdk', 'allahabadrocksagain', 'National Institute of Technology , Raipur', '9893400038', 'kushagradarkdk@gmail.com', 'Male', 'Computer Science & Engineering', 'First', '', '52fb82bdb5bcf'),
(102, 'rizwan ali khan', 'rizwan', '786786124578', 'nit raipur', '8103781308', 'rizwanalikhan64@gmail.com', 'Male', 'Biotechnology', 'Third', '', '52fb8349593c6'),
(103, 'Nikhil Lodhi', 'nikhillodhi', 'air12014', 'NIT RAIPUR', '8962340431', 'nikhillodhi@ymail.com', 'Male', 'Computer Science & Engineering', 'First', '', '52fb83ca8c0be'),
(104, 'Apoorv Singhal', 'apoorvsinghal04', 'Nish14021994', 'NIT Raipur', '8109331863', 'apoorv.bansalite@gmail.com', 'Male', 'Computer Science & Engineering', 'First', '', '52fb84cac920c'),
(105, 'Tusar Jit Medhi', 'TusarJit', '+919854145696#', 'NIT Raipur', '7389879852', 'tusarjit@gmail.com', 'Male', 'Mechanical Engineering', 'First', '', '52fb85363300b'),
(106, 'Abhinav yadav', 'abhinav', 'lightyagami', 'N.I.T.Raipur', '7587228029', 'abhinavbhilai@gmail.com', 'Male', 'Chemical Engineering', 'Third', '', '52fb858fe6776'),
(107, 'Shritama Sengupta', 'shritama', 'shritama', 'NIT Raipur', '8982660643', 'shritama.33@gmail.com', 'Female', 'Computer Science & Engineering', 'Second', '', '52fb85ca7feff'),
(108, 'Bhishma Dewangan', 'dev21', 'eclectika21', 'NIT Raipur', '9827121326', 'bhishmadewangan03@gmail.com', 'Male', 'Computer Science & Engineering', 'Third', '', '52fb860224661'),
(109, 'vikas sinha', 'vikas', 'vikas', 'nit raipur', '7581918695', 'vickysin94ha@yahoo.com', 'Male', 'Metallurgical Engineering', 'Second', '', '52fb86760e726'),
(110, 'Niti Jain', 'nj305', 'checkdisout', 'NIT Raipur', '7693038001', 'nitijain305@gmail.com', 'Female', 'Computer Science & Engineering', 'Second', '', '52fb867de1625'),
(111, 'DHEERAJ KUMAR JAIN', 'DHEERAJ', '9252063192', 'NIT RAIPUR', '8349915517', 'jaindheeraj1212@gmail.com', 'Male', 'Civil Engineering', 'Second', '', '52fb88a5e0cef'),
(112, 'SAGAR AGRAWAL', 'sagar', '9039299737', 'N.I.T. RAIPUR', '9039299737', 'sagar.singhi32@gmail.com', 'Male', 'Mining Engineering', 'Second', '', '52fb88bba0d9e'),
(113, 'abhilasha', 'abhifogla', '123456', 'nit raipur', '8349895356', 'abhilasha_fogla123@yahoo.co.in', 'Female', 'Architecture', 'Fourth', '', '52fb898eddba2'),
(114, 'shraddha', 'shraddha5894', 'shraddha5894', 'nit raipur', '8602665894', 'shraddha5894@gmail.com', 'Female', 'Computer Science & Engineering', 'Third', '', '52fb8b7fe4ffc'),
(115, 'Prachi Agrawal', 'prachi2911', 'prachi0206', 'NIT Raipur', '9691491805', 'prachi.inu@gmail.com', 'Female', 'Electronic & Telecom. Engineering', 'Third', '', '52fb8c9392949'),
(116, 'Preeti Tirkey', 'Preeti', 'preeti19', 'National Institute of Technology Raipur', '9753994898', 'tirkeypreeti@hotmail.com', 'Female', 'Computer Science & Engineering', 'Second', '', '52fb8d7b4025b'),
(117, 'mohsin khan', 'mohsin.khan', '7415779191', 'nit raipur', '7415779191', 'mohsin_dolaipabam@yahoo.co.in', 'Male', 'Architecture', 'Second', '', '52fb8dd8d885c'),
(118, 'SUMIT', 'sumit2127', 'SUMIT2127', 'nit raipur', '8866897052', 'sumitzigzagnit@gmail.com', 'Male', 'Architecture', 'Fifth', '', '52fb8f14f10c9'),
(119, 'Saurabh Khandelwal', 'saurabh.nitrr', '123456789', 'NIT Raipur', '8871430124', 'saurabhkhandelwal11@gmail.com', 'Male', 'Information Technology', 'Fourth', '', '52fb909372ba2'),
(120, 'meher chaitanya', 'meher567', 'usha@ymc', 'nit raipur', '8109223344', 'meherchaitanya.y@gmail.com', 'Male', 'Metallurgical Engineering', 'Second', '', '52fbaa0d2eaae'),
(121, 'Ashish Aman Bhagat', 'Ashish', '1234567', 'nit raipur', '8965850667', 'aman.ashish1995@gmail.com', 'Male', 'Civil Engineering', 'Second', '', '52fbb3b3bdc83'),
(122, 'Amit Kaushal', 'amit01', '123456', 'National Institute of Technology, Raipur', '7804984716', 'kaushal.amit02@gmail.com', 'Male', 'Civil Engineering', 'Second', '', '52fbb5de844a5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
