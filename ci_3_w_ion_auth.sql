-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2020 at 02:05 AM
-- Server version: 8.0.18
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_3_w_ion_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_one` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `banner_two` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_one`, `banner_two`) VALUES
(1, '3d7476c9e36160f0701f3cc0143dd472.png', 'e500bac3a753edff1f047e4c11039f3d.png');

-- --------------------------------------------------------

--
-- Table structure for table `category_service`
--

CREATE TABLE `category_service` (
  `category_service_id` int(11) NOT NULL,
  `category_service_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_service`
--

INSERT INTO `category_service` (`category_service_id`, `category_service_name`) VALUES
(1, 'Software Development'),
(4, 'Imani Soto');

-- --------------------------------------------------------

--
-- Table structure for table `category_training`
--

CREATE TABLE `category_training` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_training`
--

INSERT INTO `category_training` (`category_id`, `category_name`) VALUES
(1, 'Consultants'),
(6, 'Data Science');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_image`) VALUES
(2, 'd22c1c409b91ddafb176c7074d786dc3.png');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partner_id` int(11) NOT NULL,
  `partner_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partner_id`, `partner_image`) VALUES
(4, '04d32bfedda2a9971e8ae096fafea621.png'),
(5, '5f80fb0b9c962c5c1fecc18737f76272.png'),
(6, '77ecd3b0f1832c7aef0a23957fabfd38.png'),
(7, '699012bee4258273ce96f926f7552eba.png'),
(8, '6cff74dd6fa9765d4e4324107c1b56c1.png');

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `profil_id` int(11) NOT NULL,
  `profil_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_wa` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_ig` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_fb` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_tw` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_lk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `profil_about` text COLLATE utf8mb4_general_ci NOT NULL,
  `profil_service` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`profil_id`, `profil_name`, `profil_phone`, `profil_wa`, `profil_ig`, `profil_fb`, `profil_tw`, `profil_lk`, `profil_email`, `profil_address`, `profil_about`, `profil_service`) VALUES
(1, 'Reagan Tyson', '0819629431', '0819629431', 'egovaflavia', 'egovaflavia', 'egovaflavia', 'egovaflavia', 'egovaflavia@gmail.com', 'Jln. Parak Karakah No. 21 Padang', '<span title=\"\" xss=removed>Rekhatama is our brand name.</span><span xss=removed> </span><span title=\"\" xss=removed>CV Rekhindo Pratama is the name of the legality of our company.</span><span xss=removed> </span><span title=\"\" xss=removed>Rekhindo Pratama (Rekhatama) was established in September 2014 and became fully operational in March 2015. At the beginning of its establishment, Rekhatama\'s focus was on Information and Communication Technology, especially in the services of IT Consultants.</span><span xss=removed> </span><span title=\"\" xss=removed>As the company grew, two new departments were formed, namely the IT Training and Software and Apps Development department.</span>', '<p class=\"text-align-justify\" xss=removed><span class=\"tlid-translation translation\" lang=\"en\" xml:lang=\"en\">Rekhatama has three types of services including:</span></p><ul xss=removed><li class=\"text-align-justify\" xss=removed><span class=\"tlid-translation translation\" lang=\"en\" xml:lang=\"en\">IT Training & Certifications</span><ul><li class=\"text-align-justify\" xss=removed><span class=\"tlid-translation translation\" lang=\"en\" tabindex=\"-1\" xml:lang=\"en\">IT training and certification are one of our services that aim to improve the competence of developing human resources in the field of information and communication technology. </span><span class=\"tlid-translation translation\" lang=\"en\" xml:lang=\"en\">Rekhatama has the principal partners including EXIN, Arcitura, Certiport, VMware. For the detailed training category, you can find in our training menu navigations.</span></li></ul></li><li class=\"text-align-justify\" xss=removed><span class=\"tlid-translation translation\" lang=\"en\" xml:lang=\"en\">IT Consultant & Solution</span><ul><li class=\"text-align-justify\" xss=removed><span class=\"tlid-translation translation\" lang=\"en\" xml:lang=\"en\">IT Consultant & Solution</span> are one of our services that aim to give some solution and consultancy about all issues regarding Information Technology that our client has. The example of our solution product is making an IT Governance BluePrint, Detailed Engineering Design (DED) of Network Infrastructure, Detail Engineering Design of Data Center Infrastructure, Detailed Engineering Design of ICT Command Center, and some of business process blueprint. Rekhatama is also a member of PERKINDO (Persatuan Konsultan Indonesia).</li></ul></li><li class=\"text-align-justify\" xss=removed><span class=\"tlid-translation translation\" lang=\"en\" xml:lang=\"en\">Software & Apps Development</span><ul><li class=\"text-align-justify\" xss=removed><span class=\"tlid-translation translation\" lang=\"en\" xml:lang=\"en\"><span title=\"\">software and app development is one of our services that provides solutions about customer needs related to information systems.</span> <span title=\"\">Information systems and apps developed based on business processes and customer needs. The example of our system information that rekhatama had to develop is Aset Management System, Learning Management System, SIM-Monev, SIM SUSADA, Employee Management System, Company Website, Library Management System.</span></span></li></ul></li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `category_service_id` int(11) NOT NULL,
  `service_desc` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `category_service_id`, `service_desc`) VALUES
(2, 4, 'egova');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slide_cap` text NOT NULL,
  `slide_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_title`, `slide_cap`, `slide_img`) VALUES
(12, 'Big Data Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In id, quia, possimus impedit vel voluptate corrupti fugiat ullam labore vero eum culpa eos pariatur voluptatem ab beatae, earum deleniti aliquam.', '1822c525d705f67845528580f36ed984.jpg'),
(13, 'Trouble Shooting', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In id, quia, possimus impedit vel voluptate corrupti fugiat ullam labore vero eum culpa eos pariatur voluptatem ab beatae, earum deleniti aliquam.', '682764e3043a7ae1f6b062394d8b037b.jpg'),
(14, 'IT Consultant', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In id, quia, possimus impedit vel voluptate corrupti fugiat ullam labore vero eum culpa eos pariatur voluptatem ab beatae, earum deleniti aliquam.', 'ec97345d1e12ddef51770968f9c4ef86.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `team_position` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `team_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `team_position`, `team_image`) VALUES
(2, 'Egova Riva Gustino', 'President Director', '62094c6dc7b740dc70c00f19ec2d9b79.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `training_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `training_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `training_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `training_duration` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `training_price` float NOT NULL,
  `training_exam_info` text COLLATE utf8mb4_general_ci NOT NULL,
  `training_desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `training_outline` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`training_id`, `category_id`, `training_name`, `training_image`, `training_duration`, `training_price`, `training_exam_info`, `training_desc`, `training_outline`) VALUES
(4, 6, 'Hahahahae', '35855ed4600d9d69feb5709c638e04d5.jpg', '1231', 99963, '<p>asde</p>', '<p>asde</p>', '<p>asde</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1600133571, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 1, 1),
(6, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `category_service`
--
ALTER TABLE `category_service`
  ADD PRIMARY KEY (`category_service_id`);

--
-- Indexes for table `category_training`
--
ALTER TABLE `category_training`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`profil_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_service`
--
ALTER TABLE `category_service`
  MODIFY `category_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_training`
--
ALTER TABLE `category_training`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `profil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
