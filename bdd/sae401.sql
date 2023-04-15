-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Mar 30, 2023 at 09:50 AM
-- Server version: 10.8.4-MariaDB-1:10.8.4+maria~ubu2204
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sae401`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE `avatars` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`id`, `image`) VALUES
(1, 'black-panther.jpeg'),
(2, 'black-widow-2.jpg'),
(3, 'black-widow.jpg'),
(4, 'bucky-barnes-2.jpg'),
(5, 'bucky-barnes.jpg'),
(6, 'captain-marvel.jpg'),
(7, 'clint-barton.jpg'),
(8, 'cyclops.jpg'),
(9, 'daredevil.jpeg'),
(10, 'deadpool.jpg'),
(11, 'doctor-strange.jpg'),
(12, 'hulk.jpg'),
(13, 'iron-man.png'),
(14, 'kate-bishop.jpg'),
(15, 'magneto.jpg'),
(16, 'miles-morales-2.jpg'),
(17, 'miles-morales.jpeg'),
(18, 'moonknight-2.jpg'),
(19, 'moonknight.jpg'),
(20, 'quicksilver.jpeg'),
(21, 'sam-wilson-2.jpg'),
(22, 'sam-wilson.jpg'),
(23, 'scarlet-witch.jpeg'),
(24, 'silk.jpeg'),
(25, 'spider-woman.jpeg'),
(26, 'spiderman-2.jpg'),
(27, 'spiderman-3.jpg'),
(28, 'spiderman.jpg'),
(29, 'steve-rogers.jpg'),
(30, 'storm.jpeg'),
(31, 'thor-2.jpg'),
(32, 'thor.jpg'),
(33, 'wiccan.jpeg'),
(34, 'wolverine.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230308134425', '2023-03-08 13:44:41', 46),
('DoctrineMigrations\\Version20230308141317', '2023-03-08 14:13:29', 48),
('DoctrineMigrations\\Version20230309134747', '2023-03-09 13:47:58', 57),
('DoctrineMigrations\\Version20230313132131', '2023-03-14 10:21:21', 82),
('DoctrineMigrations\\Version20230329075935', '2023-03-29 07:59:54', 90);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(1, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:186:\\\"http://localhost:8088/sae401/index.php/verify/email?expires=1678717452&signature=J0i%2FixjNpInntqpkbkdH8%2Fy5315lz3W45j%2F1DItZZ9c%3D&token=XOwwXEdiMifNH5QqaJQ4Iszft2We7ABuvmY15Nd7uC8%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:22:\\\"no-reply@codenames.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:18:\\\"Codenames Mail Bot\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:26:\\\"tim.mockingjay09@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:31:\\\"Veuillez confirmer votre e-mail\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-03-13 13:24:13', '2023-03-13 13:24:13', NULL),
(2, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:186:\\\"http://localhost:8088/sae401/index.php/verify/email?expires=1678966685&signature=RQPirEYah%2BYDrmT%2BtOWpHcmWcFAmLbzZuUr%2F4mQ7QH0%3D&token=Vouvu4OdcteePj8jAHpWbn85Y2kaFdr7VBwCKsGMv70%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:22:\\\"no-reply@codenames.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:18:\\\"Codenames Mail Bot\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:43:\\\"julie.van-houdenhove@etudiant.univ-reims.fr\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:31:\\\"Veuillez confirmer votre e-mail\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-03-16 10:38:05', '2023-03-16 10:38:05', NULL),
(3, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:30:\\\"reset_password/email.html.twig\\\";i:1;N;i:2;a:1:{s:10:\\\"resetToken\\\";O:58:\\\"SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\\":4:{s:65:\\\"\\0SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\0token\\\";s:40:\\\"g008nQbuC0IxMLiHlNy0fUejopwIYAs6YdHPEvev\\\";s:69:\\\"\\0SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\0expiresAt\\\";O:17:\\\"DateTimeImmutable\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-16 11:48:45.460157\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}s:71:\\\"\\0SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\0generatedAt\\\";i:1678963725;s:73:\\\"\\0SymfonyCasts\\\\Bundle\\\\ResetPassword\\\\Model\\\\ResetPasswordToken\\0transInterval\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:22:\\\"no-reply@codenames.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:18:\\\"Codenames Mail Bot\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:26:\\\"tim.mockingjay09@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:44:\\\"Demande de réinitialisation de mot de passe\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-03-16 10:48:45', '2023-03-16 10:48:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mot`
--

