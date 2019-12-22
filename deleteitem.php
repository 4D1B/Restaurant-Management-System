<!DOCTYPE html>
<html>
<body>




<?php

$type= $_REQUEST["ItemType"];
$name= $_REQUEST["ItemName"];
global $data;
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	$sql="DELETE FROM food  WHERE  type = '".$_REQUEST["ItemType"]."'   and name = '".$_REQUEST["ItemName"]."' ";

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