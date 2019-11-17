<?php


	
	
	global $data;
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	//$sql2=
//	"UPDATE regi SET first_name = '".$_REQUEST["First_Name"]."' ,  last_name='".$_REQUEST["Last_Name"]."'
	//,phn='".$_REQUEST["phn"]."'   
//	,dob='".$dob."'   ,pass ='".$_REQUEST["pass"]."'    WHERE  email = '".$_COOKIE["email"]."'" ;
	$sql="DELETE FROM regi  WHERE  email = '".$_COOKIE["email"]."'";
	
	//"select * from user where uname='".$_REQUEST["firs"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		//print_r($row);
		
	}
	
	
	
	
	


 
  ?> 
  
<br/><a href="reg.php">Go Back To Registration</a><br/>  

<br/><a href="login_new_admin.php">Login For Admin</a><br/>

<br/><a href="login_new_customer.php">Login For Customer</a><br/>





