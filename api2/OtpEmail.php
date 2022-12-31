<?php
if( isset($_POST["otpemail"]) &&  isset($_POST["otpid"])   )
{   

  include("../connect.php");
$result='';
$otp = rand(1000,9999);
  $otpemail = filter_var(htmlentities($_POST["otpemail"]),FILTER_SANITIZE_MAGIC_QUOTES);  
    $otpid = filter_var(htmlentities($_POST["otpid"]),FILTER_SANITIZE_MAGIC_QUOTES);  
 
   $stmt = $connect->prepare("UPDATE `tblcase` SET  `otp`=".$otp." WHERE `CaseID`=".$otpid."");
    
     $stmt->execute();

 if ($stmt == true) 
     {
  include 'EmailCharityFinance.php';
     $result = email($otpemail,'Taj Charity Financing Program', 'OTP Code is '.$otp, 'If you received the payment, please provide this code to our agent!');
  $result ='Success';

     }
else {
  $result ='Error Occured';
}  

 
$data ["result"] = $result;
echo json_encode($data);
}
?>