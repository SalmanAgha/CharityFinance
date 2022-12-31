
<?php
 

if( isset($_POST["caseid"]) && isset($_POST["remarks"]) && isset($_POST["status"])  
&& isset($_POST["poamount"])  )
{   

 
$caseid = filter_var(htmlentities($_POST["caseid"]),FILTER_SANITIZE_MAGIC_QUOTES);  
$remarks = filter_var(htmlentities($_POST["remarks"]),FILTER_SANITIZE_MAGIC_QUOTES);
$amount = filter_var(htmlentities($_POST["poamount"]),FILTER_SANITIZE_MAGIC_QUOTES);
$status = filter_var(htmlentities($_POST["status"]),FILTER_SANITIZE_MAGIC_QUOTES); 
   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{


  $plot_approving="UPDATE `tblcase` SET  `panelremarks`='".$remarks."',`panelamount`='".$amount."',`status`='".$status."' WHERE `CaseID`=".$caseid."";
    $run_querry=mysqli_query($connect,$plot_approving);
    mysqli_close($connect);
             

  if( $run_querry == "True"){
   
    $result = "Success"; 

$FOemail='';

  include("../connect.php");
//Emailing to Field Officer about status.
    $stmt = $connect -> prepare( "SELECT  `email` FROM `tblstaff` WHERE role  ='Field Officer'");

   //Executing the statement
   $stmt->execute();

   //Binding variables to resultset
   $stmt->bind_result($FOemail);
 

   while ($stmt->fetch()) {
    $FOemail = $FOemail;
   }
 



    include('EmailCharityFinance.php');
    $text = 'Your Application has been '.$status;

     email($FOemail,'Taj Charity Finance Program', 'Status of Application :'.$caseid, $text);
  }
  else
  {
   
  $result = "error"; 


  }  
  }
  
   


  $data ["result"] = $result;
    echo json_encode($data);

}
?>