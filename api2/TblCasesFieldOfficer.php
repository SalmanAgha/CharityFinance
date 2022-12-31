<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT `CaseID`, `DOC`, `casetype`, `caseDescription`, `Name`, `Fathersname`, `cnic`, `contact`, `email`, `status` FROM `tblcase` where `status` in ('New','Re-assigned','Reimbursed')");

    if (!$query
  )  {


      $result  = "error";
      $message = "query error";
    }
    else
    {
      $result  = "success";
      $message = "query success";
      $empty="";
      while ($row = mysqli_fetch_array($query))
      {
     



      $Action='<td>
      <a  id="'.$row["CaseID"].'" 
      data-date="'.$row["DOC"].'" 
      data-casedesc="'.$row["caseDescription"].'" 
      data-casetype="'.$row["casetype"].'" 
      data-name="'.$row["Name"].'"
      data-fathername="'.$row["Fathersname"].'"  
      data-cnic="'.$row["cnic"].'"  
      data-contact="'.$row["contact"].'"  
      data-email="'.$row["email"].'"
      data-status="'.$row["status"].'"   

      class="mr-2 edit-modal" data-toggle="modal" data-animation="bounce" data-target=".edit-modal1" ><i class="fas fa-edit text-info font-16"></i></a></br></td>';

$Action2='';
if($row["status"]=='Reimbursed'){
  $Action2='<td>
      <a  id="'.$row["CaseID"].'" data-contact="'.$row["contact"].'"  
      data-email="'.$row["email"].'" data-caseid="'.$row["CaseID"].'" 
      class="mr-2 payment-modal" data-toggle="modal" data-animation="bounce" data-target=".payment-modal1" ><i class="fas fa-edit text-info font-16"></i></a></br></td>';
}
 

      
 

          // $Action = '';
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "Empty2"     => $Action2, 
          "CaseID" => $row["CaseID"],
          "DOC" => $row["DOC"],
          "casetype" => $row["casetype"],
          "caseDescription" => $row["caseDescription"],
          "Name" => $row["Name"],
          "Fathersname" => $row["Fathersname"],
          "cnic" => $row["cnic"],
          "contact" => $row["contact"],
          "email" => $row["email"],
          "status" => $row["status"]
          
        );
      }
    }
  // Close database connection
  mysqli_close($connect);
}
// Prepare data
$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);
// Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;
?>