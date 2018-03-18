-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 18 mars 2018 à 10:32
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pass`, `nom`, `prenom`, `mail`, `admin`) VALUES
(2, '3c4bd4d0d0d1e076ce617723edd6a73afc9126ab', 'Nguyen', 'Thomas', 'nguyenthomas@hotmail.fr', 0),
(8, '334c332acdf1841cacc5223fd96e7ce28516729f', 'Logan', 'Da Coste', 'boil@az.fr', 0),
(4, 'c2272a17f6624672b86ed6c02c90f230674d51c6', 'Marie', 'Morel', 'cailera@lui.fr', 0),
(9, 'b4d0230534086b3743b5bff0986f2d88bb47fc88', 'Salut', 'Thomas', 'ri@ri.com', 0),
(10, 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin', 'admin@admin.fr', 1),
(11, 'fdfa1681a94bc784d523f0cd9fdf74939a2a03db', 'nonadmin', 'nonadmin', 'nonadmin@nonadmin.fr', 0),
(12, '334c332acdf1841cacc5223fd96e7ce28516729f', 'rien', 'rien', 'rien@rien.fr', 0),
(13, 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test', 'test', 'test@test.fr', 0);

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

DROP TABLE IF EXISTS `publications`;
CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `corp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `titre`, `image`, `corp`) VALUES
(2, 'Tennis : record mondial sur le circuit pro pour un joueur du Val-de Marne', './images/tennis', '	Miusov, as a man man of breeding and deilcacy, could not but feel some inwrd qualms, when he reached the Father Superior\'s with Ivan: he felt ashamed of havin lost his temper. He felt that he ought to have disdaimed that despicable wretch, Fyodor Pavlovitch, too much to have been upset by him in Father Zossima\'s cell, and so to have forgotten himself. &quot;Teh monks were not to blame, in any case,&quot; he reflceted, on the steps. &quot;And if they\'re decent people here (and the Father Superior, I understand, is a nobleman) why not be friendly and courteous withthem? I won\'t argue, I\'ll fall in with everything, I\'ll win them by politness, and show them that I\'ve nothing to do with that Aesop, thta buffoon, that Pierrot, and have merely been takken in over this affair, just as they have.&quot;'),
(5, 'Mon dernier article', 'https://yt3.ggpht.com/-q0ymE8zLJsY/AAAAAAAAAAI/AAAAAAAAAAA/63WDYDJQFL8/s88-c-k-no-mo-rj-c0xffffff/photo.jpg', 'Scrolling long content\r\n\r\nWhen modals become too long for the userâ€™s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.'),
(3, 'salut', 'https://user.oc-static.com/files/215001_216000/215643.png', '		Leo Messi :\r\n\r\n&quot;Avant, jÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢avais la balle et je faisais mon propre jeu. Maintenant jÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢essaye de jouer davantagLeo Messi :\r\n\r\n&quot;Avant, jÃ¢â‚¬â„¢avais la balle et je faisais mon propre jeu. Maintenant jÃ¢â‚¬â„¢essaye de jouer davantage pour lÃ¢â‚¬â„¢ÃƒÂ©quipe. Quand la balle vient ÃƒÂ  moi je nÃ¢â‚¬â„¢essaye plus de finir aussi rapidement quÃ¢â‚¬â„¢avant.\r\n\r\nEn rÃƒÂ©sumÃƒÂ©, je ne suis pas ÃƒÂ©goÃƒÂ¯ste, jÃ¢â‚¬â„¢essaye de faire le jeu dÃ¢â‚¬â„¢une position diffÃƒÂ©rente. JÃ¢â‚¬â„¢essaye dÃ¢â‚¬â„¢ÃƒÂªtre tout aussi performant quÃ¢â‚¬â„¢avant mais avec une vision diffÃƒÂ©rentet quÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢avant mais avec une vision diffÃƒÆ’Ã‚Â©rente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
