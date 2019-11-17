 
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
print_r($_REQUEST);
$file=fopen('burgerdb.txt','a') or die("fle open error");
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


<br/><a href="menu_admin.php">Go To Menu</a><br/>


