
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

<form action="login_verify_admin.php" method="post">
<middle>
<center-left>
<center>
<h1>Your info to login</h1>
 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">
User Name :
<input value="" type="text" name="email" /><br>
Password  : <input type="password" name="password" /><br>
<br>
Key_Admin  : <input type="password" name="skey" /><br>
<br>
<input type="submit" name="Submit" value="Login" /><br>



<br>



</form>



<?php
session_start();
if(isset($_SESSION["msg"])){
	echo $_SESSION["msg"];
	unset($_SESSION["msg"]);
}
?>

<br/><a href="reg.php">Go Back To home</a><br/>  

<a href="home.php">Home Page</a><br/>