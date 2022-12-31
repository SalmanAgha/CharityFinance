<?php
if( isset($_POST["email"]) && isset($_POST["fullname"]) && isset($_POST["fathersname"])
  && isset($_POST["contact"]) && isset($_POST["cnic"]) && isset($_POST["casetype"])
  && isset($_POST["casedesc"]) && isset($_POST["NetSalary"])
  && isset($_POST["Address"]) && isset($_POST["natureofbusiness"]) && isset($_POST["otherbusiness"])
  && isset($_POST["city"])  )
{   

  

  $email = filter_var(htmlentities($_POST["email"]),FILTER_SANITIZE_MAGIC_QUOTES);  
  $fullname = filter_var(htmlentities($_POST["fullname"]),FILTER_SANITIZE_MAGIC_QUOTES);
  $fathersname = filter_var(htmlentities($_POST["fathersname"]),FILTER_SANITIZE_MAGIC_QUOTES); 
  $contact = filter_var(htmlentities($_POST["contact"]),FILTER_SANITIZE_MAGIC_QUOTES); 
  $cnic = filter_var(htmlentities($_POST["cnic"]),FILTER_SANITIZE_MAGIC_QUOTES);
  $casetype = filter_var(htmlentities($_POST["casetype"]),FILTER_SANITIZE_MAGIC_QUOTES); 
  $casedesc = filter_var(htmlentities($_POST["casedesc"]),FILTER_SANITIZE_MAGIC_QUOTES);  
  $NetSalary = filter_var(htmlentities($_POST["NetSalary"]),FILTER_SANITIZE_MAGIC_QUOTES); 
  $Address = filter_var(htmlentities($_POST["Address"]),FILTER_SANITIZE_MAGIC_QUOTES); 

    $natureofbusiness = filter_var(htmlentities($_POST["natureofbusiness"]),FILTER_SANITIZE_MAGIC_QUOTES);  
  $otherbusiness = filter_var(htmlentities($_POST["otherbusiness"]),FILTER_SANITIZE_MAGIC_QUOTES); 
  $city = filter_var(htmlentities($_POST["city"]),FILTER_SANITIZE_MAGIC_QUOTES);    

 




  $duplicatecnic ='';     
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
  }
  else{
//Duplicate checking
    $stmt = $connect -> prepare( "Select cnic from  tblcase where cnic = ?");
    $stmt->bind_param('s', $cnic); 
   //Executing the statement
    $stmt->execute();
   //Binding variables to resultset
    $stmt->bind_result($duplicatecnic);
    while ($stmt->fetch()) {
      $duplicatecnic = $duplicatecnic;
    }
    if($duplicatecnic ==""){
   $stmt = $connect->prepare("INSERT INTO `tblcase`( `DOC`, `casetype`, `caseDescription`, `Name`, `Fathersname`, `cnic`, `contact`, `email`, `status`, `address`, `netsalary`, `NOB`, `NOBdesc`, `city`) VALUES  (Now(),?,?,?,?,?,?,?,'New',?,?,?,?,?)");
     $stmt->bind_param('ssssssssssss', $casetype,$casedesc,$fullname,$fathersname,$cnic,$contact,$email,$Address,$NetSalary,$natureofbusiness,$otherbusiness,$city); 
     $stmt->execute();
     $last_id = $connect->insert_id;
 
     if ($stmt == true) 
     {
      $result="Inserted";
      include 'EmailCharityFinance.php';
      email($email,'Taj Charity Financing Program', 'Your Application ID is. '.$last_id, 'Your Application has been received, our staff will contact you soon!');
    }
    else{
      $result="Not Inserted";
    }
  }
  else {
    $result="Duplicate Application";
  }
} 
$data ["result"] = $result;
echo json_encode($data);
}
?>