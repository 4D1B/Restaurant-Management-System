
<!DOCTYPE html>
<html>
<body>


<br>
<br>
<br>
<br><br>
<br>
<br>
 <center> 
 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">
<?php
$db=array();

$file=fopen("db.txt","r") or die("file error");

while($c=fgets($file)){
	$ar=explode("-",$c);
	
	$db[$ar[3]]=$ar[5];
	
}




$flag=0;
session_start();
foreach($db as $k=>$v){
	if($_REQUEST["email"]==$k && md5($_REQUEST["password"])==$v && md5($_REQUEST["skey"])==md5("00001")){
		echo "Login success";
	//	setcookie("username",$_REQUEST["username"],time()+50000);
		setcookie("email",$_REQUEST["email"],time()+50000);
		$_SESSION["valid"]="yes";
		$_SESSION["email"]=$_REQUEST["email"];
		$flag=1;
		break;
	}
}
if($flag==0){
	echo "<p style='color:red'>Wrong credentials</p>";
	
}
if($flag==1){
	header("Location:menu_admin.php");
}
/*if($_POST["uname"]=="raju" && $_POST["pass"]=="123"){
	echo "Login success";
}
else{
	echo "<p style='color:red'>Wrong credentials</p>";
}*/
?>

<br/><a href="login_new_admin.php">Go Back To Login</a><br/>  
