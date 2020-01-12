-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2019 at 12:15 AM
-- Server version: 5.6.43
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apftl`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_control`
--

CREATE TABLE `access_control` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `control_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access_control`
--

INSERT INTO `access_control` (`id`, `role_id`, `control_id`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 3, 3),
(4, 3, 4),
(5, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `access_menu`
--

CREATE TABLE `access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access_menu`
--

INSERT INTO `access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 2),
(5, 3, 3),
(6, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `apftl_activity`
--

CREATE TABLE `apftl_activity` (
  `id` int(11) NOT NULL,
  `activity` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_activity`
--

INSERT INTO `apftl_activity` (`id`, `activity`) VALUES
(3, 'Activity 1'),
(4, 'Activity 2'),
(5, 'Activity 3'),
(6, 'Activity 4'),
(7, 'Activity 5'),
(8, 'Activity 6'),
(9, 'Activity 7'),
(10, 'Activity 8'),
(11, 'Activity 9'),
(12, 'Activity 10'),
(13, 'Activity 11'),
(14, 'Activity 12');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_control`
--

CREATE TABLE `apftl_control` (
  `id` int(11) NOT NULL,
  `control` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_control`
--

INSERT INTO `apftl_control` (`id`, `control`) VALUES
(1, 'election'),
(2, 'election_candidate'),
(3, 'election_register'),
(4, 'election_selected'),
(5, 'apftl_election');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_c_program`
--

CREATE TABLE `apftl_c_program` (
  `id` int(11) NOT NULL,
  `category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_c_program`
--

INSERT INTO `apftl_c_program` (`id`, `category`) VALUES
(3, 'Category 1'),
(4, 'Category 2'),
(5, 'Category 3'),
(6, 'Category 4'),
(7, 'Category 5');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_election`
--

CREATE TABLE `apftl_election` (
  `id` int(11) NOT NULL,
  `id_distric` int(11) NOT NULL,
  `id_subdistric` int(11) NOT NULL,
  `election_period` varchar(128) NOT NULL,
  `female_register` varchar(128) NOT NULL,
  `male_register` varchar(128) NOT NULL,
  `total_register` varchar(128) NOT NULL,
  `female_selected` varchar(128) NOT NULL,
  `male_selected` varchar(128) NOT NULL,
  `total_selected` varchar(128) NOT NULL,
  `female_candidate` varchar(128) NOT NULL,
  `male_candidate` varchar(128) NOT NULL,
  `total_candidate` varchar(128) NOT NULL,
  `name_male` varchar(128) NOT NULL,
  `edu_male` varchar(128) NOT NULL,
  `birth_p_male` varchar(128) NOT NULL,
  `birth_d_male` date NOT NULL,
  `address_male` varchar(128) NOT NULL,
  `mobile_male` varchar(128) NOT NULL,
  `email_male` varchar(128) NOT NULL,
  `name_female` varchar(128) NOT NULL,
  `edu_female` varchar(128) NOT NULL,
  `birth_p_female` varchar(128) NOT NULL,
  `birth_d_female` date NOT NULL,
  `address_female` varchar(128) NOT NULL,
  `mobile_female` varchar(128) NOT NULL,
  `email_female` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_election`
--

INSERT INTO `apftl_election` (`id`, `id_distric`, `id_subdistric`, `election_period`, `female_register`, `male_register`, `total_register`, `female_selected`, `male_selected`, `total_selected`, `female_candidate`, `male_candidate`, `total_candidate`, `name_male`, `edu_male`, `birth_p_male`, `birth_d_male`, `address_male`, `mobile_male`, `email_male`, `name_female`, `edu_female`, `birth_p_female`, `birth_d_female`, `address_female`, `mobile_female`, `email_female`) VALUES
(13, 13, 82, '2019', '24', '10', '34', '18', '10', '28', '', '', '', 'Adao da Costa Araujo dos Reis', 'Ensinu Sekundariu', 'Talitu', '2002-09-16', 'Talitu', '75395614/7734911', '-', 'Claudia de Araujo Mota', 'Ensinu Sekundariu', 'Talitu', '2003-04-13', 'Talitu', '75244386', '-'),
(14, 13, 84, '2019', '29', '10', '39', '21', '8', '29', '', '', '', 'Teofilo Exposto de Andrade', 'Ensinu Sekundariu', 'Remexio', '2003-02-17', 'Tulataque', '-', '-', 'Leonora Manuela Charles', 'Ensinu Sekundariu', 'Acumau', '2004-02-14', 'Fahisoi', '78360105', '-'),
(15, 13, 83, '2019', '14', '9', '23', '11', '9', '20', '', '', '', 'Mateus Maia dos Santos', 'Ensinu Baziku', 'Locotoi', '2002-05-28', 'Fahisoi', '77484446', '-', 'Genilda da Costa de Jesus', 'Ensinu Baziku', 'Tatilisame', '2005-01-01', 'Fahisoi', '77484446', '-'),
(16, 13, 81, '2019', '20', '9', '29', '17', '6', '23', '', '', '', 'David Barreto Varia', 'Ensinu Sekundariu', 'Sarin', '2002-04-20', 'Fahiria', '76386729', '-', 'Jeneva Fatima Soares', 'Ensinu Sekundariu', 'Aissirimou', '2003-05-22', 'Aissirimou', '-', '-'),
(17, 9, 66, '2019', '16', '6', '22', '13', '5', '18', '', '', '', 'Romaldo Lopes Bareto', 'Ensinu Sekundariu', 'Edi', '2002-07-27', 'Edi', '75392797', '-', 'Nicola A.Dos Reis De O.Pereira', 'Ensinu Sekundariu', 'Maubisse', '2002-12-06', 'Maubisse', '76618303', ''),
(18, 9, 65, '2019', '29', '14', '43', '23', '10', '33', '', '', '', 'Sonio Magno da Conceicao', 'Ensinu Baziku', 'Aitutu', '2005-09-04', 'Mulo', '76310363', '-', 'Pascoela da Conceicao Tilman', 'Ensinu Baziku', 'Hautiu', '2003-09-20', 'Mulo', '77289008', '-'),
(19, 9, 63, '2019', '23', '7', '30', '18', '6', '24', '', '', '', 'Olavio Almeida Araujo', 'Ensinu Sekundariu', 'Dili', '2003-01-14', 'Mau-ulo', '78579419/75468776', '-', 'Sania Araujo Perreira', 'Ensinu Sekundariu', '', '2002-02-24', 'Dili', '78299123', '-'),
(20, 9, 64, '2019', '45', '10', '55', '36', '9', '45', '', '', '', 'Rodencio de Araujo', 'Ensinu Sekundariu', 'Lesso', '2003-04-26', 'Ailico', '75115796', '-', 'Maria Eliza Miranda Lourdes', 'Ensinu Sekundariu', 'Rae-soro', '2004-05-26', 'Leo-lima', '75619765/76626912', '-'),
(21, 3, 41, '2019', '9', '1', '10', '8', '1', '9', '', '', '', 'Remigio da Silva Correia', 'Ensinu Sekundariu', 'Baucau', '2003-06-24', 'Vemasse', '77955815', '-', 'Maria Cirilia Antonia Freitas', 'Ensinu Sekundariu', 'Vemasse', '2002-03-18', 'Vemasse', '77735504', '-'),
(22, 3, 37, '2019', '53', '25', '78', '52', '24', '76', '', '', '', 'Nilton Lorenço Timotio Gaio', 'Ensinu Sekundariu', 'Betulale', '2002-09-09', 'Baucau', '76498565', '-', 'Nedichya Correia Belo', 'Ensinu Sekundariu', 'Baucao', '2004-06-17', 'Baucau', '77279063/77272861', '-'),
(23, 3, 42, '2019', '17', '16', '33', '16', '15', '31', '', '', '', 'Abrão Audato LogoToli Sarmento', 'Ensinu Baziku', 'Venilale', '2007-04-06', 'Venilale', '77316746/76319051', '-', 'Lúcia Andre De S.P. Sarmento', 'Ensinu Baziku', 'Taibesse,Dili', '2005-09-08', 'Venilale', '73370090/76553560', '-'),
(24, 3, 40, '2019', '18', '6', '24', '15', '6', '21', '', '', '', 'Leandro Antonio Guterres', 'Ensinu Sekundariu', 'Osso-Messa/Bualale', '2003-07-01', 'Quelicai', '76769269', '-', 'Eufemia Soares Boavida', 'Ensinu Baziku', 'Lia-Lura/Bualale', '2003-08-20', 'Quelicai', '75974985', '-'),
(25, 3, 39, '2019', '10', '6', '16', '10', '6', '16', '', '', '', 'Benjamin Geovanio Matos', 'Ensinu Sekundariu', 'Lari-Ledana/Saelari/Laga', '2003-07-03', 'Laga', '77334531', '-', 'Cristina Milagros Gusmao Manuel Ximenes', 'Ensinu Sekundariu', 'Dili', '2002-04-29', 'Laga', '76165169', ''),
(26, 3, 38, '2019', '19', '11', '30', '16', '11', '27', '', '', '', 'Morgovio Freitas Pinto', 'Ensinu Baziku', 'Oqui-Lari/Afaloicai/Baguia', '2002-11-21', 'Baguia', '75306842', '-', 'Sejuinha Casilda Ximenes', 'Ensinu Baziku', 'Oqui-Lari/Afaloicai/Baguia', '2004-06-04', 'Baguia', '76502399', '-'),
(27, 5, 43, '2019', '10', '5', '15', '10', '5', '15', '', '', '', 'Miguel Manu Meta João', 'Ensinu Baziku', 'Atabae', '2004-11-20', 'Aidabaleten', '76600920', '-', 'Carmelita Genifania Soares', 'Ensinu Baziku', 'Tutubaba - Aidabaleten', '2004-06-13', 'Santa Maria Imaculada', '75115490/76286811', '-'),
(28, 5, 44, '2019', '27', '4', '31', '26', '4', '30', '', '', '', 'Tomas Aquino Amaro Santos da Costa', 'Ensinu Sekundariu', 'Balibo', '2004-08-15', 'Balibo Vila', '75187385', '-', 'Belita Nelia Carvalho Lay', 'Ensinu Sekundariu', 'Aimalae', '2003-02-20', 'Leo-lima', '76889275', '-'),
(29, 5, 48, '2019', '20', '5', '25', '20', '4', '24', '', '', '', 'Livorio Moniz Conceicao Amaral', 'Ensinu Sekundariu', 'Maliana', '2003-09-28', 'Lahomea', '77360214', '-', 'Fransiska dos Santos Wohe', 'Ensinu Sekundariu', 'Flores', '2003-02-18', 'Odomau', '78255551', '-'),
(30, 5, 46, '2019', '15', '4', '19', '15', '3', '18', '', '', '', 'Januario Soares', 'Ensinu Baziku', 'Atudara', '2003-01-18', 'Atudara', '75135441', '-', 'Maria Imaculada Santos', 'Ensinu Baziku', 'Meligo', '2004-06-03', 'Meligo', '76727609', '-'),
(31, 5, 45, '2019', '48', '21', '69', '44', '15', '59', '', '', '', 'Rui Noronha', 'Ensinu Sekundariu', 'Carabau', '2002-06-19', 'Carabau', '75940012', '-', 'Celina  Soares Franklin', 'Ensinu Sekundariu', 'Atulara', '2002-06-14', 'Maliubu', '75587433', '-'),
(32, 5, 47, '2019', '11', '6', '17', '11', '6', '17', '', '', '', 'Irenio Leite Candelu', 'Ensinu Baziku', 'Lebos, Mabelis', '2006-06-28', 'Opa', '76185205/75954761', '-', 'Marcelia Quize Imaculada Rosa Felicidade', 'Ensinu Baziku', 'Raimea', '2007-03-05', 'Opa', '75115490/76286811', '-'),
(33, 2, 33, '2019', '16', '7', '23', '15', '7', '22', '', '', '', 'Mateus De Nerri', 'Ensinu Baziku', 'Zumalai', '2002-04-14', 'Lour', '76913546', '-', 'Tifania Pereira Bete Manunut', 'Ensinu Baziku', 'Galitas', '2007-05-16', 'Taz-hilin', '77344528/76613939', '-'),
(34, 2, 35, '2019', '11', '7', '18', '11', '7', '18', '', '', '', 'Noe Ferreira', 'Ensinu Sekundariu', 'Haemano', '2005-02-09', 'Beco', '75370808', '-', 'Elisita Clementina Amaral', 'Ensinu Sekundariu', 'Holbelis', '2002-07-19', 'Labarai', '76882320', '-'),
(35, 2, 36, '2019', '10', '6', '16', '10', '6', '16', '', '', '', 'Roberto Belarmino Viera Alvi Da Silva', 'Ensinu Sekundariu', 'Maudemo', '2002-09-05', 'Maudemo', '75995163', '-', 'Maria Novena De Jesus Da Silva Tale', 'Ensinu Sekundariu', 'Tilomar', '2002-11-24', 'Lalawa', '75210745', '-'),
(36, 2, 31, '2019', '15', '7', '22', '14', '7', '21', '', '', '', 'Egidio Guterres Virgilio Pires', 'Ensinu Sekundariu', 'Debos', '2003-08-10', 'Fatumea', '75741666', '-', 'Deonisia da Costa Fatima', 'Ensinu Sekundariu', 'Fatumea', '2003-12-02', 'Fatumea', '76238938/76574079', '-'),
(37, 2, 32, '2019', '16', '10', '26', '14', '9', '23', '', '', '', 'Antonio Kris Dos Santos Dodok', 'Ensinu Sekundariu', 'Lo\'ohali', '2005-06-22', 'Fohorem', '75648397', '-', 'Ervenia Dos Santos', 'Ensinu Sekundariu', 'Aitos/Dato-rua', '2003-10-20', 'Dato-rua', '75739693', '-'),
(38, 2, 34, '2019', '13', '14', '27', '12', '14', '26', '', '', '', 'Lucas Gusmao do Nascimento', 'Ensinu Sekundariu', 'Debos/Ahinavai', '2002-05-18', 'Belecasac', '75847470', '-', 'Neuza de Jesus Monteiro Marquesa', 'Ensinu Sekundariu', 'Debos', '2003-02-23', 'Belecasac', '76079255', '-'),
(39, 2, 30, '2019', '13', '5', '18', '13', '5', '18', '', '', '', 'Sinorino Da Cruz', 'Ensinu Sekundariu', 'Taroman', '2002-06-15', '', '75182423', '-', 'Evangelina Cardoso', 'Ensinu Sekundariu', 'Beidasi', '2002-12-17', '', '76813163', '-'),
(40, 1, 27, '2019', '7', '3', '10', '7', '3', '10', '', '', '', 'Garcia Justino Saka Amaral Soares', 'Ensinu Sekundariu', 'Metinaro', '2006-08-28', '', '-', '-', 'Sergia Da Silva Do Rego', 'Ensinu Sekundariu', 'Metinaro', '2004-02-13', '', '75338814', '-'),
(41, 1, 25, '2019', '44', '7', '51', '42', '7', '49', '', '', '', 'André José Manuel Sarmento Paulo', 'Ensinu Sekundariu', 'Dili', '2002-04-22', '', '77486215', '-', 'Silvania Sinabocia Mota', 'Ensinu Sekundariu', 'Dili', '2003-05-23', '', '75862188', '-'),
(42, 1, 28, '2019', '87', '15', '102', '82', '14', '96', '', '', '', 'Ronaldo Ima Dias Perreira', 'Ensinu Sekundariu', 'Dili', '2002-06-17', '', '73955004', '-', 'Alda Femerini Guirin da Silva Soares', 'Ensinu Sekundariu', 'Bidau Santa Ana', '2006-05-15', '', '77495349', '-'),
(43, 1, 29, '2019', '29', '8', '37', '29', '7', '36', '', '', '', 'Elio Espirito Santo da Costa Ximenes', 'Pre-secundaria', 'Watusili', '2006-04-08', 'Lahane Ocidental', '76116563', '-', 'Letícia Maria Fátima Baptista Guterres', 'Ensinu Sekundariu', 'Hospital Nasional Dili', '2004-04-28', 'Vila-Verde', '77298859', '-'),
(44, 1, 26, '2019', '76', '27', '103', '76', '24', '100', '', '', '', 'Romario Viegas Francisco Marçal', 'Ensinu Sekundariu', 'Bidau Santa Ana', '2002-07-22', '', '74060299', '-', 'Denazia da Silva Pires', 'Ensinu Sekundariu', 'Dili', '2002-12-18', '', '78664570', '-'),
(45, 1, 13, '2019', '17', '12', '29', '15', '12', '27', '', '', '', 'Juvinal Gabriel Soares', 'Ensinu Sekundariu', 'Maquili', '2002-07-18', '', '75275559', '-', 'Evelin Soares Alves', 'Ensinu Sekundariu', 'Ataúro', '2003-03-18', '', '-', '-'),
(46, 12, 80, '2019', '29', '11', '40', '29', '11', '40', '', '', '', 'Zelio Duarte Soares', 'Ensinu Sekundariu', 'Liho,Railaco', '2004-08-26', '', '78587347', '-', 'Dircia Soares dos Santos', 'Ensinu Sekundariu', 'Liho,Railaco', '2002-10-15', '', '78094090', '-'),
(47, 12, 77, '2019', '24', '23', '47', '22', '20', '42', '', '', '', 'Estevao Alexandre Costa de Araujo', 'Ensinu Sekundariu', 'Poetete', '2003-02-18', '', '76797580', '-', 'Efegenia de Jesus Xavier', 'Ensinu Sekundariu', 'Talmoro', '2001-12-24', '', '77661568', '-'),
(48, 12, 78, '2019', '16', '14', '30', '12', '13', '25', '', '', '', 'Bendito A. D. Martins', 'Ensinu Baziku', 'Fatubolu', '2006-08-14', '', '75400118', '-', 'Cidalia A. da Silva', 'Ensinu Baziku', 'Poerema', '2006-11-03', '', '75470885', '-'),
(49, 12, 79, '2019', '16', '12', '28', '16', '10', '26', '', '', '', 'Juvinal de Jesus', 'Ensinu Sekundariu', 'Lauana', '2002-12-07', '', '75967269', '-', 'Fransisca Deneia de Deus', 'Ensinu Sekundariu', 'Ctrai Craik', '2004-07-24', '', '75992704', '-'),
(50, 12, 76, '2019', '15', '8', '23', '15', '6', '21', '', '', '', 'Leonito da Silva de Sena', 'Ensinu Baziku', 'Malabe', '2004-12-21', '', '75123641', '-', 'Durcia Martins Gonsalves', 'Ensinu Baziku', 'Atara,Atsabe', '2003-07-21', '', '76261614', '-'),
(51, 8, 61, '2019', '11', '7', '18', '11', '7', '18', '', '', '', 'Seorce Alves da Costa', 'Ensinu Baziku', 'Abere', '2004-06-15', 'Luro', '75535560', '-', 'Zelfia de Jesus Pinto', 'Ensinu Baziku', 'Abere', '2002-01-29', 'Luro', '75378266', '-'),
(52, 8, 59, '2019', '6', '12', '18', '6', '12', '18', '', '', '', 'Alexander da Cruz Tolentino', 'Ensinu Sekundariu', 'Baduro', '2003-05-02', 'Lautem', '75190203', '-', 'Carla Delafonte', 'Ensinu Sekundariu', 'Puno', '2003-06-07', 'Lautem', '75388691', '-'),
(53, 8, 62, '2019', '26', '11', '37', '25', '11', '36', '', '', '', 'Pio Jackelly de Jesus', 'Ensinu Baziku', 'Tutuala', '2003-03-10', 'Tutuala', '76840734', '-', 'Carla Febriana Lau Gonzaga', 'Ensinu Baziku', 'Loiquero', '2005-02-24', 'Tutuala', '77517480', '-'),
(54, 8, 60, '2019', '40', '21', '61', '39', '20', '59', '', '', '', 'Fidelicio De Jesus Ramos', 'Ensinu Sekundariu', 'Lospalos', '2003-02-25', 'Lospalos', '76250290', '-', 'Aplonia Maria Imaculada', 'Ensinu Sekundariu', 'Lospalos', '2003-04-11', 'Lospalos', '76753441', '-'),
(55, 8, 58, '2019', '19', '8', '27', '19', '8', '27', '', '', '', 'Paulos da Costa', 'Ensinu Sekundariu', 'Tatalarim', '2003-01-20', 'Iliomar', '76109914', '-', 'Adelia Ati Silva da Costa', 'Ensinu Sekundariu', 'Rumutau', '2002-09-30', 'Iliomar', '76629524', '-'),
(56, 6, 50, '2019', '9', '6', '15', '9', '6', '15', '', '', '', 'Mateus Pereira De Jesus Soares', 'Ensinu Sekundariu', 'Loidahar de Liquica', '2003-02-10', 'Liquica', '-', '-', '', 'Ensinu Sekundariu', 'Dato De Liquica', '2002-10-27', 'Liquica', '77331093/77021879', '-'),
(57, 6, 51, '2019', '14', '3', '17', '14', '2', '16', '', '', '', 'Nelino Da Silva Ximenes', 'Ensinu Sekundariu', 'Liquica,25 De Abril de 2004', '2004-04-25', 'Maubara', '76645126', '-', 'Dircia Leticia Manuela Pinto', 'Ensinu Sekundariu', 'Vato Vou de Maubara', '2003-10-30', 'Maubara', '77690725', '-'),
(58, 6, 49, '2019', '25', '11', '36', '24', '10', '34', '', '', '', 'Pascual Jardel S. P. Soares', 'Ensinu Baziku', 'Ulmera', '2009-03-12', 'Bazartete', '75642712', '-', 'Adelcisa Alves Perreira', 'Ensinu Baziku', 'Fatumassi de Bazartete', '2004-11-04', 'Bazartete', '77316422', '-'),
(59, 10, 70, '2019', '10', '7', '17', '10', '6', '16', '', '', '', 'Julenio Amaral Sarmento', 'Ensinu Baziku', 'Caimauc Turisca', '2002-07-11', 'Turiscai', '76758315', '-', 'Justavia de Jesus Barbosa Nunes', 'Ensinu Sekundariu', 'Manumera', '2004-06-24', 'Turiscai', '75703612', '-'),
(60, 10, 69, '2019', '15', '9', '24', '15', '9', '24', '', '', '', 'Rivaldo Seixas da Costa', 'Ensinu Baziku', 'Bemetan', '2003-12-17', 'Same', '75115963', '-', 'Brandolinda  Pereira', 'Ensinu Sekundariu', 'Bemetan', '2003-09-18', 'Same', '75115963', '-'),
(61, 10, 67, '2019', '5', '5', '10', '5', '4', '9', '', '', '', 'Cristovao Reinato Estelita', 'Ensinu Sekundariu', 'Tahubein', '2002-04-03', 'Alas', '76521560/75507770', '-', 'Abelina Maria França', 'Ensinu Sekundariu', 'Tahubein,Mahaquidan,Alas', '2002-11-03', 'Alas', '75649290', '-'),
(62, 10, 68, '2019', '8', '5', '13', '8', '5', '13', '', '', '', 'Natalino da Costa Pinto', 'Ensinu Sekundariu', 'Fahinehan', '2002-12-17', 'Fatuberliu', '76253638', '-', 'Ester da Costa', 'Ensinu Sekundariu', 'Cai-Cassa', '2002-04-03', 'Fatuberliu', '76828320', '-'),
(63, 7, 53, '2019', '10', '4', '14', '10', '4', '14', '', '', '', 'Vicente Ferrer Fernandes Garcia', 'Ensinu Sekundariu', 'Laclo', '2002-05-20', 'Laclo', '76020391', '-', 'Susana Do D. A. R. G. Cárceres', 'Ensinu Sekundariu', 'Dili', '2004-07-25', 'Laclo', '77275753', '-'),
(64, 7, 56, '2019', '16', '11', '27', '16', '8', '24', '', '', '', 'Celio De Deus F.L.Sousa Silva', 'Ensinu Baziku', 'Hospital de Manatoto', '2004-06-12', 'Manatuto', '77427236', '-', 'Joaninha Marçal Soares Lay', 'Ensinu Baziku', 'Saulido Manatoto,1 de Junho de 2004', '0000-00-00', 'Manatuto', '77872909', '-'),
(65, 7, 55, '2019', '9', '2', '11', '8', '2', '10', '', '', '', 'Frederico Laurentino B. Viegas', 'Ensinu Sekundariu', 'Aiteas Manatoto', '2004-07-21', 'Laleia', '75937223', '-', 'Úrsula Maria Filomena Viegas', 'Ensinu Sekundariu', 'Umrentau Laleia', '2003-03-20', 'Laleia', '77332618/75960223', '-'),
(66, 7, 52, '2019', '10', '8', '18', '10', '8', '18', '', '', '', 'Fladimar Oliveira Moruc', 'Ensinu Baziku', 'Fatuco', '2005-03-16', 'Barique', '75633066', '-', 'Dina Maria Alzira dos Reis da Costa', 'Ensinu Baziku', 'Dili', '2005-08-09', 'Barique', '76491497', '-'),
(67, 7, 57, '2019', '15', '6', '21', '10', '6', '16', '', '', '', 'Agapito da Silva Luluc', 'Ensinu Baziku', 'Manufahi', '2003-09-09', 'Soibada', '73800726', '-', 'Zemarsia Maria Lucinda Soares Nunes', 'Ensinu Baziku', 'Soibada', '2006-03-30', 'Soibada', '76025910', '-'),
(68, 7, 54, '2019', '14', '8', '22', '14', '6', '20', '', '', '', 'Franscisco Soares', 'Ensinu Baziku', 'Manelima', '2002-09-29', 'Laclubar', '75823651', '-', 'Natacia Joaozinha Gloria de Araujo', 'Ensinu Sekundariu', 'Torilalan Lclubar', '2004-03-14', 'Laclubar', '75852144', '-'),
(69, 14, 87, '2019', '19', '8', '27', '16', '8', '24', '', '', '', 'Tito Jenesio Teme', 'Ensinu Sekundariu', 'Bidau Santa Ana', '2002-01-23', 'Pante Macassar', '76178091/75162064', '-', 'Rosalia Naz', 'Ensinu Sekundariu', 'Nemun', '2002-02-15', 'Pante Macassar', '76495625/75703317', '-'),
(70, 14, 86, '2019', '16', '14', '30', '14', '13', '27', '', '', '', 'Osorio Bobo Caet', 'Ensinu Baziku', 'Quiubicelo', '2005-07-29', 'Oesilo', '75569054', '-', 'Agusta Maria de Fatima Ace', 'Ensinu Sekundariu', 'Pune', '2002-08-28', 'Oesilo', '76236144', '-'),
(71, 14, 85, '2019', '15', '12', '27', '15', '12', '27', '', '', '', 'Paulo Patricio Name', 'Ensinu Baziku', 'Baocnana', '2007-06-29', 'Nitibe', '75237476', '-', 'Linda Maria Seno', 'Ensinu Sekundariu', 'Cavana', '2002-01-10', 'Nitibe', '75765993', '-'),
(72, 14, 88, '2019', '10', '3', '13', '9', '2', '11', '', '', '', 'Benedito Carlos Reinaldo A. Molo', 'Ensinu Baziku', 'Passabe', '2006-08-09', 'Passabe', '75668394', '-', 'Nandria Aqueda Silva', 'Ensinu Sekundariu', 'Malelat', '2002-03-09', 'Passabe', '75251706/77335723', '-'),
(73, 11, 71, '2019', '15', '11', '26', '14', '9', '23', '', '', '', 'Zeferino Antonio da Cruz Marques', 'Ensinu Sekundariu', 'Uma-Tolu', '2002-06-15', 'Lacluta', '75717153', '-', 'Feliana da Cruz', 'Ensinu Sekundariu', 'Dilor', '2002-07-25', 'Lacluta', '76859275', '-'),
(74, 11, 75, '2019', '17', '5', '22', '16', '4', '20', '', '', '', 'Tito da Costa Rangel', 'Ensinu Sekundariu', 'Wamori,Viquque', '2002-04-18', 'Viqueque', '77303664/75357472', '-', 'Abriana Maida', 'Ensinu Sekundariu', 'Viqueque', '2003-04-10', 'Viqueque', '76638882', '-'),
(75, 11, 73, '2019', '12', '6', '18', '12', '6', '18', '', '', '', 'Pascual Fernandes', 'Ensinu Sekundariu', 'Uatulari,5 de Dezembro de 2001', '2001-12-05', 'Uatolari', '75850478', '-', 'Jelita Maia Amaral do Reis', 'Ensinu Baziku', 'Uatulari', '2004-05-06', 'Uatolari', '76549167', '-'),
(76, 11, 74, '2019', '24', '4', '28', '23', '4', '27', '', '', '', 'Aderito Faria Da Silva Pinto', 'Ensinu Sekundariu', 'Uani uma', '2001-09-04', 'Uato carabau', '75273577', '-', 'Angelina Teresinha de Fatima Sales', 'Ensinu Sekundariu', 'Uatucarbau,25 de Fevereiro de 2002', '2002-02-25', 'Uato carabau', '75790722', '-'),
(77, 11, 72, '2019', '25', '11', '36', '24', '9', '33', '', '', '', 'Eulito Afonso Ferreira da Silva', 'Ensinu Baziku', 'Laritame,Ossu', '2005-09-16', 'Ossu', '77261730/75585929', '-', 'Feliciana Sequeirra Sarmento', 'Ensinu Baziku', 'Builo,ossu', '2003-02-20', 'Ossu', '76733933', '-'),
(78, 1, 89, '2019', '7', '11', '18', '6', '11', '17', '', '', '', 'Yabel Nenosono', 'Ensinu Baziku', 'Dili', '2006-07-11', 'Dili', '-', '-', 'Isabel dos Santos Fernandes', 'Ensinu Baziku', 'Beli, Viqueque', '2003-08-16', 'Dili', '3313024', 'almatimorleste@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_member`
--

CREATE TABLE `apftl_member` (
  `id` int(11) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `f_name` varchar(128) NOT NULL,
  `l_name` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `birth_p` varchar(128) NOT NULL,
  `birth_d` date NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone_n` varchar(128) NOT NULL,
  `periodu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `apftl_menu`
--

CREATE TABLE `apftl_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_menu`
--

INSERT INTO `apftl_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'Information'),
(3, 'Elisaun'),
(4, 'Informasaun');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_partner`
--

CREATE TABLE `apftl_partner` (
  `id` int(11) NOT NULL,
  `partner` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_partner`
--

INSERT INTO `apftl_partner` (`id`, `partner`) VALUES
(2, 'Partner 1'),
(3, 'Partner 2'),
(4, 'Partner 3');

-- --------------------------------------------------------

--
-- Table structure for table `apftl_program`
--

CREATE TABLE `apftl_program` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_activity` int(11) NOT NULL,
  `id_partner` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_distric` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  `objective` varchar(128) NOT NULL,
  `participant_m` int(11) NOT NULL,
  `participant_f` int(11) NOT NULL,
  `participant_sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_program`
--

INSERT INTO `apftl_program` (`id`, `id_category`, `id_activity`, `id_partner`, `date`, `id_distric`, `description`, `objective`, `participant_m`, `participant_f`, `participant_sum`) VALUES
(4, 3, 3, 2, '2019-06-04', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 12, 24),
(5, 3, 3, 2, '2019-06-04', 2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 20, 32),
(6, 3, 3, 2, '2019-06-04', 3, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 20, 33, 53),
(7, 3, 4, 3, '2019-06-05', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 10, 12, 22),
(8, 3, 4, 3, '2019-06-05', 9, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 100, 100, 200),
(9, 3, 4, 3, '2019-06-06', 7, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 50, 75, 125),
(10, 4, 5, 4, '2019-06-04', 14, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 99, 111),
(11, 4, 5, 4, '2019-06-07', 8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 12, 100, 112),
(12, 4, 5, 4, '2019-06-07', 11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 12, 180, 192),
(13, 5, 6, 3, '2019-06-10', 5, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 120, 30, 150),
(14, 5, 6, 3, '2019-06-10', 6, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 77, 90, 167),
(15, 5, 6, 3, '2019-06-11', 10, 'ttttttttttttttttt', 'tttttttttttttttttttttttttt', 90, 88, 178),
(16, 6, 7, 3, '2019-06-04', 3, 'ttttttttttttttttt', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 170, 20, 190),
(17, 6, 7, 3, '2019-06-11', 8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 56, 70, 126),
(18, 6, 7, 3, '2019-06-14', 10, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tttttttttttttttttttttttttt', 70, 77, 147),
(19, 4, 7, 4, '2019-06-07', 8, 'ssssssssssssssssssssssssssssss', 'sssssssssssssssssssss', 50, 50, 100),
(20, 4, 5, 2, '2019-06-08', 2, 'cccccccccccccccccccccccccc', 'cccccccccccccccccccccccc', 100, 100, 200),
(21, 3, 4, 2, '2019-06-14', 1, 'gggggggggggggggggggggggggggg', 'hhhhhhhhhhhhhhhhhh', 100, 50, 150);

-- --------------------------------------------------------

--
-- Table structure for table `apftl_submenu`
--

CREATE TABLE `apftl_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apftl_submenu`
--

INSERT INTO `apftl_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'Rezultadu Elisaun', 'election', 'fas fa-fw fa-chart-pie', 1),
(6, 1, 'Program Management', 'apftl_program', 'fas fa-fw fa-clipboard', 1),
(7, 2, 'Program APFTL', 'admin', 'fas fa-fw fa-clipboard', 1),
(8, 1, 'Member Management', 'apftl_member', 'fas fa-fw fa-users', 1),
(9, 1, 'Election Management', 'apftl_election', 'fas fa-fw fa-archive', 1),
(10, 2, 'Member APFTL', 'admin', 'fas fa-fw fa-users', 1),
(11, 3, 'Maneja Dadus Elisaun', 'apftl_election', 'fas fa-fw fa-archive', 1),
(12, 4, 'Registante', 'election_register', 'fas fa-fw fa-user-edit', 1),
(13, 4, 'Selesionadu', 'election_selected', 'fas fa-fw fa-user-check', 1),
(14, 4, 'Candidatura', 'election_candidate', 'fas fa-fw fa-tag', 1);

-- --------------------------------------------------------

--
-- Table structure for table `distric`
--

CREATE TABLE `distric` (
  `id` int(11) NOT NULL,
  `distric` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `distric`
--

INSERT INTO `distric` (`id`, `distric`) VALUES
(1, 'Dili'),
(2, 'Cova-lima'),
(3, 'Baucau'),
(5, 'Bobonaro'),
(6, 'Liquiçá'),
(7, 'Manatuto'),
(8, 'Lautém'),
(9, 'Ainaro'),
(10, 'Manufahi'),
(11, 'Viqueque'),
(12, 'Ermera'),
(13, 'Aileu'),
(14, 'Raeoa-Oecussi');

-- --------------------------------------------------------

--
-- Table structure for table `member_f_edu`
--

CREATE TABLE `member_f_edu` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `edu` varchar(128) NOT NULL,
  `name_edu` varchar(128) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_lingua`
--

CREATE TABLE `member_lingua` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `lingua` varchar(128) NOT NULL,
  `reading` varchar(128) NOT NULL,
  `speaking` varchar(128) NOT NULL,
  `writing` varchar(128) NOT NULL,
  `listening` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_n_edu`
--

CREATE TABLE `member_n_edu` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `des_edu` varchar(128) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_org_exp`
--

CREATE TABLE `member_org_exp` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `org_exp` varchar(128) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_work_exp`
--

CREATE TABLE `member_work_exp` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `work_exp` varchar(128) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subdistric`
--

CREATE TABLE `subdistric` (
  `id` int(11) NOT NULL,
  `id_distric` int(11) NOT NULL,
  `subdistric` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subdistric`
--

INSERT INTO `subdistric` (`id`, `id_distric`, `subdistric`) VALUES
(13, 1, 'Atauro'),
(25, 1, 'Cristo Rei\r\n'),
(26, 1, 'Dom Aleixo'),
(27, 1, 'Metinaro'),
(28, 1, 'Nain Feto'),
(29, 1, 'Vera Cruz'),
(30, 2, 'Fatululique'),
(31, 2, 'Fatumean'),
(32, 2, 'Fuorém'),
(33, 2, 'Mape-Zumulai'),
(34, 2, 'Maucatar\r\n'),
(35, 2, 'Suai'),
(36, 2, 'Tilomar'),
(37, 3, 'Baucau'),
(38, 3, 'Baguia '),
(39, 3, 'Laga '),
(40, 3, 'Quelicai '),
(41, 3, 'Vemasse '),
(42, 3, 'Venilale'),
(43, 5, 'Atabae'),
(44, 5, 'Balibó'),
(45, 5, 'Bobonaro'),
(46, 5, 'Cailaco'),
(47, 5, 'Lolotoi\r\n'),
(48, 5, 'Maliana'),
(49, 6, 'Bazartete'),
(50, 6, 'Liquiçá'),
(51, 6, 'Maubara'),
(52, 7, 'Barique-Natarbora'),
(53, 7, 'Laclo'),
(54, 7, 'Laclubar'),
(55, 7, 'Laleia'),
(56, 7, 'Manatuto'),
(57, 7, 'Soibada'),
(58, 8, 'Iliomar'),
(59, 8, 'Lautém'),
(60, 8, 'Lospalos'),
(61, 8, 'Luro'),
(62, 8, 'Tutuala'),
(63, 9, 'Ainaro'),
(64, 9, 'Hatudo\r\n'),
(65, 9, 'Hatu-Builico'),
(66, 9, 'Maubisse'),
(67, 10, 'Alas'),
(68, 10, 'Fatuberliu'),
(69, 10, 'Same'),
(70, 10, 'Turiscai'),
(71, 11, 'Lacluta'),
(72, 11, 'Ossu'),
(73, 11, 'Uatolari'),
(74, 11, 'Uato Carabau'),
(75, 11, 'Viqueque'),
(76, 12, 'Atsabe'),
(77, 12, 'Ermera'),
(78, 12, 'Hatólia'),
(79, 12, 'Letefoho'),
(80, 12, 'Railaco'),
(81, 13, 'Aileu'),
(82, 13, 'Laulara'),
(83, 13, 'Lequidoe'),
(84, 13, 'Remexio'),
(85, 14, 'Nitibe'),
(86, 14, 'Oesilo'),
(87, 14, 'Pante Macassar'),
(88, 14, 'Passabe'),
(89, 1, 'Ema ho defisiente');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(128) NOT NULL,
  `l_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Bemis', 'Huntala', 'bmz.ashura@gmail.com', 'default.jpg', '$2y$10$ghukluAjlltUjQA5Jox5WuiiowNF1pEkHrEXh2QZbHJlck1KvtV26', 2, 1, 1555604180),
(3, 'Luchy', 'Da Costa', 'luchy.tala@gmail.com', 'default.jpg', '$2y$10$bfobOWqx09d4W6ErtOti1eXh8OqeWGxhgEmqXDVH9VG8ReU2rHTzm', 1, 1, 1555605034),
(4, 'Elisaun', 'PFN', 'info@apftl.org', 'default.jpg', '$2y$10$bMbRLfUEUQW/I5q7baMNdu4aEENekRouZntGqWfVVgBN8BqpfZTpm', 3, 1, 1563085737);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Operator'),
(3, 'Election');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_control`
--
ALTER TABLE `access_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `access_menu`
--
ALTER TABLE `access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_activity`
--
ALTER TABLE `apftl_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_control`
--
ALTER TABLE `apftl_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_c_program`
--
ALTER TABLE `apftl_c_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_election`
--
ALTER TABLE `apftl_election`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_distric` (`id_distric`),
  ADD KEY `id_subdistric` (`id_subdistric`);

--
-- Indexes for table `apftl_member`
--
ALTER TABLE `apftl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_menu`
--
ALTER TABLE `apftl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_partner`
--
ALTER TABLE `apftl_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apftl_program`
--
ALTER TABLE `apftl_program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_partner` (`id_partner`),
  ADD KEY `id_distric` (`id_distric`),
  ADD KEY `activity` (`id_activity`);

--
-- Indexes for table `apftl_submenu`
--
ALTER TABLE `apftl_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distric`
--
ALTER TABLE `distric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_f_edu`
--
ALTER TABLE `member_f_edu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member_lingua`
--
ALTER TABLE `member_lingua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member_n_edu`
--
ALTER TABLE `member_n_edu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member_org_exp`
--
ALTER TABLE `member_org_exp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member_work_exp`
--
ALTER TABLE `member_work_exp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `subdistric`
--
ALTER TABLE `subdistric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_control`
--
ALTER TABLE `access_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `access_menu`
--
ALTER TABLE `access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `apftl_activity`
--
ALTER TABLE `apftl_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `apftl_control`
--
ALTER TABLE `apftl_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `apftl_c_program`
--
ALTER TABLE `apftl_c_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apftl_election`
--
ALTER TABLE `apftl_election`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `apftl_member`
--
ALTER TABLE `apftl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apftl_menu`
--
ALTER TABLE `apftl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apftl_partner`
--
ALTER TABLE `apftl_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apftl_program`
--
ALTER TABLE `apftl_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `apftl_submenu`
--
ALTER TABLE `apftl_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `distric`
--
ALTER TABLE `distric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member_f_edu`
--
ALTER TABLE `member_f_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_lingua`
--
ALTER TABLE `member_lingua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_n_edu`
--
ALTER TABLE `member_n_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_org_exp`
--
ALTER TABLE `member_org_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_work_exp`
--
ALTER TABLE `member_work_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subdistric`
--
ALTER TABLE `subdistric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apftl_election`
--
ALTER TABLE `apftl_election`
  ADD CONSTRAINT `apftl_election_ibfk_1` FOREIGN KEY (`id_distric`) REFERENCES `distric` (`id`),
  ADD CONSTRAINT `apftl_election_ibfk_2` FOREIGN KEY (`id_subdistric`) REFERENCES `subdistric` (`id`);

--
-- Constraints for table `apftl_program`
--
ALTER TABLE `apftl_program`
  ADD CONSTRAINT `apftl_program_ibfk_1` FOREIGN KEY (`id_partner`) REFERENCES `apftl_partner` (`id`),
  ADD CONSTRAINT `apftl_program_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `apftl_c_program` (`id`),
  ADD CONSTRAINT `apftl_program_ibfk_3` FOREIGN KEY (`id_distric`) REFERENCES `distric` (`id`),
  ADD CONSTRAINT `apftl_program_ibfk_4` FOREIGN KEY (`id_activity`) REFERENCES `apftl_activity` (`id`);

--
-- Constraints for table `member_f_edu`
--
ALTER TABLE `member_f_edu`
  ADD CONSTRAINT `member_f_edu_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `apftl_member` (`id`);

--
-- Constraints for table `member_lingua`
--
ALTER TABLE `member_lingua`
  ADD CONSTRAINT `member_lingua_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `apftl_member` (`id`);

--
-- Constraints for table `member_n_edu`
--
ALTER TABLE `member_n_edu`
  ADD CONSTRAINT `member_n_edu_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `apftl_member` (`id`);

--
-- Constraints for table `member_org_exp`
--
ALTER TABLE `member_org_exp`
  ADD CONSTRAINT `member_org_exp_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `apftl_member` (`id`);

--
-- Constraints for table `member_work_exp`
--
ALTER TABLE `member_work_exp`
  ADD CONSTRAINT `member_work_exp_ibfk_1` FOREIGN KEY (`id`) REFERENCES `apftl_member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
