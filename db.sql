-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 16, 2022 at 07:13 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_oven`
--

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `friend` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`, `friend`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 0),
(3, 1, 10, 0),
(4, 2, 1, 1),
(5, 2, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `body`, `image`, `date`) VALUES
(1, 1, 'The Australian band, whose latest album ‘Reverence’ arrived in 2018, will perform a string of shows throughout next September into October. Tickets ( <a href=\"http://avocadobooking.com/avocms/item/parkway-drive-european-tour-2022\" target=\"_blank\" rel=\"noopener noreferrer\">http://avocadobooking.com/avocms/item/parkway-drive-european-tour-2022</a> ) go on sale here this Friday (November 12) at 10am GMT.\r\n\r\n<a href=\"https://www.nme.com/wp-content/uploads/2021/11/ParkwayDrive-UKtour-news-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/ParkwayDrive-UKtour-news-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/ParkwayDrive-UKtour-news-696x442.jpg', '2021-11-10 11:11:22'),
(2, 1, 'Watch the trailer for HBO’s controversial Alanis Morissette documentary ‘Jagged’ @ <a href=\"https://youtu.be/CWtvC5a5TB0\" target=\"_blank\" rel=\"noopener noreferrer\">https://youtu.be/CWtvC5a5TB0</a>\r\nImage: <a href=\"https://www.nme.com/wp-content/uploads/2021/11/alanis-morissette-live-1-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/alanis-morissette-live-1-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/alanis-morissette-live-1-696x442.jpg', '2021-11-10 11:15:13'),
(3, 2, 'Justin Bieber has announced details of a new virtual concert, at which he will appear in the form of a digital avatar. READ MORE: <a href=\"https://www.nme.com/news/music/justin-bieber-to-perform-virtual-gig-in-digital-avatar-form-3091869\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/news/music/justin-bieber-to-perform-virtual-gig-in-digital-avatar-form-3091869</a>\r\n\r\nNext week (November 18), the pop star will tema up with virtual entertainment company Wave to present Justin Bieber – An Interactive Virtual Experience.\r\n\r\n<a href=\"https://www.nme.com/wp-content/uploads/2021/09/Justin-Bieber-NYE-2020-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/09/Justin-Bieber-NYE-2020-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/09/Justin-Bieber-NYE-2020-696x442.jpg', '2021-11-10 11:20:23'),
(4, 2, 'Beach House have announced the release of a new album called ‘Once Twice Melody’ as well as a spring UK and European tour – hear the album’s first four songs below. <a href=\"https://www.nme.com/wp-content/uploads/2021/11/Beach-House-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/Beach-House-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/Beach-House-696x442.jpg', '2021-11-10 11:22:08'),
(5, 3, 'MUNA (<a href=\"https://www.nme.com/artists/muna)\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/artists/muna)</a> were the most recent musical guests on The Late Late Show with James Corden where they were joined by Phoebe Bridgers to perform recent collaboration ‘Silk Chiffon’.  <a href=\"https://www.nme.com/wp-content/uploads/2021/11/MUNA-and-Phoebe-Bridgers-perform-on-Corden-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/MUNA-and-Phoebe-Bridgers-perform-on-Corden-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/MUNA-and-Phoebe-Bridgers-perform-on-Corden-696x442.jpg', '2021-11-10 11:25:20'),
(6, 3, 'SEVENTEEN reveal ‘Rock With You’ went through “endless revisions”  © <a href=\"https://www.nme.com/wp-content/uploads/2021/10/seventeen-power-of-love-concert-261021-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/10/seventeen-power-of-love-concert-261021-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/10/seventeen-power-of-love-concert-261021-696x442.jpg', '2021-11-10 11:33:35'),
(7, 4, 'TikTok says it’s working on removing Astroworld conspiracy videos. Image <a href=\"https://www.nme.com/wp-content/uploads/2021/11/Travis-scott-performing-at-Astroworld-2021-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/Travis-scott-performing-at-Astroworld-2021-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/Travis-scott-performing-at-Astroworld-2021-696x442.jpg', '2021-11-10 11:37:17'),
(8, 4, 'MAMAMOO’s Hwasa teases her return with a new cryptic trailer. READ MORE:  <a href=\"https://www.nme.com/news/music/mamamoo-hwasa-comeback-trailer-solo-3091744\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/news/music/mamamoo-hwasa-comeback-trailer-solo-3091744</a>', NULL, '2021-11-10 11:38:12'),
(9, 5, 'Nilüfer Yanya has announced her second album, ‘Painless’, will be released in March next year.\r\n\r\nThe record will arrive on March 4 through ATO, three years after her debut album ‘Miss Universe’ and two years after her ‘Feeling Lucky?’ EP. <a href=\"https://www.nme.com/wp-content/uploads/2021/11/nilufer-yanya-2019-credit-jana-legler@2000x1270-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/nilufer-yanya-2019-credit-jana-legler@2000x1270-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/nilufer-yanya-2019-credit-jana-legler@2000x1270-696x442.jpg', '2021-11-10 11:42:04'),
(10, 5, 'PUP drop fiery new songs ‘Waiting’ and ‘Kill Something’, detail North American tour. By <a href=\"https://www.nme.com/author/matt-doria\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/author/matt-doria</a>\r\nThe group’s first headline tour in over two years will kick off next April. <a href=\"https://www.nme.com/wp-content/uploads/2021/11/PUP.-Credit-Vanessa-Heins-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/PUP.-Credit-Vanessa-Heins-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/PUP.-Credit-Vanessa-Heins-696x442.jpg', '2021-11-10 11:43:23'),
(11, 6, 'Day6’s Jae says he would like to collaborate with 88rising’s keshi and NIKI\r\nHe had previously teamed up with the former on tracks such as ‘pillows’ and ‘it just is’ <a href=\"https://www.nme.com/wp-content/uploads/2021/03/jae-park-day6-sugar-daddy-remarks-backlash-jyp-032521-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/03/jae-park-day6-sugar-daddy-remarks-backlash-jyp-032521-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/03/jae-park-day6-sugar-daddy-remarks-backlash-jyp-032521-696x442.jpg', '2021-11-10 11:49:03'),
(12, 6, 'Glasgow nightclub trials technology to turn dancing into renewable energy. By <a href=\"https://www.nme.com/author/charlottekrol\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/author/charlottekrol</a>\r\nIt\'s estimated to lead to savings of approximately 70 tonnes of CO2 a year <a href=\"https://www.nme.com/wp-content/uploads/2021/04/liverpool-covid-pilot-club-event-1-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/04/liverpool-covid-pilot-club-event-1-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/04/liverpool-covid-pilot-club-event-1-696x442.jpg', '2021-11-10 11:51:15'),
(13, 7, 'Alanis Morissette is making a sitcom inspired by her life\r\nThe singer will write original new music for the show. <a href=\"https://www.nme.com/wp-content/uploads/2020/05/Alanis-Morissette-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2020/05/Alanis-Morissette-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2020/05/Alanis-Morissette-696x442.jpg', '2021-11-10 11:55:01'),
(14, 7, 'Tegan and Sara have finished recording their new album\r\n\"It has got a lot of fucking heart\".  <a href=\"https://www.nme.com/wp-content/uploads/2021/11/TeganAndSara-album-news-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/TeganAndSara-album-news-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/TeganAndSara-album-news-696x442.jpg', '2021-11-10 11:55:53'),
(15, 8, 'Gerry Cinnamon announces second outdoor Glasgow show for 2022\r\nTickets go on sale this Friday (November 12) <a href=\"https://www.nme.com/wp-content/uploads/2020/04/GettyImages-1163096046-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2020/04/GettyImages-1163096046-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2020/04/GettyImages-1163096046-696x442.jpg', '2021-11-10 12:03:49'),
(16, 8, 'Watch Summer Walker’s soulful ‘Unloyal’ performance on ‘Fallon’\r\nThe R&B artist appeared on last night\'s episode of the show <a href=\"https://www.nme.com/wp-content/uploads/2021/11/SummerWalker-live-performance-news-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/SummerWalker-live-performance-news-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/SummerWalker-live-performance-news-696x442.jpg', '2021-11-10 12:04:27'),
(17, 9, 'Drake issues statement on Astroworld festival tragedy: “My heart is broken” The rapper appeared onstage alongside Travis Scott during the latter\'s headline set. <a href=\"https://www.nme.com/wp-content/uploads/2021/11/drake-statement-astroworld-festival-tragedy-travis-scott@2000x1270-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/drake-statement-astroworld-festival-tragedy-travis-scott@2000x1270-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/drake-statement-astroworld-festival-tragedy-travis-scott@2000x1270-696x442.jpg', '2021-11-10 12:09:35'),
(18, 9, 'Yungblud announces 2022 Australia and New Zealand tour\r\nThe tour dates happen to align with that of Australian festival Splendour In The Grass. <a href=\"https://www.nme.com/wp-content/uploads/2021/11/yungblud-2022-australian-tour-credit-harry-herd-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/yungblud-2022-australian-tour-credit-harry-herd-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/yungblud-2022-australian-tour-credit-harry-herd-696x442.jpg', '2021-11-10 12:10:15'),
(19, 10, 'Watch Rosalía and The Weeknd’s trailer for new collaboration ‘La Fama’\r\n\"So get ready for some heat\" <a href=\"https://www.nme.com/wp-content/uploads/2021/11/rosalia-the-weeknd-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/rosalia-the-weeknd-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/rosalia-the-weeknd-696x442.jpg', '2021-11-10 12:16:41'),
(20, 10, 'Travis Scott will cover Astroworld victims’ funeral costs and offer free therapy sessions\r\nIt comes after he confirmed ticket refunds in the wake of the tragedy. <a href=\"https://www.nme.com/wp-content/uploads/2021/11/travisscott-2000x1270-1-696x442.jpg\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.nme.com/wp-content/uploads/2021/11/travisscott-2000x1270-1-696x442.jpg</a>', 'https://www.nme.com/wp-content/uploads/2021/11/travisscott-2000x1270-1-696x442.jpg', '2021-11-10 12:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `music_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `avatar`, `music_genre`) VALUES
(1, 'Kushan', 'Shamika', 'shamikakushan@gmail.com', 'kushanshamika', '$2y$12$vA1EFimicyMunILqXD6dUeeHQ40BX1t8t2IjP9sr7nLn3Y3Eofife', 'octocat-25_NY7lJUGMqi.png', 'POP'),
(2, 'Ruchini', 'Thathsarani', 'ruchinit@hotmail.com', 'ruchinit', '$2y$12$cmB2W15tCRa8JaRCwoj1COgBbx4J3icWRH851m/SnlECdXPUjdLsW', 'octocat-21_3OU-bxpjf1.png', 'RCK'),
(3, 'Chasindu', 'Kumarasiri', 'chasindu@live.com', 'chasindulive', '$2y$12$J/lFeG6q5xUd9F1w4fZ06OJiR1Cmcq71SovYRmkzwRVnN2N7E1oTy', 'octocat-23_Gov280VZF8.png', 'HIP'),
(4, 'Sahas', 'Punchihewa', 'sahasmcg2000@gmail.com', 'sahas2000', '$2y$12$z7K4BcNkEVEH3NVZqibEvOm.w2vP.SAF.cyZ6fzYTIiYMfLzlHX5.', 'octocat-14_rQK_7uWAyi.png', 'LTN'),
(5, 'Yasas', 'Mahima', 'yasasymahima@gmail.com', 'yasasy', '$2y$12$k5tYhG/BLDSxYSozH177peosSxZIzjR9dACw5XT/eO1Q/4usCAGO6', 'octocat-20_foUwpm8lnx.png', 'EDM'),
(6, 'Viraji', 'Dewmini', 'virajidewmini@gmail.com', 'virajidewmini', '$2y$12$UUHCMFVjORrtAtfgIYv/HOvwEs6Lm9mj25emyc70typ1ZtjG3QRf2', 'octocat-17_KB7bksF5YdX.png', 'POP'),
(7, 'Keerthi', 'Liyanage', 'liyanage65@gmail.com', 'liyanage65', '$2y$12$BFsDUoFIV.3mmhjZsqhIyOZW7ut4md4L1Dz/saG8Kbz2WKxKWijHm', 'octocat-24_rWrh5ewpB_.png', 'RCK'),
(8, 'Shamali', 'Deepika', 'shamalideepika@musicoven.lk', 'sasdeepika', '$2y$12$locW2BieZC2Zog6NE5jDv.jJRAJk85xb/kd6rudIOwYMDgJTDWnwK', 'octocat-26_MQe7sdjNEq.png', 'HIP'),
(9, 'Vihan', 'Perera', 'vihanperera@gmail.com', 'hansperera', '$2y$12$axpyIIb9w6n1gQfN4Iwk2e35yjXK8LPsSOrmbWOxnYp1N/s2IBmai', 'octocat-27_9Yb_ogxWyU.png', 'LTN'),
(10, 'Nisal', 'Samaranayake', 'nizzlo@musicoven.lk', 'nizzlo', '$2y$12$BVhTOak6x3LTISqpBzYUqumbPB.DPRSFRMUj5DXuweG5sufMdVpT2', 'octocat-37_FrXzKkr7Jo.png', 'EDM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `follower_id` (`follower_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
