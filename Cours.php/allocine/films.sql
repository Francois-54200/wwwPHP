-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 28 Mai 2020 à 14:00
-- Version du serveur :  10.1.38-MariaDB-0+deb9u1
-- Version de PHP :  7.1.20-1+b2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `titre` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`titre`, `date`, `description`, `image`) VALUES
('L\'Infirmière', '2020-08-05', 'Ichiko est infirmière à domicile. Elle travaille au sein d\'une famille qui la considère depuis toujours comme un membre à part entière. Mais lorsque la cadette de la famille disparaît, Ichiko se trouve suspectée de complicité d\'enlèvement. En retraçant la chaîne des événements, un trouble grandit : est-elle coupable ? Qui est-elle vraiment ? ', 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/20/05/07/16/57/5922723.jpg'),
('Largo Winch', '2020-05-13', 'Tomer Sisley dans la peau de Largo Winch, troisième ! L\'acteur vient de confirmer à nos confrères du Figaro qu\'il retrouvera prochainement son personnage d\'homme d\'affaires aventurier pour une nouvelle aventure, près de dix ans après la sortie en salles de Largo Winch II. \"Je suis obligé d\'être en forme physiquement à cause de Balthazar mais j\'avoue que je suis un peu ramassé, un peu \"homme des bois\" à cause du confinement\", déclare-t-il. \"Pour Largo Winch 3, il faut répéter les cascades et les chorégraphies de baston mais j\'ai l\'habitude, je l\'ai déjà fait plusieurs fois.\" Messiah : pas de saison 2 pour la série Netflix avec Tomer Sisley Dans Largo Winch 3, nouvelle adaptation sur grand écran des BD de Philippe Francq et Jean Van Hamme d\'après les romans de ce dernier, Tomer Sisley donnera la réplique à Omar Sy. Le site cinetelerevue.be rapportait en février dernier des propos d\'Olivier Masset-Depasse (Duelles), réalisateur de ce troisième opus, qui annonçait la présence de l\'acteur \"dans un rôle inhabituel\". Toujours au micro du Figaro, Tomer Sisley indique enfin qu\'il reste encore deux semaines de tournage pour boucler la troisième saison de Balthazar. Dans la série TF1, l\'acteur incarne Raphaël, un médecin légiste enquêtant sur des meurtres complexes aux côtés d\'Hélène, commandant de police.', 'http://fr.web.img3.acsta.net/r_640_360/newsv7/20/05/13/17/31/4178294.jpg'),
('MULAN', '2020-07-22', 'De quoi ça parle ? Lorsque l’Empereur de Chine publie un décret stipulant qu’un homme de chaque famille du pays doit intégrer l’armée impériale pour combattre des envahisseurs venus du nord, Hua Mulan, fille ainée d’un vénérable guerrier désormais atteint par la maladie, décide de prendre sa place au combat. Se faisant passer pour un soldat du nom de Hua Jun, elle se voit mise à l’épreuve à chaque étape du processus d’apprentissage, mobilisant chaque jour un peu plus sa force intérieure pour explorer son véritable potentiel… Pourquoi on a envie d\'y aller ? Parce qu\'on est fans du classique d\'animation signé par les studios Disney dans les années 90, mais surtout parce qu\'on a hâte de découvrir ce nouveau point de vue sur la célèbre légende chinoise. Parce qu\'au vu des bandes-annonces, les scènes de bataille s\'annoncent tout simplement épiques. Et parce qu\'aux côtés de la jeune actrice Yifei Liu qui incarne l\'héroïne, Mulan rassemblera plusieurs monuments du cinéma asiatique tels que Donnie Yen, Jet Li, ou encore Gong Li. ', 'http://fr.web.img6.acsta.net/r_640_360/newsv7/20/05/11/16/57/5793394.jpg'),
('Princesse Mononoké', '2000-01-12', 'Au XVe siècle, durant l\'ère Muromachi, la forêt japonaise, jadis protégée par des animaux géants, se dépeuple à cause de l\'homme. Un sanglier transformé en démon dévastateur en sort et attaque le village d\'Ashitaka, futur chef du clan Emishi. Touché par le sanglier qu\'il a tué, celui-ci est forcé de partir à la recherche du dieu Cerf pour lever la malédiction qui lui gangrène le bras. ', 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/16/05/26/09/54/204765.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`titre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
