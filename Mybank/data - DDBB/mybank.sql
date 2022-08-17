-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-08-2022 a las 21:54:47
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mybank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `ac_number` int(11) NOT NULL AUTO_INCREMENT,
  `ac_sortcode` varchar(12) NOT NULL,
  `ac_overlimit` decimal(10,2) NOT NULL,
  `ac_c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ac_number`),
  KEY `ac_c_id` (`ac_c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accounts`
--

INSERT INTO `accounts` (`ac_number`, `ac_sortcode`, `ac_overlimit`, `ac_c_id`) VALUES
(1, '08-028-0016', '13478.00', 1),
(2, '39-102-3077', '5914.00', 1),
(3, '63-853-3184', '13291.00', 2),
(4, '98-601-2966', '11601.00', 3),
(5, '66-529-4361', '5561.00', 3),
(6, '19-241-1871', '8742.00', 3),
(7, '23-511-8965', '14784.00', 3),
(8, '20-782-1236', '9009.00', 4),
(9, '59-059-7958', '8356.00', 4),
(10, '73-463-2854', '11989.00', 5),
(11, '22-355-8640', '9994.00', 6),
(12, '76-674-0759', '10056.00', 7),
(13, '50-577-4802', '13983.00', 8),
(14, '00-328-2114', '9880.00', 8),
(15, '70-538-9976', '10901.00', 9),
(16, '83-359-7574', '9445.00', 9),
(17, '78-164-2281', '14978.00', 9),
(18, '23-429-9918', '13886.00', 9),
(19, '92-057-1725', '5500.00', 10),
(20, '93-567-0724', '7497.00', 11),
(21, '34-036-4969', '8257.00', 12),
(22, '43-240-1552', '13574.00', 13),
(23, '26-420-7056', '6769.00', 14),
(24, '81-614-8735', '9783.00', 15),
(25, '21-857-0022', '11668.00', 15),
(26, '08-682-2182', '13074.00', 15),
(27, '84-479-3333', '14603.00', 16),
(28, '25-416-9548', '7027.00', 17),
(29, '29-678-8173', '9437.00', 18),
(30, '45-007-2768', '9178.00', 18),
(31, '92-072-6252', '14790.00', 19),
(32, '94-745-7416', '7648.00', 19),
(33, '56-458-3595', '5331.00', 19),
(34, '40-763-0994', '13697.00', 19),
(35, '50-207-5554', '10109.00', 19),
(36, '84-463-2923', '11263.00', 20),
(37, '85-373-4267', '13078.00', 20),
(38, '13-637-1386', '9075.00', 21),
(39, '04-711-7197', '7698.00', 22),
(40, '56-050-4916', '14639.00', 23),
(41, '61-144-9755', '11309.00', 23),
(42, '40-453-9129', '12053.00', 23),
(43, '65-854-1519', '9866.00', 24),
(44, '58-922-7985', '9264.00', 25),
(45, '52-515-8807', '10033.00', 25),
(46, '66-976-6722', '9032.00', 26),
(47, '04-829-0151', '5946.00', 26),
(48, '31-980-3436', '11435.00', 27),
(49, '27-270-4007', '7648.00', 28),
(50, '27-198-8897', '9875.00', 29),
(51, '64-968-6017', '12848.00', 30),
(52, '27-121-4344', '9585.00', 30),
(53, '61-379-6669', '11802.00', 31),
(54, '73-094-5400', '13318.00', 31),
(55, '89-458-7389', '14587.00', 31),
(56, '54-313-7382', '5883.00', 32),
(57, '20-089-9836', '8322.00', 32),
(58, '69-016-6043', '6031.00', 32),
(59, '81-946-5101', '12713.00', 33),
(60, '03-090-8110', '6097.00', 33),
(61, '38-271-6787', '12765.00', 33),
(62, '05-686-6552', '6824.00', 33),
(63, '44-096-7882', '9490.00', 34),
(64, '10-636-7965', '6402.00', 34),
(65, '59-153-6939', '5916.00', 35),
(66, '20-622-4015', '5061.00', 36),
(67, '43-465-1816', '8510.00', 37),
(68, '58-638-5348', '13249.00', 38),
(69, '43-717-5580', '14929.00', 39),
(70, '22-511-5663', '11061.00', 40),
(71, '01-767-3500', '8777.00', 40),
(72, '67-267-4884', '10049.00', 41),
(73, '24-313-9948', '11224.00', 41),
(74, '33-298-2859', '12200.00', 42),
(75, '24-687-3657', '6302.00', 43),
(76, '64-982-9819', '10778.00', 43),
(77, '10-537-1067', '6603.00', 44),
(78, '07-817-8786', '8360.00', 45),
(79, '55-452-0748', '8511.00', 45),
(80, '92-169-6097', '12104.00', 46),
(81, '27-720-7310', '6661.00', 46),
(82, '07-841-2426', '14436.00', 46),
(83, '23-537-9347', '6610.00', 47),
(84, '03-256-3638', '5119.00', 48),
(85, '26-346-3409', '7631.00', 48),
(86, '56-123-2362', '13131.00', 49),
(87, '79-733-6729', '5877.00', 49),
(88, '37-855-4782', '12658.00', 50),
(89, '27-933-1583', '9962.00', 51),
(90, '12-298-9483', '12846.00', 52),
(91, '20-528-4454', '13354.00', 53),
(92, '50-878-1798', '8724.00', 53),
(93, '95-914-3176', '5951.00', 53),
(94, '17-903-5845', '9290.00', 53),
(95, '58-075-9174', '7999.00', 53),
(96, '72-365-8542', '12853.00', 54),
(97, '21-306-9483', '6167.00', 54),
(98, '82-744-2930', '11149.00', 55),
(99, '40-749-3936', '14572.00', 55),
(100, '82-397-7242', '8702.00', 56),
(101, '82-893-1649', '12365.00', 56),
(102, '84-943-6928', '7728.00', 56),
(103, '78-481-7026', '5400.00', 56),
(104, '24-278-7854', '12372.00', 56),
(105, '27-772-6812', '13848.00', 57),
(106, '80-848-6106', '11160.00', 57),
(107, '75-811-4608', '8169.00', 58),
(108, '77-244-1639', '7194.00', 58),
(109, '30-434-3708', '6558.00', 59),
(110, '58-810-2900', '10360.00', 60),
(111, '42-745-0218', '5903.00', 60),
(112, '04-913-2881', '10797.00', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) DEFAULT NULL,
  `c_surname` varchar(20) DEFAULT NULL,
  `c_address` varchar(50) DEFAULT NULL,
  `c_phone` varchar(15) DEFAULT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_balance` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_surname`, `c_address`, `c_phone`, `c_email`, `c_balance`) VALUES
