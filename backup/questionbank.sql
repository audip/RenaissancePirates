-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2014 at 07:05 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ep`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE IF NOT EXISTS `questionbank` (
  `qno` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `qdesc` varchar(80) NOT NULL,
  `ques` varchar(2000) NOT NULL,
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
(4, 'img/gunpowder.png', '', 'This Empire had been one of the first Middle Eastern states (that extended into Europe, making them the first European state as well) to effectively use gunpowder weapons and used them to great effect conquering much of the Middle East, North Africa, and the Balkans. In the 17th century, the state began to stagnate as more modern technologies and strategies were not adopted. Which Empire are we talking about? <br/>(Hint : ''Only the name of the empire'')\n', 'ottoman\r\n', 10),
(5, 'img/engine.jpg', 'Grab a Mechanical Engineer', 'In a 4-stroke engine, a camshaft is operated through timing ears driven by the rotation of the _______________.<br/> (Hint: Seek the name of this shaft)', 'crankshaft', 40),
(6, 'img/printingworkshop.jpg', '', 'The invention of the printing press by a German goldsmith (1398-1468) is widely regarded as the single most important event of the second millennium, and is one of the defining moments of the Renaissance. The Printing Revolution which it sparked throughout Europe, worked as a modern "agent of change" in the transformation of medieval society. Who is the German Goldsmith?\r\n', 'johannesgutenberg\r\n', 15),
(7, 'img/stpeters.png', '', 'He was an Italian artist and a prominent architect who worked principally in Rome. He was the leading sculptor of his age, credited with creating the Baroque style of sculpture.  His most notable creation during this period was the piazza leading to St Peter''s. \r\nWrite his FULL name.', 'gianlorenzobernini', 15),
(8, 'img/draconiandevil.jpg', 'Decrypt the Anagram', 'An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example orchestra can be rearranged into carthorse. <span class="clue">"O, Draconian Devil"</span>\r\n', 'leonardodavinci', 10),
(9, 'img/florenze.png', '', 'David, a masterpiece created between 1501 and 1504, is a 5.17-metre marble statue of a standing male nude. It refers to a Biblical hero.\r\n David has become one of the most recognized works of Renaissance sculpture, becoming a symbol of both strength and youthful human beauty.\r\nWrite FULL name of the famous artist who carved David.', 'michelangelodilodovicobuonarrotisimoni', 20),
(10, '', 'Grab a Computer Sciecnce Engineer', 'Please follow the link <a href="compsci.php" target="_blank"> LINK </a>', 'csewinsafteratiringeffort', 40);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
