jQuery('.numbersOnly').keyup(function () {
    this.value = this.value.replace(/[^0-9\.,]/g, '');
});





function tblcases() {


    $("#datatable").DataTable({
        "ajax": "api/TblCasesPanel.php",
        "columns": [
            { "data": "Empty" },
            { "data": "CaseID" },
            { "data": "DOC" },
            { "data": "casetype" },
            { "data": "caseDescription" },
            // { "data": "foremarks" },
            // { "data": "foamount" },
            { "data": "Name" },
            { "data": "Fathersname" },
            { "data": "cnic" },
            { "data": "contact" },
            { "data": "email" },
            { "data": "status" }

        ],
    });

}


$(document).ready(function () {


    tblcases();


    $(document).on("click", ".edit-modal", function () {

        var caseid = $(this).data("caseid");
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


                $.ajax({
                    url: "api/Validation.php",
                    method: "POST",
                    data: {
                        caseid: caseid
                    },
                    dataType: "JSON",
                    success: function (data) {
                        var result = data; 

     
if(result.email == "Yes"){$("#emailc").prop("checked", true);}
if(result.name == "Yes"){$("#fullnamec").prop("checked", true);}
if(result.fathersname == "Yes"){$("#fathersnamec").prop("checked", true);}
if(result.contact == "Yes"){$("#contactc").prop("checked", true);}
if(result.city == "Yes"){$("#cityc").prop("checked", true);}
if(result.netsalary == "Yes"){$("#NetSalaryc").prop("checked", true);}
if(result.cnic == "Yes"){$("#cnicc").prop("checked", true);}
if(result.address == "Yes"){$("#Addressc").prop("checked", true);}
if(result.casetype == "Yes"){$("#casetypec").prop("checked", true);}
if(result.nob == "Yes"){$("#natureofbusinessc").prop("checked", true);}
if(result.nobdesc == "Yes"){$("#otherbusinessc").prop("checked", true);}
if(result.casedesc == "Yes"){$("#casedescc").prop("checked", true);}
if(result.noofmales == "Yes"){$("#NoofMalesc").prop("checked", true);}
if(result.nooffemales == "Yes"){$("#NoofFemalesc").prop("checked", true);}
if(result.noofdependents == "Yes"){$("#NoofDependentsc").prop("checked", true);}
if(result.noofpersonearning == "Yes"){$("#NoofPersonEarningc").prop("checked", true);}
if(result.familyincome == "Yes"){$("#FamilyIncomec").prop("checked", true);}
if(result.monthlyration == "Yes"){$("#MonthlyRationc").prop("checked", true);}
if(result.monthlyhealthcare == "Yes"){$("#MonthlyHealthCarec").prop("checked", true);}
if(result.monthlyeducation == "Yes"){$("#MonthlyEducationc").prop("checked", true);}
if(result.otherexpenses == "Yes"){$("#OtherExpensesc").prop("checked", true);}
if(result.totalexpenses == "Yes"){$("#TotalExpensesc").prop("checked", true);}
if(result.monthlysirplusdeficit == "Yes"){$("#MonthlySirplusdeficitc").prop("checked", true);}
if(result.cashbank == "Yes"){$("#CashBankc").prop("checked", true);}
if(result.goldsilver == "Yes"){$("#GoldSilverc").prop("checked", true);}
if(result.provisionalfund == "Yes"){$("#ProvisionalFundc").prop("checked", true);}
if(result.paidcommittee == "Yes"){$("#PaidCommitteec").prop("checked", true);}
if(result.securitydeposit == "Yes"){$("#SecurityDepositc").prop("checked", true);}
if(result.loangiven == "Yes"){$("#LoanGivenc").prop("checked", true);}
if(result.othercurrency == "Yes"){$("#OtherCurrencyc").prop("checked", true);}
if(result.tradeassets == "Yes"){$("#TradeAssetsc").prop("checked", true);}
if(result.unnecessaryflats == "Yes"){$("#UnnecessaryFlatsc").prop("checked", true);}
if(result.extramobilephones == "Yes"){$("#ExtraMobilePhonesc").prop("checked", true);}
if(result.extravehicles == "Yes"){$("#ExtraVehiclesc").prop("checked", true);}
if(result.extralivestocks == "Yes"){$("#ExtraLivestocksc").prop("checked", true);}
if(result.totalcountableassets == "Yes"){$("#TotalCountableAssetsc").prop("checked", true);}
if(result.rentpayable == "Yes"){$("#RentPayablec").prop("checked", true);}
if(result.securitydepositpayable == "Yes"){$("#SecurityDepositPayablec").prop("checked", true);}
if(result.payableamountcommittee == "Yes"){$("#PayableAmountCommitteec").prop("checked", true);}
if(result.utilitybillspayable == "Yes"){$("#UtilityBillsPayablec").prop("checked", true);}
if(result.loanpayable == "Yes"){$("#LoanPayablec").prop("checked", true);}
if(result.ttldductliabilities == "Yes"){$("#TotalDeductableLiabilitiesc").prop("checked", true);}
if(result.netcoutableassets == "Yes"){$("#TotalCountableAssets2c").prop("checked", true);}
if(result.totaldeductableliabiliities == "Yes"){$("#TotalDeductableLiabiliitiesc").prop("checked", true);}
if(result.netcoutableassets == "Yes"){$("#NetCoutableAssetsc").prop("checked", true);}
if(result.currentzakatevaluation == "Yes"){$("#CurrentZakatEvaluationc").prop("checked", true);}
if(result.muslim == "Yes"){$("#Muslimc").prop("checked", true);}
if(result.syed == "Yes"){$("#Syedc").prop("checked", true);}
if(result.agakani == "Yes"){$("#AgaKanic").prop("checked", true);}
if(result.zakatevaluation == "Yes"){$("#ZakatEvaluationc").prop("checked", true);}
if(result.executiverelationship == "Yes"){$("#ExecutiveRelationshipc").prop("checked", true);}
if(result.referencename == "Yes"){$("#ReferenceNamec").prop("checked", true);}
if(result.refferedby == "Yes"){$("#RefferedByc").prop("checked", true);}
if(result.intension == "Yes"){$("#Intensionc").prop("checked", true);}
if(result.experience == "Yes"){$("#Experiencec").prop("checked", true);} 
if(result.training ==  "Yes"){$("#Trainingc").prop("checked", true);} 
if(result.capability == "Yes"){$("#Capabilityc").prop("checked", true);} 
if(result.otherremarks ==  "Yes"){$("#OtherRemarksc").prop("checked", true);} 





                      
                        return data;
                    }
                });


    });


});


function Updateremarks(value) {

    var mailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    var caseid = $("#id1").val();
    var remarks = $("#remarks1").val();
    var poamount = $("#poamount").val();
    var status = value;


    $("#remarks1").css("border-color", "");
    $("#10v").css("display", "");
    $("#foamount").css("border-color", "");
    $("#11v").css("display", "");



    if (remarks == "") {
        $("#10v1").css("display", "block");
        $("#10v1").text("Please Enter Some Remarks.");
        $("#remarks1").css("border-color", "red");
        $("#remarks1").focus();
    }
    else if (foamount == "") {
        $("#11v1").css("display", "block");
        $("#11v1").text("Please Enter Some Remarks.");
        $("#foamount").css("border-color", "red");
        $("#foamount").focus();
    }
    else {
        Swal.fire({
            title: "Are you sure?",
            text: "You want to " + status + " ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "api/PanelStatus.php",
                    method: "POST",
                    data: {
                        caseid: caseid,
                        remarks: remarks,
                        poamount: poamount,
                        status: status
                    },
                    dataType: "JSON",
                    success: function (data) {
                        var result = data.result;
                        if (result == "Success") {
                            Swal.fire({
                                title: "Application is " + status + " Successfully!",
                                type: "success",
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