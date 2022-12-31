jQuery('.numbersOnly').keyup(function () {
    this.value = this.value.replace(/[^0-9\.,]/g, '');
});



function onloadss(){




    var caseid = $("#id1").val();
    var emailc = '';
    if($('#emailc').is(':checked') == true){emailc = 'Yes';}
    else {emailc = 'No';} 

    var fullnamec = '';
    if($('#fullnamec').is(':checked') == true){fullnamec = 'Yes';}
    else {fullnamec = 'No';}

    var fathersnamec = '';
    if($('#fathersnamec').is(':checked') == true){fathersnamec = 'Yes';}
    else {fathersnamec = 'No';}

    var contactc = '';
    if($('#contactc').is(':checked') == true){contactc = 'Yes';}
    else {contactc = 'No';}

    var cityc = '';
    if($('#cityc').is(':checked') == true){cityc = 'Yes';}
    else {cityc = 'No';}

    var NetSalaryc = '';
    if($('#NetSalaryc').is(':checked') == true){NetSalaryc = 'Yes';}
    else {NetSalaryc = 'No';}

    var cnicc = '';
    if($('#cnicc').is(':checked') == true){cnicc = 'Yes';}
    else {cnicc = 'No';}

    var Addressc = '';
    if($('#Addressc').is(':checked') == true){Addressc = 'Yes';}
    else {Addressc = 'No';}

    var casetypec = '';
    if($('#casetypec').is(':checked') == true){casetypec = 'Yes';}
    else {casetypec = 'No';}

    var natureofbusinessc = '';
    if($('#natureofbusinessc').is(':checked') == true){natureofbusinessc = 'Yes';}
    else {natureofbusinessc = 'No';}

    var otherbusinessc = '';
    if($('#otherbusinessc').is(':checked') == true){otherbusinessc = 'Yes';}
    else {otherbusinessc = 'No';}

    var casedescc = '';
    if($('#casedescc').is(':checked') == true){casedescc = 'Yes';}
    else {casedescc = 'No';}




    var NoofMalesc = '';
    if($('#NoofMalesc').is(':checked') == true){NoofMalesc = 'Yes';}
    else {NoofMalesc = 'No';}

    var NoofFemalesc = '';
    if($('#NoofFemalesc').is(':checked') == true){NoofFemalesc = 'Yes';}
    else {NoofFemalesc = 'No';}

    var NoofDependentsc = '';
    if($('#NoofDependentsc').is(':checked') == true){NoofDependentsc = 'Yes';}
    else {NoofDependentsc = 'No';}

    var NoofPersonEarningc = '';
    if($('#NoofPersonEarningc').is(':checked') == true){NoofPersonEarningc = 'Yes';}
    else {NoofPersonEarningc = 'No';}

    var FamilyIncomec = '';
    if($('#FamilyIncomec').is(':checked') == true){FamilyIncomec = 'Yes';}
    else {FamilyIncomec = 'No';}

    var MonthlyRationc = '';
    if($('#MonthlyRationc').is(':checked') == true){MonthlyRationc = 'Yes';}
    else {MonthlyRationc = 'No';}

    var MonthlyHealthCarec = '';
    if($('#MonthlyHealthCarec').is(':checked') == true){MonthlyHealthCarec = 'Yes';}
    else {MonthlyHealthCarec = 'No';}

    var MonthlyEducationc = '';
    if($('#MonthlyEducationc').is(':checked') == true){MonthlyEducationc = 'Yes';}
    else {MonthlyEducationc = 'No';}

    var OtherExpensesc = '';
    if($('#OtherExpensesc').is(':checked') == true){OtherExpensesc = 'Yes';}
    else {OtherExpensesc = 'No';}

    var TotalExpensesc = '';
    if($('#TotalExpensesc').is(':checked') == true){TotalExpensesc = 'Yes';}
    else {TotalExpensesc = 'No';}

    var MonthlySirplusdeficitc = '';
    if($('#MonthlySirplusdeficitc').is(':checked') == true){MonthlySirplusdeficitc = 'Yes';}
    else {MonthlySirplusdeficitc = 'No';}




    var CashBankc = '';
    if($('#CashBankc').is(':checked') == true){CashBankc = 'Yes';}
    else {CashBankc = 'No';}

    var GoldSilverc = '';
    if($('#GoldSilverc').is(':checked') == true){GoldSilverc = 'Yes';}
    else {GoldSilverc = 'No';}

    var ProvisionalFundc = '';
    if($('#ProvisionalFundc').is(':checked') == true){ProvisionalFundc = 'Yes';}
    else {ProvisionalFundc = 'No';}

    var PaidCommitteec = '';
    if($('#PaidCommitteec').is(':checked') == true){PaidCommitteec = 'Yes';}
    else {PaidCommitteec = 'No';}

    var SecurityDepositc = '';
    if($('#SecurityDepositc').is(':checked') == true){SecurityDepositc = 'Yes';}
    else {SecurityDepositc = 'No';}

    var LoanGivenc = '';
    if($('#LoanGivenc').is(':checked') == true){LoanGivenc = 'Yes';}
    else {LoanGivenc = 'No';}

    var OtherCurrencyc = '';
    if($('#OtherCurrencyc').is(':checked') == true){OtherCurrencyc = 'Yes';}
    else {OtherCurrencyc = 'No';}

    var TradeAssetsc = '';
    if($('#TradeAssetsc').is(':checked') == true){TradeAssetsc = 'Yes';}
    else {TradeAssetsc = 'No';}

    var UnnecessaryFlatsc = '';
    if($('#UnnecessaryFlatsc').is(':checked') == true){UnnecessaryFlatsc = 'Yes';}
    else {UnnecessaryFlatsc = 'No';}

    var ExtraMobilePhonesc = '';
    if($('#ExtraMobilePhonesc').is(':checked') == true){ExtraMobilePhonesc = 'Yes';}
    else {ExtraMobilePhonesc = 'No';}

    var ExtraVehiclesc = '';
    if($('#ExtraVehiclesc').is(':checked') == true){ExtraVehiclesc = 'Yes';}
    else {ExtraVehiclesc = 'No';}

    var ExtraLivestocksc = '';
    if($('#ExtraLivestocksc').is(':checked') == true){ExtraLivestocksc = 'Yes';}
    else {ExtraLivestocksc = 'No';}

    var TotalCountableAssetsc = '';
    if($('#TotalCountableAssetsc').is(':checked') == true){TotalCountableAssetsc = 'Yes';}
    else {TotalCountableAssetsc = 'No';}




    var RentPayablec = '';
    if($('#RentPayablec').is(':checked') == true){RentPayablec = 'Yes';}
    else {RentPayablec = 'No';}

    var SecurityDepositPayablec = '';
    if($('#SecurityDepositPayablec').is(':checked') == true){SecurityDepositPayablec = 'Yes';}
    else {SecurityDepositPayablec = 'No';}

    var PayableAmountCommitteec = '';
    if($('#PayableAmountCommitteec').is(':checked') == true){PayableAmountCommitteec = 'Yes';}
    else {PayableAmountCommitteec = 'No';}

    var UtilityBillsPayablec = '';
    if($('#UtilityBillsPayablec').is(':checked') == true){UtilityBillsPayablec = 'Yes';}
    else {UtilityBillsPayablec = 'No';}

    var LoanPayablec = '';
    if($('#LoanPayablec').is(':checked') == true){LoanPayablec = 'Yes';}
    else {LoanPayablec = 'No';}

    var TotalDeductableLiabilitiesc = '';
    if($('#TotalDeductableLiabilitiesc').is(':checked') == true){TotalDeductableLiabilitiesc = 'Yes';}
    else {TotalDeductableLiabilitiesc = 'No';}



    var TotalCountableAssets2c = '';
    if($('#TotalCountableAssets2c').is(':checked') == true){TotalCountableAssets2c = 'Yes';}
    else {TotalCountableAssets2c = 'No';}

    var TotalDeductableLiabiliitiesc = '';
    if($('#TotalDeductableLiabiliitiesc').is(':checked') == true){TotalDeductableLiabiliitiesc = 'Yes';}
    else {TotalDeductableLiabiliitiesc = 'No';}

    var NetCoutableAssetsc = '';
    if($('#NetCoutableAssetsc').is(':checked') == true){NetCoutableAssetsc = 'Yes';}
    else {NetCoutableAssetsc = 'No';}

    var CurrentZakatEvaluationc = '';
    if($('#CurrentZakatEvaluationc').is(':checked') == true){CurrentZakatEvaluationc = 'Yes';}
    else {CurrentZakatEvaluationc = 'No';}

    var Muslimc = '';
    if($('#Muslimc').is(':checked') == true){Muslimc = 'Yes';}
    else {Muslimc = 'No';}


    var Syedc = '';
    if($('#Syedc').is(':checked') == true){Syedc = 'Yes';}
    else {Syedc = 'No';}


    var AgaKanic = '';
    if($('#AgaKanic').is(':checked') == true){AgaKanic = 'Yes';}
    else {AgaKanic = 'No';}


    var ZakatEvaluationc = '';
    if($('#ZakatEvaluationc').is(':checked') == true){ZakatEvaluationc = 'Yes';}
    else {ZakatEvaluationc = 'No';}




    var ExecutiveRelationshipc = '';
    if($('#ExecutiveRelationshipc').is(':checked') == true){ExecutiveRelationshipc = 'Yes';}
    else {ExecutiveRelationshipc = 'No';}

    var ReferenceNamec = '';
    if($('#ReferenceNamec').is(':checked') == true){ReferenceNamec = 'Yes';}
    else {ReferenceNamec = 'No';}

    var RefferedByc = '';
    if($('#RefferedByc').is(':checked') == true){RefferedByc = 'Yes';}
    else {RefferedByc = 'No';}

    var Intensionc = '';
    if($('#Intensionc').is(':checked') == true){Intensionc = 'Yes';}
    else {Intensionc = 'No';}

    var Experiencec = '';
    if($('#Experiencec').is(':checked') == true){Experiencec = 'Yes';}
    else {Experiencec = 'No';}

    var Capabilityc = '';
    if($('#Capabilityc').is(':checked') == true){Capabilityc = 'Yes';}
    else {Capabilityc = 'No';}

    var Trainingc = '';
    if($('#Trainingc').is(':checked') == true){Trainingc = 'Yes';}
    else {Trainingc = 'No';}

    var OtherRemarksc = '';
    if($('#OtherRemarksc').is(':checked') == true){OtherRemarksc = 'Yes';}
    else {OtherRemarksc = 'No';}

    $.ajax({
        url: "api/FOChecking.php",
        method: "POST",
        data: {
          caseid:caseid,
           emailc:emailc,
                  fullnamec:fullnamec,
                  fathersnamec:fathersnamec,
                  contactc:contactc,
                  cityc:cityc,
                  NetSalaryc:NetSalaryc,
                  cnicc:cnicc,
                  Addressc:Addressc,
                  casetypec:casetypec,
                  natureofbusinessc:natureofbusinessc,
                  otherbusinessc:otherbusinessc,
                  casedescc:casedescc,
                  NoofMalesc:NoofMalesc,
                  NoofFemalesc:NoofFemalesc,
                  NoofDependentsc:NoofDependentsc,
                  NoofPersonEarningc:NoofPersonEarningc,
                  FamilyIncomec:FamilyIncomec,
                  MonthlyRationc:MonthlyRationc,
                  MonthlyHealthCarec:MonthlyHealthCarec,
                  MonthlyEducationc:MonthlyEducationc,
                  OtherExpensesc:OtherExpensesc,
                  TotalExpensesc:TotalExpensesc,
                  MonthlySirplusdeficitc:MonthlySirplusdeficitc,
                  CashBankc:CashBankc,
                  GoldSilverc:GoldSilverc,
                  ProvisionalFundc:ProvisionalFundc,
                  PaidCommitteec:PaidCommitteec,
                  SecurityDepositc:SecurityDepositc,
                  LoanGivenc:LoanGivenc,
                  OtherCurrencyc:OtherCurrencyc,
                  TradeAssetsc:TradeAssetsc,
                  UnnecessaryFlatsc:UnnecessaryFlatsc,
                  ExtraMobilePhonesc:ExtraMobilePhonesc,
                  ExtraVehiclesc:ExtraVehiclesc,
                  ExtraLivestocksc:ExtraLivestocksc,
                  TotalCountableAssetsc:TotalCountableAssetsc,
                  RentPayablec:RentPayablec,
                  SecurityDepositPayablec:SecurityDepositPayablec,
                  PayableAmountCommitteec:PayableAmountCommitteec,
                  UtilityBillsPayablec:UtilityBillsPayablec,
                  LoanPayablec:LoanPayablec,
                  TotalDeductableLiabilitiesc:TotalDeductableLiabilitiesc,
                  TotalCountableAssets2c:TotalCountableAssets2c,
                  TotalDeductableLiabiliitiesc:TotalDeductableLiabiliitiesc,
                  NetCoutableAssetsc:NetCoutableAssetsc,
                  CurrentZakatEvaluationc:CurrentZakatEvaluationc,
                  Muslimc:Muslimc,
                  Syedc:Syedc,
                  AgaKanic:AgaKanic,
                  ZakatEvaluationc:ZakatEvaluationc,
                  ExecutiveRelationshipc:ExecutiveRelationshipc,
                  ReferenceNamec:ReferenceNamec,
                  RefferedByc:RefferedByc,
                  Intensionc:Intensionc,
                  Experiencec:Experiencec,
                  Capabilityc:Capabilityc,
                  Trainingc:Trainingc,
                  OtherRemarksc:OtherRemarksc
                  
     },
     dataType: "JSON",
     success: function (data) {
        var result = data.result;

        if (result == "Inserted") {
                Swal.fire({
                title: "Action Performed Successfully",
                type: "success",
                timer: 6000,
                showConfirmButton: true,
            })
            $("#btncancel").trigger("click");
            $("#datatable").DataTable().destroy();
            tblcases();
        }
        else {
            Swal.fire({
                title: "Opps! Some Error Occured!",
                type: "error",
                text: "Please login first",
                timer: 4000,
                showConfirmButton: true,
            })
            $("#btncancel").trigger("click");
            $("#datatable").DataTable().destroy();
            tblcases();
        }
        return data;
    }
});





}


