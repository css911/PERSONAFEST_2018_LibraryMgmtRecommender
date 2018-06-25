-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 05:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` text NOT NULL,
  `admin_password` text NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_status`) VALUES
(1, 'admin', '21232F297A57A5A743894A0E4A801FC3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_isbn` varchar(25) NOT NULL,
  `book_title` text NOT NULL,
  `book_author` text NOT NULL,
  `book_publisher` text NOT NULL,
  `book_thumbnail` text NOT NULL,
  `book_quantity` int(11) NOT NULL,
  `book_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `category_id`, `book_isbn`, `book_title`, `book_author`, `book_publisher`, `book_thumbnail`, `book_quantity`, `book_status`) VALUES
(2, 1, '0-7475-4624-X', 'J.K. Rowling: A Bibliography', 'Philip W. Errington', 'Bloomsbury Publishing', 'http://books.google.com/books/content?id=oNAzDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 21, 1),
(3, 1, '0195153448', 'Classical Mythology', 'Mark P. O. Morford,Robert J. Lenardon', 'Oxford University Press, USA', 'http://books.google.com/books/content?id=YABYKVjEKZYC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 14, 1),
(4, 1, '0374157065', 'Flu', 'Gina Kolata', 'Simon and Schuster', 'http://books.google.com/books/content?id=1CVLH5XzdBsC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 16, 1),
(5, 1, '9781603094054', 'LOVELY HORRIBLE STUFF, THE', 'Eddie Campbell', 'Top Shelf Productions', 'http://books.google.com/books/content?id=m8UDBAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 10, 1),
(6, 1, '978-1-60309-029-2', 'BB Wolf & 3 LPs', 'Rich Koslowski,J.D. Arnold', 'Top Shelf Productions', 'http://books.google.com/books/content?id=-lU0bupKqhkC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 23, 1),
(7, 1, '978-1-60309-420-7', 'Bottled', 'Chris Gooch', 'IDW Publishing', 'http://books.google.com/books/content?id=QtUnDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 33, 1),
(8, 2, '978-1-891830-83-9', 'Graphic Novels: A Guide to Comic Books, Manga, and More, 2nd Edition', 'Michael Pawuk,David S. Serchay', 'ABC-CLIO', 'http://books.google.com/books/content?id=lfTeDgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 30, 1),
(9, 1, '978-1-60309-013-1', 'County Business Patterns', 'United States. Bureau of the Census', '', 'http://books.google.com/books/content?id=kBQCgk_jAoEC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 22, 1),
(10, 2, 'UPC 827714013139', 'Korgi Book 3: A Hollow Beginning', 'Christian Slade', 'Top Shelf Productions', 'http://books.google.com/books/content?id=f20EB9yHdbcC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 20, 1),
(11, 1, 'UPC 827714009026', 'Pinocchio, Vampire Slayer Complete Edition', 'Dusty Higgins,Van Jensen', 'TATA', 'http://books.google.com/books/content?id=A35-oAEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 13, 1),
(12, 1, '978-1-60309-033-9', 'Graphic Novels: A Guide to Comic Books, Manga, and More, 3rd Edition', 'Michael Pawuk,David S. Serchay', 'ABC-CLIO', 'http://books.google.com/books/content?id=lfTeDgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 23, 1),
(13, 1, '978-1-60309-415-3', 'The Three Rooms in Valerieâ€™s Head', 'David Gaffney', 'IDW Publishing', 'http://books.google.com/books/content?id=Cew0DwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 24, 1),
(14, 1, '978-1-891830-73-0', 'Weather of U.S. Cities', 'Richard A. Wood', 'Gale Group', 'http://books.google.com/books/content?id=MDBRAAAAMAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 10, 1),
(15, 1, '0393045218', 'The Mummies of ÃœrÃ¼mchi', 'E. J. W. Barber', 'W. W. Norton', 'http://books.google.com/books/content?id=5OujQgAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 12, 1),
(16, 1, '0425176428', 'What If?', 'Robert Cowley', 'Penguin', 'http://books.google.com/books/content?id=ls0zJPyWEl8C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 23, 1),
(17, 1, '978-1-60309-397-2', 'Graphic Novels: A Guide to Comic Books, Manga, and More, 2nd Edition', 'Michael Pawuk,David S. Serchay', 'ABC-CLIO', 'http://books.google.com/books/content?id=lfTeDgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 22, 1),
(18, 2, '978-1-60309-086-5', '1980 Census of Housing', '', '', 'http://books.google.com/books/content?id=suN-QraMLx4C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'Science', 1),
(2, 'Fiction', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issued_book`
--

CREATE TABLE `issued_book` (
  `issued_book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `issued_book_date` date NOT NULL,
  `issued_book_returned` date NOT NULL,
  `issued_book_fine` int(11) NOT NULL,
  `issued_book_status` int(11) NOT NULL,
  `cr` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued_book`
--

INSERT INTO `issued_book` (`issued_book_id`, `user_id`, `book_id`, `issued_book_date`, `issued_book_returned`, `issued_book_fine`, `issued_book_status`, `cr`) VALUES
(10, 11, 16, '2018-02-17', '2018-02-17', 0, 0, '2.50'),
(11, 11, 3, '2018-02-17', '2018-02-17', 0, 0, '1.60'),
(12, 1, 0, '2018-02-17', '2018-02-24', 0, 1, '0.00'),
(13, 1, 0, '2018-02-17', '2018-02-24', 0, 1, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `cr` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`user_id`, `book_id`, `cr`) VALUES
(1, 2, '3.00'),
(1, 3, '4.00'),
(1, 4, '5.00'),
(1, 5, '2.00'),
(1, 6, '2.00'),
(1, 7, '4.00'),
(1, 9, '4.00'),
(1, 10, '4.00'),
(1, 11, '1.00'),
(1, 12, '3.00'),
(1, 13, '3.00'),
(1, 14, '5.00'),
(1, 15, '2.00'),
(2, 1, '5.00'),
(2, 2, '1.00'),
(2, 3, '2.00'),
(2, 4, '5.00'),
(2, 6, '3.00'),
(2, 7, '3.00'),
(2, 8, '1.00'),
(2, 9, '2.00'),
(2, 10, '3.00'),
(2, 11, '4.00'),
(2, 12, '1.00'),
(2, 13, '3.00'),
(2, 14, '4.00'),
(2, 15, '2.00'),
(2, 16, '3.00'),
(3, 1, '4.00'),
(3, 2, '5.00'),
(3, 3, '2.00'),
(3, 4, '3.00'),
(3, 5, '5.00'),
(3, 6, '1.00'),
(3, 7, '2.00'),
(3, 8, '4.00'),
(3, 9, '5.00'),
(3, 11, '3.00'),
(3, 12, '4.00'),
(3, 13, '2.00'),
(3, 14, '4.00'),
(3, 15, '1.00'),
(3, 16, '5.00'),
(4, 1, '1.00'),
(4, 2, '3.00'),
(4, 4, '2.00'),
(4, 5, '2.00'),
(4, 6, '3.00'),
(4, 11, '3.00'),
(4, 12, '4.00'),
(4, 13, '1.00'),
(4, 14, '2.00'),
(4, 16, '4.00'),
(5, 1, '4.00'),
(5, 2, '2.00'),
(5, 3, '3.00'),
(5, 4, '3.00'),
(5, 5, '2.00'),
(5, 6, '4.00'),
(5, 7, '4.00'),
(5, 8, '2.00'),
(5, 9, '2.00'),
(5, 11, '5.00'),
(5, 12, '3.00'),
(5, 13, '4.00'),
(5, 14, '5.00'),
(5, 15, '2.00'),
(5, 16, '4.00'),
(6, 1, '4.00'),
(6, 2, '5.00'),
(6, 3, '3.00'),
(6, 4, '3.00'),
(6, 5, '4.00'),
(6, 7, '4.00'),
(6, 8, '1.00'),
(6, 9, '2.00'),
(6, 10, '3.00'),
(6, 11, '4.00'),
(6, 13, '3.00'),
(6, 14, '4.00'),
(6, 15, '5.00'),
(6, 16, '2.00'),
(7, 1, '2.00'),
(7, 2, '4.00'),
(7, 3, '1.00'),
(7, 4, '3.00'),
(7, 5, '3.00'),
(7, 6, '1.00'),
(7, 7, '1.00'),
(7, 8, '3.00'),
(7, 9, '4.00'),
(7, 10, '1.00'),
(7, 11, '3.00'),
(7, 12, '4.00'),
(7, 13, '1.00'),
(7, 15, '5.00'),
(7, 16, '2.00'),
(8, 1, '1.00'),
(8, 2, '4.00'),
(8, 3, '3.00'),
(8, 5, '3.00'),
(8, 6, '4.00'),
(8, 7, '4.00'),
(8, 8, '2.00'),
(8, 10, '5.00'),
(8, 11, '2.00'),
(8, 12, '4.00'),
(8, 13, '4.00'),
(8, 14, '2.00'),
(8, 15, '2.00'),
(8, 16, '4.00'),
(9, 1, '4.00'),
(9, 2, '2.00'),
(9, 3, '3.00'),
(9, 4, '3.00'),
(9, 6, '3.00'),
(9, 7, '5.00'),
(9, 9, '3.00'),
(9, 10, '3.00'),
(9, 11, '1.00'),
(9, 12, '5.00'),
(9, 13, '4.00'),
(9, 14, '5.00'),
(9, 15, '2.00'),
(10, 1, '3.00'),
(10, 2, '5.00'),
(10, 3, '2.00'),
(10, 4, '4.00'),
(10, 5, '4.00'),
(10, 6, '5.00'),
(10, 7, '3.00'),
(10, 8, '4.00'),
(10, 9, '1.00'),
(10, 10, '2.00'),
(10, 11, '3.00'),
(10, 12, '5.00'),
(10, 13, '2.00'),
(10, 14, '3.00'),
(10, 15, '5.00'),
(10, 16, '2.00'),
(11, 1, '2.00'),
(11, 2, '4.00'),
(11, 3, '2.00'),
(11, 4, '6.30'),
(11, 5, '0.50'),
(11, 6, '1.50'),
(11, 7, '4.00'),
(11, 8, '2.00'),
(11, 9, '4.99'),
(11, 10, '3.00'),
(11, 11, '4.30'),
(11, 12, '2.00'),
(11, 13, '2.00'),
(11, 14, '1.00'),
(11, 15, '2.00'),
(11, 16, '3.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_username` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_description` text NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_username`, `user_email`, `user_password`, `user_description`, `user_status`) VALUES
(1, 'Vaibhav Kumbhar', '1601001', 'vnkdj5@gmail.com', 'E9AD559F94FBA77B26482D168E0A6908', 'T.E. Computer Engg Student.', 1),
(2, 'Sunil Madhyan', 'sunil', 'sunil@sunil.com', 'B0B86080C976AA7651BFFE0801644D74', 'sunil', 1),
(3, 'vaibhav khumbhar', 'vaibh123', 'vaibh@khum.com', 'E99A18C428CB38D5F260853678922E03', 'Vaibhav is very puntual pearsom', 1),
(5, 'Kiran Mandhare', 'vaibh12344', 'kireh@khum.com', 'A141C47927929BC2D1FB6D336A256DF4', 'Kiran is a huge person', 1),
(6, 'pkqr', 'vmadh123', 'sunil@madhvan.com', '8ED9C0F48D05CD9B6FA90EE70AF37DA0', 'Sunil is very guni pearson', 1),
(7, 'chetan shinde', 'css911', 'chetanshinde2001@gmail.com', 'DF922CEFBF70CCDD017488C05D2A2D67', 'doreamon.', 1),
(9, 'ganesha', 'studd', 'studdallways@pro.com\r\n', '524C35CE417C355BC0D5EB2F1A934C75', 'there is the mosst important thing', 1),
(11, 'Kiran Mandhare', 'kiran12340', 'kiran@kiran.com', 'B1A5B64256E27FA5AE76D62B95209AB3', 'kiran', 1),
(12, '', '', '', '', 'Student', 1),
(13, '', '', '', '', 'Student', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `book_isbn` (`book_isbn`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `issued_book`
--
ALTER TABLE `issued_book`
  ADD PRIMARY KEY (`issued_book_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD UNIQUE KEY `uni_ini` (`user_id`,`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `issued_book`
--
ALTER TABLE `issued_book`
  MODIFY `issued_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
