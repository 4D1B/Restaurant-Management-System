<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr["First_Name"]=$row["First_Name"];
	}
	
	return json_encode($arr);
}
if(isset($_REQUEST['email'])){
	$sql="select First_Name from regi where email='".$_REQUEST["email"]."'";
//	echo $sql."<br/>";
	$jsonData= getJSONFromDB($sql);
	echo $jsonData; //this output is the responseText to ajax
}
else{
	echo "invalid parameter";
}
?>