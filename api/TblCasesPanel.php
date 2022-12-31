<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{


    $query = mysqli_query($connect,"select   `caseid`, `noofmales`, `nooffemales`, `noofdependents`, `noofpersonearning`, `familyincome`, `monthlyration`, `monthlyhealthcare`, `monthlyeducation`, `otherexpenses`, `totalexpenses`, `monthlysirplusdeficit`, `cashbank`, `goldsilver`, `provisionalfund`, `paidcommittee`, `securitydeposit`, `loangiven`, `othercurrency`, `tradeassets`, `unnecessaryflats`, `extramobilephones`, `extravehicles`, `extralivestocks`, `totalcountableassets`, `rentpayable`, `securitydepositpayable`, `payableamountcommittee`, `utilitybillspayable`, `loanpayable`, `ttldductliabilities`, `totaldeductableliabiliities`, `netcoutableassets`, `currentzakatevaluation`, `muslim`, `syed`, `agakani`, `zakatevaluation`, `amountapplied`, `foamount`, `foremarks2`, `executiverelationship`, `referencename`, `refferedby`, `intension`, `experience`, `capability`, `training`, `otherremarks`, `doc`, `casetype`, `casedescription`, `name`, `fathersname`, `cnic`, `contact`, `email`, `status`, `panelremarks`, `panelamount`, `netsalary`, `address`, `formid`, `foremarks`, `nob`, `nobdesc`, `city`, `otp`  from `tblmainform` where `status` = 'Validated'  ");

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
      <a  
      id="'.$row["caseid"].'" 
        data-caseid="'.$row["caseid"].'"
         data-casetype="'.$row["casetype"].'"
      data-casedesc="'.$row["casedescription"].'"
      data-name="'.$row["name"].'"
      data-fathersname="'.$row["fathersname"].'"
      data-cnic="'.$row["cnic"].'"
      data-contact="'.$row["contact"].'"
      data-email="'.$row["email"].'"
      data-netsalary="'.$row["netsalary"].'"
      data-address="'.$row["address"].'"
      data-nob="'.$row["nob"].'"
      data-nobdesc="'.$row["nobdesc"].'"
      data-city="'.$row["city"].'" 


      data-noofmales="'.$row["noofmales"].'"
      data-nooffemales="'.$row["nooffemales"].'"
      data-noofdependents="'.$row["noofdependents"].'"
      data-noofpersonearning="'.$row["noofpersonearning"].'"
      data-familyincome="'.$row["familyincome"].'"
      data-monthlyration="'.$row["monthlyration"].'"
      data-monthlyhealthcare="'.$row["monthlyhealthcare"].'"
      data-monthlyeducation="'.$row["monthlyeducation"].'"
      data-otherexpenses="'.$row["otherexpenses"].'"
      data-totalexpenses="'.$row["totalexpenses"].'"
      data-monthlysirplusdeficit="'.$row["monthlysirplusdeficit"].'"


       data-cashbank="'.$row["cashbank"].'"
      data-goldsilver="'.$row["goldsilver"].'"
      data-provisionalfund="'.$row["provisionalfund"].'"
      data-paidcommittee="'.$row["paidcommittee"].'"
      data-securitydeposit="'.$row["securitydeposit"].'"
      data-loangiven="'.$row["loangiven"].'"
      data-othercurrency="'.$row["othercurrency"].'"
      data-tradeassets="'.$row["tradeassets"].'"
      data-unnecessaryflats="'.$row["unnecessaryflats"].'"
      data-extramobilephones="'.$row["extramobilephones"].'"
      data-extravehicles="'.$row["extravehicles"].'"
      data-extralivestocks="'.$row["extralivestocks"].'"
       data-totalcountableassets="'.$row["totalcountableassets"].'"

       
      data-rentpayable="'.$row["rentpayable"].'"
      data-securitydepositpayable="'.$row["securitydepositpayable"].'"
      data-payableamountcommittee="'.$row["payableamountcommittee"].'"
      data-utilitybillspayable="'.$row["utilitybillspayable"].'"
      data-loanpayable="'.$row["loanpayable"].'"
      data-ttldductliabilities="'.$row["ttldductliabilities"].'"
      data-totaldeductableliabiliities="'.$row["totaldeductableliabiliities"].'"
      data-netcoutableassets="'.$row["netcoutableassets"].'"
      data-currentzakatevaluation="'.$row["currentzakatevaluation"].'"
      data-muslim="'.$row["muslim"].'"
      data-syed="'.$row["syed"].'"
       data-agakani="'.$row["agakani"].'"
      data-zakatevaluation="'.$row["zakatevaluation"].'"
      data-amountapplied="'.$row["amountapplied"].'"
      data-foamount="'.$row["foamount"].'"
      data-foremarks2="'.$row["foremarks2"].'"
      data-executiverelationship="'.$row["executiverelationship"].'"
      data-referencename="'.$row["referencename"].'"
      data-refferedby="'.$row["refferedby"].'"
      data-intension="'.$row["intension"].'"
      data-experience="'.$row["experience"].'"
      data-capability="'.$row["capability"].'"
      data-training="'.$row["training"].'"
       data-otherremarks="'.$row["otherremarks"].'"
      data-doc="'.$row["doc"].'"
     
      data-status="'.$row["status"].'"
      data-panelremarks="'.$row["panelremarks"].'"
      data-panelamount="'.$row["panelamount"].'"
    
      data-formid="'.$row["formid"].'"
      data-foremarks="'.$row["foremarks"].'"
  
   


      class="mr-2 edit-modal" data-toggle="modal" data-animation="bounce" data-target=".edit-modal1" ><i class="fas fa-edit text-info font-16"></i></a></br></td>';

$Action2='';
if($row["status"]=='Reimbursed'){
  $Action2='<td>
      <a  
      id="'.$row["caseid"].'" 
      data-contact="'.$row["contact"].'"  
      data-email="'.$row["email"].'" 


      class="mr-2 payment-modal" data-toggle="modal" data-animation="bounce" data-target=".payment-modal1" ><i class="fas fa-edit text-info font-16"></i></a></br></td>';
}
 

      
 

          // $Action = '';
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "Empty2"     => $Action2, 
          "CaseID" => $row["caseid"],
          "DOC" => $row["doc"],
          "casetype" => $row["casetype"],
          "caseDescription" => $row["casedescription"],
          "Name" => $row["name"],
          "Fathersname" => $row["fathersname"],
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