function switching(value) {
    $("#" + value + "-button").prop("disabled", false);
    if (value == "page1") {
        $("#page1").css("display", "inline");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
        $("#page9").css("display", "none");
    } else if (value == "page2") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "inline");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
        $("#page9").css("display", "none");
    } else if (value == "page3") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "inline");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
        $("#page9").css("display", "none");
    } else if (value == "page4") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "inline");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
        $("#page9").css("display", "none");
    } else if (value == "page5") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "inline");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
        $("#page9").css("display", "none");
    } else if (value == "page6") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "inline");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
        $("#page9").css("display", "none");
    } else if (value == "page7") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "inline");
        $("#page8").css("display", "none");
        $("#page9").css("display", "none");
    } else if (value == "page8") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "inline");
        $("#page9").css("display", "none");
    } else if (value == "page9") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "none");
        $("#page9").css("display", "inline");
    }


}


function function2() {

    var FamilyIncome = parseInt($("#FamilyIncome").val());
    var MonthlyRation = parseInt($("#MonthlyRation").val());
    var MonthlyHealthCare = parseInt($("#MonthlyHealthCare").val());
    var MonthlyEducation = parseInt($("#MonthlyEducation").val());
    var OtherExpenses = parseInt($("#OtherExpenses").val());
    var TotalExpenses = parseInt($("#TotalExpenses").val());


    if (FamilyIncome == "") { FamilyIncome = 0; }
    if (MonthlyRation == "") { MonthlyRation = 0; }
    if (MonthlyHealthCare == "") { MonthlyHealthCare = 0; }
    if (MonthlyEducation == "") { MonthlyEducation = 0; }
    if (OtherExpenses == "") { OtherExpenses = 0; }
    if (TotalExpenses == "") { TotalExpenses = 0; }

    $("#TotalExpenses").val(MonthlyRation + MonthlyHealthCare + MonthlyEducation + OtherExpenses);
    $("#MonthlySirplusdeficit").val((MonthlyRation + MonthlyHealthCare + MonthlyEducation + OtherExpenses) - FamilyIncome);
}


