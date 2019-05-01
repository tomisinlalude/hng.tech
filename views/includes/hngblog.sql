-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 12:28 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampleblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_members`
--

CREATE TABLE `blog_members` (
  `memberID` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_members`
--

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'Demo', '$2y$10$wJxa1Wm0rtS2BzqKnoCPd.7QQzgu7D/aLlMR5Aw3O.m9jx3oRJ5R2', 'demo@demo.com'),
(3, 'lekia', '$2y$10$oBc2BhaSHV8GWgff66v9leBjlIqseExL62KaVFQbyh2OFHwruaBMO', 'lekiagospel@gmail.com'),
(4, 'Yiga', '$2y$10$juNypYWYEpRz/iVNlvL7u.7.CDdsxCABseX0.kbp2q1aFPD8BmUVC', 'Yigaue20@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(11) UNSIGNED NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES
(3, '5 THINGS I WISH I KNEW YEARS AGO AS A DEVELOPER IN SECURING MY DREAM JOB', '<p>Hello developer, I am glad you found this article. I wrote this with you in mind, and it is meant to guard you on this path. Why bear another burden when there is help?\r\nLife is lot easier when there are those on whose shoulders you can climb. Here I will be sharing briefly with you some truth that will boast your velocity whether as beginner, intermediate or youâ€™ve been around a while.\r\n</p>', '<h2>5 THINGS I WISH I KNEW YEARS AGO AS A DEVELOPER IN SECURING MY DREAM JOB</h2>\r\n\r\n<p>Hello developer, I am glad you found this article. I wrote this with you in mind, and it is meant to guard you on this path. Why bear another burden when there is help?\r\nLife is lot easier when there are those on whose shoulders you can climb. Here I will be sharing briefly with you some truth that will boast your velocity whether as beginner, intermediate or youâ€™ve been around a while.\r\nBecoming a developer is challenging and yet exciting. Youâ€™ve to love the job, or I should call it calling. It is something that you canâ€™t do casually. It requires a consistent and conscientious effort. The discipline, dedication and diligence are not words but in doing. Nobody pays to hear you talk as developer, you paid to do. So, sharpening your skills is top priority. \r\nâ€˜Okay, enough intro letâ€™s get to itâ€™. You are right weâ€™re getting there. I will list them out and we begin. \r\n</p>\r\n<ul>\r\n<li>Get a corner in the room</li>\r\n<li>Work your corner before inviting guest</li>\r\n<li>Keep up the standard</li>\r\n<li>Who say your dream Job is impossible?</li>\r\n<li>Donâ€™t reinvent the wheels, Leverage on platforms</li>\r\n</ul>\r\n<h2>Get a Corner in the Room/h2>\r\n<p>Joining the world of developers may sound exciting. You may have excitedly proclaimed â€˜I am a developerâ€™, only to discover your excitement just died the next minute on peeping in. You donâ€™t have be discouraged, we all felt that way too. \r\nThere are millions of developers round the world and you just +1. This should not scare you. You are unique in the million. Whatever, has brought you the developers society needs you. The number of developers is not important as it is that you get a corner. Look for aa niche and fit yourself. This is this place where you have passion for and wish pour your life, as life is not long enough for any of us. Choosing a language and start with it till you are proficient enough. Donâ€™t be carried away by the trends and all the buzz. Just pick a tool and master. This leads us to the next point.\r\n</p>\r\n<h2>Work your corner before inviting Guest</h2>\r\n<p>This is important. There are young developers who so out to impress. This is should not be your trade. You could waste precious hours if you do not plan your route as a developer. There are myriads of information available to you, but you donâ€™t need all of them. you need to be selective where you quench your hunger. How many hours can you invest to build your skills? Information is good, but skills is what people are paying for. You have to invest time and get rid of distractions. Get to know the fundamentals involve your field.\r\nDonâ€™t start by going for the jobs. Work your skills enough. You can do some task and project along the way but keep that big company out of it. \r\n</p>\r\n\r\n<h2>Keep Up the Standard</h2>\r\n<p>You are not done yet but you are close. After building your skills and choosing your tools, it is time to go a little out. Now youâ€™re ready to add more load. I call this keeping up the standard. Maintaining your relevance as a developer is challenging too. This is because technology is fast evolving and their new innovations and practice almost every day. It is not easy to keep up the with the trends, but you can if you have worked on your foundation adequately\r\nMake research for what skills and requirement is needed to land your dream job. Add these to your cart and gradually work on them. When youâ€™re ready attack with full force.\r\n</p>', '2013-06-05 23:20:24'),
(6, 'Rewrite Your Life', '<p>People have asked â€˜how do I fulfill purposeâ€™; how do I live life to the fullest? Some have lived lives worth celebrating, yet others have passed by on earth hardly noticed. The valley of the ordinary life seems not to let go, whilst they yearn for a better life, their lives do not seem to rise above the roof top. </p>', '<h2>Rewrite your Life</h2>\r\n<p>People have asked â€˜how do I fulfill purposeâ€™; how do I live life to the fullest? Some have lived lives worth celebrating, yet others have passed by on earth hardly noticed. The valley of the ordinary life seems not to let go, whilst they yearn for a better life, their lives do not seem to rise above the roof top. \r\nCan everyone live an extraordinary life? The answer is no. can anyone live an extraordinary life? Yes. Can I live an extraordinary life? Can I really make my life count after all I have been through? â€“ Yes you can, but you alone can decide that. Your life was design to drip milk and honey; to be what the nations will look upon in admiration. But right now that may seem the opposite or there is this lump of dissatisfaction in your breast. It has not always been easy, and will not ever be. But the truth is, you can get better and quickly.\r\n.</p>', '2013-06-06 08:28:35'),
(7, 'This is a Test', '<p>This is working</p>', '<p>Ya it will work</p>', '2019-05-01 12:12:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_members`
--
ALTER TABLE `blog_members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_members`
--
ALTER TABLE `blog_members`
  MODIFY `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
