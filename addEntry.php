
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




<?php
print_r($_REQUEST);
$file=fopen('cred.txt','a') or die("fle open error");
$c=0;
if(strlen($_REQUEST["ItemName"])==0 || strlen($_REQUEST["Price"])==0) {
	echo "All fields are mandatory!";
}

else{
	
	fwrite($file,$_REQUEST["ItemName"]);
	fwrite($file,"-");
    
    fwrite($file,$_REQUEST["Price"]);
	fwrite($file,"\r\n");

}
?>
<br/><a href="login.php">Login</a><br/>


?>