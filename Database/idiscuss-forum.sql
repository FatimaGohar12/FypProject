-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 09:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss-forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin-id` int NOT NULL,
  `ad-username` varchar(999) COLLATE utf8mb4_general_ci NOT NULL,
  `ad-password` varchar(789) COLLATE utf8mb4_general_ci NOT NULL,
  `Admin_Email` varchar(122) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin-id`, `ad-username`, `ad-password`, `Admin_Email`) VALUES
(1, 'Fatima', '78', 'fatima@gmail.com'),
(2, 'Gohar', '$2y$10$sViMQdeN92CHMyVK2yJC6eLWoLvCUVn35sw3vW5douPJyR075/Cx', 'hamna@gmail.com'),
(3, 'Gohar', '34', 'gohar@gmail.com'),
(7, 'fatima', '$2y$10$Ajbxq3CzDhslRAxXStXch.50Wm/PPRYmCqfVR6cZkm2st9sLUW9pe', 'fatima@gmail.com'),
(8, 'Aimen', '$2y$10$gj0bqj/1ha09GRoiWtYn.eP8r5Tq.4gqrzifIZR2FKD5ZrtMU7xGK', 'aimen@gmail.com'),
(9, 'Haman', '$2y$10$5c/f1ZjqyDsaMkOKpEi.S.ht/abjopTz2ablaRkjikfe1xfs2BVRG', 'Haman@gamail.com'),
(10, 'hamna', '$2y$10$imcAuQtYbFMNBySvQttG3emMsWXxwMWDS/J.xwrYSJ82K1WOt6i3.', 'hamna@gmail.com'),
(11, 'ga', '$2y$10$tGJHHeJMyOK58xHz.iq.EuRUD.nVujenAnbLc2IOwg7lHEslsawFW', 'g@gmail.com'),
(12, 'anaya', '$2y$10$5syl1eHaBKvI5xDYaC8Agug3pBuzjPElHs2kIRqiQml7gLeN5T7OK', 'a@gmail.com'),
(13, 'Rabia', '$2y$10$7NYW/CG2t.AHYuoimfMS0uvZFJWloZAKe7gMWEKG13HWhzxLoNVLG', 'r@gmail.com'),
(14, 'Aliya', '$2y$10$PQtZTg3/E8vIjhf2Cj/lf.LVnodhrmz4udfz0lxBTtYu01Pi.4Cy6', 'aliya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat-id` int NOT NULL,
  `cat-name` varchar(255) NOT NULL,
  `cat-desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat-id`, `cat-name`, `cat-desc`, `time`) VALUES
(1, 'C++', 'C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs. C++ is portable and can be used to develop applications that can be adapted to multiple pl', '2023-03-04 22:26:59'),
(2, 'Swift', 'Swift is a powerful and intuitive programming language for iOS, iPadOS, macOS, tvOS, and watchOS. Writing Swift code is interactive and fun, the syntax is concise yet expressive, and Swift includes modern features developers love. Swift code is safe by design and produces software that runs lightning-fast.', '2023-03-04 22:33:30'),
(3, 'python', 'Python', '2023-03-06 17:55:05'),
(4, 'React', 'React is an declarative, efficient, and flexible JavaScript library for building user interfaces. It lets you compose complex UIs from small and isolated pieces of code called “components”.', '2023-03-06 22:25:25'),
(5, 'Python', 'Python is an interpreted, object-oriented, high-level programming language with dynamic semantics developed by Guido van Rossum. It was originally released in 1991. Designed to be easy as well as fun, the name \"Python\" is a nod to the British comedy group Monty Python.', '2023-03-13 01:38:49'),
(6, 'MongoDB', 'MongoDB is a non-relational document database that provides support for JSON-like storage. The MongoDB database has a flexible data model that enables you to store unstructured data, and it provides full indexing support, and replication with rich and intuitive APIs.', '2023-03-13 01:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int NOT NULL,
  `comment _by` int NOT NULL,
  `thread_id` int NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Comment_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment _by`, `thread_id`, `comment_time`, `Comment_content`) VALUES
(1, 2, 2, '2023-03-06 18:32:23', 'jcnl'),
(47, 1, 45, '2023-03-02 20:44:57', 'C++ is a useful language\r\n'),
(48, 1, 46, '2023-03-02 22:04:25', 'Thrkkead yuo'),
(49, 1, 53, '2023-05-22 20:21:49', 'Python'),
(50, 1, 54, '2023-06-01 10:05:53', 'fdjj,d'),
(51, 1, 66, '2023-06-08 20:30:56', '$56678 ***** ##### BAD'),
(52, 1, 66, '2023-06-08 20:32:18', '##### **** BAD '),
(53, 1, 51, '2023-06-08 20:38:09', 'mon'),
(54, 1, 51, '2023-06-08 20:38:24', 'mongo db'),
(55, 1, 51, '2023-06-08 20:38:54', 'Mongo db'),
(56, 1, 68, '2023-06-09 10:26:50', 'python'),
(57, 4, 66, '2023-06-11 01:55:11', 'hh'),
(58, 4, 67, '2023-06-11 02:00:50', 'ukol');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int NOT NULL,
  `post_title` varchar(111) COLLATE utf8mb4_general_ci NOT NULL,
  `post_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `post_user_id` int NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `post_user_id`, `time`) VALUES
