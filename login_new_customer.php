
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

<form action="login_verify_customer.php" method="post">



<center>
<h1>Your info to login</h1>
 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">
User Name :
<input value="" type="text" name="email" /><br>
Name :
<input value="" type="text" name="username" /><br>
Password  : 
<input type="password" name="password" /><br>
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


<a href="home.php">Home Page</a><br/>