function function3() {

    // CashBank
    // GoldSilver
    // ProvisionalFund
    // PaidCommittee
    // SecurityDeposit
    // LoanGiven
    // OtherCurrency
    // TradeAssets
    // UnnecessaryFlats
    // ExtraMobilePhones
    // ExtraVehicles
    // ExtraLivestocks
    // TotalCountableAssets

    var CashBank = parseInt($("#CashBank").val());
    var GoldSilver = parseInt($("#GoldSilver").val());
    var ProvisionalFund = parseInt($("#ProvisionalFund").val());
    var PaidCommittee = parseInt($("#PaidCommittee").val());
    var SecurityDeposit = parseInt($("#SecurityDeposit").val());
    var LoanGiven = parseInt($("#LoanGiven").val());
    var OtherCurrency = parseInt($("#OtherCurrency").val());
    var TradeAssets = parseInt($("#TradeAssets").val());
    var UnnecessaryFlats = parseInt($("#UnnecessaryFlats").val());
    var ExtraMobilePhones = parseInt($("#ExtraMobilePhones").val());
    var ExtraVehicles = parseInt($("#ExtraVehicles").val());
    var ExtraLivestocks = parseInt($("#ExtraLivestocks").val());
    var TotalCountableAssets = parseInt($("#TotalCountableAssets").val());


    if (CashBank == "") { CashBank = 0; }
    if (GoldSilver == "") { GoldSilver = 0; }
    if (ProvisionalFund == "") { ProvisionalFund = 0; }
    if (PaidCommittee == "") { PaidCommittee = 0; }
    if (SecurityDeposit == "") { SecurityDeposit = 0; }
    if (LoanGiven == "") { LoanGiven = 0; }
    if (OtherCurrency == "") { OtherCurrency = 0; }
    if (TradeAssets == "") { TradeAssets = 0; }
    if (UnnecessaryFlats == "") { UnnecessaryFlats = 0; }
    if (ExtraMobilePhones == "") { ExtraMobilePhones = 0; }
    if (ExtraVehicles == "") { ExtraVehicles = 0; }
    if (ExtraLivestocks == "") { ExtraLivestocks = 0; }


    $("#TotalCountableAssets2").val(CashBank + GoldSilver + ProvisionalFund + PaidCommittee +
        SecurityDeposit + LoanGiven + OtherCurrency + TradeAssets +
        UnnecessaryFlats + ExtraMobilePhones + ExtraVehicles + ExtraLivestocks);


    $("#TotalCountableAssets").val(CashBank + GoldSilver + ProvisionalFund + PaidCommittee +
        SecurityDeposit + LoanGiven + OtherCurrency + TradeAssets +
        UnnecessaryFlats + ExtraMobilePhones + ExtraVehicles + ExtraLivestocks);


}

function function6() {
    var Muslim = $("#Muslim").val();

    if (Muslim == 'No') {

        $("#Syed").attr("disabled", true);
        $("#AgaKani").attr("disabled", true);
    } else if (Muslim == 'Yes') {

        $("#Syed").attr("disabled", false);
        $("#AgaKani").attr("disabled", false);
    }

}

function function7() {

    var Syed = $("#Syed").val();

    if (Syed == 'No') {
        $("#ZakatEvaluation").val('Eligible');
    } else if (Syed == 'Yes') {
        $("#ZakatEvaluation").val('Not Eligible');
    }

}

function function4() {


    // RentPayable
    // SecurityDepositPayable
    // PayableAmountCommittee
    // UtilityBillsPayable
    // LoanPayable
    // TotalDeductableLiabilities

    var RentPayable = parseInt($("#RentPayable").val());
    var SecurityDepositPayable = parseInt($("#SecurityDepositPayable").val());
    var PayableAmountCommittee = parseInt($("#PayableAmountCommittee").val());
    var UtilityBillsPayable = parseInt($("#UtilityBillsPayable").val());
    var LoanPayable = parseInt($("#LoanPayable").val());
    var TotalDeductableLiabilities = parseInt($("#TotalDeductableLiabilities").val());


    if (RentPayable == "") { RentPayable = 0; }
    if (SecurityDepositPayable == "") { SecurityDepositPayable = 0; }
    if (PayableAmountCommittee == "") { PayableAmountCommittee = 0; }
    if (UtilityBillsPayable == "") { UtilityBillsPayable = 0; }
    if (LoanPayable == "") { LoanPayable = 0; }

    $("#TotalDeductableLiabiliities").val(RentPayable + SecurityDepositPayable + PayableAmountCommittee + UtilityBillsPayable +
        LoanPayable);

    $("#TotalDeductableLiabilities").val(RentPayable + SecurityDepositPayable + PayableAmountCommittee + UtilityBillsPayable +
        LoanPayable);


}


function function1() {

    var NoofMales = $("#NoofMales").val();
    var NoofFemales = $("#NoofFemales").val();
    if (NoofMales == "") { NoofMales = 0; }
    if (NoofFemales == "") { NoofFemales = 0; }

    $("#NoofDependents").val(parseInt(NoofMales) + parseInt(NoofFemales));

}


function otp() {
    $("#btncancel3").attr("disabled", true);
    var otpemail = $("#otpemail").val();
    var otpid = $("#otpid").val();


    $.ajax({
        url: "api/OtpEmail.php",
        method: "POST",
        data: {
            otpemail: otpemail,
            otpid: otpid
        },
        dataType: "JSON",
        success: function (data) {
            var result = data.result;
            if (result == "Success") {
                $("#OTP").attr("disabled", false);
                // $("#btncanel2").trigger("click");
                // $("#datatable").DataTable().destroy(); 
                // tblcases();
            }
            else {
                Swal.fire({
                    title: "Opps! Some Error Occured!",
                    type: "error",
                    text: "Please login first",
                    timer: 4000,
                    showConfirmButton: true,
                })
                $("#btncancel").trigger("click");
                $("#datatable").DataTable().destroy();
                tblcases();
            }
            return data;
        }
    });

}

