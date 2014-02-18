-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2014 at 04:59 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

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
  `qno` int(5) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `qdesc` varchar(80) NOT NULL,
  `ques` varchar(2000) NOT NULL,
  `ans` varchar(200) NOT NULL,
  `points` int(10) NOT NULL,
  PRIMARY KEY (`qno`),
  KEY `qno` (`qno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `questionbank`
--

INSERT INTO `questionbank` (`qno`, `image`, `qdesc`, `ques`, `ans`, `points`) VALUES
(1, 'img/monalisa.png', '', 'Mona Lisa, oil painting on a poplar wood panel by the Italian painter, draftsman, sculptor, architect, and engineer Leonardo da Vinci, probably the world&#39;s most famous painting. It was painted sometime between 1503 and 1506, when da Vinci was living in Florence, and it now hangs in Paris, where it remains an object of pilgrimage in the 21st century. The poplar panel shows evidence of warping and was stabilized in 1951 with the addition of an oak frame and in 1970 with four vertical braces. Dovetails also were added, to prevent the widening of a small crack visible near the center of the upper edge of the painting. <span class="clue">In which Museum does Mona Lisa Hang?</span>', 'louvre', 10),
(2, 'img/city.png', '', 'Much of the Renaissance art and education was funded and supported in _____________________, ruled by ________________________.\r\n<br/>(Hint: Enter in order of blanks and dont use any commas)', 'florencelorenzodemedici', 20),
(3, 'img/tom.png', 'Decrypt the Anagram\r\n', 'An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example <em>orchestra</em> can be rearranged into <em>carthorse</em>. <span class="clue">"Tom Marvolo Riddle"</span>\r\n', 'lordvoldemort', 15),
(4, 'img/gunpowder.png', '', 'This Empire had been one of the first Middle Eastern states (that extended into Europe, making them the first European state as well) to effectively use gunpowder weapons and used them to great effect conquering much of the Middle East, North Africa, and the Balkans. In the 17th century, the state began to stagnate as more modern technologies and strategies were not adopted. Which Empire are we talking about? <br/>(Hint : ''Only the name of the empire'')\n', 'ottoman', 10),
(5, 'img/engine.jpg', 'Grab a Mechanical Engineer', 'In a 4-stroke engine, a camshaft is operated through timing ears driven by the rotation of the _______________.<br/> (Hint: Seek the name of this shaft)', 'crankshaft', 40),
(6, 'img/printingworkshop.jpg', '', 'The invention of the printing press by a German goldsmith (1398-1468) is widely regarded as the single most important event of the second millennium, and is one of the defining moments of the Renaissance. The Printing Revolution which it sparked throughout Europe, worked as a modern "agent of change" in the transformation of medieval society. Who is the German Goldsmith?\r\n', 'johannes gutenberg', 15),
(7, 'img/stpeters.png', '', 'He was an Italian artist and a prominent architect who worked principally in Rome. He was the leading sculptor of his age, credited with creating the Baroque style of sculpture.  His most notable creation during this period was the piazza leading to St Peter''s. \r\nWrite his FULL name.', 'gianlorenzobernini', 15),
(8, 'img/draconiandevil.jpg', 'Decrypt the Anagram', 'An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example <em>orchestra</em> can be rearranged into <em>carthorse</em>. <span class="clue">"O, Draconian Devil"</span>\r\n', 'leonardodavinci', 10),
(9, 'img/florenze.png', '', 'David, a masterpiece created between 1501 and 1504, is a 5.17-metre marble statue of a standing male nude. It refers to a Biblical hero.\r\n David has become one of the most recognized works of Renaissance sculpture, becoming a symbol of both strength and youthful human beauty.\r\nWrite FULL name of the famous artist who carved David.', 'michelangelodilodovicobuonarrotisimoni', 20),
(10, '', 'Grab a Computer Sciecnce Engineer', 'Please follow the link <a href="compsci.php" target="_blank"> LINK </a>', 'csewinsafteratiringeffort', 40),
(11, '', '', '"In the normal course of events many men and women are born with remarkable talents&#59; but occasionally, in a way that transcends nature, a single person is marvelously endowed by Heaven with beauty, grace and talent in such abundance that he leaves other men far behind, all his actions seem inspired and indeed everything he does clearly comes from God rather than from human skill. Everyone acknowledged that this was true of Leonardo da Vinci, an artist of outstanding physical beauty, who displayed infinite grace in everything that he did and who cultivated his genius so brilliantly that all problems he studied he solved with ease."\r\n<span class="clue">Who used these words in praise of Leonardo da Vinci?</span>', 'giorgiovasari', 0),
(12, 'img/ques12.jpg', '', ' "God created man in his own image, in the image of God he created him." \r\n  It is fresco painting by Michelangelo,a masterpiece that illustrates the Biblical creation narrative from the Book of Genesis. Name the painting and its present location.\r\n', 'thecreationofadamsistinechapelceiling', 0),
(13, 'img/Chig!Lorenzetto.jpg\r\n', '', 'The Chigi Chapel is the second chapel on the left-hand side of the nave in the Church of Santa Maria del Popolo. It is his only religious building which has been preserved in its near original form. The chapel is a treasure trove o Baroque art and is considered among the most important monuments in the basilica. Who is the Architect of Chigi Chapel? (Write his FULL name.)', 'raffaellosanziourbino', 0),
(14, 'img/StPetersBasilica.jpg\r\n', '', 'It generally refers to one exterior side of a building, usually, the front. The word comes from the FRENCH language, literally meaning "frontage" . What is "the word"? ', 'facade', 0),
(15, '', '', 'The first strain which is fully characterized and also the first to be found in a single species is _____________. ', 'typestrain', 0),
(16, 'img/RomaSMariaLoreto(Sangallo).jpg', '', 'He lived and worked in Rome during the greater part of his life, and was much employed by several of the popes. He designed the brick and travertine church of Santa Maria di Loreto. He was succeeded by Michelangelo as the architect of St. Peter''s Basilica\r\n', 'antoniodasangallotheyounger', 0),
(17, 'img/selfPortrait.jpg', '', 'It''s a selfie of very famous architect, engineer, anatomist, often described as the archetype of the Renaissance man.\r\n', 'leonardodavinci', 0),
(18, 'img/ml.png', 'Decrypt the Anagram', 'An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example orchestra can be rearranged into carthorse. <strong>"Oh, Lame Saint!"</strong>	\r\n', 'themonalisa', 0),
(19, '', '', 'He was among the first generation of astronomers to be trained with the Theoricae novae and the Epitome. Shortly before 1514 he began to explore a shocking new idea that the Earth revolves around the Sun. He spent the rest of his life attempting a mathematical proof of heliocentrism. Who is he?', 'nicolauscopernicus', 0),
(20, '', '', 'The process of arranging the transmission lines, at irregular distances, for maximum efficiency.', 'transposition', 0),
(21, 'img/Plan_of_Imola.jpg', '', 'Leonardo Da Vinci created this accurate plan for him.  Maps were extremely rare at the time and it would have seemed like a new concept. He then hired Leonardo as his chief architect and military engineer. Name the town and Leonardo''s employer.\r\n', 'imolacesareborgia', 0),
(22, 'img/sodarktheconofman.jpg', 'Decrypt the Anagram', 'An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example <em>orchestra</em> can be rearranged into <em>carthorse</em>. "So dark the con of man"	\r\n', 'madonnaoftherocks', 0),
(23, 'img/Santa_Maria_Novella.jpg', '', 'Born in Genoa (1402&#45;1472), he was an important Humanist theoretician and designer whose book on architecture De re Aedificatoria was to have lasting effect.two of Alberti&#39;s best known buildings are in Florence, the Palazzo Rucellai and at Santa Maria Novella. Two of his best known buildings are in Florence, the Palazzo Rucellai and at Santa Maria Novella.				', 'leonbattistaalberti', 0),
(24, 'img/renaissancemovie.jpg', '', 'Name the director of the movie Renaissance(2006).', 'christianvolckman', 0),
(25, 'img/ritlaw.jpg', '', 'This law states that work required in crushing is proportional to the new surface created. In other words, crushing efficiency is constant and for a given machine and feed material is independent of the sizes of feed and product. \r\nP/ ? = Kr(1/Dsb &#45; 1/Dsa). \r\nWhich law is this?', 'rittingerslaw', 0),
(26, 'img/Constantinople_1453.jpg', '	', 'This historic event marked the end of the Roman Empire, an imperial state which had lasted for nearly 1,500 years. This Ottoman conquest also dealt a massive blow to Christendom. It is considered ,by many scholars, a key to the revival of Greek and Roman studies that led to the development of the Renaissance humanism and science.', 'fallofconstantinople', 0),
(27, '', 'Decrypt the Anagram	', 'An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once; for example <em>orchestra</em> can be rearranged into <em>carthorse</em>. <span class="clue">"I am a weakish speller"</span>\r\n', 'williamshakespeare', 0),
(28, 'img/domeFlorence.jpg', '', 'He was one of the foremost architects and engineers of the Italian Renaissance. He is most famous for his development of linear perspective and for engineering the dome of the Florence Cathedral.			\r\n', 'filippobrunelleschi', 0),
(29, 'img/Statue.jpg', '', 'He was a major Italian poet of the Middle Ages. His Divine Comedy is widely considered the greatest literary work composed in the Italian language and a masterpiece of world literature.', 'dantealighieri', 0),
(30, 'img/dual-carriageway.jpg', '', 'Technical name of road divider is _________.', 'median', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
