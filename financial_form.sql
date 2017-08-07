-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 08:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financial_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation_expenditure`
--

CREATE TABLE `accomodation_expenditure` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(50) NOT NULL,
  `accomodation_type` varchar(50) NOT NULL,
  `accomodation_status` varchar(50) NOT NULL,
  `accomodation_rent_provider` varchar(50) NOT NULL,
  `accomodation_size` varchar(50) NOT NULL,
  `accomodation_area` varchar(50) NOT NULL,
  `accomodation_address` varchar(500) NOT NULL,
  `accomodation_bedroom` int(50) NOT NULL,
  `accomodation_ac` int(50) NOT NULL,
  `accomodation_rent` int(50) NOT NULL,
  `accomodation_annual` int(50) NOT NULL,
  `accomodation_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agriculture_assets`
--

CREATE TABLE `agriculture_assets` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `assets_title` int(50) NOT NULL,
  `assets_qty` int(50) NOT NULL,
  `assets_size` int(50) NOT NULL,
  `assets_location` int(50) NOT NULL,
  `assets_cultivable_area` int(50) NOT NULL,
  `agriculture_yield` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assets_earning`
--

CREATE TABLE `assets_earning` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(50) NOT NULL,
  `assets_title` varchar(50) NOT NULL,
  `assets_relation` varchar(50) NOT NULL,
  `assets_price` int(50) NOT NULL,
  `assets_total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assets_income`
--

CREATE TABLE `assets_income` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(10) NOT NULL,
  `property_rent` int(10) NOT NULL,
  `land_lease` int(10) NOT NULL,
  `bank_deposits` int(10) NOT NULL,
  `shares` int(10) NOT NULL,
  `others` int(10) NOT NULL,
  `relation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `career_goals`
--

CREATE TABLE `career_goals` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(50) NOT NULL,
  `goal1` varchar(500) NOT NULL,
  `goal2` varchar(500) NOT NULL,
  `goal3` varchar(500) NOT NULL,
  `goal4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `earning_info`
--

CREATE TABLE `earning_info` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(10) NOT NULL,
  `earning_member_name` varchar(50) NOT NULL,
  `earning_member_relation` varchar(10) NOT NULL,
  `earning_member_occupation` varchar(50) NOT NULL,
  `earning_member_organization` varchar(50) NOT NULL,
  `earning_member_designation` varchar(50) NOT NULL,
  `earning_member_monthly_earning` int(50) NOT NULL,
  `earning_member_remarks` int(11) NOT NULL,
  `earning_member_annual_income` int(50) NOT NULL,
  `earning_member_cnic` varchar(15) NOT NULL,
  `earning_member_status` varchar(10) NOT NULL,
  `earning_member_professional_status` varchar(10) NOT NULL,
  `earning_member_company_name` varchar(50) NOT NULL,
  `earning_member_address` varchar(500) NOT NULL,
  `earning_member_mobile` varchar(50) NOT NULL,
  `earning_member_office_number` varchar(50) NOT NULL,
  `earning_member_grade` varchar(50) NOT NULL,
  `earning_member_ntn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educational_record`
--

CREATE TABLE `educational_record` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `applicant_institute` varchar(50) NOT NULL,
  `applicant_monthly_fee` int(50) NOT NULL,
  `start_school` varchar(50) NOT NULL,
  `finish_school` varchar(20) NOT NULL,
  `applicant_division` varchar(20) NOT NULL,
  `applicant_percentage` int(20) NOT NULL,
  `scholarshipname` varchar(50) NOT NULL,
  `scholarshipamount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family_member_info`
--

CREATE TABLE `family_member_info` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(10) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_relation` varchar(10) NOT NULL,
  `member_martial_status` varchar(10) NOT NULL,
  `member_remarks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `funds_availablity`
--

CREATE TABLE `funds_availablity` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `funds_frm_income` int(11) NOT NULL,
  `provider_relation` varchar(11) NOT NULL,
  `funds_amount` int(11) NOT NULL,
  `funds_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_expenditures`
