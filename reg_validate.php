 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">

<?php

$file=fopen('db.txt','a') or die("fle open error");
$c=0;


$name = $email = $gender = $comment = "";

print_r($_POST);


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST["First_Name"];
$ln=$_POST["Last_Name"];
$phone=$_POST["phn"];
$email=$_POST["email"];
$day=$_POST["day"];
$month=$_POST["month"];
$year=$_POST["year"];
$dob= $day."/".$month."/".$year;
//$gender=$_POST["gender"];
$pwd=$_POST["pass"];
if(isset($_POST['confpass']))
	{
		$rpwd=$_POST["confpass"];
	}

}

if(empty($_POST["First_Name"])){
	
	echo "first name is required";
}


else if(empty($_POST["Last_Name"])){
	
	echo "last name is required";
}


else if(empty($_POST["day"]) || $_POST["day"]==0){
	
	echo "day is require";
}


else if(empty($_POST["month"]) || $_POST["month"]==0){
	
	echo "month is required";
}


else if(empty($_POST["year"]) || $_POST["year"]==0){
	
	echo "year is required";
}

else if(empty($_POST["gender"])){
	
	echo "gender is required";
}


else if(empty($_POST["phn"]) || strlen($_POST["phn"])<11){
	
	echo "11 digit required";
}


else if(empty($_POST["email"]) || (strpos($email, '@') == false)){
	
	echo "email is required";
}


else if( empty($_POST["pass"])  || empty($rpwd)  || ($_POST["pass"] !== $rpwd) || strlen($_POST["pass"]) <8 ){
	echo $pwd;
	echo $rpwd;
	echo "8 digit password is required or password is not macthed";
}




	


else{
	$c=$c+fwrite($file,"\r\n");
	$c=$c+fwrite($file,$_REQUEST["First_Name"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["Last_Name"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["phn"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["email"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$dob);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,md5($_REQUEST["pass"]));
	
}
echo "<br/>";
echo $c." charactes appended";
 
  ?> 
  
<br/><a href="reg.php">Go Back To Registration</a><br/>  

<br/><a href="login_new_admin.php">Login For Admin</a><br/>

<br/><a href="login_new_customer.php">Login For Customer</a><br/>





