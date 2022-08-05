-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 08:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinejuan`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `2d_list`
-- (See below for the actual view)
--
CREATE TABLE `2d_list` (
`movie_name` varchar(255)
,`theater_name` varchar(255)
,`seat_id` int(11)
,`user_uid` varchar(255)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `3d_list`
-- (See below for the actual view)
--
CREATE TABLE `3d_list` (
`movie_name` varchar(255)
,`theater_name` varchar(255)
,`seat_id` int(11)
,`user_uid` varchar(255)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dc_list`
-- (See below for the actual view)
--
CREATE TABLE `dc_list` (
`movie_name` varchar(255)
,`theater_name` varchar(255)
,`seat_id` int(11)
,`user_uid` varchar(255)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Romance'),
(3, 'Drama'),
(4, 'Horror'),
(5, 'Historical Fiction'),
(6, 'Comedy'),
(7, 'Sci-Fi');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `building_name` varchar(255) DEFAULT NULL,
  `location_municipality` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `building_name`, `location_municipality`) VALUES
(1, 'SM City Fairview', 'Quezon City'),
(2, 'SM City Novaliches', 'Quezon City'),
(3, ' SM North Edsa ', 'Quezon City'),
(4, ' SM City Pampanga ', 'Pampanga'),
(5, ' SM City Marilao ', 'Bulacan');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) DEFAULT NULL,
  `movie_summary` longtext DEFAULT NULL,
  `movie_img_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_summary`, `movie_img_path`) VALUES
