//  jQuery('.numbersOnly').keyup(function () 
//  { 
//      this.value = this.value.replace(/[^0-9\.,]/g,'');
//  });





//  function btnsubmit(){

//      var mailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


//      var email = $("#email").val(); 
//      var fullname = $("#fullname").val(); 
//      var fathersname = $("#fathersname").val(); 
//      var contact = $("#contact").val(); 
//      var cnic = $("#cnic").val(); 
//      var casetype = $("#casetype").val(); 
//      var casedesc = $("#casedesc").val(); 
//      var NetSalary = $("#NetSalary").val(); 
//      var Address = $("#Address").val();  
//      var natureofbusiness = $("#natureofbusiness").val(); 
//      var otherbusiness = $("#otherbusiness").val();
//      var city = $("#city").val();        


//      $("#email").css("border-color", "");
//      $("#55v").css("display", "");
//      $("#fullname").css("border-color", "");
//      $("#56v").css("display", "");
//      $("#fathersname").css("border-color", "");
//      $("#57v").css("display", "");
//      $("#contact").css("border-color", "");
//      $("#58v").css("display", "");
//      $("#cnic").css("border-color", "");
//      $("#61v").css("display", "");
//      $("#casetype").css("border-color", "");
//      $("#66v").css("display", "");
//      $("#casedesc").css("border-color", "");
//      $("#65v").css("display", ""); 
//      $("#NetSalary").css("border-color", "");
//      $("#60v").css("display", ""); 
//      $("#Address").css("border-color", "");
//      $("#62v").css("display", ""); 

//      $("#natureofbusiness").css("border-color", "");
//      $("#63v").css("display", ""); 
//      $("#otherbusiness").css("border-color", "");
//      $("#64v").css("display", ""); 
//      $("#city").css("border-color", "");
//      $("#59v").css("display", ""); 



//      if(email == "" ){
//          $("#55v").css("display", "block");
//          $("#55v").text("Invalid Email."); 
//          $("#email").css("border-color", "red");
//          $("#email").focus();
//      }  else if(!email.match(mailRegEx))
//      {
//          $("#email").css({ 'border-color': 'red' });
//          $("#55v").css({ 'display': 'block'}); 
//          $("#55v").text("Please Enter Valid Email!"); 
//      }
//      else if(fullname == "" ){
//          $("#56v").css("display", "block");
//          $("#56v").text("Invalid Full Name."); 
//          $("#fullname").css("border-color", "red");
//          $("#fullname").focus();
//      } else if(fathersname == "" ){
//          $("#57v").css("display", "block");
//          $("#57v").text("Invalid Father's Name."); 
//          $("#fathersname").css("border-color", "red");
//          $("#fathersname").focus();
//      } else if(contact == ""  || contact.length < 11 ){
//          $("#58v").css("display", "block");
//          $("#58v").text("Invalid Contact."); 
//          $("#contact").css("border-color", "red");
//          $("#contact").focus();
//      }
//      else if(city == null ){
//          $("#59v").css("display", "block");
//          $("#59v").text("Invalid City."); 
//          $("#city").css("border-color", "red");
//          $("#city").focus();
//      } 
//      else if(NetSalary == "" ){
//          $("#60v").css("display", "block");
//          $("#60v").text("Invalid Case NetSalary."); 
//          $("#NetSalary").css("border-color", "red");
//          $("#NetSalary").focus();
//      }   else if(cnic == "" || cnic.length < 13 ){
//          $("#61v").css("display", "block");
//          $("#61v").text("Invalid Cnic."); 
//          $("#cnic").css("border-color", "red");
//          $("#cnic").focus();
//      } else if(Address == "" ){
//          $("#62v").css("display", "block");
//          $("#62v").text("Invalid Case Address."); 
//          $("#Address").css("border-color", "red");
//          $("#Address").focus();
//      }

//      else if(casetype == null ){
//          $("#66v").css("display", "block");
//          $("#66v").text("Invalid Case Type."); 
//          $("#casetype").css("border-color", "red");
//          $("#casetype").focus();
//      }

//      else if(casedesc == "" ){
//          $("#65v").css("display", "block");
//          $("#65v").text("Invalid Case Description."); 
//          $("#casedesc").css("border-color", "red");
//          $("#casedesc").focus();
//      }  