(1, 'Karmen', 'Spilsted', '0815 Pankratz Park', '102 705 8576', 'kspilsted0@ezinearticles.com', NULL),
(2, 'Magda', 'Leal', '670 South Junction', '637 862 6690', 'mleal1@redcross.org', NULL),
(3, 'Charmine', 'Goreisr', '95123 Loeprich Court', '207 943 5593', 'cgoreisr2@redcross.org', NULL),
(4, 'Pooh', 'Ortzen', '46 Northport Center', '421 703 8299', 'portzen3@so-net.ne.jp', NULL),
(5, 'Bram', 'Wenman', '19289 Vidon Junction', '641 923 8936', 'bwenman4@wsj.com', NULL),
(6, 'Caterina', 'Cullagh', '6 Carpenter Alley', '200 865 5822', 'ccullagh5@nps.gov', NULL),
(7, 'Eliot', 'Andreou', '596 Comanche Hill', '702 964 4901', 'eandreou6@bluehost.com', NULL),
(8, 'Alvan', 'Peaple', '207 Division Lane', '664 996 4297', 'apeaple7@mail.ru', NULL),
(9, 'Rozalin', 'Tebbs', '38861 Porter Pass', '456 813 5477', 'rtebbs8@hibu.com', NULL),
(10, 'Harrietta', 'Keeffe', '75070 Barnett Way', '127 671 6922', 'hkeeffe9@marketwatch.com', NULL),
(11, 'Danya', 'Stearn', '869 Gina Road', '840 538 1859', 'dstearna@yelp.com', NULL),
(12, 'Anni', 'Braney', '43 Lerdahl Terrace', '323 687 8373', 'abraneyb@washingtonpost.com', NULL),
(13, 'Gillie', 'Sutcliffe', '8006 Esker Street', '804 368 5186', 'gsutcliffec@redcross.org', NULL),
(14, 'Errol', 'Gelly', '5 Lighthouse Bay Drive', '905 715 6809', 'egellyd@sohu.com', NULL),
(15, 'Verine', 'Giraudou', '2 Sommers Terrace', '895 387 5751', 'vgiraudoue@princeton.edu', NULL),
(16, 'Rutherford', 'Trulock', '23 Vernon Park', '377 135 0544', 'rtrulockf@vk.com', NULL),
(17, 'Margaux', 'Roostan', '664 Donald Road', '774 628 1376', 'mroostang@sakura.ne.jp', NULL),
(18, 'Waverley', 'OHingerty', '25 Kensington Alley', '117 824 8800', 'wohingertyh@marriott.com', NULL),
(19, 'Cletus', 'Rodolfi', '6304 Hooker Circle', '875 738 1028', 'crodolfii@abc.net.au', NULL),
(20, 'Garv', 'Luparti', '0731 Roxbury Road', '627 828 2628', 'glupartij@samsung.com', NULL),
(21, 'Cissy', 'Matlock', '56967 Lindbergh Plaza', '601 113 5687', 'cmatlockk@moonfruit.com', NULL),
(22, 'Anni', 'Borel', '0 Lukken Lane', '427 166 2471', 'aborell@mit.edu', NULL),
(23, 'Kort', 'Shawcroft', '8609 Darwin Plaza', '886 826 1026', 'kshawcroftm@yolasite.com', NULL),
(24, 'Ferdinand', 'Jakeman', '5341 Scoville Drive', '235 239 4770', 'fjakemann@msn.com', NULL),
(25, 'Libbi', 'Neller', '73358 Russell Pass', '480 104 5894', 'lnellero@sogou.com', NULL),
(26, 'Graehme', 'Cawthron', '9683 Quincy Alley', '493 433 4940', 'gcawthronp@github.io', NULL),
(27, 'Gannon', 'Jenks', '87 Scoville Court', '431 813 1729', 'gjenksq@biblegateway.com', NULL),
(28, 'Papagena', 'Coenraets', '04362 Hazelcrest Point', '433 332 1886', 'pcoenraetsr@fastcompany.com', NULL),
(29, 'Lucho', 'Braxay', '5 Cascade Hill', '244 928 2877', 'lbraxays@simplemachines.org', NULL),
(30, 'Lesly', 'Beatey', '92 Morningstar Terrace', '505 528 5422', 'lbeateyt@nymag.com', NULL),
(31, 'Mark', 'Thornbarrow', '1 Cordelia Hill', '322 450 8172', 'mthornbarrowu@mysql.com', NULL),
(32, 'Aime', 'Roberti', '7432 Porter Park', '995 132 3318', 'arobertiv@last.fm', NULL),
(33, 'Valery', 'Casterot', '03 Meadow Ridge Plaza', '170 106 0539', 'vcasterotw@thetimes.co.uk', NULL),
(34, 'Zorana', 'Luckman', '7327 Clemons Junction', '825 805 0302', 'zluckmanx@wordpress.org', NULL),
(35, 'Rubi', 'Gianneschi', '645 Corscot Center', '997 484 5125', 'rgianneschiy@unblog.fr', NULL),
(36, 'Francis', 'Glanister', '081 Vera Alley', '332 385 7473', 'fglanisterz@marketwatch.com', NULL),
(37, 'Lian', 'Douty', '37 Sutherland Road', '773 310 3955', 'ldouty10@ocn.ne.jp', NULL),
(38, 'Gustie', 'Vasyukhichev', '065 Farragut Court', '782 694 8535', 'gvasyukhichev11@parallels.com', NULL),
(39, 'Valry', 'Richarz', '99548 Northfield Alley', '923 440 8521', 'vricharz12@youtu.be', NULL),
(40, 'Lonee', 'Meiningen', '7 Eliot Parkway', '290 734 8827', 'lmeiningen13@domainmarket.com', NULL),
(41, 'Amble', 'Muncaster', '39604 Blaine Junction', '482 374 3902', 'amuncaster14@homestead.com', NULL),
(42, 'Faydra', 'Dillet', '31290 Fairfield Junction', '377 460 6139', 'fdillet15@google.com.hk', NULL),
(43, 'Sheila', 'Marrison', '923 Bonner Avenue', '785 403 8200', 'smarrison16@buzzfeed.com', NULL),
(44, 'Linus', 'Bes', '99 Hintze Center', '819 262 1654', 'lbes17@home.pl', NULL),
(45, 'Arleyne', 'Rigler', '05 Moose Avenue', '268 767 4357', 'arigler18@utexas.edu', NULL),
(46, 'Gilbert', 'Atack', '5345 Hanover Place', '928 576 8659', 'gatack19@blinklist.com', NULL),
(47, 'Annadiana', 'Iaduccelli', '6824 Carioca Center', '783 944 5550', 'aiaduccelli1a@mozilla.org', NULL),
(48, 'Celie', 'Lamprey', '86136 Luster Pass', '201 661 2158', 'clamprey1b@omniture.com', NULL),
(49, 'Alexandr', 'Swatheridge', '55 Donald Street', '497 994 9885', 'aswatheridge1c@ucla.edu', NULL),
(50, 'Ingrid', 'Sacher', '33 Schmedeman Lane', '420 801 4461', 'isacher1d@oracle.com', NULL),
(51, 'Lester', 'Watmore', '7 Towne Park', '243 600 0459', 'lwatmore1e@cargocollective.com', NULL),
(52, 'Jereme', 'Rennison', '02 Grayhawk Terrace', '683 672 2539', 'jrennison1f@technorati.com', NULL),
(53, 'Jarrad', 'Oxshott', '85241 Clarendon Hill', '685 384 9633', 'joxshott1g@constantcontact.com', NULL),
(54, 'Dore', 'Portress', '6193 Riverside Plaza', '968 271 9369', 'dportress1h@ezinearticles.com', NULL),
(55, 'Leighton', 'Sugg', '899 Transport Lane', '379 921 9526', 'lsugg1i@symantec.com', NULL),
(56, 'Teodoor', 'Carlick', '777 Sutherland Hill', '830 132 0997', 'tcarlick1j@va.gov', NULL),
(57, 'Belinda', 'Benda', '7881 Mifflin Plaza', '864 154 6563', 'bbenda1k@multiply.com', NULL),
(58, 'Florina', 'Cyson', '2464 Waywood Lane', '437 655 2550', 'fcyson1l@chronoengine.com', NULL),
(59, 'Cord', 'Mompesson', '476 Mccormick Place', '104 634 7894', 'cmompesson1m@drupal.org', NULL),
(60, 'Collete', 'Ross', '26153 David Lane', '245 693 7884', 'cross1n@state.tx.us', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(50) DEFAULT NULL,
  `e_surname` varchar(50) DEFAULT NULL,
  `e_user` varchar(10) DEFAULT NULL,
  `e_password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_surname`, `e_user`, `e_password`) VALUES