function btnclosecase() {

    var OTP = $("#OTP").val();
    var otpemail = $("#otpemail").val();
    var otpid = $("#otpid").val();

    $.ajax({
        url: "api/OtpSuccess.php",
        method: "POST",
        data: {
            otpemail:otpemail,
                        otpid:otpid,
                        OTP:OTP
        },
        dataType: "JSON",
        success: function (data) {
            var result = data.result;
            if (result == "Success") {
                Swal.fire({
                    title: "Case Closed Successfully!",
                    type: "success",
                    text: "Your case is closed Successfully",
                    timer: 4000,
                    showConfirmButton: true,
                })
                $("#btncanel2").trigger("click");
                $("#datatable").DataTable().destroy();
                tblcases();
            }
            else {
                Swal.fire({
                    title: "Opps! Some Error Occured!",
                    type: "error",
                    text: "Please login first",
                    timer: 4000,
                    showConfirmButton: true,
                })
                $("#btncancel").trigger("click");
                $("#datatable").DataTable().destroy();
                tblcases();
            }
            return data;
        }
    });

}


function tblcases() {


    $("#datatable").DataTable({
        "ajax": "api/TblCasesFieldOfficer.php",
        "columns": [
            { "data": "Empty" },
            { "data": "Empty2" },
            { "data": "CaseID" },
            { "data": "DOC" },
            { "data": "casetype" },
            { "data": "caseDescription" },
            { "data": "Name" },
            { "data": "Fathersname" },
            { "data": "cnic" },
            { "data": "contact" },
            { "data": "email" },
            { "data": "status" }




            ],
    });

}

function refreshdata() {
    $("#datatable").DataTable().destroy();
    tblcases();
}

$(document).ready(function () {


    tblcases();

    $(document).on("click", ".edit-modal", function () {


        $("#id1").val($(this).attr("id"));
        $("#caseid").val($(this).data("caseid"));

        $("#email").val($(this).data("email"));
        $("#fullname").val($(this).data("name"));
        $("#fathersname").val($(this).data("fathersname"));
        $("#contact").val($(this).data("contact"));
        $("#cnic").val($(this).data("cnic"));
        $("#casetype").val($(this).data("casetype")); 
        $("#casedesc").val($(this).data("casedesc"));
        $("#NetSalary").val($(this).data("netsalary"));
        $("#Address").val($(this).data("address"));
        $("#natureofbusiness").val($(this).data("nob"));
        $("#otherbusiness").val($(this).data("nobdesc"));
        $("#city").val($(this).data("city")); 




        $("#NoofMales").val($(this).data("noofmales")); 
        $("#NoofFemales").val($(this).data("nooffemales"));
        $("#NoofDependents").val($(this).data("noofdependents"));
        $("#NoofPersonEarning").val($(this).data("noofpersonearning"));
        $("#FamilyIncome").val($(this).data("familyincome"));
        $("#MonthlyRation").val($(this).data("monthlyration"));
        $("#MonthlyHealthCare").val($(this).data("monthlyhealthcare"));
        $("#MonthlyEducation").val($(this).data("monthlyeducation"));
        $("#OtherExpenses").val($(this).data("otherexpenses"));
        $("#TotalExpenses").val($(this).data("totalexpenses"));
        $("#MonthlySirplusdeficit").val($(this).data("monthlysirplusdeficit"));

        $("#CashBank").val($(this).data("cashbank")); 
        $("#GoldSilver").val($(this).data("goldsilver"));
        $("#ProvisionalFund").val($(this).data("provisionalfund"));
        $("#PaidCommittee").val($(this).data("paidcommittee"));
        $("#SecurityDeposit").val($(this).data("securitydeposit"));
        $("#LoanGiven").val($(this).data("loangiven"));
        $("#OtherCurrency").val($(this).data("othercurrency")); 
        $("#TradeAssets").val($(this).data("tradeassets"));
        $("#UnnecessaryFlats").val($(this).data("unnecessaryflats"));
        $("#ExtraMobilePhones").val($(this).data("extramobilephones"));
        $("#ExtraVehicles").val($(this).data("extravehicles"));
        $("#ExtraLivestocks").val($(this).data("extralivestocks"));
        $("#TotalCountableAssets").val($(this).data("totalcountableassets"));


        $("#RentPayable").val($(this).data("rentpayable"));
        $("#SecurityDepositPayable").val($(this).data("securitydepositpayable"));
        $("#PayableAmountCommittee").val($(this).data("payableamountcommittee"));
        $("#UtilityBillsPayable").val($(this).data("utilitybillspayable"));
        $("#LoanPayable").val($(this).data("loanpayable"));
        $("#TotalDeductableLiabilities").val($(this).data("ttldductliabilities")); 

        $("#NetCoutableAssets").val($(this).data("netcoutableassets"));
        $("#CurrentZakatEvaluation").val($(this).data("currentzakatevaluation"));
        $("#Muslim").val($(this).data("muslim"));
        $("#Syed").val($(this).data("syed"));
        $("#AgaKani").val($(this).data("agakani"));
        $("#ZakatEvaluation").val($(this).data("zakatevaluation")); 

        $("#ExecutiveRelationship").val($(this).data("executiverelationship"));
        $("#ReferenceName").val($(this).data("referencename"));
        $("#RefferedBy").val($(this).data("refferedby"));
        $("#Intension").val($(this).data("intension"));
        $("#Experience").val($(this).data("experience"));
        $("#Capability").val($(this).data("capability")); 
        $("#Training").val($(this).data("training"));
        $("#OtherRemarks").val($(this).data("otherremarks")); 









        if ($(this).data("casetype") == 'Business') {
            $("#NOBtab").css("display", "block");
        } else {
            $("#NOBtab").css("display", "none");
        }


    });


    $(document).on("click", ".payment-modal", function () {


        $("#otpemail").val($(this).data("email"));
        $("#otpid").val($(this).data("caseid"));


    });



});


function change3() {
    var ExecutiveRelationship = $("#ExecutiveRelationship").val();

    if (ExecutiveRelationship == 'Yes') {

        $("#div_ExecutiveRelationship").css("display", "block");
    } else {

        $("#div_ExecutiveRelationship").css("display", "none");
    }



}

// function btnTabNex(index){


//     if(index == 1){
//             alert(index);
//         // $("#tab"+(index-1)+"_data_tab").removeClass('active');
//         $("#tab"+index+"_data_tab").addClass('active');
//         document.getElementById("#tab"+(index+1)+"_data").click();

//     }
// }