//      else if(natureofbusiness == null ){
//          $("#63v").css("display", "block");
//          $("#63v").text("Invalid Nature of Business."); 
//          $("#natureofbusiness").css("border-color", "red");
//          $("#natureofbusiness").focus(); 
//      }  
//      else 
//      {   
//          Swal.fire({
//              title: "Are you sure?",
//              text: "You want to Apply!",
//              type: "warning",
//              showCancelButton: true,
//              confirmButtonColor: "#3085d6",
//              cancelButtonColor: "#d33",
//              confirmButtonText: "Yes!"
//          }).then((result) => {
//              if (result.value) {  
//                  $.ajax( {
//                      url: "api/MainForm.php",
//                      method: "POST",
//                      data: {
//                          email:email,
//                          fullname:fullname,
//                          fathersname:fathersname,
//                          contact:contact,
//                          cnic:cnic,
//                          casetype:casetype,
//                          casedesc:casedesc,
//                          NetSalary:NetSalary,
//                          Address:Address,
//                          natureofbusiness:natureofbusiness,
//                          otherbusiness:otherbusiness,
//                          city:city



//                      },
//                      dataType: "JSON",
//                      beforeSend: function(){
//                          BtnLoadingTrue();},
//                          success: function (data) 
//                          {
//                              BtnLoadingFalse();
//                              var result = data.result;
//                              if ( result == "Inserted" )
//                              {
//                                  Swal.fire({
//                                      title: "Your Application is submitted Successfully!",
//                                      type: "success",
//                                      timer: 4000,
//                                      showConfirmButton: true,
//                                  })  
//                              } else if ( result == "Duplicate Application" )
//                              {
//                                  Swal.fire({
//                                      title: "Your Application already exist!",
//                                      type: "error",
//                                      timer: 4000,
//                                      showConfirmButton: true,
//                                  })  
//                              } 
//                              else 
//                              { 
//                                  Swal.fire({
//                                      title: "Opps! Some Error Occured!",
//                                      type: "error",
//                                      text: "Please login first",
//                                      timer: 4000,
//                                      showConfirmButton: true,
//                                  }).then(function () {
//                                      window.location.href = "index.php";
//                                  });
//                              }
//                              return data;
//                          }
//                      });
//              } })
//      }
//  }


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

    } else if (value == "page2") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "inline");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");

    } else if (value == "page3") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "inline");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");

    } else if (value == "page4") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "inline");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
      
    } else if (value == "page5") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "inline");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
       
    } else if (value == "page6") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "inline");
        $("#page7").css("display", "none");
        
    } else if (value == "page7") {
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "inline");
       
    } 


}

// $("#page-two-button").prop("disabled", false);
// $("#page-one").css("display", "none");
// $("#page-two").css("display", "inline");

jQuery('.numbersOnly').keyup(function () {
    this.value = this.value.replace(/[^0-9\.,]/g, '');
});



// FamilyIncome
// MonthlyRation
// MonthlyHealthCare
// MonthlyEducation
// OtherExpenses
// TotalExpenses
function BtnLoadingTrue() {
    $("#btnlogin").attr("disabled", true);
    $('#btnlogin').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Please Wait...');
}
function BtnLoadingFalse() {
    $("#btnlogin").attr("disabled", false);
    $('#btnlogin').html('Done <i class="fas fa-sign-in-alt ml-1"></i>');
}



function business_change() {

    var casetype = $("#casetype").val();

    if (casetype == 'Charity') {

        $("#div_businesstype").css("display", "block");
    } else {

        $("#div_businesstype").css("display", "none");
    }

}


