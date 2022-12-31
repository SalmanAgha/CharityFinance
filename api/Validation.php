<?php
if( isset($_POST["caseid"])    )
{   

  include("../connect.php");
  $result=''; 
  $caseid = htmlentities($_POST["caseid"]); 
  

  include("../connect.php"); 

  if($connect)
  {

    $query = mysqli_query($connect,"SELECT `caseid`, `noofmales`, `nooffemales`, `noofdependents`, `noofpersonearning`, `familyincome`, `monthlyration`, `monthlyhealthcare`, `monthlyeducation`, `otherexpenses`, `totalexpenses`, `monthlysirplusdeficit`, `cashbank`, `goldsilver`, `provisionalfund`, `paidcommittee`, `securitydeposit`, `loangiven`, `othercurrency`, `tradeassets`, `unnecessaryflats`, `extramobilephones`, `extravehicles`, `extralivestocks`, `totalcountableassets`, `rentpayable`, `securitydepositpayable`, `payableamountcommittee`, `utilitybillspayable`, `loanpayable`, `ttldductliabilities`, `totaldeductableliabiliities`, `netcoutableassets`, `currentzakatevaluation`, `muslim`, `syed`, `agakani`, `zakatevaluation`, `amountapplied`, `foamount`, `foremarks2`, `executiverelationship`, `referencename`, `refferedby`, `intension`, `experience`, `capability`, `training`, `otherremarks`, `doc`, `casetype`, `casedescription`, `name`, `fathersname`, `cnic`, `contact`, `email`, `status`, `panelremarks`, `panelamount`, `netsalary`, `address`, `formid`, `foremarks`, `nob`, `nobdesc`, `city` FROM `checking` WHERE caseid = ".$caseid.";");

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

     $data ["caseid"] = $row["caseid"];
        $data ["email"] = $row["email"];
        $data ["name"] = $row["name"];
        $data ["fathersname"] = $row["fathersname"];
        $data ["contact"] = $row["contact"];
        $data ["cnic"] = $row["cnic"];
        $data ["casetype"] = $row["casetype"];
        $data ["casedesc"] = $row["casedescription"];
        $data ["netsalary"] = $row["netsalary"];
        $data ["address"] = $row["address"];
        $data ["nob"] = $row["nob"];
        $data ["nobdesc"] = $row["nobdesc"];
        $data ["city"] = $row["city"];
        $data ["noofmales"] = $row["noofmales"];
        $data ["nooffemales"] = $row["nooffemales"];
        $data ["noofdependents"] = $row["noofdependents"];
        $data ["noofpersonearning"] = $row["noofpersonearning"];
        $data ["familyincome"] = $row["familyincome"];
        $data ["monthlyration"] = $row["monthlyration"];
        $data ["monthlyhealthcare"] = $row["monthlyhealthcare"];
        $data ["monthlyeducation"] = $row["monthlyeducation"];
        $data ["otherexpenses"] = $row["otherexpenses"];
        $data ["totalexpenses"] = $row["totalexpenses"];
        $data ["monthlysirplusdeficit"] = $row["monthlysirplusdeficit"];
        $data ["cashbank"] = $row["cashbank"];
        $data ["goldsilver"] = $row["goldsilver"];
        $data ["provisionalfund"] = $row["provisionalfund"];
        $data ["paidcommittee"] = $row["paidcommittee"];
        $data ["securitydeposit"] = $row["securitydeposit"];
        $data ["loangiven"] = $row["loangiven"];
        $data ["othercurrency"] = $row["othercurrency"];
        $data ["tradeassets"] = $row["tradeassets"];
        $data ["unnecessaryflats"] = $row["unnecessaryflats"];
        $data ["extramobilephones"] = $row["extramobilephones"];
        $data ["extravehicles"] = $row["extravehicles"];
        $data ["extralivestocks"] = $row["extralivestocks"];
        $data ["totalcountableassets"] = $row["totalcountableassets"];
        $data ["rentpayable"] = $row["rentpayable"];
        $data ["securitydepositpayable"] = $row["securitydepositpayable"];
        $data ["payableamountcommittee"] = $row["payableamountcommittee"];
        $data ["utilitybillspayable"] = $row["utilitybillspayable"];
        $data ["loanpayable"] = $row["loanpayable"];
        $data ["ttldductliabilities"] = $row["ttldductliabilities"];
        $data ["netcoutableassets"] = $row["netcoutableassets"];
        $data ["currentzakatevaluation"] = $row["currentzakatevaluation"];
        $data ["muslim"] = $row["muslim"];
        $data ["syed"] = $row["syed"];
        $data ["agakani"] = $row["agakani"];
        $data ["zakatevaluation"] = $row["zakatevaluation"];
        $data ["executiverelationship"] = $row["executiverelationship"];
        $data ["referencename"] = $row["referencename"];
        $data ["refferedby"] = $row["refferedby"];
        $data ["intension"] = $row["intension"];
        $data ["experience"] = $row["experience"];
        $data ["capability"] = $row["capability"];
        $data ["training"] = $row["training"];
        $data ["otherremarks"] = $row["otherremarks"];

 
}
}
  // Close database connection
mysqli_close($connect);
}




$data ["result"] = $result; 
echo json_encode($data);
}
?>