(53, 'Moonfalls', 'Moonfall the movie', 'POSTER-62a0c342912819.52751082.jpg'),
(57, 'Moonfall', 'Moonfall summary', 'POSTER-62a1db32420139.41748430.jpg'),
(58, 'Deadpool', 'Deadpool summary', 'POSTER-62a1db4a7f1d56.59546105.jpeg'),
(59, 'Uncharted', 'Uncharted', 'POSTER-62a1f566678864.06989529.jpg'),
(60, 'Ambulance', 'Ambulance the movie', 'POSTER-62a22e522de1b2.93683341.jpg'),
(61, 'Lost City', 'Lost City', 'POSTER-62a2b275f36576.08240308.jpg'),
(62, 'Memory', 'When Alex, an expert assassin, refuses to complete a job for a dangerous criminal organization, he becomes a target. FBI agents and Mexican intelligence are brought in to investigate the trail of bodies, leading them closer to Alex. With the crime syndicate and FBI in hot pursuit, Alex has the skills to stay ahead, except for one thing: he is struggling with severe memory loss, affecting his every move. Alex must question his every action and whom he can ultimately trust.', 'POSTER-62a2d405564106.20642386.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_genres`
--

CREATE TABLE `movie_genres` (
  `movie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_genres`
--

INSERT INTO `movie_genres` (`movie_id`, `genre_id`) VALUES
(58, 1),
(58, 6),
(58, 7),
(59, 1),
(59, 7),
(60, 1),
(60, 7),
(61, 1),
(61, 7),
(62, 1),
(62, 7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `movie_list`
-- (See below for the actual view)
--
CREATE TABLE `movie_list` (
`movie_img_path` varchar(255)
,`movie_name` varchar(255)
,`movie_summary` longtext
,`genres` mediumtext
);

-- --------------------------------------------------------

--
-- Table structure for table `movie_schedules`
--

CREATE TABLE `movie_schedules` (
  `movie_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `movie_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_schedules`
--

INSERT INTO `movie_schedules` (`movie_id`, `theater_id`, `movie_date`) VALUES
(53, 1, '2022-06-13'),
(53, 2, '2022-06-13'),
(53, 3, '2022-06-13'),
(53, 4, '2022-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `seat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `seat_title`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25');

-- --------------------------------------------------------

--
-- Table structure for table `seats_reservation`
--

CREATE TABLE `seats_reservation` (
  `movie_id` int(11) DEFAULT NULL,
  `theater_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats_reservation`
--

INSERT INTO `seats_reservation` (`movie_id`, `theater_id`, `seat_id`, `user_id`, `status`) VALUES
(62, 1, 1, 23, 1),
(62, 2, 1, NULL, 0),
(62, 3, 1, NULL, 0),
(62, 4, 1, NULL, 0),
(62, 1, 2, 23, 1),
(62, 2, 2, NULL, 0),
(62, 3, 2, NULL, 0),
(62, 4, 2, NULL, 0),
(62, 1, 3, 23, 1),
(62, 2, 3, NULL, 0),
(62, 3, 3, NULL, 0),
(62, 4, 3, NULL, 0),
(62, 1, 4, 23, 1),
(62, 2, 4, NULL, 0),
(62, 3, 4, NULL, 0),
(62, 4, 4, NULL, 0),
(62, 1, 5, 23, 1),
(62, 2, 5, NULL, 0),
(62, 3, 5, NULL, 0),
(62, 4, 5, NULL, 0),
(62, 1, 6, 23, 1),
(62, 2, 6, NULL, 0),
(62, 3, 6, NULL, 0),
(62, 4, 6, NULL, 0),
(62, 1, 7, 23, 1),
(62, 2, 7, NULL, 0),
(62, 3, 7, NULL, 0),
(62, 4, 7, NULL, 0),
(62, 1, 8, NULL, 0),
(62, 2, 8, NULL, 0),
(62, 3, 8, NULL, 0),
(62, 4, 8, NULL, 0),
(62, 1, 9, NULL, 0),
(62, 2, 9, NULL, 0),
(62, 3, 9, NULL, 0),
(62, 4, 9, NULL, 0),
(62, 1, 10, NULL, 0),
(62, 2, 10, NULL, 0),
(62, 3, 10, NULL, 0),
(62, 4, 10, NULL, 0),
(62, 1, 11, NULL, 0),
(62, 2, 11, NULL, 0),
(62, 3, 11, NULL, 0),
(62, 4, 11, NULL, 0),
(62, 1, 12, NULL, 0),
(62, 2, 12, NULL, 0),
(62, 3, 12, NULL, 0),
(62, 4, 12, NULL, 0),
(62, 1, 13, NULL, 0),
(62, 2, 13, NULL, 0),
(62, 3, 13, NULL, 0),
(62, 4, 13, NULL, 0),
(62, 1, 14, NULL, 0),
(62, 2, 14, NULL, 0),
(62, 3, 14, NULL, 0),
(62, 4, 14, NULL, 0),
(62, 1, 15, NULL, 0),
(62, 2, 15, NULL, 0),
(62, 3, 15, NULL, 0),
(62, 4, 15, NULL, 0),
(62, 1, 16, NULL, 0),
(62, 2, 16, NULL, 0),
(62, 3, 16, NULL, 0),
(62, 4, 16, NULL, 0),
(62, 1, 17, NULL, 0),
(62, 2, 17, NULL, 0),
(62, 3, 17, NULL, 0),
(62, 4, 17, NULL, 0),
(62, 1, 18, NULL, 0),
(62, 2, 18, NULL, 0),
(62, 3, 18, NULL, 0),
(62, 4, 18, NULL, 0),
(62, 1, 19, NULL, 0),
(62, 2, 19, NULL, 0),
(62, 3, 19, NULL, 0),
(62, 4, 19, NULL, 0),
(62, 1, 20, NULL, 0),
(62, 2, 20, NULL, 0),
(62, 3, 20, NULL, 0),
(62, 4, 20, NULL, 0),
(62, 1, 21, NULL, 0),
(62, 2, 21, NULL, 0),
(62, 3, 21, NULL, 0),
(62, 4, 21, NULL, 0),
(62, 1, 22, NULL, 0),
(62, 2, 22, NULL, 0),
(62, 3, 22, NULL, 0),
(62, 4, 22, NULL, 0),
(62, 1, 23, NULL, 0),
(62, 2, 23, NULL, 0),
(62, 3, 23, NULL, 0),
(62, 4, 23, NULL, 0),
(62, 1, 24, NULL, 0),
(62, 2, 24, NULL, 0),
(62, 3, 24, NULL, 0),
(62, 4, 24, NULL, 0),
(62, 1, 25, NULL, 0),
(62, 2, 25, NULL, 0),
(62, 3, 25, NULL, 0),
(62, 4, 25, NULL, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `seat_bookings`
-- (See below for the actual view)
--
CREATE TABLE `seat_bookings` (
`movie_name` varchar(255)
,`user_uid` varchar(255)
,`theater_name` varchar(255)
,`seat_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ss_list`
-- (See below for the actual view)
--
CREATE TABLE `ss_list` (
`movie_name` varchar(255)
,`theater_name` varchar(255)
,`seat_id` int(11)
,`user_uid` varchar(255)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `theater_id` int(11) NOT NULL,
  `theater_name` varchar(255) NOT NULL,
  `theater_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`theater_id`, `theater_name`, `theater_time`) VALUES
(1, '2D', '09:00:00'),
(2, '3D', '13:00:00'),
(3, 'DC', '15:00:00'),
(4, 'Superscreen', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `avatar_img_path` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_uid`, `user_pwd`, `avatar_img_path`, `role_id`) VALUES
(11, 'Cristianber', 'Gordora', 'gcristianber@gmail.com', 'cristiangordora', '$2y$10$oiduA06YRHhURoalB5WLC.S2sk/N1SGla6RGwzc9aGsVyG/L/K6my', 'AVATAR-629f3f8a9da3e7.35443890.jpg', 2),
(12, 'Mark', 'Zuckerberg', 'markzuckersss@gmail.com', 'marky', '$2y$10$B11Dol4tpZmkB0m14qd8reazAlcfRzwYuFTnxQlLNdfu0tHrFOLVO', 'AVATAR-629f40ac276e35.40834680.jpg', 1),
(13, 'Deadpool', 'Deadpool', 'deadpool@gmail.com', 'Deadpool', '$2y$10$N.IZNVsV.axWzvC4MbQ8q.YGUrGjMvTi9A8AJ4TolpT.6U9vTD9A2', 'AVATAR-629f410077fda8.46407885.jpeg', 1),
(14, 'Umma', 'Umma', 'umma@gmail.com', 'umma', '$2y$10$3JakNJqKBDIHyEY5YylLIOoBD5rQNML3oUW1TXioin5ZG8ri827qu', 'AVATAR-629f600594b7f4.32544297.jpg', 1),
(17, 'Son', 'Chaeyoung', 'chaeyoungie@gmail.com', 'babychae', '$2y$10$FgSMa0Uz3hJD/BmbBECvEezuz8cq3ABAOMIsnY0EVEzRcfM3bxM4O', 'AVATAR-62a03ee9ef8984.34005452.jpg', 1),
(18, 'Morbius', 'Morbius', 'morbius@gmail.com', 'Morbius', '$2y$10$JZZioz.wcrs4DwWeR0PyYeL5GU.QtU8Zh19cXNorz/op7txlEERZe', 'AVATAR-62a1efb456b8f3.43167156.jpg', 1),
(19, 'Johnny', 'Johnny', 'johnny12@gmail.com', 'johnny12', '$2y$10$pVp4oSdplYYeD2NLNWZXu.UX1/cwUugzaavXFoDaouIBUD1rrfoJm', 'AVATAR-62a2b5bd6ad844.82235713.jpg', 1),
(20, 'June', 'Nice', 'june123', 'june123', '$2y$10$7D1hX0izif1nVx5/WSH5xOidsQmjjksUni4t3s7IPc6yJfq42CWli', 'AVATAR-62a2b6265130c9.65855769.jpg', 1),
(21, 'June', 'Nice', 'june1234', 'june1234', '$2y$10$vTHkKb/FxjE2C78r40XTXuYseUcSDFPsoCf.c1Vb9bb1zkJdbld5i', 'AVATAR-62a2b63eb76db0.57684305.jpg', 1),
(22, 'June', 'Nice', 'june12345', 'june1234', '$2y$10$Nes6WKA9KO1/ca4P./C2euX4fgBb/w.HcjHtjlZa7Kfcc3KjHncvO', 'AVATAR-62a2b64fef61c0.67346481.jpg', 1),
(23, 'Lee', 'Jieun', 'leejieun@gmail.com', 'IU', '$2y$10$lNYHldGKKKoN/FfVv3fwUOO5EBdfXHTExnF/l/qIxmPNcyZKlyI0S', 'AVATAR-62a2d42c05a521.15459929.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `role_title` varchar(255) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_title`) VALUES
(1, 'customer'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure for view `2d_list`
--
DROP TABLE IF EXISTS `2d_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `2d_list`  AS SELECT `m`.`movie_name` AS `movie_name`, `t`.`theater_name` AS `theater_name`, `sr`.`seat_id` AS `seat_id`, `u`.`user_uid` AS `user_uid`, `sr`.`status` AS `status` FROM (((`seats_reservation` `sr` join `users` `u` on(`sr`.`user_id` = `u`.`user_id`)) join `theaters` `t` on(`t`.`theater_id` = `sr`.`theater_id`)) join `movies` `m` on(`m`.`movie_id` = `m`.`movie_id`)) WHERE `t`.`theater_name` = '2D' ;

-- --------------------------------------------------------

--
-- Structure for view `3d_list`
--
DROP TABLE IF EXISTS `3d_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `3d_list`  AS SELECT `m`.`movie_name` AS `movie_name`, `t`.`theater_name` AS `theater_name`, `sr`.`seat_id` AS `seat_id`, `u`.`user_uid` AS `user_uid`, `sr`.`status` AS `status` FROM (((`seats_reservation` `sr` join `users` `u` on(`sr`.`user_id` = `u`.`user_id`)) join `theaters` `t` on(`t`.`theater_id` = `sr`.`theater_id`)) join `movies` `m` on(`m`.`movie_id` = `m`.`movie_id`)) WHERE `t`.`theater_name` = '3D' ;

-- --------------------------------------------------------

--
-- Structure for view `dc_list`
--
DROP TABLE IF EXISTS `dc_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dc_list`  AS SELECT `m`.`movie_name` AS `movie_name`, `t`.`theater_name` AS `theater_name`, `sr`.`seat_id` AS `seat_id`, `u`.`user_uid` AS `user_uid`, `sr`.`status` AS `status` FROM (((`seats_reservation` `sr` join `users` `u` on(`sr`.`user_id` = `u`.`user_id`)) join `theaters` `t` on(`t`.`theater_id` = `sr`.`theater_id`)) join `movies` `m` on(`m`.`movie_id` = `m`.`movie_id`)) WHERE `t`.`theater_name` = 'Director\'s Club' ;

-- --------------------------------------------------------

--
-- Structure for view `movie_list`
--
DROP TABLE IF EXISTS `movie_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `movie_list`  AS SELECT `m`.`movie_img_path` AS `movie_img_path`, `m`.`movie_name` AS `movie_name`, `m`.`movie_summary` AS `movie_summary`, group_concat(`g`.`genre_name` order by `g`.`genre_name` ASC separator ',') AS `genres` FROM ((`movies` `m` join `movie_genres` `mg` on(`mg`.`movie_id` = `m`.`movie_id`)) join `genres` `g` on(`g`.`genre_id` = `mg`.`genre_id`)) GROUP BY `m`.`movie_id`, `m`.`movie_name` ;

-- --------------------------------------------------------

--
-- Structure for view `seat_bookings`
--
DROP TABLE IF EXISTS `seat_bookings`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `seat_bookings`  AS SELECT `m`.`movie_name` AS `movie_name`, `u`.`user_uid` AS `user_uid`, `t`.`theater_name` AS `theater_name`, `sr`.`seat_id` AS `seat_id` FROM (((`seats_reservation` `sr` join `movies` `m` on(`m`.`movie_id` = `sr`.`movie_id`)) join `users` `u` on(`u`.`user_id` = `sr`.`user_id`)) join `theaters` `t` on(`t`.`theater_id` = `sr`.`theater_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `ss_list`
--
DROP TABLE IF EXISTS `ss_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ss_list`  AS SELECT `m`.`movie_name` AS `movie_name`, `t`.`theater_name` AS `theater_name`, `sr`.`seat_id` AS `seat_id`, `u`.`user_uid` AS `user_uid`, `sr`.`status` AS `status` FROM (((`seats_reservation` `sr` join `users` `u` on(`sr`.`user_id` = `u`.`user_id`)) join `theaters` `t` on(`t`.`theater_id` = `sr`.`theater_id`)) join `movies` `m` on(`m`.`movie_id` = `m`.`movie_id`)) WHERE `t`.`theater_name` = 'Superscreen' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movie_genres`
--
ALTER TABLE `movie_genres`
  ADD KEY `FK_movie_genres_genres_id` (`genre_id`),
  ADD KEY `FK_movie_genres_movies_id` (`movie_id`);

--
-- Indexes for table `movie_schedules`
--
ALTER TABLE `movie_schedules`
  ADD KEY `fk_movie_id_movie_schedules` (`movie_id`),
  ADD KEY `fk_theater_id_movie_schedules` (`theater_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `seats_reservation`
--
ALTER TABLE `seats_reservation`
  ADD KEY `fk_movie_id_seat_reservation` (`movie_id`),
  ADD KEY `fk_theater_id_seat_reservation` (`theater_id`),
  ADD KEY `fk_seat_id_seat_reservation` (`seat_id`),
  ADD KEY `fk_user_id_seat_reservation` (`user_id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`theater_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_users_user_roles_id` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `theater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_genres`
--
ALTER TABLE `movie_genres`
  ADD CONSTRAINT `FK_movie_genres_genres_id` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_movie_genres_movies_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_schedules`
--
ALTER TABLE `movie_schedules`
  ADD CONSTRAINT `fk_movie_id_movie_schedules` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `fk_theater_id_movie_schedules` FOREIGN KEY (`theater_id`) REFERENCES `theaters` (`theater_id`);

--
-- Constraints for table `seats_reservation`
--
ALTER TABLE `seats_reservation`
  ADD CONSTRAINT `fk_movie_id_seat_reservation` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `fk_seat_id_seat_reservation` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`seat_id`),
  ADD CONSTRAINT `fk_theater_id_seat_reservation` FOREIGN KEY (`theater_id`) REFERENCES `theaters` (`theater_id`),
  ADD CONSTRAINT `fk_user_id_seat_reservation` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_user_roles_id` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