function business_change2() {
    var natureofbusiness = $("#natureofbusiness").val();

    if (natureofbusiness == 'Others') {

        $("#div_othernature").css("display", "block");
    } else {

        $("#div_othernature").css("display", "none");
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
            otpemail: otpemail,
            otpid: otpid,
            OTP: OTP
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
        $("#date1").val($(this).data("date"));
        $("#casetype1").val($(this).data("casetype"));
        $("#casedesc1").val($(this).data("casedesc"));
        $("#name1").val($(this).data("name"));
        $("#fathername1").val($(this).data("fathername"));
        $("#cnic1").val($(this).data("cnic"));
        $("#contact1").val($(this).data("contact"));
        $("#email1").val($(this).data("email"));
        $("#status1").val($(this).data("status"));
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


function btnsubmit2() {



    // var id1 = $("#id1").val();
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

    var mailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    var email = $("#email").val();
    var fullname = $("#fullname").val();
    var fathersname = $("#fathersname").val();
    var contact = $("#contact").val();
    var cnic = $("#cnic").val();
    var casetype = $("#casetype").val();
    var casedesc = $("#casedesc").val();
    var NetSalary = $("#NetSalary").val();
    var Address = $("#Address").val();
    var natureofbusiness = $("#natureofbusiness").val();
    var otherbusiness = $("#otherbusiness").val();
    var city = $("#city").val();







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
    $("#email").css("border-color", "");
    $("#55v").css("display", "");
    $("#fullname").css("border-color", "");
    $("#56v").css("display", "");
    $("#fathersname").css("border-color", "");
    $("#57v").css("display", "");
    $("#contact").css("border-color", "");
    $("#58v").css("display", "");
    $("#cnic").css("border-color", "");
    $("#61v").css("display", "");
    $("#casetype").css("border-color", "");
    $("#66v").css("display", "");
    $("#casedesc").css("border-color", "");
    $("#65v").css("display", "");
    $("#NetSalary").css("border-color", "");
    $("#60v").css("display", "");
    $("#Address").css("border-color", "");
    $("#62v").css("display", "");

    $("#natureofbusiness").css("border-color", "");
    $("#63v").css("display", "");
    $("#otherbusiness").css("border-color", "");
    $("#64v").css("display", "");
    $("#city").css("border-color", "");
    $("#59v").css("display", "");
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


    // if (id1 == "") {
    //     $("#1v").css("display", "block");
    //     $("#1v").text("Please Enter Valid id .");
    //     $("#id1").css("border-color", "red");
    //     $("#id1").focus();
    // } else
     if (date1 == "") {
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
    else if (email == "") {
        $("#55v").css("display", "block");
        $("#55v").text("Invalid Email.");
        $("#email").css("border-color", "red");
        $("#email").focus();
    } else if (!email.match(mailRegEx)) {
        $("#email").css({ 'border-color': 'red' });
        $("#55v").css({ 'display': 'block' });
        $("#55v").text("Please Enter Valid Email!");
    }
    else if (fullname == "") {
        $("#56v").css("display", "block");
        $("#56v").text("Invalid Full Name.");
        $("#fullname").css("border-color", "red");
        $("#fullname").focus();
    } else if (fathersname == "") {
        $("#57v").css("display", "block");
        $("#57v").text("Invalid Father's Name.");
        $("#fathersname").css("border-color", "red");
        $("#fathersname").focus();
    } else if (contact == "" || contact.length < 11) {
        $("#58v").css("display", "block");
        $("#58v").text("Invalid Contact.");
        $("#contact").css("border-color", "red");
        $("#contact").focus();
    }
    else if (city == null) {
        $("#59v").css("display", "block");
        $("#59v").text("Invalid City.");
        $("#city").css("border-color", "red");
        $("#city").focus();
    }
    else if (NetSalary == "") {
        $("#60v").css("display", "block");
        $("#60v").text("Invalid Case NetSalary.");
        $("#NetSalary").css("border-color", "red");
        $("#NetSalary").focus();
    } else if (cnic == "" || cnic.length < 13) {
        $("#61v").css("display", "block");
        $("#61v").text("Invalid Cnic.");
        $("#cnic").css("border-color", "red");
        $("#cnic").focus();
    } else if (Address == "") {
        $("#62v").css("display", "block");
        $("#62v").text("Invalid Case Address.");
        $("#Address").css("border-color", "red");
        $("#Address").focus();
    }

    else if (natureofbusiness == null) {
        $("#63v").css("display", "block");
        $("#63v").text("Invalid Nature of Business.");
        $("#natureofbusiness").css("border-color", "red");
        $("#natureofbusiness").focus();
    }
    else if (otherbusiness == null) {
        $("#64v").css("display", "block");
        $("#64v").text("Invalid Nature of Business.");
        $("#natureofbusiness").css("border-color", "red");
        $("#natureofbusiness").focus();
    }
    else if (casetype == null) {
        $("#66v").css("display", "block");
        $("#66v").text("Invalid Case Type.");
        $("#casetype").css("border-color", "red");
        $("#casetype").focus();
    }

    else if (casedesc == "") {
        $("#65v").css("display", "block");
        $("#65v").text("Invalid Case Description.");
        $("#casedesc").css("border-color", "red");
        $("#casedesc").focus();
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

                    // id1: id1,

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
                    OtherRemarks: OtherRemarks,
                    email: email,
                    fullname: fullname,
                    fathersname: fathersname,
                    contact: contact,
                    cnic: cnic,
                    casetype: casetype,
                    casedesc: casedesc,
                    NetSalary: NetSalary,
                    Address: Address,
                    natureofbusiness: natureofbusiness,
                    otherbusiness: otherbusiness,
                    city: city


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
                          location.reload();
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