CREATE TABLE `mot` (
  `id` int(11) NOT NULL,
  `fr` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mot`
--

INSERT INTO `mot` (`id`, `fr`, `en`) VALUES
(1, 'Spider-Man', 'Spider-Man'),
(2, 'Captain Marvel', 'Captain Marvel'),
(3, 'S.H.I.E.L.D.', 'S.H.I.E.L.D.'),
(4, 'HYDRA', 'HYDRA'),
(5, 'Loki', 'Loki'),
(6, 'Captain America', 'Captain America'),
(7, 'Iron Man', 'Iron Man'),
(8, 'Thor', 'Thor'),
(9, 'Oeil de Faucon / Hawkeye', 'Hawkeye'),
(10, 'Tony Stark', 'Tony Stark'),
(11, 'Marteau', 'Hammer'),
(12, 'Extra-terrestre', 'Alien'),
(13, 'Tesseract', 'Tesseract'),
(14, 'New York', 'New York'),
(15, 'Lances-toiles', 'Web shooters'),
(16, 'Veuve Noire / Black Widow', 'Black Widow'),
(17, 'Nick Fury', 'Nick Fury'),
(18, 'Ailes', 'Wings'),
(19, 'Radiation gamma', 'Gamma radiation'),
(20, 'Hulk', 'Hulk'),
(21, 'Docteur', 'Doctor'),
(22, 'Bruce Banner', 'Bruce Banner'),
(23, 'X-Men', 'X-Men'),
(24, 'Mutant', 'Mutant'),
(25, 'Professeur X', 'Professor X'),
(26, 'Daredevil', 'Daredevil'),
(27, 'Avocat', 'Lawyer'),
(28, 'Assassin', 'Assassin'),
(29, 'Pistolet', 'Gun'),
(30, 'Arc', 'Bow'),
(31, 'Flèche', 'Arrow'),
(32, 'Pierres d\'Infinité', 'Infinity Stones'),
(33, 'Pierre du Pouvoir', 'Power Stone'),
(34, 'Pierre de l\'Espace', 'Space Stone'),
(35, 'Pierre de l\'Esprit', 'Mind Stone'),
(36, 'Pierre de Réalité', 'Reality Stone'),
(37, 'Pierre du Temps', 'Time Stone'),
(38, 'Pierre de l\'Âme', 'Soul Stone'),
(39, 'Voyage temporel', 'Time travel'),
(40, 'Hache', 'Axe'),
(41, 'Groot', 'Groot'),
(42, 'Gardiens', 'Guardians'),
(43, 'Galaxie', 'Galaxy'),
(44, 'Épée', 'Sword'),
(45, 'Docteur Strange', 'Doctor Strange'),
(46, 'Magicien', 'Wizard'),
(47, 'Sorcier', 'Sorcerer'),
(48, 'La Sorcière rouge', 'Scarlet Witch'),
(49, 'Magie', 'Magic'),
(50, 'Voler', 'Fly'),
(51, 'Vitesse', 'Speed'),
(52, 'Vif-Argent / Quicksilver', 'Quicksilver'),
(53, 'Le Soldat de l\'Hiver', 'Winter Soldier'),
(54, 'Super-soldat', 'Super-soldier'),
(55, 'Armée', 'Army'),
(56, 'Accords de Sokovie', 'Sokovia Accords'),
(57, 'Sokovie', 'Sokovia'),
(58, 'Lagos', 'Lagos'),
(59, 'Espion', 'Spy'),
(60, 'Skrull', 'Skrull'),
(61, 'Kree', 'Kree'),
(62, 'Inhumains', 'Inhumans'),
(63, 'Quake', 'Quake'),
(64, 'Avenger', 'Avenger'),
(65, 'Wolverine', 'Wolverine'),
(66, 'Tornade', 'Storm'),
(67, 'Foudre', 'Lightning'),
(68, 'Tonnerre', 'Thunder'),
(69, 'Asgard', 'Asgard'),
(70, 'Le Fauve', 'Beast'),
(71, 'Thanos', 'Thanos'),
(72, 'Russie', 'Russia'),
(73, 'Lavage de cerveau', 'Brainwashing'),
(74, 'Contrôle mental', 'Mind control'),
(75, 'Vision', 'Vision'),
(76, 'Veuve', 'Widow'),
(77, 'Yelena Belova', 'Yelena Belova'),
(78, 'Black Panther', 'Black Panther'),
(79, 'Wakanda', 'Wakanda'),
(80, 'Roi', 'King'),
(81, 'Reine', 'Queen'),
(82, 'Valkyrie', 'Valkyrie'),
(83, 'Ghost Rider', 'Ghost Rider'),
(84, 'Luke Cage', 'Luke Cage'),
(85, 'Jessica Jones', 'Jessica Jones'),
(86, 'Iron Fist', 'Iron Fist'),
(87, 'Écrase', 'Smash'),
(88, 'Venom', 'Venom'),
(89, 'Les 4 Fantastiques', 'Fantastic Four'),
(90, 'Le Bouffon vert', 'Green Goblin'),
(91, 'Force', 'Strength'),
(92, 'Invisible', 'Invisible'),
(93, 'Feu', 'Fire'),
(94, 'La Chose', 'The Thing'),
(95, 'La Torche humaine', 'Human Torch'),
(96, 'La Femme invisible', 'Invisible Woman'),
(97, 'Mr. Fantastic', 'Mr. Fantastic'),
(98, 'Docteur Fatalis', 'Doctor Doom'),
(99, 'Jean Grey', 'Jean Grey'),
(100, 'Mjölnir', 'Mjölnir'),
(101, 'Jane Foster', 'Jane Foster'),
(102, 'Phil Coulson', 'Phil Coulson'),
(103, 'Miss Marvel', 'Ms. Marvel'),
(104, 'America Chavez', 'America Chavez'),
(105, 'Magnéto', 'Magneto'),
(106, 'Mystique', 'Mystique'),
(107, 'Chambre Rouge', 'Red Room'),
(108, 'Mystério', 'Mysterio'),
(109, 'Nova', 'Nova'),
(110, 'Masque', 'Mask'),
(111, 'Réacteur arc', 'Arc Reactor'),
(112, 'Miss Hulk', 'She-Hulk'),
(113, 'Vaisseau spatial', 'Spaceship'),
(114, 'Arts martiaux', 'Martial Arts'),
(115, 'Ant-Man', 'Ant-Man'),
(116, 'Young Avengers', 'Young Avengers'),
(117, 'Crâne Rouge', 'Red Skull'),
(118, 'Le Punisher', 'The Punisher'),
(119, 'Lecteur cassette', 'Cassette Player'),
(120, 'M.O.D.O.K.', 'M.O.D.O.K.'),
(121, 'Docteur Octopus', 'Doctor Octopus'),
(122, 'Star-Lord', 'Star-Lord'),
(123, 'Abomination', 'Abomination'),
(124, 'Milliardaire', 'Billionaire'),
(125, 'Le Caïd', 'Kingpin'),
(126, 'Le Collectionneur', 'The Collector'),
(127, 'Particule de Pym', 'Pym Particles'),
(128, 'Rocket', 'Rocket Raccoon'),
(129, 'La Main', 'The Hand'),
(130, 'J. Jonah Jameson', 'J. Jonah Jameson'),
(131, 'L\'Oeil d\'Agamotto', 'Eye of Agamotto'),
(132, 'Hulkbuster', 'Hulkbuster'),
(133, 'Portail', 'Portal'),
(134, 'Quinjet', 'Quinjet'),
(135, 'Héliporteur', 'Helicarrier'),
(136, 'Bouclier de Captain America', 'Captain America\'s Shield'),
(137, 'Miles Morales', 'Miles Morales'),
(138, 'Steve Rogers', 'Steve Rogers'),
(139, 'Gamora', 'Gamora'),
(140, 'Peter Parker', 'Peter Parker'),
(141, 'Silk', 'Silk'),
(142, 'Chatte Noire', 'Black Cat'),
(143, 'Ultron', 'Ultron'),
(144, 'J.A.R.V.I.S.', 'J.A.R.V.I.S.'),
(145, 'Elektra', 'Elektra'),
(146, 'Deadpool', 'Deadpool'),
(147, 'Blade', 'Blade'),
(148, 'Les Éternels', 'Eternals'),
(149, 'Les Célestes', 'Celestials'),
(150, 'Terre', 'Earth'),
(151, 'Intelligence artificielle', 'Artificial Intelligence'),
(152, 'Gwen Stacy', 'Gwen Stacy'),
(153, 'Moon Knight', 'Moon Knight'),
(154, 'Soleil', 'Sun'),
(155, 'Hala', 'Hala'),
(156, 'Kang le conquérant', 'Kang the Conqueror'),
(157, 'Elfes', 'Elves'),
(158, 'Étoiles', 'Stars'),
(159, 'Tour Stark', 'Stark Tower'),
(160, 'Ragnarök', 'Ragnarök'),
(161, 'Sceptre de Loki', 'Loki\'s Scepter'),
(162, 'Journal', 'Newspaper'),
(163, 'Morsure de Veuve', 'Widow Bites'),
(164, 'Namor', 'Namor'),
(165, 'Royaume quantique', 'Quantum Realm'),
(166, 'Agent', 'Agent'),
(167, 'Saints des Saints', 'Sanctum Sanctorum'),
(168, 'Mary Jane Watson', 'Mary Jane Watson'),
(169, 'Pepper Potts', 'Pepper Potts'),
(170, 'War Machine', 'War Machine'),
(171, 'Hela', 'Hela'),
(172, 'Les Dix Anneaux', 'The Ten Rings'),
(173, 'Tireur d\'élite', 'Sniper'),
(174, 'Missile', 'Missile'),
(175, 'Dormammu', 'Dormammu'),
(176, 'Faucon', 'Falcon'),
(177, 'Wiccan', 'Wiccan'),
(178, 'Patriot', 'Patriot'),
(179, 'Symbiote', 'Symbiote'),
(180, 'Spider-Woman', 'Spider-Woman'),
(181, 'La Guêpe', 'The Wasp'),
(182, 'Spider-Gwen', 'Spider-Gwen'),
(183, 'Médusa', 'Medusa'),
(184, 'Zeus', 'Zeus'),
(185, 'Hercule', 'Hercules'),
(186, 'Galactus', 'Galactus'),
(187, 'Hell\'s Kitchen', 'Hell\'s Kitchen'),
(188, 'Brooklyn', 'Brooklyn'),
(189, 'Queens', 'Queens'),
(190, 'Science', 'Science'),
(191, 'Champions', 'Champions'),
(192, 'Terrigenèse', 'Terrigenesis'),
(193, 'Crystaux terrigènes', 'Terrigen crystals'),
(194, 'Vibranium', 'Vibranium'),
(195, 'Bifröst', 'Bifröst'),
(196, 'Adamantium', 'Adamantium'),
(197, 'Livre de Cagliostro', 'Book of Cagliostro'),
(198, 'Darkhold', 'Darkhold'),
(199, 'Livre des Vishanti', 'Book of the Vishanti'),
(200, 'Bâtons de la Veuve', 'Widow Batons'),
(201, 'Chitauri', 'Chitauri'),
(202, 'Cape de Lévitation', 'Cloak of Levitation'),
(203, 'Ronan l\'Accusateur', 'Ronan the Accuser'),
(204, 'Chaîne du Ghost Rider', 'Ghost Rider\'s Chain'),
(205, 'Gravitonium', 'Gravitonium'),
(206, 'Katanas', 'Katanas'),
(207, 'Herbe-cœur', 'Heart-Shaped Herb'),
(208, 'Gantelet d\'Infinité', 'Infinity Gauntlet'),
(209, 'Simulacre de vie modélisée', 'Life-Model Decoy'),
(210, 'Gueule d\'or', 'Lockjaw'),
(211, 'Cosmo', 'Cosmo'),
(212, 'Lucky le Pizza Dog', 'Lucky the Pizza Dog'),
(213, 'Casque Nova', 'Nova Helmet'),
(214, 'Palladium', 'Palladium'),
(215, 'Tir photonique', 'Photon blast'),
(216, 'Stormbreaker', 'Stormbreaker'),
(217, 'Heimdall', 'Heimdall'),
(218, 'Sérum du Super-Soldat', 'Super-soldier serum'),
(219, 'Thunderbolts', 'Thunderbolts'),
(220, 'Vormir', 'Vormir'),
(221, 'Cyclope', 'Cyclops'),
(222, 'Oiseau moqueur / Mockingbird', 'Mockingbird'),
(223, 'Kamala Khan', 'Kamala Khan'),
(224, 'Sam Wilson', 'Sam Wilson'),
(225, 'Matt Murdock', 'Matt Murdock'),
(226, 'Colossus', 'Colossus'),
(227, 'Malicia', 'Rogue'),
(228, 'Phénix', 'Phoenix'),
(229, 'Natasha Romanoff', 'Natasha Romanoff'),
(230, 'Magik', 'Magik'),
(231, 'Angel', 'Angel'),
(232, 'Iceberg', 'Iceman'),
(233, 'Red Guardian', 'Red Guardian'),
(234, 'Baron Zémo', 'Baron Zemo'),
(235, 'Taskmaster', 'Taskmaster'),
(236, 'Le Fantôme', 'Ghost'),
(237, 'Sharon Carter', 'Sharon Carter'),
(238, 'Wanda Maximoff', 'Wanda Maximoff'),
(239, 'Nébula', 'Nebula'),
(240, 'Diablo', 'Nightcrawler'),
(241, 'Câble', 'Cable'),
(242, 'Wonder Man', 'Wonder Man'),
(243, 'Nico Minoru', 'Nico Minoru'),
(244, 'Carol Danvers', 'Carol Danvers'),
(245, 'Kate Bishop', 'Kate Bishop'),
(246, 'Agent 13', 'Agent 13'),
(247, 'Arnim Zola', 'Arnim Zola'),
(248, 'Baron Strucker', 'Baron von Strucker'),
(249, 'Crossbones', 'Crossbones'),
(250, 'Le Triskèle', 'The Triskellion'),
(251, 'Illuminati', 'Illuminati'),
(252, 'Flèche Noire', 'Black Bolt'),
(253, 'Polaris', 'Polaris'),
(254, 'Captain Britain', 'Captain Britain'),
(255, 'Hulk rouge', 'Red Hulk'),
(256, 'Uatu le Gardien', 'Uatu the Watcher'),
(257, 'Emma Frost', 'Emma Frost'),
(258, 'Sens d\'araignée', 'Spider-sense'),
(259, 'Sinistres Six', 'Sinister Six'),
(260, 'Oscorp', 'Oscorp'),
(261, 'Daily Bugle', 'Daily Bugle'),
(262, 'L\'Homme-pourpre / Kilgrave', 'Kilgrave'),
(263, 'Echo', 'Echo'),
(264, 'Ronin', 'Ronin'),
(265, 'Kraven le chasseur', 'Kraven the Hunter'),
(266, 'Vautour', 'Vulture'),
(267, 'Maria Hill', 'Maria Hill'),
(268, 'Secret Warriors', 'Secret Warriors'),
(269, 'L\'Épée', 'Dagger'),
(270, 'La Cape', 'Cloak'),
(271, 'Mister Hyde', 'Mister Hyde'),
(272, 'Surfer d\'argent', 'Silver Surfer'),
(273, 'Kitty Pryde', 'Kitty Pryde'),
(274, 'Sentry', 'Sentry'),
(275, 'Gambit', 'Gambit'),
(276, 'Hank Pym', 'Hank Pym'),
(277, 'Jubilé', 'Jubilee'),
(278, 'Dents de Sabre', 'Sabretooth'),
(279, 'Karolina Dean', 'Karolina Dean'),
(280, 'Norman Osborn', 'Norman Osborn'),
(281, 'X-23', 'X-23'),
(282, 'Hulkling', 'Hulkling'),
(283, 'Bucky Barnes', 'Bucky Barnes'),
(284, 'Apocalypse', 'Apocalypse'),
(285, 'Cassie Lang', 'Cassie Lang'),
(286, 'Budapest', 'Budapest'),
(287, 'Drax le Destructeur', 'Drax the Destroyer'),
(288, 'Psylocke', 'Psylocke'),
(289, 'Adam Warlock', 'Adam Warlock'),
(290, 'Domino', 'Domino'),
(291, 'Mantis', 'Mantis'),
(292, 'Okoye', 'Okoye'),
(293, 'Shuri', 'Shuri'),
(294, 'Howard le Canard', 'Howard the Duck'),
(295, 'Squirrel Girl', 'Squirrel Girl'),
(296, 'Sif', 'Lady Sif'),
(297, 'Songbird', 'Songbird'),
(298, 'U.S. Agent', 'U.S. Agent'),
(299, 'Nano masque', 'Nano Mask'),
(300, 'Moto', 'Motorcycle');

-- --------------------------------------------------------

--
-- Table structure for table `mot_partie`
--

CREATE TABLE `mot_partie` (
  `id` int(11) NOT NULL,
  `mot_id` int(11) DEFAULT NULL,
  `partie_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `couleur_j1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur_j2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeton_j1` tinyint(1) NOT NULL,
  `jeton_j2` tinyint(1) NOT NULL,
  `trouve` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mot_partie`
--

INSERT INTO `mot_partie` (`id`, `mot_id`, `partie_id`, `position`, `couleur_j1`, `couleur_j2`, `jeton_j1`, `jeton_j2`, `trouve`) VALUES
(1, 112, 2, 0, 'Vert', 'Vert', 0, 0, 0),
(2, 137, 2, 1, 'Noir', 'Noir', 0, 0, 0),
(3, 282, 2, 2, 'Neutre', 'Neutre', 0, 0, 0),
(4, 182, 2, 3, 'Vert', 'Neutre', 0, 0, 0),
(5, 142, 2, 4, 'Neutre', 'Neutre', 0, 0, 0),
(6, 213, 2, 5, 'Neutre', 'Neutre', 0, 0, 0),
(7, 16, 2, 6, 'Noir', 'Neutre', 0, 0, 0),
(8, 61, 2, 7, 'Noir', 'Vert', 0, 0, 0),
(9, 52, 2, 8, 'Vert', 'Vert', 0, 0, 0),
(10, 181, 2, 9, 'Neutre', 'Noir', 0, 0, 0),
(11, 159, 2, 10, 'Neutre', 'Neutre', 0, 0, 0),
(12, 27, 2, 11, 'Vert', 'Neutre', 0, 0, 0),
(13, 11, 2, 12, 'Vert', 'Neutre', 0, 0, 0),
(14, 261, 2, 13, 'Neutre', 'Neutre', 0, 0, 0),
(15, 285, 2, 14, 'Neutre', 'Neutre', 0, 0, 0),
(16, 25, 2, 15, 'Neutre', 'Vert', 0, 0, 0),
(17, 73, 2, 16, 'Neutre', 'Vert', 0, 0, 0),
(18, 85, 2, 17, 'Neutre', 'Vert', 0, 0, 0),
(19, 223, 2, 18, 'Neutre', 'Neutre', 0, 0, 0),
(20, 240, 2, 19, 'Vert', 'Noir', 0, 0, 0),
(21, 118, 2, 20, 'Vert', 'Neutre', 0, 0, 0),
(22, 252, 2, 21, 'Neutre', 'Vert', 0, 0, 0),
(23, 156, 2, 22, 'Vert', 'Neutre', 0, 0, 0),
(24, 174, 2, 23, 'Neutre', 'Vert', 0, 0, 0),
(25, 277, 2, 24, 'Vert', 'Vert', 0, 0, 0),
(26, 185, 3, 0, 'Bleu', 'Bleu', 0, 0, 0),
(27, 29, 3, 1, 'Bleu', 'Bleu', 0, 0, 0),
(28, 19, 3, 2, 'Neutre', 'Bleu', 0, 0, 0),
(29, 160, 3, 3, 'Neutre', 'Neutre', 0, 0, 0),
(30, 139, 3, 4, 'Neutre', 'Neutre', 0, 0, 0),
(31, 66, 3, 5, 'Noir', 'Neutre', 0, 0, 0),
(32, 116, 3, 6, 'Neutre', 'Neutre', 0, 0, 0),
(33, 272, 3, 7, 'Bleu', 'Neutre', 0, 0, 0),
(34, 28, 3, 8, 'Neutre', 'Bleu', 0, 0, 0),
(35, 183, 3, 9, 'Neutre', 'Neutre', 0, 0, 0),
(36, 163, 3, 10, 'Bleu', 'Neutre', 0, 0, 0),
(37, 78, 3, 11, 'Neutre', 'Bleu', 0, 0, 0),
(38, 131, 3, 12, 'Noir', 'Noir', 0, 0, 0),
(39, 191, 3, 13, 'Noir', 'Bleu', 0, 0, 0),
(40, 184, 3, 14, 'Bleu', 'Noir', 0, 0, 0),
(41, 225, 3, 15, 'Bleu', 'Bleu', 0, 0, 0),
(42, 206, 3, 16, 'Neutre', 'Neutre', 0, 0, 0),
(43, 169, 3, 17, 'Bleu', 'Neutre', 0, 0, 0),
(44, 300, 3, 18, 'Neutre', 'Noir', 0, 0, 0),
(45, 144, 3, 19, 'Neutre', 'Neutre', 0, 0, 0),
(46, 42, 3, 20, 'Bleu', 'Neutre', 0, 0, 0),
(47, 49, 3, 21, 'Neutre', 'Bleu', 0, 0, 0),
(48, 270, 3, 22, 'Neutre', 'Bleu', 0, 0, 0),
(49, 264, 3, 23, 'Bleu', 'Neutre', 0, 0, 0),
(50, 12, 3, 24, 'Neutre', 'Neutre', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partie`
--

CREATE TABLE `partie` (
  `id` int(11) NOT NULL,
  `joueur1_id` int(11) DEFAULT NULL,
  `joueur2_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` datetime NOT NULL,
  `resultat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partie`
--

INSERT INTO `partie` (`id`, `joueur1_id`, `joueur2_id`, `tour_id`, `etat`, `date_debut`, `resultat`) VALUES
(1, 4, NULL, 4, 'en cours', '2023-03-29 10:20:53', ''),
(2, 4, NULL, 4, 'en cours', '2023-03-29 10:22:31', ''),
(3, 4, 5, 4, 'en cours', '2023-03-29 12:34:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(1, 4, 'g008nQbuC0IxMLiHlNy0', 'gTKCoxiApMOrK6jhPf3KIRd5XIzI3TeX17T4q1WfoDQ=', '2023-03-16 10:48:45', '2023-03-16 11:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `avatar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `roles`, `password`, `is_verified`, `avatar_id`) VALUES
(1, 'timothee.pluot@gmail.com', 'tim', '[\"ROLE_ADMIN\"]', '$2y$13$dkZe0G4JQwUTSVAYqxE2BuHWU/hGGuM/frpLxVo53xQDmijNDgtTm', 0, 2),
(4, 'tim.mockingjay09@gmail.com', 'timothee', '[]', '$2y$13$VdWdrcCYdH4GYjx0fX/JOejSVfKfPmCmdnxYkV8LAf3J5aYYFhmMS', 0, 17),
(5, 'julie.van-houdenhove@etudiant.univ-reims.fr', 'Julie VH', '[]', '$2y$13$IgmzCLBaONKIZzSNRWfwBe1ykRzN.EbOkAcmkElZ..bQji9P3gSXe', 0, 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexes for table `mot`
--
ALTER TABLE `mot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mot_partie`
--
ALTER TABLE `mot_partie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D97116963977652` (`mot_id`),
  ADD KEY `IDX_D971169E075F7A4` (`partie_id`);

--
-- Indexes for table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_59B1F3D92C1E237` (`joueur1_id`),
  ADD KEY `IDX_59B1F3D80744DD9` (`joueur2_id`),
  ADD KEY `IDX_59B1F3D15ED8D43` (`tour_id`);

--
-- Indexes for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `IDX_8D93D64986383B10` (`avatar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mot`
--
ALTER TABLE `mot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `mot_partie`
--
ALTER TABLE `mot_partie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `partie`
--
ALTER TABLE `partie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mot_partie`
--
ALTER TABLE `mot_partie`
  ADD CONSTRAINT `FK_D97116963977652` FOREIGN KEY (`mot_id`) REFERENCES `mot` (`id`),
  ADD CONSTRAINT `FK_D971169E075F7A4` FOREIGN KEY (`partie_id`) REFERENCES `partie` (`id`);

--
-- Constraints for table `partie`
--
ALTER TABLE `partie`
  ADD CONSTRAINT `FK_59B1F3D15ED8D43` FOREIGN KEY (`tour_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_59B1F3D80744DD9` FOREIGN KEY (`joueur2_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_59B1F3D92C1E237` FOREIGN KEY (`joueur1_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D64986383B10` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
