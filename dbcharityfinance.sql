-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 05:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcharityfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcase`
--

CREATE TABLE `tblcase` (
  `CaseID` int(11) NOT NULL,
  `DOC` timestamp NULL DEFAULT NULL,
  `casetype` varchar(20) DEFAULT NULL,
  `caseDescription` varchar(250) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Fathersname` varchar(100) DEFAULT NULL,
  `cnic` varchar(100) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `panelremarks` longtext DEFAULT NULL,
  `panelamount` int(11) DEFAULT NULL,
  `netsalary` varchar(10) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `formid` int(11) DEFAULT NULL,
  `FOremarks` longtext DEFAULT NULL,
  `FOamount` int(11) DEFAULT NULL,
  `NOB` varchar(30) DEFAULT NULL,
  `NOBdesc` longtext DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `otp` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcase`
--

INSERT INTO `tblcase` (`CaseID`, `DOC`, `casetype`, `caseDescription`, `Name`, `Fathersname`, `cnic`, `contact`, `email`, `status`, `panelremarks`, `panelamount`, `netsalary`, `address`, `formid`, `FOremarks`, `FOamount`, `NOB`, `NOBdesc`, `city`, `otp`) VALUES
(19, '2022-10-25 05:16:06', 'Business', 'I just want some investor.', 'Salman agha', 'Agha Asfandyar Khan', '4220114810127', '03347360763', 'aghasalmankhan14@gmail.com', 'Closed', 'Approved from CEO', 50000, '50000', 'Banglow b-122, Architect society, Gulistan e johar block 8 karachi', 2, 'This Case is completely genuine, my advice is to give him the complete money', 50000, 'Others', 'I want to start an tyre workshop', 'Karachi', '4488'),
(20, '2022-10-27 06:22:51', 'Business', 'This is case description', 'Salman agha', 'Agha Asfandyar Khan', '4220114810126', '03347360763', 'aghasalmankhan14@gmail.com', 'Closed', 'This is final amount', 300000, '50000', 'This is Address Field', 3, 'Thsi si field officer', 100000, 'Others', 'I want to describe this other business', 'Karachi', '7107'),
(21, '2022-11-11 09:54:42', 'Business', 'asd', 'Salman', 'Agha Asfandyar Khan', '4220114810177', '03347360763', 'rabeet@gmail.com', 'Reimbursed', 'Done', 30000, '500000', 'Rabia City', 4, 'this case is valid', 20000, 'Others', 'asd', 'Karachi', '9740'),
(22, '2022-12-16 12:23:55', 'Business', 'I want to apply for charity xyz desc', 'Nasir Ahmed', 'Ahmed', '4220114812566', '03347360763', 'nasir@gmail.com', 'Approved', 'We approve this case', 50000, '20000', 'Malir Cantt', 5, 'This case is eligible', 50000, 'Others', 'This is dummy business', 'Karachi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblfinance`
--

