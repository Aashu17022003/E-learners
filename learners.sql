-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 04:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learners`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `name` text NOT NULL,
  `course` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `problem` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `course`, `email`, `problem`, `dt`) VALUES
(2, 'Ashish', 'data science', 'akchanchal2002@gmail.com', 'hello is i have an issue on my course', '2022-02-01 20:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `sno` int(4) NOT NULL,
  `course_name` varchar(256) NOT NULL,
  `detail` varchar(256) NOT NULL,
  `pic_url` varchar(255) NOT NULL,
  `lang_doc` text NOT NULL,
  `date_time` varchar(256) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`sno`, `course_name`, `detail`, `pic_url`, `lang_doc`, `date_time`) VALUES
(1, 'Python', 'Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers wri', 'https://content.techgig.com/thumb/msid-80100245,width-860,resizemode-4/8-Steps-to-master-Python-programming-for-Data-Science.jpg?88712', 'https://docs.python.org/3/', '2022-02-02 13:53:13'),
(2, 'C language', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions.', 'http://academiccareer.in/wp-content/uploads/2021/02/C-programming.png', 'https://devdocs.io/c/', 'current_timestamp()'),
(3, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', 'https://dev.java/assets/images/java-logo-vert-blk.png', 'https://docs.oracle.com/en/java/', '2022-02-02 14:29:46'),
(4, 'HTML', 'The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript. ', 'https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210203170945/HTML-Tutorials.png', 'https://developer.mozilla.org/en-US/docs/Web/HTML', 'current_timestamp()'),
(5, 'Data Science', 'Data science is an interdisciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from noisy', 'https://www.iimtindia.net/Blog/wp-content/uploads/2021/06/Data-Science.jpg', 'https://python-data-science.readthedocs.io/en/latest/', 'current_timestamp()'),
(6, 'Machine Learning', 'Machine learning is the study of computer algorithms that can improve automatically through experience and by the use of data. It is seen as a part', 'https://www.eurixgroup.com/wp-content/uploads/2021/01/ml-e1610553826718.jpg', 'https://scikit-learn.org/stable/', 'current_timestamp()'),
(7, 'Full-stack development', 'A web developer is a programmer or a coder who specializes in, or is specifically engaged in, the development of World Wide Web applications using a client–server model. The applications typically use HTML, CSS and JavaScript in the client, PHP, ASP.NET (C', 'https://blog.eduonix.com/wp-content/uploads/2018/09/Full-Stack-Developer.jpg', 'https://docs.developers.optimizely.com/full-stack/docs', 'current_timestamp()'),
(8, 'PHP', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.', 'https://images.techopedia.com/images/uploads/brochure-flyer-paper-poster-logo-trademark-text-building-office-buildi.jpg?w=800&h=0&mode=max&quality=70&scale=both', 'https://www.php.net/docs.php', 'current_timestamp()'),
(9, 'Javascript', 'JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. Over 97% of websites use JavaScript on the client side for web page behavior, often incorporating third-party li', 'https://geekboots.sfo2.cdn.digitaloceanspaces.com/post/javascript-1567486564472.jpg', 'https://developer.mozilla.org/en-US/docs/Web/JavaScript', 'current_timestamp()'),
(10, 'CSS', 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript', 'https://blog.templatetoaster.com/wp-content/uploads/2019/05/What-is-CSS-Facebook.png', 'https://developer.mozilla.org/en-US/docs/Web/CSS', 'current_timestamp()'),
(11, 'DJango', 'Django is a Python-based free and open-source web framework that follows the model–template–views architectural pattern. It is maintained by the Django Software Foundation, an independent organization established in the US as a 501 non-profit.', 'https://miro.medium.com/max/1400/0*CMejfXR4cabOjqDy.png', 'https://docs.djangoproject.com/en/4.0/', 'current_timestamp()'),
(12, 'MySQL', 'MySQL is an open-source relational database management system. Its name is a combination of \"My\", the name of co-founder Michael Widenius\'s daughter, and \"SQL\", the abbreviation for Structured Query Language.', 'https://www.datocms-assets.com/14946/1627286560-sql-databases.png?auto=format', 'https://dev.mysql.com/doc/', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_sno` int(4) NOT NULL,
  `stu_username` varchar(256) NOT NULL,
  `stu_name` text NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_sno`, `stu_username`, `stu_name`, `stu_email`, `stu_pass`, `dt`) VALUES
(34, 'admin', 'admin', 'admin@admin.com', 'admin', '2022-02-02 12:01:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_sno`),
  ADD UNIQUE KEY `stu_username` (`stu_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
