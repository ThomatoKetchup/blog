1) Par d�faut, le serveur de la BDD est localhost, la BDD est "blogDB", l'utiliseur root et il n'y a pas de mot de passe. Pour adapter � votre BDD, aller dans includes/connectDB.php
2) Voici les requ�tes � effectuer pour cr�er les tables de la base de donn�e : 

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `publications`;
CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `corp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

En cas de probl�me, je vous joins �galement un export de ma base de donn�e et le Git du blog : https://github.com/ThomatoKetchup/blog


