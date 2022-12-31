<?php
session_start();
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="utf-8" />
    <title>Taj Gasoline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/tajlogo.png">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/metisMenu.min.css" rell="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!-- Top Bar Start -->
    <?php include "navbar.php"; ?>
    <div class="page-wrapper">
       <?php include "leftbar.php"; ?>
       <!-- Left Sidenav -->
       <!-- Page Content-->
       <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
                            <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                             <li class="breadcrumb-item active">Home</li>
                         </ol>
                     </div>
                     <h4 class="page-title text-center">CHARITY FINANCE REMARKS</h4>
                 </div><!--end page-title-box-->
             </div><!--end col-->
         </div>
         <!-- end page title end breadcrumb -->
         <div class="col-lg-12" >
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                     
                       <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Case ID</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter ID here" id="caseid">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">No of Males</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter No of Males here" id="NoofMales">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                       
                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">No of Females</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter No of Females here" id="NoofFemales">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">No of Dependants</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter No of Dependants here" id="NoofDependants">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


              <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">No of Person Earning</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter No of Person Earning here" id="NoofPersonEarning">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                     <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Family Income</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Family Income here" id="FamilyIncome">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Monthly Ration</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Monthly Ration here" id="MonthlyRation">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                    <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Monthly Health Care</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Monthly Health Care here" id="MonthlyHealthCare">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">	Monthly Education</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Monthly Education here" id="MonthlyEducation">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Other Expenses</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Other Expenses here" id="OtherExpenses">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                        
                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Total Expenses</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Total Expenses here" id="TotalExpenses">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                        

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Monthly Sirplus deficit</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Monthly Sirplus deficit here" id="MonthlySirplusdeficit">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                           <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Cash Bank</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Cash Bank here" id="CashBank">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                        
                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Gold/Silver</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Gold/Silver here" id="GoldSilver">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                        
                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Provisional Fund</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Provisional Fund here" id="ProvisionalFund">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                        
                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Paid Committee</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Paid Committee here" id="PaidCommittee">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                        
                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Security Deposit</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Security Deposit here" id="SecurityDeposit">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                        
                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Loan Given</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Loan Given here" id="LoanGiven">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Other Currency</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Other Currency here" id="OtherCurrency">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Trade Assets</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Trade Assets here" id="TradeAssets">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                         <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Unnecessary Flats</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Unnecessary Flats here" id="UnnecessaryFlats">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Extra Mobile Phones</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Extra Mobile Phones here" id="ExtraMobilePhones">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>
                        
                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Extra Vehicles</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Extra Vehicles here" id="ExtraVehicles">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                         <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Extra Livestocks</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Extra Livestocks here" id="ExtraLivestocks">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                           <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Total Countable Assets</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Total Countable Assets here" id="TotalCountableAssets">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>


                          <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Rent Payable</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Rent Payable here" id="RentPayable">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Security Deposit Payable</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Security Deposit Payable here" id="SecurityDepositPayable">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Payable Amount Committee</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Payable Amount Committee here" id="PayableAmountCommittee">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Utility Bills Payable</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Utility Bills Payable here" id="UtilityBillsPayable">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Loan Payable</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Loan Payable here" id="LoanPayable">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Ttl Dduct Liabilities</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Ttl Dduct Liabilities here" id="TtlDductLiabilities">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Total Deductable Liabilities</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Total Deductable Liabilities here" id="TotalDeductableLiabilities">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Net Countable Assets</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Net Countable Assets here" id="NetCountableAssets">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Current Zakat Evaluation</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Current Zakat Evaluation here" id="CurrentZakatEvaluation">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Muslim</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Muslim here" id="Muslim">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Syed</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Syed here" id="Syed">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Agha Khani</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Agha Khani here" id="AghaKhani">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Zakat Evaluation</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Zakat Evaluation here" id="ZakatEvaluation">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Amount Applied</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Amount Applied here" id="AmountApplied">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">FO Amount</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter FO Amount here" id="FOAmount">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">FO Remarks2</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter FO Remarks2 here" id="FORemarks2">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Executive Relationship</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Executive Relationship here" id="ExecutiveRelationship">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Reference Name</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Reference Name here" id="ReferenceName">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Reffered By</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Reffered By here" id="RefferedBy">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Intention</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Intention here" id="Intention">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Experience</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Experience here" id="Experience">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Capability</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Capability here" id="Capability">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Training</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Training here" id="Training">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Other Remarks</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Other Remarks here" id="OtherRemarks">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Case Type</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Case Type here" id="CaseType">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Case Description</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Case Description here" id="CaseDescription">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Name</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Name here" id="Name">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Father's Name</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Fathers Name here" id="FathersName">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Cnic</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Cnic here" id="Cnic">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Contact</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Contact here" id="Contact">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Email</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Email here" id="Email">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Status</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Status here" id="Status">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Panel Remarks</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Panel Remarks here" id="PanelRemarks">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Panel Amount</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Panel Amount here" id="PanelAmount">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Net Salary</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Net Salary here" id="NetSalary">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Address</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Address here" id="Address">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Form ID</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Form ID here" id="Formid">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">FO Remarks</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter FO Remarks here" id="FORemarks">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">NOB</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter NOB here" id="NOB">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">NOB Desc</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter NOB Desc here" id="NOBDesc">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">City</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter City here" id="City">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>

                        <div class="form-group row">
                       <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center" style="font-weight: bold;">Otp</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" placeholder="Enter Otp here" id="Otp">
                                    <span class="help-block custom-block-hide" id="0v1"><small></small></span>
                                </div>
                                <div class="col-sm-4"></div>

                        </div>



                        <div class="form-group row ">
                          <div class="col-sm-10 text-center">
                          <button type="button" onclick="update();" id="btnclick" class="btn btn-danger waves-effect waves-light"  style="width: 30%;">Update Price</button>
                          </div>
                      </div> 
                        
                            <!-- <label for="example-text-input" class="col-sm-2 col-form-label text-left">Case Type</label> -->
                             
                              <!-- <button type="button" onclick="insert();" id="btnclick" class="btn btn-primary waves-effect waves-light" style="width: 30%;">Insert Prices</button>
                          
                          <button type="button" onclick="check();" id="btnclick" class="btn btn-danger waves-effect waves-light" style="width: 30%;">Check Price</button>
                          </div> 
                          </div><div>  -->
                           


                  </div>
                  <!-- This is another column -->
              </div>
          </div>
      </div> <!-- end col -->
      

</div>
</div><!-- container -->
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->
<!-- jQuery  -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/metisMenu.min.js"></script>
<script src="../assets/js/waves.min.js"></script>
<script src="../assets/js/jquery.slimscroll.min.js"></script>
<!--Plugins-->
<script src="assets/plugins/moment/moment.js"></script>
<!-- Required datatable js -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="../assets/pages/jquery.sweet-alert.init.js"></script>
<!-- App js -->
<script src="../assets/js/app.js"></script>
</body>
</html>

