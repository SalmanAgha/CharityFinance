<?php
if (
	isset($_POST["id1"]) &&
	// isset($_POST["date1"]) && 
	// isset($_POST["casetype1"]) && 
	// isset($_POST["casedesc1"]) && 
	// isset($_POST["status1"]) && 
	// isset($_POST["name1"]) && 
	// isset($_POST["fathername1"]) && 
	// isset($_POST["cnic1"]) && 
	// isset($_POST["contact1"]) && 
	// isset($_POST["email1"]) &&  

	isset($_POST["NoofMales"]) &&
	isset($_POST["NoofFemales"]) &&
	isset($_POST["NoofDependents"]) &&
	isset($_POST["NoofPersonEarning"]) &&
	isset($_POST["FamilyIncome"]) &&
	isset($_POST["MonthlyRation"]) &&
	isset($_POST["MonthlyHealthCare"]) &&
	isset($_POST["MonthlyEducation"]) &&
	isset($_POST["OtherExpenses"]) &&
	isset($_POST["TotalExpenses"]) &&

	isset($_POST["MonthlySirplusdeficit"]) &&
	isset($_POST["CashBank"]) &&
	isset($_POST["GoldSilver"]) &&
	isset($_POST["ProvisionalFund"]) &&
	isset($_POST["PaidCommittee"]) &&
	isset($_POST["SecurityDeposit"]) &&
	isset($_POST["LoanGiven"]) &&
	isset($_POST["OtherCurrency"]) &&
	isset($_POST["TradeAssets"]) &&
	isset($_POST["UnnecessaryFlats"]) &&

	isset($_POST["ExtraMobilePhones"]) &&
	isset($_POST["ExtraVehicles"]) &&
	isset($_POST["ExtraLivestocks"]) &&
	isset($_POST["TotalCountableAssets"]) &&

	isset($_POST["RentPayable"]) &&
	isset($_POST["SecurityDepositPayable"]) &&
	isset($_POST["PayableAmountCommittee"]) &&
	isset($_POST["UtilityBillsPayable"]) &&
	isset($_POST["LoanPayable"]) &&
	isset($_POST["TotalDeductableLiabilities"]) &&

	isset($_POST["TotalCountableAssets"]) &&
	isset($_POST["TotalDeductableLiabiliities"]) &&
	isset($_POST["NetCoutableAssets"]) &&
	isset($_POST["CurrentZakatEvaluation"]) &&
	isset($_POST["Muslim"]) &&
	isset($_POST["Syed"]) &&
	isset($_POST["AgaKani"]) &&
	isset($_POST["ZakatEvaluation"]) &&

	isset($_POST["ExecutiveRelationship"]) &&
	isset($_POST["ReferenceName"]) &&
	isset($_POST["RefferedBy"]) &&

	isset($_POST["Intention"]) &&
	isset($_POST["Experience"]) &&
	isset($_POST["Capability"]) &&
	isset($_POST["Training"]) &&
	isset($_POST["OtherRemarks"]) && isset($_POST["email"]) && isset($_POST["fullname"]) && isset($_POST["fathersname"])
	&& isset($_POST["contact"]) && isset($_POST["cnic"]) && isset($_POST["casetype"])
	&& isset($_POST["casedesc"]) && isset($_POST["NetSalary"])
	&& isset($_POST["Address"]) && isset($_POST["natureofbusiness"]) && isset($_POST["otherbusiness"])
	&& isset($_POST["city"])

	// isset($_POST["AmountApplied"]) && 
	// isset($_POST["FOAmount"]) &&  
	// isset($_POST["FORemarks2"])
) {


	$id1 = filter_var(htmlentities($_POST["id1"]), FILTER_SANITIZE_MAGIC_QUOTES);
	// $date1 = filter_var(htmlentities($_POST["date1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
// $casetype1 = filter_var(htmlentities($_POST["casetype1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
// $casedesc1 = filter_var(htmlentities($_POST["casedesc1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
// $status1 = filter_var(htmlentities($_POST["status1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
// $name1 = filter_var(htmlentities($_POST["name1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
// $fathername1 = filter_var(htmlentities($_POST["fathername1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
// $cnic1 = filter_var(htmlentities($_POST["cnic1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
// $contact1 = filter_var(htmlentities($_POST["contact1"]),FILTER_SANITIZE_MAGIC_QUOTES); 
// $email1 = filter_var(htmlentities($_POST["email1"]),FILTER_SANITIZE_MAGIC_QUOTES); 

	$NoofMales = filter_var(htmlentities($_POST["NoofMales"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$NoofFemales = filter_var(htmlentities($_POST["NoofFemales"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$NoofDependents = filter_var(htmlentities($_POST["NoofDependents"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$NoofPersonEarning = filter_var(htmlentities($_POST["NoofPersonEarning"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$FamilyIncome = filter_var(htmlentities($_POST["FamilyIncome"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$MonthlyRation = filter_var(htmlentities($_POST["MonthlyRation"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$MonthlyHealthCare = filter_var(htmlentities($_POST["MonthlyHealthCare"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$MonthlyEducation = filter_var(htmlentities($_POST["MonthlyEducation"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$OtherExpenses = filter_var(htmlentities($_POST["OtherExpenses"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$TotalExpenses = filter_var(htmlentities($_POST["TotalExpenses"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$MonthlySirplusdeficit = filter_var(htmlentities($_POST["MonthlySirplusdeficit"]), FILTER_SANITIZE_MAGIC_QUOTES);

	$CashBank = filter_var(htmlentities($_POST["CashBank"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$GoldSilver = filter_var(htmlentities($_POST["GoldSilver"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$ProvisionalFund = filter_var(htmlentities($_POST["ProvisionalFund"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$PaidCommittee = filter_var(htmlentities($_POST["PaidCommittee"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$SecurityDeposit = filter_var(htmlentities($_POST["SecurityDeposit"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$LoanGiven = filter_var(htmlentities($_POST["LoanGiven"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$OtherCurrency = filter_var(htmlentities($_POST["OtherCurrency"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$TradeAssets = filter_var(htmlentities($_POST["TradeAssets"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$UnnecessaryFlats = filter_var(htmlentities($_POST["UnnecessaryFlats"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$ExtraMobilePhones = filter_var(htmlentities($_POST["ExtraMobilePhones"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$ExtraVehicles = filter_var(htmlentities($_POST["ExtraVehicles"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$ExtraLivestocks = filter_var(htmlentities($_POST["ExtraLivestocks"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$TotalCountableAssets = filter_var(htmlentities($_POST["TotalCountableAssets"]), FILTER_SANITIZE_MAGIC_QUOTES);



	$RentPayable = filter_var(htmlentities($_POST["RentPayable"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$SecurityDepositPayable = filter_var(htmlentities($_POST["SecurityDepositPayable"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$PayableAmountCommittee = filter_var(htmlentities($_POST["PayableAmountCommittee"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$UtilityBillsPayable = filter_var(htmlentities($_POST["UtilityBillsPayable"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$LoanPayable = filter_var(htmlentities($_POST["LoanPayable"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$TotalDeductableLiabilities = filter_var(htmlentities($_POST["TotalDeductableLiabilities"]), FILTER_SANITIZE_MAGIC_QUOTES);

	$TotalCountableAssets = filter_var(htmlentities($_POST["TotalCountableAssets"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$TotalDeductableLiabiliities = filter_var(htmlentities($_POST["TotalDeductableLiabiliities"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$NetCoutableAssets = filter_var(htmlentities($_POST["NetCoutableAssets"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$CurrentZakatEvaluation = filter_var(htmlentities($_POST["CurrentZakatEvaluation"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$Muslim = filter_var(htmlentities($_POST["Muslim"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$Syed = filter_var(htmlentities($_POST["Syed"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$AgaKani = filter_var(htmlentities($_POST["AgaKani"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$ZakatEvaluation = filter_var(htmlentities($_POST["ZakatEvaluation"]), FILTER_SANITIZE_MAGIC_QUOTES);

	$AmountApplied = filter_var(htmlentities($_POST["AmountApplied"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$FOAmount = filter_var(htmlentities($_POST["FOAmount"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$FORemarks2 = filter_var(htmlentities($_POST["FORemarks2"]), FILTER_SANITIZE_MAGIC_QUOTES);

	$ExecutiveRelationship = filter_var(htmlentities($_POST["ExecutiveRelationship"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$ReferenceName = filter_var(htmlentities($_POST["ReferenceName"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$RefferedBy = filter_var(htmlentities($_POST["RefferedBy"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$Intention = filter_var(htmlentities($_POST["Intension"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$Experience = filter_var(htmlentities($_POST["Experience"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$Capability = filter_var(htmlentities($_POST["Capability"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$Training = filter_var(htmlentities($_POST["Training"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$OtherRemarks = filter_var(htmlentities($_POST["OtherRemarks"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$email = filter_var(htmlentities($_POST["email"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$fullname = filter_var(htmlentities($_POST["fullname"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$fathersname = filter_var(htmlentities($_POST["fathersname"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$contact = filter_var(htmlentities($_POST["contact"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$cnic = filter_var(htmlentities($_POST["cnic"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$casetype = filter_var(htmlentities($_POST["casetype"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$casedesc = filter_var(htmlentities($_POST["casedesc"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$NetSalary = filter_var(htmlentities($_POST["NetSalary"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$Address = filter_var(htmlentities($_POST["Address"]), FILTER_SANITIZE_MAGIC_QUOTES);

	$natureofbusiness = filter_var(htmlentities($_POST["natureofbusiness"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$otherbusiness = filter_var(htmlentities($_POST["otherbusiness"]), FILTER_SANITIZE_MAGIC_QUOTES);
	$city = filter_var(htmlentities($_POST["city"]), FILTER_SANITIZE_MAGIC_QUOTES);


	$duplicatecheck = '';


	$result = "";


	include("../connect.php");
	if (!$connect) {
		$result = "Server Connection Error";

	} else {


		//Duplicate checking
		$stmt = $connect->prepare("Select CaseID from checking where caseid = ?");
		$stmt->bind_param('i', $id1);


		//Executing the statement
		$stmt->execute();

		//Binding variables to resultset
		$stmt->bind_result($duplicatecheck);


		while ($stmt->fetch()) {
			$duplicatecheck = $duplicatecheck;
		}


		if ($duplicatecheck == "") {

			$stmt = $connect->prepare("INSERT INTO `checking`(  `CaseID`,`NoofMales`, `NoofFemales`,
	`NoofDependents`, `NoofPersonEarning`, `FamilyIncome`, `MonthlyRation`,
	`MonthlyHealthCare`, `MonthlyEducation`, `OtherExpenses`, `TotalExpenses`,
	`MonthlySirplusdeficit`, `CashBank`, `GoldSilver`, `ProvisionalFund`,
	`PaidCommittee`, `SecurityDeposit`, `LoanGiven`, `OtherCurrency`,
	`TradeAssets`, `UnnecessaryFlats`, `ExtraMobilePhones`, `ExtraVehicles`,
	`ExtraLivestocks`, `TotalCountableAssets`,`RentPayable`,
	`SecurityDepositPayable`, `PayableAmountCommittee`, `UtilityBillsPayable`,
	`LoanPayable`, `TtlDductLiabilities`, `TotalDeductableLiabiliities`,
	`NetCoutableAssets`, `CurrentZakatEvaluation`,`Muslim`,
	`Syed`, `AghaKhani`, `ZakatEvaluation`,`AmountApplied`,
	`FOAmount`, `FORemarks2`,`ExecutiveRelationship`, `ReferenceName`, `RefferedBy`, `Intention`, `Experience`, `Capability`, `Training`, `OtherRemarks`, `Casetype`, `CaseDescription`, `Name`, `FathersName`, `Cnic`, `Contact`, `Email`, `Status`, `Address`, `NetSalary`, `NOB`, `NOBDesc`, `City`, `DOC`) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,'New',?,?,?,?,?,Now())");
			$stmt->bind_param(
				'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',
				$id1,
				$NoofMales,
				$NoofFemales,
				$NoofDependents,
				$NoofPersonEarning,
				$FamilyIncome,
				$MonthlyRation,
				$MonthlyHealthCare,
				$MonthlyEducation,
				$OtherExpenses,
				$TotalExpenses,
				$MonthlySirplusdeficit,
				$CashBank,
				$GoldSilver,
				$ProvisionalFund,
				$PaidCommittee,
				$SecurityDeposit,
				$LoanGiven,
				$OtherCurrency,
				$TradeAssets,
				$UnnecessaryFlats,
				$ExtraMobilePhones,
				$ExtraVehicles,
				$ExtraLivestocks,
				$TotalCountableAssets,
				$RentPayable,
				$SecurityDepositPayable,
				$PayableAmountCommittee,
				$UtilityBillsPayable,
				$LoanPayable,
				$TotalDeductableLiabilities,
				$TotalDeductableLiabiliities,
				$NetCoutableAssets,
				$CurrentZakatEvaluation,
				$Muslim,
				$Syed,
				$AgaKani,
				$ZakatEvaluation
				,
				$AmountApplied,
				$FOAmount,
				$FORemarks2,
				$ExecutiveRelationship,
				$ReferenceName,
				$RefferedBy,
				$Intention,
				$Experience,
				$Capability,
				$Training,
				$OtherRemarks,
				$casetype,
				$casedesc,
				$fullname,
				$fathersname,
				$cnic,
				$contact,
				$email,
				$Address,
				$NetSalary,
				$natureofbusiness,
				$otherbusiness,
				$city
			);

			$stmt->execute();
			if ($stmt == true) {
				$last_id = $connect->insert_id;
				$plot_approving = "UPDATE `checking` SET  `FORemarks`='" . $FORemarks2 . "',`FOamount`='" . $FOAmount . "',`status`='Panel',`formid`='" . $last_id . "' WHERE `CaseID`=" . $id1 . "";
				$run_querry = mysqli_query($connect, $plot_approving);
				mysqli_close($connect);
				if ($run_querry == "True") {
					$result = "Inserted";
				} else {
					$result = "error";
				}

			} else {
				$result = "Not Inserted";
			}


		} else {
			$result = "Duplicate Record";
		}




		$data["result"] = $result;
		echo json_encode($data);


	}









}



?>