-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 22, 2020 alle 19:54
-- Versione del server: 10.4.8-MariaDB
-- Versione PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecweb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_title`) VALUES
(1, 'Da interno'),
(2, 'Tappezzanti'),
(3, 'Giardino roccioso'),
(4, 'Cactus'),
(5, 'Da fiore');

-- --------------------------------------------------------

--
-- Struttura della tabella `piante`
--

CREATE TABLE `piante` (
  `pianta_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `genere` varchar(255) NOT NULL,
  `specie` varchar(255) NOT NULL,
  `famiglia` varchar(255) NOT NULL,
  `interno` tinyint(1) NOT NULL,
  `fioritura` varchar(255) NOT NULL,
  `colore` varchar(255) NOT NULL,
  `hardiness` int(2) NOT NULL,
  `illuminazione` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prezzo` float NOT NULL,
  `descrizione` text NOT NULL,
  `pianta_img` varchar(255) NOT NULL,
  `pianta_qt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `piante`
--

INSERT INTO `piante` (`pianta_id`, `nome`, `genere`, `specie`, `famiglia`, `interno`, `fioritura`, `colore`, `hardiness`, `illuminazione`, `cat_id`, `prezzo`, `descrizione`, `pianta_img`, `pianta_qt`) VALUES
(1, 'Flying Saucer', 'Echinopsis', '', 'Cactaceae', 1, 'Primavera', 'Rosa', 10, 'Pieno Sole', 1, 2.5, 'Echinopsis \'\'Flying Saucer\'\' è uno degli ibridi più belli del genere Echinopsis. È un cactus che forma gambi chari, verdi a forma di colonna fino a 75 cm di altezza e 12,5 cm di diametro. Di aspetto attraente tutto l\'\'anno, ne si apprezza particolarmente la fioritura primaverile. I fiori arrivano fino a 25cm di diametro, rossi all\'\'esterno con un tocco di arancio, diventando di un rosa sempre più tenue verso l\'\'interno; i singoli fiori appassiscono nel giro di un paio di giorni, ma la fioritura continua anche per settimane.', 'echinopsis.jpg', 4),
(2, 'Rubromarginata', 'Sedum', 'Palmeri', 'Crassulacee', 1, 'Primavera', 'Giallo', 8, 'Pieno Sole, Mezz\'ombra, Ombra', 2, 1.46, 'Sedum palmeri ha una portamento arbustivo, rampicante o strisciante a seconda della coltivazione e dell\'esposizione. Può raggiungere fino a 20 cm di altezza. La pianta forma piccole rosette di foglie blu-verde, che si arrossano in caso di calore o congelamento, di 5-8 cm di diametro, portate da fusti ramificati di circa venti centimetri. Fiorisce a inizio primavera, con fiori numerosi e gialli molto amati da api e altri insetti impollinatori.', '', 5),
(3, 'Rebutia Fiebrigii', 'Rebutia', 'Fiebrigii', 'Cactaceae', 0, 'Primavera', 'Arancio', 9, 'Pieno sole', 3, 2.6, 'Rebutia fiebrigii è una specie di cactus originaria degli altopiani delle Ande Boliviani, ad altitudini di 2,100-4000 metri. Questo cactus ha una forma \"a palla\" di circa 15 cm in diametro, coperta da spine e peli setosi. Con il tempo il cactus si moltiplica e forma agglomerati. I fiori, di un intenso color arancio, appaiono in tarda primavera e possono continuare per tutta l\'estate.', '', 6),
(4, 'Saguaro', 'Carnegiea', 'Gigantea', 'Cactaceae', 1, 'Primavera', 'Bianco', 12, 'Pieno sole', 4, 3.42, 'Il saguaro (Carnegiea gigantea) è un cactus di grandi dimensioni che cresce nel deserto di Sonora, nel sud dell\'Arizona, e nell\'area adiacente del Messico. I saguari hanno tronco verde carnoso e colonnare, con alcune ramificazioni e con l\'aspetto tipico dei cactus.', '', 3),
(5, 'Cactus di natale', 'Schlumbergera', 'Truncata', 'Cactaceae', 0, 'Inverno', 'Rosa', 10, 'Mezz\'ombra', 5, 2.31, 'Il Cactus di Natale (Schlumbergera truncata), è una pianta succulenta che presenta dei fusti corti che si suddividono in ramificazioni con portamento che potrebbe essere eretto, arcuato oppure ricadente. I rami sono carnosi con una forma ovale e una colorazione verde scura, ma che potrebbe variare a seconda della luce ricevuta, diventando più chiare al buio o addirittura rossastre in piena luce. Le infiorescenze sono in grado si sbocciare agli apici fogliari, i petali sono particolarmente carnosi con una colorazione rossa oppure rosata. Per consentire ai boccioli di maturare correttamente sarebbe opportuno tenere la pianta sia lontana da correnti d\'aria e da fonti di calore.', '', 2),
(6, 'Borracina Acre', 'Sedum', 'Acre', 'Crassulacee', 1, 'Estate', 'Giallo', 7, 'Pieno sole, mezz\'ombra', 2, 1.56, 'La Borracina acre (Sedum acre) è una piccola pianta carnoso/succulenta di aspetto erbaceo, strisciante, perenne e sempreverde che si presta particolarmente come tappezzante al di sotto di altre piante, o per riempire gli spazi tra le pavimentazioni del giardino. In estate, se ha avuto sufficiente esposizione solare, produce dei piccoli fiori color giallo.', '', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `utente_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`utente_id`, `email`, `password`) VALUES
(1, 'anna@gmail.com', 'anna'),
(2, 'banana@gmail.com', 'banana');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indici per le tabelle `piante`
--
ALTER TABLE `piante`
  ADD PRIMARY KEY (`pianta_id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`utente_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `piante`
--
ALTER TABLE `piante`
  MODIFY `pianta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `utente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
