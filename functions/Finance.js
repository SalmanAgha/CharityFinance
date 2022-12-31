jQuery('.numbersOnly').keyup(function () {
    this.value = this.value.replace(/[^0-9\.,]/g, '');
});


function tblcases() {


    $("#datatable").DataTable({
        "ajax": "api/TblCasesFinance.php",
        "columns": [
            { "data": "Empty" },
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
        $("#PRemarks").val($(this).data("panelremarks"));
        $("#PAmount").val($(this).data("panelamount"));
        $("#FOremarks1").val($(this).data("foremarks"));
        $("#FOAmount1").val($(this).data("foamount"));


    });



});

var PaymentType = '';
function onchangeserial(value) {

    if (value == 'Cheque') {
        $("#Chequediv").css("display", "block");
        $("#Cashdiv").css("display", "none");
        PaymentType = 'Cheque';
    } else if (value == 'Cash') {
        $("#Cashdiv").css("display", "block");
        $("#Chequediv").css("display", "none");
        PaymentType = 'Cash';
    }

}

function btnfinance() {

    var mailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var id = $("#id1").val();
    var CNumber = $("#CNumber").val();
    var CAmount = $("#CAmount").val();
    var CRName = $("#CRName").val();
    var CRCnic = $("#CRCnic").val();
    var PAmount = $("#PAmount").val();
    var Cashradio = $("#Cashradio").val();
    var Chequeradio = $("#Chequeradio").val();
    var CashAmount = $("#CashAmount").val();
    var Validations_Checks = '';

    var bankname = $("#bankname").val();


    $("#bankname").css("border-color", "");
    $("#11v1").css("display", "");

    $("#CNumber").css("border-color", "");
    $("#12v1").css("display", "");

    $("#CAmount").css("border-color", "");
    $("#13v1").css("display", "");

    $("#CRName").css("border-color", "");
    $("#14v1").css("display", "");

    $("#CRCnic").css("border-color", "");
    $("#15v1").css("display", "");

    $("#CashAmount").css("border-color", "");
    $("#17v1").css("display", "");


    if (PaymentType == 'Cheque') {
        Validations_Checks = 'Cleared';
        if (bankname == null) {
            $("#11v1").css("display", "block");
            $("#11v1").text("Please Enter Valid Number .");
            $("#bankname").css("border-color", "red");
            $("#bankname").focus();
            Validations_Checks = 'NotCleared';
        }
        else if (CNumber == "") {
            $("#12v1").css("display", "block");
            $("#12v1").text("Please Enter Valid Number .");
            $("#CNumber").css("border-color", "red");
            $("#CNumber").focus();
            Validations_Checks = 'NotCleared';
        }
        else if (CAmount == "") {
            $("#13v1").css("display", "block");
            $("#13v1").text("Please Enter Valid Amount.");
            $("#CAmount").css("border-color", "red");
            $("#CAmount").focus();
            Validations_Checks = 'NotCleared';
        }
        else if (CRName == "") {
            $("#14v1").css("display", "block");
            $("#14v1").text("Please Enter Valid Name.");
            $("#CRName").css("border-color", "red");
            $("#CRName").focus();
            Validations_Checks = 'NotCleared';
        }
        else if (CRCnic == "" || CRCnic.length < 13) {
            $("#15v1").css("display", "block");
            $("#15v1").text("Please Enter Valid CNIC.");
            $("#CRCnic").css("border-color", "red");
            $("#CRCnic").focus();
            Validations_Checks = 'NotCleared';
        } else if (parseInt(CAmount) > parseInt(PAmount)) {
            $("#13v1").css("display", "block");
            $("#13v1").text("Cheque Amount is greater than Panel Amount");
            $("#CAmount").css("border-color", "red");
            $("#CAmount").focus();
            Validations_Checks = 'NotCleared';

        } else {
            Validations_Checks = 'Cleared';
        }

    } else if (PaymentType == 'Cash') {
        Validations_Checks = 'Cleared';

        if (CashAmount == "") {
            $("#17v1").css("display", "block");
            $("#17v1").text("Please Enter Cash Amount");
            $("#CashAmount").css("border-color", "red");
            $("#CashAmount").focus();
            Validations_Checks = 'NotCleared';
        } else if (parseInt(CashAmount) > parseInt(PAmount)) {
            $("#17v1").css("display", "block");
            $("#17v1").text("Cash Amount is greater than Panel Amount");
            $("#CashAmount").css("border-color", "red");
            $("#CashAmount").focus();
            Validations_Checks = 'NotCleared';
        }

    }

    if (Validations_Checks == 'Cleared') {

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
                    url: "api/FinanceAction.php",
                    method: "POST",
                    data: {
                        id: id,
                        CNumber: CNumber,
                        CAmount: CAmount,
                        CRName: CRName,
                        bankname: bankname,
                        CashAmount: CashAmount,
                        PaymentType: PaymentType,
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
