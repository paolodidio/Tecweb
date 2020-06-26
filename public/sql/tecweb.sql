-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Giu 25, 2020 alle 12:06
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
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `ordine_id` int(11) NOT NULL,
  `ordine_tot` float NOT NULL,
  `utente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`ordine_id`, `ordine_tot`, `utente_id`) VALUES
(71, 4, 8),
(117, 7, 8),
(118, 7, 8),
(119, 7, 8),
(120, 5, 8);

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
  `fioritura` varchar(255) NOT NULL,
  `colore` varchar(255) NOT NULL,
  `hardiness` int(2) NOT NULL,
  `illuminazione` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prezzo` float NOT NULL,
  `descrizione` text NOT NULL,
  `pianta_img` varchar(255) NOT NULL,
  `pianta_qt` int(11) NOT NULL,
  `interno` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `piante`
--

INSERT INTO `piante` (`pianta_id`, `nome`, `genere`, `specie`, `famiglia`, `fioritura`, `colore`, `hardiness`, `illuminazione`, `cat_id`, `prezzo`, `descrizione`, `pianta_img`, `pianta_qt`, `interno`) VALUES
(15, 'Rubromarginata', 'Sedum', 'Palmeri', 'Crassulacee', 'Primavera', 'Giallo', 1, '', 2, 2, 'Sedum palmeri ha una portamento arbustivo, rampicante o strisciante a seconda della coltivazione e dell\\\'esposizione. Può raggiungere fino a 20 cm di altezza. La pianta forma piccole rosette di foglie blu-verde, che si arrossano in caso di calore o congelamento, di 5-8 cm di diametro, portate da fusti ramificati di circa venti centimetri. Fiorisce a inizio primavera, con fiori numerosi e gialli molto amati da api e altri insetti impollinatori.', '2383330382.jpg', 0, 0),
(16, 'Rebutia fiebrigii', 'Rebutia', 'Fiebrigii', 'Cactaceae', 'Primavera', 'Arancio', 9, 'Pieno sole', 4, 4, 'Rebutia fiebrigii è una specie di cactus originaria degli altopiani delle Ande Boliviani, ad altitudini di 2,100-4000 metri. Questo cactus ha una forma \"a palla\" di circa 15 cm in diametro, coperta da spine e peli setosi. Con il tempo il cactus si moltiplica e forma agglomerati. I fiori, di un intenso color arancio, appaiono in tarda primavera e possono continuare per tutta l\'estate.', 'rebutia_fiebrigii.jpg', -59, 0),
(17, 'Saguaro', 'Carnegiea', 'Gigantea', 'Cactaceae', 'Primavera', 'Bianco', 12, 'Pieno sole', 4, 5, 'Il saguaro (Carnegiea gigantea) è un cactus di grandi dimensioni che cresce nel deserto di Sonora, nel sud dell\'Arizona, e nell\'area adiacente del Messico. I saguari hanno tronco verde carnoso e colonnare, con alcune ramificazioni e con l\'aspetto tipico dei cactus.', 'saguaro.jpg', 12, 1),
(18, 'Cactus di natale', 'Schlumbergera', 'Truncata', 'Cactaceae', 'Inverno', 'Rosa', 10, 'Mezz\'ombra', 5, 7, 'Il Cactus di Natale (Schlumbergera truncata), è una pianta succulenta che presenta dei fusti corti che si suddividono in ramificazioni con portamento che potrebbe essere eretto, arcuato oppure ricadente. I rami sono carnosi con una forma ovale e una colorazione verde scura, ma che potrebbe variare a seconda della luce ricevuta, diventando più chiare al buio o addirittura rossastre in piena luce. Le infiorescenze sono in grado si sbocciare agli apici fogliari, i petali sono particolarmente carnosi con una colorazione rossa oppure rosata. Per consentire ai boccioli di maturare correttamente sarebbe opportuno tenere la pianta sia lontana da correnti d\'aria e da fonti di calore.', 'schlumbergera.jpg', 8, 0),
(19, 'Borracina acre', 'Sedum', 'Acre', 'Crassulacee', 'Estate', 'Giallo', 7, 'Mezz\'ombra', 2, 5, 'La Borracina acre (Sedum acre) è una piccola pianta carnoso/succulenta di aspetto erbaceo, strisciante, perenne e sempreverde che si presta particolarmente come tappezzante al di sotto di altre piante, o per riempire gli spazi tra le pavimentazioni del giardino. In estate, se ha avuto sufficiente esposizione solare, produce dei piccoli fiori color giallo.', 'Sedum_acre.jpg', 7, 1),
(20, 'Zebra haworthia', 'Haworthiopsis', 'Attenuata', 'Asphodelaceae', 'Estate', 'Verde', 9, 'Pieno sole', 1, 3, 'Haworthiopsis attenuata è una piccola specie succulenta originaria del Capo Orientale, in Sud Africa.', 'haworthiopsis_attenuata.jpg', 14, 0),
(21, 'Mix di Lithops', 'Lithops', '', 'Aizoaceae', 'Autunno', 'Giallo', 9, 'Pieno sole', 3, 3, 'Pianta perenne nana, quasi priva di fusto. Forma gruppi di due foglie accoppiate, saldate all\'apice e divise da una fenditura dalla quale, in autunno, spuntano i fiori. Ogni coppia di foglie forma il corpo di una pianta che ha forma ovoidale.', 'Lithops_mix.jpg', 11, 0),
(22, 'Autumn Joy', 'Hylotelephium', 'Spectabile', 'Crassulacee', 'Primavera', 'Rosa', 7, 'Pieno sole', 5, 7, 'Nativa della Cina e Korea, questa pianta cresce fino a 45cm di altezza e larghezza.', 'Sedum_autumn_joy.jpg', 10, 1),
(23, 'Sedum ramato', 'Sedum', 'Nussbaumerianum', 'Crassulacee', 'Primavera', 'Bianco', 8, 'Pieno sole', 2, 4, 'Sedum nussbaumerianum è una specie succulenta nativa del Messico. E\' stata introdotta anche in Italia e nelle Isole Canarie. Cresce fino 20cm e produce piccoli fiori bianchi stellati in primavera', 'Sedum_nussbaumerianum.jpg', 18, 1),
(24, 'Sempervivum arachnoideum', 'Sempervivum', 'Arachnoideum', 'Crassulacee', 'Estate', 'Rosa', 1, 'Pieno sole', 5, 6, 'Questa specie presenta foglie succulente riunite in rosetta basale, coperte da peli biancastri che danno alla rosetta l\'aspetto di una tela di ragno.', 'Sempervivum_arachnoideum.jpg', 9, 1),
(25, 'Mammillaria theresae', 'Mammillaria', 'Theresae', 'Cactaceae', 'Primavera', '', 10, 'Pieno sole', 3, 7, 'Specie originaria del Durango, in Messico', 'Mammillaria_theresae.jpg', 12, 0),
(26, 'Regina della notte', 'Selenicereus', 'Grandiflorus', 'Cactaceae', 'Estate', 'Bianco', 11, 'Mezz\'ombra', 1, 15, 'Regina della notte è il nome comune dato al Selenicereus grandiflorus, pianta succulenta costituita da un fusto che può arrivare a misurare anche alcuni metri, dal diametro di circa quattro centimetri, spinoso lungo le coste, che sono quattro nella mia pianta ma il cui numero è variabile e può arrivare fino ad otto. Il nome comune è giustificato dalla bellezza e dalla grandezza dei fiori, che si aprono quando la luce lascia il posto alla notte, e che solo nel buio più totale si aprono completamente. ', 'Selenicereus_grandiflorus.jpg', 13, 0),
(27, 'Cactus riccio', 'Echinocereus', 'Viridiflorus', 'Cactaceae', 'Estate', 'Verde', 10, 'Pieno sole', 4, 3, 'Echinocereus viridiflorus è una specie di cactus nativa degli Stati Uniti centrali, del sud e del nord del Messico, dove può essere trovato in una grande varietà di habitat.', 'Echinocereus_viridiflorus.jpg', 11, 0),
(28, 'Kalanchoe luciae', 'Kalanchoe', 'Luciae', 'Crassulaceae', 'Estate', 'Giallo', 11, 'Mezz\'ombra', 3, 5, 'Kalanchoe luciae è una pianta succulente sempreverde nativa del Sud Africa, composta da con una rosetta basale di foglie carnose che diventano rosse durante i mesi più freddi dell\'anno.', 'Kalanchoe_luciae.jpg', 13, 1),
(29, 'Agave americana', 'Agave', 'Americana', 'Asparagaceae', 'Estate', 'Giallo', 10, 'Pieno sole', 2, 12, 'L\'Agave americana L. è una specie di pianta succulenta appartenente alla famiglia delle Agavaceae, nativa del Messico e degli Stati Uniti.', 'Agave_americana_variegata.jpg', 9, 1),
(30, 'Crassula perforata', 'Crassula', 'Perforata', 'Crassulaceae', 'Estate', 'Giallo', 12, 'Mezz\'ombra', 5, 3, 'Crassula perforata è una pianta succulente nativa della provincia del Capo Occidentale del Sud Africa.', 'Crassula_perforata.jpg', 9, 0),
(31, 'Cactus blu', 'Browningia', 'Hertlingiana', 'Cactaceae', 'Estate', 'Giallo', 11, 'Pieno sole', 1, 6, 'Browningia hertlingiana è un cactus gigante ricercato dai collezionisti perché gli esemplari più giovani hanno una vivida colorazione azzurra. Fiorisce solitamente quando supera il metro di altezza.', 'Browningia hertlingiana.jpg', 11, 0),
(32, 'Blossfeldia liliputana', 'Blossfeldia', 'Liliputana', 'Cactaceae', 'Estate', 'Bianco', 10, 'Pieno sole', 4, 6, 'Considerato uno dei cactus più piccoli al mondo, Blossfeldia liliputana è una pianta nativa del Sud America nel nordest dell\'Argentina. I suoi fiori sono bianchi o raramente rosa, lunghi 15mm e 5-7mm in diametro.', 'Blossfeldia_liliputana.jpg', 11, 0),
(33, 'Cactus corallo', 'Euphorbia', 'Flanaganii', 'Euphorbiaceae', 'Estate', 'Giallo', 10, 'Pieno sole', 3, 12, 'Euphorbia flanaganii f. cristata è una mutazione genetica propagata per la sua particolare forma che ricorda il corallo.', 'EUPHORBIA_FLANAGANII.jpg', 12, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `pianta_id` int(11) NOT NULL,
  `prezzo` float NOT NULL,
  `pianta_qt` int(11) NOT NULL,
  `ordine_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `report`
--

INSERT INTO `report` (`report_id`, `pianta_id`, `prezzo`, `pianta_qt`, `ordine_id`, `nome`) VALUES
(39, 15, 2, 1, 45, 'Rubromarginata'),
(40, 16, 4, 1, 46, 'Rebutia fiebrigii'),
(41, 16, 4, 1, 47, 'Rebutia fiebrigii'),
(42, 16, 4, 1, 48, 'Rebutia fiebrigii'),
(43, 16, 4, 1, 49, 'Rebutia fiebrigii'),
(44, 16, 4, 1, 50, 'Rebutia fiebrigii'),
(45, 16, 4, 1, 51, 'Rebutia fiebrigii'),
(46, 16, 4, 1, 52, 'Rebutia fiebrigii'),
(47, 16, 4, 1, 53, 'Rebutia fiebrigii'),
(48, 16, 4, 1, 54, 'Rebutia fiebrigii'),
(49, 16, 4, 1, 55, 'Rebutia fiebrigii'),
(50, 16, 4, 1, 56, 'Rebutia fiebrigii'),
(51, 16, 4, 1, 57, 'Rebutia fiebrigii'),
(52, 16, 4, 1, 58, 'Rebutia fiebrigii'),
(53, 16, 4, 1, 59, 'Rebutia fiebrigii'),
(54, 16, 4, 1, 60, 'Rebutia fiebrigii'),
(55, 16, 4, 1, 61, 'Rebutia fiebrigii'),
(56, 16, 4, 1, 62, 'Rebutia fiebrigii'),
(57, 16, 4, 1, 63, 'Rebutia fiebrigii'),
(58, 16, 4, 1, 64, 'Rebutia fiebrigii'),
(59, 16, 4, 1, 65, 'Rebutia fiebrigii'),
(60, 16, 4, 1, 66, 'Rebutia fiebrigii'),
(61, 16, 4, 1, 67, 'Rebutia fiebrigii'),
(62, 16, 4, 1, 68, 'Rebutia fiebrigii'),
(63, 16, 4, 1, 69, 'Rebutia fiebrigii'),
(64, 16, 4, 1, 70, 'Rebutia fiebrigii'),
(65, 16, 4, 1, 71, 'Rebutia fiebrigii'),
(66, 16, 4, 1, 72, 'Rebutia fiebrigii'),
(67, 16, 4, 1, 73, 'Rebutia fiebrigii'),
(68, 16, 4, 1, 74, 'Rebutia fiebrigii'),
(69, 16, 4, 1, 75, 'Rebutia fiebrigii'),
(70, 16, 4, 1, 76, 'Rebutia fiebrigii'),
(71, 16, 4, 1, 77, 'Rebutia fiebrigii'),
(72, 16, 4, 1, 78, 'Rebutia fiebrigii'),
(73, 16, 4, 1, 79, 'Rebutia fiebrigii'),
(74, 16, 4, 1, 80, 'Rebutia fiebrigii'),
(75, 16, 4, 1, 81, 'Rebutia fiebrigii'),
(76, 16, 4, 1, 82, 'Rebutia fiebrigii'),
(77, 16, 4, 1, 83, 'Rebutia fiebrigii'),
(78, 16, 4, 1, 84, 'Rebutia fiebrigii'),
(79, 16, 4, 1, 85, 'Rebutia fiebrigii'),
(80, 16, 4, 1, 86, 'Rebutia fiebrigii'),
(81, 16, 4, 1, 87, 'Rebutia fiebrigii'),
(82, 16, 4, 1, 88, 'Rebutia fiebrigii'),
(83, 16, 4, 1, 89, 'Rebutia fiebrigii'),
(84, 16, 4, 1, 90, 'Rebutia fiebrigii'),
(85, 16, 4, 1, 91, 'Rebutia fiebrigii'),
(86, 16, 4, 1, 92, 'Rebutia fiebrigii'),
(87, 16, 4, 1, 93, 'Rebutia fiebrigii'),
(88, 16, 4, 1, 94, 'Rebutia fiebrigii'),
(89, 16, 4, 1, 95, 'Rebutia fiebrigii'),
(90, 16, 4, 1, 96, 'Rebutia fiebrigii'),
(91, 16, 4, 1, 97, 'Rebutia fiebrigii'),
(92, 16, 4, 1, 98, 'Rebutia fiebrigii'),
(93, 16, 4, 1, 99, 'Rebutia fiebrigii'),
(94, 16, 4, 1, 100, 'Rebutia fiebrigii'),
(95, 16, 4, 1, 101, 'Rebutia fiebrigii'),
(96, 16, 4, 1, 102, 'Rebutia fiebrigii'),
(97, 16, 4, 1, 103, 'Rebutia fiebrigii'),
(98, 16, 4, 1, 104, 'Rebutia fiebrigii'),
(99, 16, 4, 1, 105, 'Rebutia fiebrigii'),
(100, 16, 4, 1, 106, 'Rebutia fiebrigii'),
(101, 16, 4, 1, 107, 'Rebutia fiebrigii'),
(102, 16, 4, 1, 108, 'Rebutia fiebrigii'),
(103, 16, 4, 1, 109, 'Rebutia fiebrigii'),
(104, 16, 4, 1, 110, 'Rebutia fiebrigii'),
(105, 16, 4, 1, 111, 'Rebutia fiebrigii'),
(106, 16, 4, 1, 112, 'Rebutia fiebrigii'),
(107, 16, 4, 1, 113, 'Rebutia fiebrigii'),
(108, 16, 4, 1, 114, 'Rebutia fiebrigii'),
(109, 16, 4, 1, 115, 'Rebutia fiebrigii'),
(110, 18, 7, 1, 116, 'Cactus di natale'),
(111, 18, 7, 1, 117, 'Cactus di natale'),
(112, 18, 7, 1, 118, 'Cactus di natale'),
(113, 18, 7, 1, 119, 'Cactus di natale'),
(114, 17, 5, 1, 120, 'Saguaro');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `utente_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`utente_id`, `email`, `password`, `admin`) VALUES
(7, 'admin@gmail.com', 'admin', 0),
(8, 'user@gmail.com', 'user', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`ordine_id`);

--
-- Indici per le tabelle `piante`
--
ALTER TABLE `piante`
  ADD PRIMARY KEY (`pianta_id`);

--
-- Indici per le tabelle `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `ordine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT per la tabella `piante`
--
ALTER TABLE `piante`
  MODIFY `pianta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT per la tabella `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `utente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
