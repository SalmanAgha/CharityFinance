<?php
if (

	
	isset($_POST['caseid']) &&
	isset($_POST['emailc']) &&
isset($_POST['fullnamec']) &&
isset($_POST['fathersnamec']) &&
isset($_POST['contactc']) &&
isset($_POST['cityc']) &&
isset($_POST['NetSalaryc']) &&
isset($_POST['cnicc']) &&
isset($_POST['Addressc']) &&
isset($_POST['casetypec']) &&
isset($_POST['natureofbusinessc']) &&
isset($_POST['otherbusinessc']) &&
isset($_POST['casedescc']) &&
isset($_POST['NoofMalesc']) &&
isset($_POST['NoofFemalesc']) &&
isset($_POST['NoofDependentsc']) &&
isset($_POST['NoofPersonEarningc']) &&
isset($_POST['FamilyIncomec']) &&
isset($_POST['MonthlyRationc']) &&
isset($_POST['MonthlyHealthCarec']) &&
isset($_POST['MonthlyEducationc']) &&
isset($_POST['OtherExpensesc']) &&
isset($_POST['TotalExpensesc']) &&
isset($_POST['MonthlySirplusdeficitc']) &&
isset($_POST['CashBankc']) &&
isset($_POST['GoldSilverc']) &&
isset($_POST['ProvisionalFundc']) &&
isset($_POST['PaidCommitteec']) &&
isset($_POST['SecurityDepositc']) &&
isset($_POST['LoanGivenc']) &&
isset($_POST['OtherCurrencyc']) &&
isset($_POST['TradeAssetsc']) &&
isset($_POST['UnnecessaryFlatsc']) &&
isset($_POST['ExtraMobilePhonesc']) &&
isset($_POST['ExtraVehiclesc']) &&
isset($_POST['ExtraLivestocksc']) &&
isset($_POST['TotalCountableAssetsc']) &&
isset($_POST['RentPayablec']) &&
isset($_POST['SecurityDepositPayablec']) &&
isset($_POST['PayableAmountCommitteec']) &&
isset($_POST['UtilityBillsPayablec']) &&
isset($_POST['LoanPayablec']) &&
isset($_POST['TotalDeductableLiabilitiesc']) &&
isset($_POST['TotalCountableAssets2c']) &&
isset($_POST['TotalDeductableLiabiliitiesc']) &&
isset($_POST['NetCoutableAssetsc']) &&
isset($_POST['CurrentZakatEvaluationc']) &&
isset($_POST['Muslimc']) &&
isset($_POST['Syedc']) &&
isset($_POST['AgaKanic']) &&
isset($_POST['ZakatEvaluationc']) &&
isset($_POST['ExecutiveRelationshipc']) &&
isset($_POST['ReferenceNamec']) &&
isset($_POST['RefferedByc']) &&
isset($_POST['Intensionc']) &&
isset($_POST['Experiencec']) &&
isset($_POST['Capabilityc']) &&
isset($_POST['Trainingc']) &&
isset($_POST['OtherRemarksc']) 
) {
	
$caseid = htmlentities($_POST['caseid']);
$emailc = htmlentities($_POST['emailc']);
$fullnamec = htmlentities($_POST['fullnamec']);
$fathersnamec = htmlentities($_POST['fathersnamec']);
$contactc = htmlentities($_POST['contactc']);
$cityc = htmlentities($_POST['cityc']);
$NetSalaryc = htmlentities($_POST['NetSalaryc']);
$cnicc = htmlentities($_POST['cnicc']);
$Addressc = htmlentities($_POST['Addressc']);
$casetypec = htmlentities($_POST['casetypec']);
$natureofbusinessc = htmlentities($_POST['natureofbusinessc']);
$otherbusinessc = htmlentities($_POST['otherbusinessc']);
$casedescc = htmlentities($_POST['casedescc']);
$NoofMalesc = htmlentities($_POST['NoofMalesc']);
$NoofFemalesc = htmlentities($_POST['NoofFemalesc']);
$NoofDependentsc = htmlentities($_POST['NoofDependentsc']);
$NoofPersonEarningc = htmlentities($_POST['NoofPersonEarningc']);
$FamilyIncomec = htmlentities($_POST['FamilyIncomec']);
$MonthlyRationc = htmlentities($_POST['MonthlyRationc']);
$MonthlyHealthCarec = htmlentities($_POST['MonthlyHealthCarec']);
$MonthlyEducationc = htmlentities($_POST['MonthlyEducationc']);
$OtherExpensesc = htmlentities($_POST['OtherExpensesc']);
$TotalExpensesc = htmlentities($_POST['TotalExpensesc']);
$MonthlySirplusdeficitc = htmlentities($_POST['MonthlySirplusdeficitc']);
$CashBankc = htmlentities($_POST['CashBankc']);
$GoldSilverc = htmlentities($_POST['GoldSilverc']);
$ProvisionalFundc = htmlentities($_POST['ProvisionalFundc']);
$PaidCommitteec = htmlentities($_POST['PaidCommitteec']);
$SecurityDepositc = htmlentities($_POST['SecurityDepositc']);
$LoanGivenc = htmlentities($_POST['LoanGivenc']);
$OtherCurrencyc = htmlentities($_POST['OtherCurrencyc']);
$TradeAssetsc = htmlentities($_POST['TradeAssetsc']);
$UnnecessaryFlatsc = htmlentities($_POST['UnnecessaryFlatsc']);
$ExtraMobilePhonesc = htmlentities($_POST['ExtraMobilePhonesc']);
$ExtraVehiclesc = htmlentities($_POST['ExtraVehiclesc']);
$ExtraLivestocksc = htmlentities($_POST['ExtraLivestocksc']);
$TotalCountableAssetsc = htmlentities($_POST['TotalCountableAssetsc']);
$RentPayablec = htmlentities($_POST['RentPayablec']);
$SecurityDepositPayablec = htmlentities($_POST['SecurityDepositPayablec']);
$PayableAmountCommitteec = htmlentities($_POST['PayableAmountCommitteec']);
$UtilityBillsPayablec = htmlentities($_POST['UtilityBillsPayablec']);
$LoanPayablec = htmlentities($_POST['LoanPayablec']);
$TotalDeductableLiabilitiesc = htmlentities($_POST['TotalDeductableLiabilitiesc']);
$TotalCountableAssets2c = htmlentities($_POST['TotalCountableAssets2c']);
$TotalDeductableLiabiliitiesc = htmlentities($_POST['TotalDeductableLiabiliitiesc']);
$NetCoutableAssetsc = htmlentities($_POST['NetCoutableAssetsc']);
$CurrentZakatEvaluationc = htmlentities($_POST['CurrentZakatEvaluationc']);
$Muslimc = htmlentities($_POST['Muslimc']);
$Syedc = htmlentities($_POST['Syedc']);
$AgaKanic = htmlentities($_POST['AgaKanic']);
$ZakatEvaluationc = htmlentities($_POST['ZakatEvaluationc']);
$ExecutiveRelationshipc = htmlentities($_POST['ExecutiveRelationshipc']);
$ReferenceNamec = htmlentities($_POST['ReferenceNamec']);
$RefferedByc = htmlentities($_POST['RefferedByc']);
$Intensionc = htmlentities($_POST['Intensionc']);
$Experiencec = htmlentities($_POST['Experiencec']);
$Capabilityc = htmlentities($_POST['Capabilityc']);
$Trainingc = htmlentities($_POST['Trainingc']);
$OtherRemarksc = htmlentities($_POST['OtherRemarksc']);
$status = 'Validated';





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
		if ($duplicatecheck == "") {
			$stmt = $connect->prepare("INSERT INTO `checking`(  `caseid`,`email`,`Name`, `Fathersname`, `contact`,`city`,`netsalary`,
			 `cnic`,`address`,`casetype`, `NOB`,`NOBdesc`,`caseDescription`,`NoofMales`, `NoofFemales`,
				`NoofDependents`, `NoofPersonEarning`, `FamilyIncome`, `MonthlyRation`,
				`MonthlyHealthCare`, `MonthlyEducation`, `OtherExpenses`, `TotalExpenses`,
				`MonthlySirplusdeficit`, `CashBank`, `GoldSilver`, `ProvisionalFund`,
				`PaidCommittee`, `SecurityDeposit`, `LoanGiven`, `OtherCurrency`,
				`TradeAssets`, `UnnecessaryFlats`, `ExtraMobilePhones`, `ExtraVehicles`,
				`ExtraLivestocks`, `TotalCountableAssets`,`RentPayable`,
				`SecurityDepositPayable`, `PayableAmountCommittee`, `UtilityBillsPayable`,
				`LoanPayable`,  `TotalDeductableLiabiliities`,
				`NetCoutableAssets`, `CurrentZakatEvaluation`,`Muslim`,
				`Syed`, `AgaKani`, `ZakatEvaluation`,`ExecutiveRelationship`, `ReferenceName`, `RefferedBy`, `Intension`, `Experience`, `Capability`, `Training`, `OtherRemarks`, `status` ) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param(
				'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',
				$caseid,$emailc, $fullnamec, $fathersnamec, $contactc, $cityc, $NetSalaryc, $cnicc, $Addressc, $casetypec, $natureofbusinessc, $otherbusinessc, $casedescc, $NoofMalesc, $NoofFemalesc, $NoofDependentsc, $NoofPersonEarningc, $FamilyIncomec, $MonthlyRationc, $MonthlyHealthCarec, $MonthlyEducationc, $OtherExpensesc, $TotalExpensesc, $MonthlySirplusdeficitc, $CashBankc, $GoldSilverc, $ProvisionalFundc, $PaidCommitteec, $SecurityDepositc, $LoanGivenc, $OtherCurrencyc, $TradeAssetsc, $UnnecessaryFlatsc, $ExtraMobilePhonesc, $ExtraVehiclesc, $ExtraLivestocksc, $TotalCountableAssetsc, $RentPayablec, $SecurityDepositPayablec, $PayableAmountCommitteec, $UtilityBillsPayablec, $LoanPayablec, 
					$TotalDeductableLiabilitiesc,   
					$NetCoutableAssetsc, $CurrentZakatEvaluationc, $Muslimc, $Syedc, $AgaKanic, $ZakatEvaluationc, $ExecutiveRelationshipc, $ReferenceNamec, $RefferedByc, $Intensionc, $Experiencec, $Capabilityc, $Trainingc, $OtherRemarksc, $status
			);
			$stmt->execute();
			if ($stmt == true) {
					$result = "Inserted";

						$plot_approving="UPDATE `tblmainform` SET `status`='".$status."' WHERE `CaseID`=".$caseid."";
    	$run_querry=mysqli_query($connect,$plot_approving);
    	mysqli_close($connect);
				



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