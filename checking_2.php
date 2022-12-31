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
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">
    <link href="../assets/plugins/filter/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <!-- <link href="../assets/custom/bootstrap-css.css" rel="stylesheet" /> -->



</head>

<body class="account-body">
    <?php
    // include('../navbar.php'); 
    ?>
    <!-- Log In page -->
    <div class="row vh-1080 " style="background-image: url('assets/images/webbg.jpg');">
        <div class="col-md-12" style="margin-top:1rem ;">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1" style="padding: 0.3rem;"></div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <?php
                           include 'Tab/Tab_Buttons.php';
                           ?>
                            </div><!--end card-body-->
                        </div>
                    </div>
                    <div class="tab-content">
                        <?php
                 include('Tab/Tab1.php');
                 include('Tab/Tab2.php');
                 include('Tab/Tab3.php');
                 include('Tab/Tab4.php');
                 include('Tab/Tab5.php');
                 include('Tab/Tab6.php');
                 include('Tab/Tab7.php');
                 include('Tab/Tab8.php');
                 include('Tab/Tab9.php');


                 ?>
                    </div>
                </div><!--end tab-content-->
            </div>
        </div>
    </div><!--end /div-->

    <!-- End Log In page -->
    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/waves.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../assets/plugins/select2/select2.min.js"></script>
    <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="../assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
    <script src="../assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="../assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="../assets/pages/jquery.forms-advanced.js"></script>
    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="../assets/pages/jquery.sweet-alert.init.js"></script>
    <script src="../assets/plugins/dropify/js/dropify.min.js"></script>
    <script src="../assets/pages/jquery.profile.init.js"></script>
    <script src="../assets/plugins/filter/isotope.pkgd.min.js"></script>
    <script src="../assets/plugins/filter/masonry.pkgd.min.js"></script>
    <script src="../assets/plugins/filter/jquery.magnific-popup.min.js"></script>
    <script src="../assets/pages/jquery.gallery.inity.js"></script>
    <!-- <script src="../assets/custom/bootstrap-js.js"></script> -->

    <script src="functions/checking.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
    <script type="text/javascript">
        var input = document.getElementById("Password");
        input.addEventListener("keyup", function (event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("btnlogin").click();
            }
        });
    </script>
</body>

</html>