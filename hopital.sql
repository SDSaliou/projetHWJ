-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 mars 2023 à 11:50
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `date_admission` date DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `consultation` varchar(65) DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `symptomes` varchar(500) DEFAULT NULL,
  `diagnostic` varchar(500) DEFAULT NULL,
  `traitement` varchar(500) DEFAULT NULL,
  `admission_prix` float DEFAULT NULL,
  `personnel_med_id` int(11) DEFAULT NULL,
  `test` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admission`
--

INSERT INTO `admission` (`id`, `date_admission`, `patient_id`, `consultation`, `personnel_id`, `symptomes`, `diagnostic`, `traitement`, `admission_prix`, `personnel_med_id`, `test`) VALUES
(1, '2023-01-02', 1, 'normale', 11, 'la fièvre des frissons des douleurs musculaires de la toux ', 'grippe', 'paracétamol ibuprofène', 3000, 4, 'TROD'),
(2, '2023-01-02', 2, 'normale', 9, 'fièvre maux de tête et frissons', 'paludisme', 'chloroquine', 3000, 4, ''),
(3, '2023-01-02', 3, 'urgente', NULL, ' la fièvre des frissons des douleurs musculaires de la toux, une congestion un écoulement nasal des maux de tête et de la fatigue anglions lymphatiques enflés', 'paludisme', 'se reposer et à se réhydrater', 5000, 4, 'TRD'),
(4, '2023-01-02', 4, 'normale', NULL, 'maux de gorges enzyme freqente', ' enzyme ou amygdales', 'LAMZEDE PANCRELASE', 3000, 4, 'TROD '),
(5, '2023-01-02', 5, 'normale', 10, 'des crampes de la fièvre et une faiblesse générale', 'DIARHEE', 'DIARÉTYL\r\nDIASTROLIB', 3000, 5, ''),
(6, '2023-01-02', 6, 'urgence', 0, 'respiration sifflante d\'essoufflement d\'un serrement dans la poitrine et de toux la nuit ou tôt le matin', 'crise d\'asthme ', 'auto-administrés et la prise de bronchodilatateurs. Doit-être hospitaliser', 5000, 6, ''),
(7, '2023-01-02', 7, 'urgence', NULL, 'mal de gorge\r\nécoulement nasal\r\néternuement\r\napparition ou aggravation de la toux\r\nessoufflement ou difficulté respiratoire\r\ntempérature égale ou supérieure à 38 °C\r\nsensation de fièvre\r\nfrissons\r\nfatigue', 'debut covid', 'Remdesivir \r\nNirmatrelvir et ritonavir ', 5000, 6, 'test covid'),
(8, '2023-01-03', 8, 'normale', 14, 'l\'essoufflement la pâleur la transpiration la faiblesse Besoin d\'uriner la nuit plus fréquemment \r\nGonflement des pieds et des jambes', 'insuffisance cardiaque', 'doit-être hospitaliser pour des analyse comme Échocardiographie\r\nÉlectrocardiogramme', 3000, 7, 'des analyses générales'),
(9, '2023-01-03', 9, 'normale', 15, 'douleurs des gonflements des raideurs et une mobilité réduite', 'Arthrite', 'kinésithérapie tous les mercredi', 3000, 8, ''),
(10, '2023-01-03', 10, 'urgence', NULL, 'Douleurs cheville gauche', 'Elle a chuté dans l’escalier en allant chercher des feuilles de paie', 'pommade ', 5000, 5, 'radio'),
(11, '2023-01-04', 11, 'normale', 15, ' diarrhées et une déshydratation', 'Cholera', 'la réhydratation, la pose de perfusion intraveineuse et la prise d\'antibiotiques.', 3000, 7, ''),
(12, '2023-01-04', 12, 'urgence', NULL, 'l\'infection urinaire', 'douleurs abdominales', 'Doliprane ', 5000, 8, 'Urine test'),
(13, '2023-01-05', 13, 'normale', 18, 'les troubles urinaires irritatifs et les troubles urinaires obstructifs', 'Hypertrophie de la prostate', 'une intervention chirurgicale ', 3000, 6, 'L\'échographie vésico-prostatique'),
(14, '2023-01-04', 14, 'normale', 17, 'Nausées aigreurs d\'estomac ballonnements abdominaux poitrine gonflée', 'peut-être une grossesse', 'doit-être suivi', 3500, 4, 'test de grossesse'),
(15, '2023-01-04', 15, 'urgence', NULL, 'le besoin d\'uriner  la fatigue une perte de poids et une vision trouble', 'debut diabete', 'l\'équilibre alimentaire l\'activité physique régulière et des traitements médicaux :l\'insuline', 5000, 5, 'prise de sang'),
(16, '2023-01-05', 16, 'urgence', 16, 'sur le point d\'accoucher', 'accouchement', NULL, 5000, 6, '');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `chambre_id` int(11) NOT NULL,
  `chambre_categorie` varchar(30) DEFAULT NULL,
  `nbre_lit` int(11) DEFAULT NULL,
  `chambre_materielle` varchar(100) DEFAULT NULL,
  `chambre_prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`chambre_id`, `chambre_categorie`, `nbre_lit`, `chambre_materielle`, `chambre_prix`) VALUES
