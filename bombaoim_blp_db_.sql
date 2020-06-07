-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2020 at 08:25 AM
-- Server version: 5.6.43-84.3-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bombaoim_blp_db_`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `pid` bigint(20) NOT NULL,
  `patient_name` varchar(250) NOT NULL,
  `clinic_id` varchar(250) NOT NULL,
  `study_no` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `patient_name1` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `clinic_regno` varchar(250) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `dateMDT` date NOT NULL,
  `dateRFT` date NOT NULL,
  `SmearDiagnosis` varchar(250) NOT NULL,
  `SmearDate` date NOT NULL,
  `mdiag` varchar(250) NOT NULL,
  `Age` varchar(250) NOT NULL,
  `Weight` varchar(250) NOT NULL,
  `Height` varchar(250) NOT NULL,
  `BMI` varchar(250) NOT NULL,
  `no_contra_indication_steroids` varchar(250) NOT NULL,
  `able_to_attend_regularly` varchar(250) NOT NULL,
  `pregnant` varchar(250) NOT NULL,
  `tuberculosis` varchar(250) NOT NULL,
  `diabetes` varchar(250) NOT NULL,
  `other_serious_illness` varchar(250) NOT NULL,
  `other_illness_desc` varchar(250) NOT NULL,
  `inform_consent` varchar(250) NOT NULL,
  `allocate_study_no` varchar(250) NOT NULL,
  `history_of_enl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`pid`, `patient_name`, `clinic_id`, `study_no`, `date`, `staff_name`, `patient_name1`, `sex`, `clinic_regno`, `address`, `dateMDT`, `dateRFT`, `SmearDiagnosis`, `SmearDate`, `mdiag`, `Age`, `Weight`, `Height`, `BMI`, `no_contra_indication_steroids`, `able_to_attend_regularly`, `pregnant`, `tuberculosis`, `diabetes`, `other_serious_illness`, `other_illness_desc`, `inform_consent`, `allocate_study_no`, `history_of_enl`) VALUES