(1, 'Maria', 'Smith', 'Maria23', '12ab'),
(2, 'John', 'Williams', 'John12', '34cb'),
(3, 'Patricia', 'Gonzalez', 'Patricia', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_reference` varchar(100) DEFAULT NULL,
  `tr_ac_sortcode` varchar(12) DEFAULT NULL,
  `tr_in` decimal(12,2) DEFAULT NULL,
  `tr_out` decimal(12,2) DEFAULT NULL,
  `tr_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tr_id`),
  KEY `FK_ac_sortcode` (`tr_ac_sortcode`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transactions`
--

INSERT INTO `transactions` (`tr_id`, `tr_reference`, `tr_ac_sortcode`, `tr_in`, `tr_out`, `tr_date`) VALUES
(1, 'dogs', '08-028-0016', '1250.00', '0.00', '2022-08-15 17:16:17'),
(2, 'cats', '84-479-3333', '2562.00', '0.00', '2022-08-15 17:16:56'),
(3, 'Tickets Futball', '39-102-3077', '0.00', '65.00', '2022-08-15 17:18:40'),
(4, 'HMTsa', '39-102-3077', '1250.00', '0.00', '2022-08-15 17:19:05'),
(5, 'Bills', '39-102-3077', '0.00', '750.00', '2022-08-15 17:19:26'),
(6, 'Champions League', '10-537-1067', '0.00', '100.00', '2022-08-15 18:20:03');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`ac_c_id`) REFERENCES `customers` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
