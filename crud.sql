-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2022 at 06:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `address`) VALUES
(1, 'Sargente', 'Kertess', 'skertess0', 'PAHMJlSp9E', 'skertess0@jigsy.com', '1384 Park Meadow Point'),
(2, 'Beilul', 'Hughill', 'bhughill1', 'kukPcioA2gH', 'bhughill1@tinypic.com', '18 Delladonna Place'),
(3, 'Brandice', 'de Courcy', 'bdecourcy2', '9qoj8Ai', 'bdecourcy2@youtube.com', '887 Macpherson Alley'),
(4, 'Creigh', 'Jermin', 'cjermin3', 'Dqjcou46r', 'cjermin3@prlog.org', '0587 Briar Crest Crossing'),
(5, 'Zahara', 'Loudyan', 'zloudyan4', 'aJjPrKa', 'zloudyan4@wunderground.com', '767 Mandrake Way'),
(6, 'Desi', 'McAndrew', 'dmcandrew5', 'PoUd1Ik', 'dmcandrew5@google.de', '830 Warrior Drive'),
(7, 'Bill', 'Tivnan', 'btivnan6', 'iBRkL5N', 'btivnan6@ucla.edu', '00048 Jana Road'),
(8, 'Thekla', 'Burford', 'tburford7', 'b2NdcU', 'tburford7@telegraph.co.uk', '523 Homewood Avenue'),
(9, 'Faith', 'Toun', 'ftoun8', 'fOpbxwKt', 'ftoun8@cbslocal.com', '9599 Northwestern Terrace'),
(10, 'Stu', 'Matula', 'smatula9', 'YuL3Adf', 'smatula9@go.com', '0137 Crownhardt Lane'),
(11, 'Reid', 'Bracci', 'rbraccia', 'sja9eJClUT3', 'rbraccia@symantec.com', '502 Upham Lane'),
(12, 'Jeanie', 'Brouncker', 'jbrounckerb', 'aO5P9ZPiCIiM', 'jbrounckerb@marriott.com', '04730 Jackson Street'),
(13, 'Kilian', 'Lapham', 'klaphamc', 'feh6NPlpQ', 'klaphamc@forbes.com', '42 Pine View Pass'),
(14, 'Melly', 'Relf', 'mrelfd', 'VsmtpCbRfY', 'mrelfd@hud.gov', '60216 East Plaza'),
(15, 'Chester', 'Pring', 'cpringe', 'f9mFOuodWetk', 'cpringe@guardian.co.uk', '0 Bobwhite Alley'),
(16, 'Neysa', 'Folland', 'nfollandf', '1484Rppa2J', 'nfollandf@networksolutions.com', '3414 Transport Trail'),
(17, 'Rand', 'Whorton', 'rwhortong', 'UzcYgr', 'rwhortong@yolasite.com', '33579 Colorado Drive'),
(18, 'Louie', 'Elsey', 'lelseyh', '5dTQVo', 'lelseyh@wufoo.com', '02732 Aberg Avenue'),
(19, 'Kincaid', 'Portlock', 'kportlocki', 'bdPgAcv5D', 'kportlocki@usa.gov', '1 Northridge Junction'),
(20, 'Clo', 'Warlow', 'cwarlowj', 'c0wkcXcYd', 'cwarlowj@istockphoto.com', '331 Killdeer Park'),
(21, 'Joycelin', 'Stuke', 'jstukek', 'MdhKoNc', 'jstukek@google.com.au', '58155 Sloan Court'),
(22, 'Sela', 'Chick', 'schickl', 'wjsJCe', 'schickl@soundcloud.com', '6 Norway Maple Crossing'),
(23, 'Katalin', 'Boadby', 'kboadbym', 'EWPT7TjB', 'kboadbym@shop-pro.jp', '661 Maywood Avenue'),
(24, 'Arman', 'Somerfield', 'asomerfieldn', 'ObDjntFA', 'asomerfieldn@squarespace.com', '752 Shopko Plaza'),
(25, 'Jamesy', 'Hurdwell', 'jhurdwello', '28JoFtjY', 'jhurdwello@foxnews.com', '63 Elka Pass'),
(26, 'Torrance', 'Poznanski', 'tpoznanskip', 'Kty4OoUd8xHJ', 'tpoznanskip@theglobeandmail.com', '91 Novick Pass'),
(27, 'Wenonah', 'Ceaplen', 'wceaplenq', 'eXzidCs', 'wceaplenq@wikipedia.org', '971 Cardinal Hill'),
(28, 'Haydon', 'Haulkham', 'hhaulkhamr', 'TOC6ZkNrsPA', 'hhaulkhamr@skype.com', '9 Nobel Street'),
(29, 'Moses', 'Veregan', 'mveregans', 'RB4PwxJH8xiM', 'mveregans@google.co.jp', '0 Tomscot Court'),
(30, 'Merrili', 'Leeburne', 'mleeburnet', '7fB2jnEc3X0', 'mleeburnet@shareasale.com', '87 Golden Leaf Pass'),
(31, 'Phineas', 'Gaggen', 'pgaggenu', 'RQfzGjB7', 'pgaggenu@cisco.com', '90215 South Circle'),
(32, 'Ellis', 'Peinke', 'epeinkev', 'U3c9bwKAzi', 'epeinkev@gnu.org', '06759 Eliot Center'),
(33, 'Avie', 'Dafforne', 'adaffornew', 'RqhasGtM0', 'adaffornew@nhs.uk', '465 Ludington Parkway'),
(34, 'Violet', 'Cupper', 'vcupperx', 'vi8ietSDsfll', 'vcupperx@symantec.com', '3493 Elgar Avenue'),
(35, 'Juana', 'Legerton', 'jlegertony', 'kjd85Z', 'jlegertony@jimdo.com', '158 Village Green Lane'),
(36, 'Kingsly', 'Mounsie', 'kmounsiez', 'B6rtfium', 'kmounsiez@hud.gov', '384 Bashford Place'),
(37, 'Roma', 'McCritichie', 'rmccritichie10', '2t5LCmBsbBb', 'rmccritichie10@mac.com', '7 Park Meadow Point'),
(38, 'Sig', 'Barhams', 'sbarhams11', 'yQJcbQl', 'sbarhams11@vistaprint.com', '87 Schlimgen Crossing'),
(39, 'Irwin', 'Shervil', 'ishervil12', 'sXhpWIrCSP', 'ishervil12@forbes.com', '37 Stoughton Court'),
(40, 'Casie', 'Egdell', 'cegdell13', 'g4maRv', 'cegdell13@tamu.edu', '3 Springview Place'),
(41, 'Foster', 'Biddiss', 'fbiddiss14', 'HJgZaqmBYQ', 'fbiddiss14@gov.uk', '8602 Clove Parkway'),
(42, 'Sadye', 'Purnell', 'spurnell15', 'EM2Jr8jCSE', 'spurnell15@opera.com', '3 Melvin Avenue'),
(43, 'Elisa', 'Maffione', 'emaffione16', 'LJjkYTK9cv', 'emaffione16@hugedomains.com', '48 Colorado Circle'),
(44, 'Sal', 'Tace', 'stace17', 'nKKo6K', 'stace17@msn.com', '915 Dixon Alley'),
(45, 'Toni', 'Judge', 'tjudge18', 'cFl4MA4r5wE', 'tjudge18@storify.com', '40986 Raven Circle'),
(46, 'Marthena', 'Croix', 'mcroix19', 'vk1Xtbtux8n', 'mcroix19@google.cn', '96299 Shoshone Junction'),
(47, 'Latia', 'Whiteway', 'lwhiteway1a', 'NDQOJU', 'lwhiteway1a@plala.or.jp', '621 Mallory Trail'),
(48, 'Wylie', 'Simcoe', 'wsimcoe1b', 'nhao12I', 'wsimcoe1b@51.la', '5 Waxwing Drive'),
(49, 'Anton', 'Fawdrey', 'afawdrey1c', 'JzIWNMnSG44', 'afawdrey1c@csmonitor.com', '56890 Pond Street'),
(50, 'Daffi', 'Oubridge', 'doubridge1d', 'BBIvt9RnO', 'doubridge1d@yelp.com', '3554 Warrior Plaza'),
(51, 'Cyan', 'Vega', 'cyanneheart', '123', 'itscyanne@pm.me', 'Tagudin'),
(52, 'Cyanne', 'Vega', 'cyan', '123', 'cyannejustinvega@protonmail.com', 'Bio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
