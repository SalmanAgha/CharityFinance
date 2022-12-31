<?php
    // session_start();
    // include('connect.php');
    // error_reporting(1);
    // if( !isset($_SESSION['userid']) ){
    //     header("location: Login.php");
    // }else{ 
    //     $userid = $_SESSION['userid'];
    // }
$_SESSION['role'] = 'Test Role';
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
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
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
                       <h4 class="page-title">Welcome <?php echo $_SESSION['role'];?> </h4>
                   </div><!--end page-title-box-->
               </div><!--end col-->
           </div>

           <!-- end page title end breadcrumb -->
           <div class="col-lg-12" >
            <div class="card">
                <div class="card-body">
                    <div class="text-left">

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style=" overflow-x: auto;border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>

                                    <th></th>
                                    <th>CaseID</th>
                                    <th>DateOC</th>
                                    <th>Case Type</th>
                                    <th>Case Description</th>
                                    <th>Name</th>
                                    <th>Fathersname</th>
                                    <th>Cnic</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->



            <div class="modal fade edit-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Assign Case</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                          <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">

                                     <label for="example-text-input" class="col-lg-6 col-form-label  C-Modal-Data-title text-center">Case Information</label>
                                    

                                     <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Case ID</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="id1" disabled="">
                                            <span class="help-block custom-block-hide" id="0v1"><small ></small></span></div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Date Time</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Date" disabled  id="date1"><span class="help-block custom-block-hide" id="1v1"><small ></small></span>
                                            </div>
                                        </div> 


                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Case Type</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type" disabled  id="casetype1"><span class="help-block custom-block-hide" id="2v1"><small ></small></span>
                                            </div>
                                        </div> 




                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Case Description</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type" disabled   id="casedesc1"><span class="help-block custom-block-hide" id="3v1"><small ></small></span>
                                            </div>
                                        </div> 

                                          <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Status</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type" disabled   id="status1"><span class="help-block custom-block-hide" id="9v1"><small ></small></span>
                                            </div>
                                        </div> 

                                    
                                </div>
                                    <!-- This is another column -->
                                <div class="col-md-6">
                                    <label for="example-text-input" class="col-lg-6 col-form-label  C-Modal-Data-title text-center">Personal Information</label>
                                    
                                       <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type"  disabled  id="name1"><span class="help-block custom-block-hide" id="4v1"><small ></small></span>
                                            </div>
                                        </div> 

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Father's Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type" disabled   id="fathername1"><span class="help-block custom-block-hide" id="5v1"><small ></small></span>
                                            </div>
                                        </div> 

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Cnic</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type"  disabled  id="cnic1"><span class="help-block custom-block-hide" id="6v1"><small ></small></span>
                                            </div>
                                        </div> 

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Contact</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type" disabled   id="contact1"><span class="help-block custom-block-hide" id="7v1"><small ></small></span>
                                            </div>
                                        </div> 

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type" disabled   id="email1"><span class="help-block custom-block-hide" id="8v1"><small ></small></span>
                                            </div>
                                        </div> 


                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="example-text-input" class="col-lg-6 col-form-label  C-Modal-Data-title text-center">Operations Performed</label>


                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Field Officer Remarks</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" type="text" placeholder="Please Enter Remarks"   id="FOremarks1" disabled></textarea><span class="help-block custom-block-hide" id="10v1"><<small ></small></span>
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Field Officer Amount</label>
                                          <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type"  disabled  id="FOAmount1"><span class="help-block custom-block-hide" id="6v1"><small ></small></span>
                                            </div>
                                        </div> 

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Panel Remarks</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" type="text" placeholder="Please Enter Remarks"   id="PRemarks" disabled></textarea><span class="help-block custom-block-hide" id="10v1"><<small ></small></span>
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Panel Approved Amount</label>
                                           <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type"  disabled  id="PAmount"><span class="help-block custom-block-hide" id="6v1"><small ></small></span>
                                            </div>
                                        </div> 

                                    </div>
                                    <div class="col-md-6">
                                            <label for="example-text-input" class="col-lg-6 col-form-label  C-Modal-Data-title text-center">Finance Department</label>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Bank Name</label>
                                            <div class="col-sm-10">
                                            
                                              <select class="select2 form-control mb-3 custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="bankname">

                                <option value="null" selected disabled>Select Bank</option>
                                <option value="Bank Al Habib">Bank Al Habib</option>
                                <option value="Faysal Bank">Faysal Bank</option>
                            </select>
                                            <span class="help-block custom-block-hide" id="12v1"><small ></small></span>
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Cheque Number</label>
                                            <div class="col-sm-10">
                                                <input class="form-control numbersOnly " type="text" placeholder="Please Enter Case Type"     id="CNumber"><span class="help-block custom-block-hide" id="12v1"><small ></small></span>
                                            </div>
                                        </div> 

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Cheque Amount</label>
                                            <div class="col-sm-10">
                                                <input class="form-control numbersOnly " type="text" placeholder="Please Enter Case Type"     id="CAmount"><span class="help-block custom-block-hide" id="13v1"><small ></small></span>
                                            </div>
                                        </div> 

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Cheque Receiver Name</label>
                                           <div class="col-sm-10">
                                                <input class="form-control  " type="text" placeholder="Please Enter Case Type"     id="CRName"><span class="help-block custom-block-hide" id="14v1"><small ></small></span>
                                            </div>
                                        </div> 

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-right">Cheque Receiver CNIC</label>
                                           <div class="col-sm-10">
                                                <input class="form-control numbersOnly " type="text" placeholder="Please Enter Case Type"     id="CRCnic"><span class="help-block custom-block-hide" id="15v1"><small ></small></span>
                                            </div>
                                        </div> 

                                    </div>
                                    
                                </div>
 
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4"> 
                                      <button type="button" onclick="btnfinance();" id="Assign" class="btn btn-primary waves-effect waves-light" style="width: 100%;">Reimburse</button>
                                  </div>
                                  

                                  <div class="col-md-4"> 
                                   <button type="button" class="btn btn-light waves-effect waves-light" data-dismiss="modal" id="btncancel" aria-hidden="true" style="width: 100%;">Cancel</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div><!-- /.modal-content -->
           </div><!-- /.modal-dialog -->
       </div>






   </div><!-- container -->
   <?php include("../footer.php");?>
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
<script src="../assets/plugins/moment/moment.js"></script>
<!-- Required datatable js -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="../assets/pages/jquery.sweet-alert.init.js"></script>
<script src="functions/AllCases.js"></script>
<!-- App js -->
<script src="../assets/js/app.js"></script>
</body>
</html>