CREATE TABLE `tblfinance` (
  `id` int(11) NOT NULL,
  `ChequeNumber` varchar(50) DEFAULT NULL,
  `ChequeAmount` varchar(10) DEFAULT NULL,
  `ChequeRecName` varchar(100) DEFAULT NULL,
  `ChequeRecCnic` varchar(14) DEFAULT NULL,
  `CaseId` int(11) DEFAULT NULL,
  `StaffID` int(11) DEFAULT NULL,
  `DisbursedDate` timestamp NULL DEFAULT NULL,
  `bankname` varchar(100) DEFAULT NULL,
  `PaymentType` varchar(10) DEFAULT NULL,
  `CashAmount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfinance`
--

INSERT INTO `tblfinance` (`id`, `ChequeNumber`, `ChequeAmount`, `ChequeRecName`, `ChequeRecCnic`, `CaseId`, `StaffID`, `DisbursedDate`, `bankname`, `PaymentType`, `CashAmount`) VALUES
(8, '', '', '', '', 19, 1, '2022-10-25 05:28:47', '', 'Cash', 50000),
(9, '1212121212', '300000', 'Salman', '4220114810127', 20, 1, '2022-10-27 06:31:06', 'Bank Al Habib', 'Cheque', 0),
(10, '123', '12', 'sadsa', '4220114810127', 21, 1, '2022-11-11 09:57:31', 'Faysal Bank', 'Cheque', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblmainform`
--

CREATE TABLE `tblmainform` (
  `id` int(11) NOT NULL,
  `caseid` int(11) DEFAULT NULL,
  `NoofMales` int(11) DEFAULT NULL,
  `NoofFemales` int(11) DEFAULT NULL,
  `NoofDependents` int(11) DEFAULT NULL,
  `NoofPersonEarning` int(11) DEFAULT NULL,
  `FamilyIncome` int(11) DEFAULT NULL,
  `MonthlyRation` int(11) DEFAULT NULL,
  `MonthlyHealthCare` int(11) DEFAULT NULL,
  `MonthlyEducation` int(11) DEFAULT NULL,
  `OtherExpenses` int(11) DEFAULT NULL,
  `TotalExpenses` int(11) DEFAULT NULL,
  `MonthlySirplusdeficit` int(11) DEFAULT NULL,
  `CashBank` int(11) DEFAULT NULL,
  `GoldSilver` int(11) DEFAULT NULL,
  `ProvisionalFund` int(11) DEFAULT NULL,
  `PaidCommittee` int(11) DEFAULT NULL,
  `SecurityDeposit` int(11) DEFAULT NULL,
  `LoanGiven` int(11) DEFAULT NULL,
  `OtherCurrency` int(11) DEFAULT NULL,
  `TradeAssets` int(11) DEFAULT NULL,
  `UnnecessaryFlats` int(11) DEFAULT NULL,
  `ExtraMobilePhones` int(11) DEFAULT NULL,
  `ExtraVehicles` int(11) DEFAULT NULL,
  `ExtraLivestocks` int(11) DEFAULT NULL,
  `TotalCountableAssets` int(11) DEFAULT NULL,
  `RentPayable` int(11) DEFAULT NULL,
  `SecurityDepositPayable` int(11) DEFAULT NULL,
  `PayableAmountCommittee` int(11) DEFAULT NULL,
  `UtilityBillsPayable` int(11) DEFAULT NULL,
  `LoanPayable` int(11) DEFAULT NULL,
  `TtlDductLiabilities` int(11) DEFAULT NULL,
  `TotalDeductableLiabiliities` int(11) DEFAULT NULL,
  `NetCoutableAssets` int(11) DEFAULT NULL,
  `CurrentZakatEvaluation` int(11) DEFAULT NULL,
  `Muslim` varchar(3) DEFAULT NULL,
  `Syed` varchar(3) DEFAULT NULL,
  `AgaKani` varchar(10) DEFAULT NULL,
  `ZakatEvaluation` varchar(10) DEFAULT NULL,
  `AmountApplied` int(11) DEFAULT NULL,
  `FOAmount` int(11) DEFAULT NULL,
  `FORemarks2` longtext DEFAULT NULL,
  `ExecutiveRelationship` varchar(3) DEFAULT NULL,
  `ReferenceName` varchar(50) DEFAULT NULL,
  `RefferedBy` varchar(50) DEFAULT NULL,
  `Intension` varchar(50) DEFAULT NULL,
  `Experience` varchar(50) DEFAULT NULL,
  `Capability` varchar(50) DEFAULT NULL,
  `Training` varchar(50) DEFAULT NULL,
  `OtherRemarks` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmainform`
--

INSERT INTO `tblmainform` (`id`, `caseid`, `NoofMales`, `NoofFemales`, `NoofDependents`, `NoofPersonEarning`, `FamilyIncome`, `MonthlyRation`, `MonthlyHealthCare`, `MonthlyEducation`, `OtherExpenses`, `TotalExpenses`, `MonthlySirplusdeficit`, `CashBank`, `GoldSilver`, `ProvisionalFund`, `PaidCommittee`, `SecurityDeposit`, `LoanGiven`, `OtherCurrency`, `TradeAssets`, `UnnecessaryFlats`, `ExtraMobilePhones`, `ExtraVehicles`, `ExtraLivestocks`, `TotalCountableAssets`, `RentPayable`, `SecurityDepositPayable`, `PayableAmountCommittee`, `UtilityBillsPayable`, `LoanPayable`, `TtlDductLiabilities`, `TotalDeductableLiabiliities`, `NetCoutableAssets`, `CurrentZakatEvaluation`, `Muslim`, `Syed`, `AgaKani`, `ZakatEvaluation`, `AmountApplied`, `FOAmount`, `FORemarks2`, `ExecutiveRelationship`, `ReferenceName`, `RefferedBy`, `Intension`, `Experience`, `Capability`, `Training`, `OtherRemarks`) VALUES
(2, 19, 1, 1, 2, 2, 50000, 30000, 20000, 10000, 10000, 70000, 20000, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10000, 10000, 20000, 0, 5000, 10000, 45000, 45000, 30000, 1, 'Yes', 'No', 'No', 'Eligible', 50000, 50000, 'This Case is completely genuine, my advice is to give him the complete money', 'No', '', 'Zubair', 'Complete Will', 'Expert', 'Beginner', 'No training', 'No other remarks'),
(3, 20, 2, 3, 5, 1, 1, 50000, 30000, 40000, 50000, 170000, 169999, 50000, 30000, 40000, 50000, 60000, 20000, 3000, 10000, 20000, 3000, 10000, 500000, 796000, 10000, 3000, 4000, 5000, 20000, 42000, 42000, 20000, 30000, 'Yes', 'No', 'No', 'Eligible', 100000, 100000, 'Thsi si field officer', 'No', '', 'Agha', 'Yes', 'Intermediate', 'Expert', 'testing', 'This is verifying remarks'),
(4, 21, 1, 11, 12, 1, 1, 1, 1, 1, 1, 4, 3, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 22, 1, 1, 1, 1, 1, 5, 5, 1, 1, 'Yes', 'No', 'No', 'Eligible', 5000000, 20000, 'this case is valid', 'No', '', 'Agha', 'Yes', 'Expert', 'Expert', 'asad', 'asd'),
(5, 22, 1, 1, 2, 1, 10000, 20000, 20000, 2000, 20000, 62000, 52000, 1000, 0, 0, 0, 0, 0, 0, 10000, 0, 0, 0, 0, 11000, 10000, 10000, 0, 0, 10000, 30000, 30000, 10000, 10000, 'Yes', 'No', 'No', 'Eligible', 100000, 50000, 'This case is eligible', 'Yes', 'Imran', 'Zubair', 'Yes', 'Intermediate', 'Beginner', '6 months', 'Extra Remarks');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `staffid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`staffid`, `username`, `email`, `password`, `role`, `status`) VALUES
(1, 'Salman Agha', 'aghasalmankhan95@gmail.com', 'agha', 'Field Officer', 'Active'),
(2, 'Panel', 'panel@gmail.com', 'agha', 'Panel', 'Active'),
(3, 'Finance', 'Finance@gmail.com', 'agha', 'Finance', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcase`
--
ALTER TABLE `tblcase`
  ADD PRIMARY KEY (`CaseID`);

--
-- Indexes for table `tblfinance`
--
ALTER TABLE `tblfinance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmainform`
--
ALTER TABLE `tblmainform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`staffid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcase`
--
ALTER TABLE `tblcase`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblfinance`
--
ALTER TABLE `tblfinance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblmainform`
--
ALTER TABLE `tblmainform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