(1, 'Javascript', 'JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat', 40, '2023-02-25 14:12:28'),
(2, 's', 'Laragon\r\n', 40, '2023-02-25 14:13:15'),
(3, 'Swift', 'Swift\r\n', 40, '2023-02-25 14:14:35'),
(19, 'Laragon', 'LARAGON', 42, '2023-03-04 09:46:05'),
(21, 'Laragon', 'Laragon swift', 42, '2023-03-04 14:00:39'),
(22, 'Laragon', 'laragon', 42, '2023-03-04 14:01:18'),
(25, 'python', '<p>python</p>\r\n', 40, '2023-03-04 14:05:24'),
(26, 'la', '<p>python</p>\r\n', 42, '2023-03-04 14:06:06'),
(27, 'c++', '<p>c++</p>\r\n', 42, '2023-03-04 14:06:30'),
(29, '', 'Laragon\n', 42, '2023-03-04 14:20:42'),
(30, 'Swift', '<p>swift</p>\r\n', 42, '2023-03-04 14:37:44'),
(32, 'Javascript', '<p>JavaScript (JS) is&nbsp;<strong>a lightweight, interpreted, or just-in-time compiled programming language with first-class functions</strong>. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat</p>\r\n', 43, '2023-03-06 17:23:20'),
(33, 'react', '<p>react is js framework</p>\r\n', 59, '2023-03-12 20:44:20'),
(34, 'YU', '<p>UI</p>\r\nFRDC', 61, '2023-03-22 05:53:56'),
(35, 'G', '<p>G</p>\r\n', 61, '2023-03-22 05:54:07'),
(36, 'RTGT', '<ol>\r\n	<li><strong>YHF OJ;;L</strong></li>\r\n</ol>\r\n', 61, '2023-03-22 05:54:29'),
(37, 'Laragon', '<p>Largaon</p>\r\n', 62, '2023-04-03 19:45:12'),
(40, 'jjkl', '<p>jll</p>\r\n', 74, '2023-06-08 16:02:41'),
(41, 'post', '<p>post</p>\r\n', 74, '2023-06-08 16:30:14'),
(42, 'njkk', '<p>jo;m</p>\r\n', 77, '2023-06-10 20:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `postscomment`
--

CREATE TABLE `postscomment` (
  `comment_id` int NOT NULL,
  `comment_content` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `comment_user_id` int NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postscomment`
--

INSERT INTO `postscomment` (`comment_id`, `comment_content`, `comment_user_id`, `time`, `comment_post_id`) VALUES
(2, 'Swift', 1, '2023-02-23 15:31:55', 2),
(3, 'Laravel is a PHP Framework', 3, '2023-02-23 15:36:09', 1),
(4, 'Laravel is a Javascript Framework', 3, '2023-02-23 15:36:43', 1),
(7, 'React', 40, '2023-03-12 20:44:32', 33),
(8, 'Laragon', 40, '2023-05-22 15:22:18', 16),
(14, 'HJKLK\r\n', 40, '2023-06-03 19:20:32', 39);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `thread_id` int NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int NOT NULL,
  `thread_user_id` int NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(3, 'Python', 'Python is an interpreted, object-oriented, high-level programming language with dynamic semantics developed by Guido van Rossum. It was originally released in 1991. Designed to be easy as well as fun, the name \"Python\" is a nod to the British comedy group Monty Python.', 9, 1, '2023-03-06 18:10:11'),
(4, ' c++', 'C++ is a high-level general-purpose programming language created by Danish computer scientist Bjarne Stroustrup and first released in 1985 as an extension of the C programming language, or \"C with Classes\".', 9, 3, '2023-03-06 20:45:22'),
(5, ' bbb', 'bbb\r\n', 9, 1, '2023-03-06 20:49:27'),
(51, ' Thread', 'tui', 6, 3, '2023-03-13 01:57:29'),
(63, 'C++', 'C++ is very realistic language', 1, 1, '2023-06-04 01:33:29'),
(64, 'C++', 'c==', 1, 1, '2023-06-04 01:43:38'),
(65, 'C++', 'c==', 1, 1, '2023-06-04 02:20:59'),
(66, 'Pythn', 'Pycharm', 3, 1, '2023-06-08 20:30:23'),
(67, ' thre', 'yy', 6, 2, '2023-06-08 21:29:20'),
(68, 'python', 'pycharm', 3, 1, '2023-06-09 10:26:37'),
(69, 'uk', 'jkjk', 3, 4, '2023-06-11 01:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` int NOT NULL,
  `Location` varchar(40) NOT NULL,
  `Education` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `user_pass`, `timestamp`, `email`, `age`, `Location`, `Education`) VALUES
(4, 'jjkl', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2022-12-31 14:27:13', 'arslan@gmail.com', 34, 'PAKISTAN', 'bsse'),
(5, 'jvhjvjhv', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 01:03:10', 'fatimagohar296@gmail.com', 89, 'Pakistan', 'inter'),
(6, '', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 16:00:47', 'anum@gmail.com', 25, 'India', 'BSSE'),
(7, 'minal', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 16:36:32', 'minal@gmail.com', 23, 'Pakistan', 'BSSE'),
(32, 'hana', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-01-07 18:45:41', '', 0, 'India', 'INTER'),
(33, 'han', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-01-07 20:18:48', '', 0, 'SouthAFRICS', 'fsc'),
(34, 'Fat', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-01-11 22:33:11', '', 34, 'Pakistan', 'matric'),
(35, 'ha', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-01-12 21:52:59', '', 45, 'Pakistan', 'masters'),
(36, 'bu', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-01-17 10:44:11', '', 23, 'Pakistan', 'phd'),
(37, 'Ham', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-01-24 11:42:37', '', 67, 'Pakistan', 'phd'),
(38, 'hamna', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-02-22 12:10:50', '', 15, 'Pakistan', 'masters'),
(39, 'kk', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-02-22 12:14:29', '', 12, 'Pakistan', 'bachlors'),
(40, 'aimen', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-02-25 13:15:49', '', 34, 'Pakistan', 'Mphile'),
(41, 'Afaq', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-02 20:44:14', '', 25, 'Pakistan', '9'),
(42, 'hamna', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-04 14:43:32', ' g@gmail.com', 24, 'Saudia', 'bsse'),
(43, 'aimi', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-06 20:50:55', '', 34, 'Pakistan\'', ''),
(44, 'GATIMA', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 01:12:58', 'G@gmail.com', 8, 'ki', 'j'),
(45, 'Jan', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 01:21:46', 'jan@gmail.com', 78, 'Pakista ', 'BSSE'),
(46, 'gt', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 01:48:32', 'h@gmail.com', 9, 'pk', 'b'),
(47, 'Hanaya', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 15:58:40', 'Hanaya@gmail.com', 23, 'Pakistan', 'BSSE'),
(48, 'fat', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 16:17:14', 'h@gmail.com', 3, 'pk', 'bs'),
(49, 'h@gmail.com', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 16:43:54', 'hg', 5, 'y', 'y'),
(50, 'Hammad', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 16:49:30', ' hammad@gmail.com', 78, 'India', 'BSSE'),
(51, 'Mustafa', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 16:53:28', 'mustafa@gmail.com', 23, 'Pakistan', 'Bsse'),
(52, 'l', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 16:55:29', 'l@gmail.com', 23, 'pk', 'b'),
(53, 'shoniya', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 16:57:46', 's@gmail.com', 23, 'r', 'r'),
(54, 'han', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 17:01:30', 'han@gmail.com', 12, 'pk', 'bsse'),
(55, 'hy', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 17:06:25', 'hy@gmail.com', 7, 'pk', 'bsse'),
(56, 'AFIYA', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 17:07:17', ' k@gmail.com', 89, 'pk', 'bs'),
(57, 'yu', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-12 19:24:47', 'y@gmail.com', 12, 'pk', 'ty'),
(58, 'Rubine', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-13 01:42:06', 'rubina@gmail.com', 23, 'Pakistan', 'BSSE'),
(59, 'humara', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-13 01:43:51', ' humara@gmail.com', 23, 'Pakistan', 'Computer Science'),
(60, 'ga', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-22 10:43:46', 'G@gmail123.com', 4, 'pk', 'bsse'),
(61, 'fat', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-03-22 10:49:20', 'g@23.com', 5, 'p', 'gg'),
(62, 'U', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-04-04 00:43:30', 'u@gmail.com', 23, 'pk', 'bsse'),
(63, 'fati', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-04-06 12:15:02', 'f@gmail.com', 6, 'pk', 'bs'),
(64, 'Fatima', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-20 20:20:14', 'hania@gmail.com', 7, 'Pakistan', 'BSSE'),
(65, 'a@gmail.com', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-20 23:21:24', 'ab', 7, 'pk', 'Bsse'),
(66, 'a@gmail.com', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-20 23:22:35', 'ab', 7, 'pk', 'Bsse'),
(67, 'a@gmail.com', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-20 23:22:43', 'ab', 7, 'pk', 'Bsse'),
(68, 'a@gmail.com', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-20 23:22:52', 'ab', 7, 'pk', 'Bsse'),
(69, 'ab', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-20 23:23:24', 'a@gmail.com', 7, 'pk', 'Bsse'),
(70, 'Minal', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-20 23:27:55', 'm@gmail.com', 23, 'pk', 'BSSE'),
(71, 'akashrajput9', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-22 20:12:49', 'akashrajput9@hotmail.com', 24, 'karachi ', 'BSCS'),
(72, 'Rabia', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-05-30 22:23:38', ' r@gmail.com', 23, 'USA', 'CS'),
(73, 'waniya', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-06-01 10:04:37', ' w@gmail.com', 56, 'us', 'cs'),
(74, 'nimra', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-06-04 01:36:13', ' n@gmail.com', 78, 'Pakistan', 'SE'),
(75, 'n', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-06-09 10:24:28', 'n@gmail.com', 8, 'pk', 'cs'),
(76, 'ty', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-06-09 10:26:09', ' t@gmail.com', 7, 'pk', 'SE'),
(77, 'yuu', '$2y$10$Nr5JLPEw.V8ucvOgpec1K.ZEaMJP21bMkiT5AgrwdHgLRQs..Cnxu', '2023-06-11 01:41:23', 'i@gmail.com', 67, 'pk', 'cs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin-id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat-id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `postscomment`
--
ALTER TABLE `postscomment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `thread` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin-id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat-id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `postscomment`
--
ALTER TABLE `postscomment`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `thread_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
