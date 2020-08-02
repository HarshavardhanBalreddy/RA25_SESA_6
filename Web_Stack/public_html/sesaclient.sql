-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 10:53 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sesaclient`
--

-- --------------------------------------------------------

--
-- Table structure for table `accidentrecord`
--

CREATE TABLE `accidentrecord` (
  `DeviceID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Icon_vehicle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Owner_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `VehicleID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Severity` int(11) NOT NULL,
  `Timestamp_date` date NOT NULL,
  `Timestamp_time` time NOT NULL,
  `Department_contacted` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Location_word` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `Pic` int(11) NOT NULL,
  `SOS` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_ID` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_ID` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_ID` varchar(203) COLLATE utf8_unicode_ci NOT NULL,
  `Update_report` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY(`DeviceID`, `Timestamp_date`, `Timestamp_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accidentrecord`
--

INSERT INTO `accidentrecord` (`DeviceID`, `Icon_vehicle`, `Owner_name`, `VehicleID`, `Severity`, `Timestamp_date`, `Timestamp_time`, `Department_contacted`, `Location`, `Location_word`, `Pic`, `SOS`, `H_ID`, `P_ID`, `F_ID`, `Update_report`, `Status`) VALUES
('D20202', 'bus', 'Leroy  Evans', 'AP30 0403', 2, '2020-07-15', '15:09:00', 'HP', '12.344533,17.134782', 'jjfsfs', 0, '0', 'H5173251', 'P5173251', 'F', '2020-07-15 15:09', 3),
('D20203', 'ambulance', 'Yasin  Alexander', 'TN06 4766', 2, '2020-07-15', '15:11:00', 'HPF', '12.326758,17.234324', 'gfasf', 1, '0', 'H5173251', 'P5173252', 'F5172472', '2020-07-15 15:11', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fstation`
--

CREATE TABLE `fstation` (
  `F_DepartmentID` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Name` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_ShortName` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Address` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_ShortAddress` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Lon` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Lat` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Location` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Phoneno` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Website` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Category` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `F_Service` varchar(115) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fstation`
--

INSERT INTO `fstation` (`F_DepartmentID`, `F_Name`, `F_ShortName`, `F_Address`, `F_ShortAddress`, `F_Lon`, `F_Lat`, `F_Location`, `F_Phoneno`, `F_Website`, `F_Category`, `F_Service`) VALUES
('F', '-', '-', '-', '-', '-', '-', '-,-', '-', '-', '-', '-'),
('F5173301', ' East Peta Fire Office', ' East Peta Fire Office', ' Vivekanadanagar, East Peta, Madanapalle, Andhra Pradesh 517330', ' East Peta, Madanapalle, AP', '13.548928', '78.507387', '13.548928,78.507387', '8571222101', 'http://fireservices.ap.gov.in/', 'Control Room', 'General,Control Room'),
('F5172472', 'Punganur Fire Station', 'Punganur Fire Station', 'Bhagat Singh Colony, Rajuluru, Thopu Matam, Punganur, Andhra Pradesh 517247', 'Thopu Matam, Punganur, AP', '13.385812', '78.581383', '13.385812,78.581383', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F5174253', 'Kuppam Fire Station', 'Kuppam Fire Station', 'N Palace Rd, Kuppam, Andhra Pradesh 517425', ' Kuppam, AP', '12.750806', '78.340071', '12.750806,78.340071', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F5174084', 'Fire Station - Palamaner', 'FS - Palamaner', 'Chittoor, Andhra Pradesh 517408', ' Palamaner, AP', '13.188017', '78.745377', '13.188017,78.745377', '8579252399', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F5175045', 'A.P State Disaster Response & Fire Service', 'A.P State Disaster Response & Fire Service', 'Tirumala, Tirupathi, Andhra Pradesh 517504', 'Tirumala, Tirupati, AP', '13.685303', '79.351411', '13.685303,79.351411', '8374275950', 'http://fireservices.ap.gov.in/', 'Special Service', 'Disaster Management,Response ,Fire Engine'),
('F5175016', 'A.P. State Emergency Service And Fire Station', 'A.P. State Emergency Service', 'Indira Nagar, Vesyalamma Gudivadhi, Balaji Colony, Tirupati, Andhra Pradesh 517501', 'Balaji Colony, Tirupati, AP', '13.629454', '79.411627', '13.629454,79.411627', '8772260101', 'http://fireservices.ap.gov.in/', 'special Service', 'Disaster Management,Response ,Fire Engine'),
('F5170017', 'Chittoor Fire Station', 'Chittoor Fire Station', 'Mittoor, Chittoor, Andhra Pradesh 517001', ' Mittoor, Chittoor, AP', '13.210259', '79.100051', '13.210259,79.100051', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F5175888', 'Andhra Pradesh Fire Engine Service, Kalamanaidupeta', 'A.P. Fire Engine Service', 'Sathyavadu, Andhra Pradesh 517588', ' Sathyavedu, AP', '13.442264', '79.962789', '13.442264,79.962789', '8576227099', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F5176469', 'Sri City Fire Station', 'Sri City Fire Station', '7580, Central Expy, Sri City, Andhra Pradesh 517646', 'Sri City, AP', '13.534271', '79.996408', '13.534271,79.996408', '9394481101', 'http://www.sricity.org/', 'General', 'General,Fire Engine,Recovery,Response'),
('F52412610', 'Naidupeta Fire Station', 'Naidupeta Fire Station', 'Naidupeta, Andhra Pradesh 524126', ' Naidupeta, AP', '13.896618', '79.884851', '13.896618,79.884851', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F52400111', 'Nellore Fire Station', 'Nellore Fire Station', 'Railway Feeders Rd,Kapatipalem, Santhapet, Nellore, Andhra Pradesh 524001', ' Santhapet, Nellore, AP', '14.461026', '79.987863', '14.461026,79.987863', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F52310512', 'AP Fire station, kandukur', 'kandukur Fire station', 'NTR Nagar Rd, NTR Nagar, Kandukur, Andhra Pradesh 523105', ' NTR Nagar, Kandukur, AP', '15.211441', '79.897691', '15.211441,79.897691', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F52300113', 'Fire Station Ongole', 'Fire Station Ongole', 'Islampet, Gopal Nagar, Ongole, Andhra Pradesh 523001', ' Gopal Nagar, Ongole, AP', '15.509252', '80.047417', '15.509252,80.047417', '8592232299', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F51511014', 'Penukonda Fire Station', 'Penukonda Fire Station', 'Chennekothapalli Rd, Penukonda, Andhra Pradesh 515110', ' Penukonda, AP', '14.077532', '77.600065', '14.077532,77.600065', '8374275950', 'http://www.appolice.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F52118515', 'Nandigama Fire Station', 'Nandigama Fire Station', 'NH65, Nandigama, Andhra Pradesh 521185', ' Nandigama, AP', '16.762826', '80.291861', '16.762826,80.291861', '8678275400', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F52000216', 'Vijayawada Fire Station', 'Vijayawada Fire Station', 'MG Rd, opp Police Control Room, Governor Peta, Vijayawada, Andhra Pradesh 520002', ' Governor Peta, Vijayawada, AP', '16.510795', '80.618096', '16.510795,80.618096', '8662577699', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F53400618', 'Eluru Fire station', 'Eluru Fire station', ' Ameenapet, Eluru, Andhra Pradesh 534006', ' Ameenapet, Eluru, AP', '16.710745', '81.093865', '16.710745,81.093865', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F53410119', ' Tadepalligudem Fire Station', ' Tadepalligudem Fire Station', 'Subbaraopet, Tadepalligudem, Andhra Pradesh 534101', ' Subbaraopet, Tadepalligudem, AP', '16.814647', '81.526651', '16.814647,81.526651', '8818221299', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F53310120', 'Rajahmundry Fire Station', 'Rajahmundry Fire Station', 'Main Road, beside Two Town, Rajahmundry, Andhra Pradesh 533101', ' Rajahmundry, AP', '16.991173', '81.777439', '16.991173,81.777439', '8832444101', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F53322121', 'Amalapuram FIRE STATION', 'Amalapuram FIRE STATION', 'Amalapuram, Andhra Pradesh 533221', ' Amalapuram, AP', '16.589983', '82.009464', '16.589983,82.009464', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F51850122', 'AP Fire Station', 'AP Fire Station', 'Nagula Katta, Nandyala, Andhra Pradesh 518501', ' Nagula Katta, Nandyala, AP', '15.477064', '78.486845', '15.477064,78.486845', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F51836023', 'Yemmiganur FIRE STATION', 'Yemmiganur FIRE STATION', 'Yemmiganur, Andhra Pradesh 518360', '  Yemmiganur, AP', '15.755646', '77.458092', '15.755646,77.458092', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F51643424', 'Fire Station Jammalamadugu', 'Fire Station Jammalamadugu', 'Jammalamadugu, Andhra Pradesh 516434', ' Jammalamadugu, AP', '14.836753', '78.381992', '14.836753,78.381992', '8560270099', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F51559125', 'Kadiri Fire station', 'Kadiri Fire station', 'NH 205, Adapala Street, Kadiri, Andhra Pradesh 515591', ' Adapala Street, Kadiri, AP', '14.118109', '78.157491', '14.118109,78.157491', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F51611526', 'Fire Station Rajampet', 'Fire Station Rajampet', 'Rajampet, Andhra Pradesh 516115', ' Rajampet, AP', '14.199825', '79.156472', '14.199825,79.156472', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F52431227', 'maripadu fire station', 'maripadu fire station', 'Nellore, Andhra Pradesh 524312', ' Marripadu, AP', '14.690627', '79.359923', '14.690627,79.359923', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F52430428', 'Atmakur Fire Station', 'Atmakur Fire Station', 'Nellore Palem, Andhra Pradesh 524304', ' Nellore Palem, AP', '14.642382', '79.618791', '14.642382,79.618791', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F51758329', 'Sriram Nagar Fire Station', 'Sriram Nagar Fire Station', 'Nagaram Rd, Sriram Nagar, Andhra Pradesh 517583', ' Sriram Nagar, AP', '13.436261', '79.539311', '13.436261,79.539311', '8374275950', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response'),
('F51610130', 'Kodur Fire Station', 'Kodur Fire Station', 'Ambedkar Nagar, Koduru, Andhra Pradesh 516101', ' Koduru, AP', '13.954282', '79.342077', '13.954282,79.342077', '8566244099', 'http://fireservices.ap.gov.in/', 'General', 'General,Fire Engine,Recovery,Response');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalrecord`
--

CREATE TABLE `hospitalrecord` (
  `H_DepartmentID` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Name` varchar(215) COLLATE utf8_unicode_ci NOT NULL,
  `H_ShortName` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Address` varchar(215) COLLATE utf8_unicode_ci NOT NULL,
  `H_ShortAddress` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Phoneno` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Lon` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Lat` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Location` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Website` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Category` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `H_Service` varchar(115) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospitalrecord`
--

INSERT INTO `hospitalrecord` (`H_DepartmentID`, `H_Name`, `H_ShortName`, `H_Address`, `H_ShortAddress`, `H_Phoneno`, `H_Lon`, `H_Lat`, `H_Location`, `H_Website`, `H_Category`, `H_Service`) VALUES
('H', '-', '-', '-', '-', '-', '-', '-', '-,-', '-', '-', '-'),
('H5173251', 'Government Hospital', 'Government Hospital', 'Patel Rd, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '8571220599', '13.556455', '78.501094', '13.556455,78.501094', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine'),
('H5173252', 'Care ICU Emergency & Diabetic Care hospital', 'Care ICU Emergency &  Care hospital', 'Marpuri Steet Rd, Marpuri Street, Madanapalle, Andhra Pradesh 517325', 'Madanapalle, AP', '8571225559', '13.557917', '78.501289', '13.557917,78.501289', 'https://care-icu-hospital.business.site/', 'ICU,Emergency', 'Emergency,Diabetic'),
('H5173253', 'Sri Vasavi hospital', 'Sri Vasavi hospital', 'Marpuri Steet Rd, Marpuri Street, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '9550141779', '13.55791', '78.500405', '13.55791,78.500405', 'https://sri-vasavi-hospital.business.site/', 'General', ' General Medicine'),
('H5173254', 'Medlife Hospital', 'Medlife Hospital', 'Theaters Rd, Marpuri Street, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '8571220599', '13.558373', '78.501678', '13.558373,78.501678', 'http://hmfw.ap.gov.in/', 'General ', ' General Medicine'),
('H5173255', 'Viswa Orthopaedic Hospital', 'Viswa Orthopaedic Hospital', 'Patel Rd, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '8571221646', '13.55752', '78.499805', '13.55752,78.499805', 'http://hmfw.ap.gov.in/', 'Orthopedic', 'Orthopedic'),
('H5173256', 'Sanjeeva Rayudu hospital', 'Sanjeeva Rayudu hospital', 'Theaters Rd, Marpuri Street, Madanapalle, Andhra Pradesh 517325', ' Marpuri Street, Madanapalle, AP', '  984 40744', '13.558225', '78.500977', '13.558225,78.500977', 'http://hmfw.ap.gov.in/', 'General ', ' General Medicine'),
('H5173257', 'Sri Sai Hospital', 'Sri Sai Hospital', 'Patel Rd, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '9849464617', '13.557467', '78.500014', '13.557467,78.500014', 'http://hmfw.ap.gov.in/', 'General,Dentist', ' General Medicine,dentist'),
('H5173258', 'sunshine hospital', 'sunshine hospital', 'Society Colony Main Rd, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '7702747192', '13.556632', '78.496463', '13.556632,78.496463', 'http://hmfw.ap.gov.in/', 'General', 'General Medicine'),
('H5173259', 'Shirdi sai hospital', 'Shirdi sai hospital', '2, Society Colony Main Rd, Kuravanka, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '8571220599', '13.560138', '78.497399', '13.560138,78.497399', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,ENT'),
('H51732510', 'Nemaly Facial Surgical and Multispeciality Dental Center', 'Nemaly  Surgical and Multispeciality ', 'II-259 B1/A, 2ND MAIN, 1st Cross Road, Society Colony, Madanapalle, Andhra Pradesh 517325', 'Society Colony, Madanapalle, AP', '8571225086', '13.56007', '78.496588', '13.56007,78.496588', 'http://hmfw.ap.gov.in/', 'Multi Specality', 'Facial and Dental Surgery'),
('H51732511', 'Santharam Hospital', 'Santharam Hospital', 'Society Colony, Madanapalle, Andhra Pradesh 517325', ' Society Colony, Madanapalle, AP', '8571222166', '13.560173', '78.495181', '13.560173,78.495181', 'http://hmfw.ap.gov.in/', 'Multi Specality', ' General Medicine,Emergency'),
('H51732512', 'Mother & Child Hospital', 'Mother & Child Hospital', 'II/272-A4-1, Society Colony Main Rd, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '8571220599', '13.559848', '78.496166', '13.559848,78.496166', 'http://hmfw.ap.gov.in/', 'General ', ' General Medicine'),
('H51732513', 'Suraksha Hospital', 'Suraksha Hospital', 'Door No.: 2, 259, Society Colony Main Rd, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '8571220345', '13.560008', '78.497345', '13.560008,78.497345', 'http://hmfw.ap.gov.in/', 'Multi Specality', ' General Medicine'),
('H51732514', 'Chandra Sekhar Scanning Centre', 'Chandra Sekhar Scanning Centre', 'Unnamed Road, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '8571220599', '13.558006', '78.49983', '13.558006,78.49983', 'http://hmfw.ap.gov.in/', 'Clinic', 'Scanning,X-ray'),
('H51732515', 'Sri Maruti Health Home', 'Sri Maruti Health Home', 'Co-operative Colony, Madanapalle, Andhra Pradesh 517325', 'Madanapalle, AP', '8571220599', '13.557109', '78.49601', '13.557109,78.49601', 'http://hmfw.ap.gov.in/', 'Clinic', ' General Medicine'),
('H51732516', 'Women Clinic', 'Women Clinic', 'P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '8632340473', '13.556907', '78.495657', '13.556907,78.495657', 'http://hmfw.ap.gov.in/', 'Clinic', ' General Medicine'),
('H51732517', 'NAIK HOSPITAL', 'NAIK HOSPITAL', 'Society Colony, Reddys Colony Extention, Andhra Pradesh 517325', ' Society Colony, Madanapalle, AP', '8632340473', '13.564205', '78.499046', '13.564205,78.499046', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,EYE'),
('H51732518', 'G S R HOSPITAL', 'G S R HOSPITAL', 'Society Colony, Reddys Colony Extention, Andhra Pradesh 517325', ' Reddys Colony Extention, AP', '8632340473', '13.564291', '78.499145', '13.564291,78.499145', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732519', 'SRI KALYAN (PT) & GENERAL HOSPITAL', 'SRI KALYAN (PT) & GENERAL HOSPITAL', '# 2-250-F, Opp. Sangam function hall, Kadiri road, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '9550684867', '13.563861', '78.499094', '13.563861,78.499094', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732520', 'Thippareddy Hospital', 'Thippareddy Hospital', 'RRN Colony, Madanapalle, Andhra Pradesh 517325', ' RRN Colony, Madanapalle, AP', '8632340473', '13.558617', '78.508432', '13.558617,78.508432', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732521', 'Desai Hospital', 'Desai Hospital', 'Desai Hospital, RRN Colony, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '8632340473', '13.558969', '78.50843', '13.558969,78.50843', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732522', 'Balaji Multi Speciality Hospital', 'Balaji Multi Speciality Hospital', 'Reddappa Naidu Colony Rd, RRN Colony, Madanapalle, Andhra Pradesh 517325', ' RRN Colony, Madanapalle, AP', '8632340473', '13.557944', '78.509663', '13.557944,78.509663', 'http://hmfw.ap.gov.in/', 'Multi Specality', ' General Medicine,Emergency'),
('H51732523', 'Gupta Hospital', 'Gupta Hospital', '15/284, Burma St, opp. Sai Baba Temple, Rama Gopal Naidu Colony, Madanapalle, Andhra Pradesh 517325', ' Rama Gopal Naidu Colony, Madanapalle, AP', '8571231003', '13.551774', '78.508552', '13.551774,78.508552', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732524', 'Gouthami Hospital', 'Gouthami Hospital', 'Rama Gopal Naidu Colony, Madanapalle, Andhra Pradesh 517325', ' Rama Gopal Naidu Colony, Madanapalle, AP', '8632340473', '13.554248', '78.509298', '13.554248,78.509298', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732525', 'Gauthami Skin Hospital', 'Gauthami Skin Hospital', 'Burma St, Rama Gopal Naidu Colony, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '8632340473', '13.554587', '78.508915', '13.554587,78.508915', 'http://hmfw.ap.gov.in/', 'General,Skin', 'General Medicine ,Skin'),
('H51732526', 'M S R orthopaedic hospital', 'M S R orthopaedic hospital', 'Rama Gopal Naidu Colony, Madanapalle, Andhra Pradesh 517325', ' Rama Gopal Naidu Colony, Madanapalle, AP', '8571223222', '13.553762', '78.507087', '13.553762,78.507087', 'http://hmfw.ap.gov.in/', 'Orthopedic', 'Orthopedic'),
('H51732527', 'Kathasagaram Hospital', 'Kathasagaram Hospital', 'Rama Gopal Naidu Colony, Madanapalle, Andhra Pradesh 517325', ' Rama Gopal Naidu Colony, Madanapalle, AP', '9493948794', '13.554965', '78.509105', '13.554965,78.509105', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732528', 'Chandramohan Nursing Home', 'Chandramohan Nursing Home', 'Besides Hdfc Bank, 14/2a, CTM Rd, Rama Gopal Naidu Colony, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '9397035777', '13.554585', '78.507362', '13.554585,78.507362', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732529', 'Emergency Hospital', 'Emergency Hospital', 'Madanapalli Rtc Bus Stand, Rama Gopal Naidu Colony, Madanapalle, Andhra Pradesh 517325', ' Rama Gopal Naidu Colony, Madanapalle, AP', '8632340473', '13.55543', '78.508688', '13.55543,78.508688', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732530', 'Prasad ENT Hospital', 'Prasad ENT Hospital', '15-13-3, swimming pool road, Nuthi Radha Krishnaiah Nagar Rd, Rama Gopal Naidu Colony, Madanapalle, Andhra Pradesh 517325', ' Rama Gopal Naidu Colony, Madanapalle, AP', '8571221606', '13.556238', '78.510172', '13.556238,78.510172', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732531', 'Ananda Babu Hospital', 'Ananda Babu Hospital', 'near srinivasa supermarket, RRN Colony, Madanapalle, Andhra Pradesh 517325', ' RRN Colony, Madanapalle, AP', '8571226282', '13.557469', '78.509483', '13.557469,78.509483', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732532', 'Bhavya Children Hospital', 'Bhavya Children Hospital', 'RRN Colony, Madanapalle, Andhra Pradesh 517325', ' RRN Colony, Madanapalle, AP', '8632340473', '13.55725', '78.509363', '13.55725,78.509363', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732533', 'Clear Scans Hospital Madanaalli', 'Clear Scans Hospital Madanaalli', 'RRN Colony, Madanapalle, Andhra Pradesh 517325', ' RRN Colony, Madanapalle, AP', '8632340473', '13.556812', '78.508996', '13.556812,78.508996', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732534', 'Usha Speciality Hospital', 'Usha Speciality Hospital', 'Reddappa Naidu Colony Rd, RRN Colony, Madanapalle, Andhra Pradesh 517325', ' RRN Colony, Madanapalle, AP', '8571227781', '13.558466', '78.510572', '13.558466,78.510572', 'http://hmfw.ap.gov.in/', 'Speciality', ' General Medicine,Emergency'),
('H51732535', 'MANASA HOSPITAL', 'MANASA HOSPITAL', 'RRN Colony, Dist, Madanapalle, Andhra Pradesh 517325', 'Madanapalle, AP', '8571222712', '13.559087', '78.51065', '13.559087,78.51065', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732536', 'Bsa Hospital', 'Bsa Hospital', 'Unnamed Road, Kammapalle, Madanapalle, Andhra Pradesh 517325', ' Kammapalle, Madanapalle, AP', '8632340473', '13.561126', '78.510484', '13.561126,78.510484', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732537', 'KVR PHYSIOCARE', 'KVR PHYSIOCARE', '#3-169-110, GOLLAPALLI Ring Road, Near Seshasai Function Hall, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '9985959294', '13.565287', '78.508853', '13.565287,78.508853', 'http://kvrphysiocare.blogspot.com/', 'General', ' General Medicine,Emergency'),
('H51732538', 'Madanapalli Hospital Pvt Ltd', 'Madanapalli Hospital Pvt Ltd', 'RRN Colony, Madanapalle, Andhra Pradesh 517325', ' RRN Colony, Madanapalle, AP', '8632340473', '13.559274', '78.509464', '13.559274,78.509464', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732539', 'Super Speciality Hospital,Madanapalle', 'Super Speciality Hospital', 'RRN Colony, Madanapalle, Andhra Pradesh 517325', ' RRN Colony, Madanapalle, AP', '8632340473', '13.559195', '78.509027', '13.559195,78.509027', 'http://hmfw.ap.gov.in/', 'Super Speciality', ' General Medicine,Emergency'),
('H51732540', 'MLL Hospital', 'MLL Hospital', 'Gandhi Rd, Subba Reddy Layout, Vivekanadanagar, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '9949599222', '13.549008', '78.510128', '13.549008,78.510128', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51733041', 'Laya Hospitals', 'Laya Hospitals', 'Seshappa Thota, Madanapalle, Andhra Pradesh 517330', 'Seshappa Thota, Madanapalle, AP', '9542637116', '13.548887', '78.513007', '13.548887,78.513007', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732542', 'Kaveri Hospitals', 'Kaveri Hospitals', 'Seshappa Thota, Madanapalle, Andhra Pradesh 517325', ' Seshappa Thota, Madanapalle, AP', '8571231799', '13.547885', '78.514278', '13.547885,78.514278', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51733043', 'Shanthinikethan Hospital', 'Shanthinikethan Hospital', 'Police Residential Quarters, Madanapalle, Andhra Pradesh 517330', ' Police Quarters, Madanapalle, AP', '8632340473', '13.549846', '78.521348', '13.549846,78.521348', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51732544', 'Bommana Cheruvu Hospital', 'Bommana Cheruvu Hospital', 'Madanapalle - Ramasamudram Rd, Andhra Pradesh 517325', 'Bommana cheruvu, AP', '8632340473', '13.496227', '78.474056', '13.496227,78.474056', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51750145', 'M S Hospital', 'M S Hospital', 'Abbanna Colony Rd, Korlagunta, Tirupati, Andhra Pradesh 517501', ' Korlagunta, Tirupati, AP', '8772280779', '13.639663', '79.427252', '13.639663,79.427252', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51750146', 'Sankalpa Super Speciality Hospital', 'Sankalpa Super Speciality Hospital', 'Karakambadi Bazar St, Tata Nagar, Tirupati, Andhra Pradesh 517501', ' Tata Nagar, Tirupati, AP', '8772243222', '13.634893', '79.426107', '13.634893,79.426107', 'http://sankalpahospitals.com/', 'Super Speciality', ' General Medicine,Emergency'),
('H51750147', 'Maha Hospitals', 'Maha Hospitals', 'Peddakapu Colony, Tirupati, Andhra Pradesh 517501', 'Tirupati, AP', '9849046730', '13.635181', '79.427217', '13.635181,79.427217', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51750148', 'BOTH HOSPITAL', 'BOTH HOSPITAL', 'Korlagunta Besides Srinivasam, Maruthi Nagar, Tirupati, Andhra Pradesh 517501', 'Maruthi Nagar, Tirupati, AP', '8772241777', '13.633996', '79.429236', '13.633996,79.429236', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51750149', 'DBR & SK Super Speciality Hospital', 'DBR & SK Super Speciality Hospital', '20-7-37, DBR, Hospital Rd, near TMC, Korlagunta, Tirupati, Andhra Pradesh 517501', ' Korlagunta, Tirupati, AP', '8772223512', '13.633915', '79.430858', '13.633915,79.430858', 'http://www.dbrskhospital.com/', 'Super Speciality', ' General Medicine,Emergency'),
('H51750150', 'Helios Hospitals', 'Helios Hospitals', '18-2-148, opp. Devendra (CS) Theatre, Ashok Nagar, Tirupati, Andhra Pradesh 517501', ' Ashok Nagar, Tirupati, AP', '8772223636', '13.638282', '79.423774', '13.638282,79.423774', 'http://helioshospitals.in/', 'General', ' General Medicine,Emergency'),
('H51750151', 'Nirmala Hospitals Multi Specialty', 'Nirmala Hospitals Multi Specialty', '22, 2-68, Korlagunta Road, Tirupati, Andhra Pradesh 517501', ' Tirupati, AP', '8772229040', '13.637158', '79.423535', '13.637158,79.423535', 'http://hmfw.ap.gov.in/', 'Multi Specality', ' General Medicine,Emergency'),
('H51750152', 'Gayathri Hospitals', 'Gayathri Hospitals', 'Reddy and Reddy Colony, Tirupati, Andhra Pradesh 517501', ' Reddy and Reddy Colony, Tirupati, AP', '8772254679', '13.636977', '79.421182', '13.636977,79.421182', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51750153', 'Om Hospitals,Tirupathi', 'Om Hospitals,Tirupathi', 'RS Gardens, Bhavani Nagar, Tirupati, Andhra Pradesh 517501', ' Bhavani Nagar, Tirupati, AP', '8772220582', '13.638113', '79.422707', '13.638113,79.422707', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51750154', 'RUSSH HOSPITALS PVT LTD', 'RUSSH HOSPITALS PVT LTD', '10-14, 576/6, 1st STREET, Reddy & Reddy Colony, Reddy and Reddy Colony, Tirupati, Andhra Pradesh 517501', 'Reddy and Reddy Colony, Tirupati, AP', '9848386464', '13.635814', '79.420805', '13.635814,79.420805', 'http://www.russhhospital.in/', 'General', ' General Medicine,Emergency'),
('H51750155', 'Mother Hospital', 'Mother Hospital', 'Sai Ram Street, Old Maternity Hospital Rd, Nehru Nagar, Tirupati, Andhra Pradesh 517501', 'Nehru Nagar, Tirupati, AP', '8772286112', '13.638395', '79.41836', '13.638395,79.41836', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51750156', 'Ravi Neuro & Emergency Hospital', 'Ravi Neuro & Emergency Hospital', 'near Kalyan Jewellers, Reddy & Reddy Colony, Reddy and Reddy Colony, Tirupati, Andhra Pradesh 517501', ' Reddy and Reddy Colony, Tirupati, AP', '8632340473', '13.63642', '79.421755', '13.63642,79.421755', 'http://hmfw.ap.gov.in/', 'General,Emergency', ' General Medicine,Emergency'),
('H51750157', 'Prameela Hospitals', 'Prameela Hospitals', '10-3-206, VV Mahal Rd, Reddy and Reddy Colony, Tirupati, Andhra Pradesh 517501', ' Reddy and Reddy Colony, Tirupati, AP', '8772220948', '13.635148', '79.419804', '13.635148,79.419804', 'http://hmfw.ap.gov.in/', 'General', ' General Medicine,Emergency'),
('H51750158', 'Srinivasa Super Speciality Hospital', 'Srinivasa Super Speciality Hospital', 'Nehru Nagar, Tirupati, Andhra Pradesh 517501', ' Nehru Nagar, Tirupati, AP', '8772286076', '13.637723', '79.416898', '13.637723,79.416898', 'http://www.drsuryasen.in/', 'Super Speciality', ' General Medicine,Emergency,Neurology'),
('H51750159', 'Sri Padmavathi Multi Specialities Hospital - Best Neuro & Emergency Hospital ', 'S.P Multi Specialities & Emergency ', 'T. Nagar, near Sri raghavendra Swamy Mattam, Tirupati, Andhra Pradesh 517501', ' Tirupati, AP', '8772230331', '13.639948', '79.416489', '13.639948,79.416489', 'http://sripadmavathimultispeciality.com/', 'Multi Specality', ' General Medicine,Emergency'),
('H51750160', 'Sri Sai Multi Speciality Hospital ', 'Sri Sai Multi Speciality Hospital ', '5-1-75/E, Sarojini Devi Road, Opp. Municipal High School, Chittoor [Dist], Tirupati, Andhra Pradesh 517501', ' Tirupati, AP', '8772287449', '13.638405', '79.414127', '13.638405,79.414127', 'http://srisaimultispecialityhospital.com/index.php', 'Multi Specality', ' General Medicine,Emergency');

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `DeviceID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `Phoneno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Family_contacted1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Family_contacted2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Blood_group` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`DeviceID`, `Name`, `Age`, `Sex`, `Address`, `Phoneno`, `Family_contacted1`, `Family_contacted2`, `Blood_group`) VALUES
('D20201', 'Kartik  Oommen ', 26, 'Male', 'Columbia street , Mumbai', '91 8746925463', '91 9548162595', '91 9848265901', 'A -ve'),
('D20202', 'Leroy  Evans', 27, 'Male', '3rd bar street , Mumbai', '91 7589632541', '91 9257173296', '91 6589592247', 'O+ve'),
('D20203', 'Yasin  Alexander', 29, 'Male', 'Sri ram street, hyderabad', '91 9856324756', '91 8966183997', '91 8459264148', 'B-ve'),
('D20204', 'Evie-Rose  Zuniga', 31, 'Female', 'Lake view street, Chennai', '91 8563247892', '91 8675194698', '91 9548253610', 'A-ve'),
('D20205', 'Mohamed  Ford', 25, 'Male', '3rd road, Chennai', '91 9556327895', '91 8384205399', '91 8525873620', 'B+ve'),
('D20206', 'Jayde  Paterson', 23, 'Male', 'Sea shore view state street, Chennai', '91 6895785394', '91 8093216100', '91 7512360289', 'O+ve'),
('D20207', 'Domonic  Hays', 23, 'Male', 'New delhi street, Hyderabad', '91 9656782496', '91 7802226801', '91 9512364852', 'O-ve'),
('D20208', 'Umar  Wells', 37, 'Male', 'Brh street, Kolkata', '91 9756712589', '91 7511237502', '91 7552149636', 'O+ve'),
('D20209', 'Kimberley  Carey', 39, 'Female', 'Theyur street, Kolkata', '91 8479327615', '91 7220248203', '91 9563470285', 'A-ve'),
('D202010', 'Ronan  Contreras', 23, 'Male', '5th ag street , Mumbai', '91 8572469178', '91 6929258904', '91 8152637801', 'B+ve'),
('D202011', 'Aila  Holman', 33, 'Male', 'Sea shore view state street, Chennai', '91 9988547356', '91 6638269605', '91 7152960325', 'B-ve'),
('D202012', 'Rhys  Horn', 30, 'Male', 'Sri ram street, hyderabad', '91 8896674523', '91 6347280306', '91 8012369557', 'O+ve'),
('D202013', 'Artur  OSullivan', 36, 'Male', 'Hug street, Mumbai', '91 6688745992', '91 6056291007', '91 6025957812', 'A+ve'),
('D202014', 'Kobie  Swan', 42, 'Female', 'Hgt street, Delhi', '91 9958741259', '91 8765301708', '91 8202693514', 'B+ve'),
('D202015', 'Theodore  Allman', 31, 'Male', 'Wide road , delhi', '91 8887744992', '91 9474312409', '91 9025367415', 'B-+ve');

-- --------------------------------------------------------

--
-- Table structure for table `policerecord`
--

CREATE TABLE `policerecord` (
  `P_DepartmentID` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_Name` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_ShortName` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_Address` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_ShortAddress` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_Phoneno` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_Lon` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `p_Lat` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_Location` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_Website` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_Category` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `P_Service` varchar(115) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `policerecord`
--

INSERT INTO `policerecord` (`P_DepartmentID`, `P_Name`, `P_ShortName`, `P_Address`, `P_ShortAddress`, `P_Phoneno`, `P_Lon`, `p_Lat`, `P_Location`, `P_Website`, `P_Category`, `P_Service`) VALUES
('P', '-', '-', '-', '-', '-', '-', '-', '-,-', '-', '-', '-'),
('P5173251', 'One Town Police Station', 'One Town Police Station', 'Bangalore Rd, P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '8571222033', '13.55629', '78.496963', '13.55629,78.496963', 'http://www.appolice.gov.in/', 'General', 'General'),
('P5173252', 'Madanapalle Rural Police Station', 'Madanapalle Rural ', 'P and T Colony, Madanapalle, Andhra Pradesh 517325', ' P and T Colony, Madanapalle, AP', '8632340473', '13.556739', '78.49701', '13.556739,78.49701', 'http://www.appolice.gov.in/', 'Rural General', 'General'),
('P5173253', 'Prohibition & Excise Police Station', 'Prohibition & Excise ', 'Nakkaladinne, Basinikonda, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '8632340473', '13.550115', '78.500317', '13.550115,78.500317', 'http://www.appolice.gov.in/', 'Excise', 'Excise, Prohibition'),
('P5173254', 'Traffic Controll Police Station', 'Traffic Controll PS', 'Patel Rd, Neerugattupalle, Madanapalle, Andhra Pradesh 517325', ' Neerugattupalle, Madanapalle, AP', '8571222275', '13.571196', '78.500101', '13.571196,78.500101', 'http://www.appolice.gov.in/', 'Traffic', 'Traffic Control'),
('P5173255', 'Two Town Police Station', 'Two Town Police Station', 'CTM Road, Near RTC Bus Stand, Madanapalle, Andhra Pradesh 517325', ' Madanapalle, AP', '8571222109', '13.558089', '78.509089', '13.558089,78.509089', 'http://www.appolice.gov.in/', 'General', 'General'),
('P5173256', 'DSP Office', 'DSP Office', 'Seshappa Thota, Madanapalle, Andhra Pradesh 517325', ' Seshappa Thota, Madanapalle, AP', '8632340473', '13.545424', '78.516089', '13.545424,78.516089', 'http://www.appolice.gov.in/', 'Sub Division', 'General'),
('P5173257', 'EXCISE POLICE STATION, MADANAPALLE', 'EXCISE PS, MADANAPALLE', 'Kumarapuram, Pappireddi Palle, Andhra Pradesh 517325', ' Pappireddi Palle, AP', '8571226233', '13.553777', '78.490295', '13.553777,78.490295', 'http://www.appolice.gov.in/', 'Excise', 'Excise'),
('P5173258', 'Angallu Police Station', 'Angallu Police Station', 'NH205, Angallu, Andhra Pradesh 517325', ' Angallu, AP', '8632340473', '13.628695', '78.485903', '13.628695,78.485903', 'http://www.appolice.gov.in/', 'General', 'General'),
('P5173259', 'Police Sub Control Room', 'Police Sub Control Room', 'Angallu, Andhra Pradesh 517325', ' Angallu, AP', '8632340473', '13.628521', '78.485941', '13.628521,78.485941', 'http://www.appolice.gov.in/', 'Control Room', 'Control Room'),
('P51741710', 'Ramasamudram Police Station', 'Ramasamudram Police Station', 'Ramasamudram - Mulbagal Rd, Ramasamudram, Andhra Pradesh 517417', ' Ramasamudram, AP', '8181258533', '13.367669', '78.422725', '13.367669,78.422725', 'http://www.appolice.gov.in/', 'General', 'Eeneral'),
('P51724711', 'Excise Police Station', 'Excise Police Station', 'Nanabala St, Punganur, Andhra Pradesh 517247', ' Punganur, AP', '8632340473', '13.362956', '78.569495', '13.362956,78.569495', 'http://www.appolice.gov.in/', 'Excise', 'Excise'),
('P51729912', 'Police Station Vayalpad', 'Police Station Vayalpad', 'Kothapeta St, Vayalpadu, Andhra Pradesh 517299', ' Vayalpadu, AP', '8632340473', '13.637175', '78.627943', '13.637175,78.627943', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51728013', 'Nimmanapalli Police Station', 'Nimmanapalli Police Station', 'NImmanapalli, Andhra Pradesh 517280', ' NImmanapalli, AP', '8632340473', '13.570834', '78.664688', '13.570834,78.664688', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51729714', 'police station gurramkonda', 'police station gurramkonda', 'Veeraballi - Gadikota - Edigapalli Rd, Gurram Konda, Andhra Pradesh 517297', ' Gurram Konda, AP', '8586260033', '13.785432', '78.591689', '13.785432,78.591689', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51735215', 'Horsley Hills Police Station', 'Horsley Hills Police Station', 'Horsley Hills, Andhra Pradesh 517352', ' Horsley Hills, AP', '8632340473', '13.649809', '78.398368', '13.649809,78.398368', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51737016', 'B kothakota police station', 'B kothakota', 'G-6, Madanapalle Rural, Andhra Pradesh 517370', ' B.Kothakota, AP', '9491836588', '13.657046', '78.271816', '13.657046,78.271816', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51723417', 'Police Station Kalikiri', 'Police Station Kalikiri', 'Kalakada - Somala Rd, Kalikiri, Andhra Pradesh 517234', ' Kalikiri, AP', '8632340473', '13.650036', '78.803286', '13.650036,78.803286', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51721418', 'Pileru Police Station', 'Pileru Police Station', 'Patakota St, Madanapally, Near Court, Chitoor, Pileru, Andhra Pradesh 517214', ' Pileru, Bodumalluvaripalle, AP', '8584244233', '13.655438', '78.935747', '13.655438,78.935747', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51739019', 'Molakalacheruvu Police Station', 'Molakalacheruvu Police Station', 'Mulakalacheruvu, Andhra Pradesh 517390', ' Mulakalacheruvu, AP', '9440796720', '13.798563', '78.266595', '13.798563,78.266595', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51723620', 'Police Station,Kalakada', 'Police Station,Kalakada', 'NH40, Kalakada, Andhra Pradesh 517236', ' Kalakada, AP', '8632340473', '13.826547', '78.790089', '13.826547,78.790089', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51621421', 'Madhanapalli road Police Station', 'Madhanapalli road Police Station', 'Madhanapalli road, Chinnamandem', ' Balijapalli, AP', '8632340473', '13.937302', '78.683752', '13.937302,78.683752', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51626722', 'Galiveedu Police Station', 'Galiveedu Police Station', 'bus stand, Pakkirareddygaripalli Near, Galiveedu, Andhra Pradesh 516267', ' Galiveedu, AP', '8567233233', '14.023671', '78.50425', '14.023671,78.50425', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51555123', 'Nambula Pulakunta Police Station', 'Nambula Pulakunta Police Station', 'State Highway 34, Nambula Pulakunta, Andhra Pradesh 515521', ' Nambula Pulakunta, AP', '8632340473', '14.055934', '78.413979', '14.055934,78.413979', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51626924', 'Nallacheruvu Police Station', 'Nallacheruvu Police Station', 'NH205, Nallacheruvu, Andhra Pradesh 515551', ' Nallacheruvu, AP', '8498253333', '13.990163', '78.180502', '13.990163,78.180502', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51626925', 'Rayachoty Police station', 'Rayachoty Police station', 'Police Station Road, Kothapeta, Rayachoty, Andhra Pradesh 516269', ' Kothapeta, Rayachoty, AP', '8632340473', '14.056696', '78.748688', '14.056696,78.748688', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51613027', 'Sundupalli Police Station', 'Sundupalli Police Station', 'T. Sundupalli, Andhra Pradesh 516130', ' T. Sundupalli, AP', '8632340473', '13.979265', '78.914086', '13.979265,78.914086', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51625729', 'Lakkireddipalli Police Station', 'Lakkireddipalli Police Station', 'Nagulagutta Palli, Lakkireddipalli, Andhra Pradesh 516257', ' Lakkireddipalli, AP', '8632340473', '14.185259', '78.699957', '14.185259,78.699957', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51713230', 'Narahari Pet Police Station', 'Narahari Pet Police Station', 'NH 4, Narahari Pet, Andhra Pradesh 517132', ' Narahari Pet, AP', '8632340473', '13.092561', '79.132916', '13.092561,79.132916', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51713231', 'Gudipala Police Station', 'Gudipala Police Station', 'State Highway 83, Narahari Pet, Andhra Pradesh 517132', ' Narahari Pet, AP', '8632340473', '13.093173', '79.132914', '13.093173,79.132914', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51700132', 'Taluk Police Station', 'Taluk Police Station', 'Mittoor, Chittoor, Andhra Pradesh 517001', ' Chittoor, AP', '8632340473', '13.212266', '79.099955', '13.212266,79.099955', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51740833', 'Gangavaram Police Station', 'Gangavaram Police Station', 'Madanapalli Rd, Gangavaram, Andhra Pradesh 517408', ' Gangavaram, AP', '9440796735', '13.219614', '78.735397', '13.219614,78.735397', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51719234', 'Rompicherla Police Station', 'Rompicherla Police Station', 'Rompicherla, Andhra Pradesh 517192', ' Rompicherla, AP', '8632340473', '13.663686', '79.047095', '13.663686,79.047095', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51712435', 'Puthalapattu Police Station', 'Puthalapattu Police Station', 'Chittoor Tirupati Main Road,Putalapattu, Andhra Pradesh 517124', ' Oddepalle, AP', '8572270033', '13.344862', '79.093925', '13.344862,79.093925', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51758136', 'Narayanavaram Police Station', 'Narayanavaram Police Station', 'Tirupati Rd, Narayanavanam, Andhra Pradesh 517581', ' Narayanavanam, AP', '8632340473', '13.414974', '79.601457', '13.414974,79.601457', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51758337', 'Puttur POLICE STATION', 'Puttur POLICE STATION', 'Puttur, Andhra Pradesh 517583', ' Puttur, AP', '8632340473', '13.439595', '79.552132', '13.439595,79.552132', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51758238', 'Karveti Nagar police station', 'Karveti Nagar police station', 'Karveti Nagar, Andhra Pradesh 517582', ' Karveti Nagar, AP', '8632340473', '13.422851', '79.452062', '13.422851,79.452062', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51750239', 'S V University Police Station', 'S V University Police Station', 'SVU Staff Colony, Tirupati, Andhra Pradesh 517502', ' Sri Padmavati Mahila Visvavidyalayam, Tirupati, AP', '8632340473', '13.625802', '79.400369', '13.625802,79.400369', 'http://www.appolice.gov.in/', 'General', 'General'),
('P51750140', 'Tirupati Crime Police Station', 'Tirupati Crime Police Station', '137, Alipiri Rd, Bommagunta, Nehru Nagar, Tirupati, Andhra Pradesh 517501', ' Nehru Nagar, Tirupati, AP', '8772289010', '13.633974', '79.413556', '13.633974,79.413556', 'http://www.appolice.gov.in/', 'Crime', 'Crime');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `DeviceID` varchar(20) NOT NULL,
  `VehicleID` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Dimension` varchar(20) NOT NULL,
  `Air_bags` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Licence_no` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`DeviceID`, `VehicleID`, `Type`, `Brand`, `Model`, `Dimension`, `Air_bags`, `Capacity`, `Licence_no`) VALUES
('D20201', 'AP03 5433', 'bus', 'CTH', '124 Spider', '1305 x 120', 1, 1, 'AP7520130008800'),
('D20202', 'AP30 0403', 'truck', 'Mercedes-Benz', '190 E', '420 x 152', 4, 4, 'AP5869825658963'),
('D20203', 'TN06 4766', 'ambulance', 'BMW X7', 'X7', '412 x 234', 6, 7, 'TN4879524589655'),
('D20204', 'AP02 7822', 'heavy-cargo-truck', 'Nissan', '240SX', '3235 x 131', 1, 2, 'AP5479548645615'),
('D20205', 'TN30 0403', 'jeep', 'Ashok Leyland – Lynx', 'MK7', '1300 x 120', 0, 35, 'TN4885445289521'),
('D20206', 'AP30 0403', 'sedan', 'Chevrolet', 'Optra Magnum', '420 x 152', 4, 4, 'AP4891159918998'),
('D20207', 'TN16 2466', 'medium-heavy-truck', 'Ashok Leyland – Lynx', 'Elite', '4120 x 234', 0, 25, 'TN5559658995489'),
('D20208', 'AP30 0403', 'medium-truck', 'Mahindra', 'SUV500', '323 x 131', 2, 6, 'AP9889224564555'),
('D20209', 'AP05 7655', 'taxi', 'BMW', 'A8', '1305 x 120', 2, 2, 'AP8246556633245'),
('D202010', 'AP30 0403', 'van', 'MERCEDES-BENZ', 'Maybach', '420 x 152', 1, 4, 'AP7854692782062'),
('D202011', 'AP36 7366', 'fire-truck', 'TATA', 'Indica', '412 x 234', 1, 4, 'AP5546255614562'),
('D202012', 'AP30 0403', 'van-auto', 'Ford Transit', 'MK6', '323 x 131', 4, 7, 'AP8955422544888'),
('D202013', 'AP30 0403', 'police', 'Mercedes-Benz ', 'GLS', '13054 x 120', 2, 3, 'AP5785442365448'),
('D202014', 'TN30 0403', 'small-truck', 'Ashok Leyland – Lynx', 'Model 2820', '4205 x 152', 2, 2, 'TN4525526545655'),
('D202015', 'AP30 0403', 'oil-tanker', 'Maruti suzki', 'Swift Dezire', '412 x 234', 1, 4, 'AP4586545225566');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