(1, 'cabine', 1, 'lit toilette television clim pied à perfusion', 18000),
(2, 'cabine', 1, 'lit toilette armoire television clim pied à perfusion', 18000),
(3, 'cabine', 1, 'lit toilette television armoire clim pied à perfusion', 18000),
(4, 'cabine', 1, 'lit toilette television clim pied à perfusion madelas', 18000),
(5, 'cabine', 1, 'lit toilette television clim pied armoire à perfusion', 18000),
(6, 'cabine', 1, 'lit toilette television clim pied à perfusion berceau', 20000),
(7, 'cabine', 1, 'lit toilette television clim pied à perfusion armoire berceau', 20000),
(8, 'cabine', 1, 'lit toilette television clim pied à perfusion berceau', 20000),
(9, 'cabine', 1, 'lit toilette clim appareil-respiratoire oxygene oxymetre', 25000),
(10, 'cabine', 1, 'lit toilette clim appareil-respiratoire oxygene oxymetre', 25000),
(11, 'double', 2, 'lit toilette clim pied à perfusion', 15000),
(12, 'double', 2, 'lit toilette clim pied à perfusion', 15000),
(13, 'double', 2, 'lit toilette clim pied à perfusion', 15000),
(14, 'double', 2, 'lit toilette ventilo pied à perfusion', 12000),
(15, 'double', 2, 'lit toilette ventilo pied à perfusion', 12000),
(16, 'double', 2, 'lit toilette ventilo pied à perfusion', 12000),
(17, 'commun', 3, 'lit toilette ventilo pied à perfusion', 10000),
(18, 'commun', 3, 'lit toilette ventilo pied à perfusion', 10000),
(19, 'commun', 3, 'lit toilette ventilo pied à perfusion', 10000),
(20, 'commun', 3, 'lit toilette ventilo pied à perfusion', 10000),
(21, 'commun', 6, 'lit toilette ventilo pied à perfusion', 6000),
(22, 'commun', 6, 'lit toilette ventilo pied à perfusion', 6000),
(23, 'commun', 6, 'lit toilette ventilo pied à perfusion', 6000),
(24, 'commun', 9, 'lit toilette ventilo pied à perfusion', 4000),
(25, 'commun', 9, 'lit toilette ventilo pied à perfusion', 4000);

-- --------------------------------------------------------

--
-- Structure de la table `devoir`
--

