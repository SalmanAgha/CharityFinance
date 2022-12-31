<?php
if( isset($_POST["otpemail"]) &&  isset($_POST["otpid"]) &&  isset($_POST["OTP"])   )
{   

  include("../connect.php");
  $result='';
  $dbotp="";
  $otpemail = filter_var(htmlentities($_POST["otpemail"]),FILTER_SANITIZE_MAGIC_QUOTES);  
  $otpid = filter_var(htmlentities($_POST["otpid"]),FILTER_SANITIZE_MAGIC_QUOTES);  
  $OTP = filter_var(htmlentities($_POST["OTP"]),FILTER_SANITIZE_MAGIC_QUOTES);  

//Duplicate checking
    $stmt = $connect -> prepare( "Select OTP from  tblcase where caseid = ".$otpid."");
 
   //Executing the statement
    $stmt->execute();
   //Binding variables to resultset
    $stmt->bind_result($dbotp);
    while ($stmt->fetch()) {
      $dbotp = $dbotp;
    }



  if ($dbotp == $OTP) 
  {
    include 'EmailCharityFinance.php';
    $result = email($otpemail,'Taj Charity Financing Program', 'Your Case is Completed', 'We Hope you received the payment');

$FOemail='';
  include("../../connect.php");
//Emailing to Field Officer about status.
    $stmt = $connect -> prepare( "SELECT  `email` FROM `tblstaff` WHERE role  ='Field Officer'");
   //Executing the statement
   $stmt->execute();
   //Binding variables to resultset
   $stmt->bind_result($FOemail);
   while ($stmt->fetch()) {
    $FOemail = $FOemail;
   }
    // include('EmailCharityFinance.php');
    $text = 'This closed in now completed and closed';
     email($FOemail,'Taj Charity Finance Program', 'Status of Application :'.$otpid, $text);

   $stmt = $connect->prepare("UPDATE `tblcase` SET  `status`='Closed' WHERE `CaseID`=".$otpid."");
     $stmt->execute();


    $result ='Success';

  }
  else {
    $result ='Invalid OTP';
  }  


  $data ["result"] = $result;
  echo json_encode($data);
}
?>