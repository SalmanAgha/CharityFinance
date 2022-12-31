<?php
    session_start();
    // include('connect.php');
    // error_reporting(1);
    // if( !isset($_SESSION['userid']) ){
    //     header("location: Login.php");
    // }else{ 
    //     $userid = $_SESSION['userid'];
    // }

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
<!--     <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script> -->
            <script src="../assets/ajax.js"></script>
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
                     <div class="row">
                <div class="col-md-2">
                      <button class="btn btn-primary btn-round btn-block waves-effect waves-light" onclick="refreshdata();" type="button">Refresh Data</i></button>
                </div>
                
            </div>
                    <div class="text-left">
                        
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style=" overflow-x: auto;border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th></th>
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
                             
                            <!-- Field Officer Fields -->
                            <div class="row">
                                <div class="col-md-12">
                                 <div class="row"> 
                                    <div class="col-md-12">
                                     <div class="card-body">
                                        <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                                              <li class="nav-item">
                                                <a class="nav-link active" id="tab1_data_tab" data-toggle="pill" href="#tab1_data">Case Info</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="tab2_data_tab" data-toggle="pill" href="#tab2_data">House Hold Data</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab3_data_tab" data-toggle="pill" href="#tab3_data">Countable Assets</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab4_data_tab" data-toggle="pill" href="#tab4_data">Deductable Liabilities</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab5_data_tab" data-toggle="pill" href="#tab5_data">Net Countable Assets</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab6_data_tab" data-toggle="pill" href="#tab6_data">Field Officer Remarks</a>
                                            </li>
                                            <div id="NOBtab" style="display: none;" >
                                             <li class="nav-item">
                                                <a class="nav-link" id="tab7_data_tab" data-toggle="pill" href="#tab7_data">Business Tab</a>
                                            </li>
                                        </div>
                                        </ul>        
                                    </div><!--end card-body-->
                                </div>
                                 
                            </div>
                            <div class="tab-content detail-list" id="pills-tabContent">
                                



    <?php include('Tabs/tab1.php'); ?>
    <?php include('Tabs/tab2.php'); ?>
    <?php include('Tabs/tab3.php'); ?>
    <?php include('Tabs/tab4.php'); ?>
    <?php include('Tabs/tab5.php'); ?>

    <?php include('Tabs/tab7.php'); ?>

    
   
 

</div><!--end tab-content--> 
</div>
</div>
 
</div>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>



      <div class="modal fade payment-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Payment Hand over</h5>
                            <button type="button" class="close" data-dismiss="modal" id="btncanel2" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                          <div class="col-lg-12">
                              <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">OTP</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Please Enter OTP"   id="OTP" disabled></input>
                                            <input type="text" id="otpemail" hidden>
                                             <input type="text" id="otpid" hidden>
                                            <span class="help-block custom-block-hide" id="100v1"><<small ></small></span><span><a  onclick="otp();">Click here to Send OTP</a></span>
                                        </div>
                                    </div> 

                                     <div class="form-group row">
                                         <div class="col-md-4"> 
                       <button type="button" class="btn btn-light waves-effect waves-light" data-dismiss="modal" id="btncancel3" aria-hidden="true" onclick="otp();" style="width: 100%;">Send Otp</button>
                   </div>

                        <div class="col-md-4"> 
                          <button type="button" onclick="btnclosecase();" id="closecase" class="btn btn-primary waves-effect waves-light" style="width: 100%;">Close Case</button>
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
<script src="functions/FieldOfficer.js"></script>
<!-- App js -->
<script src="../assets/js/app.js"></script>
</body>
</html>