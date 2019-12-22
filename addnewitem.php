<!DOCTYPE html>
<html>
<body>




<?php

$type= $_REQUEST["ItemType"];
$name= $_REQUEST["ItemName"];
$price= $_REQUEST["Price"];
global $data;
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	
	$sql= "insert into food (type,name,price) VALUES ('".$_REQUEST["ItemType"]."',
	'".$_REQUEST["ItemName"]."','".$_REQUEST["Price"]."')";
	//$sql="Insert into pass from regi where email='".$_REQUEST["email"]."'";
	echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while(mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		//print_r($row);
		$temp["pass"]=$row["pass"];
	//	echo $temp["pass"];
		//echo $_REQUEST["password"];
	if($row["pass"]== $_REQUEST["password"])
	{
		echo $row["pass"];
		echo $_REQUEST["password"];
		echo "Login success";
		
		
	}
	}
	
	
	?>
	
	
	
	</body>
	
<a href="menu_admin.php">Go To Menu</a><br/>