--

CREATE TABLE `other_expenditures` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `telephone_last` int(11) NOT NULL,
  `electricity_last` int(11) NOT NULL,
  `gas_last` int(11) NOT NULL,
  `water_last` int(11) NOT NULL,
  `mobile_last` int(11) NOT NULL,
  `telephone_six` int(11) NOT NULL,
  `electricity_six` int(11) NOT NULL,
  `gas_six` int(11) NOT NULL,
  `water_six` int(11) NOT NULL,
  `kitchen_expenditures` int(11) NOT NULL,
  `utility_expenditures` int(11) NOT NULL,
  `medical_expenditures` int(11) NOT NULL,
  `traveling_expenditures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(10) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_gender` varchar(10) NOT NULL,
  `applicant_cnic` int(15) NOT NULL,
  `applicant_age` int(10) NOT NULL,
  `applicant_birth_place` varchar(100) NOT NULL,
  `applicant_present_address` varchar(250) NOT NULL,
  `applicant_permenent_address` varchar(250) NOT NULL,
  `applicant_residence_telephone` varchar(50) NOT NULL,
  `applicant_mobile` varchar(50) NOT NULL,
  `applicant_email` varchar(50) NOT NULL,
  `applicant_total_family_members` int(10) NOT NULL,
  `applicant_living_family_members` int(10) NOT NULL,
  `applicant_married_family_members` int(10) NOT NULL,
  `applicant_earning_members` int(10) NOT NULL,
  `applicant_not_earning_members` int(10) NOT NULL,
  `applicant_studying_members` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sibblings_studying`
--

CREATE TABLE `sibblings_studying` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `sibbling_name` varchar(50) NOT NULL,
  `sibbling_relation` varchar(50) NOT NULL,
  `sibbling_institue` varchar(50) NOT NULL,
  `sibbling_monthly_fee` int(20) NOT NULL,
  `sibbling_tution_fee` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport_assets`
--

CREATE TABLE `transport_assets` (
  `sr_no` int(11) NOT NULL,
  `applicant_id` int(10) NOT NULL,
  `transport_type` varchar(50) NOT NULL,
  `transport_model` varchar(50) NOT NULL,
  `transport_engine` varchar(50) NOT NULL,
  `transport_registration` varchar(20) NOT NULL,
  `ownership_period` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation_expenditure`
--
ALTER TABLE `accomodation_expenditure`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `agriculture_assets`
--
ALTER TABLE `agriculture_assets`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `assets_earning`
--
ALTER TABLE `assets_earning`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `assets_income`
--
ALTER TABLE `assets_income`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `career_goals`
--
ALTER TABLE `career_goals`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `earning_info`
--
ALTER TABLE `earning_info`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `educational_record`
--
ALTER TABLE `educational_record`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `family_member_info`
--
ALTER TABLE `family_member_info`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `funds_availablity`
--
ALTER TABLE `funds_availablity`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `other_expenditures`
--
ALTER TABLE `other_expenditures`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`sr_no`,`applicant_id`);

--
-- Indexes for table `sibblings_studying`
--
ALTER TABLE `sibblings_studying`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `transport_assets`
--
ALTER TABLE `transport_assets`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation_expenditure`
--
ALTER TABLE `accomodation_expenditure`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agriculture_assets`
--
ALTER TABLE `agriculture_assets`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assets_earning`
--
ALTER TABLE `assets_earning`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assets_income`
--
ALTER TABLE `assets_income`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `career_goals`
--
ALTER TABLE `career_goals`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `earning_info`
--
ALTER TABLE `earning_info`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educational_record`
--
ALTER TABLE `educational_record`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family_member_info`
--
ALTER TABLE `family_member_info`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funds_availablity`
--
ALTER TABLE `funds_availablity`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_expenditures`
--
ALTER TABLE `other_expenditures`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sibblings_studying`
--
ALTER TABLE `sibblings_studying`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transport_assets`
--
ALTER TABLE `transport_assets`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
