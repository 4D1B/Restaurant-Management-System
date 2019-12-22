<?php
$dataSource="mysql";
function loadFromText(){
	global $data;
	$myfile = fopen("text.txt", "r") or die("Unable to open file!");
	$data=array();
	while($line=fgets($myfile)) {	// read all lines until end-of-file
		$ar=explode(" ",$line);
		$data[]=array("id"=>$ar[0],"uname"=>$ar[1],"pass"=>$ar[2],"email"=>$ar[3]);
	}
	//print_r($auth);
}
function loadFromXML($un){
	global $data;
	$data=array();
	$xml=simplexml_load_file("text.xml") or die("Error: Cannot create object");
	foreach($xml->user as $st){
		$ar=array();
		if($un==(string)$st->name || $un==(string)$st->name){
			$ar["skey"]=(string)$st->skey;
			
			$data[]=$ar;
		}
	}
	//print_r($xml);
}
function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		
	//	$ar["first_name"]=$row["first_name"];
	//	$ar["last_name"]=$row["last_name"];
		$ar["pass"]=$row["pass"];
		$ar["email"]=$row["email"];
		$ar["phn"]=$row["phn"];
		$ar["dob"]=$row["dob"];
		$data[]=$ar;
	}
}
?>