CREATE TABLE `devoir` (
  `devoir_id` int(11) NOT NULL,
  `devoir_jours` date NOT NULL,
  `RV_patient_id` int(11) DEFAULT NULL,
  `devoir_chambre_id` int(11) DEFAULT NULL,
  `personnel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `devoir`
--

INSERT INTO `devoir` (`devoir_id`, `devoir_jours`, `RV_patient_id`, `devoir_chambre_id`, `personnel_id`) VALUES
(1, '2023-01-02', 0, 0, 1),
(2, '2023-01-02', 0, 0, 2),
(3, '2023-01-02', 0, 0, 19),
(4, '2023-01-02', 0, 0, 20),
(5, '2023-01-02', NULL, NULL, 25),
(6, '2023-01-02', NULL, NULL, 21),
(7, '2023-01-02', NULL, NULL, 5),
(8, '2023-01-02', NULL, NULL, 6),
(9, '2023-01-02', NULL, NULL, 4),
(10, '2023-01-02', NULL, NULL, 9),
(11, '2023-01-02', NULL, NULL, 11),
(12, '2023-01-02', NULL, NULL, 10),
(13, '2023-01-02', 0, 12, 9),
(14, '2023-01-02', NULL, 9, 6),
(15, '2023-01-02', NULL, 1, 8),
(16, '2023-01-03', NULL, 12, 12),
(17, '2023-01-03', NULL, 12, 13),
(18, '2023-01-03', NULL, 9, 12),
(19, '2023-01-02', NULL, NULL, 2),
(20, '2023-01-03', NULL, 3, 7),
(21, '2023-01-03', NULL, 6, 15),
(22, '2023-01-03', NULL, NULL, 22),
(24, '2023-01-03', NULL, NULL, 26),
(25, '2023-01-03', NULL, NULL, 23),
(26, '2023-01-03', NULL, NULL, 28),
(27, '2023-01-03', NULL, 3, 7),
(28, '2023-01-03', NULL, NULL, 8),
(29, '2023-01-03', NULL, NULL, 5),
(31, '2023-01-04', NULL, 3, 15),
(32, '0000-00-00', NULL, 12, 15),
(33, '2023-01-04', NULL, NULL, 7),
(34, '2023-01-04', NULL, NULL, 8),
(35, '2023-01-04', NULL, NULL, 18),
(36, '2023-01-04', 2, NULL, 4),
(37, '2023-01-04', NULL, NULL, 17),
(38, '0000-00-00', NULL, NULL, 5),
(39, '2023-01-04', 14, NULL, 4),
(40, '2023-01-08', 10, NULL, 5),
(41, '2023-01-08', 13, NULL, 6),
(42, '2023-01-08', 15, NULL, 5),
(43, '2023-01-11', 9, NULL, 8),
(44, '2023-01-11', 12, NULL, 8);

-- --------------------------------------------------------

--
-- Structure de la table `frais`
--

CREATE TABLE `frais` (
  `frais_id` int(11) NOT NULL,
  `frais_admission_id` int(11) DEFAULT NULL,
  `frais_chambre_prix` int(11) DEFAULT NULL,
  `test_prix` int(11) DEFAULT NULL,
  `frais_total` int(11) DEFAULT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `frais`
--

INSERT INTO `frais` (`frais_id`, `frais_admission_id`, `frais_chambre_prix`, `test_prix`, `frais_total`, `patient_id`) VALUES
(1, 3000, 0, 0, 3000, 1),
(2, 3000, 45000, 0, 48000, 2),
(3, 5000, 105000, 0, 110000, 3),
(4, 3000, 0, 0, 3000, 4),
(5, 3000, 0, 0, 3000, 5),
(6, 5000, 175000, 8500, 265000, 6),
(7, 5000, 540000, 0, 545000, 7),
(8, 3000, 162000, 12000, 177000, 8),
(9, 3000, 0, 0, 3000, 9),
(10, 5000, 0, 8000, 13000, 10),
(11, 3000, 0, 2000, 5000, 11),
(12, 5000, 0, 7000, 12000, 12),
(13, 3000, 0, 15000, 18000, 13),
(14, 3500, 0, 0, 3500, 14),
(15, 5000, 0, 13500, 18500, 15),
(16, 5000, 150000, 0, 155000, 16);

-- --------------------------------------------------------

--
-- Structure de la table `hospitalisation`
--

CREATE TABLE `hospitalisation` (
  `hospitalisation_id` int(11) NOT NULL,
  `hospitalisation_patient_id` int(11) DEFAULT NULL,
  `Date_arriv` date DEFAULT NULL,
  `Date_sort` date DEFAULT NULL,
  `hospitalisation_personnel_id` int(11) DEFAULT NULL,
  `hospitalisation_chambre_id` int(11) DEFAULT NULL,
  `nbre_nuit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hospitalisation`
--

INSERT INTO `hospitalisation` (`hospitalisation_id`, `hospitalisation_patient_id`, `Date_arriv`, `Date_sort`, `hospitalisation_personnel_id`, `hospitalisation_chambre_id`, `nbre_nuit`) VALUES
(1, 2, '2023-01-04', '2023-01-07', 9, 12, 3),
(2, 3, '2023-01-02', '2023-01-09', 9, 12, 7),
(3, 6, '2023-01-02', '2023-01-09', 6, 9, 7),
(4, 7, '2023-01-02', '2023-02-02', 8, 1, 30),
(5, 8, '2023-01-03', '2023-01-12', 7, 3, 9),
(6, 16, '2023-01-05', '2023-01-09', 5, 6, 4);

-- --------------------------------------------------------

--
-- Structure de la table `materielles`
--

CREATE TABLE `materielles` (
  `materiel_id` int(11) NOT NULL,
  `materiel_type` varchar(30) NOT NULL,
  `materiel_nbre` int(11) NOT NULL,
  `materiel_namefour` varchar(30) DEFAULT NULL,
  `materiel_prix` float NOT NULL,
  `materiel_DateE` date DEFAULT NULL,
  `materiel_DateS` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `materielles`
--

INSERT INTO `materielles` (`materiel_id`, `materiel_type`, `materiel_nbre`, `materiel_namefour`, `materiel_prix`, `materiel_DateE`, `materiel_DateS`) VALUES
(15, 'oxygene', 100, 'coumba', 350000, '2019-03-04', '2020-03-01'),
(20, 'chaise roulante', 10, 'marieme', 2500000, '2019-07-04', '2023-04-06'),
(25, 'television', 85, 'fofana', 8000000, '2019-05-06', '0000-00-00'),
(36, 'appareil-respiratoire', 6, 'djibril', 5000000, '2019-06-03', '2023-01-01'),
(37, 'lit', 10, 'omar', 35000, '2019-01-01', '2021-12-30'),
(38, 'armoire', 6, 'omar', 63600, '2019-01-01', '2021-05-14'),
(39, 'frigo-bar', 4, 'ramata', 142000, '2019-05-06', '2022-08-12'),
(40, 'gants', 1000, 'fatourokhy', 2500.55, '2019-01-01', '2019-05-01'),
(41, 'thermometre', 10, 'aicha', 480001, '2019-02-06', '2019-08-06'),
(42, 'ciseaux', 15, 'alioune', 15000.5, '2019-04-06', '2019-10-05'),
(43, 'pansement', 700, 'demba', 50000, '2019-01-10', '2019-03-17'),
(44, 'tensiomètre', 15, 'demba', 200000, '2019-02-03', '2020-01-02'),
(45, 'blouse', 50, 'ramata', 40000, '2019-05-02', '2019-06-02'),
(46, 'lit', 15, 'omar', 52500, '2022-01-01', '2023-01-01'),
(47, 'stethoscope', 8, 'fatourokhy', 250000, '2019-01-01', '2019-12-05'),
(48, 'otoscope', 8, 'aicha', 275000, '2019-01-01', '2019-10-05'),
(49, 'scanner', 1, 'thiam', 3500000, '2022-01-01', '2026-01-01'),
(50, 'armoire', 6, 'omar', 63600, '2021-05-14', '2023-02-14'),
(51, 'frigo-bar', 4, 'ramata', 142000, '2022-08-13', '2024-01-01'),
(52, 'gants', 2000, 'fatourokhy', 5001.1, '2019-05-01', '2019-10-01'),
(53, 'thermometre', 10, 'aicha', 480001, '2019-08-06', '2020-02-06'),
(54, 'ciseaux', 15, 'alioune', 15000.5, '2020-02-06', '2020-12-05'),
(55, 'pansement', 1000, 'demba', 65000, '2019-03-10', '2019-06-17'),
(56, 'tensiomètre', 15, 'demba', 200000, '2021-02-03', '2023-01-02'),
(57, 'blouse', 50, 'ramata', 40000, '2019-12-02', '2021-08-02'),
(58, 'ventilo', 15, 'diop', 525000, '2022-01-01', '2023-01-01'),
(59, 'stethoscope', 8, 'fatourokhy', 250000, '2020-01-01', '2020-12-05'),
(60, 'otoscope', 8, 'aicha', 275000, '2020-01-01', '2020-10-05'),
(61, 'clime', 10, 'faye', 7500000, '2020-01-04', '2026-05-01'),
(62, 'ordinateur', 8, 'mbaye', 2500000, '2019-01-12', '2023-01-01'),
(63, 'oxymètre de pouls', 10, 'ba', 150000, '2019-05-02', '2023-02-01'),
(64, 'abaisse langue', 2000, 'ndiaye', 100000, '2019-01-01', '2020-12-30'),
(65, 'lampe stylo de diagnostic', 2000, 'hann', 1540000, '2019-01-01', '2023-01-01'),
(72, 'berceau', 5, 'bailo', 500000, '2019-05-03', '2023-01-02');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(200) DEFAULT NULL,
  `patient_birthday` varchar(200) DEFAULT NULL,
  `patient_code` int(11) DEFAULT NULL,
  `patient_numAM` varchar(200) DEFAULT NULL,
  `patient_num` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`patient_id`, `patient_name`, `patient_birthday`, `patient_code`, `patient_numAM`, `patient_num`) VALUES
(1, 'khoudia badiane', '1997-08-12', 1, '1645A', '775674839'),
(2, 'aminata ly', '2001-05-18', 6, '1852A', '784561236'),
(3, 'abdou mbao', '1995-02-23', 8, '1812B', '762037560'),
(4, 'nogaye thiam', '1963-01-12', 9, '2082A', '761235648'),
(5, 'lamine ndiaye', '2005-03-16', 11, '1236B', '776843695'),
(6, 'yacine diop', '2016-12-02', 12, '1623A', '786952416'),
(7, 'seydou ndiaye', '1998-09-26', 15, '1425B', '786541236'),
(8, 'jule mendy', '1997-03-15', 16, '1478B', '775201845'),
(9, 'mariama sambou', '1997-09-14', 22, '', '774140506'),
(10, 'madiop ndiaye', '1989-08-02', 24, '2254B', '775247598'),
(11, 'fofana mendy', '1982-02-01', 25, '2245B', '768547898'),
(12, 'omar diop', '1998-12-25', 28, '', '775841245'),
(13, 'malick ka', '1995-12-08', 30, '2224B', '775075451'),
(14, 'fama tine', '2002-01-01', 31, '1245A', '775015457'),
(15, 'maniouk badiane', '1988-08-01', 36, '1254B', '758024578'),
(16, 'aby thiaw', '1990-09-16', 45, '1345A', '758426598'),
(17, 'sokhna', '2000-10-11', 150, '1214', '776842536'),
(18, NULL, NULL, NULL, NULL, NULL),
(20, 'sokhna', '2001-10-12', 250, '1542', '779846512'),
(21, 'fatou', '2001-12-15', 145, '1125', '774589612'),
(22, 'khady', '2000-02-10', 156, '1256', '776843256'),
(23, 'fallou', '2000-02-17', 16, '', '774152635'),
(25, 'thioro', '1996-02-10', 541, '2564', '778526349');

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `personnel_id` int(11) NOT NULL,
  `personnel_service_id` int(11) NOT NULL,
  `personnel_name` varchar(65) NOT NULL,
  `personnel_code` int(11) NOT NULL,
  `horaire` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`personnel_id`, `personnel_service_id`, `personnel_name`, `personnel_code`, `horaire`) VALUES
(1, 1, 'cheikh diop', 200, '09:00:00'),
(2, 1, 'modou mbodj', 203, '18:00:00'),
(3, 1, 'oumou diallo', 214, '09:00:00'),
(4, 2, 'mariame sow', 400, '08:30:00'),
(5, 2, 'mame diarra ngane', 410, '08:30:00'),
(6, 2, 'coumba sow', 405, '15:00:00'),
(7, 2, 'mamadou gueye', 406, '20:00:00'),
(8, 2, 'mor ndiaye', 408, '20:00:00'),
(9, 3, 'fatou mar', 300, '07:00:00'),
(10, 3, 'amina sougou', 302, '13:00:00'),
(11, 3, 'demba fall', 305, '13:00:00'),
(12, 3, 'aliou ka', 306, '20:00:00'),
(13, 3, 'rama seck', 309, '20:00:00'),
(14, 3, 'pape diouf', 310, '07:00:00'),
(15, 3, 'omar sy', 311, '13:00:00'),
(16, 3, 'bineta diaw', 313, '15:00:00'),
(17, 3, 'daya ndiaye', 315, '18:00:00'),
(18, 3, 'moussa badji', 316, '20:00:00'),
(19, 4, 'zeyna ba', 501, '06:30:00'),
(20, 4, 'amadou sow', 503, '15:00:00'),
(21, 4, 'aicha diallo', 505, '07:30:00'),
(22, 5, 'khadim samb', 600, '05:00:00'),
(23, 5, 'bara gaye', 601, '15:00:00'),
(24, 5, 'ami beye', 603, '09:00:00'),
(25, 6, 'khoudia diouf', 700, '07:00:00'),
(26, 6, 'matar dia', 703, '20:00:00'),
(27, 7, 'Saliou mbaye', 852, '09:00:00'),
(28, 7, 'Saliou mbaye', 862, '09:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `rv_id` int(11) NOT NULL,
  `rv_patient_id` int(11) NOT NULL,
  `rv_personnel_id` int(11) NOT NULL,
  `rv_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`rv_id`, `rv_patient_id`, `rv_personnel_id`, `rv_date`) VALUES
