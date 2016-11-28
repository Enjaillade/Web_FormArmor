--
-- Base de données: `formarmor`
--


-- --------------------------------------------------------
--
-- Contenu de la table `statut`
--
INSERT INTO `statut` (`type`, `taux_horaire`) VALUES
('1%', 12),
('Autre', 8),
('CIF', 6),
('SIFE_collectif', 10),
('SIFE_individuel', 11);

-- --------------------------------------------------------
--
-- Contenu de la table `client`
--
INSERT INTO `client` (`nom`, `password`, `statut_id`, `adresse`, `cp`, `ville`, `email`, `nbhcpta`, `nbhbur`) VALUES
('DUPONT Alain', 'dupal', 1, '3 rue de la gare', '22 200', 'Guingamp', 'dupont.alain127@gmail.com', 70, 175),
('LAMBERT Alain', 'lamal', 2, '17 rue de la ville', '22 200', 'Guingamp', 'lambert.alain12@gmail.com', 0, 105),
('SARGES Annie', 'saran', 3, '125 boulevard de Nantes', '35 000', 'Rennes', 'sarges.annie@laposte.net',160, 70),
('CHARLES Patrick', 'chapa', 4, '27 Bd Lamartine', '22 000', 'Saint Brieuc', 'charles.patrick@hotmail.fr', 120, 105),
('DUMAS Serge', 'dumse', 5, 'Pors Braz', '22 200', 'Plouisy', 'dumas.serge@hotmail.com', 160, 175),
('SYLVESTRE Marc', 'sylma', 1, '17 rue des ursulines', '22 300', 'Lannion', 'sylvestre_marc3@gmail.com', 0, 70);

-- --------------------------------------------------------
--
-- Contenu de la table `formation`
--
INSERT INTO `formation` (`libelle`, `niveau`, `type_form`, `description`, `diplomante`, `duree`, `coutrevient`) VALUES
('Access', 'Initiation', 'Bureautique', 'Decouverte du logiciel Access', 0, 35, 140),
('Access', 'Perfectionnement', 'Bureautique', 'Fonctions avancees du logiciel Access', 0, 35, 100),
('Compta1', 'Initiation', 'Compta', 'Decouverte des principes d ecriture comptable', 0, 70, 180),
('Compta2', 'perfectionnement', 'Bureautique', 'Bilan et compte de résultat', 0, 70, 180),
('Compta3', 'Perfectionnement', 'Compta', 'Analyse du bilan', 0, 70, 100),
('Compta4', 'Perfectionnement', 'Bureautique', 'Operations d inventaire', 1, 70, 140),
('Excel', 'Initiation', 'Bureautique', 'Decouverte du logiciel Excel', 0, 35, 100),
('Excel', 'Perfectionnement', 'Bureautique', 'Fonctions avancees du logiciel Excel', 0, 35, 110),
('Word', 'Initiation', 'Bureautique', 'Decouverte du logiciel Word', 0, 35, 100),
('Word', 'Perfectionnement', 'Bureautique', 'Fonctions avancees du logiciel Word', 0, 35, 110);

-- --------------------------------------------------------
--
-- Contenu de la table `plan_formation`
--
INSERT INTO `plan_formation` (`client_id`, `formation_id`, `effectue`) VALUES
(1, 7, 0),
(1, 10, 0),
(2, 1, 0),
(3, 1, 0);

-- --------------------------------------------------------
--
-- Contenu de la table `session_formation`
--
INSERT INTO `session_formation` (`formation_id`, `date_debut`, `nb_places`, `nb_inscrits`, `close`) VALUES
(7, '2016-01-04', 18, 0, 0),
(1, '2016-02-01', 16, 0, 0),
(2, '2016-02-15', 16, 0, 0),
(9, '2016-01-18', 18, 0, 0),
(10, '2016-02-01', 18, 1, 0),
(8, '2016-02-08', 18, 0, 0);

-- --------------------------------------------------------
--
-- Contenu de la table `inscription`
--
INSERT INTO `inscription` (`client_id`, `session_formation_id`, `date_inscription`) VALUES
(1, 6, '2012-12-04');

