<?php
$data=array();
include("lib.php");
if(isset($_REQUEST["first_name"])){
	//echo $_REQUEST["email"];
	$sql="select * from regi where first_name='".$_REQUEST["first_name"]."'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromXML($_REQUEST["first_name"]);
	//print_r($data);
	foreach($data as $v){
		echo "<p>";
		echo "Email of <b>".$v["first_name"]."</b> is ".$v["email"];
		echo "</p>";
	}
	if(sizeof($data)==0)
		echo "Not found";
}
else if(isset($_REQUEST["email"])){
	$sql="select * from regi where email='".$_REQUEST["email"]."'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromXML($_REQUEST["email"]);
	if(sizeof($data)>0)
		echo "Email taken";
	else
		echo "Email is okay to use";
}
?>