(1, 2, 4, '2023-01-04'),
(2, 9, 8, '2023-01-11'),
(3, 10, 5, '2023-01-08'),
(4, 12, 8, '2023-01-11'),
(5, 13, 6, '2023-01-08'),
(6, 14, 4, '2023-02-04'),
(7, 15, 5, '2023-01-08'),
(8, 16, 6, '2023-01-13');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`service_id`, `service_name`) VALUES
(1, 'administration'),
(2, 'medecin'),
(3, 'infirmier'),
(4, 'receptioniste'),
(5, 'nettoyage'),
(6, 'gardien'),
(7, 'comptable');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`chambre_id`);

--
-- Index pour la table `devoir`
--
ALTER TABLE `devoir`
  ADD PRIMARY KEY (`devoir_id`);

--
-- Index pour la table `frais`
--
ALTER TABLE `frais`
  ADD PRIMARY KEY (`frais_id`);

--
-- Index pour la table `hospitalisation`
--
ALTER TABLE `hospitalisation`
  ADD PRIMARY KEY (`hospitalisation_id`);

--
-- Index pour la table `materielles`
--
ALTER TABLE `materielles`
  ADD PRIMARY KEY (`materiel_id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`personnel_id`);

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`rv_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `chambre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `devoir`
--
ALTER TABLE `devoir`
  MODIFY `devoir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `frais`
--
ALTER TABLE `frais`
  MODIFY `frais_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `hospitalisation`
--
ALTER TABLE `hospitalisation`
  MODIFY `hospitalisation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `materielles`
--
ALTER TABLE `materielles`
  MODIFY `materiel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `personnel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `rv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