function btnsubmit() {



    var id1 = $("#id1").val();
    var date1 = $("#date1").val();
    var casetype1 = $("#casetype1").val();
    var casedesc1 = $("#casedesc1").val();
    var status1 = $("#status1").val();
    var name1 = $("#name1").val();
    var fathername1 = $("#fathername1").val();
    var cnic1 = $("#cnic1").val();
    var contact1 = $("#contact1").val();
    var email1 = $("#email1").val();

    var NoofMales = $("#NoofMales").val();
    var NoofFemales = $("#NoofFemales").val();
    var NoofDependents = $("#NoofDependents").val();
    var NoofPersonEarning = $("#NoofPersonEarning").val();
    var FamilyIncome = $("#FamilyIncome").val();
    var MonthlyRation = $("#MonthlyRation").val();
    var MonthlyHealthCare = $("#MonthlyHealthCare").val();
    var MonthlyEducation = $("#MonthlyEducation").val();
    var OtherExpenses = $("#OtherExpenses").val();
    var TotalExpenses = $("#TotalExpenses").val();

    var MonthlySirplusdeficit = $("#MonthlySirplusdeficit").val();
    var CashBank = $("#CashBank").val();
    var GoldSilver = $("#GoldSilver").val();
    var ProvisionalFund = $("#ProvisionalFund").val();
    var PaidCommittee = $("#PaidCommittee").val();
    var SecurityDeposit = $("#SecurityDeposit").val();
    var LoanGiven = $("#LoanGiven").val();
    var OtherCurrency = $("#OtherCurrency").val();
    var TradeAssets = $("#TradeAssets").val();
    var UnnecessaryFlats = $("#UnnecessaryFlats").val();
    var ExtraMobilePhones = $("#ExtraMobilePhones").val();
    var ExtraVehicles = $("#ExtraVehicles").val();
    var ExtraLivestocks = $("#ExtraLivestocks").val();
    var TotalCountableAssets = $("#TotalCountableAssets").val();

    var RentPayable = $("#RentPayable").val();
    var SecurityDepositPayable = $("#SecurityDepositPayable").val();
    var PayableAmountCommittee = $("#PayableAmountCommittee").val();
    var UtilityBillsPayable = $("#UtilityBillsPayable").val();
    var LoanPayable = $("#LoanPayable").val();
    var TotalDeductableLiabilities = $("#TotalDeductableLiabilities").val();
    var TotalCountableAssets = $("#TotalCountableAssets").val();
    var TotalDeductableLiabiliities = $("#TotalDeductableLiabiliities").val();
    var NetCoutableAssets = $("#NetCoutableAssets").val();
    var CurrentZakatEvaluation = $("#CurrentZakatEvaluation").val();
    var Muslim = $("#Muslim").val();
    var Syed = $("#Syed").val();
    var AgaKani = $("#AgaKani").val();
    var ZakatEvaluation = $("#ZakatEvaluation").val();

    var AmountApplied = $("#AmountApplied").val();
    var FOAmount = $("#FOAmount").val();
    var FORemarks2 = $("#FORemarks2").val();


    var ExecutiveRelationship = $("#ExecutiveRelationship").val();
    var ReferenceName = $("#ReferenceName").val();
    var RefferedBy = $("#RefferedBy").val();
    var Intension = $("#Intension").val();
    var Experience = $("#Experience").val();
    var Capability = $("#Capability").val();
    var Training = $("#Training").val();
    var OtherRemarks = $("#OtherRemarks").val();



    // id1
    // date1
    // casetype1
    // casedesc1
    // status1
    // name1
    // fathername1
    // cnic1
    // contact1
    // email1


    // NoofMales
    // NoofFemales
    // NoofDependents
    // NoofPersonEarning
    // FamilyIncome
    // MonthlyRation
    // MonthlyHealthCare
    // MonthlyEducation
    // OtherExpenses
    // TotalExpenses
    // MonthlySirplusdeficit


    // CashBank
    // GoldSilver
    // ProvisionalFund
    // PaidCommittee
    // SecurityDeposit
    // LoanGiven
    // OtherCurrency
    // TradeAssets
    // UnnecessaryFlats
    // ExtraMobilePhones
    // ExtraVehicles
    // ExtraLivestocks
    // TotalCountableAssets


    // RentPayable
    // SecurityDepositPayable
    // PayableAmountCommittee
    // UtilityBillsPayable
    // LoanPayable
    // TotalDeductableLiabilities


    // TotalCountableAssets
    // TotalDeductableLiabiliities
    // NetCoutableAssets
    // CurrentZakatEvaluation
    // Muslim
    // Syed
    // AgaKani
    // ZakatEvaluation

    // $("#id1").css("border-color", "");
    // $("#1v").css("display", ""); 
    // $("#date1").css("border-color", "");
    // $("#2v").css("display", ""); 
    // $("#casetype1").css("border-color", "");
    // $("#3v").css("display", ""); 
    // $("#casedesc1").css("border-color", "");
    // $("#4v").css("display", ""); 
    // $("#status1").css("border-color", "");
    // $("#5v").css("display", ""); 
    // $("#name1").css("border-color", "");
    // $("#6v").css("display", ""); 
    // $("#fathername1").css("border-color", "");
    // $("#7v").css("display", ""); 
    // $("#cnic1").css("border-color", "");
    // $("#8v").css("display", ""); 
    // $("#contact1").css("border-color", "");
    // $("#9v").css("display", ""); 
    // $("#email1").css("border-color", "");
    // $("#10v").css("display", ""); 


    $("#NoofMales").css("border-color", "");
    $("#11v").css("display", "");
    $("#NoofFemales").css("border-color", "");
    $("#12v").css("display", "");
    $("#NoofDependents").css("border-color", "");
    $("#13v").css("display", "");
    $("#NoofPersonEarning").css("border-color", "");
    $("#14v").css("display", "");
    $("#FamilyIncome").css("border-color", "");
    $("#15v").css("display", "");
    $("#MonthlyRation").css("border-color", "");
    $("#16v").css("display", "");
    $("#MonthlyHealthCare").css("border-color", "");
    $("#17v").css("display", "");
    $("#MonthlyEducation").css("border-color", "");
    $("#18v").css("display", "");
    $("#OtherExpenses").css("border-color", "");
    $("#19v").css("display", "");
    $("#TotalExpenses").css("border-color", "");
    $("#20v").css("display", "");
    $("#MonthlySirplusdeficit").css("border-color", "");
    $("#21v").css("display", "");


    $("#CashBank").css("border-color", "");
    $("#22v").css("display", "");
    $("#GoldSilver").css("border-color", "");
    $("#23v").css("display", "");
    $("#ProvisionalFund").css("border-color", "");
    $("#24v").css("display", "");
    $("#PaidCommittee").css("border-color", "");
    $("#25v").css("display", "");
    $("#SecurityDeposit").css("border-color", "");
    $("#26v").css("display", "");
    $("#LoanGiven").css("border-color", "");
    $("#27v").css("display", "");
    $("#OtherCurrency").css("border-color", "");
    $("#28v").css("display", "");
    $("#TradeAssets").css("border-color", "");
    $("#29v").css("display", "");
    $("#UnnecessaryFlats").css("border-color", "");
    $("#30v").css("display", "");
    $("#ExtraMobilePhones").css("border-color", "");
    $("#31v").css("display", "");
    $("#ExtraVehicles").css("border-color", "");
    $("#32v").css("display", "");
    $("#ExtraLivestocks").css("border-color", "");
    $("#33v").css("display", "");
    $("#TotalCountableAssets").css("border-color", "");
    $("#34v").css("display", "");


    $("#ExecutiveRelationship").css("border-color", "");
    $("#47v").css("display", "");
    $("#ReferenceName").css("border-color", "");
    $("#48v").css("display", "");
    $("#RefferedBy").css("border-color", "");
    $("#49v").css("display", "");
    $("#Intension").css("border-color", "");
    $("#50v").css("display", "");
    $("#Experience").css("border-color", "");
    $("#51v").css("display", "");
    $("#Capability").css("border-color", "");
    $("#52v").css("display", "");
    $("#Training").css("border-color", "");
    $("#53v").css("display", "");
    $("#OtherRemarks").css("border-color", "");
    $("#54v").css("display", "");

    // ExecutiveRelationship
    // ReferenceName
    // RefferedBy
    // Intension
    // Experience
    // Capability
    // Training
    // OtherRemarks

    // $("#RentPayable").css("border-color", "");
    // $("#35v").css("display", ""); 
    // $("#SecurityDepositPayable").css("border-color", "");
    // $("#36v").css("display", ""); 
    // $("#PayableAmountCommittee").css("border-color", "");
    // $("#37v").css("display", ""); 
    // $("#UtilityBillsPayable").css("border-color", "");
    // $("#38v").css("display", ""); 
    // $("#LoanPayable").css("border-color", "");
    // $("#39v").css("display", ""); 
    // $("#TotalDeductableLiabilities").css("border-color", "");
    // $("#40v").css("display", ""); 

    // $("#TotalCountableAssets").css("border-color", "");
    // $("#41v").css("display", ""); 
    // $("#TotalDeductableLiabiliities").css("border-color", "");
    // $("#42v").css("display", ""); 
    // $("#NetCoutableAssets").css("border-color", "");
    // $("#43v").css("display", ""); 
    // $("#CurrentZakatEvaluation").css("border-color", "");
    // $("#44v").css("display", ""); 
    // $("#Muslim").css("border-color", "");
    // $("#45v").css("display", ""); 
    // $("#Syed").css("border-color", "");
    // $("#46v").css("display", ""); 
    // $("#AgaKani").css("border-color", "");
    // $("#47v").css("display", ""); 
    // $("#ZakatEvaluation").css("border-color", "");
    // $("#48v").css("display", ""); 

    // $("#AmountApplied").css("border-color", "");
    // $("#49v").css("display", ""); 
    // $("#FOAmount").css("border-color", "");
    // $("#50v").css("display", ""); 
    // $("#FORemarks2").css("border-color", "");
    // $("#51v").css("display", ""); 


    if (id1 == "") {
        $("#1v").css("display", "block");
        $("#1v").text("Please Enter Valid id .");
        $("#id1").css("border-color", "red");
        $("#id1").focus();
    } else if (date1 == "") {
        $("#2v").css("display", "block");
        $("#2v").text("Please Enter Valid date .");
        $("#date1").css("border-color", "red");
        $("#date1").focus();
    } else if (casetype1 == "") {
        $("#3v").css("display", "block");
        $("#3v").text("Please Enter Valid casetype .");
        $("#casetype1").css("border-color", "red");
        $("#casetype1").focus();
    } else if (casedesc1 == "") {
        $("#4v").css("display", "block");
        $("#4v").text("Please Enter Valid casedesc .");
        $("#casedesc1").css("border-color", "red");
        $("#casedesc1").focus();
    } else if (status1 == "") {
        $("#5v").css("display", "block");
        $("#5v").text("Please Enter Valid status .");
        $("#status1").css("border-color", "red");
        $("#status1").focus();
    } else if (name1 == "") {
        $("#6v").css("display", "block");
        $("#6v").text("Please Enter Valid name .");
        $("#name1").css("border-color", "red");
        $("#name1").focus();
    } else if (fathername1 == "") {
        $("#7v").css("display", "block");
        $("#7v").text("Please Enter Valid fathername .");
        $("#fathername1").css("border-color", "red");
        $("#fathername1").focus();
    } else if (cnic1 == "") {
        $("#8v").css("display", "block");
        $("#8v").text("Please Enter Valid cnic .");
        $("#cnic1").css("border-color", "red");
        $("#cnic1").focus();
    } else if (contact1 == "") {
        $("#9v").css("display", "block");
        $("#9v").text("Please Enter Valid contact .");
        $("#contact1").css("border-color", "red");
        $("#contact1").focus();
    } else if (email1 == "") {
        $("#10v").css("display", "block");
        $("#10v").text("Please Enter Valid email .");
        $("#email1").css("border-color", "red");
        $("#email1").focus();
    }

    else if (NoofMales == "") {
        $("#11v").css("display", "block");
        $("#11v").text("Please Enter Valid email .");
        $("#NoofMales").css("border-color", "red");
        $("#NoofMales").focus();
    } else if (NoofFemales == "") {
        $("#12v").css("display", "block");
        $("#12v").text("Please Enter Valid email .");
        $("#NoofFemales").css("border-color", "red");
        $("#NoofFemales").focus();
    } else if (NoofDependents == "") {
        $("#13v").css("display", "block");
        $("#13v").text("Please Enter Valid email .");
        $("#NoofDependents").css("border-color", "red");
        $("#NoofDependents").focus();
    } else if (NoofPersonEarning == "") {
        $("#14v").css("display", "block");
        $("#14v").text("Please Enter Valid email .");
        $("#NoofPersonEarning").css("border-color", "red");
        $("#NoofPersonEarning").focus();
    } else if (FamilyIncome == "") {
        $("#15v").css("display", "block");
        $("#15v").text("Please Enter Valid email .");
        $("#FamilyIncome").css("border-color", "red");
        $("#FamilyIncome").focus();
    } else if (MonthlyRation == "") {
        $("#16v").css("display", "block");
        $("#16v").text("Please Enter Valid email .");
        $("#MonthlyRation").css("border-color", "red");
        $("#MonthlyRation").focus();
    } else if (MonthlyHealthCare == "") {
        $("#17v").css("display", "block");
        $("#17v").text("Please Enter Valid email .");
        $("#MonthlyHealthCare").css("border-color", "red");
        $("#MonthlyHealthCare").focus();
    } else if (MonthlyEducation == "") {
        $("#18v").css("display", "block");
        $("#18v").text("Please Enter Valid email .");
        $("#MonthlyEducation").css("border-color", "red");
        $("#MonthlyEducation").focus();
    } else if (OtherExpenses == "") {
        $("#19v").css("display", "block");
        $("#19v").text("Please Enter Valid email .");
        $("#OtherExpenses").css("border-color", "red");
        $("#OtherExpenses").focus();
    } else if (TotalExpenses == "") {
        $("#20v").css("display", "block");
        $("#20v").text("Please Enter Valid email .");
        $("#TotalExpenses").css("border-color", "red");
        $("#TotalExpenses").focus();
    } else if (MonthlySirplusdeficit == "") {
        $("#21v").css("display", "block");
        $("#21v").text("Please Enter Valid email .");
        $("#MonthlySirplusdeficit").css("border-color", "red");
        $("#MonthlySirplusdeficit").focus();
    }

    else if (CashBank == "") {
        $("#22v").css("display", "block");
        $("#22v").text("Please Enter Valid email .");
        $("#CashBank").css("border-color", "red");
        $("#CashBank").focus();
    } else if (GoldSilver == "") {
        $("#23v").css("display", "block");
        $("#23v").text("Please Enter Valid email .");
        $("#GoldSilver").css("border-color", "red");
        $("#GoldSilver").focus();
    } else if (ProvisionalFund == "") {
        $("#24v").css("display", "block");
        $("#24v").text("Please Enter Valid email .");
        $("#ProvisionalFund").css("border-color", "red");
        $("#ProvisionalFund").focus();
    } else if (PaidCommittee == "") {
        $("#25v").css("display", "block");
        $("#25v").text("Please Enter Valid email .");
        $("#PaidCommittee").css("border-color", "red");
        $("#PaidCommittee").focus();
    } else if (SecurityDeposit == "") {
        $("#26v").css("display", "block");
        $("#26v").text("Please Enter Valid email .");
        $("#SecurityDeposit").css("border-color", "red");
        $("#SecurityDeposit").focus();
    } else if (LoanGiven == "") {
        $("#27v").css("display", "block");
        $("#27v").text("Please Enter Valid email .");
        $("#LoanGiven").css("border-color", "red");
        $("#LoanGiven").focus();
    } else if (OtherCurrency == "") {
        $("#28v").css("display", "block");
        $("#28v").text("Please Enter Valid email .");
        $("#OtherCurrency").css("border-color", "red");
        $("#OtherCurrency").focus();
    } else if (TradeAssets == "") {
        $("#29v").css("display", "block");
        $("#29v").text("Please Enter Valid email .");
        $("#TradeAssets").css("border-color", "red");
        $("#TradeAssets").focus();
    } else if (UnnecessaryFlats == "") {
        $("#30v").css("display", "block");
        $("#30v").text("Please Enter Valid email .");
        $("#UnnecessaryFlats").css("border-color", "red");
        $("#UnnecessaryFlats").focus();
    } else if (ExtraMobilePhones == "") {
        $("#31v").css("display", "block");
        $("#31v").text("Please Enter Valid email .");
        $("#ExtraMobilePhones").css("border-color", "red");
        $("#ExtraMobilePhones").focus();
    } else if (ExtraVehicles == "") {
        $("#32v").css("display", "block");
        $("#32v").text("Please Enter Valid email .");
        $("#ExtraVehicles").css("border-color", "red");
        $("#ExtraVehicles").focus();
    } else if (ExtraLivestocks == "") {
        $("#33v").css("display", "block");
        $("#33v").text("Please Enter Valid email .");
        $("#ExtraLivestocks").css("border-color", "red");
        $("#ExtraLivestocks").focus();
    } else if (TotalCountableAssets == "") {
        $("#34v").css("display", "block");
        $("#34v").text("Please Enter Valid email .");
        $("#TotalCountableAssets").css("border-color", "red");
        $("#TotalCountableAssets").focus();
    }

    else if (RentPayable == "") {
        $("#35v").css("display", "block");
        $("#35v").text("Please Enter Valid email .");
        $("#RentPayable").css("border-color", "red");
        $("#RentPayable").focus();
    } else if (SecurityDepositPayable == "") {
        $("#36v").css("display", "block");
        $("#36v").text("Please Enter Valid email .");
        $("#SecurityDepositPayable").css("border-color", "red");
        $("#SecurityDepositPayable").focus();
    } else if (PayableAmountCommittee == "") {
        $("#37v").css("display", "block");
        $("#37v").text("Please Enter Valid email .");
        $("#PayableAmountCommittee").css("border-color", "red");
        $("#PayableAmountCommittee").focus();
    } else if (UtilityBillsPayable == "") {
        $("#38v").css("display", "block");
        $("#38v").text("Please Enter Valid email .");
        $("#UtilityBillsPayable").css("border-color", "red");
        $("#UtilityBillsPayable").focus();
    } else if (LoanPayable == "") {
        $("#39v").css("display", "block");
        $("#39v").text("Please Enter Valid email .");
        $("#LoanPayable").css("border-color", "red");
        $("#LoanPayable").focus();
    } else if (TotalDeductableLiabilities == "") {
        $("#40v").css("display", "block");
        $("#40v").text("Please Enter Valid email .");
        $("#TotalDeductableLiabilities").css("border-color", "red");
        $("#TotalDeductableLiabilities").focus();
    }


    else if (TotalCountableAssets == "") {
        $("#41v").css("display", "block");
        $("#41v").text("Please Enter Valid email .");
        $("#TotalCountableAssets").css("border-color", "red");
        $("#TotalCountableAssets").focus();
    } else if (TotalDeductableLiabiliities == "") {
        $("#42v").css("display", "block");
        $("#42v").text("Please Enter Valid email .");
        $("#TotalDeductableLiabiliities").css("border-color", "red");
        $("#TotalDeductableLiabiliities").focus();
    } else if (NetCoutableAssets == "") {
        $("#43v").css("display", "block");
        $("#43v").text("Please Enter Valid email .");
        $("#NetCoutableAssets").css("border-color", "red");
        $("#NetCoutableAssets").focus();
    } else if (CurrentZakatEvaluation == "") {
        $("#44v").css("display", "block");
        $("#44v").text("Please Enter Valid email .");
        $("#CurrentZakatEvaluation").css("border-color", "red");
        $("#CurrentZakatEvaluation").focus();
    } else if (Muslim == "") {
        $("#45v").css("display", "block");
        $("#45v").text("Please Enter Valid email .");
        $("#Muslim").css("border-color", "red");
        $("#Muslim").focus();
    } else if (Syed == "") {
        $("#46v").css("display", "block");
        $("#46v").text("Please Enter Valid email .");
        $("#Syed").css("border-color", "red");
        $("#Syed").focus();
    } else if (AgaKani == "") {
        $("#47v").css("display", "block");
        $("#47v").text("Please Enter Valid email .");
        $("#AgaKani").css("border-color", "red");
        $("#AgaKani").focus();
    } else if (ZakatEvaluation == "") {
        $("#48v").css("display", "block");
        $("#48v").text("Please Enter Valid email .");
        $("#ZakatEvaluation").css("border-color", "red");
        $("#ZakatEvaluation").focus();
    }

    else if (AmountApplied == "") {
        $("#49v").css("display", "block");
        $("#49v").text("Please Enter Valid email .");
        $("#AmountApplied").css("border-color", "red");
        $("#AmountApplied").focus();
    } else if (FOAmount == "") {
        $("#50v").css("display", "block");
        $("#50v").text("Please Enter Valid email .");
        $("#FOAmount").css("border-color", "red");
        $("#FOAmount").focus();
    } else if (FORemarks2 == "") {
        $("#51v").css("display", "block");
        $("#51v").text("Please Enter Valid email .");
        $("#FORemarks2").css("border-color", "red");
        $("#FORemarks2").focus();
    }

    else if (ExecutiveRelationship == "") {
        $("#47v").css("display", "block");
        $("#47v").text("Please Enter Valid ExecutiveRelationship .");
        $("#ExecutiveRelationship").css("border-color", "red");
        $("#ExecutiveRelationship").focus();
    } else if (ReferenceName == "") {
        $("#48v").css("display", "block");
        $("#48v").text("Please Enter Valid ReferenceName .");
        $("#ReferenceName").css("border-color", "red");
        $("#ReferenceName").focus();
    } else if (RefferedBy == "") {
        $("#49v").css("display", "block");
        $("#49v").text("Please Enter Valid RefferedBy .");
        $("#RefferedBy").css("border-color", "red");
        $("#RefferedBy").focus();
    } else if (Intension == "") {
        $("#50v").css("display", "block");
        $("#50v").text("Please Enter Valid Intension .");
        $("#FORemarks2").css("border-color", "red");
        $("#FORemarks2").focus();
    } else if (Experience == "") {
        $("#51v").css("display", "block");
        $("#51v").text("Please Enter Valid Experience .");
        $("#Experience").css("border-color", "red");
        $("#Experience").focus();
    } else if (Capability == "") {
        $("#52v").css("display", "block");
        $("#52v").text("Please Enter Valid Capability .");
        $("#Capability").css("border-color", "red");
        $("#Capability").focus();
    } else if (Training == "") {
        $("#53v").css("display", "block");
        $("#53v").text("Please Enter Valid Training .");
        $("#Training").css("border-color", "red");
        $("#Training").focus();
    }
    else if (OtherRemarks == "") {
        $("#54v").css("display", "block");
        $("#54v").text("Please Enter Valid Remarks .");
        $("#OtherRemarks").css("border-color", "red");
        $("#OtherRemarks").focus();
    }

    else {
    }


    Swal.fire({
        title: "Are you sure?",
        text: "You want to Submit!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes!"
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "api/MainForm.php",
                method: "POST",
                data: {

                    id1: id1,

                    NoofMales: NoofMales,
                    NoofFemales: NoofFemales,
                    NoofDependents: NoofDependents,
                    NoofPersonEarning: NoofPersonEarning,
                    FamilyIncome: FamilyIncome,
                    MonthlyRation: MonthlyRation,
                    MonthlyHealthCare: MonthlyHealthCare,
                    MonthlyEducation: MonthlyEducation,
                    OtherExpenses: OtherExpenses,
                    TotalExpenses: TotalExpenses,
                    MonthlySirplusdeficit: MonthlySirplusdeficit,

                    CashBank: CashBank,
                    GoldSilver: GoldSilver,
                    ProvisionalFund: ProvisionalFund,
                    PaidCommittee: PaidCommittee,
                    SecurityDeposit: SecurityDeposit,
                    LoanGiven: LoanGiven,
                    OtherCurrency: OtherCurrency,
                    TradeAssets: TradeAssets,
                    UnnecessaryFlats: UnnecessaryFlats,
                    ExtraMobilePhones: ExtraMobilePhones,
                    ExtraVehicles: ExtraVehicles,
                    ExtraLivestocks: ExtraLivestocks,
                    TotalCountableAssets: TotalCountableAssets,


                    RentPayable: RentPayable,
                    SecurityDepositPayable: SecurityDepositPayable,
                    PayableAmountCommittee: PayableAmountCommittee,
                    UtilityBillsPayable: UtilityBillsPayable,
                    LoanPayable: LoanPayable,
                    TotalDeductableLiabilities: TotalDeductableLiabilities,
                    TotalDeductableLiabiliities: TotalDeductableLiabiliities,
                    NetCoutableAssets: NetCoutableAssets,
                    CurrentZakatEvaluation: CurrentZakatEvaluation,
                    Muslim: Muslim,
                    Syed: Syed,
                    AgaKani: AgaKani,
                    ZakatEvaluation: ZakatEvaluation,

                    AmountApplied: AmountApplied,
                    FOAmount: FOAmount,
                    FORemarks2: FORemarks2,

                    ExecutiveRelationship: ExecutiveRelationship,
                    ReferenceName: ReferenceName,
                    RefferedBy: RefferedBy,
                    Intension: Intension,
                    Experience: Experience,
                    Capability: Capability,
                    Training: Training,
                    OtherRemarks: OtherRemarks


                },
                dataType: "JSON",
                success: function (data) {
                    var result = data.result;
                    if (result == "Inserted") {
                        Swal.fire({
                            title: "Recorded Added Successfully!",
                            type: "success",
                            timer: 4000,
                            showConfirmButton: true,
                        })

                    } else if (result == "Duplicate Record") {
                        Swal.fire({
                            title: "Duplicate Record Found!",
                            type: "error",
                            timer: 4000,
                            showConfirmButton: true,
                        })

                    }
                    else {
                        Swal.fire({
                            title: "Opps! Some Error Occured!",
                            type: "error",
                            text: "Please login first",
                            timer: 4000,
                            showConfirmButton: true,
                        }).then(function () {
                            window.location.href = "index.php";
                        });
                    }
                    return data;
                }
            });

        }
    })














}


