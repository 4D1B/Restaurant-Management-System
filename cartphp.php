<?php
session_start();

print_r($_REQUEST);
if(isset($_REQUEST['data'])){
if(!empty($_REQUEST['data'])) {
// Counting number of checked checkboxes.
$count = count($_REQUEST['data']);
echo "You have selected following ".$count." option(s): <br/>";


}}
foreach($_REQUEST['data'] as $qty){
global $data;
	//echo $qty;
   // print_r($_REQUEST);
	$conn = mysqli_connect("localhost", "root","","fooddb");
	$sql2= "insert into cart(username,item)	VALUES('".$_SESSION["email"]."', '".$qty."')";
//
//	$sql="select * from user where uname='".$_REQUEST["firs"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		print_r($row);
		//$temp["first_name"]=$row["first_name"];
	//	$temp["last_name"]=$row["last_name"];
//		$temp["phn"]=$row["phn"];
		
	}
}
	

	

	?>