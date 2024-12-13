-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 07:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(500) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'mikeChess.jpg', 'I love playing chess, and this is my first time participating in a chess tournament that is not related to school. The tournament was a thrilling experience as it was my first time competing in an open competition with players of all skill levels. During the tournament, I faced tough guys which helped me to improved my gameplay and skills. It gave me valuable experience in handling the pressure of a timed game and dealing with the unpredictability of tournament play.', '#FFEB3B'),
(2, 1, 'mlbb.jpg', 'I love playing Mobile Legends and it is one of my hobbies, it is fun and exciting especially when playing with friends for a team up. The coordination, team work and strategic planning to win the game make it more enjoyable and thrilling. Playing with my friends makes the game more fun and enjoyment, it is also one of the way to bond with them.', '#8BC34A'),
(3, 1, 'dota.jpg', 'Dota was one of the childhood games I grew up playing. I have a lot of memories of playing this game with friends. The intense gameplay and the enjoyment from playing this game keep me hooked. This game is more than a game for me because it was part of my childhood, it shaped my love for multiplayer games and online competition and play other online games.', '#F44336'),
(4, 2, 'museum.jpg', 'This is the first time I visited a National Museum, This museum is called National Museum of Natural History located at Manila. Visiting a museum like this is full of fun and amazing experience I saw and learn things that is part of the history. Also visiting this museum with my love ones adds more fun and enjoyment. I am looking forward to visit more museums in the near future.', '#F4A300'),
(5, 2, 'bike.jpg', 'This photo was taken during a bike ride with my friends, and it’s one of my favorite memories. We rode together just to have fun and enjoy the day. Exploring new places while riding in our bikes is one of the memories that I will cherish. Regardless of whether the destination is far or near, as long as we are riding our bikes together, the adventure will always be full of fun and friendship', '#FFEB3B'),
(6, 2, 'sea.jpg', 'I like going to the sea side, it is one of my way to unwind and relax myself. ALso watching the sunset is another thing I love. As the sky changes colors, I feel calm and enjoy watching it until the sun is completely disappeared. Every moments whenever I am at the seaside, especially when it is sunset, help me feel more at peace', '#5C6BC0'),
(7, 3, 'app.png', 'This is the first application that we made as a group. Developing this application took time for us to finish. The output may not be perfect, but after completing the task, it brought us enjoyment and motivation to improve and practice more, so we can enhance our skills for the future.', '#9C27B0'),
(8, 3, 'fbGames.png', 'This games is the games i played since I started using computer, I used to spend time playing this games, either playing or competing with my childhood friends, it gives enjoyment and fun. I created memories with this games which reminds me of my childhood days.', '#FFDE21'),
(9, 3, 'website.png', 'As an IT student, we were required to develop a website. This is the first website I have made for all my projects. Looking at the result, I feel happy with myself because, even though it may not be perfect, I can see an improvement in my skills when it comes to website development. This website is memorable to me because it reminds me of where I started. I know that in the future, when I look back at this old website, I will see how much my skills have improved since then.', '#F8D1B2'),
(10, 4, 'luna.jpg', 'As a person who loves watching movies and history, Heneral Luna movie will always be my favorite when it comes in  historical movie. I was hooked on this movie because of the intense story of one of our country\'s heroes which is the main character of the movie named Heneral Antonio Luna. ', '#F44336'),
(11, 4, 'queensGambit.jpg', 'The Queen\'s Gambit is one my favorite series as I love playing chess.  The story of the main character named Beth Harmon, who became a chess champion despite facing many challenges and being orphan, really inspired me to keep on playing chess even though I am not a good player of it. The movie reminds me of what dedication, practicing and perseverance can really do to get better in playing of it. This movie inspired me to keep improving.', ' #2196F3'),
(12, 4, 'sevenSundays.jpg', 'Seven Sundays is one of the movies that makes my heart melt. This movie is memorable to me because I can relate to the characters. After watching it, I realized how important each member of the family is and how crucial it is to have a good relationship with one another. It motivated me to build a stronger, more positive relationship with every member of my family', ' #8BC34A');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Battle and Brain Island', 'Welcome to The Battle & Brain Island, a dynamic gaming environment where teamwork, strategy, and fast reflexes come together.', 'This island is for those who thrive on both the mental challenge of strategic thinking and the high-energy action of competitive play. This island highlights my next moves in the chessboard or coordinating with my teammates in MOBA games. This island is a celebration of the diverse world of gaming.', '#C4B6A5', 'joy.png', 'active'),
(2, 'The Travel Tribe Island', 'Welcome to The Travel Tribe, an island where my love for adventure and the bonds of friendship come together.', 'This island highlights my exploration in new places and bonding and creating memorable memories with my friends and other people who matter most to me. The Travel Tribe is a celebration of the memories from my exploration in new places and with friends.', '#FFFFFF', 'disgust.png', 'active'),
(3, 'TechnoSphere Island', 'Welcome to TechnoSphere Island, a place where creativity, innovation, and technology merge.', 'This place highlights where I deep dive into the ever-evolving world of tech. The place where my journey in the tech world takes place, whether creating or developing new software, editing and manipulating pictures, or exploring new technologies. This island shows my improvement and fuels my passion for progress for better improvement. TechnoSphere is my playground for technological exploration.', '#C4B6A5', 'riley.png', 'active'),
(4, 'CineMania Island', 'Welcome to CineMania Island, where the magic of storytelling comes alive!', 'This island reflects my love for the cinematic universe, where every film becomes an unforgettable journey. This island depicts my journey through several genres, from captivating action movies to the heartwarming dramas and non-stop laughs in comedy. CineMania Island is the journey into the emotions, creativity, and cultural stories that films beautifully convey.', '#FFFFFF', 'joySadness.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