(1, 'nishit', '1', '1', '2020-06-06', 'mistry', 'nishit', 'male', '1825', 'malad west', '2018-06-06', '2019-06-06', '2', '2020-06-06', 'yes', '20', '85', '1.7', '29.41', 'no', 'yes', 'no', 'no', 'no', 'no', '', 'yes', '1', 'yes'),
(3, 'parth', '2', '2', '2020-06-06', 'joshi', 'parth', 'male', '1234', 'malad west', '2018-06-06', '2019-06-06', '2', '2020-06-07', 'yes', '20', '100', '1.9', '27.70', 'no', 'yes', 'no', 'no', 'no', 'no', '', 'yes', '2', 'yes'),
(4, 'neha', '3', '3', '2020-06-07', 'kirtikar', 'neha', 'female', '1510', 'churchgate', '2018-06-07', '2019-06-07', '1', '2020-06-07', 'yes', '20', '50', '1.4', '25.51', 'no', 'yes', 'no', 'no', 'no', 'no', '', 'yes', '3', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `form1_contact`
--

CREATE TABLE `form1_contact` (
  `pid` bigint(20) NOT NULL,
  `contact_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form1_contact`
--

INSERT INTO `form1_contact` (`pid`, `contact_no`) VALUES
(1, 9819604336),
(3, 9876543210),
(4, 9082532141);

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `pid` bigint(20) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `clinic_id` varchar(255) NOT NULL,
  `study_no` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `current_reaction_status` varchar(250) NOT NULL,
  `first_had_enl` varchar(255) NOT NULL,
  `firstPDate` varchar(255) NOT NULL,
  `first_sym` varchar(255) NOT NULL,
  `current_anti_reaction` varchar(255) NOT NULL,
  `date_started_predni` varchar(255) NOT NULL,
  `current_dose_predni` varchar(255) NOT NULL,
  `current_dose_clofa` varchar(255) NOT NULL,
  `current_dose_thal` varchar(255) NOT NULL,
  `nfa` varchar(255) NOT NULL,
  `change_in_nfi` varchar(255) NOT NULL,
  `change_in_nfi_desc` varchar(255) NOT NULL,
  `eess_2` varchar(255) NOT NULL,
  `qol_2_score` varchar(255) NOT NULL,
  `vas_for_pig_2` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `drug_dose_predni` varchar(255) NOT NULL,
  `drug_dur_predni` varchar(255) NOT NULL,
  `drug_dose_clofa` varchar(255) NOT NULL,
  `drug_dur_clofa` varchar(255) NOT NULL,
  `next_asse_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`pid`, `patient_name`, `clinic_id`, `study_no`, `date`, `staff_name`, `current_reaction_status`, `first_had_enl`, `firstPDate`, `first_sym`, `current_anti_reaction`, `date_started_predni`, `current_dose_predni`, `current_dose_clofa`, `current_dose_thal`, `nfa`, `change_in_nfi`, `change_in_nfi_desc`, `eess_2`, `qol_2_score`, `vas_for_pig_2`, `obs`, `drug_dose_predni`, `drug_dur_predni`, `drug_dose_clofa`, `drug_dur_clofa`, `next_asse_date`) VALUES
(1, 'nishit', '1', '1', '2020-06-05', 'mistry', 'RR', '2020-06-05', '2020-06-05', '5', '', '2020-06-05', '5', '', '', 'no', 'no', '', '5', '10', '10', 'observation', '5', '5', '6', '6', '2020-06-12'),
(3, 'parth', '2', '2', '2020-06-07', 'joshi', 'RR', '2020-06-07', '2020-06-07', '5', '', '2020-06-07', '5', '5', '5', 'no', 'no', '', '10', '10', '10', 'obs', '5', '5', '6', '6', '2020-06-21'),
(4, 'neha', '3', '3', '2020-06-07', 'kirtikar', 'RR', '2020-06-07', '2020-06-07', '7', '', '2020-06-07', '7', '', '', 'no', 'no', '', '10', 'not done', '10', 'obs', '5', '5', '6', '6', '2020-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `form2_checkbox`
--

CREATE TABLE `form2_checkbox` (
  `pid` bigint(20) NOT NULL,
  `Mild_Indigestion` varchar(255) NOT NULL,
  `Peptic_Ulcer` varchar(255) NOT NULL,
  `Striae` varchar(255) NOT NULL,
  `Herpes_Zoster` varchar(255) NOT NULL,
  `Hyperglycaemia` varchar(255) NOT NULL,
  `Hypertension` varchar(255) NOT NULL,
  `Malaena` varchar(255) NOT NULL,
  `Glaucoma` varchar(255) NOT NULL,
  `Truncal_Obesity` varchar(255) NOT NULL,
  `Osteoporosis` varchar(255) NOT NULL,
  `Moon_Face` varchar(255) NOT NULL,
  `Psychosis` varchar(255) NOT NULL,
  `Gastrointestinal_bleeding` varchar(255) NOT NULL,
  `Haematemesis` varchar(255) NOT NULL,
  `Extensive_Ringworm` varchar(255) NOT NULL,
  `Acne` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2_checkbox`
--

INSERT INTO `form2_checkbox` (`pid`, `Mild_Indigestion`, `Peptic_Ulcer`, `Striae`, `Herpes_Zoster`, `Hyperglycaemia`, `Hypertension`, `Malaena`, `Glaucoma`, `Truncal_Obesity`, `Osteoporosis`, `Moon_Face`, `Psychosis`, `Gastrointestinal_bleeding`, `Haematemesis`, `Extensive_Ringworm`, `Acne`) VALUES
(1, 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes'),
(3, 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(4, 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `form2_checkbox2`
--

CREATE TABLE `form2_checkbox2` (
  `pid` bigint(20) NOT NULL,
  `Prednisolone` varchar(255) NOT NULL,
  `Clofazmine` varchar(255) NOT NULL,
  `Thalidamide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2_checkbox2`
--

INSERT INTO `form2_checkbox2` (`pid`, `Prednisolone`, `Clofazmine`, `Thalidamide`) VALUES
(1, 'yes', 'no', 'no'),
(3, 'yes', 'yes', 'yes'),
(4, 'yes', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `form2_others`
--

CREATE TABLE `form2_others` (
  `oid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `others_drug_name` varchar(255) NOT NULL,
  `others_drug_dosage` varchar(255) NOT NULL,
  `others_drug_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form2_others`
--

INSERT INTO `form2_others` (`oid`, `pid`, `others_drug_name`, `others_drug_dosage`, `others_drug_duration`) VALUES
(1, 1, 'bc/ca', '7', '7'),
(3, 3, 'bc/ca', '7', '7'),
(5, 4, 'bc/ca', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

CREATE TABLE `form3` (
  `f3id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `current_reaction_status` varchar(255) NOT NULL,
  `nfa_3` varchar(255) NOT NULL,
  `new_nfi_3` varchar(255) NOT NULL,
  `Add1` varchar(255) NOT NULL,
  `eess_3` varchar(255) NOT NULL,
  `qol_3` varchar(255) NOT NULL,
  `vas_for_pig_3` varchar(255) NOT NULL,
  `rand_date` date NOT NULL,
  `drug_dose_predni` varchar(255) NOT NULL,
  `drug_dura_predni` varchar(255) NOT NULL,
  `drug_dose_clofa` varchar(255) NOT NULL,
  `drug_dura_clofa` varchar(255) NOT NULL,
  `advise_ad` varchar(255) NOT NULL,
  `assessment_date` date NOT NULL,
  `prednisolone_review` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form3`
--

INSERT INTO `form3` (`f3id`, `pid`, `date`, `staff_name`, `current_reaction_status`, `nfa_3`, `new_nfi_3`, `Add1`, `eess_3`, `qol_3`, `vas_for_pig_3`, `rand_date`, `drug_dose_predni`, `drug_dura_predni`, `drug_dose_clofa`, `drug_dura_clofa`, `advise_ad`, `assessment_date`, `prednisolone_review`) VALUES
(1, 1, '2020-06-05', 'mistry', 'RR', 'no', 'no', '', '5', '10', '10', '2020-06-05', '5', '5', '6', '6', 'yes', '2020-09-05', '2020-06-19'),
(2, 4, '2020-06-07', 'kirtikar', 'RR', 'no', 'no', '', '5', 'done', '10', '2020-06-07', '5', '5', '6', '6', 'yes', '2020-09-07', '2020-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `form3_others`
--

CREATE TABLE `form3_others` (
  `f3id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `others_drug_name` varchar(100) NOT NULL,
  `others_drug_dosage` varchar(255) NOT NULL,
  `others_drug_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form3_others`
--

INSERT INTO `form3_others` (`f3id`, `pid`, `others_drug_name`, `others_drug_dosage`, `others_drug_duration`) VALUES
(1, 1, 'bc/ca', '7', '7'),
(2, 4, 'bc/ca', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `form4`
--

CREATE TABLE `form4` (
  `f4id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `formDate` date NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `current_status` varchar(255) NOT NULL,
  `nfa_4` varchar(255) NOT NULL,
  `eess_4` varchar(255) NOT NULL,
  `qol_4` varchar(255) NOT NULL,
  `vas_4` varchar(255) NOT NULL,
  `enl_present_time_since` varchar(255) NOT NULL,
  `time_since_last_received_prednisolone` varchar(255) NOT NULL,
  `recurrent_enl_start_predni` varchar(255) NOT NULL,
  `advised_admission` varchar(255) NOT NULL,
  `nextDate` date NOT NULL,
  `nextPDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form4`
--

INSERT INTO `form4` (`f4id`, `pid`, `formDate`, `staff_name`, `current_status`, `nfa_4`, `eess_4`, `qol_4`, `vas_4`, `enl_present_time_since`, `time_since_last_received_prednisolone`, `recurrent_enl_start_predni`, `advised_admission`, `nextDate`, `nextPDate`) VALUES
(1, 1, '2020-06-05', 'mistry', 'RR', 'no', '5', '10', '10', '5', '5', '5', 'yes', '2020-06-05', '2020-06-05'),
(2, 4, '2020-06-07', 'kirtikar', 'RR', 'no', '5', 'not done', '10', '5', '7', '5', 'yes', '2020-06-07', '2020-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `form4_checkbox`
--

CREATE TABLE `form4_checkbox` (
  `f4id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `Mild_Indigestion` varchar(255) NOT NULL,
  `Peptic_Ulcer` varchar(255) NOT NULL,
  `Striae` varchar(255) NOT NULL,
  `Herpes_Zoster` varchar(255) NOT NULL,
  `Hyperglycaemia` varchar(255) NOT NULL,
  `Hypertension` varchar(255) NOT NULL,
  `Malaena` varchar(255) NOT NULL,
  `Glaucoma` varchar(255) NOT NULL,
  `Truncal_Obesity` varchar(255) NOT NULL,
  `Osteoporosis` varchar(255) NOT NULL,
  `Moon_Face` varchar(255) NOT NULL,
  `Psychosis` varchar(255) NOT NULL,
  `Gastrointestinal_bleeding` varchar(255) NOT NULL,
  `Haematemesis` varchar(255) NOT NULL,
  `Extensive_Ringworm` varchar(255) NOT NULL,
  `Acne` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form4_checkbox`
--

INSERT INTO `form4_checkbox` (`f4id`, `pid`, `Mild_Indigestion`, `Peptic_Ulcer`, `Striae`, `Herpes_Zoster`, `Hyperglycaemia`, `Hypertension`, `Malaena`, `Glaucoma`, `Truncal_Obesity`, `Osteoporosis`, `Moon_Face`, `Psychosis`, `Gastrointestinal_bleeding`, `Haematemesis`, `Extensive_Ringworm`, `Acne`) VALUES
(1, 1, 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes'),
(2, 4, 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `form4_checkbox2`
--

CREATE TABLE `form4_checkbox2` (
  `f4id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `Mild_Indigestion` varchar(255) NOT NULL,
  `Vomiting` varchar(255) NOT NULL,
  `Nausea` varchar(255) NOT NULL,
  `Abdominal_Pain` varchar(255) NOT NULL,
  `Diarrhoea,Acute` varchar(255) NOT NULL,
  `Ichthyosis` varchar(255) NOT NULL,
  `Weight_loss` varchar(255) NOT NULL,
  `Conjuctiva` varchar(255) NOT NULL,
  `Persistent_Indigestion` varchar(255) NOT NULL,
  `Diarrhoea,Chronic` varchar(255) NOT NULL,
  `Chronic_Dysentery` varchar(255) NOT NULL,
  `Skin_Discolouration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form4_checkbox2`
--

INSERT INTO `form4_checkbox2` (`f4id`, `pid`, `Mild_Indigestion`, `Vomiting`, `Nausea`, `Abdominal_Pain`, `Diarrhoea,Acute`, `Ichthyosis`, `Weight_loss`, `Conjuctiva`, `Persistent_Indigestion`, `Diarrhoea,Chronic`, `Chronic_Dysentery`, `Skin_Discolouration`) VALUES
(1, 1, 'no', 'no', 'no', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'no'),
(2, 4, 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `form5`
--

CREATE TABLE `form5` (
  `f5id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `patient_since_last_visit` varchar(250) NOT NULL,
  `prednisolone_5` varchar(250) NOT NULL,
  `clofazimine_vitamins` varchar(250) NOT NULL,
  `nfa_5` varchar(250) NOT NULL,
  `new_nfi_5` varchar(250) NOT NULL,
  `if_yes` varchar(250) NOT NULL,
  `eess_score_5` varchar(250) NOT NULL,
  `patient_worse` varchar(250) NOT NULL,
  `time_since_flare_began` varchar(250) NOT NULL,
  `dose_std_course` varchar(255) NOT NULL,
  `dura_std_course` varchar(255) NOT NULL,
  `dose_add_predni` varchar(255) NOT NULL,
  `dura_add_predni` varchar(255) NOT NULL,
  `advised_admission` varchar(250) NOT NULL,
  `date_of_next_assessment_5` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form5`
--

INSERT INTO `form5` (`f5id`, `pid`, `date`, `staff_name`, `patient_since_last_visit`, `prednisolone_5`, `clofazimine_vitamins`, `nfa_5`, `new_nfi_5`, `if_yes`, `eess_score_5`, `patient_worse`, `time_since_flare_began`, `dose_std_course`, `dura_std_course`, `dose_add_predni`, `dura_add_predni`, `advised_admission`, `date_of_next_assessment_5`) VALUES
(1, 1, '2020-06-05', 'mistry', 'good', '5', '5', 'no', 'no', '', '5', 'no', '5', '5', '5', '6', '6', 'well', '2020-06-19'),
(2, 3, '2020-06-07', 'joshi', 'good', '5', '5', 'no', 'no', '', '5', 'no', '10', '5', '5', '6', '6', 'good', '2020-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `form5_checkbox`
--

CREATE TABLE `form5_checkbox` (
  `f5id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `Mild_Indigestion` varchar(255) NOT NULL,
  `Peptic_Ulcer` varchar(255) NOT NULL,
  `Striae` varchar(255) NOT NULL,
  `Herpes_Zoster` varchar(255) NOT NULL,
  `Hyperglycaemia` varchar(255) NOT NULL,
  `Hypertension` varchar(255) NOT NULL,
  `Malaena` varchar(255) NOT NULL,
  `Glaucoma` varchar(255) NOT NULL,
  `Truncal_Obesity` varchar(255) NOT NULL,
  `Osteoporosis` varchar(255) NOT NULL,
  `Moon_Face` varchar(255) NOT NULL,
  `Psychosis` varchar(255) NOT NULL,
  `Gastrointestinal_bleeding` varchar(255) NOT NULL,
  `Haematemesis` varchar(255) NOT NULL,
  `Extensive_Ringworm` varchar(255) NOT NULL,
  `Acne` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form5_checkbox`
--

INSERT INTO `form5_checkbox` (`f5id`, `pid`, `Mild_Indigestion`, `Peptic_Ulcer`, `Striae`, `Herpes_Zoster`, `Hyperglycaemia`, `Hypertension`, `Malaena`, `Glaucoma`, `Truncal_Obesity`, `Osteoporosis`, `Moon_Face`, `Psychosis`, `Gastrointestinal_bleeding`, `Haematemesis`, `Extensive_Ringworm`, `Acne`) VALUES
(1, 1, 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes'),
(2, 3, 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `form5_checkbox2`
--

CREATE TABLE `form5_checkbox2` (
  `f5id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `Mild_Indigestion` varchar(255) NOT NULL,
  `Vomiting` varchar(255) NOT NULL,
  `Nausea` varchar(255) NOT NULL,
  `Abdominal_Pain` varchar(255) NOT NULL,
  `Diarrhoea,Acute` varchar(255) NOT NULL,
  `Ichthyosis` varchar(255) NOT NULL,
  `Weight_loss` varchar(255) NOT NULL,
  `Conjuctiva` varchar(255) NOT NULL,
  `Persistent_Indigestion` varchar(255) NOT NULL,
  `Diarrhoea,Chronic` varchar(255) NOT NULL,
  `Chronic_Dysentery` varchar(255) NOT NULL,
  `Skin_Discolouration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form5_checkbox2`
--

INSERT INTO `form5_checkbox2` (`f5id`, `pid`, `Mild_Indigestion`, `Vomiting`, `Nausea`, `Abdominal_Pain`, `Diarrhoea,Acute`, `Ichthyosis`, `Weight_loss`, `Conjuctiva`, `Persistent_Indigestion`, `Diarrhoea,Chronic`, `Chronic_Dysentery`, `Skin_Discolouration`) VALUES
(1, 1, 'no', 'no', 'no', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'no'),
(2, 3, 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `form6`
--

CREATE TABLE `form6` (
  `f6id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `current_status` varchar(250) NOT NULL,
  `nfa` varchar(250) NOT NULL,
  `eess` varchar(250) NOT NULL,
  `qol` varchar(250) NOT NULL,
  `vas` varchar(250) NOT NULL,
  `current_antireaction_therapy` varchar(250) NOT NULL,
  `no_weeks_extra_clofazimine` varchar(250) NOT NULL,
  `enl_at_randomisation` varchar(250) NOT NULL,
  `duration_first_episode` varchar(250) NOT NULL,
  `flare_of_enl` varchar(250) NOT NULL,
  `if_flare_how_long` varchar(250) NOT NULL,
  `eess_at_flare` varchar(250) NOT NULL,
  `recurrent_enl_steroids` varchar(250) NOT NULL,
  `chronic_enl_randomisation` varchar(250) NOT NULL,
  `total_steroids_consumed` varchar(250) NOT NULL,
  `change_in_nfa` varchar(250) NOT NULL,
  `change_in_nfa_desc` varchar(700) NOT NULL,
  `change_in_qol` varchar(250) NOT NULL,
  `adverse_effect_of_drug` varchar(250) NOT NULL,
  `drug_desc` varchar(700) NOT NULL,
  `others` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form6`
--

INSERT INTO `form6` (`f6id`, `pid`, `date`, `staff_name`, `current_status`, `nfa`, `eess`, `qol`, `vas`, `current_antireaction_therapy`, `no_weeks_extra_clofazimine`, `enl_at_randomisation`, `duration_first_episode`, `flare_of_enl`, `if_flare_how_long`, `eess_at_flare`, `recurrent_enl_steroids`, `chronic_enl_randomisation`, `total_steroids_consumed`, `change_in_nfa`, `change_in_nfa_desc`, `change_in_qol`, `adverse_effect_of_drug`, `drug_desc`, `others`) VALUES
(1, 1, '2020-06-05', 'mistry', 'RR', 'no', '5', '10', '10', 'none', '5', 'yes', '5', 'yes', '7', '7', 'no', 'no', '1.85', 'no', '', 'decrease', 'no', '', ''),
(2, 4, '2020-06-07', 'kirtikar', 'RR', 'no', '5', 'not done', '10', 'none \r\n							', '5', 'yes', '5', 'yes', '7', '7', 'yes', 'yes', '1.85', 'no', '', 'decrease', 'no', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form6_checkbox`
--

CREATE TABLE `form6_checkbox` (
  `f6id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `Mild_Indigestion` varchar(255) NOT NULL,
  `Peptic_Ulcer` varchar(255) NOT NULL,
  `Striae` varchar(255) NOT NULL,
  `Herpes_Zoster` varchar(255) NOT NULL,
  `Hyperglycaemia` varchar(255) NOT NULL,
  `Hypertension` varchar(255) NOT NULL,
  `Malaena` varchar(255) NOT NULL,
  `Glaucoma` varchar(255) NOT NULL,
  `Truncal_Obesity` varchar(255) NOT NULL,
  `Osteoporosis` varchar(255) NOT NULL,
  `Moon_Face` varchar(255) NOT NULL,
  `Psychosis` varchar(255) NOT NULL,
  `Gastrointestinal_bleeding` varchar(255) NOT NULL,
  `Haematemesis` varchar(255) NOT NULL,
  `Extensive_Ringworm` varchar(255) NOT NULL,
  `Acne` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form6_checkbox`
--

INSERT INTO `form6_checkbox` (`f6id`, `pid`, `Mild_Indigestion`, `Peptic_Ulcer`, `Striae`, `Herpes_Zoster`, `Hyperglycaemia`, `Hypertension`, `Malaena`, `Glaucoma`, `Truncal_Obesity`, `Osteoporosis`, `Moon_Face`, `Psychosis`, `Gastrointestinal_bleeding`, `Haematemesis`, `Extensive_Ringworm`, `Acne`) VALUES
(1, 1, 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes'),
(2, 4, 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `form6_checkbox2`
--

CREATE TABLE `form6_checkbox2` (
  `f6id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `Mild_Indigestion` varchar(255) NOT NULL,
  `Vomiting` varchar(255) NOT NULL,
  `Nausea` varchar(255) NOT NULL,
  `Abdominal_Pain` varchar(255) NOT NULL,
  `Diarrhoea,Acute` varchar(255) NOT NULL,
  `Ichthyosis` varchar(255) NOT NULL,
  `Weight_loss` varchar(255) NOT NULL,
  `Conjuctiva` varchar(255) NOT NULL,
  `Persistent_Indigestion` varchar(255) NOT NULL,
  `Diarrhoea,Chronic` varchar(255) NOT NULL,
  `Chronic_Dysentery` varchar(255) NOT NULL,
  `Skin_Discolouration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form6_checkbox2`
--

INSERT INTO `form6_checkbox2` (`f6id`, `pid`, `Mild_Indigestion`, `Vomiting`, `Nausea`, `Abdominal_Pain`, `Diarrhoea,Acute`, `Ichthyosis`, `Weight_loss`, `Conjuctiva`, `Persistent_Indigestion`, `Diarrhoea,Chronic`, `Chronic_Dysentery`, `Skin_Discolouration`) VALUES
(1, 1, 'no', 'no', 'no', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'no'),
(2, 4, 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `form6_checkbox3`
--

CREATE TABLE `form6_checkbox3` (
  `f6id` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `Protocol_Violation` varchar(255) NOT NULL,
  `Patient_refused_followup` varchar(255) NOT NULL,
  `Uncontrolled_reaction` varchar(255) NOT NULL,
  `Severe_adverse_effects` varchar(255) NOT NULL,
  `Died` varchar(255) NOT NULL,
  `Others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form6_checkbox3`
--

INSERT INTO `form6_checkbox3` (`f6id`, `pid`, `Protocol_Violation`, `Patient_refused_followup`, `Uncontrolled_reaction`, `Severe_adverse_effects`, `Died`, `Others`) VALUES
(1, 1, 'yes', 'no', 'no', 'no', 'no', 'no'),
(2, 4, 'yes', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'webmaster', '393d20c68a4c86960ffe216d73fc2945');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form1_contact`
--
ALTER TABLE `form1_contact`
  ADD PRIMARY KEY (`pid`,`contact_no`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form2_checkbox`
--
ALTER TABLE `form2_checkbox`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form2_checkbox2`
--
ALTER TABLE `form2_checkbox2`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form2_others`
--
ALTER TABLE `form2_others`
  ADD PRIMARY KEY (`oid`) USING BTREE;

--
-- Indexes for table `form3`
--
ALTER TABLE `form3`
  ADD PRIMARY KEY (`f3id`,`pid`) USING BTREE;

--
-- Indexes for table `form3_others`
--
ALTER TABLE `form3_others`
  ADD PRIMARY KEY (`f3id`,`others_drug_name`,`pid`) USING BTREE;

--
-- Indexes for table `form4`
--
ALTER TABLE `form4`
  ADD PRIMARY KEY (`f4id`,`pid`) USING BTREE;

--
-- Indexes for table `form4_checkbox`
--
ALTER TABLE `form4_checkbox`
  ADD PRIMARY KEY (`f4id`,`pid`) USING BTREE;

--
-- Indexes for table `form4_checkbox2`
--
ALTER TABLE `form4_checkbox2`
  ADD PRIMARY KEY (`f4id`,`pid`) USING BTREE;

--
-- Indexes for table `form5`
--
ALTER TABLE `form5`
  ADD PRIMARY KEY (`f5id`,`pid`) USING BTREE;

--
-- Indexes for table `form5_checkbox`
--
ALTER TABLE `form5_checkbox`
  ADD PRIMARY KEY (`pid`,`f5id`) USING BTREE;

--
-- Indexes for table `form5_checkbox2`
--
ALTER TABLE `form5_checkbox2`
  ADD PRIMARY KEY (`pid`,`f5id`) USING BTREE;

--
-- Indexes for table `form6`
--
ALTER TABLE `form6`
  ADD PRIMARY KEY (`f6id`,`pid`) USING BTREE;

--
-- Indexes for table `form6_checkbox`
--
ALTER TABLE `form6_checkbox`
  ADD PRIMARY KEY (`pid`,`f6id`) USING BTREE;

--
-- Indexes for table `form6_checkbox2`
--
ALTER TABLE `form6_checkbox2`
  ADD PRIMARY KEY (`pid`,`f6id`) USING BTREE;

--
-- Indexes for table `form6_checkbox3`
--
ALTER TABLE `form6_checkbox3`
  ADD PRIMARY KEY (`pid`,`f6id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form2_checkbox`
--
ALTER TABLE `form2_checkbox`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form2_checkbox2`
--
ALTER TABLE `form2_checkbox2`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form2_others`
--
ALTER TABLE `form2_others`
  MODIFY `oid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form3`
--
ALTER TABLE `form3`
  MODIFY `f3id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form4`
--
ALTER TABLE `form4`
  MODIFY `f4id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form5`
--
ALTER TABLE `form5`
  MODIFY `f5id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form6`
--
ALTER TABLE `form6`
  MODIFY `f6id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form3_others`
--
ALTER TABLE `form3_others`
  ADD CONSTRAINT `form3_others_ibfk_1` FOREIGN KEY (`f3id`) REFERENCES `form3` (`f3id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form4_checkbox`
--
ALTER TABLE `form4_checkbox`
  ADD CONSTRAINT `form4_checkbox_ibfk_1` FOREIGN KEY (`f4id`) REFERENCES `form4` (`f4id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form4_checkbox2`
--
ALTER TABLE `form4_checkbox2`
  ADD CONSTRAINT `form4_checkbox2_ibfk_1` FOREIGN KEY (`f4id`) REFERENCES `form4` (`f4id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form5_checkbox`
--
ALTER TABLE `form5_checkbox`
  ADD CONSTRAINT `form5_checkbox_ibfk_1` FOREIGN KEY (`f5id`) REFERENCES `form5` (`f5id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form5_checkbox2`
--
ALTER TABLE `form5_checkbox2`
  ADD CONSTRAINT `form5_checkbox2_ibfk_1` FOREIGN KEY (`f5id`) REFERENCES `form5` (`f5id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form6_checkbox`
--
ALTER TABLE `form6_checkbox`
  ADD CONSTRAINT `form6_checkbox_ibfk_1` FOREIGN KEY (`f6id`) REFERENCES `form6` (`f6id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form6_checkbox2`
--
ALTER TABLE `form6_checkbox2`
  ADD CONSTRAINT `form6_checkbox2_ibfk_1` FOREIGN KEY (`f6id`) REFERENCES `form6` (`f6id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form6_checkbox3`
--
ALTER TABLE `form6_checkbox3`
  ADD CONSTRAINT `form6_checkbox3_ibfk_1` FOREIGN KEY (`f6id`) REFERENCES `form6` (`f6id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
