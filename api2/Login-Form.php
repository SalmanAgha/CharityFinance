<?php


if(isset($_POST['email']) &&  isset($_POST['pass']) )
{
	

	$email = filter_var(htmlentities($_POST["email"]),FILTER_SANITIZE_MAGIC_QUOTES); 
	$Password = filter_var(htmlentities($_POST["pass"]),FILTER_SANITIZE_MAGIC_QUOTES); 
	$dbemail = '';
	$dbPassword = '';
	$dbusername = '';
	$dbrole = '';
	$dbid = '';


	$result = array();
	$modules = array();
	$rights = array();

	include('../connect.php');


	$stmt = $connect -> prepare( "Select staffid,email,username,password,status,role from tblstaff where status='Active' and email = ?");
	$stmt -> bind_param("s", $email);

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($result[0]["id"],$result[0]["email"],$result[0]["username"],$result[0]["password"],$result[0]["status"],$result[0]["role"]);
	while ($stmt->fetch()) {
		$dbid = $result[0]["id"];	
		$dbemail = $result[0]["email"];
		$dbPassword = $result[0]["password"];
		$dbusername = $result[0]["username"];
		$dbrole = $result[0]["role"];


	}


	if($dbemail == NULL)
	{
		mysqli_close($connect);
		$data["result"] = "norecord";
		echo json_encode($data);
	}	

	else if(strtoupper($dbemail) == strtoupper($email) &&  $dbPassword == $Password )
	{	

		session_start();
			$_SESSION['userid'] = $dbid;
			$_SESSION['email'] = $dbemail;
			$_SESSION['username'] = $dbusername; 
			$_SESSION['role'] = $dbrole;

$data["username"] = $dbusername;
$data["role"] = $dbrole;
	$data["result"] = "successful";
			echo json_encode($data);
	 
		 
	}	
	else {
		mysqli_close($connect);
		$data["result"] = "incorrect";
		echo json_encode($data);
	}															

}

?>
