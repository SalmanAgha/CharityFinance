<?php
if (
	// isset($_POST["id1"]) &&
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
	isset($_POST["Intension"]) &&
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
	// $id1 = htmlentities($_POST["id1"]);
	// $date1 = htmlentities($_POST["date1"]; 
// $casetype1 = htmlentities($_POST["casetype1"]; 
// $casedesc1 = htmlentities($_POST["casedesc1"]; 
// $status1 = htmlentities($_POST["status1"]; 
// $name1 = htmlentities($_POST["name1"]; 
// $fathername1 = htmlentities($_POST["fathername1"]; 
// $cnic1 = htmlentities($_POST["cnic1"]; 
// $contact1 = htmlentities($_POST["contact1"]; 
// $email1 = htmlentities($_POST["email1"]; 
	$NoofMales = htmlentities($_POST["NoofMales"]);
	$NoofFemales = htmlentities($_POST["NoofFemales"]);
	$NoofDependents = htmlentities($_POST["NoofDependents"]);
	$NoofPersonEarning = htmlentities($_POST["NoofPersonEarning"]);
	$FamilyIncome = htmlentities($_POST["FamilyIncome"]);
	$MonthlyRation = htmlentities($_POST["MonthlyRation"]);
	$MonthlyHealthCare = htmlentities($_POST["MonthlyHealthCare"]);
	$MonthlyEducation = htmlentities($_POST["MonthlyEducation"]);
	$OtherExpenses = htmlentities($_POST["OtherExpenses"]);
	$TotalExpenses = htmlentities($_POST["TotalExpenses"]);
	$MonthlySirplusdeficit = htmlentities($_POST["MonthlySirplusdeficit"]);
	$CashBank = htmlentities($_POST["CashBank"]);
	$GoldSilver = htmlentities($_POST["GoldSilver"]);
	$ProvisionalFund = htmlentities($_POST["ProvisionalFund"]);
	$PaidCommittee = htmlentities($_POST["PaidCommittee"]);
	$SecurityDeposit = htmlentities($_POST["SecurityDeposit"]);
	$LoanGiven = htmlentities($_POST["LoanGiven"]);
	$OtherCurrency = htmlentities($_POST["OtherCurrency"]);
	$TradeAssets = htmlentities($_POST["TradeAssets"]);
	$UnnecessaryFlats = htmlentities($_POST["UnnecessaryFlats"]);
	$ExtraMobilePhones = htmlentities($_POST["ExtraMobilePhones"]);
	$ExtraVehicles = htmlentities($_POST["ExtraVehicles"]);
	$ExtraLivestocks = htmlentities($_POST["ExtraLivestocks"]);
	$TotalCountableAssets = htmlentities($_POST["TotalCountableAssets"]);
	$RentPayable = htmlentities($_POST["RentPayable"]);
	$SecurityDepositPayable = htmlentities($_POST["SecurityDepositPayable"]);
	$PayableAmountCommittee = htmlentities($_POST["PayableAmountCommittee"]);
	$UtilityBillsPayable = htmlentities($_POST["UtilityBillsPayable"]);
	$LoanPayable = htmlentities($_POST["LoanPayable"]);
	$TotalDeductableLiabilities = htmlentities($_POST["TotalDeductableLiabilities"]);
	$TotalCountableAssets = htmlentities($_POST["TotalCountableAssets"]);
	$TotalDeductableLiabiliities = htmlentities($_POST["TotalDeductableLiabiliities"]);
	$NetCoutableAssets = htmlentities($_POST["NetCoutableAssets"]);
	$CurrentZakatEvaluation = htmlentities($_POST["CurrentZakatEvaluation"]);
	$Muslim = htmlentities($_POST["Muslim"]);
	$Syed = htmlentities($_POST["Syed"]);
	$AgaKani = htmlentities($_POST["AgaKani"]);
	$ZakatEvaluation = htmlentities($_POST["ZakatEvaluation"]);
	$AmountApplied = htmlentities($_POST["AmountApplied"]);
	$FOAmount = htmlentities($_POST["FOAmount"]);
	$FORemarks2 = htmlentities($_POST["FORemarks2"]);
	$ExecutiveRelationship = htmlentities($_POST["ExecutiveRelationship"]);
	$ReferenceName = htmlentities($_POST["ReferenceName"]);
	$RefferedBy = htmlentities($_POST["RefferedBy"]);
	$Intension = htmlentities($_POST["Intension"]);
	$Experience = htmlentities($_POST["Experience"]);
	$Capability = htmlentities($_POST["Capability"]);
	$Training = htmlentities($_POST["Training"]);
	$OtherRemarks = htmlentities($_POST["OtherRemarks"]);
	$email = htmlentities($_POST["email"]);
	$fullname = htmlentities($_POST["fullname"]);
	$fathersname = htmlentities($_POST["fathersname"]);
	$contact = htmlentities($_POST["contact"]);
	$cnic = htmlentities($_POST["cnic"]);
	$casetype = htmlentities($_POST["casetype"]);
	$casedesc = htmlentities($_POST["casedesc"]);
	$NetSalary = htmlentities($_POST["NetSalary"]);
	$Address = htmlentities($_POST["Address"]);
	$natureofbusiness = htmlentities($_POST["natureofbusiness"]);
	$otherbusiness = htmlentities($_POST["otherbusiness"]);
	$city = htmlentities($_POST["city"]);
	$duplicatecheck = '';
	$result = "";
	include("../connect.php");
	if (!$connect) {
		$result = "Server Connection Error";
	} else {
		//Duplicate checking
		$stmt = $connect->prepare("Select CaseID from  tblmainform where caseid = ?");
		$stmt->bind_param('i', $id1);
		//Executing the statement
		$stmt->execute();
		//Binding variables to resultset
		$stmt->bind_result($duplicatecheck);
		while ($stmt->fetch()) {
			$duplicatecheck = $duplicatecheck;
		}
		// if ($duplicatecheck == "") {
			$stmt = $connect->prepare("INSERT INTO `tblmainform`(  `NoofMales`, `NoofFemales`,
				`NoofDependents`, `NoofPersonEarning`, `FamilyIncome`, `MonthlyRation`,
				`MonthlyHealthCare`, `MonthlyEducation`, `OtherExpenses`, `TotalExpenses`,
				`MonthlySirplusdeficit`, `CashBank`, `GoldSilver`, `ProvisionalFund`,
				`PaidCommittee`, `SecurityDeposit`, `LoanGiven`, `OtherCurrency`,
				`TradeAssets`, `UnnecessaryFlats`, `ExtraMobilePhones`, `ExtraVehicles`,
				`ExtraLivestocks`, `TotalCountableAssets`,`RentPayable`,
				`SecurityDepositPayable`, `PayableAmountCommittee`, `UtilityBillsPayable`,
				`LoanPayable`, `TtlDductLiabilities`, `TotalDeductableLiabiliities`,
				`NetCoutableAssets`, `CurrentZakatEvaluation`,`Muslim`,
				`Syed`, `AgaKani`, `ZakatEvaluation`,`AmountApplied`,
				`FOAmount`, `FORemarks2`,`ExecutiveRelationship`, `ReferenceName`, `RefferedBy`, `Intension`, `Experience`, `Capability`, `Training`, `OtherRemarks`,`DOC`, `casetype`, `caseDescription`, `Name`, `Fathersname`, `cnic`, `contact`, `email`, `status`, `address`, `netsalary`, `NOB`, `NOBdesc`, `city`) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,Now(),?,?,?,?,?,?,?,'New',?,?,?,?,?)");
			$stmt->bind_param(
				'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiissssiisssssssssssssssssssss',
				// $id1,
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
				$Intension,
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
					$result = "Inserted";
				// $last_id = $connect->insert_id;
				// $plot_approving = "UPDATE `tblmainform` SET  `FORemarks`='" . $FORemarks2 . "',`FOamount`='" . $FOAmount . "',`status`='Panel',`formid`='" . $last_id . "' WHERE `CaseID`=" . $id1 . "";
				// $run_querry = mysqli_query($connect, $plot_approving);
				// mysqli_close($connect);
				// if ($run_querry == "True") {
				// 	$result = "Inserted";
				// } else {
				// 	$result = "error";
				// }
			} else {
				$result = "Not Inserted";
			}
		// } else {
		// 	$result = "Duplicate Record";
		// }
		$data["result"] = $result;
		echo json_encode($data);
	}
}
?>