function btnfinance() {

    var mailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var id = $("#id1").val();
    var CNumber = $("#CNumber").val();
    var CAmount = $("#CAmount").val();
    var CRName = $("#CRName").val();
    var CRCnic = $("#CRCnic").val();
    var bankname = $("#bankname").val();


    $("#CNumber").css("border-color", "");
    $("#12v1").css("display", "");

    $("#CAmount").css("border-color", "");
    $("#13v1").css("display", "");

    $("#CRName").css("border-color", "");
    $("#14v1").css("display", "");

    $("#CRCnic").css("border-color", "");
    $("#15v1").css("display", "");



    if (CNumber == "") {
        $("#12v1").css("display", "block");
        $("#12v1").text("Please Enter Valid Number .");
        $("#CNumber").css("border-color", "red");
        $("#CNumber").focus();
    }
    else if (CAmount == "") {
        $("#13v1").css("display", "block");
        $("#13v1").text("Please Enter Valid Amount.");
        $("#CAmount").css("border-color", "red");
        $("#CAmount").focus();
    }
    else if (CRName == "") {
        $("#14v1").css("display", "block");
        $("#14v1").text("Please Enter Valid Name.");
        $("#CRName").css("border-color", "red");
        $("#CRName").focus();
    }
    else if (CRCnic == "" || CRCnic.length < 13) {
        $("#15v1").css("display", "block");
        $("#15v1").text("Please Enter Valid CNIC.");
        $("#CRCnic").css("border-color", "red");
        $("#CRCnic").focus();
    }

    else {
        Swal.fire({
            title: "Are you sure?",
            text: "You want to perform this action?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/InventoryManagement/api/CharityFinance/FinanceAction.php",
                    method: "POST",
                    data: {
                        id: id,
                        CNumber: CNumber,
                        CAmount: CAmount,
                        CRName: CRName,
                        bankname: bankname,
                        CRCnic: CRCnic
                    },
                    dataType: "JSON",
                    success: function (data) {
                        var result = data.result;
                        if (result == "Inserted") {
                            Swal.fire({
                                title: "Action Performed Successfully!",
                                type: "success",
                                timer: 4000,
                                showConfirmButton: true,
                            })
                            $("#btncancel").trigger("click");
                            $("#datatable").DataTable().destroy();
                            tblcases();
                        } else if (result == "Already Exist") {
                            Swal.fire({
                                title: "Transection Already Performed!",
                                type: "error",
                                timer: 4000,
                                showConfirmButton: true,
                            })
                            $("#btncancel").trigger("click");
                            $("#datatable").DataTable().destroy();
                            tblcases();
                        }
                        else {
                            Swal.fire({
                                title: "Opps! Some Error Occured!",
                                type: "error",
                                text: "Please login first",
                                timer: 4000,
                                showConfirmButton: true,
                            })
                            $("#btncancel").trigger("click");
                            $("#datatable").DataTable().destroy();
                            tblcases();
                        }
                        return data;
                    }
                });
            }
        })
    }
}


