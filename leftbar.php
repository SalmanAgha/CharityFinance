 
  <?php 
  
  // session_start();
  $role2 =  $_SESSION['role'];
  
  
  ?> 
  <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu">
                    <li><a href="AllCases.php"><i class="ti-bar-chart"></i><span>All Cases</span></i></span></a></li>
                     <?php 
                        if($role2 == 'Field Officer'){
                            echo '  <li><a href="FieldOfficer2.php"><i class="ti-bar-chart"></i><span>Field Officer Dashboard</span></i></span></a></li>';
                        } else if($role2 == 'Panel'){
                            echo '  <li><a href="Panel.php"><i class="ti-bar-chart"></i><span>Panel Dashboard</span></i></span></a></li>';
                        } else if($role2 == 'Finance'){
                            echo '  <li><a href="Finance.php"><i class="ti-bar-chart"></i><span>Finance Dashboard</span></i></span></a></li>';
                        }

                        ?>


                  
              <!--        <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Charity Finance</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>


                       
                        
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/InvEntry/InventoryDashboard.php"><i class="ti-control-record"></i>Dashbaord</a></li>
                        </ul>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Staff/Staff.php"><i class="ti-control-record"></i>Staff</a></li>
                        </ul>
                         <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Site/InvSite.php"><i class="ti-control-record"></i>Site</a></li>
                        </ul>
                         <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Product/InvProduct.php"><i class="ti-control-record"></i>Product</a></li>
                        </ul>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/InvEntry/Inventory.php"><i class="ti-control-record"></i>Inventory</a></li>
                        </ul>

                    </li> -->
                     <!--    <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>not final Roles Rights</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                             <li class="nav-item"><a class="nav-link" href="Modules.php"><i class="ti-control-record"></i>Modules</a></li>
                            <li class="nav-item"><a class="nav-link" href="Roles.php"><i class="ti-control-record"></i>Roles</a></li>
                             <li class="nav-item"><a class="nav-link" href="Rights.php"><i class="ti-control-record"></i>Rights</a></li>
                             
                        </ul>
                       
                    </li> -->
                
 <!-- 
                        <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Test Charity</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                             <li class="nav-item"><a class="nav-link" href="CharityFinance.php"><i class="ti-control-record"></i>CharityFinance</a></li>
                            <li class="nav-item"><a class="nav-link" href="FieldOfficer.php"><i class="ti-control-record"></i>Field Officer</a></li>
                             <li class="nav-item"><a class="nav-link" href="Panel.php"><i class="ti-control-record"></i>Admin Page</a></li>
                               <li class="nav-item"><a class="nav-link" href="Page5.php"><i class="ti-control-record"></i>Board Page</a></li>
                               <li class="nav-item"><a class="nav-link" href="Finance.php"><i class="ti-control-record"></i>Finance</a></li>
                             
                        </ul>
                       
                    </li>
                 -->
                   

                  
                </ul>
            </div>